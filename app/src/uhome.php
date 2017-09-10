<?php 
	require("header.php");
?>
<script>
console.log(document.cookie);
var auth_toke = "; "+document.cookie ;
auth_toke = auth_toke.split("; dinoisses=");
if(auth_toke.length==2)
 auth_toke=auth_toke.pop().split(";").shift();
console.log(auth_toke);
</script>
<h4><a href="logout.php">LogOut</a> </h4> 

<?/*php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   
			
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a></span>";
			
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			$row[fullname]
			<td valign='top'>
			$row[question_detail]<br/><br/>
			$row[datetime]<br/><br/>
			</td></tr>";
			
			
			echo "</table></span><div class='h10'></div>";
		}
	
*/?>

<?php require("footer.php");?>
