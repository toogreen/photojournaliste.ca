<?php include("includes/inc_editvar.php"); ?>
<?php
//include("updates/texts/text_texts.html");
//include("includes/inc_variables.php"); 
include("includes/connect_db.php");
//$query="SELECT * FROM texts WHERE scat='3'";
//$result=mysql_query($query);
//$num=mysql_numrows($result);

?>
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
          <td rowspan="4"><img src="images/img_bswap_f2.jpg" name="swap" width="134" height="157" id="swap"></td>
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
          <td colspan="2" bgcolor="#000000">
	  <TABLE cellspacing="0" border="0" cellpadding="0">
         <TR>
	  <TD><a href="texts.php"><img src="images/img_big_title_2.gif" name="swaptitle" width="200" height="39" id="swaptitle" border=0></a></TD>
	<TD><img src="images/spacer.gif" name="swapstitle" width="1" height="39" id="swapstitle"></TD>
	   <TD valign="bottom" nobr nowrap><? include("includes/inc_texts_menu.php");?></TD>
	 </TR>
       </TABLE>
		  <td colspan="2" bgcolor="#000000"><img src="images/spacer.gif" width="50" height="20"></td>
        </tr>
        <tr> 
          <td width="1%" align="left"><img src="images/spacer.gif" width="49" height="100"></td>
          <td>
<?
echo "<br><br>";
if ($edit==$editvar) {
?>		
		<span class='blog_titre'>Add a new text entry | <a href="texts_2.php?scat=2">Exit EDIT mode</a></span>
		<form action="insert_text.php" method="post">
		<input type="hidden" name="id" value="<? echo($id);?>">
		<input type="hidden" name="scat" value="<? echo($scat);?>">
		Title:<input type="text" name="title" size="55" value="<? echo($title);?>"><br>
		Image:<input type="text" name="image" size="55" value="images/spacer.gif"><br>
		Link:<input type="text" name="link" size="55" value="<? echo ($link);?>"><br>
		Subsection:<select name="s_section" size="1"><br>
			<option value="1" selected>No Subsections</option>
			</select><br>
		Intro:<br> <textarea cols="67" rows="5" name="intro" value=""><? echo($intro);?></textarea><br>
		Text:<br> <textarea cols="67" rows="10" name="text" value=""><? echo($text);?></textarea><br>
		<input type="Submit" value="Insert">
		</form>
		<br><br><br>
<?
}

	$ss=1;

	while ($ss < 2) {

		if ($ss==1) { $ssname="General"; }
//		if ($ss==2) { $ssname="Quoted"; }
//		if ($ss==3) { $ssname="Text"; }
//		echo "<span class='blog_titre'>$ssname</span><br><br>";
		
		$query2="SELECT * FROM texts WHERE s_section='$ss' AND scat='$scat'";
		$result2=mysql_query($query2);
		$num2=mysql_numrows($result2);


			$i=0;
			while ($i < $num2) {
			
			$id=mysql_result($result2,$i,"id");
			$scat=mysql_result($result2,$i,"scat");
			$title=mysql_result($result2,$i,"title");
			$intro=mysql_result($result2,$i,"intro");
			$text=mysql_result($result2,$i,"text");
			$image=mysql_result($result2,$i,"image");
			$link=mysql_result($result2,$i,"link");
			$s_section=mysql_result($result2,$i,"s_section");
			
			if ($edit==$editvar) { 
				//echo "<a href='blog_update.php?id=$id'>EDIT</a> | ";
				echo "<a href='texts_update.php?id=$id'><strong>EDIT</a> | </strong>"; 
				echo "<a href='delete_text.php?id=$id&scat=$scat'><strong><FONT color='red'>DELETE</a> | </FONT></strong>"; 
			}
			echo "<strong>$title</strong><br>";
			//$intro_text=substr($text, 0, 200);
			//echo "$intro_text...";
			echo "$intro.. ";
			echo "<A href='texts_detail.php?scat=$scat&id=$id'>Read more >></A><br><br><br>";
					
			++$i;
			}
		echo "<br><br>";
	++$ss;
	}

	
mysql_close();	
?>
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
<!-- begin Nedstat Pro 4.0 code --><img src="http://fr.nedstatpro.net/cgi-bin/nedstatpro.gif?name=photojou_5" width=1 height=1 align=right><!-- end Nedstat Pro 4.0 code -->
</body>
</html>
