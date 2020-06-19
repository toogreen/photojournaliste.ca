<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Philippe Roy - Photojournaliste</title>
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

<body background="images/bg.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/img_bswap_f1.jpg','images/img_bswap_f2.jpg','images/img_bswap_f3.jpg','images/img_bswap_f4.jpg','images/img_big_title_2.gif','images/img_big_title_3.gif','images/img_big_title_4.gif','images/img_big_title_1.gif')">
<?php include("includes/inc_top.php"); ?>
<table border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="1" valign="top"> <table border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><a href="index.php" onMouseOver="MM_swapImage('swap','','images/img_bswap_f1.jpg','swaptitle','','images/img_big_title_1.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/img_button_1.gif" name="img_b1" width="135" height="46" border="0"></a></td>
          <td rowspan="4"><img src="images/img_bswap_f4.jpg" name="swap" width="134" height="157" id="swap"></td>
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
          <td colspan="2" bgcolor="#000000"><img src="images/img_big_title_4.gif" name="swaptitle" width="200" height="39" id="swaptitle"><img src="images/img_stitle_swap.gif" name="swapstitle" width="110" height="39" id="swapstitle"></td>
		  <td colspan="2" bgcolor="#000000"><img src="images/spacer.gif" width="50" height="20"></td>
        </tr>
        <tr> 
          <td width="1%" align="left"><img src="images/spacer.gif" !width="49" width="10" height="100"></td>
          <td><!br><br>
<?
include("includes/connect_db.php");
if ($arch=="show") {
	$showarch=1;
} else {
	$showarch=0;
}
//Connection for flog entries
if ($id==0) { 
	 $query="SELECT * FROM flog WHERE archive='$showarch' ORDER BY id DESC";
}else{
	 $query="SELECT * FROM flog WHERE id='$id' ORDER BY id DESC";
}

$result=mysql_query($query);
$num=mysql_numrows($result);

//Connection for flog thumbnails
$query3="SELECT * FROM flog WHERE archive='$showarch' ORDER BY id DESC";
$result3=mysql_query($query3);
$num3=mysql_numrows($result3);

?>

<TABlE cellspacing="8">
	<TR>
	<TD valign="top">
	<br>
<?
$k=0;
$curmonth=date("m");
$curyear=date("y");

if ($showmonth==0) {
	$whichm=$curmonth;  
	} else { 
	$whichm=$showmonth;
}
if ($showyear==0) {
	$whichy=$curyear;  
	} else { 
	$whichy=$showyear;
}

while ($k < $num3) {
$id=mysql_result($result3,$k,"id");
$date=mysql_result($result3,$k,"date");
$date_text=mysql_result($result3,$k,"date_text");
$image=mysql_result($result3,$k,"image");
$blogmonth=substr($date, 5, 2);
$blogyear=substr($date, 2, 2);

// debut de la boucle pour le mois
// 2005-05-03 changed $whichmy to $whichy and = to ==
if ($whichm==$blogmonth AND $whichy==$blogyear ) {
if ($edit==$editvar) { 
	echo "<a href='flog_update.php?id=$id'>EDIT</a> | "; 
	echo "<a href='delete_flog.php?id=$id'><strong><FONT color='red'>DELETE</FONT></strong></a>"; 
}
echo "<A href='flog.php?showmonth=$blogmonth&showyear=$blogyear&id=$id'><IMG src='updates/photos/flog/$image' width='100' height='65' border='0'></A>";
echo "<br>$date<br><br>";
//fin de la boucle pour le mois
 }	
++$k;
}
//Section archives DEBUT
//echo "Archives<br><br>";
$m2=12;

if ($curyear>=5) {
// LOOP 2005
$m=substr($curmonth, 1, 1);
	while ($m>=1) {
		if ($m<=9) { 
			?>
			<a href="flog.php?showmonth=0<? echo $m; ?>&showyear=05">2005-0<? echo $m; ?></a><br>
			<?
		}else { 
			?>
			<a href="flog.php?showmonth=<? echo $m; ?>&showyear=05">2005-<? echo $m; ?></a><br>
			<?
		}
	--$m;
	}
}
// LOOP 2004
	while ($m2>4) {
		if ($m2<=9) { 
			?>
			<a href="flog.php?showmonth=0<? echo $m2; ?>&showyear=04">2004-0<? echo $m2; ?></a><br>
			<?
		}else { 
			?>
			<a href="flog.php?showmonth=<? echo $m2; ?>&showyear=04">2004-<? echo $m2; ?></a><br>
			<?
		}
	--$m2;
	}
	echo "<br>";
