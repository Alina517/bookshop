-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 02 2021 г., 19:33
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `books_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `purchase_history`
--

CREATE TABLE `purchase_history` (
  `purchase_id` int(10) UNSIGNED NOT NULL,
  `purchase_date` date NOT NULL,
  `book_name` text NOT NULL,
  `purchase_quant` int(5) UNSIGNED NOT NULL,
  `purchase_cost` decimal(10,0) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `purchase_history`
--

INSERT INTO `purchase_history` (`purchase_id`, `purchase_date`, `book_name`, `purchase_quant`, `purchase_cost`, `user_id`) VALUES
(1, '2021-02-22', '\"Преступление и наказание\"', 1, '200', 4),
(2, '2020-10-15', '\"Мастер и Маргарита\"', 1, '175', 4),
(3, '2021-01-20', '\"Война и мир\" 1-4 том', 1, '1100', 3),
(4, '2020-12-10', '\"Магия утра\"', 1, '500', 3),
(5, '2020-09-07', '\"MySQL 5.0. Библиотека программиста\"', 1, '250', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_login` text NOT NULL,
  `user_password` text NOT NULL,
  `user_name` text NOT NULL,
  `user_telephone` text NOT NULL,
  `user_country` text CHARACTER SET cp1251 NOT NULL,
  `user_region` text NOT NULL,
  `user_city` text NOT NULL,
  `user_address` text NOT NULL,
  `user_postal_code` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`, `user_name`, `user_telephone`, `user_country`, `user_region`, `user_city`, `user_address`, `user_postal_code`) VALUES
(3, 'vitya123@yandex.ru', '9db06bcff9248837f86d1a6bcf41c9e7', 'Виктор', '89176439431', 'Россия', '', 'Краснодар', '', NULL),
(4, 'alina.mish2001@yandex.ru', '14e1b600b1fd579f47433b88e8d85291', 'Alina', '89770656518', 'Россия', 'Волгоградская область', 'Волгоград', 'ул. Камчатская', 400123),
(5, 'marina1221@mail.ru', 'a02cc9a3fc5def5275b5ca22f0d8f414', 'Марина', '', '', '', '', '', NULL),
(6, 'david1917@gmail.com', 'ff92a240d11b05ebd392348c35f781b2', 'Давид', '', '', '', '', '', NULL),
(7, 'sasha765@yandex.ru', '9db06bcff9248837f86d1a6bcf41c9e7', 'Aleksandr', '', '', '', '', '', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `login` (`user_login`(50));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
