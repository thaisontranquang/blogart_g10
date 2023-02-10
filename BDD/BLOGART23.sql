-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 10 fév. 2023 à 11:46
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `BLOGART23`
--

-- --------------------------------------------------------

--
-- Structure de la table `ARTICLE`
--

CREATE TABLE `ARTICLE` (
  `numArt` int(8) NOT NULL,
  `dtCreArt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `libTitrArt` varchar(100) DEFAULT NULL,
  `libChapoArt` text,
  `libAccrochArt` varchar(100) DEFAULT NULL,
  `parag1Art` text,
  `libSsTitr1Art` varchar(100) DEFAULT NULL,
  `parag2Art` text,
  `libSsTitr2Art` varchar(100) DEFAULT NULL,
  `parag3Art` text,
  `libConclArt` text,
  `urlPhotArt` varchar(70) DEFAULT NULL,
  `numThem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ARTICLE`
--

INSERT INTO `ARTICLE` (`numArt`, `dtCreArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`) VALUES
(22, '2023-02-10 11:04:51', 'Réservez votre soirée du 21 mars, en avant pour la Bacchanight !', 'Appel à tous les couche-tard ! Eh oui, pour sa 8e édition, la soirée Bacchanight est de retour au musée des Beaux-arts présent dans la ville étudiante de Bordeaux, le 21 mars 2023 ! Cet événement culturel et festif offre une occasion unique pour les étudiantes et les étudiants de tous horizons de réinterpréter les collections permanentes du musée.\r\n', 'Laboratoire de créativité, techniques et arts au cœur d’une mutation ! ', 'La Bacchanight vient vous montrer que les musées ont encore de longs jours devant eux !\r\nBordeaux 7ème ville étudiante de France offre l\'occasion pour les étudiants de tous les horizons de présenter leur vision personnelle du musée et de ses œuvres d\'art. Le musée invite toutes les disciplines : danse, musique, sciences, arts, littérature, digital, installations, œnologie, mais surtout le droit d’animer la soirée ! Les différents publics que cherche à attirer la ville avec cet événement et les multiples disciplines représentées pendant cette nocturne donnent un nouveau visage au musée bordelais. L’idée de la Bacchanight est bien de découvrir et d’approcher le musée d’une nouvelle manière. C’est une nocturne à part entière pour la culture avec des spécificités qui lui sont propres. On y bouscule les codes des musées et institutions culturelles que vous avez l’habitude de connaître ! « Ne pas toucher », « Ne pas dépasser la ligne », vous connaissez les règles de ces lieux sacrés comme nous. Eh bien durant la Bacchanight, vous aurez la possibilité d’être en immersion au sein de projets uniques qui vous seront amenés par des étudiants, pour des étudiants.\r\n', 'La soirée étudiante la plus populaire de Bordeaux ?', 'La ville étudiante de Bordeaux regorge de nombreuses activités dédiées aux étudiants, mais la Bacchanight se démarque comme l\'un des événements les plus populaires de la ville. \r\nLa huitième édition de cette soirée culturelle sera l\'occasion idéale pour les étudiants de renforcer leur engagement envers l’art et la culture en découvrant les collections et expositions des musées de manière plus ludique et interactive. Ils pourront donner leur avis sur les expositions, participer à des ateliers artistiques, ou plus encore, contribuer de manière créative à l\'événement. De cette manière, nos étudiants bordelais auront l’opportunité de participer activement au renouvellement des musées lors de la Bacchanight en apportant une perspective plus jeune et dynamique. Cet événement singulier à la ville étudiante de Bordeaux participera à la mise en place de nouveaux projets visant à renouveler les musées et les rendre plus attractifs pour les générations futures notamment en permettant aux étudiants de rencontrer d’autres jeunes passionnés d’art et culture, de se détendre et de profiter de la musique en live, en garantissant divertissement et enrichissement culturel. Avec son atmosphère animée et sa variété musicale, la Bacchanight s’ouvre également à un public plus large en proposant des activités telles que des visites guidées, des débats ou encore des ateliers créatifs. Que vous recherchiez une soirée décontractée entre amis ou une soirée de danse et de fête excitante, la Bacchanight est l\'endroit idéal pour vous. ', 'Une soirée, oui, mais en plus gratuite et accessible ? J’y vais.', 'D\'ailleurs, Bacchanight... c\'est quoi ? Tiré du mot bacchanales, les fêtes données en l\'honneur de dieu du vin Bacchus, la Bacchanight de Bordeaux est l\'un des moments que l’on attend le plus quand on est étudiant ! Réservez-votre soirée, cette année le musée des beaux arts  (site officiel du musée des Beaux-Arts de Bordeaux) nous donne rendez-vous le mardi 21 mars 2023. De 20h à minuit, c’est l’occasion rêvée de se divertir après une journée de cours bien chargée. La première fois que nous y sommes allés c’était en 2016. Mise à part en 2020, à cause de la pandémie mondiale,  depuis nous y allons chaque année : après tout c’est gratuit et on peut même y déguster du bon vin Bordelais. \r\n Au programme ?  Des activités à ne plus savoir où donner de la tête pour une soirée aussi enrichissante que divertissante. Le Musée des Beaux-Arts destiné au grand public, est accessible pour que tout le monde puisse en profiter. Les personnes à mobilité réduite ayant besoin d’aménagement spécifique, on ne vous oublie pas ! Le musée est équipé d’ascenseurs et de rampes pour faciliter l\'accès. \r\nLa Bacchanight est une soirée idéale pour tous de s’accorder un moment festif à moindre coût ! Se trouvant au cœur de la ville, le Musée des Beaux-Arts offre la possibilité de se garer aux alentours ou bien de prendre les transports en commun pour les plus courageux d’entre vous. Si l’envie vous prend, vous pourrez même faire un détour près de la place des Quinconces accessible à 10min à pied pour une dernière balade nocturne.  \r\n', 'Le Musée des Beaux-Arts de Bordeaux rompt avec les codes traditionnels et en y participant, on aide à faire vivre et prospérer ce type d’initiative. \r\nFinalement, que ce soit pour une soirée décontractée à déguster du vin bordelais ou en étant acteur actif présentant son art, l’événement risque de vous séduire tout autant qu\'à nous.  \r\n\r\nOn espère que cet article vous a été utile ! Avez-vous déjà participé à la Bacchanight les années précédentes ? Dites-le-nous en commentaire de cet article !\r\n', '/src/images/uploads/63e624d379c42pexels-mark-angelo-sampan-1587927.jpg', 1),
(23, '2023-02-10 11:06:28', 'Les coulisses d’un musée. À La rencontre de Anais Umba Wa ', 'Faciliter le dialogue entre l’œuvre et le public et assurer l\'accès à la culture pour tous, Anaïs Umba Wa, nous présente sous un angle bien à elle le métier de médiatrice culturelle au musée des Beaux-Arts de Bordeaux. Elle a gentiment accepté de répondre à toutes nos questions et on est sympa, on vous partage aujourd’hui un résumé de cette interview très enrichissante. ', 'Petit résumé du parcours de Anais Umba Wa.', 'C\'est à la suite d\'un B.T.S tourisme et d\'une licence de médiation culturelle que Anaïs, est depuis un an, médiatrice culturelle au musée des Beaux-Arts de Bordeaux. Durant sa licence, elle a eu l\'occasion d\'effectuer une multitude de stages (facile quand notre professeur en licence est la médiatrice du musée CAPC de Bordeaux). “En classe on effectuait des médiations à ses côtés avec des œuvres d’art contemporain et j’en garde un super bon souvenir”.\r\nElle intègre immédiatement après sa licence, une association dans un des quartiers prioritaires de la ville de Bordeaux : Grand Parc. Entre les ateliers d\'artistes contemporains et les ateliers avec les enfants et les jeunes du quartier, c\'était en quelque sorte ses premiers pas dans le métier de médiatrice culturelle. Aujourd\'hui elle exerce un double poste en tant que médiatrice et responsable de la communication au musée des Beaux-Arts (et oui, vous avez devant vous une véritable passionnée). La “culture pour tous” est bien plus qu\'une philosophie pour Anaïs, mais un objectif.  “La médiation, c\'est faire prendre conscience que tout le monde à sa place au musée”. Plus d’excuses pour les non habitués des lieux ! Son travail contribue à combler les fossés entre vous (le public) et la culture en créant un environnement plus inclusif dans lequel chacun d’entre vous peut se sentir à l’aise pour découvrir et apprécier nos musées. ', 'Au fait, c’est quoi un médiateur culturel dans un musée ?', 'Travailler ses visites ou les réviser, chercher des nouvelles informations et de nouveaux axes à aborder, le métier de médiateur culturel est un travail qui allie recherche et réflexion. La médiatrice culturelle a pour rôle de faciliter le dialogue entre l’œuvre et vous. Vrai caméléon, elle adapte au travers de visites thématiques son discours en fonction de son public. On vous explique ! Anaïs par exemple travaille majoritairement auprès de vos enfants. Vous vous en doutez, on ne présente pas une œuvre à un enfant de la même façon qu\'à un adulte. Ainsi, elle travaille au préalable ses visites pour rendre accessible les œuvres d’art, présentes au musée pour tout le monde.\r\n\r\nPar moments la médiatrice culturelle va être amenée à travailler au côté du conservateur qui lui délivre une multitude d\'informations. “Au musée, nous avons la chance d’avoir des conservateurs qui ont travaillé sur certaines œuvres”. C’est à la médiatrice de devoir par la suite traiter et vulgariser ces informations, et dans le cas d\'Anaïs, au public le plus jeune. Néanmoins ”attention, à ne pas enlever de la valeur aux informations” nous met en garde Anaïs.\r\n\r\n“J’ai toujours aimé travailler avec le public”. Le métier de médiateur est un métier passion où la notion de partage est essentielle. Lorsque l’on aime le patrimoine et le musée, ça donne envie de le raconter. On doit bien l\'avouer, il n\'y a pas énormément de sécurité d’emploi, néanmoins, une chose est sûre, il n\'y a pas de place à la routine. Ce métier offre une grande flexibilité, “c’est tous les jours nouveau”.', '“La culture pour tous” Anaïs nous donne son point de vue ', 'Pass culture, carte jeune, en France il existe de nombreux dispositifs permettant l\'accès au musée et à la culture. Malgré tout, on reproche souvent à la jeunesse de ne pas être cultivée et de subir une forme d’appauvrissement culturel. On a donc demandé à Anaïs de nous donner son point de vue sur la question. “Absolument pas ! D’autant plus que l’on peut se cultiver de plusieurs manières différentes et non uniquement en se rendant au musée”. Les jeunes n’ont pas moins de culture nous affirme Anaïs, néanmoins, elle souligne une tendance. “Malheureusement, c’est triste à dire, mais on remarque que les enfants résident aux Chartrons sont plus familiers avec les lieux et codes du musée”. “Ne pas toucher”, “lever la main avant de parler” ou encore  “Ne pas hurler” sont des règles que vous connaissez à coup sûr si vous êtes des habitués du musée. Seulement les jeunes issus de certaines zones de la ville sont moins habitués et c’est au médiateur de s’adapter et de les intégrer pour qu’ils se familiarisent avec les lieux et qu’ils gardent un bon souvenir de leurs visites.\r\n\r\n“Le musée des Beaux-Arts est un musée de vieux” c’est ce que Anaïs à pour habitude d’entendre. Dans l’imaginaire des jeunes, le musée des Beaux-Arts est moins tendance, en opposition au musée des arts contemporains où les jeunes ont plus de facilité à s’identifier aux messages transmis par les œuvres. Comment lutter contre ça ? \r\n“En organisant des événements telle que la Bacchanight, on essaye de montrer aux jeunes qu’ils ont leur place au musée des Beaux-Arts.”', 'Anaïs Umba Wa, nous a présenté le quotidien d’un acteur clé du musée : le médiateur culturel. Véritable passionnée et engagée à transmettre son savoir au public, elle n’hésite pas, tout comme ses compatriotes, à s’adapter à tout public. Après tout, c’est bien ça le principe de “La culture pour tous”.\r\n\r\nCe type d’interview d\'acteurs clés aux musées vous plaît ? Si oui, dites-le-nous en commentaire ! Et pour la prochaine, quel acteur souhaitez-vous découvrir dans les interviews B’art Deaux ?\r\n', '/src/images/uploads/63e625341cbdbpexels-polinach-15475847.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `COMMENT`
--

CREATE TABLE `COMMENT` (
  `numCom` int(10) NOT NULL,
  `dtCreCom` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `libCom` text NOT NULL,
  `attModOK` tinyint(1) DEFAULT '0',
  `dtModCom` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `notifComKOAff` text,
  `delLogiq` tinyint(1) DEFAULT '0',
  `numArt` int(8) NOT NULL,
  `numMemb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `LIKEART`
--

CREATE TABLE `LIKEART` (
  `numMemb` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `likeA` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `MEMBRE`
--

CREATE TABLE `MEMBRE` (
  `numMemb` int(10) NOT NULL,
  `prenomMemb` varchar(70) NOT NULL,
  `nomMemb` varchar(70) NOT NULL,
  `pseudoMemb` varchar(70) NOT NULL,
  `passMemb` varchar(70) NOT NULL,
  `eMailMemb` varchar(100) NOT NULL,
  `dtCreaMemb` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numStat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `MEMBRE`
--

INSERT INTO `MEMBRE` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `numStat`) VALUES
(20, 'Marlène', 'Dulaurans', 'Administrateur', '$2y$10$aGWqJx.YhKoZRDTJ2/gvMuGZFN3lZK8Q7PwNjWr6TnsQoF3//2Xmm', 'admin@gmail.com', '2023-02-10 08:36:40', 1),
(25, 'Martine', 'BORNERIE', 'Membre', '$2y$10$zklS/LKTTBpxQy.xL0D1hecGlpJMiOncbj9jTmNHNSwRC2/BezA/C', 'martine@gmail.com', '2023-02-10 11:35:09', 3);

-- --------------------------------------------------------

--
-- Structure de la table `MOTCLE`
--

CREATE TABLE `MOTCLE` (
  `numMotCle` int(8) NOT NULL,
  `libMotCle` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `MOTCLE`
--

INSERT INTO `MOTCLE` (`numMotCle`, `libMotCle`) VALUES
(8, 'Étudiant'),
(9, 'Vin'),
(10, 'Bordeaux'),
(11, 'Musée'),
(12, 'Accessibilité'),
(13, 'Culture'),
(14, 'Interculturel');

-- --------------------------------------------------------

--
-- Structure de la table `MOTCLEARTICLE`
--

CREATE TABLE `MOTCLEARTICLE` (
  `numArt` int(8) NOT NULL,
  `numMotCle` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `MOTCLEARTICLE`
--

INSERT INTO `MOTCLEARTICLE` (`numArt`, `numMotCle`) VALUES
(22, 8),
(22, 9),
(22, 10),
(22, 11),
(22, 12),
(23, 10),
(23, 11),
(23, 12),
(23, 13),
(23, 14);

-- --------------------------------------------------------

--
-- Structure de la table `STATUT`
--

CREATE TABLE `STATUT` (
  `numStat` int(5) NOT NULL,
  `libStat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `STATUT`
--

INSERT INTO `STATUT` (`numStat`, `libStat`) VALUES
(1, 'Administrateur'),
(2, 'Modérateur'),
(3, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `THEMATIQUE`
--

CREATE TABLE `THEMATIQUE` (
  `numThem` int(10) NOT NULL,
  `libThem` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `THEMATIQUE`
--

INSERT INTO `THEMATIQUE` (`numThem`, `libThem`) VALUES
(1, 'Événement'),
(2, 'Acteur-clé');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  ADD PRIMARY KEY (`numArt`),
  ADD KEY `ARTICLE_FK` (`numArt`),
  ADD KEY `FK_ASSOCIATION_1` (`numThem`);

--
-- Index pour la table `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD PRIMARY KEY (`numCom`),
  ADD KEY `COMMENT_FK` (`numCom`),
  ADD KEY `FK_ASSOCIATION_2` (`numArt`),
  ADD KEY `FK_ASSOCIATION_3` (`numMemb`);

--
-- Index pour la table `LIKEART`
--
ALTER TABLE `LIKEART`
  ADD PRIMARY KEY (`numMemb`,`numArt`),
  ADD KEY `LIKEART_FK` (`numMemb`,`numArt`),
  ADD KEY `FK_LIKEART1` (`numArt`);

--
-- Index pour la table `MEMBRE`
--
ALTER TABLE `MEMBRE`
  ADD PRIMARY KEY (`numMemb`),
  ADD KEY `MEMBRE_FK` (`numMemb`),
  ADD KEY `FK_ASSOCIATION_4` (`numStat`);

--
-- Index pour la table `MOTCLE`
--
ALTER TABLE `MOTCLE`
  ADD PRIMARY KEY (`numMotCle`),
  ADD KEY `MOTCLE_FK` (`numMotCle`);

--
-- Index pour la table `MOTCLEARTICLE`
--
ALTER TABLE `MOTCLEARTICLE`
  ADD PRIMARY KEY (`numArt`,`numMotCle`),
  ADD KEY `MOTCLEARTICLE_FK` (`numArt`),
  ADD KEY `MOTCLEARTICLE2_FK` (`numMotCle`);

--
-- Index pour la table `STATUT`
--
ALTER TABLE `STATUT`
  ADD PRIMARY KEY (`numStat`),
  ADD KEY `STATUT_FK` (`numStat`);

--
-- Index pour la table `THEMATIQUE`
--
ALTER TABLE `THEMATIQUE`
  ADD PRIMARY KEY (`numThem`),
  ADD KEY `THEMATIQUE_FK` (`numThem`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  MODIFY `numArt` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `COMMENT`
--
ALTER TABLE `COMMENT`
  MODIFY `numCom` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `MEMBRE`
--
ALTER TABLE `MEMBRE`
  MODIFY `numMemb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `MOTCLE`
--
ALTER TABLE `MOTCLE`
  MODIFY `numMotCle` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `STATUT`
--
ALTER TABLE `STATUT`
  MODIFY `numStat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `THEMATIQUE`
--
ALTER TABLE `THEMATIQUE`
  MODIFY `numThem` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`numThem`) REFERENCES `THEMATIQUE` (`numThem`);

--
-- Contraintes pour la table `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`),
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`numMemb`) REFERENCES `MEMBRE` (`numMemb`);

--
-- Contraintes pour la table `LIKEART`
--
ALTER TABLE `LIKEART`
  ADD CONSTRAINT `FK_LIKEART1` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`),
  ADD CONSTRAINT `FK_LIKEART2` FOREIGN KEY (`numMemb`) REFERENCES `MEMBRE` (`numMemb`);

--
-- Contraintes pour la table `MEMBRE`
--
ALTER TABLE `MEMBRE`
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`numStat`) REFERENCES `STATUT` (`numStat`);

--
-- Contraintes pour la table `MOTCLEARTICLE`
--
ALTER TABLE `MOTCLEARTICLE`
  ADD CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`numMotCle`) REFERENCES `MOTCLE` (`numMotCle`),
  ADD CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`numArt`) REFERENCES `ARTICLE` (`numArt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
