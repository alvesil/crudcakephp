-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Maio-2022 às 23:16
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dt_nascimento` date NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `observacao` text COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `dt_nascimento`, `sexo`, `observacao`, `uf`) VALUES
(2, 'Valadão', '2018-05-11', 'O', 'hahahaha', 'MA'),
(4, 'JoaoVendedor', '2022-05-27', 'O', 'hahahahaha', 'CE'),
(5, 'teste', '2022-05-14', 'M', 'teste', 'MT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `role`, `created`, `modified`) VALUES
(1, 'admin', '2022-05-05 18:41:31', '2022-05-05 18:41:31'),
(2, 'moderador', '2022-05-05 18:41:37', '2022-05-05 18:41:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `roles_id`, `created`, `modified`) VALUES
(1, 'Eduardo Alves da Silva', 'admin', 'alvesil.eduardo.silva@gmail.com', '$2y$10$ytrwGz8kMrxTg5xD2TbF.e88QUXWAFRdzkXNJzY5PEKTKV7ssqLIy', 1, '2022-05-05 18:56:02', '2022-05-05 19:03:52'),
(2, 'Usuario Comum', 'usuario', 'usuario@comum.com', '$2y$10$O8dj5366tV0TY0Z1RtGyc.NpQ12Fwqs4liuvQtR4kjiNgeD28d9va', 2, '2022-05-05 19:04:31', '2022-05-05 19:04:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
