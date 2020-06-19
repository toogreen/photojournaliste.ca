<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="DELETE FROM texts WHERE id='$id'";
mysql_query($query);
echo "Record deleted";
mysql_close();
?>
<br><br>
<A href="texts_<?echo($scat);?>.php?scat=<?echo($scat);?>&edit=<? echo $editvar; ?>">Reload</A>