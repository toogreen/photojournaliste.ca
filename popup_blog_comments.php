<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Philippe Roy - Photojournaliste</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php include("updates/metatags.txt"); ?>
<link href="updates/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body marginwidth=0 marginheight=0 topmargin=0 leftmargin=0 bgcolor="#f2f2f2">
<TABLE width="100%" !align="center">
    <?
include("includes/connect_db.php");
$query="SELECT * FROM blog_comments WHERE blog_id='$blog_id'";
$result=mysql_query($query);
$num=mysql_numrows($result);

mysql_close();

$i=0;
$td=1;
echo "<br><span class='blog_titre'>&nbsp;&nbsp;Leave your comment here...</span><br>";
//echo "<tr><td bgcolor='F9F9F9'></td></tr>";

++$new_id;

while ($i < $num) {

$id=mysql_result($result,$i,"id");
$blog_id=mysql_result($result,$i,"blog_id");
$name=mysql_result($result,$i,"name");
$email=mysql_result($result,$i,"email");
$url=mysql_result($result,$i,"url");
$comment=mysql_result($result,$i,"comment");

if ($td==0) { 
	$td=$td+1;
	$tdbgcolor="#f9f9f9";
	 
} else { 
	$td=$td-1;
	$tdbgcolor="#EEEEEE";
}

echo "<TR><TD bgcolor='$tdbgcolor'>";
echo "<TABLE width='95%' align='center'><TR><TD>";
echo "<span class='blog'>$comment</span><br><p><span class='blog_comment'><a href='mailto:$email'>$name</a> | <a href='$url' target='_blank'>$url</a></span></p>";

if ($edit==$editvar) { 
	echo "<a href='delete_popup_blog_comment.php?id=$id&blog_id=$blog_id'><strong><FONT color='red'>DELETE</FONT></strong></a>"; 
	}

echo "</TD></TR></TABLE>";
echo "</TD></TR>";
++$i;
}
?>
</TR></TABLE>
	<br>
	<TABLE width="95%" align="center"><TR><TD>
		<span class='blog_titre'>Add a new comment</span>
		<form action="insert_blog_comment.php" method="post">
		<input type="hidden" name="blog_id" value="<? echo($blog_id);?>">
		Name:<input type="text" name="name" value=""><br>
		E-mail:<input type="text" name="email" value=""><br>
		URL:<input type="text" name="url" value="http://"><br>
		Comment:<br> <textarea cols="45" rows="10" name="comment" value=""></textarea><br>
		<input type="Submit">
		</form>
    </TD>
  </TR>
</TABLE>
</body>
</html>