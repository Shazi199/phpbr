<?php
/*Game Config*/

//禁区间隔时间,单位 小时
$areahour = 1;
//每次间隔增加的禁区数量
$areaadd = 5;
//玩家激活结束时的增加禁区的回数，相当于已经进行的小时数/间隔时间，〉0
$arealimit = 3;
//是否自动逃避禁区 0=只有重视躲避自动躲避，1=所有玩家自动躲避，适合新手较多，不了解禁区机制
$areaesc = 0;
//是否开启死斗模式 0=关闭,1=开启。连斗后下次禁区，进入死斗状态，死斗后玩家只会遇到玩家，死斗后所有区域都将一次性宣布为禁区。（尚未完成）
$isduel = 0;

//本局游戏人数限制
$validlimit = 150;
//连斗时的人数限制
$combolimit = 15;
//连斗时的死亡人数限制
$deathlimit = 50;
 
// 等级提升基本经验值 
$baseexp = 9;
// 初始耐力最大值 
$splimit = 400;
// 初始生命最大值 
$hplimit = 400;
// 怒气最大值 
$mrage = 500;
//携带金钱上限
$moneylimit = 65500;

// 恢复量的设定
//体力恢复时间(秒):*秒1点恢复
$sleep_time = 4;
//生命恢复时间(秒):*秒1点恢复
$heal_time = 8;
//包扎伤口需要的体力
$inf_sp = 25;
//创建队伍需要的体力
$team_sp = 50;
//加入队伍需要的体力
$teamj_sp = 25;
//队伍最大人数
$teamlimit = 5;

//随机事件几率(百分比)
$event_obbs = 10;
//道具发现基础几率(百分比)
$item_obbs = 60;
//敌人发现基础几率(百分比)
$enemy_obbs = 70;
//尸体发现几率（百分比）
$corpse_obbs = 50;
//基础先攻率
$active_obbs = 50;
//基础反击率
$counter_obbs = 50;

//受伤状态的设定
//h-头部受伤，b-身体受伤,a-手腕受伤，f-足部受伤，p-中毒，u-烧伤，i-冻结，e-麻痹
//各种受伤状态对移动消耗体力的影响
$inf_move_sp = Array('f'=> 10, 'i'=> 20,'e'=> 5);
//各种受伤状态对探索消耗体力的影响
$inf_search_sp = Array('a'=> 10, 'i'=> 20,'e'=> 5);
//各种受伤状态移动时消耗的生命力，百分比
$inf_move_hp = Array('p'=> 0.0625, 'u'=> 0.0625);
//各种受伤状态探索时消耗的生命力，百分比
$inf_search_hp = Array('p'=> 0.03125, 'u'=> 0.03125);
//hack基础成功率
$hack_obbs = 40;


?>