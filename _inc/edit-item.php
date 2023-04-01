<?php 

require 'config.php';

$message = trim($_POST['message']);

if ($message) {
   $edit = $database->update("items", ["text" => $message], 
   ["id" => $_POST['id']]);

   if ($edit->rowCount() == 0) {
      $flash->info('Did not you want to edit it? :)');
      redirect('back');
   }
   else {
      redirect('/');
   }
  
}
else {
   $flash->error('No...try it again my friend :)');
   redirect('back');
}

                                                   