-- MariaDB dump 10.17  Distrib 10.4.13-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: abp
-- ------------------------------------------------------
-- Server version	10.4.13-MariaDB
DROP DATABASE IF EXISTS abp;
CREATE DATABASE abp;
USE abp;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cicles`
--

DROP TABLE IF EXISTS `cicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sigles` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `descripcio` varchar(255) DEFAULT NULL,
  `actiu` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sigles_UNIQUE` (`sigles`),
  UNIQUE KEY `nom_UNIQUE` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cicles`
--

LOCK TABLES `cicles` WRITE;
/*!40000 ALTER TABLE `cicles` DISABLE KEYS */;
INSERT INTO `cicles` VALUES (1,'DAW','Desenvolupament Aplicacions Web','Cicle de Grau Superior de Desenvolupament d\'Aplicacions Web',1),(2,'DAM','Desenvolupament Aplicacions Multiplataforma','Cicle de Grau Superior de Desenvolupament d\'Aplicacions Multiplataforma',1),(3,'MARP','Màrqueting i Publicitat','Cicle de Grau Superior de Màrqueting i Publicitat',1),(4,'AFI','Administració i Finances','Cicle de Grau Superior d\'Administració i Finances',1),(5,'AVIE','Agencia de Viatges i Esdeveniments','Cicle de Grau Superior d\'Agencia de Viatges i Esdeveniments',0),(6,'ADIR','Assistència a la Direcció','Cicle de Grau Superior de Màrqueting i Publicitat',0),(7,'GAD','Gestió Administrativa','Cicle de Grau Mitjà de Gestió Administrativa',1),(8,'ACOM','Activitats Comercials','Cicle de Grau Mitjà d\'Activitats Comercials',1),(9,'CINT','Comerç Internacional','Cicle de Grau Superior de Comerç Internacional',1),(10,'SMIX','Sistemes Micorinformàtics i Xarxes','Cicle de Grau Mitjà de Sistemes Microinformàtics i Xarxes',1);
/*!40000 ALTER TABLE `cicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competencies_detall`
--

DROP TABLE IF EXISTS `competencies_detall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competencies_detall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codi` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `competetencies_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_competencies_detall_competetencies1_idx` (`competetencies_id`),
  CONSTRAINT `fk_competencies_detall_competetencies1` FOREIGN KEY (`competetencies_id`) REFERENCES `competetencies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competencies_detall`
--

LOCK TABLES `competencies_detall` WRITE;
/*!40000 ALTER TABLE `competencies_detall` DISABLE KEYS */;
/*!40000 ALTER TABLE `competencies_detall` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competetencies`
--

DROP TABLE IF EXISTS `competetencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competetencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codi` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `descripcio` varchar(45) DEFAULT NULL,
  `moduls_id` int(11) NOT NULL,
  `actiu` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_competetencies_moduls1_idx` (`moduls_id`),
  CONSTRAINT `fk_competetencies_moduls1` FOREIGN KEY (`moduls_id`) REFERENCES `moduls` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competetencies`
--

