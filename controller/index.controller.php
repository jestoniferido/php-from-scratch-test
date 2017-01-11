<?php

$users = $web['database']->selectAll('tbl_users');

require 'view/index.view.php';
