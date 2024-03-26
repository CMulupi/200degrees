<?php  view('partials/header.php'); ?>
<main class="row">
   <?php view('partials/nav.php') ?>
  
    <div class="col-md-8 mx-auto mt-4">


         <form action="/notes" method="post">
            <input class="form-control" type="hidden" name="userid" id="userid" value="1">
             <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
          
             <div>
             <button class="btn btn-dark" type="submit">Submit</button>
             </div>
         </form>

  

    </div>
    
</main>
<?php  view('partials/footer.php'); ?>