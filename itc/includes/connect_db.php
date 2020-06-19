<?
$username="root";
$password="";
$database="itc";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
?>