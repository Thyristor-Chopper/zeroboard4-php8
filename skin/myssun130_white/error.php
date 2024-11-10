<div align=center>
<form>
<br><br><br>
<table border=0 width=<?=$width?> height=30>
	<tr>
	<td class=write_title align=center><b>메세지</b></td>
	</tr>
	<tr>
    	<td align=center height=50 class=t_list>
      	<?php echo $message;?>
	</td>
	</tr>
	<tr><td class=bar1></td></tr>
</table>
<?php 
  if(!$url)
  {
?>
<br>
<center><a href=# onclick=history.back() onfocus=blur()><font class=t_list>이전 화면</font></a></center>
<?php 
  }
  else
  {
?>
<br>
<center><a href=# onclick=location.href="<?php echo $url;?>" onfocus=blur()><font class=t_list>페이지 이동</font></a></center>
<?php 
  }
?>
</form>
<br>
<br>
</div>