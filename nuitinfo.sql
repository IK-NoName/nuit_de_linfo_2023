-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 déc. 2023 à 03:14
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nuitinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `text` varchar(5000) NOT NULL,
  `response` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `text`, `response`) VALUES
(1, 'Tu manges de la viande tous les jours ?', 0),
(2, 'Tu commande souvent sur shein/amazon/ebay ?', 0),
(4, 'Tu manges souvent des aliments bio ?', 1),
(5, 'Tu achètes tes légumes au marché ?', 1),
(6, 'Tu tries tes déchets ?', 1),
(7, 'Tu achètes souvent des produits fabriqués en France ?', 1),
(8, 'Tu utilises un compost ?', 1),
(9, 'Tu as un \'stop pub\' sur ta boîte aux lettres ?', 1),
(10, 'Tu changes tous les ans de téléphone ?', 0),
(11, 'Tu fumes ? ', 0),
(12, 'Tu renouvelles souvent ta garde-robe ?', 0),
(13, 'Tu es végétarien ou végan ?', 1),
(14, 'Tu achète souvent des couverts/pailles/assiettes/gobelets en plastique ?', 0),
(15, 'Tu vas souvent acheter des produits alimentaires en libre service ? ', 1),
(16, 'Tu vas au travail/école en vélo ou à pied ?', 1),
(17, 'Tu prends souvent l’avion ?', 0),
(18, 'Tu as déjà pris un jet privé ?', 0),
(19, 'Tu prends la voiture tous les jours ?', 0),
(20, 'Tu prends les transports en commun ?', 1),
(21, 'Tu fais des petits trajets à pied ou à vélo dans ton quotidien ?', 1),
(22, 'Tu vas souvent acheter des produits alimentaires en libre service ?', 1),
(23, 'Tu possèdes un 4x4 ?', 0),
(24, 'Tu as plus de 1 voiture ? ', 0),
(25, 'Tu pratiques un sport qui nécessite une machine motorisée ?', 0),
(26, 'Tu penses que le transport de marchandises par bateau entre continents ne pollue pas tant que ça ?', 0),
(27, 'Tu habites au château de Versailles ?', 0),
(28, 'Tu habites au château de Versailles ?', 0),
(29, 'Tu restes presque 1h sous la douche (avec eau) ?', 0),
(30, 'Tu débranches tes appareils la nuit ?', 1),
(31, 'Tu penses que les éoliennes sont une bonne énergie ?', 1),
(32, 'Tu penses que le pétrole est une bonne énergie ?', 0),
(33, 'En hiver, ton logement est à plus de 21°C ?', 0),
(34, 'Tu utilises une voiture électrique ?', 1),
(35, 'Tu chauffes quand tu es au travail ? ', 0),
(36, 'Tu dors la lumière allumée ?', 0),
(37, 'Tu penses que l’énergie hydraulique est une mauvaise énergie pour la planète ? ', 0),
(38, 'Tu penses que la France n’as pas son rôle à jouer dans la transition vers des énergies plus renouvelables ?', 0),
(39, 'Le pétrole, le charbon et le gaz sont des énergies renouvelables ?', 0),
(40, 'Tu pisses sous la douche ? ', 1),
(41, 'Les éoliennes, les barrages et les panneaux solaires sont des énergies fossiles ? ', 0),
(42, 'L’énergie au gaz est la meilleure énergie possible pour la planète ? ', 0),
(43, 'T’es chauffé au gaz ? ', 0),
(44, 'Ton habitation est une passoire thermique ?', 0),
(45, 'Ton logement est éco-construit (fabriqué en bois/pierre/paille/terre) ?', 1),
(46, 'Ton logement est chauffé avec une pompe à chaleur, une bouteille de gaz ou l’électricité ?', 1),
(47, 'Tu utilises la clim l’été ?', 0),
(48, 'Tu as une piscine privée ?', 0),
(49, 'Tu as des panneaux solaires sur ton logement ?', 1),
(50, 'Est-ce que tu as une éolienne dans ton jardin ?', 1),
(51, 'Est-il autorisé de louer un logement dont la consommation énergétique excède 450 kW/m²/an ?', 0),
(52, 'Le chauffage à l’électricité est le meilleur ?', 1),
(53, 'Tu es déjà allé au Zoo ?', 0),
(54, 'Tu fais de la chasse ?', 0),
(55, 'Tu jettes par la fenêtre tes déchets ?', 0),
(57, 'Tu jette tes clopes par terre ?', 0),
(58, 'Tu gaspilles souvent de la nourriture ? ', 0),
(59, 'Tu as déjà fait du tourisme sur le dos d’un éléphant ?', 0),
(60, 'Tu arroses ta pelouse pendant les périodes de sécheresse ?', 1),
(61, 'Tu fais des barbecues pendant les périodes de sécheresse ?', 0),
(62, 'La température moyenne de la surface Terre est à 15°C ?', 1),
(63, 'Est-ce que le pouvoir de réchauffement du méthane est supérieur à celui du CO2 ? ', 1),
(64, 'Tu fais partie (ou as fait partie) d’une association pour le bien être animal ?', 1),
(65, 'Tu as déjà fait une manifestation contre le réchauffement climatique ?', 1),
(66, 'Le changement climatique n’est que temporaire ?', 0),
(67, 'Le changement climatique n’est pas aussi grave que l’on pense ?', 0),
(68, 'La faune et la flore sont capables de s’adapter au changement climatique ?', 0),
(69, 'Les toilettes consomment 9L par chasse d’eau. ', 2),
(70, 'Depuis le 1er janvier 2023, l’ensemble des logements dont la consommation énergétique excède les 450 kWh/m²/an sont interdits à la location.\r\n', 2),
(71, 'Pour savoir si ta maison est une passoire énergétique, consulte le diagnostic de performance énergétique (DPE), fourni avec le contrat de vente du bien.\r\n', 2),
(72, 'Le pétrole, charbon et gaz sont des énergies fossiles et fortement émettrices de gaz à effet de serre.', 2),
(73, 'Tu peux prendre des petits sacs en tissus pour mettre tes produits libres services à la place des sacs en papier ou plastique. Et c’est pareil pour le pain ! 😉', 2),
(74, 'Tu peux aller en friperies pour acheter tes vêtements au lieu d’aller dans des grands magasins ou de commander sur internet. \r\n', 2),
(75, 'Sans cet effet de serre, il ferait -18°C sur Terre et toute vie y serait impossible.\r\n', 2),
(76, 'Selon le sixième rapport d’évaluation du GIEC (2021), son pouvoir de réchauffement est 26 à 34 fois supérieur à celui du CO2 sur une période de 100 ans et entre 86 et 90 fois supérieur sur 20 ans. Le méthane est responsable de près d’un quart du réchauffement actuel du climat.', 2),
(77, 'Tu peux faire des petits trajets à pied, en trottinette ou en vélo pour émettre moins de CO2. \r\n', 2),
(78, 'Avoir un compost permet de recycler plus efficacement ses déchets organiques. \r\n', 2),
(79, 'Ne pas chauffer au-dessus de 21°C en hiver permet de moins polluer. \r\n', 2),
(80, 'Ne pas avoir une piscine privée permet d’économiser de l’eau potable et donc de préserver cette ressource.', 2),
(81, 'Éteindre les lumières en sortant d’une pièce permet d’économiser de l’énergie. ', 2),
(82, 'Installer des panneaux solaires sur son logement permet de moins polluer.', 2),
(83, 'Rouler en voiture électrique permet de limiter les impacts du pétrole sur la planète (extraction et utilisation).', 2),
(84, 'Uriner sous la douche permet d’économiser une chasse d’eau (soit 9L d’eau !).', 2),
(85, 'Tu peux aller en friperies pour acheter tes vêtements au lieu d’aller dans des grands magasins ou de commander sur internet.', 2),
(86, 'Ne pas manger de la viande tous les jours permet d’agir pour la cause animale, d\'économiser énormément d’eau, de nourriture et d’électricité pour les élever. ', 2),
(87, 'Acheter des produits en France permet de moins polluer le transport de marchandise. ', 2),
(88, 'Garder ses appareils électroniques plusieurs années permet de moins polluer sur l’extraction de minerais rares qui composent ces appareils;', 2),
(89, 'Jeter une cigarette par terre peut provoquer des feux de forêt. ', 2),
(90, 'La faune et la flore ne peuvent pas s’adapter à un réchauffement climatique aussi rapide que celui que nous vivons. Plusieurs espèces s’éteignent à cause de ça.', 2),
(91, 'Privilégier le train ou le bateau au lieu de l’avion pour les longs trajets permet de moins polluer. ', 2),
(92, 'Les longs trajets de bateau (transport de marchandise ou encore les croisières) polluent énormément. \r\n', 2),
(93, 'Si vous devez prendre la voiture tous les jours pour vous rendre au travail, essayez le covoiturage pour moins polluer.', 2),
(94, 'Utiliser les transports en commun permet d’éviter les bouchons et d’émettre moins de CO2.', 2);

