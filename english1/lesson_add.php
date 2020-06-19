<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<table>
<head>
<title>English lesson plans</title>
<link href="includes/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="<? echo($bgcolor); ?>" leftmargin="15" topmargin="15" marginwidth="15" marginheight="15">
<a name="top"></a>

<!--TABLE FOR GOING BACK START -->
<table width="<? echo ($width);?>" border="0"><TR>
<TD align="left"></TD>
<TD align="right"><A href="lesson.php?uid=<? echo ($uid);?>">Go back to list lessons</A></TD>
</TR></table>
<!--TABLE FOR GOING BACK STOPS -->

<!-- TITLE BEGIN -->
<div align="center"><font size='4' face='Verdana, Arial, Helvetica, sans-serif'><b>English lesson plans for <?echo($name);?></b></font><br><br></div>
<!-- TITLE END -->

<!--ADD UNIT STARTS HERE-->		
<form action="insert_lesson.php" method="post">
<input type="hidden" name="user" value="<? echo($uid);?>">
<input type="hidden" name="uname" value="<? echo($name);?>">

<br>
<!--LESSON MAIN TABLE STARTS HERE-->
<table align="middle" width="<?echo ($width);?>" border="<? echo ($border);?>" cellpadding="5" cellspacing="<? echo ($cs);?>" bordercolor="#000000" bgcolor="#000000">
  <tr> 
    <td colspan="3" bgcolor="#FFFFFF"><strong>Day:</strong> <input type="text" name="day" value="" size="20"><br><strong>Date:</strong> <input type="text" name="date" value="<? echo date("Y-m-d"); ?>" size="20">
      </font></td>
  </tr>
  <tr>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Professionnal targets <i>(3 max)</i></strong><br><br>
    <b>1. </b><input type="text" name="targ1" value="" size="80"><br>
    <b>2. </b><input type="text" name="targ2" value="" size="80"><br>
    <b>3. </b><input type="text" name="targ3" value="" size="80"><br>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Learning objectives (Outcomes)</strong><br>
    By the end of this lessons, students will be able to:<br><br>
	<b>1. </b><input type="text" name="obj1" value="" size="80"><br>
	<b>2. </b><input type="text" name="obj2" value="" size="80"><br>
	<b>3. </b><input type="text" name="obj3" value="" size="80"><br>
    </td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Teaching/Learning materials</strong><br><br>
    <textarea cols="80" rows="4" name="mat"></textarea></td>
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
	<tr valign="top" bgcolor="#FFFFFF"> 
    <td width="10%">&nbsp;</td>
    <td width="80%"><font color='#E53232'>Please fill the rest first, the next screen will allow you to add several entries here.</td>
    <td width="10%"></td>
    </tr>  	
<!--PROCEDURES SECTION ENDS -->

<!-- SPACING BEGINS -->
	<tr><td height="<? echo($spacing);?>"></td></tr>
<!-- SPACING ENDS -->	

<!-- EVALUATION PART BEGINS HERE -->
<tr bgcolor="#FFFFFF"> 
    <td colspan="3" colspan="3"><strong>Students Assessment of Learning Outcomes</strong><br><br>
		<textarea cols="80" rows="4" name="stud"></textarea>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="3"><strong>Teacher's Self-Evaluation</strong><br><br>
		<textarea cols="80" rows="4" name="eval"></textarea>
    </td>
  </tr>
<!-- EVALUATION PART ENDS HERE -->    	
</table>
<!--LESSON MAIN TABLE STOPS HERE-->  	
<br>	
<div align="center"><input type="Submit" value="Add learning procedures for this lesson plan"></div>
</form>
<br><br>
<!--ADD UNIT STOPS HERE-->


</body>
</html>