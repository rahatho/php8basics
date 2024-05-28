<?php
$userVars = $_GET;
$title = "main4 php files";

require "UserClass.php";

$user = new UserClass();
$user->setFirstName = "Md ";
$user->setLastName = "Rahat";

var_dump($userVars);

error_reporting(E_ALL);
ini_set("display_errors", 1);
$html = include_once "inc/template2.php";


