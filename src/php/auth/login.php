<?php

include "../../php/db/db.php";

$login = $_POST['login'];
$password = $_POST['password'];

$loginQuery = "SELECT * FROM users WHERE login = '$login'";
$result = $conn->query($loginQuery);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $stored_password = $row['password'];

    if (password_verify($password, $stored_password)) {
				setcookie('user_login', $row['login'], time() + 3600, '/');
				Header("Location: ../../pages/main.php");
    } else {
        echo "Неверный логин или пароль!";
    }
} else {
    echo "Пользователь не найден!";
}


$conn->close();