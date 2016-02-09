-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 31 2016 г., 23:58
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `SQL-test_book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `PRODUCTS`
--

CREATE TABLE IF NOT EXISTS `PRODUCTS` (
  `MFR_ID` char(3) NOT NULL COMMENT 'IDENTIFICATOR PRODUCERA',
  `PRODUCT_ID` char(5) NOT NULL,
  `DESCRIPTION` varchar(20) NOT NULL,
  `PRICE` decimal(9,2) NOT NULL,
  `QTY_ON_HAND` int(11) NOT NULL COMMENT 'NUMBER OF PRODUCTS',
  PRIMARY KEY (`MFR_ID`,`PRODUCT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `PRODUCTS`
--

INSERT INTO `PRODUCTS` (`MFR_ID`, `PRODUCT_ID`, `DESCRIPTION`, `PRICE`, `QTY_ON_HAND`) VALUES
('ACI', '41001', 'Size 1 widget', '55.00', 277),
('ACI', '41003', 'Size 3 widget', '107.00', 207),
('ACI', '41004', 'Size 4 widget', '117.00', 139),
('ACI', '4100Y', 'Widget Remover', '79.00', 25),
('ACI', '4100Z', 'Widget Installer', '2500.00', 28),
('ACT', '41002', 'Size 2 widget', '76.00', 167),
('BIC', '41003', 'Handle', '652.00', 3),
('BIC', '41089', 'Retainer', '225.00', 78),
('BIC', '41672', 'Plate', '180.00', 0),
('FEA', '112', 'Housing', '148.00', 115),
('IMM', '775C', '500-lb Brace', '1425.00', 5),
('IMM', '779C', '900-lb Brace', '1875.00', 9),
('IMM', '887H', 'Brace Holder', '54.00', 223),
('IMM', '887P', 'Brace Pin', '250.00', 24),
('IMM', '887X', 'Brace Retainer', '475.00', 32),
('PEA', '114', 'Motor Mount', '243.00', 15),
('QSA', 'Xk47', 'Reducer', '355.00', 38),
('QSA', 'Xk48', 'Reducer', '134.00', 203),
('QSA', 'XK48A', 'Reducer', '177.00', 37),
('REI', '2A44L', 'Left Hinge', '4500.00', 12),
('REI', '2A44R', 'Right Hinge', '4500.00', 12),
('REI', '2A45C', 'Ratchet Link', '2750.00', 210);
-- --------------------------------------------------------

--
-- Структура таблицы `SALESREPS`
--

