<?php

$conn = new mysqli("localhost", "root", "", "petshop");

if ($coon->connect_error) {
	die("Ошибка: $coon->connect_error");
}