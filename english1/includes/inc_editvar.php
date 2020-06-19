<? 
$editvar=1;
$width="80%";
$spacing="5";
if ($print==1) {
		$bgcolor="#FFFFFF";
		$pword="";
		$border="1";
		$cs="0";
		$etext="";
		$btop="";
	} else  {
		$bgcolor="#E4E4E4";
		$pword="Printable version";
		$border="0";
		$cs="2";
		$btop="Back to top";
}
if ($edit==$editvar AND $print<>1) {
		$etext="Back to read-only mode";
		$ego="0";
	} else if ($print<>1) {
		$etext="ADD / EDIT / UPDATE";
		$ego="1";
}

//Get the user info all the time
// GET DATA FOR TABLE USERS
include("includes/connect_db.php");
$query="SELECT * FROM users WHERE uid='$uid'";
$result=mysql_query($query);
$num=mysql_numrows($result);

// START LOOP FOR THE USERS
$i=0;
$l1=$num; //this is a runaround because the next loop won't take $num for some reason
while ($i < $l1) {
$uid=mysql_result($result,$i,"uid");
$name=mysql_result($result,$i,"name");
$class=mysql_result($result,$i,"class");
++$i;
}
mysql_close();
?>
