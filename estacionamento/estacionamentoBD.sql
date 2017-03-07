-- MySQL Script generated by MySQL Workbench
-- 03/07/17 12:44:59
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema estacionamento
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `estacionamento` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `estacionamento` ;

-- -----------------------------------------------------
-- Table `estacionamento`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estacionamento`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(20) NOT NULL,
  `Telefone` VARCHAR(45) NULL,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estacionamento`.`carro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estacionamento`.`carro` (
  `idcarro` INT NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(45) NOT NULL,
  `modelo` VARCHAR(45) NULL,
  `ano` INT NULL,
  `chassi` VARCHAR(45) NOT NULL,
  `placa` VARCHAR(45) NULL,
  PRIMARY KEY (`idcarro`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estacionamento`.`Funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estacionamento`.`Funcionario` (
  `idFuncionario` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NULL,
  `Login` VARCHAR(45) NULL,
  `Senha` VARCHAR(100) NULL,
  PRIMARY KEY (`idFuncionario`),
  UNIQUE INDEX `Login_UNIQUE` (`Login` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estacionamento`.`locacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `estacionamento`.`locacao` (
  `idlocacao` INT NOT NULL AUTO_INCREMENT,
  `idcliente` INT NOT NULL,
  `idcarro` INT NOT NULL,
  `entrada` DATETIME NOT NULL,
  `saida` DATETIME NOT NULL,
  `valor` DOUBLE NULL,
  `idFuncionario` INT NOT NULL,
  `contVaga` INT NULL,
  PRIMARY KEY (`idlocacao`),
  INDEX `fk_locacao_cliente_idx` (`idcliente` ASC),
  INDEX `fk_locacao_carro1_idx` (`idcarro` ASC),
  INDEX `fk_locacao_Funcionario1_idx` (`idFuncionario` ASC),
  CONSTRAINT `fk_locacao_cliente`
    FOREIGN KEY (`idcliente`)
    REFERENCES `estacionamento`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_locacao_carro1`
    FOREIGN KEY (`idcarro`)
    REFERENCES `estacionamento`.`carro` (`idcarro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_locacao_Funcionario1`
    FOREIGN KEY (`idFuncionario`)
    REFERENCES `estacionamento`.`Funcionario` (`idFuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;