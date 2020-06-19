<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php include("includes/inc_variables.php"); ?>
<head>
<title>Philippe Roy - Photojournaliste - Photos - <?php echo $namesection; ?> - thumbnails</title>
<?php include("updates/metatags.txt"); ?>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link href="updates/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body background="images/bg.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/img_bswap_f1.jpg','images/img_bswap_f2.jpg','images/img_bswap_f3.jpg','images/img_bswap_f4.jpg','images/img_big_title_2.gif','images/img_big_title_3.gif','images/img_big_title_4.gif')">
<?php include('includes/inc_top.php'); ?>
<table border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="1" valign="top"> <table border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><a href="index.php" onMouseOver="MM_swapImage('swap','','images/img_bswap_f1.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/img_button_1.gif" name="img_b1" width="135" height="46" border="0"></a></td>
          <td rowspan="4"><img src="images/img_bswap_f1.jpg" name="swap" width="134" height="157" id="swap"></td>
        </tr>
        <tr> 
          <td><a href="texts.php" onMouseOver="MM_swapImage('swap','','images/img_bswap_f2.jpg','swaptitle','','images/img_big_title_2.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/img_button_2.gif" name="img_b2" width="135" height="37" border="0"></a></td>
        </tr>
        <tr> 
          <td><a href="blog.php" onMouseOver="MM_swapImage('swap','','images/img_bswap_f3.jpg','swaptitle','','images/img_big_title_3.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/img_button_3.gif" name="img_b3" width="135" height="37" border="0"></a></td>
        </tr>
        <tr> 
          <td><a href="flog.php" onMouseOver="MM_swapImage('swap','','images/img_bswap_f4.jpg','swaptitle','','images/img_big_title_4.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/img_button_4.gif" name="img_b4" width="135" height="37" border="0"></a></td>
        </tr>
        <tr> 
          <td colspan="2"><img src="images/img_4_1.jpg" width="269" height="184" usemap="#Map" border="0"></td>
        </tr>
      </table></td>
    <td align="left" valign="top"> <table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/img_text_bg.jpg">
        <tr bgcolor="#000000"> 
          <td colspan="2" bgcolor="#000000"><img src="images/img_big_title_1.gif" name="swaptitle" width="200" height="39" id="swaptitle"><img src="images/img_stitle_swap<?php echo $cat; ?>.gif" name="swapstitle" width="110" height="39" id="swapstitle"></td>
          <td colspan="2" bgcolor="#000000">&nbsp;</td>
        </tr>
        <tr> 
          <td width="1%" align="left"><img src="images/spacer.gif" width="20" height="100"></td>
          <td>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="25"> 
                  <?php
				if ($photo<=1) {
   				?>
                  <img src="images/spacer.gif" width="18" height="16" border="0"> 
                  <?php
					} else {
   					?>
                  <a href="photos_big.php?cat=<?php echo $cat; ?>&photo=<?php $prev=$photo-1; echo $prev; if ($edit==$editvar) {echo("&edit=$editvar");} ?>"><img src="images/img_fleche1.gif" width="18" height="16" border="0"></a>	
                  <?php
			}
			?>
                </td>
                <td> <table border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td align="center" bgcolor="#000000"><img src="images/spacer.gif" width="10" height="0"></td>
                      <td align="center" bgcolor="#000000"><img src="updates/photos/s<?php echo $_GET ['cat']; ?>/<?php echo $_GET ['photo']; ?>.jpg" border="0"></td>
                      <td align="center" bgcolor="#000000"></td>
                    </tr>
                    <tr> 
                      <td align="center" bgcolor="#000000"></td>
                      <td align="center" bgcolor="#000000"></td>
                      <td align="center" bgcolor="#000000"><img src="images/spacer.gif" width="10" height="10"></td>
                    </tr>
                  </table></td>
                <td width="25" align="right"> 
                  <?php
				if ($photo<$total) {
   				?>
                  <a href="photos_big.php?cat=<?php echo $cat; ?>&photo=<?php $next=$photo+1; echo $next; if ($edit==$editvar) {echo("&edit=$editvar");} ?>"><img src="images/img_fleche2.gif" width="18" height="16" border="0"></a> 
                  <?php
					} else {
   					?>
                  <img src="images/spacer.gif" width="18" height="16" border="0"> 
                  <?php
			}
			?>
                </td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
                <td width=100> 
                  <!?php include("updates/texts/s{$cat}_comment_{$photo}.html"); ?>
<? 
//Connect and retrieve database info
include("includes/connect_db.php");
$query="SELECT * FROM comments WHERE id='$photo' AND cat='$cat'";
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();

//First big loop (editable mode or not)
if ($edit==$editvar) { //if editable mode enabled:
	?>
	<!--Lien pour sortir du mode EDIT-->
	<div align="right"><a href="photos_big.php?cat=<?php echo $cat; ?>&photo=<?php echo $photo;?>">Exit EDIT mode</a> </div>
	<?
	if ($num==0) { // no records
		?>
		<form action="insert_comment.php" method="post">
		<input type="hidden" name="cat" value="<? echo($cat);?>">
		<input type="hidden" name="id" value="<? echo($photo);?>">
		Commentaires:<br> <textarea cols="50" rows="3" name="comment" value="">No comments inserted yet</textarea><br>
		<input type="Submit">
		</form>
		<?
	}else{ // if there is a record
		$comment=mysql_result($result,$i,"comment");
		?>
		<form action="update_comment.php" method="post">
		<input type="hidden" name="ud_cat" value="<? echo($cat);?>">
		<input type="hidden" name="ud_id" value="<? echo($photo);?>">
		Commentaires:<br> <textarea cols="50" rows="3" name="ud_comment" value="<? echo($comment);?>"><? echo($comment);?></textarea><br>
		<input type="Submit" value="Udpate">
		</form>
	<? 
	} 
}else{ //if editable mode NOT enabled, then:
	if ($num==0) { //if no records do nothing
	}else{  //if there's a record, then retrieve the content and display it
	$comment=mysql_result($result,$i,"comment");
	}
	?>
	<br>
	<span class="comment"><? echo($comment);?></span>
<?
}
?>
                </td>
                <td align="right">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><p>&nbsp;</p>
                  <p>&lt;&lt; <a href="photos.php?cat=<?php echo $cat; ?>" class="small"> 
                    Back to <?php echo $namesection; ?>'s thumbnails</a> </p>
                  <p></p></td>
                <td align="right">&nbsp;</td>
              </tr>
            </table>
            <br>
          </td>
        </tr>
      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<map name="Map">
  <area shape="rect" coords="0,0,153,32" href="contact.php">
</map>
</body>
</html>
