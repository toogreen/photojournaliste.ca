<?php include("includes/inc_editvar.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<table>
<head>
<title>ITC Curriculum Year 1 - ADD A UNIT</title>
<link href="includes/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="<? echo($bgcolor); ?>" leftmargin="15" topmargin="15" marginwidth="15" marginheight="15">
<a name="top"></a>

<!--TABLE FOR GOING BACK START -->
<table width="<? echo ($width);?>" border="0"><TR>
<TD align="left"></TD>
<TD align="right"><A href="index.php?edit=<? echo ($edit);?>">Go back to edit page</A></TD>
</TR></table>
<!--TABLE FOR GOING BACK STOPS -->

<!--ADD UNIT STARTS HERE-->		
<form action="insert_unit.php" method="post">
<input type="hidden" name="id" value="<? echo($id);?>">

<!--ADD UNIT TABLE STARTS HERE-->
<br><font size="5" face="Verdana, Arial, Helvetica, sans-serif"><b>ADD A NEW UNIT:</b></font><br><br>
<table width="100%" border="<? echo ($border);?>" cellpadding="5" cellspacing="<? echo ($cs);?>" bordercolor="#000000" bgcolor="#000000">
  <tr> 
    <td colspan="3" bgcolor="#FFFFFF"><strong><font size="5" face="Verdana, Arial, Helvetica, sans-serif">UNIT <input type="text" name="num" value="number" size="5"> 
      - <input type="text" name="title" value="title" size="40"></font></strong></td>
    <td width="17%" bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>IT<br>
        YEAR 1</strong></font></div></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="4"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>ABOUT 
      THE UNIT</strong></font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="4"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><textarea cols="80" rows="4" name="about"></textarea></font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="33%"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>WHERE 
      THE UNIT FITS IN</strong></font></td>
    <td width="33%"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>TECHNICAL 
      VOCABULARY</strong></font></td>
    <td width="33%" colspan="2"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">RESOURCES</font></strong></td>
  </tr>
  <tr valign="bottom" bgcolor="#FFFFFF"> 
    <td width="33%" height="62"> <p><font size="1" face="Verdana, Arial, Helvetica, sans-serif">This 
        unit assumes that children: </font><br>
        <br>
        <font size="1" face="Verdana, Arial, Helvetica, sans-serif"><textarea cols="30" rows="4" name="fits"><ul><li></ul></textarea></font></p></td>
    <td width="33%"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><textarea cols="30" rows="4" name="vocab"><ul><li></ul></textarea></font></td>
    <td width="33%" colspan="2"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><textarea cols="30" rows="4" name="res"><ul><li></ul></textarea></font></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td colspan="4"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>EXPECTATIONS<br>
      at the end of this unit</strong></font></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="33%"><em><font size="2" face="Verdana, Arial, Helvetica, sans-serif">most 
      children will:</font></em></td>
    <td colspan="3"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><textarea cols="60" rows="2" name="exp1"></textarea> 
      </font></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="33%"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><em>some 
      children will not have <br>
      made so much progress and will:</em></font></td>
    <td colspan="3"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><textarea cols="60" rows="2" name="exp2"></textarea></font></td>
  </tr>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td width="33%"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><em>some 
      children will have <br>
      progressed further and will:</em></font></td>
    <td colspan="3"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><textarea cols="60" rows="2" name="exp3"></textarea> 
      </font></td>
  </tr>
</table>
<!--ADD UNIT TABLE STOPS HERE-->  	
		
<input type="Submit">
</form>
<br><br>
<!--ADD UNIT STOPS HERE-->


</body>
</html>