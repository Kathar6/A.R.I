CREATE DATABASE  IF NOT EXISTS `bd_ari` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `bd_ari`;
-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_ari
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `basura`
--

DROP TABLE IF EXISTS `basura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `basura` (
  `idbasura` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID y llave primaria de la basura',
  `idcat` int(11) NOT NULL COMMENT 'ID de la categoria a la que pertenece la basura',
  `nombasura` varchar(100) NOT NULL COMMENT 'Nombre de la basura',
  PRIMARY KEY (`idbasura`),
  KEY `fk_id_cat` (`idcat`),
  CONSTRAINT `fk_id_cat` FOREIGN KEY (`idcat`) REFERENCES `categoria` (`idcat`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COMMENT='Tabla para registrar las basuras';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basura`
--

LOCK TABLES `basura` WRITE;
/*!40000 ALTER TABLE `basura` DISABLE KEYS */;
INSERT INTO `basura` VALUES (1,3,'Plastic Bottle'),(2,3,'Water Bottle'),(3,3,'Bottle'),(4,3,'Plastic'),(5,3,'Drinkware'),(6,3,'Spoon'),(7,3,'Dishware'),(8,3,'Cutlery'),(10,2,'Napkin'),(11,2,'Paper'),(12,2,'Paper Product'),(14,1,'Fruit'),(15,1,'Food'),(16,1,'Banana'),(17,2,'Paper Bag'),(19,1,'PineApple'),(21,3,'Botella'),(23,1,'Piña'),(24,1,'Potato chip');
/*!40000 ALTER TABLE `basura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categoria` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID y llave primaria de la categoria',
  `nombrecat` varchar(100) NOT NULL COMMENT 'Nombre de la categoria',
  PRIMARY KEY (`idcat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Tabla para registrar las categorías\n';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Orgánicos'),(2,'Papel y cartón'),(3,'Plástico');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datocont`
--

DROP TABLE IF EXISTS `datocont`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `datocont` (
  `iddatocont` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del contacto',
  `idempresa` varchar(30) NOT NULL COMMENT 'ID de la empresa',
  `cedula` varchar(20) NOT NULL COMMENT 'Cédula del usuario',
  `email` varchar(255) NOT NULL COMMENT 'Correo electrónico de contaco',
  `telefono` varchar(45) NOT NULL COMMENT 'Télefonos de contaco',
  `direccion` varchar(255) NOT NULL COMMENT 'Ubicación de contacto',
  PRIMARY KEY (`iddatocont`,`idempresa`,`cedula`),
  KEY `fk_datocont_empresa1_idx` (`idempresa`),
  KEY `fk_datocont_usuario1_idx` (`cedula`),
  CONSTRAINT `fk_datocont_usuario1` FOREIGN KEY (`cedula`) REFERENCES `usuario` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabla para los datos de contacto';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datocont`
--

LOCK TABLES `datocont` WRITE;
/*!40000 ALTER TABLE `datocont` DISABLE KEYS */;
INSERT INTO `datocont` VALUES (1,'1000533072','1000533072','ariproyecto@gmail.com','4522492','Cr 89 #65-40'),(2,'1000533072','1216729104','juandacoga12@gmail.com','5052239','Cr 56 #54-60'),(3,'1000533072','1000089139','matepabon@gmail.com','5859944','Cr 44 #34-50'),(4,'1000533072','1048264545','danielp_55@hotmail.com','5964077','Cr 56 #12-16'),(5,'1000533072','1193115426','david.agudelo.valencia@gmail.com','3046710563','Cr 10 #89-10'),(6,'1000533072','1000533072','juancortesg1204@gmail.com','3005082697','Cr 61 #44-40'),(7,'1000533072','1048264545','peppapig@ejemplo.com','4680874','carrera 40 pepa#34');
/*!40000 ALTER TABLE `datocont` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `empresa` (
  `idempresa` varchar(30) NOT NULL COMMENT 'ID de la empresa ',
  `nombEmpresa` varchar(45) NOT NULL COMMENT 'Nombre de la empresa',
  `website` varchar(45) NOT NULL COMMENT 'Sitio web de la empresa',
  PRIMARY KEY (`idempresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabla para registrar los datos de la empresa';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES ('1000533072','ARI','www.ariproyecto.com');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial`
--

DROP TABLE IF EXISTS `historial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `historial` (
  `idhistorial` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID y llave primaria del historial',
  `idbasura` int(11) NOT NULL COMMENT 'ID de la basura que ingresó',
  `idmaquina` int(11) NOT NULL COMMENT 'ID de la máquina que hace los historiales',
  `nombasura` varchar(100) NOT NULL COMMENT 'Nombre de la basura que se ingresó',
  `fecha` datetime NOT NULL COMMENT 'Fecha y hora a la cual ingresó la basura',
  `cant` int(11) NOT NULL COMMENT 'Cantidad de la basura que ingresó',
  PRIMARY KEY (`idhistorial`,`idmaquina`),
  KEY `fk_id_basura` (`idbasura`),
  KEY `fk_historial_maquina1_idx` (`idmaquina`),
  CONSTRAINT `fk_historial_maquina1` FOREIGN KEY (`idmaquina`) REFERENCES `maquina` (`idmaquina`),
  CONSTRAINT `fk_id_basura` FOREIGN KEY (`idbasura`) REFERENCES `basura` (`idbasura`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='Tabla para registrar los historiales';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial`
--

LOCK TABLES `historial` WRITE;
/*!40000 ALTER TABLE `historial` DISABLE KEYS */;
INSERT INTO `historial` VALUES (1,3,1,'Bottle','2019-02-28 08:15:03',1),(2,1,1,'Plastic Bottle','2019-02-28 08:16:00',1),(3,1,2,'Plastic Bottle','2019-02-28 08:17:16',1),(4,3,3,'Bottle','2019-04-01 00:34:38',1),(5,14,2,'Fruit','2019-04-01 01:10:30',1),(6,15,3,'Food','2019-04-01 01:10:57',1),(7,10,4,'Napkin','2019-04-01 01:11:35',1),(8,11,5,'Paper','2019-04-01 01:11:56',1),(9,21,1,'Botella','2019-04-01 01:17:28',1),(10,3,5,'Bottle','2019-04-01 01:18:15',1);
/*!40000 ALTER TABLE `historial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maquina`
--

DROP TABLE IF EXISTS `maquina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `maquina` (
  `idmaquina` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero de matricula de la máquina',
  `idempresa` varchar(30) NOT NULL COMMENT 'Id de la empresa a la cual pertenece la máquina',
  `pesoOrg` double NOT NULL COMMENT 'Cantidad de basura orgánica que puede soportar',
  `pesoPlast` double NOT NULL COMMENT 'Cantidad de basura plástica que puede soportar',
  `pesoPapel` double NOT NULL COMMENT 'Cantidad de basura de papel y cartón que puede soportar',
  `ubicacion` varchar(45) NOT NULL COMMENT 'Ubicación de la máquina',
  `estado` varchar(45) NOT NULL DEFAULT 'Activada',
  PRIMARY KEY (`idmaquina`,`idempresa`),
  KEY `fk_maquina_empresa1_idx` (`idempresa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabla para registrar los datos de cadamáquina';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maquina`
--

LOCK TABLES `maquina` WRITE;
/*!40000 ALTER TABLE `maquina` DISABLE KEYS */;
INSERT INTO `maquina` VALUES (1,'1000533072',50.5,35.5,20.5,'Medellin-Puerta del norte','Inactivada'),(2,'1000533072',50.5,40.5,22.5,'Medellin-EPM','Inactivada'),(3,'1000533072',28,43,41,'SURA','Inactivada'),(4,'1000533072',45,45,45,'EPM','Inactivada'),(5,'1000533072',458,45,45,'EPM','Activada'),(6,'1000533072',45,45,45,'SURA','Activada');
/*!40000 ALTER TABLE `maquina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuario` (
  `cedula` varchar(20) NOT NULL COMMENT 'Cédula del usuario',
  `nombres` varchar(50) NOT NULL COMMENT 'Nombre del usuario',
  `apellidos` varchar(50) NOT NULL COMMENT 'Apellidos del usuario',
  `usuario` varchar(45) NOT NULL COMMENT 'Nickname de ingreso ',
  `passusua` varchar(45) NOT NULL COMMENT 'Contraseña de ingreso',
  `estado` varchar(45) NOT NULL DEFAULT 'Activo' COMMENT 'Estado del usuario',
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabla para registrar cada usuario';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('1','1','1','1','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Inactivo'),('1000089139','Mateo Alonso','Pabón Garcia','mpabon','1234','Activo'),('1000533072','Juan Esteban','Cortés Gómez','jcortes','21e258feeda0a1d9c794088b7d59d51d1ed760d9','Activo'),('1048264545','Daniel David','Pineda Beltran','ElCoste','f700a6934e78cd908cb5665cd84f89318bfa2d43','Activo'),('11223','Alex ','Ubago','aubago','2659fc7be995b25502c724bac742958d9607484c','Activo'),('1193115426','David','Agudelo Valencia','dagudelo','1234','Activo'),('12','12','12','12','7b52009b64fd0a2a49e6d8a939753077792b0554','Inactivo'),('1216729104','Juan David','Correa Garcia','jcorrea','1234','Activo'),('123','12334','123','123','da39a3ee5e6b4b0d3255bfef95601890afd80709','Inactivo');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bd_ari'
--
/*!50003 DROP PROCEDURE IF EXISTS `CrearReporte` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `CrearReporte`(
in nomBas varchar(100),
-- in conNomBas varchar(5),
in nomCat varchar(100),
-- in conNomCat varchar(5),
in ubcMaq varchar(45),
-- in conUbc varchar(5),
in fecha1 varchar(40),
in fecha2 varchar(40)

)
BEGIN

set @conNomBas = "";
set @conNomCat = "";
set @conUbcMaq = "";


if nomBas = "" then
set @conNomBas = "!="; 
else
set @conNomBas = "=";
end if;

if nomCat = "" then
set @conNomCat = "!="; 
else
set @conNomCat = "=";
end if;

if ubcMaq = "" then
set @conUbcMaq = "!="; 
else
set @conUbcMaq = "=";
end if;

if fecha1 = "" then 
set fecha1 = "1999-01-01 00:00:00";
end if;

if fecha2 = "" then 
set fecha2 = now();
end if;

set @pQuery1 = concat('select h.idhistorial,h.idbasura,h.nombasura,b.idcat,c.nombrecat,h.idmaquina,m.ubicacion,h.fecha,h.cant
from maquina m inner join historial h on m.idmaquina = h.idmaquina 
inner join basura b on h.idbasura = b.idbasura 
inner join categoria c on b.idcat = c.idcat
where h.nombasura ',@conNomBas,' "',nomBas,'" 
and c.nombrecat ',@conNomCat,' "',nomCat,'" 
and m.ubicacion ',@conUbcMaq,' "',ubcMaq,'" and h.fecha between "',fecha1,'" and "',fecha2,'";');


prepare stm from @pQuery1;
execute stm;
deallocate prepare stm;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CRUDBasura` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`equipoARI`@`%` PROCEDURE `CRUDBasura`(
in idbas int,
in idcategoria int,
in nombrebasura varchar(100),
in boton varchar(45)
)
BEGIN
if idbas != null
then
set idbas = idbas;
end if;

-- Buscamos el último id de la basura y le sumamos 1
set @idBas = (select ifnull(max(idbasura)+1,1) from basura);

-- Buscamos si la basura ya está registrada en la base de datos
set @nomBas = (select nombasura from basura where nombasura = nombrebasura); 

case
-- Procedimiento para guardar
when boton = 'guardar' then 
-- Confirmamos si la basura ya está registada
if @nomBas = nombrebasura then
select concat('La basura ', nombrebasura, ' ya se encuentra registrada ') as mensaje;
else
insert into basura values (@idBas,idcategoria ,nombrebasura);
SELECT * from basura where idbasura = @idBas;
end if;

-- Procedimiento para actualizar 
when boton = 'actualizar' then
update basura set idcat=idcategoria,nombasura=nombrebasura where idbasura=idbas;
select * from basura where idbasura=idbas;


-- Procedimiento para eliminar
when boton = 'eliminar' then 
select * from basura where idbasura = idbas;
delete from basura where idbasura=idbas;


end case; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CRUDCategoria` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `CRUDCategoria`(
-- Parámetros de entrada
in idCatg int,
in nombreCatg varchar(100),
in boton varchar(45)
)
BEGIN
/* Procedimiento de almacenado para realizar el crud de la tabla categoria */
if idCatg != null
then
set idCatg = idCatg;
end if;

