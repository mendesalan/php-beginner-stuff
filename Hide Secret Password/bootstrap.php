<?php

$config = require 'config.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Task.php';
require 'functions.php';


$query = new QueryBuilder(
	Connection::make($config['database']) 
);