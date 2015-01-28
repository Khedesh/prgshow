<?php

$version = "0.0.1";

echo "<!doctype html>";

echo "<html>";

// HEAD
echo "<head>";
echo "<title>Program Show $version</title>";
echo "<meta charset=\"UTF-8\"/>";

echo "<link rel='stylesheet' href='css/styles.css' />";

// JAVASCRIPT
echo "<script src=\"js/scr.js\"></script>";

echo "</head>";

// BODY
echo "<body dir=\"rtl\">";

echo "<div class='top-bar'>";
echo "<p>این یک رابط کاربری برای تسهیل برنامه ریزی هفتگی است.</p>";
echo "</div>";

echo "<div class='section'>";
echo "<table align='center' id='prog-table-1' class='prog-table'>";
echo "<caption class='ptitle'>جدول برنامه هفتگی</caption>";
echo "<tr>
		<th> </th>
		<th>شنبه</th>
		<th> یکشنبه</th>
		<th> دوشنبه</th>
		<th> سه شنبه</th>
		<th> چهارشنبه</th>
		<th> پنج شنبه</th>
		<th> جمعه</th>
	  </tr>";


echo "</table>";

echo "<script>create_table();</script>";

$file = fopen("progs.txt", "r");

$progs = array();

if(!$file)
{
	die("Couldn't open the file");
}

$tmp = array("name" => "", "value" => "");
while(!feof($file))
{
	fscanf($file, "%s%s", $tmp["name"], $tmp["value"]);
	array_push($progs, $tmp);
}
//print_r($progs);

fclose($file);

echo "<div class=\"selector\">";
echo "<select>";
for($i = 0 ; $i < count($progs) ; $i ++)
{
	echo "<option value=$progs\[$i\][\"value\"] >".$progs[$i]["name"]."</option>";
}
echo "</select>";

echo "</div>";

echo "<br />";

echo "</div>";

echo "<div class='footer'>";
echo "<p> Designed By <b>Khedesh</b></p>";
echo "</div>";

echo "</body>";

echo "</html>";

?>
