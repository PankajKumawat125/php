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

if (isset($_POST['submit'])) {

    $uname = $_POST['uname'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $user_message = $_POST['message'];

    if (empty($uname) || empty($visitor_email)) {
        echo '<script type="text/javascript">';
        echo 'alert("Name and Email are required fields.")';
        echo '</script>';
        include 'ContactUs (2).php';
        exit;
    }
    if (IsInjected($visitor_email)) {
        echo '<script type="text/javascript">';
        echo 'alert("Bad email value!")';
        echo '</script>';
        include 'ContactUs (2).php';
        exit;
    }
    if (empty($subject)) {
        echo '<script type="text/javascript">';
        echo 'alert("Please Enter Subject of Your Message !")';
        echo '</script>';
        include 'ContactUs (2).php';
        exit;
    }
    if (empty($user_message)) {
        echo '<script type="text/javascript">';
        echo 'alert("You Cant send blank Message !")';
        echo '</script>';
        include 'ContactUs (2).php';
        exit;
    }

    /* if(empty($_SESSION['6_letters_code'] ) || strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
      {
      $errors .= "\n The captcha code does not match!";
      echo '<script type="text/javascript">';
      echo 'alert("The captcha code does not match!")';
      echo '</script>';
      include 'ContactUs (2).php';
      } */
    include 'conn.php';
    $result = mysql_query("SELECT * FROM signup WHERE uname='$uname' AND email='$visitor_email'");
    $row = mysql_fetch_array($result);
    if ($row > 0) {
        include 'conn.php';
        $query = "INSERT INTO contactus (uname,email,subject,message) VALUES('$uname','$visitor_email','$subject','$user_message')";

        $result1 = mysql_query($query) or die(mysql_error());

        if ($result1) {

            $email_from = '$visitor_email'; //<== update the email address
            $email_subject = '$subject';
            $email_body = wordwrap($message, 70);
            $headers = "From: $email_from \r\n";
            $headers = "Reply-To: $visitor_email \r\n";
            //Send the email!
            mail("gandhivaibhav99@gmail.com", $email_subject, $email_body, $headers); /* */
            //done. redirect to thank-you page.
            echo '<script type="text/javascript">';
            echo 'alert("Your Message has been sent Successfully")';
            echo '</script>';
            include 'MHomepage.php';
            exit;
        }
    } else {
        ?> 
        <script type="text/javascript">
            alert("Please First SignUp to Contact Us !");
        </script>
        <?php

        include 'Signup.php';
    }
} else {
    ?> 
    <script type="text/javascript">
        alert("You cant Directly access this page!");
    </script>
    <?php

    include 'ContactUs (2).php';
}
?>