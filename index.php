<?php 

include '_partials/header.php';

$data = $database->select('items',['id','text','created_at']);

?>

<div class="container">

   <div class="form-group">

      <h1>Have fun with Todo app</h1>

      <form id="add-form" action="_inc/add-item.php" method="post">
         <textarea class="w-75" name="message" id="text" cols="60" rows="3" placeholder="is there something you need to do?😎"></textarea>
         <?= $flash->display() ?>
         <p class="controls"><button name="submit" class="btn btn-success">Add</button></p>
      </form>

   </div>

   <ul class="list-group">

      <?php

      if ( ! $data ) {
         echo '<img class="sponge-bob" src="'.assets('img/to-do.gif').'" alt="sponge bob read todo list">';
      }

      foreach ($data as $i => $item) {
         $row = $i++;
         $new_date = date("j M Y, H:i",strtotime($item['created_at'])); 

         echo '<li class="list-group-item '.is_even($row).'" id="item-'.$item['id'].'">'.plain($item['text']).'
                  
                  <a class="anchor" href="edit.php?id='.$item['id'].'">edit</a>

                  <form id="delete-form" class="float-end" action="_inc/delete-item.php" method="post">
                     <input type="hidden" name="delete" value="'.$item['id'].'">
                     <button id="'.$item['id'].'" class="btn btn-secondary ">x</button>
                  </form>

                  <p class="timestamp">'.$new_date.'</p>

               </li>';
      }

     ?>

   </ul>

</div>

<?php include '_partials/footer.php' ?>


                  

                  


                  

                  
                  
      
   
