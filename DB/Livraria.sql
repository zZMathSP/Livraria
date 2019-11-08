SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `son_livraria` DEFAULT CHARACTER SET utf8 ;
USE `son_livraria` ;

-- -----------------------------------------------------
-- Table `son_livraria`.`categorias`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `son_livraria`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `son_livraria`.`produtos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `son_livraria`.`produtos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `categoria_id` INT NOT NULL ,
  `nome` VARCHAR(45) NOT NULL ,
  `autor` VARCHAR(45) NULL ,
  `editora` VARCHAR(45) NULL ,
  `descricao` TEXT NULL ,
  `valor` DOUBLE NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_produtos_categorias` (`categoria_id` ASC) ,
  CONSTRAINT `fk_produtos_categorias`
    FOREIGN KEY (`categoria_id` )
    REFERENCES `son_livraria`.`categorias` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `son_livraria`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `son_livraria`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  `senha` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `son_livraria`.`pedidos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `son_livraria`.`pedidos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `produto_id` INT NOT NULL ,
  `valor` DOUBLE NOT NULL ,
  `nome` VARCHAR(100) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  `status` VARCHAR(45) NULL ,
  `transacao` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_pedidos_produtos1`
    FOREIGN KEY (`produto_id` )
    REFERENCES `son_livraria`.`produtos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
