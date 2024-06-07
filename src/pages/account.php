<?php
	if (!isset($_COOKIE['user_login'])) {
		Header("Location: main.php");
	} else {
		include "../php/getData/getData.php";
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
								<?php 
									if (mysqli_num_rows($productsInCartResult) == 0) {
											echo "<p>Корзина пуста</p>";
									} else {
											while ($cart = mysqli_fetch_assoc($productsInCartResult)) { 
													?>
													<div class="cart__item">
															<div class="cart__image">
																	<img src="<?= $cart['image'] ?>" alt="product">
															</div>
															<div class="cart__info">
															<form action="../php/cart/delete.php" method="POST">
																<input type="hidden" name="id" value="<?= $cart['id'] ?>">
																	<p class="cart__name">
																		<?= $cart['name'] ?>
																			<button type="submit">
																				<svg width="32px" height="32px" viewBox="0 0 24 24" fill="none">
																					<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
																					<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
																					<g id="SVGRepo_iconCarrier"> <path d="M16 9L13.0001 11.9999M13.0001 
																					11.9999L10 15M13.0001 11.9999L10.0002 9M13.0001 11.9999L16.0002 15M8 
																					6H19C19.5523 6 20 6.44772 20 7V17C20 17.5523 19.5523 18 19 18H8L2 12L8 6Z" 
																					stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> 
																				</g></svg>
																			</button>
																		</p>
															</form>
																	<div class="cart__count">
																			<button class="cart__minus">-</button>
																			<p class="cart__number">1</p>
																			<button class="cart__plus">+</button>
																	</div>
																	<p class="cart__price"><?= $cart['price']?>.00 Р.</p>
															</div>
													</div>
													<?php
											}
									}
								?>
							</div>
						</div>
					</section>
				</main>
         <?php include("./../components/footer/footer.php") ?>
    </div>
	</body>
</html>

