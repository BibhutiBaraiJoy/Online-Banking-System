<html>
<body>

<?php 

$userName=$_POST["userName"];
$password=$_POST["password"];
if($userName!=NULL && $password!=NULL  )
{
echo "Welcome! "; 
echo   $userName . "<br/>";
}
else
{
echo "You must fill user name and password";
}
?>
</body>
</html>