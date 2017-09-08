<?php require("header.php");?>


<script>

function logout_query(){
request.open('GET'," https://auth.bewitch58.hasura-app.io/logout ", true);
request.withCredentials=true;
request.setRequestHeader('Authorization','Bearer');
var request= new XMLHttpRequest();
request.onreadystatechange= function(){
   if(request.status===200){     
        window.location.href = "https://myapp.bewitch58.hasura-app.io/index.php";	
    }
    else{
	console.log("error");	
	}          
  }
console.log('Bearer');
}

logout_query();

</script>



<?php require("footer.php");?>
