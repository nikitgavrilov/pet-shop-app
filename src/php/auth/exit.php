<?php 

setcookie('user_id', '', time() - 3600, '/');
setcookie('user_login', '', time() - 3600, '/');

Header("Location: ../../pages/main.php");