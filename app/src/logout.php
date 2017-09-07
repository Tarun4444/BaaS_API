<?php require("header.php");?>


<script>

var request= new XMLHttpRequest();
request.onreadystatechange= function(){
   if(request.status===200){     
	msg =JSON.parse(this.responseText).message;
	console.log(msg);
	window.location.href = "https://myapp.bewitch58.hasura-app.io/index.php";	
    }          
};  
var auth_token=localStorage.getItem('auth_token');;  
request.open('POST'," https://auth.bewitch58.hasura-app.io/logout ", true);
request.setRequestHeader('Authorization', 'Bearer auth_token');
request.withCredentials=true;

</script>



<?php require("footer.php");?>
