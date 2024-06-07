<?php
include "../php/db/db.php";

$id = $_GET['id'];

$getPetByIdResult = $conn->query("SELECT * FROM `pets` WHERE id = $id");
?>
<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Подключаем CSS -->
		<link rel="stylesheet" href="single/single.css">
		<?php include("./../components/meta/meta.php") ?>
		<!-- JavaScript -->
		<script src="../assets/scripts/burger.js" defer></script>
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<!-- Оболочка демонстрации -->
    <div class="wrapper">
         <?php include("./../components/header/header.php") ?>
				<main>
					<section class="main__single single" id="first-section">
						<div class="container">
							<div class="single__body body">
								<?php while ($result = $getPetByIdResult->fetch_assoc()) { ?>
								<div class="single__left left">
									<img src="<?= $result['image'] ?>" alt="">
								</div>
								<div class="single__right right">
									<h2 class="single__name name"><?= $result['name'] ?></h2>
									<p class="single__description description">
										<?= $result['description'] ?>
									</p>
									<p class="single__description description">
										<span>Болезни:</span> <?= $result['diseases'] ?>
									</p>
									<p class="single__description description">
										<span>Возраст:</span> <?= $result['age'] ?> год/лет
									</p>
									<div class="copilot__buttons buttons">
										<a href="pets.php" class="copilot__buy orange-btn">Обратно</a>
									</div>
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

