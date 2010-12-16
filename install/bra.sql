--
-- 表的结构 `bra_users`
-- 储存用户的激活信息
--

DROP TABLE IF EXISTS bra_users;
CREATE TABLE bra_users (
  uid mediumint(8) unsigned NOT NULL auto_increment,
  username char(15) NOT NULL default '',
  `password` char(32) NOT NULL default '',
  groupid tinyint unsigned NOT NULL default '0',
  lastgame smallint unsigned NOT NULL default '0',
  ip char(15) NOT NULL default '',
  credits int(10) NOT NULL default '0',
  gender char(1) NOT NULL default '0',
  icon tinyint unsigned NOT NULL default '0',
  club tinyint unsigned NOT NULL default '0',
  motto char(30) NOT NULL default '',
  killmsg char(30) NOT NULL default '',
  lastword char(30) NOT NULL default '',

  PRIMARY KEY  (uid),
  UNIQUE KEY username (username)

) TYPE=MyISAM;

--
-- 插入初始数据 `bra_users`
--


--
-- 表的结构 `bra_winners`
-- 储存每局获胜者的信息
--

DROP TABLE IF EXISTS bra_winners;
CREATE TABLE bra_winners (
  gid smallint unsigned NOT NULL default '0',
  type tinyint unsigned NOT NULL default '0',
  name char(15) NOT NULL default '',
  pass char(32) NOT NULL default '',
  gd char(1) NOT NULL default 'm',
  sNo smallint unsigned NOT NULL default '0',
  icon tinyint unsigned NOT NULL default '0',
  club tinyint unsigned NOT NULL default '0',
  endtime int(10) unsigned NOT NULL default '0',
  hp smallint unsigned NOT NULL default '0',
  mhp smallint unsigned NOT NULL default '0',
  sp smallint unsigned NOT NULL default '0',
  msp smallint unsigned NOT NULL default '0',
  att smallint unsigned NOT NULL default '0',
  def smallint unsigned NOT NULL default '0',
  pls tinyint unsigned NOT NULL default '0',
  lvl tinyint unsigned NOT NULL default '0',
  `exp` smallint unsigned NOT NULL default '0',
  money smallint unsigned NOT NULL default '0',
  bid smallint unsigned NOT NULL default '0',
  `inf` char(12) not null default '',
  rage tinyint unsigned NOT NULL default '0',
  pose tinyint(1) unsigned NOT NULL default '0',
  tactic tinyint(1) unsigned NOT NULL default '0',
  killnum smallint unsigned NOT NULL default '0',
  state tinyint unsigned NOT NULL default '0',
  `wp` smallint unsigned not null default '0',
  `wk` smallint unsigned not null default '0',
  `wg` smallint unsigned not null default '0',
  `wc` smallint unsigned not null default '0',
  `wd` smallint unsigned not null default '0',
	`wf` smallint unsigned not null default '0',
  `teamID` char(20) not null default '',
  `teamPass` char(20) not null default '',
  wep char(20) NOT NULL default '',
  wepk char(4) not null default '',
  wepe smallint unsigned NOT NULL default '0',
  weps smallint not null default '0',
  wepsk char(4) not null default '',
  arb char(20) NOT NULL default '',
  arbk char(4) not null default '',
  arbe smallint unsigned NOT NULL default '0',
  arbs smallint not null default '0',
  arbsk char(4) not null default '',
  arh char(20) NOT NULL default '',
  arhk char(4) not null default '',
  arhe smallint unsigned NOT NULL default '0',
  arhs smallint not null default '0',
  arhsk char(4) not null default '',
  ara char(20) NOT NULL default '',
  arak char(4) not null default '',
  arae smallint unsigned NOT NULL default '0',
  aras smallint not null default '0',
  arask char(4) not null default '',
  arf char(20) NOT NULL default '',
  arfk char(4) not null default '',
  arfe smallint unsigned NOT NULL default '0',
  arfs smallint not null default '0',
  arfsk char(4) not null default '',
  art char(20) NOT NULL default '',
  artk char(4) not null default '',
  arte smallint unsigned NOT NULL default '0',
  arts smallint not null default '0',
  artsk char(4) not null default '',
  itm0 char(30) NOT NULL default '',
  itmk0 char(4) not null default '',
  itme0 smallint unsigned NOT NULL default '0',
  itms0 smallint not null default '0',
  itmsk0 char(4) not null default '',
  itm1 char(30) NOT NULL default '',
  itmk1 char(4) not null default '',
  itme1 smallint unsigned NOT NULL default '0',
  itms1 smallint not null default '0',
  itmsk1 char(4) not null default '',
  itm2 char(30) NOT NULL default '',
  itmk2 char(4) not null default '',
  itme2 smallint unsigned NOT NULL default '0',
  itms2 smallint not null default '0',
  itmsk2 char(4) not null default '',
  itm3 char(30) NOT NULL default '',
  itmk3 char(4) not null default '',
  itme3 smallint unsigned NOT NULL default '0',
  itms3 smallint not null default '0',
  itmsk3 char(4) not null default '',
  itm4 char(30) NOT NULL default '',
  itmk4 char(4) not null default '',
  itme4 smallint unsigned NOT NULL default '0',
  itms4 smallint not null default '0',
  itmsk4 char(4) not null default '',
  itm5 char(30) NOT NULL default '',
  itmk5 char(4) not null default '',
  itme5 smallint unsigned NOT NULL default '0',
  itms5 smallint not null default '0',
  itmsk5 char(4) not null default '',
  motto char(30) NOT NULL default '',
  wmode tinyint unsigned NOT NULL default '0',
  vnum smallint unsigned NOT NULL default '0',
  gtime int(10) unsigned NOT NULL default '0',
  gstime int(10) unsigned NOT NULL default '0',
  getime int(10) unsigned NOT NULL default '0',
  hdmg smallint unsigned NOT NULL default '0',
  hdp char(15) NOT NULL default '',
  hkill smallint unsigned NOT NULL default '0',
  hkp char(15) NOT NULL default '',

  UNIQUE KEY (gid)
) TYPE=MyISAM;


