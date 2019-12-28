-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 28 déc. 2019 à 12:08
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionstock`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `lib_article` text NOT NULL,
  `prix_HT` float NOT NULL,
  `TVA` float NOT NULL,
  `qte_article` int(11) NOT NULL,
  `photo_article` varchar(50) NOT NULL,
  `description_article` varchar(300) NOT NULL,
  `num_artcile` varchar(10) NOT NULL,
  `id_remise` int(10) NOT NULL,
  `id_cat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `lib_article`, `prix_HT`, `TVA`, `qte_article`, `photo_article`, `description_article`, `num_artcile`, `id_remise`, `id_cat`) VALUES
(129, 'article algesic', 9, 2, 10, 'pY0h3Bc5.png', 'medicament', 'A001', 0, 0),
(130, 'AZERTYU', 0, 0, 0, '', '', '', 0, 0),
(131, 'AZERTYU', 0, 0, 0, '', '', '', 0, 0),
(134, '', 0, 0, 0, '', '', '', 0, 0),
(135, 'article algesic', 9, 2, 10, '', 'medicaments', 'A001', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `bon_livraison`
--

CREATE TABLE `bon_livraison` (
  `id` int(11) NOT NULL,
  `id_commande` int(10) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `lib_categorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `lib_categorie`) VALUES
(1, 'santé'),
(2, 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `num_tel` varchar(8) NOT NULL,
  `adr_client` varchar(50) NOT NULL,
  `type_id` char(1) NOT NULL,
  `mat_fiscale` varchar(10) NOT NULL,
  `mat_client` varchar(8) NOT NULL,
  `nom_client` varchar(20) NOT NULL,
  `prenom_client` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `num_tel`, `adr_client`, `type_id`, `mat_fiscale`, `mat_client`, `nom_client`, `prenom_client`) VALUES
(22, '58741236', 'Route tunis km 10', '0', '', '11025684', 'Karray', 'Saadia'),
(34, '56258789', 'hyyyy6675', '', '5828522', '', '', ''),
(36, '56258789', 'BP 103 Merkez El Alia', '', '5885', '', 'Primatec', ''),
(47, '58741236', 'Route manzel chaker km 2', '', '11897', '', 'FOD', ''),
(50, '56879412', 'BP 103 Merkez El Alia', '1', '5828522', '', 'FOD', ''),
(54, '7777', 'Route manzel chaker km 2', '0', '', '11025684', 'Karray', 'Saadia'),
(55, '', '', '', '', '', '', ''),
(56, '58741236', 'BP 103 Merkez El Alia', '1', '5828522', '', 'FOD', '');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `date_commande` date NOT NULL,
  `adresse_livraison` varchar(100) NOT NULL,
  `id_client` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `date_commande`, `adresse_livraison`, `id_client`) VALUES
(1, '0000-00-00', '', '0'),
(2, '0000-00-00', '', '0'),
(3, '0000-00-00', '', '0'),
(4, '0000-00-00', '', '0'),
(5, '0000-00-00', '', '0'),
(6, '0000-00-00', '', '0'),
(7, '0000-00-00', '', '0'),
(8, '0000-00-00', '', '0'),
(9, '0000-00-00', '', '0'),
(10, '0000-00-00', '', '0'),
(11, '0000-00-00', '', '0'),
(12, '0000-00-00', '', '0'),
(13, '0000-00-00', '', '0'),
(14, '0000-00-00', '', '0'),
(15, '0000-00-00', '', '0'),
(17, '0000-00-00', '', '0'),
(18, '0000-00-00', '', '0'),
(19, '0000-00-00', '', '0'),
(20, '0000-00-00', '', '0'),
(21, '0000-00-00', '', '0'),
(22, '0000-00-00', '', '0'),
(23, '0000-00-00', '', '0'),
(24, '0000-00-00', '', '0'),
(25, '0000-00-00', '', '0'),
(26, '0000-00-00', '', '0'),
(27, '0000-00-00', '', '0'),
(28, '0000-00-00', '', '0'),
(29, '0000-00-00', '', '0'),
(30, '0000-00-00', '', '0'),
(31, '0000-00-00', '', '0'),
(32, '0000-00-00', '', '0'),
(33, '0000-00-00', '', '0'),
(34, '0000-00-00', '', '0'),
(35, '0000-00-00', '', '0'),
(36, '0000-00-00', '', '0'),
(37, '0000-00-00', '', '0'),
(38, '0000-00-00', '', '0'),
(39, '0000-00-00', '', '0'),
(40, '0000-00-00', '', '0'),
(41, '0000-00-00', '', '0'),
(42, '0000-00-00', '', '0'),
(43, '0000-00-00', '', '0'),
(44, '0000-00-00', '', '0'),
(45, '0000-00-00', '', '0'),
(46, '0000-00-00', '', '0'),
(47, '0000-00-00', '', '0'),
(48, '0000-00-00', '', '0'),
(49, '0000-00-00', '', '0'),
(50, '0000-00-00', '', '0'),
(51, '0000-00-00', '', '0'),
(52, '0000-00-00', '', '0'),
(53, '0000-00-00', '', '0'),
(54, '0000-00-00', '', '0'),
(55, '0000-00-00', '', '0'),
(56, '0000-00-00', '', '0'),
(57, '0000-00-00', '', '0'),
(58, '0000-00-00', '', '0'),
(59, '0000-00-00', '', '0'),
(60, '0000-00-00', '', '0'),
(61, '0000-00-00', '', '0'),
(62, '2019-12-07', 'route Tunis km 8', '0'),
(63, '2019-12-07', 'route Tunis km 8', '0'),
(64, '0000-00-00', '', '22'),
(65, '0000-00-00', '', '22'),
(66, '0000-00-00', '', '22'),
(67, '2010-10-17', 'BP 103 Merkez El Alia, 40', '22'),
(68, '2010-10-17', 'BP 103 Merkez El Alia, 40', '22'),
(69, '2020-02-20', 'route Tunis km 8', '22'),
(70, '2020-02-20', 'route Tunis km 8', '22'),
(71, '2020-02-20', 'route Tunis km 8', '22'),
(72, '2013-02-20', 'route Tunis km 8', '22'),
(73, '2013-02-20', 'route Tunis km 8', '22'),
(74, '2020-10-15', 'route gremda km 7', '22'),
(75, '0000-00-00', '', ''),
(76, '0000-00-00', '', ''),
(77, '0000-00-00', '', ''),
(78, '0000-00-00', '', ''),
(79, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `id` int(11) NOT NULL,
  `qte_commande` int(11) NOT NULL,
  `prix_unitaire` float NOT NULL,
  `taux_remise_accorde` float NOT NULL,
  `TVA` float NOT NULL,
  `id_commande` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `details_commande`
--

INSERT INTO `details_commande` (`id`, `qte_commande`, `prix_unitaire`, `taux_remise_accorde`, `TVA`, `id_commande`) VALUES
(1, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0),
(8, 20, 2, 0, 0, 0),
(9, 60, 56, 0, 0, 0),
(10, 60, 56, 0, 0, 0),
(11, 60, 56, 0, 0, 0),
(12, 15, 9, 2, 1, 0),
(13, 15, 9, 2, 1, 0),
(14, 60, 20, 20, 3, 22),
(15, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id` int(11) NOT NULL,
  `num_facture` varchar(10) NOT NULL,
  `date_facture` date NOT NULL,
  `adr_facture` varchar(100) NOT NULL,
  `solde_facture` double NOT NULL,
  `etat_facture` char(1) NOT NULL,
  `tot_hors_tax` int(11) NOT NULL,
  `mnt_tva` int(11) NOT NULL,
  `totale_facture` int(11) NOT NULL,
  `tombre` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE `reglement` (
  `id` int(11) NOT NULL,
  `montant` float NOT NULL,
  `type_reglement` char(1) NOT NULL,
  `num_cheq` varchar(10) NOT NULL,
  `nom_banque` varchar(20) NOT NULL,
  `nom_client` varchar(20) NOT NULL,
  `date_echenace` date NOT NULL,
  `num_traite` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `remise`
--

CREATE TABLE `remise` (
  `id` int(11) NOT NULL,
  `taux_remise` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `remise`
--

INSERT INTO `remise` (`id`, `taux_remise`) VALUES
(1, '2%'),
(2, '5%'),
(3, '6%'),
(4, '8%');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bon_livraison`
--
ALTER TABLE `bon_livraison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `remise`
--
ALTER TABLE `remise`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT pour la table `bon_livraison`
--
ALTER TABLE `bon_livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reglement`
--
ALTER TABLE `reglement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `remise`
--
ALTER TABLE `remise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
