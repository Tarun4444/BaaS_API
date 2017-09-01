

<?php
	if(!isset($_SESSION["fn"]))
		header("location:login.php");
?>

<span style="float:right"><?php echo $_SESSION["fn"];?>, [ <a href="logout.php">logout</a> ] 
</span>
