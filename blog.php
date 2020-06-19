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

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}
//-->
</script>
<link href="updates/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body background="images/bg.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/img_bswap_f1.jpg','images/img_bswap_f2.jpg','images/img_bswap_f3.jpg','images/img_bswap_f4.jpg','images/img_big_title_2.gif','images/img_big_title_3.gif','images/img_big_title_4.gif','images/img_big_title_1.gif')">
<?php include("includes/inc_top.php"); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="1" valign="top"> <table border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><a href="index.php" onMouseOver="MM_swapImage('swap','','images/img_bswap_f1.jpg','swaptitle','','images/img_big_title_1.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="images/img_button_1.gif" name="img_b1" width="135" height="46" border="0"></a></td>
          <td rowspan="4"><img src="images/img_bswap_f3.jpg" name="swap" width="134" height="157" id="swap"></td>
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
          <td colspan="2" bgcolor="#000000"><img src="images/img_big_title_3.gif" name="swaptitle" width="200" height="39" id="swaptitle"><img src="images/img_stitle_swap.gif" name="swapstitle" width="110" height="39" id="swapstitle"></td>
		  <td colspan="2" bgcolor="#000000"><img src="images/spacer.gif" width="50" height="20"></td>
        </tr>
        <tr> 
        <!-- Colonne ARchives DEBUT -->
          <td width="1%" align="left" valign="top"><img src="images/spacer.gif" width="60" height="50">

<?
//Section archives
//echo "Archives<br><br>";
$m2=12;
$curmonth=date("m");
$curyear=date("y");
$y=substr($curyear, 0, 2);
$m=substr($curmonth, 1, 1);
//echo $y;
//echo $m;

if ($curyear>=5) {
//LOOP 2005
	while ($m>=1) {
		if ($m<10) { 
			?>
			<a href="blog.php?showmonth=0<? echo $m; ?>&showyear=<? echo $y; ?>">20<?
echo $curyear; ?>-0<? echo $m; ?></a><br>
			<?
		}else { 
			?>
			<a href="blog.php?showmonth=<? echo $m; ?>&showyear=<? echo $y; ?>">20<?
echo $curyear; ?>-<? echo $m; ?></a><br>
			<?
		}
	--$m;
	}
}

//LOOP 2004
	while ($m2>4) {
		if ($m2<=9) { 
			?>
			<a href="blog.php?showmonth=0<? echo $m2; ?>&showyear=04">2004-0<? echo $m2; ?></a><br>
			<?
		}else { 
			?>
			<a href="blog.php?showmonth=<? echo $m2; ?>&showyear=04">2004-<? echo $m2; ?></a><br>
			<?
		}
	--$m2;
	}

	?>
<!-- Colonne ARchives FIN -->
</td>
 <td valign="top"><br><br>
<?
include("includes/connect_db.php");
if ($arch=="show") {
	$showarch=1;
} else {
	$showarch=0;
}
$query="SELECT * FROM blog WHERE archive='$showarch' ORDER BY id DESC";
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();
echo date("");
if ($edit==$editvar) {
?>		
		<span class='blog_titre'>Add a new blog entry | <a href="blog.php">Exit EDIT mode</a></span>
		<form action="insert_blog.php" method="post">
		<input type="hidden" name="id" value="<? echo($id);?>">
		Date:<input type="text" name="date" value="<? echo date("l dS of F Y");?>"><br>
		Time:<input type="text" name="time" value="<? echo date("h:i:s A");?>"><br>
		Invisible:<select name="archive" size="1">
	  		<option value="0" selected>No</option>
	  		<option value="1">Yes</option>
			</select>
		<input type="hidden" name="comments" value="<? echo($comments);?>">
		<input type="hidden" name="realdate" value="<? echo date("Y-m-d"); ?>">
		Poster:<input type="text" name="poster" value="Philippe Roy"><br>
		Text:<br> <textarea cols="67" rows="10" name="text" value=""></textarea><br>
		<input type="Submit">
		</form>
<?
}

