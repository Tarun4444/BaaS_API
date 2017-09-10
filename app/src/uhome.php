<?php 
	require("header.php");
?>

<html>
<body>

<h4><a href="logout.php">LogOut</a> </h4> 

<form action="/action_page.php">
  New DISCUSSION : <br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  VIEWS : <br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>


<?php require("footer.php");?>
