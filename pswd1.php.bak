<?php

if (isset($_POST['change'])) {

    $opswd = $_POST['opswd'];
    $pswd = $_POST['pswd'];
    $cpswd = $_POST['cpswd'];
    if (empty($pswd)) {
        echo '<script type="text/javascript">';
        echo 'alert("Password Field must be filled out !")';
        echo '</script>';
        include 'pswd.php';
        exit;
    }
    if ($pswd != $cpswd) {
        echo '<script type="text/javascript">';
        echo 'alert("Your New_password and Confirm_New_Password Does not match !!.")';
        echo '</script>';
        include 'pswd.php';
        exit();
    }

    include 'ed.php';
    $cpswd = $pswd;
    include 'conn.php';
    $result = mysql_query("SELECT * FROM signup WHERE pswd='$opswd'");
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    if ($row > 0) {
        include 'session.php';
        $uname = $_SESSION['login_user'];
        $query = "UPDATE signup SET pswd='$pswd',cpswd='$cpswd' WHERE uname = '$uname' ";
        $result1 = mysql_query($query) or die(mysql_error());

        if ($result1) {
            echo '<script type="text/javascript">';
            echo 'alert("Your Password Changed Successfully.")';
            echo '</script>';
            include 'reset.php';
            exit();
        }
    } else {
        ?> 
        <script type="text/javascript">
            alert("Please Enter valid Old_Password");
        </script>
        <?php

        include 'pswd.php';
    }
} else {
    ?> 
    <script type="text/javascript">
        alert("You cant directly access this page, First Login to access this page !");
    </script>
    <?php

    require_once('homepage.php');
}
?>