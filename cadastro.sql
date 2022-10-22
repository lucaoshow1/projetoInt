-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Out-2022 às 00:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `sobrenome`, `email`, `telefone`, `nascimento`, `senha`, `data`) VALUES
(26, 'Thiago', 'Nunes', 'thiagonunes@gmail.com', '21933455461', '1998-11-19', '3102', '2022-10-12 14:37:18'),
(31, 'Lucas ', 'Gomes Rocha', 'lucas.rocha.15732@gmail.com', '21993561073', '1998-11-19', 'c5d9256689c43036581f781c61f26e50', '2022-10-15 11:49:57'),
(32, 'Luiz ', 'Henrique Nunes', 'l.henrique021@gmail.com', '21993561073', '1994-02-19', 'c5d9256689c43036581f781c61f26e50', '2022-10-15 12:13:01'),
(36, 'Gabriel ', 'Fructuozo', 'ga.fruc@gmail.com', '21987769087', '2000-11-12', '18d2dc74b7a5cbdc7fa74bfd37105205', '2022-10-15 14:26:53');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
