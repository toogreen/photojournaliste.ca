<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="INSERT INTO flog VALUES ('','$date','$date_text','$time','$image','$text','$poster','$archive')";
mysql_query($query);
echo "Record saved";
mysql_close();
?>
<br><br>
<A href="flog.php?edit=<? echo $editvar; ?>">Reload</A>