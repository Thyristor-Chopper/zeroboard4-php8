</table>
<?php 
	if(!eregi("Zeroboard",$a_list)) $a_list = str_replace(">","><font class=t_bottom>",$a_list)."&nbsp;";
	if(!eregi("Zeroboard",$delete_all)) $a_delete_all = str_replace(">","><font class=t_bottom>",$a_delete_all)."&nbsp;";
	if(!eregi("Zeroboard",$a_1_prev_page)) $a_1_prev_page = str_replace(">","><font class=t_bottom>",$a_1_prev_page)."&nbsp;";
	if(!eregi("Zeroboard",$a_1_next_page)) $a_1_next_page = str_replace(">","><font class=t_bottom>",$a_1_next_page)."&nbsp;";
	if(!eregi("Zeroboard",$a_write)) $a_write = str_replace(">","><font class=t_bottom>",$a_write)."&nbsp;";
	if(!eregi("Zeroboard",$a_prev_page)) $a_prev_page = str_replace(">","><font class=t_pagenum>",$a_prev_page)."&nbsp;";
	if(!eregi("Zeroboard",$a_next_page)) $a_next_page = str_replace(">","><font class=t_pagenum>",$a_next_page)."&nbsp;";
	$print_page = str_replace("<font style=font-size:8pt>","<font class=t_pagenum>",$print_page);
	$print_page = str_replace("계속 검색","<font class=t_pagenum>계속 검색",$print_page);
	$print_page = str_replace("이전 검색","<font class=t_pagenum>계속 검색",$print_page);
?>
<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
	<tr><td colspan=2 height=8></td></tr>
	<tr valign=top>
	<td style="padding-left:10">
	<?=$a_write?>글쓰기</font></a>
	<?=$a_delete_all?>게시물정리</font></a>
	</td>
	<td align=right style="padding-right:10">
	<?=$a_prev_page?>이전</font></a> <?=$print_page?></font> <?=$a_next_page?>다음</font></a><br>
	<table border=0 cellspacing=0 cellpadding=0>
		</form>
		<form method=get name=search action=<?=$PHP_SELF?>>
		<input type=hidden name=id value=<?=$id?>>
		<input type=hidden name=select_arrange value=<?=$select_arrange?>>
		<input type=hidden name=desc value=<?=$desc?>>
		<input type=hidden name=page_num value=<?=$page_num?>>
		<input type=hidden name=selected>
		<input type=hidden name=exec>
		<input type=hidden name=sn value="on">
		<input type=hidden name=ss value="on">
		<input type=hidden name=sc value="on">
		<input type=hidden name=category value="<?=$category?>">
		<tr>
		<td align=center>
			<table border=0 width=100% cellspcing=0 cellpadding=0>
				<tr>
				<td align=right valign=middle>
				<input type=text name=keyword value="<?=$keyword?>" class="search"></td>
				</tr>
			</table>
		</td>
		</tr>
		</form>
	</table>
	</td>
</tr>
</table>
