<?php
    require_once "connect.php";
    
    $name = $_POST["name"];
    $color = $_POST["color"];
    $price = $_POST["price"];
    $img = $_POST["img"];
    $price = "$".$price;
    $res = $conn->query("SELECT count(*) FROM products");
    $row = $res->fetch_row();
    $count = $row[0];
    $count+=1;
    mysqli_query($conn, "INSERT INTO `products` (`id`, `name`, `color`, `price`, `img`) VALUES ('$count', '$name', '$color', '$price', '$img')");
    
    header('Location: ../main.php');
    

?>