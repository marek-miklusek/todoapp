<?php 

// REQUIRE STUFF
require 'vendor/autoload.php';
require 'functions.php';


// FLASH MESSAGE, COMPOSER PACKAGE TAMTAMCHIK/SIMPLE-FLASH
if ( ! session_id() ) @session_start();
use \Tamtamchik\SimpleFlash\Flash;
$flash = new Flash();


// USING MEDOO NAMESPACE
use Medoo\Medoo;


// CONNECT TO DATABASE
$database = new Medoo([
   'type' => 'mysql',
   'host' => 'localhost',
   'database' => 'todoapp',
   'username' => 'root',
   'password' => ''
]);


// CONSTANTS, NEVER CHANGE, ARE GLOBAL
define('BASE_URL', 'http://localhost/todoapp');
define('APP_PATH', realpath( __DIR__ . '/../' ));


// GLOBAL VARIABLES
// $base_url = 'http://localhost/todoapp';


?>