LOCK TABLES `competetencies` WRITE;
/*!40000 ALTER TABLE `competetencies` DISABLE KEYS */;
/*!40000 ALTER TABLE `competetencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sigles` varchar(45) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `cicles_id` int(11) NOT NULL,
  `actiu` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sigles_UNIQUE` (`sigles`),
  KEY `fk_cursos_cicles1_idx` (`cicles_id`),
  CONSTRAINT `fk_cursos_cicles1` FOREIGN KEY (`cicles_id`) REFERENCES `cicles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'DAW1A','1er DAWA del matí.',1,1),(2,'DAW2A','2on DAWA del matí.',1,1),(3,'DAW2B','2on DAWB del matí.',1,1),(4,'DAM1A','1er DAMA del matí.',2,1),(5,'DAM2A','2on DAMA del matí.',2,1),(6,'DAM2B','2on DAMB del matí.',2,1),(7,'DAW1T','1er DAW de la tarda.',1,0),(8,'DAW2T','2on DAW de la tarda.',1,0),(9,'DAM1T','1er DAM de la tarda.',2,0),(10,'DAM2T','2on DAM de la tarda.',2,0),(11,'SMIX1A','Primer de SMIXA del matí.',10,1),(12,'SMIX2A','Segon de SMIXA del matí.',10,0),(13,'SMIX1B','Primer de SMIXB del matí.',10,0);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos_has_cicles`
--

DROP TABLE IF EXISTS `cursos_has_cicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos_has_cicles` (
  `cursos_id` int(11) NOT NULL,
  `cicles_id` int(11) NOT NULL,
  PRIMARY KEY (`cursos_id`,`cicles_id`),
  KEY `fk_cursos_has_cicles_cicles1_idx` (`cicles_id`),
  KEY `fk_cursos_has_cicles_cursos_idx` (`cursos_id`),
  CONSTRAINT `fk_cursos_has_cicles_cicles1` FOREIGN KEY (`cicles_id`) REFERENCES `cicles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursos_has_cicles_cursos` FOREIGN KEY (`cursos_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos_has_cicles`
--

LOCK TABLES `cursos_has_cicles` WRITE;
/*!40000 ALTER TABLE `cursos_has_cicles` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos_has_cicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moduls`
--

DROP TABLE IF EXISTS `moduls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moduls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codi` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `hores` int(11) NOT NULL,
  `cicles_id` int(11) NOT NULL,
  `actiu` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_moduls_cicles1_idx` (`cicles_id`),
  CONSTRAINT `fk_moduls_cicles1` FOREIGN KEY (`cicles_id`) REFERENCES `cicles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moduls`
--

LOCK TABLES `moduls` WRITE;
/*!40000 ALTER TABLE `moduls` DISABLE KEYS */;
INSERT INTO `moduls` VALUES (1,'M01','Sistemes Informàtics',4,1,1),(2,'M02','Base de dades',5,1,1),(3,'M03','Programació',7,1,1),(4,'M04','Llenguatge de Marques',3,1,1),(5,'M05','Entorns de Desenvolupament',2,1,1),(6,'M06','Desenvolupament Web Entorn Client',5,1,1),(7,'M07','Desenvolupament Web Entorn Servidor',5,1,1),(8,'M08','Despelgament Aplicacions Web',3,1,1),(9,'M09','Disseny Interfícies Web',3,1,1),(10,'M10','Formació i Orientació Laboral',3,1,1),(11,'M11','Empresa i Iniciativa Emprenedora',2,1,1),(12,'M12','Projecte',3,1,1),(13,'M01','Sistemes Informàtics',4,2,1),(14,'M02','Base de dades',5,2,1),(15,'M03','Programació',7,2,1),(16,'M04','Llenguatge de Marques',3,2,1),(17,'M05','Entorns de Desenvolupament',2,2,1),(18,'M06','Accés a Dades',4,2,1),(19,'M07','Disseny Interfícies',3,2,1),(20,'M08','Promació multimèdia i Dispositius Mòbils',3,2,1),(21,'M09','Programació Serveis i Processos',3,2,1),(22,'M10','Sistemes Gestors Empresarials',3,2,1),(23,'M11','Formació i Orientació Laboral',3,2,1),(24,'M12','Empresa i Iniciativa Emprenedora',2,2,1),(25,'M13','Projecte',3,2,1);
/*!40000 ALTER TABLE `moduls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moduls_has_cursos`
--

DROP TABLE IF EXISTS `moduls_has_cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moduls_has_cursos` (
  `moduls_id` int(11) NOT NULL,
  `cursos_id` int(11) NOT NULL,
  `curs_academic_id` int(11) NOT NULL,
  PRIMARY KEY (`moduls_id`,`cursos_id`,`curs_academic_id`),
  KEY `fk_moduls_has_cursos_cursos1_idx` (`cursos_id`),
  KEY `fk_moduls_has_cursos_moduls1_idx` (`moduls_id`),
  CONSTRAINT `fk_moduls_has_cursos_cursos1` FOREIGN KEY (`cursos_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_moduls_has_cursos_moduls1` FOREIGN KEY (`moduls_id`) REFERENCES `moduls` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moduls_has_cursos`
--

LOCK TABLES `moduls_has_cursos` WRITE;
/*!40000 ALTER TABLE `moduls_has_cursos` DISABLE KEYS */;
INSERT INTO `moduls_has_cursos` VALUES (1,1,2020),(2,1,2020),(3,1,2020),(4,1,2020),(5,1,2020),(6,2,2020),(6,3,2020),(7,2,2020),(7,3,2020),(8,2,2020),(8,3,2020),(9,2,2020),(9,3,2020),(10,1,2020),(11,1,2020),(12,2,2020),(12,3,2020);
/*!40000 ALTER TABLE `moduls_has_cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moduls_has_professors`
--

DROP TABLE IF EXISTS `moduls_has_professors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moduls_has_professors` (
  `moduls_id` int(11) NOT NULL,
  `usuaris_id` int(11) NOT NULL,
  `curs_academic_id` int(11) NOT NULL,
  PRIMARY KEY (`moduls_id`,`usuaris_id`,`curs_academic_id`),
  KEY `fk_moduls_has_usuaris_usuaris1_idx` (`usuaris_id`),
  KEY `fk_moduls_has_usuaris_moduls1_idx` (`moduls_id`),
  CONSTRAINT `fk_moduls_has_usuaris_moduls1` FOREIGN KEY (`moduls_id`) REFERENCES `moduls` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_moduls_has_usuaris_usuaris1` FOREIGN KEY (`usuaris_id`) REFERENCES `usuaris` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moduls_has_professors`
--

LOCK TABLES `moduls_has_professors` WRITE;
/*!40000 ALTER TABLE `moduls_has_professors` DISABLE KEYS */;
/*!40000 ALTER TABLE `moduls_has_professors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rols`
--

DROP TABLE IF EXISTS `rols`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `actiu` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rols`
--

LOCK TABLES `rols` WRITE;
/*!40000 ALTER TABLE `rols` DISABLE KEYS */;
INSERT INTO `rols` VALUES (1,'Administrador',0),(2,'Professor',0),(3,'Alumne',0);
/*!40000 ALTER TABLE `rols` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubriques`
--

DROP TABLE IF EXISTS `rubriques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rubriques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(45) NOT NULL,
  `actiu` tinyint(4) NOT NULL,
  `nivell` int(11) NOT NULL,
  `competencies_detall_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rubriques_competencies_detall1_idx` (`competencies_detall_id`),
  CONSTRAINT `fk_rubriques_competencies_detall1` FOREIGN KEY (`competencies_detall_id`) REFERENCES `competencies_detall` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubriques`
--

LOCK TABLES `rubriques` WRITE;
/*!40000 ALTER TABLE `rubriques` DISABLE KEYS */;
/*!40000 ALTER TABLE `rubriques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuaris`
--

DROP TABLE IF EXISTS `usuaris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correu` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `cognoms` varchar(45) NOT NULL,
  `contrasenya` varchar(256) NOT NULL,
  `actiu` tinyint(4) NOT NULL,
  `rols_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correu_UNIQUE` (`correu`),
  KEY `fk_usuaris_rols1_idx` (`rols_id`),
  CONSTRAINT `fk_usuaris_rols1` FOREIGN KEY (`rols_id`) REFERENCES `rols` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuaris`
--

LOCK TABLES `usuaris` WRITE;
/*!40000 ALTER TABLE `usuaris` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuaris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuaris_has_competencies_detall`
--

DROP TABLE IF EXISTS `usuaris_has_competencies_detall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuaris_has_competencies_detall` (
  `usuaris_id` int(11) NOT NULL,
  `competencies_detall_id` int(11) NOT NULL,
  `curs_academic_id` int(11) NOT NULL,
  `nivell` int(11) DEFAULT NULL,
  PRIMARY KEY (`usuaris_id`,`competencies_detall_id`,`curs_academic_id`),
  KEY `fk_usuaris_has_competencies_detall_competencies_detall1_idx` (`competencies_detall_id`),
  KEY `fk_usuaris_has_competencies_detall_usuaris1_idx` (`usuaris_id`),
  CONSTRAINT `fk_usuaris_has_competencies_detall_competencies_detall1` FOREIGN KEY (`competencies_detall_id`) REFERENCES `competencies_detall` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuaris_has_competencies_detall_usuaris1` FOREIGN KEY (`usuaris_id`) REFERENCES `usuaris` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuaris_has_competencies_detall`
--

LOCK TABLES `usuaris_has_competencies_detall` WRITE;
/*!40000 ALTER TABLE `usuaris_has_competencies_detall` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuaris_has_competencies_detall` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-21 13:08:38
