<?php

/*Game system settings*/

//文件验证字符串
$checkstr = "<? if(!defined('IN_GAME')) exit('Access Denied'); ?>\n";
//是否允许游客进入插件。0=不允许，1=允许
$isLogin = 1;
//是否缓存css文件。0=不缓存，1=缓存
$allowcsscache = 1;
//站长留言
$adminmsg = '';
//游戏开始方式 0=后台手动开始，1=每天固定时间始，2=上局结束后，间隔固定时间开始
$startmode = 0;
//游戏开始的小时，如果，如果$startmode = 1,表示开始时间0~23，如果$startmode = 2，表示间隔时间，>0
$starthour = 0;
//游戏开始的分钟数，范围1~59
$startmin = 5;
//游戏所用配置文件
$gamecfg = 1;


//同ip限制激活人数。0为不限制
$iplimit = 3;
//头像数量（男女相同）
$iconlimit = 20;
//游戏进行状况显示条数
$newslimit = 50;
//生存者显示条数
$alivelimit = 50;
//历史优胜者显示条数
$winlimit = 50;
//枪声间隔时间(秒)
$noiselimit = 300;

//游戏内聊天信息显示条数
$chatlimit = 50;
//聊天信息更新时间(单位:毫秒)
$chatrefresh = 15000;
//游戏进行中是否显示聊天。0为不显示，数字为显示条数
$chatinnews = 50;


//■ 空手武器 ■
$nowep = '拳头';

//■ 无防具 ■
$noarb = '内衣';
//■ 无道具 ■
$noitm = '--';
//■ 无限耐久度 ■
$nosta = '∞';
//■ 无属性 ■
$nospk = '--';
//■ 多种类武器 ■
$mltwk = '泛用兵器';
//■ 多重属性 ■
$mltspk = '多重属性';


