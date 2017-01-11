<?php

$user = $web['database']->selectByid('tbl_users' , $_GET);


require 'view/edit.view.php';