-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: shoes_shop
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.17.04.1

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
-- Table structure for table `carrello`
--

DROP TABLE IF EXISTS `carrello`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrello` (
  `id_ordine` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `totale` float DEFAULT NULL,
  PRIMARY KEY (`id_ordine`),
  KEY `user_idx` (`user`),
  CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `utenti` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrello`
--

LOCK TABLES `carrello` WRITE;
/*!40000 ALTER TABLE `carrello` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrello` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dettaglio_carrello`
--

DROP TABLE IF EXISTS `dettaglio_carrello`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dettaglio_carrello` (
  `id_dettaglioordine` int(11) NOT NULL,
  `id_prodotto` int(11) NOT NULL,
  PRIMARY KEY (`id_dettaglioordine`),
  KEY `fk_prodotto_idx` (`id_prodotto`),
  CONSTRAINT `fk_ordine` FOREIGN KEY (`id_dettaglioordine`) REFERENCES `carrello` (`id_ordine`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_prodotto` FOREIGN KEY (`id_prodotto`) REFERENCES `prodotti` (`cod_prodotto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dettaglio_carrello`
--

LOCK TABLES `dettaglio_carrello` WRITE;
/*!40000 ALTER TABLE `dettaglio_carrello` DISABLE KEYS */;
/*!40000 ALTER TABLE `dettaglio_carrello` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodotti`
--

DROP TABLE IF EXISTS `prodotti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodotti` (
  `cod_prodotto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `descrizione` varchar(300) DEFAULT NULL,
  `taglia` varchar(3) NOT NULL,
  `colore` varchar(20) DEFAULT NULL,
  `prezzo` float NOT NULL,
  `immagine` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_prodotto`),
  UNIQUE KEY `id_prodotti_UNIQUE` (`cod_prodotto`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodotti`
--

LOCK TABLES `prodotti` WRITE;
/*!40000 ALTER TABLE `prodotti` DISABLE KEYS */;
INSERT INTO `prodotti` VALUES (1,'sneakers white','sneakers','Scarpa bassa in pelle stringata, con inserti in camoscio.','38','bianco',45,'sneakers_white.jpg'),(2,'sneakers finto pelo','sneakers','Scarpa bassa in pelle, easy-on con finto pelo all\'interno.','36','nero',39.95,'sneakers_black.jpg'),(3,'zeppa rafia stringata fiori','sandali','Sandalo con zeppa con stringhe in tessuto a fandtasia floreale.','39','misto',49.95,'sandalo_fiori.jpg'),(4,'blucher piattaforma tessuto','scarpe basse','Scarpa chiusa, stringata in tessuto.','37','blu',39.95,'bassa_blu.jpg'),(5,'scarpa bassa pelle punta','scarpe basse','Scarpa bassa a punta, in pelle.','38','beige',49.95,'bassa_pelle.jpg'),(6,'scarpa tacco velluto','tacchi','Scarpa col tacco a stiletto, 7cm, in velluto.','36','blue',53,'scarpa_tacco.jpg'),(7,'décolleté raso ricamo perline','tacchi','Scarpa col tacco a stiletto, 10 cm. Ricamato, con perline','39','giallo',57.95,'scarpa_gialla.jpg');
/*!40000 ALTER TABLE `prodotti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utenti`
--

DROP TABLE IF EXISTS `utenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utenti` (
  `nome` varchar(45) NOT NULL,
  `cognome` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `indirizzo` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utenti`
--

LOCK TABLES `utenti` WRITE;
/*!40000 ALTER TABLE `utenti` DISABLE KEYS */;
INSERT INTO `utenti` VALUES ('cristian','garretto','salvaci','via sperlinga134','cristian@live.it'),('federica','rossi','shoes1','via toledo 12','fedem@hotmail.it'),('giulia','damanti','CIAO13','VIA GULFI, 169','giulia@gmail.com'),('giulia','damanti','ciao2','via gulfi 169','giuliadam@gmail.com'),('Giulia','D\'Amanti','scarpa2','via Garibaldi1, Torino','giuliadamanti21@gmail.com'),('Valeria','Ancora','scarpa1','via Spoleto 7, Torino','valeria.ancora@gmail.com'),('vincenzo','belli','master1','VIA GULFI, 169','vincenzo@gmail.com');
/*!40000 ALTER TABLE `utenti` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-23 11:01:56
