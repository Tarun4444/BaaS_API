<script>
 
 var dd_id = '<?= $_POST['d_id']?>' ;

 var admin_toke='a66tjvabxo6w6mojba4dd4ngat22jv9p';
 function view_query(d_vie){
 	
    var request= new XMLHttpRequest();
   
    request.onreadystatechange= function(){
   
      if(request.readyState===XMLHttpRequest.DONE){
        
         if(request.status===200) 
         {
 	   console.log("discussioned");
	  // window.location.href = "https://myapp.bewitch58.hasura-app.io/subtopic.php?dd_id="+d_id;
         }
     }               
   
   }         
   	    request.open('POST', " https://data.bewitch58.hasura-app.io/v1/query ", true);
	    request.setRequestHeader('Content-type','application/json');
	    request.setRequestHeader('Authorization','Bearer '+admin_toke);
	    request.send(JSON.stringify({"type":"insert","args":{"table":"answer","objects":[{"answer_detail":d_vie}]}}));

}

var d_view = '<?= $_POST['d_v']?>' ;
console.log(d_view);
view_query(d_view);

</script> 
