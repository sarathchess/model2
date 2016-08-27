<?php
error_reporting(0);

include("db.php");
session_start();
if($_POST['s1']!="")
{
	$a=$_POST['n1'];
	$ins=mysql_query("INSERT INTO `parent`(`pname`) VALUES ('$a')");
	header("location:adnew.php");
}
?>
<html>
	<?php include('ahead.php');?>
	<body>
		<form action="" method="post"><br><br>
			<table align="center"><tr><td>Enter the new Topic</td><td><input type="text" name="n1" value="" id="un"></td></tr>
			<tr><td><input type="submit" value="ADD" name="s1" class="save"></td><td align="right"><a href="adnew.php">Back</a></td></tr>
			</table>
		</form>
	</body>
</html>
<script src="jquery-3.1.0.min.js"></script>
<script>
	$(document).ready(function(){
		$(".save").click(function(){
	var d=$('#un').val();
	if(d=="")
	{
	alert("enter the New topic");
	return false;
     }
     })
})
</script>
