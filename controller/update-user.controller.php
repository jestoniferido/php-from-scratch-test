<?php
session_start();

if(isset($_POST['id']))
{
    $_SESSION['id'] = $_POST['id'];
}

$param = [];

foreach ($_POST as $key => $value) {
	$param[$key] = $key. '='."'".$value."'";
}

$web['database']->update('tbl_users', $_SESSION, array_splice($param,1));

header('Location: /');