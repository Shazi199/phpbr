<? if(!defined('IN_GAME')) exit('Access Denied'); include template('header'); ?>
<div id="notice"></div>
<span class="subtitle">玩家排行榜</span>
<center>
<form id='showrank' name="showrank" method="post">
<input type="hidden" name="start" id="start" value="0">
<input type="hidden" name="command" id="command" value="ref">
<input type="hidden" name="checkmode" id="checkmode" value="credits">
<div>
<input type="button" id="credits" value="按积分顺序排列" onClick="document['showrank']['start'].value='0';document['showrank']['checkmode'].value='credits';document['showrank']['command'].value='ref';postCmd('showrank','rank.php');return false;">
<input type="button" id="credits" value="按胜率顺序排列" onClick="document['showrank']['start'].value='0';document['showrank']['checkmode'].value='winrate';document['showrank']['command'].value='ref';postCmd('showrank','rank.php');return false;">
</div>
<div>
<input type="button" id="last" name="last" value="上一页" onClick="document['showrank']['command'].value='last';postCmd('showrank','rank.php');return false;">
<span id="pageinfo">第<span class="yellow" id="startnum"><?=$startnum?></span>条至第<span class="yellow" id="endnum"><?=$endnum?></span>条</span>
<input type="button" id="next" name="next" value="下一页" onClick="document['showrank']['command'].value='next';postCmd('showrank','rank.php');return false;">
</div>
</form>
<div id="rank">
<? include template('rankinfo'); ?>
</div>
</center>
<? include template('footer'); ?>