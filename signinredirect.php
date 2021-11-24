<?php
	ini_set('display_errors', true);
	require_once __DIR__ . '/include.php';
	class signinredirect extends Dbconnection
	{
		public function signin()
		{
            $email=$_POST['email'];
            $password=$_POST['password'];
            $sql=$this->conn->prepare("SELECT count(*) from users where email='$email' and password='$password'");
            $sql->execute();
			

			
			
			if($sql->fetchColumn()) {
				session_start();
				$_SESSION['email']=$email;
				$_SESSION['password']=$password;
				header("Location: index1.php");
			}
			else{
                header("Location: signin.php");
			}
		}
	}
	 $signin=new signinredirect();
	 $signin->signin();
     ?>