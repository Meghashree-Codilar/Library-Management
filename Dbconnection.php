<?php
	class Dbconnection
	{
		
		const servername = 'localhost';
		const username = 'megha';
		const password = 'P4ssw0rd@';
		const databases = 'books';
		public $conn;
	

// Establish database connection.
		
	
		public function __construct()
		{
			try {
				$this->conn = new PDO("mysql:host=".self::servername.";dbname=".self::databases, self::username, self::password);
				// set the PDO error mode to exception
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				
			} catch (PDOException $e) {
				//$this->createBb();
				
			}
			
			
		}
		public function __destruct()
		{
			$this->conn=null;
		}
		
    }