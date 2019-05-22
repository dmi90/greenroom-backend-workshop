<?php

$router->get('', 'controllers/index.php');
$router->get('contact', 'controllers/contact.php');
$router->get('policy', 'controllers/policy.php');
$router->get('task', 'controllers/task.php');
$router->get('remove', 'controllers/remove-task.php');

$router->post('insert', 'controllers/insert-task.php');