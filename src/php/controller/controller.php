<?php

include "../php/db/db.php";
include "../php/queries/queries.php";

$productsResult = $conn->query($productsQuery);
$testimonialsResult = $conn->query($testimonialsQuery);

$conn->close();