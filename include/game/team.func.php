<?php


if(!defined('IN_GAME')) {
	exit('Access Denied');
}

function teammake($tID,$tPass) {
	global $log,$mode,$teamID,$teamPass,$db,$tablepre,$noitm,$sp,$team_sp,$now,$name,$gamestate;
	if($gamestate >= 40) {
		$log .= '连斗时不能组建队伍。<br>';
		$mode = 'command';
		return;
	}

	if(!$tID || !$tPass) {
		$log .= '队伍名和密码不能为空，请重新输入。<br>';
		$mode = 'command';
		return;
	}
	if(strlen($tID) > 20){
		$log .= '队伍名称过长，请重新输入。<br>';
		$mode = 'command';
		return;
	}
	if(strlen($tPass) > 20){
		$log .= '队伍密码过长，请重新输入。<br>';
		$mode = 'command';
		return;
	}
	if($tID == $noitm) {
		$log .= "队伍名不能为 <span class=\"red\">$tID</span> ，请重新输入。<br>";
		$mode = 'command';
		return;
	}
		
	if($teamID) {
		$log .= "你已经加入了队伍 <span class=\"yellow\">$teamID</span> ，请先退出队伍。<br>";
	} elseif($sp <= $teamsp) {
		$log .= "体力不足，不能创建队伍。至少需要 <span class=\"yellow\">$team_sp</span> 点体力。<br>";
	} else {
		$result = $db->query("SELECT pid FROM {$tablepre}players WHERE teamID='$tID'");
		if($db->num_rows($result)){
			$log .= "队伍 <span class=\"yellow\">$tID</span> 已经存在，请更换队伍名。<br>";
		} else {
			$teamID = $tID;
			$teamPass = $tPass;
			$log .= "你创建了队伍 <span class=\"yellow\">$teamID</span> 。<br>";
			addnews($now,'teammake',$teamID,$name);
			global $gamedata,$chatinfo;
			$gamedata['chattype'] = "<select name=\"chattype\" value=\"2\"><option value=\"0\" selected>$chatinfo[0]<option value=\"1\" >$chatinfo[1]</select>";
			$gamedata['team'] = $teamID;
		}
	$mode = 'command';
	return;

	}
}

function teamjoin($tID,$tPass) {
	global $log,$mode,$teamID,$teamPass,$db,$tablepre,$noitm,$sp,$team_sp,$now,$name,$teamlimit,$teamj_sp,$sp,$gamestate;
	if($gamestate >= 40) {
		$log .= '连斗时不能加入队伍。<br>';
		$mode = 'command';
		return;
	}
	if(!$tID || !$tPass){
		$log .= '队伍名和密码不能为空，请重新输入。<br>';
		$mode = 'command';
		return;
	}
	if(strlen($tID) > 20){
		$log .= '队伍名称过长，请重新输入。<br>';
		$mode = 'command';
		return;
	}
	if(strlen($tPass) > 20){
		$log .= '队伍密码过长，请重新输入。<br>';
		$mode = 'command';
		return;
	}
	if($tID == $noitm) {
		$log .= "队伍名不能为 <span class=\"red\">$tID</span> ，请重新输入。<br>";
		$mode = 'command';
		return;
	}

	if($teamID) {
		$log .= "你已经加入了队伍 <span class=\"yellow\">$teamID</span> ，请先退出队伍。<br>";
	} elseif($sp <= $teamj_sp) {
		$log .= "体力不足，不能加入队伍。至少需要 <span class=\"yellow\">$teamj_sp</span> 点体力。<br>";
	} else {
		$result = $db->query("SELECT teamPass FROM {$tablepre}players WHERE teamID='$tID'");
		if(!$db->num_rows($result)){
			$log .= "队伍 <span class=\"yellow\">$tID</span> 不存在，请先创建队伍。<br>";
		} elseif($db->num_rows($result) >= $teamlimit) {
			$log .= "队伍 <span class=\"yellow\">$tID</span> 人数已满，请更换队伍。<br>";
		} else {
			$password = $db->result($result,0);
			if($tPass == $password) {
				$teamID = $tID;
				$teamPass = $tPass;
				$log .= "你加入了队伍 <span class=\"yellow\">$teamID</span> 。<br>";
				addnews($now,'teamjoin',$teamID,$name);
				global $gamedata,$chatinfo;
				$gamedata['chattype'] = "<select name=\"chattype\" value=\"2\"><option value=\"0\" selected>$chatinfo[0]<option value=\"1\" >$chatinfo[1]</select>";
				$gamedata['team'] = $teamID;
			} else {
				$log .= "密码错误，不能加入队伍 <span class=\"yellow\">$tID</span> 。<br>";
			}
		}
	}

	$mode = 'command';
	return;
}

function teamquit() {
	global $log,$mode,$teamID,$teamPass,$now,$name;

	if($teamID){
		$log .= "你退出了队伍 <span class=\"yellow\">$teamID</span> 。<br>";
		addnews($now,'teamquit',$teamID,$name);
		$teamID =$teamPass = '';
		global $gamedata,$chatinfo;
		$gamedata['chattype'] = "<select name=\"chattype\" value=\"2\"><option value=\"0\" selected>$chatinfo[0]</select>";
	} else {
		$log .= '你不在队伍中。<br>';
	}
	$mode = 'command';
	return;
}

?>