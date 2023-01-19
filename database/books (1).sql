-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Jan-2023 às 14:44
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
-- Estrutura da tabela `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `bookId` int(11) NOT NULL AUTO_INCREMENT,
  `bookName` varchar(200) NOT NULL,
  `bookPrice` varchar(20) NOT NULL,
  `bookPages` varchar(100) NOT NULL,
  `bookSize` varchar(100) NOT NULL,
  `bookLanguage` varchar(50) NOT NULL,
  `bookAuthor` varchar(100) NOT NULL,
  `bookPublishyear` varchar(50) NOT NULL,
  `bookShortDesc` varchar(50) NOT NULL,
  `bookImage` longblob NOT NULL,
  `bookPdf` longblob NOT NULL,
  `bookCategoryId` varchar(60) NOT NULL,
  PRIMARY KEY (`bookId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `books`
--

INSERT INTO `books` (`bookId`, `bookName`, `bookPrice`, `bookPages`, `bookSize`, `bookLanguage`, `bookAuthor`, `bookPublishyear`, `bookShortDesc`, `bookImage`, `bookPdf`, `bookCategoryId`) VALUES
(11, 'Livro 1', '2222', '222', '222', 'Port', '', '2222', 'seeefecececeeccccccccccccccccccccc', 0x2e2f626f6f6b732f444956554c4741c387c3834f204c4956524f20494d50524553534f2e706e67, 0x2e2f626f6f6b732f6172717569766f73566f756368657220646520436f6d707261202d2031372d30312d323032332d32322d33312e706466, '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
