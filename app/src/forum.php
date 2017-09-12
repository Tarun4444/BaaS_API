<?php 
 require("header.php");
?>
<script>
 window.onload=function(){ 

        var auth_toke = "; "+document.cookie ;
	var poop=auth_toke.search("authio");
		auth_toke = auth_toke.split("; authio=");
	if(auth_toke.length==2)
    		auth_toke=auth_toke.pop().split(";").shift(); 
    	console.log(auth_toke);
  
    var request = new XMLHttpRequest();
    var orderedQuestions;
    var recent_questions ;
    var admin_toke='a66tjvabxo6w6mojba4dd4ngat22jv9p';

    request.onreadystatechange = function () {
        if (request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
               
               //console.log(this.responseText);  // returns Arrray of Objects
               orderedQuestions=JSON.parse(this.responseText);
	       var order_Question_id=JSON.parse(this.responseText).discussion_id;

	       document.cookie="question_id=" + order_Question_id ;		

	       var employee = JSON.stringify(orderedQuestions);
              // console.log(employee);
		
		var employees = JSON.parse(employee);
		//console.log(employees);

		var table = document.createElement("table");
		for (var i = 0; i < employees.length; i++) {
			  var row = table.insertRow(-1);
			  var firstNameCell = row.insertCell(-1);
			  var ii = document.createElement("a");
			ii.setAttribute("href","subtopic.php?d_id="+employees[i].discussion_id);
			ii.appendChild(document.createTextNode(employees[i].discussion_topic));
			firstNameCell.appendChild(ii);
			var lastNameCell = row.insertCell(-1);
			  lastNameCell.appendChild(document.createTextNode(employees[i].discussion_detail));
			}
			document.body.appendChild(table);
		
	    }
	}
    }  
   
    request.open('POST', " https://data.bewitch58.hasura-app.io/v1/query ", true);
    request.setRequestHeader('Content-type','application/json');
    request.setRequestHeader('Authorization','Bearer '+admin_toke);
    request.send(JSON.stringify({"type":"select","args":{"table":"question","columns":["*"]}}));
};

</script>

