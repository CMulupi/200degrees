<?php  view('partials/header.php'); ?>
<main class="row">
   <?php view('partials/nav.php') ?>
  
    <div class="col-md-8 mx-auto">
        <div>
            <a href="/notes/create">Add New</a>

        </div>
        <?php   foreach($notes as $note) :  ?>
            <ul>
                <a href="/note?id=<?php echo $note['id'] ?>">
                    <li> <?php echo  $note['body'] ?></li>
                </a>

            </ul>
        <?php endforeach ?>
    </div>

</main>
<?php  view('partials/footer.php'); ?>