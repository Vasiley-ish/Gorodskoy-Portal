-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 22 2022 г., 11:57
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
-- База данных: `portalvasiley`
--

-- --------------------------------------------------------

--
-- Структура таблицы `form_submits`
--

CREATE TABLE `form_submits` (
  `id` bigint UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `form_submits`
--

INSERT INTO `form_submits` (`id`, `login`, `title`, `category`, `discription`, `status`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Горох', 'Ямы блин', 'Ремонт дорог', 'Ямы блин на дороге ужас', 'Новая', 0x3735353532383837353035313137352e6a7067, '2022-01-22 04:30:57', '2022-01-22 04:30:57'),
(3, 'Горох', 'hhhhhhhhhhhhhhhhh', 'Ремонт дорог', 'hhhhhhhhhhhhhhhhhhhhh', 'Решена', 0x79616d792d6e612d6461726f67652e6a7067, '2022-01-22 04:49:27', '2022-01-22 04:49:27'),
(4, 'Горох', 'ssssssssssss', 'Ремонт дорог', 'ssssssssssssssssssssssssssss', 'Отклонена', 0x3735353532383837353035313137352e6a7067, '2022-01-22 04:49:44', '2022-01-22 04:49:44');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `form_submits`
--
ALTER TABLE `form_submits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `form_submits`
--
ALTER TABLE `form_submits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
