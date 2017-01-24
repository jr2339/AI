<?php

ob_start();
session_start();

//Define server
//if this DS is already defined we put null; if it is not we define it
//DIRECTORY_SEPARATOR is a constant at here
//DS means / or \, it depends which OS you using

defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR);


//Define Root

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT",__DIR__.DS."templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK",__DIR__.DS."templates/back");
echo TEMPLATE_FRONT;
echo "<br>";
echo TEMPLATE_BACK;

//Define DataBase
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");


$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require_once("functions.php");

?>