//游戏状态描述
$gstate = Array(0 => '已结束',10 => '即将开始',20 => '开放激活',30 => '人数已满',40=> '连斗中');
$gwin = Array(0 => '程序故障', 1 => '全部死亡',2 => '最后幸存',3 => '禁区解除',4 => '无人参加',5 => '核爆全灭');
$week = Array('日','一','二','三','四','五','六');
$clubinfo = Array('无','搏击专精','剑术专精','准确投掷','射击高手','陷阱大师','短跑选手','电脑骇客','毒剂专家','热血狂人','猎人之眼', '富家子弟', '全能全才', '肌肉兄贵' ,'根性兄贵','<span class="red">L5状态</span>');
$wthinfo = Array('晴天','大晴','多云','小雨','暴雨','台风','雷雨','下雪','起雾','浓雾','<span class="yellow">瘴气</span>','<span class="red">龙卷风</span>','<span class="clan">暴风雪</span>','<span class="blue">冰雹</span>');
$sexinfo = Array('m' => '红队', 'f' => '蓝队');
$hpinfo = Array('并无大碍','伤痕累累','生命危险','已经死亡');
$spinfo = Array('精力充沛','略有疲惫','精疲力尽','已经死亡');
$rageinfo = Array('平静','愤怒','暴怒','已经死亡');
$wepeinfo = Array('不值一提','略有威胁','威力可观','无敌神器');
$poseinfo = Array('通常','攻击姿态','防守姿态','探索姿态','隐藏姿态','治疗姿态');
$tacinfo = Array('通常','','重视防御','重视反击','重视躲避');
$typeinfo = Array('参战者','举办者','全息幻象','常磐祭员工','非作战人员','改造人','游魂','全息幻象','管理员');
$killmsginfo = Array('','你还不懂得运用你的力量，咱为此感到惋惜。','猎杀任务执行中。','抱歉，这是我的工作。','啊……对不起！对不起！','轻敌可是会死的！','忘记历史就意味着背叛，背叛就意味着……死亡。','……','死吧。');
$lwinfo = Array('','呜……这个躯体……咱还是无法自由运用啊……','机体受损过重，任务被迫中止。','我……我还没领到我的工资啊！','怎……怎么会这样？','控血果然容易出意外啊。','呃——光学迷彩出错了吗？','……','系统出错了吗？');
$infinfo = Array('b' => '胸', 'h' => '头', 'a' => '腕', 'f' => '足', 'p' => '毒');
$attinfo = Array('N' => '徒手殴打', 'P' => '殴打','K' => '斩刺', 'G' => '射击', 'C' => '投掷', 'D' => '拉开引线投掷', 'F' => '铺设法阵炸');
$skillinfo = Array('N' => 'wp', 'P' => 'wp', 'K' => 'wk', 'G' => 'wg', 'C' => 'wc', 'D' => 'wd', 'F'=> 'wf');
$rangeinfo = Array('N' => 'S', 'P' => 'S', 'K' => 'S', 'G' => 'M', 'C' => 'M', 'D' => 'L', 'F'=> 'M'); #各种攻击方式的射程
$restinfo = Array('通常','睡眠','治疗','静养');
$noiseinfo = Array('G' => '枪声', 'D' => '爆炸声', 'F'=>'灵气');
$chatinfo = Array(0 => '全员', 1 => '队伍', 2 => '密语', 3 => '遗言', 4 => '公告', 5 => '系统');
$iteminfo = Array(
	'N' => '无',
	'WN' => '空手',#空手
	'WP' => '钝器',
	'WG' => '远程兵器',
	'WGK' => '泛用兵器',
	'WK' => '锐器',
	'WC' => '投掷兵器',
	'WD' => '爆炸物',
	'WF' => '灵力兵器',
	'DN' => '内衣',#内衣
	'DB' => '身体装备',
	'DH' => '头部装备',
	'DA' => '手臂装备',
	'DF' => '腿部装备',
	'A'  => '饰物',
	'Ag' => '同志饰物',
	'Al' => '热恋饰物',
	'HH' => '生命恢复',
	'HS' => '体力恢复',
	'HB' => '命体恢复',
	'PH' => '生命恢复',
	'PS' => '体力恢复',
	'PB' => '命体恢复',
	'PH1' => '生命恢复',
	'PS1' => '体力恢复',
	'PB1' => '命体恢复',
	'PH2' => '生命恢复',
	'PS2' => '体力恢复',
	'PB2' => '命体恢复',
	'R' => '雷达',
	'TO' => '陷阱',
	'TN' => '陷阱',
	'Y' => '特殊',
	'GB' => '手枪弹药',
	'GBr' => '机枪弹药',
	'X'=> '合成专用',
	'VV'=> '全系提升',
	'VP'=> '殴熟提升',
	'VG'=> '射熟提升',
	'VK'=> '斩熟提升',
	'VC'=> '投熟提升',
	'VD'=> '爆熟提升',
	'VF'=> '灵熟提升',
	'MA'=> '攻击提升',
	'MD'=> '防御提升',
	'ME'=> '经验提升',
	'MS'=> '体力上限',
	'MH'=> '生命上限',
	'MV'=> '熟练提升'
	);
$itemspkinfo = Array(
	'N' => '拳击防御',
	'P' => '钝器防御',
	'K' => '锐器防御',
	'G' => '枪弹防御',
	'C' => '投掷防御',
	'GC' => '远程防御',
	'D' => '爆炸防御',
	'A' => '全系防御',
	'g' => '同志',
	'l' => '热恋',
	'S' => '消音',
	'c' => '必杀辅助',
	'h' => '防伤',
	'r' => '连续攻击',
	'rS' => '连射消音',
	'p' => '毒性攻击',
	'q' => '毒伤防御',
	);
