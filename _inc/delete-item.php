<?php 

require 'config.php';

$delete = $database->delete('items',[
   'id' => $_POST['delete']
]);

redirect('/');
