<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="DELETE FROM blog WHERE id='$id'";
$query2="DELETE FROM blog_comments WHERE blog_id='$id'";
mysql_query($query);
mysql_query($query2);
echo "Record deleted";
mysql_close();
?>
<br><br>
<A href="blog.php?edit=<? echo $editvar; ?>">Reload</A>