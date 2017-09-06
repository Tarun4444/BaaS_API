<?php  require("header.php"); ?>
<script>
   var signup_btn = document.getElementById("signup_btn");
 
    signup_btn.onclick= function(){
 	
    var request= new XMLHttpRequest();
   
    request.onreadystatechange= function(){
   
      if(request.readyState===XMLHttpRequest.DONE){
        
         if(request.status===200) 
          {
 		windows.alert(55);
          }
          else 
          { 
           windows.alert(50); 
          }
     }               
   
}     
    var username= document.getElementById("a").value;
    var password= document.getElementById("b").value;
    
    request.open('POST', " https://auth.bewitch58.hasura-app.io/signup", true);
    request.setRequestHeader('Content-type','application/json');
    request.send(JSON.stringify({username:username,password:password})); 
    
}; 

</script>       
<?php require("footer.php"); ?>
