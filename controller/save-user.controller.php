<?php

$web['database']->insert('tbl_users', $_POST);

header('Location: /');