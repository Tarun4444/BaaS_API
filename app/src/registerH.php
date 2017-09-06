<?php  require("header.php"); ?>

<script>
   
 function auth_query(username,password){
 	
    var request= new XMLHttpRequest();
   
    request.onreadystatechange= function(){
   
      if(request.readyState===XMLHttpRequest.DONE){
        
         if(request.status===200) 
         {
 	  windows.alert("Registered");
         }
          else 
          { 
           windows.alert(50); 
          }
     }               
   
}         
   request.open('POST', " https://auth.bewitch58.hasura-app.io/signup", true);
   request.setRequestHeader('Content-type','application/json');
   request.send(JSON.stringify({username:username,password:password})); 
 
}

var username = '<?= $_POST['u_name']?>' ;
var password = '<?= $_POST['pwd']?>' ;

auth_query(username,pwd);

</script>       
<?php require("footer.php"); ?>
