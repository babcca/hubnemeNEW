<?php
$subject = ('todle je predmet umimehubnout');
include 'config.php';
	error_reporting (E_ALL ^ E_NOTICE);
	$post = (!empty($_POST)) ? true : false;

if($post)
	{
		include 'functions.php';
		$jmeno = ($_POST['jmeno']);
		$prijmeni = ($_POST['prijmeni']);
		$email = ($_POST['email']);
		$message = ($_POST['message']);
		$kontaktovat = $_POST['kontaktovat'];
		$error = '';

// Check name

// Check email
if(!$email)
	{
		$error .= 'I think you forget to enter your e-mail id.<br />';
	}
if($email && !ValidateEmail($email))
	{
		$error .= 'Invalid E-mail id !!!<br />';
	}
if(!$error)
	{
		$mail = mail(WEBMASTER_EMAIL, $jmeno, $prijmeni, $kontaktovat, $email);
     		
if($mail)
	{
		echo 'OK';
	}
}
else
	{
		echo '<div class="notification_error">'.$error.'</div>';
	}
}
?>