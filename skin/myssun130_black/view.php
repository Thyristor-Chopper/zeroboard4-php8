<?php 
	$name = str_replace(">","><font class=t_name>",$name);
	$homepage = str_replace(">","><font class=t_eng></b>",$homepage);
	$a_file_link1 = str_replace(">","><font class=t_eng></b>",$a_file_link1);
	$a_file_link2 = str_replace(">","><font class=t_eng></b>",$a_file_link2);
	$sitelink1 = str_replace(">","><font class=t_eng></b>",$sitelink1);
	$sitelink2 = str_replace(">","><font class=t_eng></b>",$sitelink2);
	$date="<span title='".date("Y년 m월 d일 D H시 i분 s초", $data['reg_date'])."'><font class=t_date>".date("y.m.d", $data['reg_date'])."</font></span>";

//여기서부터는 업로드 이미지 리사이즈 관련, 파일명 보기관련
$image_max = 450; // 업로드 이미지 글 내용보기에서의 width값
		  // 왼쪽에 회원 사진이 나오는 곳이 180정도를 차지합니다. 잘 계산해서 수치를 적어주세요.
		  // 게시판 가로 전체 길이가 630인경우 450이 적당합니다.
if(eregi("\.jpg|\.png|\.gif|\.jpeg",$data['file_name1'])&&file_exists($data['file_name1'])) {
    	$image_size1=getimageSize($data['file_name1']);
    	$screenshot1=$data['file_name1'];
    	if($image_size1[0]>$image_max){
       		$image_width1=$image_max;
       		$image_height1=$image_size1[1]*($image_max/$image_size1[0]);
    		$a_img1="<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($screenshot1)."','screenshot1','width=$image_size1[0],height=$image_size1[1],scrollbars=no,toolbars=no'))\">";
    	} else{
    		$image_width1=$image_size1[0];
    		$image_height1=$image_size1[1];
		$a_img1="<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($screenshot1)."','screenshot1','width=$image_size1[0],height=$image_size1[1],scrollbars=no,toolbars=no'))\">";
	}
}
if(eregi("\.jpg|\.png|\.gif|\.jpeg",$data['file_name2'])&&file_exists($data['file_name2'])) {
    	$image_size2=getimageSize($data['file_name2']);
    	$screenshot2=$data['file_name2'];
    	if($image_size2[0]>$image_max){
       		$image_width2=$image_max;
       		$image_height2=$image_size2[1]*($image_max/$image_size2[0]);
    		$a_img2="<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($screenshot2)."','screenshot1','width=$image_size2[0],height=$image_size2[1],scrollbars=no,toolbars=no'))\">";
    	} else{
    		$image_width2=$image_size2[0];
    		$image_height2=$image_size2[1];
		$a_img2="<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($screenshot2)."','screenshot1','width=$image_size2[0],height=$image_size2[1],scrollbars=no,toolbars=no'))\">";
	}
}

//여기서 부터는 회원사진 리사이즈 관련
$picture_max=100; //회원사진 가로 크기 제한
if ($data['ismember']) {
	if(!$connect) dbconn();
	$temp = mysql_fetch_array(zb_query("select * from zetyx_member_table where no={$data['ismember']}"));
	if ($temp['picture'] == ''){
		$popup="$dir/noimage.jpg";
		$a_pic="<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($popup)."','popup','width=$pic_size[0],height=$pic_size[1],scrollbars=no,toolbars=no'))\">";
		//$picture="";  // 회원인데 회원사진이 없는 사람 이미지 안나오게
		$picture="<img src='$dir/noimage.jpg' class='picture'>" ;  // 회원인데 회원사진이 없는사람 이미지 정의
	}
	else{
		$pic_size=getimageSize($temp['picture']);
		$popup=$temp['picture'];
		$a_pic="<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($popup)."','popup','width=$pic_size[0],height=$pic_size[1],scrollbars=no,toolbars=no'))\">";
		if($pic_size[0]>$picture_max){
			$pic_width=$picture_max;
			$pic_height=$pic_size[1]*($pic_width/$pic_size[0]);
			$picture="<img src='{$temp['picture']}' width='$pic_width' height='$pic_height' class='picture'>";
		}else {
			$picture="<img src='{$temp['picture']}' class='picture'>";
		}
	}
}
else {
	$popup="$dir/noimage.jpg";
	$a_pic="<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($popup)."','popup','width=$pic_size[0],height=$pic_size[1],scrollbars=no,toolbars=no'))\">";
	//$picture="";  // 회원이 아닌 사람일 경우 이미지 안나오게
	$picture="<img src='$dir/nomember.jpg' class='picture'>" ;  // 회원이 아닌 사람에게 나오는 이미지 정의
}

