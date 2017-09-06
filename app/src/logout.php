<?php require("header.php");?>


<script>
  function logout_query()
    {
        var request= new XMLHttpRequest();
        request.onreadystatechange= function()
        {
              if(request.readyState===XMLHttpRequest.DONE && request.status===200)
          {    console.log("JSON.parse(this.responseText).message");
		user_id = JSON.parse(this.responseText).hasura_id;
		console.log(user_id);
		//user_name = JSON.parse(this.responseText).hasura_name;
          	window.location.href = "https://myapp.bewitch58.hasura-app.io/index.php";	
	  }
             
          else
          { 
          console.log("JSON.parse(this.responseText).message");
          }
       
        }
   
     //making the HTTP request 
     
     
    Cookies.remove('user_id');
    Cookies.remove('user_name');
   
    request.open('GET'," https://auth.bewitch58.hasura-app.io/logout ", true);
    request.withCredentials=true;
    request.send(null);
 }

logout_query()

</script>



<?php require("footer.php");?>
