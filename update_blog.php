<?

include("includes/connect_db.php");

$query="UPDATE blog SET id='$ud_id', date='$ud_date', time='$ud_time', text='$ud_text', poster='$ud_poster', comments='$ud_comments', archive='$ud_archive' WHERE id='$ud_id'";
mysql_query($query);
echo "Record updated";
mysql_close();
?>
<br><br>
<A href="blog.php?edit=<? echo $editvar; ?>">Go back to edit blogs</A>