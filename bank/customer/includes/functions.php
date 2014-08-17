<?php
function db_connection($sql)
{
	$con = mysql_connect("localhost","root","");
	if(!$con)
		die('Could not connect to database :'.mysql_error());
	$db_selected=mysql_select_db('onlinebanking',$con);
	if(!$db_selected)
		die('Database not found :'.mysql_error());
	$result=mysql_query($sql,$con);
	mysql_close($con);
	return $result;
}
?>