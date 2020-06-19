<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="DELETE FROM act WHERE id='$id'";
mysql_query($query);
echo "Record deleted";
mysql_close();
?>
<br><br>
<A href="index.php?edit=<? echo $editvar; ?>">Reload</A>