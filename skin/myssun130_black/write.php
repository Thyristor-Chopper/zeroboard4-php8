<?php 
	if($mode=="reply") $title="답글 쓰기";
	elseif($mode=="modify") $title="글 수정하기";
	else $title="글쓰기";

?>

<SCRIPT LANGUAGE="JavaScript">
<!--
function zb_formresize(obj) {
	obj.rows += 3;
}
// -->
</SCRIPT>
<table border=0 width=<?=$width?> cellsapcing=0 cellpadding=0 style=table-layout:fixed>
	<form method=post name=write action=write_ok.php onsubmit="return check_submit();" enctype=multipart/form-data>
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
	<col width=90 align=right></col><col width=100% style=padding-left:10></col>
	<tr>
	<td class='write_title' align=center colspan=2><b><?=$title?><b></td>
	</tr>
	<?=$hide_start?>
	<tr>
  	<td><font class=t_write>이름</font></td>
  	<td><input type=text name=name value="<?=$name?>" <?=size(20)?> maxlength=20 class=input2></td>
	</tr>
	<tr>
  	<td><font class=t_write>비밀번호</font></td>
  	<td><input type=password name=password <?=size(20)?> maxlength=20 class=input2></td>
	</tr>
	<tr>
  	<td><font class=t_write>이메일</font></td>
  	<td><input type=text name=email value="<?=$email?>" <?=size(40)?> maxlength=200 class=input2></td>
	</tr>
	<tr>
  	<td><font class=t_write>홈페이지</font></td>
  	<td><input type=text name=homepage value="<?=$homepage?>" <?=size(40)?> maxlength=200 class=input2></td>
	</tr>
	<?=$hide_end?>
	<tr>
  	<td style=padding-top:3><font class=t_write style=padding-top:3>옵 션</font></td>
  	<td class=t_write>
       	<?=$category_kind?>
       	<?=$hide_notice_start?> <input type=checkbox name=notice <?=$notice?> value=1> <font class=t_write>공지사항</font> <?=$hide_notice_end?>
       	<?=$hide_html_start?> <input type=checkbox name=use_html <?=$use_html?> value=1> <font class=t_write>태그사용</font> <?=$hide_html_end?>
       	<input type=checkbox name=reply_mail <?=$reply_mail?> value=1> <font class=list_han>답변메일받기</font>
       	<?=$hide_secret_start?> <input type=checkbox name=is_secret <?=$secret?> value=1> <font class=t_write>비밀글</font> <?=$hide_secret_end?>
  	</td>
	</tr>
	<tr valign=top>
 	<td><font class=t_write>제 목</font></td>
 	<td><input type=text name=subject value="<?=$subject?>" <?=size(60)?> maxlength=200 style='width:95%;word-break:break-all;' class=input2></td>
	</tr>

	<tr>
  	<td onclick=document.write.memo.rows=document.write.memo.rows+4 style=cursor:hand><font class=t_write>내 용</font><br><font class=t_write>▼&nbsp;&nbsp;&nbsp;</font></td>
  	<td style='padding-top:8px;padding-bottom:8px;' class='scroll4'><textarea name=memo <?=size2(90)?> rows=12 class=input2 style='overflow-y:auto; overflow-x:hidden;width:95%;word-break:break-all;padding:6 6 0 6;'><?=$memo?></textarea></td>
	</tr>

	<?=$hide_sitelink1_start?>
	<tr>
  	<td><font class=t_write>링크 1</font></td>
  	<td><input type=text name=sitelink1 value="<?=$sitelink1?>" <?=size(62)?> maxlength=200 class=input2 style='width:95%;word-break:break-all;'></td>
	</tr>
	<?=$hide_sitelink1_end?>

	<?=$hide_sitelink2_start?>
	<tr>
  	<td><font class=t_write>링크 2</font></td>
  	<td><input type=text name=sitelink2 value="<?=$sitelink2?>" <?=size(62)?> maxlength=200 class=input2 style='width:95%;word-break:break-all;'></td>
	</tr>
	<?=$hide_sitelink2_end?>

	<?=$hide_pds_start?>
	<tr>
  	<td>&nbsp;</td>
  	<td >업로드 제한은 <?=$upload_limit?> 입니다.</td>
	</tr>
	<tr>
  	<td><font class=t_write>파일업로드 1</font></td>
  	<td class=list_eng><input type=file name=file1 <?=size(50)?> maxlength=255 class=input2 style='width:95%;word-break:break-all;'> <?=$file_name1?></td>
	</tr>
	<tr>
  	<td><font class=t_write>파일업로드 2</font></td>
  	<td class=list_eng><input type=file name=file2 <?=size(50)?> maxlength=255 class=input2 style='width:95%;word-break:break-all;'> <?=$file_name2?></td>
	</tr>

	<?=$hide_pds_end?>

</table>

<table border=0 width=<?=$width?> cellsapcing=0 cellpadding=0>
	<tr>
	<td colspan=2>
	<table border=0 cellspacing=1 cellpadding=2 width=100% height=40>
		<tr>
		<td align=left style='padding:0 0 0 20;'>
		<?=$a_preview?>미리보기</a>&nbsp;&nbsp;
		<?=$a_imagebox?>그림창고</a>&nbsp;
		</td>
		<td align=right style='padding:0 20 0 0;'>
		<input type=submit value="작성완료" class=submit accesskey="s">
		<input type=button value="취소하기" class=submit onclick=history.back()>
		</td>
		</tr>
	</table>
	</td>
</tr>
</table>
<br>
