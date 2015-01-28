<?php
session_start();

require_once("db.php");

$db = new DB();
$db->connect();

$row = $db->get_table_where("ps_users", array("u_username" => $_POST["user_name"]));

if(md5($_POST["password"]) == $row[0]["u_passwd"])
{
	$_SESSION["username"] = $_POST["user_name"];
	$_SESSION["msg"] = "<p class=\"bg-success text-success\"> شما با موفقیت داخل شدید. </p>";
	header("location:index.php");
}
else
{
	unset($_SESSION["username"]);
	$_SESSION["msg"] = "<p class=\"bg-warning text-warning\"> نام کاربری یا گذرواژه نادرست است. </p>";
	header("location:login.php");
}

?>
