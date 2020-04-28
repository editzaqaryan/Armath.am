<!--
in this file we write code for connection with database.
-->
<?php
$data = mysqli_connect("localhost","root","admin","armath");

if(!$data)
{
	echo "Database connection faild...";
}
?>
