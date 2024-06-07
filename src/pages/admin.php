<?php include "../php/getData/getData.php"  ?>
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
		<!-- Подключаем CSS -->
		<link rel="stylesheet" href="admin/admin.css">
		<link rel="stylesheet" href="../assets/styles/null.css">
		<link rel="stylesheet" href="../assets/styles/general.css">
		<!-- Подключаем шрифты -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<!-- JavaScript -->
		<script src="admin/scripts/modal.js" defer></script>
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<!-- Оболочка демонстрации -->
    <div class="wrapper">
			<header class="header">
				<div class="container">
					<div class="header__body">
						<h1 class="header__title">Здравствуйте, пользователь <?= $_COOKIE['user_login'] ?></h1>
						<form action="../php/auth/exit.php" class="account__exit">
							<button class="orange-btn">Выйти</button>
						</form>
					</div>
				</div>
			</header>
			<main class="main">
				<section class="main__table table">
					<div class="table__add-modal modal">
						<div class="modal__content content">
							<form action="../php/product/add.php" method="POST" class="modal__form form">
								<h2 class="form__title">Добавить продукцию</h2>
								<div class="form__field field">
									<p>Название</p>
									<input type="text" required name="name" placeholder="Введите название" id="name">
								</div>
								<div class="form__field field">
									<p>Описание</p>
									<textarea type="text" required name="description" placeholder="Введите описание" id="name"></textarea>
								</div>
								<div class="form__field field">
									<p>Цена</p>
									<input type="text" required name="price" placeholder="Введите цену" id="price">
								</div>
								<div class="form__field field">
									<p>Изображение</p>
									<input type="text" required name="image" placeholder="Введите url" id="image">
								</div>
								<div class="form__submit">
									<button type="submit">Добавить</button>
								</div>
								<div class="close">
									<svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM15.36 14.3C15.65 14.59 15.65 15.07 15.36 15.36C15.21 15.51 15.02 15.58 14.83 15.58C14.64 15.58 14.45 15.51 14.3 15.36L12 13.06L9.7 15.36C9.55 15.51 9.36 15.58 9.17 15.58C8.98 15.58 8.79 15.51 8.64 15.36C8.35 15.07 8.35 14.59 8.64 14.3L10.94 12L8.64 9.7C8.35 9.41 8.35 8.93 8.64 8.64C8.93 8.35 9.41 8.35 9.7 8.64L12 10.94L14.3 8.64C14.59 8.35 15.07 8.35 15.36 8.64C15.65 8.93 15.65 9.41 15.36 9.7L13.06 12L15.36 14.3Z" fill="#292D32"></path> </g></svg>
								</div>
							</form>
						</div>
					</div>
					<div class="container">
						<div class="table__add">
							<button class="add-product">Добавить новый продукт</button>
						</div>
						<div class="table__body">
							<ul class="table__column">
								<h2 class="table__title">ID</h2>
								<?php $productsData = mysqli_fetch_all($productsResult, MYSQLI_ASSOC);
								foreach ($productsData as $data) { ?>
									<li class="table__item"><?= $data['id'] ?></li>
								<?php } ?>
							</ul>
							<ul class="table__column">
								<h2 class="table__title">Название</h2>
								<?php foreach ($productsData as $data) { ?>
									<li class="table__item"><?= $data['name'] ?></li>
								<?php } ?>
							</ul>
							<ul class="table__column">
								<h2 class="table__title">Описание</h2>
								<?php foreach ($productsData as $data) { ?>
									<li class="table__item"><?= $data['description'] ?></li>
								<?php } ?>
							</ul>
							<ul class="table__column">
								<h2 class="table__title">Цена</h2>
								<?php foreach ($productsData as $data) { ?>
									<li class="table__item"><?= $data['price'] ?>.00 Р.</li>
								<?php } ?>
							</ul>
							<ul class="table__column">
								<h2 class="table__title">Изображение</h2>
								<?php foreach ($productsData as $data) { ?>
									<li class="table__item"><?= $data['image'] ?></li>
								<?php } ?>
							</ul>
							<ul class="table__column">
								<h2 class="table__title"></h2>
								<?php foreach ($productsData as $data) { ?>
									<div class="table__item item-delete">
										<form action="../php/product/delete.php" method="post">
											<input type="hidden" name="id" value="<?= $data['id'] ?>">
											<button class="table__delete">Удалить</button>
										</form>
									</div>
								<?php } ?>
							</ul>
							<ul class="table__column">
								<h2 class="table__title"></h2>
								<?php foreach ($productsData as $data) { ?>
									<div class="table__item item-edit">
										<form action="../php/product/edit.php" method="post">
											<input type="hidden" name="id" value="<?= $data['id'] ?>">
											<p class="table__edit edit-product">Редактировать</p>
											<div class="table__edit-modal modal">
												<div class="modal__content content">
													<div class="modal__form form">
														<h2 class="form__title">Редактирование</h2>
														<div class="form__field field">
															<p>Название</p>
															<input type="text" name="name" placeholder="Введите название">
														</div>
														<div class="form__field field">
															<p>Описание</p>
															<textarea type="text" required name="description" placeholder="Введите описание" id="name"></textarea>
														</div>
														<div class="form__field field">
															<p>Цена</p>
															<input type="text" name="price" placeholder="Введите цену">
														</div>
														<div class="form__field field">
															<p>Изображение</p>
															<input type="text" name="image" placeholder="Введите url">
														</div>
														<div class="form__submit">
															<button type="submit">Редактировать</button>
														</div>
														<div class="close-edit">
															<svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM15.36 14.3C15.65 14.59 15.65 15.07 15.36 15.36C15.21 15.51 15.02 15.58 14.83 15.58C14.64 15.58 14.45 15.51 14.3 15.36L12 13.06L9.7 15.36C9.55 15.51 9.36 15.58 9.17 15.58C8.98 15.58 8.79 15.51 8.64 15.36C8.35 15.07 8.35 14.59 8.64 14.3L10.94 12L8.64 9.7C8.35 9.41 8.35 8.93 8.64 8.64C8.93 8.35 9.41 8.35 9.7 8.64L12 10.94L14.3 8.64C14.59 8.35 15.07 8.35 15.36 8.64C15.65 8.93 15.65 9.41 15.36 9.7L13.06 12L15.36 14.3Z" fill="#292D32"></path> </g></svg>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								<?php } ?>
							</ul>
						</div>
					</div>
				</section>
			</main>
    </div>
	</body>
</html>

