<?php


$lang = array
(
	'gamename' => '生存游戏 BRA',
	'succeed' => '成功',
	'fail' => '失败',
	'exit' => '退出安装向导',
	'enabled' => '允许',
	'writeable' => '可写',
	'unwriteable' => '不可写',
	'yes' => '可',
	'no' => '不可',
	'unlimited' => '不限',

	'env_os' => '操作系统',
	'env_php' => 'PHP 版本',
	'env_mysql' => 'MySQL 版本',
	'env_attach' => '附件上传',
	'env_diskspace' => '磁盘空间',
	'env_dir_writeable' => '目录写入',

	'init_log' => '初始化记录',
	'clear_dir' => '清空目录',
	'select_db' => '选择数据库',
	'create_table' => '建立数据表',
	'init_game' => '初始化游戏系统',
	'new_game' => '新游戏准备',

	'install_wizard' => '生存游戏 - BRA Installation Wizard',
	'welcome' => '欢迎来到 生存游戏 - BRA 安装向导，安装前请仔细阅读 license 档的每个细节，在您确定可以完全满足 生存游戏BRA 的授权协议之后才能开始安装。readme 档提供了有关软件安装的说明，请您同样仔细阅读，以保证安装进程的顺利进行。',
	'current_process' => '当前状态:',
	'show_license' => '生存游戏BRA 用户许可协议',
	'agreement' => '请您务必仔细阅读下面的许可协议',
	'agreement_yes' => '我完全同意',
	'agreement_no' => '我不能同意',
	'configure' => '配置 config.inc.php',
	'check_config' => '检查配置文件状态',
	'check_existence' => '存在检查',
	'check_writeable' => '可写检查',
	'edit_config' => '浏览/编辑当前配置',
	'variable' => '设置选项',
	'value' => '当前值',
	'comment' => '注释',
	'dbhost' => '数据库服务器:',
	'dbhost_comment' => '数据库服务器地址, 一般为 localhost',
	'dbuser' => '数据库用户名:',
	'dbuser_comment' => '数据库账号用户名',
	'dbpw' => '数据库密码:',
	'dbpw_comment' => '数据库账号密码',
	'dbname' => '数据库名:',
	'dbname_comment' => '数据库名称',
	'authkey' => '游戏加密密钥:',
	'authkey_comment' => '必须与插件密钥相同',
	'tablepre' => '表名前缀:',
	'tablepre_comment' => '同一数据库安装多个游戏时可改变默认',
	'tablepre_prompt' => '除非您需要在同一数据库安装多个 生存游戏\n 否则,强烈建议您不要修改表名前缀.',
	'moveut' => '服务器时差:',
	'moveut_comment' => '如果服务器跟你当地的时间有时差，在此处设置。一般用于国外服务器。当前服务器时间:',
	'bbsurl' => '论坛地址:',
	'bbsurl_comment' => '安装游戏插件的论坛地址',
	'gameurl' => '游戏程序地址:',
	'gameurl_comment' => '用于全屏模式，一般情况下替换域名loongyou.com为您的域名即可',
	'save_config' => '保存配置信息',

	'db_set' => '请设置安装游戏的数据库',
	'db_use_existence' => '使用已存在的数据库',
	'db_create_new' => '创建新的数据库',

	'confirm_config' => '上述配置正确',
	'refresh_config' => '刷新修改结果',
	'recheck_config' => '重新检查设置',
	'check_env' => '检查当前服务器环境',
	'compare_env' => '生存游戏BRA 所需环境和当前服务器配置对比',
	'env_required' => '生存游戏BRA 所需配置',
	'env_best' => '生存游戏BRA 最佳配置',
	'env_current' => '当前服务器',
	'confirm_preparation' => '请确认已完成如下步骤',
	'install_note' => '安装向导提示',
	'add_admin' => '设置管理员账号',
	'start_install' => '开始安装 生存游戏',
	'installing' => '检查管理员账号信息并开始安装 生存游戏。',
	'check_admin' => '检查管理员账号',
	'check_admin_validity' => '检查信息合法性',
	'admin_username_invalid' => '用户名空, 长度超过限制或包含非法字符.',
	'admin_invalid' => '您的信息没有填写完整.',
	'fail_reason' => '失败. 原因:',
	'go_back' => '返回上一页修改',
	'init_file' => '初始化运行目录与文件',
	'lock_exists' => '您已经安装过游戏，为了保证游戏数据安全，请手动删除 install.php 文件 和 ./install 文件夹下的所有文件，如果您想重新安装游戏，请删除 gamedata/install.lock 文件，在次运行安装文件。',

	'config_nonexistence' => '您的 config.inc.php 不存在, 无法继续安装, 请用 FTP 将该文件上传后再试.',
	'config_comment' => '请在下面填写您的数据库账号信息, 通常情况下不需要修改红色选项内容.',
	'config_unwriteable' => '安装向导无法写入配置文件, 请核对现有信息, 如需修改, 请通过 FTP 将改好的 config.inc.php 上传.',

	'php_version_430' => '您的 PHP 版本小于 4.3.0, 无法使用 生存游戏BRA。',
	'attach_enabled' => '允许/最大尺寸 ',
	'attach_enabled_info' => '您可以上传附件的最大尺寸: ',
	'attach_disabled' => '不允许上传附件',
	'attach_disabled_info' => '附件上传或相关操作被服务器禁止。',
	'mysql_version_323' => '您的 MySQL 版本低于 3.23，安装无法继续进行。',
	'unwriteable_template' => '模板目录(./templates)属性非 777 或无法写入，在线编辑模板功能将无法使用。',
	'unwriteable_gamedata' => '数据目录(./gamedata)属性非 777 或无法写入，游戏运行记录和备份到数据库功能将无法使用。',
	'tablepre_invalid' => '您指定的数据表前缀包含点字符(".")，请返回修改。',
	'db_invalid' => '指定的数据库不存在, 系统也无法自动建立, 无法安装 生存游戏BRA.',
	'db_auto_created' => '指定的数据库不存在, 但系统已成功建立, 可以继续安装.',
	'db_not_null' => '数据库中已经安装过 生存游戏BRA, 继续安装会清空原有数据.',
	'db_drop_table_confirm' => '继续安装会清空全部原有数据，您确定要继续吗?',

	'install_abort' => '由于您目录属性或服务器配置原因, 无法继续安装 生存游戏BRA, 请仔细阅读安装说明.',
	'install_process' => '您的服务器可以安装和使用 生存游戏BRA, 请进入下一步安装.',
	'install_succeed' => '恭喜您，生存游戏BRA 安装成功！',
	'goto_game' => '点击这里进入游戏',


	'choice_or_new_db' => '请选择已存在的数据库或者新建一个数据库存放游戏数据',
	'game_db_conf' => '游戏数据库设置',
	'show_and_edit_db_conf' => '浏览/编辑当前数据库配置',
	'choice_one_db' => '请指定一个数据库',
	'db' => '数据库',
	'check_user_and_pass' => '检查数据库账号权限',
	'permission' => '权限',
	'status' => '状态',
	
	'username' => '管理员账号:',
	'username_comment' => '必须为论坛已存在账号',
	'adminmsg' => '站长留言:',
	'adminmsg_comment' => '给用户的公告信息',
	'startmode' => '游戏开始模式:',
	'startmode_comment' => '与游戏开始时间配合使用。',
	'starthour' => '游戏开始时间:',
	'starthour_comment' => '模式1为每天开始小时数，<br>模式2为每局结束后的间隔小时数，<br>模式3为每局结束后的间隔分钟数，<br>模式0在“当前游戏管理”里中设置开始时间<br>',
	'startmin' => '游戏准备时间:',
	'startmin_comment' => '模式2决定整点几分开始，同时也是开始前的准备时间，<br>一般不要在整点时开局，可能出现问题。',
	'iplimit' => 'IP限制:',
	'iplimit_comment' => '0为不限制，数字为允许同时存活人数。',
	'newslimit' => '进行状况显示:',
	'newslimit_comment' => '进行状况显示条数。',
	'alivelimit' => '生存者显示:',
	'alivelimit_comment' => '当前生存者显示条数。',
	'winlimit' => '优胜者显示:',
	'winlimit_comment' => '历史优胜者显示条数。',
	'noiselimit' => '枪声间隔:',
	'noiselimit_comment' => '可以听到枪声的最大时间，单位 秒。',
	'chatlimit' => '聊天显示:',
	'chatlimit_comment' => '游戏内聊天信息显示条数',
	'chatrefresh' => '聊天刷新:',
	'chatrefresh_comment' => '聊天信息的刷新速度，单位 毫秒。',
	'chatinnews' => '游戏外聊天显示:',
	'chatinnews_comment' => '进行状况中是否显示聊天。0为不显示，数字为显示条数。',

	'areahour' => '禁区间隔时间:',
	'areahour_comment' => '单位：小时',
	'areaadd' => '禁区增加数:',
	'areaadd_comment' => '每次增加的禁区数量，最小为1',
	'arealimit' => '停止激活禁区数:',
	'arealimit_comment' => '注意，是增加禁区的回数，而不是禁区的数量',
	'areaesc' => '自动逃避禁区:',
	'areaesc_comment' => '0=关闭。1=所有玩家自动躲避，适合新手较多，不了解禁区机制',
	'validlimit' => '激活人数上限:',
	'validlimit_comment' => '',
	'combolimit' => '连斗人数:',
	'combolimit_comment' => '停止激活后，人数少于此数值则进入连斗',
	'deathlimit' => '连斗人数2:',
	'deathlimit_comment' => '停止激活后，死亡人数(包括 npc)大于此数值则进入连斗',
	'splimit' => '体力上限:',
	'splimit_comment' => '角色的最大体力，体力最大值不会增长',
	'hplimit' => '生命上限:',
	'hplimit_comment' => '角色0级的最大生命，生命最大值会随等级增长',
	'sleep_time' => '体力恢复时间:',
	'sleep_time_comment' => '恢复体力最大值的1%需要的时间，单位：秒。',
	'heal_time' => '生命恢复时间:',
	'heal_time_comment' => '恢复生命最大值的1%需要的时间，单位：秒。',
	'teamlimit' => '组队人数上限:',
	'teamlimit_comment' => '',
	'npclimit' => 'npc数量:',
	'npclimit_comment' => '士兵的数量，与其他npc无关',

	'startmode_0' => '手动设定:',
	'startmode_1' => '每日定时:',
	'startmode_2' => '整点开始:',
	'startmode_3' => '间隔开始:',
	'starttime_0' => '设定时间:',
	'starttime_1' => '立即开始:',
	'year' => '年',
	'month' => '月',
	'day' => '日',
	'hour' => '时',
	'min' => '分',

	'license' => '<p class="subtitle">生存游戏 BRA中文版授权协议 适用于中文用户。<br>本游戏版权属 龙游网 www.loongyou.com 所有，未经允许不得用于任何商业用途。</p>',

	'preparation' => '<li>将压缩包中 生存游戏BRA 目录下全部文件和目录上传到服务器.</li><li>修改服务器上的 config.inc.php 文件以适合您的配置, 有关数据库账号信息请咨询您的空间服务提供商.</li><li>如果您使用非 WINNT 系统请修改以下属性:<br>&nbsp; &nbsp; <b>./templates</b> 目录 777;&nbsp; &nbsp; <b>./gamedata</b> 目录 777;<br><b>&nbsp; &nbsp;<br></li>',

);


?>