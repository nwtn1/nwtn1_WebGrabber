-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Dez-2020 às 19:29
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `grabber`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `wifi_grabber`
--

CREATE TABLE `wifi_grabber` (
  `id` int(4) NOT NULL,
  `identifier` varchar(30) NOT NULL,
  `wifi_name` varchar(30) NOT NULL,
  `wifiPass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `wifi_grabber`
--

INSERT INTO `wifi_grabber` (`id`, `identifier`, `wifi_name`, `wifiPass`) VALUES
(1, 'usuario', 'dado1', 'dadoo2'),
(2, 'Helena', 'EnterPriseWifi', 'Pass123@adm');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `wifi_grabber`
--
ALTER TABLE `wifi_grabber`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `wifi_grabber`
--
ALTER TABLE `wifi_grabber`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
