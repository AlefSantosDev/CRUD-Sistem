-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 20-Jun-2024 às 23:59
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sistema`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`codigo`, `nome`, `cpf`, `rg`, `cep`, `numero`, `celular`, `email`) VALUES
(10, 'alef', '57762994890', '577273882', '11500200', '239', '13997600717', 'alefnomatriz@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fornecedor`
--

CREATE TABLE IF NOT EXISTS `tb_fornecedor` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pagamento` varchar(100) NOT NULL,
  `banco` varchar(100) NOT NULL,
  `desconto` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `tb_fornecedor`
--

INSERT INTO `tb_fornecedor` (`codigo`, `nome`, `cpf`, `rg`, `cep`, `numero`, `celular`, `email`, `pagamento`, `banco`, `desconto`) VALUES
(10, 'Shell', '573743843343', '545436387', '11500200', '239', '13997600717', 'alefnomatriz@gmail.com', 'cartÃ£o apenas', '1414686', '50%');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `carteira` varchar(100) NOT NULL,
  `pis` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `setor` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`codigo`, `nome`, `cpf`, `rg`, `cep`, `numero`, `celular`, `email`, `carteira`, `pis`, `cargo`, `setor`) VALUES
(14, 'alef', '57762994890', '234665875', '11500200', '237', '13997600717', 'alefnomatriz@gmail.com', '324254266', '2423656', 'informatica', '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE IF NOT EXISTS `tb_produto` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `especificacoes` varchar(100) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `estoque` varchar(20) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `contato` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`codigo`, `nome`, `descricao`, `especificacoes`, `categoria`, `serie`, `estoque`, `preco`, `contato`, `email`) VALUES
(5, 'gasolina', 'gasolina da shell oil', 'muita gasolina boa', 'gasolina', '3327', '9999999', '10000 Per/l', '13997600717', 'alefnomatriz@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
