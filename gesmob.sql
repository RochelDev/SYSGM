-- MySQL dump 10.13  Distrib 9.2.0, for Win64 (x86_64)
--
-- Host: localhost    Database: gesmob
-- ------------------------------------------------------
-- Server version	9.2.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `matricule` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_NPI` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `historique_poste` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_recrutement` date NOT NULL,
  `date_debut_service` date NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `structure_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agents_user_id_foreign` (`user_id`),
  KEY `agents_structure_id_foreign` (`structure_id`),
  CONSTRAINT `agents_structure_id_foreign` FOREIGN KEY (`structure_id`) REFERENCES `structures` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT,
  CONSTRAINT `agents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agents`
--

LOCK TABLES `agents` WRITE;
/*!40000 ALTER TABLE `agents` DISABLE KEYS */;
INSERT INTO `agents` VALUES (1,'MEF001','NPI001','Dupont','Jean','A1','A',NULL,'2020-01-15','2020-02-01',5,NULL,'2025-05-14 18:10:26',1),(2,'MEF002','NPI002','Durand','Marie','A2','A',NULL,'2021-03-10','2021-04-01',NULL,NULL,NULL,NULL),(3,'MEF003','NPI003','DOE','John','B1','B',NULL,'2022-05-20','2022-06-01',2,NULL,'2025-05-15 08:44:49',1),(4,'MEF004','NPI004','Lefebvre','Sophie','B2','B',NULL,'2023-07-18','2023-08-01',NULL,NULL,NULL,NULL),(5,'MEF005','NPI005','Garcia','Antoine','C1','C',NULL,'2024-09-22','2024-10-01',NULL,NULL,NULL,NULL),(6,'MEF006','NPI006','Moreau','Isabelle','A1','A',NULL,'2020-01-15','2020-02-01',NULL,NULL,NULL,NULL),(7,'MEF007','NPI007','Simon','Philippe','A2','A',NULL,'2021-03-10','2021-04-01',NULL,NULL,NULL,NULL),(8,'MEF008','NPI008','Laurent','Nathalie','B1','B',NULL,'2022-05-20','2022-06-01',NULL,NULL,NULL,NULL),(9,'MEF009','NPI009','Roux','Olivier','B2','B',NULL,'2023-07-18','2023-08-01',NULL,NULL,NULL,NULL),(10,'MEF010','NPI010','David','Camille','C1','C',NULL,'2024-09-22','2024-10-01',NULL,NULL,NULL,NULL),(11,'MS001','NPI011','Dubois','Paul','A1','A',NULL,'2020-01-15','2020-02-01',NULL,NULL,NULL,NULL),(12,'MS002','NPI012','Leroy','Claire','A2','A',NULL,'2021-03-10','2021-04-01',NULL,NULL,NULL,NULL),(13,'MS003','NPI013','Gomez','Julien','B1','B',NULL,'2022-05-20','2022-06-01',NULL,NULL,NULL,NULL),(14,'MS004','NPI014','Blanc','Elodie','B2','B',NULL,'2023-07-18','2023-08-01',NULL,NULL,NULL,NULL),(15,'MS005','NPI015','Rossi','Mathieu','C1','C',NULL,'2024-09-22','2024-10-01',NULL,NULL,NULL,NULL),(16,'MS006','NPI016','Robert','Sophie','A1','A',NULL,'2020-01-15','2020-02-01',NULL,NULL,NULL,NULL),(17,'MS007','NPI017','Bertrand','Pierre','A2','A',NULL,'2021-03-10','2021-04-01',NULL,NULL,NULL,NULL),(18,'MS008','NPI018','Riviere','Nathalie','B1','B',NULL,'2022-05-20','2022-06-01',NULL,NULL,NULL,NULL),(19,'MS009','NPI019','Vincent','Olivier','B2','B',NULL,'2023-07-18','2023-08-01',NULL,NULL,NULL,NULL),(20,'MS010','NPI020','Petit','Camille','C1','C',NULL,'2024-09-22','2024-10-01',NULL,NULL,NULL,NULL),(21,'MS001','NPI011','Dubois','Paul','A1','A',NULL,'2020-01-15','2020-02-01',NULL,NULL,NULL,NULL),(22,'MS002','NPI012','Leroy','Claire','A2','A',NULL,'2021-03-10','2021-04-01',NULL,NULL,NULL,NULL),(23,'MS003','NPI013','Gomez','Julien','B1','B',NULL,'2022-05-20','2022-06-01',NULL,NULL,NULL,NULL),(24,'MS004','NPI014','Blanc','Elodie','B2','B',NULL,'2023-07-18','2023-08-01',NULL,NULL,NULL,NULL),(25,'MS005','NPI015','Rossi','Mathieu','C1','C',NULL,'2024-09-22','2024-10-01',NULL,NULL,NULL,NULL),(26,'MS006','NPI016','Robert','Sophie','A1','A',NULL,'2020-01-15','2020-02-01',NULL,NULL,NULL,NULL),(27,'MS007','NPI017','Bertrand','Pierre','A2','A',NULL,'2021-03-10','2021-04-01',NULL,NULL,NULL,NULL),(28,'MS008','NPI018','Riviere','Nathalie','B1','B',NULL,'2022-05-20','2022-06-01',NULL,NULL,NULL,NULL),(29,'MS009','NPI019','Vincent','Olivier','B2','B',NULL,'2023-07-18','2023-08-01',NULL,NULL,NULL,NULL),(30,'MS010','NPI020','Petit','Camille','C1','C',NULL,'2024-09-22','2024-10-01',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `agents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dossier_transferts`
--

DROP TABLE IF EXISTS `dossier_transferts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dossier_transferts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dossier_id` bigint unsigned NOT NULL,
  `envoyeur_structure_id` bigint unsigned NOT NULL,
  `destinataire_structure_id` bigint unsigned NOT NULL,
  `date_transfert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `motif` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dossier_transferts_dossier_id_foreign` (`dossier_id`),
  KEY `dossier_transferts_envoyeur_structure_id_foreign` (`envoyeur_structure_id`),
  KEY `dossier_transferts_destinataire_structure_id_foreign` (`destinataire_structure_id`),
  CONSTRAINT `dossier_transferts_destinataire_structure_id_foreign` FOREIGN KEY (`destinataire_structure_id`) REFERENCES `structures` (`id`),
  CONSTRAINT `dossier_transferts_dossier_id_foreign` FOREIGN KEY (`dossier_id`) REFERENCES `dossiers` (`id`),
  CONSTRAINT `dossier_transferts_envoyeur_structure_id_foreign` FOREIGN KEY (`envoyeur_structure_id`) REFERENCES `structures` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dossier_transferts`
--

LOCK TABLES `dossier_transferts` WRITE;
/*!40000 ALTER TABLE `dossier_transferts` DISABLE KEYS */;
INSERT INTO `dossier_transferts` VALUES (1,6,1,16,'2025-05-29 17:34:53','Envoi du dossier à la structure Direction de la Règlementation et du Suivi des Carrières','2025-05-29 16:34:52','2025-05-29 16:34:52');
/*!40000 ALTER TABLE `dossier_transferts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dossiers`
--

DROP TABLE IF EXISTS `dossiers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dossiers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code_dossier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demandeur` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'agent',
  `structure_id` bigint unsigned NOT NULL,
  `type_mobilite_id` bigint unsigned NOT NULL,
  `nom_agent` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_id` bigint unsigned NOT NULL,
  `statut` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'demande en_attente',
  `envoyeur` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinataire` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `structure_cible` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annee` year NOT NULL,
  `historique_statut` json DEFAULT NULL,
  `type_acte` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signataire` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_dossier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenu_acte` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motif_demande` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dossiers_type_mobilite_id_foreign` (`type_mobilite_id`),
  KEY `dossiers_agent_id_foreign` (`agent_id`),
  KEY `dossiers_structure_id_foreign` (`structure_id`),
  CONSTRAINT `dossiers_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  CONSTRAINT `dossiers_structure_id_foreign` FOREIGN KEY (`structure_id`) REFERENCES `structures` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dossiers_type_mobilite_id_foreign` FOREIGN KEY (`type_mobilite_id`) REFERENCES `type_mobilites` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dossiers`
--

LOCK TABLES `dossiers` WRITE;
/*!40000 ALTER TABLE `dossiers` DISABLE KEYS */;
INSERT INTO `dossiers` VALUES (1,'DGB20250001',NULL,'Agent',1,1,'DOE John',3,'en cours',NULL,NULL,'DGML',2025,NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-15 22:56:06','2025-05-29 00:51:02'),(6,'DGB20250002',NULL,'Agent',1,1,'DOE John',3,'en cours','DGB','DRSC','DGD',2025,NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-15 23:01:34','2025-05-29 16:34:52');
/*!40000 ALTER TABLE `dossiers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etapes`
--

DROP TABLE IF EXISTS `etapes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `etapes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delai_max` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etapes`
--

LOCK TABLES `etapes` WRITE;
/*!40000 ALTER TABLE `etapes` DISABLE KEYS */;
INSERT INTO `etapes` VALUES (1,'Demande en attente','1','7 jours',NULL,NULL),(2,'Traitement ordonnateur','2','14 jours',NULL,NULL),(3,'Traitement fonction publique','3','10 jours',NULL,NULL),(4,'Traitement Ordonnateur','4','7 jours',NULL,NULL),(5,'Traitement fonction publique','5','3 jours',NULL,NULL),(6,'Validation officielle','6','3 jours',NULL,NULL);
/*!40000 ALTER TABLE `etapes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fonctions`
--

DROP TABLE IF EXISTS `fonctions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fonctions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code_fonction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `intitule_fonction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fonctions`
--

LOCK TABLES `fonctions` WRITE;
/*!40000 ALTER TABLE `fonctions` DISABLE KEYS */;
INSERT INTO `fonctions` VALUES (1,'MEFDGB0001','Directeur Général',NULL,NULL),(2,'MEFDGB0002','Chef Service',NULL,NULL),(3,'MEFDGB0003','Chargé de Budget',NULL,NULL),(4,'MSCHU0001','Directeur Général',NULL,NULL),(5,'MSCHU0002','Médecin Chef de Service',NULL,NULL),(6,'MAEDAEC0001','Directeur',NULL,NULL),(7,'MJCS0001','Président',NULL,NULL),(8,'MENDEP0001','Directeur',NULL,NULL),(9,'MDNEM0001','Chef d\'État-Major',NULL,NULL),(10,'MTPTDTT0001','Directeur',NULL,NULL),(11,'MAEPDAF0001','Directeur',NULL,NULL),(12,'MDEVDPG0001','Directeur Général',NULL,NULL),(13,'MCTDAC0001','Directeur',NULL,NULL);
/*!40000 ALTER TABLE `fonctions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_04_23_132111_add_collums_to_users_table',1),(5,'2025_04_23_133238_create_ministeres_table',1),(6,'2025_04_23_134853_create_agents_table',1),(7,'2025_04_23_151154_create__type_mobilite_table',1),(8,'2025_04_23_160154_create__type_piece_table',1),(9,'2025_04_23_162625_create__profil_table',1),(10,'2025_05_05_235122_add_ministere_id_to_users_table',2),(11,'2025_05_05_235915_add_ministere_id_to_agents_table',2),(12,'2025_05_14_001743_create_dossier_transferts_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ministeres`
--

DROP TABLE IF EXISTS `ministeres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ministeres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code_ministere` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_ministere` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_ministere` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ministeres`
--

LOCK TABLES `ministeres` WRITE;
/*!40000 ALTER TABLE `ministeres` DISABLE KEYS */;
INSERT INTO `ministeres` VALUES (1,'MEF','Ministère de l\'Économie et des Finances','https://www.mef.bj',NULL,NULL),(2,'MS','Ministère de la Santé','https://www.sante.bj',NULL,NULL),(3,'MAEC','Ministère des Affaires Étrangères et de la Coopération','https://www.mae.bj',NULL,NULL),(4,'MJ','Ministère de la Justice','https://www.justice.bj',NULL,NULL),(5,'MEN','Ministère de l\'Éducation Nationale','https://www.men.bj',NULL,NULL),(6,'MDN','Ministère de la Défense Nationale','https://www.defense.bj',NULL,NULL),(7,'MTPT','Ministère des Transports et des Travaux Publics','https://www.mtpt.bj',NULL,NULL),(8,'MAEP','Ministère de l\'Agriculture, de l\'Élevage et de la Pêche','https://www.maep.bj',NULL,NULL),(9,'MDEV','Ministère du Développement et de l\'Économie','https://www.mdev.bj',NULL,NULL),(10,'MCT','Ministère de la Culture et du Tourisme','https://www.mct.bj',NULL,NULL),(11,'MTFP','Ministère du Travail et de la Fonction Publique','https://www.travail.gouv.bj',NULL,NULL);
/*!40000 ALTER TABLE `ministeres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `occuper`
--

DROP TABLE IF EXISTS `occuper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `occuper` (
  `poste_id` bigint unsigned NOT NULL,
  `agent_id` bigint unsigned NOT NULL,
  `fonction_id` bigint unsigned NOT NULL,
  `date_recrutement` date DEFAULT NULL,
  `date_debut_service` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`poste_id`,`fonction_id`,`agent_id`),
  KEY `occuper_agent_id_foreign` (`agent_id`),
  KEY `occuper_fonction_id_foreign` (`fonction_id`),
  CONSTRAINT `occuper_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE,
  CONSTRAINT `occuper_fonction_id_foreign` FOREIGN KEY (`fonction_id`) REFERENCES `fonctions` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `occuper_poste_id_foreign` FOREIGN KEY (`poste_id`) REFERENCES `postes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `occuper`
--

LOCK TABLES `occuper` WRITE;
/*!40000 ALTER TABLE `occuper` DISABLE KEYS */;
/*!40000 ALTER TABLE `occuper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `piece_justificatives`
--

DROP TABLE IF EXISTS `piece_justificatives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `piece_justificatives` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dossier_id` bigint unsigned NOT NULL,
  `type_piece_id` bigint unsigned DEFAULT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `signataire` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_du_fichier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `piece_justificatives_dossier_id_foreign` (`dossier_id`),
  CONSTRAINT `piece_justificatives_dossier_id_foreign` FOREIGN KEY (`dossier_id`) REFERENCES `dossiers` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `piece_justificatives`
--

LOCK TABLES `piece_justificatives` WRITE;
/*!40000 ALTER TABLE `piece_justificatives` DISABLE KEYS */;
INSERT INTO `piece_justificatives` VALUES (1,1,NULL,'Certificat de cessation de paie.pdf',NULL,NULL,NULL,'dossiers/DGB20250001/1747353366_Certificat de cessation de paie.pdf','1747353366_Certificat de cessation de paie.pdf','2025-05-15 22:56:08','2025-05-15 22:56:08'),(2,1,NULL,'mon_cv.pdf',NULL,NULL,NULL,'dossiers/DGB20250001/1747353371_mon_cv.pdf','1747353371_mon_cv.pdf','2025-05-15 22:56:11','2025-05-15 22:56:11'),(11,6,NULL,'Certificat de cessation de paie.pdf',NULL,NULL,NULL,'dossiers/DGB20250002/1747353694_Certificat de cessation de paie.pdf','1747353694_Certificat de cessation de paie.pdf','2025-05-15 23:01:34','2025-05-15 23:01:34');
/*!40000 ALTER TABLE `piece_justificatives` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `piece_requises`
--

DROP TABLE IF EXISTS `piece_requises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `piece_requises` (
  `type_mobilite_id` bigint unsigned NOT NULL,
  `type_piece_id` bigint unsigned NOT NULL,
  `intitule_piece` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`type_mobilite_id`,`type_piece_id`),
  KEY `piece_requises_type_piece_id_foreign` (`type_piece_id`),
  CONSTRAINT `piece_requises_type_mobilite_id_foreign` FOREIGN KEY (`type_mobilite_id`) REFERENCES `type_mobilites` (`id`) ON DELETE CASCADE,
  CONSTRAINT `piece_requises_type_piece_id_foreign` FOREIGN KEY (`type_piece_id`) REFERENCES `type_pieces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `piece_requises`
--

LOCK TABLES `piece_requises` WRITE;
/*!40000 ALTER TABLE `piece_requises` DISABLE KEYS */;
/*!40000 ALTER TABLE `piece_requises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postes`
--

DROP TABLE IF EXISTS `postes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `postes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code_poste` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `intitule_poste` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `structure_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `postes_structure_id_foreign` (`structure_id`),
  CONSTRAINT `postes_structure_id_foreign` FOREIGN KEY (`structure_id`) REFERENCES `structures` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postes`
--

LOCK TABLES `postes` WRITE;
/*!40000 ALTER TABLE `postes` DISABLE KEYS */;
INSERT INTO `postes` VALUES (1,'MEFDGB0001','Directeur Général','Direction Générale','DGB',1,NULL,NULL),(2,'MEFDGB0002','Chef Service Budget','Service Budget','DGB',1,NULL,NULL),(3,'MEFDGB0003','Chargé de Budget','Service Budget','DGB',1,NULL,NULL),(4,'MSCHU0001','Directeur Général','Direction Générale','CHU',5,NULL,NULL),(5,'MSCHU0002','Médecin Chef de Service','Service de Cardiologie','CHU',5,NULL,NULL),(6,'MAEDAEC0001','Directeur','Direction','DAEC',7,NULL,NULL),(7,'MJCS0001','Président','Présidence','CS',9,NULL,NULL),(8,'MENDEP0001','Directeur','Direction','DEP',10,NULL,NULL),(9,'MDNEM0001','Chef d\'État-Major','État-Major','EM',11,NULL,NULL),(10,'MTPTDTT0001','Directeur','Direction','DTT',12,NULL,NULL),(11,'MAEPDAF0001','Directeur','Direction','DAF',13,NULL,NULL),(12,'MDEVDPG0001','Directeur Général','Direction Générale','DGP',14,NULL,NULL),(13,'MCTDAC0001','Directeur','Direction','DAC',15,NULL,NULL);
/*!40000 ALTER TABLE `postes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profils`
--

DROP TABLE IF EXISTS `profils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profils` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `intitule_profil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profils`
--

LOCK TABLES `profils` WRITE;
/*!40000 ALTER TABLE `profils` DISABLE KEYS */;
INSERT INTO `profils` VALUES (1,'Agent',NULL,'2025-06-07 14:47:40'),(2,'Ordonnateur Sectoriel','2025-04-29 16:34:14','2025-06-07 14:47:40'),(3,'Responsable Sectoriel','2025-05-02 11:02:07','2025-05-02 11:02:07'),(4,'Agent DRSC','2025-05-06 11:58:03','2025-06-07 14:47:40'),(5,'DRSC','2025-05-06 11:58:32','2025-05-06 11:58:32'),(6,'DGFP','2025-05-06 12:32:03','2025-05-06 12:32:03'),(7,'Responsable MTFP','2025-05-06 12:32:38','2025-05-06 12:32:38'),(8,'Service RH','2025-05-08 12:15:09','2025-06-07 14:47:40');
/*!40000 ALTER TABLE `profils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('UkUiO3yfkQdyrWnac9E0FcVRxlSFwuuNIpeQnbEI',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ01LTlJUU3FjQjdMQ0NSS1hzMWZFVWg2akRKOVJJV2YzUU1WbUVLTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1749311889);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `structures`
--

DROP TABLE IF EXISTS `structures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `structures` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code_structure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_structure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ministere_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `structures_ministere_id_foreign` (`ministere_id`),
  CONSTRAINT `structures_ministere_id_foreign` FOREIGN KEY (`ministere_id`) REFERENCES `ministeres` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `structures`
--

LOCK TABLES `structures` WRITE;
/*!40000 ALTER TABLE `structures` DISABLE KEYS */;
INSERT INTO `structures` VALUES (1,'DGB','Direction Générale du Budget',1,NULL,NULL),(2,'DGI','Direction Générale des Impôts',1,NULL,NULL),(3,'DGML','Direction Générale du matériel et de la logistique',1,NULL,NULL),(4,'DGD','Direction Générale de la Douane',1,NULL,NULL),(5,'CHU','Centre Hospitalier Universitaire',2,NULL,NULL),(6,'DDS','Direction Départementale de la Santé',2,NULL,NULL),(7,'DAEC','Direction des Affaires Economiques et Commerciales',3,NULL,NULL),(8,'DCP','Direction de la Coopération Politique',3,NULL,NULL),(9,'CS','Cour Suprême',4,NULL,NULL),(10,'DEP','Direction de l\'Enseignement Primaire',5,NULL,NULL),(11,'EM','État-Major',6,NULL,NULL),(12,'DTT','Direction des Transports Terrestres',7,NULL,NULL),(13,'DAF','Direction de l\'Administration et des Finances',8,NULL,NULL),(14,'DGP','Direction Générale de la Planification',9,NULL,NULL),(15,'DAC','Direction des Arts et de la Culture',10,NULL,NULL),(16,'DRSC','Direction de la Règlementation et du Suivi des Carrières',11,NULL,NULL);
/*!40000 ALTER TABLE `structures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suivi_dossiers`
--

DROP TABLE IF EXISTS `suivi_dossiers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `suivi_dossiers` (
  `etape_id` bigint unsigned NOT NULL,
  `dossier_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `statut` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en attente',
  `motif` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`etape_id`,`dossier_id`,`user_id`),
  KEY `suivi_dossiers_dossier_id_foreign` (`dossier_id`),
  KEY `suivi_dossiers_user_id_foreign` (`user_id`),
  CONSTRAINT `suivi_dossiers_dossier_id_foreign` FOREIGN KEY (`dossier_id`) REFERENCES `dossiers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `suivi_dossiers_etape_id_foreign` FOREIGN KEY (`etape_id`) REFERENCES `etapes` (`id`),
  CONSTRAINT `suivi_dossiers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suivi_dossiers`
--

LOCK TABLES `suivi_dossiers` WRITE;
/*!40000 ALTER TABLE `suivi_dossiers` DISABLE KEYS */;
INSERT INTO `suivi_dossiers` VALUES (1,1,1,'terminé',NULL,'2025-05-15 22:56:11','2025-05-29 00:51:02'),(1,6,1,'terminé',NULL,'2025-05-15 23:01:34','2025-05-28 20:12:40'),(2,1,1,'validé',NULL,'2025-05-29 00:51:02','2025-05-29 00:51:15'),(2,6,1,'validé',NULL,'2025-05-28 20:12:41','2025-05-29 00:48:04'),(3,6,1,'en attente',NULL,'2025-05-29 16:34:52','2025-05-29 16:34:52');
/*!40000 ALTER TABLE `suivi_dossiers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_mobilites`
--

DROP TABLE IF EXISTS `type_mobilites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_mobilites` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `intitule_mobilite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_mobilites`
--

LOCK TABLES `type_mobilites` WRITE;
/*!40000 ALTER TABLE `type_mobilites` DISABLE KEYS */;
INSERT INTO `type_mobilites` VALUES (1,'Détachement','DE',NULL,NULL),(2,'Disponibilité','DNB',NULL,NULL),(3,'Disposition','DSP',NULL,NULL);
/*!40000 ALTER TABLE `type_mobilites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_pieces`
--

DROP TABLE IF EXISTS `type_pieces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_pieces` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modeltype` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_pieces`
--

LOCK TABLES `type_pieces` WRITE;
/*!40000 ALTER TABLE `type_pieces` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_pieces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profils`
--

DROP TABLE IF EXISTS `user_profils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_profils` (
  `user_id` bigint unsigned NOT NULL,
  `profil_id` bigint unsigned NOT NULL,
  `statut` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `user_profils_user_id_foreign` (`user_id`),
  KEY `user_profils_profil_id_foreign` (`profil_id`),
  CONSTRAINT `user_profils_profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_profils_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profils`
--

LOCK TABLES `user_profils` WRITE;
/*!40000 ALTER TABLE `user_profils` DISABLE KEYS */;
INSERT INTO `user_profils` VALUES (4,1,'actif','2025-05-06 07:20:42','2025-05-06 07:20:42'),(4,3,'inactif','2025-05-06 07:20:42','2025-05-06 07:20:42'),(1,1,'actif','2025-05-11 15:16:31','2025-06-07 14:47:40'),(1,2,'inactif','2025-05-11 15:16:31','2025-06-07 14:36:46'),(1,4,'inactif','2025-05-11 15:16:31','2025-06-02 09:23:56'),(1,8,'inactif','2025-05-11 15:16:31','2025-06-07 14:47:11'),(3,2,'actif','2025-05-14 17:59:55','2025-05-14 17:59:55'),(3,8,'inactif','2025-05-14 17:59:55','2025-05-14 17:59:55'),(2,1,'actif','2025-05-14 18:00:19','2025-05-15 23:02:24'),(2,2,'inactif','2025-05-14 18:00:19','2025-05-15 23:02:07'),(2,4,'inactif','2025-05-14 18:00:19','2025-05-15 17:37:17'),(5,1,'actif','2025-05-14 18:12:01','2025-05-14 18:12:01');
/*!40000 ALTER TABLE `user_profils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `structure_id` bigint unsigned DEFAULT NULL,
  `agent_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_structure_id_foreign` (`structure_id`),
  KEY `users_agent_id_foreign` (`agent_id`),
  CONSTRAINT `users_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT,
  CONSTRAINT `users_structure_id_foreign` FOREIGN KEY (`structure_id`) REFERENCES `structures` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',NULL,'$2y$12$Z5g31R/wsaDZ/MXyd7xPxuZhPw8ep6pr5v7cps99WIuPo01qhYLUC',NULL,'2025-04-24 08:24:27','2025-04-24 08:24:27',NULL,'admin',NULL,NULL),(2,'John Doe','johndoe@gmail.com',NULL,'$2y$12$WLzcpIYspjZ2Jiao2JgXHOkfBG77UxGvUhnLW239z7xVu71Vvv7.q',NULL,NULL,'2025-05-06 07:14:56',NULL,'admin',1,3),(3,'Jane Smith','janesmith@example.com',NULL,'$2y$12$t.skJyZKNrDhaKSVCKWq2.l47SHwuvaZuy0.cqHezqPFf/az60SsC',NULL,NULL,'2025-05-06 07:20:14',NULL,'user',1,NULL),(4,'DAVITO Enock','davitonock@gmail.com',NULL,'$2y$12$ZlBRxQxAg/rXML6SduWhEOq.3fjJqwLAnxtuHIT5nZKjuUz6g7ENy',NULL,'2025-04-29 16:37:07','2025-05-06 07:20:42',NULL,'user',8,NULL),(5,'Jean Dupont','jeandupont@gmail.com',NULL,'$2y$12$g15LM8XhVdV6EWllkhA5Quy2ESnLLEVBu/2XRwF0zIeFuIuMBlMBu',NULL,'2025-05-14 18:08:45','2025-05-14 18:12:01',NULL,'user',1,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-07 17:57:32
