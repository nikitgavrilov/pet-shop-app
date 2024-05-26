<?php 
if (isset($_COOKIE['user_login'])) {
	Header("Location: main.php");
}
?>
<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Кодировка страницы -->
		<meta charset="UTF-8">
      <!-- Адаптив, запрет на масштабирование у мобильных устройств -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">
		<!-- Заголовок страницы в браузере -->
		<title>pets shop</title>
		<!-- Подключаем CSS -->
		<link rel="stylesheet" href="../assets/styles/null.css">
		<link rel="stylesheet" href="../assets/styles/general.css">
		<link rel="stylesheet" href="auth/auth.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<!-- Оболочка демонстрации -->
		<main>
			<section class="reg">
				<div class="login__body form-body">
					<form action="../php/auth/login.php" method="POST" class="login__form form">
						<h2 class="login__title form-title">Авторизация</h2>
						<div class="login__field form-field">
							<p>Введите логин</p>
							<input type="text" placeholder="Логин" require name="login">
						</div>
						<div class="login__field form-field">
							<p>Введите пароль</p>
							<input type="password" placeholder="Пароль" require name="password">
						</div>
						<div class="login__submit form-submit">
							<button type="submit">Войти</button>
						</div>
						<hr>
						<div class="login__link form-link">
							<a href="reg.php">Еще нет аккаунта?</a>
						</div>
					</form>
				</div>
			</section>
		</main>
	</body>
</html>

