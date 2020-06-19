<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="INSERT INTO unit VALUES ('', '$num','$title','$about','$fits','$vocab','$res','$exp1','$exp2','$exp3')";
mysql_query($query);
echo "Record saved";
mysql_close();
?>
<br><br>
<A href="index.php?edit=<? echo $editvar; ?>">Reload</A>