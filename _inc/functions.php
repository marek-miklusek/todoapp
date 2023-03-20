<?php 

function redirect($page, $status_code = 302) {
   global $base_url;

   // if ($page == 'back') {
   //    $location = $_SERVER['HTTP_REFERER'];
   // }
   // else {
   //    $page = ltrim($page,'/');
   //    $location = $base_url.'/'.$page;
   // }

   switch ($page) {
      case $page == 'back' :
         $location = $_SERVER['HTTP_REFERER'];
         break;

      case $page :
         $page = ltrim($page,'/');
         $location = $base_url.'/'.$page;
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
   $row = ($number % 2 == 0) ? 'even' : 'odd';
   return $row;                              
}


// CONVERT SPECIAL CHARACTERS TO HTML ENTITIES, BECAUSE OF SECURITY(CROSS SITE SCRIPTING)
function plain($str) {
   return htmlspecialchars($str, ENT_QUOTES);
}


// MY OWN FLASH MESSAGE FUNCTION
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

?>