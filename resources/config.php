<?php

//Define server
//if this DS is already defined we put null; if it is not we define it
//DIRECTORY_SEPARATOR is a constant at here
//DS means / or \, it depends which OS you using

defined("DS") ? null:define("DS",DIRECTORY_SEPARATOR);


//Define Root


echo __DIR__;







?>
