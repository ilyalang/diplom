-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 22 2019 г., 09:48
-- Версия сервера: 10.3.12-MariaDB
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `voprosnik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pred_obl`
--

CREATE TABLE `pred_obl` (
  `id_obl` int(11) NOT NULL,
  `name_obl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pred_obl`
--

INSERT INTO `pred_obl` (`id_obl`, `name_obl`) VALUES
(1, 'Физическая сила'),
(2, 'Философия'),
(3, 'Математика'),
(4, 'Русский'),
(7, 'Биология');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id_quest` int(11) NOT NULL,
  `name_quest` text NOT NULL,
  `text_quest` text NOT NULL,
  `id_obl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id_quest`, `name_quest`, `text_quest`, `id_obl`) VALUES
(1, 'Введите верное название философского направления', 'Термин для обозначения широкого спектра философских концепций и мировоззрений, в основе которых лежит утверждение о первичности идеи по отношению к материи в сфере бытия', 7),
(2, 'Илья', 'Красный гриб с белыми точками', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `success_ans`
--

CREATE TABLE `success_ans` (
  `id_sa` int(11) NOT NULL,
  `text_sa` text NOT NULL,
  `id_quest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `success_ans`
--

INSERT INTO `success_ans` (`id_sa`, `text_sa`, `id_quest`) VALUES
(1, 'Идеализм', 1),
(25, 'Мухомор', 1),
(26, 'Мухомор', NULL),
(27, 'Мухомор', NULL),
(28, 'Мухомор', NULL),
(29, 'Мухомор', NULL),
(30, 'Мухомор', NULL),
(31, 'Мухомор', NULL),
(32, 'Мухомор', NULL),
(33, '1', 1),
(34, '1', 1),
(35, 'ans3', 1),
(36, 'on', 1),
(37, 'on', 1),
(38, 'on', 1),
(39, 'on', 1),
(40, 'on', 1),
(41, 'on', 1),
(42, 'Спанч-боб', NULL),
(43, 'Спанч-боб', NULL),
(44, 'Спанч-боб', NULL),
(45, 'Спанч-боб', NULL),
(46, 'Мухомор', NULL),
(47, '1111111', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `pather_name` varchar(25) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `first_name`, `last_name`, `pather_name`, `group_id`) VALUES
(1, 'admin', 'Pjkjnjdf1', 'Илья', 'Бабичев', 'Андреевич', 1),
(2, 'u.zolotova', '123321055', 'Ульяна', 'Золотова', 'Юрьевна', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `wrong_ans`
--

CREATE TABLE `wrong_ans` (
  `id_wa` int(11) NOT NULL,
  `text_wa` text NOT NULL,
  `id_quest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wrong_ans`
--

INSERT INTO `wrong_ans` (`id_wa`, `text_wa`, `id_quest`) VALUES
(1, 'Неверный ответ 3', NULL),
(2, 'Неверный ответ 2', NULL),
(3, 'Неверный ответ 2', NULL),
(4, 'Неверный ответ 3 ', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pred_obl`
--
ALTER TABLE `pred_obl`
  ADD PRIMARY KEY (`id_obl`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_quest`),
  ADD KEY `FK_questions_pred_obl` (`id_obl`);

--
-- Индексы таблицы `success_ans`
--
ALTER TABLE `success_ans`
  ADD PRIMARY KEY (`id_sa`),
  ADD KEY `FK_success_ans_questions` (`id_quest`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `wrong_ans`
--
ALTER TABLE `wrong_ans`
  ADD PRIMARY KEY (`id_wa`),
  ADD KEY `FK_wrong_ans_questions` (`id_quest`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pred_obl`
--
ALTER TABLE `pred_obl`
  MODIFY `id_obl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id_quest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `success_ans`
--
ALTER TABLE `success_ans`
  MODIFY `id_sa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `wrong_ans`
--
ALTER TABLE `wrong_ans`
  MODIFY `id_wa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `FK_questions_pred_obl` FOREIGN KEY (`id_obl`) REFERENCES `pred_obl` (`id_obl`);

--
-- Ограничения внешнего ключа таблицы `success_ans`
--
ALTER TABLE `success_ans`
  ADD CONSTRAINT `FK_success_ans_questions` FOREIGN KEY (`id_quest`) REFERENCES `questions` (`id_quest`);

--
-- Ограничения внешнего ключа таблицы `wrong_ans`
--
ALTER TABLE `wrong_ans`
  ADD CONSTRAINT `FK_wrong_ans_questions` FOREIGN KEY (`id_quest`) REFERENCES `questions` (`id_quest`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
