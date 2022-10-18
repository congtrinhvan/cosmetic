CREATE DATABASE  IF NOT EXISTS `cosmetic_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cosmetic_db`;
-- MySQL dump 10.13  Distrib 8.0.30, for macos12 (x86_64)
--
-- Host: 127.0.0.1    Database: cosmetic_db
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext,
  `category_id` int NOT NULL,
  `status` int DEFAULT NULL,
  `discount_percent` int DEFAULT NULL,
  `discount_price` int DEFAULT NULL,
  `sold_quantity` int DEFAULT NULL,
  `total_quantity` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `category_id_idx` (`category_id`),
  CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'KCN_Skin Aqua',180000,'assets/img/menu/menu-item-1.png','Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.',2,NULL,10,NULL,NULL,NULL),(2,'SON_Romand 01',150000,'assets/img/menu/menu-item-2.jpg','Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.',1,NULL,NULL,50000,NULL,NULL),(3,'Son Lì Shu Uemura Matte OR570',200000,'assets/img/menu/menu-item-3.jpg','Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.',1,NULL,NULL,NULL,NULL,NULL),(4,'Son Thỏi Lì 3CE Vỏ Trong Suốt Red Muse',300000,'assets/img/menu/menu-item-4.jpg','Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.',1,NULL,NULL,NULL,NULL,NULL),(5,'Son Thỏi Lì 3CE Vỏ Trong Suốt',350000,'assets/img/menu/menu-item-5.jpg','Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.',1,NULL,NULL,NULL,NULL,NULL),(6,'Son Thỏi Lì 3CE',265000,'assets/img/menu/menu-item-6.jpg','Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.',1,NULL,NULL,NULL,NULL,NULL),(7,'Son Lì B.O.M My Lipstick',150000,'assets/img/menu/menu-item-7.jpg','Son Môi Lancôme L\'Absolu Rouge Intimatte 3.4g là dòng son thỏi trang điểm môi cao cấp đầy quyền năng có công nghệ độc quyền từ Lancôme. Sắc màu thời thượng, chất son lì mềm mượt với chiết xuất hoa hồng, dưỡng chất Pro-xylane™ và Hyaluronic Acid cho đôi môi ngậm nước, mềm mịn và lên màu cực chuẩn.',1,NULL,NULL,NULL,NULL,NULL),(8,'Son Môi Lancôme L\'Absolu Intimatte 274 Màu Hồng Đất',900000,'assets/img/menu/menu-item-1.png',NULL,1,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-17 21:17:38
