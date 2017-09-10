<?php 
	require("header.php");

	$sexy=$_GET['uid'];//$hi="sfdgsf";
	$sexy="logout.php?uid=".$sexy;

echo '<h4><a href="'.$sexy.'">LogOut</a> </h4> '; 
?>



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
