<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<table>
<head>
<title><?echo($sub);?> lesson plans</title>
<link href="includes/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="<? echo($bgcolor); ?>" leftmargin="15" topmargin="15" marginwidth="15" marginheight="15">
<a name="top"></a>

<!-- TITLE BEGIN -->
<div align="center"><font size='4' face='Verdana, Arial, Helvetica, sans-serif'><b><?echo($name);?>'s <?echo($sub);?> lesson plans for the week of <?echo($wdate);?></b></font><br><br></div>
<!-- TITLE END -->

<?
// GET DATA FOR LESSON
include("includes/connect_db.php");
$query="SELECT * FROM lesson WHERE id='$id'";
$result=mysql_query($query);
$num=mysql_numrows($result);
// START LOOP FOR THE UNIT
$i=0;
$l1=$num; //this is a runaround because the loop won't take $num for some reason
while ($i < $l1) {
$id=mysql_result($result,$i,"id");
$user=mysql_result($result,$i,"user");
$uname=mysql_result($result,$i,"uname");
$week=mysql_result($result,$i,"week");
$day=mysql_result($result,$i,"day");
$date=mysql_result($result,$i,"date");
$textdate=mysql_result($result,$i,"textdate");
$obj1=mysql_result($result,$i,"obj1");
$obj2=mysql_result($result,$i,"obj2");
$obj3=mysql_result($result,$i,"obj3");
$mat=mysql_result($result,$i,"mat");
$stud=mysql_result($result,$i,"stud");
$eval=mysql_result($result,$i,"eval");
if ($day==1) { $tday="Monday"; }
if ($day==2) { $tday="Tuesday"; }
if ($day==3) { $tday="Wednesday"; }
if ($day==4) { $tday="Thursday"; }
if ($day==5) { $tday="Friday"; }
?>


<!--ADD LESSON STARTS HERE-->		
<form action="update_lesson.php" method="post">
<input type="hidden" name="ud_id" value="<? echo($id);?>">
<input type="hidden" name="ud_user" value="<? echo($user);?>">
<input type="hidden" name="ud_uname" value="<? echo($uname);?>">
<input type="hidden" name="ud_week" value="<? echo($week);?>">
<input type="hidden" name="ud_uid" value="<? echo($uid);?>">
<br>
<!--LESSON MAIN TABLE STARTS HERE-->
<table align="middle" width="<?echo ($width);?>" border="<? echo ($border);?>" cellpadding="5" cellspacing="<? echo ($cs);?>" bordercolor="#000000" bgcolor="#000000">
  <tr> 
    <td colspan="3" bgcolor="#FFFFFF"><strong>Day:</strong>
    <select name="ud_day" size="1">
			<option value='1' <? if ($day=="1") {echo"selected";}?>>Monday</option>
			<option value='2' <? if ($day=="2") {echo"selected";}?>>Tuesday</option>
			<option value='3' <? if ($day=="3") {echo"selected";}?>>Wednesday</option>
			<option value='4' <? if ($day=="4") {echo"selected";}?>>Thursday</option>
			<option value='5' <? if ($day=="5") {echo"selected";}?>>Friday</option>
		</select>
    <br><strong>Date:</strong> <input type="text" name="ud_date" value="<? echo($date);?>" size="40">
      </font></td>
  </tr>
  <tr>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Learning objectives (Outcomes)</strong><br>
    By the end of this lessons, students will be able to:<br><br>
	<b>1. </b><input type="text" name="ud_obj1" value="<? echo($obj1);?>" size="80"><br>
	<b>2. </b><input type="text" name="ud_obj2" value="<? echo($obj2);?>" size="80"><br>
	<b>3. </b><input type="text" name="ud_obj3" value="<? echo($obj3);?>" size="80"><br>
    </td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Teaching/Learning materials</strong><br><br>
    <textarea cols="80" rows="4" name="ud_mat"><? echo($mat);?></textarea></td>
  </tr>
<!-- SPACING BEGINS -->
	<tr><td height="<? echo($spacing); ?>"></td></tr>
<!-- SPACING ENDS -->

<!--PROCEDURES SECTION BEGIN-->
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="10%">&nbsp;</td>
    <td width="80%"><strong>Teaching and learning procedures</strong></td>
    <td width="10%">Interaction</td>
   </tr>
<!--LOOP ACTIVITIES START HERE-->

<?
// GET DATA FOR PROCEDURES
$jquery="SELECT * FROM act WHERE lid=$id ORDER BY aid ASC";
$jresult=mysql_query($jquery);
$jnum=mysql_numrows($jresult);

// START LOOP FOR PROCEDURES
$j=0;
while ($j < $jnum) {
$aid=mysql_result($jresult,$j,"aid");
$lid=mysql_result($jresult,$j,"lid");
$own=mysql_result($jresult,$j,"own");
$proc=mysql_result($jresult,$j,"proc");
$inter=mysql_result($jresult,$j,"inter");
?>
    <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="10%">
    <?
    //if ($edit==$editvar) {
    	echo "<a href='act_update.php?aid=$aid&id=$id&wid=$wid&uid=$uid'><font color='#E53232'>EDIT</font></a>- <a href='delete_act.php?aid=$aid&id=$id&wid=$wid&uid=$uid#$id'><font color='#E53232'>DELETE</font></a><br>"; 
    //}
    ?><? echo($own); ?>
    </td>
    <td width="80%"><? echo($proc); ?></td>
    <td width="10%"><? echo($inter); ?></td>
    </tr>
<!--LOOP ACTIVITIES STOPS HERE-->

<?
++$j;
}
?>


<!--PROCEDURES SECTION ENDS HERE-->           

<!-- SPACING BEGINS -->
	<tr><td colspan="3" height="<? echo($spacing);?>"></td></tr>
<!-- SPACING ENDS -->	
<!-- EVALUATION PART BEGINS HERE -->
<tr bgcolor="#FFFFFF"> 
    <td colspan="3" colspan="3"><strong>Students Assessment of Learning Outcomes</strong><br><br>
		<textarea cols="80" rows="4" name="ud_stud"><? echo($stud);?></textarea>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Teacher's Self-Evaluation</strong><br><br>
		<textarea cols="80" rows="4" name="ud_eval"><? echo($eval);?></textarea>
    </td>
  </tr>
<!-- EVALUATION PART ENDS HERE -->    	
</table>
<!--LESSON MAIN TABLE STOPS HERE-->  	
<br>	
<div align="center"><input type="Submit" value="Update this lesson plan!"></div>
</form>
<br><br>
<!--ADD UNIT STOPS HERE-->
<?
++$i;
}
?>

</body>
</html>