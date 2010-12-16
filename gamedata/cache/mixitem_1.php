<?php
if(!defined('IN_GAME')) exit('Access Denied');

$mixinfo = array
	( 
	array('stuff' => array('轻油','肥料'),'result' => array('火药','X',1,1,''),),
	array('stuff' => array('水','地雷'),'result' => array('水鸳鸯','WD',20,24,''),),
	array('stuff' => array('灯油','钉'),'result' => array('☆仙女棒☆','WD',50,50),),
	array('stuff' => array('雷达用电池','打火机'),'result' => array('☆自爆电池☆','WD',140,15,),),
	array('stuff' => array('汽油','空瓶'),'result' => array('☆火焰瓶☆','WD',50,20,),),
	array('stuff' => array('信管','火药'),'result' => array('★炸药★','WD',70,18,),),
	array('stuff' => array('导火线','火药'),'result' => array('★炸药★','WD',70,18,),),
	array('stuff' => array('喷雾器罐','打火机'),'result' => array('★简易火焰放射器★','WG',96,12,),),
	array('stuff' => array('简易雷达','天线'),'result' => array('雷达','R',1,1,2),),
	array('stuff' => array('安雅人体冰雕','解冻药水'),'result' => array('武器师安雅的奖赏','Y',1,1,),),
	array('stuff' => array('手机','笔记本电脑'),'result' => array('移动PC','Y',1,1,),),
	array('stuff' => array('杂炊','松茸'),'result' => array('松茸御饭','HS',150,3,),),
	array('stuff' => array('咖喱','面包'),'result' => array('咖喱面包','HH',150,2,),),
	array('stuff' => array('牛奶','立顿茶包','糯米丸子'),'result' => array('珍珠奶茶','HB',200,4,),),
	array('stuff' => array('《小黄的草帽》','《小黄的钓鱼竿》','《小黄的行军靴》'),'result' => array('《小黄的精灵球》','WC',233,∞,),),
	array('stuff' => array('《小黄的精灵球》','《小黄的收服特训》'),'result' => array('《小黄的超级球》','WC',233,∞,r),),
	//array('stuff' => array('桔黄色的果酱','面包'),'result' => array('不甜的果酱面包','HB',300,5,),),
	array('stuff' => array('月宫 亚由的半身像','神尾 观铃的半身像','古河 渚的半身像'),'result' => array('四季流转的咏叹调','WP',750,1,),),
	array('stuff' => array('天泽 郁末的半身像','长森 瑞佳的半身像','枣 铃的半身像'),'result' => array('旁观轮回的覆唱诗','WK',750,1,),),
	array('stuff' => array('神北 小毬的半身像','一之濑 琴美的半身像','SSS团长的半身像'),'result' => array('天然属性也是很可怕的！','WD',159,3,),),
	array('stuff' => array('四季流转的咏叹调','旁观轮回的覆唱诗'),'result' => array('KEY催泪弹','WD',1800,2,),),
	array('stuff' => array('恐龙玩偶','天使玩偶','团子玩偶'),'result' => array('观铃的嘎哦嘎哦恐龙喷火分队','WG',217,40,),),
	array('stuff' => array('早苗面包','像围棋子一样的饼干','浓厚粘稠果汁'),'result' => array('KEY系儿童套餐','HB',1000,2,),),
	array('stuff' => array('红色方块','绿色方块','蓝色方块'),'result' => array('纯真之剑','WK',61,61,),),
	array('stuff' => array('红色方块','黄色方块','金色方块'),'result' => array('热情之枪','WC',51,55,),),
	array('stuff' => array('蓝色方块','黄色方块','水晶方块'),'result' => array('温柔的关怀','HB',150,80,),),
	array('stuff' => array('金色方块','银色方块','水晶方块'),'result' => array('喷发的斗志','WD',88,50,),),
	array('stuff' => array('绿色方块','银色方块'),'result' => array('炙热的手套','DA',81,20,),),
	array('stuff' => array('红色方块','黄色方块'),'result' => array('坚强戒指','DA',80,22,),),
	array('stuff' => array('金色方块','水晶方块'),'result' => array('活力之靴','DF',79,24,),),
	array('stuff' => array('红色方块','银色方块'),'result' => array('红宝石方块','X',1,1,),),
	array('stuff' => array('金色方块','绿色方块'),'result' => array('蓝宝石方块','X',1,1,),),
	array('stuff' => array('蓝色方块','黄色方块'),'result' => array('绿宝石方块','X',1,1,),),
	array('stuff' => array('红宝石方块','蓝宝石方块'),'result' => array('绿宝石方块','X',1,1,),),
	array('stuff' => array('绿宝石方块','黄色方块'),'result' => array('黄色的宝石枪','WG',150,150,),),
	array('stuff' => array('绿宝石方块','红色方块'),'result' => array('红色的宝石刀','WK',150,150,),),
	array('stuff' => array('绿宝石方块','蓝色方块'),'result' => array('蓝色的宝石锤','WP',150,150,),),
	array('stuff' => array('绿宝石方块','绿色方块'),'result' => array('绿色的宝石镖','WC',150,150,),),
	array('stuff' => array('绿宝石方块','金色方块'),'result' => array('金色的宝石炸弹','WD',140,50,),),
	array('stuff' => array('绿宝石方块','银色方块'),'result' => array('银色的宝石护甲','DB',150,150,),),
	array('stuff' => array('绿宝石方块','水晶方块'),'result' => array('水晶宝石盾','DA',150,150,),),
	array('stuff' => array('绿宝石方块','红宝石方块'),'result' => array('珍珠头盔','DH',150,150,),),
	array('stuff' => array('绿宝石方块','蓝宝石方块'),'result' => array('钻石靴子','DF',150,150,),),
	array('stuff' => array('红宝石方块','红色方块'),'result' => array('粉红色的项链','AF',150,150,),),
	array('stuff' => array('蓝宝石方块','蓝色方块'),'result' => array('深蓝色的项链','AM',150,150,),),
	array('stuff' => array('黄色方块','黄色方块','黄色方块'),'result' => array('不可思议之刀','WK',100,100,),),
	array('stuff' => array('红色方块','红色方块','红色方块'),'result' => array('不可思议之枪','WG',100,100,),),
	array('stuff' => array('绿色方块','绿色方块','绿色方块'),'result' => array('不可思议之斧','WP',100,100,),),
	array('stuff' => array('蓝色方块','蓝色方块','蓝色方块'),'result' => array('不可思议之魂','WD',100,100,),),
	array('stuff' => array('金色方块','金色方块','金色方块'),'result' => array('不可思议之镖','WK',100,100,),),
	array('stuff' => array('水晶方块','水晶方块','水晶方块'),'result' => array('绿宝石方块','X',3,3,),),
	array('stuff' => array('幻之使魔','永恒之桶'),'result' => array('灵魂的结晶','WC',180,90,),),
	array('stuff' => array('针筒','疗伤药'),'result' => array('治疗针','HH',120,2,),),
	array('stuff' => array('针筒','毒药'),'result' => array('毒针','WK',35,5,p),),
	array('stuff' => array('喷雾器罐','毒药'),'result' => array('简易毒气弹','WD',70,5,p),),
	);
?>