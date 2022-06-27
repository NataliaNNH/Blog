<?php
include("../include/url_users.php");

session_start();
session_destroy();

printf("Wylogowales sie");

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
