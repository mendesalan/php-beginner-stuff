<?php

interface Logger {
	public function execute($message);
}

/**
* 
*/
class LogtoFile implements Logger
{	
	public function execute($message)
	{
		var_dump('log msg to a file: ' . $message);
	}
}

class LogtoDatabase implements Logger
{	
	public function execute($message)
	{
		var_dump('log msg to a database: ' . $message);
	}
}


/**
* 
*/
class UsersController
{
	protected $logger;

	public function __construct(Logger $logger) // the trick happens here, we can pass LogtoFile or LogtoDatabase but 
	{											// Logger $logger remains the same, because LogtoFile, LogtoDatabase are their children
		$this->logger = $logger;
	}
	
	public function show()
	{
		$user = 'JohnDoe';

		// log this information
		$this->logger->execute($user);
	}
}

// we can choose which type are we going to log just a file or in the database.

// $controller = new UsersController(new LogtoFile);
$controller = new UsersController(new LogtoDatabase);

$controller->show();