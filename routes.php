<?php

$router->get('','controller/index.controller.php');
$router->get('add/user','controller/add.controller.php');
$router->get('edit/user','controller/edit-user.controller.php');

$router->post('save/user','controller/save-user.controller.php');
$router->post('update/user','controller/update-user.controller.php');
