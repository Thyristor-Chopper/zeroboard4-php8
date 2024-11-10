<?php 
	$a_member_join= str_replace(">","><font title=회원가입 class=t_setup>",$a_member_join);
	$a_member_modify= str_replace(">","><font title=정보수정 class=t_setup>",$a_member_modify);
	$a_member_memo= str_replace(">","><font title=쪽지관리 class=t_setup>",$a_member_memo);
	$a_login= str_replace(">","><font title=로그인 class=t_setup>",$a_login);
	$a_member_join= str_replace(">","><font title=회원가입 class=t_setup>",$a_member_join);
	$a_logout= str_replace(">","><font title=로그아웃 class=t_setup>",$a_logout);
	$a_setup= str_replace(">","><font title=게시판설정 class=t_setup>",$a_setup);
?>
<script language=JavaScript>
function bluring(){
if(event.srcElement.tagName=="A"||event.srcElement.tagName=="IMG") document.body.focus();
}
document.onfocusin=bluring;
</script>
<script language=JavaScript>
function findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}
function swapImage() {
  var i,j=0,x,a=swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<?=$memo_on_sound?>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
	<tr>
	<td width=100%>
		<table border=0  cellspacing=0 cellpadding=0 width=100%>
			<tr>
			<td width=100% align=left valign=bottom style='padding: 0 0 0 20;' height=30>&nbsp;</td>
			<td aligh=right valign=bottom nowrap style="padding:0 10 0 0">
			<?=$a_member_join?>회원가입&nbsp;</font></a>
			<?=$a_member_modify?>정보수정&nbsp;</font></a>
			<?=$a_member_memo?>메모관리&nbsp;</font></a>
			<?=$a_login?>로그인&nbsp;</font></a>
			<?=$a_logout?>로그아웃&nbsp;</font></a>
			<?=$a_setup?>게시판설정&nbsp;</font></a></td>
			</tr>
		</table>
	</td>
	</tr>
</table>
<?=$hide_category_start?>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
	<tr><td class=bar1></td></tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
	<tr>
	<td><?php include "include/print_category.php"; ?></td>
	</tr>
</table>	
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>	
	<tr><td class=bar1></td></tr>
	<tr><td height=10></td></tr>
</table>
<?=$hide_category_end?>