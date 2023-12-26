-- MySQL dump 10.13  Distrib 8.1.0, for Linux (x86_64)
--
-- Host:     Database: sman_5_malang
-- ------------------------------------------------------
-- Server version       8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_number` bigint unsigned NOT NULL,
  `name` text NOT NULL,
  `role_name` text NOT NULL,
  `address` text NOT NULL,
  `last_edu` text NOT NULL,
  `teaching_history` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employee_UN` (`employee_number`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,198305162019211000,'Dr. Agus Santoso','Kepala Sekolah','Jl. Kartini No. 123, Malang','S3','Bahasa Belanda'),(2,198305162019211002,'Dewi Wijaya, M.Pd','Wakil Kepala Sekolah','Jl. Diponegoro No. 45, Malang','S2','Matematika, Fisika'),(3,198305162019211003,'Budi Prasetyo, M.Pd','Waka Sarpras','Jl. Gajah Mada No. 78, Malang','S2','Fisika, Matematika, Kimia'),(4,198305162019211004,'Citra Handayani, M.Pd','Waka Sarpras','Jl. Asia Afrika No. 56, Malang','S2','Bahasa Inggris, Bahasa Indonesia, Pendidikan Kewarganegaraan'),(5,198305162019211005,'Eko Setiawan, S.Pd','Waka Humas','Jl. Candi Ijo No. 34, Malang','S1','Kimia, Fisika, Matematika'),(6,198305162019211006,'Fani Pratiwi, S.Pd','Waka Humas','Jl. Candi Merak No. 89, Malang','S1','Pendidikan Agama Islam, Pendidikan Pancasila, Bahasa Arab'),(7,198305162019211007,'Gunawan Wicaksono, ST','Staff','Jl. Veteran No. 12, Malang','S1','-'),(8,198305162019211008,'Hani Kusuma, S.Pd','Guru Honorer','Jl. S. Parman No. 67, Malang','S1','Bahasa Indonesia, Sastra Indonesia, Bahasa Jawa'),(9,198305162019211009,'Ibrahim Widodo, S.Pd','Guru Honorer','Jl. Danau Toba No. 90, Malang','S1','Sejarah, Pendidikan Kewarganegaraan, Geografi'),(10,198305162019211010,'Juwita Handayani, M.Pd','Guru Honorer','Jl. Soekarno No. 21, Malang','S2','Pendidikan Kewarganegaraan, Bahasa Indonesia, Sejarah'),(11,198305162019211011,'Kusuma Wijaya, S.Pd','Guru Tetap','Jl. Gatot Subroto No. 43, Malang','S1','Matematika, Fisika, Kimia'),(12,198305162019211012,'Lina Dewi, M.Pd','Guru Tetap','Jl. KH. Agus Salim No. 76, Malang','S2','Biologi, Kimia, Fisika'),(13,198305162019211013,'Mulyono Santoso, S.Pd','Guru Tetap','Jl. Taman Makam Pahlawan No. 54, Malang','S1','Fisika, Matematika, Kimia'),(14,198305162019211014,'Nina Sari, S.Pd','Guru Tetap','Jl. Mayjen Sungkono No. 32, Malang','S1','Bahasa Inggris, Bahasa Indonesia, Sastra Inggris'),(15,198305162019211015,'Oscar Wijaya, S.Pd','Guru Tetap','Jl. Kawi No. 65, Malang','S1','Kimia, Fisika, Matematika'),(16,198305162019211016,'Putri Anggraini, S.Pd','Guru Tetap','Jl. Pangeran Diponegoro No. 87, Malang','S1','Pendidikan Agama Islam, Pendidikan Pancasila, Bahasa Arab'),(17,198305162019211017,'Rizal Pratama, S.Pd','Guru Honorer','Jl. Raya Bromo No. 78, Malang','S1','Pendidikan Jasmani, Pendidikan Kesehatan, Pendidikan Pancasila'),(18,198305162019211018,'Sari Indah, M.Pd','Guru Tetap','Jl. Raya Karangkates No. 43, Malang','S2','Bahasa Indonesia, Sastra Indonesia, Bahasa Jawa'),(19,198305162019211019,'Taufik Hidayat, S.Pd','Guru Tetap','Jl. Raya Batu No. 21, Malang','S1','Sejarah, Pendidikan Kewarganegaraan, Geografi'),(20,198305162019211020,'Umi Kartika, M.Pd','Guru Tetap','Jl. Raya Tumpang No. 56, Malang','S2','Pendidikan Kewarganegaraan, Bahasa Indonesia, Sejarah'),(21,198305162019211021,'Vino Pratama, S.Pd','Guru Tetap','Jl. Raya Singosari No. 32, Malang','S1','Matematika, Fisika, Kimia'),(22,198305162019211022,'Wati Fitriani, M.Pd','Guru Tetap','Jl. Raya Dampit No. 67, Malang','S2','Biologi, Kimia, Fisika'),(23,198305162019211023,'Xavier Wijaya, M.Pd','Guru Tetap','Jl. Raya Pakisaji No. 43, Malang','S2','Fisika, Matematika, Kimia'),(24,198305162019211024,'Yanti Rahayu, S.Pd','Guru Tetap','Jl. Raya Sumberpucung No. 21, Malang','S1','Bahasa Inggris, Bahasa Indonesia, Sastra Inggris'),(25,198305162019211025,'Zainab Hasanah, S.Pd','Staff','Jl. Raya Ngantang No. 65, Malang','S1','-'),(32,198305162019211029,'Djoko Santoso, S.Psi','Staff','Jl. Kartini No. 13, Malang','S1','-'),(34,198305162019211044,'Cahyo Setiawan, S.M','Staff','Jl. Gajah Mada No. 8, Malang','S1','-'),(35,100000000000000002,'Dr. Cristiano Ronaldo M.M','Waka Kesiswaan','Jl. Madrid Kec. Barcelona','D2','Pendidikan Olahraga, Seni Budaya'),(36,100000000000000033,'Sayyid','Keamanan','Jl. Pattimura 88, Malang','SLTA','-'),(37,100000000000000099,'Amat','Kebersihan','Jl. Husainudin 12, Malang','SLTA','-');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msgs_n_impressions`
--

DROP TABLE IF EXISTS `msgs_n_impressions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `msgs_n_impressions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `class` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `message` text NOT NULL,
  `impression` text NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msgs_n_impressions`
