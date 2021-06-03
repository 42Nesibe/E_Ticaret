# Host: localhost  (Version 5.7.17-log)
# Date: 2020-05-30 23:11:02
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "admin_panel"
#

DROP TABLE IF EXISTS `admin_panel`;
CREATE TABLE `admin_panel` (
  `admin_panel_iD` int(11) NOT NULL AUTO_INCREMENT,
  `k_adi` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adi` varchar(255) DEFAULT NULL,
  `soyadi` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `durum` int(6) DEFAULT NULL,
  `statu` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_panel_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "admin_panel"
#

/*!40000 ALTER TABLE `admin_panel` DISABLE KEYS */;
INSERT INTO `admin_panel` VALUES (1,'admin','81dc9bdb52d04dc20036dbd8313ed055','sirintprk21@gmail.com','Şirin','TOPRAK','2020-04-29 16:38:57',NULL,NULL,'5ea986c52888a.png','facebook','twitter','google');
/*!40000 ALTER TABLE `admin_panel` ENABLE KEYS */;

#
# Structure for table "cok_satilan"
#

DROP TABLE IF EXISTS `cok_satilan`;
CREATE TABLE `cok_satilan` (
  `cok_satilan_iD` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cok_satilan_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "cok_satilan"
#

/*!40000 ALTER TABLE `cok_satilan` DISABLE KEYS */;
INSERT INTO `cok_satilan` VALUES (1,'1'),(2,'3'),(3,'4');
/*!40000 ALTER TABLE `cok_satilan` ENABLE KEYS */;

#
# Structure for table "iletisim"
#

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE `iletisim` (
  `iletisim_iD` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adres` text,
  `foto` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `enlem` varchar(255) DEFAULT NULL,
  `boylam` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iletisim_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "iletisim"
#

/*!40000 ALTER TABLE `iletisim` DISABLE KEYS */;
INSERT INTO `iletisim` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `iletisim` ENABLE KEYS */;

#
# Structure for table "kategori"
#

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `kategori_iD` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kategori_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "kategori"
#

/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (2,'Yemek Kitapları','yemek-kitaplari','1'),(3,'Bilgisayar Kitapları','bilgisayar-kitaplari','1'),(4,'Romanlar','romanlar','1');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

#
# Structure for table "log"
#

DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `log_iD` int(11) NOT NULL AUTO_INCREMENT,
  `log.tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `islem` text,
  `islemi_yapan` varchar(255) DEFAULT NULL,
  `islem_yapilan_ip` varchar(255) DEFAULT NULL,
  `k_id` varchar(255) DEFAULT NULL,
  `gorunum` varchar(255) DEFAULT '0',
  PRIMARY KEY (`log_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "log"
#

/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (1,'2020-05-24 22:57:40','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(2,'2020-05-24 23:03:45','sirin kullanıcısı çıkış yaptı.','sirin','127.0.0.1',NULL,'0'),(3,'2020-05-24 23:04:25','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(4,'2020-05-25 20:34:32','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(5,'2020-05-26 14:39:57','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(6,'2020-05-26 14:42:44','sirin kullanıcısı çıkış yaptı.','sirin','127.0.0.1',NULL,'0'),(7,'2020-05-26 14:43:49','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(8,'2020-05-26 14:44:03','sirin kullanıcısı çıkış yaptı.','sirin','127.0.0.1',NULL,'0'),(9,'2020-05-26 14:46:38','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(10,'2020-05-26 14:52:06','sirin kullanıcısı çıkış yaptı.','sirin','127.0.0.1',NULL,'0'),(11,'2020-05-26 14:53:43','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(12,'2020-05-26 21:18:58','cihan kullanıcısı giriş yaptı.','cihan','127.0.0.1',NULL,'0'),(13,'2020-05-26 21:28:19','cihan kullanıcısı çıkış yaptı.','cihan','127.0.0.1',NULL,'0'),(14,'2020-05-26 21:29:37','cihan kullanıcısı giriş yaptı.','cihan','127.0.0.1',NULL,'0'),(15,'2020-05-27 23:53:11','cihan kullanıcısı giriş yaptı.','cihan','127.0.0.1',NULL,'0'),(16,'2020-05-28 00:06:15','cihan kullanıcısı çıkış yaptı.','cihan','127.0.0.1',NULL,'0'),(17,'2020-05-28 00:06:34','cihan kullanıcısı giriş yaptı.','cihan','127.0.0.1',NULL,'0'),(18,'2020-05-28 00:08:05','cihan kullanıcısı çıkış yaptı.','cihan','127.0.0.1',NULL,'0'),(19,'2020-05-28 00:08:23','cihan kullanıcısı giriş yaptı.','cihan','127.0.0.1',NULL,'0'),(20,'2020-05-28 00:27:42','cihan kullanıcısı giriş yaptı.','cihan','127.0.0.1',NULL,'0'),(21,'2020-05-28 01:20:44','cihan kullanıcısı çıkış yaptı.','cihan','127.0.0.1',NULL,'0'),(22,'2020-05-28 23:18:39','admin kullanıcısı giriş yaptı.','admin','127.0.0.1','1','0'),(23,'2020-05-28 23:46:44','admin kullanıcısı giriş yaptı.','admin','127.0.0.1','1','0'),(24,'2020-05-28 23:59:38','admin kullanıcısı giriş yaptı.','admin','127.0.0.1','1','0'),(25,'2020-05-29 00:20:34','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(26,'2020-05-29 00:49:22','admin adlı   adlı slider verilerini güncelledi.','admin','127.0.0.1',NULL,'0'),(27,'2020-05-29 00:54:46','admin adlı   adlı slider verilerini güncelledi.','admin','127.0.0.1','1','0'),(28,'2020-05-29 00:55:19','admin adlı   adlı slider verilerini güncelledi.','admin','127.0.0.1','1','0'),(29,'2020-05-29 00:55:25','admin  tarafından   adlı slider silinmiştir.','admin','127.0.0.1','1','0'),(30,'2020-05-29 00:55:42','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(31,'2020-05-29 00:55:57','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(32,'2020-05-29 01:15:13','admin kullanıcısı giriş yaptı.','admin','127.0.0.1','1','0'),(33,'2020-05-29 01:15:34','admin adlı  Yazılım algotirması adlı ürün verilerini güncelledi.','admin','127.0.0.1','4','0'),(34,'2020-05-29 01:27:25','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(35,'2020-05-29 01:27:33','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(36,'2020-05-29 01:27:43','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(37,'2020-05-29 01:27:50','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(38,'2020-05-29 01:28:04','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(39,'2020-05-29 01:28:12','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(40,'2020-05-29 01:28:19','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(41,'2020-05-29 01:28:29','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(42,'2020-05-29 01:28:49','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(43,'2020-05-29 01:29:40','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(44,'2020-05-29 01:29:58','admin  tarafından   adlı ürün silinmiştir.','admin','127.0.0.1','1','0'),(45,'2020-05-29 01:30:42','admin  tarafından   adlı bilgi bölümü güncellendi.','admin','127.0.0.1','1','0'),(46,'2020-05-29 01:32:07','admin adlı  Nefis Yemek Tarifleri  adlı ürün verilerini güncelledi.','admin','127.0.0.1','1','0'),(47,'2020-05-29 01:32:19','admin adlı  Arda\'nın Mutfağı adlı ürün verilerini güncelledi.','admin','127.0.0.1','3','0'),(48,'2020-05-29 01:33:01','admin adlı  Yazılım algotirması adlı ürün verilerini güncelledi.','admin','127.0.0.1','4','0'),(49,'2020-05-29 01:35:21','admin adlı  Nefis Yemek Tarifleri  adlı ürün verilerini güncelledi.','admin','127.0.0.1','1','0'),(50,'2020-05-29 01:37:48','admin adlı  Yazılım algotirması adlı ürün verilerini güncelledi.','admin','127.0.0.1','4','0'),(51,'2020-05-29 01:39:27','admin adlı  Arda\'nın Mutfağı adlı ürün verilerini güncelledi.','admin','127.0.0.1','3','0'),(52,'2020-05-29 01:41:45','admin adlı  Yazılım algotirması adlı ürün verilerini güncelledi.','admin','127.0.0.1','4','0'),(53,'2020-05-29 01:43:10','admin adlı  Yazılım algotirması adlı ürün verilerini güncelledi.','admin','127.0.0.1','4','0'),(54,'2020-05-29 21:41:34','admin kullanıcısı giriş yaptı.','admin','127.0.0.1','1','0'),(55,'2020-05-29 21:43:29','admin adlı  Yazılım algotirması adlı ürün verilerini güncelledi.','admin','127.0.0.1','4','0'),(56,'2020-05-29 22:38:05','admin adlı  Nefis Yemek Tarifleri  adlı ürün verilerini güncelledi.','admin','127.0.0.1','1','0'),(57,'2020-05-29 22:40:25','admin adlı  Nefis Yemek Tarifleri  adlı ürün verilerini güncelledi.','admin','127.0.0.1','1','0'),(58,'2020-05-29 22:40:37','admin adlı  Arda\'nın Mutfağı adlı ürün verilerini güncelledi.','admin','127.0.0.1','3','0'),(59,'2020-05-29 22:40:42','admin adlı  Yazılım algotirması adlı ürün verilerini güncelledi.','admin','127.0.0.1','4','0'),(60,'2020-05-29 23:28:20','admin kullanıcısı giriş yaptı.','admin','127.0.0.1','1','0'),(61,'2020-05-29 23:31:03','admin adlı   adlı iletişim bilgilerini güncelledi.','admin','127.0.0.1','1','0'),(62,'2020-05-29 23:31:55','admin adlı   adlı iletişim bilgilerini güncelledi.','admin','127.0.0.1','1','0'),(63,'2020-05-30 00:08:37','admin adlı  Nefis Yemek Tarifleri  adlı ürün verilerini güncelledi.','admin','127.0.0.1','1','0'),(64,'2020-05-30 01:39:47','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(65,'2020-05-30 01:40:01','sirin kullanıcısı çıkış yaptı.','sirin','127.0.0.1',NULL,'0'),(66,'2020-05-30 01:40:20','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(67,'2020-05-30 01:41:38','sirin kullanıcısı çıkış yaptı.','sirin','127.0.0.1',NULL,'0'),(68,'2020-05-30 01:42:07','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(69,'2020-05-30 01:44:00','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(70,'2020-05-30 01:44:50','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(71,'2020-05-30 01:49:32','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(72,'2020-05-30 01:51:14','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0'),(73,'2020-05-30 01:51:43','sirin kullanıcısı çıkış yaptı.','sirin','127.0.0.1',NULL,'0'),(74,'2020-05-30 01:51:52','sirin kullanıcısı giriş yaptı.','sirin','127.0.0.1',NULL,'0');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;

#
# Structure for table "ozet"
#

DROP TABLE IF EXISTS `ozet`;
CREATE TABLE `ozet` (
  `ozet_iD` int(11) NOT NULL AUTO_INCREMENT,
  `toplam_harcama` varchar(255) DEFAULT NULL,
  `toplam_indirim` varchar(255) DEFAULT NULL,
  `users_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ozet_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "ozet"
#

/*!40000 ALTER TABLE `ozet` DISABLE KEYS */;
INSERT INTO `ozet` VALUES (1,'50','15','1');
/*!40000 ALTER TABLE `ozet` ENABLE KEYS */;

#
# Structure for table "satilanlar"
#

DROP TABLE IF EXISTS `satilanlar`;
CREATE TABLE `satilanlar` (
  `satilanlar_iD` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` varchar(255) DEFAULT NULL,
  `kullanici_id` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`satilanlar_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "satilanlar"
#

/*!40000 ALTER TABLE `satilanlar` DISABLE KEYS */;
INSERT INTO `satilanlar` VALUES (1,'1','1','2020-05-28 00:07:31');
/*!40000 ALTER TABLE `satilanlar` ENABLE KEYS */;

#
# Structure for table "site_ayar"
#

DROP TABLE IF EXISTS `site_ayar`;
CREATE TABLE `site_ayar` (
  `site_ayar_iD` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `enlem` varchar(255) DEFAULT NULL,
  `boylam` varchar(255) DEFAULT NULL,
  `email_host` varchar(255) DEFAULT NULL,
  `email_user` varchar(255) DEFAULT NULL,
  `email_pass` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `analistik` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`site_ayar_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "site_ayar"
#

/*!40000 ALTER TABLE `site_ayar` DISABLE KEYS */;
INSERT INTO `site_ayar` VALUES (1,'Kitap Alışveriş Sitesi','05056798197','','05056798197','Harran üni. osmanbey kampüsü','','sirintprk21@gmail.com',NULL,'37.974660','40.962150','','','','facebook','twitter','instagram','google','');
/*!40000 ALTER TABLE `site_ayar` ENABLE KEYS */;

#
# Structure for table "slider"
#

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `slider_iD` int(11) NOT NULL AUTO_INCREMENT,
  `kat_id` varchar(255) DEFAULT NULL,
  `urun_id` varchar(255) DEFAULT '',
  `durum` varchar(255) DEFAULT NULL,
  `siralama` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`slider_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "slider"
#

/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (1,'3','4','1',NULL,'2020-05-29 01:29:40'),(2,'2','1','1',NULL,'2020-05-29 01:30:42');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

#
# Structure for table "urunler"
#

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE `urunler` (
  `urunler_iD` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) DEFAULT NULL,
  `icerik` text,
  `foto` varchar(255) DEFAULT NULL,
  `fiyat` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `kat_id` varchar(255) DEFAULT NULL,
  `stok` varchar(255) DEFAULT NULL,
  `indirim` varchar(255) DEFAULT NULL,
  `indirim_yuzdesi` varchar(255) DEFAULT NULL,
  `hafta` varchar(255) DEFAULT NULL,
  `kat_seo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`urunler_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "urunler"
#

/*!40000 ALTER TABLE `urunler` DISABLE KEYS */;
INSERT INTO `urunler` VALUES (1,'Nefis Yemek Tarifleri ','<p>Bir tavaya tereyağını ekleyin ve i&ccedil;erisine pul biber ilave edin.<br />\r\nHazırladığınız yağı yumurtalarınızın &uuml;zerine gezdirin.</p>\r\n','5ed03ca900ba5.png','50 ','1','nefis-yemek-tarifleri','2','1','1','30','1','yemek-kitaplari'),(3,'Arda\'nın Mutfağı','<p>Kızarttığınız pastırmaları yumurtaların &uuml;zerine yerleştirin ve servis edin.</p>\r\n','5ed03d9f398e5.png','25','1','ardanin-mutfagi','2','1','1','25','0','yemek-kitaplari'),(4,'Yazılım algotirması','<p>G&uuml;n&uuml;m&uuml;z teknoloji &ccedil;ağında, hi&ccedil; ş&uuml;phesiz bilgisayarlar hemen hemen her yerde karşımıza &ccedil;ıkmaktadır. İlerleyen teknolojilere paralel bir şekilde b&uuml;y&uuml;yen pazar hacmi</p>\r\n','5ed03e7e62f5a.png','50 ','1','yazilim-algotirmasi','3','1','0','70','0','bilgisayar-kitaplari');
/*!40000 ALTER TABLE `urunler` ENABLE KEYS */;

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `users_iD` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) DEFAULT NULL,
  `soyad` varchar(255) DEFAULT NULL,
  `k_adi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT '1',
  `foto` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`users_iD`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "users"
#

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Şirin','TOPRAK','sirin','sirintprk21@gmail.com','e10adc3949ba59abbe56e057f20f883e','2020-05-27 23:52:59','127.0.0.1','1','5ecee76c3a9d0.jpg','facebook','twitter','google','instagram');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
