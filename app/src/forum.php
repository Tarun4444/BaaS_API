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
    request.onreadystatechange = function () {
        if (request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
               
               console.log(this.responseText);  // returns Arrray of Objects
               orderedQuestions=JSON.parse(this.responseText);
               console.log(orderedQuestions);
             }
	}
    }  
    request.open('POST', " https://data.bewitch58.hasura-app.io/v1/query ", true);
    request.setRequestHeader('Content-type','application/json');
    request.setRequestHeader('Authorization','Bearer '+ a66tjvabxo6w6mojba4dd4ngat22jv9p);
    request.send(JSON.stringify({"type":"select","args":{"table":"question","columns":["*"]}}));
};

</script>

<?php
	//$topic = ExecuteQuery ("SELECT * FROM topic");
	//$r1 = mysql_fetch_array($topic)
	/*while ()
	{
			echo "<div class='heading'>$r1[topic_name]</div>";
		
			$stopic = ExecuteQuery ("SELECT * FROM subtopic WHERE topic_id=$r1[topic_id]");	
			
			while ($r2 = mysql_fetch_array ($stopic) )
			{
				echo "<div class='box'>";
				echo "<div class='sub-heading'>
						<a href='questions.php?id=$r2[subtopic_id]'> $r2[subtopic_name]</a>
						
					</div>";
				echo "<p>$r2[subtopic_description]</p>";
				echo "</div>";
			}
	}	
*/?>

<?php require("footer.php"); ?>
