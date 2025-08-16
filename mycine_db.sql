-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/08/2025 às 00:36
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mycine_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `duracao` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `capa` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `username`, `senha`) VALUES
(1, 'felipe.barboza2008@gmail.com', 'Felipe', '$2y$10$UG7Vg6AJGtjhHdBh/HrwlODSL6x8NyT16In7HXEFaS2n/2FAVXzvm'),
(3, 'minhanossa@gmail.com', 'Massa', '$2y$10$kBl1FaWudT.I93ent7htLup3Yaih8rkeDg2J3qiCx3MfUfvCBCKAG'),
(4, 'bonobomonstro@gmail.com', 'Bonobo666', '$2y$10$bLtL2TdvY7ELrEs6YjSFdO4/N0YMW9nM.KMc2QpDm5bAS8FmHHuV.'),
(5, 'bonobomonstro@gmail.com', 'Bonobo666', '$2y$10$x3lYtNpqIRUGTeP8a7JIk.ALNEEqPfIFxFlZs76bONjVMoprBPC7i'),
(6, 'bonobomonstro@gmail.com', 'Bonobo666', '$2y$10$T4LGtqNKkZHh2M9AT3xfYeLd.qnXvgRZY6xjzeYPdIcV1hyrKH4fq'),
(7, 'dsadjhsao@gmail.com', 'XXAutismo', '$2y$10$6GX26OJ7DQ/OeYBn2XufaeCL9LotEicGXOAkFp/4DYIXs3z/koXFG'),
(8, 'dasdasddassad@gmail.com', 'Afonso', '$2y$10$6FdE1iN2JO6WcaG2pDZ8QOVOCyJqiYAki1TfkaR/evcqWk9mBgko.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
