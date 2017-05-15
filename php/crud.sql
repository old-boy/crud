-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 05 月 15 日 14:11
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `crud`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_users`
--

CREATE TABLE IF NOT EXISTS `t_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'userId',
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_age` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=68 ;

--
-- 转存表中的数据 `t_users`
--

INSERT INTO `t_users` (`user_id`, `user_name`, `user_age`, `user_sex`) VALUES
(15, '李焕', '28', '女'),
(14, '大胡子娃娃', '23', '女'),
(4, '李芬', '32', '女'),
(5, '詹永明', '28', '男'),
(6, '高波', '20', '男'),
(8, '柳大人', '28', '女'),
(9, '李飞', '20', '女'),
(10, '赵峰', '24', '男'),
(11, '夏国柱', '45', '男'),
(12, '李秀', '31', '男'),
(13, '陈绪华', '45', '男'),
(16, '陈文飞', '34', '男'),
(17, '孙文敢', '46', '男'),
(67, '99', '2', '男');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
