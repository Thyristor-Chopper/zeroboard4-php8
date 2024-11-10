<?php 
if(!eregi("Zeroboard",$a_list)) $a_list = str_replace(">","><font class=t_bottom>",$a_list)."&nbsp;";
if(!eregi("Zeroboard",$a_reply)) $a_reply = str_replace(">","><font class=t_bottom>",$a_reply)."&nbsp;";
if(!eregi("Zeroboard",$a_modify)) $a_modify = str_replace(">","><font class=t_bottom>",$a_modify)."&nbsp;";
if(!eregi("Zeroboard",$a_delete)) $a_delete = str_replace(">","><font class=t_bottom>",$a_delete)."&nbsp;";
if(!eregi("Zeroboard",$a_write)) $a_write = str_replace(">","><font class=t_bottom>",$a_write)."&nbsp;";
if(!eregi("Zeroboard",$a_vote)) $a_vote = str_replace(">","><font class=t_bottom>",$a_vote)."&nbsp;";
?>
<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?> style='table-layout:fixed'>
	<col width=10></col><col width=50></col><col width=></col><col width=80></col><col width=10></col>
	<?=$hide_prev_start?>
	<tr><td colspan=5 class=bar1></td></tr>
	<tr class=listline>
	<td></td>
	<td><font class=t_list>&nbsp;이전글 |</font></td>
	<td><font class=t_list>&nbsp;<?=$prev_icon?><?=$a_prev?><?=$prev_subject?></a></font></td>
	<td align=right><font class=t_name><?=$prev_name?>&nbsp;</font></td>
	<td></td>
	</tr>
	<?=$hide_prev_end?>

	<?=$hide_next_start?>
	<tr><td colspan=5 class=bar1></td></tr>
	<tr class=listline>
	<td></td>
	<td><font class=t_list>&nbsp;다음글 |</font></td>
	<td><font class=t_list>&nbsp;<?=$next_icon?><?=$a_next?><?=$next_subject?></a></font></td>
	<td align=right><font class=t_name><?=$next_name?>&nbsp;</font></td>
	<td></td>
	</tr>
	<?=$hide_next_end?>
</table>

<table width=<?=$width?> cellspacing=0 cellpadding=0>
	<tr><td class=bar1 colspan=2></td></tr>
	<tr>
	<tr><td colspan=2 height=8></td></tr>
	<tr valign=top>
	<td style="padding-left:9">
	<?=$a_list?>목록보기</font></a>
	<?=$a_reply?>답글쓰기</font></a>
	<?=$a_write?>글쓰기</font></a>
	</td>
	<td align=right style="padding-right:10">
	<?=$a_modify?>수정하기</font></a>
	<?=$a_delete?>삭제하기</font></a>
	</td>
	</tr>
	<tr><td height=5 colspan=2></td></tr>
</table>