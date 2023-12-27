<?php
include_once("../Registration/config.php");
if(isset($_POST["submit"])) {
    $user_id = $_POST['user_id'];
    $product_id = $_POST["product_id"];
    $amount = $_POST["amount"];
    if (empty($user_id) || empty($product_id) || empty($amount)) {
        echo "You need to fill all the filds";
        sleep(2);
        header("Location:confirmPurch.php");
    } else {
        $sql = "INSERT INTO orders (user_id,product_id,amount) VALUES (:user_id,:product_id,:amount)";
        $insertSql = $conn->prepare($sql);
        $insertSql->bindParam(":user_id", $user_id);
        $insertSql->bindParam(":product_id", $product_id);
        $insertSql->bindParam(":amount", $amount);
        $insertSql->execute();
    };
};
?>
