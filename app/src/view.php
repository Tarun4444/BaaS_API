<script>

 var admin_toke='a66tjvabxo6w6mojba4dd4ngat22jv9p';
// var dd_id = '<?= $_GET['d_id']?>' ;

 var dd_id = "; "+document.cookie ;
	//var poop=auth_toke.search("authio");
		dd_id = dd_id.split("; question_id=");
	if(dd_id.length==2)
    		dd_id=dd_id.pop().split(";").shift(); 
    	//console.log(auth_toke);
	console.log(dd_id);	

 document.cookie = "question_id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;"; 

 function view_query(d_view){ 	
    var request= new XMLHttpRequest();
   
    request.onreadystatechange= function(){
   
      if(request.readyState===XMLHttpRequest.DONE){
        
         if(request.status===200) 
         {
 	   console.log("discussioned");
	   window.location.href = "https://myapp.bewitch58.hasura-app.io/subtopic.php?d_id="+dd_id;	
         }
     }               
   
   }         
   	    request.open('POST', " https://data.bewitch58.hasura-app.io/v1/query ", true);
	    request.setRequestHeader('Content-type','application/json');
	    request.setRequestHeader('Authorization','Bearer '+admin_toke);
	    request.send(JSON.stringify({"type":"insert","args":{"table":"answer","objects":[{"answer_detail":d_view,"refer_discussion_id": dd_id }]}}));

}

var d_view = '<?= $_POST['d_v']?>' ;

console.log(d_view);

view_query(d_view);

</script> 
