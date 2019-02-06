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
-- Table `diplom`.`pred_obl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diplom`.`pred_obl` (
  `id_pred` INT NOT NULL,
  `name_obl` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_pred`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diplom`.`questions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diplom`.`questions` (
  `id_quest` INT NOT NULL,
  `question` TEXT(1000) NOT NULL,
  `pred_obl_id_pred` INT NOT NULL,
  PRIMARY KEY (`id_quest`),
  INDEX `fk_questions_pred_obl_idx` (`pred_obl_id_pred` ASC) VISIBLE,
  CONSTRAINT `fk_questions_pred_obl`
    FOREIGN KEY (`pred_obl_id_pred`)
    REFERENCES `diplom`.`pred_obl` (`id_pred`)
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
  INDEX `fk_users_questions1_idx` (`questions_id_quest` ASC) VISIBLE,
  CONSTRAINT `fk_users_questions1`
    FOREIGN KEY (`questions_id_quest`)
    REFERENCES `diplom`.`questions` (`id_quest`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diplom`.`answers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diplom`.`answers` (
  `text_ans` VARCHAR(70) NOT NULL,
  `questions_id_quest` INT NOT NULL,
  INDEX `fk_answers_questions1_idx` (`questions_id_quest` ASC) VISIBLE,
  CONSTRAINT `fk_answers_questions1`
    FOREIGN KEY (`questions_id_quest`)
    REFERENCES `diplom`.`questions` (`id_quest`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diplom`.`type_question`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diplom`.`type_question` (
  `id_type` INT NOT NULL,
  `name_type` VARCHAR(45) NOT NULL,
  `questions_id_quest` INT NOT NULL,
  PRIMARY KEY (`id_type`),
  INDEX `fk_type_question_questions1_idx` (`questions_id_quest` ASC) VISIBLE,
  CONSTRAINT `fk_type_question_questions1`
    FOREIGN KEY (`questions_id_quest`)
    REFERENCES `diplom`.`questions` (`id_quest`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
