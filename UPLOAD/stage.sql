-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 mars 2023 à 15:44
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `Rdate` varchar(255) NOT NULL,
  `Rhour` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `state` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `appointments`
--

INSERT INTO `appointments` (`id`, `nom_complet`, `email`, `phone`, `Rdate`, `Rhour`, `method`, `service`, `state`) VALUES
(4, 'DOCTEUR ANAS ABOULKALAM', 'anas@gmail.com', '0600000000', '01/26/2023', '8:04 PM', '2', '1', 1),
(5, 'Mohamed Abdellaoui', 'm3d.abdellaoui@gmail.com', '0655889486', '01/26/2023', '5:59 PM', 'method de consultation', '2', 1),
(6, 'Mohamed Abdellaoui', 'm3d.abdellaoui@gmail.com', '0655889486', '02/02/2023', '5:59 PM', '1', '3', 1);

-- --------------------------------------------------------

--
-- Structure de la table `blocked_ip`
--

CREATE TABLE `blocked_ip` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `block_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `blocked_ip`
--

INSERT INTO `blocked_ip` (`id`, `ip_address`, `block_time`) VALUES
(87, '::1', 1675284575);

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `nom_completAr` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `domaineAr` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `descrAr` text NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `visibility` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `nom_complet`, `nom_completAr`, `domaine`, `domaineAr`, `descr`, `descrAr`, `file_path`, `visibility`) VALUES
(17, 'Dr. My El Hassan SOUIDI', 'مولاي الحسن سويدي', 'Avocat fondateur ', 'المحامي المؤسس', 'Fondateur et avocat principal du cabinet, Dr. My El Hassan SOUIDI intervient pour le compte de ses clients en : conseil juridique, élaboration des contrats et actes juridiques, en contentieux judiciaire avec une vocation orientée vers les modes alternatifs de règlement des conflits.\r\nDr. My El Hassan SOUIDI a développé au fil des années une forte expertise en matière judiciaire. Avant d’intégrer le barreau, il a exercé en qualité de juge d\'assise et du parquet.\r\nA son authentique pratique judiciaire et son lourd bagage académique, Dr. My El Hassan SOUIDI fait preuve d’une assiduité dans différents congrès et conférences de degré important.\r\nAyant des certifications nationales et internationales en matière des droits de l’homme et bien en d’autres disciplines du droit et de la justice délivrées par des organismes d’envergure universelle dont nous pouvons citer :\r\n* The American Bar Association Rule Of Law Initiative.\r\n* Le Conseil International pour la Réhabilitation des Victimes de la Torture. \r\n* Le Centre de Documentation, d’Information et de Formation en Droits de l’Homme de Rabat.\r\n* L’Office des Nations Unies contre La Drogue et le Crime.\r\n* The Saudi Law Training Center.\r\n* Le Centre d’Etudes en Droits Humains et Démocratie.\r\nA L’ère des MARC, Dr. My El Hassan est titulaire d’une multitude d’attestations à caractère international en matière d’arbitrage.\r\nDr. My El Hassan SOUIDI est multilingue : opérationnel en Arabe, Français et Anglais.\r\nIl collabore avec des experts de premier plan dans de multiples domaines (finance, assurance, fiscalité….), ainsi qu’avec d’autres cabinets d’avocats nationaux voire même internationaux.', 'المؤسس والمحامي الرئيسي للشركة ، الدكتور مولاي الحسن السويدي ، يعمل بالنيابة عن موكليه في: الاستشارات القانونية ، صياغة العقود والأفعال القانونية ، في التقاضي القانوني مع مهنة موجهة نحو طرق بديلة لحل النزاعات.\r\nطور د. ماي الحسن السويدي على مر السنين خبرة قوية في الشؤون القضائية. قبل انضمامه إلى نقابة المحامين ، مارس مهنة قاضي الجنايات ومكتب المدعي العام.\r\nمن خلال ممارسته القضائية الأصيلة وخلفيته الأكاديمية الثقيلة ، يبدي د. ماي الحسن السويدي الجدية في العديد من المؤتمرات والمؤتمرات ذات الدرجات العلمية المهمة.\r\nالحصول على شهادات وطنية ودولية في مجال حقوق الإنسان والعديد من تخصصات القانون والعدالة الأخرى الصادرة عن منظمات ذات نطاق عالمي يمكننا الاستشهاد بها:\r\n* مبادرة سيادة القانون لنقابة المحامين الأمريكية.\r\n* المجلس الدولي لتأهيل ضحايا التعذيب.\r\n- مركز التوثيق والمعلومات والتدريب على حقوق الإنسان بالرباط.\r\n* مكتب الأمم المتحدة المعني بالمخدرات والجريمة.\r\n* المركز السعودي للتدريب القانوني.\r\n* مركز دراسات حقوق الإنسان والديمقراطية.\r\nفي عهد مارك ، حصلت د. ماي الحسن على العديد من الشهادات الدولية في التحكيم.\r\nد. ماي الحسن سويدي متعدد اللغات: يعمل باللغات العربية والفرنسية والإنجليزية.\r\nيتعاون مع خبراء رائدين في مجالات متعددة (المالية والتأمين والضرائب وما إلى ذلك) ، وكذلك مع شركات المحاماة الوطنية وحتى الدولية.', 'img/team/63fcefa596747.png', 1),
(18, 'Meriem BOUALAM', 'مريم بوعلام', 'Médiatrice', 'وسيط', 'Experte en communication et en sciences de l’information, journaliste professionnelle par excellence spécialisée en production des émissions formant ainsi une renommée au niveau national et international : \r\nMeriem BOUALAM est titulaire du prix d’Excellence remis par le Centre d’Excellence de Marrakech.\r\nGrande militante des droits de l’homme à travers ses actions sociales, Meriem BOUALAM est membre de l’Association de Protection des Droits des Consommateurs de Marrakech, membre de la Commission Régionale de la Prise en charge des Femmes et Enfants Victimes de Violence et aussi membre de la Fédération Internationale des Femmes Africaines.\r\nAssidue à une panoplie de conférences et de congrès dans divers domaines majeurs, et avec ce large éventail de compétences, Meriem BOUALAM s’est orientée vers la médiation et l’arbitrage en obtenant le diplôme de Médiateur de l’institut de formation à la médiation et à la négociation de Paris 6 ainsi que des certificats internationaux spécialisés en matière d\'arbitrage.\r\nSon expertise lui permet d\'accomplir sa mission de Médiatrice avec une technicité qualitative.\r\nMeriem BOUALAM est plurilingue : opérationnelle en Arabe, Français et Anglais.', 'خبير في علوم الاتصال والمعلومات ، صحفي محترف بامتياز متخصص في إنتاج البرامج مما يشكل سمعة على المستوى الوطني والدولي:\r\nمريم بوعلام حاصلة على جائزة التميز التي يمنحها مركز مراكش للتميز.\r\nمريم بوعلام ناشطة كبيرة في مجال حقوق الإنسان من خلال أعمالها الاجتماعية ، وهي عضو في جمعية حماية حقوق المستهلك بمراكش ، وعضو في اللجنة الإقليمية لرعاية النساء والأطفال ضحايا العنف ، وكذلك عضو في الاتحاد الدولي. من النساء الأفريقيات.\r\nتعمل مريم بوعلام في مجموعة كبيرة من المؤتمرات والمؤتمرات في مختلف المجالات الرئيسية ، وبهذه المجموعة الواسعة من المهارات ، تحولت إلى الوساطة والتحكيم من خلال الحصول على دبلوم الوسيط من معهد التدريب في الوساطة والتفاوض من باريس 6 وكذلك الدولية. شهادات متخصصة في التحكيم.\r\nتسمح لها خبرتها بإنجاز مهمتها كوسيط بتقنية نوعية.\r\nمريم بوعلام متعددة اللغات: تعمل باللغات العربية والفرنسية والإنجليزية.', 'img/team/63fcf2082b943.jpg', 1),
(19, 'Karima MAAZOUZ', 'كريمة معزوز', 'Office Manager', 'كريمة معزوز', 'Juriste de formation en droit privé, ayant un parcours professionnel multidisciplinaire dans des secteurs majeurs avec d’éminentes structures au niveau national et international.\r\nPremier interlocuteur du cabinet, Karima MAAZOUZ est chargée des entretiens et consultations initiaux avec les clients et les experts.\r\nClé de voûte, elle est en charge de l’administration et la gestion de l’Office afin d’assurer une atmosphère de travail permettant à toute l\'équipe de donner la meilleure version d’elle-même via des prestations aux standards nationaux et internationaux avec un suivi en temps réel et instaurer ainsi un lien de confiance avec les clients.\r\nForte capacité de communication polyglotte : Arabe , Français et Anglais.\r\n', 'محام من خلال التدريب في القانون الخاص ، مع خلفية مهنية متعددة التخصصات في القطاعات الرئيسية مع الهياكل البارزة على المستويين الوطني والدولي.\r\nأول نقطة اتصال للشركة ، كريمة معزوز ، هي المسؤولة عن المقابلات الأولية والاستشارات مع العملاء والخبراء.\r\nKeystone ، هي المسؤولة عن إدارة المكتب وإدارته من أجل ضمان مناخ عمل يسمح للفريق بأكمله بتقديم أفضل نسخة من نفسه عبر الخدمات للمعايير الوطنية والأسواق الدولية مع المراقبة في الوقت الفعلي وبالتالي إقامة علاقة الثقة مع العملاء.\r\nمهارات اتصال قوية متعددة اللغات: العربية والفرنسية والإنجليزية.', 'img/team/63fcf45945a84.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `failed_attempts`
--

CREATE TABLE `failed_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `fail_attempts` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `logs_reg`
--

