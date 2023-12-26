<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$tempPass = $_POST['password'];
		$password = password_hash($tempPass, PASSWORD_DEFAULT);

		if(empty($name) || empty($username) || empty($email) || empty($phone) || empty($address) || empty($password))
		{
			echo "You need to fill all the fields.";
		}
		else
		{
			$sql = "SELECT email, username FROM users WHERE email=:email AND username=:username";
			$tempSQL = $conn->prepare($sql);
			$tempSQL->bindParam(':email', $email);
			$tempSQL->bindParam(':username', $username);
			$tempSQL->execute();

			if($tempSQL->rowCount() > 0)
			{
				echo "email or username exists!";
				header( "refresh:2; url=Signup.php" ); 
			}
			else
			{
				$sql = "insert into users (name, username, email, phone, address, password) values (:name, :username, :email, :phone, :address, :password)";
				$insertSql = $conn->prepare($sql);
			
				$insertSql->bindParam(':name', $name); 
				$insertSql->bindParam(':username', $username);
				$insertSql->bindParam(':email', $email); 
				$insertSql->bindParam(':phone', $phone);
				$insertSql->bindParam(':address', $address);
				$insertSql->bindParam(':password', $password);

				$insertSql->execute();

				echo "Data saved successfully ...";
				header( "refresh:2; url=Login.php" ); 
			}
		}
	}
?>