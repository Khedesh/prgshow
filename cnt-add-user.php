<?php

require_once("db.php");


$db = new DB();
$db->connect();
$db->insert_row("ps_users", 
		array("u_username" => $_POST["user_name"], 
			"u_passwd" => md5($_POST["password"])));

header("location:index.php");

?>
