<?php 

// Require stuff
require 'vendor/autoload.php';
require 'functions.php';

// Flash message, composer package tamtamchik/simple-flash
if ( ! session_id() ) @session_start();
use \Tamtamchik\SimpleFlash\Flash;
$flash = new Flash();


// Using medoo namespace
use Medoo\Medoo;


// Connect to database
$database = new Medoo([
   'type' => 'mysql',
   'host' => 'localhost',
   'database' => 'todoapp',
   'username' => 'root',
   'password' => ''
]);

// Constants
define('BASE_URL', 'http://localhost/todoapp');
define('APP_PATH', realpath( __DIR__ . '/../' ));

?>