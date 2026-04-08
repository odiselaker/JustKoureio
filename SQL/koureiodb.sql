-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 08 2026 г., 20:41
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

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
  `about_ID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
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
  `calendar_ID` int(11) NOT NULL,
  `days` varchar(20) NOT NULL,
  `MorningHours_start` time DEFAULT NULL,
  `MorningHours_end` time DEFAULT NULL,
  `NightHours_start` time DEFAULT NULL,
  `NightHours_end` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `calendar`
--

INSERT INTO `calendar` (`calendar_ID`, `days`, `MorningHours_start`, `MorningHours_end`, `NightHours_start`, `NightHours_end`) VALUES
(1, 'THEFTERA', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(2, 'TRITI', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(3, 'TETARTI', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(4, 'PEMPTI', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(5, 'PARASKEVI', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(6, 'SAVVATO', '08:00:00', '12:00:00', '17:00:00', '19:00:00'),
(7, 'KIRIAKI', NULL, NULL, NULL, NULL);

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
  MODIFY `about_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `calendar`
--
ALTER TABLE `calendar`
  MODIFY `calendar_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
