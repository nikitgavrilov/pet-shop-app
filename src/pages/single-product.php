<?php
include "../php/db/db.php";

$id = $_GET['id'];

$getProductByIdResult = $conn->query("SELECT * FROM `products` WHERE id = $id");
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
							<div class="single__body">
								<?php while ($result = $getProductByIdResult->fetch_assoc()) { ?>
								<div class="single__left">
									<img src="<?= $result['image'] ?>" alt="">
								</div>
								<div class="single__right">
									<h2 class="single__name"><?= $result['name'] ?></h2>
									<p class="single__description">
										<?= $result['description'] ?>
									</p>
									<div class="copilot__buttons buttons">
										<a href="#" class="copilot__buy orange-btn">Купить сейчас</a>
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

