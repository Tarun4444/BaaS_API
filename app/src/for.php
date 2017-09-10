<?php 
 require("header.php");
?>
    
<script>
   var admin_toke='a66tjvabxo6w6mojba4dd4ngat22jv9p';
   

   function timeStamp() {
	
	  var now = new Date();
	 var date = [ now.getMonth() + 1, now.getDate(), now.getFullYear() ];
	  var time = [ now.getHours(), now.getMinutes(), now.getSeconds() ];
	  var suffix = ( time[0] < 12 ) ? "AM" : "PM";
	
	  time[0] = ( time[0] < 12 ) ? time[0] : time[0] - 12;
	
	  time[0] = time[0] || 12;

	  for ( var i = 1; i < 3; i++ ) {
	    if ( time[i] < 10 ) {
	      time[i] = "0" + time[i];
	    }
	  }

	
	  return date.join("/") + " " + time.join(":") + " " + suffix;
}

var timeStmp = timeStamp();
console.log(timeStmp);

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
	    request.send(JSON.stringify({"type":"insert","args":{"table":"question","objects":[{"datetime":timestmp,"discussion_topic":new_dis,"discussion_detail":view_dis}]}}));

	};

var new_dis = '<?= $_POST['new_disc']?>' ;
var view_dis = '<?= $_POST['view_disc']?>' ;

console.log(new_dis);
console.log(view_dis);

insert_query(new_dis,view_dis);
</script>     

<?php require("footer.php");?>
