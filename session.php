<?php

//session_regenerate_id();

$_SESSION['sess_user_id'] = $row['id'];
$_SESSION['login_user'] = $row['uname'];
$_SESSION['sess_pswd'] = $row['pswd'];
$_SESSION['sess_fname'] = $row['fname'];
$_SESSION['sess_lname'] = $row['lname'];
$_SESSION['sess_cpswd'] = $row['cpswd'];
$_SESSION['sess_contact'] = $row['contact'];
$_SESSION['sess_email'] = $row['email'];
$_SESSION['sess_day'] = $row['day'];
$_SESSION['sess_month'] = $row['month'];
$_SESSION['sess_year'] = $row['year'];
$_SESSION['sess_gender'] = $row['gender'];

//echo '<pre>'; print_r($_SESSION); exit;
//session_write_close();
?>