<?php

include "../db/db.php";

$id = $_POST['id'];

$deleteQuery = "DELETE FROM `products` WHERE id = '$id'";

$deleteResult = $conn->query($deleteQuery);

Header("Location: ../../pages/admin.php");