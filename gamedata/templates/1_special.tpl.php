<?php if(!defined('IN_GAME')) exit('Access Denied'); ?>
<input type="hidden" name="mode" value="special">
现在想要做什么？<br /><br />
<?php if($command == 'back') { ?>
<input type="radio" name="command" id="menu" value="menu"><a onclick=sl('menu'); href="javascript:void(0);" >返回</a><br />
<?php } ?>
