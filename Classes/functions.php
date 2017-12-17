<?php 

function connectToDb()
{
	try {
		return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'rute');	
		echo 'connected to the databse';
	} catch (PDOException $e) {
		die('could not connect.');
	}
}

function fetchAllResults($pdo)
{
	$query = $pdo->prepare('select * from todos');
	 
	$query->execute();

	// $tasks = $query->fetchAll(PDO::FETCH_OBJ);
	return $query->fetchAll(PDO::FETCH_CLASS, 'Task');	
}

function dd( $data ) {

	echo '<pre>';	

	var_dump( $data );
	
	echo '</pre>';
}