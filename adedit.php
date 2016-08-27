<?php

error_reporting(0);
session_start();
$id=$_GET['id'];
include("db.php");
$select=mysql_query("select * from data where id='$id'");
$fetch=mysql_fetch_array($select);
$name=$_SESSION['name'];
if($_POST['b']!="")
{
	
	$title=$_POST['n1'];
	$com=$_POST['t1'];
	$date=$_POST['dt'];
	 if($id!=="")
    {
      $update=mysql_query("UPDATE `data` SET`name`='$name',`title`='$title',`comment`='$com',`datetime`='$date' WHERE `id`='$id'");
		echo"Your details Updated";
		header("location:adpost.php");
		
    }
     
    
}
?>
<html>
	<?php include('ahead.php');?>
      <body onload="clock();">
		<form action="" method="post" id="myform">
			<table align="center">		
				<tr>
				<td>Title Name</td><td><input type="text" name="n1" id="un" value="<?php echo $fetch['title'];?>"></td></tr>
				<pre><tr><td>Post Comment</td><td><textarea name="t1" rows="20" cols="70" id="ps"><?php echo $fetch['comment'];?></textarea></td></pre></tr>
				<tr><td></td><td><input id="in" type="text" value="<?php echo $fetch['datetime'];?>" readonly" name="dt"></td></tr>
				<tr><td><input type="submit" name="b" value="upload" class="upload"></td>
				<td align="right"><a href="adpost.php">Back</a></td></tr>
			</table>
		</form>
	</body>
</html>

<script src="jquery-3.1.0.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myform").hide();
		$("#myform").fadeIn(2000);
		$("#in").hide();
		$("#clocks").hide();
	  	$(".upload").click(function(){
	var d=$('#un').val();
	var e=$('#ps').val();
	if(d=="" && e=="")
	{
	alert("enter the Title and Comments");
	return false;
}

else if(d!="" && e=="")
{
	alert("enter the Comment");
	return false;
}

else if(d=="" && e!="")
{
	alert("enter the Title ");
	return false;
}
})
})	
</script>
<div id="clocks"></div>
<script type="text/javascript">
function clock() {
   var now = new Date(); 
    var c=document.getElementById('clocks').innerHTML=now.toDateString();
     document.getElementById('in').value=c;
}
clock();
</script>  

