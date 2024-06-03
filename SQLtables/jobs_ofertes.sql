-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: jobs
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ofertes`
--

DROP TABLE IF EXISTS `ofertes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ofertes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titol` varchar(45) NOT NULL,
  `imatge` varchar(45) NOT NULL DEFAULT 'default.jpg',
  `descripcio` varchar(1000) NOT NULL,
  `localitzacio` varchar(45) NOT NULL,
  `salari` int DEFAULT NULL,
  `web` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ofertes`
--

LOCK TABLES `ofertes` WRITE;
/*!40000 ALTER TABLE `ofertes` DISABLE KEYS */;
INSERT INTO `ofertes` VALUES (1,'Desarrotjador Java, Mensoft','mensoft.png','Ets un amant dels productes informatics? Donç en K-tuin estem buscant un perfil com el teu, es esecial oferir una bona atencio al client','Teletreball',NULL,'https://www.infojobs.net/madrid/comercial-tienda-h-m-k-tuin-tiendas-apple./of-i81b947d3ae44e2b6ba4494c890bf37?applicationOrigin=search-new&page=1&sortBy=PUBLICATION_DATE'),(2,'Comercial de botiga, K-TUIN','k-tuin.jpg','Ets un amant dels productes informatics? Donç en K-tuin estem buscant un perfil com el teu, es esecial oferir una bona atencio al client i asesoramen sobre tota la gama de productes d’Apple, serveis i beneficis.','Madrid, Madrid',NULL,'https://www.infojobs.net/madrid/comercial-tienda-h-m-k-tuin-tiendas-apple./of-i81b947d3ae44e2b6ba4494c890bf37?applicationOrigin=search-new&page=1&sortBy=PUBLICATION_DATE'),(3,'Electricista','electricista.jpg','Ens trobem a la busqueda d’un electricista altament capacitat per a unir-se al nostre equip. Serás responsable de realitzar les diverses tasques relatcionades amb l’instalacio i manteniment de sistemes electronics a edificis.','Marbella, Malaga',20000,'https://www.infojobs.net/marbella/electricista/of-i41a1e6305142119c1469082afd6358?applicationOrigin=search-new&page=1&sortBy=PUBLICATION_DATE'),(4,'Repartidor de pizzes','QSR.png','Vols ser repartidor o auxiliar de cuina? Uneix-te al nostre equip! Oferim moto de empresa, jornada de 12h setmanals, contracte indefinit a temps parcial i la posibilitat del teu desenvolupament dins la empresa.','Bilbao, Vizcaya',7200,'https://www.infojobs.net/bilbao/repartidores-telepizza-bizkaia/of-i8c31d546ee477e8220e0dc7b8d7447?applicationOrigin=search-new&page=2&sortBy=PUBLICATION_DATE'),(5,'Perruquer/a','perruquer.jpg','Busquem a un oficial de perruqueria unisex i infantil. Els requisits esencials son el de domini del color, mechas, corte tant de dona com d’home, peinat i recollits. Es valoran positivament les habilitats de comunicació així com coneixements de coloracio.','Madrid, Madrid',18000,'https://www.infojobs.net/madrid/peluquero/of-i026536ab3f460fa2496854bbbe9e32?applicationOrigin=search-new&page=2&sortBy=PUBLICATION_DATE');
/*!40000 ALTER TABLE `ofertes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-02 11:27:30
