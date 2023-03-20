<?php 

require 'config.php';

$message = trim($_POST['message']);

if ($message) {
   $database->insert('items',['text' => $message]);
   redirect('/');
}
else {
   $flash->warning('You must fill in the field above :)');
   redirect('/');
}

?>