<?php

include "../db/db.php";

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];

$addQuery = "INSERT INTO `products` (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";

$addResult = $conn->query($addQuery);

Header("Location: ../../pages/admin.php");