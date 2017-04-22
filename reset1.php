<?php

include('lock.php');

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid Email !")';
        echo '</script>';
        include 'reset.php';
        exit;
    }

    $id = $_SESSION['sess_user_id'];
    include 'conn.php';
    $result = mysql_query("SELECT * FROM signup WHERE id='$id' ");
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    if ($row > 0) {
        $query = "UPDATE signup SET fname='$fname',lname='$lname',uname='$uname',email='$email',day='$day', month='$month',year='$year',contact='$contact',gender='$gender' WHERE id = '$id' ";
        $result1 = mysql_query($query) or die(mysql_error());
        if ($result1) {
			include 'session.php';
            echo '<script type="text/javascript">';
            echo 'alert("Your Profile Modified Successfully.")';
            echo '</script>';
            include 'reset11.php';
            exit();
        }
    }
}
?>