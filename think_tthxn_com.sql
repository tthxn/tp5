/*
Navicat MySQL Data Transfer

Source Server         : think_tthxn_com
Source Server Version : 50554
Source Host           : think.tthxn.com:3306
Source Database       : think_tthxn_com

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-10-12 22:46:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `address`
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `province` varchar(255) NOT NULL DEFAULT '' COMMENT '省',
  `city` varchar(255) NOT NULL DEFAULT '' COMMENT '市',
  `country` varchar(255) NOT NULL DEFAULT '' COMMENT '区',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '详细地址',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '收货人',
  `mobile` int(11) NOT NULL DEFAULT '0' COMMENT '收件人手机号',
  `is_default` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否默认地址，1是默认',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES ('2', '1', '天津市', '天津市', '和平区', '东大街12号', '王晓燕', '2147483647', '0');
INSERT INTO `address` VALUES ('3', '1', '江西省', '南昌市', '东湖区', '东湖', '张雨', '2147483647', '0');
INSERT INTO `address` VALUES ('4', '1', '北京市', '北京市', '东城区', '东大街1号', '小明', '2147483647', '1');
INSERT INTO `address` VALUES ('5', '7', '上海市', '上海市', '黄浦区', 'ii', 'ii', '1324443', '0');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL DEFAULT '' COMMENT '栏目名称',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父级id',
  `order` int(11) NOT NULL DEFAULT '0' COMMENT '排列顺序',
  `create_time` date NOT NULL DEFAULT '0000-00-00' COMMENT '创建时间',
  `update_time` date NOT NULL DEFAULT '0000-00-00' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '首页', '0', '0', '0000-00-00', '0000-00-00');
INSERT INTO `category` VALUES ('2', '居家', '0', '0', '0000-00-00', '0000-00-00');
INSERT INTO `category` VALUES ('3', '餐厨', '0', '0', '0000-00-00', '0000-00-00');
INSERT INTO `category` VALUES ('4', '配件', '0', '0', '0000-00-00', '0000-00-00');
INSERT INTO `category` VALUES ('5', '服装', '0', '0', '0000-00-00', '0000-00-00');
INSERT INTO `category` VALUES ('6', '杂货', '0', '0', '0000-00-00', '0000-00-00');
INSERT INTO `category` VALUES ('7', '婴童', '0', '0', '0000-00-00', '0000-00-00');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL DEFAULT '' COMMENT '商品名称',
  `price` decimal(7,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `old_price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `uptime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '上架时间',
  `content_images` varchar(1000) NOT NULL DEFAULT '' COMMENT '商品内容页图册，用|线隔开多张图片',
  `list_image` varchar(500) NOT NULL DEFAULT '' COMMENT '商品列表页图',
  `desc` varchar(255) NOT NULL DEFAULT '' COMMENT '商品描述',
  `content` text NOT NULL COMMENT '商品详情',
  `isnew` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否首发',
  `ishot` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否热门',
  `iscommend` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `click` smallint(6) NOT NULL DEFAULT '0' COMMENT '查看次数',
  `category_id` int(11) NOT NULL DEFAULT '0' COMMENT '所属栏目',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', '3件装 咖啡时光套装', '564.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\d43de4792b163579c6b06658eaa333a5.png\",\n    \"/uploads/second/20170927\\\\b4565429689e35e6e8db9c85db5135d2.jpg\",\n    \"/uploads/second/20170927\\\\04a503881df8087a99b49e3ba8b4cabb.png\",\n    \"/uploads/second/20170927\\\\033473f9d0e3edca47a4aaeabec41a65.jpg\"\n]', '/uploads/main/20170927\\ee79102d100c68c38cf66fa990daeca9.jpg', '咖啡杯碟勺经典3件组', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, verdana; font-size: 12px;\">咖啡杯碟勺经典3件组</span></p>\r\n', '0', '0', '0', '54', '3', '2017-09-27 21:30:46', null);
INSERT INTO `goods` VALUES ('3', 'Carat钻石汤锅24cm', '224.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\9294cebc4eee79674147dde33f11f717.png\",\n    \"/uploads/second/20170927\\\\6790cb582fb963603378b8a97b516da0.jpg\",\n    \"/uploads/second/20170927\\\\827400038c31b9e59cb825cff6fcf9d2.jpg\",\n    \"/uploads/second/20170927\\\\f58405d1ee7ab2709974ceb6e5d8c224.jpg\"\n]', '/uploads/main/20170927\\a2ef1e5b0c8c4e98285c3ef0ebe169da.jpg', '安全涂层，锁热保温', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, verdana; font-size: 12px;\">安全涂层，锁热保温</span></p>\r\n', '0', '1', '0', '4564', '3', '2017-09-27 21:24:41', null);
INSERT INTO `goods` VALUES ('5', '多功能商务双肩包', '599.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170924\\\\045205d0e2ce12fcb68f37d83cd2f289.jpg\",\n    \"/uploads/second/20170924\\\\7444ab2cb8dc207a8066aa1606ba9644.jpg\",\n    \"/uploads/second/20170924\\\\40616b8fa50d58a56c366120ef5489b4.jpg\",\n    \"/uploads/second/20170924\\\\a0cebc64dd9a7ede49e8aa13b39453df.jpg\"\n]', '/uploads/main/20170924\\f5944ae0510b69cc66f29486a4145a3e.png', '17个功能分区，内置分层收纳', '<p>17个功能分区，内置分层收纳</p>\r\n', '1', '0', '1', '342', '4', '2017-09-24 23:02:34', null);
INSERT INTO `goods` VALUES ('7', '秋月鎏光马克杯', '59.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\bdd962216377d88e5868bc5042105673.jpg\",\n    \"/uploads/second/20170927\\\\71aac9bef376a9aaaeab8435850fed4a.jpg\",\n    \"/uploads/second/20170927\\\\942e549345f7ae7d32bb635f22e8e79e.jpg\",\n    \"/uploads/second/20170927\\\\32eecfcb83b182a351dc4a033ebfee20.jpg\"\n]', '/uploads/main/20170927\\f9caac814261707b15980362a99c9270.png', '变色月兔，浮雕月亮', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, verdana; font-size: 12px;\">变色月兔，浮雕月亮</span></p>\r\n', '1', '0', '0', '4324', '3', '2017-09-27 19:39:28', null);
INSERT INTO `goods` VALUES ('8', '鱼子酱纹 手提斜挎包', '459.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\c6bc6d6e1734cb6b8ee3004393a00ccc.jpg\",\n    \"/uploads/second/20170927\\\\2c039fc6efff9484443bcb376f71ed52.jpg\",\n    \"/uploads/second/20170927\\\\951e7bf3ccaa38e4bf7fe96e7154d732.jpg\",\n    \"/uploads/second/20170927\\\\697dd3c877b2f026e9f226c72a9415eb.jpg\"\n]', '/uploads/main/20170927\\680eeee836c453598298bc2d191ade4b.png', '细腻鱼子酱纹 经典实用包型', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, verdana; font-size: 12px;\">细腻鱼子酱纹 经典实用包型</span></p>\r\n', '1', '0', '1', '3432', '4', '2017-09-27 19:41:42', null);
INSERT INTO `goods` VALUES ('9', '头部按摩仪', '422.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\a3506a38b98dc0bf5fa3c4f8aaab5e0d.jpg\",\n    \"/uploads/second/20170927\\\\d3ecf790e75ba5a2e725c2de71ee528f.jpg\",\n    \"/uploads/second/20170927\\\\207122d472127e036c1088a4c1486589.jpg\",\n    \"/uploads/second/20170927\\\\dadefe3b06c1081cd66aed82cc8c5060.jpg\"\n]', '/uploads/main/20170927\\f0b249338c4761d8ae069f3593159d59.png', '一转开启 粉碎压力', '<p>一转开启 粉碎压力</p>\r\n', '0', '1', '1', '432', '6', '2017-09-27 19:45:14', null);
INSERT INTO `goods` VALUES ('11', '毛毛虫儿童运动鞋', '99.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\7d8741ce76ffe5cc25c59888b8117496.jpg\",\n    \"/uploads/second/20170927\\\\11b2467f5d40e446412ee7573cd39735.png\",\n    \"/uploads/second/20170927\\\\e97d5d182005a39a2e467a3429ca3726.jpg\",\n    \"/uploads/second/20170927\\\\b6b93d02dd27153fa6ba765442555f1c.jpg\"\n]', '/uploads/main/20170927\\1f9e1766a03632d5f896791c70730ddb.png', '仅售供应商建议价的1/3', '<p><span font-size:=\"\" microsoft=\"\" style=\"color: rgb(153, 153, 153); font-family: \">仅售供应商建议价的1/3</span></p>\r\n', '0', '1', '0', '242', '7', '2017-09-27 19:52:36', null);
INSERT INTO `goods` VALUES ('12', '黑凤梨 20寸全铝镁合金登机箱', '699.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\c054256a354d327c445e1e222ece81a8.jpg\",\n    \"/uploads/second/20170927\\\\7bc7fa30394dfc90d438a46eb80850b4.jpg\",\n    \"/uploads/second/20170927\\\\f017e63671efc8aee241c46dd88eadc3.jpg\",\n    \"/uploads/second/20170927\\\\ff171bdabd6a621b5966d39459f3d1ae.jpg\"\n]', '/uploads/main/20170927\\b1c30e93df5bd27cea91ec13db7f8fae.png', '100%铝镁合金，超薄坚固', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, verdana; font-size: 12px;\">100%铝镁合金，超薄坚固</span></p>\r\n', '0', '0', '1', '213', '4', '2017-09-27 19:57:05', null);
INSERT INTO `goods` VALUES ('13', '全棉针织条纹四件套 新款', '212.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\d07cc805f7d120a3b618488091a13d0f.jpg\",\n    \"/uploads/second/20170927\\\\86a92e0fb7b11361f13ed0a663bc30c0.jpg\",\n    \"/uploads/second/20170927\\\\47a36557e12bac60e8d7b1fcfa268b02.jpg\",\n    \"/uploads/second/20170927\\\\d01e433bc4656d01afed174ed499ba34.jpg\"\n]', '/uploads/main/20170927\\22f6fd26b1366a58208c5c303ef6bcbe.jpg', '柔软针织棉，亲肤可裸睡', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, verdana; font-size: 12px;\">柔软针织棉，亲肤可裸睡</span></p>\r\n', '0', '0', '1', '342', '2', '2017-09-27 20:00:23', null);
INSERT INTO `goods` VALUES ('14', '素色细腰碗 12.6cm', '24.90', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170922\\\\1d0b88ed6941cfcd7ae542786fd2eed2.jpg\",\n    \"/uploads/second/20170922\\\\6fe331fb758c9ec2bffad8d6c7561c97.jpg\",\n    \"/uploads/main/20170922\\\\06ddd4d25f558dea9aa72ad8ad0aa129.jpg\",\n    \"/uploads/main/20170923\\\\2965e68d8e365dc891bb60db27676e08.png\"\n]', '/uploads/main/20170923\\c584be1a902bd86d3a35678f4f3941cc.jpg', ' 盈盈细腰淑女之姿', '<p><span font-size:=\"\" microsoft=\"\" style=\"color: rgb(153, 153, 153); font-family: \">盈盈细腰淑女之姿</span></p>\r\n', '1', '0', '1', '3413', '3', '2017-09-22 23:49:50', null);
INSERT INTO `goods` VALUES ('15', '冷纹麦片碗组合', '35.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\ac33640c7442adb555d28fc1a5f18167.jpg\"\n]', '/uploads/main/20170927\\42c3a4491404daff56dfeeda4d81b262.png', '麦片沙拉，能量满满', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, verdana; font-size: 12px;\">麦片沙拉，能量满满</span></p>\r\n', '0', '1', '0', '543', '3', '2017-09-27 21:19:11', null);
INSERT INTO `goods` VALUES ('16', '2套装 简欧新骨瓷咖啡杯', '453.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\c406640c7a0da9a11c61004cd3bcc633.jpg\",\n    \"/uploads/second/20170927\\\\a98526b9637fdc650c5d1cc97764f2ca.jpg\",\n    \"/uploads/second/20170927\\\\0b941ecb2dfaf3accf92ae949df7d8ca.jpg\",\n    \"/uploads/second/20170927\\\\7612a19c0b65b676b1dbb82ebeee31a0.jpg\"\n]', '/uploads/main/20170927\\139403594e26047851e1ed6dd7ee5a2f.png', '气质冷淡灰 经典设计', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, verdana; font-size: 12px;\">气质冷淡灰 经典设计</span></p>\r\n', '0', '1', '0', '235', '3', '2017-09-27 21:22:24', null);
INSERT INTO `goods` VALUES ('19', '花瓣底率性舒适女鞋', '229.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170927\\\\da4953b583d761ea89bbc2050e47811b.jpg\",\n    \"/uploads/second/20170927\\\\c134f4f34545b9ef6ebcf6cec4016464.jpg\",\n    \"/uploads/second/20170927\\\\90c8880758ac5f5483531f575aec1889.jpg\",\n    \"/uploads/second/20170927\\\\08d20f50ff7c2cbf2c9b99fafb2e95e6.png\"\n]', '/uploads/main/20170927\\62741484e24e9996243eea9c89ed4bdd.jpg', '舒适透气，时尚百搭', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, verdana; font-size: 12px;\">舒适透气，时尚百搭</span></p>\r\n', '0', '1', '0', '546', '4', '2017-09-27 21:56:31', null);
INSERT INTO `goods` VALUES ('20', '女式极简长绒棉高领打底衫', '89.00', '0.00', '0000-00-00 00:00:00', '[\n    \"/uploads/second/20170928\\\\a86186f8051d02ad93e831c8c7fa1cc8.jpg\",\n    \"/uploads/second/20170928\\\\c712b5c9908898f1c21a317691572f2a.jpg\",\n    \"/uploads/second/20170928\\\\8c3fe9557e283f05a50a495615d53900.jpg\",\n    \"/uploads/second/20170928\\\\a512ed4801c00b2e5e13e72541f07619.jpg\"\n]', '/uploads/main/20170928\\ea0f6965247393349f98832499e91be9.jpg', '气质秋冬，高领锁住脖颈的温度', '<p><span style=\"color: rgb(153, 153, 153); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, verdana; font-size: 12px;\">气质秋冬，高领锁住脖颈的温度</span></p>\r\n', '1', '1', '1', '53', '5', '2017-09-28 03:13:43', null);

-- ----------------------------
-- Table structure for `goodslist`
-- ----------------------------
DROP TABLE IF EXISTS `goodslist`;
CREATE TABLE `goodslist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attr` varchar(255) NOT NULL DEFAULT '' COMMENT '属性组合，例如：红色|x',
  `inventory` int(11) NOT NULL DEFAULT '0' COMMENT '库存',
  `goods_id` int(11) NOT NULL DEFAULT '0' COMMENT '所属商品',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goodslist
-- ----------------------------
INSERT INTO `goodslist` VALUES ('1', '星空蓝', '123', '7');
INSERT INTO `goodslist` VALUES ('2', '月光白', '232', '7');
INSERT INTO `goodslist` VALUES ('3', '组合装（星空蓝+月光白）', '321', '7');
INSERT INTO `goodslist` VALUES ('4', '黑色', '231', '8');
INSERT INTO `goodslist` VALUES ('5', '标准', '342', '9');
INSERT INTO `goodslist` VALUES ('6', '均码', '234', '5');
INSERT INTO `goodslist` VALUES ('12', '经典黑', '232', '12');
INSERT INTO `goodslist` VALUES ('13', '太空银', '234', '12');
INSERT INTO `goodslist` VALUES ('14', '草木绿', '543', '12');
INSERT INTO `goodslist` VALUES ('15', '经典红', '342', '12');
INSERT INTO `goodslist` VALUES ('16', '烟草绿', '234', '13');
INSERT INTO `goodslist` VALUES ('17', ' 木兰黄', '342', '13');
INSERT INTO `goodslist` VALUES ('18', '茶香粉', '453', '13');
INSERT INTO `goodslist` VALUES ('19', '玫瑰紫', '232', '11');
INSERT INTO `goodslist` VALUES ('20', '从林绿', '123', '11');
INSERT INTO `goodslist` VALUES ('21', '灌木绿', '341', '11');
INSERT INTO `goodslist` VALUES ('22', '极光绿', '42', '11');
INSERT INTO `goodslist` VALUES ('23', '经典红', '34', '11');
INSERT INTO `goodslist` VALUES ('24', '组合装（碗+勺）', '654', '15');
INSERT INTO `goodslist` VALUES ('25', '碗', '464', '15');
INSERT INTO `goodslist` VALUES ('26', '咖啡杯+碟（*2）', '422', '16');
INSERT INTO `goodslist` VALUES ('27', '薄荷绿', '34', '3');
INSERT INTO `goodslist` VALUES ('28', '象牙白', '343', '3');
INSERT INTO `goodslist` VALUES ('29', '2人套装（杯+碟+勺）', '423', '1');
INSERT INTO `goodslist` VALUES ('30', '4人套装（杯+碟+勺）', '675', '1');
INSERT INTO `goodslist` VALUES ('31', '黑色/37', '645', '19');
INSERT INTO `goodslist` VALUES ('32', '黑色/38', '543', '19');
INSERT INTO `goodslist` VALUES ('33', '黑色/39', '345', '19');
INSERT INTO `goodslist` VALUES ('34', '蓝色', '42', '20');
INSERT INTO `goodslist` VALUES ('35', '灰色', '342', '20');
INSERT INTO `goodslist` VALUES ('36', '黑色', '34', '20');
INSERT INTO `goodslist` VALUES ('37', '琉璃青', '234', '14');
INSERT INTO `goodslist` VALUES ('38', '素茶灰', '342', '14');
INSERT INTO `goodslist` VALUES ('39', '古法棕', '234', '14');
INSERT INTO `goodslist` VALUES ('40', '三色组', '3244', '14');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('20170917091903', 'Users', '2017-09-17 17:53:33', '2017-09-17 17:53:33', '0');
INSERT INTO `migrations` VALUES ('20170917155319', 'Category', '2017-09-18 17:15:07', '2017-09-18 17:15:07', '0');
INSERT INTO `migrations` VALUES ('20170918114921', 'Goods', '2017-09-18 19:53:50', '2017-09-18 19:53:50', '0');
INSERT INTO `migrations` VALUES ('20170918115539', 'Goodslist', '2017-09-18 19:56:48', '2017-09-18 19:56:48', '0');
INSERT INTO `migrations` VALUES ('20170925024230', 'Address', '2017-09-25 11:57:59', '2017-09-25 11:57:59', '0');
INSERT INTO `migrations` VALUES ('20170925140547', 'Orders', '2017-09-25 23:08:27', '2017-09-25 23:08:28', '0');
INSERT INTO `migrations` VALUES ('20170925150928', 'Orderslist', '2017-09-25 23:18:35', '2017-09-25 23:18:35', '0');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `order_number` varchar(255) NOT NULL DEFAULT '0' COMMENT '订单号',
  `order_time` date NOT NULL DEFAULT '0000-00-00' COMMENT '下单时间',
  `receive_name` varchar(20) NOT NULL DEFAULT '' COMMENT '收货人',
  `receive_tel` varchar(255) NOT NULL DEFAULT '' COMMENT '收货电话',
  `receive_address` varchar(255) NOT NULL DEFAULT '' COMMENT '收货地址',
  `address_id` int(11) NOT NULL DEFAULT '0',
  `total` decimal(7,2) NOT NULL DEFAULT '0.00' COMMENT '订单总价',
  `order_status` varchar(255) NOT NULL DEFAULT '' COMMENT '订单状态',
  `logistics` varchar(255) NOT NULL DEFAULT '待发货' COMMENT '物流信息',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '1', 'G0927206599557752', '2017-09-27', '王雅11', '123456778', '北京市北京市东城区东大街', '2', '599.00', '未支付', '待发货', '2017-09-27 21:57:40', null);
INSERT INTO `orders` VALUES ('3', '1', 'G0928643597483711', '2017-09-28', '王晓燕', '177463299182', '天津市天津市和平区东大街12号', '1', '448.00', '未支付', '待发货', '2017-09-28 10:05:59', null);
INSERT INTO `orders` VALUES ('5', '1', 'G0928644866122331', '2017-09-28', '王晓燕', '2147483647', '天津市天津市和平区东大街12号', '2', '2269.00', '未支付', '待发货', '2017-09-28 10:08:06', null);
INSERT INTO `orders` VALUES ('6', '1', 'G0928722423088479', '2017-09-28', '张雨', '17723432728', '江西省南昌市东湖区东湖', '2', '459.00', '未支付', '待发货', '2017-09-28 12:17:22', null);
INSERT INTO `orders` VALUES ('7', '1', 'G0928811258426284', '2017-09-28', '小明', '17873625273', '北京市北京市东城区东大街1号', '3', '599.00', '未支付', '待发货', '2017-09-28 14:45:26', null);
INSERT INTO `orders` VALUES ('8', '1', 'G0928814649991825', '2017-09-28', '小明', '2147483647', '北京市北京市东城区东大街1号', '4', '453.00', '未支付', '待发货', '2017-09-28 14:51:05', null);
INSERT INTO `orders` VALUES ('9', '1', 'G0929930783582307', '2017-09-29', '小明', '2147483647', '北京市北京市东城区东大街1号', '4', '224.00', '未支付', '待发货', '2017-09-29 21:51:18', null);
INSERT INTO `orders` VALUES ('10', '1', 'G0929932984571324', '2017-09-29', '小明', '2147483647', '北京市北京市东城区东大街1号', '4', '459.00', '未支付', '待发货', '2017-09-29 21:54:58', null);
INSERT INTO `orders` VALUES ('11', '1', 'G0929945860643347', '2017-09-29', '小明', '2147483647', '北京市北京市东城区东大街1号', '4', '518.00', '未支付', '待发货', '2017-09-29 22:16:26', null);
INSERT INTO `orders` VALUES ('12', '1', 'G0930027432405435', '2017-09-30', '张雨', '2147483647', '江西省南昌市东湖区东湖', '3', '89.00', '未支付', '待发货', '2017-09-30 00:32:23', null);
INSERT INTO `orders` VALUES ('13', '1', 'G1002097483268803', '2017-10-02', '小明', '2147483647', '北京市北京市东城区东大街1号', '4', '24.90', '未支付', '待发货', '2017-10-02 10:02:28', null);
INSERT INTO `orders` VALUES ('14', '7', 'G1009443542397992', '2017-10-09', 'ii', '1324443', '上海市上海市黄浦区ii', '0', '89.00', '未支付', '待发货', '2017-10-09 18:19:14', null);

-- ----------------------------
-- Table structure for `orderslist`
-- ----------------------------
DROP TABLE IF EXISTS `orderslist`;
CREATE TABLE `orderslist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0' COMMENT '所属订单id',
  `number` int(11) NOT NULL DEFAULT '0' COMMENT '购买数量',
  `subtotal` decimal(7,2) NOT NULL DEFAULT '0.00' COMMENT '价格小计',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `goods_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品id',
  `goods_attr` varchar(255) NOT NULL DEFAULT '0' COMMENT '商品属性',
  `logistics` varchar(255) NOT NULL DEFAULT '' COMMENT '物流信息',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orderslist
-- ----------------------------
INSERT INTO `orderslist` VALUES ('1', '1', '1', '599.00', '', '5', '均码', '', '2017-09-27 21:57:40', null);
INSERT INTO `orderslist` VALUES ('2', '3', '2', '448.00', '添加', '3', '薄荷绿', '', '2017-09-28 10:05:59', null);
INSERT INTO `orderslist` VALUES ('4', '5', '2', '1128.00', '', '1', '2人套装（杯+碟+勺）', '', '2017-09-28 10:08:07', null);
INSERT INTO `orderslist` VALUES ('5', '5', '2', '844.00', '', '9', '标准', '', '2017-09-28 10:08:07', null);
INSERT INTO `orderslist` VALUES ('6', '5', '3', '297.00', '', '11', '从林绿', '', '2017-09-28 10:08:07', null);
INSERT INTO `orderslist` VALUES ('7', '6', '1', '459.00', '', '8', '黑色', '', '2017-09-28 12:17:22', null);
INSERT INTO `orderslist` VALUES ('8', '7', '1', '599.00', '', '5', '均码', '', '2017-09-28 14:45:26', null);
INSERT INTO `orderslist` VALUES ('9', '8', '1', '453.00', '添加备注', '16', '咖啡杯+碟（*2）', '', '2017-09-28 14:51:05', null);
INSERT INTO `orderslist` VALUES ('10', '9', '1', '224.00', '', '3', '薄荷绿', '', '2017-09-29 21:51:18', null);
INSERT INTO `orderslist` VALUES ('11', '10', '1', '459.00', '', '8', '黑色', '', '2017-09-29 21:54:58', null);
INSERT INTO `orderslist` VALUES ('12', '11', '1', '459.00', '', '8', '黑色', '', '2017-09-29 22:16:26', null);
INSERT INTO `orderslist` VALUES ('13', '11', '1', '59.00', '', '7', '月光白', '', '2017-09-29 22:16:26', null);
INSERT INTO `orderslist` VALUES ('14', '12', '1', '89.00', '快点发货', '20', '蓝色', '', '2017-09-30 00:32:23', null);
INSERT INTO `orderslist` VALUES ('15', '13', '1', '24.90', '不要有磕碰', '14', '琉璃青', '', '2017-10-02 10:02:28', null);
INSERT INTO `orderslist` VALUES ('16', '14', '1', '89.00', '', '20', '蓝色', '', '2017-10-09 18:19:14', null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL DEFAULT '' COMMENT '用户名，登陆使用',
  `password` varchar(32) NOT NULL DEFAULT 'e10adc3949ba59abbe56e057f20f883e' COMMENT '用户密码',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否是后台，1是后台',
  `login_time` date NOT NULL DEFAULT '0000-00-00' COMMENT '登陆时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '96e79218965eb72c92a549dd5a330112', '1', '0000-00-00');
INSERT INTO `users` VALUES ('3', 'user', '96e79218965eb72c92a549dd5a330112', '0', '0000-00-00');
INSERT INTO `users` VALUES ('4', '1365734695', '9d74dd906e0a4b97dd30d3b6d053d93b', '0', '0000-00-00');
INSERT INTO `users` VALUES ('5', '1234567890', '385c28cee262619333f1721755202832', '0', '0000-00-00');
INSERT INTO `users` VALUES ('6', '1111', 'b59c67bf196a4758191e42f76670ceba', '0', '0000-00-00');
INSERT INTO `users` VALUES ('7', 'try', '080f651e3fcca17df3a47c2cecfcb880', '0', '0000-00-00');
