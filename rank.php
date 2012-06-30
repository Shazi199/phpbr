<?php

define('CURSCRIPT', 'rank');

require './include/common.inc.php';
require './include/game.func.php';

$result = $db->query("SELECT COUNT(*) FROM {$tablepre}users");
$count = $db->result($result,0);
if($ranklimit < 1){$ranklimit = 1;}
$ostart = -1;
if(!isset($command) || !isset($start) || $start < 0) {
	$ostart = $start = 0;
}elseif($command == 'last'){
	$ostart = $start;
	$start -= $ranklimit;
}elseif($command == 'next'){
	$ostart = $start;
	$start += $ranklimit;
}

if($count == 0){gexit('No data!');}
if($start < 0){$start = 0;}
elseif($start + $ranklimit > $count){
	if($count - $ranklimit >= 0){
		$start = $count - $ranklimit;
	}else{
		$start = 0;
	}
}


//elseif($start + $ranklimit > $count){$ranklimit = $count - $start;}

$startnum = $start + 1;
if($start + $ranklimit > $count){
	$endnum = $count;
}else{
	$endnum = $start + $ranklimit;
}

if(!isset($command) || $start != $ostart){
	if(!isset($checkmode) || $checkmode == 'credits'){
		$result = $db->query("SELECT * FROM {$tablepre}users WHERE validgames>0 ORDER BY credits DESC, wingames DESC, uid ASC LIMIT $start,$ranklimit");
	}elseif($checkmode == 'winrate'){
		$mingames = $winratemingames >= 1 ? $winratemingames : 1;
		$result = $db->query("SELECT * FROM {$tablepre}users WHERE validgames>='$mingames' ORDER BY (wingames/validgames) DESC, credits DESC, uid ASC LIMIT $start,$ranklimit");
	}	
	$rankdata = Array();
	$n = $start+1;
	while($data = $db->fetch_array($result)){
		$data['img'] = $data['gender'] == 'm' ? 'm_'.$data['icon'].'.gif' : 'f_'.$data['icon'].'.gif';
		//$data['motto'] = $data['motto'] ? rep_label($data['motto']) : '';
		//$data['slhonour'] = $data['honour'] ? init_honourwords($data['honour'],99) : '';
		//$data['honour'] = $data['honour'] ? init_honourwords($data['honour']) : '';
		$data['number'] = $n;
		$data['winrate'] = $data['wingames'] ? round($data['wingames']/$data['validgames']*100).'%' : '0%';
		$n++;
		$rankdata[] = $data;
	}
		
	if(isset($command)){
		include template('rankinfo');
		$showdata['innerHTML']['rank'] = ob_get_contents();
		ob_clean();
		$showdata['innerHTML']['startnum'] = $startnum;
		$showdata['innerHTML']['endnum'] = $endnum;
		if(isset($error)){$showdata['innerHTML']['error'] = $error;}
		$showdata['value']['checkmode'] = $checkmode;
		//$showdata['innerHTML']['pageinfo'] = "第<span class=\"yellow\">$startnum</span>条至第<span class=\"yellow\">$endnum</span>条";
		$showdata['value']['start'] = $start;
		$jgamedata = compatible_json_encode($showdata);
		echo $jgamedata;
		ob_end_flush();
	}else{
		include template('rank');
	}
}
//else{
//	$showdata['innerHTML']['notice'] = '不需要！';
//	ob_clean();
//	$jgamedata = compatible_json_encode($showdata);
//	echo $jgamedata;
//	ob_end_flush();
//}




?>