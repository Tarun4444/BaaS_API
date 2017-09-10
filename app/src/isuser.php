<?php 
require("header.php");
?>

<script>   

                         
    window.onload=function() {
   	var auth_toke = "; "+document.cookie ;
	var poop=auth_toke.search("authio");
	auth_toke = auth_toke.split("; authio=");
	if(auth_toke.length==2)
	 auth_toke=auth_toke.pop().split(";").shift(); 
        console.log(auth_toke);
        if(poop==-1){
       	     window.location.href = "https://myapp.bewitch58.hasura-app.io/index.php";
        }
        else{
        	 window.location.href = "https://myapp.bewitch58.hasura-app.io/uhome.php";
	}

}

</script>

<?php require("footer.php");?>
