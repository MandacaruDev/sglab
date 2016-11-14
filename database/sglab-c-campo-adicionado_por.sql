-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2016 at 10:45 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sglab`
--

-- --------------------------------------------------------

--
-- Table structure for table `escolas`
--

CREATE TABLE IF NOT EXISTS `escolas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adicionado_por` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distrito` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logradouro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sigla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `possui_internet_escola` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_internet_escola` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_escola` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `possui_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `possui_analista` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sala` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pregao1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pregao2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pregao3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pregao4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `possui_internet_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_internet_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lab_montado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qt_computadores_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qt_monitores_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_condicionado_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `impressora_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qt_notebook_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roteador_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `switch_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qt_cadeiras_lab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siem_id` int(10) unsigned DEFAULT NULL,
  `pessoa_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `escolas_siem_id_foreign` (`siem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `escolas`
--

INSERT INTO `escolas` (`id`, `adicionado_por`, `inep`, `cep`, `distrito`, `bairro`, `logradouro`, `numero`, `complemento`, `fone`, `email`, `cel1`, `cel2`, `sigla`, `possui_internet_escola`, `tipo_internet_escola`, `status_escola`, `possui_lab`, `possui_analista`, `tipo_sala`, `pregao1`, `pregao2`, `pregao3`, `pregao4`, `possui_internet_lab`, `tipo_internet_lab`, `lab_montado`, `qt_computadores_lab`, `qt_monitores_lab`, `status_lab`, `ar_condicionado_lab`, `impressora_lab`, `qt_notebook_lab`, `roteador_lab`, `switch_lab`, `qt_cadeiras_lab`, `siem_id`, `pessoa_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0', '0', 'SEDE', '0', '', '', '', '', '', '', '', '', 'SIM', 'PROJETO BANDA LARGA NAS ESCOLAS', 'ATIVO', 'SIM', 'SIM', 'NÃO POSSUI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 1, 12, '2016-11-13 00:11:14', '2016-11-13 00:33:12'),
(2, 'Educandário João XXIII', '0', '0', 'SEDE', '0', '', '', '', '', '', '', '', '', 'SIM', 'PROJETO BANDA LARGA NAS ESCOLAS', 'ATIVO', 'SIM', 'SIM', 'NÃO POSSUI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4, 1, 16, '2016-11-13 00:11:46', '2016-11-13 00:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adicionado_por` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vinculo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_funcionario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siem_id` int(10) unsigned DEFAULT NULL,
  `ocupacao_id` int(10) unsigned DEFAULT NULL,
  `pessoa_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `funcionarios_siem_id_foreign` (`siem_id`),
  KEY `funcionarios_ocupacao_id_foreign` (`ocupacao_id`),
  KEY `funcionarios_pessoa_id_foreign` (`pessoa_id`),
  KEY `funcionarios_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `adicionado_por`, `vinculo`, `status_funcionario`, `siem_id`, `ocupacao_id`, `pessoa_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'EFETIVO', 'ATIVO', 4, 1, 2, 12, '2016-11-13 00:15:16', '2016-11-13 00:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_10_31_162633_scaffoldinterfaces', 1),
