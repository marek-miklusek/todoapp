<?php 

function get_items($auto_format = true) {
   global $database;

   $items = $database->select('items',['id','text','created_at']);

   if ($auto_format) {
      $items = array_map('format_item', $items);
   }

   return $items;
}

function redirect($page, $status_code = 302) {
   if ($page == 'back') {
      $location = $_SERVER['HTTP_REFERER'];
   }
   else {
      $page = ltrim($page,'/');
      $location = BASE_URL.'/'.$page;
   }

   header('Location: '.$location.'', true, $status_code);
   die('success');
}

function show404() {
   header('HTTP/1.0 404 Not Found');
   include '404.php';
   die();
}

function get_item() {
   if ( ! isset($_GET['id']) || empty($_GET['id']) ) {
      return false;
   }

   global $database;
   $item = $database->get("items", "text", [
      "id" => $_GET['id']
   ]);

   if ( ! $item ) {
      return false;
   }
   else {
      return $item;
   }
}

function is_even($number) {
   return ($number % 2 == 0) ? 'even' : 'odd';                             
}


// CROSS-SITE SCRIPTING (XSS) !!!
// Convert special characters to html entities,
// use always when user has to possibility to write on the page
function plain($str) {
   return htmlspecialchars($str, ENT_QUOTES);
}


// My own flash message function
function set_flash_mess($str) {
   return $_SESSION['flash_message'] = $str;
}

function display_flash_mess() {
   if(isset($_SESSION['flash_message'])) {
      $message = $_SESSION['flash_message'];
      unset($_SESSION['flash_message']);
      echo $message;
   }
}


// Creates absolute url to assets folder
function assets ($path, $base = BASE_URL . '/assets/') {
   $path = trim($path, '/');
   return filter_var($base . $path, FILTER_SANITIZE_URL);
}

function format_item($item) {
   $item['text'] = plain($item['text']);
   $item['created_at'] = date("j M Y, H:i",strtotime($item['created_at']));

   return (object)$item;
}

?>