<?php
$userVars = $_POST;
$title = "main5 php files";

require "UserClass.php";

$user = new UserClass();
$user->setFirstName = "Md ";
$user->setLastName = "Rahat";

var_dump($userVars);

error_reporting(E_ALL);
ini_set("display_errors", 1);
$html = include_once "inc/template3.php";


