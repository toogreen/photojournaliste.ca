<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<table>
<head>
<title><?echo($sub);?> lesson plans</title>
<link href="includes/stylesheet.css" rel="stylesheet" type="text/css">
<STYLE TYPE="text/css">
     P.breakhere {page-break-before: always}
</STYLE>
</head>
<body bgcolor="<? echo($bgcolor); ?>" leftmargin="15" topmargin="15" marginwidth="15" marginheight="15">
<a name="top"></a>

<?
// GET DATA FOR WEEK
include("includes/connect_db.php");
$hquery="SELECT * FROM week WHERE wid='$wid'";
$hresult=mysql_query($hquery);
$hnum=mysql_numrows($hresult);

// START LOOP FOR WEEK
$h=0;
while ($h < $hnum) {
$wid=mysql_result($hresult,$h,"wid");
$wuid=mysql_result($hresult,$h,"wuid");
$wdate=mysql_result($hresult,$h,"wdate");
$targ1=mysql_result($hresult,$h,"targ1");
$targ2=mysql_result($hresult,$h,"targ2");
$targ3=mysql_result($hresult,$h,"targ3");
?>

<!--TABLE FOR PRINT - EDIT START -->
<table width="<? echo ($width);?>" align="middle" border="0"><TR>
<TD align="left" width="20%"><A href="lesson.php?print=1&uid=<? echo ($uid);?>&name=<?echo ($name);?>&wid=<?echo ($wid);?>"><? echo ($pword);?></A></TD>
<? if ($print<> 1) { ?>
<TD align="middle" width="60%"><A href="week.php?&uid=<? echo ($uid);?>&wid=<? echo($wid);?>">Go back to the weeks menu</A></TD>
<? } ?>
<TD align="right" width="20%"><A href="lesson.php?edit=<? echo ($ego);?>&uid=<? echo ($uid);?>&wid=<?echo ($wid);?>"><? echo ($etext);?></A></TD>
</TR></table>
<!--TABLE FOR PRINT - EDIT STOPS -->
<br>
<!-- TITLE BEGIN -->
<div align="center"><font size='4' face='Verdana, Arial, Helvetica, sans-serif'><b><?echo($name);?>'s <?echo($sub);?> lesson plans for the week of 
<? 
if ($edit==$editvar) {
?>
	<form action="update_week.php" method="post">
	<input type="hidden" name="ud_wid" value="<? echo($wid);?>">
	<input type="hidden" name="ud_wuid" value="<? echo($wuid);?>">
	<input type="hidden" name="uid" value="<? echo($uid);?>">
	<input type="text" name="ud_wdate" value="<? echo($wdate);?>" size="10">
	<?
	} else {
	echo($wdate);
	}
	?>

</b></font><br><br></div>
<!-- TITLE END -->

<!-- TARGETS SECTION BEGIN -->
<table WIDTH="<? echo ($width);?>" align="middle" border="<? echo ($border);?>" cellspacing="<? echo ($cs);?>" bgcolor="#000000">
  <tr>
    <td bgcolor="#000000">
<table align="middle" width="100%" border="<? echo ($border);?>" cellpadding="5" cellspacing="<? echo ($cs);?>" bordercolor="#000000" bgcolor="#000000">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Professionnal targets <i>(3 max)</i></strong><br><br>
    
    <?
	if ($edit==$editvar) {
	?>	
    <b>1. </b><input type="text" name="ud_targ1" value="<? echo($targ1);?>" size="80"><br>
    <b>2. </b><input type="text" name="ud_targ2" value="<? echo($targ2);?>" size="80"><br>
    <b>3. </b><input type="text" name="ud_targ3" value="<? echo($targ3);?>" size="80"><br>
    <?
    } else {
    ?>
    <table>
<tr>
<td valign="top"><b>1. </b></td>
<td valign="top"><? echo($targ1);?></td>
</tr>
<tr>
<td valign="top"><b>2. </b></td>
<td valign="top"><? echo($targ2);?></td>
</tr>
<tr>
<td valign="top"><b>3. </b></td>
<td valign="top"><? echo($targ3);?></td>
</tr>
</table>
    <?
    }
    ?>
   
    </td>
  </tr>
</table>
<?
if ($edit==$editvar) {
	?>
	    <div align="center"><input type="Submit" value="Add/Update these targets"></div>
	</form>
	<?
	}
	++$h;
	}
	?>

</TD></TR></TABLE>
<br>
<!-- TARGETS SECTION ENDS -->
<br><br>
<?
if ($edit==$editvar) {
		echo "<center><br><a href='lesson_add.php?uid=$uid&wid=$wid'><font size='4' face='Verdana, Arial, Helvetica, sans-serif' color='#E53232'><b>ADD A NEW LESSON PLAN/DAY >></center></b></font></a><br><br>";
	}
