<center>
<table width="100%" height="100%">
<tr>
<td align="middle">
<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="INSERT INTO week VALUES ('', '$wuid','$wdate','','','')";
mysql_query($query);
echo "Record saved";
mysql_close();
?>
<br><br>
<A href="week.php?edit=<? echo $editvar; ?>&uid=<? echo ($uid);?>&name=<?echo ($name);?>&wid=<?echo ($wid);?>">Reload</A>
</td>
</tr>
</table>
</center>
