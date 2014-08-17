<?php
//session_login
//session_start();
$customerID = $_SESSION['customerID'];
$customerName = $_SESSION['customerName'];

$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db("ebanking", $con);
	if(!$db_selected)
		die('Database not found :'.mysql_error());
	
	$result = mysql_query("SELECT * FROM customer_detail");
	while($row = mysql_fetch_array($result))
  	{
		if($row['customer_id']== $customerID)
		{
			echo '<table align="center" frame="box" width="100%">';
			echo '<tr><td class="columns"> Name</td><td class="field"><center>'.$row['customer_name'].'</center></td></tr>
			<tr><td class="columns"> Fathers Name</td><td class="field"><center>'.$row['fathers_name'].'</center></td></tr>
			<tr><td class="columns">Mothers Name</td><td class="field"><center>'.$row['mothers_name'].'</center></td></tr>
			<tr><td class="columns"> Husband or Wife Name</td><td class="field"><center>'.$row['husband_name'].'</center></td></tr>
			<tr><td class="columns"> Occupation</td><td class="field"><center>'.$row['occupation'].'</center></td></tr>
			<tr><td class="columns"> Date of Birth</td><td class="field"><center>'.$row['date_of_birth'].'</center></td></tr>
			<tr><td class="columns"> Blood Group</td><td class="field"><center>'.$row['blood_group'].'</center></td></tr>
            <tr><td class="columns">Sex </td><td class="field"><center>'.$row['sex'].'</center></td></tr>';
			//echo '</table>';
		}
	}
    echo '</table>';
?>
