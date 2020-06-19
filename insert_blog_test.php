<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="INSERT INTO blog VALUES ('', '$date','$time','$text','$poster','$comments','$archive','$realdate')";
mysql_query($query);
echo "Record saved";
mysql_close();
?>
<br><br>
<A href="blog.php?edit=<? echo $editvar; ?>">Reload</A>