$plsinfo = Array('管理后台','音乐区','RF高校','雪之镇','动画区','ACFUN贴吧','观音堂','清水池','白穗神社','墓地','娱乐区','对天使用作战本部','夏之镇','游戏区','光坂高校','柊家神社','常磐森林','M记戈壁','秋之镇','常磐镇医院','春之镇','专辑区','初始之树','幻想世界','永恒的世界','Hut of Amarillo');
$xyinfo = Array('D-6','A-2','B-4','C-3','C-4','C-5','C-6','D-4','E-2','E-4','F-6','E-8','F-2','F-9','G-3','G-6','H-4','H-6','I-6','I-7','I-10','J-6','F-2','I-1','J-10','A-1');
$areainfo = Array
	(
	"这里是禁区，如果不快点离开，可能会被时空吞噬。<br>",
	"仿佛有种撕心裂肺的声音在耳边回响，还是赶快离开的好。<br>",
	"一所看起来很普通的高校<br>有一个很漂亮的棒球场。<br>",
	"这里的建筑风格怎么看怎么像俄罗斯的……<BR>搞什么搞……<br>",
	"这里貌似是播放新番动画的地方。<BR>啊，好久没看〇猫淘〇三千问了。<br>",
	"好象动物园的样子。<BR>墙上的字很注目：TDGSGL……<br>",
	"这里供奉着大大小小各种各样的佛像。一到晚上，令人毛骨悚然。<br>",
	"这里的水很清澈。<BR>应该属于极品吧……<br>",
	"站在神社的台阶上<BR>突然有一种想飞上天空的感觉……<br>",
	"听说很多喷子都被埋在这里，不会凭空冒出一座恶魔城来吧……<br>",
	"曾经很热闹的地方。<BR>现在却空无一人，被河蟹吃掉了么？<br>",
	"NPC满载的另外一所高校。<BR>这似乎是本校的校长室。<br>",
	"靠海的村庄，阳光好美……<BR>但是没有时间看风景的……<br>",
	"小霸王学习机散落了一地<BR>仿佛听到“小霸王其乐无穷”……<br>",
	"长长的坂道的尽头是一所学校…<BR>虽然看起来没有人在的样子……<br>",
	"听说这里以前是个很著名的旅游景点……<br>",
	"郁郁葱葱的树木非常茂盛。<BR>若在林中被袭击，防备也来不及就…<BR>听说这里出过一位很厉害的超能力者……<br>",
	"草都被大闸蟹吃光了。<BR>会有忧郁眼神的羊驼出现吗？<br>",
	"与其他住宅区相比，这里的商店特别多。<BR>整个城市弥漫着一种悲伤的气氛……<br>",
	"寂静的地方。如果寻找药物，就要快点行动了…<BR>不会有手上拿着手术刀的野蛮女医生出现吧……<br>",
	"一片黄色。<BR>好象还有些玉米的味道？<br>",
	"安静的可怕。<BR>难道这就是传说中不见天日的停尸间？<br>",
	"在绿地上孤零零矗立的大树，像是一座纪念碑。<BR>这到底意味着什么呢？<br>",
	"被白雪笼罩，一片荒芜的空间……<BR>时空错乱了吗？为什么我会在这里？<br>",
	"诡异的地方……脚下已经看不见什么地面了……<BR>这个地方究竟是什么？<br>",
	"一间孤独的小屋子。<br>貌似没有人住在这里了。<br>门上贴着告示：<br>TRAIN WITH MY HOLOGRAM IF YOU WANT TO --- GA-04<br>"
);

/*Error settings*/
$_ERROR = Array
	(
	'no_login' => '用户未登陆，请从首页登录后再进入游戏',
	'login_check' => '登录信息验证失败，请清空Cookie后进入游戏',
	'login_time' => '登录间隔时间过长，请重新登录后进入游戏',
	'login_info' => '用户信息不正确，请清空缓存和Cookie后进入游戏',
	'player_limit' => '本局游戏参加人数已达上限，无法进入，请下局再来',
	'wrong_pw' => '用户信息验证失败，请重新登录论坛后进入游戏',
	'player_exist' => '角色已经存在，请不要重复激活',
	'no_start' => '游戏尚未开始，请稍后再登录',
	'valid_stop' => '本游戏已经停止激活，无法进入，请下局再来',
	'user_ban' => '此账号禁止进入游戏，请与管理员联系',
	'no_admin' => '你不是管理员，不能使用此功能',
	'ip_limit' => '本局此IP激活人数已满，请下局再来',
	'no_power' => '你的管理权限不够，不能进行此操作',
	'wrong_adcmd' => '指令错误，请重新输入',
	'invalid_name' => '用户名含有非法字符，请重新输入',
	);


/*template settings*/
//模板编号。默认为1
define('STYLEID', '1');
define('TEMPLATEID', '1');
define('TPLDIR', './templates/default');


?>