--

LOCK TABLES `msgs_n_impressions` WRITE;
/*!40000 ALTER TABLE `msgs_n_impressions` DISABLE KEYS */;
INSERT INTO `msgs_n_impressions` VALUES (1,'13 Seni Budaya 9','Nasi Goreng Pedes','Mantap','Asep Surasep'),(2,'XII IPA 1','Baru aja nyampe kelas XII IPA 1, seru banget!','Matematika hari ini seru abis! Semoga bisa terus begini','Rizky'),(3,'XI IPS 2','Gue suka banget sama atmosfer sekolah ini, enak banget!','Belajar di sini berasa beda, asik!','Nadia'),(4,'X IPA 3','Terima kasih buat semua guru yang udah ngajarin gue','Ekskul di sini keren, banyak kegiatannya','Ahmad Fauzi'),(5,'XII IPS 4','Fisika emang bikin pusing, tapi seru juga sih','Ekstrakurikuler di sini seru banget, gue ketagihan','Dewi'),(6,'XI IPA 5','Belajar online kadang bikin bosen, tapi manageable lah','Perpustakaannya keren, bisa fokus banget','Hendra'),(7,'X IPS 6','Sejarah gue ga se-\"horor\" yang dibayangkan','Lomba sekolah kemaren asik banget!','Siti Rahayu'),(8,'XII IPA 7','Belajar dari rumah lebih fleksibel, bisa sambil makan snack','Olahraga di sini seru, suka banget','Andika'),(9,'XI IPS 8','Bahasa Inggris tuh gue masih belepotan, hehe','Seni di sini kreatif banget, keren!','Aisyah'),(10,'X IPA 9','Guru-guru di sini keren banget, dukung terus!','Suasana kelas enak, banyak tawa','Farhan'),(11,'XII IPS 10','Teman-teman gue solid abis, asik banget','Lomba kebersihan kemaren sukses!','Dina'),(12,'XI IPA 11','Metode pengajaran gue suka banget, mudah dipahami','Acara musik kemaren seru banget!','Reza'),(13,'X IPS 12','Prestasi ekstrakurikuler jadi kebanggaan gue','Guru BK di sini kocak abis, bikin adem','Rina'),(14,'XII IPA 13','Belajar mandiri seru juga, bisa ngatur waktunya','Program mentoringnya bermanfaat banget','Irfan'),(15,'XI IPS 14','Kimia beneran bikin pala gue puyeng','Kebersihan lingkungan di sini oke banget','Maya'),(16,'X IPA 15','Dukung program literasi, bacanya sambil ngopi','Pembimbing akademiknya baik banget, thanks!','Bagus'),(17,'11 IPA 4','Terimkasih','Maaf','Asrofil Fachrul Riidlo'),(18,'10 Bahasa 1','Siuuuuu','Mantap','Lionel Messi');
/*!40000 ALTER TABLE `msgs_n_impressions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'ADMIN'),(2,'STAFF'),(3,'STUDENT'),(4,'TEACHER'),(5,'LAIN-LAIN');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_number` int NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `entry_year` year NOT NULL,
  `prev_school_name` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_UN` (`student_number`)
) ENGINE=InnoDB AUTO_INCREMENT=404 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,14849,'Asrofil Fachrul Riidlo','Jl. Swadaya IX Jakarta Timur',2017,'SMPN 8 Jakarta'),(2,14567,'Ahmad Ali','Jl. Merdeka No. 123, Malang',2014,'SMP Negeri 1 Malang'),(3,15432,'Dewi Putri','Jl. Pahlawan No. 45, Malang',2015,'SMP Negeri 2 Malang'),(4,16123,'Budi Santoso Tjahjo','Jl. Diponegoro No. 78, Malang',2016,'SMP Negeri 5 Malang'),(5,17589,'Citra Permana','Jl. Gajah Mada No. 56, Malang',2017,'SMP Negeri 4 Malang'),(6,16456,'Eko Prabowo','Jl. Asia Afrika No. 34, Malang',2018,'SMP Negeri 5 Malang'),(7,17234,'Fani Putra','Jl. Candi Ijo No. 89, Malang',2019,'SMP Negeri 6 Malang'),(8,16890,'Gunawan Setiawan','Jl. Veteran No. 12, Malang',2020,'SMP Negeri 7 Malang'),(9,14678,'Hani Kusuma','Jl. S. Parman No. 67, Malang',2014,'SMP Negeri 8 Malang'),(10,15987,'Ibrahim Widodo','Jl. Danau Toba No. 90, Malang',2015,'SMP Negeri 9 Malang'),(11,16345,'Juwita Handayani','Jl. Soekarno No. 21, Malang',2016,'SMP Negeri 10 Malang'),(12,17890,'Kusuma Wijaya','Jl. Gatot Subroto No. 43, Malang',2017,'SMP Negeri 11 Malang'),(13,16789,'Lina Dewi','Jl. KH. Agus Salim No. 76, Malang',2018,'SMP Negeri 12 Malang'),(14,15321,'Mulyono Santoso','Jl. Taman Makam Pahlawan No. 54, Malang',2019,'SMP Negeri 13 Malang'),(15,14876,'Nina Sari','Jl. Mayjen Sungkono No. 32, Malang',2020,'SMP Negeri 14 Malang'),(16,15789,'Oscar Wijaya','Jl. Kawi No. 65, Malang',2014,'SMP Negeri 15 Malang'),(17,16543,'Putri Anggraini','Jl. Pangeran Diponegoro No. 87, Malang',2015,'SMP Negeri 16 Malang'),(18,17123,'Rizal Pratama','Jl. Raya Bromo No. 78, Malang',2016,'SMP Negeri 17 Malang'),(19,17456,'Sari Indah','Jl. Raya Karangkates No. 43, Malang',2017,'SMP Negeri 18 Malang'),(20,15678,'Taufik Hidayat','Jl. Raya Batu No. 21, Malang',2018,'SMP Negeri 19 Malang'),(21,16098,'Umi Kartika','Jl. Raya Tumpang No. 56, Malang',2019,'SMP Negeri 20 Malang'),(22,16342,'Vino Pratama','Jl. Raya Singosari No. 32, Malang',2020,'SMP Negeri 21 Malang'),(23,15876,'Wati Fitriani','Jl. Raya Dampit No. 67, Malang',2014,'SMP Negeri 22 Malang'),(24,15123,'Xavier Wijaya','Jl. Raya Pakisaji No. 43, Malang',2015,'SMP Negeri 23 Malang'),(25,16234,'Yanti Rahayu','Jl. Raya Sumberpucung No. 21, Malang',2016,'SMP Negeri 24 Malang'),(26,17987,'Zainab Hasanah','Jl. Raya Ngantang No. 65, Malang',2017,'SMP Negeri 25 Malang'),(377,14167,'Rudi Hermawan','Jl. Kertanegara No. 56, Malang',2015,'SMP Negeri 26 Malang'),(378,15234,'Siti Nurhayati','Jl. Kawi No. 89, Malang',2016,'SMP Negeri 27 Malang'),(379,16321,'Rahmat Hidayat','Jl. Raden Saleh No. 43, Malang',2017,'SMP Negeri 28 Malang'),(380,17189,'Dian Pratama','Jl. Majapahit No. 21, Malang',2018,'SMP Negeri 29 Malang'),(381,16089,'Lina Anggraini','Jl. Airlangga No. 76, Malang',2019,'SMP Negeri 30 Malang'),(382,15232,'Hendra Wijaya','Jl. Diponegoro No. 32, Malang',2020,'SMP Negeri 31 Malang'),(383,16090,'Linda Sari','Jl. Gatot Subroto No. 12, Malang',2014,'SMP Negeri 32 Malang'),(384,16176,'Fahmi Santoso','Jl. Panglima Sudirman No. 67, Malang',2015,'SMP Negeri 33 Malang'),(385,15587,'Maya Indriani','Jl. Raya Sengkaling No. 43, Malang',2016,'SMP Negeri 34 Malang'),(386,17654,'Adi Nugroho','Jl. Tlogomas No. 56, Malang',2017,'SMP Negeri 35 Malang'),(388,15221,'Rizky Pratama','Jl. Diponegoro No. 54, Malang',2019,'SMP Negeri 37 Malang'),(389,14478,'Sari Fitriani','Jl. Asia Afrika No. 32, Malang',2020,'SMP Negeri 38 Malang'),(390,16143,'Bambang Suryono','Jl. Mayjen Sungkono No. 65, Malang',2014,'SMP Negeri 39 Malang'),(391,17034,'Rina Kusuma','Jl. S. Parman No. 21, Malang',2015,'SMP Negeri 40 Malang'),(392,16956,'Galih Setiawan','Jl. Soekarno-Hatta No. 87, Malang',2016,'SMP Negeri 41 Malang'),(393,15023,'Nina Pratiwi','Jl. Veteran No. 43, Malang',2017,'SMP Negeri 42 Malang'),(394,15800,'Yoga Ramadhan','Jl. Danau Toba No. 65, Malang',2018,'SMP Negeri 43 Malang'),(395,16085,'Ratna Sari','Jl. Raya Batu No. 54, Malang',2019,'SMP Negeri 44 Malang'),(396,15792,'Arief Wijaya','Jl. Tlogowaru No. 21, Malang',2020,'SMP Negeri 45 Malang'),(397,16829,'Eva Widianti','Jl. Sukarno-Hatta No. 32, Malang',2014,'SMP Negeri 46 Malang'),(399,15294,'Nisa Indah','Jl. Candi No. 12, Malang',2016,'SMP Negeri 48 Malang'),(400,14676,'Bima Pratama','Jl. Pangeran Diponegoro No. 43, Malang',2017,'SMP Negeri 49 Malang'),(401,17245,'Desi Nurhayati','Jl. Kawi No. 21, Malang',2018,'SMP Negeri 50 Malang');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fullname` text,
  `role_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_FK` (`role_id`),
  CONSTRAINT `users_FK` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','$2y$10$alUPQnvOFrS.fpdTtbzLIuvvCDVf49ifsgC3Ni49o16BW5bkaAjG6','Admin',1),(3,'anyafachri','$2y$10$wNB7yDa5Jwzqowudkr.f.urvH9iiKz0LBey2X.0jsF8Fq0fodZXiC','Asrofil Fachrul Riidlo',3),(4,'ahmadali','$2y$10$0tNg6Q6YWQB2Q1Taz2tJ/OUMAF0Zrwrcrvgj4dgWVRhoz5nAvXjzG','Ahmad Ali',3);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sman_5_malang'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-26 14:30:11
