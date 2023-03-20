<?php 

include '_partials/header.php';

if ( ! $item = get_item() )  {
   show404();
}
   
?>

<div class="container">

   <div class="form-group">

      <h1>Have fun with Edit</h1>

      <form id="edit-form" action="_inc/edit-item.php" method="post">

         <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
         <textarea class="w-75" name="message" id="text" cols="60" rows="3"><?= $item ?></textarea>
         <?= $flash->display() ?>

         <p class="controls">
            <button name="submit" class="btn btn-success">Edit</button>
            <a class="anchor" href="<?= $base_url ?>">back</a>
         </p>

      </form>

   </div>

</div>

<?php include '_partials/footer.php' ?>