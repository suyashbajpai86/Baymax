<?php
error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit'])){
	 $s=$_FILES['fname']['tmp_name'];
    $d=$_SERVER['DOCUMENT_ROOT']."images/".$_FILES['fname']['name'];
    if(move_uploaded_file($s,$d))
    {
        
       
        
    
    	session_start();
		if (!isset($_SESSION['email']))
	header('location: index.php');
		
		$dob = $_POST['dob'];
		$dob = mysqli_real_escape_string($con,$dob);
		$dob = strip_tags($dob);
		
		$mobile = $_POST['mobile'];
		$mobile = mysqli_real_escape_string($con,$mobile);
		$mobile = strip_tags($mobile);
		
		$address = $_POST['add'];
		$address = mysqli_real_escape_string($con,$address);
		$address = strip_tags($address);
		
		
		$gender = $_POST['gender'];
		$gender = mysqli_real_escape_string($con,$gender);
		$gender = strip_tags($gender);
		

		$degree = $_POST['degree'];
		$degree = mysqli_real_escape_string($con,$degree);
		$degree = strip_tags($degree);

		$special = $_POST['specialist'];
		$special= mysqli_real_escape_string($con,$special);
		$special = strip_tags($special);

		$ctype = $_POST['hospital'];
		$ctype= mysqli_real_escape_string($con,$ctype);
		$ctype = strip_tags($ctype);
		$email=$_SESSION['email'];
        
$query = "UPDATE dreg SET dob='$dob', mobile='$mobile',address='$address',gender='$gender',speciality='$special',hospital='$ctype',degree='$degree' ,f1=1 WHERE email='$email'";
		echo $query;
$result = mysqli_query($con, $query);
if($result)
{
	echo "Update succesfully";
	header('location:dr_pro.php');
}
else{
	echo "failed";
}}}
		
?>