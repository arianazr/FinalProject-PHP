<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once("../Registration/config.php");

// Check if the session is empty, redirect if needed
if (empty($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Check if the order ID is provided in the URL
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    // Assuming you have a valid database connection ($conn)
    
    // Perform the deletion
    $sql = "DELETE FROM orders WHERE id = :order_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':order_id', $order_id);
    
    if ($stmt->execute()) {
        // Order successfully deleted
        header("Location: orders.php?id=" . $_SESSION['id']); // Redirect to the orders page
        exit();
    } else {
        // Handle the case where the deletion fails
        echo "Error deleting order: " . $stmt->errorInfo()[2];
    }
} else {
    // Handle the case where the order ID is not provided
    echo "Order ID not provided.";
}
?>
