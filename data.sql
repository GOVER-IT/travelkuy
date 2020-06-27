-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: dode
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `bed`
--

DROP TABLE IF EXISTS `bed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bed` (
  `id_bed` tinyint(4) NOT NULL AUTO_INCREMENT,
  `bed_nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id_bed`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bed`
--

LOCK TABLES `bed` WRITE;
/*!40000 ALTER TABLE `bed` DISABLE KEYS */;
INSERT INTO `bed` VALUES (1,'1 Single Bed'),(2,'2 Single Bed'),(3,'1 Double Bed'),(4,'3 Single Bed');
/*!40000 ALTER TABLE `bed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinasi`
--

DROP TABLE IF EXISTS `destinasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinasi`
--

LOCK TABLES `destinasi` WRITE;
/*!40000 ALTER TABLE `destinasi` DISABLE KEYS */;
INSERT INTO `destinasi` VALUES (32,'Pura Luhur Uluwatu','Jl. Raya Uluwatu Pecatu','Pura Luhur Uluwatu atau Pura Uluwatu merupakan pura yang berada di wilayah Desa Pecatu, Kecamatan Kuta, Badung. Pura yang terletak di ujung barat daya pulau Bali di atas anjungan batu karang yang terjal dan tinggi serta menjorok ke laut ini merupakan Pura Sad Kayangan yang dipercaya oleh orang Hindu sebagai penyangga dari 9 mata angin. Pura ini pada mulanya digunakan menjadi tempat memuja seorang pendeta suci dari abad ke-11 bernama Empu Kuturan. Ia menurunkan ajaran Desa Adat dengan segala aturannya. Pura ini juga dipakai untuk memuja pendeta suci berikutnya, yaitu Dang Hyang Nirartha, yang datang ke Bali pada akhir tahun 1550 dan mengakhiri perjalanan sucinya dengan apa yang dinamakan Moksa atau Ngeluhur di tempat ini. Kata inilah yang menjadi asal nama Pura Luhur Uluwatu. Pura Uluwatu terletak pada ketinggian 97 meter dari permukaan laut. Di depan pura terdapat hutan kecil yang disebut alas kekeran, berfungsi sebagai penyangga kesucian pura.','01062020103808Uluwatu.jpg'),(33,'Tanah Lot','Beraban, Kec. Kediri, Kabupaten Tabanan, Bali','Pura Tanah Lot adalah salah satu Pura yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan. Pura Tanah Lot merupakan pura laut tempat pemujaan dewa-dewa penjaga laut. Tanah Lot terkenal sebagai tempat yang indah untuk melihat matahari terbenam','01062020105049tanahlot.jpg'),(35,'Patung Garuda Wisnu Kencana','Jl. Raya Uluwatu, Ungasan, Kec. Kuta Sel., Kabupaten Badung, Bali','Patung Garuda Wisnu Kencana berlokasi di Bukit Unggasan - Jimbaran, Bali. Patung ini berdiri menjulang di dalam kompleks Taman Budaya Garuda Wisnu Kencana dan merupakan karya pematung terkenal Bali, I Nyoman Nuarta. Monumen ini dikembangkan sebagai taman budaya dan menjadi ikon bagi pariwisata Bali dan Indonesia. Patung tersebut berwujud Dewa Wisnu yang dalam agama Hindu adalah Dewa Pemelihara, mengendarai burung Garuda. Tokoh Garuda dapat dilihat di kisah Garuda & Kerajaannya yang berkisah mengenai rasa bakti dan pengorbanan burung Garuda untuk menyelamatkan ibunya dari perbudakan yang akhirnya dilindungi oleh Dewa Wisnu. Patung ini diproyeksikan untuk mengikat tata ruang dengan jarak pandang sampai dengan 20 km sehingga dapat terlihat dari Kuta, Sanur, Nusa Dua hingga Tanah Lot. Patung Garuda Wisnu Kencana ini merupakan simbol dari misi penyelamatan lingkungan dan dunia.','01062020122327gwk-bali-1024x1024.jpg');
/*!40000 ALTER TABLE `destinasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservasi`
--

DROP TABLE IF EXISTS `reservasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `id_tipe` tinyint(4) NOT NULL,
  `id_bed` tinyint(4) NOT NULL,
  `dewasa` tinyint(4) NOT NULL,
  `anakanak` tinyint(4) NOT NULL,
  `preferance` enum('smoking','non smoking') NOT NULL,
  PRIMARY KEY (`id_reservasi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservasi`
--

LOCK TABLES `reservasi` WRITE;
/*!40000 ALTER TABLE `reservasi` DISABLE KEYS */;
INSERT INTO `reservasi` VALUES (1,'','','','0000-00-00','0000-00-00',0,0,0,127,''),(2,'Pocong pengkolan','','','2020-06-20','2020-06-01',0,0,99,99,''),(3,'Gede','','','2020-06-08','2020-06-30',0,0,4,3,''),(4,'Aditya','','','2020-06-14','2020-06-23',0,0,1,2,''),(5,'Aditya','','','2020-06-14','2020-06-23',0,0,1,2,''),(6,'Aditya','','','2020-06-14','2020-06-23',0,0,1,2,'');
/*!40000 ALTER TABLE `reservasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipe_kamar`
--

DROP TABLE IF EXISTS `tipe_kamar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipe_kamar` (
  `id_tipe` tinyint(4) NOT NULL AUTO_INCREMENT,
  `tipe_kamar` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_tipe`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipe_kamar`
--

LOCK TABLES `tipe_kamar` WRITE;
/*!40000 ALTER TABLE `tipe_kamar` DISABLE KEYS */;
INSERT INTO `tipe_kamar` VALUES (1,'Superior Room',800000),(2,'Deluxe Room',1000000),(3,'Junior Suite',1200000),(4,'Executive Suite',1400000),(5,'Deluxe Royal Room',1100000),(6,'Junior Suite Royal',2100000),(7,'Executive Suite Royal',2500000),(8,'Diplomatic Suite',3750000),(9,'Presidential Suite',5000000);
/*!40000 ALTER TABLE `tipe_kamar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin','Satria Wiguna','admin','satria.wiguna.1660@gmail.com','085935024555','Br. Umahanya, Penarungan');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-27 21:10:36
