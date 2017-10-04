-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: shoes_shop
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.17.04.1

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodotti`
--

LOCK TABLES `prodotti` WRITE;
/*!40000 ALTER TABLE `prodotti` DISABLE KEYS */;
INSERT INTO `prodotti` VALUES (1,'Sneakers white','sneakers','Scarpa bassa in pelle stringata, con inserti in camoscio.','38','bianco',45,'images/sneakers_white.jpg'),(2,'Sneakers finto pelo','sneakers','Scarpa bassa in pelle, easy-on con finto pelo all\'interno.','36','nero',39.95,'images/sneakers_black.jpg'),(3,'Zeppa fiori','sandali','Sandalo con zeppa con stringhe in tessuto a fandtasia floreale.','39','misto',49.95,'images/sandalo_fiori.jpg'),(4,'Blucher tessuto','scarpe basse','Scarpa chiusa, stringata in tessuto.','37','blu',39.95,'images/bassa_blu.jpg'),(5,'Scarpa pelle punta','scarpe basse','Scarpa bassa a punta, in pelle.','38','beige',49.95,'images/bassa_pelle.jpg'),(6,'Tacco velluto','tacchi','Scarpa col tacco a stiletto, 7cm, in velluto.','36','blue',53,'images/scarpa_tacco.jpg'),(7,'Scarpe perline','tacchi','Scarpa col tacco a stiletto, 10 cm. Ricamato, con perline','39','giallo',57.95,'images/scarpa_gialla.jpg'),(8,'Scarpe vernice','decollete','Scarpa col tacco a stiletto, 10 cm. ','38','beige',75.99,'images/scarpa_tacco2.jpg'),(9,'Archid gold','decollete','Decollete, taccoquadrato gold.','40','bianco',85.89,'images/tacco_quadro.jpg'),(10,'Diegus fine','decollete','Scarpa col tacco a stiletto, 10 cm. ','37','nero',48.99,'images/scarpa_tacco1.jpg'),(11,'Champagne','decollete','Scarpa da cerimonia, stringata.','38','oro',97.99,'images/taccogold.jpg'),(12,'Plateau chic','decollete','Scarpa con plateau, punta tonda','36','blu',49.9,'images/plateau.jpg'),(13,'Lamew','sneakers','Scarpa bassa.','37','oro',68.9,'images/supergagold.jpg'),(14,'Dabble','sandali','Sandalo con tacco quadrato','38','bianco',78.9,'images/sandalo_bianco.jpg'),(15,'Blau','scarpe basse','Mocassino.','39','blu',73.5,'images/mocassino.jpg'),(16,'Nelly Chucca','stivali','Stivaletto coi lacci.','40','beige',149,'images/nellychukka.jpg'),(17,'Lamew','sneakers','Scarpa bassa.','39','argento',68.9,'images/supergasilver.jpg'),(18,'Anna field','stivali','Stivaletto in pelle.','39','nero',139.9,'images/stivaletto.jpg'),(19,'Izabela','sandali','Sandalo col tacco.','38','oro',98.99,'images/sandalogold.jpg'),(20,'Venezuela','scarpe basse','Scarpe basse estive, ideali per lunghe passeggiate.','37','blu',5,'q'),(21,'Scarpe sport','sneakers','Scarpe da tennis, comode e con lacci intercambiabili','36','argento',5,'q'),(22,'Ballerine new','ballerine','Ultimo modello di ballerine in circolazione.','35','beige',5,'q');
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

-- Dump completed on 2017-10-04 10:14:50
