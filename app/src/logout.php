<?php require("header.php");?>


<script>
function logout_query(){
var request= new XMLHttpRequest();
request.onreadystatechange= function(){
   if(request.status===200){     
        window.location.href = "https://myapp.bewitch58.hasura-app.io/index.php";	
    }
    else{
	console.log("error");	
	}          
  }
}
  
request.open('POST'," https://auth.bewitch58.hasura-app.io/logout ", true);
request.withCredentials=true;

logout_query();

</script>



<?php require("footer.php");?>
