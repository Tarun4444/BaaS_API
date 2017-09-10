<?php 
require("header.php");
?>

<script>   

                         
    window.onload=function() {
   	var auth_toke = "; "+document.cookie ;
	auth_toke = auth_toke.split("; authio=");
	if(auth_toke.length==2)
	 auth_toke=auth_toke.pop().split(";").shift(); 
        console.log(loggedIn_user);
        if(auth_toke==""){
       	     window.location.href = "https://myapp.bewitch58.hasura-app.io/index.php";
        }
        else{
        	 window.location.href = "https://myapp.bewitch58.hasura-app.io/uhome.php";
	}



</script>

<?php require("footer.php");?>