-- Buscamos el último id de la categoria y le sumamos 1
set @idCat = (select ifnull(max(idcat)+1,1) from categoria);

-- Buscamos si la basura ya está registrada en la base de datos
set @nomCat = (select nombrecat from categoria where nombrecat = nombreCatg); 

-- Se empiezan los casos
case
-- Procedimiento para guardar una categoría
when boton = 'guardar' then
if @nomCat = nombrecatG then
select concat('La categoría ', nombreCatG, ' ya se encuentra registrada ') as mensaje;
else
insert into categoria values(@idCat,nombreCatg);
select *  from categoria where idcat = @idCat;
end if;
-- Procedimiento para actualizar una categoría
when boton = 'actualizar' then
update categoria 
set nombrecat = nombreCatg
where idcat = idCatg;
select * from categoria where idcat = idCatg;

-- Procedimiento para eliminar una categoría
when boton = 'Eliminar' then
select * from categoria where idcat = idCatg;
delete from categoria where idcat = idCatg;

-- Fin del case
end case;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CRUDContacto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`equipoARI`@`%` PROCEDURE `CRUDContacto`(
in idcontaC int,
in cedulaC varchar (20),
in emailC varchar (255),
in telefonoC varchar (45),
in direccionC varchar (255),
in boton varchar(45)
)
BEGIN
if idcontaC != null
then
set idcontaC = idcontaC;
end if;

