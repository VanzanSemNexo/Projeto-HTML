CREATE DATABASE  IF NOT EXISTS `site_receitas` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `site_receitas`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: site_receitas
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `adm_nome` varchar(45) NOT NULL,
  `adm_email` varchar(45) NOT NULL,
  `adm_senha_hash` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin@gmail.com','ac9689e2272427085e35b9d3e3e8bed88cb3434828b43b86fc0596cad4c6e270');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receitas`
--

DROP TABLE IF EXISTS `receitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receitas` (
  `id_receitas` int NOT NULL AUTO_INCREMENT,
  `rec_titulo` varchar(45) NOT NULL,
  `rec_desc` text,
  `rec_ingred` text NOT NULL,
  `rec_prep` text NOT NULL,
  `rec_prep_time` varchar(45) DEFAULT NULL,
  `rec_categ` varchar(45) DEFAULT NULL,
  `rec_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_receitas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receitas`
--

LOCK TABLES `receitas` WRITE;
/*!40000 ALTER TABLE `receitas` DISABLE KEYS */;
INSERT INTO `receitas` VALUES (1,'Pão de Queijo','Delicioso pão de queijo, crocante por fora e macio por dentro','Polvilho doce, queijo minas, leite, óleo, ovos','1. Misture o polvilho, o queijo e o leite. 2. Adicione o óleo e os ovos. 3. Modele e asse em forno pré-aquecido.','30 minutos','Salgados','BANCO DE DADOS SITE RECEITA\receita-imgPAODEQUEIJO.jpeg'),(2,'Bolo de Chocolate','Bolo macio de chocolate, com uma deliciosa cobertura de chocolate','200g de chocolate meio amargo, 1 xícara de manteiga, 2 xícaras de açúcar, 4 ovos, 1 colher de chá de essência de baunilha, 2 xícaras de farinha de trigo, 1/2 xícara de cacau em pó, 1 colher de chá de fermento em pó, 1/2 colher de chá de sal, 1 xícara de leite','1. Preaqueça o forno a 180°C. 2. Derreta o chocolate meio amargo em banho-maria. 3. Em uma tigela grande, misture a manteiga e o açúcar até obter uma consistência cremosa. 4. Adicione os ovos um de cada vez, batendo bem após cada adição. 5. Acrescente a essência de baunilha e o chocolate derretido, misturando bem. 6. Em outra tigela, peneire a farinha de trigo, o cacau em pó, o fermento em pó e o sal. 7. Adicione os ingredientes secos à mistura líquida alternando com o leite, começando e terminando com os ingredientes secos. 8. Despeje a massa em uma forma untada e leve ao forno por aproximadamente 40 minutos ou até que um palito inserido no centro do bolo saia limpo. 9. Retire do forno e deixe esfriar antes de desenformar.','1 hora','Doces','BANCO DE DADOS SITE RECEITA\receita-imgBOLOCHOCO.jpg'),(3,'Pizza de Calabresa','Deliciosa pizza de calabresa com queijo derretido.','Massa de pizza, molho de tomate, calabresa fatiada, queijo muçarela, cebola fatiada, azeitonas, orégano.','Abra a massa em formato de pizza. Espalhe o molho de tomate sobre a massa. Distribua as fatias de calabresa, a cebola e as azeitonas sobre o molho. Cubra com queijo muçarela ralado. Asse em forno preaquecido a 200°C por aproximadamente 15-20 minutos ou até que a pizza esteja dourada. Polvilhe orégano antes de servir.','50 minutos','Salgados','BANCO DE DADOS SITE RECEITA\receita-imgPIZZACALABRESA.jpg');
/*!40000 ALTER TABLE `receitas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-24 16:57:42
