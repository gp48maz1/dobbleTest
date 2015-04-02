<?php
//start sessions
session_start();

//include configuration
require_once('config/config.php');

//helper functions
//require_once('helpers/system_helper.php');
//...
//...


//Autoload Classes
function __autoload($class_name){
	require_once('libraries/'.$class_name . '.php');
}