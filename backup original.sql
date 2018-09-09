-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pccl7
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
-- Table structure for table `tab_archivos`
--

DROP TABLE IF EXISTS `tab_archivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_archivos` (
  `ID_ARCHIVO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_ARCHIVO` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_ARCHIVO`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_archivos`
--

LOCK TABLES `tab_archivos` WRITE;
/*!40000 ALTER TABLE `tab_archivos` DISABLE KEYS */;
INSERT INTO `tab_archivos` VALUES (1,'F035'),(2,'F018'),(3,'F003'),(4,'F002'),(5,'F010'),(6,'F011'),(7,'F021'),(8,'F015'),(9,'F009');
/*!40000 ALTER TABLE `tab_archivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_asignaciones_roles_usuarios`
--

DROP TABLE IF EXISTS `tab_asignaciones_roles_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_asignaciones_roles_usuarios` (
  `ID_ASIG_ROL_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ROL` int(11) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_ASIG_ROL_USUARIO`),
  KEY `FK_REFERENCE_20` (`ID_ROL`),
  KEY `FK_REFERENCE_24` (`ID_USUARIO`),
  CONSTRAINT `FK_REFERENCE_20` FOREIGN KEY (`ID_ROL`) REFERENCES `tab_roles` (`ID_ROL`),
  CONSTRAINT `FK_REFERENCE_24` FOREIGN KEY (`ID_USUARIO`) REFERENCES `tab_usuarios` (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_asignaciones_roles_usuarios`
--

LOCK TABLES `tab_asignaciones_roles_usuarios` WRITE;
/*!40000 ALTER TABLE `tab_asignaciones_roles_usuarios` DISABLE KEYS */;
INSERT INTO `tab_asignaciones_roles_usuarios` VALUES (2,1,1),(3,2,3),(4,2,7),(5,2,8),(6,2,9),(7,2,10);
/*!40000 ALTER TABLE `tab_asignaciones_roles_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_asociacion_perf_pro`
--

DROP TABLE IF EXISTS `tab_asociacion_perf_pro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_asociacion_perf_pro` (
  `ID_ASOCIACION_PERF_PRO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_ASOCIACION_PERF_PRO` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_ASOCIACION_PERF_PRO`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_asociacion_perf_pro`
--

LOCK TABLES `tab_asociacion_perf_pro` WRITE;
/*!40000 ALTER TABLE `tab_asociacion_perf_pro` DISABLE KEYS */;
INSERT INTO `tab_asociacion_perf_pro` VALUES (1,'Turismo	'),(2,'Catalogo inclusivo	 	'),(3,'Desarrollo infantil integral	 	'),(4,'Informática	');
/*!40000 ALTER TABLE `tab_asociacion_perf_pro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_aulas`
--

DROP TABLE IF EXISTS `tab_aulas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_aulas` (
  `ID_AULA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_MODALIDAD` int(11) DEFAULT NULL,
  `ID_PROVINCIA` int(11) DEFAULT NULL,
  `LUGAR_UBICACION` varchar(150) DEFAULT NULL,
  `CIUDAD` varchar(100) DEFAULT NULL,
  `DIRECCION` varchar(150) DEFAULT NULL,
  `NUM_AULA` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ID_AULA`),
  KEY `FK_REFERENCE_51` (`ID_MODALIDAD`),
  KEY `FK_REFERENCE_52` (`ID_PROVINCIA`),
  CONSTRAINT `FK_REFERENCE_51` FOREIGN KEY (`ID_MODALIDAD`) REFERENCES `tab_modalidades` (`ID_MODALIDAD`),
  CONSTRAINT `FK_REFERENCE_52` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `tab_provincias` (`ID_PROVINCIA`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_aulas`
--

LOCK TABLES `tab_aulas` WRITE;
/*!40000 ALTER TABLE `tab_aulas` DISABLE KEYS */;
INSERT INTO `tab_aulas` VALUES (1,1,1,'INSTALACIONES OEC	','Ibarra	','El Oro y 13 de abril			','desde 201 hasta 215');
/*!40000 ALTER TABLE `tab_aulas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_cantones`
--

DROP TABLE IF EXISTS `tab_cantones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_cantones` (
  `ID_CANTON` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROVINCIA` int(11) DEFAULT NULL,
  `CANTON` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_CANTON`),
  KEY `FK_REFERENCE_16` (`ID_PROVINCIA`),
  CONSTRAINT `FK_REFERENCE_16` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `tab_provincias` (`ID_PROVINCIA`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_cantones`
--

LOCK TABLES `tab_cantones` WRITE;
/*!40000 ALTER TABLE `tab_cantones` DISABLE KEYS */;
INSERT INTO `tab_cantones` VALUES (1,1,'IBARRA');
/*!40000 ALTER TABLE `tab_cantones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_capacitacion_areas`
--

DROP TABLE IF EXISTS `tab_capacitacion_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_capacitacion_areas` (
  `ID_AREA` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_AREA` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_AREA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_capacitacion_areas`
--

LOCK TABLES `tab_capacitacion_areas` WRITE;
/*!40000 ALTER TABLE `tab_capacitacion_areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_capacitacion_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_capacitaciones`
--

DROP TABLE IF EXISTS `tab_capacitaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_capacitaciones` (
  `ID_CAPACIACION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_AREA` int(11) DEFAULT NULL,
  `NOMBRE_INSTITUCION` varchar(150) NOT NULL,
  `FECHA_INICIAL` date NOT NULL,
  `FECHA_FINAL` date NOT NULL,
  `DURACION_HORAS` int(11) NOT NULL,
  PRIMARY KEY (`ID_CAPACIACION`),
  KEY `FK_REFERENCE_49` (`ID_AREA`),
  CONSTRAINT `FK_REFERENCE_49` FOREIGN KEY (`ID_AREA`) REFERENCES `tab_capacitacion_areas` (`ID_AREA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_capacitaciones`
--

LOCK TABLES `tab_capacitaciones` WRITE;
/*!40000 ALTER TABLE `tab_capacitaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_capacitaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_cargos`
--

DROP TABLE IF EXISTS `tab_cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_cargos` (
  `ID_CARGO` int(11) NOT NULL AUTO_INCREMENT,
  `CARGO` varchar(60) NOT NULL,
  PRIMARY KEY (`ID_CARGO`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_cargos`
--

LOCK TABLES `tab_cargos` WRITE;
/*!40000 ALTER TABLE `tab_cargos` DISABLE KEYS */;
INSERT INTO `tab_cargos` VALUES (1,'Coordinadora del Comité de Certificación'),(2,'Responsable de Proceso de Certificación '),(3,'Supervisor'),(4,'Analista de certificación y control'),(5,'Responsable de procesos contable-financiero'),(6,'Examinador'),(7,'NINGUNO');
/*!40000 ALTER TABLE `tab_cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_categorias_criterios_evaluacion`
--

DROP TABLE IF EXISTS `tab_categorias_criterios_evaluacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_categorias_criterios_evaluacion` (
  `ID_CAT_CRITERIO_EVALUACION` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_CAT_CRIT_EVA` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID_CAT_CRITERIO_EVALUACION`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_categorias_criterios_evaluacion`
--

LOCK TABLES `tab_categorias_criterios_evaluacion` WRITE;
/*!40000 ALTER TABLE `tab_categorias_criterios_evaluacion` DISABLE KEYS */;
INSERT INTO `tab_categorias_criterios_evaluacion` VALUES (1,'EDUCACIÓN Y FORMACIÓN ACADÉMICA EN EL PERFIL'),(2,'FORMACIÓN PEDAGÓGICA'),(3,'EXPERIENCIA TÉCNICA RELACIONADA AL PERFIL'),(4,'EXPERIENCIA PEDAGÓGICA O ACADÉMICA');
/*!40000 ALTER TABLE `tab_categorias_criterios_evaluacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_certificacion`
--

DROP TABLE IF EXISTS `tab_certificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_certificacion` (
  `ID_CERIFICACION` int(11) NOT NULL AUTO_INCREMENT,
  `ASUNTO` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`ID_CERIFICACION`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_certificacion`
--

LOCK TABLES `tab_certificacion` WRITE;
/*!40000 ALTER TABLE `tab_certificacion` DISABLE KEYS */;
INSERT INTO `tab_certificacion` VALUES (1,'Documentos relacionados con el proceso de certificación de personas');
/*!40000 ALTER TABLE `tab_certificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_codigos`
--

DROP TABLE IF EXISTS `tab_codigos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_codigos` (
  `ID_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ARCHIVO` int(11) DEFAULT NULL,
  `ID_ENCABEZADO` int(11) DEFAULT NULL,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `CODIGO` varchar(200) DEFAULT NULL,
  `FECHA_EMISION` datetime DEFAULT NULL,
  `FECHA_FINAL` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_CODIGO`),
  KEY `FK_REFERENCE_59` (`ID_ARCHIVO`),
  KEY `FK_REFERENCE_81` (`ID_ENCABEZADO`),
  KEY `FK_REFERENCE_82` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_59` FOREIGN KEY (`ID_ARCHIVO`) REFERENCES `tab_archivos` (`ID_ARCHIVO`),
  CONSTRAINT `FK_REFERENCE_81` FOREIGN KEY (`ID_ENCABEZADO`) REFERENCES `tab_encabezado` (`ID_ENCABEZADO`),
  CONSTRAINT `FK_REFERENCE_82` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_codigos`
--

LOCK TABLES `tab_codigos` WRITE;
/*!40000 ALTER TABLE `tab_codigos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_codigos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_curso`
--

DROP TABLE IF EXISTS `tab_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_curso` (
  `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_DETALLE_CERTIFICACION` int(11) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `DURACION` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_CURSO`),
  KEY `FK_REFERENCE_69` (`ID_DETALLE_CERTIFICACION`),
  CONSTRAINT `FK_REFERENCE_69` FOREIGN KEY (`ID_DETALLE_CERTIFICACION`) REFERENCES `tab_detalle_certificacion` (`ID_DETALLE_CERTIFICACION`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_curso`
--

LOCK TABLES `tab_curso` WRITE;
/*!40000 ALTER TABLE `tab_curso` DISABLE KEYS */;
INSERT INTO `tab_curso` VALUES (1,1,'2016-11-07',9);
/*!40000 ALTER TABLE `tab_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_denominacion_catalogo_perf_pro`
--

DROP TABLE IF EXISTS `tab_denominacion_catalogo_perf_pro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_denominacion_catalogo_perf_pro` (
  `ID_DENOMINACION_CATALOGO_PERF_PRO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ASOCIACION_PERF_PRO` int(11) DEFAULT NULL,
  `ID_SECTOR_CIUU_PERF_PRO` int(11) DEFAULT NULL,
  `ID_FAMILIA_PROFESIONAL_PERF_PRO` int(11) DEFAULT NULL,
  `ID_UNIDAD_COMPETENCIA` int(11) DEFAULT NULL,
  `NOMBRE_DENOMINACION_CATALOGO_PERF_PRO` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_DENOMINACION_CATALOGO_PERF_PRO`),
  KEY `FK_REFERENCE_34` (`ID_ASOCIACION_PERF_PRO`),
  KEY `FK_REFERENCE_35` (`ID_SECTOR_CIUU_PERF_PRO`),
  KEY `FK_REFERENCE_36` (`ID_FAMILIA_PROFESIONAL_PERF_PRO`),
  KEY `FK_REFERENCE_61` (`ID_UNIDAD_COMPETENCIA`),
  CONSTRAINT `FK_REFERENCE_34` FOREIGN KEY (`ID_ASOCIACION_PERF_PRO`) REFERENCES `tab_asociacion_perf_pro` (`ID_ASOCIACION_PERF_PRO`),
  CONSTRAINT `FK_REFERENCE_35` FOREIGN KEY (`ID_SECTOR_CIUU_PERF_PRO`) REFERENCES `tab_sector_ciuu_perf_pro` (`ID_SECTOR_CIUU_PERF_PRO`),
  CONSTRAINT `FK_REFERENCE_36` FOREIGN KEY (`ID_FAMILIA_PROFESIONAL_PERF_PRO`) REFERENCES `tab_familia_profesional_perf_pro` (`ID_FAMILIA_PROFESIONAL_PERF_PRO`),
  CONSTRAINT `FK_REFERENCE_61` FOREIGN KEY (`ID_UNIDAD_COMPETENCIA`) REFERENCES `tab_unidad_competencia` (`ID_UNIDAD_COMPETENCIA`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_denominacion_catalogo_perf_pro`
--

LOCK TABLES `tab_denominacion_catalogo_perf_pro` WRITE;
/*!40000 ALTER TABLE `tab_denominacion_catalogo_perf_pro` DISABLE KEYS */;
INSERT INTO `tab_denominacion_catalogo_perf_pro` VALUES (1,1,NULL,1,1,'Administración de restaurante				'),(2,2,NULL,1,1,' Auditoría nocturna'),(3,2,NULL,3,1,'Agencia de ventas'),(4,2,NULL,3,4,'Cortado industrial de confección textil				');
/*!40000 ALTER TABLE `tab_denominacion_catalogo_perf_pro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_detalle__cert`
--

DROP TABLE IF EXISTS `tab_detalle__cert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_detalle__cert` (
  `ID_CERTIFICACION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `ID_CURSO` int(11) DEFAULT NULL,
  `ID_DETALLE_CERTIFICACION` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_CERTIFICACION`),
  KEY `FK_REFERENCE_70` (`ID_PERSONA`),
  KEY `FK_REFERENCE_85` (`ID_CURSO`),
  KEY `FK_REFERENCE_86` (`ID_DETALLE_CERTIFICACION`),
  CONSTRAINT `FK_REFERENCE_70` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_85` FOREIGN KEY (`ID_CURSO`) REFERENCES `tab_curso` (`ID_CURSO`),
  CONSTRAINT `FK_REFERENCE_86` FOREIGN KEY (`ID_DETALLE_CERTIFICACION`) REFERENCES `tab_detalle_certificacion` (`ID_DETALLE_CERTIFICACION`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_detalle__cert`
--

LOCK TABLES `tab_detalle__cert` WRITE;
/*!40000 ALTER TABLE `tab_detalle__cert` DISABLE KEYS */;
INSERT INTO `tab_detalle__cert` VALUES (1,7,1,1);
/*!40000 ALTER TABLE `tab_detalle__cert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_detalle_certificacion`
--

DROP TABLE IF EXISTS `tab_detalle_certificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_detalle_certificacion` (
  `ID_DETALLE_CERTIFICACION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CERIFICACION` int(11) DEFAULT NULL,
  `NOMBRE_DET_CERT` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_DETALLE_CERTIFICACION`),
  KEY `FK_REFERENCE_66` (`ID_CERIFICACION`),
  CONSTRAINT `FK_REFERENCE_66` FOREIGN KEY (`ID_CERIFICACION`) REFERENCES `tab_certificacion` (`ID_CERIFICACION`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_detalle_certificacion`
--

LOCK TABLES `tab_detalle_certificacion` WRITE;
/*!40000 ALTER TABLE `tab_detalle_certificacion` DISABLE KEYS */;
INSERT INTO `tab_detalle_certificacion` VALUES (1,1,'Aceptación de la aplicación para la certificación');
/*!40000 ALTER TABLE `tab_detalle_certificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_detalles_experiencias_profesionales`
--

DROP TABLE IF EXISTS `tab_detalles_experiencias_profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_detalles_experiencias_profesionales` (
  `ID_DETALLE_EXPE_PROFESIONAL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_EXPE_PROFESIONAL` int(11) DEFAULT NULL,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `ENTIDAD` varchar(200) DEFAULT NULL,
  `CARGO_EJERCIDO` varchar(30) DEFAULT NULL,
  `ACTIVIDAD_CARGO` varchar(200) DEFAULT NULL,
  `FECHA_INICIAL` date DEFAULT NULL,
  `FECHA_FINAL` date DEFAULT NULL,
  `ARCHIVO` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`ID_DETALLE_EXPE_PROFESIONAL`),
  KEY `FK_REFERENCE_13` (`ID_EXPE_PROFESIONAL`),
  KEY `FK_REFERENCE_27` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`ID_EXPE_PROFESIONAL`) REFERENCES `tab_experiencias_profesionales` (`ID_EXPE_PROFESIONAL`),
  CONSTRAINT `FK_REFERENCE_27` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_detalles_experiencias_profesionales`
--

LOCK TABLES `tab_detalles_experiencias_profesionales` WRITE;
/*!40000 ALTER TABLE `tab_detalles_experiencias_profesionales` DISABLE KEYS */;
INSERT INTO `tab_detalles_experiencias_profesionales` VALUES (1,2,7,'Instituto Tecnológico Superior \"José Chiriboga Grijalva\"','Coordinacdor - Docente de la C','Planificar, organizar, controlar y dirigir los procesos de gestión académica de la Carrrera; Gestión académica en el aula; Planificar, organizar, dirigir y controlar los eventos institucionales	','2012-10-01',NULL,'23205-f003-20-.pdf'),(2,1,8,'cnt','gerente','sistemas','2016-12-11','2016-12-11',NULL),(3,2,8,'cnt','gerente','sistemas','2016-12-11','2016-12-11',NULL),(4,1,9,'ITCA','DIRECTOR DE SISTEMAS','ADMINISTRACION','2006-09-01','0000-00-00',NULL),(5,1,9,'ITCA','DIRECTOR DE LA CARRERA DE INFO','ADMINISTRACION','2009-09-01','2015-09-30',NULL);
/*!40000 ALTER TABLE `tab_detalles_experiencias_profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_detalles_formaciones`
--

DROP TABLE IF EXISTS `tab_detalles_formaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_detalles_formaciones` (
  `ID_DETALLE_FORMACION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_FORMACION_GENERAL` int(11) DEFAULT NULL,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `NOMBRE_CURSO` varchar(300) DEFAULT NULL,
  `INSTITUCION` varchar(300) DEFAULT NULL,
  `FECHA_INICIO` date DEFAULT NULL,
  `FECHA_FINAL` date DEFAULT NULL,
  `ARCHIVO` varchar(600) DEFAULT NULL,
  `DURACION` int(11) DEFAULT NULL,
  `FORMACION_ESTADO` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_DETALLE_FORMACION`),
  KEY `FK_REFERENCE_14` (`ID_FORMACION_GENERAL`),
  KEY `FK_REFERENCE_17` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_14` FOREIGN KEY (`ID_FORMACION_GENERAL`) REFERENCES `tab_formaciones_generales` (`ID_FORMACION_GENERAL`),
  CONSTRAINT `FK_REFERENCE_17` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_detalles_formaciones`
--

LOCK TABLES `tab_detalles_formaciones` WRITE;
/*!40000 ALTER TABLE `tab_detalles_formaciones` DISABLE KEYS */;
INSERT INTO `tab_detalles_formaciones` VALUES (1,2,7,'SUSHI-IBARRA 2014','Escuela de gastronomía de Japón; Le Fouquet`s y la escuela de Excelencia profesional de hoteleria y gastronomía EXPO de Perú','2015-03-24','2015-03-25','55276-f009-8-.pdf',16,'Participación'),(2,1,8,'mantenimiento','itca','2016-12-04','2016-12-04',NULL,93,NULL),(3,2,8,'mantenimiento','itca','2016-12-04','2016-12-04',NULL,93,NULL),(4,1,9,'TUTOR DE TESIS','UNITA','0000-00-00','0000-00-00',NULL,0,NULL),(5,2,9,'BASE DE DATOS','MICROSOFT','0000-00-00','0000-00-00',NULL,0,NULL);
/*!40000 ALTER TABLE `tab_detalles_formaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_detalles_sucursales`
--

DROP TABLE IF EXISTS `tab_detalles_sucursales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_detalles_sucursales` (
  `ID_SUCURSAL` int(11) NOT NULL AUTO_INCREMENT,
  `CIUDAD` varchar(100) NOT NULL,
  `DIRECCION` varchar(100) NOT NULL,
  `NUM_PERSONAS` int(11) NOT NULL,
  `ACTIVIDADES_EJECUTAR` varchar(200) NOT NULL,
  PRIMARY KEY (`ID_SUCURSAL`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_detalles_sucursales`
--

LOCK TABLES `tab_detalles_sucursales` WRITE;
/*!40000 ALTER TABLE `tab_detalles_sucursales` DISABLE KEYS */;
INSERT INTO `tab_detalles_sucursales` VALUES (1,'asdasdasd','',0,'');
/*!40000 ALTER TABLE `tab_detalles_sucursales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_educacion_superior`
--

DROP TABLE IF EXISTS `tab_educacion_superior`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_educacion_superior` (
  `ID_EDU_SUP` int(11) NOT NULL AUTO_INCREMENT,
  `ID_FORMACION_EDU_SUP` int(11) DEFAULT NULL,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `INSTITUCION` varchar(200) DEFAULT NULL,
  `TITULO` varchar(1000) DEFAULT NULL,
  `REGISTRO_SENECYT` varchar(200) DEFAULT NULL,
  `ARCHIVO` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`ID_EDU_SUP`),
  KEY `FK_REFERENCE_26` (`ID_PERSONA`),
  KEY `FK_REFERENCE_7` (`ID_FORMACION_EDU_SUP`),
  CONSTRAINT `FK_REFERENCE_26` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_7` FOREIGN KEY (`ID_FORMACION_EDU_SUP`) REFERENCES `tab_formacion_edu_sup` (`ID_FORMACION_EDU_SUP`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_educacion_superior`
--

LOCK TABLES `tab_educacion_superior` WRITE;
/*!40000 ALTER TABLE `tab_educacion_superior` DISABLE KEYS */;
INSERT INTO `tab_educacion_superior` VALUES (1,1,7,'Pontificia Universidad Catolica			','Ingeniero en Adminstración Hotelera			','34234','b2ed9-f009-8-.pdf'),(2,1,8,'udla','sistemas','2332',NULL),(3,2,8,'PUCESI','master','93893',NULL),(4,2,9,'PONTIFICIA UNIVERSIDAD CATOLICA','MAESTRIA EN GERENCIA INFORMATICA','025-025-369',NULL),(5,1,9,'UNIVERSIDAD TECNICA DEL NORTE','INGENIERIA EN SISTEMAS','741-852-963',NULL);
/*!40000 ALTER TABLE `tab_educacion_superior` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_encabezado`
--

DROP TABLE IF EXISTS `tab_encabezado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_encabezado` (
  `ID_ENCABEZADO` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION_HOJA` varchar(500) DEFAULT NULL,
  `VERSION` decimal(6,3) DEFAULT NULL,
  PRIMARY KEY (`ID_ENCABEZADO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_encabezado`
--

LOCK TABLES `tab_encabezado` WRITE;
/*!40000 ALTER TABLE `tab_encabezado` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_encabezado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_enunciado_eva_examinador`
--

DROP TABLE IF EXISTS `tab_enunciado_eva_examinador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_enunciado_eva_examinador` (
  `ID_ENUNCIADO_EVA_EXAMINADOR` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_ENUNCIADO` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_ENUNCIADO_EVA_EXAMINADOR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_enunciado_eva_examinador`
--

LOCK TABLES `tab_enunciado_eva_examinador` WRITE;
/*!40000 ALTER TABLE `tab_enunciado_eva_examinador` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_enunciado_eva_examinador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_estado_persona`
--

DROP TABLE IF EXISTS `tab_estado_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_estado_persona` (
  `ID_ESTADO_PERSONA` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_ESTADO_PERSONA` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_ESTADO_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_estado_persona`
--

LOCK TABLES `tab_estado_persona` WRITE;
/*!40000 ALTER TABLE `tab_estado_persona` DISABLE KEYS */;
INSERT INTO `tab_estado_persona` VALUES (1,'NINGUNO');
/*!40000 ALTER TABLE `tab_estado_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_estado_responsabilidad`
--

DROP TABLE IF EXISTS `tab_estado_responsabilidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_estado_responsabilidad` (
  `ID_ESTADO_RESPOSABILIDAD` int(11) NOT NULL AUTO_INCREMENT,
  `ESTADO_RESPONSABILIDAD` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_ESTADO_RESPOSABILIDAD`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_estado_responsabilidad`
--

LOCK TABLES `tab_estado_responsabilidad` WRITE;
/*!40000 ALTER TABLE `tab_estado_responsabilidad` DISABLE KEYS */;
INSERT INTO `tab_estado_responsabilidad` VALUES (1,'NINGUNO');
/*!40000 ALTER TABLE `tab_estado_responsabilidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_estado_tramite`
--

DROP TABLE IF EXISTS `tab_estado_tramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_estado_tramite` (
  `ID_ESTADO_TRAMITE` int(11) NOT NULL AUTO_INCREMENT,
  `ESTADO` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_ESTADO_TRAMITE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_estado_tramite`
--

LOCK TABLES `tab_estado_tramite` WRITE;
/*!40000 ALTER TABLE `tab_estado_tramite` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_estado_tramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_eva_detalle`
--

DROP TABLE IF EXISTS `tab_eva_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_eva_detalle` (
  `ID_DETALLE` int(11) NOT NULL AUTO_INCREMENT,
  `DETALLE` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_DETALLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_eva_detalle`
--

LOCK TABLES `tab_eva_detalle` WRITE;
/*!40000 ALTER TABLE `tab_eva_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_eva_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_eva_detalle_persona`
--

DROP TABLE IF EXISTS `tab_eva_detalle_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_eva_detalle_persona` (
  `EVA_DETALLE_PERSONA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SUB` int(11) DEFAULT NULL,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `VALOR1` int(11) DEFAULT NULL,
  `VALOR2` int(11) DEFAULT NULL,
  `VALOR3` int(11) DEFAULT NULL,
  `VALOR4` int(11) DEFAULT NULL,
  `VALOR5` int(11) DEFAULT NULL,
  `VALOR6` int(11) DEFAULT NULL,
  `VALOR7` int(11) DEFAULT NULL,
  `VALOR8` int(11) DEFAULT NULL,
  `VALOR9` int(11) DEFAULT NULL,
  `SUMA` int(11) DEFAULT NULL,
  PRIMARY KEY (`EVA_DETALLE_PERSONA`),
  KEY `FK_REFERENCE_87` (`ID_SUB`),
  KEY `FK_REFERENCE_88` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_87` FOREIGN KEY (`ID_SUB`) REFERENCES `tab_subdetalle` (`ID_SUB`),
  CONSTRAINT `FK_REFERENCE_88` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_eva_detalle_persona`
--

LOCK TABLES `tab_eva_detalle_persona` WRITE;
/*!40000 ALTER TABLE `tab_eva_detalle_persona` DISABLE KEYS */;
INSERT INTO `tab_eva_detalle_persona` VALUES (1,NULL,1,5,4,3,5,5,5,5,5,5,42),(2,NULL,9,1,2,3,2,54,45,2,23,74,206);
/*!40000 ALTER TABLE `tab_eva_detalle_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_eva_exa_estado_respuestas`
--

DROP TABLE IF EXISTS `tab_eva_exa_estado_respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_eva_exa_estado_respuestas` (
  `ID_EVA_EXA_ESTADO_RESPUESTA` int(11) NOT NULL AUTO_INCREMENT,
  `ESTADO` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_EVA_EXA_ESTADO_RESPUESTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_eva_exa_estado_respuestas`
--

LOCK TABLES `tab_eva_exa_estado_respuestas` WRITE;
/*!40000 ALTER TABLE `tab_eva_exa_estado_respuestas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_eva_exa_estado_respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_eva_exa_preguntas_criterio`
--

DROP TABLE IF EXISTS `tab_eva_exa_preguntas_criterio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_eva_exa_preguntas_criterio` (
  `ID_EVA_EXA_PREGUNTA_CRITERIO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ENUNCIADO_EVA_EXAMINADOR` int(11) DEFAULT NULL,
  `ID_DENOMINACION_CATALOGO_PERF_PRO` int(11) DEFAULT NULL,
  `RESPUESTA` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_EVA_EXA_PREGUNTA_CRITERIO`),
  KEY `FK_REFERENCE_75` (`ID_ENUNCIADO_EVA_EXAMINADOR`),
  KEY `FK_REFERENCE_77` (`ID_DENOMINACION_CATALOGO_PERF_PRO`),
  CONSTRAINT `FK_REFERENCE_75` FOREIGN KEY (`ID_ENUNCIADO_EVA_EXAMINADOR`) REFERENCES `tab_enunciado_eva_examinador` (`ID_ENUNCIADO_EVA_EXAMINADOR`),
  CONSTRAINT `FK_REFERENCE_77` FOREIGN KEY (`ID_DENOMINACION_CATALOGO_PERF_PRO`) REFERENCES `tab_denominacion_catalogo_perf_pro` (`ID_DENOMINACION_CATALOGO_PERF_PRO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_eva_exa_preguntas_criterio`
--

LOCK TABLES `tab_eva_exa_preguntas_criterio` WRITE;
/*!40000 ALTER TABLE `tab_eva_exa_preguntas_criterio` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_eva_exa_preguntas_criterio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_evaluacion_certificacion`
--

DROP TABLE IF EXISTS `tab_evaluacion_certificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_evaluacion_certificacion` (
  `ID_EVA_CERT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `ID_EXA_EVA_RESPUESTA_MULTIPLE` int(11) DEFAULT NULL,
  `ID_EVA_EXA_PREGUNTA_CRITERIO` int(11) DEFAULT NULL,
  `ID_DENOMINACION_CATALOGO_PERF_PRO` int(11) DEFAULT NULL,
  `PUNTAJE` double DEFAULT NULL,
  PRIMARY KEY (`ID_EVA_CERT`),
  KEY `FK_REFERENCE_73` (`ID_PERSONA`),
  KEY `FK_REFERENCE_74` (`ID_EXA_EVA_RESPUESTA_MULTIPLE`),
  KEY `FK_REFERENCE_76` (`ID_EVA_EXA_PREGUNTA_CRITERIO`),
  KEY `FK_REFERENCE_79` (`ID_DENOMINACION_CATALOGO_PERF_PRO`),
  CONSTRAINT `FK_REFERENCE_73` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_74` FOREIGN KEY (`ID_EXA_EVA_RESPUESTA_MULTIPLE`) REFERENCES `tab_exa_eva_respuestas_multiples` (`ID_EXA_EVA_RESPUESTA_MULTIPLE`),
  CONSTRAINT `FK_REFERENCE_76` FOREIGN KEY (`ID_EVA_EXA_PREGUNTA_CRITERIO`) REFERENCES `tab_eva_exa_preguntas_criterio` (`ID_EVA_EXA_PREGUNTA_CRITERIO`),
  CONSTRAINT `FK_REFERENCE_79` FOREIGN KEY (`ID_DENOMINACION_CATALOGO_PERF_PRO`) REFERENCES `tab_denominacion_catalogo_perf_pro` (`ID_DENOMINACION_CATALOGO_PERF_PRO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_evaluacion_certificacion`
--

LOCK TABLES `tab_evaluacion_certificacion` WRITE;
/*!40000 ALTER TABLE `tab_evaluacion_certificacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_evaluacion_certificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_evaluacion_examinadores`
--

DROP TABLE IF EXISTS `tab_evaluacion_examinadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_evaluacion_examinadores` (
  `ID_EVALUACION_EXAMINADOR` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `FECHA_EVALUACION` date DEFAULT NULL,
  `ID_PERFIL_PRO_ESTADO` int(11) DEFAULT NULL,
  `ID_PERSONA_EXAMINADOR` int(11) DEFAULT NULL,
  `ID_PERSONA_FIRMA_1` int(11) DEFAULT NULL,
  `ID_PERSONA_FIRMA_2` int(11) DEFAULT NULL,
  `DURACION_HORAS` int(11) DEFAULT NULL,
  `ESTADO` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID_EVALUACION_EXAMINADOR`),
  KEY `FK_REFERENCE_100` (`ID_PERSONA_FIRMA_1`),
  KEY `FK_REFERENCE_101` (`ID_PERSONA_FIRMA_2`),
  KEY `FK_REFERENCE_91` (`ID_PERSONA`),
  KEY `FK_REFERENCE_92` (`ID_PERFIL_PRO_ESTADO`),
  KEY `FK_REFERENCE_99` (`ID_PERSONA_EXAMINADOR`),
  CONSTRAINT `FK_REFERENCE_100` FOREIGN KEY (`ID_PERSONA_FIRMA_1`) REFERENCES `tab_personas` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_101` FOREIGN KEY (`ID_PERSONA_FIRMA_2`) REFERENCES `tab_personas` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_91` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_92` FOREIGN KEY (`ID_PERFIL_PRO_ESTADO`) REFERENCES `tab_perfiles_pro_estados` (`ID_PERFIL_PRO_ESTADO`),
  CONSTRAINT `FK_REFERENCE_99` FOREIGN KEY (`ID_PERSONA_EXAMINADOR`) REFERENCES `tab_personas` (`ID_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_evaluacion_examinadores`
--

LOCK TABLES `tab_evaluacion_examinadores` WRITE;
/*!40000 ALTER TABLE `tab_evaluacion_examinadores` DISABLE KEYS */;
INSERT INTO `tab_evaluacion_examinadores` VALUES (1,8,'2016-12-10',5,7,1,5,2,'RE'),(2,9,'2016-12-15',1,4,1,5,NULL,'PE'),(3,12,'2016-12-16',7,4,1,5,2,'PE');
/*!40000 ALTER TABLE `tab_evaluacion_examinadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_evaluacion_persona`
--

DROP TABLE IF EXISTS `tab_evaluacion_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_evaluacion_persona` (
  `ID_EVALUACION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `ID_SUBCAT_CRIT_EVA` int(11) DEFAULT NULL,
  `VALOR1` int(11) DEFAULT NULL,
  `VALOR2` int(11) DEFAULT NULL,
  `VALOR3` int(11) DEFAULT NULL,
  `VALOR4` int(11) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `SUMA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_EVALUACION`),
  KEY `FK_REFERENCE_83` (`ID_PERSONA`),
  KEY `FK_REFERENCE_84` (`ID_SUBCAT_CRIT_EVA`),
  CONSTRAINT `FK_REFERENCE_83` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_84` FOREIGN KEY (`ID_SUBCAT_CRIT_EVA`) REFERENCES `tab_subcategoria_criterios_evaluacion` (`ID_SUBCAT_CRIT_EVA`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_evaluacion_persona`
--

LOCK TABLES `tab_evaluacion_persona` WRITE;
/*!40000 ALTER TABLE `tab_evaluacion_persona` DISABLE KEYS */;
INSERT INTO `tab_evaluacion_persona` VALUES (1,8,1,2,70,3,3,'2016-12-12',78),(2,9,1,4,10,70,4,'2016-12-12',88),(3,12,1,10,100,10,100,'2016-12-12',220);
/*!40000 ALTER TABLE `tab_evaluacion_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_exa_eva_respuestas_multiples`
--

DROP TABLE IF EXISTS `tab_exa_eva_respuestas_multiples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_exa_eva_respuestas_multiples` (
  `ID_EXA_EVA_RESPUESTA_MULTIPLE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ENUNCIADO_EVA_EXAMINADOR` int(11) DEFAULT NULL,
  `ID_EVA_EXA_ESTADO_RESPUESTA` int(11) DEFAULT NULL,
  `ID_DENOMINACION_CATALOGO_PERF_PRO` int(11) DEFAULT NULL,
  `RESPUESTA` varchar(1000) DEFAULT NULL,
  `VALOR` double DEFAULT NULL,
  PRIMARY KEY (`ID_EXA_EVA_RESPUESTA_MULTIPLE`),
  KEY `FK_REFERENCE_71` (`ID_ENUNCIADO_EVA_EXAMINADOR`),
  KEY `FK_REFERENCE_72` (`ID_EVA_EXA_ESTADO_RESPUESTA`),
  KEY `FK_REFERENCE_78` (`ID_DENOMINACION_CATALOGO_PERF_PRO`),
  CONSTRAINT `FK_REFERENCE_71` FOREIGN KEY (`ID_ENUNCIADO_EVA_EXAMINADOR`) REFERENCES `tab_enunciado_eva_examinador` (`ID_ENUNCIADO_EVA_EXAMINADOR`),
  CONSTRAINT `FK_REFERENCE_72` FOREIGN KEY (`ID_EVA_EXA_ESTADO_RESPUESTA`) REFERENCES `tab_eva_exa_estado_respuestas` (`ID_EVA_EXA_ESTADO_RESPUESTA`),
  CONSTRAINT `FK_REFERENCE_78` FOREIGN KEY (`ID_DENOMINACION_CATALOGO_PERF_PRO`) REFERENCES `tab_denominacion_catalogo_perf_pro` (`ID_DENOMINACION_CATALOGO_PERF_PRO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_exa_eva_respuestas_multiples`
--

LOCK TABLES `tab_exa_eva_respuestas_multiples` WRITE;
/*!40000 ALTER TABLE `tab_exa_eva_respuestas_multiples` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_exa_eva_respuestas_multiples` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_expediente`
--

DROP TABLE IF EXISTS `tab_expediente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_expediente` (
  `ID_PERSONA` int(11) DEFAULT NULL,
  `ITEM` varchar(1000) DEFAULT NULL,
  `OBSERVACION` varchar(1000) DEFAULT NULL,
  `CUMPLE` varchar(2) DEFAULT NULL,
  `ID_EXPEDIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_EXPEDIENTE`),
  KEY `FK_REFERENCE_89` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_89` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_expediente`
--

LOCK TABLES `tab_expediente` WRITE;
/*!40000 ALTER TABLE `tab_expediente` DISABLE KEYS */;
INSERT INTO `tab_expediente` VALUES (7,'Documentos de respaldo - Experiencia profesional','','SI',6,5);
/*!40000 ALTER TABLE `tab_expediente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_experiencias_profesionales`
--

DROP TABLE IF EXISTS `tab_experiencias_profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_experiencias_profesionales` (
  `ID_EXPE_PROFESIONAL` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_EXPE_PROFESIONAL` varchar(60) NOT NULL,
  PRIMARY KEY (`ID_EXPE_PROFESIONAL`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_experiencias_profesionales`
--

LOCK TABLES `tab_experiencias_profesionales` WRITE;
/*!40000 ALTER TABLE `tab_experiencias_profesionales` DISABLE KEYS */;
INSERT INTO `tab_experiencias_profesionales` VALUES (1,'PROFESIONAL'),(2,'PEDAGOGICA');
/*!40000 ALTER TABLE `tab_experiencias_profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_familia_profesional_perf_pro`
--

DROP TABLE IF EXISTS `tab_familia_profesional_perf_pro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_familia_profesional_perf_pro` (
  `ID_FAMILIA_PROFESIONAL_PERF_PRO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_FAMILIA_PROFESIONAL_PERF_PRO` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_FAMILIA_PROFESIONAL_PERF_PRO`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_familia_profesional_perf_pro`
--

LOCK TABLES `tab_familia_profesional_perf_pro` WRITE;
/*!40000 ALTER TABLE `tab_familia_profesional_perf_pro` DISABLE KEYS */;
INSERT INTO `tab_familia_profesional_perf_pro` VALUES (1,'Turismo y alimentación			'),(2,'Actividades tipo servicios			'),(3,'Comercialización y venta de productos			');
/*!40000 ALTER TABLE `tab_familia_profesional_perf_pro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_formacion_edu_sup`
--

DROP TABLE IF EXISTS `tab_formacion_edu_sup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_formacion_edu_sup` (
  `ID_FORMACION_EDU_SUP` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_FORMACION_EDU_SUP` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_FORMACION_EDU_SUP`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_formacion_edu_sup`
--

LOCK TABLES `tab_formacion_edu_sup` WRITE;
/*!40000 ALTER TABLE `tab_formacion_edu_sup` DISABLE KEYS */;
INSERT INTO `tab_formacion_edu_sup` VALUES (1,'PREGRADO'),(2,'POSTGRADO'),(3,'Otro (Técnico, Tecno');
/*!40000 ALTER TABLE `tab_formacion_edu_sup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_formaciones_estado`
--

DROP TABLE IF EXISTS `tab_formaciones_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_formaciones_estado` (
  `ID_FORMACION_ESTADO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_ESTADO` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_FORMACION_ESTADO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_formaciones_estado`
--

LOCK TABLES `tab_formaciones_estado` WRITE;
/*!40000 ALTER TABLE `tab_formaciones_estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_formaciones_estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_formaciones_generales`
--

DROP TABLE IF EXISTS `tab_formaciones_generales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_formaciones_generales` (
  `ID_FORMACION_GENERAL` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_FORMACION` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_FORMACION_GENERAL`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_formaciones_generales`
--

LOCK TABLES `tab_formaciones_generales` WRITE;
/*!40000 ALTER TABLE `tab_formaciones_generales` DISABLE KEYS */;
INSERT INTO `tab_formaciones_generales` VALUES (1,'PEDAGOGICA'),(2,'ESPECIALIZADA');
/*!40000 ALTER TABLE `tab_formaciones_generales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_formulario018`
--

DROP TABLE IF EXISTS `tab_formulario018`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_formulario018` (
  `CODIGO` int(11) NOT NULL,
  `ID_PERSONA` int(11) NOT NULL,
  `ITEM_VEIFICADO` varchar(100) DEFAULT NULL,
  `DESCRIPCION` varchar(100) DEFAULT NULL,
  `CUMPLE` varchar(2) DEFAULT NULL,
  `OBSERVACIONES` varchar(400) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `FK_REFERENCE_95` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_95` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_formulario018`
--

LOCK TABLES `tab_formulario018` WRITE;
/*!40000 ALTER TABLE `tab_formulario018` DISABLE KEYS */;
INSERT INTO `tab_formulario018` VALUES (1,9,'Denominación del cargo:','Supervisor','NO','sdfsdf',1),(2,9,'Nivel:','sdfsdf','SI','sdfsdf',2),(3,9,'Responsabilidad principal:','sdfsdfsdf','NO','sdfsdf',3),(4,9,'Rol:','sdfsdfsdf','NO','sdfsdf',4),(5,9,'Grupo ocupacional:','sdfsdf','NO','sdfsdf',5),(6,9,'Ámbito de actuación:','sdfsdf','NO','sdfsdf',6),(7,9,'Contrato/nombramiento último:','sss','SI','sdfsdfsdf',7),(8,9,'Titulo Requerido','CUARTO NIVEL','NO','sdfsdf',8),(9,9,'Área de Conocimiento /experiencia:','sdfsdfsdf','SI','sdfsdfsdf',9),(10,9,'Tiempo de Experiencia en años:','sdfsdfsdf','NO','sdfsdfsdf',10),(11,9,'Normas, Planificación, Normativa de la  Instituto Tecnológico Superior José Chiriboga Grijalva','null','SI','sdfsdf',11),(12,9,'Planificación Estratégica, Trabajo en equipo,  Técnicas de Investigación Operativa.','null','NO','sdfsdf',12),(13,9,'Normativa Interna, Relaciones Interpersonales, Elaboraciones de Informes Técnicos.','null','SI','sdfsdfsdf',13),(14,9,'Planificación, procesos, competencias laborables.','null','NO','sdfsdfsdf',14),(15,9,'Reglamento, Elaboración de Informes Técnicos.','null','SI','sdfsdfsdf',15);
/*!40000 ALTER TABLE `tab_formulario018` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_generos`
--

DROP TABLE IF EXISTS `tab_generos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_generos` (
  `ID_GENERO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_GENERO` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_GENERO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_generos`
--

LOCK TABLES `tab_generos` WRITE;
/*!40000 ALTER TABLE `tab_generos` DISABLE KEYS */;
INSERT INTO `tab_generos` VALUES (1,'MASCULINO'),(2,'FEMENINO');
/*!40000 ALTER TABLE `tab_generos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_modalidades`
--

DROP TABLE IF EXISTS `tab_modalidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_modalidades` (
  `ID_MODALIDAD` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_MODALIDAD` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_MODALIDAD`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_modalidades`
--

LOCK TABLES `tab_modalidades` WRITE;
/*!40000 ALTER TABLE `tab_modalidades` DISABLE KEYS */;
INSERT INTO `tab_modalidades` VALUES (1,'PROPIO'),(2,'ARRENDADO'),(3,'OTROS');
/*!40000 ALTER TABLE `tab_modalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_nombre_empresa`
--

DROP TABLE IF EXISTS `tab_nombre_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_nombre_empresa` (
  `ID_NOMBRE_EMPRESA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROVINCIA` int(11) DEFAULT NULL,
  `ID_CANTON` int(11) DEFAULT NULL,
  `NOMBRE_EMPRESA` varchar(300) DEFAULT NULL,
  `RUC` varchar(20) DEFAULT NULL,
  `SITIO_WEB` varchar(100) DEFAULT NULL,
  `DIRECCION` varchar(200) DEFAULT NULL,
  `CALLE_NRO` varchar(10) DEFAULT NULL,
  `CIUDAD` varchar(100) DEFAULT NULL,
  `TELEFONO` varchar(10) DEFAULT NULL,
  `CELULAR` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_NOMBRE_EMPRESA`),
  KEY `FK_REFERENCE_46` (`ID_PROVINCIA`),
  KEY `FK_REFERENCE_48` (`ID_CANTON`),
  CONSTRAINT `FK_REFERENCE_46` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `tab_provincias` (`ID_PROVINCIA`),
  CONSTRAINT `FK_REFERENCE_48` FOREIGN KEY (`ID_CANTON`) REFERENCES `tab_cantones` (`ID_CANTON`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_nombre_empresa`
--

LOCK TABLES `tab_nombre_empresa` WRITE;
/*!40000 ALTER TABLE `tab_nombre_empresa` DISABLE KEYS */;
INSERT INTO `tab_nombre_empresa` VALUES (1,2,1,'Instituto Tecnológico Superior \"José Chiriboga Grijalva\"					','1091738429001					','www.tecnologicoitca.edu.ec		','El Oro y 13 de abril					','----','Ibarra','6258372 ','991699155 ','aliciasotom@yahoo.es				');
/*!40000 ALTER TABLE `tab_nombre_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_perfiles_pro_estados`
--

DROP TABLE IF EXISTS `tab_perfiles_pro_estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_perfiles_pro_estados` (
  `ID_PERFIL_PRO_ESTADO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_PERFIL_PRO_ESTADO` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_PERFIL_PRO_ESTADO`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_perfiles_pro_estados`
--

LOCK TABLES `tab_perfiles_pro_estados` WRITE;
/*!40000 ALTER TABLE `tab_perfiles_pro_estados` DISABLE KEYS */;
INSERT INTO `tab_perfiles_pro_estados` VALUES (1,'Auditoría Nocturna, Agencia de Ventas, Administración de Empresas'),(3,'Preparaciones panaderas y pasteleras; Servicios de vinos y licores; Dirección de operadoras; Preparación y servicios de bebidas Recepción y atención de clientes en servicios de alojamiento; Coordinación de eventos; Preparaciones culinarias de partida; Administración de restaurante'),(4,'Limpieza de utensilios y equipos de cocina, Mantenimiento y limpieza de áreas de alojamiento, Servicios domésticos, Instrucción en seguridad alimentaria, Servicio de alimentos y bebidas.'),(5,'Cortado industrial de confección textil; Operación de máquinas industriales de confección textil.'),(6,'Educación en la modalidad de atención creciendo con nuestros hijos CNH); Educación de Centro Infantil del Buen Vivir (CIBV)'),(7,'Auxiliar en gestión administrativa con manejo de TIC');
/*!40000 ALTER TABLE `tab_perfiles_pro_estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_perfiles_profesionales`
--

DROP TABLE IF EXISTS `tab_perfiles_profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_perfiles_profesionales` (
  `ID_PERFIL_PRO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERFIL_PRO_ESTADO` int(11) DEFAULT NULL,
  `ID_DENOMINACION_CATALOGO_PERF_PRO` int(11) DEFAULT NULL,
  `PRIORIDAD` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_PERFIL_PRO`),
  KEY `FK_REFERENCE_37` (`ID_PERFIL_PRO_ESTADO`),
  KEY `FK_REFERENCE_38` (`ID_DENOMINACION_CATALOGO_PERF_PRO`),
  CONSTRAINT `FK_REFERENCE_37` FOREIGN KEY (`ID_PERFIL_PRO_ESTADO`) REFERENCES `tab_perfiles_pro_estados` (`ID_PERFIL_PRO_ESTADO`),
  CONSTRAINT `FK_REFERENCE_38` FOREIGN KEY (`ID_DENOMINACION_CATALOGO_PERF_PRO`) REFERENCES `tab_denominacion_catalogo_perf_pro` (`ID_DENOMINACION_CATALOGO_PERF_PRO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_perfiles_profesionales`
--

LOCK TABLES `tab_perfiles_profesionales` WRITE;
/*!40000 ALTER TABLE `tab_perfiles_profesionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_perfiles_profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_personas`
--

DROP TABLE IF EXISTS `tab_personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_personas` (
  `ID_PERSONA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_GENERO` int(11) DEFAULT NULL,
  `ID_CARGO` int(11) DEFAULT NULL,
  `ID_PROVINCIA` int(11) DEFAULT NULL,
  `ID_CANTON` int(11) DEFAULT NULL,
  `ID_ESTADO_RESPOSABILIDAD` int(11) DEFAULT NULL,
  `ID_ESTADO_PERSONA` int(11) DEFAULT NULL,
  `ID_ESTADO_TRAMITE` int(11) DEFAULT NULL,
  `CEDULA` varchar(10) NOT NULL,
  `NOMBRES` varchar(50) NOT NULL,
  `APELLIDO_MATERNO` varchar(25) NOT NULL,
  `APELLIDO_PATERNO` varchar(25) NOT NULL,
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `E_MAIL` varchar(50) NOT NULL,
  `CALLE_PRINCIPAL` varchar(100) NOT NULL,
  `NRO_CASA` varchar(10) NOT NULL,
  `CALLE_SECUNDARIA` varchar(15) NOT NULL,
  `NUMERO_CELULAR` varchar(15) NOT NULL,
  `NUMERO_TELEFONO` varchar(15) NOT NULL,
  `FOTOGRAFIA` varchar(600) NOT NULL,
  `ESTADO_TAREA` varchar(20) DEFAULT NULL,
  `ID_DENOMINACION_CATALOGO_PERF_PRO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_PERSONA`),
  KEY `FK_REFERENCE_18` (`ID_CARGO`),
  KEY `FK_REFERENCE_21` (`ID_GENERO`),
  KEY `FK_REFERENCE_22` (`ID_PROVINCIA`),
  KEY `FK_REFERENCE_28` (`ID_CANTON`),
  KEY `FK_REFERENCE_29` (`ID_ESTADO_RESPOSABILIDAD`),
  KEY `FK_REFERENCE_39` (`ID_ESTADO_PERSONA`),
  KEY `FK_REFERENCE_60` (`ID_ESTADO_TRAMITE`),
  CONSTRAINT `FK_REFERENCE_18` FOREIGN KEY (`ID_CARGO`) REFERENCES `tab_cargos` (`ID_CARGO`),
  CONSTRAINT `FK_REFERENCE_21` FOREIGN KEY (`ID_GENERO`) REFERENCES `tab_generos` (`ID_GENERO`),
  CONSTRAINT `FK_REFERENCE_22` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `tab_provincias` (`ID_PROVINCIA`),
  CONSTRAINT `FK_REFERENCE_28` FOREIGN KEY (`ID_CANTON`) REFERENCES `tab_cantones` (`ID_CANTON`),
  CONSTRAINT `FK_REFERENCE_29` FOREIGN KEY (`ID_ESTADO_RESPOSABILIDAD`) REFERENCES `tab_estado_responsabilidad` (`ID_ESTADO_RESPOSABILIDAD`),
  CONSTRAINT `FK_REFERENCE_39` FOREIGN KEY (`ID_ESTADO_PERSONA`) REFERENCES `tab_estado_persona` (`ID_ESTADO_PERSONA`),
  CONSTRAINT `FK_REFERENCE_60` FOREIGN KEY (`ID_ESTADO_TRAMITE`) REFERENCES `tab_estado_tramite` (`ID_ESTADO_TRAMITE`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_personas`
--

LOCK TABLES `tab_personas` WRITE;
/*!40000 ALTER TABLE `tab_personas` DISABLE KEYS */;
INSERT INTO `tab_personas` VALUES (1,2,1,1,1,NULL,NULL,NULL,'1001556867','Alicia Magdalena','Montalvo',' Soto ',NULL,'aliciasotom@yahoo.es','Conjunto Valle Hermoso ','Casa 16','','0991699155','62558378','','2',NULL),(3,2,2,1,1,NULL,NULL,NULL,'1001450061','Nuria Janeth ','Montalvo	','Galárraga 	',NULL,'nuria_galarragam@yahoo.es				','Bartolomé García ','5-112 ','Juan Francisco ','980627699','62558378','','9',NULL),(4,2,5,1,1,NULL,NULL,NULL,'1001992344','Tatiana del Rocio','Guerrero				',' Zambrano ',NULL,'trzambrano@tecnologicoitca.edu.ec				','Manabí ','casa 52	','13 de Abril','0985337187				','062558496				','','9',NULL),(5,2,4,1,1,NULL,NULL,NULL,'1002550463','Carla Elizabeth ','Galárraga				','Jaramillo ',NULL,'carla_jaramillo_5@hotmail.com				','Bartolomé García ','5-112 ','Juan Francisco ','0987338306				','062955911				','','59',NULL),(6,1,3,1,1,NULL,NULL,NULL,'1705542312','Marco Luis','Hermosa				','Duque ',NULL,'lgduque@tecnologicoitca.edu.ec				','Yahuarcocha, calle 18 de Abril ','','la Huerta','0990723507				','062558378				','','9',NULL),(7,1,6,NULL,1,NULL,NULL,NULL,'0923906747','Ronny Kleber 		','Olvera		','Soriano ',NULL,'','Dr. Marco Nicolalde','','Emperatriz M','0991113662','62558378				','','2',NULL),(8,1,7,2,1,1,NULL,NULL,'1003921293','PEPITO BENITO','YAR','PEREZ','2016-12-04','korbold@live.com','salinas','9393','Simon Bolivar','0987654321','838394','','6',1),(9,1,7,2,1,1,NULL,NULL,'1002168787','JORGE LENIN','ESPINOZA','ACOSTA','0000-00-00','jlacosta@tecnologicoitca.edu.ec','SN','00','HERNAN FONZALES','095553159','062650271','','7',1),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1003421293','','','',NULL,'','','','','','','','0',NULL),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1004448757','','','',NULL,'','','','','','','','0',NULL),(12,1,7,2,1,1,NULL,NULL,'1002398268','Hugo','Jaramillo','Narvaez','1981-06-11','hjnarvaez@tecnologicoitca.edu.ec','El Oro','1234','13 de Abril','09812345','123456','','2',2);
/*!40000 ALTER TABLE `tab_personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_preguntas_esquemas_certificacion`
--

DROP TABLE IF EXISTS `tab_preguntas_esquemas_certificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_preguntas_esquemas_certificacion` (
  `ID_PREGUNTA_ESQUEMA_CERTIFICACION` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_PERFIL_PRO_ESTADO` int(11) NOT NULL,
  `DESCRIPCION_PREGUNTA` text NOT NULL,
  `RESPUESTA_CORRECTA` varchar(2) NOT NULL,
  `VALOR_MAXIMO` decimal(8,2) NOT NULL,
  `NRO_PREGUNTA` int(11) NOT NULL,
  `ESTADO` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID_PREGUNTA_ESQUEMA_CERTIFICACION`),
  KEY `FK_REFERENCE_93` (`ID_PERFIL_PRO_ESTADO`),
  CONSTRAINT `FK_REFERENCE_93` FOREIGN KEY (`ID_PERFIL_PRO_ESTADO`) REFERENCES `tab_perfiles_pro_estados` (`ID_PERFIL_PRO_ESTADO`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_preguntas_esquemas_certificacion`
--

LOCK TABLES `tab_preguntas_esquemas_certificacion` WRITE;
/*!40000 ALTER TABLE `tab_preguntas_esquemas_certificacion` DISABLE KEYS */;
INSERT INTO `tab_preguntas_esquemas_certificacion` VALUES (1,1,'<div>\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> La calidad significa&nbsp;</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ir m&aacute;s all&aacute; de la satisfacci&oacute;n de las necesidades y expectativas del cliente&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Llegar a los ejemplares de un buen funcionamiento de las actitudes de las empresas&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Coordinara a la empresa de una generaci&oacute;n de los empleados&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguna de las anteriores&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,1,'AC'),(2,1,'<div style=\"text-align: justify;\">\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> En la administraci&oacute;n de una empresa hotelera se considera unas actividades en el proceso de control</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Definici&oacute;n de planes para alcanzarlos&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Organizaci&oacute;n de recursos y actividades para alcanzar los objetivos&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Direcci&oacute;n de comunicaci&oacute;n, liderazgo y motivaci&oacute;n personal&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Definici&oacute;n de est&aacute;ndares para medir desempe&ntilde;os&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,2,'AC'),(3,1,'<div style=\"text-align: justify;\">\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space: pre;\"> </span>Determine el valor total de los activos no corrientes: Muebles de oficina $ 3.757,37; Cuentas por cobrar $ 1.559,30; Equipo de oficina $ 5.500,00; IVA en compras $ 3.280,90; Veh&iacute;culos $ 3.1316,00; Terrenos $ 1.6950,00</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>1.6950,00</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>4.840,20</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>56.523,37</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>57.523,37</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,3,'AC'),(4,1,'<div style=\"text-align: justify;\">\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El contador de la empresa comercial cancela un documento por pagar a uno de los proveedores a la Cuenta Corriente, a que cuentas afectan esta transacci&oacute;n.</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Caja en &eacute;l Debe, Bancos al Haber</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Bancos en el haber, Documentos por Pagar al debe</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Bancos al Debe, Caja al Haber</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cuenta Ahorros al Debe, Bancos al Haber</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,4,'AC'),(5,3,'<div>\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> Convertir las siguientes medidas de peso, 2,5 KG a libras y onzas corresponde a:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>5,51 libras y 88,11 onzas</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>4,5 libras y 78,50 onzas</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>6 libras y 90 onzas</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguna de las anteriores</div>\r\n','A',10.00,1,'AC'),(6,3,'<div>\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El merengue Frances se lo elabora con:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Las claras de huevo, son batidas a alta velocidad hasta el m&aacute;ximo de su volumen, con un toque del az&uacute;car a emplear, luego se le adiciona en forma de hilo un sirop.&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Merengue al que se le a&ntilde;aden almendras, o pistachos (pistaches) se usa para hacer discos que forman pisos de tortas (pasteles).</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Es el merengue que se monta con az&uacute;car y claras de huevo, a alta velocidad, hasta llegar a un estado frothy, luego se a&ntilde;ade az&uacute;car granulada en forma de lluvia.&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguna de las anteriores.</div>\r\n','A',10.00,2,'AC'),(7,3,'<div>\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indique cu&aacute;l de las siguientes definiciones corresponde al t&eacute;rmino coulis:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Dar a un l&iacute;quido la consistencia de caramelo por reducci&oacute;n al fuego</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Nombre dado a diferentes postres que se preparan en un molde del mismo nombre</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Salsa o crema suave preparada con frutas y colada para darle un acabado aterciopelado y delicado</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguna de las anteriores</div>\r\n','A',10.00,3,'AC'),(8,3,'<div style=\"text-align: justify;\">\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Qu&eacute; tipo de crema puede ser usada sola como postre o ser componente para la construcci&oacute;n de los mismos?</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Crema Chiboust</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Crema bavaria</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Crema de bavaria a base de Pate a bombe</div>\r\n','A',10.00,4,'AC'),(9,1,'<div style=\"text-align: justify;\">\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Con la siguiente informaci&oacute;n, se&ntilde;ale la respuesta que indique el respectivo asiento contable que se debe realizar: El &nbsp;se&ntilde;or Alejandro P&eacute;rez compr&oacute; un cami&oacute;n por $12.000, efectuando un pago inicial de $5.000 en efectivo y firmando un documento por pagar por $ 7.000 con vencimiento a 60 d&iacute;as.</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Veh&iacute;culo $ 12.000 (debe), IVA en compra $ 1.440 (debe); Cuentas Por Pagar $ 5.000,00 (haber), Documentos por pagar $ 7.000 (haber).</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Veh&iacute;culo $ 12.000 (debe), IVA en compra $ 1.440 (debe); Bancos $ 5.000 (haber), Documentos por pagar $ 7.000 (haber).</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Veh&iacute;culo $ 12.000 (debe), IVA en compra $ 1.440 (debe); Caja $ 5.000 (haber), Documentos por pagar $ 7.000 (haber).</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cami&oacute;n $ 12.000 (debe), IVA en compra $ 1.440 (debe); Cuentas Por Pagar $ 5.000 (haber), Documentos por pagar $ 7.000.(haber)</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,5,'AC'),(10,1,'<div style=\"text-align: justify;\">\r\n	<strong>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Para que el turista tenga una mayor comodidad para su hospedaje el hotel dispone para su traslado desde la terminal de transporte hasta el hotel un carro. Este servicio se le denomina</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>CHECK IN</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>TRANSFER OUT</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>TRANSFER IN</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>CHECK OUT</div>\r\n','A',10.00,6,'AC'),(11,3,'<div>\r\n	5. <strong>Maridaje:</strong> Porque maridaria un plato graso (ej. carne asada) con vino tanico?</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a) limpia las papilas</div>\r\n<div>\r\n	b) se complementan sus sabores</div>\r\n','A',10.00,5,'AC'),(12,3,'<div style=\"text-align: justify;\">\r\n	<strong>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Como se denomina al vino que en su AOC en Francia es conocido como Champagne, en el nuevo mundo cuando es vinificado con sus mismos metodos?</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a) Espumante</div>\r\n<div>\r\n	b) Espumante &nbsp;metodo tradicional</div>\r\n<div>\r\n	c) Frizante</div>\r\n','A',10.00,6,'AC'),(13,1,'<div style=\"text-align: justify;\">\r\n	<strong>7.<span class=\"Apple-tab-span\" style=\"white-space: pre;\"> </span>En la Mano corriente o &nbsp;&ldquo;main-courant&rdquo; &nbsp;cu&aacute;l es el procesos principal:&nbsp;</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Limpieza general de habitaciones, lavander&iacute;a y lencer&iacute;a&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>servicio de comidas y bebidas</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>solicitud de llamadas urbanas y largas distancias</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cobro facturaci&oacute;n&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,7,'AC'),(14,3,'<div style=\"text-align: justify;\">\r\n	<strong>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Un vino de postre, por ej. los fortificados como el oporto o un licor de Tannat, marida con reposteria por:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a)<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>contraste</div>\r\n<div>\r\n	b)<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>complementacion</div>\r\n','A',10.00,7,'AC'),(15,1,'<div style=\"text-align: justify;\">\r\n	<strong>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;l de los siguientes enunciados es un factor que favorece el incremento de los viajes&nbsp;</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Aumento de las rentas disponibles en amplios sectores de la poblaci&oacute;n. Mas dinero significa m&aacute;s viajes&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Promoci&oacute;n orientada a la demanda</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Fortalecimiento institucional&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Fomento de turismo interno&nbsp;</div>\r\n','A',10.00,8,'AC'),(16,3,'<div style=\"text-align: justify;\">\r\n	<strong>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>De que madera es una barrica y que proceso sufren por dentro sus duelas (listones) en su fabricaci&oacute;n?</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>De Pino y se barniza por dentro</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>De Roble y se tuesta por dentro</div>\r\n','A',10.00,8,'AC'),(17,1,'<div style=\"text-align: justify;\">\r\n	<strong>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Un contrato se declara nulo cuando no se cumplen los requisitos legales de:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Capacidad y voluntad de las partes del contrato</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Costes econ&oacute;micos equivalentes entre las partes y deja de ser &uacute;til</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Concreci&oacute;n e interpretaci&oacute;n de contratos</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>&Eacute;tica y moral de un lugar</div>\r\n','A',10.00,9,'AC'),(18,3,'<div style=\"text-align: justify;\">\r\n	<strong>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El espacio donde confluyen directamente la oferta tur&iacute;stica y la demanda tur&iacute;stica se llama</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Mercado tur&iacute;stico</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Agencia de viajes</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Bolsa de valores</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguna de las anteriores</div>\r\n','A',10.00,9,'AC'),(19,3,'<div>\r\n	<strong>10.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El brindar el transfer out permitara que nuestro servicio tenga un</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Mayor precio</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Mayor oferta&nbsp;</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Mayor aceptaci&oacute;n</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Valor agregado</div>\r\n','A',10.00,10,'AC'),(20,1,'<div style=\"text-align: justify;\">\r\n	<strong>10.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>En un contrato de reserva cupo o contingente la exclusividad de todas las plazas del hotel para un &uacute;nico TOUR Operador se acuerda cuando</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El hotel tiene averbooking en el periodo de temporada alta</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El hotel tiene reservas para grupos en exclusiva de m&aacute;s de 16 pax exigiendo al operador un dep&oacute;sito</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El Tour Operador tiene un n&uacute;mero bajo de reservas&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El Tour Operador tiene inter&eacute;s en vender las plazas de ese determinado hotel en su folleto, incluso aceptando las exigencias de dep&oacute;sito del hotelero</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,10,'AC'),(21,3,'<div style=\"text-align: justify;\">\r\n	<strong>11.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La existencia de un corredor tur&iacute;stico + centro tur&iacute;stico + complejo tur&iacute;stico + &aacute;rea tur&iacute;stica + zona tur&iacute;stica + destino tur&iacute;stica&nbsp;</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Sitio tur&iacute;stico</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Espacio tur&iacute;stico</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Destino tur&iacute;stico</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Planta tur&iacute;stica</div>\r\n','A',10.00,11,'AC'),(22,3,'<div style=\"text-align: justify;\">\r\n	<strong>12.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Dentro de cristaler&iacute;a &nbsp;debemos conocer las cantidades a servir por ejemplo una copa flauta s champagne la cantidad de</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>&frac34; partes de la copa</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Media copa</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Copa entera</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>&frac14; de copa</div>\r\n','A',10.00,12,'AC'),(23,3,'<div>\r\n	<strong>13.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>En el montaje de cristaler&iacute;a el orden es:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Gaseosa; vino; agua; champagne</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Vino; agua; gaseosa&nbsp;</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Agua; gaseosa; vino; champagne</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Champagne; agua; vino; gaseosa</div>\r\n','A',10.00,13,'AC'),(24,3,'<div style=\"text-align: justify;\">\r\n	<strong>14.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Como se denomina al evento que se financia en funci&oacute;n de las inscripciones, auspiciantes y expositores:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.- Cerrado</div>\r\n<div>\r\n	b.- Llave en mano</div>\r\n<div>\r\n	c.- Abierto</div>\r\n<div>\r\n	d.- Ninguno de los anteriores</div>\r\n','A',10.00,14,'AC'),(25,3,'<div>\r\n	<strong>15.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Seg&uacute;n el campo de acci&oacute;n de los eventos pueden ser:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a. Empresariales&nbsp;</div>\r\n<div>\r\n	b. Sociales</div>\r\n<div>\r\n	c. De estado o p&uacute;blicos</div>\r\n<div>\r\n	d. Todos los anteriores</div>\r\n','A',10.00,15,'AC'),(26,3,'<div style=\"text-align: justify;\">\r\n	<strong>16.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Para que el turista tenga una mayor comodidad para su hospedaje el hotel dispone para su traslado desde la terminal de transporte hasta el hotel un carro. Este servicio se le denomina</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>CHECK IN</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>TRANSFER OUT</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>TRANSFER IN</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>CHECK OUT</div>\r\n','A',10.00,16,'AC'),(27,3,'<div>\r\n	<strong>17.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Qu&eacute; procedimiento se debe emplear para descongelar un pescado</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a. Ponerlo a temperatura ambiente</div>\r\n<div>\r\n	b. Ponerlo en frigor&iacute;fico</div>\r\n<div>\r\n	c. Sumergirlo en agua</div>\r\n<div>\r\n	d. Todas son correctas&nbsp;</div>\r\n','A',10.00,17,'AC'),(28,3,'<div>\r\n	<strong>18.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Se&ntilde;ale la respuesta correcta para el t&eacute;rmino Albardado:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Es la mezcla de un l&iacute;quido &aacute;cido -vinagre, chicha o vino- con condimentos y hierbas arom&aacute;ticas.</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Consiste en envolver una pieza de carne o de pescado con panceta, tocino o bac&oacute;n.</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Huevo batido, harina, dulce, etc, con que se rebozan las viandas.</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguna de las anteriores</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,18,'AC'),(29,3,'<div style=\"text-align: justify;\">\r\n	<strong>19.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Dentro de la capacidad estructural cual es el grafico para representar la categor&iacute;a de un restaurante:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Tazas</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Estrellas</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Tenedores</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Todas las anteriores</div>\r\n','A',10.00,19,'AC'),(30,3,'<div>\r\n	<strong>20.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;les son las obligaciones del mesero hacia la administraci&oacute;n:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Conducta; puntualidad</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Presentaci&oacute;n; habilidad de vender</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>sentido de urgencia</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Todas las anteriores</div>\r\n','A',10.00,20,'AC'),(31,4,'<div style=\"text-align: justify;\">\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>C&oacute;mo se denomina el establecimiento de alojamiento que no ofrece el servicio de comida</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Pensi&oacute;n</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Residencia</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Refugio</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Albergue</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,1,'AC'),(32,4,'<div style=\"text-align: justify;\">\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;les son las &aacute;reas secas de una habitaci&oacute;n de hotel&nbsp;</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Closets</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Inodoro&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Terrazas</div>\r\n','A',10.00,2,'AC'),(33,4,'<div>\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Un programa de limpieza y desinfecci&oacute;n</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Determina responsabilidades y se debe realizar mensualmente</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Organiza el trabajo que diariamente debe cumplimentar y garantizar</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Debe ser cumplido &nbsp;por los clientes quienes deben obedecer reglas cuando salen</div>\r\n','A',10.00,3,'AC'),(34,4,'<div>\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La funci&oacute;n del Ama de Llaves es:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Registrar al cliente</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Garantizar la limpieza, arreglo, mantenimiento y control de &nbsp;piso, habitaciones&nbsp;</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>asignar habitaciones y entregar las llaves</div>\r\n','A',10.00,4,'AC'),(35,4,'<div style=\"text-align: justify;\">\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;l de las siguientes no corresponde a la clasificaci&oacute;n de habitaciones:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Sencillas</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Dobles</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Lobby&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Matrimoniales</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n','A',10.00,5,'AC'),(36,5,'<div>\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Las ventajas sistema modular flexible son&hellip;</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Necesidad de jefe de producci&oacute;n obligatoriamente, trabajo en equipo, calidad de productos.</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Flexibilidad, rechazo a trabajadores con bajo rendimiento, necesidad de mec&aacute;nicos</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>R&aacute;pida respuesta, calidad del producto, trabajo en equipo.</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguna de las anteriores</div>\r\n','A',10.00,1,'AC'),(37,5,'<div style=\"text-align: justify;\">\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Seleccione la respuesta correcta. La capacidad de producci&oacute;n de una empresa est&aacute; determinada por&hellip;&hellip;</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Recursos tecnol&oacute;gicos, bolsa de negocios, recursos econ&oacute;micos</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Bolsa de negocios, recursos humanos, recursos tecnol&oacute;gicos</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Recursos econ&oacute;micos, recursos f&iacute;sicos, tecnol&oacute;gicos, recursos humanos</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguna de las anteriores</div>\r\n','A',10.00,2,'AC'),(38,4,'<div style=\"text-align: justify;\">\r\n	<strong>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La actividad de sacar la basura, correr las cortinas, encender la luz de la l&aacute;mpara y abrir la cama de una habitaci&oacute;n de hotel se denomina:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Puesta a punto</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cortes&iacute;a &nbsp;nocturna&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cortes&iacute;a de nivel intermedio&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,6,'AC'),(39,4,'<div style=\"text-align: justify;\">\r\n	<strong>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Si un cliente necesita primeros auxilios que debe hacer Ud. en primer lugar</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Llamar al m&eacute;dico del hotel</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Llamar al servicio de emergencias&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Evaluar si el lugar es seguro para la persona socorrida y para usted mismo.</div>\r\n','A',10.00,7,'AC'),(40,5,'<div>\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> Identifique los costos en una empresa textil.</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	1. sueldos &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>a) costos variables</div>\r\n<div>\r\n	2. materia prima &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> &nbsp; &nbsp;</div>\r\n<div>\r\n	3. arriendo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>b) costos fijos</div>\r\n<div>\r\n	4. Depreciaci&oacute;n de maquinaria &nbsp; &nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span></div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>1b, 2a, 3b, 4a</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>1b, 3b, 4b, 1a</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>2a, 4b, 3a, 1a&nbsp;</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>3a, 2a, 1a, 1&ordf;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,3,'AC'),(41,4,'<div>\r\n	<strong>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Un sistema de seguridad contra incendios debe incluir:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Medios t&eacute;cnicos&nbsp;</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Medidas organizativas</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Acciones de control y extinci&oacute;n de incendios&nbsp;</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Acciones de protecci&oacute;n de personas y bienes y bienes.</div>\r\n<div>\r\n	e.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Todas son correctas</div>\r\n','A',10.00,8,'AC'),(42,4,'<div>\r\n	<strong>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Las s&aacute;banas de habitaci&oacute;n de hotel de forma obligatoria se deben cambiar:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cada d&iacute;a</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cada dos d&iacute;as&nbsp;</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cuando est&eacute;n sucias</div>\r\n','A',10.00,9,'AC'),(43,4,'<div>\r\n	<strong>10.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El personal de limpieza no debe</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Mantener la higiene</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Realizar su tarea en habitaciones cuando personalmente lo decida</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Vestir adecuadamente su uniforme</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Transmitir buenas maneras</div>\r\n','A',10.00,10,'AC'),(44,4,'<div style=\"text-align: justify;\">\r\n	<strong>11.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>En que consiste el m&eacute;todo de conservaci&oacute;n por liofilizaci&oacute;n:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Consiste en la extracci&oacute;n de la humedad contenida en los alimentos</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Eliminaci&oacute;n del agua de un producto mediante un proceso de calentamiento del aire de forma artificial</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Consiste en la extracci&oacute;n del aire que rodea al alimento</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Es una desecaci&oacute;n en la que se produce el paso de s&oacute;lido a gas sin pasar por l&iacute;quido</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,11,'AC'),(45,5,'<div style=\"text-align: justify;\">\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El jefe de producci&oacute;n de una empresa necesita saber cu&aacute;ntos metros de tela jean necesita para confeccionar 800 pantalones con las siguientes caracter&iacute;sticas. Identifique la respuesta correcta.</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp; &nbsp; &nbsp; PANTAL&Oacute;N &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>LARGO DE PRENDA<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span></div>\r\n<div>\r\n	Pantal&oacute;n de mujer<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;98 cm<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; + 5cm</div>\r\n<div>\r\n	Pantal&oacute;n de ni&ntilde;o<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 75 cm<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+ 5 cm</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>1454m</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>1464m&nbsp;</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>1474m</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>1475m</div>\r\n','A',10.00,4,'AC'),(46,4,'<div>\r\n	<strong>12.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Las fases de las que se debe constar el an&aacute;lisis de riesgos microbiol&oacute;gicas son:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Evaluaci&oacute;n, gesti&oacute;n y comunicaci&oacute;n de riesgos.</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Evaluaci&oacute;n y comunicaci&oacute;n de riesgos.</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,12,'AC'),(47,5,'<div style=\"text-align: justify;\">\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>&iquest;Cuantos metros de tela se necesitan para elaborar 30 faldas base, que miden de largo 50 cm y tienen 6 cm de doblado? &nbsp; Identifique la respuesta correcta</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>15.80 m</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>16.00 m</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>16.80 m</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>17.00 m</div>\r\n','A',10.00,5,'AC'),(48,4,'<div>\r\n	<strong>13.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>&iquest;Cu&aacute;l de los siguiente son puntos b&aacute;sicos de BPM?&nbsp;</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Higiene &nbsp;personal, desinfecci&oacute;n de botas, lavado de manos</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ropa &nbsp;de calle, uso de ba&ntilde;os, lavado de casilleros</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Uso &nbsp;de botas, desinfecci&oacute;n de tocas, lavado personal</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Desinfecci&oacute;n &nbsp;de tocas, lavado de ropa, no beber</div>\r\n','A',10.00,13,'AC'),(49,5,'<div>\r\n	<strong>6. Determine la ruta operativa correcta de armado de una chaqueta.</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	1. &nbsp;Delantero &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>a) unir breteles, armar bolsillos, forrar</div>\r\n<div>\r\n	2. &nbsp;Cuello &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>b) Unir piezas, armar forro, cerrar costado</div>\r\n<div>\r\n	3. &nbsp;espalda &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>c) Fusionar refuerzo, coser piezas del cuello</div>\r\n<div>\r\n	4. &nbsp;mangas &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>d) Unir piezas, armar forro, pegar mangas</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>1a, 2d, 3c,4b</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>1a, 3b, 2c,4d&nbsp;</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>1a, 2c, 3d,4b</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguna de &nbsp;las anteriores</div>\r\n','A',10.00,6,'AC'),(50,4,'<div>\r\n	<strong>14.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La alteraci&oacute;n denominada oscurecimiento enzim&aacute;tico se da por la reacci&oacute;n entre:&nbsp;</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Complejo enzima-sustrato</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Enzima-sustrato-ox&iacute;geno</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Enzima-prote&iacute;na-carbohidrato</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>L&iacute;pido-prote&iacute;na-carbohidrato</div>\r\n','A',10.00,14,'AC'),(51,5,'<div style=\"text-align: justify;\">\r\n	<strong>7. &iquest;Cu&aacute;ntas puntadas entrar&aacute;n en la espalda &nbsp;de un chaleco que mide 58 cm de largo, si el regulador de puntada se encuentra en 2.5 y en una pulgada caben 10 puntadas?</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>230 puntadas</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>231 puntadas</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>232 puntadas&nbsp;</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>233 puntadas</div>\r\n','A',10.00,7,'AC'),(52,4,'<div style=\"text-align: justify;\">\r\n	<strong>15.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;l de las siguientes no forma parte del Procedimiento de Inspecci&oacute;n de PBM consta de:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Notificaci&oacute;n</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Evaluaci&oacute;n documental&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Inspecci&oacute;n en Sitio: Inspecci&oacute;n en la planta para verificar el cumplimiento de los requisitos establecidos en el Reglamento de Buenas Pr&aacute;cticas de Manufactura.</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Emisi&oacute;n del Informe&nbsp;</div>\r\n','A',10.00,15,'AC'),(53,4,'<div style=\"text-align: justify;\">\r\n	<strong>16.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Diga cu&aacute;l de las siguientes definiciones corresponde al t&eacute;rmino desinfecci&oacute;n &oacute; sanitaci&oacute;n:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Proceso que permite la reducci&oacute;n del n&uacute;mero de microorganismos a un nivel que no permita la contaminaci&oacute;n nociva del alimento</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Todas las medidas necesarias para garantizar la inocuidad y salubridad del alimento en todas las fases</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La eliminaci&oacute;n de tierra, residuos de alimentos, polvo, grasa u otra materia objetable</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguna de las anteriores</div>\r\n','A',10.00,16,'AC'),(54,5,'<div style=\"text-align: justify;\">\r\n	<strong>8. &iquest;Es aceptable que una empresa despida de manera sumaria a un trabajador sin darle una segunda advertencia por no usar el EPP?&nbsp;</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Si&nbsp;</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>No</div>\r\n','A',10.00,8,'AC'),(55,5,'<div style=\"text-align: justify;\">\r\n	<strong>9. &iquest;Existen instrumentos de la OIT que brinden orientaci&oacute;n a las empresas para prevenir la exposici&oacute;n de sus trabajadores a sustancias cancer&iacute;genas?&nbsp;</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> Etiquetado, Fichas de datos de seguridad, registrar la exposici&oacute;n de los trabajadores a esos productos.</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Rotulado con peligro, cancer&iacute;geno</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Etiquetado, Fichas de datos de seguridad, registrar la exposici&oacute;n de los trabajadores a esos productos, ficha de pedido se substituci&oacute;n de la substancia</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,9,'AC'),(56,5,'<div style=\"text-align: justify;\">\r\n	<strong>10. &iquest;Cu&aacute;les son los elementos clave que la OIT considera no debe incluir un sistema de seguridad y salud?&nbsp;</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La promoci&oacute;n en la empresa de una cultura de prevenci&oacute;n&nbsp;</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La maquinaria, el equipo y las operaciones y procesos seguros&nbsp;</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La ropa y los equipos de protecci&oacute;n</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La Comida saludable y a las horas &nbsp;</div>\r\n','A',10.00,10,'AC'),(57,7,'<div style=\"text-align: justify;\">\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> Los elementos de la administraci&oacute;n documental deben considerarse en el siguiente orden:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Planificar, ordenar, direcci&oacute;n, control</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ordenar, direcci&oacute;n, planificar, control</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Control, direcci&oacute;n, planificar, ordenar</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Planificar, control, direcci&oacute;n, ordenar</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,1,'AC'),(58,7,'<div style=\"text-align: justify;\">\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Si est&aacute; encargado de la oficina de archivo en una instituci&oacute;n, cu&aacute;l de los documentos que se enuncia a continuaci&oacute;n archivar&iacute;a dentro de la categor&iacute;a de instrumentos :</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Libros</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Peri&oacute;dicos</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Estad&iacute;sticas</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ninguno de los anteriores</div>\r\n','A',10.00,2,'AC'),(59,6,'<div style=\"text-align: justify;\">\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> En un estudio del Banco Mundial (2002) se lleg&oacute; a la conclusi&oacute;n de que la igualdad de g&eacute;nero es fundamental para la econom&iacute;a de los pa&iacute;ses; por tanto:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Igualdad y equidad de g&eacute;nero son aspectos &uacute;nicos de los derechos humanos fundamentales y la justicia social</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Igualdad y equidad de g&eacute;nero son elementos esenciales y condiciones indispensables de la conservaci&oacute;n del medio ambiente</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El desarrollo sostenible es posible sin equidad</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Igualdad y equidad son el &uacute;nico requisito para mejorar la calidad de vida de las personas</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,1,'AC'),(60,7,'<div style=\"text-align: justify;\">\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El sistema de ordenaci&oacute;n de archivo basado en un n&uacute;mero que se asigna a los expedientes se denomina:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Alfanum&eacute;rico</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cronol&oacute;gico</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Num&eacute;rico</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Epigr&aacute;fico o por materias</div>\r\n','A',10.00,3,'AC'),(61,6,'<div style=\"text-align: justify;\">\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> La igualdad de g&eacute;nero se refiere a la igualdad de derechos, responsabilidades y oportunidades que deber&iacute;an beneficiar a todas las personas, sin importar si son hombres o mujeres; de all&iacute; que:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> Discriminaci&oacute;n de acceso a condiciones seguras y saludables de trabajo y a la seguridad social</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Tanto las mujeres como los hombres, las ni&ntilde;as y los ni&ntilde;os, deben ser libres para desarrollarse y tomar decisiones basadas en sus intereses personales y sus capacidades, sin limitaciones impuestas por roles de g&eacute;nero y prejuicios.</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Diferenciaci&oacute;n de acceso a condiciones seguras y saludables de trabajo y a la seguridad social&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Equilibrio entre trabajo y vida familiar, por ello se otorgar&aacute; un horario especial a la mujer en general</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,2,'AC'),(62,7,'<div style=\"text-align: justify;\">\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Una secretaria Ejecutiva dentro del manejo de correspondencia sabe los elementos de un documento y su orden:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Soporte, T&eacute;cnica, Estructura, Contenido o asunto</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>T&eacute;cnica, Estructura, Contenido o asunto, Soporte</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Soporte, T&eacute;cnica, Contenido o asunto, Estructura</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>T&eacute;cnica, Contenido o asunto, Estructura, Soporte</div>\r\n','A',10.00,4,'AC'),(63,6,'<div style=\"text-align: justify;\">\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>En el Ecuador se han producido grandes avances en el marco jur&iacute;dico e institucional en materia de equidad de g&eacute;nero en las &uacute;ltimas d&eacute;cadas; se&ntilde;ale desde cuando se afianz&oacute; esta tendencia en el Ecuador:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La Constituci&oacute;n ratificada el 28 de septiembre del 2008</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La Constituci&oacute;n de la Rep&uacute;blica de 1978</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El C&oacute;digo de la Ni&ntilde;ez y la Adolescencia</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La Convenci&oacute;n Interamericana para prevenir, sancionar y erradicar la violencia contra la mujer. Paran&aacute; 1994&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,3,'AC'),(64,7,'<div style=\"text-align: justify;\">\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>De acuerdo a la normativa de Organizaci&oacute;n b&aacute;sica de archivos existen 3 categor&iacute;as de archivos:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Recepci&oacute;n, registro, hist&oacute;rico.</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Oficina, central, descentralizado.</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Activo, central, hist&oacute;rico.</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Activo, intermedio, permanente.</div>\r\n','A',10.00,5,'AC'),(65,7,'<div>\r\n	<strong>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>En Publisher 2010, que es WordArt?</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Las im&aacute;genes reflejan el buen estilo de una publicaci&oacute;n, y puede insertar una gran cantidad de im&aacute;genes, ya que Publisher 2010 soporta distintos formatos, como JPG, TIF, PNG, BMP, etc.</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Publisher 2010 incluye WordArt, que permite a&ntilde;adir algunas apariencias y efectos a su texto.</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Es toda letra o car&aacute;cter que forma una palabra, frase, oraci&oacute;n, o p&aacute;rrafos.</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Los objetos de autoformas pueden ayudarle a insertar algunas im&aacute;genes vectoriales, como l&iacute;neas, c&iacute;rculos, cuadrados, o rect&aacute;ngulos</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,6,'AC'),(66,7,'<div style=\"text-align: justify;\">\r\n	<strong>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Una instituci&oacute;n educativa ecuatoriana necesita tener un dominio de red &iquest;Qu&eacute; tipo dominio cree usted que deber&iacute;a tener esta instituci&oacute;n?</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>.com.ec</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>.edu.ec</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>.mil.ec</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>.net.ec&nbsp;</div>\r\n','A',10.00,7,'AC'),(67,6,'<div style=\"text-align: justify;\">\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Una de las pol&iacute;ticas propuestas en la Constituci&oacute;n de la Rep&uacute;blica se enfoca a la ejecuci&oacute;n del Proyecto Educaci&oacute;n Inicial de Calidad con Calidez, por ello el Estado se propondr&aacute; &nbsp;a:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Trabajar en pro del desarrollo integral de ni&ntilde;os y ni&ntilde;as mayores y menores de 5 a&ntilde;os</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Promover la inclusi&oacute;n, la interculturalidad, el respeto y cuidado de la naturaleza y las buenas pr&aacute;cticas de convivencia</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Se dedicar&aacute; &uacute;nicamente a la atenci&oacute;n en salud y nutrici&oacute;n de los ni&ntilde;os</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Promocionar&aacute; la formaci&oacute;n y desarrollo del docente&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,4,'AC'),(68,7,'<div style=\"text-align: justify;\">\r\n	<strong>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Se necesita enviar un documento a la plataforma virtual de una instituci&oacute;n, pero el tama&ntilde;o del archivo excede el peso m&aacute;ximo. &iquest;Qu&eacute; acci&oacute;n realizar&iacute;a usted para que este trabajo sea evaluado por el receptor? Tomando en cuenta que la tarea contiene un v&iacute;deo que el receptor necesita evaluar.</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> Intentar varias veces hasta que la plataforma se bloquee y me permita enviar el video</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Enviar al correo electr&oacute;nico del receptor y esperar a que le revise</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Llevar en una memory flash y decirle al receptor &nbsp;que revise&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Subir a YouTube y enviar el Link por la plataforma virtual para que el receptor pueda acceder y evaluar</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,8,'AC'),(69,6,'<div style=\"text-align: justify;\">\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El dise&ntilde;o curricular de educaci&oacute;n inicial ha considerado elementos organizadores para determinar el alcance, secuencia y pertinencia de los aprendizajes; por ello se plantea un perfil de salida &nbsp;del nivel que consiste en:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El perfil de salida es la descripci&oacute;n de los desempe&ntilde;os esenciales que debe demostrar el ni&ntilde;o al finalizar la Educaci&oacute;n Inicial en todas sus modalidades.</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El perfil de salida es un prerrequisito para ingresar al primer grado de Educaci&oacute;n General B&aacute;sica.</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Se considera a este nivel educativo como obligatorio para que el ni&ntilde;o alcance el perfil de salida</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Se debe priorizar el logro del perfil de salida en los ni&ntilde;os para que puedan ingresar a Educaci&oacute;n Inicial.&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,5,'AC'),(70,6,'<div style=\"text-align: justify;\">\r\n	<strong>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Los Ejes de desarrollo y aprendizaje son campos que engloban a diferentes &aacute;mbitos propuestos, tal forma que:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Desarrollan las destrezas que el estudiante alcanza en el subnivel de Educaci&oacute;n Inicial</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Orientan el aprendizaje y posibilitan el perfil de salida del subnivel de Educaci&oacute;n B&aacute;sica</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Responden a la formaci&oacute;n integral de los ni&ntilde;os y orientan las diferentes oportunidades de aprendizaje</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Proponen la formaci&oacute;n integral de los ni&ntilde;os y permiten el desarrollo de los diferentes &aacute;mbitos del saber ser.&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,6,'AC'),(71,7,'<div>\r\n	<strong>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El n&uacute;mero m&aacute;ximo de registros y campos en una tabla de Excel es de...</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>65000 registros de 250 campos.</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>65535 registros de 255 campos.</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>65535 registros de 256 campos.</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Todas son falsas.</div>\r\n','A',10.00,9,'AC'),(72,7,'<div>\r\n	<strong>10.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El panel de navegaci&oacute;n...</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Contiene los elementos de la base de datos que vamos creando, como las tablas.</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Est&aacute; situado por defecto en la zona izquierda de la ventana Access.</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Se puede ocultar/mostrar.</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Todas las opciones son ciertas.&nbsp;</div>\r\n','A',10.00,10,'AC'),(73,6,'<div style=\"text-align: justify;\">\r\n	<strong>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El Eje de desarrollo personal y social integra aspectos relacionados con el proceso de construcci&oacute;n de la identidad del ni&ntilde;o a partir de sus caracter&iacute;sticas propias; por esto se relaciona con:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El desarrollo parcial de su autonom&iacute;a con acciones dependientes de sus progenitores&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Los aspectos que propician interacciones con los ni&ntilde;os de su edad &nbsp;pero no con otros adultos&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Utilizaci&oacute;n de diversos lenguajes para exteriorizar sus pensamientos&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La capacidad del ni&ntilde;o para que establezca la diferenciaci&oacute;n que establece entre &eacute;l y las otras personas</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,7,'AC'),(74,6,'<div>\r\n	<strong>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Uno de los &aacute;mbitos de desarrollo y aprendizaje para ni&ntilde;os del subnivel Inicial 2 es la Comprensi&oacute;n y expresi&oacute;n del lenguaje; de all&iacute; que el docente deber&aacute;:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Potenciar el desarrollo del lenguaje de los ni&ntilde;os como elemento fundamental de comunicaci&oacute;n</div>\r\n<div>\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Establecer una conciencia de comportamiento ling&uuml;&iacute;stico para que pueda leer y escribir al finalizar la educaci&oacute;n inicial</div>\r\n<div>\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Considerar la repetici&oacute;n mec&aacute;nica de s&iacute;mbolos verbales para la pronunciaci&oacute;n</div>\r\n<div>\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Resolver&aacute; peque&ntilde;os problemas de nociones y relaciones matem&aacute;ticas</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,8,'AC'),(75,6,'<div style=\"text-align: justify;\">\r\n	<strong>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>La expresi&oacute;n corporal y motricidad permitir&aacute; desarrollar en el ni&ntilde;o las posibilidades motrices, expresivas y creativas a partir del conocimiento de su propio cuerpo; por esta raz&oacute;n el ni&ntilde;o podr&aacute;:&nbsp;</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Sentar bases para procesos futuros de lectura y escritura</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Establecer la apreciaci&oacute;n y expresi&oacute;n a partir de la percepci&oacute;n de la realidad que le rodea&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>En este &aacute;mbito se realizar&aacute;n procesos para lograr la coordinaci&oacute;n din&aacute;mica global, equilibrio din&aacute;mico, relajaci&oacute;n, respiraci&oacute;n, esquema corporal, lateralidad y orientaci&oacute;n en el espacio</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Desarrollar su lenguaje para la construcci&oacute;n de procesos cognitivos futuros</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,9,'AC'),(76,6,'<div style=\"text-align: justify;\">\r\n	<strong>10.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Los padres son los responsables legales y morales de educar a sus hijos; la escuela no puede suplir individualmente esta responsabilidad; de manera que:</strong></div>\r\n<div style=\"text-align: justify;\">\r\n	&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n	a.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Se requiere la participaci&oacute;n de las familias dentro del contexto escolar, un trabajo de equipo entre ambos agentes, de una manera conjunta y colaborativa permitir&aacute; la formaci&oacute;n integral de los ni&ntilde;os/as.</div>\r\n<div style=\"text-align: justify;\">\r\n	b.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>En las familias se deber&aacute;n fijar modelos expl&iacute;citos para que los hijos obligatoriamente asuman responsabilidades</div>\r\n<div style=\"text-align: justify;\">\r\n	c.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Se deber&aacute; evitar la autocr&iacute;tica para que desaparezca la desconfianza y el protagonismo</div>\r\n<div style=\"text-align: justify;\">\r\n	d.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Los docentes ser&aacute;n los &uacute;nicos responsables de los errores y carencias de la futura personalidad de los ni&ntilde;os.&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n','A',10.00,10,'AC');
/*!40000 ALTER TABLE `tab_preguntas_esquemas_certificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_preguntas_procedimientos_documentos`
--

DROP TABLE IF EXISTS `tab_preguntas_procedimientos_documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_preguntas_procedimientos_documentos` (
  `ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_PERFIL_PRO_ESTADO` int(11) NOT NULL,
  `DESCRIPCION_PREGUNTA` text NOT NULL,
  `VALOR_MAXIMO` decimal(8,2) NOT NULL,
  `NRO_PREGUNTA` int(11) NOT NULL,
  `ESTADO` varchar(2) NOT NULL,
  PRIMARY KEY (`ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS`),
  KEY `FK_REFERENCE_96` (`ID_PERFIL_PRO_ESTADO`),
  CONSTRAINT `FK_REFERENCE_96` FOREIGN KEY (`ID_PERFIL_PRO_ESTADO`) REFERENCES `tab_perfiles_pro_estados` (`ID_PERFIL_PRO_ESTADO`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_preguntas_procedimientos_documentos`
--

LOCK TABLES `tab_preguntas_procedimientos_documentos` WRITE;
/*!40000 ALTER TABLE `tab_preguntas_procedimientos_documentos` DISABLE KEYS */;
INSERT INTO `tab_preguntas_procedimientos_documentos` VALUES (1,1,'<div style=\"text-align: justify;\">\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El proceso de examinaci&oacute;n para la certificaci&oacute;n tiene dos fases, cu&aacute;les son:</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n',10.00,1,'AC'),(2,1,'<p>\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Que formularios son de responsabilidad del examinador para la certificaci&oacute;n en cualificaciones profesionales&nbsp;</strong></p>\r\n',10.00,2,'AC'),(3,1,'<p style=\"text-align: justify;\">\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Qu&eacute; documento gu&iacute;a la conducta y actuaci&oacute;n de examinador para que el proceso sea justo y viable&nbsp;</strong></p>\r\n',10.00,3,'AC'),(4,1,'<p style=\"text-align: justify;\">\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;l es la obligaci&oacute;n del examinador en el caso del examinado no haber demostrado su competencia en todos los criterios,</strong></p>\r\n',10.00,4,'AC'),(5,1,'<div style=\"text-align: justify;\">\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indique cu&aacute;les son las funciones del examinador</strong></div>\r\n',10.00,5,'AC'),(6,3,'<p>\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El proceso de examinaci&oacute;n para la certificaci&oacute;n tiene dos fases, cu&aacute;les son:</strong></p>\r\n',10.00,1,'AC'),(7,3,'<p style=\"text-align: justify;\">\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Que formularios son de responsabilidad del examinador para la certificaci&oacute;n en cualificaciones profesionales&nbsp;</strong></p>\r\n',10.00,2,'AC'),(8,3,'<p style=\"text-align: justify;\">\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Qu&eacute; documento gu&iacute;a la conducta y actuaci&oacute;n de examinador para que el proceso sea justo y viable&nbsp;</strong></p>\r\n',10.00,3,'AC'),(9,3,'<p>\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;l es la obligaci&oacute;n del examinador en el caso del examinado no haber demostrado su competencia en todos los criterios</strong></p>\r\n',10.00,4,'AC'),(10,3,'<p>\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indique cu&aacute;les son las funciones del examinador</strong></p>\r\n',10.00,5,'AC'),(11,4,'<p>\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El proceso de examinaci&oacute;n para la certificaci&oacute;n tiene dos fases, cu&aacute;les son:</strong></p>\r\n',10.00,1,'AC'),(12,5,'<p>\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El proceso de examinaci&oacute;n para la certificaci&oacute;n tiene dos fases, cu&aacute;les son:</strong></p>\r\n',10.00,1,'AC'),(13,5,'<p style=\"text-align: justify;\">\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Que formularios son de responsabilidad del examinador para la certificaci&oacute;n en cualificaciones profesionales&nbsp;</strong></p>\r\n',10.00,2,'AC'),(14,4,'<p style=\"text-align: justify;\">\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Que formularios son de responsabilidad del examinador para la certificaci&oacute;n en cualificaciones profesionales&nbsp;</strong></p>\r\n',10.00,2,'AC'),(15,5,'<p style=\"text-align: justify;\">\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Qu&eacute; documento gu&iacute;a la conducta y actuaci&oacute;n de examinador para que el proceso sea justo y viable&nbsp;</strong></p>\r\n',10.00,3,'AC'),(16,4,'<p style=\"text-align: justify;\">\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Qu&eacute; documento gu&iacute;a la conducta y actuaci&oacute;n de examinador para que el proceso sea justo y viable&nbsp;</strong></p>\r\n',10.00,3,'AC'),(17,5,'<p style=\"text-align: justify;\">\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;l es la obligaci&oacute;n del examinador en el caso del examinado no haber demostrado su competencia en todos los criterios</strong></p>\r\n',10.00,4,'AC'),(18,4,'<p style=\"text-align: justify;\">\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;l es la obligaci&oacute;n del examinador en el caso del examinado no haber demostrado su competencia en todos los criterios,</strong></p>\r\n',10.00,4,'AC'),(19,5,'<p>\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indique cu&aacute;les son las funciones del examinador</strong></p>\r\n',10.00,5,'AC'),(20,4,'<p>\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indique cu&aacute;les son las funciones del examinador</strong></p>\r\n',10.00,5,'AC'),(21,7,'<p>\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El proceso de examinaci&oacute;n para la certificaci&oacute;n tiene dos fases, cu&aacute;les son:</strong></p>\r\n',10.00,1,'AC'),(22,7,'<p style=\"text-align: justify;\">\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Que formularios son de responsabilidad del examinador para la certificaci&oacute;n en cualificaciones profesionales&nbsp;</strong></p>\r\n',10.00,2,'AC'),(23,7,'<p style=\"text-align: justify;\">\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Qu&eacute; documento gu&iacute;a la conducta y actuaci&oacute;n de examinador para que el proceso sea justo y viable&nbsp;</strong></p>\r\n',10.00,3,'AC'),(24,7,'<p style=\"text-align: justify;\">\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;l es la obligaci&oacute;n del examinador en el caso del examinado no haber demostrado su competencia en todos los criterios</strong></p>\r\n',10.00,4,'AC'),(25,6,'<p>\r\n	<strong>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>El proceso de examinaci&oacute;n para la certificaci&oacute;n tiene dos fases, cu&aacute;les son:</strong></p>\r\n',10.00,1,'AC'),(26,7,'<p>\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indique cu&aacute;les son las funciones del examinador</strong></p>\r\n',10.00,5,'AC'),(27,6,'<div style=\"text-align: justify;\">\r\n	<strong>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Que formularios son de responsabilidad del examinador para la certificaci&oacute;n en cualificaciones profesionales&nbsp;</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n',10.00,2,'AC'),(28,6,'<div style=\"text-align: justify;\">\r\n	<strong>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Qu&eacute; documento gu&iacute;a la conducta y actuaci&oacute;n de examinador para que el proceso sea justo y viable&nbsp;</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n',10.00,3,'AC'),(29,6,'<div style=\"text-align: justify;\">\r\n	<strong>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cu&aacute;l es la obligaci&oacute;n del examinador en el caso del examinado no haber demostrado su competencia en todos los criterios,</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n',10.00,4,'AC'),(30,6,'<div>\r\n	<strong>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indique cu&aacute;les son las funciones del examinador</strong></div>\r\n<div>\r\n	&nbsp;</div>\r\n',10.00,5,'AC');
/*!40000 ALTER TABLE `tab_preguntas_procedimientos_documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_provincias`
--

DROP TABLE IF EXISTS `tab_provincias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_provincias` (
  `ID_PROVINCIA` int(11) NOT NULL AUTO_INCREMENT,
  `PROVINCIA` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_PROVINCIA`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_provincias`
--

LOCK TABLES `tab_provincias` WRITE;
/*!40000 ALTER TABLE `tab_provincias` DISABLE KEYS */;
INSERT INTO `tab_provincias` VALUES (2,'IMBABURA');
/*!40000 ALTER TABLE `tab_provincias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_referencias_personales`
--

DROP TABLE IF EXISTS `tab_referencias_personales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_referencias_personales` (
  `ID_REFERENCIA_PERSONAL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `ENTIDAD` varchar(100) NOT NULL,
  `CONTACTO` varchar(100) NOT NULL,
  `NUMERO_TELEFONO` int(11) NOT NULL,
  `CORREO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_REFERENCIA_PERSONAL`),
  KEY `FK_REFERENCE_25` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_25` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_referencias_personales`
--

LOCK TABLES `tab_referencias_personales` WRITE;
/*!40000 ALTER TABLE `tab_referencias_personales` DISABLE KEYS */;
INSERT INTO `tab_referencias_personales` VALUES (1,8,'Instituto Tecnológico Superior \"José Chiriboga Grijalva\"','Dr. Francisco Delgado Santos	',988475685,'francode6@hotmail.com	'),(2,10,'itca','Jacinto Dias',987654321,'korbold@live.com'),(3,8,'itca','GUSTAVO',838383,'korbold@live.com'),(4,9,'UNIANDES','DR. LENIN BURBANO',62558987,'uniandesibarra@uniandes.edu.ec'),(5,9,'ITCA','HURIA GALARRAGA',987456326,'itsjosechiribogag@tecnologicoitca.edu.ec');
/*!40000 ALTER TABLE `tab_referencias_personales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_repositorio_externo`
--

DROP TABLE IF EXISTS `tab_repositorio_externo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_repositorio_externo` (
  `ID_REP_EXTERNO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(500) DEFAULT NULL,
  `AUTOR` varchar(500) DEFAULT NULL,
  `ARCHIVO` varchar(500) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`ID_REP_EXTERNO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_repositorio_externo`
--

LOCK TABLES `tab_repositorio_externo` WRITE;
/*!40000 ALTER TABLE `tab_repositorio_externo` DISABLE KEYS */;
INSERT INTO `tab_repositorio_externo` VALUES (2,'F035','Sertec','067e2-cumputacion-ii.docx','2016-12-12');
/*!40000 ALTER TABLE `tab_repositorio_externo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_respositorio_interno`
--

DROP TABLE IF EXISTS `tab_respositorio_interno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_respositorio_interno` (
  `ID_REP_INT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ARCHIVO` int(11) DEFAULT NULL,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `ARCHIVO` varchar(500) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`ID_REP_INT`),
  KEY `FK_REFERENCE_54` (`ID_ARCHIVO`),
  KEY `FK_REFERENCE_58` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_54` FOREIGN KEY (`ID_ARCHIVO`) REFERENCES `tab_archivos` (`ID_ARCHIVO`),
  CONSTRAINT `FK_REFERENCE_58` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_respositorio_interno`
--

LOCK TABLES `tab_respositorio_interno` WRITE;
/*!40000 ALTER TABLE `tab_respositorio_interno` DISABLE KEYS */;
INSERT INTO `tab_respositorio_interno` VALUES (6,5,7,'0890b-hoja_vida-7-.pdf','2016-12-01'),(10,1,7,'ecb30-hoja_vida-7-.pdf','2016-12-12'),(11,NULL,NULL,'d2800-cumputacion-ii.docx',NULL),(12,1,9,NULL,'2013-12-16'),(13,6,9,NULL,'2013-12-16'),(14,7,NULL,NULL,'2013-12-16'),(15,4,9,NULL,'2013-12-16'),(16,3,9,NULL,'2013-12-16'),(17,5,9,NULL,'2013-12-16'),(18,2,NULL,NULL,'2016-12-13'),(19,2,9,NULL,'2016-12-13');
/*!40000 ALTER TABLE `tab_respositorio_interno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_respuestas_esquemas_certificacion`
--

DROP TABLE IF EXISTS `tab_respuestas_esquemas_certificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_respuestas_esquemas_certificacion` (
  `ID_RESPUESTA_ESQUEMA` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_EVALUACION_EXAMINADOR` int(11) DEFAULT NULL,
  `ID_PREGUNTA_ESQUEMA_CERTIFICACION` bigint(20) DEFAULT NULL,
  `RESPUESTA` varchar(2) DEFAULT NULL,
  `CALIFICACION` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`ID_RESPUESTA_ESQUEMA`),
  KEY `FK_REFERENCE_94` (`ID_EVALUACION_EXAMINADOR`),
  KEY `FK_REFERENCE_695` (`ID_PREGUNTA_ESQUEMA_CERTIFICACION`),
  CONSTRAINT `FK_REFERENCE_695` FOREIGN KEY (`ID_PREGUNTA_ESQUEMA_CERTIFICACION`) REFERENCES `tab_preguntas_esquemas_certificacion` (`ID_PREGUNTA_ESQUEMA_CERTIFICACION`),
  CONSTRAINT `FK_REFERENCE_94` FOREIGN KEY (`ID_EVALUACION_EXAMINADOR`) REFERENCES `tab_evaluacion_examinadores` (`ID_EVALUACION_EXAMINADOR`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_respuestas_esquemas_certificacion`
--

LOCK TABLES `tab_respuestas_esquemas_certificacion` WRITE;
/*!40000 ALTER TABLE `tab_respuestas_esquemas_certificacion` DISABLE KEYS */;
INSERT INTO `tab_respuestas_esquemas_certificacion` VALUES (1,1,36,'A',10.00),(2,1,37,'A',10.00),(3,1,40,'A',10.00),(4,1,45,'A',10.00),(5,1,47,'A',10.00),(6,1,49,'A',10.00),(7,1,51,'A',10.00),(8,1,54,'A',10.00),(9,1,55,'A',10.00),(10,1,56,'A',10.00),(11,2,1,'A',10.00),(12,2,2,'A',10.00),(13,2,3,'A',10.00),(14,2,4,'A',10.00),(15,2,9,'A',10.00),(16,2,10,'A',10.00),(17,2,13,'A',10.00),(18,2,15,'A',10.00),(19,2,17,'A',10.00),(20,2,20,'A',10.00),(21,3,57,'A',10.00),(22,3,58,'A',10.00),(23,3,60,'A',10.00),(24,3,62,'A',10.00),(25,3,64,'A',10.00),(26,3,65,'A',10.00),(27,3,66,'A',10.00),(28,3,68,'A',10.00),(29,3,71,'A',10.00),(30,3,72,'A',10.00);
/*!40000 ALTER TABLE `tab_respuestas_esquemas_certificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_respuestas_procedimientos_documentos`
--

DROP TABLE IF EXISTS `tab_respuestas_procedimientos_documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_respuestas_procedimientos_documentos` (
  `ID_RESPUESTA_PROCEDIMIENTO` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_EVALUACION_EXAMINADOR` int(11) NOT NULL,
  `ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS` bigint(20) NOT NULL,
  `RESPUESTA` text NOT NULL,
  `VALOR_RESPUESTA` decimal(8,2) NOT NULL,
  PRIMARY KEY (`ID_RESPUESTA_PROCEDIMIENTO`),
  KEY `FK_REFERENCE_97` (`ID_EVALUACION_EXAMINADOR`),
  KEY `FK_REFERENCE_98` (`ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS`),
  CONSTRAINT `FK_REFERENCE_97` FOREIGN KEY (`ID_EVALUACION_EXAMINADOR`) REFERENCES `tab_evaluacion_examinadores` (`ID_EVALUACION_EXAMINADOR`),
  CONSTRAINT `FK_REFERENCE_98` FOREIGN KEY (`ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS`) REFERENCES `tab_preguntas_procedimientos_documentos` (`ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_respuestas_procedimientos_documentos`
--

LOCK TABLES `tab_respuestas_procedimientos_documentos` WRITE;
/*!40000 ALTER TABLE `tab_respuestas_procedimientos_documentos` DISABLE KEYS */;
INSERT INTO `tab_respuestas_procedimientos_documentos` VALUES (1,1,12,'DFSDFDSF',10.00),(2,1,13,'SDFSDFSDF',10.00),(3,1,15,'SDFSDFS',10.00),(4,1,17,'SFSDFSDF',10.00),(5,1,19,'DFSDFSDF',10.00),(6,2,1,'no se',10.00),(7,2,2,'ayudeme por favor',10.00),(8,2,3,'el billete',10.00),(9,2,4,'ayudar a pasar el exaMEN',10.00),(10,2,5,'ayudar',10.00),(11,3,21,'dfd',10.00),(12,3,22,'sdghjtftfgjn',10.00),(13,3,23,'dshdherjhnrtjmzrt',10.00),(14,3,24,'drfhjnzetdjzed',10.00),(15,3,26,'rhzwejdrndzf',10.00);
/*!40000 ALTER TABLE `tab_respuestas_procedimientos_documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_roles`
--

DROP TABLE IF EXISTS `tab_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_roles` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,
  `ROL` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_ROL`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_roles`
--

LOCK TABLES `tab_roles` WRITE;
/*!40000 ALTER TABLE `tab_roles` DISABLE KEYS */;
INSERT INTO `tab_roles` VALUES (1,'ADMINISTRADOR'),(2,'usuario');
/*!40000 ALTER TABLE `tab_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_sector_ciuu_perf_pro`
--

DROP TABLE IF EXISTS `tab_sector_ciuu_perf_pro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_sector_ciuu_perf_pro` (
  `ID_SECTOR_CIUU_PERF_PRO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_SECTOR_CIUU_PERF_PRO` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_SECTOR_CIUU_PERF_PRO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_sector_ciuu_perf_pro`
--

LOCK TABLES `tab_sector_ciuu_perf_pro` WRITE;
/*!40000 ALTER TABLE `tab_sector_ciuu_perf_pro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_sector_ciuu_perf_pro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_solicitante`
--

DROP TABLE IF EXISTS `tab_solicitante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_solicitante` (
  `ID_SOLICITANTE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_NOMBRE_EMPRESA` int(11) DEFAULT NULL,
  `ID_CAPACIACION` int(11) DEFAULT NULL,
  `ID_TALLERES` int(11) DEFAULT NULL,
  `ID_AULA` int(11) DEFAULT NULL,
  `ID_TIPO_SOLICITUD` int(11) DEFAULT NULL,
  `ID_SUCURSAL` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_SOLICITANTE`),
  KEY `FK_REFERENCE_50` (`ID_NOMBRE_EMPRESA`),
  KEY `FK_REFERENCE_63` (`ID_CAPACIACION`),
  KEY `FK_REFERENCE_64` (`ID_TALLERES`),
  KEY `FK_REFERENCE_65` (`ID_AULA`),
  KEY `FK_REFERENCE_67` (`ID_TIPO_SOLICITUD`),
  KEY `FK_REFERENCE_68` (`ID_SUCURSAL`),
  CONSTRAINT `FK_REFERENCE_50` FOREIGN KEY (`ID_NOMBRE_EMPRESA`) REFERENCES `tab_nombre_empresa` (`ID_NOMBRE_EMPRESA`),
  CONSTRAINT `FK_REFERENCE_63` FOREIGN KEY (`ID_CAPACIACION`) REFERENCES `tab_capacitaciones` (`ID_CAPACIACION`),
  CONSTRAINT `FK_REFERENCE_64` FOREIGN KEY (`ID_TALLERES`) REFERENCES `tab_talleres_lab` (`ID_TALLERES`),
  CONSTRAINT `FK_REFERENCE_65` FOREIGN KEY (`ID_AULA`) REFERENCES `tab_aulas` (`ID_AULA`),
  CONSTRAINT `FK_REFERENCE_67` FOREIGN KEY (`ID_TIPO_SOLICITUD`) REFERENCES `tab_tipo_solicitante` (`ID_TIPO_SOLICITUD`),
  CONSTRAINT `FK_REFERENCE_68` FOREIGN KEY (`ID_SUCURSAL`) REFERENCES `tab_detalles_sucursales` (`ID_SUCURSAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_solicitante`
--

LOCK TABLES `tab_solicitante` WRITE;
/*!40000 ALTER TABLE `tab_solicitante` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_solicitante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_subcategoria_criterios_evaluacion`
--

DROP TABLE IF EXISTS `tab_subcategoria_criterios_evaluacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_subcategoria_criterios_evaluacion` (
  `ID_SUBCAT_CRIT_EVA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CAT_CRITERIO_EVALUACION` int(11) DEFAULT NULL,
  `NOMBRE_SUBCAT_CRIT_EVA` varchar(1000) DEFAULT NULL,
  `PONDERACION` double DEFAULT NULL,
  PRIMARY KEY (`ID_SUBCAT_CRIT_EVA`),
  KEY `FK_REFERENCE_33` (`ID_CAT_CRITERIO_EVALUACION`),
  CONSTRAINT `FK_REFERENCE_33` FOREIGN KEY (`ID_CAT_CRITERIO_EVALUACION`) REFERENCES `tab_categorias_criterios_evaluacion` (`ID_CAT_CRITERIO_EVALUACION`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_subcategoria_criterios_evaluacion`
--

LOCK TABLES `tab_subcategoria_criterios_evaluacion` WRITE;
/*!40000 ALTER TABLE `tab_subcategoria_criterios_evaluacion` DISABLE KEYS */;
INSERT INTO `tab_subcategoria_criterios_evaluacion` VALUES (1,1,' Título Universitario (Tercer  o Cuarto Nivel relacionado al Perfil)',10),(2,1,'Título Universitario (Tercer  o Cuarto Nivel no relacionado al Perfil)',7),(3,1,'Técnico, Tecnológico, Artesanal afín al perfil',4),(4,2,'Cursos relacionados a: Formación de Formadores, Pedagogía, Técnicas de Enseñanza, Coaching, Actualización Pedagógica  o similares		',2),(5,2,'Duración más de 40 horas hasta 50 horas		',4),(6,2,'Duración mas de 51 horas hasta 60 horas',6),(7,2,'Duración mas de 61 horas hasta 70 horas',8),(8,2,'Duración más de 70 horas',10),(9,3,'Hasta 2 años de experiencia técnica ',10),(10,3,'Más de 2 años pero menos de 4 años de experiencia técnica',50),(11,3,'Más de 4 años de experiencia técnica ',70),(12,4,'Horas de capacitación impartidas (hasta 30 horas)',4),(13,4,'Horas de capacitación impartidas (entre 31 - 50 horas)',6),(14,4,'Horas de capacitación impartidas (entre 51 - 70 horas)',8),(15,4,'Horas de capacitación impartidas (más de 71 horas) ',10);
/*!40000 ALTER TABLE `tab_subcategoria_criterios_evaluacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_subdetalle`
--

DROP TABLE IF EXISTS `tab_subdetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_subdetalle` (
  `ID_SUB` int(11) NOT NULL AUTO_INCREMENT,
  `ID_DETALLE` int(11) DEFAULT NULL,
  `SUBDETALLE` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_SUB`),
  KEY `FK_REFERENCE_80` (`ID_DETALLE`),
  CONSTRAINT `FK_REFERENCE_80` FOREIGN KEY (`ID_DETALLE`) REFERENCES `tab_eva_detalle` (`ID_DETALLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_subdetalle`
--

LOCK TABLES `tab_subdetalle` WRITE;
/*!40000 ALTER TABLE `tab_subdetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_subdetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_talleres_lab`
--

DROP TABLE IF EXISTS `tab_talleres_lab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_talleres_lab` (
  `ID_TALLERES` int(11) NOT NULL AUTO_INCREMENT,
  `ID_MODALIDAD` int(11) DEFAULT NULL,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `LUGAR_UBICAION` varchar(150) DEFAULT NULL,
  `CIUDAD` varchar(100) DEFAULT NULL,
  `DIRECCION` varchar(150) DEFAULT NULL,
  `TIPO_TALLER_O_LABORATORIO` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_TALLERES`),
  KEY `FK_REFERENCE_53` (`ID_PERSONA`),
  KEY `FK_REFERENCE_56` (`ID_MODALIDAD`),
  CONSTRAINT `FK_REFERENCE_53` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_56` FOREIGN KEY (`ID_MODALIDAD`) REFERENCES `tab_modalidades` (`ID_MODALIDAD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_talleres_lab`
--

LOCK TABLES `tab_talleres_lab` WRITE;
/*!40000 ALTER TABLE `tab_talleres_lab` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_talleres_lab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_tipo_solicitante`
--

DROP TABLE IF EXISTS `tab_tipo_solicitante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_tipo_solicitante` (
  `ID_TIPO_SOLICITUD` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_SOLICITUD` varchar(100) DEFAULT NULL,
  `MARCAR` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_TIPO_SOLICITUD`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_tipo_solicitante`
--

LOCK TABLES `tab_tipo_solicitante` WRITE;
/*!40000 ALTER TABLE `tab_tipo_solicitante` DISABLE KEYS */;
INSERT INTO `tab_tipo_solicitante` VALUES (1,'Reconocimiento','x'),(2,'Modificación 					',NULL),(3,'Ampliación					',NULL);
/*!40000 ALTER TABLE `tab_tipo_solicitante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_unidad_competencia`
--

DROP TABLE IF EXISTS `tab_unidad_competencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_unidad_competencia` (
  `ID_UNIDAD_COMPETENCIA` int(11) NOT NULL AUTO_INCREMENT,
  `UNIDAD_COMPETENCIA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_UNIDAD_COMPETENCIA`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_unidad_competencia`
--

LOCK TABLES `tab_unidad_competencia` WRITE;
/*!40000 ALTER TABLE `tab_unidad_competencia` DISABLE KEYS */;
INSERT INTO `tab_unidad_competencia` VALUES (1,'UC1;UC2; UC3.	'),(2,'UC1;UC2.	'),(3,'UC1.	'),(4,'UC1;UC2; UC3; UC4.	'),(5,'UC1;UC2; UC3; UC4; UC5.	');
/*!40000 ALTER TABLE `tab_unidad_competencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_usuarios`
--

DROP TABLE IF EXISTS `tab_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `NOMBRE_USUARIO` varchar(1000) NOT NULL,
  `CLAVE` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `FK_REFERENCE_23` (`ID_PERSONA`),
  CONSTRAINT `FK_REFERENCE_23` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_usuarios`
--

LOCK TABLES `tab_usuarios` WRITE;
/*!40000 ALTER TABLE `tab_usuarios` DISABLE KEYS */;
INSERT INTO `tab_usuarios` VALUES (1,1,'ad','21232f297a57a5a743894a0e4a801fc3'),(2,NULL,'admin','21232f297a57a5a743894a0e4a801fc3'),(3,8,'pilar','31c7d084f0460fcde98ee9314fc8ef30'),(4,NULL,'','d41d8cd98f00b204e9800998ecf8427e'),(5,7,'rony','995bf053c4694e1e353cfd42b94e4447'),(6,8,'perez','765ba753b609d84b3813991fe23f81b3'),(7,9,'jlacosta','022d3079ce2d7cf91b81a0d14e87498d'),(8,10,'qw','006d2143154327a64d86a264aea225f3'),(9,11,'Freddy Sandoval','20c4122d328cf330029a71ca8b3cea27'),(10,12,'Hugo','957bf253f711940eb01342291666e5ee');
/*!40000 ALTER TABLE `tab_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-13  6:52:13
