<?php
error_reporting(0);
session_start();
$id=$_GET['id'];
include("db.php");
$select=mysql_query("select * from data where id='$id'");
$fetch=mysql_fetch_array($select);
?>
<html>
	<link rel="stylesheet" type="text/css" href="style.css">
	<head>
		<title>Welcome User</title>
		<div id="user">
			<div id="uh">
				<h1 style="font-size:60px"><i style="color:Red">User View Area</i></h1>
				<h2>User view Post area to search topics</h3>
			</div>
		
	</head>
</html>