?>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?> style='table-layout:fixed;'>
	<tr><td class='bar1'></td></tr>
	<tr>
	<td style='padding:10 10 10 10'>
	<table border=0 cellspacing=0 cellpadding=0 width='100%' style='table-layout:fixed;'>
		<col width='110'></col>
		<col width='1'></col>
		<col width=''></col>
		<tr>
		<td style='padding:0 10 0 0' valign='top'>
		<table border=0 cellspacing=0 cellpadding=0 width='100%'>
			<tr><td style='padding:0 0 5 0' align='left'><?=$a_pic?><?=$picture?></a></td>
			</tr>
			<tr><td style='padding:0 0 0 0'><font class='t_name'>이름 | </font><?=$face_image?> <?=$name?></td></tr>
			<tr><td style='padding:0 0 0 0'><?php if($data['homepage']){?><a href="<?=$data['homepage']?>" target=_blank><font class='t_eng'>Homepage</font></a>&nbsp;<?php }?>
			</td>
			</tr>
		</table>
		</td>
		<td class='bar2'></td>
		<td valign='top' style='padding:0 0 0 10'>
		<table border=0 cellspacing=0 cellpadding=0 width='100%' style='table-layout:fixed;'>
			<tr><td class=bar1></td></tr>
			<td class='view1'>
			<table border=0 cellspacing=0 cellpadding=0 width='100%' style='table-layout:fixed;'>
				<col width=></col>
				<col width='1'></col>
				<col width='110'></col>
				<tr><td><font class=t_subject><?=$subject?></font></td>
				<td class='bar2'></td>
				<td style='padding:0 0 0 10'><table width=100% cellspacing=0 cellpadding=0>
				<tr><td valign=top><font class=t_han>조회수 | <?=number_format($hit)?></font></td>
				<tr><td valign=top><font class=t_han>작성일 | </font><?=$date?></td>
				</table></td>
				</tr>
			</table>
			<tr><td class=bar1 colspan='3'></td></tr>
		</table>
		<table border=0 cellspacing=0 cellpadding=0 width='100%'>
			<?=$hide_sitelink1_start?>
			<tr>
			<td align=left class='view3'>| <font class=t_han>링크1 : </font><?=$sitelink1?></font></td>
			</tr>
			<tr><td class=bar1></td></tr>
			<?=$hide_sitelink1_end?>
			<?=$hide_sitelink2_start?>
			<tr>
			<td align=left class='view3'>| <font class=t_han>링크2 : </font><?=$sitelink2?></font></td>
			</tr>
			<tr><td class=bar1></td></tr>
			<?=$hide_sitelink2_end?>
			<?=$hide_download1_start?>
			<?php if(!$file_name1 || eregi("(\.(gif|jpg|jpeg|bmp|png))$",$file_name1)) { } else { ?>
			<tr>
			<td align=left class='view3'>| <font class=t_han>파일1 : </font><?=$a_file_link1?><?=$file_name1 ?> (<?=$file_size1?>)</a>, <font class=t_han>다운로드 : </font><?=$file_download1?></td>
			</tr>
			<tr><td class=bar1></td></tr>
			<?php }?>
			<?=$hide_download1_end?>
			<?=$hide_download2_start?>
			<?php if(!$file_name2 || eregi("(\.(gif|jpg|jpeg|bmp|png))$",$file_name2)) { } else { ?>
			<tr>
			<td align=left class='view3'>| <font class=t_han>파일2 : </font><?=$a_file_link2?><?=$file_name2 ?> (<?=$file_size2?>)</a>, <font class=t_han>다운로드 : </font><?=$file_download2?></td>
			</tr>
			<tr><td class=bar1></td></tr>
			<?php }?>
			<?=$hide_download2_end?>
			<tr>
			<td>
			<table border=0 cellspacing=0 cellpadding=0 style='table-layout:fixed;' width=100%>
				<tr>
				<td class='view_main'>
				<table  border=0 cellspacing=0 cellpadding=0 width=100% style='table-layout:fixed;'>
					<tr><td align=center style='padding-bottom:10'><?=$hide_download1_start?><?=$a_img1?><img src="<?=$screenshot1?>" width=<?=$image_width1?> height=<?=$image_height1?> border=0></a><?=$hide_download1_end?></td></tr>
					<tr><td align=center style='padding-bottom:10'><?=$hide_download2_start?><?=$a_img2?><img src="<?=$screenshot2?>" width=<?=$image_width2?> height=<?=$image_height2?>  border=0></a><?=$hide_download2_end?></td></tr>
				</table>
				<?=$memo?>
				</td>
				</tr>
			</table>
			<div align=right class=t_eng style='padding-right:5 10 5 0'><?=$ip?></div>
			</td>
			</tr>
		</table>
		</td>
		</tr>
	</table>
	</td>
	</tr>
</table>