<?php 

require_once 'config.php';

$delete = $database->delete('items',[
   'id' => $_POST['delete']
]);

redirect('/');
