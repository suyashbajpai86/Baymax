<?php
include('connection.php');
$email = urldecode($_GET['email']);
$hash = $_GET['key'];
if (md5($email) == $hash) { 
	$sql = "UPDATE dreg SET status='approved' WHERE email='$email'";
$result = mysqli_query($con,$sql) ;
if($result)
{
echo '<div>Your account is now active. You may now <a href="signup.php">Log in</a></div>';
}
else
{
$sql1 = "UPDATE creg SET status='approved' WHERE email='$email'";
$result1 = mysqli_query($con,$sql1) ;
if($result)
{
echo '<div>Your account is now active. You may now <a href="signup.php">Log in</a></div>';
}
else{
	echo "Some error occurred".mysqli_error($con);
}
}
}

?>