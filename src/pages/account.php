<?php
	if (!isset($_COOKIE['user_login'])) {
		Header("Location: main.php");
	}
?>
<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Подключаем CSS -->
		<link rel="stylesheet" href="account/account.css">
		<?php include("./../components/meta/meta.php") ?>
		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
		<script src="../assets/scripts/libs/slick.min.js" defer></script>
		<script src="account/scripts/scroll.js" defer></script>
		<script src="account/scripts/counter.js" defer></script>
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<!-- Оболочка демонстрации -->
    <div class="wrapper">
         <?php include("./../components/header/header.php") ?>
				<main>
					<section class="main__cart cart" id="first-section">
						<div class="container">
							<h1 class="cart__title title">Добро пожаловать, <?= $_COOKIE['user_login'] ?></h1>
							<div class="cart__body">
								<h2 class="cart__sub-title">Корзина:</h2>
								<div class="cart__item">
									<div class="cart__image">
										<img src="../assets/img/products/beyond01.png" alt="product">
									</div>
									<div class="cart__info">
										<p class="cart__name">Beyond01</p>
										<div class="cart__count">
											<button class="cart__minus">-</button>
												<p class="cart__number">1</p>
											<button class="cart__plus">+</button>
										</div>
										<p class="cart__price">599.00 Р.</p>
									</div>
								</div>
							</div>
						</div>
					</section>
				</main>
         <?php include("./../components/footer/footer.php") ?>
    </div>
	</body>
</html>

