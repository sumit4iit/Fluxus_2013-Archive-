-- MySQL dump 10.11
--
-- Host: 118.139.179.53    Database: fluxreg
-- ------------------------------------------------------
-- Server version	5.0.96-log

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
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reg` (
  `name` varchar(100) default NULL,
  `roll` varchar(10) NOT NULL default '',
  `branch` varchar(100) default NULL,
  `year` varchar(10) default NULL,
  `mobile` varchar(12) default NULL,
  `email` varchar(100) default NULL,
  `committee` varchar(60) default NULL,
  PRIMARY KEY  (`roll`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg`
--

LOCK TABLES `reg` WRITE;
/*!40000 ALTER TABLE `reg` DISABLE KEYS */;
INSERT INTO `reg` VALUES ('Sumit Agrawal','1000101','CSE','III','8349667170','sumit4iit@gmail.com','Logistics'),('Jwalant Shah','1000301','ME','III','8871749707','jwalantshah13@gmail.com','Organizing'),('Rohit Agrawal','1000321','ME','III','9753818887','rohitagrawal1491@gmail.com','Organizing'),('vimal kumar meena ','1000219','EE','III','9713049983','m.vimal0404@gmail.com','Organizing'),('ramesh krishna ','1100220','CSE','II','8871849129','rameshprince.2009@gmail.com','Marketing'),('vishaal varma','1100121','CSE','II','7415169372','vishaalgc@gmail.com','Marketing'),('Nishchay Sharma','1000307','ME','III','8103277251','nishchay.iit@gmail.com','Hospitality'),('sandeep ','1100107','CSE','II','9493874025','sandeepbunny08@gmail.com','Marketing'),('Saurabh Kumar Pandey','1010206','EE','PHD','8871609742','saurabh.rjit@gmail.com','Creative'),('Apoorv Goyal','1000118','CSE','III','8962447275','apoorviiti@gmail.com','Marketing'),('Dharmil Chandarana','1100108','CSE','II','7389154845','dhamu.sport@gmail.com','Organizing'),('Aravind Sagar','1100104','CSE','II','+919826391','aravindsuhruth@gmail.com','Marketing'),('Abhinav Jain','1100101','CSE','II','7389888248','abhinavjain13@gmail.com','Organizing'),('sarthak jagetiya','1100130','CSE','II','9589006158','sarthak.jagetiya@gmail.com','Organizing'),('V Priyan','1100136','CSE','II','7415470018','priyanmuthu@gmail.com','Organizing'),('Sanidhya','1000308','ME','III','7415764064','sanidhyanaikwad@gmail.com','Logistics'),('Namit Agrawa','1200323','ME','I','9589629103','agrawal.namit14@gmail.com','Organizing'),('ARPIT JAIN','1000123','CSE','III','9826084568','arpit0729@gmail.com','Marketing'),('Darshil Babel','1100109','CSE','II','9589628948','darshilbabel3@gmail.com','Organizing'),('vipin','1000216','EE','III','7566656767','vipin06123@gmail.com','Creative'),('CHITTI SANDEEP TEJA','1100309','ME','II','9993553931','me1100309@iiti.ac.in','Organizing'),('Manish Kumar','1000314','ME','III','7415540358','mkpjse7en@gmail.com','Marketing'),('Varad Vyapari','1200339','ME','I','7869333429','varadnasa297@gmail.com','Organizing'),('Venkata Sai Vamsi Penupothu','1100224','EE','II','8871849575','pvsvamsi2009@gmail.com','Organizing'),('gaurav gupta','1200314','ME','I','7354668681','gauravgupta1500@gmail.com','Publicity'),('ojas gupta','1200121','CSE','I','7879964337','ojasgu@gmail.com','Publicity'),('anmol arora','1200103','CSE','I','8085524739','anmolarora6699@gmail.com','Publicity'),('Dhyey Sejpal','1200109','CSE','I','9755270905','dhyeysejpal@gmail.com','Organizing'),('Satya Prakash Gupta','1100131','CSE','II','8962488228','satya8081@gmail.com','Publicity'),('Ramavatar ','1000316','ME','lll','9039166909','ramavatarmeenaiiti@gmail.com','organising'),('vishwas jain','1200139','CSE','I','9993868560','vishwasj8@gmail.com','Organizing'),('Atul Choud','1200308','ME','I','7415650828','a2l.credible@gmail.com','Creative'),('Karthik M','1200215','EE','I','8223023876','kmh4321@gmail.com','Marketing'),('Ishrat Vasid','1200212','EE','I','9589629124','iitvasid@gmail.com','Organizing'),('B KRISHNA CHAITANYA','1200206','EE','I','9993258309','bkchaitan94@gmail.com','Creative'),('santhosh thota','1000233','EE','III','8602531175','santhosh2011@gmail.com','Organizing'),('Shweta Katheria','1200133','CSE','I','9993712088','shwetakatheria@gmail.com','Organizing'),('DIKSHA GOLAIT','1200110','CSE','I','8463822044','gdiksha9414@gmail.com','Logistics'),('PATEL VIKRAM','1200123','CSE','I','9407406690','vikramdpatel95@gmail.com','Publicity'),('Miroojin Bakshi','1200105','CSE','I','8889905437','mbakshi1094@gmail.com','Publicity'),('Kartikeya Upasani','1200114','CSE','I','8359030449','kartikeya1994@gmail.com','Organizing'),('Sayalee Bhanavase','1200130','CSE','I','9407406533','sayalee.333@gmail.com','Logistics'),('Shivani Ghatge','1200112','CSE','I','9407406521','shghatge@gmail.com','Organizing'),('R.Rohini Naik','1200126','CSE','I','9993258176','rohini2908@gmail.com','Organizing'),('M.SRILAKSHMI','1200320','ME','I','9425064770','manchalasrilakshmi@gmail.com','Organizing'),('Deeksha Thadi','1200108','CSE','I','8357044998','dthadi939@gmail.com','Organizing'),('Aneela Bellamkonda','1200107','CSE','I','9407406609','naniiitian@gmail.com','Hospitality'),('G.K. SRAVANTHI','1200313','ME','I','8985027193','keerthana5007031@gmail.com','Hospitality'),('Ajay Trimbake','1200303','ME','I','8602994281','trimbake.ajay@gmail.com','Organizing'),('Aditi kanjolia','1200202','EE','I','8518933230','aditi7kanjolia@gmail.com','Organizing'),('Rahul Kumar','1200230','EE','I','7415466874','shagun12031995@gmail.com','Marketing'),('Nishant Kumar','1200119','CSE','I','9993261470','nishant.khali@gmail.com','Marketing'),('Aman Doshi','1200102','CSE','I','9752579123','amandoshi17@gmail.com','Publicity'),('Gaurav Meena','1200111','CSE','I','8085524406','grvmeena87@gmail.com','Publicity'),('Sahil Mittal','1200329','ME','I','9407406550','spmsahil01.mittal09@gmail.com','Marketing'),('M.MOUNIKA REDDY','1100320','EE','II','9589171575','maddhulamounikareddy@gmail.com','Organizing'),('D.SRI YOGESH','1100112','CSE','II','8962111713','yogeshdorbala@gmail.com','Organizing'),('ashwini','1100219','EE','II','9981034480','ashwinimuthineni.1223@gmail.com','Creative'),('paqvan tarigopu8la','100134','CSE','II','9424594615','tarigopula.pavan@gmail.com','Logistics'),('Neha Tayade','1200219','EE','I','9165993717','coutneha@gmail.com','Publicity'),('Sushmita Pal','1200237','EE','I','8085524473','sushmita101194@gmail.com','Publicity'),('Kanza Naeem','1200214','EE','I','8989442342','kanza.angelic@gmail.com','Publicity'),('HIMANSHU SINGH','1100317','ME','II','8889767228','himanshu9096@gmail.com','Publicity'),('PRATIK JUIKAR','1100318','ME','II','9424819781','me1100318@iiti.ac.in','Publicity'),('Tanmai','1100225','EE','II','9630339317','tanmairaop@gmail.com','Marketing'),('Omkar Kumbhar','1200319','ME','I','9730297206','omkar3010@gmail.com','Organizing'),('Nitin Pawar','1200324','ME','I','9589629042','nitin.pawar73@gmail.com','Organizing'),('Aditya Patwardhan','1000124','CSE','III','9907649647','adityaa@iiti.ac.in','Publicity'),('Keshav Bhala','1200318','ME','I','9589629090','keshav.bhala@yahoo.com','Organizing'),('Shikhar Bansal','1200132','CSE','I','7828469474','bshikhar13131313@gmail.com','Organizing'),('Darshan Tejani','1200135','CSE','I','8305177013','darshantejani007@gmail.com','Organizing'),('chinmayi dhangekar','1200312','ME','I','9407406540','cdhangekar@gmail.com','Creative'),('Rahul Pandya','1200122','CSE','I','9407406634','rjk2399@gmail.com','Organizing'),('VRAJ SHAH','1200131','CSE','I','9407406626','shahvrajparagbhai@gmail.com','Organizing'),('NITISH KUMAR','1200120','CSE','I','9589629180','nkumarbharti795@gmail.com','Marketing'),('Ravi Shankar Bharti','1200128','CSE','I','9407406694','ravishnkr110@gmail.com','Organizing'),('kaushik barodiya','1100117','CSE','II','8103906117','ks.barodiyakaushik@gmail.com','Organizing'),('Vipul Garg','1100238','EE','II','9589177735','vipulg1991@yahoo.com','Publicity'),('Tanmay agrwal','1100333','ME','II','7509035037','tanmayagrawal1@gmail.com','Publicity'),('Juniper Gujral','1200113','CSE','I','8223066551','junipergujral@gmail.com','Organizing'),('Radhakishan','1200125','CSE','I','9407406574','donlyradhe@hotmail.com','Marketing'),('Vivek Tejwani','1100138','CSE','II','9584530997','vivekt.iiti@gmail.com','Organizing'),('G.S.R.Srivatsava','1100213','EE','II','7415897566','vatsava.gsr@gmail.com','Organizing'),('jitendra nagar','1000221','EE','III','7898743301','n.jitu29@gmail.com','Organizing'),('SREEMATHI B','1200334','ME','I','9993261335','sreemathibasker@gmail.com','Marketing'),('Aayushi Malviya','1200101','CSE','I','8962271699','malviyaaayushi@gmail.com','Publicity'),('','','','','','',''),('chandramohan','1200208','EE','I','8085524558','chandramohan0854@gmail.com','Marketing'),('jitendra kumar','1200213','EE','I','8085525296','ee1200213@iiti.ac.in','Marketing'),('garvit agarwal','1200209','EE','I','9589629099','ee1200209@iiti.ac.in','Marketing'),('klsg@#@%','sfs55@$','CSE','II','gae5h@$@%4','gnjogeeg4ge%#','Marketing'),('','sdeye4y','CSE','II','gae5h@$@%4','gnjogeeg4ge%#','Marketing'),('&quot;&quot;','&quot;&quo','CSE','II','gae5h@$@%4','gnjogeeg4ge%#','Marketing'),('Deepak','1100111','CSE','II','7415133281','sattiraju.deepak@gmail.com','Organizing'),('Juhi Naik','1100115','CSE','II','9179639641','juhin.iiti@gmail.com','Organizing'),('T SURYA TEJA','1200136','CSE','I','8085525658','surya.thogaru5@gmail.com','Publicity'),('RISHABH CHAUDHARY','1200231','EE','I','9685331213','rishabhchaudhary16@gmail.com','Organizing'),('KAVYA PUTLURI','1200228','EE','I','9407406536','kavyaputluri@gmail.com','Publicity'),('PRIYAL TRIVEDI','1200227','EE','I','9589628972','trivedi201237@gmail.com','Organizing'),('N.S.Vidyaranya','1200221','EE','I','9407406696','vidyaranya.ns@gmail.com','Organizing'),('Madhulika Deshmukh','1100221','EE','II','9691848169','madhulikadeshmukh333@gmail.com','Organizing'),('Neha Kataria','1100123','CSE','II','8982869082','nehakataria257@gmail.com','Organizing'),('K.J.K.CHAITANYA','1000131','CSE','III','7879781143','chaitukrish93@gmail.com','Organizing'),('M. Karthik Prasad','1000130','CSE','III','9752986988','karthik.prasad4444@gmail.com','Organizing'),('SAI PRANESH RAO . H','1100330','ME','II','7828021502','raopranesh14@gmail.com','Organizing'),('SRIKAANTH SRINIVASAN','1100332','ME','II','8962281693','srikaanth_9994@yahoo.co.in','Organizing'),('Abhishek Prasad','1200201','EE','I','9407406548','pabhishekprasad@gmail.com','Marketing'),('Ameya Bharati','1200203','EE','I','9993258058','','Marketing'),('Maganuru.shivaprasad','1200216','EE','I','9589628952','maganurusivaprasad@gmail.com','Organizing'),('MARDA ABHINAV','1200116','CSE','I','9407406684','abhinav.marda@gmail.com','Publicity'),('Gaurav Kumar Agrawal','1100113','CSE','II','9407975369','gaurav70893@gmail.com','Organizing'),(' V Vinoth ','1100335','ME','II','8871247698','vinoth1993@gmail.com','Organizing'),('Dilkhush Meena','1100210','EE','II','7415496728','dilkhush1992@gmail.com','Hospitality'),('Ishan Patil','1200222','EE','I','8959557738','ishanpatil1994@gmail.com','Publicity'),('vikram vadiraj katti','1200335','ME','I','9981914997','vikramkatti1994@gmail.com','Publicity');
/*!40000 ALTER TABLE `reg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `name` varchar(100) default NULL,
  `insti` varchar(200) default NULL,
  `contact` decimal(10,0) default NULL,
  `email` varchar(200) default NULL,
  `sem` varchar(20) default NULL,
  `branch` varchar(100) default NULL,
  `uid` varchar(100) NOT NULL default '',
  `pass` text,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-31  3:17:04
