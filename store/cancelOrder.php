<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once("../Registration/config.php");


    $order_id = $_GET['order_id'];

    
    $sql = "DELETE FROM orders WHERE id = :order_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':order_id', $order_id);
    
    if ($stmt->execute()) {
        header("Location: orders.php?id=" . $_SESSION['id']); 
        exit();
    } 
 else {
    echo "Order ID not provided.";
}
?>
