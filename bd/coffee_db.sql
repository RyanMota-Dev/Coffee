-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 30-Set-2025 às 03:19
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `coffee_db`
--
CREATE DATABASE IF NOT EXISTS `coffee_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coffee_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `Confsenha` varchar(50) NOT NULL,
  `adm` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `duracao` varchar(50) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `categoria`, `data_criacao`, `titulo`, `descricao`, `duracao`, `nivel`) VALUES
(1, 'Essencial', '2025-09-30 03:13:46', 'IntroduÃ§Ã£o ao Universo do CafÃ©', 'Aprenda os conceitos bÃ¡sicos do mundo do cafÃ©, desde o plantio atÃ© a preparaÃ§Ã£o da bebida. Ideal para quem deseja iniciar no universo do cafÃ©.', '6 horas', 'Iniciante'),
(2, 'Barista', '2025-09-30 03:15:32', 'TÃ©cnicas BÃ¡sicas de Barista', 'Curso focado em ensinar as principais tÃ©cnicas de barista, incluindo moagem, extraÃ§Ã£o, espumaÃ§Ã£o de leite e boas prÃ¡ticas no atendimento.', '15 horas', 'AvanÃ§ado'),
(3, 'Essencial', '2025-09-30 03:15:52', 'DegustaÃ§Ã£o e HarmonizaÃ§Ã£o de CafÃ©s', 'Aprenda a identificar aromas, sabores e caracterÃ­sticas do cafÃ©, alÃ©m de como harmonizÃ¡-lo com diferentes alimentos.', '10 horas', 'Iniciante'),
(4, 'HistÃ³ria', '2025-09-30 03:16:11', 'Cultura e HistÃ³ria do CafÃ©', 'ConheÃ§a a histÃ³ria do cafÃ©, sua importÃ¢ncia cultural e econÃ´mica ao redor do mundo, e como se tornou a bebida apreciada globalmente.', '4 horas', 'IntermediÃ¡rio'),
(5, 'MÃ©todos', '2025-09-30 03:16:29', 'CafÃ© SustentÃ¡vel e Origem do GrÃ£o', 'Aprenda sobre prÃ¡ticas sustentÃ¡veis no cultivo do cafÃ© e como a origem do grÃ£o influencia diretamente na qualidade da bebida.', '22 horas', 'Iniciante'),
(6, 'MÃ©todos', '2025-09-30 03:16:56', 'AvanÃ§ado em Preparos e Bebidas de CafÃ©', 'Aprofunde seus conhecimentos em tÃ©cnicas avanÃ§adas de preparo e desenvolvimento de bebidas criativas Ã  base de cafÃ©.', '20 horas', 'AvanÃ§ado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `intensidade` varchar(50) DEFAULT NULL,
  `origem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
