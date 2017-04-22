<?php

include('lock.php');
//ini_set('display_errors', '1');
if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pswd = $_POST['pswd'];
    $opswd = '';
    
    include 'ed.php';
    include 'conn.php';
    $result = mysql_query("SELECT * FROM signup WHERE uname='$uname' AND pswd='$pswd'");
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    if ($row > 0) {
        echo '<script type="text/javascript">';
        echo 'alert("You Logged in Successfully.")';
        echo '</script>';

        include 'session.php';
        $count = $row['count'] + 1;
        $query = "UPDATE signup SET count='$count' WHERE uname = '$uname' ";
        $result1 = mysql_query($query) or die(mysql_error());
        
        if ($result1) {
            include 'aflogin.php';
            exit();
        }
    } else {
        ?> 
        <script type="text/javascript">
            alert("Please Enter valid Email-Id and Password");
        </script>
        <?php

        include 'homepage.php';
    }
} else {

    require_once('homepage.php');
}
