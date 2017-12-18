<?php

require 'functions.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Task.php';

$query = new QueryBuilder(
	Connection::make() 
);