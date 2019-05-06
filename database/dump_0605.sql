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

-- Дамп структуры для таблица diplom_voprosnik.answers
CREATE TABLE IF NOT EXISTS `answers` (
  `id_ans` int(11) NOT NULL,
  `id_v` int(11) NOT NULL,
  `ans` int(11) DEFAULT NULL,
  `yn_ans` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ans`),
  KEY `FK_answers_single_choice` (`id_v`),
  CONSTRAINT `FK_answers_multi_question` FOREIGN KEY (`id_v`) REFERENCES `multi_question` (`id_multi_quest`),
  CONSTRAINT `FK_answers_single_choice` FOREIGN KEY (`id_v`) REFERENCES `single_choice` (`id_singlech`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.answers: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.multi_question: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `multi_question` DISABLE KEYS */;
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
  `name_num_quest` int(11) DEFAULT NULL,
  `text_num_quest` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.short_question: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `short_question` DISABLE KEYS */;
INSERT INTO `short_question` (`id_sh_quest`, `name_quest`, `text_quest`, `sh_true_ans`, `id_obl`, `id_user`) VALUES
	(1, 'ÐÐ¾Ð²Ñ‹Ð¹ Ð²Ð¾Ð¿Ñ€Ð¾Ñ', ' Ð¢ÐµÐºÑÑ‚ Ð²Ð¾Ð¿Ñ€Ð¾ÑÐ° ', 'Ð¾Ñ‚Ð²ÐµÑ‚', NULL, NULL);
/*!40000 ALTER TABLE `short_question` ENABLE KEYS */;

-- Дамп структуры для таблица diplom_voprosnik.single_choice
CREATE TABLE IF NOT EXISTS `single_choice` (
  `id_singlech` int(11) NOT NULL AUTO_INCREMENT,
  `name_singlech_quest` int(11) NOT NULL DEFAULT 0,
  `text_singlech_quest` int(11) NOT NULL DEFAULT 0,
  `id_obl` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `id_ans` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_singlech`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom_voprosnik.single_choice: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `single_choice` DISABLE KEYS */;
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
