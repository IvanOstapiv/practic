-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 13 2022 г., 19:17
-- Версия сервера: 10.5.11-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `veterinary_clinic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `animals`
--

CREATE TABLE `animals` (
  `animalID` int(10) UNSIGNED NOT NULL,
  `animal_species` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breed` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `animal_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exterior_color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` enum('Ч','Ж') COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `clinic`
--

CREATE TABLE `clinic` (
  `clinicID` int(50) UNSIGNED NOT NULL,
  `name_clinic` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_house` int(50) NOT NULL,
  `email` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clinic`
--

INSERT INTO `clinic` (`clinicID`, `name_clinic`, `city`, `street`, `number_phone`, `number_house`, `email`) VALUES
(1, 'Мурчик', 'Чернівці', 'Головна', '+380966552343', 9, 'murchuk221@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `doctors`
--

CREATE TABLE `doctors` (
  `doctorID` int(10) UNSIGNED NOT NULL,
  `specialization` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `employeeID` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_clinic` int(11) NOT NULL,
  `number_phone` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`employeeID`, `name`, `subname`, `surname`, `age`, `position`, `city`, `street`, `number_clinic`, `number_phone`, `email`) VALUES
(1, 'Олександр', 'Бензар', 'Олександрович', 19, 'Адмін', 'Чернівці', 'Бульвар', 9, '+380992910566', 'benzaroo@gmai.com'),
(2, 'Марін', 'Костик', 'Валентинович', 18, 'Огляд', 'Чернівці', 'Головна', 9, '+380982345367', 'dbfs@ukr.net'),
(3, 'Петро', 'Штефуник', 'Павлович', 18, 'Огляд', 'Чернівці', 'Руська', 9, '+380982362537', 'dgansq@ukr.net');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `userID` int(255) UNSIGNED NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`userID`, `login`, `email`, `password`, `role`) VALUES
(1, 'Ostapiv', 'ostapiv43@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(26, 'Олександ', 'alex@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(27, 'login', 'fdvadba@vsdba', '202cb962ac59075b964b07152d234b70', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `visit`
--

CREATE TABLE `visit` (
  `visitID` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason_for_visit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messageText` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spec_an` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_an` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `visit`
--

INSERT INTO `visit` (`visitID`, `name`, `surname`, `reason_for_visit`, `number_phone`, `messageText`, `acc`, `spec_an`, `name_an`) VALUES
(1, 'Іван', 'Дмитрович', 'Огляд', '+380982362537', 'Немає', 'Ostapiv', 'Кіт ', 'Пушик'),
(38, 'Марін', 'Миколайович', 'Вакцинація', '0983245531', 'Немає', 'NULL', 'Собака', 'Барсік');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animalID`);

--
-- Индексы таблицы `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`clinicID`),
  ADD KEY `number_clinic_em` (`number_house`);

--
-- Индексы таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctorID`),
  ADD KEY `specialization_visit` (`specialization`);

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `number_clinic_em` (`number_clinic`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Индексы таблицы `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`visitID`),
  ADD KEY `spec` (`reason_for_visit`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `animals`
--
ALTER TABLE `animals`
  MODIFY `animalID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `clinic`
--
ALTER TABLE `clinic`
  MODIFY `clinicID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctorID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `employeeID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `visit`
--
ALTER TABLE `visit`
  MODIFY `visitID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `visit_owner` FOREIGN KEY (`animalID`) REFERENCES `visit` (`visitID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_emp` FOREIGN KEY (`doctorID`) REFERENCES `employees` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `visit_doctor` FOREIGN KEY (`specialization`) REFERENCES `visit` (`reason_for_visit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `number_clinic_em` FOREIGN KEY (`number_clinic`) REFERENCES `clinic` (`number_house`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
