<?php
require 'functions.php';
require 'Task.php';

$pdo = connectToDb();

$tasks = fetchAllResults( $pdo );

require 'index.view.php';