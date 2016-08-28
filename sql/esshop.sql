/*
Navicat MySQL Data Transfer

Source Server         : 115.28.230.48
Source Server Version : 50505
Source Host           : 115.28.230.48:3306
Source Database       : esshop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-08-28 14:11:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for chatmessage
-- ----------------------------
DROP TABLE IF EXISTS `chatmessage`;
CREATE TABLE `chatmessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `time` datetime NOT NULL,
  `user` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chatmessage
-- ----------------------------
INSERT INTO `chatmessage` VALUES ('1', 'hello 大家好', '0000-00-00 00:00:00', 'lirongfei123');
INSERT INTO `chatmessage` VALUES ('2', 'hello 大家好', '0000-00-00 00:00:00', 'lirongfei123');
INSERT INTO `chatmessage` VALUES ('3', 'hello 大家好', '0000-00-00 00:00:00', 'lirongfei123');
INSERT INTO `chatmessage` VALUES ('4', '士大夫似的', '0000-00-00 00:00:00', 'lirongfei123');
INSERT INTO `chatmessage` VALUES ('5', '<img src=\"http://127.0.0.1/php/esshop/public/images/ali/15.GIF\"><img src=\"http://127.0.0.1/php/esshop/public/images/ali/16.GIF\">\n\n', '0000-00-00 00:00:00', 'lirongfei123');
INSERT INTO `chatmessage` VALUES ('6', 'xfg', '0000-00-00 00:00:00', '');
INSERT INTO `chatmessage` VALUES ('7', 'afva', '0000-00-00 00:00:00', '');
INSERT INTO `chatmessage` VALUES ('8', 'fda', '0000-00-00 00:00:00', '');
INSERT INTO `chatmessage` VALUES ('9', 'y<div><br></div>', '0000-00-00 00:00:00', '');
INSERT INTO `chatmessage` VALUES ('10', 'ff', '0000-00-00 00:00:00', '校友');
INSERT INTO `chatmessage` VALUES ('11', 'ee', '0000-00-00 00:00:00', '校友');
INSERT INTO `chatmessage` VALUES ('12', 'effect\n\n', '0000-00-00 00:00:00', 'janson');
INSERT INTO `chatmessage` VALUES ('13', '按时', '0000-00-00 00:00:00', 'janson');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `goods_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `detail` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('9bb875c20bd30bc93c5af10d8c1cad97', '', '2016-04-26 23:00:47', 'gh', '1');
INSERT INTO `comment` VALUES ('9bb875c20bd30bc93c5af10d8c1cad97', '', '2016-04-26 23:00:47', 'gh', '2');
INSERT INTO `comment` VALUES ('9bb875c20bd30bc93c5af10d8c1cad97', '', '2016-04-26 23:00:52', 'gg', '3');
INSERT INTO `comment` VALUES ('9bb875c20bd30bc93c5af10d8c1cad97', '', '2016-04-26 23:00:53', 'gg', '4');
INSERT INTO `comment` VALUES ('9bb875c20bd30bc93c5af10d8c1cad97', '', '2016-04-26 23:00:59', 'ee', '5');
INSERT INTO `comment` VALUES ('a01efbd3c42a9c291768f438fab89c0a', '', '2016-04-26 23:03:45', 'hh', '6');
INSERT INTO `comment` VALUES ('9bb875c20bd30bc93c5af10d8c1cad97', '', '2016-04-26 23:04:56', 'wrefer', '7');
INSERT INTO `comment` VALUES ('9bb875c20bd30bc93c5af10d8c1cad97', '', '2016-04-26 23:05:00', 'ewf', '8');
INSERT INTO `comment` VALUES ('3787fd710f5bcc38d99d532e1b516f51', 'janson', '2016-04-26 23:11:44', 'xcv', '9');
INSERT INTO `comment` VALUES ('3787fd710f5bcc38d99d532e1b516f51', 'janson', '2016-04-26 23:11:51', 'dsv', '10');
INSERT INTO `comment` VALUES ('3787fd710f5bcc38d99d532e1b516f51', 'janson', '2016-04-26 23:21:39', 'sfsdf', '11');
INSERT INTO `comment` VALUES ('3787fd710f5bcc38d99d532e1b516f51', 'janson', '2016-04-26 23:21:49', '<fieldset><legend>janson</legend>xcv</fieldset>得到', '12');
INSERT INTO `comment` VALUES ('3787fd710f5bcc38d99d532e1b516f51', 'janson', '2016-04-27 08:33:26', '额外负担', '13');
INSERT INTO `comment` VALUES ('3787fd710f5bcc38d99d532e1b516f51', 'janson', '2016-04-27 08:33:36', '<fieldset><legend>janson</legend>额外负担</fieldset>嗯嗯', '14');
INSERT INTO `comment` VALUES ('3787fd710f5bcc38d99d532e1b516f51', 'janson', '2016-04-27 08:33:50', '<fieldset><legend>janson</legend>xcv</fieldset>额', '15');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `name` varchar(100) NOT NULL,
  `face` varchar(100) NOT NULL,
  `onesay` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `miaoshu` text NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user` varchar(100) NOT NULL,
  `goods_type` int(11) NOT NULL,
  `des_type` int(11) NOT NULL,
  `goods_id` varchar(100) NOT NULL,
  `scan_num` int(11) NOT NULL,
  `disabled` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('离散数学,二手便宜卖了', 'upload/uploadify/lirongfei12300000000000000/lirongfei123000000000000001457801688uploadify_upload.png', '九成新', '3', '离散数学,二手便宜卖了', '2016-03-13 00:54:19', 'lirongfei123', '1', '0', '9bb875c20bd30bc93c5af10d8c1cad97', '6', '0', '1');
INSERT INTO `goods` VALUES ('文档', 'upload/uploadify/janson00000000000000/janson000000000000001461717181uploadify_upload.gif', '为', '0', '取得', '2016-04-27 08:33:05', 'janson', '2', '0', '7d81768fd91dab88bfcb6d4ca1fb576a', '0', '1', '3');

-- ----------------------------
-- Table structure for jianyi
-- ----------------------------
DROP TABLE IF EXISTS `jianyi`;
CREATE TABLE `jianyi` (
  `user` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jianyi
-- ----------------------------

-- ----------------------------
-- Table structure for usermessage
-- ----------------------------
DROP TABLE IF EXISTS `usermessage`;
CREATE TABLE `usermessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usermessage
-- ----------------------------
INSERT INTO `usermessage` VALUES ('1', 'lirongfei123', '', 'gg', '<img src=\"http://www.mlife.top/project/esshop/public/javascript/kindeditor/plugins/emoticons/images/20.gif\" border=\"0\" alt=\"\" />', '2016-04-26 23:01:17', '0');
INSERT INTO `usermessage` VALUES ('2', 'lirongfei123', '', 'gg', '<img src=\"http://www.mlife.top/project/esshop/public/javascript/kindeditor/plugins/emoticons/images/20.gif\" border=\"0\" alt=\"\" />', '2016-04-26 23:01:19', '0');
INSERT INTO `usermessage` VALUES ('3', 'lirongfei123', '', 'gg', '<img src=\"http://www.mlife.top/project/esshop/public/javascript/kindeditor/plugins/emoticons/images/20.gif\" border=\"0\" alt=\"\" />', '2016-04-26 23:01:19', '0');
INSERT INTO `usermessage` VALUES ('4', 'lirongfei123', '', 'gg', '<img src=\"http://www.mlife.top/project/esshop/public/javascript/kindeditor/plugins/emoticons/images/20.gif\" border=\"0\" alt=\"\" />', '2016-04-26 23:01:19', '0');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `miaoshu` varchar(200) NOT NULL,
  `favitite` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `register_time` datetime NOT NULL,
  `recent_scan` varchar(100) NOT NULL,
  `user_tel` int(11) NOT NULL,
  `user_qq` int(11) NOT NULL,
  `user_face` varchar(100) NOT NULL,
  `recent_time` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('b9c4afd095edda60c4a05c9d0b3c33e1', 'lirongfei123', '', '我是管理员', '', 'lirongfei985@gmail.com', '2016-03-13 00:51:53', '', '2147483647', '985867294', 'upload/uploadify/users/users1457801532uploadify_upload.png', '0000-00-00 00:00:00', '1');
INSERT INTO `users` VALUES ('d41d8cd98f00b204e9800998ecf8427e', '', '', 'g', '', '', '2016-04-26 22:58:48', ';9bb875c20bd30bc93c5af10d8c1cad97', '0', '0', '', '0000-00-00 00:00:00', '2');
INSERT INTO `users` VALUES ('d41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 'f', '2016-04-26 22:58:56', ';9bb875c20bd30bc93c5af10d8c1cad97', '0', '0', '', '0000-00-00 00:00:00', '3');
INSERT INTO `users` VALUES ('d41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '2016-04-26 22:59:10', ';9bb875c20bd30bc93c5af10d8c1cad97', '0', '0', '', '0000-00-00 00:00:00', '4');
INSERT INTO `users` VALUES ('8277e0910d750195b448797616e091ad', 'janson', '', '', '', '810381365@qq.com', '2016-04-26 23:10:59', '', '1', '0', '', '0000-00-00 00:00:00', '5');
INSERT INTO `users` VALUES ('93025091752efa184fd034f285573afe', 'q12280', '', '', '', '122807121@qq.com', '2016-04-27 08:53:49', '', '111000', '111000', '', '0000-00-00 00:00:00', '6');
INSERT INTO `users` VALUES ('d41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '2016-05-09 23:37:12', '', '0', '0', '', '0000-00-00 00:00:00', '7');
INSERT INTO `users` VALUES ('d41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '2016-05-12 10:03:54', '', '0', '0', '', '0000-00-00 00:00:00', '8');

-- ----------------------------
-- Table structure for wantedbuy
-- ----------------------------
DROP TABLE IF EXISTS `wantedbuy`;
CREATE TABLE `wantedbuy` (
  `wanted_id` varchar(100) NOT NULL,
  `wanted_name` varchar(100) NOT NULL,
  `wanted_ower` varchar(100) NOT NULL,
  `wanted_time` datetime NOT NULL,
  `miaoshu` text NOT NULL,
  `wanted_price` int(11) NOT NULL,
  `wanted_type` int(11) NOT NULL,
  `wanted_scans` int(11) NOT NULL,
  `disabled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wantedbuy
-- ----------------------------
INSERT INTO `wantedbuy` VALUES ('a01efbd3c42a9c291768f438fab89c0a', '谁有php的书籍,求二手', 'lirongfei123', '2016-03-13 00:53:32', '谁有php的书籍,求二手谁有php的书籍,求二手', '5', '2', '4', '0');
INSERT INTO `wantedbuy` VALUES ('bfd875ed42b50955e0d5b83cd5f14b63', 'dd', '', '2016-04-26 23:04:24', '<span style=\"background-color:#4C33E5;\"></span>', '0', '2', '0', '1');
INSERT INTO `wantedbuy` VALUES ('91263923925f8d84502c65408dad81d3', 'wgeqerg', '', '2016-04-26 23:05:18', 'geqrgrg', '0', '2', '0', '1');
INSERT INTO `wantedbuy` VALUES ('3787fd710f5bcc38d99d532e1b516f51', ' dg', 'janson', '2016-04-26 23:11:19', 'dfsh', '0', '2', '2', '0');
