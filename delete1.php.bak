<?php

session_start();
if (isset($_POST['yes'])) {
    $id = $_SESSION['sess_user_id'];
    $uname = $_SESSION['login_user'];

    include 'conn.php';
    $query = "DELETE FROM signup where id='$id' AND uname='$uname'";
    $result1 = mysql_query($query) or die(mysql_error());
    if ($result1) {
		$query1 = "DELETE FROM signup where id='$id' AND uname='$uname'";
		$result2 = mysql_query($query1) or die(mysql_error());
		if($result2){
        echo '<script type="text/javascript">';
        echo 'alert("Your Account has been Deleted Successfully !!")';
        echo '</script>';

        include 'homepage.php';
        exit();}
    }
}
?>