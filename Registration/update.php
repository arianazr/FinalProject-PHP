<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_SESSION['id'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST["address"];
	if(empty($name) || empty($username) || empty($email) || empty($phone) || empty($address)) {
		echo "You need to fill all the fields.";
		header("refresh:2; url=profile.php");
	} else {
	$sql = "UPDATE users SET  name=:name, username=:username, phone=:phone, email=:email, address=:address WHERE id=:id";
	$prep = $conn->prepare($sql);
    $prep->bindParam(':id', $id);
	$prep->bindParam(':name', $name);
	$prep->bindParam(':username', $username);
	$prep->bindParam(':email', $email);
	$prep->bindParam(':phone', $phone);
	$prep->bindParam(':address', $address);
	$prep->execute();

	header("Location:../index.php");
};
}

?>