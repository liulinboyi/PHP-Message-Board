/*
 Navicat Premium Data Transfer

 Source Server         : blog
 Source Server Type    : MySQL
 Source Server Version : 50560
 Source Host           : localhost:3306
 Source Schema         : lb

 Target Server Type    : MySQL
 Target Server Version : 50560
 File Encoding         : 65001

 Date: 19/12/2018 20:40:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for syk
-- ----------------------------
DROP TABLE IF EXISTS `syk`;
CREATE TABLE `syk`  (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `作者` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of syk
-- ----------------------------
INSERT INTO `syk` VALUES (1, '小刘', '  PHP很有趣，想要的函数方法基本上都有，直接调用，填写参数就行，十分方便，用着很痛快！\r\n  学习PHP有半学期了，感觉PHP和其他语言的基础都很类似，学起来不算吃力，但是也有耳目一新的方法和函数，与其他语言不同，总的来说，PHP是一门十分有趣和有力的语言！快速，灵活和实用就是它了！', '小刘');

SET FOREIGN_KEY_CHECKS = 1;
