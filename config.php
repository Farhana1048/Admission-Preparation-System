<?php 

$conn=mysql_connect("localhost","root","mydb") or die(mysql_error());

$db=mysql_select_db('mydb',Sconn)or die(mysql_error()); // select db

?>
