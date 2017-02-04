<?php
	error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$email = $_POST['username'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);

		$password = $_POST['password'];
		$password = mysqli_real_escape_string($con,$password);
		$password = strip_tags($password);
		$password = MD5($password);

		$query = "SELECT email, pass  FROM dreg WHERE email='{$email}' and pass='{$password}'";
		$result = mysqli_query($con,$query);
		$num = mysqli_num_rows($result);
		if ($num == 0) // that is if no records found in database
			{
				$query1 = "SELECT email, pass  FROM creg WHERE email='{$email}' and pass='{$password}'";
				$result1 = mysqli_query($con,$query1);
				$num1 = mysqli_num_rows($result1);
				if ($num1==0){
					$m = "<span  style='width:100%;'>Wrong Credentials</span>";
			header("location: signup.php?m3='$m'");}
				
				else{
					$row = mysqli_fetch_array($result1);
			session_start();
			$_SESSION['email']=$row['email'];
			
			header('location: cregistration.php');
				}




}
				
		else{
			$row = mysqli_fetch_array($result);
			session_start();
			$_SESSION['email']=$row['email'];
			header('location: dregistration.php');	
		}
	}
?>