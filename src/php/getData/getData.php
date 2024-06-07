<?php

include "../php/db/db.php";

$productsQuery = "SELECT * FROM `products`";
$productsInCartQuery = "SELECT * FROM `products` WHERE inCart = 1";
$testimonialsQuery = "SELECT * FROM `testimonials`";

$productsResult = $conn->query($productsQuery);
$productsInCartResult = $conn->query($productsInCartQuery);
$testimonialsResult = $conn->query($testimonialsQuery);

$conn->close();