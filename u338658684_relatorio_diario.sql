-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Abr-2022 às 21:03
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u338658684_relatorio_diario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ajuda`
--

DROP TABLE IF EXISTS `ajuda`;
CREATE TABLE IF NOT EXISTS `ajuda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idViagem01` int(11) NOT NULL,
  `setor` varchar(50) DEFAULT NULL,
  `prefixo` varchar(200) DEFAULT NULL,
  `turno` varchar(200) DEFAULT NULL,
  `matricula_motorista` varchar(50) DEFAULT NULL,
  `km` varchar(50) DEFAULT NULL,
  `dataHoraInicioDeColeta` datetime DEFAULT NULL,
  `coletor01` varchar(50) DEFAULT NULL,
  `coletor02` varchar(50) DEFAULT NULL,
  `coletor03` varchar(50) DEFAULT NULL,
  `coletor04` varchar(50) DEFAULT NULL,
  `dataHoraSaidaDaGaragem` datetime DEFAULT NULL,
  `kmInicioDeSetor` int(11) DEFAULT NULL,
  `dataHoraInicioDeSetor` datetime DEFAULT NULL,
  `kmFinalDoSetor` int(11) DEFAULT NULL,
  `dataHoraFinalDeSetor` datetime DEFAULT NULL,
  `kmInicioDeDescarga` int(11) DEFAULT NULL,
  `dataHoraInicioDeDescarga` datetime DEFAULT NULL,
  `kmFimDeDescarga` int(11) DEFAULT NULL,
  `peso` varchar(50) DEFAULT NULL,
  `ticket` varchar(50) DEFAULT NULL,
  `dataHoraFimDeDescarga` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

DROP TABLE IF EXISTS `equipamentos`;
CREATE TABLE IF NOT EXISTS `equipamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prefixo` varchar(50) DEFAULT NULL,
  `placa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id`, `prefixo`, `placa`) VALUES
(1, 'D201', 'XXX-XXXX'),
(2, 'D202', 'XXX-XXXX');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL,
  `matricula` varchar(25) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `funcao` varchar(150) DEFAULT NULL,
  `setor` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `matricula`, `nome`, `funcao`, `setor`) VALUES
(1, '3000', 'Michel', 'Coletor', 'DOMICILIAR'),
(2, '3001', 'Rafael', 'Motorista', 'DOMICILIAR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `refeicao`
--

DROP TABLE IF EXISTS `refeicao`;
CREATE TABLE IF NOT EXISTS `refeicao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroRd` int(11) DEFAULT NULL,
  `inicioRefeicao` datetime DEFAULT NULL,
  `fimRefeicao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio_diario`
--

DROP TABLE IF EXISTS `relatorio_diario`;
CREATE TABLE IF NOT EXISTS `relatorio_diario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setor` varchar(50) DEFAULT NULL,
  `prefixo` varchar(200) DEFAULT NULL,
  `turno` varchar(200) DEFAULT NULL,
  `matricula_motorista` varchar(50) DEFAULT NULL,
  `km` varchar(50) DEFAULT NULL,
  `dataHoraInicioDeColeta` datetime DEFAULT NULL,
  `coletor01` varchar(50) DEFAULT NULL,
  `coletor02` varchar(50) DEFAULT NULL,
  `coletor03` varchar(50) DEFAULT NULL,
  `coletor04` varchar(50) DEFAULT NULL,
  `dataHoraSaidaDaGaragem` datetime DEFAULT NULL,
  `kmInicioDeSetor` int(11) DEFAULT NULL,
  `dataHoraInicioDeSetor` datetime DEFAULT NULL,
  `kmFinalDoSetor` int(11) DEFAULT NULL,
  `dataHoraFinalDeSetor` datetime DEFAULT NULL,
  `kmInicioDeDescarga` int(11) DEFAULT NULL,
  `dataHoraInicioDeDescarga` datetime DEFAULT NULL,
  `kmFimDeDescarga` int(11) DEFAULT NULL,
  `peso` varchar(50) DEFAULT NULL,
  `ticket` varchar(50) DEFAULT NULL,
  `dataHoraFimDeDescarga` datetime DEFAULT NULL,
  `kmInicioRetornoGaragem` int(11) DEFAULT NULL,
  `dataHoraInicioRetornoGaragem` datetime DEFAULT NULL,
  `kmFimRetornoGaragem` int(11) DEFAULT NULL,
  `dataHoraFimRetornoGaragem` datetime DEFAULT NULL,
  `kmAbastecimento` int(11) DEFAULT NULL,
  `litros` int(11) DEFAULT NULL,
  `dataHoraAbastecimento` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio_diario_2a_viagem`
--

DROP TABLE IF EXISTS `relatorio_diario_2a_viagem`;
CREATE TABLE IF NOT EXISTS `relatorio_diario_2a_viagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id1aViagem` int(11) DEFAULT NULL,
  `kmSaidaDoAterro` varchar(50) DEFAULT NULL,
  `dataHoraSaidaDoAterro` varchar(50) DEFAULT NULL,
  `kmInicioSetor2aViagem` int(11) DEFAULT NULL,
  `dataHoraInicioSetor2aViagem` datetime DEFAULT NULL,
  `kmFimSetor2aViagem` int(11) DEFAULT NULL,
  `dataHoraFimSetor2aViagem` datetime DEFAULT NULL,
  `kmInicioDeDescarga2aViagem` int(11) DEFAULT NULL,
  `dataHoraInicioDeDescarga2aViagem` datetime DEFAULT NULL,
  `kmFimDeDescarga2aViagem` int(11) DEFAULT NULL,
  `peso2aViagem` varchar(50) DEFAULT NULL,
  `ticket2aViagem` varchar(50) DEFAULT NULL,
  `dataHoraFimDeDescarga2aViagem` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setores`
--

DROP TABLE IF EXISTS `setores`;
CREATE TABLE IF NOT EXISTS `setores` (
  `id` int(11) NOT NULL,
  `setor` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `setores`
--

INSERT INTO `setores` (`id`, `setor`) VALUES
(1, 2000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sos`
--

DROP TABLE IF EXISTS `sos`;
CREATE TABLE IF NOT EXISTS `sos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroRd` int(11) DEFAULT NULL,
  `inicioSOS` datetime DEFAULT NULL,
  `fimSOS` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turno`
--

DROP TABLE IF EXISTS `turno`;
CREATE TABLE IF NOT EXISTS `turno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `turno` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turno`
--

INSERT INTO `turno` (`id`, `turno`) VALUES
(1, 'DIURNO'),
(2, 'NOTURNO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
