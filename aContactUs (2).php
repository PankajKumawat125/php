<?php
    include('lock.php');
    
    if (isset($_SESSION['sess_user_id']) == '') {
        header("Location: homepage.php");
        exit();
    }
?>

<html>
    <!DOCTYPE html>
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
            <li><a href="/php/aMHomepage.php"title="Home"><small>Home</small></a></li>
            <li><a href="/php/reset.php" title="Edit Your Profile "><small>Edit Profile</small></a></li>
            <li><a href="/php/aflogina.php"title="Your Files"><small>Your Stuff</small></a></li>
            <li><a href="/php/aoverview1.php" title="Overview"><small>Overview</small></a></li>
            <li><a href="/php/aContactUs (2).php" title="Contact Us"><small>Contact Us</small></a></li>
            <li><a href="/php/aAboutus.php" title="About Us"><small>About Us</small></a></li>
            <li><a href="/php/homepage.php"title="Logout"><small>Logout</small></a></li>
        </ul><hr>
        <center>
            <fieldset style="width:0%;" align="left">
                <legend style="color: #dbdbdb;font-weight:bold">Conatct Us</legend>
                <table width="330" border="0" align="center" cellpadding="2" cellspacing="5" style="background-color:#463E3F;">
                    <form  action="ContactUs (2)1.php" method="POST" enctype="multipart/form-data">
                        <tr><td>Your name:</td></tr>
                        <tr><td><input name="name" type="text" value="" size="30" placeholder="Name"/></td></tr><tr><td>Your email:
                        <tr><td><input name="email" type="text" value="" size="30" placeholder="E-Mail"/></td></tr><tr><td>Your message:
                                <textarea name="message" rows="7" cols="30"></textarea></td></tr>
                        <tr><td><center><input type="submit" value="Send email"/></center></td></tr>
                    </form>
            </fieldset>
        </table>
    </center>
    <html> 