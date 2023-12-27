<?php
session_start();

$user = "root";
$pass = "";
$server = "localhost";
$dbname = "finalproject";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
} catch (PDOException $e) {
    echo "error: ". $e->getMessage();
}

function logoutUser() {
    session_unset();
    session_destroy();
    header("Location: index.php");
}
function isUserLoggedIn() {
    return empty($_SESSION["email"]);
}
?>