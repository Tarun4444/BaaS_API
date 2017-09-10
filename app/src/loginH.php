<?php require("header.php");$hi="sfjo"; ?>

<script> 
    //The XMLHttpRequest object can be used to exchange data with a web server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.
    function login_query(usernam,passwor){    
	 var user_id;
    	var auth_toke;
	var requestObject1= new XMLHttpRequest(); 
		requestObject1.onreadystatechange= function(){
              if (requestObject1.readyState===4){
                     if( requestObject1.status===200){                              	
			user_id = JSON.parse(this.responseText).hasura_id;
			auth_toke = JSON.parse(this.responseText).auth_token;

                    	console.log(this.responseText);    // returns JSON object
                    	console.log("user_id = "+user_id + auth_toke);  // user_id = 8 
				
			window.location.href = "https://myapp.bewitch58.hasura-app.io/uhome.php?uid="+auth_toke;
                    }
                    else
                    {	console.log("Invalid id or password");
			window.alert("Invalid id or password");
	    		window.location.href = "https://myapp.bewitch58.hasura-app.io/index.php";
                    }
           }
     }
       
    requestObject1.open('POST', " https://auth.bewitch58.hasura-app.io/login ", true);
    requestObject1.withCredentials=true;
    requestObject1.setRequestHeader('Content-type','application/json');

    requestObject1.send(JSON.stringify({username:usernam,password:passwor}));
    //document.getElementById("login_btn").value="Please wait...";
}

var username = '<?= $_POST['uid']?>' ;
var pwd = '<?= $_POST['pwd']?>' ;
    
login_query(username,pwd);

</script>

<?php require("footer.php"); ?>
