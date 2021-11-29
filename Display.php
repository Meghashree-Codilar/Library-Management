<?php
	require_once __DIR__ .'/sessioncheck.php';
	class Display extends Dbconnection
    {
        public function displayBook() {
			$email=$_SESSION['email'];
	        $stmt = $this->conn->prepare("SELECT * from book_info WHERE author_name='$email'");
	        $stmt->execute();
	        $arrays = $stmt->fetchAll(PDO::FETCH_ASSOC);
	        
	        return $arrays;require_once __DIR__ .'/insert1.php';
		}
		
    }