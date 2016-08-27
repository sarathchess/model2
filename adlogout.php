<?php
session_start();
unset($_SESSION['id']);
if($_SESSION['id']=="")
{
		header("location:admin.php");
}

?>