-- --------------------------------------------------------

--
-- Structure de la table `question_stats`
--

CREATE TABLE `question_stats` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_stat` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `question_stats`
--

INSERT INTO `question_stats` (`id`, `id_question`, `id_stat`, `value`) VALUES
(1, 1, 1, 3),
(2, 2, 1, 4),
(3, 4, 1, 4),
(4, 5, 1, 5),
(5, 6, 1, 1),
(6, 7, 1, 3),
(7, 8, 1, 3),
(8, 9, 1, 1),
(9, 10, 1, 2),
(10, 11, 1, 2),
(11, 12, 1, 2),
(12, 13, 1, 5),
(13, 14, 1, 2),
(14, 15, 1, 4),
(15, 16, 2, 4),
(16, 17, 2, 1),
(17, 18, 2, 1),
(18, 19, 2, 3),
(19, 20, 2, 3),
(20, 21, 2, 4),
(21, 22, 1, 3),
(22, 23, 2, 1),
(23, 24, 2, 2),
(24, 25, 2, 1),
(25, 26, 2, 1),
(26, 28, 3, 3),
(27, 29, 3, 1),
(28, 30, 3, 3),
(29, 31, 3, 1),
(30, 32, 3, 2),
(31, 33, 3, 2),
(32, 34, 3, 4),
(33, 35, 3, 3),
(34, 36, 3, 1),
(35, 37, 3, 2),
(36, 38, 3, 2),
(37, 39, 3, 5),
(38, 40, 3, 5),
(39, 41, 3, 5),
(40, 42, 3, 2),
(41, 43, 4, 2),
(42, 44, 4, 3),
(43, 45, 4, 5),
(44, 46, 4, 5),
(45, 47, 4, 3),
(46, 48, 4, 2),
(47, 49, 4, 4),
(48, 50, 4, 5),
(49, 51, 4, 3),
(50, 52, 4, 2),
(51, 53, 5, 1),
(52, 54, 5, 2),
(53, 55, 5, 2),
(54, 57, 5, 2),
(55, 58, 5, 3),
(56, 59, 5, 1),
(57, 60, 5, 3),
(58, 61, 5, 3),
(59, 62, 5, 4),
(60, 63, 5, 5),
(61, 64, 5, 4),
(62, 65, 5, 3),
(63, 66, 5, 1),
(64, 67, 5, 1),
(65, 68, 5, 3),
(66, 69, 6, 0),
(67, 70, 6, 0),
(68, 71, 6, 0),
(69, 72, 6, 0),
(70, 73, 6, 0),
(71, 74, 6, 0),
(72, 75, 6, 0),
(73, 76, 6, 0),
(74, 77, 6, 0),
(75, 78, 6, 0),
(76, 76, 6, 0),
(77, 77, 6, 0),
(78, 78, 6, 0),
(79, 79, 6, 0),
(80, 80, 6, 0),
(81, 81, 6, 0),
(82, 82, 6, 0),
(83, 83, 6, 0),
(84, 84, 6, 0),
(85, 85, 6, 0),
(86, 86, 6, 0),
(87, 87, 6, 0),
(88, 88, 6, 0),
(89, 89, 6, 0),
(90, 90, 6, 0),
(91, 91, 6, 0),
(92, 92, 6, 0),
(93, 93, 6, 0),
(94, 94, 6, 0);

-- --------------------------------------------------------

--
-- Structure de la table `stat`
--

CREATE TABLE `stat` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stat`
--

INSERT INTO `stat` (`id`, `name`) VALUES
(1, 'Consommation'),
(2, 'Transports/Mobilités'),
(3, 'Energie'),
(4, 'Bâtiment'),
(5, 'Biodiversité'),
(6, 'Tips/ Le savais-tu ?');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `password` varchar(5000) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_stats`
--

CREATE TABLE `user_stats` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_stat` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `question_stats`
--
ALTER TABLE `question_stats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_stats`
--
ALTER TABLE `user_stats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT pour la table `question_stats`
--
ALTER TABLE `question_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT pour la table `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_stats`
--
ALTER TABLE `user_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
