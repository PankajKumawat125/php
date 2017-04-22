<?php

error_reporting(1);
define("ENCRYPTION_KEY", "!@#$%^&*");

function encrypt($pure_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
    return $encrypted_string;
}

function decrypt($encrypted_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_string;
}

$dpswd = decrypt($pswd, ENCRYPTION_KEY);
$pswd = encrypt($pswd, ENCRYPTION_KEY);
$opswd = encrypt($opswd, ENCRYPTION_KEY);
$jpswd = $_GET['Password'];
/* $pswd = md5($pswd);
  $cpswd = md5($cpswd); */
$javapswd = $jpswd;
  echo $javapswd;
?>