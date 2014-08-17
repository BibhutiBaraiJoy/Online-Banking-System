<?php
//log in form
session_start();

$message="";
$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db("ebanking", $con);
	if(!$db_selected)
		die('Database not found :'.mysql_error());
	
	$result = mysql_query("SELECT * FROM login");
	while($row = mysql_fetch_array($result))
  	{
  		if ((isset($_REQUEST['password'])) && ($_REQUEST['password'] == $row['password']) && (isset($_REQUEST['customerID'])) && ($_REQUEST['customerID'] == $row['customer_id']))
		 {
			$_SESSION['customerID'] = $_REQUEST['customerID'];
			$loginDate= date(Y-m-d);
			$result1 = mysql_query("SELECT * FROM customer_detail");
			while($row = mysql_fetch_array($result1))
  			{
  				if ((isset($_REQUEST['customerID'])) && ($_REQUEST['customerID'] == $row['customer_id']))
		 		{
					$_SESSION['customerName']=$row['customer_name'];
					$_SESSION['logged_in'] = true;
					header ( "Location: customer/index.php");
				}
			}
		}
		else if (isset($_REQUEST['password']))
 		{
			$message= "Incorrect username or password !!";
		}
		
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="design.css" />
<title>ebanking</title>
</head>
<div class="table">
<div class="header"><center><h1>Internet Banking</h1></center></div>
	
	
<div class="menubar">


<ul>
		<li><a href="index.php" class="parentSize1">Home</a>
	    </li>
</ul>


	<ul>
		<li><a href="#" class="parentSize1">Account</a>
		<ul>
			<li><a href="loginrequired.php" class="dropdown">Account Details</a></li>
			<li><a href="loginrequired.php" class="dropdown">Account Summary</a></li>
			
		</ul>
		</li>
	</ul>
	
	
	
	
	<ul>	
		<li><a href="#" class="parentSize2">Transaction</a>
		
		<ul>
			<li><a href="loginrequired.php" class="dropdown">Balance Transfer</a></li>
			<li><a href="loginrequired.php" class="dropdown">Apply For Loan</a></li>
			
		</ul>
		
		</li>
	</ul>
		
		
		
		
	<ul>	
		<li><a href="#" class="parentSize1">Payments</a>
		
			<ul>
				<li><a href="loginrequired.php" class="dropdown">Bill Payments</a></li>
				<li><a href="loginrequired.php" class="dropdown">Bill Payments Summary</a></li>
			</ul>
		
		</li>
	</ul>
	
	
	
	
	<ul>	
		<li><a href="#" class="parentSize2">Cust. Services</a>
		
		<ul>
			<li><a href="loginrequired.php" class="dropdown">Contact Information</a></li>
			<li><a href="loginrequired.php" class="dropdown">Change User Setting</a></li>
			<li><a href="loginrequired.php" class="dropdown">Message To Admin</a></li>
		</ul>
		
		</li>
	</ul>
	
	
	
	<ul>	
		<li><a href="#" class="parentSize1">Contact</a></li>
	</ul>
	
	
	
	<ul>	
		<li><a href="#" class="parentSize1">About</a></li>
	</ul>
	
	
	</div> 
	
	
<!--</table> -->
<div class="sidebar">
<div id="login"><br/>
	 <fieldset>
	 <legend> <font size="+1"> Enter ID & Password:  </font></legend>
     <?php echo "<font color=yellow >". $message."</font>"; ?>
		<form name="login"  method="post" style="font-size:15px" onSubmit="return validate_form();">			
			Customer ID : <input type="text" size="20" name="customerID"/><br/>
			Forget user name ?<br/><br/>
			Password : <input type="password" name="password" size="20"><br/>
			Forget password ?<br/><br/>
			<input type="submit" name="submit" value="Log in"/><br/>
			<a href="registrationForm.php"><font color=yellow size=4px ;>Create new account ?</font></a>
		</form>
	</fieldset>	
        
	</div>

</div>
<div class="content">
	<?php
		include("includes/home.php");
		 
	?>
</div>
<div class="fotter"><center>ebanking.com</center></div>
</div>
<body>
<script type="text/javascript">
		function validate_form()
		{
  		var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
			valid=true;
			if(document.login.customerID.value=="" )
			{
				document.login.customerID.style.background = 'Yellow';
				alert ("You must fill 'customer ID'.");
				valid=false;
			}
			else if (document.login.customerID.value.match(illegalChars))
			 {
			 	alert ("You entered iligal charecter of 'customer ID'.");
				valid=false;
    		 }
			 else if(document.login.password.value=="" )
			{
				document.login.customerID.style.background = 'Yellow';
				alert ("You must fill 'password'.");
				valid=false;
			}
			
		 return valid;
		}
	</script>
</body>
</html>
