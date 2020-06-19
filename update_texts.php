<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="UPDATE texts SET id='$ud_id', scat='$ud_scat', title='$ud_title', intro='$ud_intro', text='$ud_text', image='$ud_image', link='$ud_link', s_section='$ud_s_section' WHERE id='$ud_id'";
mysql_query($query);
echo "Record updated";
mysql_close();
?>
<br><br>
<A href="texts_<? echo $ud_scat; ?>.php?scat=<? echo $ud_scat; ?>&edit=<? echo $editvar; ?>">Go back to edit texts</A>