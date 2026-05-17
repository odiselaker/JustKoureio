-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Хост: database
-- Время создания: Май 17 2026 г., 10:52
-- Версия сервера: 8.0.46
-- Версия PHP: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `koureiodb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `about_ID` int NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`about_ID`, `title`, `content`) VALUES
(1, '', ''),
(5, 'hello', 'welcomneeeeeeee'),
(6, 'hekloooo', 'ti kaneis pos eisai'),
(7, 'HELLO', 'welcome to JustKoureio!');

-- --------------------------------------------------------

--
-- Структура таблицы `calendar`
--

CREATE TABLE `calendar` (
  `calendar_ID` int NOT NULL,
  `days` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `MorningHours_start` time DEFAULT NULL,
  `MorningHours_end` time DEFAULT NULL,
  `NightHours_start` time DEFAULT NULL,
  `NightHours_end` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `calendar`
--

INSERT INTO `calendar` (`calendar_ID`, `days`, `MorningHours_start`, `MorningHours_end`, `NightHours_start`, `NightHours_end`) VALUES
(1, 'Monday', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(2, 'Tuesday', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(3, 'Wednesday', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(4, 'Thursday', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(5, 'Friday', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(6, 'Saturday', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(7, 'Sunday', NULL, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_ID`);

--
-- Индексы таблицы `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`calendar_ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `about_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `calendar`
--
ALTER TABLE `calendar`
  MODIFY `calendar_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
