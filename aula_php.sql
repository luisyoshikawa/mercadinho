-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Out-2020 às 22:32
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_nf`
--

CREATE TABLE `itens_nf` (
  `id` int(11) NOT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `num_nf` int(11) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `subtotal` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens_nf`
--

INSERT INTO `itens_nf` (`id`, `cod_produto`, `num_nf`, `qtde`, `subtotal`) VALUES
(10, 1, 1, 2, '54.00'),
(11, 1, 2, 2, '54.00'),
(12, 2, 2, 3, '24.00'),
(13, 3, 2, 1, '2.50'),
(14, 1, 3, 3, '81.00'),
(15, 2, 3, 2, '16.00'),
(16, 1, 5, 2, '54.00'),
(17, 1, 6, 2, '54.00'),
(18, 4, 6, 2, '10.00'),
(19, 6, 6, 1, '16.99'),
(20, 3, 7, 3, '7.50'),
(21, 4, 7, 2, '10.00'),
(22, 1, 7, 2, '54.00'),
(23, 6, 7, 1, '16.99'),
(24, 5, 7, 1, '2.00'),
(25, 2, 10, 2, '16.00'),
(26, 1, 12, 2, '54.00'),
(27, 3, 12, 1, '2.50'),
(28, 1, 14, 3, '81.00'),
(29, 3, 14, 2, '5.00'),
(30, 1, 15, 2, '54.00'),
(31, 5, 15, 3, '6.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal`
--

CREATE TABLE `nota_fiscal` (
  `nf` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nota_fiscal`
--

INSERT INTO `nota_fiscal` (`nf`, `data`, `valor_total`) VALUES
(1, '2020-09-24', '54.00'),
(2, '2020-09-25', '80.50'),
(3, '2020-09-25', '97.00'),
(4, '2020-09-25', NULL),
(5, '2020-05-25', '54.00'),
(6, '2020-08-10', '80.99'),
(7, '2020-04-20', '90.49'),
(8, '2020-02-10', NULL),
(9, '2020-09-25', NULL),
(10, '2020-09-20', '16.00'),
(11, '0000-00-00', NULL),
(12, '2020-09-25', '56.50'),
(13, '2020-03-10', NULL),
(14, '2020-09-27', '86.00'),
(15, '2020-10-10', '60.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(1, 'arroz 5kg', '27.00'),
(2, 'feijão 1kg', '8.00'),
(3, 'Lata Milho', '2.50'),
(4, 'sabão', '5.00'),
(5, 'banana prata 1k ', '2.00'),
(6, 'Pão 1kg', '16.99');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_produto` (`cod_produto`),
  ADD KEY `num_nf` (`num_nf`);

--
-- Índices para tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  ADD PRIMARY KEY (`nf`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  MODIFY `nf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD CONSTRAINT `itens_nf_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `itens_nf_ibfk_2` FOREIGN KEY (`num_nf`) REFERENCES `nota_fiscal` (`nf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
