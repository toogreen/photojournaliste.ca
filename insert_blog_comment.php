<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="INSERT INTO blog_comments VALUES ('','$blog_id','$name','$email','$url','$comment')";
mysql_query($query);
echo "Comment saved";
mysql_close();
?>
<br><br>
<A href="javascript:self.close();">Close window</A>