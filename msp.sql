-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2016 at 01:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias_despesas`
--

CREATE TABLE `categorias_despesas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `categorias_despesas`
--

INSERT INTO `categorias_despesas` (`id`, `titulo`) VALUES
(1, 'Contador'),
(2, 'WBA'),
(3, 'Godaddy'),
(4, 'Equip. Informatica');

-- --------------------------------------------------------

--
-- Table structure for table `despesas`
--

CREATE TABLE `despesas` (
  `id` int(11) NOT NULL,
  `conta` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `valor` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `forma_pagamento` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `comentarios` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `categoria` int(11) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `despesas`
--

INSERT INTO `despesas` (`id`, `conta`, `descricao`, `valor`, `forma_pagamento`, `comentarios`, `categoria`, `data`) VALUES
(1, '4.003-0', 'PAGTO ELETRON COBRANCA GODADDY', '100', 'A VISTA', 'Site e email', 3, '2016-09-24 00:00:00'),
(2, '3000-1', 'Contador', '500', 'A VISTA', 'Contador', 2, '2016-09-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `level_acesso`
--

CREATE TABLE `level_acesso` (
  `id` int(11) NOT NULL,
  `tipo_conta` varchar(25) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operadores`
--

CREATE TABLE `operadores` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `nome` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `data_criacao` date NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `codigo_ativacao` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `level_permissao_id` int(11) NOT NULL,
  `bloqueado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `operadores`
--

INSERT INTO `operadores` (`id`, `login`, `senha`, `nome`, `email`, `data_criacao`, `ativo`, `codigo_ativacao`, `level_permissao_id`, `bloqueado`) VALUES
(1, 'admin', 'bda784a226cf6f6432b66b6b6ac93936fc6ef88ea9fbf9c5540fbaa858d96dfe0b148fec62554bc53690042681e06e225bd7bbd1659f3fc85c6c3b676dfde8b8', 'administrador', 'nomail@nomail.com', '2016-09-20', 1, '7a1180cd681b7ff87f02a131acc42e412da09265', 0, 0),
(2, 'user1', '1f40fc92da241694750979ee6cf582f2d5d7d28e18335de05abc54d0560e0f5302860c652bf08d560252aa5e74210546f369fbbbce8c12cfc7957b2652fe9a75', 'Usuario 1', 'user1@msp.com', '2016-09-24', 0, '7815696ecbf1c96e6894b779456d330e', 1, 0),
(3, 'user2', '1f40fc92da241694750979ee6cf582f2d5d7d28e18335de05abc54d0560e0f5302860c652bf08d560252aa5e74210546f369fbbbce8c12cfc7957b2652fe9a75', 'Usuario 2', 'user2@msp.com', '2016-09-24', 1, '7815696ecbf1c96e6894b779456d330e', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `titulos`
--

CREATE TABLE `titulos` (
  `id` int(11) NOT NULL,
  `bordero_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `modo_id` int(11) NOT NULL,
  `valor` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `stauts_id` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `operacao_id` int(11) NOT NULL,
  `comentarios` varchar(300) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias_despesas`
--
ALTER TABLE `categorias_despesas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `despesas`
--
ALTER TABLE `despesas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_acesso`
--
ALTER TABLE `level_acesso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operadores`
--
ALTER TABLE `operadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias_despesas`
--
ALTER TABLE `categorias_despesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `despesas`
--
ALTER TABLE `despesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `level_acesso`
--
ALTER TABLE `level_acesso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operadores`
--
ALTER TABLE `operadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
