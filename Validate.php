<?php
	class Validate
	{
	
	public function validatedata(){
	
	
	$pin = $_POST['pincode'];

	if ($pin=='186')
	{
	header('Location: insert.php');
	}
	
	else{
	header('Location: add.php?flag=1');
}}
	}

	?>