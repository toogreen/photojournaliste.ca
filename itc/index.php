<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<table>
<head>
<title>ITC Curriculum Year 1</title>
<link href="includes/stylesheet.css" rel="stylesheet" type="text/css">
<STYLE TYPE="text/css">
     P.breakhere {page-break-before: always}
</STYLE>
</head>
<body bgcolor="<? echo($bgcolor); ?>" leftmargin="15" topmargin="15" marginwidth="15" marginheight="15">
<a name="top"></a>

<!--TABLE FOR PRINT - EDIT START -->
<table width="<? echo ($width);?>" border="0"><TR>
<TD align="left"><A href="index.php?print=<? echo ($cs);?>"><? echo ($pword);?></A></TD>
<TD align="right"><A href="index.php?edit=<? echo ($ego);?>"><? echo ($etext);?></A></TD>
</TR></table>
<!--TABLE FOR PRINT - EDIT STOPS -->

<?
if ($edit==$editvar) {
		echo "<br><a href='unit_add.php?edit=$edit'><font size='5' face='Verdana, Arial, Helvetica, sans-serif' color='#E53232'><b>ADD A NEW UNIT >></b></font></a><br><br>";
	}
// GET DATA FOR UNIT
include("includes/connect_db.php");
$query="SELECT * FROM unit ORDER BY num ASC";
$result=mysql_query($query);
$num=mysql_numrows($result);
// START LOOP FOR THE UNIT
$i=0;
$l1=$num; //this is a runaround because the next loop won't take $num for some reason
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

<!--BIG WRAP TABLE STARTS HERE -->
<table WIDTH="<? echo ($width);?>" border="<? echo ($border);?>" cellspacing="<? echo ($cs);?>" bgcolor="#000000">
  <tr>
    <td bgcolor="#000000">
    
<!--UNIT TABLE STARTS HERE-->
<table width="100%" border="<? echo ($border);?>" cellpadding="5" cellspacing="<? echo ($cs);?>" bordercolor="#000000" bgcolor="#000000">
  <tr> 
    <td colspan="3" bgcolor="#FFFFFF"><strong><font size="5" face="Verdana, Arial, Helvetica, sans-serif">UNIT <? echo($num); ?> 
      - <? echo($title); ?>
      <?
      if ($edit==$editvar) {
      		echo " - <a href='unit_update.php?id=$id'><font size='3' color='#E53232'>EDIT</font></a> - <a href='delete_unit.php?id=$id'><font size='3' color='#E53232'>DELETE</font></a>";
      	}
      ?>
      </font></strong></td>
    <td width="17%" bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>IT<br>
        YEAR 1</strong></font></div></td>
  </tr><tr></tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="4"><strong>ABOUT THE UNIT</strong></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="4"><? echo($about); ?></font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="33%"><strong>WHERE THE UNIT FITS IN</strong></td>
    <td width="33%"><strong>TECHNICAL VOCABULARY</strong></td>
    <td width="33%" colspan="2"><strong>RESOURCES</strong></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="33%" height="62"> <p><i>This unit assumes that children:</i><br>
        <br><? echo($fits); ?></p></td>
    <td width="33%"><? echo($vocab); ?></td>
    <td width="33%" colspan="2"><? echo($res); ?></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td colspan="4"><strong>EXPECTATIONS<br>
      at the end of this unit</strong></font></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="33%"><em>most children will:</em></td>
    <td colspan="3"><? echo($exp1); ?></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="33%"><em>some children will not have <br>
      made so much progress and will:</em></td>
    <td colspan="3"><? echo($exp2); ?></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="33%"><em>some 
      children will have <br>
      progressed further and will:</em></td>
    <td colspan="3"><? echo($exp3); ?></td>
  </tr>
</table>
<!--UNIT TABLE STOPS HERE-->

<table><tr><td></td></tr></table>

<!--ACTIVITIES TABLE ACTIVITIES BEGIN-->
<table width="100%" border="<? echo ($border);?>" cellpadding="5" cellspacing="<? echo ($cs);?>" bordercolor="#000000" bgcolor="#000000">
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="25%"><strong>LEARNING OBJECTIVES<br>
      </strong>CHILDREN SHOULD LEARN<strong> 
      </strong></td>
    <td width="25%"><strong>POSSIBLE TEACHING ACTIVITIES</strong></td>
    <td width="25%"><strong>LEARNING OUTCOMES</strong></td>
    <td width="25%"><strong>POINTS TO NOTE<br></strong>CHILDREN&nbsp;</td>
  </tr><tr></tr>
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
    <?
    if ($edit==$editvar) {
    	echo "<a href='act_update.php?id=$jid'><font color='#E53232'>EDIT</font></a>- <a href='delete_act.php?id=$jid'><font color='#E53232'>DELETE</font></a><br>"; 
    }
    ?>
    <ul>
        <li><strong>Key idea: </strong><? echo($obj1); ?></li>
        <li><strong>Technique: </strong><? echo($obj2); ?></li>
      </ul></td>
    <td width="30%"><? echo($act); ?></td>
    <td width="20%"><? echo($outcome); ?></td>
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
<!--TABLE FOR BOTTOM ADD ACT + BACK TO TOP START -->
<table width="<? echo ($width);?>" border="0"><TR>
<TD align="left">
<?
if ($edit==$editvar) {
	echo "<a href='unit_update.php?id=$id#add_act'>Add a new activity for Unit $num</a>";
	}
?>
</TD>
<TD align="right"><a href="index.php?edit=<? echo($edit);?>#top"><? echo($btop);?></a></TD>
</TR></table>
<!--TABLE FOR BOTTOM ADD ACT + BACK TO TOP START -->

<!--BIG WRAP TABLE STOPS HERE -->
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