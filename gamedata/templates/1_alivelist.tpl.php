<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
<TABLE border="1">
<tr align="center" class="b1">
<td class="b1"><span>名字&编号</span></td>
<td width="140" class="b1"><span>头像</span></td>
<td class="b1"><span>等级</span></td>
<td class="b1"><span>杀害者数</span></td>
<? if($gamestate < 40 ) { ?>
<td class="b1"><span>队伍名</span></td>
<? } ?>
<td width="300" class="b1"><span>口头禅</span></td>
</tr>
<? if(is_array($alivedata)) { foreach($alivedata as $alive) { ?>
<tr class="b3">
<td align="center" class="b3"><span><?=$alive['name']?><br><?=$sexinfo[$alive['gd']]?> <?=$alive['sNo']?> 号</span></td>
<td align="center" class="b3"><span><IMG src="img/<?=$alive['iconImg']?>" width="140" height="80" border="0" align="absmiddle"></span></td>
<td class="b3"><span><?=$alive['lvl']?></span></td>
<td class="b3"><span><?=$alive['killnum']?></span></td>
<? if($gamestate < 40 ) { ?>
<td class="b3"><span>
<? if($alive['teamID']) { ?>
<?=$alive['teamID']?>
<? } else { ?>
无
<? } ?>
</span></td>
<? } ?>
<td class="b3"><span><?=$alive['motto']?></span></td>
</tr>
<? } } ?>
</table><BR>
【生存者数：<?=$alivenum?>人】