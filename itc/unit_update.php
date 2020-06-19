<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<table>
<head>
<title>ITC Curriculum Year 1 - UPDATE A UNIT</title>
<link href="includes/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="15" topmargin="15" marginwidth="15" marginheight="15">

<?
// GET DATA FOR UNIT
include("includes/connect_db.php");
$query="SELECT * FROM unit WHERE id='$id'";
$result=mysql_query($query);
$num=mysql_numrows($result);
// START LOOP FOR THE UNIT
$i=0;
$l1=$num; //this is a runaround because the loop won't take $num for some reason
while ($i < $l1) {
$id=mysql_result($result,$i,"id");
$num=mysql_result($result,$i,"num");
$title=mysql_result($result,$i,"title");
$about=mysql_result($result,$i,"about");
$fits=mysql_result($result,$i,"fits");
$vocab=mysql_result($result,$i,"vocab");
$res=mysql_result($result,$i,"res");
$exp1=mysql_result($result,$i,"exp1");
$exp2=mysql_result($result,$i,"exp2");
$exp3=mysql_result($result,$i,"exp3");
?>


<form action="update_unit.php" method="post">
<input type="hidden" name="ud_id" value="<? echo($id);?>">

<!--UPDATE UNIT TABLE STARTS HERE-->
<br><font size="5" face="Verdana, Arial, Helvetica, sans-serif"><b>UPDATE UNIT:</b></font><br><br>
<table width="100%" border="<? echo ($border);?>" cellpadding="5" cellspacing="<? echo ($cs);?>" bordercolor="#000000" bgcolor="#000000">
  <tr> 
    <td colspan="3" bgcolor="#FFFFFF"><strong><font size="5" face="Verdana, Arial, Helvetica, sans-serif">UNIT <input type="text" name="ud_num" value="<? echo($num); ?>" size="5"> 
      - <input type="text" name="ud_title" value="<? echo($title); ?>" size="40"></font></strong></td>
    <td width="17%" bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>IT<br>
        YEAR 1</strong></font></div></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="4"><strong>ABOUT THE UNIT</strong></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="4"><textarea cols="80" rows="4" name="ud_about"><? echo($about); ?></textarea></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="33%"><strong>WHERE THE UNIT FITS IN</strong></td>
    <td width="33%"><strong>TECHNICAL VOCABULARY</strong></td>
    <td width="33%" colspan="2"><strong>RESOURCES</strong></td>
  </tr>
  <tr valign="bottom" bgcolor="#FFFFFF"> 
    <td width="33%" height="62"> <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif">This 
        unit assumes that children: </font><br>
        <br>
        <textarea cols="30" rows="4" name="ud_fits"><? echo($fits); ?></textarea></p></td>
    <td width="33%"><textarea cols="30" rows="4" name="ud_vocab"><? echo($vocab); ?></textarea></td>
    <td width="33%" colspan="2"><textarea cols="30" rows="4" name="ud_res"><? echo($res); ?></textarea></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td colspan="4"><strong>EXPECTATIONS<br> at the end of this unit</strong></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="33%"><em>most children will:</em></td>
    <td colspan="3"><textarea cols="60" rows="2" name="ud_exp1"><? echo($exp1); ?></textarea></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="33%"><em>some children will not have <br>
      made so much progress and will:</em></td>
    <td colspan="3"><textarea cols="60" rows="2" name="ud_exp2"><? echo($exp2); ?></textarea></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="33%"><em>some children will have <br>
      progressed further and will:</em></td>
    <td colspan="3"><textarea cols="60" rows="2" name="ud_exp3"><? echo($exp3); ?></textarea></td>
  </tr>
</table>
<!--UPDATE UNIT TABLE STOPS HERE-->  	
		
<input type="Submit">
</form>

<br><br>

<!--ACTIVITIES TABLE ACTIVITIES BEGIN-->
<table width="100%" border="<? echo ($border);?>" cellpadding="5" cellspacing="<? echo ($cs);?>" bordercolor="#000000" bgcolor="#000000">
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="25%"><strong>LEARNING OBJECTIVES<br>
      </strong>CHILDREN SHOULD LEARN</td>
    <td width="25%"><strong>POSSIBLE TEACHING ACTIVITIES</strong></td>
    <td width="25%"><strong>LEARNING OUTCOMES</strong></td>
    <td width="25%"><strong>POINTS TO NOTE<br></strong>CHILDREN&nbsp;</td>
  </tr>
<!--LOOP ACTIVITIES START HERE-->

<?
// GET DATA FOR ACTIVITIES
$jquery="SELECT * FROM act WHERE u_num='$id' ORDER BY id ASC";
$jresult=mysql_query($jquery);
$jnum=mysql_numrows($jresult);

// START LOOP FOR ACTIVITIES
$j=0;
while ($j < $jnum) {
$jid=mysql_result($jresult,$j,"id");
$u_num=mysql_result($jresult,$j,"u_num");
$obj1=mysql_result($jresult,$j,"obj1");
$obj2=mysql_result($jresult,$j,"obj2");
$act=mysql_result($jresult,$j,"act");
$outcome=mysql_result($jresult,$j,"outcome");
$note=mysql_result($jresult,$j,"note");
?>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="25%">
    <? echo "<a href='act_update.php?id=$jid'><font color='#E53232'>EDIT</font></a>- <a href='delete_act.php?id=$jid'><font color='#E53232'>DELETE</font></a><br>"; ?>
    <ul>
        <li><strong>Key idea: </strong><? echo($obj1); ?></li>
        <li><strong>Technique: </strong><? echo($obj2); ?></li>
      </ul></td>
    <td width="25%"><? echo($act); ?></td>
    <td width="25%"><? echo($outcome); ?></td>
    <td width="25%"><? echo($note); ?></td>
  </tr>
<!--LOOP ACTIVITIES STOPS HERE-->
<?
++$j;
}
?>
</table>
<!--ACTIVITIES TABLE ACTIVITIES ENDS HERE-->
</td>
  </tr>
</table>
<!--BIG WRAP TABLE STOPS HERE -->
<br><br>
<?
++$i;
}
mysql_close();
?>

<!--ADD ACT FORM STARTS HERE-->	
<form action="insert_act.php" method="post">
<input type="hidden" name="id" value="<? echo($jid);?>">
<input type="hidden" name="u_num" value="<? echo($id);?>">
<a name="add_act"></a>
<b><font size="4">Add new activity</font></b><br><br>
<b><font size="2">LEARNING OBJECTIVES</font></b>
<ul>
<li>Key idea:<br><textarea cols="80" rows="4" name="obj1"></textarea><br>
<li>Technique:<br><textarea cols="80" rows="4" name="obj2"></textarea><br>
</ul>
<br><br>
<b><font size="2">Possible teaching activities:</font></b><br><textarea cols="80" rows="4" name="act"></textarea><br><br>
<b><font size="2">Learning outcomes:</font></b><br><textarea cols="80" rows="4" name="outcome"></textarea><br><br>
<b><font size="2">Points to note:</font></b><br><textarea cols="80" rows="4" name="note"></textarea><br><br>
<input type="Submit">
</form>
<!--ADD ACT FORM STOPS HERE-->  
<br><br> 

</body>
</html>