<?php require("header.php");?>


<script>
var auth_toke = '<?= $_SESSIO["uid"]?>' ;
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
request.withCredentials=true;

//request.setRequestHeader('Authorization','Bearer '+auth_toke);
console.log('Bearer '+auth_toke);
//request.send(JSON.stringify({}));

}

logout_query();

</script>



<?php require("footer.php");?>
