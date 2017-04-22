<html>

    <!DOCTYPE html><html>
        <head>
            <link rel="shortcut icon" href="/images/od1.ico" />
            <title>OurDrive | ContactUs</title>
            <style>
<?php include 'css.css'; ?>
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
            <li><a href="/php/Signup.php"title="SignUp">SignUp Now</a></li>
            <li><a href="/php/ContactUs (2).php"title="Contact Us">Contact Us</a></li>
            <li><a href="/php/Aboutus.php"title="About Us">About Us</a></li>
        </ul><hr><center>
            <fieldset style="width:0%;" align="left">
                <legend style="color: #dbdbdb;font-weight:bold">Conatct Us</legend>
                <table width="330" border="0" align="center" cellpadding="2" cellspacing="5" style="background-color:#463E3F;">
                    <form  action="/php/ContactUs (2)1.php" method="POST" enctype="multipart/form-data">
                        <tr><td>Your name:</td></tr>
                        <tr><td><input name="uname" type="text" value="" size="40" placeholder="Username"/></td></tr><tr><td>Your email:</td></tr><tr><td><input name="email" type="text" value="" size="40" placeholder="E-Mail"/></td></tr>
                        <tr><td>Subject: </td></tr><tr><td><input type="text" name="subject" size="40"></td></tr>
                        <tr><td>Your message:<textarea name="message" rows="7" cols="30"></textarea></td></tr>
                        <tr><td><center><input type="submit" name="submit" value="Send email"/></center></td></tr>
                    </form>
            </fieldset>
        </table>
    </center>
    <html> 