<?php

$router->get('/','controllers/index.php');
$router->get('/services/residential','controllers/services/residential-cleaning-services.php');
$router->get('/contact','controllers/contact.php');

$router->get('/users','controllers/users/index.php');

$router->get('/notes','controllers/notes/index.php');
$router->get('/note','controllers/notes/show.php');
$router->delete('/notes','controllers/notes/destroy.php');
$router->get('/notes/create','controllers/notes/create.php');
$router->post('/notes','controllers/notes/store.php');



