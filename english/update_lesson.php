<center>
<table width="100%" height="100%">
<tr>
<td align="middle">
<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="UPDATE lesson SET id='$ud_id', user='$ud_user', uname='$ud_uname', week='$ud_week', day='$ud_day', date='$ud_date', textdate='$ud_textdate', obj1='$ud_obj1', obj2='$ud_obj2', obj3='$ud_obj3', mat='$ud_mat', stud='$ud_stud', eval='$ud_eval' WHERE id='$ud_id'";
mysql_query($query);
echo "Record updated";
mysql_close();
?>
<br><br>
<A href="lesson.php?edit=<? echo $editvar; ?>&id=<? echo($ud_id)?>&uid=<? echo ($ud_uid);?>&wid=<?echo ($ud_week);?>#<? echo($ud_id);?>">Reload</A>
</td>
</tr>
</table>
</center>