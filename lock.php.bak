<?php
include('conn.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysql_query("select uname from signup where uname='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session = $row['uname'];

if(!isset($login_session))
{
header("Location: homepage.php");
}

