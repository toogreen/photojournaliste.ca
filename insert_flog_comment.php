<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="INSERT INTO flog_comments VALUES ('','$flog_id','$name','$email','$url','$comments')";
mysql_query($query);
echo "Comment saved";
mysql_close();
?>
<br><br>
<A href="flog.php?id=<? echo $flog_id;?>">Reload</A>