<?php
	if(!isset($_SESSION["fn"]))
		header("location:./login.php");
?>

<span style="float:right">
<a href="aedit.php"><img src="../res/images/useri.jpg" class="imagedel"><?php echo $_SESSION["fn"];?></a>, [ <a href="logout.php">logout</a> ] 
</span>
