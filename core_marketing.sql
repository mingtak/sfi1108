-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016 年 11 月 09 日 13:53
-- 伺服器版本: 5.5.49-0ubuntu0.12.04.1
-- PHP 版本： 5.3.10-1ubuntu3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `core_marketing`
--

-- --------------------------------------------------------

--
-- 資料表結構 `sfievent_cup`
--

CREATE TABLE IF NOT EXISTS `sfievent_cup` (
  `sfievent_cupNo` int(10) unsigned NOT NULL COMMENT '流水號',
  `sfievent_cupName` varchar(255) NOT NULL COMMENT '姓名',
  `sfievent_cupEmail` varchar(255) NOT NULL COMMENT '電子信箱',
  `sfievent_cupPhone` varchar(255) NOT NULL COMMENT '聯絡電話'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='疊疊樂資料';

--
-- 資料表的匯出資料 `sfievent_cup`
--

INSERT INTO `sfievent_cup` (`sfievent_cupNo`, `sfievent_cupName`, `sfievent_cupEmail`, `sfievent_cupPhone`) VALUES
(1, 'AAA', 'BBB', 'CCC'),
(2, '葉駿騰', '0963210940', 'tt31116@gmail.com'),
(3, '第', '02-22222222', 'albert@sfi.org.tw'),
(4, '111', '222', 'www'),
(5, '213123', '123213', '12312312'),
(6, 'ADAS', 'AD', 'DD@SS0SS.SS'),
(7, '1233', '123114143', '1231412'),
(8, 'fsdxtse', '13225363', '1321554ww'),
(9, '242554w5', '3314342', '31231315');

-- --------------------------------------------------------

--
-- 資料表結構 `sfievent_log`
--

CREATE TABLE IF NOT EXISTS `sfievent_log` (
  `sfievent_logNo` int(10) unsigned NOT NULL COMMENT '系統紀錄檔主鍵',
  `sfievent_logID` varchar(64) NOT NULL COMMENT '使用者ID',
  `sfievent_logAction` varchar(255) NOT NULL COMMENT '使用者行為',
  `sfievent_logDatetime` datetime NOT NULL COMMENT '事件發生日期',
  `sfievent_logIPAddr` varchar(64) NOT NULL COMMENT '使用者來源IP Address'
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='系統紀錄檔';

--
-- 資料表的匯出資料 `sfievent_log`
--

INSERT INTO `sfievent_log` (`sfievent_logNo`, `sfievent_logID`, `sfievent_logAction`, `sfievent_logDatetime`, `sfievent_logIPAddr`) VALUES
(1, 'core', '使用者登入', '2016-10-23 00:22:43', '1.160.26.32'),
(2, 'core', '使用者登入', '2016-10-24 11:02:06', '118.163.153.95'),
(3, 'core', '使用者登入', '2016-10-24 11:12:39', '175.181.152.93'),
(4, 'core', '使用者登入', '2016-10-24 11:37:13', '175.181.152.93'),
(5, 'core', '使用者登出', '2016-10-24 11:40:18', '175.181.152.93'),
(6, 'core', '使用者登入', '2016-11-04 17:32:48', '175.181.253.111'),
(7, 'core', '使用者登出', '2016-11-04 18:06:35', '175.181.253.111'),
(8, 'core', '使用者登入', '2016-11-07 17:29:06', '118.163.153.95'),
(9, 'core', '修改資料 - sfievent_wiki', '2016-11-07 17:29:17', '118.163.153.95'),
(10, 'core', '修改資料 - sfievent_wiki', '2016-11-07 17:29:57', '118.163.153.95'),
(11, 'core', '修改資料 - sfievent_wiki', '2016-11-07 17:30:07', '118.163.153.95'),
(12, 'core', '使用者登入', '2016-11-07 18:10:01', '111.241.63.180'),
(13, 'core', '使用者登入', '2016-11-07 18:37:39', '175.181.226.190'),
(14, 'core', '修改資料 - sfievent_wiki', '2016-11-07 18:37:52', '175.181.226.190'),
(15, 'core', '修改資料 - sfievent_wiki', '2016-11-07 18:38:28', '175.181.226.190'),
(16, 'core', '使用者登出', '2016-11-07 18:42:18', '175.181.226.190'),
(17, 'core', '使用者登入', '2016-11-08 09:50:37', '175.181.226.190'),
(18, 'core', '修改資料 - sfievent_wiki', '2016-11-08 09:50:49', '175.181.226.190'),
(19, 'core', '修改資料 - sfievent_wiki', '2016-11-08 09:51:24', '175.181.226.190'),
(20, 'core', '使用者登出', '2016-11-08 10:05:34', '175.181.226.190');

-- --------------------------------------------------------

--
-- 資料表結構 `sfievent_login`
--

CREATE TABLE IF NOT EXISTS `sfievent_login` (
  `sfievent_loginNo` tinyint(10) unsigned NOT NULL,
  `sfievent_loginID` varchar(16) NOT NULL DEFAULT '' COMMENT '登入帳號',
  `sfievent_loginPW` varchar(16) NOT NULL DEFAULT '' COMMENT '登入密碼',
  `sfievent_loginAccess` text NOT NULL COMMENT '開放權限',
  `sfievent_loginEmail` varchar(128) NOT NULL DEFAULT '' COMMENT '電子郵件'
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='登入權限';

--
-- 資料表的匯出資料 `sfievent_login`
--

INSERT INTO `sfievent_login` (`sfievent_loginNo`, `sfievent_loginID`, `sfievent_loginPW`, `sfievent_loginAccess`, `sfievent_loginEmail`) VALUES
(1, 'allan', 'allan@Test', '7,12,4,1', 'allan@allan.tw'),
(2, 'core', 'core', '7,1', '');

-- --------------------------------------------------------

--
-- 資料表結構 `sfievent_page`
--

CREATE TABLE IF NOT EXISTS `sfievent_page` (
  `sfievent_pageNo` tinyint(3) unsigned NOT NULL,
  `sfievent_pageID` varchar(32) NOT NULL,
  `sfievent_pageName` varchar(64) NOT NULL,
  `sfievent_pageIntro` varchar(128) NOT NULL,
  `sfievent_pageIndex` tinyint(3) NOT NULL DEFAULT '0',
  `sfievent_pageSort` tinyint(3) NOT NULL DEFAULT '0',
  `sfievent_pageDisabled` tinyint(1) NOT NULL COMMENT '隱藏此頁'
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='系統功能選單';

--
-- 資料表的匯出資料 `sfievent_page`
--

INSERT INTO `sfievent_page` (`sfievent_pageNo`, `sfievent_pageID`, `sfievent_pageName`, `sfievent_pageIntro`, `sfievent_pageIndex`, `sfievent_pageSort`, `sfievent_pageDisabled`) VALUES
(1, 'sfievent_login', '登入權限管理', '維護有權限可以登入本系統的使用者資訊', 0, 99, 0),
(2, 'sfievent_login_list', '列表登入權限資料', '目前可以使用後端管理介面的帳號列表', 1, 1, 0),
(3, 'sfievent_login_add', '新增登入權限資料', '新增一個可以使用後端管理介面的帳號', 1, 2, 0),
(4, 'sfievent_sysop', '系統管理', '系統參數配置和環境設定', 0, 98, 0),
(5, 'sfievent_page_list', '設定系統功能選單', '設定各頁面排序及相關資訊', 4, 1, 0),
(6, 'sfievent_log_list', '系統紀錄檔', '紀錄系統上發生的行為資訊', 4, 2, 0),
(7, 'sfievent_game', '遊戲參與者名單管理', '遊戲參與者名單管理', 0, 1, 0),
(8, 'sfievent_wiki_list', '百科金句參與者列表', '', 7, 2, 0),
(10, 'sfievent_cup_list', '疊疊樂參與者列表', '', 7, 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `sfievent_wiki`
--

CREATE TABLE IF NOT EXISTS `sfievent_wiki` (
  `sfievent_wikiNo` int(10) unsigned NOT NULL COMMENT '流水號',
  `sfievent_wikiName` varchar(255) NOT NULL COMMENT '姓名',
  `sfievent_wikiEmail` varchar(255) NOT NULL COMMENT '電子信箱',
  `sfievent_wikiPhone` varchar(255) NOT NULL COMMENT '聯絡電話',
  `sfievent_wikiWord` varchar(255) NOT NULL COMMENT '金句',
  `sfievent_wikiDT` datetime NOT NULL COMMENT '日期時間',
  `sfievent_wikiHide` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否隱藏'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='百科金句資料';

--
-- 資料表的匯出資料 `sfievent_wiki`
--

INSERT INTO `sfievent_wiki` (`sfievent_wikiNo`, `sfievent_wikiName`, `sfievent_wikiEmail`, `sfievent_wikiPhone`, `sfievent_wikiWord`, `sfievent_wikiDT`, `sfievent_wikiHide`) VALUES
(2, 'asdasd', 'dasdas', 'asds', 'adsdasas', '0000-00-00 00:00:00', 0),
(3, '張小峰', '123456789', '123@456', '哇啦啦', '0000-00-00 00:00:00', 1),
(4, '打工的', '02-122222222222', 'albert@sfi.org.tw', '我來試試看', '0000-00-00 00:00:00', 1),
(5, 'Www', 'www', 'www', 'Www', '0000-00-00 00:00:00', 1),
(6, 'asdasd', 'adsad', 'asd@ada.asd', 'dsadasdasd', '0000-00-00 00:00:00', 0),
(7, 'asdasd', 'adsad', 'asd@ada.asd', 'dsadasdasd', '0000-00-00 00:00:00', 0),
(8, 'sdfsd', 'sf', 'sfd@SS.22', 'sfsdf', '0000-00-00 00:00:00', 0),
(9, '1321424', '123sfsff45', '1353efdasd', 'sjflj9o3jljflkfjlaj g', '0000-00-00 00:00:00', 1),
(10, '111', '111', '11@11.11', 'dasdasd', '2016-11-07 19:55:36', 0),
(11, 'ㄎㄧㄤ', 'jskdkks', 'zsakjskdcsjks', '嗨嗨嗨', '2016-11-08 09:07:18', 0),
(12, 'dc', '0911-123123', 'dc@123.com', 'oh yeah~', '2016-11-08 09:44:47', 0),
(13, 'dc02', '0900-321321', 'dc02@654.com', '根據ManpowerGroup萬寶華「2016全球人才短缺調查結果」，高達73%台灣雇主面臨徵才困難，較去（2015）年增加16個百分點，高居全球第2，是自2006年加入調查以來最高；至於台灣雇主最急需網羅的前3大職缺，其實和去年相去不遠，分別為業務代表、工程師、技術人員，而業務代表更已連續7年登上最難找人才榜首。', '2016-11-08 09:46:13', 0),
(14, '阿呆', '12345678', 'abc@123.com', '金融知識太重要，風險觀念不可少', '2016-11-08 17:54:51', 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `sfievent_cup`
--
ALTER TABLE `sfievent_cup`
  ADD PRIMARY KEY (`sfievent_cupNo`);

--
-- 資料表索引 `sfievent_log`
--
ALTER TABLE `sfievent_log`
  ADD PRIMARY KEY (`sfievent_logNo`);

--
-- 資料表索引 `sfievent_login`
--
ALTER TABLE `sfievent_login`
  ADD PRIMARY KEY (`sfievent_loginNo`);

--
-- 資料表索引 `sfievent_page`
--
ALTER TABLE `sfievent_page`
  ADD PRIMARY KEY (`sfievent_pageNo`);

--
-- 資料表索引 `sfievent_wiki`
--
ALTER TABLE `sfievent_wiki`
  ADD PRIMARY KEY (`sfievent_wikiNo`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `sfievent_cup`
--
ALTER TABLE `sfievent_cup`
  MODIFY `sfievent_cupNo` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '流水號',AUTO_INCREMENT=10;
--
-- 使用資料表 AUTO_INCREMENT `sfievent_log`
--
ALTER TABLE `sfievent_log`
  MODIFY `sfievent_logNo` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '系統紀錄檔主鍵',AUTO_INCREMENT=21;
--
-- 使用資料表 AUTO_INCREMENT `sfievent_login`
--
ALTER TABLE `sfievent_login`
  MODIFY `sfievent_loginNo` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- 使用資料表 AUTO_INCREMENT `sfievent_page`
--
ALTER TABLE `sfievent_page`
  MODIFY `sfievent_pageNo` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- 使用資料表 AUTO_INCREMENT `sfievent_wiki`
--
ALTER TABLE `sfievent_wiki`
  MODIFY `sfievent_wikiNo` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '流水號',AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
