<!DOCTYPE html>

<html>
    <head>
        <link rel="shortcut icon" href="/php/images/od1.ico" />
        <title>OurDrive</title>
        <style> 
<?php include'css.css'; ?>
            input[type=submit] {
                border: 10px;
                width: 20%;
                height: 2em;

            }
        </style>
    </head>
    <body>
    <center>
        <h1 data-title="Welcome To OurDrive" style="margin-bottom:0;"> <a href="#">Welcome To OurDrive</a></h1></center>
    <hr>
    <ul id="menu">
        <li><a href="/php/MHomepage.php"title="Home">Home</a></li>
        <li><a href="/php/overview1.php"title="Overview">Overview</a></li>
        <li><a href="/php/homepage.php"title="Login Now">Login Now</a></li>
        <li><a href="/php/Signup.php"title="Sign Up">SignUp Now</a></li>
        <li><a href="/php/ContactUs (2).php"title="Contact Us">Contact Us</a></li>
        <li><a href="/php/Aboutus.php"title="About Us">About Us</a></li> 
    </ul><hr>

    <div align="center"><font color="#BCC6CC" size=5>
        <h2><b>We need your Username and Email ID to recover your Password.</b><br><br>
            This protects your account from unauthorised access.
            </font></h2>
        <fieldset style="width:0%;" align="left">
            <legend style="color:red;font-weight:bold"><b><font face="timesnew roman" color="#5F9EA0" size=5><u>Recover Password</u> :</font></b></legend>
            <table width="500" height="120" cellpadding="1" cellspacing="1" style="background-color:#463E3F;">
                <form action="nextp1.php" method="POST">
                    <tr><td>Enter UserName :</td>
                        <td><input type="text" name="uname" placeholder="UserName" size="40" maxlength="100" class="" tabindex="1">
                        </td></tr>
                    <tr><td>Enter E-mail :</td>
                        <td><input type="text" name="email" placeholder="Email Id" size="40" maxlength="100" class="" tabindex="1">
                        </td></tr></font>
                    <tr><td></td>
                        <td><center>
                        <input type="submit" autofocus name="next" id="next" value="Next" title="Click Here To Continue" tabindex="10" border="100" style="background-color:#EE7AE9";></form>
                        <form action="homepage.php" method="POST">
                            <input type="submit" name="cancel" id="cancel" value="Cancel" title="Click Here To Cancel" tabindex="10" border="100"  style="background-color:#F6CCDA";></form></center>
                    </td></tr>

            </table>
        </fieldset>
    </div>
</body>
</html>