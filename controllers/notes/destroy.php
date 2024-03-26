<?php
$heading = 'Notes';

$config = require base_path('config.php');

$db = new core\Database($config);



$db->query("DELETE FROM notes WHERE id=:id", [":id" => $_POST['noteid']]);

header("location:/notes");
