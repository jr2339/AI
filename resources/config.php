<?php

//Define server
//if this DS is already defined we put null; if it is not we define it
//DIRECTORY_SEPARATOR is a constant at here
//DS means / or \, it depends which OS you using

defined("DS") ? null:define("DS",DIRECTORY_SEPARATOR);


//Define Root

defined("TEMPLATE_FRONT") ? null:define("TEMPLATE_FRONT",__DIR__.DS."templates/front");
defined("TEMPLATE_BACK") ? null:define("TEMPLATE_BACK",__DIR__.DS."templates/back");
echo TEMPLATE_FRONT;
echo "<br>";
echo TEMPLATE_BACK;





?>
