<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="INSERT INTO act VALUES ('', '$lid', '$own', '$proc', '$inter')";
mysql_query($query);
echo "Record saved";
mysql_close();
?>
<br><br>
<A href="lesson.php?uid=<? echo ($uid); ?>&name=<?echo($name);?>&edit=<?echo($editvar);?>">Reload</A>