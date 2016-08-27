<?php
error_reporting(0);
session_start();
include("db.php");
$sql="select * from `admin`";
$records=mysql_query($sql);
echo $id=$_GET['id'];
if($id!="")
{
	$delete=mysql_query("delete  from `data` where `id`='$id'");
	if($delete)
	{
	header("location:adpost.php");
    }
}
if($_SESSION['id']=="")
{
header("location:admin.php");	
}
?>
<html>
	<?php include('ahead.php');?>
		<div id="po">
			<div id="po1">
				<table width="100%">
					<?php
					$select=mysql_query("select * from `data`");
                   while($reg=mysql_fetch_array($select))
                    {
                     ?>	
					<tr><td>
					<div id="in"><?php echo $reg['title'];?></div><div id="il">PostBy:<?php echo $reg['name'];?></div><br>
				<pre><?php echo $reg['comment'];?></pre><br>
					
				<div id="io"><a href="adedit.php?id=<?php echo $reg['id'];?>">edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="adpost.php?id=<?php echo $reg['id'];?>"onclick="return confirm('Are you sure?')">delete</a></div><div id="al">Last Update:<?php echo $reg['datetime'];?></div><br><hr/></td></tr>
					<?php
                     }
                     ?>
                    
				</table>
			</div>
		</div>
	</body>
</html>

