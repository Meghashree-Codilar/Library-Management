<?php
	ini_set('display_errors', true);
	require_once __DIR__ . '/include.php';
	class signupredirect extends Dbconnection
	{
		public function signup()
		{
			      $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $sql=$this->conn->prepare("SELECT count(*) from users where email='$email'");
            $sql->execute();
            if(!$sql->fetchColumn()) {

		        $sql="INSERT INTO users VALUES ('$firstname','$lastname','$email','$password')";
			      $con= $this->conn;
            if($con->exec($sql)==TRUE) {
			    	header('Location:signin.php');
			      }
			      else{
              header('Location:signup.php');
			      }
	
            }else{
            echo "failed to register";
             }
            	}
	          }
	$signup=new signupredirect();
	$signup->signup();
?>