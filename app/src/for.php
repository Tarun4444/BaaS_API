<?php 
 require("header.php");
?>
    
<script>
  	var u_id = "; "+document.cookie ;
	//var poop=u_id.search("authio");
	u_id = u_id.split("; user_id=");
	if(u_id.length==2)
    		u_id=u_id.pop().split(";").shift(); 
	var uu_id = parseInt(u_id) ;
	console.log(uu_id);

   var admin_toke='a66tjvabxo6w6mojba4dd4ngat22jv9p';
   
   var d =new Date();
   var date_time= d.toDateString();
   
   console.log(date_time);

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
	    request.send(JSON.stringify({"type":"insert","args":{"table":"question","objects":[{"posted_by_autor_id":uu_id,"datetime":date_time,"discussion_topic":new_dis,"discussion_detail":view_dis}]}}));

	};

var new_dis = '<?= $_POST['new_disc']?>' ;
var view_dis = '<?= $_POST['view_disc']?>' ;

console.log(new_dis);
console.log(view_dis);

insert_query(new_dis,view_dis);
</script>     

<?php require("footer.php");?>
