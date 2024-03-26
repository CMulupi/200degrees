<?php  view('partials/header.php'); ?>
<main class="row">
   <?php view('partials/nav.php') ?>
  
    <div class="col-md-8 mx-auto mt-4">
    <p class="ms-3">
        <?php echo $note['body'] ?>
    </p>
      <div>
         <form action="/notes" method="post">
             <input type="hidden" name="noteid" value = <?php echo $note['id'] ?>>
             <input type="hidden" name="_method" value = "DELETE" >
             <button class="btn btn-link" type="submit">Delete</button>
         </form>

      </div>

    </div>
    
</main>
<?php  view('partials/footer.php'); ?>