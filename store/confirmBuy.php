<?php
include_once("../Registration/config.php");

if(empty($_SESSION['email'])) {
  header("Location: index.php");
};

$id = $_GET["id"];
$sql = "SELECT * FROM products WHERE id=:id";
$selectUsers = $conn->prepare($sql);
$selectUsers->bindParam(':id', $id);
$selectUsers->execute();

$user_data = $selectUsers->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase | ThriftOnline</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <nav>
      <div class="nav__background"></div>
          <a id="nav-toggle-btn" href="http://localhost/Finals/FinalProject-PHP/" class="profileBtn">
          <svg width="33px" height="33px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 16C15 15.2044 14.6839 14.4413 14.1213 13.8787C13.5587 13.3161 12.7957 13 12 13C11.2044 13 10.4413 13.3161 9.87868 13.8787C9.31607 14.4413 9 15.2043 9 16V20H4L4 10L8 6.5M12 3L20 10L20 20H15" stroke="#000000" stroke-width="0.36" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
          <text class="hoverPOPUP">Home</text> 
        </a>
    </nav>
    <div class="title"><h2>Item Checkout</h2></div>
<div class="container-prchs">
    <div class="container-left">
        <img src="<?php echo $user_data["img"]?>" alt="">
    </div>
    <div class="container-rightP"> 
        <form action="insertPurch.php" method="post" class="container-right">
        <h2>Order details</h1>
            <ul class="orderDetails_list">
                <li class="orderDetails_listed">Listing Name: <?= $user_data['name']?></li>
                <li class="orderDetails_listed">Listing Size: <?= $user_data['size']?></li>
                <li class="orderDetails_listed">Listing Price: <?= $user_data['Price']?></li>
                <li class="orderDetails_listed">Amount:
                    <input type="number"  name="amount" id="amount" value="1">
                </li>
            </ul>
            <button class="orderBtn" type="submit" name="submit">Submit</button>
            <input style="opacity:0;" type="text" class="profile__input" name="user_id" id="user_id" value="<?php echo $_SESSION["id"]?>">
            <input style="opacity:0;" type="text" class="profile__input" name="product_id" id="product_id" value="<?php echo $user_data["id"]?>">

        </form>
    </div>
</body>
</html>