<?

include("includes/connect_db.php");

$query="UPDATE act SET id='$ud_id', u_num='$ud_u_num', obj1='$ud_obj1', obj2='$ud_obj2', act='$ud_act', outcome='$ud_outcome', note='$ud_note' WHERE id='$ud_id'";
mysql_query($query);
echo "Record updated";
mysql_close();
?>
<br><br>
<A href="index.php?edit=1">Go back</A>