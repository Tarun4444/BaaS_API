<?php  require("header.php"); ?>

<script>
   
 function auth_query(username,password){
 	
    var request= new XMLHttpRequest();
   
    request.onreadystatechange= function(){
   
      if(request.readyState===XMLHttpRequest.DONE){
        
         if(request.status===200) 
         {
 	   console.log("Registered");
	   window.location.href = "https://myapp.bewitch58.hasura-app.io/register3.php";
         }
          else 
          { 
	    console.log("Not Registered");
	    window.location.href = "https://myapp.bewitch58.hasura-app.io/register4.php";
          }
     }               
   
}         
   request.open('POST', " https://auth.bewitch58.hasura-app.io/signup", true);
   request.setRequestHeader('Content-type','application/json');
   request.send(JSON.stringify({username:username,password:password})); 
 
}

var username = '<?= $_POST['u_name']?>' ;
var pwd = '<?= $_POST['pwd']?>' ;

auth_query(username,pwd);

</script>       
<?php require("footer.php"); ?>
