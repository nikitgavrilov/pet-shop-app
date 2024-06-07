<?php

include "./../db/db.php";

$id = $_POST['id'];

$productsQuery = "SELECT * FROM products WHERE id = '$id'";
$productsResult = $conn->query($productsQuery);

if ($productsResult) {
    $row = mysqli_fetch_assoc($productsResult);
    $inCart = $row['inCart'];

    if ($inCart == 0) {
        $addToCartQuery = "UPDATE products SET inCart = 1 WHERE id = '$id'";
        $result = $conn->query($addToCartQuery);
    } else {
        $deleteFromCartQuery = "UPDATE products SET inCart = 0 WHERE id = '$id'";
        $result = $conn->query($deleteFromCartQuery);
    }
}

Header("Location: ../../pages/products.php");