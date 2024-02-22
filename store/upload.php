<?php 



include_once("../Registration/config.php");

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["img"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
if(isset($_POST["submit"])) {
    $name = $_POST['name'];
    $size = $_POST["size"];
    $color = $_POST["color"];
    $kondition = $_POST["kondition"];
    $category_id = $_POST["category_id"];
    $price = $_POST["price"];
    $img = $target_file;
    if (empty($name) || empty($size) || empty($color) || empty($kondition) || empty($category_id) ||empty($price) || empty($img)) {
        echo "You need to fill all the filds";
        sleep(2);
        header("Location:sell.php");
    } else {
        $sql = "INSERT INTO products (name,size,color,kondition,category_id,price,img) VALUES (:name,:size,:color,:kondition,:category_id,:price,:img)";
        $insertSql = $conn->prepare($sql);
        $insertSql->bindParam(":name", $name);
        $insertSql->bindParam(":size", $size);
        $insertSql->bindParam(":color", $color);
        $insertSql->bindParam(":kondition", $kondition);
        $insertSql->bindParam(":category_id", $category_id);
        $insertSql->bindParam(":price", $price);
        $insertSql->bindParam(":img", $img);
        $insertSql->execute();
    };
};
?>