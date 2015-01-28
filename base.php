<?php

session_start();

$version = "0.0.3";

$links = array(array("چاپ برنامه", "/prgshow/print-program.php"), 
		array("اضافه‌کردن برنامه", "/prgshow/add-program.php"), 
		array("برنامه", "/prgshow/show-program.php"),
		array("صفحه‌اصلی", "/prgshow/index.php"));

define("RTL", "1");
define("LTR", "0");

function get_file_name($file)
{
	return strrchr($file, "/");
}

function start_html()
{
	echo "<!DOCTYPE html>";
	echo "<html>";
}

function end_html()
{
	echo "</html>";
}

function start_head($title)
{
	$def_title = "Program Show";
	echo "	<head>
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		<link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
		<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
		<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
 
		<title> ". $def_title . "|". $title." </title>

		<link rel=\"stylesheet\" href=\"core-styles.css\" />

		";

}

function end_head()
{
	echo "</head>";
}

function start_body($rtl)
{
	global $version, $links;

	if($rtl == 1)
		echo "<body dir=\"rtl\">";
	else
		echo "<body>";

	echo "<div class=\"text-right\" style=\"height:10px\">";
		echo "<div class\"contanier\">";
		if(isset($_SESSION["username"]))
		{
			echo "سلام،". $_SESSION["username"]. "!  ";
			echo "<a class=\"btn btn-primary\" 
				href=\"cnt-exit.php\">خروج </a>";
		}
		else
		{
			echo "<a class=\"btn btn-info\"
				href=\"login.php\">ورود </a>";
			echo "<a class=\"btn btn-info\"
				href=\"add-user.php\">عضویت </a>";
		}

		echo "</div>";
	echo "</div>";

	$header = "هویدا‌ساز <small> $version </small>";

	echo "<div id=\"header\"> <h1  class=\"text-center\"> $header </h1> </div>";
	
	echo "<div id=\"navigation-bar\" class=\"container\">";

	echo "<ul class=\"nav nav-tabs navbar-right\" role=\"tablist\">";

	foreach($links as $link)
	{
		$str_active = "";
		if($_SERVER["PHP_SELF"] == $link[1])
			$str_active = "class=\"active\"";
		echo "	<li $str_active> <a href=\"$link[1]\"> $link[0]</a></li>";
	}

	echo "	</ul>
	</div>
	";
}

function end_body()
{
	echo "</body>";
}

?>
