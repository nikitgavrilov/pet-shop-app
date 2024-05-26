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
				<div class="reg__body form-body">
					<form action="../php/auth/reg.php" method="POST" class="reg__form form">
						<h2 class="reg__title form-title">Регистрация</h2>
						<div class="reg__field form-field">
							<p>Придумайте логин</p>
							<input type="text" placeholder="Логин" require name="login">
						</div>
						<div class="reg__field form-field">
							<p>Введите вашу почту</p>
							<input type="mail" placeholder="Почта" require name="email">
						</div>
						<div class="reg__field form-field">
							<p>Придумайте пароль</p>
							<input type="password" placeholder="Пароль" require name="password">
						</div>
						<div class="reg__submit form-submit">
							<button type="submit">Зарегистрироваться</button>
						</div>
						<hr>
						<div class="reg__link form-link">
							<a href="login.php">Уже есть аккаунт?</a>
						</div>
					</form>
				</div>
			</section>
		</main>
	</body>
</html>

