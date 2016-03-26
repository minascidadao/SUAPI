-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: suapi
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `filiais`
--

DROP TABLE IF EXISTS `filiais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filiais` (
  `filialID` int(11) NOT NULL AUTO_INCREMENT,
  `filial` varchar(90) NOT NULL,
  `endereco` varchar(90) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`filialID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filiais`
--

LOCK TABLES `filiais` WRITE;
/*!40000 ALTER TABLE `filiais` DISABLE KEYS */;
INSERT INTO `filiais` VALUES (1,'BETIM',NULL,NULL,'BETIM','MG',NULL),(2,'GOVERNADOR VALADARES',NULL,NULL,'GOVERNADOR VALADARES',NULL,NULL);
/*!40000 ALTER TABLE `filiais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impressoestipos`
--

DROP TABLE IF EXISTS `impressoestipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `impressoestipos` (
  `impressaoTipoID` int(11) NOT NULL AUTO_INCREMENT,
  `impressaoTipo` varchar(45) NOT NULL,
  PRIMARY KEY (`impressaoTipoID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impressoestipos`
--

LOCK TABLES `impressoestipos` WRITE;
/*!40000 ALTER TABLE `impressoestipos` DISABLE KEYS */;
INSERT INTO `impressoestipos` VALUES (1,'PADRAO'),(2,'VISITA');
/*!40000 ALTER TABLE `impressoestipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parentescos`
--

DROP TABLE IF EXISTS `parentescos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parentescos` (
  `parentescoID` int(11) NOT NULL AUTO_INCREMENT,
  `parentesco` varchar(90) NOT NULL,
  PRIMARY KEY (`parentescoID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parentescos`
--

LOCK TABLES `parentescos` WRITE;
/*!40000 ALTER TABLE `parentescos` DISABLE KEYS */;
INSERT INTO `parentescos` VALUES (1,'ADVOGADO'),(2,'MAE'),(3,'PAI'),(4,'IRMAO'),(5,'TIO');
/*!40000 ALTER TABLE `parentescos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presos`
--

DROP TABLE IF EXISTS `presos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presos` (
  `presoID` int(11) NOT NULL AUTO_INCREMENT,
  `preso` varchar(90) NOT NULL,
  `infopen` int(11) NOT NULL,
  `unidadePrisionalID` int(11) NOT NULL,
  PRIMARY KEY (`presoID`),
  KEY `fk_presos_unidadesPrisionais1_idx` (`unidadePrisionalID`),
  CONSTRAINT `fk_presos_unidadesPrisionais1` FOREIGN KEY (`unidadePrisionalID`) REFERENCES `unidadesprisionais` (`unidadePrisionalID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presos`
--

LOCK TABLES `presos` WRITE;
/*!40000 ALTER TABLE `presos` DISABLE KEYS */;
INSERT INTO `presos` VALUES (1,'PRESO01 presinho da silva sauro',111,1),(2,'PRESO02',222,1),(3,'PRESO03',333,2);
/*!40000 ALTER TABLE `presos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitacoes`
--

DROP TABLE IF EXISTS `solicitacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitacoes` (
  `solicitacaoID` int(11) NOT NULL AUTO_INCREMENT,
  `solicitacaoTipoID` int(11) NOT NULL,
  `solicitanteID` int(11) NOT NULL,
  `presoID` int(11) NOT NULL,
  `unidadePrisionalID` int(11) NOT NULL,
  `dataSolicitacao` datetime DEFAULT NULL,
  `entregue` tinyint(1) DEFAULT NULL,
  `entreguePara` varchar(90) DEFAULT NULL,
  `dataEntrega` datetime DEFAULT NULL,
  `aprovada` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`solicitacaoID`),
  KEY `fk_Solicitacoes_SolicitacoesTipos_idx` (`solicitacaoTipoID`),
  KEY `fk_Solicitacoes_solicitantes1_idx` (`solicitanteID`),
  KEY `fk_Solicitacoes_presos1_idx` (`presoID`),
  KEY `fk_Solicitacoes_unidadesPrisionais1_idx` (`unidadePrisionalID`),
  CONSTRAINT `fk_Solicitacoes_presos1` FOREIGN KEY (`presoID`) REFERENCES `presos` (`presoID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitacoes_SolicitacoesTipos` FOREIGN KEY (`solicitacaoTipoID`) REFERENCES `solicitacoestipos` (`solicitacaoTipoID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitacoes_solicitantes1` FOREIGN KEY (`solicitanteID`) REFERENCES `solicitantes` (`solicitanteID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitacoes_unidadesPrisionais1` FOREIGN KEY (`unidadePrisionalID`) REFERENCES `unidadesprisionais` (`unidadePrisionalID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitacoes`
--

LOCK TABLES `solicitacoes` WRITE;
/*!40000 ALTER TABLE `solicitacoes` DISABLE KEYS */;
INSERT INTO `solicitacoes` VALUES (1,1,1,1,1,'2016-01-20 00:00:00',1,'A','2016-01-30 11:02:37',0),(4,3,1,1,1,NULL,1,'X','2016-01-30 11:05:20',0),(6,1,1,1,1,'2016-02-04 17:15:35',0,NULL,NULL,0),(7,1,1,1,1,'2016-02-05 15:03:04',1,'JOSE DA SILVA SAURO','2016-02-05 16:29:33',0),(8,1,1,1,1,'2016-02-05 15:03:30',0,NULL,NULL,0),(10,2,1,1,1,'2016-02-05 15:30:00',0,NULL,NULL,0),(11,1,1,1,1,'2016-02-05 15:35:40',0,NULL,NULL,0),(25,1,1,1,1,'2016-02-05 16:27:03',0,NULL,NULL,0),(26,1,1,1,1,'2016-02-05 16:27:04',0,NULL,NULL,0),(27,1,1,1,1,'2016-02-05 16:27:05',0,NULL,NULL,0),(28,1,1,1,1,'2016-02-05 16:27:06',0,NULL,NULL,0),(30,1,1,1,1,'2016-02-05 16:27:10',0,NULL,NULL,0),(31,1,1,1,1,'2016-02-05 16:27:11',0,NULL,NULL,0),(34,1,1,1,1,'2016-02-07 22:36:28',0,NULL,NULL,0),(35,1,1,1,1,'2016-02-07 22:37:52',0,NULL,NULL,0),(36,1,1,1,1,'2016-02-07 22:40:06',0,NULL,NULL,0),(37,1,1,1,1,'2016-02-07 22:40:40',0,NULL,NULL,0),(52,2,3,3,1,'2016-02-08 20:00:37',0,NULL,NULL,0),(54,1,1,1,1,'2016-02-09 08:56:12',0,NULL,NULL,0),(55,4,3,3,2,'2016-02-09 08:59:08',0,NULL,NULL,0),(59,1,1,1,1,'2016-02-09 09:06:01',0,NULL,NULL,0),(63,1,1,1,1,'2016-02-09 17:33:19',0,NULL,NULL,0),(64,1,1,1,1,'2016-02-09 17:35:26',0,NULL,NULL,0),(65,1,1,1,1,'2016-02-09 17:37:04',0,NULL,NULL,0),(66,1,1,1,1,'2016-02-09 17:37:55',0,NULL,NULL,0),(67,5,3,3,2,'2016-02-09 17:39:30',0,NULL,NULL,0),(69,1,1,1,1,'2016-02-09 17:50:44',0,NULL,NULL,0),(70,1,1,1,1,'2016-02-09 18:14:35',0,NULL,NULL,0),(71,1,1,1,1,'2016-02-09 19:48:37',0,NULL,NULL,0),(72,5,3,3,2,'2016-02-09 19:49:27',0,NULL,NULL,0),(73,1,3,3,2,'2016-02-09 20:02:12',0,NULL,NULL,0);
/*!40000 ALTER TABLE `solicitacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitacoestipos`
--

DROP TABLE IF EXISTS `solicitacoestipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitacoestipos` (
  `solicitacaoTipoID` int(11) NOT NULL AUTO_INCREMENT,
  `solicitacaoTipo` varchar(90) NOT NULL,
  `confirmarEntrega` tinyint(1) DEFAULT '0' COMMENT 'exibir tela de entrega de documento',
  `ativo` tinyint(1) DEFAULT '0',
  `impressaoTipoID` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`solicitacaoTipoID`),
  KEY `fk_solicitacoesTipos_impressoesTipos1_idx` (`impressaoTipoID`),
  CONSTRAINT `fk_solicitacoesTipos_impressoesTipos1` FOREIGN KEY (`impressaoTipoID`) REFERENCES `impressoestipos` (`impressaoTipoID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitacoestipos`
--

LOCK TABLES `solicitacoestipos` WRITE;
/*!40000 ALTER TABLE `solicitacoestipos` DISABLE KEYS */;
INSERT INTO `solicitacoestipos` VALUES (1,'ATESTADO AUXILIO RECLUSAO',0,1,1),(2,'EXAMES MEDICOS',0,1,1),(3,'VISITA INTIMA',0,1,2),(4,'VISITA ASISSTIDA',0,1,2),(5,'VISITA SOCIAL',0,1,2);
/*!40000 ALTER TABLE `solicitacoestipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitantes`
--

DROP TABLE IF EXISTS `solicitantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitantes` (
  `solicitanteID` int(11) NOT NULL AUTO_INCREMENT,
  `solicitante` varchar(90) NOT NULL,
  `rg` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`solicitanteID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitantes`
--

LOCK TABLES `solicitantes` WRITE;
/*!40000 ALTER TABLE `solicitantes` DISABLE KEYS */;
INSERT INTO `solicitantes` VALUES (1,'SOLICITANTE01 que solicita algo ao preso','0101010101'),(2,'SOLICITANTE02 MARIA MARA MARILENE DA SILVA SAURO','02'),(3,'x1','0003'),(4,'x2','004');
/*!40000 ALTER TABLE `solicitantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitantes_presos`
--

DROP TABLE IF EXISTS `solicitantes_presos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitantes_presos` (
  `solicitanteID` int(11) NOT NULL,
  `presoID` int(11) NOT NULL,
  `parentescoID` int(11) NOT NULL,
  PRIMARY KEY (`solicitanteID`,`presoID`),
  KEY `fk_solicitantes_presos_solicitantes1_idx` (`solicitanteID`),
  KEY `fk_solicitantes_presos_presos1_idx` (`presoID`),
  KEY `fk_solicitantes_presos_parentescos1_idx` (`parentescoID`),
  CONSTRAINT `fk_solicitantes_presos_parentescos1` FOREIGN KEY (`parentescoID`) REFERENCES `parentescos` (`parentescoID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitantes_presos_presos1` FOREIGN KEY (`presoID`) REFERENCES `presos` (`presoID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitantes_presos_solicitantes1` FOREIGN KEY (`solicitanteID`) REFERENCES `solicitantes` (`solicitanteID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitantes_presos`
--

LOCK TABLES `solicitantes_presos` WRITE;
/*!40000 ALTER TABLE `solicitantes_presos` DISABLE KEYS */;
INSERT INTO `solicitantes_presos` VALUES (1,1,1),(2,1,2),(3,3,4),(4,1,5);
/*!40000 ALTER TABLE `solicitantes_presos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidadesprisionais`
--

DROP TABLE IF EXISTS `unidadesprisionais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidadesprisionais` (
  `unidadePrisionalID` int(11) NOT NULL AUTO_INCREMENT,
  `unidadePrisional` varchar(90) DEFAULT NULL,
  `endereco` varchar(90) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`unidadePrisionalID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidadesprisionais`
--

LOCK TABLES `unidadesprisionais` WRITE;
/*!40000 ALTER TABLE `unidadesprisionais` DISABLE KEYS */;
INSERT INTO `unidadesprisionais` VALUES (1,'UNIDADE PRISIONAL 01','',NULL,NULL,NULL,NULL),(2,'UNIDADE PRISIONAL 02',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `unidadesprisionais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuarioID` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(90) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(90) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `dataCadastro` datetime DEFAULT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT '0',
  `backOffice` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`usuarioID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'USUARIO01','1','1','01',1,NULL,1,1),(2,'USUARIO02','2','2','02',1,NULL,1,1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `viewpresos`
--

DROP TABLE IF EXISTS `viewpresos`;
/*!50001 DROP VIEW IF EXISTS `viewpresos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `viewpresos` AS SELECT 
 1 AS `presoID`,
 1 AS `preso`,
 1 AS `infopen`,
 1 AS `unidadePrisionalID`,
 1 AS `unidadePrisional`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `viewsolicitacoes`
--

DROP TABLE IF EXISTS `viewsolicitacoes`;
/*!50001 DROP VIEW IF EXISTS `viewsolicitacoes`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `viewsolicitacoes` AS SELECT 
 1 AS `solicitacaoID`,
 1 AS `solicitacaoTipoID`,
 1 AS `solicitacaoTipo`,
 1 AS `impressaoTipoID`,
 1 AS `impressaoTipo`,
 1 AS `solicitanteID`,
 1 AS `solicitante`,
 1 AS `presoID`,
 1 AS `preso`,
 1 AS `infopen`,
 1 AS `unidadePrisionalID`,
 1 AS `unidadePrisional`,
 1 AS `dataSolicitacao`,
 1 AS `entregue`,
 1 AS `entreguePara`,
 1 AS `dataEntrega`,
 1 AS `aprovada`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `viewsolicitantes_presos`
--

DROP TABLE IF EXISTS `viewsolicitantes_presos`;
/*!50001 DROP VIEW IF EXISTS `viewsolicitantes_presos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `viewsolicitantes_presos` AS SELECT 
 1 AS `solicitanteID`,
 1 AS `solicitante`,
 1 AS `rg`,
 1 AS `presoID`,
 1 AS `preso`,
 1 AS `parentescoID`,
 1 AS `parentesco`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `visitastipos`
--

DROP TABLE IF EXISTS `visitastipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitastipos` (
  `visitaTipoID` int(11) NOT NULL AUTO_INCREMENT COMMENT '\n',
  `visitaTipo` varchar(90) NOT NULL COMMENT 'social, assistida, intima',
  PRIMARY KEY (`visitaTipoID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitastipos`
--

LOCK TABLES `visitastipos` WRITE;
/*!40000 ALTER TABLE `visitastipos` DISABLE KEYS */;
INSERT INTO `visitastipos` VALUES (1,'INTIMA'),(2,'FAMILIAR');
/*!40000 ALTER TABLE `visitastipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'suapi'
--

--
-- Dumping routines for database 'suapi'
--
/*!50003 DROP PROCEDURE IF EXISTS `Login` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Login`(
	_login varchar(45),
    _senha varchar(45)
)
BEGIN
	select * from usuarios where login = _login and senha= _senha;
	

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `solicitacoesEntregar` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `solicitacoesEntregar`(
	_solicitacaoID int,
    _entreguePara varchar(90)
)
BEGIN
	update solicitacoes set entregue=1, dataEntrega=now(), entreguePara= _entreguePara  where solicitacaoID = _solicitacaoID;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `solicitacoesLocalizar` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `solicitacoesLocalizar`(
	_localizar varchar(90)
	)
BEGIN
	select * from viewSolicitacoes where
    solicitacaoID=_localizar
    or solicitante like concat('%',_localizar,'%')
    
    order by solicitacaoID
    
    ;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `solicitacoesManipular` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `solicitacoesManipular`(
	_action 		varchar(45),
	_solicitacaoID 	int(11),
	_solicitacaoTipoID int(11) ,
	_solicitanteID 	int(11), 
	_presoID 		int(11) ,
	_unidadePrisionalID int(11) ,
--   dataSolicitacao
--   entregue 		tinyint(1) ,
	_entreguePara 	varchar(90) 
--   dataEntrega
-- 	_arprovada 		tinyint(1)

)
BEGIN
	DECLARE retorno INT(11) DEFAULT 0;
	CASE _action
    WHEN 'insert' THEN
		INSERT INTO solicitacoes 
			(solicitacaoID, solicitacaoTipoID, solicitanteID, presoID, unidadePrisionalID, 
			dataSolicitacao, entregue, entreguePara, dataEntrega, aprovada)
        VALUES 					
			(         null, _solicitacaoTipoID,_solicitanteID,_presoID,_unidadePrisionalID, 
			       now(),			0,         null,    	null,         0); 
			SELECT LAST_INSERT_ID();
	
    WHEN 'update' THEN
		UPDATE solicitacoes  set
			solicitacaoTipoID = _solicitacaoTipoID, solicitanteID = _solicitanteID, presoID= _presoID,  
			entreguePara= _entreguePara 
		WHERE solicitacaoID = _solicitacaoID;
	
    WHEN 'delete' THEN
		DELETE FROM solicitacoes WHERE solicitacaoID = _solicitacaoID ;
	
    END CASE;
	

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spLogin` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spLogin`(
	_login varchar(45),
    _senha varchar(45)
)
BEGIN
	select * from usuarios where login = _login and senha= _senha;
	

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spSolicitacoesEntregar` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spSolicitacoesEntregar`(
	_solicitacaoID int,
    _entreguePara varchar(90)
)
BEGIN
	update solicitacoes set entregue=1, dataEntrega=now(), entreguePara= _entreguePara  where solicitacaoID = _solicitacaoID;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spSolicitacoesLocalizar` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spSolicitacoesLocalizar`(
	_localizar varchar(90)
	)
BEGIN
	select * from viewSolicitacoes where
    solicitacaoID=_localizar
    or solicitante like concat('%',_localizar,'%')
    
    order by solicitacaoID
    
    ;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `viewpresos`
--

/*!50001 DROP VIEW IF EXISTS `viewpresos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `viewpresos` AS select `presos`.`presoID` AS `presoID`,`presos`.`preso` AS `preso`,`presos`.`infopen` AS `infopen`,`presos`.`unidadePrisionalID` AS `unidadePrisionalID`,`unidadesprisionais`.`unidadePrisional` AS `unidadePrisional` from (`presos` left join `unidadesprisionais` on((`presos`.`unidadePrisionalID` = `unidadesprisionais`.`unidadePrisionalID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `viewsolicitacoes`
--

/*!50001 DROP VIEW IF EXISTS `viewsolicitacoes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `viewsolicitacoes` AS select `solicitacoes`.`solicitacaoID` AS `solicitacaoID`,`solicitacoes`.`solicitacaoTipoID` AS `solicitacaoTipoID`,`solicitacoestipos`.`solicitacaoTipo` AS `solicitacaoTipo`,`solicitacoestipos`.`impressaoTipoID` AS `impressaoTipoID`,`impressoestipos`.`impressaoTipo` AS `impressaoTipo`,`solicitacoes`.`solicitanteID` AS `solicitanteID`,`solicitantes`.`solicitante` AS `solicitante`,`solicitacoes`.`presoID` AS `presoID`,`presos`.`preso` AS `preso`,`presos`.`infopen` AS `infopen`,`solicitacoes`.`unidadePrisionalID` AS `unidadePrisionalID`,`unidadesprisionais`.`unidadePrisional` AS `unidadePrisional`,`solicitacoes`.`dataSolicitacao` AS `dataSolicitacao`,`solicitacoes`.`entregue` AS `entregue`,`solicitacoes`.`entreguePara` AS `entreguePara`,`solicitacoes`.`dataEntrega` AS `dataEntrega`,`solicitacoes`.`aprovada` AS `aprovada` from (`impressoestipos` left join ((((`solicitacoes` left join `solicitacoestipos` on((`solicitacoes`.`solicitacaoTipoID` = `solicitacoestipos`.`solicitacaoTipoID`))) left join `solicitantes` on((`solicitacoes`.`solicitanteID` = `solicitantes`.`solicitanteID`))) left join `presos` on((`solicitacoes`.`presoID` = `presos`.`presoID`))) left join `unidadesprisionais` on((`solicitacoes`.`unidadePrisionalID` = `unidadesprisionais`.`unidadePrisionalID`))) on((`solicitacoestipos`.`impressaoTipoID` = `impressoestipos`.`impressaoTipoID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `viewsolicitantes_presos`
--

/*!50001 DROP VIEW IF EXISTS `viewsolicitantes_presos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `viewsolicitantes_presos` AS select `solicitantes`.`solicitanteID` AS `solicitanteID`,`solicitantes`.`solicitante` AS `solicitante`,`solicitantes`.`rg` AS `rg`,`presos`.`presoID` AS `presoID`,`presos`.`preso` AS `preso`,`parentescos`.`parentescoID` AS `parentescoID`,`parentescos`.`parentesco` AS `parentesco` from (((`solicitantes_presos` left join `presos` on((`solicitantes_presos`.`presoID` = `presos`.`presoID`))) left join `solicitantes` on((`solicitantes_presos`.`solicitanteID` = `solicitantes`.`solicitanteID`))) left join `parentescos` on((`solicitantes_presos`.`parentescoID` = `parentescos`.`parentescoID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-09 20:12:30
