-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 14 jan. 2020 à 20:46
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

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
(129, 'article 12', 9, 2, 10, '', 'medicament', 'A001', 0, 0),
(130, 'article 2', 0, 1, 0, '', 'med', 'a002', 0, 0),
(131, 'article 3', 0, 0, 0, 'pY0h3Bc5.png', 'med', 'a003', 0, 0),
(135, 'adol', 10, 3, 10, 'pWYlM4rF.png', 'mal', '', 0, 0),
(138, 'test', 3, 20, 20, '7MYrR2zP.png', 'tester ceci', '', 0, 0);

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
  `adr_client` int(50) NOT NULL,
  `type_id` char(1) NOT NULL,
  `mat_fiscale` int(10) NOT NULL,
  `mat_client` int(8) NOT NULL,
  `nom_client` varchar(20) NOT NULL,
  `prenom_client` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `date_commande` date NOT NULL,
  `adresse_livraison` varchar(100) NOT NULL,
  `id_client` int(10) NOT NULL,
  `num_cmd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `date_commande`, `adresse_livraison`, `id_client`, `num_cmd`) VALUES
(2, '2020-01-01', 'tanyor km2', 0, 'cmd_01'),
(3, '2020-01-14', 'tanyor km2 ', 0, 'cmd_011');

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
  `id_commande` int(10) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `details_commande`
--

INSERT INTO `details_commande` (`id`, `qte_commande`, `prix_unitaire`, `taux_remise_accorde`, `TVA`, `id_commande`, `id_article`) VALUES
(1, 3, 0, 0, 20, 0, 130),
(2, 3, 10, 0, 20, 0, 135);

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
  `date_echeance` date NOT NULL,
  `num_traite` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reglement`
--

INSERT INTO `reglement` (`id`, `montant`, `type_reglement`, `num_cheq`, `nom_banque`, `nom_client`, `date_echeance`, `num_traite`) VALUES
(2, 400, 't', '', 'UBCI', 'Molka', '2020-01-23', '789'),
(30, 100000, 'c', '0047', 'Biat', 'Issam', '2020-12-12', ''),
(31, 50000, 'c', '00089', 'ATB', 'Saadia', '2020-05-14', '');

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

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', '0c7540eb7e65b553ec1ba6b20de79608');

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
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reglement`
--
ALTER TABLE `reglement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `remise`
--
ALTER TABLE `remise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
