<?php

$web = [];

$web['config'] = require 'config.php';

require 'core/router.php';
require 'core/request.php';

require 'core/database/connection.php';
require 'core/database/queryBuilder.php';

$web['database'] =  new QueryBuilder(
	
	connection::make($web['config']['database'])

);
