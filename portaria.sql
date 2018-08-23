-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/08/2018 às 05:56
-- Versão do servidor: 10.1.32-MariaDB
-- Versão do PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `matricula` int(10) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `funcao` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `nivel` int(2) NOT NULL,
  `user` varchar(50) NOT NULL,
  `senha` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `matricula`, `empresa`, `funcao`, `status`, `nivel`, `user`, `senha`) VALUES
(13, 'admin', 12345678922, 12541, '', '', 1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(15, 'usuario', 12365478952, 1236447, '', '', 1, 2, 'usuario', 'f8032d5cae3de20fcec887f395ec9a6a');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
