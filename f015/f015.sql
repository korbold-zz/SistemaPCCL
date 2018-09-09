-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sistemapcc
-- ------------------------------------------------------
-- Server version	5.6.22-log

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
-- Table structure for table `tab_evaluacion`
--

DROP TABLE IF EXISTS `tab_evaluacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_evaluacion` (
  `ID_EVALUACION` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_EVALUADO` int(11) DEFAULT NULL,
  `ID_PREGUNTA` int(11) DEFAULT NULL,
  `FECHA_REGISTRO` datetime DEFAULT NULL,
  `ESTADO` char(20) DEFAULT NULL,
  `RESPUESTA` char(20) DEFAULT NULL,
  PRIMARY KEY (`ID_EVALUACION`),
  KEY `ID_PERSONA` (`ID_EVALUADO`),
  KEY `ID_PREGUNTA` (`ID_PREGUNTA`)
) ENGINE=InnoDB AUTO_INCREMENT=191 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_evaluacion`
--

LOCK TABLES `tab_evaluacion` WRITE;
/*!40000 ALTER TABLE `tab_evaluacion` DISABLE KEYS */;
INSERT INTO `tab_evaluacion` VALUES (165,58,1,'2016-12-07 11:54:22','R','3'),(166,58,2,'2016-12-07 11:54:22','R','7'),(167,58,3,'2016-12-07 11:54:22','R','10'),(168,58,4,'2016-12-07 11:54:22','R','13'),(169,58,5,'2016-12-07 11:54:22','R','16'),(170,58,6,'2016-12-07 11:54:22','R','18'),(171,58,7,'2016-12-07 11:54:22','R','22'),(172,58,8,'2016-12-07 11:54:22','R','24'),(173,58,9,'2016-12-07 11:54:22','R','25'),(174,58,10,'2016-12-07 11:54:22','R','29'),(175,58,11,'2016-12-07 11:54:22','R','32'),(176,58,12,'2016-12-07 11:54:22','R','35'),(177,58,13,'2016-12-07 11:54:23','R','tatys'),(178,59,1,'2016-12-08 05:10:52','A',NULL),(179,59,2,'2016-12-08 05:10:52','A',NULL),(180,59,3,'2016-12-08 05:10:52','A',NULL),(181,59,4,'2016-12-08 05:10:52','A',NULL),(182,59,5,'2016-12-08 05:10:52','A',NULL),(183,59,6,'2016-12-08 05:10:52','A',NULL),(184,59,7,'2016-12-08 05:10:52','A',NULL),(185,59,8,'2016-12-08 05:10:52','A',NULL),(186,59,9,'2016-12-08 05:10:52','A',NULL),(187,59,10,'2016-12-08 05:10:52','A',NULL),(188,59,11,'2016-12-08 05:10:52','A',NULL),(189,59,12,'2016-12-08 05:10:52','A',NULL),(190,59,13,'2016-12-08 05:10:52','A',NULL);
/*!40000 ALTER TABLE `tab_evaluacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_evaluado`
--

DROP TABLE IF EXISTS `tab_evaluado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_evaluado` (
  `ID_EVALUADO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  `ID_PERFIL_PRO_ESTADO` int(11) DEFAULT NULL,
  `ESTADO` char(20) DEFAULT NULL,
  `FECHA_FIN` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_EVALUADO`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_PERFIL_PRO_ESTADO` (`ID_PERFIL_PRO_ESTADO`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_evaluado`
--

LOCK TABLES `tab_evaluado` WRITE;
/*!40000 ALTER TABLE `tab_evaluado` DISABLE KEYS */;
INSERT INTO `tab_evaluado` VALUES (58,4,'2016-12-07 11:53:14',6,'F','2016-12-08 05:03:12'),(59,5,'2016-12-08 05:10:08',6,'A',NULL);
/*!40000 ALTER TABLE `tab_evaluado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_perfiles_pro_estados`
--

DROP TABLE IF EXISTS `tab_perfiles_pro_estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_perfiles_pro_estados` (
  `ID_PERFIL_PRO_ESTADO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_PERFIL_PRO_ESTADO` text,
  PRIMARY KEY (`ID_PERFIL_PRO_ESTADO`),
  KEY `NOMBRE_PERFIL_PRO_ESTADO` (`NOMBRE_PERFIL_PRO_ESTADO`(1))
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_perfiles_pro_estados`
--

LOCK TABLES `tab_perfiles_pro_estados` WRITE;
/*!40000 ALTER TABLE `tab_perfiles_pro_estados` DISABLE KEYS */;
INSERT INTO `tab_perfiles_pro_estados` VALUES (2,'Auditoría Nocturna, Agencia de Ventas, Administración de Empresas'),(3,'Cortado industrial de confección textil; Operación de máquinas industriales de confección textil.'),(4,'Educación en la modalidad de atención creciendo con nuestros hijos CNH); Educación de Centro Infantil del Buen Vivir (CIBV)'),(5,'Auxiliar en gestión administrativa con manejo de TIC'),(6,'Preparaciones panaderas y pasteleras; Servicios de vinos y licores; Dirección de operadoras; Preparación y servicios de bebidas Recepción y atención de clientes en servicios de alojamiento; Coordinación de eventos; Preparaciones culinarias de partida; Administración de restaurante');
/*!40000 ALTER TABLE `tab_perfiles_pro_estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_preguntas_bloquea`
--

DROP TABLE IF EXISTS `tab_preguntas_bloquea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_preguntas_bloquea` (
  `ID_PREGUNTA` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION_PREGUNTA` text,
  `ESTADO` char(4) DEFAULT NULL,
  `ID_PERFIL_PRO_ESTADO` int(11) DEFAULT NULL,
  `BLOQUE` char(8) DEFAULT NULL,
  PRIMARY KEY (`ID_PREGUNTA`),
  KEY `ID_PERFIL_PRO_ESTADO` (`ID_PERFIL_PRO_ESTADO`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_preguntas_bloquea`
--

LOCK TABLES `tab_preguntas_bloquea` WRITE;
/*!40000 ALTER TABLE `tab_preguntas_bloquea` DISABLE KEYS */;
INSERT INTO `tab_preguntas_bloquea` VALUES (1,'Convertir las siguientes medidas de peso, 2,5 KG a libras y onzas corresponde a:\r\n','A',6,'A'),(2,'El merengue Frances se lo elabora con','A',6,'A'),(3,'Indique cuál de las siguientes definiciones corresponde al termino\r\n','A',6,'A'),(4,'<p>\r\n	<strong>Qu&eacute; tipo de crema&nbsp;puede ser usada sola como postre o ser componente para la construcci&oacute;n de los mismos?</strong></p>\r\n','A',6,'A'),(5,'<p>\r\n	<b><span style=\"font-size: 10pt; line-height: 115%; font-family: Calibri, sans-serif; color: rgb(51, 51, 51); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Maridaje:</span></b></p>\r\n','A',6,'A'),(6,'<p>\r\n	<strong>Como se denomina al vino que en su AOC en Francia es conocido como Champagne, en el nuevo mundo cuando es vinificado con sus mismos metodos?</strong></p>\r\n','A',6,'A'),(7,'<p>\r\n	<strong>Un vino de postre, por ej. los fortificados como el oporto o un licor de Tannat, marida con reposteria por:</strong></p>\r\n','A',6,'A'),(8,'<p>\r\n	<strong>De que madera es una barrica y que proceso sufren por dentro sus duelas (listones) en su fabricaci&oacute;n?</strong></p>\r\n','A',6,'A'),(9,'<p>\r\n	<strong>El espacio donde confluyen directamente la oferta tur&iacute;stica y la demanda tur&iacute;stica se llama</strong></p>\r\n','A',6,'A'),(10,'<p>\r\n	<strong>El brindar el transfer out permitara que nuestro servicio tenga un</strong></p>\r\n','A',6,'A'),(11,'<p>\r\n	La existencia de un corredor tur&iacute;stico + centro tur&iacute;stico + complejo tur&iacute;stico + &aacute;rea tur&iacute;stica + zona tur&iacute;stica + destino tur&iacute;stica&nbsp;</p>\r\n','A',6,'A'),(12,'<p>\r\n	<strong>Dentro de cristaler&iacute;a&nbsp; debemos conocer las cantidades a servir por ejemplo una copa flauta s champagne la cantidad de</strong></p>\r\n','A',6,'A'),(13,'<p>\r\n	El proceso de examinaci&oacute;n para la certificaci&oacute;n tiene dos fases, cu&aacute;les son:</p>\r\n','A',6,'B');
/*!40000 ALTER TABLE `tab_preguntas_bloquea` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-08  8:42:47