--
-- 表的结构 `bra_players`
-- 储存角色数据的激活信息，包括PC和NPC。
--

DROP TABLE IF EXISTS bra_players;
CREATE TABLE bra_players (
  pid smallint unsigned NOT NULL auto_increment,
  type tinyint NOT NULL default '0',
  name char(15) NOT NULL default '',
  pass char(32) NOT NULL default '',
  gd char(1) NOT NULL default 'm',
  sNo smallint unsigned NOT NULL default '0',
  icon tinyint unsigned NOT NULL default '0',
  club tinyint unsigned NOT NULL default '0',
  endtime int(10) unsigned NOT NULL default '0',
  hp smallint unsigned NOT NULL default '0',
  mhp smallint unsigned NOT NULL default '0',
  sp smallint unsigned NOT NULL default '0',
  msp smallint unsigned NOT NULL default '0',
  att smallint unsigned NOT NULL default '0',
  def smallint unsigned NOT NULL default '0',
  pls tinyint unsigned NOT NULL default '0',
  lvl tinyint unsigned NOT NULL default '0',
  `exp` smallint unsigned NOT NULL default '0',
  money smallint unsigned NOT NULL default '0',
  bid smallint unsigned NOT NULL default '0',
  `inf` char(5) not null default '',
  rage tinyint unsigned NOT NULL default '0',
  pose tinyint(1) unsigned NOT NULL default '0',
  tactic tinyint(1) unsigned NOT NULL default '0',
  killnum tinyint unsigned NOT NULL default '0',
  state tinyint unsigned NOT NULL default '0',
  `wp` smallint unsigned not null default '0',
  `wk` smallint unsigned not null default '0',
  `wg` smallint unsigned not null default '0',
  `wc` smallint unsigned not null default '0',
  `wd` smallint unsigned not null default '0',
  `teamID` char(15) not null default '',
  `teamPass` char(15) not null default '',
  wep char(20) NOT NULL default '',
  wepk char(4) not null default '',
  wepe smallint unsigned NOT NULL default '0',
  weps char(3) not null default '0',
  wepsk char(4) not null default '',
  arb char(20) NOT NULL default '',
  arbk char(4) not null default '',
  arbe smallint unsigned NOT NULL default '0',
  arbs char(3) not null default '0',
  arbsk char(4) not null default '',
  arh char(20) NOT NULL default '',
  arhk char(4) not null default '',
  arhe smallint unsigned NOT NULL default '0',
  arhs char(3) not null default '0',
  arhsk char(4) not null default '',
  ara char(20) NOT NULL default '',
  arak char(4) not null default '',
  arae smallint unsigned NOT NULL default '0',
  aras char(3) not null default '0',
  arask char(4) not null default '',
  arf char(20) NOT NULL default '',
  arfk char(4) not null default '',
  arfe smallint unsigned NOT NULL default '0',
  arfs char(3) not null default '0',
  arfsk char(4) not null default '',
  art char(20) NOT NULL default '',
  artk char(4) not null default '',
  arte smallint unsigned NOT NULL default '0',
  arts char(3) not null default '0',
  artsk char(4) not null default '',
  itm0 char(20) NOT NULL default '',
  itmk0 char(4) not null default '',
  itme0 smallint unsigned NOT NULL default '0',
  itms0 char(3) not null default '0',
  itmsk0 char(4) not null default '',
  itm1 char(20) NOT NULL default '',
  itmk1 char(4) not null default '',
  itme1 smallint unsigned NOT NULL default '0',
  itms1 char(3) not null default '0',
  itmsk1 char(4) not null default '',
  itm2 char(20) NOT NULL default '',
  itmk2 char(4) not null default '',
  itme2 smallint unsigned NOT NULL default '0',
  itms2 char(3) not null default '0',
  itmsk2 char(4) not null default '',
  itm3 char(20) NOT NULL default '',
  itmk3 char(4) not null default '',
  itme3 smallint unsigned NOT NULL default '0',
  itms3 char(3) not null default '0',
  itmsk3 char(4) not null default '',
  itm4 char(20) NOT NULL default '',
  itmk4 char(4) not null default '',
  itme4 smallint unsigned NOT NULL default '0',
  itms4 char(3) not null default '0',
  itmsk4 char(4) not null default '',
  itm5 char(20) NOT NULL default '',
  itmk5 char(4) not null default '',
  itme5 smallint unsigned NOT NULL default '0',
  itms5 char(3) not null default '0',
  itmsk5 char(4) not null default '',

  PRIMARY KEY  (pid),
  INDEX TYPE (type, sNo),
  INDEX NAME (name, type)
) TYPE=MyISAM;



--
-- 表的结构 `bra_chat`
-- 公聊 0，队聊 1，私聊 2 ，系统 3，公告 4，
--

DROP TABLE IF EXISTS bra_chat;
CREATE TABLE bra_chat (
  cid smallint unsigned NOT NULL auto_increment,
  type enum('0','1','2','3','4','5') NOT NULL default '0',
 `time` int(10) unsigned NOT NULL default '0',
  send char(15) NOT NULL default '',
  recv char(15) NOT NULL default '',
  msg char(60) NOT NULL default '',

  PRIMARY KEY  (cid)
) TYPE=MyISAM;


