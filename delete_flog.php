<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="DELETE FROM flog WHERE id='$id'";
$query2="DELETE FROM flog_comments WHERE flog_id='$id'";
mysql_query($query);
mysql_query($query2);
echo "Record deleted";
mysql_close();
?>
<br><br>
<A href="flog.php?edit=<? echo $editvar; ?>">Reload</A>