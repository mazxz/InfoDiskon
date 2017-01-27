-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 06:26 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infodiskon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_master_admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_master_admin`
--

INSERT INTO `tbl_master_admin` (`adminID`, `nama_admin`, `email`, `username`, `password`) VALUES
(1, 'Stefanus H Hontong', 'valend.valend07@gmail.com', 'Admin', 'admin'),
(2, 'Jeffry Cik', 'jeffry.cik@gmail.com', 'Jefry12', 'jeffry'),
(3, 'martinus', 'martinus@gmail.com', 'martinus69', 'martinus123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_category_merchant`
--

CREATE TABLE IF NOT EXISTS `tbl_master_category_merchant` (
  `merchant_categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `merchant_category` varchar(255) NOT NULL,
  PRIMARY KEY (`merchant_categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_master_category_merchant`
--

INSERT INTO `tbl_master_category_merchant` (`merchant_categoryID`, `merchant_category`) VALUES
(1, 'E-Commerce'),
(2, 'Marketplace'),
(3, 'Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_category_promo`
--

CREATE TABLE IF NOT EXISTS `tbl_master_category_promo` (
  `promo_categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `promo_category` varchar(255) NOT NULL,
  PRIMARY KEY (`promo_categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_master_category_promo`
--

INSERT INTO `tbl_master_category_promo` (`promo_categoryID`, `promo_category`) VALUES
(1, 'Discount'),
(2, 'Merchant'),
(3, 'Free Stuff'),
(4, 'Special Price'),
(5, 'Voucher');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_coupon`
--

CREATE TABLE IF NOT EXISTS `tbl_master_coupon` (
  `couponID` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_description` varchar(255) NOT NULL,
  `lastUpdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdateBy` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  PRIMARY KEY (`couponID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_master_coupon`
--

INSERT INTO `tbl_master_coupon` (`couponID`, `coupon_code`, `coupon_description`, `lastUpdate`, `lastUpdateBy`, `createdBy`) VALUES
(2, 'HOLY10', 'Discount all items 10%', '2017-01-12 11:35:15', 'admin', 'admin'),
(4, 'CYBERITS10', 'Discount 10% all hosting product at cyberits.co.id', '2017-01-12 13:28:27', 'admin', 'admin'),
(5, 'BUKALAPAKGOSEND', 'Potongan Rp 5000 setiap kali kirim barang dengan GOSEND', '2017-01-12 14:09:13', 'admin', 'admin'),
(23, 'nnnn', 'nnnn', '2017-01-12 15:15:27', 'admin', 'admin'),
(24, 'asaas', 'asas', '2017-01-12 15:41:08', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_merchant`
--

CREATE TABLE IF NOT EXISTS `tbl_master_merchant` (
  `merchantID` int(11) NOT NULL AUTO_INCREMENT,
  `merchant_name` varchar(255) NOT NULL,
  `merchant_category` varchar(255) NOT NULL,
  `merchant_product` varchar(255) NOT NULL,
  `lastUpdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdateBy` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  PRIMARY KEY (`merchantID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_master_merchant`
--

INSERT INTO `tbl_master_merchant` (`merchantID`, `merchant_name`, `merchant_category`, `merchant_product`, `lastUpdate`, `lastUpdateBy`, `createdBy`) VALUES
(1, 'BLIBLI', 'Marketplace', 'Gadget & Computer', '2017-01-12 13:26:56', 'admin', 'jefry12'),
(2, 'BUKALAPAK', 'Marketplace', 'Sepeda', '2017-01-12 11:52:31', 'martinus69', 'jefry12'),
(3, 'MatahariMall', 'E-Commerce', 'Fashion', '2017-01-12 11:52:56', 'martinus69', 'Admin'),
(4, 'BHINNEKA.COM', 'E-Commerce', 'Komputer', '2017-01-11 17:00:00', 'jefry12', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction_promo`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction_promo` (
  `promoID` int(11) NOT NULL AUTO_INCREMENT,
  `promo_name` varchar(255) NOT NULL,
  `promo_description` varchar(255) NOT NULL,
  `merchant_name` varchar(255) NOT NULL,
  `promo_category` varchar(255) NOT NULL,
  `promo_image` varchar(255) NOT NULL,
  `promo_link` varchar(255) NOT NULL,
  `lastUpdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdateBy` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  PRIMARY KEY (`promoID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_transaction_promo`
--

INSERT INTO `tbl_transaction_promo` (`promoID`, `promo_name`, `promo_description`, `merchant_name`, `promo_category`, `promo_image`, `promo_link`, `lastUpdate`, `lastUpdateBy`, `createdBy`) VALUES
(1, 'Special Price dari', 'Nikmati harga special Rp 28.182,- untuk semua Baked Potato atau diskon 10% untuk makanan atau minuman lainya di Wendy''s dengan menggunakan T-Cash', 'WENDY''S', 'Special Price', 'promo1.jpg', 'http://www.wendys.co.id/promo/detail_promo/ZK3VYRWwqJ/t-cash.html', '2017-01-12 18:59:44', 'admin', 'admin'),
(2, 'PROMO Khusus Harbolnas', 'Nantikan Harbolnas Bukalapak 2016.\r\nCatat tanggalnya 12 - 14 Desember 2016.\r\nAkan ada banyak promo dan penawaran menarik.\r\nJangan sampai kelewatan! ', 'BUKALAPAK', 'Discount', 'promo2.jpg', 'https://blog.bukalapak.com/2016/12/harbolnasnya-bukalapak-tnc/', '2017-01-12 22:16:53', 'admin', 'admin'),
(3, '[HARGA SPESIAL] Striped Women ', '\r\n\r\nDAPATKAN POTONGAN\r\nRp 100.000\r\nMDSMID100\r\n\r\n*Min. Pembelian Rp 300.000\r\n\r\n*Berlaku untuk semua produk MatahariStore.com\r\n\r\nPeriode: 10-16 Jan 2017\r\n', 'MatahariMall', 'Merchant', 'promo4.jpg', '', '2017-01-12 22:41:09', 'admin', 'admin'),
(4, 'SUPERB HOT DEALS!!!', 'Ekstra Diskon 5% tanpa batasan maksimum diskon untuk produk Elektronik! Cicilan 0% hingga 24 bulan. SENIN - JUMAT | 10.00 - 17.00.', 'BLIBLI', 'Special Price', 'promo3.jpg', '', '2017-01-12 22:47:39', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
