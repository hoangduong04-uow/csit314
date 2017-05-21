-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 03:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csit314`
--

-- --------------------------------------------------------

--
-- Table structure for table `canberra`
--

CREATE TABLE `canberra` (
  `NAME` varchar(60) DEFAULT NULL,
  `TYPE` varchar(12) DEFAULT NULL,
  `CODE` varchar(14) DEFAULT NULL,
  `SELLING_PRICE` varchar(5) DEFAULT NULL,
  `QUANTITY` int(2) DEFAULT NULL,
  `SALECOUNT` varchar(10) DEFAULT NULL,
  `TOTALSALE` varchar(10) DEFAULT NULL,
  `COST_PRICE` int(4) DEFAULT NULL,
  `PROFIT` varchar(10) DEFAULT NULL,
  `RETURN_ITEMS` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `canberra`
--

INSERT INTO `canberra` (`NAME`, `TYPE`, `CODE`, `SELLING_PRICE`, `QUANTITY`, `SALECOUNT`, `TOTALSALE`, `COST_PRICE`, `PROFIT`, `RETURN_ITEMS`) VALUES
('Apple MacBook Pro 15\" with Touch Bar 512GB (Space Grey)', 'Laptop', 'MLH42X/A', '4247', 39, '21', '89187', 3295, '19992', 5),
('Apple MacBook Pro 15\" with Touch Bar 256GB (Space Grey)', 'Laptop', 'MLH32X/A', '3597', 23, '24', '86328', 2848, '17976', 2),
('Apple iMac with Retina 5K display 27\" 3.3GHz', 'Laptop', 'MK482X/A', '3594', 43, '21', '75474', 2617, '20517', 3),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK472X/A', '3096', 50, '26', '80496', 2693, '10478', 2),
('Apple MacBook Pro 13\" with Touch Bar 512GB (Silver)', 'Laptop', 'MNQG2X/A', '2998', 36, '23', '68954', 2179, '18837', 2),
('Apple MacBook Pro 15\" 2.2GHz 256GB', 'Laptop', 'MJLQ2X/A', '2994', 35, '18', '53892', 2669, '5850', 4),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK462X/A', '2797', 20, '12', '33564', 2377, '5040', 5),
('Apple MacBook 12\" 256GB (Silver)', 'Laptop', 'MLHA2X/A', '1998', 42, '18', '35964', 1511, '8766', 5),
('Alienware 15 15.6\" Gaming Laptop (256GB SSD)', 'Laptop', 'A5115A3AU', '2798', 45, '23', '64354', 2133, '15295', 4),
('HP 15-AY150TU 15.6\" Touchscreen Notebook', 'Laptop', '1PL58PA#ABG', '1198', 50, '11', '13178', 960, '2618', 5),
('Samsung KU6000 70\" 4K UHD HDR Smart LED LCD TV', 'TV', 'UA70KU6000WXXY', '2996', 39, '25', '74900', 2121, '21875', 1),
('Hisense M7000UWG 55\" ULED HDR Smart LED LCD TV', 'TV', '55M7000UWG', '1098', 29, '17', '18666', 859, '4063', 5),
('Sony X7000D 49\" 4K UHD HDR Android Smart LCD LED TV', 'TV', 'KD49X7000D', '1298', 42, '14', '18172', 1082, '3024', 4),
('Samsung KS8500 55\" Curved 4K SUHD HDR Smart LED LCD TV', 'TV', 'UA55KS8500WXXY', '2496', 36, '22', '54912', 1878, '13596', 6),
('Hisense K3300UW 65\" 4K UHD Smart LED LCD TV', 'TV', '65K3300UW', '1496', 33, '13', '19448', 1237, '3367', 4),
('Sony X8500D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X8500D', '2796', 41, '12', '33552', 2327, '5628', 1),
('Samsung UA75JU6400W 75\" 4K UHD Smart LED LCD TV', 'TV', 'UA75JU6400WXXY', '3698', 26, '27', '99846', 2857, '22707', 2),
('Soniq S70UV16A 70\" UHD Smart LED LCD TV', 'TV', 'S70UV16A-AU', '1799', 47, '19', '34181', 1593, '3914', 2),
('Sony Bravia 85\" 4K HDR UHD LED LCD TV', 'TV', 'KD85X8500D', '9998', 48, '10', '99980', 7269, '27290', 5),
('Sony X9300D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X9300D', '3998', 36, '24', '95952', 3162, '20064', 2),
('Samsung Galaxy S8 64GB (Black)', 'Mobile phone', '1091003347', '1199', 40, '13', '15587', 914, '3705', 4),
('Sony Xperia XZ (Black)', 'Mobile phone', '1071000647', '899', 28, '28', '25172', 681, '6104', 1),
('Google Pixel 32GB (Quite Black)', 'Mobile phone', '118298', '1079', 34, '19', '20501', 794, '5415', 6),
('ZTE Axon 7 (Grey)', 'Mobile phone', '1081000466', '699', 31, '10', '6990', 540, '1590', 2),
('Apple iPhone 7 128GB (Black)', 'Mobile phone', '3801000006', '1229', 21, '19', '23351', 887, '6498', 1),
('LG G6 64GB Dual Sim Handset (Black)', 'Mobile phone', '3611246', '1149', 44, '19', '21831', 830, '6061', 1),
('Huawei Mate 9 Handset (Mocha)', 'Mobile phone', '1101000951', '998', 43, '13', '12974', 835, '2119', 6),
('HTC U Ultra 64GB Handset (Cosmetic Pink)', 'Mobile phone', '1011001103', '898', 39, '23', '20654', 682, '4968', 5),
('Oppo R9s Plus Handset (Gold)', 'Mobile phone', ' CPH1611GOLD', '698', 39, '14', '9772', 509, '2646', 4),
('Samsung Galaxy Note 5 32GB (Black)', 'Mobile phone', '1091002203', '947', 24, '28', '26516', 665, '7896', 2),
('Canon EOS 1300D Digital SLR Camera (with 18-55mm Lens)', 'Camera', '1300DKB', '499', 26, '30', '14970', 435, '1920', 5),
('Olympus OM-D E-M1 Mark II Digital SLR (Body Only)', 'Camera', 'V207060BA000', '2499', 43, '12', '29988', 1869, '7560', 5),
('Sony FDRAX53 4K Handycam w/ BOSS', 'Camera', 'FDRAX53', '1099', 31, '14', '15386', 867, '3248', 3),
('Nikon Coolpix P900 16MP Digital Camera', 'Camera', 'DC-GX850KGNS', '798', 32, '18', '14364', 685, '2034', 6),
('Canon Powershot G9 X Mark II 20.1MP Digital Camera (Silver)', 'Camera', 'VNA750AC', '749', 36, '18', '13482', 567, '3276', 6),
('Fujifilm Instax Mini 8 Instant Camera and Case (Grape)', 'Camera', 'G9XIIS', '548', 43, '15', '8220', 444, '1560', 5),
('Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit', 'Camera', '84933', '99', 49, '18', '1782', 89, '180', 6),
('GoPro Hero5 Black 4K Action Video Camera', 'Camera', '791490', '549', 37, '11', '6039', 410, '1529', 2),
('Panasonic Lumix DC-FZ80GN-K 18.1MP Ultra Zoom Digital Camera', 'Camera', 'GPCHDHX-501', '548', 26, '15', '8220', 388, '2400', 1),
('Nikon Coolpix B700 20.3MP Ultra Zoom Digital Camera', 'Camera', 'DC-FZ80GN-K', '598', 28, '24', '14352', 525, '1752', 5),
('Mackie CR4 4\" Powered Studio Monitors', 'Audio', 'M-CR4', '196', 20, '19', '3724', 142, '1026', 5),
('Jaybird Freedom Wireless In-Ear Headphones (Carbon)', 'Audio', 'F5-S-B-AP-ANZ', '249', 42, '20', '4980', 191, '1160', 4),
('AERPRO Multicolour LED 5M Strip Lighting', 'Audio', 'SMD5MC', '28', 27, '26', '728', 25, '78', 3),
('Marley Smile Jamaica In-Ear Headphones (Copper)', 'Audio', 'EMJE041CP', '24.95', 36, '12', '299.4', 21, '47.4', 6),
('MXL Tempo SK USB Microphone (Silver)', 'Audio', 'MXL-TEMPO SK', '98', 47, '18', '1764', 78, '360', 2),
('JBL E55BT Over-Ear Wireless Headphones (Black)', 'Audio', '3378033', '229', 39, '19', '4351', 184, '855', 1),
('Novation Launchpad Mini Music Creator', 'Audio', 'NOV-LPMIN', '141', 24, '27', '3807', 102, '1053', 6),
('Beats Tour 2 Active In-Ear Headphones (Red)', 'Audio', 'MKPV2PA/A', '169', 43, '22', '3718', 148, '462', 5),
('Stadium USBMIC1 USB Studio Microphone', 'Audio', 'USBMIC1', '78', 28, '17', '1326', 67, '187', 3),
('Rode NTUSB Microphone', 'Audio', 'NTUSB', '168', 30, '22', '3696', 121, '1034', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
