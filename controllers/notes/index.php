<?php
$heading='Notes';

$config = require base_path('config.php');



$db = new core\Database($config);




$notes = $db->query("SELECT * FROM notes")->findAll();



view('notes/index.view.php' ,[
    'notes' => $notes,
    'heading' => 'Notes'
]);
