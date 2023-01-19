-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Jan-2023 às 21:10
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `library_management`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `authorproposal`
--

DROP TABLE IF EXISTS `authorproposal`;
CREATE TABLE IF NOT EXISTS `authorproposal` (
  `proposalId` int(11) NOT NULL AUTO_INCREMENT,
  `ProposalName` varchar(200) NOT NULL,
  `ProposalEmail` varchar(50) NOT NULL,
  `ProposalNumber` varchar(50) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY (`proposalId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `authorproposal`
--

INSERT INTO `authorproposal` (`proposalId`, `ProposalName`, `ProposalEmail`, `ProposalNumber`, `comment`) VALUES
(1, 'test', 'wljrodrigues@gmail.com', '9198216195', 'comment');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
