<?php

include "../../php/db/db.php";

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$regQuery = "INSERT INTO `users` (login, email, password) VALUES ('$login', '$email', '$hashedPassword')";

$conn->query($regQuery);

Header("Location: ../../pages/login.php");

$conn->close();