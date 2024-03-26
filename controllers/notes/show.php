<?php
$heading='Notes';

$config = require base_path('config.php');



$db = new core\Database($config);




$note = $db->query("SELECT * FROM notes WHERE id=:id",["id" => $_GET['id']])->find();



view('notes/show.view.php' ,[
    'note' => $note,
    'heading' => 'Note'
]);
