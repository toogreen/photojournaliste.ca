<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<table>
<head>
<title>ITC Curriculum Year 1 - UPDATE A UNIT</title>
<link href="includes/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="15" topmargin="15" marginwidth="15" marginheight="15">

<?
// GET DATA FOR ACTIVITIES
include("includes/connect_db.php");
$jquery="SELECT * FROM act WHERE id='$id'";
$jresult=mysql_query($jquery);
$jnum=mysql_numrows($jresult);

// START LOOP FOR ACTIVITIES
$j=0;
while ($j < $jnum) {
$u_num=mysql_result($jresult,$j,"u_num");
$obj1=mysql_result($jresult,$j,"obj1");
$obj2=mysql_result($jresult,$j,"obj2");
$act=mysql_result($jresult,$j,"act");
$outcome=mysql_result($jresult,$j,"outcome");
$note=mysql_result($jresult,$j,"note");
?>

<!--UPDATE ACT FORM STARTS HERE-->	
<form action="update_act.php" method="post">
<input type="hidden" name="ud_id" value="<? echo($id);?>">
<b><font size="4">Update activity</font></b><br><br>
<input type="hidden" name="ud_u_num" value="<? echo($u_num);?>">
<b><font size="3">LEARNING OBJECTIVES</font></b><br><br>
<ul>
<li>Key idea:<br><textarea cols="80" rows="4" name="ud_obj1"><? echo($obj1);?></textarea><br>
<li>Technique:<br><textarea cols="80" rows="4" name="ud_obj2"><? echo($obj2);?></textarea><br>
</ul>
<br><br>
Possible teaching activities:<br><textarea cols="80" rows="4" name="ud_act"><? echo($act);?></textarea><br><br>
Learning outcomes:<br><textarea cols="80" rows="4" name="ud_outcome"><? echo($outcome);?></textarea><br><br>
Points to note:<br><textarea cols="80" rows="4" name="ud_note"><? echo($note);?></textarea><br><br>
<input type="Submit">
</form>
<?
++$j;
}
mysql_close();
?>
<!--UPDATE ACT FORM STOPS HERE-->  
<br><br> 

</body>
</html>