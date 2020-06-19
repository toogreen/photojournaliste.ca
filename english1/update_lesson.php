<?

include("includes/connect_db.php");

$query="UPDATE lesson SET id='$ud_id', user='$ud_user', uname='$ud_uname', day='$ud_day', date='$ud_date', textdate='$ud_textdate', targ1='$ud_targ1', targ2='$ud_targ2', targ3='$ud_targ3', obj1='$ud_obj1', obj2='$ud_obj2', obj3='$ud_obj3', mat='$ud_mat', stud='$ud_stud', eval='$ud_eval' WHERE id='$ud_id'";
mysql_query($query);
echo "Record updated";
mysql_close();
?>
<br><br>
<A href="lesson.php?uid=<? echo ($ud_user); ?>&name=<?echo($ud_name);?>&edit=1">Reload</A>