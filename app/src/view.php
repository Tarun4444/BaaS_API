<script>
  
 var u_id = "; "+document.cookie ;
	//var poop=u_id.search("authio");
	u_id = u_id.split("; user_id=");
	if(u_id.length==2)
    		u_id=u_id.pop().split(";").shift(); 
	var uu_id = parseInt(u_id) ;
	console.log(uu_id);
 
 function view_query(){
 	
    var request= new XMLHttpRequest();
   
    request.onreadystatechange= function(){
   
      if(request.readyState===XMLHttpRequest.DONE){
        
         if(request.status===200) 
         {
 	   console.log("discussioned");
	   window.location.href = "https://myapp.bewitch58.hasura-app.io/subtopic.php";
         }
     }               
   
   }         
   	    request.open('POST', " https://data.bewitch58.hasura-app.io/v1/query ", true);
	    request.setRequestHeader('Content-type','application/json');
	    request.setRequestHeader('Authorization','Bearer '+admin_toke);
	    request.send(JSON.stringify({"type":"insert","args":{"table":"answer","objects":[{"answer_detail":d_view}]}}));

}

var d_view = '<?= $_POST['d_v']?>' ;
console.log(d_v);
view_query(d_v);

</script> 