-- Buscamos el último id de los contactos y le sumamos 1
set @idCont = (select ifnull(max(iddatocont)+1,1) from datocont);

-- Asignar las constantes
set @empresa = '1000533072';

case

-- Procedimiento para guardar una maquina
when boton = 'guardar' then
insert into datocont values (@idCont,@empresa,cedulaC,emailC,telefonoC,direccionC);
select *  from datocont where iddatocont = @idCont;

-- Procedimiento para actualizar una máquina
when boton = 'actualizar' then
update datocont set idempresa=@empresa, cedula=cedulaC, email=emailC, telefono=telefonoC, direccion=direccionC where iddatocont=idcontaC;
select * from datocont where iddatocont = idcontaC;

-- Procedimiento para inhabilitar una máquina
when boton = 'Eliminar' then
select * from datocont where iddatocont = idcontaC;
delete from datocont where iddatocont=idcontaC;

end case;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CRUDEmpresa` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`equipoARI`@`%` PROCEDURE `CRUDEmpresa`(
in idEmpres int,
in nombreEmpres varchar (45),
in webst varchar (45),
in boton varchar(45)
)
BEGIN
if idEmpres != null
then
set idEmpres = idEmpres;
end if;

-- Buscamos si la empresa ya está registrada en la base de datos
set @idEmp = (select idempresa from empresa where idempresa = idEmpres); 

case 
-- Procedimiento para guardar
when boton='guardar' then 
if @idEmp = idEmpres then
select concat('La empresa con el RUT ', idEmpres, ' ya se encuentra registrada') as Mensaje;
else
insert into empresa values (idEmpres,nombreEmpres,webst);
select * from empresa where idempresa = idEmpres;
end if;

-- Procedimiento para actualizar  
when boton='actualizar' then
if @idEmp = idEmpres then 
update empresa set nombEmpresa=nombreEmpres, website=webst where idempresa=idEmpres;
select * from empresa where idempresa=idEmpres;
else
select concat('La empresa con RUT ',idEmpres,' no se encuentra registrada') as Mensaje;
end if;

-- Procedimiento para eliminar
when boton='eliminar' then
select * from empresa where idempresa = idEmpres;
delete from empresa where idempresa=idEmpres;

end case;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CRUDmaquina` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `CRUDmaquina`(
-- Parámetros de entrada
in idMaq int,
in organico decimal(10,2),
in plastico decimal(10,2),
in papel decimal(10,2),
in ubicacion varchar(255),
in boton varchar(45)
)
BEGIN
/* Procedimiento de almacenado para realizar el crud de la tabla máquina */
if idMaq != null
then
set idMaq = idMaq;
end if;

