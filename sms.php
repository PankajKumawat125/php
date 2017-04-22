<?php

ini_set('display_errors', '0');
session_start();

if (isset($_SESSION['sess_user_id']) == '') {
    include 'homepage.php';
    exit();
}
if (isset($_POST['Request'])) {
	$uno	=	$_POST['rno'];
	$sname	=	$_POST['sname'];
	$rname	=	$_POST['rname'];
	$rdata	=	$_POST['rdata'];
	// Account details
	$username = 'gandhivaibhav99@gmail.com';
	$hash = 'Vaibhav123@';
	// Message details
	$numbers = array($uno);
	$sender = urlencode('Vaibhav : ');
	$msg = "Dear ".$rname.", The OurDrive user '".$sname."' has requested for '".$rdata."' data.";
	$message = rawurlencode($msg);
	$numbers = implode(',', $numbers);
	// Prepare data for POST request
	$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('http://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here 

	if (strpos($response, 'success') !== false) 
		{
				echo '<script type="text/javascript">';
				echo 'alert("Your request has been sent Successfully")';
				echo '</script>';
		}else{
				echo '<script type="text/javascript">';
				echo 'alert("Error occured while sending request ! \n Try Again later !")';
				echo '</script>';
		}

		include 'aflogina.php';
        //header("Location: homepage1.php");
        exit();
	
}
else{
			echo '<script type="text/javascript">';
			echo 'alert("You Can not diectly access this page !")';
			echo '</script>';
		}

		include 'aflogin.php';
        //header("Location: homepage1.php");
        exit();

?>