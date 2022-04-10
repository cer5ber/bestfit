-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 30 2022 г., 21:20
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sport`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `price`, `brand`, `description`, `category`) VALUES
(3, 'crosovki.png', 'Кросовок', '1000', 'Nike', 'Кросовок', '1'),
(4, 'crosovki.png', 'Кросовок', '123', 'Nike', '123', '1'),
(5, 'crosovki.png', 'Гироскутер', '321', 'Nike', 'ГИРОСКУТЕ!!!', '1'),
(6, 'crosovki.png', 'Прикол', '1000', 'Nike', 'Прикольчик', '1'),
(7, 'crosovki.png', 'Артём', '1500', 'Nike', 'Артём Избеков', '1'),
(8, 'crosovki.png', 'Приколяка', '229', 'Nike', '228)))', '1'),
(9, 'crosovki.png', 'dead inside', '993', 'Nike', '1000-7?', '1'),
(11, 'crosovki.png', 'AAAAAAAAAA', '1234', 'Nike', 'aaaa', '1'),
(12, 'crosovki.png', 'Велосипед', '123', 'Nike', '321', '2'),
(13, 'crosovki.png', 'Туризм', '1234', 'Nike', 'Туризи', '3'),
(14, 'crosovki.png', 'Плаванье', '1234', 'Nike', 'Плаванье', '4'),
(15, 'crosovki.png', 'Бег', '100', 'Nike', '321', '5');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `role` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pswd`, `name`, `surname`, `gender`, `role`) VALUES
(4, 'admin@admin', '123', 'Artem', 'Izbekov', 'm', '2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