-- Buscamos el último id de la maquina y le sumamos 1
set @idMaq = (select ifnull(max(idmaquina)+1,1) from maquina);

-- Asignar las constantes
set @empresa = '1000533072';
set @estado = 'Activada';

-- Se empiezan los casos
case
-- Procedimiento para guardar una maquina
when boton = 'guardar' then
insert into maquina values(@idMaq,@empresa,organico,plastico,papel,ubicacion,@estado);
select *  from maquina where idmaquina = @idMaq;

-- Procedimiento para actualizar una máquina
when boton = 'actualizar' then
update maquina 
set idempresa = @empresa, pesoOrg = organico, pesoPlast = plastico, pesoPapel = papel, ubicacion = ubicacion, estado = @estado 
where idmaquina = idMaq;
select * from maquina where idmaquina = idMaq;

-- Procedimiento para inhabilitar una máquina
when boton = 'Eliminar' then
update maquina
set estado = 'Inactivada'
where idmaquina = idMaq;
select * from maquina where idmaquina = idMaq;

-- Fin del case
end case;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CRUDUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`equipoARI`@`%` PROCEDURE `CRUDUsuario`(
in cedulaU varchar (20),
in nombresU varchar (50),
in apellidosU varchar (50),
in usuarioU varchar (45),
in passU varchar (45),
in boton varchar (45)
)
BEGIN
if cedulaU != null
then
set cedulaU = cedulaU;
end if;

