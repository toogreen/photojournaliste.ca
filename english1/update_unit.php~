<?

include("includes/connect_db.php");

$query="UPDATE unit SET id='$ud_id', num='$ud_num', title='$ud_title', about='$ud_about', fits='$ud_fits', vocab='$ud_vocab', res='$ud_res', exp1='$ud_exp1', exp2='$ud_exp2', exp3='$ud_exp3' WHERE id='$ud_id'";
mysql_query($query);
echo "Record updated";
mysql_close();
?>
<br><br>
<A href="index.php?edit=<? echo $editvar; ?>">Go back</A>