CREATE TABLE `logs_reg` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `logs_reg`
--

INSERT INTO `logs_reg` (`id`, `ip_address`, `login`, `pass`, `login_time`) VALUES
(43, '::1', 'souidi', 'd41d8cd98f00b204e9800998ecf8427e', '30/01/2023 03:09 am'),
(44, '::1', 'souidi', 'd41d8cd98f00b204e9800998ecf8427e', '30/01/2023 03:09 am'),
(45, '::1', 'souidi', '235f295c12a291f5c56336d3f530bc83', '30/01/2023 03:10 am'),
(46, '::1', 'souidi', 'e2fc714c4727ee9395f324cd2e7f331f', '30/01/2023 01:13 pm'),
(47, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '30/01/2023 01:13 pm'),
(48, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '30/01/2023 01:25 pm'),
(49, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '30/01/2023 02:35 pm'),
(50, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '31/01/2023 10:38 am'),
(51, '::1', 'souidi', 'd41d8cd98f00b204e9800998ecf8427e', '31/01/2023 10:38 am'),
(52, '::1', '', 'd41d8cd98f00b204e9800998ecf8427e', '31/01/2023 10:38 am'),
(53, '::1', '', 'd41d8cd98f00b204e9800998ecf8427e', '31/01/2023 10:38 am'),
(54, '::1', '', 'd41d8cd98f00b204e9800998ecf8427e', '31/01/2023 10:38 am'),
(55, '::1', '', 'd41d8cd98f00b204e9800998ecf8427e', '31/01/2023 10:38 am'),
(56, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '31/01/2023 10:38 am'),
(57, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '31/01/2023 10:38 am'),
(58, '::1', '\' OR 1=1;--', 'a7e89a6e7074b77ddfcb64245d830fad', '31/01/2023 10:42 am'),
(59, '::1', '\' OR 1=1;#', 'd41d8cd98f00b204e9800998ecf8427e', '31/01/2023 10:42 am'),
(60, '::1', 'ddsfdsdsfd', 'd41d8cd98f00b204e9800998ecf8427e', '31/01/2023 10:43 am'),
(61, '::1', '', 'd41d8cd98f00b204e9800998ecf8427e', '31/01/2023 10:43 am'),
(62, '::1', '', 'd41d8cd98f00b204e9800998ecf8427e', '31/01/2023 10:43 am'),
(63, '::1', 'souidi', 'c7be67cda77380ef59e6afa3963ea25e', '31/01/2023 10:43 am'),
(64, '::1', 'souidi', 'eb9e18a69646bd62a0808c0e29d810a9', '31/01/2023 12:27 pm'),
(65, '::1', 'souidi', 'eb9e18a69646bd62a0808c0e29d810a9', '31/01/2023 12:27 pm'),
(66, '::1', 'souidi', '8c184dfb5b3b39983ad89dbb3a521729', '31/01/2023 12:27 pm'),
(67, '::1', 'souidi', 'eb9e18a69646bd62a0808c0e29d810a9', '31/01/2023 12:28 pm'),
(68, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '31/01/2023 12:29 pm'),
(69, '::1', 'souidi', 'd41d8cd98f00b204e9800998ecf8427e', '31/01/2023 12:29 pm'),
(70, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '31/01/2023 12:29 pm'),
(71, '::1', 'souidi', 'eb9e18a69646bd62a0808c0e29d810a9', '1/02/2023 04:30 pm'),
(72, '::1', 'souidiabcd1234', 'd41d8cd98f00b204e9800998ecf8427e', '1/02/2023 04:30 pm'),
(73, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '1/02/2023 04:30 pm'),
(74, '::1', 'admin', '6b9ba48bdccb220f6b617f569175992f', '1/02/2023 05:32 pm'),
(75, '::1', '\' or 1=1 limit 1 -- -+', 'a3aca2964e72000eea4c56cb341002a4', '1/02/2023 05:34 pm'),
(76, '::1', 'souidi', 'e2fc714c4727ee9395f324cd2e7f331f', '1/02/2023 05:35 pm'),
(77, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '1/02/2023 05:35 pm'),
(78, '::1', 'dfs', 'd926d7bb9ccf46fc04a61bd65d87b9b3', '1/02/2023 07:28 pm'),
(79, '::1', 'dfs', 'd926d7bb9ccf46fc04a61bd65d87b9b3', '1/02/2023 07:29 pm'),
(80, '::1', 'dfs', 'd926d7bb9ccf46fc04a61bd65d87b9b3', '1/02/2023 07:30 pm'),
(81, '::1', 'dfs', 'd926d7bb9ccf46fc04a61bd65d87b9b3', '1/02/2023 07:30 pm'),
(82, '::1', 'dfs', 'd926d7bb9ccf46fc04a61bd65d87b9b3', '1/02/2023 07:31 pm'),
(83, '::1', 'dfs', 'd926d7bb9ccf46fc04a61bd65d87b9b3', '1/02/2023 07:32 pm'),
(84, '::1', 'souidi', 'e2fc714c4727ee9395f324cd2e7f331f', '1/02/2023 07:44 pm'),
(85, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '1/02/2023 07:44 pm'),
(86, '::1', 'dfrfvr', '6fc2068a66709c9811464c6207601e39', '1/02/2023 08:49 pm'),
(87, '::1', '', 'd41d8cd98f00b204e9800998ecf8427e', '1/02/2023 08:49 pm'),
(88, '::1', '', 'd41d8cd98f00b204e9800998ecf8427e', '1/02/2023 08:49 pm'),
(89, '::1', '', 'd41d8cd98f00b204e9800998ecf8427e', '1/02/2023 08:49 pm'),
(90, '::1', '', 'd41d8cd98f00b204e9800998ecf8427e', '1/02/2023 08:49 pm'),
(91, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '1/02/2023 08:49 pm'),
(92, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '27/02/2023 01:20 pm'),
(93, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '27/02/2023 07:14 pm'),
(94, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '27/02/2023 07:52 pm'),
(95, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '28/02/2023 11:11 pm'),
(96, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '28/02/2023 11:17 pm'),
(97, '::1', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '28/02/2023 11:19 pm'),
(98, '100.94.242.236', 'souidi', 'e2fc714c4727ee9395f324cd2e7f331f', '1/03/2023 11:39 am'),
(99, '100.94.242.236', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '1/03/2023 11:39 am'),
(100, '100.94.242.236', 'souidi', 'e19d5cd5af0378da05f63f891c7467af', '1/03/2023 12:07 pm');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `titleAr` varchar(255) NOT NULL,
  `ndate` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `descriptionAr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `title`, `titleAr`, `ndate`, `description`, `descriptionAr`) VALUES
(4, 'news', 'أخبار', '27/02/2023      07:16 pm', 'Fondé par les soins du Dr. My El Hassan Souidi, avocat au barreau de Casablanca/ Marrakech, Agrée près de la cour suprême de Rabat, et arbitre inscrit à l’ordre national des arbitres.\r\n\r\n\r\nIssu d’un cursus universitaire juridique solide, My El Hassan Souidi est titulaire d’une licence en droit privé , suite de quoi il obtient un Master en droit privé /sciences pénales , pour enfin achever ses études universitaires par un Doctorat en droit privé à la faculté des sciences juridiques et économiques Ibn Zohr d’Agadir. Lauréat de l’institut supérieur de la magistrature de Rabat , My El Hassan Souidi jouit d’un parcours professionnel judiciaire remarquable . Ayant exercé en qualité de Substitut du Procureur du Roi près du tribunal de première instance de Marrakech , également en qualité de substitut du Procureur Général du Roi près de la cour d’appel de Marrakech.\r\n\r\nLe cabinet Maître My EL Hassan Souidi, a mis en place une équipe dotée de divers talents qui œuvrent pour être à la hauteur des enjeux et des responsabilités qui lui sont confiés.\r\n\r\nIl étoffe ses services par la collaboration avec un réseau d’experts pluridisciplinaires aux compétences variées et aux parcours complémentaires.\r\n', 'أسسها برعاية الدكتور مولاي الحسن سويدي ، محامي بنقابة الدار البيضاء / مراكش ، معتمد قرب المحكمة العليا للرباط ، ومحكم مسجل بالنظام الوطني للمحكمين.\r\n\r\n\r\nتخرجي من دورة جامعية قانونية قوية ، حاصل على إجازة في القانون الخاص ، وبعد ذلك حصل على درجة الماجستير في القانون الخاص / العلوم الجنائية ، ليكمل أخيرًا دراسته الجامعية بدرجة الدكتوراه في القانون الخاص من كلية الحقوق. والعلوم الاقتصادية ابن زهر أكادير. حصل مولاي الحسن سويدي ، الحائز على المعهد العالي للقضاء بالرباط ، على مسيرة قضائية رائعة. عمل كنائب للمدعي العام بالقرب من المحكمة الابتدائية بمراكش ، وكذلك نائب المدعي العام للملك بالقرب من محكمة استئناف مراكش.\r\n\r\nأنشأت شركة الأستاذ مولاي الحسن السويدي فريقًا يضم العديد من المواهب التي تعمل على الارتقاء إلى مستوى التحديات والمسؤوليات الموكلة إليهم.\r\n\r\nتوسع خدماتها من خلال التعاون مع شبكة من الخبراء متعددي التخصصات ذوي المهارات المتنوعة والخلفيات التكميلية.');

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `nom_completAr` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `domaineAr` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `descrAr` text NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `visibility` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `partners`
--

INSERT INTO `partners` (`id`, `nom_complet`, `nom_completAr`, `domaine`, `domaineAr`, `descr`, `descrAr`, `file_path`, `visibility`) VALUES
(3, '\'gtbhtbtgbtgb', 'tgbtgbtb', 'bgtgbgt', 'gbgtgbtgbgtbgb', 'gbtgtgbgt', 'gtbtgbg', 'img/partners/63dab35f9ae79.jpeg', 1),
(4, 'Salma MAKDOUMI', 'سلمى مقدومي', 'Professeur de la langue anglaise', 'مدرس لغة انجليزية', 'Salma MAKDOUMI jouissant d’un cursus académique purement littéraire, étant titulaire d’une licence en littérature anglaise obtenue auprès de la Faculté des Lettres et des Sciences Humaines de Marrakech, son emballement pour cette langue vivante et universelle l’a poussé à appuyer ses compétences linguistiques par une certification internationale -TEFI- obtenue auprès de l’American Language Center de Marrakech. \r\nA l’ère de l’évolution du marketing dans le marché professionnel, Salma MAKDOUMI a renforcé son parcours académique par l’obtention d’un master II en Marketing stratégique auprès de l’une des écoles supérieures reconnues internationalement pour son incontestable qualité d’enseignement -IAE de Toulouse-.\r\nQuant à son expérience professionnelle, Salma MAKDOUMI témoigne d’une forte expertise dans le secteur du tourisme, ayant exercé au sein d’illustres entités telles que La Royal Air Maroc. \r\nSa dernière reconversion professionnelle l’a fait envoler vers l’enseignement en qualité de professeur de la langue anglaise au sein du British Academy School de Marrakech, un centre international de premier plan en matière d’enseignement anglophone.\r\nSalma MAKDOUMI par son enthousiasme pour la langue anglaise, fait d’elle un référent en matière de linguistique.', 'تتمتع سلمى مقدومي بدورة أكاديمية أدبية بحتة ، وحاصلة على ترخيص في الأدب الإنجليزي تم الحصول عليها من كلية الآداب والعلوم الإنسانية في مراكش ، وقد دفعها حماسها لهذه اللغة الحية والعالمية إلى دعم مهاراتها في اللغة من خلال شهادة دولية - TEFI - حصل عليها من مركز اللغة الأمريكية بمراكش.\r\nفي عصر تطور التسويق في السوق المهنية ، عززت سلمى مقدومي مسيرتها الأكاديمية من خلال حصولها على درجة الماجستير الثانية في التسويق الاستراتيجي من إحدى مؤسسات التعليم العالي المعترف بها دوليًا لجودة التدريس التي لا يمكن إنكارها - IAE في تولوز -.\r\nبالنسبة لخبرتها المهنية ، تُظهر سلمى مقدومي خبرتها القوية في قطاع السياحة ، حيث عملت في كيانات بارزة مثل الخطوط الملكية المغربية.\r\nقاده آخر تدريب مهني له إلى التدريس كمدرس للغة الإنجليزية في مدرسة الأكاديمية البريطانية في مراكش ، وهي مركز دولي رائد للتعليم الناطق باللغة الإنجليزية.\r\nسلمى مقدومي بحماسها للغة الإنجليزية جعلها مرجعية في اللغويات.', 'img/partners/63fcf6ede6005.png', 1),
(5, 'Dr. Sanaa HASSINI ', 'د. سناء حسيني', 'Présidente Déléguée de l’AMLOG', 'نائب رئيس AMLOG', 'Dr. Sanaa HASSINI jouit d’un parcours académique honorable, étant lauréate de l’une des universités françaises les plus prestigieuses au monde. \r\nEn effet après avoir décroché en tant que major de promotion sa maîtrise appliquée en commerce international auprès de la Faculté Hassan II de Casablanca, elle a couronné ses études universitaires par l’obtention d’un doctorat en sciences de gestion auprès de l’Université Paris 1-Panthéon Sorbonne. \r\nDr Sanaa HASSINI a émaillé son capital académique par des formations professionnelles continues avec des structures réputées dans le domaine de la gestion de la chaîne logistique dont nous pouvons citer : l’Université ONA , ITB Consulting GMBH, Capgemini Consulting, l’Ecole Hassania des Travaux Publics …. \r\nS’agissant de son itinéraire professionnel, Sanaa HASSINI est une experte par éminence dans la gestion des achats et de la chaîne logistique, en effet elle a perfectionné dans toutes les positions de management qu’elle a occupées et occupe auprès de firmes grandioses et multinationales au Maroc. \r\nPar sa précellence dans la gestion des achats internationaux et de la chaîne logistique, Dr Sanaa HASSINI a remporté le prix de Africa’s Woman Leaders For Supply Chain Management en 2020 du World Women Leadership Congress & Awards.\r\nPrésidente déléguée de l’Association Marocaine pour la Logistique, Dr Sanaa HASSINI est un point de repère en champ de la Supply Chain.', 'تتمتع الدكتورة سناء حسيني بمهنة أكاديمية مشرفة ، حيث تخرجت من واحدة من أعرق الجامعات الفرنسية في العالم.\r\nوبالفعل بعد حصولها على درجة الماجستير التطبيقي في التجارة الدولية من كلية الحسن الثاني بالدار البيضاء بصفتها طالبة متفوقة ، توجت دراستها الجامعية بحصولها على درجة الدكتوراه في العلوم الإدارية من جامعة باريس 1-بانثيون السوربون.\r\nلقد أثرى الدكتور سناء حسيني رأس ماله الأكاديمي من خلال التدريب المهني المستمر مع الهياكل المشهورة في مجال إدارة سلسلة التوريد ، بما في ذلك: جامعة ONA ، ITB Consulting GMBH ، Capgemini Consulting ، Ecole Hassania des Travaux Public….\r\nفي المغرب.\r\nلتفوقها في إدارة سلسلة التوريد والمشتريات الدولية ، فازت الدكتورة سناء حسيني بجائزة المرأة القيادية في إفريقيا لإدارة سلسلة التوريد في عام 2020 من مؤتمر وجوائز القيادات النسائية العالمية.\r\nنائبة رئيس الجمعية المغربية للوجستيات الدكتورة سناء حسيني هي علامة فارقة في مجال سلسلة التوريد.', 'img/partners/63fcf4ebe31b3.png', 1),
(6, 'Maître Radouane AIT EL HACHEMI', 'الأستاذ رضوان آيت الهاشمي', 'Cabinet d’Huissier de Justice', 'مجلس الوزراء البيليف', 'Fondé en 1997, après de longues années laborieuses d’affinage professionnel, suite à des études universitaires couronnées par une licence en droit privé ; Cabinet  Maître Radouane AIT EL HACHEMI intervient dans la ville de Marrakech résolument orienté vers la satisfaction de ses clients.\r\n Cabinet Maître Radouane AIT EL HACHEMI avec sa maîtrise de la technique juridique, sa grande sensibilité humaine ainsi que sa haute diplomatie est compétent pour procéder :\r\n    • A tous types de notifications et procédures d’exécution des ordonnance ,  jugements et arrêts ainsi que tous les titres et actes ayant force exécutoire.\r\n    •  A la remise des convocations en justice.\r\n    • A la délivrance des citations à comparaître. \r\n    • Au recouvrement des sommes objet de condamnation ou sommes dues.\r\n    • La notification des mises en demeure.\r\n    • Aux différents types de  constats.\r\nToutes ces activités ont une valeur officielle.\r\nCabinet Maître Radouane AIT EL HACHEMI  est  engagé au service de ses client : particuliers, avocats et entreprises en leur apportant une réponse ciblée.\r\n', 'تأسست عام 1997 ، بعد عدة سنوات شاقة من الصقل المهني ، بعد دراسات جامعية توجت بشهادة في القانون الخاص ؛ مجلس الوزراء السيد رضوان آيت الهاشمي تعمل في مدينة مراكش موجهة بحزم نحو إرضاء عملائها.\r\n  مجلس الوزراء السيد رضوان آيت الهاشمي بإتقانه للتقنية القانونية وحساسيته الإنسانية الكبيرة بالإضافة إلى دبلوماسيته العالية مؤهل للمضي قدما:\r\n     • جميع أنواع الإخطارات والإجراءات الخاصة بتنفيذ الأوامر والأحكام والأحكام وكافة الألقاب والسندات التي لها قوة التنفيذ.\r\n     • عند تسليم الاستدعاءات إلى المحكمة.\r\n     • عندما يتم إصدار الاستدعاءات للحضور.\r\n     • استرداد المبالغ محل الإدانة أو المبالغ المستحقة.\r\n     • إخطار الإخطارات الرسمية.\r\n     • أنواع النتائج المختلفة.\r\nكل هذه الأنشطة لها قيمة رسمية.\r\nمجلس الوزراء السيد رضوان آيت الهاشمي ملتزم بخدمة عملائه: الأفراد والمحامين والشركات من خلال تزويدهم بالرد المستهدف.', 'img/partners/63fcf60c4232c.jpg', 1),
(7, 'Maître Mehdi CHERKAOUI', 'الأستاذ مهدي الشرقاوي', 'Avocat au barreau de Houston / Etats-Unis', 'محام في نقابة المحامين بهيوستن / الولايات المتحدة', 'Dr. Mehdi CHERKAOUI dispose d’un cursus académique prodigieux, étant lauréat de l’une des écoles de droit les plus prestigieuses des Etats-Unis ; en effet après avoir eu avec excellence sa licence en sciences biologiques auprès de l’université de Houston, son emballement pour la branche du droit l’a poussé à couronner ses études universitaires par un doctorat en droit auprès de « Thurgood Marshall School of Law » une école de renommée universelle.\r\n S’agissant de son itinéraire professionnel, Dr. Mehdi CHERKAOUI justifie d’une expérience professionnelle honorable, en effet il a excellé dans toutes les fonctions  qu’il a occupées avant d’intégrer le barreau de Houston en qualité d’avocat , dont nous pouvons citer :\r\n* Thurgood Marshall School of Law;\r\n* Harris Country Attorney’s Office ;\r\n* Principal Attorney at Cherkaoui & Associates PLLC\r\n* Designated as a Rising Star by SuperLawyers.\r\nDr. Mehdi CHERKAOUI avocat au barreau de Houston est admis devant : \r\n* Supreme Court of Texas;\r\n*United States District Court for the Southern District of Texas;\r\n* United States District Court for the Northern District of Texas;\r\n* United States Court of Appeals for the Fifth Circuit.\r\n\r\nDr. Mehdi CHERKAOUI réelle fierté pour le Maroc, est affilié à de nombreux organismes américains de haut calibre à savoir :\r\n• American Bar Association\r\n• Trial Lawyer Association\r\n• American Inns of Court, Intellectual Property Houston Chapter\r\n• Muslim Bar Association\r\n• American Immigration Lawyers association\r\n• Bilateral US-Arab Chamber of Commerce\r\nDr. Mehdi CHERKAOUI ,  notre avocat partenaire par éminence aux Etats-Unis.\r\n', 'يتمتع الدكتور مهدي الشرقاوي بخلفية أكاديمية رائعة ، حيث تخرج من واحدة من أعرق كليات الحقوق في الولايات المتحدة. في الواقع ، بعد حصوله بامتياز على درجة البكالوريوس في العلوم البيولوجية من جامعة هيوستن ، دفعه حماسه لفرع القانون إلى تتويج دراسته الجامعية بدرجة دكتوراه في القانون من \"Thurgood Marshall School of Law\". مدرسة عالمية شهرة.\r\n  فيما يتعلق بمسيرته المهنية ، يتمتع الدكتور مهدي الشرقاوي بخبرة مهنية مشرفة ، وقد برع بالفعل في جميع الوظائف التي شغلها قبل انضمامه إلى نقابة المحامين في هيوستن ، والتي يمكننا الاستشهاد بها:\r\n* كلية ثورغود مارشال للحقوق ؛\r\n* مكتب المدعي العام في هاريس ؛\r\n* محامي رئيسي في شركة Cherkaoui & Associates PLLC\r\n* تم تحديده كنجم صاعد من قبل SuperLawyers.\r\nتم قبول د.مهدي الشرقاوي المحامي في نقابة المحامين بهيوستن قبل:\r\n* المحكمة العليا في تكساس.\r\n* محكمة مقاطعة الولايات المتحدة للمنطقة الجنوبية لولاية تكساس ؛\r\n* محكمة مقاطعة الولايات المتحدة للمنطقة الشمالية لتكساس ؛\r\n* محكمة الاستئناف الأمريكية للدائرة الخامسة.\r\n\r\nالدكتور مهدي الشرقاوي ، فخر حقيقي للمغرب ، منتسب إلى العديد من المنظمات الأمريكية رفيعة المستوى ، وهي:\r\n• نقابة المحامين الأمريكية\r\n• جمعية محامي المحاكمة\r\n• American Inns of Court ، فرع الملكية الفكرية في هيوستن\r\n• نقابة المحامين المسلمين\r\n• جمعية محامي الهجرة الأمريكية\r\n• غرفة التجارة الأمريكية العربية الثنائية\r\nد. مهدي الشرقاوي المحامي الشريك في الولايات المتحدة.', 'img/partners/63fcf810a3756.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `potential_clients`
--

CREATE TABLE `potential_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `potential_clients`
--

INSERT INTO `potential_clients` (`id`, `email`) VALUES
(1, 'm3d.abdellaoui@gmail.com'),
(2, 'm3d.abdellaoui@gmail.com'),
(3, 'm3d.abdellaoui@gmail.com'),
(4, 'm3d.abdellaoui@gmail.com'),
(5, 'm3d.abdellaoui@gmail.com'),
(6, 'omarbenhilal@gmail.com'),
(7, 'omarbenhilal@gmail.com'),
(8, 'test@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(1, 'souidi', 'e19d5cd5af0378da05f63f891c7467af');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blocked_ip`
--
ALTER TABLE `blocked_ip`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_attempts`
--
ALTER TABLE `failed_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logs_reg`
--
ALTER TABLE `logs_reg`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `potential_clients`
--
ALTER TABLE `potential_clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `blocked_ip`
--
ALTER TABLE `blocked_ip`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `failed_attempts`
--
ALTER TABLE `failed_attempts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `logs_reg`
--
ALTER TABLE `logs_reg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `potential_clients`
--
ALTER TABLE `potential_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
