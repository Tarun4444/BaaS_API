<?php 
	require("header.php");
?>

<html>
<body>
<script type="text/javascript">

function check(form1)
	{
		if(form1.u_name.value == "" ||form1.f_name.value == "" ){
			if (form1.u_name.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter user name.";
				//alert("Please, Enter The Username");
			form1.u_name.form1.focus();
				
			}
			else
			{
				document.getElementById("a").innerHTML = "";
				//alert("Please, Enter The Username");
				form1.u_name.focus();
				
			}
			 if (form1.f_name.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter full name.";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
			}
			return false;
		}
		else
			return true;
	}

</script>

	<div>
		<div align="right">
		  	<h4><a href="logout.php">LogOut</a> </h4>
		</div>
		<div align = "left">
			<form action="/for.php" method="post" onsubmit="return check(this) enctype="multipart/form-data" name = "form1">
			  New DISCUSSION : <br>
			  <input type="text" name="new_dis" id="a">
			  <br>	
			   <br>VIEWS : <br>
			  <input type="text" name="view_dis" id="b">
			  <br><br>
			  <input type="submit" value="Submit">
			</form> 
		</div>
	</div>
  </body>
</html>


<?php require("footer.php");?>
