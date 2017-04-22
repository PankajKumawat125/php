<?php

error_reporting(1);

// Function to validate against any email injection attempts
function IsInjected($str) {
    $injections = array('(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
    );
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    if (preg_match($inject, $str)) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['next'])) {

    $uname = $_POST['uname'];
    $visitor_email = $_POST['email'];

    if (empty($uname) || empty($visitor_email)) {
        echo '<script type="text/javascript">';
        echo 'alert("Name and Email are required fields.")';
        echo '</script>';
        include 'nextp.php';
        exit;
    }
    if (IsInjected($visitor_email)) {
        echo '<script type="text/javascript">';
        echo 'alert("Bad email value!")';
        echo '</script>';
        include 'nextp.php';
        exit;
    }
    include 'conn.php';
    $query = mysql_query("SELECT * FROM signup WHERE uname='$uname' AND email='$visitor_email'");
    $row = mysql_fetch_array($query, MYSQL_ASSOC);
    if ($row > 0) {
        $email_from = "johnhpav1312@gmail.com"; //<== update the email address
        $email_subject = "Recover Your Password !!";
        $email_to = '$visitor_email';
        $email_body = $row['pswd'];
        $headers = "From: $email_from \r\n";
        $headers = "Reply-To: $visitor_email \r\n";
        //Send the email!
        mail($email_to, $email_subject, $email_body, $headers); /* */
        //done. redirect to thank-you page.
        echo '<script type="text/javascript">';
        echo 'alert("Your Password has been sent successsfully to Your Email-Id")';
        echo '</script>';
        include 'homepage.php';
        exit;
    } else {
        ?> 
        <script type="text/javascript">
            alert("Please Enter valid UserName and Email-Id to recover your Password !!");
        </script>
        <?php

        include 'homepage.php';
    }
}
?>