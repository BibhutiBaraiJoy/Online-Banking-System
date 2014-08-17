<?php
session_start();
session_id();
?>
<html ><strong></strong>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--<script type="text/javascript" src="check.js"></script>-->
<title>Registration Form submission</title>

</head>
<body>
<?php
	$checkCustomerID;
	$status=5;
    $stageComplete="none";
	
	$customerName=$_POST["customerName"];
	$fathersName=$_POST["fathersName"];
	$mothersName=$_POST["mothersName"];
	$husbandName=$_POST["husbandName"];
	$occupation=$_POST["occupation"];
	$dateOfBirth=$_POST["dateOfBirth"];
    $bloodGroup=$_POST["bloodGroup"];
	$sex=$_POST["sex"];
	$nationality=$_POST["nationality"];
	$nationalIdNo=$_POST["nationalIdNo"];
	
    $customerID=$_POST["customerID"];
    $password=$_POST["password"];
    $conformPassword=$_POST["conformPassword"];
	/*var $accountNo;*/
	$accountType=$_POST["accountType"];
	$openingDate=date("Y-m-d");
	$currentBalence=0;
    $lastTransactionAmount=0;
    $lastTransactionDate=date("Y-m-d");
	$referenceAccountNo=$_POST["referenceAccountNo"];
	$referenceCustomerID=$_POST["referenceCustomerID"];
	
	$presentStreet="DUET";
	$presentZipCode=$_POST["presentZipCode"];
	$presentPS=$_POST["presentPS"];
    $presentCity=$_POST["presentCity"];
    $presentCountry=$_POST["presentCountry"];
    
	$permanentStreet="Rajapur";
	$permanentZipCode=$_POST["permanentZipCode"];
	$permanentPS=$_POST["permanentPS"];
    $permanentCity=$_POST["permanentCity"];
    $permanentCountry=$_POST["permanentCountry"];
    	
	$contactNo=$_POST["contactNo"];
    $emailID=$_POST["emailID"];
    
    $lastLoginDate=date("Y-m-d");
    $lockStatus=0;
	
	
	echo "You Entered! " . "<br/>" ;
	echo  "Customer ID : " . $customerID. "<br/>" ;
	echo  "Customer Name : " . $customerName . "<br/>" ;
	echo "Father's Name : " . $fathersName . "<br/>" ;
	echo "Mother's Name : " .$mothersName . "<br/>" ;
	if($husbandName!=NULL)
		echo "Hasband : " .  $husbandName . "<br/>" ;
	echo "Date of Birth : " . $dateOfBirth . "<br/>" ;
	echo "Sex : " . $sex . "<br/>";	
	echo "Contact No : " . $contactNo . "<br/>" ;
	
	
	
	
	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ebanking", $con);


// Insert into Customer table
$checkCustomerID=0;
$result = mysql_query("SELECT customer_id FROM customer_detail WHERE customer_id='$customerID'");

while($row = mysql_fetch_array($result))  {
  $checkCustomerID=$row['customer_id'];
  }

if($checkCustomerID!=$customerID)
{
    $result = mysql_query("SELECT customer_id FROM account_information WHERE customer_id='$referenceCustomerID'");

    while($row = mysql_fetch_array($result))  {
        $checkReferenceCustomerID=$row['customer_id'];
    }
    $result = mysql_query("SELECT account_no FROM account_information WHERE account_no='$referenceAccountNo'");

    while($row = mysql_fetch_array($result))  {
        $checkReferenceAccount=$row['account_no'];
    }
    
    if($referenceCustomerID==$checkReferenceCustomerID && $referenceAccountNo==$checkReferenceAccount )
     {
        $stageComplete="all";
     }
     else
     {
        echo "<font color=red size=10px;>"."Reference Information Invalid !!"."</font>";
     }
} 
else
{
    echo "<font color=red size=10px;>"."This User Allready Exist!"."</font>";
}

if($stageComplete=="all")
{
    // Insert into Customer table
    mysql_query("INSERT INTO `customer_detail` (
    `customer_id` ,
    `customer_name` ,
    `fathers_name` ,
    `mothers_name` ,
    `husband_name` ,
    `occupation` ,
    `date_of_birth` ,
    `blood_group` ,
    `sex` 
    )
    VALUES ('$customerID', '$customerName', '$fathersName', '$mothersName', '$husbandName', '$occupation', '$dateOfBirth','$bloodGroup', '$sex')");

    mysql_query("INSERT INTO `national_info` (
    `national_id` ,
    `customer_id` ,
    `nationality` 
    )
    VALUES ('$nationalIdNo', '$customerID', '$nationality')");
    
    // Insert into Account table	
    
    mysql_query("INSERT INTO `account_information` (
        `customer_id` ,
        `account_type` ,
        `opening_date` ,
   	    `current_balance`,
        `last_transaction_amount` ,
        `last_transaction_date` ,
        `reference_account_no`
     )
	VALUES ('$customerID', '$accountType', '$openingDate', '$currentBalence', '$lastTransactionAmount', '$lastTransactionDate', '$referenceAccountNo')");

    $result = mysql_query("SELECT account_no FROM account_information WHERE customer_id='$customerID'");

    while($row = mysql_fetch_array($result))  {
        $accountNo=$row['account_no'];
    }

        echo "<font color=green size=10px;>"."Your Account No = "."</font>".$accountNo."<br/>";
       
      // Insert into Login table
      
    mysql_query("INSERT INTO `login` (
    `customer_id` ,
    `password` ,
    `last_login_date`,
    `lock_status`
    )
    VALUES ('$customerID', ' $password', '$lastLoginDate','$lockStatus')");
    
    // Insert into customer_contact_details table
    
    mysql_query("INSERT INTO `customer_contact_details` (
    `customer_id` ,   
    `contact_no`,
    `email_id`
    )
    VALUES ('$customerID', '$contactNo','$emailID')" );
    
    // Insert into present_address table
 
    mysql_query("INSERT INTO `present_address` (
    `customer_id` ,
    `country` ,
    `city` ,
    `police_station` ,
    `zip_code` ,
    `street` 
    )
    VALUES ('$customerID', '$presentCountry', '$presentCity', '$presentPS', '$presentZipCode','$presentStreet')" );
   
   // Insert into permanent_address table
 
    mysql_query("INSERT INTO `permanent_address` (
    `customer_id` ,
    `country` ,
    `city` ,
    `police_station` ,
    `zip_code` ,
    `street` 
    )
    VALUES ('$customerID', '$permanentCountry', '$permanentCity', '$permanentPS', '$permanentZipCode','$permanentStreet')" );

    echo "<font color=green size=10px;>"."Success Fully Create Your Accou In This Bank"."</font>";
    
}
    
?>

<br/> <a href="index.php"> <input type="submit" name="submit" value=" Go to login page"/></a> 
<a href="registrationForm.php"> <input type="submit" name="submit" value=" Back"/></a>
	
</body>
</html>
</font>