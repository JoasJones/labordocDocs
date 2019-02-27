-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Fev-2019 às 17:36
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labordoc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentolabordoc`
--

CREATE TABLE `documentolabordoc` (
  `id` int(11) NOT NULL,
  `idFundo` int(11) NOT NULL,
  `idGrupo` int(11) NOT NULL,
  `idSubgrupo` int(11) NOT NULL,
  `idSerie` int(11) NOT NULL,
  `idSubserie` int(11) NOT NULL,
  `caixa` varchar(100) NOT NULL,
  `maco` varchar(100) NOT NULL,
  `ano` int(11) NOT NULL,
  `paginas` int(11) NOT NULL,
  `cotaAntiga` varchar(200) NOT NULL,
  `cotaAtual` varchar(200) NOT NULL,
  `naturezaDocumento` varchar(200) NOT NULL,
  `partes` varchar(200) NOT NULL,
  `observacao` varchar(500) NOT NULL,
  `pesquisador` varchar(200) NOT NULL,
  `urlImagem` varchar(200) NOT NULL,
  `urlPDF` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `Fundo` varchar(200) NOT NULL,
  `Grupo` varchar(200) NOT NULL,
  `Subgrupo` varchar(200) NOT NULL,
  `Serie` varchar(200) NOT NULL,
  `Subserie` varchar(200) NOT NULL,
  `Caixa` varchar(200) NOT NULL,
  `Maco` varchar(200) NOT NULL,
  `Ano` int(11) NOT NULL,
  `Paginas` int(11) NOT NULL,
  `CotaAntiga` varchar(200) NOT NULL,
  `CotaAtual` varchar(200) NOT NULL,
  `NaturezaDocumento` varchar(200) NOT NULL,
  `Partes` varchar(200) NOT NULL,
  `Observacao` varchar(500) NOT NULL,
  `Pesquisador` varchar(200) NOT NULL,
  `URLImagem` varchar(100) NOT NULL,
  `URLPDF` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fundo`
--

CREATE TABLE `fundo` (
  `id` int(11) NOT NULL,
  `NomeFundo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `NomeGrupo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `serie`
--

CREATE TABLE `serie` (
  `id` int(11) NOT NULL,
  `nomeSerie` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subgrupo`
--

CREATE TABLE `subgrupo` (
  `id` int(11) NOT NULL,
  `subgrupo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subserie`
--

CREATE TABLE `subserie` (
  `id` int(11) NOT NULL,
  `nomeSubSerie` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documentolabordoc`
--
ALTER TABLE `documentolabordoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idGrupo` (`idGrupo`),
  ADD KEY `idFundo` (`idFundo`),
  ADD KEY `idSerie` (`idSerie`),
  ADD KEY `idSubgrupo` (`idSubgrupo`),
  ADD KEY `idSubserie` (`idSubserie`);

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fundo`
--
ALTER TABLE `fundo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subgrupo`
--
ALTER TABLE `subgrupo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subserie`
--
ALTER TABLE `subserie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documentolabordoc`
--
ALTER TABLE `documentolabordoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fundo`
--
ALTER TABLE `fundo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serie`
--
ALTER TABLE `serie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subgrupo`
--
ALTER TABLE `subgrupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subserie`
--
ALTER TABLE `subserie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `documentolabordoc`
--
ALTER TABLE `documentolabordoc`
  ADD CONSTRAINT `documentolabordoc_ibfk_1` FOREIGN KEY (`idGrupo`) REFERENCES `grupo` (`id`),
  ADD CONSTRAINT `documentolabordoc_ibfk_2` FOREIGN KEY (`idFundo`) REFERENCES `fundo` (`id`),
  ADD CONSTRAINT `documentolabordoc_ibfk_3` FOREIGN KEY (`idSerie`) REFERENCES `serie` (`id`),
  ADD CONSTRAINT `documentolabordoc_ibfk_4` FOREIGN KEY (`idSubgrupo`) REFERENCES `subgrupo` (`id`),
  ADD CONSTRAINT `documentolabordoc_ibfk_5` FOREIGN KEY (`idSubserie`) REFERENCES `subserie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
