-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.12-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных diplom_voprosnik
CREATE DATABASE IF NOT EXISTS `diplom_voprosnik` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `diplom_voprosnik`;

-- Дамп структуры для таблица diplom_voprosnik.answers_multi
CREATE TABLE IF NOT EXISTS `answers_multi` (
  `id_ans_multi` int(11) NOT NULL AUTO_INCREMENT,
  `id_v_multi` int(11) NOT NULL,
  `ans_multi` varchar(100) NOT NULL,
  `yn_multi` varchar(3) NOT NULL,
  PRIMARY KEY (`id_ans_multi`),
  KEY `FK_answers_multi_multi_question` (`id_v_multi`),
  CONSTRAINT `FK_answers_multi_multi_question` FOREIGN KEY (`id_v_multi`) REFERENCES `multi_question` (`id_multi_quest`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.answers_multi: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `answers_multi` DISABLE KEYS */;
INSERT INTO `answers_multi` (`id_ans_multi`, `id_v_multi`, `ans_multi`, `yn_multi`) VALUES
	(14, 14, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹', 'YES'),
	(15, 14, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ ', 'YES'),
	(16, 14, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ ', 'YES'),
	(17, 14, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ ', 'YES'),
	(18, 15, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ 1', 'YES'),
	(19, 15, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ 2', 'YES'),
	(20, 15, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ 3', 'YES'),
	(21, 15, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 1', 'NO'),
	(22, 15, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 2', 'NO'),
	(23, 15, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 3', 'NO'),
	(24, 16, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹', 'YES'),
	(25, 16, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ ', 'YES'),
	(26, 16, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ ', 'YES'),
	(27, 16, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ ', 'YES'),
	(28, 16, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ ', 'NO');
/*!40000 ALTER TABLE `answers_multi` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.answers_single
CREATE TABLE IF NOT EXISTS `answers_single` (
  `id_ans` int(11) NOT NULL AUTO_INCREMENT,
  `id_v` int(11) NOT NULL,
  `ans` varchar(50) DEFAULT NULL,
  `yn_ans` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_ans`),
  KEY `FK_answers_single_choice` (`id_v`),
  CONSTRAINT `FK_answers_single_choice` FOREIGN KEY (`id_v`) REFERENCES `single_choice` (`id_singlech`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.answers_single: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `answers_single` DISABLE KEYS */;
INSERT INTO `answers_single` (`id_ans`, `id_v`, `ans`, `yn_ans`) VALUES
	(4, 1, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹', 'YES'),
	(5, 1, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹', 'NO'),
	(6, 1, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹', 'YES'),
	(7, 1, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 1', 'NO'),
	(8, 1, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 2', 'NO'),
	(9, 1, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 3', 'NO'),
	(10, 93, 'Ð¼ÑƒÑ…Ð¾Ð¼Ð¾Ñ€', 'YES'),
	(11, 93, 'Ð»Ð¸ÑÐ¸Ñ‡ÐºÐ°', 'NO'),
	(22, 100, 'Ð¼ÑƒÑ…Ð¾Ð¼Ð¾Ñ€', 'YES'),
	(23, 100, 'Ð»Ð¸ÑÐ¸Ñ‡ÐºÐ°', 'NO'),
	(24, 101, 'Ð¼ÑƒÑ…Ð¾Ð¼Ð¾Ñ€', 'YES'),
	(25, 101, 'Ð»Ð¸ÑÐ¸Ñ‡ÐºÐ°', 'NO'),
	(32, 107, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 1', 'NO'),
	(33, 107, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 2', 'NO'),
	(34, 108, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ Ð¾Ñ‚Ð²ÐµÑ‚', 'YES'),
	(35, 108, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 1', 'NO'),
	(36, 108, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 2', 'NO'),
	(37, 109, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ Ð¾Ñ‚Ð²ÐµÑ‚', 'YES'),
	(38, 109, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 1', 'NO'),
	(39, 109, 'Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ 2', 'NO'),
	(40, 113, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹', 'NO'),
	(41, 113, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ ', 'NO'),
	(42, 113, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ ', 'NO'),
	(43, 113, 'Ð²ÐµÑ€Ð½Ñ‹Ð¹ ', 'NO');
/*!40000 ALTER TABLE `answers_single` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.city
CREATE TABLE IF NOT EXISTS `city` (
  `id_city` int(11) NOT NULL AUTO_INCREMENT,
  `name_city` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_city`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.city: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`id_city`, `name_city`) VALUES
	(1, 'Санкт-Петербург'),
	(2, 'Москва');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.comparison
CREATE TABLE IF NOT EXISTS `comparison` (
  `id_com` int(11) NOT NULL AUTO_INCREMENT,
  `text_quest_com` varchar(200) DEFAULT '0',
  `name_quest_com` longtext DEFAULT '0',
  `id_user` int(11) DEFAULT 0,
  `id_obl` int(11) DEFAULT 0,
  PRIMARY KEY (`id_com`),
  KEY `FK_comparison_users` (`id_user`),
  KEY `FK_comparison_pred_obl` (`id_obl`),
  CONSTRAINT `FK_comparison_pred_obl` FOREIGN KEY (`id_obl`) REFERENCES `pred_obl` (`id_obl`),
  CONSTRAINT `FK_comparison_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.comparison: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `comparison` DISABLE KEYS */;
/*!40000 ALTER TABLE `comparison` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.multi_question
CREATE TABLE IF NOT EXISTS `multi_question` (
  `id_multi_quest` int(11) NOT NULL AUTO_INCREMENT,
  `name_multi_quest` varchar(100) DEFAULT NULL,
  `text_multi_quest` longtext DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_obl` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_multi_quest`),
  KEY `FK_multi_question_users` (`id_user`),
  KEY `FK_multi_question_pred_obl` (`id_obl`),
  CONSTRAINT `FK_multi_question_pred_obl` FOREIGN KEY (`id_obl`) REFERENCES `pred_obl` (`id_obl`),
  CONSTRAINT `FK_multi_question_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.multi_question: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `multi_question` DISABLE KEYS */;
INSERT INTO `multi_question` (`id_multi_quest`, `name_multi_quest`, `text_multi_quest`, `id_user`, `id_obl`) VALUES
	(1, 'Ð½Ð°Ð²Ð·Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(2, 'Ð½Ð°Ð²Ð·Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(3, 'Ð½Ð°Ð²Ð·Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(4, 'Ð½Ð°Ð²Ð·Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(5, 'Ð½Ð°Ð²Ð·Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(6, 'Ð½Ð°Ð²Ð·Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(7, 'Ð½Ð°Ð²Ð·Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(8, 'Ð½Ð°Ð²Ð·Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(9, 'Ð½Ð°Ð²Ð·Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(10, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(11, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(12, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(13, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(14, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚ ', 1, 1),
	(15, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ð²Ð¾Ð¿Ñ€Ð¾Ñ ', 1, 4),
	(16, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚ ', 1, 1);
/*!40000 ALTER TABLE `multi_question` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.name_uch
CREATE TABLE IF NOT EXISTS `name_uch` (
  `id_uch` int(11) NOT NULL AUTO_INCREMENT,
  `name_uch` varchar(100) NOT NULL,
  PRIMARY KEY (`id_uch`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.name_uch: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `name_uch` DISABLE KEYS */;
INSERT INTO `name_uch` (`id_uch`, `name_uch`) VALUES
	(1, 'Петровский колледж'),
	(2, 'Политех');
/*!40000 ALTER TABLE `name_uch` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.numeric_question
CREATE TABLE IF NOT EXISTS `numeric_question` (
  `id_num_quest` int(11) NOT NULL AUTO_INCREMENT,
  `name_num_quest` varchar(100) DEFAULT NULL,
  `text_num_quest` longtext DEFAULT NULL,
  `num_true_ans` int(11) DEFAULT NULL,
  `id_obl` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_num_quest`),
  KEY `FK_numeric_question_pred_obl` (`id_obl`),
  KEY `FK_numeric_question_users` (`id_user`),
  CONSTRAINT `FK_numeric_question_pred_obl` FOREIGN KEY (`id_obl`) REFERENCES `pred_obl` (`id_obl`),
  CONSTRAINT `FK_numeric_question_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.numeric_question: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `numeric_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `numeric_question` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.pred_obl
CREATE TABLE IF NOT EXISTS `pred_obl` (
  `id_obl` int(11) NOT NULL AUTO_INCREMENT,
  `name_obl` varchar(50) NOT NULL,
  PRIMARY KEY (`id_obl`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.pred_obl: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `pred_obl` DISABLE KEYS */;
INSERT INTO `pred_obl` (`id_obl`, `name_obl`) VALUES
	(1, 'Русский язык'),
	(2, 'Математика'),
	(3, 'Литература'),
	(4, 'Химия'),
	(5, 'Физика');
/*!40000 ALTER TABLE `pred_obl` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.short_question
CREATE TABLE IF NOT EXISTS `short_question` (
  `id_sh_quest` int(11) NOT NULL AUTO_INCREMENT,
  `name_quest` varchar(100) DEFAULT NULL,
  `text_quest` longtext DEFAULT NULL,
  `sh_true_ans` varchar(20) DEFAULT NULL,
  `id_obl` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sh_quest`),
  KEY `FK_short_question_users` (`id_user`),
  KEY `FK_short_question_pred_obl` (`id_obl`),
  CONSTRAINT `FK_short_question_pred_obl` FOREIGN KEY (`id_obl`) REFERENCES `pred_obl` (`id_obl`),
  CONSTRAINT `FK_short_question_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.short_question: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `short_question` DISABLE KEYS */;
INSERT INTO `short_question` (`id_sh_quest`, `name_quest`, `text_quest`, `sh_true_ans`, `id_obl`, `id_user`) VALUES
	(1, 'Имя', 'Текст', 'ответ', NULL, NULL);
/*!40000 ALTER TABLE `short_question` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.single_choice
CREATE TABLE IF NOT EXISTS `single_choice` (
  `id_singlech` int(11) NOT NULL AUTO_INCREMENT,
  `name_sch_quest` varchar(100) NOT NULL DEFAULT '0',
  `text_sch_quest` longtext NOT NULL DEFAULT '0',
  `id_obl` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_singlech`),
  KEY `FK_single_choice_pred_obl` (`id_obl`),
  KEY `FK_single_choice_users` (`id_user`),
  CONSTRAINT `FK_single_choice_pred_obl` FOREIGN KEY (`id_obl`) REFERENCES `pred_obl` (`id_obl`),
  CONSTRAINT `FK_single_choice_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.single_choice: ~18 rows (приблизительно)
/*!40000 ALTER TABLE `single_choice` DISABLE KEYS */;
INSERT INTO `single_choice` (`id_singlech`, `name_sch_quest`, `text_sch_quest`, `id_obl`, `id_user`) VALUES
	(1, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(78, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(79, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(80, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(81, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(82, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(83, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(84, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(85, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(86, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(87, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(88, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(89, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(90, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(91, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(92, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(93, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(94, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(95, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(96, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(97, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(98, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(99, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(100, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(101, 'Ð³Ñ€Ð¸Ð±', 'ÐºÑ€Ð°ÑÐ½Ñ‹Ð¹ ', 1, 1),
	(102, 'navz', 'text ', 1, 1),
	(103, 'navz', 'text ', 1, 1),
	(104, 'navz', 'text ', 1, 1),
	(105, 'navz', 'text ', 1, 1),
	(106, 'navz', 'text ', 1, 1),
	(107, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ Ð²Ð¾Ð¿Ñ€Ð¾ÑÐ°', 'Ñ‚ÐµÐºÑÑ‚ Ð²Ð¾Ð¿Ñ€Ð¾ÑÐ° ', 2, 1),
	(108, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ Ð²Ð¾Ð¿Ñ€Ð¾ÑÐ°', 'Ñ‚ÐµÐºÑÑ‚ Ð²Ð¾Ð¿Ñ€Ð¾ÑÐ° ', 2, 1),
	(109, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ Ð²Ð¾Ð¿Ñ€Ð¾ÑÐ°', 'Ñ‚ÐµÐºÑÑ‚ Ð²Ð¾Ð¿Ñ€Ð¾ÑÐ° ', 2, 1),
	(110, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(111, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(112, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', ' Ñ‚ÐµÐºÑÑ‚', 1, 1),
	(113, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚ ', 1, 1),
	(114, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚ ', 1, 1),
	(115, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚ ', 1, 1),
	(116, 'Ð½Ð°Ð·Ð²Ð°Ð½Ð¸Ðµ', 'Ñ‚ÐµÐºÑÑ‚ ', 1, 1);
/*!40000 ALTER TABLE `single_choice` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `FIO` varchar(70) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `login` varchar(15) DEFAULT '0',
  `password` varchar(30) DEFAULT '0',
  `group_id` tinyint(1) NOT NULL DEFAULT 0,
  `id_uch` int(11) DEFAULT NULL,
  `id_city` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `FK_users_name_uch` (`id_uch`),
  KEY `FK_users_city` (`id_city`),
  CONSTRAINT `FK_users_city` FOREIGN KEY (`id_city`) REFERENCES `city` (`id_city`),
  CONSTRAINT `FK_users_name_uch` FOREIGN KEY (`id_uch`) REFERENCES `name_uch` (`id_uch`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.users: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `FIO`, `email`, `login`, `password`, `group_id`, `id_uch`, `id_city`) VALUES
	(1, 'Бабичев Илья Андреевич', 'ilyalangwrk@gmail.com', 'ilyalang', 'Pjkjnjdf1', 1, 1, 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.yes_or_no
CREATE TABLE IF NOT EXISTS `yes_or_no` (
  `id_yon` int(11) NOT NULL AUTO_INCREMENT,
  `name_yon_quest` varchar(100) NOT NULL DEFAULT '0',
  `text_yon_quest` longtext NOT NULL DEFAULT '0',
  `yon_true_ans` varchar(3) NOT NULL DEFAULT '0',
  `id_user` int(11) DEFAULT NULL,
  `id_obl` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_yon`),
  KEY `FK_yes_or_no_users` (`id_user`),
  KEY `FK_yes_or_no_pred_obl` (`id_obl`),
  CONSTRAINT `FK_yes_or_no_pred_obl` FOREIGN KEY (`id_obl`) REFERENCES `pred_obl` (`id_obl`),
  CONSTRAINT `FK_yes_or_no_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.yes_or_no: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `yes_or_no` DISABLE KEYS */;
/*!40000 ALTER TABLE `yes_or_no` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
