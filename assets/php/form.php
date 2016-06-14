<?php
/**
 * Simple email script that sends you a email with subscribers email address.
 */


// Set the email you'd like to receive mail to.

$email   = "mikel@matchboxstudio.org";




////////////// END SETTINGS///////////////

$errors = 0;

$from    = trim($_POST['email']);

if($email == "YourEmailGoesHere"){
	$errors = 1;
}
if(empty($from)){
	$errors = 1;
}

if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $from)) {
    $errors = 1;
} 

if(isset($_POST)){

	$subject = "Contact Form Submission";

	$name   = trim($_POST['name']);

	$message = trim($_POST['message']);

	if($errors == 0){

					$mail = new PHPMailer();
					$mail->IsSMTP();
					$mail->Host = "smtp.gmail.com:465";
					$mail->SMTPSecure = 'ssl';
					$mail->SMTPAuth = true;
					$mail->Username = "ditwebsite@delmarit.com";
					$mail->Password = "redacted";

					$mail->AddAddress($email);
					$mail->From = $from;
					$mail->FromName = $name;
					$mail->Subject = $subject;
					$mail->Body = $message;

					$mail->Send();

					echo '<div class="alert alert-success">Your Email has been sent!</div>';
		
	}else{
		
		echo "Setup not completed.";
	}
}
?>