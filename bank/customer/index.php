<?php
//session_login
session_start();
if (!isset($_SESSION['logged_in'])) {

header ( "Location: ../index.php" );
} else {
$customerID = $_SESSION['customerID'];
$customerName = $_SESSION['customerName'];
//echo "Hello ". $customerID ;
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Internet Banking</title>
<link href="design1.css" rel="stylesheet" type="text/css">
</head>
<div class="table">
<div class="header">
	<center><h1>Internet Banking</h1></center>
	<?php 
		$customerID = $_SESSION['customerID'];	
		$customerName = $_SESSION['customerName'];
		echo  "<center>" . "Welcome! " . "</center>";
		echo  "<center> <b>"  . $customerName  . "</b></center>" . "<br/>";
	?>
</div>

	<div class="menubar">

	
		<?php include("includes/menubar.php"); ?>
	
	</div> 
 <div class="sidebar"> 
    <?php include("includes/sidebar.php"); ?>
 </div>

<div class="content"><br/>
	<?php include("includes/about.php"); ?>	
</div>
<div class="fotter">
	<?php include("includes/fotter.php"); ?>

</div>

</div>
<body>
</body>

</html>
