<?php
	error_reporting(0);
	date_default_timezone_set('Etc/UTC');

	require './php/PHPMailerAutoload.php';
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$name = mysqli_real_escape_string($con,$name);
		$name = strip_tags($name);
		
		$email = $_POST['ermail'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);
		
		$password = $_POST['password_confirmation'];
		$password = mysqli_real_escape_string($con,$password);
		$password = strip_tags($password);
		$password = MD5($password);
		
		$password1 = $_POST['password'];
		$password1 = mysqli_real_escape_string($con,$password1);
		$password1 = strip_tags($password1);
		$password1 = MD5($password1);

		$city = $_POST['city'];
		$city = mysqli_real_escape_string($con,$city);
		$city = strip_tags($city);

		$profession = $_POST['pro'];
		$profession= mysqli_real_escape_string($con,$profession);
		$profession = strip_tags($profession);

	print $profession;
		
		
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		
		$query = "SELECT * FROM dreg WHERE email='$email'";
		$result = mysqli_query($con, $query);
		$num = mysqli_num_rows($result);

		if ($num != 0)
			{
			echo 0;
			}
		
		else{
			echo 1;
		}


		if ($profession == 'client'){
			$query = "INSERT INTO creg
			(name, pass, email,city)
			VALUES
			('{$name}','{$password}','{$email}','{$city}')";
			if(mysqli_query($con,$query)){
				session_start();
				$_SESSION['email']=$email;
					
			}else{
				echo "Error while inserting the records".mysqli_error($con);
			}
		}
		if ($profession == 'doctor'){
			
			$query1 = "INSERT INTO dreg
			(name, pass, email,city)
			VALUES
			('{$name}','{$password}','{$email}','{$city}')";
			$result1 = mysqli_query($con,$query1);
			
if($result1)
{  echo " in ";
	$hash = md5($email);
$to = $email;
$subject = "Confirmation from UNESCO to $username";
$header = "TutsforWeb: Confirmation from TutsforWeb";

$message = "Please click the link below to verify and activate your account. rn";
$message .= "http://localhost/pro/confirm.php?email=".urlencode($email)."&key=$hash";




//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "testm833@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "test@password";

//Set who the message is to be sent from
$mail->setFrom('testm833@gmail.com', 'otpalert');

//Set an alternative reply-to address
$mail->addReplyTo('testm833@gmail.com.com', 'otpalert');

//Set who the message is to be sent to
$mail->addAddress($email, $name);

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body


//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->Body = $message;

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}





}	
			else{
				echo "Error while inserting the records".mysqli_error($con);
			}
		
	}}

?>