<?php
	ini_set('display_errors', true);
	require_once __DIR__ .'/sessioncheck.php';
	//require_once __DIR__ . '/include.php';
	class insert1 extends Dbconnection
	{
		public function insert()
		{
			$book_id=$_POST['book_id'];
			
			$book_name =$_POST['book_name'];
			$author_name =$_SESSION['email'];
			$book_image =$_POST['image'];
			$published_year=$_POST['published'];
			$sql="INSERT INTO book_info VALUES ('$book_id','$book_name','$author_name','$book_image','$published_year')";
			$con= $this->conn;
			
			
			if($con->exec($sql)==TRUE) {
				header('Location: index1.php');
			}
			else{
				echo "failed to insert";
			}
		}

	}