$i=0;
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
while ($i < $num) {
$id=mysql_result($result,$i,"id");
$date=mysql_result($result,$i,"date");
$time=mysql_result($result,$i,"time");
$text=mysql_result($result,$i,"text");
$poster=mysql_result($result,$i,"poster");
$comments=mysql_result($result,$i,"comments");
$archive=mysql_result($result,$i,"archive");
$realdate=mysql_result($result,$i,"realdate");
$blogmonth=substr($realdate, 5, 2);
$blogyear=substr($realdate, 2, 2);

// debut de la boucle pour le mois
if ($whichm==$blogmonth AND $whichy==$blogyear) {
echo "<br><b><span class='blog_titre'>$date</span></b>&nbsp;&nbsp;";

if ($edit==$editvar) { 
	echo "<a href='blog_update.php?id=$id'>EDIT</a> | "; 
	echo "<a href='delete_blog.php?id=$id'><strong><FONT color='red'>DELETE</FONT></strong></a>"; 
}

echo "<br><br><span class='blog'>$text</span><br><span class='blog_comment'>Posted by $poster |  $time | ";

if ($edit==$editvar) {
	?>
	<a href="javascript:void();"onClick="MM_openBrWindow('popup_blog_comments.php?blog_id=<? echo($id);?>&edit=<? echo($editvar); ?>','','toolbar=no,scrollbars=yes,resizable=yes,width=450,height=500')">edit comments</a></span></p><br>
	<?
} else {
	?>
	<a href="javascript:void();"onClick="MM_openBrWindow('popup_blog_comments.php?blog_id=<? echo($id);?>','','toolbar=no,scrollbars=yes,resizable=yes,width=450,height=500')">comments</a></span></p><br>
	<?
 }

//fin de la boucle pour le mois
 }	
++$i;
}
// BAS DE PAGE AVEC LIENS VERS ARCHIVES

if ($edit==$editvar) {	
	echo "<hr width='100%' size='1' noshade>";
	if ($showarch<>1) {
		echo "<A href='blog.php?arch=show&edit=$editvar'><strong>View/Edit Invisibles blog entries</strong></A>";
	}else{
		echo "<A href='blog.php?edit=$editvar'><strong>Back to edit visible blog entries</strong></A>";
	}	
}

?>
<br><br>
<!--Colonne des liens debut-->
<td valign="top"><br><br><? include("updates/texts/text_blog_links.html"); ?></td>
<!--Colonne des liens fin-->
	</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<map name="Map">
  <area shape="rect" coords="0,0,153,32" href="contact.php">
</map>
<!-- begin Nedstat Pro 4.0 code --><imgif ($showmonth==$blog) src="http://fr.nedstatpro.net/cgi-bin/nedstatpro.gif?name=photojou_2" width=1 height=1 align=right><!-- end Nedstat Pro 4.0 code -->
<!-- Begin Nedstat Basic code -->
<!-- Title: Blog -->
<!-- URL: http://www.photojournaliste.ca/blog.php -->
<script language="JavaScript" type="text/javascript" src="http://m1.nedstatbasic.net/basic.js">
</script>
<script language="JavaScript" type="text/javascript" >
<!--
  nedstatbasic("AC6DTwe52AsF7sb9E8gYJXzSRV/A", 0);
// -->
</script>
<noscript>
<a target="_blank" href="http://www.nedstatbasic.net/stats?AC6DTwe52AsF7sb9E8gYJXzSRV/ A"><img
src="http://m1.nedstatbasic.net/n?id=AC6DTwe52AsF7sb9E8gYJXzSRV/A"
border="0" width="1" height="1"
alt="Nedstat Basic - Free web site statistics
Personal homepage website counter"></a><br>
<a target="_blank" href="http://www.nedstatbasic.net/">Free counter</a>
</noscript>
<!-- End Nedstat Basic code --> 
</body>
</html>
