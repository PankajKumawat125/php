<?php

session_start();
				$filename = $_REQUEST['filename'];
				$uname = $_SESSION['login_user'];

				include 'conn.php';
				$query = "DELETE FROM upload where uname = '$uname' AND uploads = '$filename'";
				$result1 = mysql_query($query) or die(mysql_error());
				if ($result1) {
					echo '<script type="text/javascript">';
					echo 'alert("Your File has been Deleted Successfully !!")';
					echo '</script>';

					include 'aflogin.php';
					exit();
				}
?>