CREATE SCHEMA IF NOT EXISTS `projeto_final` DEFAULT CHARACTER SET latin1;
USE `projeto_final`;

-- Tabela `projeto_final`.`usuario`
CREATE TABLE IF NOT EXISTS `projeto_final`.`usuario` (
    `idusuario` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(150) NULL DEFAULT NULL,
    `cpf` VARCHAR(11) NOT NULL,
    `dataNascimento` DATE NULL DEFAULT NULL,
    `email` VARCHAR(150) NULL DEFAULT NULL,
    `senha` VARCHAR(45) NULL DEFAULT NULL,
    PRIMARY KEY (`idusuario`),
    UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC)
) ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

-- Tabela `projeto_final`.`formacaoAcademica`
CREATE TABLE IF NOT EXISTS `projeto_final`.`formacaoAcademica` (
    `idformacaoAcademica` INT(11) NOT NULL AUTO_INCREMENT,
    `idusuario` INT(11) NOT NULL,
    `inicio` DATE NOT NULL,
    `fim` DATE NULL DEFAULT NULL,
    `descricao` VARCHAR(150) NULL DEFAULT NULL,
    PRIMARY KEY (`idformacaoAcademica`),
    INDEX `IDUSUARIO_idx` (`idusuario` ASC),
    CONSTRAINT `IDUSUARIO`
        FOREIGN KEY (`idusuario`)
        REFERENCES `projeto_final`.`usuario` (`idusuario`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION
) ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

-- Tabela `projeto_final`.`experienciaprofissional`
CREATE TABLE projeto_final.experienciaprofissional (
    idexperienciaprofissional INT NOT NULL AUTO_INCREMENT,
    idusuario INT NOT NULL,
    inicio DATE NULL,
    fim DATE NULL,
    empresa VARCHAR(45) NULL,
    descricao VARCHAR(45) NULL,
    PRIMARY KEY (idexperienciaprofissional),
    INDEX idUser_idx (idusuario ASC),
    CONSTRAINT idUser
        FOREIGN KEY (idusuario)
        REFERENCES projeto_final.usuario (idusuario)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION
);

-- Tabela `projeto_final`.`outrasformacoes`
CREATE TABLE IF NOT EXISTS `projeto_final`.`outrasformacoes` (
  `idoutrasformacoes` INT(11) NOT NULL AUTO_INCREMENT,
  `idusuario` INT(11) NOT NULL,
  `inicio` DATE NULL DEFAULT NULL,
  `fim` DATE NULL DEFAULT NULL,
  `descricao` VARCHAR(150) NULL DEFAULT NULL,
  PRIMARY KEY (`idoutrasformacoes`),
  INDEX `idusuario_idx` (`idusuario` ASC),
  CONSTRAINT `fk_idUsuario`
    FOREIGN KEY (`idusuario`)
    REFERENCES `projeto_final`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;