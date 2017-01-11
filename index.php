<?php

require 'core/bootstrap.php';

//var_dump($web);
//die();

require Router::load('routes.php')
	->direct(Request::uri(), Request::method());