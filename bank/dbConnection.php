	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	//echo "success";
	$db_selected = mysql_select_db("ebanking", $con);
	if(!$db_selected)
		die('Database not found :'.mysql_error());
	
	$result = mysql_query("SELECT * FROM login");
	while($row = mysql_fetch_array($result))
  	{
  		if ((isset($_REQUEST['password'])) && ($_REQUEST['password'] == $row['password']))
		 {
			$_SESSION['customerID'] = $_REQUEST['customerID'];
			$_SESSION['logged_in'] = true;
			header ( "Location: loginCheck.php");
		}
		 else if (isset($_REQUEST['password']))
 		{
			echo "Incorrect username or password";
		}
		
	}
	


	