// GET DATA FOR LESSON
$query="SELECT * FROM lesson WHERE user='$uid' AND week='$wid' ORDER BY day ASC";
$result=mysql_query($query);
$num=mysql_numrows($result);
// START LOOP FOR THE LESSON
$i=0;
$l1=$num; //this is a runaround because the next loop won't take $num for some reason
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
<a name="<?echo($id);?>"></a>
<!--BIG WRAP TABLE STARTS HERE -->
<table WIDTH="<? echo ($width);?>" align="middle" border="<? echo ($border);?>" cellspacing="<? echo ($cs);?>" bgcolor="#000000">
  <tr>
    <td bgcolor="#000000">
    
<!--LESSON MAIN TABLE STARTS HERE-->
<table width="100%" border="<? echo ($border);?>" cellpadding="5" cellspacing="<? echo ($cs);?>" bordercolor="#000000" bgcolor="#000000">
  <tr> 
    <td colspan="3" bgcolor="#FFFFFF"><strong>Day:</strong><? echo($tday); ?><br><strong>Date:</strong> <? echo($date); ?>
      <?
      if ($edit==$editvar) {
      		echo " - <a href='lesson_update.php?id=$id&uid=$user&wdate=$wdate&wid=$wid'><font size='3' color='#E53232'>EDIT</font></a> - <a href='delete_lesson.php?id=$id&uid=$uid&wid=$wid'><font size='3' color='#E53232'>DELETE</font></a>";
      	}
      ?>
      </font></td>
  </tr>
  <tr>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Learning objectives (Outcomes)</strong><br>
    By the end of this lesson, students will be able to:<br><p></p>
	<table>
<tr>
<td valign="top"><b>1. </b></td>
<td valign="top"><? echo($obj1); ?></td>
</tr>
<tr>
<td valign="top"><b>2. </b></td>
<td valign="top"><? echo($obj2); ?></td>
</tr>
<tr>
<td valign="top"><b>3. </b></td>
<td valign="top"><? echo($obj3); ?></td>
</tr>
</table>
    </td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Teaching/Learning materials</strong><br><br>
    <? echo($mat); ?></td>
  </tr>
  
<!-- SPACING BEGINS -->
	<tr><td height="<? echo($spacing);?>"></td></tr>
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
    if ($edit==$editvar) {
    	echo "<a href='act_update.php?aid=$aid&id=$id&wid=$wid&uid=$uid'><font color='#E53232'>EDIT</font></a>- <a href='delete_act.php?aid=$aid&id=$id&wid=$wid&uid=$uid'><font color='#E53232'>DELETE</font></a><br>"; 
    }
    ?><? echo($own); ?>
    </td>
    <td width="80%"><? echo($proc); ?></td>
    <td width="10%"><? echo($inter); ?></td>
    </tr>
<!--LOOP ACTIVITIES STOPS HERE-->

<!--ADD PROCEDURES SECTION BEGIN-->
<?
++$j;
}
if ($edit==$editvar) {
?>
<form action="insert_act.php" method="post">
<input type="hidden" name="lid" value="<? echo($id);?>">
<input type="hidden" name="uid" value="<? echo($uid);?>">
<input type="hidden" name="wid" value="<? echo($wid);?>">

	<tr valign="top" bgcolor="#FFFFFF"> 
    <td width="10%"><textarea cols="10" rows="3" name="own"></textarea></td>
    <td width="80%"><textarea cols="70" rows="3" name="proc"></textarea></td>
    <td width="10%">
    <select name="inter" size="1">
			<option selected value='W'>Whole class</option>
			<option value='G'>Groups</option>
			<option value='I'>Individuals</option>
			<option value='P'>Pairs</option>
			<option value='S'>Split Class</option>
		</select>
    </td>
    </tr>
<!--ADD PROCEDURES SECTION ENDS -->
<?
}
?>
<!--PROCEDURES SECTION ENDS HERE-->

<!-- SPACING BEGINS -->
	<tr><td colspan="3" height="<? echo($spacing);?>">
<?
if ($edit==$editvar) {
?>	
<div align="center"><input type="Submit" value="Add this learning procedure!"></div>
</form>
<? 
} 
?>
	</td></tr>
<!-- SPACING ENDS -->	

<!-- EVALUATION PART BEGINS HERE -->
<tr bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Students Assessment of Learning Outcomes</strong><br><br>
		<? echo($stud); ?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Teacher's Self-Evaluation</strong><br><br>
		<? echo($eval); ?>
    </td>
  </tr>
<!-- EVALUATION PART ENDS HERE -->  

</td>
  </tr>
</table>
<!-- LESSON MAIN TABLE ENDS HERE -->

</td></tr></table>
<!--BIG WRAP TABLE STOPS HERE -->

<!--TABLE FOR BOTTOM ADD ACT + BACK TO TOP BEGINS -->
<table align="middle" width="<? echo ($width);?>" border="0"><TR>
<TD align="left"></TD>
<TD align="right"><a href="#top"><? echo($btop);?></a></TD>
</TR></table>
<!--TABLE FOR BOTTOM ADD ACT + BACK TO TOP ENDS -->
<br><br>
<?
// THIS IF IS TO PRINT PAGE BREAK IF THERE'S A NEXT UNIT
if ($i<$l1-1){
	echo "<P CLASS='breakhere'>";
}
++$i;
}
mysql_close();
?>
</body>
</html>