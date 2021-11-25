<?php
//Start Session
session_start();

//Include Configuration
require_once('config/config.php');
// require_once(dirname(__FILE__).'/../config/config.php');

//Helper Function Files
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');
// require_once(dirname(__FILE__).'/../helpers/system_helper.php');
// require_once(dirname(__FILE__).'/../helpers/format_helper.php');
// require_once(dirname(__FILE__).'/../helpers/db_helper.php');


function my_autoloader($class_name) {
    include 'libraries/' . $class_name . '.php';
    // include dirname(__FILE__).'libraries/' . $class_name . '.php';
}

spl_autoload_register('my_autoloader');


// //Autoload Classes
// function __autoload($class_name){
// 	require_once('C:\xampp\htdocs/ownSiteScratch/libraries/'.$class_name . '.php');
// 	// require_once('libraries/'.$class_name . '.php');
// }