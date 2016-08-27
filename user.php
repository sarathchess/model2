<html>
	<head>
		<?php include('uhead.php');?><a href="userviews.php">Back</a>		
	</head>
	<div id="ul">
		<img src="slide.jpg" height="100%" width="100%"> 
	</div>
	<div id="uc">
		<table border="2" hight="70%" width="70%" align="center">
			<?php
	             $select=mysql_query("SELECT  * FROM `data` WHERE `pid`='$id'");
                 while($reg=mysql_fetch_array($select))
                 {
                 ?>
			<tr><td><pre>
				 
                <a href="userview.php?id=<?php echo $reg['id'];?>"><?php echo $reg['title'];?></a>
                <?php
                }
                ?>
			</pre></td></tr>
		</table>		
	</div>		
	</div>
</html>
