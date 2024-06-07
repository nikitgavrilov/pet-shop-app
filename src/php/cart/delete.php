<?php

include "../db/db.php";

$id = $_POST['id'];

$deleteFromCartQuery = "UPDATE `products` SET inCart = 0 WHERE id = '$id'";

$deleteFromCartResult = $conn->query($deleteFromCartQuery);

Header("Location: ../../pages/account.php");