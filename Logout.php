<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
unset($_SESSION['login_user']);
unset($_SESSION['sess_user_id']);

if(session_destroy())
{
header("Location: homepage.php");
}
