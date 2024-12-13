-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27/11/2024 às 22:25
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `farmacia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `medicos`
--

DROP TABLE IF EXISTS `medicos`;
CREATE TABLE IF NOT EXISTS `medicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nome` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Dia_Nascimento` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Cpf` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Crm` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Cidade` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Bairro` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Estado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Senha` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
