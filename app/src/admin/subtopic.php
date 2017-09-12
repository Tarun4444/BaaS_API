<?php session_start();
 require("header.php");
?>
<script type="text/javascript">

 window.onload=function(){ 
	  var admin_toke='a66tjvabxo6w6mojba4dd4ngat22jv9p';
	  var discussion_id = '<?= $_GET['d_id']?>' ;

	  function answer_query(discussion_id){ 
	  var request= new XMLHttpRequest();	   
            request.onreadystatechange = function () {
        
          if (request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
               
               //console.log(this.responseText);  // returns Arrray of Objects
               orderedanswers=JSON.parse(this.responseText);
	       order_answer_id=JSON.parse(this.responseText).id;
	       var employee = JSON.stringify(orderedanswers);
              // console.log(employee);
		
		var employees = JSON.parse(employee);
		//console.log(employees);

		var table = document.createElement("table");
		for (var i = 0; i < employees.length; i++) {
			  var row = table.insertRow(-1);
			  //var firstNameCell = row.insertCell(-1);
			  //var ii = document.createElement("a");
			//ii.setAttribute("href","subtopic.php?d_id="+employees[i].discussion_id);
			//ii.appendChild(document.createTextNode(employees[i].discussion_topic));
			//firstNameCell.appendChild(document.createTextNode(employees[i].discussion_detail));
			var lastNameCell = row.insertCell(-1);
			  lastNameCell.appendChild(document.createTextNode(employees[i].answer_detail));
			}
			document.body.appendChild(table);
		
	    }
	}
    }  
   
            request.open('POST', " https://data.bewitch58.hasura-app.io/v1/query ", true);
	    request.setRequestHeader('Content-type','application/json');
	    request.setRequestHeader('Authorization','Bearer '+admin_toke);
	    request.send(JSON.stringify({"type":"select","args":{"table":"answer","columns":["*"],"where":			{"refer_discussion_id":discussion_id}}}));

}
answer_query(discussion_id);
};
</script>

<?php require("footer.php")?>
