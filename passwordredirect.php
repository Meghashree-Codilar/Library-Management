<?php
	ini_set('display_errors', true);
	require_once __DIR__ . '/include.php';
	class passwordredirect extends Dbconnection
	{
		public function password()
		{
            $email=$_POST['email'];
            $password=$_POST['password'];
            $sql=$this->conn->prepare("UPDATE users set password='$password' where email='$email'"); 
            
			

			
			
			if($sql->execute()) {
                header("Location: signin.php");
			}
			else{
                header("Location: signup.php");
			}
		}
	}
	 $pass=new passwordredirect();
	 $pass->password();
     ?>