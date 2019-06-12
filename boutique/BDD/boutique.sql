-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 12 juin 2019 à 15:00
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(64) NOT NULL,
  `description_article` varchar(255) NOT NULL,
  `prix_article` decimal(6,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_article_Categorie1_idx` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `nom_article`, `description_article`, `prix_article`, `image_name`, `id_categorie`) VALUES
(1, 'Veste Linho', 'Léger et enveloppant, gilet over size à porter sur les épaules à la façon d’un châle. Contours en jacquard, motif gaucho traditionnel.', '189.00', 'VesteLinho.JPG', 1),
(2, 'Pantalon Tchina', 'Ce pantalon coupe chino, est assez large au bassin et se rétrécit aux chevilles.', '129.00', 'Pantalon Tchina.JPG', 2),
(3, 'T-shirt Hermano', 'T shirt coupe droite manche pagode (évasée). Matière fluide et douce.', '54.00', 'Hermano.jpg', 4),
(4, 'T-shirt Hermano', 'T shirt coupe droite manche pagode (évasée). Matière fluide et douce.', '54.00', 'Hermano.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(64) NOT NULL,
  `description_categorie` varchar(128) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`, `description_categorie`) VALUES
(1, 'Femme', 'Haut'),
(2, 'Femme', 'Bas'),
(3, 'Homme', 'Haut'),
(4, 'Homme', 'Bas'),
(5, 'Accessoire', '');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `prenom_client` varchar(64) NOT NULL,
  `nom_client` varchar(64) NOT NULL,
  `adresse_client` varchar(128) NOT NULL,
  `adresse_compl_client` varchar(128) DEFAULT NULL,
  `cp_client` varchar(20) NOT NULL,
  `ville_client` varchar(64) NOT NULL,
  `email_client` varchar(64) NOT NULL,
  `mdp_client` varchar(255) NOT NULL,
  `id_commande` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `email_client_UNIQUE` (`email_client`),
  KEY `fk_client_commande_idx` (`id_commande`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `prenom_client`, `nom_client`, `adresse_client`, `adresse_compl_client`, `cp_client`, `ville_client`, `email_client`, `mdp_client`, `id_commande`) VALUES
