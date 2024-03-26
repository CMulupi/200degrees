<?php

use core\Container;
use core\Database;

$container = new Container;

$container->bind(Database::class, function () {

    $config = require base_path('config.php');

    return new core\Database($config);

});

$db = $container->resolve(Database::class);

