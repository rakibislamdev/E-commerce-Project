<?php
ob_start(); // output buffering is turned on
session_start(); // session is turned on
date_default_timezone_set('Asia/Dhaka');

// define("PRIVATE_PATH", dirname(__FILE__));
// define("PROJECT_PATH", dirname(PRIVATE_PATH));
// define("SHARED_PATH", PROJECT_PATH . '/shared');



require_once('functions.php');
require_once('database.php');
require_once('query_functions.php');
$db = db_connect();
$errors = [];