(44, 'gfdggfdg', 'gfd', 'gfd', 'gfd', 'gfd', 'gdf', 'agfgafdfdfgfdgdf', '$2y$10$zKLcwDwunWoGemI38XE6M.YAmEzpESuu6Y86kZ1QmJ..hSclVJrPi', NULL),
(45, 'tret', 'tre', 'tre', 'ter', 'ter', 'ter', 'gdfgdgfdgfdd@aa.com', '$2y$10$VJiRUQrTlsweVSmYy4u09.v0eX3urYAZIE22unMf.N1l3/Rbh/W0y', NULL),
(46, 'gfdg', 'gfdg', 'gdf', 'gfdgdfg', 'gfdg', 'g', 'aaggfdg@aa.com', '$2y$10$8zwOHrk5lH9kZPe2yL8kF.6ZWt/8w.n/RbJX9bIM4mjgo1Wp9kT/G', NULL),
(47, 'uytu', 'uyt', 'utyu', 'ytu', 'tyuty', 'utyutyu', 'guytudfgdfdd@aa.com', '$2y$10$m8rL1YqNf/bGniGwGuu9P.J1pxc5aq2GVdg266oyG88VakGMa8H02', NULL),
(48, 'dsfgfd', 'gfdg', 'gfd', 'gfdgdfg', 'gfdg', 'gfd', 'ggfgdfgdfdd@aa.com', '$2y$10$G7V0uYzu1Y2sTJXwFf97Su9qcQqL9WLoAv.2vwm8on2hbkRcMY3Fe', NULL),
(49, 'ujg', 'fkjf', 'hkhj', 'kkh', 'kh', 'kfg', 'aakjkhj@aa.com', '$2y$10$UZk2tElvrLqA6U6apSSFsOR71H3NjbZYjFIFUfGFFY30t21JZq6tq', NULL),
(50, 'gfg', 'gfdg', 'gfd', 'gfd', 'gfd', 'dfgfd', 'gdjjjfgdfdd@aa.com', '$2y$10$MqOZL8hdjTUbLkI1zO7Vi.rd/ag0J2vj/oil..QjdAfeRlJOsNqNm', NULL),
(51, 'terzt', 'tre', 'tre', 'te', 'tre', 'ter', 'tttaa@aa.com', '$2y$10$AoJtd0x5WujjlzhkShwjqexPGBrDt7GoFKtp1Fi9wgbzYyfAuXQZG', NULL),
(52, 'oiuo', 'oiuo', 'iou', 'oiu', 'oui', 'oui', 'ooo@aa.com', '$2y$10$4sfmNTVms9rR/1g97BH/3O.wlgMW6.re8UvV0M.sD.1LbAgpuOoEK', NULL),
(53, 'fdsf', 'fds', 'fds', 'fds', 'fsd', 'fsd', 'aafff@aa.com', '$2y$10$.3PirPiF2990GtRVKS5L2e/8YJOSQO7WTjHkSOx5PS8cUTBLEqu2G', NULL),
(54, 'rr', 'tt', 't', 'rr', 'tre', 't', 'aadd@aa.com', '$2y$10$5ubo4Vq.CImjAseqegRsb.EEBnYP1ZNgEr0DYZp4.f5zLA6juYlwm', NULL),
(55, 'jkhk', 'kj', 'kj', 'kj', 'kj', 'kj', 'aajjjdd@aa.com', '$2y$10$7exraErrVTRlaWvQ8WeMYOvch7t2i9hJAVt30/zLIdDTgDxbWbESm', NULL),
(56, 'ff', 'fdfs', 'fsd', 'fsd', 'ffsdf', 'fsdf', 'fsdfsdaadd@aa.com', '$2y$10$6L7QgmTlSQWh/wLJ.zw8z.YHndpaymWGpT4uA5FVvVbjW2MmUhQ.G', NULL),
(57, 'Bob', 'gg', 'gg', 'gdf', 'gfd', 'gfd', 'aagffgfdg@aa.com', '$2y$10$.NnPF1PsbNHjqt9SxVEnZuoC5kMo9HM.7bHHuiD1KzgdPu2RYHMne', NULL),
(58, 'BOB', 'ytry', 'tyrey', 'ytr', 'yuh', 'rthrt', 'ttt@aa.comt', '$2y$10$cHPqh/4j1nJH2T5a3UsCCOZ54MQVGjgjDJwAtWi47/q2hrfz29wJi', NULL),
(59, 'gfghfhg', 'hfgh', 'hgf', 'hgf', 'hgfh', 'hgfh', 'hhh@aa.com', '$2y$10$Td.WyhQj/6bTROoqiWntJOpd7TnaJkuBZ1tpVPcDbJNBojy0KZNp.', NULL),
(60, 'htrh', 'jhgdj', 'jhg', 'hgjgf', 'jg', 'jhgd', 'jjjaadd@aa.com', '$2y$10$V3EeugqsW8C56KqFrIXMdeG/WDcANCg49hnXX8Xo.h4le.EfiorFi', NULL),
(62, 'yhtry', 'ytrytr', 'ytry', 'ytry', 'ytr', 'ytr', 'ggg@aa.com', '$2y$10$W483GGYTkqNTJcRLcyYwg.P20jZIPbLJ7ZmkWbPEjAzSRGfLPzWZa', NULL),
(63, 'gfdgd', 'gfdg', 'gfdg', 'gfdg', 'gfdg', 'gdfg', 'ggggg@aa.com', '$2y$10$AqXpB5KPMrg2jOeRaVA.0eUR/6XePOdElorwecBUzJFb8V15F.oSu', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `numero_commande` int(11) NOT NULL,
  `date_achat_commande` datetime NOT NULL,
  `desciption_commande` varchar(255) NOT NULL,
  `statut_commande` varchar(45) NOT NULL,
  `id_article` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  UNIQUE KEY `numero_commande_UNIQUE` (`numero_commande`),
  KEY `fk_commande_article1_idx` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_Categorie1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_client_commande` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_commande_article1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
