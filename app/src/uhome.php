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
				document.getElementById("a").innerHTML = "Please, Enter Discussion name.";
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
				document.getElementById("b").innerHTML = "Please, Enter Discussion views.";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
			}
			
			console.log(a);
			return false;
		}
		else
			console.log(b);
			return true;
	}

</script>

	<div>
		<div align="right">
		  	<h4><a href="logout.php">LogOut</a> </h4>
		</div>
		<div align = "left">
			<form action="/for.php" method="post" name = "form1" onsubmit="check(form1)" >
			  New DISCUSSION : <br>
			  <input type="text" name="new_disc" id="a">
			  <br>	
			  <br>VIEWS : <br>
			 <textarea name="view_disc" ></textarea>
			  <input type="submit" value="Submit">
			</form> 
			
		</div>
	</div>
  </body>
</html>


<?php require("footer.php");?>
