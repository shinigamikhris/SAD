-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2017 at 08:31 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `C_MobileNo` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `C_MobileNo`) VALUES
(3, 'Rosel Hermosisima', 192012);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `EmployeeID` int(11) NOT NULL,
  `E_LName` varchar(50) NOT NULL,
  `E_FName` varchar(50) NOT NULL,
  `E_MName` varchar(50) NOT NULL,
  `E_MobileNo` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `E_LName`, `E_FName`, `E_MName`, `E_MobileNo`) VALUES
(1, 'Hermosisima', 'Rohsel', 'Bonutan', '09485768132'),
(2, 'Hermosisima', 'Hazel Joy', 'Bonutan', '09487964415'),
(3, 'Bag-o', 'Rejean', 'Lopez', '09307454578');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `i_id` int(11) NOT NULL,
  `i_desc` varchar(50) NOT NULL,
  `i_qty` int(11) NOT NULL,
  `i_price` varchar(50) NOT NULL,
  `i_sold` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`i_id`, `i_desc`, `i_qty`, `i_price`, `i_sold`) VALUES
(7, 'Alcohol', 3, '39.35', 5),
(9, 'Digital Calculator', 7, '165.40', 3);

-- --------------------------------------------------------

--
-- Table structure for table `loss`
--

CREATE TABLE IF NOT EXISTS `loss` (
  `ProductID` varchar(50) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Qty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(50) NOT NULL,
  `Dates` date NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Amount` double(12,2) NOT NULL,
  `Qty` varchar(20) NOT NULL,
  `Total` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` varchar(15) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Quantity` int(200) NOT NULL,
  `SellingPrice` int(11) NOT NULL,
  `OriginalPrice` int(11) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `Description`, `Quantity`, `SellingPrice`, `OriginalPrice`, `Size`, `Type`, `Brand`) VALUES
('00001', 'TUBE', '2.50 x 17', 15, 120, 100, 'small', 'small', 'RUMI'),
('00002', 'CHAIN SET XRM 125', 'XRM', 29, 400, 250, '125', 'SET', 'RUMI'),
('00003', 'HAND GRIP', 'GRIP', 20, 150, 100, 'MEDUIM', 'HAND', 'RACING BOY'),
('00004', 'BREAKPAD DASH', 'BREAKPAD', 18, 40, 30, 'MEDUIM', 'DASH', 'JYM');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `PurchaseID` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `SupplierID` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`PurchaseID`, `ProductName`, `dates`, `Quantity`, `SupplierID`) VALUES
(13, 'BREAKPAD DASH', '2017-03-21', 1, '4'),
(14, 'TUBE', '2017-03-21', 12, '3'),
(15, 'HAND GRIP', '2017-03-21', 10, '1'),
(16, 'Pedal break', '2017-03-22', -11, '1'),
(17, 'Pedal break', '2017-03-22', -6, '1'),
(18, 'Pedal break', '2017-03-22', 3, '1'),
(19, 'Pedal break', '2017-03-22', 6, '1'),
(20, 'Pedal break', '2017-03-22', -4, '1'),
(21, 'Pedal break', '2017-03-22', -4, '1'),
(22, 'Pedal break', '2017-03-22', 4, '1'),
(23, 'Pedal break', '2017-03-22', 7, '1'),
(24, 'Pedal break', '2017-03-22', -4, '1'),
(25, 'Pedal break', '2017-03-22', -3, '1'),
(26, 'Pedal break', '2017-03-22', 3, '1'),
(27, 'CHAIN SET XRM 125', '2017-03-22', 4, '1'),
(28, 'CHAIN SET XRM 125', '2017-03-22', 1, '1'),
(29, 'CHAIN SET XRM 125', '2017-03-22', 4, '1');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `order_id` int(50) NOT NULL,
  `dates` date NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `SellingPrice` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total` double(12,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`order_id`, `dates`, `ProductName`, `Description`, `Size`, `Type`, `Brand`, `SellingPrice`, `Quantity`, `Total`) VALUES
(15, '2017-03-21', 'TUBE', '2.50 x 17', 'small', 'small', 'RUMI', 120, 2, 240.00),
(16, '2017-03-21', 'BREAKPAD DASH', 'BREAKPAD', 'MEDUIM', 'DASH', 'JYM', 40, 2, 80.00),
(17, '2017-03-21', 'TUBE', '2.50 x 17', 'small', 'small', 'RUMI', 120, 3, 360.00),
(18, '2017-03-21', 'TUBE', '2.50 x 17', 'small', 'small', 'RUMI', 120, 2, 240.00),
(21, '2017-03-21', 'BREAKPAD DASH', 'BREAKPAD', 'MEDUIM', 'DASH', 'JYM', 40, 1, 40.00),
(22, '2017-03-21', 'TUBE', '2.50 x 17', 'small', 'small', 'RUMI', 120, 5, 600.00),
(23, '2017-03-22', 'BREAKPAD DASH', 'BREAKPAD', 'MEDUIM', 'DASH', 'JYM', 40, 3, 120.00),
(24, '2017-03-22', 'TUBE', '2.50 x 17', 'small', 'small', 'RUMI', 120, 5, 600.00),
(25, '2017-03-22', 'BREAKPAD DASH', 'BREAKPAD', 'MEDUIM', 'DASH', 'JYM', 40, 9, 360.00);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `SupplierID` int(11) NOT NULL,
  `Supplier` varchar(50) NOT NULL,
  `S_MobileNo` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SupplierID`, `Supplier`, `S_MobileNo`) VALUES
(1, 'Ian', '991'),
(2, 'Rohsel', '09485768132'),
(3, 'Rejean', '09303030300'),
(4, 'Shiva', '09200020202'),
(5, 'Gabriel', '9987766'),
(6, 'YanYanex', '8888');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `admin_id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `MiddleName` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `usertype` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`admin_id`, `Username`, `Password`, `Lastname`, `Firstname`, `MiddleName`, `Email`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin@gmail.com', 'Admin'),
(2, 'user', 'user', 'user', 'user', 'user', 'user@gmail.com', 'User'),
(3, 'cashier', 'cashier', 'cashier', 'cashier', 'cashier', 'cashier@gmail.com', 'User'),
(5, 'sel', 'sel', 'herms', 'sel', 'bons', 'selbons@gmail.com', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`PurchaseID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SupplierID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `PurchaseID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
