<?php
if(!defined('IN_GAME')) {
	exit('Access Denied');
}

function event(){
	global $mode,$log,$hp,$sp,$inf,$pls,$rage;

	$dice1 = rand(0,5);
	$dice2 = rand(20,40);//原为rand(5,10)
	
	if($pls == 0) { //无月之影
	} elseif($pls == 1) { //端点
	} elseif($pls == 2) { //现RF高校
		$log = ($log . "突然，一个戴着面具的怪人出现了！<BR>");
		if($dice1 == 2){
			$log = ($log . "“呜嘛呜——！”<br>被怪人打中了头！<BR>");
			$inf = str_replace('h','',$inf);
			$inf = ($inf . 'h');
		}elseif($dice1 == 3){
			$log = ($log . "“呜嘛呜——！”<br>被怪人打中了，受到<span class=\"red b\">{$dice2}</span>点伤害！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "呼，总算逃脱了。<BR>");
		}
	} elseif($pls == 3) { //雪之镇
	} elseif($pls == 4) { //索拉利斯
	} elseif($pls == 5) { //指挥中心
	} elseif($pls == 6) { //梦幻馆
	} elseif($pls == 7) { //清水池
		$log = ($log . "糟糕，脚下滑了一下！<BR>");
		if($dice1 <= 3){
			$dice2 += 10;
			if($sp <= $dice2){
				$dice2 = $sp-1;
			}
			$sp-=$dice2;
			$log = ($log . "掉下池中了，不过，已努力爬了上来！<BR>体力减少<span class=\"red b\">{$dice2}</span>点。<BR>");
		}else{
			$log = ($log . "呼...幸好没掉下水池...<BR>");
		}
	} elseif($pls == 8) { //白穗神社
	} elseif($pls == 9) { //墓地
	} elseif($pls == 10) { //麦斯克林
	} elseif($pls == 11) { //央中电视台 - 现对天使用作战本部
		$log = ($log . "哇！一个大锤向你锤来！<BR>");
		if($dice1 == 2){
			$log = ($log . "大锤落到了脚上，很疼的样子。<BR>");
			$inf = str_replace('f','',$inf);
			$inf = ($inf . "f");
		}elseif($dice1 == 3){
			$log = ($log . "你被击飞出了窗外，受到<span class=\"red b\">{$dice2}</span>点伤害！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "呼...总算是避开了...<BR>");
		}
	} elseif($pls == 12) { //夏之镇
		$log = ($log . "突然，天空出现一大群乌鸦！<BR>");
		if($dice1 == 2){
			$log = ($log . "被乌鸦袭击，头部受了伤！<BR>");
			$inf = str_replace('h','',$inf);
			$inf = ($inf . "h");
		}elseif($dice1 == 3){
			$log = ($log . "被乌鸦袭击，受到<span class=\"red b\">{$dice2}</span>点伤害！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "呼，总算击退了。<BR>");
		}
	} elseif($pls == 13) { //三体星
	} elseif($pls == 14) { //光坂高校
	} elseif($pls == 15) { //守矢神社
		$log = ($log . "突然有妖怪袭击你！<BR>");
		if($dice1 == 2){
			$log = ($log . "被妖怪吓着了！你惊慌中撞伤了自己的头部！<BR>");
			$inf = str_replace('h','',$inf);
			$inf = ($inf . "h");
		}elseif($dice1 == 3){
			$log = ($log . "妖怪的弹幕使你受到<span class=\"red b\">{$dice2}</span>点伤害！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "呼，所谓妖怪不过是个撑着紫伞的少女而已，没什么可害怕的。<BR>");
		}
	} elseif($pls == 16) { //常磐森林
		$log = ($log . "野生的皮卡丘从草丛中钻出来了！<BR>");
		if($dice1 == 2){
			$log = ($log . "皮卡丘使用了电击！手臂麻痹了！<BR>");
			$inf = str_replace('a','',$inf);
			$inf = ($inf . "a");
		}elseif($dice1 == 3){
			$log = ($log . "皮卡丘使用了电光石火！受到<span class=\"red b\">{$dice2}</span>点伤害！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "成功地逃跑了。<BR>");
		}
	} elseif($pls == 17) { //常磐台中学
	} elseif($pls == 18) { //秋之镇
		$log = ($log . "突然，天空出现一大群乌鸦！<BR>");
		if($dice1 == 2){
			$log = ($log . "被乌鸦袭击，头部受了伤！<BR>");
			$inf = str_replace('h','',$inf);
			$inf = ($inf . 'h');
		}elseif($dice1 == 3){
			$log = ($log . "被乌鸦袭击，受到<span class=\"red b\">{$dice2}</span>点伤害！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "呼，总算击退了。<BR>");
		}

	} elseif($pls == 19) { //精灵中心
	} elseif($pls == 20) { //春之镇
	} elseif($pls == 21) { //圣Gradius学园
		$log = ($log . "隶属于时空部门G的特殊部队『天使』正在实弹演习！<BR>你被卷入了弹幕中！<BR>");
		if($dice1 == 1){
			$log = ($log . "在弹幕的狂风中，你有惊无险地回避着弹幕，总算擦弹成功了。<BR>");
			if($dice2 >=36){
				$log = ($log . "咦，头顶上……好像有一名少女被弹幕击中了……？<BR>“对不起、对不起！”伴随着焦急的道歉声，少女以及她乘坐的机体向你笔直坠落下来。<br>你还来不及反应，重达数十吨的机体便直接落在了你的头上。<br>");
				include_once GAME_ROOT . './include/state.func.php';
				death('gradius');
				return;
			}
		}
		else{
			$log = ($log . "在弹幕的狂风中，你徒劳地试图回避弹幕……<BR>擦弹什么的根本做不到啊！<BR>你被少女们打成了筛子！<BR>");
			$inf = str_replace('hbaf','',$inf);
			$inf = ($inf . "hbaf");
			if($dice2 >= 39){
				$log = ($log . "并且，少女们的弹幕击中了要害！<BR>你感觉小命差点就交代在这里了。<BR>");
				$hp = 1;
			}
			elseif($dice2 >= 34){
				$log = ($log . "并且，黑洞激光造成你冻结了！<BR>");
				$inf = str_replace('i','',$inf);
				$inf = ($inf . "i");
			}
			elseif($dice2 >= 29){
				$log = ($log . "并且，环形激光导致你烧伤了！<BR>");
				$inf = str_replace('u','',$inf);
				$inf = ($inf . "u");
			}
			elseif($dice2 >= 24){
				$log = ($log . "并且，精神震荡弹导致你全身麻痹了！<BR>");
				$inf = str_replace('e','',$inf);
				$inf = ($inf . "e");
			}
			else{
				$log = ($log . "并且，干扰用强袭装备导致你中毒了！<BR>");
				$inf = str_replace('p','',$inf);
				$inf = ($inf . "p");
			}
			$log = ($log . "你遍体鳞伤、连滚带爬地逃走了。<BR>");
		}
	} elseif($pls == 22) { //初始之树
	} elseif($pls == 23) { //幻想世界
	} elseif($pls == 24) { //永恒的世界
	} elseif($pls == 25) { //妖精驿站
	} elseif($pls == 26) { //键刃墓场
	} elseif($pls == 27) { //花菱商厦
	} elseif($pls == 28) { //FARGO前基地
	} elseif($pls == 29) { //风祭森林
	} else {
	}

	if($hp<=0){
//		global $now,$alivenum,$deathnum,$name,$state;
//		$hp = 0;
//		$state = 13;
//		naddnews($now,'death13',$name,0);
//		$alivenum--;
//		$deathnum++;
//		include_once GAME_ROOT.'./include/system.func.php';
//		save_gameinfo();
		include_once GAME_ROOT . './include/state.func.php';
		death('event');
	}
	return;
}

?>