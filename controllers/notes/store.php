<?php

use core\Validator;

$validator = new core\Validator;

$config = require base_path('config.php');
$db = new core\Database($config);

$errors = [];

if (!validator::string($_POST['body'], 8, 50)) {
    $errors[] = 'The Body of the Note must be more than 8 Characters and Less than 50 Characters';
}




if (empty($errors)) {
    $db->query(
        "INSERT INTO notes(body,userid) values(:body,:userid)",
        [
            ":body" => htmlspecialchars($_POST['body']),
            ":userid" => $_POST['userid']
        ]
    );

    header("location:/notes");
    
    die();
}
