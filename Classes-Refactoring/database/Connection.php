<?php

/**
* 
*/
class Connection 
{	
	static function make()
	{
		try {
			return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'rute');	
			echo 'connected to the databse';
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}

$pdo = Connection::make();
