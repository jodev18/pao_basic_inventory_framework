-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 
-- サーバのバージョン： 10.3.16-MariaDB
-- PHP のバージョン: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `pao_basic_inventory`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `inv_accountables`
--

CREATE TABLE `inv_accountables` (
  `acc_id` int(11) NOT NULL,
  `acc_name` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `inv_accountables`
--

INSERT INTO `inv_accountables` (`acc_id`, `acc_name`, `dept_id`) VALUES
(1, 'Taeng gala', 1),
(2, 'Rendel Francisco', 1),
(3, 'Umar javed', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `inv_departments`
--

CREATE TABLE `inv_departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `dept_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `inv_departments`
--

INSERT INTO `inv_departments` (`dept_id`, `dept_name`, `dept_desc`) VALUES
(1, 'Tae', 'adasdmnasbfjsdvjnsvjns v'),
(2, 'Department ni Reinhart', 'Motherfucking department'),
(3, 'dsadasdsa', 'asdsadasdasds');

-- --------------------------------------------------------

--
-- テーブルの構造 `inv_equipments`
--

CREATE TABLE `inv_equipments` (
  `equip_id` int(11) NOT NULL,
  `equip_name` varchar(50) NOT NULL,
  `equip_acc_id` int(11) NOT NULL,
  `equip_price` double NOT NULL,
  `equip_qty` int(6) NOT NULL,
  `equip_model_no` varchar(50) NOT NULL,
  `equip_serial` varchar(50) NOT NULL,
  `equip_date_purchased` date NOT NULL,
  `equip_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `inv_equipments`
--

INSERT INTO `inv_equipments` (`equip_id`, `equip_name`, `equip_acc_id`, `equip_price`, `equip_qty`, `equip_model_no`, `equip_serial`, `equip_date_purchased`, `equip_type_id`) VALUES
(2, 'Samsung Galaxy Note 8', 1, 561615.64, 2, '123', '12321', '0000-00-00', 1),
(3, 'qasdasdsadsa', 2, 12312, 2, '123', '12321', '0000-00-00', 2),
(4, 'Dildo ni Reinhart', 2, 123123, 12312, '2131212', 'defew1r1r1f1', '0000-00-00', 2),
(5, 'asdasd', 3, 123123123, 123213, 'svdsvw3q3', 'gv3wb3b23v', '0000-00-00', 4),
(6, 'Test Equip 2', 2, 312312, 123213, '12321', '1232', '0000-00-00', 2),
(7, 'asdasd', 3, 123123123, 123213, 'svdsvw3q3', 'gv3wb3b23v', '0000-00-00', 4),
(8, 'asdasd', 3, 123123123, 123213, 'svdsvw3q3', 'gv3wb3b23v', '0000-00-00', 4),
(9, 'asdsads', 1, 213213, 2, '1232', '13221', '2020-01-17', 1),
(10, 'HKC Monitor 2', 2, 21321321, 12312321, 'sge4vq2', 'v13d3d32d', '2019-11-12', 5);

-- --------------------------------------------------------

--
-- テーブルの構造 `inv_item_types`
--

CREATE TABLE `inv_item_types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `type_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `inv_item_types`
--

INSERT INTO `inv_item_types` (`type_id`, `type_name`, `type_description`) VALUES
(1, 'asdsad', 'asdsa'),
(2, 'Speaker', 'Something that produces sounds'),
(3, 'Dildo', 'Pleasure seekers'),
(4, 'Microphone', 'Converts air vibrations into electrical signals'),
(5, 'Monitor', 'Something to see'),
(6, 'Computer Processor', 'Something to see'),
(7, 'RAM', 'Something to see'),
(8, 'Motherboard', 'System unit motherboard');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `inv_accountables`
--
ALTER TABLE `inv_accountables`
  ADD PRIMARY KEY (`acc_id`);

--
-- テーブルのインデックス `inv_departments`
--
ALTER TABLE `inv_departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- テーブルのインデックス `inv_equipments`
--
ALTER TABLE `inv_equipments`
  ADD PRIMARY KEY (`equip_id`);

--
-- テーブルのインデックス `inv_item_types`
--
ALTER TABLE `inv_item_types`
  ADD PRIMARY KEY (`type_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `inv_accountables`
--
ALTER TABLE `inv_accountables`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルのAUTO_INCREMENT `inv_departments`
--
ALTER TABLE `inv_departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルのAUTO_INCREMENT `inv_equipments`
--
ALTER TABLE `inv_equipments`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルのAUTO_INCREMENT `inv_item_types`
--
ALTER TABLE `inv_item_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
