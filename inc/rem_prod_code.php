<?php

    require_once "connect.php";
    $id = $_POST['id_prod'];
    $query = "DELETE FROM `products` WHERE id=$id";
    mysqli_query($conn, $query);

    header("Location: ../main.php");
  

?>