//Section archives FIN
?>
</TD>
<TD width="400" valign="top">
<?
if ($edit==$editvar) {
?>		
		<span class='blog_titre'>Add a new flog entry | <a href="flog.php">Exit EDIT mode</a></span>
		<form action="insert_flog.php" method="post">
		<input type="hidden" name="id" value="<? echo($id);?>">
		Date (chiffres)<input type="text" name="date" value="<? echo date("Y/m/d");?>"><br>
		Date (texte):<input type="text" name="date_text" value="<? echo date("l dS of F Y");?>"><br>
		Time:<input type="text" name="time" value="<? echo date("h:i:s A");?>"><br>
		Image:<input type="text" name="image" value="image_name.jpg">(Put in /updates/photos/flog/)<br>
		Poster:<input type="text" name="poster" value="Phil"><br>
		Text:<br> <textarea cols="67" rows="10" name="text" value=""></textarea><br>
		<input type="Submit">
		</form>
		<br><br>
<?

}

$i=0;
if ($showmonth==0) {
	$last=1; 
	} else { 
	$last=$num; 
}
while ($i < $last) {
$id=mysql_result($result,$i,"id");
$date=mysql_result($result,$i,"date");
$date_text=mysql_result($result,$i,"date_text");
$time=mysql_result($result,$i,"time");
$image=mysql_result($result,$i,"image");
$text=mysql_result($result,$i,"text");
$poster=mysql_result($result,$i,"poster");
$archive=mysql_result($result,$i,"archive");
$blogmonth2=substr($date, 5, 2);
$blogyear2=substr($realdate, 2, 2);

if ($last==1 or $blogmonth2==$showmonth or $showmonth==$curmonth AND $blogyear2==$showyear) {
	$last=1;

if ($edit==$editvar) { 
	echo "<a href='flog_update.php?id=$id'>EDIT</a> | "; 
	echo "<a href='delete_flog.php?id=$id'><strong><FONT color='red'>DELETE</FONT></strong></a>"; 
}
echo "<TABLE width='200' cellspacing='0' border='0' cellpadding='0' align='center'><TR><TD><IMG src='updates/photos/flog/$image' border='0'></TD></TR>";

echo "<br><TR><TD><span class='blog'>$text</span><br><p><span class='blog_comment'>Posted by $poster |  $time </TD><TR></TABLE>";

echo "<br><br>";
}
++$i;

}
// Partie des commentaires

//Connection for Flog comments
// Si aucun id n'est spécifié debut
if ($id>0) {
$query2="SELECT * FROM flog_comments WHERE flog_id='$id'";
$result2=mysql_query($query2);
$num2=mysql_numrows($result2);

mysql_close();

$j=0;
echo "<span class='blog_titre'>Leave your comment here...</span><br><br>";



while ($j < $num2) {

$fc_id=mysql_result($result2,$j,"fc_id");
$flog_id=mysql_result($result2,$j,"flog_id");
$name=mysql_result($result2,$j,"name");
$email=mysql_result($result2,$j,"email");
$url=mysql_result($result2,$j,"url");
$comments=mysql_result($result2,$j,"comments");


echo "<span class='blog'>$comments</span><br><p><span class='blog_comment'><a href='mailto:$email'>$name</a> | <a href='$url' target='_blank'>$url</a></span></p>";

if ($edit==$editvar) { 
	echo "<a href='delete_flog_comment.php?fc_id=$fc_id&flog_id=$flog_id'><strong><FONT color='red'>DELETE</FONT></strong></a>"; 
	}

++$j;
echo "<hr noshade size=1>";
//Si aucun id spécifié fin
}
}
?>
<br>
	<TABLE width="95%" !align="center"><TR><TD>
		<span class='blog_titre'>Add a new comment</span>
		<form action="insert_flog_comment.php" method="post">
		<input type="hidden" name="flog_id" value="<? echo($id);?>">
		Name:<input type="text" name="name" value=""><br>
		E-mail:<input type="text" name="email" value=""><br>
		URL:<input type="text" name="url" value="http://"><br>
		Comment:<br> <textarea cols="55" rows="10" name="comments" value=""></textarea><br>
		<input type="Submit">
		</form>
		</TD>
  </TR></TD></TR></TABlE>
	</td>
	  	<!--Colonne de droite debut-->
		<TD valign="top"><? include("updates/texts/text_flog_links.html"); ?></TD>
		<!--Colonne de droite fin-->
        </tr>
      </table>
      
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<map name="Map">
  <area shape="rect" coords="0,0,153,32" href="contact.php">
</map>
<!-- begin Nedstat Pro 4.0 code --><img src="http://fr.nedstatpro.net/cgi-bin/nedstatpro.gif?name=photojou_3" width=1 height=1 align=right><!-- end Nedstat Pro 4.0 code -->
</body>
</html>