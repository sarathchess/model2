<?php
error_reporting(0);
session_start();
include("db.php");
if($_POST['login']!="")
{
	$a=$_POST['n1'];
	$b=$_POST['pwd'];
	$select=mysql_query("SELECT * FROM `admin` WHERE name='$a' and pass='$b'");
	$fetch=mysql_fetch_array($select);
	if(empty($_POST['n1']) && empty($_POST['pwd']))
	{
		echo"Enter the User Name and Password";
	}
	else
	{
		if(($fetch['name']==$a) && ($fetch['pass']==$b))
	  {
	  $_SESSION['id']=$fetch['id'];
      $_SESSION['name']=$fetch['name'];
      if($_POST['c1']!="")
     {
		 setcookie("name",$a,time()+60);
		 setcookie("pass",$b,time()+60);
	 }
	  header("location:adpost.php");
		echo "correct User";
	  } 
		if(($fetch['name']!=$a) && ($fetch['pass']!=$b))
		{
			echo "Invalid User Name and Password";
		}
		if(empty($_POST['n1']))
		{
		   echo"Enter the User Name";
		   
		}
		if(empty($_POST['pwd']))
		{
			echo "Enter the Password";
			
		}
	}
}
?>
<html>
	<body><div id="im">
		<form action="" method="post" id="myform">
			<link rel="stylesheet" type="text/css" href="style.css">
			<table border="" cellpadding="6" cellspacing="6" align="center" id="ta">
				<tr>
					<td colspan="2"><h2><i>LOGIN FORM</i></h2></td>
				</tr>
				<tr>
				<td>
					USER NAME
				</td>
				
					<td>
						<input type="text" name="n1" id="un" value="<?php echo $_COOKIE['name'];?>">
					</td>				
				
			</tr>
			<tr>
				<td>
					PASSWORD
				</td>
				
					<td>
							<input type="password" name="pwd" id="ps" value="<?php echo $_COOKIE['pass'];?>">
					</td>				
				
			</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="login" value="LOGIN" class="save" ><br>
					<input type="checkbox" value="true" name="c1">Remember Me
					</td>
				</tr>
			</table>
		</form></div>
	</body>
</html>

<script src="jquery-3.1.0.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myform").hide();
		$("#myform").toggle(3000);
	  	$(".save").click(function(){
	var d=$('#un').val();
	var e=$('#ps').val();
	if(d=="" && e=="")
	{
	alert("enter the name and password");
	return false;
}

else if(d!="" && e=="")
{
	alert("enter the password");
	return false;
}

else if(d=="" && e!="")
{
	alert("enter the name ");
	return false;
}
})
})	
</script>
