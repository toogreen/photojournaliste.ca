<center>
<table width="100%" height="100%">
<tr>
<td align="middle">
<?

include("includes/connect_db.php");

$query="UPDATE act SET aid='$ud_aid', lid='$ud_lid', own='$ud_own', proc='$ud_proc', inter='$ud_inter' WHERE aid='$ud_aid'";
mysql_query($query);
echo "Record updated";
mysql_close();
?>
<br><br>
<A href="index.php?edit=1">Go back</A>
</td>
</tr>
</table>
</center>