(4, '2016_10_28_012155_create_permission_tables', 1),
(5, '2016_10_28_015607_siems', 2),
(8, '2016_10_28_021136_ocupacaos', 4),
(16, '2016_10_28_020211_pessoas', 5),
(17, '2016_10_28_021347_funcionarios', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ocupacaos`
--

CREATE TABLE IF NOT EXISTS `ocupacaos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ocupacaos`
--

INSERT INTO `ocupacaos` (`id`, `usuario`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'ANALISTA EM EDUCAÇÃO', '2016-10-28 17:08:42', '2016-10-28 17:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pessoas`
--

CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adicionado_por` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distrito` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logradouro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expedicao_rg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naturalidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nascionalidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_mae` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_pai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pessoas_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pessoas`
--

INSERT INTO `pessoas` (`id`, `adicionado_por`, `nome`, `cep`, `distrito`, `bairro`, `logradouro`, `numero`, `complemento`, `fone`, `cel1`, `cel2`, `email`, `cpf`, `rg`, `expedicao_rg`, `naturalidade`, `nascionalidade`, `nis`, `escolaridade`, `data_nascimento`, `nome_mae`, `nome_pai`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'NÃO POSSUI', '', 'SEDE', '00000000000000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 12, '2016-11-13 00:10:15', '2016-11-13 00:10:15'),
(2, 'Admin', 'Miguel dos Santos Silva', '0', 'SEDE', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 12, '2016-11-13 00:12:32', '2016-11-13 00:12:32'),
(3, 'Admin', 'Etienne Alves Santana', '0', 'SEDE', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 12, '2016-11-13 00:12:58', '2016-11-13 00:12:58'),
(4, 'Admin', 'Mariana Athayde', '0', 'SEDE', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 12, '2016-11-13 00:14:51', '2016-11-13 00:14:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scaffoldinterfaces`
--

CREATE TABLE IF NOT EXISTS `scaffoldinterfaces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `package` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `views` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tablename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `scaffoldinterfaces`
--

INSERT INTO `scaffoldinterfaces` (`id`, `package`, `migration`, `model`, `controller`, `views`, `tablename`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', '/var/www/html/sglab/database/migrations/2016_10_28_015607_siems.php', '/var/www/html/sglab/app/Siem.php', '/var/www/html/sglab/app/Http/Controllers/SiemController.php', '/var/www/html/sglab/resources/views/siem', 'siems', '2016-10-28 04:56:07', '2016-10-28 04:56:07'),
(2, 'Laravel', '/var/www/html/sglab/database/migrations/2016_10_28_020211_pessoas.php', '/var/www/html/sglab/app/Pessoa.php', '/var/www/html/sglab/app/Http/Controllers/PessoaController.php', '/var/www/html/sglab/resources/views/pessoa', 'pessoas', '2016-10-28 05:02:11', '2016-10-28 05:02:11'),
(3, 'Laravel', '/var/www/html/sglab/database/migrations/2016_10_28_021040_escolas.php', '/var/www/html/sglab/app/Escola.php', '/var/www/html/sglab/app/Http/Controllers/EscolaController.php', '/var/www/html/sglab/resources/views/escola', 'escolas', '2016-10-28 05:10:40', '2016-10-28 05:10:40'),
(4, 'Laravel', '/var/www/html/sglab/database/migrations/2016_10_28_021136_ocupacaos.php', '/var/www/html/sglab/app/Ocupacao.php', '/var/www/html/sglab/app/Http/Controllers/OcupacaoController.php', '/var/www/html/sglab/resources/views/ocupacao', 'ocupacaos', '2016-10-28 05:11:36', '2016-10-28 05:11:36'),
(6, 'Laravel', '/var/www/html/sglab/database/migrations/2016_10_28_104008_funcionarios.php', '/var/www/html/sglab/app/Funcionario.php', '/var/www/html/sglab/app/Http/Controllers/FuncionarioController.php', '/var/www/html/sglab/resources/views/funcionario', 'funcionarios', '2016-10-29 01:40:08', '2016-10-29 01:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `siems`
--

CREATE TABLE IF NOT EXISTS `siems` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_escola` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cod_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `siems`
--

INSERT INTO `siems` (`id`, `usuario`, `siem`, `nome`, `tipo_escola`, `cod_ext`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '209', 'CENTRO SOCIAL URBANO - CSU', 'ESCOLA', '', '2016-11-11 02:45:19', '2016-11-11 02:45:19'),
(4, 'Admin', '213', 'Educandário João XXIII', 'ESCOLA', '', '2016-11-12 17:40:00', '2016-11-12 17:40:00'),
(5, 'Admin', '000', 'Edualdina Damásio', 'ESCOLA', '', '2016-11-13 00:13:57', '2016-11-13 00:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'Admin', '7miguelsilva7@gmail.com', '$2y$10$owYPnWTMoJBH0lovrW/bqONuFCnxI1zoizzst2TOB2p5bTVwEmfV2', '74iVgdUS8tCF2jw14jTTUqrLevJwwfpVLllUvziK9fFwarPnGYbdx4LUPhNu', '2016-11-12 17:44:03', '2016-11-14 02:51:30'),
(15, 'CENTRO SOCIAL URBANO - CSU', 'centro@gmail.com', '$2y$10$wvad2ySwqBelHhc/qKeku.nQ8N.0m8idOKgffiZKCm.iarKb8hczK', '4lnzmjf3HeDUBLLzbpK6GMQGSaqoAPxvXsKnEmTWYjwcwuG9z5rz5p5TUoBb', '2016-11-12 23:47:44', '2016-11-14 03:05:32'),
(16, 'Educandário João XXIII', 'educandariojoao23@gmail.com', '$2y$10$wX49d.6NX1FhI60dnMyapO8v7I0t4NCy3X5T4UyiFqJhQvI49tFHa', 'EF5UVvXUaEbUWZ2ENsJGxv2SY4OMA5x0ozg3V7cbsYJQhLLR3PERhGDGOq1A', '2016-11-13 00:16:36', '2016-11-14 03:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

CREATE TABLE IF NOT EXISTS `user_has_permissions` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `user_has_permissions_permission_id_foreign` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_has_roles`
--

CREATE TABLE IF NOT EXISTS `user_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `user_has_roles_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `escolas`
--
ALTER TABLE `escolas`
  ADD CONSTRAINT `escolas_siem_id_foreign` FOREIGN KEY (`siem_id`) REFERENCES `siems` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `funcionarios_ocupacao_id_foreign` FOREIGN KEY (`ocupacao_id`) REFERENCES `ocupacaos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `funcionarios_pessoa_id_foreign` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `funcionarios_siem_id_foreign` FOREIGN KEY (`siem_id`) REFERENCES `siems` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD CONSTRAINT `pessoas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
