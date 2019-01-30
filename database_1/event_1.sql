
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



INSERT INTO `category` (`id`,`name`) VALUES 
 (1,'Social Event'),
 (2,'Corporate Event');


DROP TABLE IF EXISTS `event_name`;
CREATE TABLE `event_name` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `category_id` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;



INSERT INTO `event_name` (`id`,`name`,`category_id`) VALUES 
 (1,'Wedding','1'),
 (2,'Birthday','1'),
 (3,'Parties','1'),
 (4,'Anniverseries','1'),
 (5,' Bar mitzvahs','1'),
 (6,'Holidays','1'),
 (7,'Baby Showers','1'),
 (8,'Reunions','1'),
 (9,'Meetings','2'),
 (10,'Company events','2'),
 (11,'Seminars','2'),
 (12,'Conventions','2'),
 (13,'Associations ','2'),
 (14,'Charities','2'),
 (15,'Fastivals','1'),
 (16,'Conferences','2'),
 (17,'Formal Parties','2'),
 (18,'Concerts','1'),
 (19,'Studying The Brands','1'),
 (20,'Trade Show','2'),
 (21,'priduct Launchs','2'),
 (22,'Team Buildings','1'),
 (23,'Traing Session','1'),
 (24,'Ceremony','2'),
 (25,'Team Building','1');


DROP TABLE IF EXISTS `price_type`;
CREATE TABLE `price_type` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


INSERT INTO `price_type` (`id`,`name`,`description`) VALUES 
 (1,'Hourly Rate',''),
 (2,'Flat Fee',''),
 (3,'Percentage of the Event',''),
 (4,'Day-of Coordination',''),
 (5,'Vendor Commission','');



DROP TABLE IF EXISTS `vendor`;
CREATE TABLE `vendor` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(200) NOT NULL DEFAULT '',
  `country` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;



INSERT INTO `vendor` (`id`,`name`,`phone`,`address`,`country`) VALUES 
 (1,'Band','','',''),
 (2,'Cade','','',''),
 (3,'Calligraphy','','',''),
 (4,'Designer','','',''),
 (5,'Dress','','',''),
 (6,'Florist','','',''),
 (7,'Hair & Makeup','','',''),
 (8,'Lighting & Decor','','',''),
 (9,'Limo','','',''),
 (10,'Music & Entertainment','','',''),
 (11,'Officiannt','','',''),
 (12,'Photographer','','',''),
 (13,'Rentals','','',''),
 (14,'Stationer','','',''),
 (15,'Videographers','','',''),
 (16,'Others','','','');

