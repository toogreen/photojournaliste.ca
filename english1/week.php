<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
<title>English Lesson Plans - Teachers list</title>
<link href="includes/stylesheet.css" rel="stylesheet" type="text/css">
<STYLE TYPE="text/css">
     P.breakhere {page-break-before: always}
</STYLE>
</head>
<body bgcolor="<? echo($bgcolor); ?>" leftmargin="15" topmargin="15" marginwidth="15" marginheight="15">
<a name="top"></a>

<?

// GET DATA FOR TABLE USERS
include("includes/connect_db.php");
$query="SELECT * FROM users ORDER BY name ASC";
$result=mysql_query($query);
$num=mysql_numrows($result);
?>

<center>
<!--BIG WRAP TABLE STARTS HERE -->
<table WIDTH="80%" border="<? echo ($border);?>" cellspacing="<? echo ($cs);?>" bgcolor="#000000">
  <tr>
    <td bgcolor="#000000">
    
<!--MAIN TABLE STARTS HERE-->
<table WIDTH="100%" border="<? echo ($border);?>" cellspacing="<? echo ($cs);?>" bgcolor="#FFFFFF">
<tr>
<td valign="top" width="50%">
<!-- USERS TABLE STATS HERE -->
<table border="0">
<tr>
<td width="70"><b><h3>Teacher</h3></b></td>
<td><b><h3>Class</h3></b></td>
</tr>
<?
// START LOOP FOR THE UNIT
$i=0;
$l1=$num; //this is a runaround because the next loop won't take $num for some reason
while ($i < $l1) {
$uid=mysql_result($result,$i,"uid");
$name=mysql_result($result,$i,"name");
$class=mysql_result($result,$i,"class");
?>
<tr>
<td><a href="week.php?uid=<? echo($uid); ?>&name=<? echo($name);?>"><? echo($name); ?></a></td>
<td><? echo($class); ?></td>
</tr>
<? 
++$i;
}
?>
</table>
<!-- USERS TABLE STOPS HERE -->
</td>
<td width="50%" valign="top">
<b>If your name isn't on the list,<br> please type in your name here:<br><br></b>

<!--ADD TEACHER STARTS HERE-->		
<form action="insert_user.php" method="post">
<table>
<tr>
<td>Teacher's Name:  </td>
<td><input type="text" name="name" value="" size="20"></td>
</tr>
<tr>
<td>Your class name:  </td>
<td><input type="text" name="class" value="" size="20"></td>
</tr>
<tr>
<td></td>
<td><input type="Submit" value="add me!"></td>
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