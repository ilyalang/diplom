-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema diplom
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema diplom
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `diplom` DEFAULT CHARACTER SET utf8 ;
USE `diplom` ;

-- -----------------------------------------------------
-- Table `diplom`.`answers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diplom`.`answers` (
  `id_answers` INT NOT NULL,
  `text_ans` VARCHAR(70) NOT NULL,
  `id_quest` INT NOT NULL,
  PRIMARY KEY (`id_answers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diplom`.`questions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diplom`.`questions` (
  `id_quest` INT NOT NULL,
  `question` TEXT(1000) NOT NULL,
  `id_user` INT NOT NULL,
  `answers_id_answers` INT NOT NULL,
  PRIMARY KEY (`id_quest`),
  INDEX `fk_questions_answers1_idx` (`answers_id_answers` ASC) VISIBLE,
  CONSTRAINT `fk_questions_answers1`
    FOREIGN KEY (`answers_id_answers`)
    REFERENCES `diplom`.`answers` (`id_answers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diplom`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diplom`.`users` (
  `id_user` INT NOT NULL,
  `name` VARCHAR(70) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `pather_name` VARCHAR(45) NOT NULL,
  `questions_id_quest` INT NOT NULL,
  PRIMARY KEY (`id_user`),
  INDEX `fk_users_questions_idx` (`questions_id_quest` ASC) VISIBLE,
  CONSTRAINT `fk_users_questions`
    FOREIGN KEY (`questions_id_quest`)
    REFERENCES `diplom`.`questions` (`id_quest`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diplom`.`pred_obl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diplom`.`pred_obl` (
  `id_pred` INT NOT NULL,
  `name_obl` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_pred`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
