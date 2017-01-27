/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : eshop

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-12-05 00:00:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `eshop_address`
-- ----------------------------
DROP TABLE IF EXISTS `eshop_address`;
CREATE TABLE `eshop_address` (
  `id` int(11) NOT NULL COMMENT '地址管理id',
  `street` varchar(128) DEFAULT NULL COMMENT '街道',
  `city` varchar(128) DEFAULT NULL COMMENT '城市',
  `state` varchar(128) DEFAULT NULL COMMENT '州',
  `zipcode` varchar(32) DEFAULT NULL COMMENT '邮编',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eshop_address
-- ----------------------------

-- ----------------------------
-- Table structure for `eshop_book`
-- ----------------------------
DROP TABLE IF EXISTS `eshop_book`;
CREATE TABLE `eshop_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `type` int(4) DEFAULT NULL COMMENT '类型',
  `imgpath` varchar(1024) DEFAULT NULL COMMENT '图片base64',
  `author` varchar(32) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `isnew` int(1) DEFAULT NULL COMMENT '1-是新书 0-旧书',
  `contributor` int(11) DEFAULT '0' COMMENT '0-管理员 其他-用户ID发布人',
  `postime` varchar(64) DEFAULT NULL,
  `stat` varchar(1) DEFAULT '1' COMMENT '1-上架 0-售完',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eshop_book
-- ----------------------------
INSERT INTO `eshop_book` VALUES ('4', '计算机', '1', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'xiaohui', '2010', '1', '3', null, '1');
INSERT INTO `eshop_book` VALUES ('5', '啊哈哈', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', '123', '3320', '1', '5', null, '1');
INSERT INTO `eshop_book` VALUES ('6', 'ddfs', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'fsdf', '4700', '0', '1', '', '1');
INSERT INTO `eshop_book` VALUES ('7', 'ddfs', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'fsdf', '4700', '0', '1', '', '1');
INSERT INTO `eshop_book` VALUES ('8', 'ddfs', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'fsdf', '4500', '0', '1', '', '1');
INSERT INTO `eshop_book` VALUES ('9', 'ddfs', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'fsdf', '4700', '1', '1', '', '1');
INSERT INTO `eshop_book` VALUES ('10', 'ddfs', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'fsdf', '1300', '0', '1', '', '1');
INSERT INTO `eshop_book` VALUES ('11', 'ddfs', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'fsdf', '4700', '1', '1', '', '1');
INSERT INTO `eshop_book` VALUES ('12', 'ddfs', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'fsdf', '9900', '0', '1', '', '1');
INSERT INTO `eshop_book` VALUES ('13', 'ddfs', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'fsdf', '5600', '1', '2', '', '1');
INSERT INTO `eshop_book` VALUES ('14', 'ddfs', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'fsdf', '4400', '1', '2', '', '1');
INSERT INTO `eshop_book` VALUES ('15', 'ddfs', '6', 'http://localhost/uploads/f38294ef1bb92da50a2d3e1868c8e889.jpg', 'fsdf', '7100', '0', '2', '', '1');
INSERT INTO `eshop_book` VALUES ('16', 'test', '1', 'http://localhost/uploads/6c563a1834d5fead71b0a9559d75b4e2.jpg', 'testauthor', '332', '1', '2', null, '1');
INSERT INTO `eshop_book` VALUES ('17', 'qqq', '6', 'http://localhost/uploads/b71281b80886ab72ecbe0c2269d204c2.jpg', 'assdf', '331', '1', '10', null, '0');

-- ----------------------------
-- Table structure for `eshop_cart`
-- ----------------------------
DROP TABLE IF EXISTS `eshop_cart`;
CREATE TABLE `eshop_cart` (
  `custid` int(11) NOT NULL COMMENT '用户id',
  `custname` varchar(64) DEFAULT NULL,
  `booklist` varchar(1024) DEFAULT NULL COMMENT '书列表',
  PRIMARY KEY (`custid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eshop_cart
-- ----------------------------

-- ----------------------------
-- Table structure for `eshop_customer`
-- ----------------------------
DROP TABLE IF EXISTS `eshop_customer`;
CREATE TABLE `eshop_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` varchar(512) NOT NULL,
  `cardnum` varchar(36) DEFAULT NULL,
  `balance` varchar(10) DEFAULT '10000',
  `expire` varchar(12) DEFAULT NULL COMMENT '卡有效期',
  `backcode` varchar(3) DEFAULT NULL COMMENT '3位密码',
  `tel` varchar(20) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL COMMENT '地址管理',
  `email` varchar(64) DEFAULT NULL,
  `sellid` varchar(4096) DEFAULT NULL,
  `buyid` varchar(4096) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eshop_customer
-- ----------------------------
INSERT INTO `eshop_customer` VALUES ('1', 'liuhui', '2219d01fe0f75d05bcae94c99ec3f58b', '6213002201123', '10000', '20201102', '202', '18576676197', 'shenzhen', '331234958@qq.com', null, null);
INSERT INTO `eshop_customer` VALUES ('2', 'huipang', '2219d01fe0f75d05bcae94c99ec3f58b', '6213002201123', '10000', '20201102', '202', '18576676197', 'shenzhen', '331234958@qq.com', null, null);
INSERT INTO `eshop_customer` VALUES ('6', 'luv', '2219d01fe0f75d05bcae94c99ec3f58b', '6213002201123', '199877000', '20201102', '123', '18576676197', 'shenzhen', '331234958@qq.com', null, null);
INSERT INTO `eshop_customer` VALUES ('10', 'test', '2219d01fe0f75d05bcae94c99ec3f58b', '24242', '133073', '20261011', '312', '18576676197', 'shenzhen', '331234958@qq.com', null, null);

-- ----------------------------
-- Table structure for `eshop_manager`
-- ----------------------------
DROP TABLE IF EXISTS `eshop_manager`;
CREATE TABLE `eshop_manager` (
  `id` int(11) NOT NULL,
  `uid` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `salary` varchar(12) DEFAULT NULL COMMENT '薪水',
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eshop_manager
-- ----------------------------
INSERT INTO `eshop_manager` VALUES ('0', '1000', '21232f297a57a5a743894a0e4a801fc3', 'admin', '30K', '18576676197', '331234958@qq.com');

-- ----------------------------
-- Table structure for `eshop_order`
-- ----------------------------
DROP TABLE IF EXISTS `eshop_order`;
CREATE TABLE `eshop_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordtime` varchar(32) DEFAULT NULL COMMENT '订单时间',
  `custid` int(11) DEFAULT NULL COMMENT '消费的用户ID',
  `username` varchar(64) DEFAULT NULL COMMENT '下单人名',
  `itemid` varchar(512) DEFAULT NULL COMMENT '商品ID',
  `stat` varchar(1) DEFAULT '0' COMMENT '0-待支付 1-支付成功 9-支付失败',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eshop_order
-- ----------------------------
INSERT INTO `eshop_order` VALUES ('1', '16-12-04 04:50:06', '10', 'test', '15 ', '1');
INSERT INTO `eshop_order` VALUES ('2', '16-12-04 04:59:05', '10', 'test', '11 ', '1');
INSERT INTO `eshop_order` VALUES ('3', '16-12-04 05:06:31', '10', 'test', '17 ', '1');
INSERT INTO `eshop_order` VALUES ('4', '16-12-04 05:11:58', '10', 'test', '17 ', '1');
