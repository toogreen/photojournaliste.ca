<center>
<table width="100%" height="100%">
<tr>
<td align="middle">
<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="INSERT INTO users VALUES ('', '$name','$class')";
mysql_query($query);
echo "Record saved";
mysql_close();
?>
<br><br>
<A href="index.php?edit=<? echo $editvar; ?>">Reload</A>
</td>
</tr>
</table>
</center>
