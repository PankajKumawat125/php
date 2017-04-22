<?php

ob_start();
session_start();
error_reporting(1);
ini_set('display_errors', '0');

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $cpswd = $_POST['cpswd'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    if (($fname == null) || ($uname == null) || ($lname == null) || ($email == null) || ($pswd == null) || ($cpswd == null) || ($day == null) || ($month == null) || ($year == null) || ($contact == null) || ($gender == null)) {
        echo '<script type="text/javascript">';
        echo 'alert("All Field must be filled out !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if (empty($fname)) {
        echo '<script type="text/javascript">';
        echo 'alert("First Name Field must be filled out !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if (empty($lname)) {
        echo '<script type="text/javascript">';
        echo 'alert("Last Name Field must be filled out !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if (empty($uname)) {
        echo '<script type="text/javascript">';
        echo 'alert("Username Field must be filled out !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if (empty($email)) {
        echo '<script type="text/javascript">';
        echo 'alert("E-mail Field must be filled out !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if (empty($pswd)) {
        echo '<script type="text/javascript">';
        echo 'alert("Password Field must be filled out !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if (empty($day)) {
        echo '<script type="text/javascript">';
        echo 'alert("Day Field must be filled out !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if (empty($month)) {
        echo '<script type="text/javascript">';
        echo 'alert("Month Field must be filled out !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if (empty($year)) {
        echo '<script type="text/javascript">';
        echo 'alert("Year Field must be filled out !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if (empty($contact)) {
        echo '<script type="text/javascript">';
        echo 'alert("Contact Field must be filled out !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if ($gender == null) {
            echo '<script type="text/javascript">';
            echo 'alert("Please select your gender")';
            echo '</script>';
            include 'signup.php';
            exit;
        
    }
    if ($pswd != $cpswd) {
        echo '<script type="text/javascript">';
        echo 'alert("Password must be mached out!")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid Email !")';
        echo '</script>';
        include 'signup.php';
        exit;
    }
    include 'ed.php';
    $cpswd = $pswd;
    include 'conn.php';
    $query = "INSERT INTO signup (fname,lname,uname,email,pswd,cpswd, day, month,year,contact,gender) VALUES('$fname','$lname','$uname','$email','$pswd','$cpswd','$day','$month','$year','$contact','$gender')";

    $result = mysql_query($query) or die(mysql_error());
    if ($result) {
        ?> 
        <script type="text/javascript">
            alert("Thank You For SignUp 'Now You can Login'");
        </script>
        <?php

        include 'homepage.php';
        exit;
    } else {
        ?> 
        <script type="text/javascript">
            alert("There is a problem please try again later");
        </script>
        <?php

        include 'signup.php';
        exit;
    }
} else {
    ?> 
    <script type="text/javascript">
        alert("You cant dierecly access this Page");
    </script>
    <?php

    include 'signup.php';
    exit;
}
?>



