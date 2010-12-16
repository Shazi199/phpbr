<?php


if(!defined('IN_GAME')) {
	exit('Access Denied');
}

function getword(){
	global $db,$tablepre,$name,$motto,$lastword,$killmsg;
	
	$result = $db->query("SELECT * FROM {$tablepre}users WHERE username='$name'");
	$userinfo = $db->fetch_array($result);
	$motto = $userinfo['motto'];
	$lastword = $userinfo['lastword'];
	$killmsg = $userinfo['killmsg'];
	
}

function chgword($nmotto,$nlastword,$nkillmsg) {
	global $db,$tablepre,$name,$log;
	
	$result = $db->query("SELECT * FROM {$tablepre}users WHERE username='$name'");
	$userinfo = $db->fetch_array($result);
	if($nmotto != $userinfo['motto']) {
		$log .= "口头禅变更为 <span class=\"yellow\">$nmotto</span> 。<br>";
	}
	if($nlastword != $userinfo['lastword']) {
		$log .= "遗言变更为 <span class=\"yellow\">$nlastword</span> 。<br>";
	}
	if($nkillmsg != $userinfo['killmsg']) {
		$log .= "留言变更为 <span class=\"yellow\">$nkillmsg</span> 。<br>";
	}

	$db->query("UPDATE {$tablepre}users SET motto='$nmotto', lastword='$nlastword', killmsg='$nkillmsg' WHERE username='$name'");
	
	$mode = 'command';
	return;
}

function chginf($infpos){
	global $log,$mode,$inf,$inf_sp,$sp,$infinfo;

	if(!$infpos){$mode = 'command';return;}
	if(strpos($inf,$infpos) !== false) {
		if($sp <= $inf_sp) {
			$log .= '体力不足，无法包扎伤口，先休息一下吧！';
			$mode = 'command';
			return;
		} else {
			$inf = str_replace($infpos,'',$inf);
			$sp -= $inf_sp;
			$log .= "<span class=\"red\">$infinfo[$infpos]部</span> 的伤口已经包扎好了！";
			$mode = 'command';
			return;
		}
	}
}

function chkpoison($itmn){
	global $log,$mode,$club;
	if($club != 8){
		$log .= '你不会查毒。';
		$mode = 'command';
		return;
	}

	if ( $itmn < 1 || $itmn > 5 ) {
		$log .= '此道具不存在，请重新选择。';
		$mode = 'command';
		return;
	}

	global ${'itm'.$itmn},${'itmk'.$itmn},${'itme'.$itmn},${'itms'.$itmn},${'itmsk'.$itmn};
	$itm = & ${'itm'.$itmn};
	$itmk = & ${'itmk'.$itmn};
	$itme = & ${'itme'.$itmn};
	$itms = & ${'itms'.$itmn};
	$itmsk = & ${'itmsk'.$itmn};

	if(!$itms) {
		$log .= '此道具不存在，请重新选择。<br>';
		$mode = 'command';
		return;
	}
	
	if(strpos($itmk,'P') === 0) {
		$log .= "<span class=\"red\">$itm 有毒！</span>";
	} else {
		$log .= "<span class=\"yellow\">$itm 是安全的。</span>";
	}
	$mode = 'command';
	return;
}


function shoplist($sn) {
	global $gamecfg,$mode,$itemdata,$areanum,$areaadd;
	$file = GAME_ROOT."./gamedata/shopitem/{$sn}shopitem.php";
	$itemlist = openfile($file);
	$in = count($itemlist);
	for($i=1;$i<$in;$i++){
		list($num,$price,$iname,$ikind,$ieff,$ista,$isk) = explode(',',$itemlist[$i]);
		if(($num<=0)||($price<=0)){
			$itemdata[$i] = '';
		} elseif (strpos($ikind,'_') !== false) {
			list($ik,$it) = explode('_',$ikind);
			if($areanum < $it*$areaadd) {
				$itemdata[$i] = '';
			} else {
				$itemdata[$i] = array($i,$num,$price,$iname,$ik,$ieff,$ista,$isk);
			}
		} else {
			$itemdata[$i] = array($i,$num,$price,$iname,$ikind,$ieff,$ista,$isk);
		}
	}
	$mode = 'shop';

	return;

}

?>