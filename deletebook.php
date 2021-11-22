<?php
	ini_set('display_errors', true);
	require_once __DIR__ . '/include.php';
	class deletebook extends Dbconnection
	{
		public function delete()
		{
			$book_id=$_POST['book_id'];
			$sql="DELETE FROM book_info WHERE book_id=$book_id";
			$con= $this->conn;
			if($con->exec($sql)==TRUE) {
				header('Location: index1.php');
			}
			else{
				echo "fail";
			}
		}

	}