-- Buscamos si el usuario ya está registrado en la base de datos
set @cedula = (select cedula from usuario where cedula = cedulaU);
set @userVal = (select exists(select usuario from usuario where usuario = usuarioU));
set @estadoActual = (select estado from usuario where cedula = cedulaU);
/*set @nomUser = (select nombres from usuario where nombres = nombresU and cedula = cedulaU); 
set @apellUser = (select apellidos from usuario where apellidos = apellidosU and cedula = cedulaU);*/


-- Asignar las constantes
set @estado = 'Activo';

case 
-- Procedimiento para guardar
when boton='guardar' then
if @cedula = cedulaU && @estadoActual != 'Inactivo' then
	select concat('El usuario con cédula ',cedulaU,' ya se encuentra registrado') as MensajeCedula;
else
	if @userVal = 1 then
		select concat('El usuario ya se encuentra registrado, por favor ingrese un usuario diferente') as MensajeVal;
	else
    if @estadoActual = 'Inactivo' then 
		update usuario set nombres=nombresU, apellidos=apellidosU, usuario=usuarioU, passusua=sha(passU), estado=@estado where cedula=cedulaU;
        select * from usuario where cedula=cedulaU;
    else
		insert into usuario values (cedulaU,nombresU,apellidosU,usuarioU,sha(passU),@estado);
		select * from usuario where cedula=cedulaU;
        end if;
	end if;
end if;

-- Procedimiento para actualizar  
when boton='actualizar' then
if @cedula = cedulaU then 
	update usuario set nombres=nombresU, apellidos=apellidosU, passusua=sha(passU) where cedula=cedulaU;
	select * from usuario where cedula = cedulaU;
else
	select concat('El usuario con cédula ',cedulaU,' no se encuentra registrado') as MensajeCed;
end if;

-- Procedimiento para eliminar
when boton='eliminar' then
update usuario set estado='Inactivo' where cedula=cedulaU;
select * from usuario where cedula = cedulaU;
end case;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Login` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Login`(
in usua varchar(45),
in passuser varchar(45)
)
BEGIN
-- Validamos si el usuario existe en la base de datos y retornamos 
select cedula, concat(nombres,' ',apellidos) as Usuario from usuario where usuario = usua and passusua = sha(passuser) and estado = 'Activo';


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SP_crearHistorial` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_crearHistorial`(IN `@nom_basura` VARCHAR(100))
INSERT INTO historial(
        nom_basura,
        id_basura,
        fecha,
        cant
    )
SELECT
	nom_basura,
    id_basura,
    now(),
    1
    FROM
    basura
    WHERE
    nom_basura = `@nom_basura` ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `USP_Consultar_Basura` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `USP_Consultar_Basura`(IN `idBasura` INT)
    NO SQL
SELECT * from basura where basura.id_basura = idBasura ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `USP_Consultar_Categoria` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `USP_Consultar_Categoria`(IN `idCat` INT)
    NO SQL
SELECT * FROM categoria where categoria.id_cat = idCat ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-29 22:40:58
