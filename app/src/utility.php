<?php
error_reporting(1);
	function ExecuteQuery ($SQL)
	{	
		$con=mysqli_connect ("http://sql.default/", "bewitch58","");
		mysql_select_db ("tech_forum",$con);
		
		$rows = mysql_query ($SQL);
		
		mysql_close ();
		
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysqli_connect ("http://sql.default/", "bewitch58","");
		mysql_select_db ("tech_forum",$con);
		
		$result = mysql_query ($SQL);
		
		mysql_close ();
		
		return $result;
	}
?>
