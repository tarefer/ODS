-- MySQL Script generated by MySQL Workbench
-- 07/12/16 08:34:47
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ODS_DB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ODS_DB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ODS_DB` DEFAULT CHARACTER SET utf8 ;
USE `ODS_DB` ;

-- -----------------------------------------------------
-- Table `ODS_DB`.`profile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ODS_DB`.`profile` (
  `id_profile` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id_profile`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ODS_DB`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ODS_DB`.`user` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `lastname` VARCHAR(45) NULL,
  `birth` DATE NULL,
  `email` VARCHAR(45) NULL,
  `user` VARCHAR(45) NULL,
  `password` VARCHAR(15) NULL,
  `status` VARCHAR(25) NULL DEFAULT 1,
  `profile_id_profile` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_user`),
  INDEX `fk_user_profile1_idx` (`profile_id_profile` ASC),
  CONSTRAINT `fk_user_profile1`
    FOREIGN KEY (`profile_id_profile`)
    REFERENCES `ODS_DB`.`profile` (`id_profile`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ODS_DB`.`country`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ODS_DB`.`country` (
  `id_country` INT NOT NULL,
  `char` CHAR(2) NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id_country`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ODS_DB`.`donation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ODS_DB`.`donation` (
  `id_donation` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NULL,
  `amount` DECIMAL NULL,
  `institution` VARCHAR(45) NULL,
  `country_id_country` INT NOT NULL,
  `user_id_user` INT NOT NULL,
  `user_profile_id_profile` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_donation`),
  INDEX `fk_donation_country1_idx` (`country_id_country` ASC),
  INDEX `fk_donation_user1_idx` (`user_id_user` ASC, `user_profile_id_profile` ASC),
  CONSTRAINT `fk_donation_country1`
    FOREIGN KEY (`country_id_country`)
    REFERENCES `ODS_DB`.`country` (`id_country`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_donation_user1`
    FOREIGN KEY (`user_id_user`)
    REFERENCES `ODS_DB`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;