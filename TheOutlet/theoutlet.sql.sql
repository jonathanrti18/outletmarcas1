-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Mar-2019 às 18:58
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theoutlet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `cod_end` int(4) NOT NULL,
  `tipo_logradouro` varchar(20) NOT NULL,
  `logradouro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`cod_end`, `tipo_logradouro`, `logradouro`) VALUES
(8, 'Avenida', 'Brasil'),
(9, 'Avenida1', 'Brasil1'),
(10, 'aa', 'aa'),
(11, 'aaaaaaaaaaa', 'aaaaaaaaa'),
(12, 'aaaaaaaaa', 'aaaaaaaaa'),
(13, 'aa', 'aa'),
(14, 'asdsad', 'asdsa'),
(15, 'Avenida', 'Brasil'),
(16, 'Avenida', 'Brasil'),
(17, 'Avenida', 'Brasil'),
(18, 'Avenida', 'Brasil'),
(19, 'avenida', 'br'),
(20, 'avenidaas', 'br1as');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_cliente` int(4) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `cod_end` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_cliente`, `login`, `senha`, `nome`, `sobrenome`, `cod_end`) VALUES
(5, 'Leo', '0', 'Leonardo', 'Fabbio', 8),
(6, 'Leo1', '0', 'Leonardo1', 'Fabbio1', 9),
(7, 'aa', '0', 'asd', 'aa', 10),
(8, 'aaaaaaaaaaaaaaaaaaaa', '0', 'aaaaaaaaaa', 'aaaaaaaaa', 11),
(9, 'aaaaaaaaaaa', '0', 'aaaaa', 'aaaaaaaaa', 12),
(10, 'aa', '0', 'aaaaaaaaaaaaaaaaaa', 'aaaaa', 13),
(11, 'asdsad', '0', 'as', 'macke1', 14),
(12, 'zinler', '0', 'Leonardo', 'Castro', 15),
(13, 'zinler', '1597563', 'Leonardo', 'Castro', 16),
(14, 'zinler', '0', 'Leonardo', 'Castro', 17),
(15, 'zinler', 'asd123s', 'Leonardo', 'Castro', 18),
(16, 'flp1', 'macke123', 'felipe', 'castro', 19),
(17, 'flp1', 'asasas', 'felipe', 'castro', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`cod_end`),
  ADD UNIQUE KEY `cod_end` (`cod_end`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_cliente`),
  ADD UNIQUE KEY `cod_cliente` (`cod_cliente`),
  ADD UNIQUE KEY `cod_end` (`cod_end`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `cod_end` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_cliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_end`) REFERENCES `endereco` (`cod_end`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
