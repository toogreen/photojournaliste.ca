<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
<title><?echo($sub);?> Lesson Plans - Weeks list</title>
<link href="includes/stylesheet.css" rel="stylesheet" type="text/css">
<STYLE TYPE="text/css">
     P.breakhere {page-break-before: always}
</STYLE>
</head>
<body bgcolor="<? echo($bgcolor); ?>" leftmargin="15" topmargin="15" marginwidth="15" marginheight="15">
<a name="top"></a>

<?

// GET DATA FOR TABLE WEEK
include("includes/connect_db.php");
$query="SELECT * FROM week WHERE wuid='$uid' ORDER BY wdate DESC";
$result=mysql_query($query);
$num=mysql_numrows($result);
?>

<center>
<!-- TITLE BEGIN -->
<div align="center"><font size='4' face='Verdana, Arial, Helvetica, sans-serif'><b><?echo($sub);?> lesson plans for <?echo($name);?> / <?echo($class);?></b></font><br><br></div>
<!-- TITLE END -->

<!--BIG WRAP TABLE STARTS HERE -->
<table WIDTH="80%" border="<? echo ($border);?>" cellspacing="<? echo ($cs);?>" bgcolor="#000000">
  <tr>
    <td bgcolor="#000000">
    
<!--MAIN TABLE STARTS HERE-->
<table WIDTH="100%" border="<? echo ($border);?>" cellspacing="<? echo ($cs);?>" bgcolor="#FFFFFF">
<tr>
<td valign="top" width="50%">
<!-- WEEKS TABLE STATS HERE -->
<table border="0">
<tr>
<td width="70"><b><h3>Week of:</h3></b></td>
</tr>
<?
// START LOOP FOR THE WEEK
$i=0;
$l1=$num; //this is a runaround because the next loop won't take $num for some reason
while ($i < $l1) {
$wid=mysql_result($result,$i,"wid");
$wuid=mysql_result($result,$i,"wuid");
$wdate=mysql_result($result,$i,"wdate");
$targ1=mysql_result($result,$i,"targ1");
$targ2=mysql_result($result,$i,"targ2");
$targ3=mysql_result($result,$i,"targ3");
?>
<tr>
<td>
<a href="lesson.php?uid=<? echo($uid); ?>&wid=<? echo($wid)?>"><? echo($wdate); ?></a>
</td>
</tr>
<? 
++$i;
}
?>
</table>
<!-- USERS TABLE STOPS HERE -->
</td>
<td width="50%" valign="top">
<b>Add a new week here:<br><br></b>

<!--ADD TEACHER STARTS HERE-->		
<form action="insert_week.php" method="post">
<input type="hidden" name="wuid" value="<? echo($uid);?>">
<input type="hidden" name="uid" value="<? echo($uid);?>">
<table>
<tr>
<td>Week of:  </td>
<td><input type="text" name="wdate" value="<? echo date("Y-m-d"); ?>" size="20"></td>
</tr>
<tr>
<td></td>
<td><input type="Submit" value="Add week"></td>
</tr>
</table>
</form>
<!--ADD TEACHER STOPS HERE-->  

</td>
</tr></TABLE>
<!-- MAIN TABLE STOPS HERE -->
<?
mysql_close();
?>
</tr></td>
</table>
<!-- BIG WRAP TABLE STOPS HERE -->
</center>
</body>
</html>