<html>
	<head>
		<?php include('uhead.php');?>		
	</head>
	<div id="ul">
		<img src="slide.jpg" height="100%" width="100%"> 
	</div>
	<div id="uc">
		<table border="2" hight="70%" width="70%" align="center">
			<tr><td>Catagory</td></tr>
			<tr><td><pre>
				 <?php
				 session_start();
	             $select=mysql_query("select * from `parent`");
                 while($reg=mysql_fetch_array($select))
                 {
                 ?>	       
                 <a href="user.php?id=<?php echo $reg['cid'];?>"><?php echo $reg['cid'];?>.<?php echo $reg['pname'];?></a><br>
                 <?php
                 }
                 ?>
			</pre></td></tr>
		</table>		
	</div>		
	</div>
</html>
