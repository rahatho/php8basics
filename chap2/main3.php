<?php
$title = "main3 php files";

require "UserClass.php";

$user = new UserClass();
$user->setFirstName = "Md ";
$user->setLastName = "Rahat";

var_dump($user);

error_reporting(E_ALL);
ini_set("display_errors", 1);
$html = include_once "inc/template2.php";


