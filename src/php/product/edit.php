<?php

include "../db/db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];

$editQuery = "UPDATE `products` SET `name` = '$name', `description` = '$description', `price` = '$price', `image` = '$image' WHERE id = '$id'";

$editResult = $conn->query($editQuery);

Header("Location: ../../pages/admin.php");