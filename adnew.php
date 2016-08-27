<?php
error_reporting(0);
session_start();
include("db.php");
if($_SESSION['id']=="")
{
header("location:admin.php");	
}	
$name=$_SESSION['name'];
$sel=mysql_query("SELECT * FROM `parent` WHERE `cid`");
$select=mysql_query("select * from `admin` where `name`='$name'");
$fetch=mysql_fetch_array($select);
if($_POST['b']!="")
{
	
	$title=$_POST['n1'];
	$com=$_POST['t1'];
	$date=$_POST['dt'];
	$cid=$_POST['s1'];
		 if($id=="")
    {
	$insert=mysql_query("INSERT INTO `data`(`name`, `title`, `comment`, `datetime`, `pid`) VALUES ('$name','$title','$com','$date','$cid')");
	header("location:adpost.php");
    }
}
?>
<html>
	<?php include('ahead.php');?>
      <body onload="clock();">
		<form action="" method="post" id="myform">
			<table align="center">		
				<tr><td>Select topic</td><td>
				<select name="s1">
	           <option value="">select catagory</option>
               <?php
                 while($fetchs=mysql_fetch_array($sel))
                 {
              ?>
               <option value="<?php echo $fetchs['cid'];?>">
                 <?php echo $fetchs['pname'];?>
               </option>       
               <?php
                   }
                  ?>  
                </select></td><td><a href="addcat.php">Add New Catagory</a></td></tr>
				<tr><td>Title Name</td><td><input type="text" name="n1" value="" id="un"></td></tr>
				<pre><tr><td>Post Comment</td><td><textarea name="t1" rows="20" cols="70" id="ps"></textarea></td></pre></tr>
				<tr><td></td><td><input id="in" type="text" value="" readonly" name="dt"></td></tr>
				<tr><td align="center"><input type="submit" name="b" value="upload" class="upload"></td>
				<td align="right"><a href="adpost.php">Back</a></td></tr>
			</table>
		</form>
		</div>
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
<div id="clocks" name="dt"></div>
<script type="text/javascript">
function clock() {
   var now = new Date(); 
    var c=document.getElementById('clocks').innerHTML=now.toDateString();
     document.getElementById('in').value=c;
}
clock();
</script>  
  
