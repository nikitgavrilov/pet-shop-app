<?php
include "../php/db/db.php";

$getPetsResult = $conn->query("SELECT * FROM `pets`");
?>
<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Подключаем CSS -->
		<link rel="stylesheet" href="pets/slider.css">
		<link rel="stylesheet" href="pets/pets.css">
		<?php include("./../components/meta/meta.php") ?>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
		<script src="../assets/scripts/libs/slick.min.js" defer></script>
		<script src="pets/scripts/slider.js" defer></script>
		<script src="pets/scripts/scroll.js" defer></script>
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<!-- Оболочка демонстрации -->
    <div class="wrapper">
			<main>
				<section class="main__hero hero" id="first-section">
						<div class="hero__body">
							<div class="hero__back">
								<a href="main.php">
									Главная 
								</a>
								- забота о животных
							</div>
							<h2 class="hero__title">
								Не только людям нужен дом
								<div class="hero__decor-1">
									<img src="pets/img/hero/dog.svg" alt="dog">
								</div>
							</h2>
							<p class="hero__text">
								Мы предлагаем подарить шанс маленькому и милому щенку 
								с очень широким и открытым сердцем. Он или она будет 
								любить тебя больше, чем кто-либо другой на свете, вот увидишь!
							</p>
							<div class="hero__btn">
								<div class="hero__decor-2">
									<img src="pets/img/hero/dog-02.svg" alt="dog">
								</div>
								<div class="orange-btn" id="make-friend-btn">Завести питомца</div>
							</div>
						</div>
				</section>
				<section class="main__shelter shelter">
					<div class="container">
						<div class="shelter__body">
							<div class="shelter__left">
								<img src="pets/img/shelter/animals.png" alt="animals">
							</div>
							<div class="shelter__right">
								<h2 class="shelter__title care-title">Приют о котором ведется речь:</h2>
								<div class="shelter__text">
									<p>
									На данный момент у нас на руках 121 собака и 342 кошки и статистика.
									показывают, что только 20% из них обретут семью. Остальные продолжат
									жить с нами и будет ждать счастливого случая стать горячо любимым.
									</p>
									<p>
									Мы кормим наших подопечных самой лучшей едой и следим за тем, чтобы они не
									заболеть, чувствовали себя комфортно (в том числе психологически) и хорошо.
									Нас поддерживают 87 волонтеров и 28 сотрудников разной квалификации.
									уровни. Около 12% животных забирают сотрудники приюта.
									Заботясь о животных, они привязываются к домашним любимцам.
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="main__friends friends" id ="friends-section">
					<div class="container">
						<h2 class="friends__title care-title">Наши друзья, которые ищут дом</h2>
						<div class="friends__body slider">
							<?php while ($pet = mysqli_fetch_assoc($getPetsResult)) { ?>
							<div class="friends__column slider__item">
								<div class="friends__item">
									<div class="friends__img">
										<img src="<?= $pet['image'] ?>" alt="pet">
									</div>
									<h3 class="friends__name"><?= $pet['name'] ?></h3>
									<a href="single-pet.php?id=<?= $pet['id'] ?>" class="friends__more transparent-btn">Узнать больше</a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</section>
				<section class="main__donation donation">
					<div class="container">
						<div class="donation__body">
							<div class="donation__left">
								<img src="pets/img/donation/donation-dog.png" alt="dog">
							</div>
							<div class="donation__right">
								<h2 class="donation__title care-title">Вы также можете сделать пожертвование</h2>
								<p class="donation__info">Название банка / Тип банковского счета</p>
								<div class="donation__bank">
									<img src="pets/img/donation/credit-card.svg" alt="card">
									<p>8383 2882 8080 8778 7445</p>
								</div>
								<p class="donation__description">
									Юридическая информация и lorem ipsum dolor sit 
									amet, consectetur adipiscing elit. Меценат a 
									ipsum и libero sagittis dignissim sed ac diam. 
									Praesent ultrices maximus tortor et vulputate. 
									Interdum et Malesuada Fames ac ante ipsum primis in faucibus.
								</p>
							</div>
						</div>
					</div>
				</section>
			</main>
			<?php include("./../components/footer/footer.php") ?>
    </div>
	</body>
</html>

