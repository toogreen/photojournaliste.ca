<center>
<table width="100%" height="100%">
<tr>
<td align="middle">
<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="INSERT INTO lesson VALUES ('', '$user','$uname','$day','$date','$textdate','$targ1','$targ2','$targ3','$obj1','$obj2','$obj3','$mat','$stud','$eval')";
mysql_query($query);
echo "Record saved";
mysql_close();
?>
<br><br>
<A href="lesson.php?uid=<? echo ($user); ?>&name=<?echo($name);?>&edit=1">Reload</A>
</td>
</tr>
</table>
</center>