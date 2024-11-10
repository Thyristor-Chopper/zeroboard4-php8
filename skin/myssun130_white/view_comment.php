<?php 
	$comment_name = str_replace(">","><font class=t_name>",$comment_name);
	$a_del = str_replace(">","><font class=t_han title=코멘트삭제>",$a_del);
	$date="<span title='".date("Y년 m월 d일 D H시 i분 s초", $c_data['reg_date'])."'><font class=t_date>".date("m.d", $c_data['reg_date'])."</font></span>";
	if($is_admin) $show_comment_ip = "<font class=t_eng>".$c_data['ip']."</font>";
	else $show_comment_ip = "";

//여기서 부터는 회원사진 리사이즈 관련
$picture_max=100; //회원사진 가로 크기 제한
if ($c_data['ismember']) {
	if(!$connect) dbconn();
	$c_temp = mysql_fetch_array(zb_query("select * from zetyx_member_table where no={$c_data['ismember']}"));
	if ($c_temp['picture'] == ''){
		$popup="$dir/noimage.jpg";
		$a_pic="<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($popup)."','popup','width=$pic_size[0],height=$pic_size[1],scrollbars=no,toolbars=no'))\">";
		//$c_picture="";  // 회원인데 회원사진이 없는 경우 사진 안나오게
		$c_picture="<img src='$dir/noimage.jpg' class='picture'>" ;  // 회원인데 회원사진이 없는 사람 이미지 정의
	}
	else{
		$pic_size=getimageSize($c_temp['picture']);
		$popup=$c_temp['picture'];
		$a_pic="<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($popup)."','popup','width=$pic_size[0],height=$pic_size[1],scrollbars=no,toolbars=no'))\">";
		if($pic_size[0]>$picture_max){
			$pic_width=$picture_max;
			$pic_height=$pic_size[1]*($pic_width/$pic_size[0]);
			$c_picture="<img src='{$c_temp['picture']}' width='$pic_width' height='$pic_height' class='picture'>";
		}else {
			$c_picture="<img src='{$c_temp['picture']}' class='picture'>";
		}
	}
}
else {
	$popup="$dir/noimage.jpg";
	$a_pic="<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($popup)."','popup','width=$pic_size[0],height=$pic_size[1],scrollbars=no,toolbars=no'))\">";
	//$c_picture="";  // 회원이 아닌 사람일경우 사진 안나오게
	$c_picture="<img src='$dir/nomember.jpg' class='picture'>";  // 회원이 아닌 사람에게 나오는 이미지 정의
}
?>

<table width=<?=$width?> cellspacing=0 cellpadding=0 border=0>
	<tr><td class=bar1></td></tr>
</table>
<table width=<?=$width?> cellspacing=0 cellpadding=0 style='table-layout:fixed'>
	<tr>
	<td style='padding:10 10 10 10' onmouseover="this.style.backgroundColor='#f7f7f7'" onmouseout="this.style.backgroundColor=''">
	<table width=100% cellspacing=0 cellpadding=0 style='table-layout:fixed'>
		<col width=110></col>
		<col width=1></col>
		<col width=></col>
		<col width=65></col>
		<tr valign=top>
		<td style='padding-right:10'><?=$a_pic?><?=$c_picture?></a></td>
		<td class='bar2'></td>
		<td style='word-break:break-all;padding-left:10'>
		<table width=100% cellspacing=0 cellpadding=0 style='table-layout:fixed'>
			<tr><td titli='<?=$show_comment_ip?>'><?=$c_face_image?> <?=$comment_name?></td></tr>
			<tr><td style='padding:10 0 0 10'><?=str_replace("\n","<br>",$c_memo)?></td></tr>
		</table></td>
		<td align="right">&nbsp;<?=$a_del?>삭제</a> | <?=$date?></td>
		</tr>
	</table>
	</td>
	</tr>
</table>

