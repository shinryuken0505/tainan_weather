-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-05-26 10:42:06
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `weather`
--

-- --------------------------------------------------------

--
-- 資料表結構 `weather_tainan`
--

CREATE TABLE `weather_tainan` (
  `wtid` int(10) NOT NULL,
  `lat` varchar(10) NOT NULL,
  `lng` varchar(10) NOT NULL,
  `locationName` varchar(10) NOT NULL,
  `stationId` varchar(10) NOT NULL,
  `obstime` datetime NOT NULL,
  `ELEV` varchar(10) DEFAULT NULL,
  `WDIR` varchar(10) DEFAULT NULL,
  `WDSD` varchar(10) DEFAULT NULL,
  `TEMP` varchar(10) DEFAULT NULL,
  `HUMD` varchar(10) DEFAULT NULL,
  `PRES` varchar(10) DEFAULT NULL,
  `24R` varchar(10) DEFAULT NULL,
  `CITY` varchar(5) NOT NULL,
  `CITY_SN` int(5) NOT NULL,
  `TOWN` varchar(10) NOT NULL,
  `TOWN_SN` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `weather_tainan`
--
ALTER TABLE `weather_tainan`
  ADD PRIMARY KEY (`wtid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `weather_tainan`
--
ALTER TABLE `weather_tainan`
  MODIFY `wtid` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
