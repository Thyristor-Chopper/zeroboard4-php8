<?php 
	if($member['level']<=$setup['grant_view']||$is_admin) {
	$comment_num=$data['total_comment'];
/* Check New Comment <?=$comment_new?> */
if(!$comment_num==0) {
  $last_comment = mysql_fetch_array(zb_query("select * from $t_comment"."_$id where parent='{$data['no']}' order by reg_date desc limit 1"));
  $last_comment_time = $last_comment['reg_date'];
  if(time()-$last_comment_time<60*60*12) $comment_new = "&nbsp;<font class=comment12>[".$comment_num."]</font>";
  elseif(time()-$last_comment_time<60*60*24) $comment_new = "&nbsp;<font class=comment24>[".$comment_num."]</font>";
  else $comment_new = "&nbsp;<font class=comment>[".$comment_num."]</font>";
  }
  else $comment_new = "";
  }
  else {
	$comment_num=$data['total_comment'];
	/* Check New Comment <?=$comment_new?> */
	if(!$comment_num==0) {
  	$last_comment = mysql_fetch_array(zb_query("select * from $t_comment"."_$id where parent='{$data['no']}' order by reg_date desc limit 1"));
  	$last_comment_time = $last_comment['reg_date'];
  	if(time()-$last_comment_time<60*60*12) $comment_new = "&nbsp;<font class=comment12>[".$comment_num."]</font>";
  	elseif(time()-$last_comment_time<60*60*24) $comment_new = "&nbsp;<font class=comment24>[".$comment_num."]</font>";
  	else $comment_new = "&nbsp;<font class=comment>[".$comment_num."]</font>";
  	}
  else $comment_new = "";
  }
$subject = str_replace(">","><font class=t_list>",$subject);
$name= str_replace(">","><font class=t_name>",$name);
$date="<span title='".date("Y년 m월 d일 D H시 i분 s초", $data['reg_date'])."'><font class=t_date>".date("y.m.d", $data['reg_date'])."</font></span>";
?>
	<tr align=center class=listline onmouseover="this.style.backgroundColor='#444444'" onmouseout="this.style.backgroundColor=''">
	<td></td>
	<td class=t_num><?=$number?></td>
	<td align=left nowrap class=t_list>
	<?=$hide_cart_start?><input type=checkbox name=cart value="<?=$data['no']?>"><?=$hide_cart_end?>
	<?=$insert?><?=$icon?><?=$hide_category_start?><?=$category_name?>&nbsp;|&nbsp;<?=$hide_category_end?>
	<?=$subject?>&nbsp;<?=$comment_new?></td>
	<td style='padding-top:3;' class=t_name><nobr><?=$face_image?>&nbsp;<?=$name?></nobr></td>
	<td nowrap><?=$date?></td>
	<td nowrap class=t_num><?=$hit?></td>
	<td></td>
	</tr>
	<tr>
	<td class='bar1' colspan=7></td>
	</tr>
