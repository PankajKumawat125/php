<!DOCTYPE html>
<title>Drive System | Login</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="../../styles/drive.css" type="text/css" />

</head>
<body>
<?php  
if(!isset($_COOKIE['username']) && !isset($_COOKIE['password']))
{
echo"<script language=\"javascript\">alert('You are not login yet! Please Login First, and try again!');</script>";
echo"<script language=\"javascript\">window.location.replace(\"../../index.php\")</script>";
}
else
{
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
include("../../conn.php");
$Query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
$dbresult = mysql_query($Query);
if(mysql_num_rows($dbresult) > 0)
{	
}
else
{
echo"<script language=\"javascript\">window.location.replace(\"../../index.php?msg=err\")</script>";	
}

}

?>    
<div class="main-container">
  <header>
    <h1><a href="../index.php">Drive System</a></h1>
    <p id="tagline"><strong>Make Your Drive Online</strong></p>
  </header>
</div>
<div class="main-container">
  <div id="sub-headline">
    <div class="tagline_left">
	<p id="tagline2">
	<?php
	$query = "SELECT * from users WHERE username = '$username'";
			$dbresult = mysql_query($query);
			while($row=mysql_fetch_row($dbresult))
				{
				$name = "$row[3]";
				echo "<font color=\"red\">$name</font>";
				}
	?>
	</p></div>
    <div class="tagline_right">
      <form action="#" method="post">
        <fieldset>
          <a href="../../logout.php"><p id="tagline2">Logout</p></a>

        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      <li><a href="../index.php">Home</a></li>
      <li><a href="../mydrive/">My Drive</a></li>
      <li class="active"><a href="#">Messaging</a>
        <ul>
          <li><a href="../../messaging/chat/">Chat</a>
          </li>
          <li><a href="full_width.html">Drive Mail</a></li>
        </ul>
      </li>
          <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li class="last"><a href="contact.php">Contact</a></li>
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>
<div class="main-container">
  <div class="container1">

    <article class="box" >

<?php

require_once dirname(__FILE__)."/../src/phpfreechat.class.php";
$params["serverid"] = md5(__FILE__); // calculate a unique id for this chat
$chat = new phpFreeChat($params);
 $chat->printChat();
?>

		</a></center>
		</form>
    </article>
    
 </div>
 

<br /><br />
</div>


<br />
<br />
    </body>
</html>
