<?php 
 require("header.php");
?>
    
<script>
   var admin_toke='a66tjvabxo6w6mojba4dd4ngat22jv9p';
   
   function insert_query(new_dis,view_dis){ 
	var request= new XMLHttpRequest();	   
            request.onreadystatechange = function () {
		    if (request.readyState === XMLHttpRequest.DONE) {
		          if (request.status === 200) {
			  	console.log("inserted");
	   			window.location.href = "https://myapp.bewitch58.hasura-app.io/forum.php";
			}
		    }
	    }	    
            request.open('POST', " https://data.bewitch58.hasura-app.io/v1/query ", true);
	    request.setRequestHeader('Content-type','application/json');
	    request.setRequestHeader('Authorization','Bearer '+admin_toke);
	    request.send(JSON.stringify({"type":"insert","args":{"table":"question","objects":{"discussion_topic":new_dis,"discussion_detail":view_dis}}}));

	};

var new_dis = '<?= $_POST['new_disc']?>' ;
var view_dis = '<?= $_POST['view_disc']?>' ;

auth_query(new_dis,view_dis);
</script>     

<?php require("footer.php");?>
