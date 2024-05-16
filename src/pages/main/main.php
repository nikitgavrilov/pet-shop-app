<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Подключаем CSS -->
		<link rel="stylesheet" href="main.css">
		<?php include("./../../components/meta/meta.php") ?>
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<!-- Оболочка демонстрации -->
    <div class="wrapper">
         <?php include("./../../components/header/header.php") ?>
				 <main>
					<section class="main__copilot copilot">
							<div class="container">
								<div class="copilot__body">
									<div class="copilot__left">
										<h1 class="copilot__title">Dog is my Copilot.</h1>
										<div class="copilot__buttons buttons">
											<a href="#" class="copilot__buy orange-btn">Купить сейчас</a>
											<a href="#" class="copilot__details transparent-btn">Посмотреть</a>
										</div>
									</div>
									<div class="copilot__right">
										<img src="img/copilot/dog.png" alt="dog">
									</div>
								</div>
							</div>
						</section>
						<section class="main__products products">
							<div class="container">
								<div class="products__body">
									<div class="products__column">
										<div class="products__item item-products">							
											<h2 class="item-products__title">Продукты высшего качества Pen Foods</h2>
											<p class="item-products__text">Наши питомцы навсегда оставляют отпечатки в наших сердцах. Они делают нас счастливее.</p>
											<a href="#" class="transparent-btn">Посмотреть</a>
										</div>
									</div>
									<div class="products__column">
										<div class="products__item item-products">	
											<h2 class="item-products__title">Игрушки для ваших питомцев</h2>
											<p class="item-products__text">Наши питомцы навсегда оставляют отпечатки в наших сердцах. Они делают нас счастливее.</p>
											<a href="#" class="transparent-btn">Посмотреть</a>
										</div>
									</div>
									<div class="products__column">
										<div class="products__item item-products">			
											<h2 class="item-products__title">Продукты высшего качества Pen Foods</h2>
											<p class="item-products__text">Наши питомцы навсегда оставляют отпечатки в наших сердцах. Они делают нас счастливее.</p>
											<a href="#" class="transparent-btn">Посмотреть</a>
										</div>
									</div>
								</div>
							</div>
						</section>
				 </main>
         <?php include("./../../components/footer/footer.php") ?>
    </div>
	</body>
</html>

