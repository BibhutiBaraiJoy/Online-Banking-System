<?php
//session_login
session_start();
if (!isset($_SESSION['logged_in'])) {

header ( "Location: index.php" );
} else {
//$customerID = $_SESSION['customerID'];
//echo "Hello ". $customerID ;
header ( "Location: customer/index.php" );
}
?>

