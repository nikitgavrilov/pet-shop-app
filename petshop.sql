-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2024 г., 00:51
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `petshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `image` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `inCart` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `inCart`) VALUES
(1, 'Beyond01', 599, '../assets/img/products/beyond01.png', 0),
(2, 'Beyond02', 599, '../assets/img/products/beyond02.png', 0),
(3, 'Beyond03', 599, '../assets/img/products/beyond03.png', 0),
(4, 'Cummax01', 599, '../assets/img/products/cummax01.png', 0),
(5, 'Cummax02', 599, '../assets/img/products/cummax02.png', 0),
(6, 'Cummax03', 599, '../assets/img/products/cummax03.png', 0),
(7, 'Nordic of nature', 599, '../assets/img/products/nordic01.png', 0),
(8, 'Nordic of nature', 599, '../assets/img/products/nordic02.png', 0),
(9, 'Nordic of nature', 599, '../assets/img/products/nordic03.png', 0),
(10, 'catfood01', 599, '../assets/img/products/catfood01.png', 0),
(11, 'catfood02', 599, '../assets/img/products/catfood02.png', 0),
(12, 'catfood03', 599, '../assets/img/products/catfood03.png', 0),
(16, 'test', 900, 'url', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`id`, `description`, `name`, `profession`, `avatar`) VALUES
(1, 'Моя кошка обожает этот корм! Она с удовольствием его ест и ее шерсть стала блестящей и густой. Спасибо производителям за отличное качество!', 'Александр Дрыгин', 'Бизнесмен', 'main/img/testimonials/man01.jpg'),
(2, 'У моего кролика были проблемы с пищеварением, пока я не начала давать ему этот корм. Теперь он чувствует себя намного лучше, его кожа и шерсть выглядят здорово. Рекомендую!', 'Андрей Ложкин', 'Frontend developer', 'main/img/testimonials/man01.jpg'),
(3, 'Мои попугаи обожают эту птичью еду! Они едят ее с аппетитом и у них хорошее настроение. Спасибо за такой вкусный и полезный продукт!', 'Илья Корнилов', 'UI/UX Designer', 'main/img/testimonials/man01.jpg'),
(4, 'Мои рыбки просто обожают этот корм! Они стали более активными и яркими, а их здоровье улучшилось. Очень довольна результатом, рекомендую всем владельцам аквариумов.', 'Евлампий Добров', 'Backend developer', 'main/img/testimonials/man01.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(7, 'admin', 'admin@gmail.com', '$2y$10$A62H3iWAeS4kNyeMhLGV/uOl.PeR0D4p1/d9Quaot9vm1ZfGkJG/u'),
(8, 'login', 'login@gmail.com', '$2y$10$hJ5M77Zh5vXwGVDEvtBm3uurPbKceLuMMOpsnLQjcO436bFoRmLJW');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