CREATE TABLE IF NOT EXISTS `SALESREPS` (
  `EMPL_NUM` int(11) NOT NULL COMMENT 'MANAGER',
  `NAME` varchar(15) NOT NULL,
  `AGE` int(11),
  `REP_OFFICE` int(11),
  `TITLE` varchar(10) NOT NULL,
  `HIRE_DATE` date NOT NULL,
  `MANAGER` int(11) DEFAULT NULL,
  `QUOTA` decimal(9,2) DEFAULT NULL,
  `SALES` decimal(9,2) NOT NULL,
  PRIMARY KEY (`EMPL_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `SALESREPS`
--

INSERT INTO `SALESREPS` (`EMPL_NUM`, `NAME`, `AGE`, `REP_OFFICE`, `TITLE`, `HIRE_DATE`, `MANAGER`, `QUOTA`, `SALES`) VALUES
(101, 'Dan Roberts', 45, 12, 'Sales Rep', '2016-01-08', 104, '30000.00', '30434.00'),
(102, 'Sue Smith', 48, 21, 'Sales Rep', '2016-01-19', 108, '35000.00', '47343.00'),
(103, 'Paul Cruz', 29, 12, 'Sales Rep', '2016-01-22', 104, '275000.00', '250000.00'),
(104, 'Bob Smith', 33, 12, 'Sales Mgr', '2016-01-27', 106, '30000.00', '25343.00'),
(105, 'Bill Adams', 37, 13, 'Sales Rep', '2016-01-01', 104, '35000.00', '36934.00'),
(106, 'Sam Clark', 52, 11, 'VP Sales', '2016-01-08', NULL, '27500.00', '2999.00'),
(108, 'Larry Fitch', 62, 21, 'Sales Mgr', '2016-01-12', 106, '350000.00', '366000.00'),
(109, 'Mary Jones', 31, 11, 'Sales rep', '2016-01-13', 106, '30000.00', '34343.00'),
(110, 'Tom Snyder', 41, NULL, 'Sales Rep', '2016-01-11', 101, NULL, '75132.00');

-- --------------------------------------------------------

--
-- Структура таблицы `CUSTOMERS`
--

CREATE TABLE IF NOT EXISTS `CUSTOMERS` (
  `CUST_NUM` int(11) NOT NULL,
  `COMPANY` varchar(20) NOT NULL,
  `CUST_REP` int(11) NOT NULL,
  `CREDIT_LIMIT` decimal(9,2) NOT NULL,
  PRIMARY KEY (`CUST_NUM`),
  FOREIGN KEY HASREP (CUST_REP)
  REFERENCES SALESREPS
  ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `CUSTOMERS`
--

INSERT INTO `CUSTOMERS` (`CUST_NUM`, `COMPANY`, `CUST_REP`, `CREDIT_LIMIT`) VALUES
(2101, 'Jones Mfg.', 106, '65000.00'),
(2102, 'First Corp.', 101, '65000.00'),
(2103, 'Acme Mfg.', 105, '50000.00'),
(2105, 'AAA Investmens', 101, '45000.00'),
(2106, 'Fred Lewis Corp.', 102, '50000.00'),
(2107, 'Ace International', 110, '35000.00'),
(2108, 'Hol and Landris', 109, '55000.00'),
(2109, 'Chen Associates', 103, '25000.00'),
(2111, 'JCP Inc.', 103, '50000.00'),
(2112, 'Zetacorp', 108, '50000.00'),
(2114, 'Orpinion Corp.', 102, '20000.00'),
(2115, 'Smithon Corp.', 101, '20000.00'),
(2117, 'J.P. Sinclair', 106, '35000.00'),
(2118, 'Midwest Systems', 108, '60000.00'),
(2119, 'Solomon Inc.', 109, '25000.00'),
(2120, 'Rico Enterprises', 102, '50000.00'),
(2121, 'QMA Assoc.', 103, '45000.00'),
(2122, 'Three_way Lines', 105, '30000.00'),
(2123, 'Carter and Sons', 102, '40000.00'),
(2124, 'Peter Brothers', 107, '40000.00');

-- --------------------------------------------------------

--
-- Структура таблицы `OFFICES`
--

CREATE TABLE IF NOT EXISTS `OFFICES` (
  `OFFICE` int(11) NOT NULL,
  `CITY` varchar(15) NOT NULL,
  `REGION` varchar(10) NOT NULL,
  `MGR` int(11),
  `TARGET` decimal(9,2),
  `SALES` decimal(9,2) NOT NULL,
  PRIMARY KEY (`OFFICE`),
  FOREIGN KEY HASMGR (MGR)
  REFERENCES SALESREPS
  ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `OFFICES`
--

INSERT INTO `OFFICES` (`OFFICE`, `CITY`, `REGION`, `MGR`, `TARGET`, `SALES`) VALUES
(11, 'New York', 'Eastern', 106, '575000.00', '692432.00'),
(12, 'Chicago', 'Eastern', 104, '80000.00', '100000.00'),
(13, 'Atlanta', 'Eastern', 105, '350000.00', '343000.00'),
(21, 'Los Angeles', 'Western', 108, '725000.00', '835000.00'),
(22, 'Denver', 'Western', 108, '300000.00', '186043.00');

-- --------------------------------------------------------

--
-- Структура таблицы `ORDERS`
--

CREATE TABLE IF NOT EXISTS `ORDERS` (
  `ORDER_NUM` int(11) NOT NULL,
  `ORDER_DATE` date NOT NULL,
  `CUST` int(11) NOT NULL COMMENT 'CUSTOMER''S NUMBER ',
  `REP` int(11) NOT NULL COMMENT 'SALESREPER''S NUMBER',
  `MFR` char(3) NOT NULL,
  `PRODUCT` char(5) NOT NULL,
  `QTY` int(11) NOT NULL,
  `AMOUNT` decimal(9,2) NOT NULL,
  PRIMARY KEY (`ORDER_NUM`),
  FOREIGN KEY PLACEDBY (CUST)
  REFERENCES CUSTOMERS
  ON DELETE CASCADE,
  FOREIGN KEY TAKENBY (REP)
  REFERENCES SALESREPS
  ON DELETE SET NULL,
  FOREIGN KEY ISFOR (MFR, PRODUCT)
  REFERENCES PRODUCTS
  ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ORDERS`
--

INSERT INTO `ORDERS` (`ORDER_NUM`, `ORDER_DATE`, `CUST`, `REP`, `MFR`, `PRODUCT`, `QTY`, `AMOUNT`) VALUES
(112961, '2016-01-20', 2117, 106, 'REI', '2A44L', 7, '31500.00'),
(112963, '2016-01-05', 2103, 105, 'ACI', '41004', 28, '3276.00'),
(112968, '2016-01-02', 2102, 101, 'ACI', '41004', 34, '3978.00'),
(112989, '2016-01-21', 2101, 106, 'FEA', '114X', 6, '1458.00'),
(113012, '2016-01-08', 2111, 105, 'ACI', '41003', 35, '3745.00'),
(113013, '2016-01-06', 2118, 108, 'BIC', '41003', 1, '652.00'),
(113036, '2016-01-03', 2107, 110, 'ACI', '4100Z', 34, '3978.00'),
(113045, '2016-01-04', 2112, 108, 'REI', '2A44R', 10, '45000.00'),
(113051, '2016-01-14', 2118, 108, 'QSA', 'xk47', 2, '1420.00'),
(113058, '2016-01-07', 2108, 109, 'FEA', '112', 10, '1480.00');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
