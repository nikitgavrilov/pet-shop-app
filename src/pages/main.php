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
		<script src="main/scripts/slider.js" defer></script>
		<script src="../assets/scripts/burger.js" defer></script>
		<script src="main/scripts/scroll.js" defer></script>
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
											<a href="#" class="copilot__buy orange-btn">Купить сейчас</a>
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
					<section class="main__popular popular">
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
											<img src="main/img/popular/nordic01.png" alt="nordic01">
										</div>
										<h3 class="item-popular__title">Nordic of nature</h3>
										<p class="item-popular__text">
											Сбалансированный состав из натуральных 
											ингредиентов обеспечивает полноценное питание и поддерживает оптимальное 
											состояние здоровья.
										</p>
										<div class="item-popular__btn">
											<a href="#" class="transparent-btn">Посмотреть подробнее</a>
										</div>
									</div>
								</div>
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="main/img/popular/nordic02.png" alt="nordic02">
										</div>
										<h3 class="item-popular__title">Nordic of nature</h3>
										<p class="item-popular__text">
										Каждый кусочек наполнен витаминами, минералами и питательными веществами, 
										которые помогут вашему питомцу быть активным, сильным и счастливым. 
										</p>
										<div class="item-popular__btn">
											<a href="#" class="transparent-btn">Посмотреть подробнее</a>
										</div>
									</div>
								</div>
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="main/img/popular/nordic03.png" alt="nordic03">
										</div>
										<h3 class="item-popular__title">Nordic of nature</h3>
										<p class="item-popular__text">
										Приятный аромат и вкусный вкус делают наш корм незаменимым угощением для вашего пушистого друга.
										</p>
										<div class="item-popular__btn">
											<a href="#" class="transparent-btn">Посмотреть подробнее</a>
										</div>
									</div>
								</div>
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="main/img/popular/catfood01.png" alt="catfood01">
										</div>
										<h3 class="item-popular__title">catfood01</h3>
										<p class="item-popular__text">
										Приятный аромат и вкусный вкус делают наш корм незаменимым угощением для вашего пушистого друга.
										</p>
										<div class="item-popular__btn">
											<a href="#" class="transparent-btn">Посмотреть подробнее</a>
										</div>
									</div>
								</div>
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="main/img/popular/catfood02.png" alt="catfood02">
										</div>
										<h3 class="item-popular__title">catfood02</h3>
										<p class="item-popular__text">
										Приятный аромат и вкусный вкус делают наш корм незаменимым угощением для вашего пушистого друга.
										</p>
										<div class="item-popular__btn">
											<a href="#" class="transparent-btn">Посмотреть подробнее</a>
										</div>
									</div>
								</div>
								<div class="popular__column">
									<div class="popular__item item-popular">
										<div class="item-popular__image">
											<img src="main/img/popular/catfood03.png" alt="catfood03">
										</div>
										<h3 class="item-popular__title">catfood03</h3>
										<p class="item-popular__text">
										Приятный аромат и вкусный вкус делают наш корм незаменимым угощением для вашего пушистого друга.
										</p>
										<div class="item-popular__btn">
											<a href="#" class="transparent-btn">Посмотреть подробнее</a>
										</div>
									</div>
								</div>
							</div>
							<div class="popular__all">
								<a href="#" class="orange-btn">Посмотреть всю продукцию</a>
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
								<div class="testimonials__column slider__item">
									<div class="testimonials__item">
										<div class="testimonials__decor-1">
											<img src="main/img/testimonials/backticks.svg" alt="backticks">
										</div>
										<div class="testimonials__decor-2">
											<img src="main/img/testimonials/backticks-rotated.svg" alt="backticks">
										</div>
										<div class="testimonials__avatar">
											<img src="main/img/testimonials/man01.jpg" alt="man">
										</div>
										<p class="testimonials__text">
											A dog in heat needs more than shade The more people paw prints 
											forever on our hearts. I meet the more I like my dog.Dogs leave 
											paw prints forever on our hearts.
										</p>
										<h3 class="testimonials__name">Margaret Street</h3>
										<p class="testimonials__profession">UI&UX Designer</p>
									</div>
								</div>
								<div class="testimonials__column slider__item">
									<div class="testimonials__item">
										<div class="testimonials__decor-1">
											<img src="main/img/testimonials/backticks.svg" alt="backticks">
										</div>
										<div class="testimonials__decor-2">
											<img src="main/img/testimonials/backticks-rotated.svg" alt="backticks">
										</div>
										<div class="testimonials__avatar">
											<img src="main/img/testimonials/man01.jpg" alt="man">
										</div>
										<p class="testimonials__text">
											A dog in heat needs more than shade The more people paw prints 
											forever on our hear
										</p>
										<h3 class="testimonials__name">Margaret Street</h3>
										<p class="testimonials__profession">UI&UX Designer</p>
									</div>
								</div>
								<div class="testimonials__column slider__item">
									<div class="testimonials__item">
										<div class="testimonials__decor-1">
											<img src="main/img/testimonials/backticks.svg" alt="backticks">
										</div>
										<div class="testimonials__decor-2">
											<img src="main/img/testimonials/backticks-rotated.svg" alt="backticks">
										</div>
										<div class="testimonials__avatar">
											<img src="main/img/testimonials/man01.jpg" alt="man">
										</div>
										<p class="testimonials__text">
											A dog in heat
										</p>
										<h3 class="testimonials__name">Margaret Street</h3>
										<p class="testimonials__profession">UI&UX Designer</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="main__feedback feedback">
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

