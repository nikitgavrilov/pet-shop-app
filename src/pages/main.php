<?php
	if ($_COOKIE['user_login'] == "admin") {
		Header("Location: admin.php");
	}
 include "../php/getData/getData.php";
?>
<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Подключаем CSS -->
		<link rel="stylesheet" href="main/main.css">
		<link rel="stylesheet" href="main/slider.css">
		<?php include("./../components/meta/meta.php") ?>
		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
		<script src="../assets/scripts/libs/slick.min.js" defer></script>
		<script src="main/scripts/scroll.js" defer></script>
		<script src="main/scripts/slider.js" defer></script>
		<script src="../assets/scripts/burger.js" defer></script>
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<!-- Оболочка демонстрации -->
    <div class="wrapper">
         <?php include("./../components/header/header.php") ?>
				<main>
					<section class="main__copilot copilot" id="first-section">
							<div class="container">
								<div class="copilot__body">
									<div class="copilot__left">
										<h1 class="copilot__title">Dog is my Copilot.</h1>
										<div class="copilot__buttons buttons">
											<a href="products.php" class="copilot__buy orange-btn">Купить сейчас</a>
											<a href="pets.php" class="copilot__details transparent-btn">Посмотреть</a>
										</div>
									</div>
									<div class="copilot__right">
										<img src="main/img/copilot/dog.png" alt="dog">
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
											<a href="products.php" class="transparent-btn">Посмотреть</a>
										</div>
									</div>
									<div class="products__column">
										<div class="products__item item-products">	
											<h2 class="item-products__title">Игрушки для ваших питомцев</h2>
											<p class="item-products__text">Наши питомцы навсегда оставляют отпечатки в наших сердцах. Они делают нас счастливее.</p>
											<a href="products.php" class="transparent-btn">Посмотреть</a>
										</div>
									</div>
									<div class="products__column">
										<div class="products__item item-products">			
											<h2 class="item-products__title">И многое другое на нашем сайте!</h2>
											<p class="item-products__text">Подарите себе и своим питомцам незабываемые моменты счастья.</p>
											<a href="products.php" class="transparent-btn">Посмотреть</a>
										</div>
									</div>
								</div>
							</div>
					</section>
					<section class="main__popular popular" id="popular-section">
						<div class="container">
							<div class="popular__info">
								<h2 class="popular__title title">Популярная продукция</h2>
								<p class="popular__text">
									Подарите своим любимым питомцам тоже счастье, которое 
									они дарят вам на протяжении всей своей жизни.
								</p>
							</div>
							<div class="popular__body">
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="../assets/img/products/nordic01.png" alt="nordic01">
										</div>
										<h3 class="item-popular__title">Nordic of nature</h3>
										<p class="item-popular__text">
											Сбалансированный состав из натуральных 
											ингредиентов обеспечивает полноценное питание и поддерживает оптимальное 
											состояние здоровья.
										</p>
									</div>
								</div>
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="../assets/img/products/nordic02.png" alt="nordic02">
										</div>
										<h3 class="item-popular__title">Nordic of nature</h3>
										<p class="item-popular__text">
										Каждый кусочек наполнен витаминами, минералами и питательными веществами, 
										которые помогут вашему питомцу быть активным, сильным и счастливым. 
										</p>
									</div>
								</div>
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="../assets/img/products/nordic03.png" alt="nordic03">
										</div>
										<h3 class="item-popular__title">Nordic of nature</h3>
										<p class="item-popular__text">
										Приятный аромат и вкусный вкус делают наш корм незаменимым угощением для вашего пушистого друга.
										</p>
									</div>
								</div>
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="../assets/img/products/catfood01.png" alt="catfood01">
										</div>
										<h3 class="item-popular__title">catfood01</h3>
										<p class="item-popular__text">
										Приятный аромат и вкусный вкус делают наш корм незаменимым угощением для вашего пушистого друга.
										</p>
									</div>
								</div>
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="../assets/img/products/catfood02.png" alt="catfood02">
										</div>
										<h3 class="item-popular__title">catfood02</h3>
										<p class="item-popular__text">
										Приятный аромат и вкусный вкус делают наш корм незаменимым угощением для вашего пушистого друга.
										</p>
									</div>
								</div>
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="../assets/img/products/catfood03.png" alt="catfood03">
										</div>
										<h3 class="item-popular__title">catfood03</h3>
										<p class="item-popular__text">
										Приятный аромат и вкусный вкус делают наш корм незаменимым угощением для вашего пушистого друга.
										</p>
									</div>
								</div>
							</div>
							<div class="popular__all">
								<a href="products.php" class="orange-btn">Посмотреть всю продукцию</a>
							</div>
						</div>
					</section>
					<section class="main__care care">
						<div class="container">
							<div class="care__body">
								<div class="care__left">
									<img src="main/img/care/dog-care.png" alt="dog-care">
								</div>
								<div class="care__right">
									<h3 class="care__sub-title">ЗАБОТА О ЖИВОТНЫХ</h3>
									<h2 class="care__title title">Начните ваш путь с новым питомцем вместе с нами</h2>
									<p class="care__text">
										Вы нужны своему питомцу. Чем больше людей вы встречаете, 
										тем больше любите вашего питомца. Они навсегда оставляют отпечатки
										своих лап в наших сердцах.
									</p>
									<div class="care__buttons buttons">
											<a href="#" class="care__appointment orange-btn">Встретиться</a>
											<a href="pets.php" class="care__details transparent-btn">Посмотреть питомцев</a>
										</div>
								</div>
							</div>
						</div>
					</section>
					<section class="main__testimonials testimonials">
						<div class="container">
							<h2 class="testimonials__title title">Отзывы о нашей продукции</h2>
							<div class="testimonials__body slider">
								<?php while ($testimonial = mysqli_fetch_assoc($testimonialsResult)) { ?>
								<div class="testimonials__column slider__item">
									<div class="testimonials__item">
										<div class="testimonials__decor-1">
											<img src="main/img/testimonials/backticks.svg" alt="backticks">
										</div>
										<div class="testimonials__decor-2">
											<img src="main/img/testimonials/backticks-rotated.svg" alt="backticks">
										</div>
										<div class="testimonials__avatar">
											<img src="<?= $testimonial['avatar'] ?>" alt="man">
										</div>
										<p class="testimonials__text">
										<?= $testimonial['description'] ?>
										</p>
										<h3 class="testimonials__name"><?= $testimonial['name'] ?></h3>
										<p class="testimonials__profession"><?= $testimonial['profession'] ?></p>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</section>
					<section class="main__feedback feedback" id="feedback-section">
						<div class="container">
							<div class="feedback__body">
								<div class="feedback__left">
									<h2 class="feedback__title title">
										Связаться с нами
									</h2>
									<p class="feedback__text">
										Отправьте нам вашу почту и мы свяжемся с вами в течении 24 часов.
									</p>
								</div>
								<form action="#" method="POST" class="feedback__right">
									<div class="feedback__input">
										<input type="email" placeholder="Введите ваш email">
									</div>
									<div class="feedback__submit">
										<button type="submit">Отправить</button>
									</div>
								</form>
							</div>
						</div>
					</section>
				</main>
         <?php include("./../components/footer/footer.php") ?>
    </div>
	</body>
</html>

