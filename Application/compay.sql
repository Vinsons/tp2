/*
SQLyog v10.2 
MySQL - 5.5.53 : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `test`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(30) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(300) COLLATE utf8_bin DEFAULT NULL COMMENT '标题',
  `time` datetime DEFAULT NULL COMMENT '时间',
  `author` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '作者',
  `page-views` int(255) DEFAULT NULL COMMENT '浏览数',
  `content` text COLLATE utf8_bin COMMENT '内容',
  `status` tinyint(4) DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `article` */

insert  into `article`(`id`,`title`,`time`,`author`,`page-views`,`content`,`status`) values (1,'213','2018-06-05 09:13:19','123',123,'12312',1),(2,'123','2018-05-01 09:13:32','123',123,NULL,1);

/*Table structure for table `banner` */

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `id` int(30) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `banner-pic` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT 'banner图片',
  `title` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '标题',
  `time` date DEFAULT NULL COMMENT '时间',
  `number` int(11) DEFAULT NULL COMMENT '浏览次数',
  `author` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '作者',
  `content` text COLLATE utf8_bin COMMENT '内容',
  `status` tinyint(4) DEFAULT '1' COMMENT '状态',
  `memo` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `banner` */

insert  into `banner`(`id`,`banner-pic`,`title`,`time`,`number`,`author`,`content`,`status`,`memo`) values (1,'24','234','2018-07-30',234,'234','12',1,'234'),(7,'123','123','0000-00-00',12312,'123','123',2,NULL),(8,'123','123','0000-00-00',12312,'123','123',2,NULL),(9,NULL,'18',NULL,NULL,NULL,NULL,1,NULL),(10,NULL,'1231654',NULL,NULL,NULL,NULL,1,NULL),(11,'','安环我跟车','0000-00-00',0,'','',2,NULL),(12,NULL,'黄文聪',NULL,NULL,NULL,NULL,1,NULL),(13,NULL,'ABC',NULL,NULL,NULL,NULL,1,NULL),(14,NULL,'环卫跟从',NULL,NULL,NULL,NULL,1,NULL),(17,NULL,'测试标题以',NULL,NULL,NULL,NULL,1,NULL),(16,'','第一次数据添加','0000-00-00',0,'','',2,NULL),(20,'阿萨德','黄文','2018-05-24',123,'qwe','qwe',1,NULL),(21,NULL,'突破','2018-05-10',123,'qwe','qwe',1,NULL),(22,NULL,'图片','2018-05-11',123,'','',1,NULL),(23,NULL,'图片测试','2018-05-17',0,'','',1,NULL),(24,NULL,'公司','2018-05-09',0,'','',1,NULL),(25,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL),(35,NULL,'21','2018-05-18',12,'','',1,NULL),(27,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL),(28,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL),(29,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL),(30,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL),(33,NULL,'123123123123','0000-00-00',12312,'','',1,NULL),(34,NULL,'厄齐尔','2018-05-24',0,'','',1,NULL),(36,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL),(37,NULL,'21312','2018-05-04',0,'','',0,NULL),(38,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL),(39,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL);

/*Table structure for table `bottom` */

DROP TABLE IF EXISTS `bottom`;

CREATE TABLE `bottom` (
  `id` int(30) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `copyright` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '版权信息',
  `record` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '备案信息',
  `re-link` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '备案链接',
  `friendship` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '友情链接名称',
  `friendship-link` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '友情链接',
  `status` tinyint(30) DEFAULT '1' COMMENT '状态',
  `meno` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `bottom` */

insert  into `bottom`(`id`,`copyright`,`record`,`re-link`,`friendship`,`friendship-link`,`status`,`meno`) values (1,'123','123','123','123','123',1,NULL);

/*Table structure for table `co-address` */

DROP TABLE IF EXISTS `co-address`;

CREATE TABLE `co-address` (
  `id` int(30) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '标题',
  `address` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '地址',
  `zip-code` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '邮编',
  `qr` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '公众号图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `co-address` */

/*Table structure for table `context` */

DROP TABLE IF EXISTS `context`;

CREATE TABLE `context` (
  `id` int(30) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '标题',
  `switchboard` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '总机',
  `fax` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '传真',
  `zip-code` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '邮编',
  `address` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '地址',
  `tel` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '电话',
  `status` tinyint(4) DEFAULT '1' COMMENT '状态',
  `meno` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `context` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(30) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `post-name` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '岗位名称',
  `department` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '部门',
  `working-place` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '工作地点',
  `number` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '招聘人数',
  `time` datetime DEFAULT NULL COMMENT '发布时间',
  `deadline` datetime DEFAULT NULL COMMENT '截止时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `jobs` */

/*Table structure for table `news-kind` */

DROP TABLE IF EXISTS `news-kind`;

CREATE TABLE `news-kind` (
  `id` int(30) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '分类标题',
  `status` tinyint(4) DEFAULT '1' COMMENT '状态',
  `menu` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `news-kind` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `create_time` date DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`create_time`,`ip`,`status`) values (1,'admin','admin','2018-04-29',NULL,0),(2,'1412','12124','2018-04-03',NULL,1),(3,'12312','1412412','2018-02-12',NULL,1),(23,'abecec','7895a59d0b79de6','2018-04-29',NULL,0),(22,'32158','e2eacaff46787bf','2015-05-05',NULL,0),(21,'abecec','7895a59d0b79de6','2018-04-29',NULL,0),(20,'32158','e2eacaff46787bf','2015-05-05',NULL,0),(19,'???','7895a59d0b79de6','2018-04-29',NULL,0),(18,'32158','e2eacaff46787bf','2015-05-05',NULL,0),(5,'abc','7895a59d0b79de6','2018-04-29',NULL,0),(4,'987','e2eacaff46787bf','2015-05-05',NULL,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
