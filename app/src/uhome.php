<?php 
	require("header.php");
?>

<html>
<body>

<div>
	<div align="right">
	  	<h4><a href="logout.php">LogOut</a> </h4>
	</div>
	<div align = "left">
		<form action="/forum.php">
		  New DISCUSSION : <br>
		  <input type="text" name="firstname" >
		  <br>	
		   <br>VIEWS : <br>
		  <input type="text" name="lastname"  >
		  <br><br>
		  <input type="submit" value="Submit">
		</form> 
	</div>
</div>

</body>
</html>


<?php require("footer.php");?>
