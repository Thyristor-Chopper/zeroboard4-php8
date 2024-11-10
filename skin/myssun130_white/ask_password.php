<br><br><br>

<form method=post name=delete action=<?=$target?>>

<input type=hidden name=page value=<?=$page?>>

<input type=hidden name=id value=<?=$id?>>

<input type=hidden name=no value=<?=$no?>>

<input type=hidden name=select_arrange value=<?=$select_arrange?>>

<input type=hidden name=desc value=<?=$desc?>>

<input type=hidden name=page_num value=<?=$page_num?>>

<input type=hidden name=keyword value="<?=$keyword?>">

<input type=hidden name=category value="<?=$category?>">

<input type=hidden name=sn value="<?=$sn?>">

<input type=hidden name=ss value="<?=$ss?>">

<input type=hidden name=sc value="<?=$sc?>">

<input type=hidden name=mode value="<?=$mode?>">

<input type=hidden name=c_no value=<?=$c_no?>>

<table border=0 width=250 cellspacing=0 cellpadding=0>

<tr class=title>

   <td align=center class=write_title><b><?=$title?></b></td>

</tr>

<?php 

	if(!$member['no']) {

?>

<tr height=60>

   <td align=center>

     <font class=t_name><b>비밀번호</b>&nbsp;&nbsp;</font><?=$input_password?>

   </td>

</tr>
<tr><td class=bar1></td></tr>

<?php 

	}

?>

<tr class=list0 height=30>

	<td align=center>

	    <input type=submit class=submit value=" 확  인 " border=0 accesskey="s">

	    <input type=button class=submit value="이전화면" onclick=history.back()>

   </td>

</tr>

</table>

</form>



