<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="/images/od1.ico" />
        <title>OurDrive | Login</title>
        <style>
            <?php
            include'css.css';
            ?>
        </style>
    </head>
    <body>
    <center>
        <h1 data-title="Welcome To OurDrive" style="margin-bottom:0;"> <a href="/php/MHomepage.php">Welcome To OurDrive</a></h1>
    </center>
    <hr>
    <ul id="menu">
        <li><a href="/php/MHomepage.php" title="Home">Home</a></li>
        <li><a href="/php/overview1overview1.php" title="Overview">Overview</a></li>
        <li><a href="/php/homepage.php" title="Login Now">Login Now</a></li>
        <li><a href="/php/Signup.php" title="SignUp">SignUp Now</a></li>
        <li><a href="/php/ContactUs (2).php" title="Contact Us">Contact Us</a></li>
        <li><a href="/php/Aboutus.php" title="About Us">About Us</a></li> 
    </ul><hr>
    <center>
        <fieldset style="width:0%;" align="left">
            <legend style="color:#5F9EA0;font-weight:bold"><font face="timesnew roman" color="#5F9EA0" size=5><u>
                    Login Here</u> :</font>
            </legend>
            <table width="400" height="220" align="right" cellpadding="1" cellspacing="1" style="background-color:#463E3F;">
                <tr>
                    <td>
                        <form name="loginform" action="/php/homepage1.php" method="post">
                            <table>
                                <tr>
                                    <td width="276"><div align="left">Username :</div></td>
                                    <td width="177"><input name="uname" type="text" size="30" placeholder="Username" autofocus/></td>
                                </tr>
                                <tr>
                                    <td><div align="left">Password :</div></td>
                                    <td><input name="pswd" type="password" size="30" placeholder="Password"/></td>
                                </tr>
                                <tr>
                                    <td><div align="right"></div></td>
                                    <td><input type="submit" value="Login Now" name="login" title="Click Here To Login Now"></td>
                                </tr>
                            </table>
                        </form>
                        <form name="signup" action="Signup.php" method="post">
                            <table>
                                <tr>
                                    <td width="174"><div align="left">Not a member :</div></td>
                                    <td><input type="submit" value="SignUp Now" title="Click Here To SignUp Now"  width="100" height="40"></td>
                                </tr>
                            </table>
                        </form>
                        <form name="forgot" action="/html/forgetpswd.html" method="post">
                            <table>
                                <tr>
                                    <td width="174"></td>
                                    <td><a href="/php/forgetinfo.php" title="Forgot Login Information"><font color=#5F9EA0 >Problem with Login</font></a></td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
            </table>
        </fieldset>
    </center>
</body>
</html>
