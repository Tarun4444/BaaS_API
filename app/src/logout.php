<?php require("header.php");

?>


<script>
var auth_toke = "; "+document.cookie ;
auth_toke = auth_toke.split("; authio=");
if(auth_toke.length==2)
 auth_toke=auth_toke.pop().split(";").shift();

console.log(auth_toke);

function logout_query(){
var request= new XMLHttpRequest();
request.onreadystatechange= function(){
   if(request.readyState===XMLHttpRequest.DONE && request.status===200){     
        window.location.href = "https://myapp.bewitch58.hasura-app.io/index.php";	
    }
    else{
	console.log("error");	
	}          
  }
request.open('GET',"https://auth.bewitch58.hasura-app.io/user/logout", true);
//request.withCredentials=true;

request.setRequestHeader('Authorization','Bearer '+auth_toke);
console.log('Bearer '+auth_toke);
request.send(null);

}

logout_query();

</script>



<?php require("footer.php");?>
