<?php
session_start();

unset($_SESSION["username"]);
$_SESSION["msg"] = "<p class=\"bg-success text-success\"> شما با موفقیت خارج شدید.</p>";

header("location:index.php");

?>
