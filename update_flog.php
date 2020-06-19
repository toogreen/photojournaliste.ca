<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="UPDATE flog SET id='$ud_id', date='$ud_date', date_text='$ud_date_text', time='$ud_time', image='$ud_image', text='$ud_text', poster='$ud_poster', archive='$ud_archive' WHERE id='$ud_id'";
mysql_query($query);
echo "Record updated";
mysql_close();
?>
<br><br>
<A href="flog.php?edit=<? echo $editvar; ?>">Go back to edit flogs</A>