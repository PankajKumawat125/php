<?php
ini_set('display_errors', '0');
session_start();

if (isset($_SESSION['sess_user_id']) == '') {
    include 'homepage.php';
    exit();
}

if (isset($_POST['Upload'])) {
    $allowedExts = array(
        "jpg",
        "JPG",
        "jpeg",
        "gif",
        "png",
        "mp3",
        "mp4",
        "avi",
        "wmv",
        "mkv",
        "mpg",
        "mpeg",
        "mov",
        "MOV",
        "rm",
        "php",
		"doc",
		"log",
		"msg",
		"rtf",
		"txt",
		"wpd",
		"wps",
		"123",
		"csv",
		"dat",
		"db",
		"dll",
		"mdb",
		"pps",
		"ppt",
		"pptx",
		"docx",
		"sql",
		"wks",
		"xls",
		"xml",
		"mng",
		"pct",
		"bmp",
		"gif",
		"jpg",
		"psd",
		"psp",
		"tif",
		"ai",
		"drw",
		"dxf",
		"eps",
		"ps",
		"svg",
		"3dm",
		"3dmf",
		"indd",
		"pdf",
		"qxd",
		"qxp",
		"aac",
		"aif",
		"iff",
		"m3u",
		"mid",
		"midi",
		"mp3",
		"mpa",
		"ra",
		"ram",
		"wav",
		"wma",
		"3gp",
		"asf",
		"axs",
		"avi",
		"mov",
		"mp4",
		"mpg",
		"qt",
		"rm",
		"swf",
		"wmv",
		"asp",
		"css",
		"htm",
		"html",
		"js",
		"jsp",
		"xhtml",
		"fnt",
		"fon",
		"otf",
		"ttf",
		"8bi",
		"plugin",
		"xll",
		"cab",
		"cpl",
		"cur",
		"dmp",
		"drv",
		"key",
		"ink",
		"sis",
		"cfg",
		"ini",
		"reg",
		"app",
		"bat",
		"cgi",
		"com",
		"exe",
		"pif",
		"vb",
		"ws",
		"dv",
		"gz",
		"pkg",
		"rar",
		"sea",
		"sit",
		"sitx",
		"zip",
		"hqx",
		"bin",
		"mim",
		"uue",
		"c",
		"cpp",
		"java",
		"pl",
		"bak",
		"gho",
		"old",
		"ori",
		"tmp",
		"dmg",
		"iso",
		"toast",
		"vcd",
		"gam",
		"nes",
		"rom",
		"sav",
		"msi",
		"torrent",
		"yps",
    );
   // echo '<pre>'; print_r($allowedExts); 
    $extension = explode(".", $_FILES["uploadedfile"]["name"]);
    $extension = end($extension);
    //print_r($extension); 
    $name = $_FILES['uploadedfile']['name'];
    $size = $_FILES['uploadedfile']['size'];
    $type = $_FILES['uploadedfile']['type'];
    $temp = $_FILES['uploadedfile']['tmp_name'];
    $uname = $_SESSION['login_user'];
    $fullpath = "uploads/".$name;
    $additional = '1';   
    while (file_exists($fullpath)) {
        $info = pathinfo($fullpath);
        $name = $info['filename'] . $additional . '.' . $info['extension'];
        $fullpath = $info['dirname'] . '/'
                  . $info['filename'] . $additional
                  . '.' . $info['extension'];      
    }
    //echo $fullpath; exit; 
	if($extension == null ){
		?>
        <script type="text/javascript">
            alert("Please choose your file !!");
        </script>
        <?php

        include 'aflogin.php';
        //header("Location: homepage1.php");
        exit();
	}
    if (in_array($extension, $allowedExts)) {
        if (move_uploaded_file($temp, $fullpath)) {
            include 'conn.php';
            $date = date("d-m-Y");
            $query = "INSERT INTO upload (uname,uploads,size,date1) VALUES('$uname','$name','$size','$date')";
            //$result = mysql_query($query) or die(mysql_error());
            if ($result = mysql_query($query) or die(mysql_error())) 
				{
				echo '<script type="text/javascript">';
				echo 'alert("Your file has been uploaded Successfully")';
				echo '</script>';

                include 'aflogin.php';
                //header("Location: homepage1.php");
                exit();
            } else {
                ?>
                <script type="text/javascript">
                    alert("There is a problem while uploading your document, Please try again later");
                </script>
                <?php

                include 'aflogin.php';
                //header("Location: homepage1.php");
                exit();
            }        } else{ 
        ?>
        <script type="text/javascript">
            alert("There is a problem while uploading your document, Please try again later");
        </script>
        <?php
        }
    } else {
        ?>
        <script type="text/javascript">
            alert("You can't Upload this type of Files !!");
        </script>
        <?php

        include 'aflogin.php';
        //header("Location: homepage1.php");
        exit();
    }
} else {
    ?>
    <script type="text/javascript">
        alert("You cant directly access this page !!");
    </script>
    <?php

    include 'aflogin.php';
    //header("Location: homepage1.php");
    exit();
}
