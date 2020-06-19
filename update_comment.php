<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="UPDATE comments SET cat='$ud_cat',id='$ud_id',comment='$ud_comment' WHERE id='$ud_id' AND cat='$ud_cat' ";
mysql_query($query);
echo "Record Updated";
mysql_close();
?>
<br><br>
<A href="javascript:history.back();">Go back</A>