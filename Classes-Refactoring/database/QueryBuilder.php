<?php 

/**
* 
*/
class QueryBuilder 
{	
	protected $pdo;

	public function __construct (PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	function selectAll($table, $intoClass)
	{
		$query = $this->pdo->prepare("select * from {$table}");
		 
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, $intoClass);			
	}
}