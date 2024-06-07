<?php include "../php/getData/getData.php" ?>
<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Подключаем CSS -->
		<link rel="stylesheet" href="products/products.css">
		<?php include("./../components/meta/meta.php") ?>
		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
		<script src="../assets/scripts/libs/slick.min.js" defer></script>
		<script src="products/scripts/scroll.js" defer></script>
		<script src="../assets/scripts/burger.js" defer></script>
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<!-- Оболочка демонстрации -->
    <div class="wrapper">
         <?php include("./../components/header/header.php") ?>
				<main>
					<section class="main__products products" id="first-section">
						<div class="container">
							<div class="products__body">
								<?php while ($product = mysqli_fetch_assoc($productsResult)) { ?>
								<div class="products__column">
									<form action="../php/cart/cart.php" method="POST" class="products__item products-item">
										<input type="hidden" value="<?= $product['id'] ?>" name="id">
										<a href="single-product.php?id=<?= $product['id'] ?>" class="products-item__image">
											<img src="<?= $product['image'] ?>" alt="product">
										</a>
										<div class="products-item__info">
											<h3 class="products-item__name"><?= $product['name'] ?></h3>
											<p class="products-item__price"><?= $product['price'] ?>.00 Р.</p>
										</div>
										<div class="products-item__cart">
											<?php if (isset($_COOKIE['user_login'])) {?>
												<?php if ($product['inCart'] == 0) { ?>
													<button type="submit">В корзину</button>
												<?php } else { ?>
													<button type="submit">Удалить из корзины</button>
												<?php } ?>
											<?php } else { ?>
												<a href="login.php" class="products-item__relocate">В корзину</a>
											<?php } ?>
										</div>
								</form>
								</div>
								<?php } ?>			
							</div>
						</div>
					</section>
				</main>
         <?php include("./../components/footer/footer.php") ?>
    </div>
	</body>
</html>

