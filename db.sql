SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kr_admin
-- ----------------------------
DROP TABLE IF EXISTS `kr_admin`;
CREATE TABLE `kr_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` smallint(5) unsigned NOT NULL COMMENT '角色ID',
  `username` varchar(50) NOT NULL COMMENT '登陆用户名',
  `password` varchar(32) NOT NULL COMMENT '登陆密码',
  `real_name` varchar(20) NOT NULL COMMENT '真实姓名',
  `mobile` varchar(20) DEFAULT '' COMMENT '手机号码',
  `email` varchar(100) DEFAULT '' COMMENT '联系电话',
  `last_ip` varchar(15) DEFAULT '' COMMENT '最后登录的IP',
  `dt_login` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录的时间',
  `dt_add` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '该用户被添加的时间',
  `dt_update` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户更新的时间',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1启用2停用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='管理员';

-- ----------------------------
-- Records of kr_admin
-- ----------------------------
INSERT INTO `kr_admin` VALUES ('1', '0', 'admin', '03a73f3e7c9a7b38d196cd34c072567e', '管理员', '', '', '123.158.57.56', '1501336767', '0', '0', '1');