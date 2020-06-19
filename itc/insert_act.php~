<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="INSERT INTO act VALUES ('', '$u_num','$obj1','$obj2','$act','$outcome','$note')";
mysql_query($query);
echo "Record saved";
mysql_close();
?>
<br><br>
<A href="index.php?edit=<? echo $editvar; ?>">Reload</A>