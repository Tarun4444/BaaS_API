<?php require("header.php"); ?>

<script> 
    //The XMLHttpRequest object can be used to exchange data with a web server behind the scenes. This 		means that it is possible to update parts of a web page, without reloading the whole page.
    var user_id;
   // var username;
    var user_id_cookie;
    var user_name_cookie;
    function login_query(){    
	var requestObject1= new XMLHttpRequest(); 
           requestObject1.onreadystatechange= function(){
              if (requestObject1.readyState===4){
                     if( requestObject1.status===200){          
                    	user_id = JSON.parse(this.responseText).hasura_id;
                    	console.log(this.responseText);    // returns JSON object
                    	console.log("user_id = "+user_id);  // user_id = 8 
                    	Cookies.set('user_id', user_id);
                    	Cookies.set('user_name', username);                                      
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
    requestObject1.send(JSON.stringify({username:username,password:password}));
    //document.getElementById("login_btn").value="Please wait...";
}

var username = '<?= $_POST['spuid']?>' ;
var pwd = '<?= $_POST['pwd']?>' ;
    
login_query(username,pwd);

</script>

<?/*php 
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];

	if ( isset($uid) && isset($pwd))
	{
		$sql="select * from user where username='$uid' and password='$pwd'"	;
		$result = ExecuteQuery($sql);
		
		if (mysql_num_rows($result)==1)
		{
			$row = mysql_fetch_array($result);
			
			session_start();
			$_SESSION["uid"]= $row["user_id"];
			$_SESSION["fn"] = $row["fullname"];
			
			ExecuteNonQuery ("UPDATE User SET isuser=true WHERE username='$uid'");
			
			if($row["user_type"]=="admin")
			{
				header("location: admin/home.php");
			}
			else
			{
				header("location: uhome.php");
			}
		}
		else
			header("location: index.php?act=invalid");
	}
?*/?>
<?php require("footer.php"); ?>
