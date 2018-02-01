-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2016 at 02:47 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `funildevendas`
--

-- --------------------------------------------------------

--
-- Table structure for table `comodos`
--

CREATE TABLE IF NOT EXISTS `comodos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comodos`
--

INSERT INTO `comodos` (`id`, `nome`) VALUES
(1, 'Geral'),
(2, 'Sala de Estar'),
(3, 'Sala de Jantar'),
(4, 'Quarto 1'),
(5, 'Quarto 2');

-- --------------------------------------------------------

--
-- Table structure for table `itens`
--

CREATE TABLE IF NOT EXISTS `itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `comodo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `itens`
--

INSERT INTO `itens` (`id`, `nome`, `comodo_id`) VALUES
(1, 'Infiltracoes no vizinho de baixo\r\n', 1),
(2, 'Infiltracoes do vizinho de cima\r\n', 1),
(3, 'Quadro de luz\r\n', 1),
(4, 'Campainha e interfone\r\n', 1),
(5, 'Gas (aquecedor, fogao)\r\n', 1),
(6, 'Caixa gordura\r\n', 1),
(7, 'Testar os registros de agua\r\n', 1),
(8, 'Garagem\r\n', 1),
(9, 'Medidas do imovel estao de acordo\r\n', 1),
(10, 'Tomadas, interruptores e bocais\r\n', 2),
(11, 'Paredes\r\n', 2),
(12, 'Teto\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `situacos_itens`
--

CREATE TABLE IF NOT EXISTS `situacos_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `situacao` int(11) NOT NULL,
  `vistoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `situacos_itens`
--

INSERT INTO `situacos_itens` (`id`, `item_id`, `situacao`, `vistoria_id`) VALUES
(1, 1, 1, 2),
(2, 2, 2, 2),
(3, 3, 2, 2),
(4, 4, 1, 2),
(5, 5, 1, 2),
(6, 6, 2, 2),
(7, 7, 1, 2),
(8, 8, 3, 2),
(9, 9, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`) VALUES
(1, 'Cesar'),
(2, 'Kelly'),
(3, 'Jessica');

-- --------------------------------------------------------

--
-- Table structure for table `vistorias`
--

CREATE TABLE IF NOT EXISTS `vistorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vistorias`
--

INSERT INTO `vistorias` (`id`, `usuario_id`) VALUES
(1, 1),
(2, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
