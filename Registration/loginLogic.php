<?php
include_once("config.php");

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if(empty($email) || empty($password)) {
        echo "Fill all the filds!";
        header("refresh:6; url=signIn.php");
    } else {
        $sql = "SELECT * FROM users WHERE email=:email";
        $insertSql = $conn->prepare($sql);
        $insertSql->bindParam(":email", $email);
        $insertSql->execute();

        if($insertSql->rowCount() > 0) {

            $data=$insertSql->fetch();
            if(password_verify($password,$data["password"])) {
                $_SESSION["email"]=$data["email"];
                header("Location: ../index.php");
            } else {
                echo "Password incorrect";
                header("refresh:2; url=Login.php");
            }
        } else {
            "User not found";
        }
    }
}
?>