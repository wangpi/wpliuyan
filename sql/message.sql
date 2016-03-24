/*
Navicat MySQL Data Transfer

Source Server         : benji
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-03-24 11:13:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', '工单佛挡杀佛的哦', '2016-03-24 08:16:42');
INSERT INTO `message` VALUES ('2', '大范甘迪发个梵蒂冈梵蒂冈', '2016-03-24 08:17:42');
INSERT INTO `message` VALUES ('10', '王平', '2016-03-24 10:30:06');
INSERT INTO `message` VALUES ('11', '范德萨范德萨发的发的发', '2016-03-24 01:00:03');
INSERT INTO `message` VALUES ('9', '个梵蒂冈梵蒂冈', '2016-03-24 00:59:54');
INSERT INTO `message` VALUES ('7', '个电饭锅电饭锅电饭锅', '2016-03-24 00:36:22');
INSERT INTO `message` VALUES ('8', '发个梵蒂冈梵蒂冈', '2016-03-24 00:40:17');
INSERT INTO `message` VALUES ('12', '就急急急急急急', '2016-03-24 01:00:09');
INSERT INTO `message` VALUES ('14', '发反反复复', '2016-03-24 10:14:43');
