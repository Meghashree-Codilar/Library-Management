<?php
	class Display extends Dbconnection
    {
        public function displayBook() {
	  
	        $stmt = $this->conn->prepare("select  *  from book_info");
	        $stmt->execute();
	        $arrays = $stmt->fetchAll(PDO::FETCH_ASSOC);
	        
	        return $arrays;
		}
		
    }