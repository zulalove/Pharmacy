<?php
#db connection
$con= mysqli_connect("localhost", "root", "", "pharmacy");
if (!$con) {
	die ("database connection failed:" . mysqli_connect_error());
}
?>