/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : 127.0.0.1:3306
Source Database       : webchat

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2016-05-21 21:17:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for friend
-- ----------------------------
DROP TABLE IF EXISTS `friend`;
CREATE TABLE `friend` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(32) NOT NULL,
  `f_nickname` varchar(32) NOT NULL,
  `zt` tinyint(1) NOT NULL DEFAULT '0',
  `fzt` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friend
-- ----------------------------
INSERT INTO `friend` VALUES ('40', '111', '112', '0', '0');
INSERT INTO `friend` VALUES ('41', '111', '1111', '0', '0');
INSERT INTO `friend` VALUES ('37', '111', '113', '0', '0');
INSERT INTO `friend` VALUES ('7', '111', '111', '0', '1');
INSERT INTO `friend` VALUES ('42', '111', '去', '0', '0');
INSERT INTO `friend` VALUES ('43', '111', '115', '0', '0');
INSERT INTO `friend` VALUES ('44', '111', '114', '0', '0');
INSERT INTO `friend` VALUES ('45', '111', '11111', '0', '0');

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sender` varchar(32) NOT NULL,
  `geter` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `stime` datetime NOT NULL,
  `mloop` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('116', '111', '113', '111', '2016-05-19 22:13:10', '0');
INSERT INTO `message` VALUES ('117', '111', '113', '2saaa', '2016-05-19 22:13:13', '0');
INSERT INTO `message` VALUES ('118', '111', '112', '111', '2016-05-20 20:02:32', '0');
INSERT INTO `message` VALUES ('119', '111', '111', 'sdasd', '2016-05-20 20:09:20', '1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `address` varchar(64) DEFAULT NULL,
  `sex` varchar(2) NOT NULL,
  `birthday` date DEFAULT NULL,
  `reg_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname` (`nickname`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('12', '111', '698d51a19d8a121ce581499d7b701668', null, '男', '0000-00-00', '0');
INSERT INTO `user` VALUES ('13', '112', '698d51a19d8a121ce581499d7b701668', null, '男', '0000-00-00', '0');
INSERT INTO `user` VALUES ('14', '113', '698d51a19d8a121ce581499d7b701668', null, '男', '0000-00-00', '0');
INSERT INTO `user` VALUES ('15', '1111', '698d51a19d8a121ce581499d7b701668', null, '男', '0000-00-00', '0');
INSERT INTO `user` VALUES ('16', '114', '698d51a19d8a121ce581499d7b701668', null, '男', '0000-00-00', '0');
INSERT INTO `user` VALUES ('17', '11111', '698d51a19d8a121ce581499d7b701668', null, '男', '0000-00-00', '0');
INSERT INTO `user` VALUES ('18', '115', '698d51a19d8a121ce581499d7b701668', null, '男', '0000-00-00', '0');
INSERT INTO `user` VALUES ('19', '116', '698d51a19d8a121ce581499d7b701668', null, '男', '0000-00-00', '0');
INSERT INTO `user` VALUES ('20', '去', '202cb962ac59075b964b07152d234b70', null, '男', '0000-00-00', '1463816322');
