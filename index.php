<?php 

include_once '_partials/header.php';

$items = get_items();

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

      <?php if ($items) : foreach ($items as $i => $item) : $row = $i++ ?>

         <li class="list-group-item <?= is_even($row) ?>" id="item-<?= $item->id ?>">
         
            <?= $item->text ?>
                  
            <a href="edit.php?id=<?= $item->id ?>" class="anchor">edit</a>

            <form id="delete-form" class="float-end" action="_inc/delete-item.php" method="post">
               <input type="hidden" name="delete" value="<?= $item->id ?>">
               <button id="<?= $item->id ?>" class="btn btn-secondary ">x</button>
            </form>

            <p class="date"><?= $item->created_at ?></p>

         </li>

      <?php endforeach; else : ?>

         <img class="sponge-bob" src="<?= assets('img/to-do.gif') ?>" alt="sponge bob read todo list">

      <?php endif ?>

   </ul>

</div>

<?php include_once '_partials/footer.php' ?>


                  

                  


                  

                  
                  
      
   
