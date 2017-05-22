-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 03:26 AM
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
-- Table structure for table `adelaide`
--

CREATE TABLE `adelaide` (
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
-- Dumping data for table `adelaide`
--

INSERT INTO `adelaide` (`NAME`, `TYPE`, `CODE`, `SELLING_PRICE`, `QUANTITY`, `SALECOUNT`, `TOTALSALE`, `COST_PRICE`, `PROFIT`, `RETURN_ITEMS`) VALUES
('Apple MacBook Pro 15\" with Touch Bar 512GB (Space Grey)', 'Laptop', 'MLH42X/A', '4247', 29, '14', '59458', 3295, '13328', 5),
('Apple MacBook Pro 15\" with Touch Bar 256GB (Space Grey)', 'Laptop', 'MLH32X/A', '3597', 48, '34', '122298', 2848, '25466', 6),
('Apple iMac with Retina 5K display 27\" 3.3GHz', 'Laptop', 'MK482X/A', '3594', 41, '21', '75474', 2617, '20517', 2),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK472X/A', '3096', 53, '20', '61920', 2693, '8060', 8),
('Apple MacBook Pro 13\" with Touch Bar 512GB (Silver)', 'Laptop', 'MNQG2X/A', '2998', 30, '25', '74950', 2179, '20475', 3),
('Apple MacBook Pro 15\" 2.2GHz 256GB', 'Laptop', 'MJLQ2X/A', '2994', 58, '22', '65868', 2669, '7150', 7),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK462X/A', '2797', 57, '30', '83910', 2377, '12600', 9),
('Apple MacBook 12\" 256GB (Silver)', 'Laptop', 'MLHA2X/A', '1998', 35, '24', '47952', 1511, '11688', 7),
('Alienware 15 15.6\" Gaming Laptop (256GB SSD)', 'Laptop', 'A5115A3AU', '2798', 56, '20', '55960', 2133, '13300', 3),
('HP 15-AY150TU 15.6\" Touchscreen Notebook', 'Laptop', '1PL58PA#ABG', '1198', 31, '29', '34742', 960, '6902', 5),
('Samsung KU6000 70\" 4K UHD HDR Smart LED LCD TV', 'TV', 'UA70KU6000WXXY', '2996', 44, '18', '53928', 2121, '15750', 4),
('Hisense M7000UWG 55\" ULED HDR Smart LED LCD TV', 'TV', '55M7000UWG', '1098', 55, '20', '21960', 859, '4780', 5),
('Sony X7000D 49\" 4K UHD HDR Android Smart LCD LED TV', 'TV', 'KD49X7000D', '1298', 40, '34', '44132', 1082, '7344', 5),
('Samsung KS8500 55\" Curved 4K SUHD HDR Smart LED LCD TV', 'TV', 'UA55KS8500WXXY', '2496', 25, '12', '29952', 1878, '7416', 8),
('Hisense K3300UW 65\" 4K UHD Smart LED LCD TV', 'TV', '65K3300UW', '1496', 44, '19', '28424', 1237, '4921', 7),
('Sony X8500D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X8500D', '2796', 41, '24', '67104', 2327, '11256', 6),
('Samsung UA75JU6400W 75\" 4K UHD Smart LED LCD TV', 'TV', 'UA75JU6400WXXY', '3698', 43, '15', '55470', 2857, '12615', 2),
('Soniq S70UV16A 70\" UHD Smart LED LCD TV', 'TV', 'S70UV16A-AU', '1799', 40, '33', '59367', 1593, '6798', 3),
('Sony Bravia 85\" 4K HDR UHD LED LCD TV', 'TV', 'KD85X8500D', '9998', 41, '24', '239952', 7269, '65496', 8),
('Sony X9300D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X9300D', '3998', 42, '22', '87956', 3162, '18392', 3),
('Samsung Galaxy S8 64GB (Black)', 'Mobile phone', '1091003347', '1199', 44, '15', '17985', 914, '4275', 4),
('Sony Xperia XZ (Black)', 'Mobile phone', '1071000647', '899', 25, '27', '24273', 681, '5886', 3),
('Google Pixel 32GB (Quite Black)', 'Mobile phone', '118298', '1079', 47, '32', '34528', 794, '9120', 2),
('ZTE Axon 7 (Grey)', 'Mobile phone', '1081000466', '699', 52, '20', '13980', 540, '3180', 2),
('Apple iPhone 7 128GB (Black)', 'Mobile phone', '3801000006', '1229', 37, '12', '14748', 887, '4104', 4),
('LG G6 64GB Dual Sim Handset (Black)', 'Mobile phone', '3611246', '1149', 44, '35', '40215', 830, '11165', 4),
('Huawei Mate 9 Handset (Mocha)', 'Mobile phone', '1101000951', '998', 43, '33', '32934', 835, '5379', 5),
('HTC U Ultra 64GB Handset (Cosmetic Pink)', 'Mobile phone', '1011001103', '898', 27, '30', '26940', 682, '6480', 6),
('Oppo R9s Plus Handset (Gold)', 'Mobile phone', ' CPH1611GOLD', '698', 53, '25', '17450', 509, '4725', 7),
('Samsung Galaxy Note 5 32GB (Black)', 'Mobile phone', '1091002203', '947', 36, '27', '25569', 665, '7614', 8),
('Canon EOS 1300D Digital SLR Camera (with 18-55mm Lens)', 'Camera', '1300DKB', '499', 40, '15', '7485', 435, '960', 8),
('Olympus OM-D E-M1 Mark II Digital SLR (Body Only)', 'Camera', 'V207060BA000', '2499', 51, '13', '32487', 1869, '8190', 6),
('Sony FDRAX53 4K Handycam w/ BOSS', 'Camera', 'FDRAX53', '1099', 35, '18', '19782', 867, '4176', 7),
('Nikon Coolpix P900 16MP Digital Camera', 'Camera', 'DC-GX850KGNS', '798', 41, '17', '13566', 685, '1921', 7),
('Canon Powershot G9 X Mark II 20.1MP Digital Camera (Silver)', 'Camera', 'VNA750AC', '749', 38, '14', '10486', 567, '2548', 2),
('Fujifilm Instax Mini 8 Instant Camera and Case (Grape)', 'Camera', 'G9XIIS', '548', 38, '21', '11508', 444, '2184', 4),
('Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit', 'Camera', '84933', '99', 40, '31', '3069', 89, '310', 9),
('GoPro Hero5 Black 4K Action Video Camera', 'Camera', '791490', '549', 43, '25', '13725', 410, '3475', 6),
('Panasonic Lumix DC-FZ80GN-K 18.1MP Ultra Zoom Digital Camera', 'Camera', 'GPCHDHX-501', '548', 58, '27', '14796', 388, '4320', 9),
('Nikon Coolpix B700 20.3MP Ultra Zoom Digital Camera', 'Camera', 'DC-FZ80GN-K', '598', 33, '32', '19136', 525, '2336', 4),
('Mackie CR4 4\" Powered Studio Monitors', 'Audio', 'M-CR4', '196', 27, '10', '1960', 142, '540', 6),
('Jaybird Freedom Wireless In-Ear Headphones (Carbon)', 'Audio', 'F5-S-B-AP-ANZ', '249', 59, '13', '3237', 191, '754', 3),
('AERPRO Multicolour LED 5M Strip Lighting', 'Audio', 'SMD5MC', '28', 59, '29', '812', 25, '87', 7),
('Marley Smile Jamaica In-Ear Headphones (Copper)', 'Audio', 'EMJE041CP', '24.95', 31, '30', '748.5', 21, '118.5', 2),
('MXL Tempo SK USB Microphone (Silver)', 'Audio', 'MXL-TEMPO SK', '98', 51, '15', '1470', 78, '300', 4),
('JBL E55BT Over-Ear Wireless Headphones (Black)', 'Audio', '3378033', '229', 53, '31', '7099', 184, '1395', 8),
('Novation Launchpad Mini Music Creator', 'Audio', 'NOV-LPMIN', '141', 53, '10', '1410', 102, '390', 3),
('Beats Tour 2 Active In-Ear Headphones (Red)', 'Audio', 'MKPV2PA/A', '169', 59, '13', '2197', 148, '273', 6),
('Stadium USBMIC1 USB Studio Microphone', 'Audio', 'USBMIC1', '78', 54, '30', '2340', 67, '330', 8),
('Rode NTUSB Microphone', 'Audio', 'NTUSB', '168', 60, '34', '5712', 121, '1598', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 03:26 AM
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
-- Table structure for table `brisbane`
--

CREATE TABLE `brisbane` (
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
-- Dumping data for table `brisbane`
--

INSERT INTO `brisbane` (`NAME`, `TYPE`, `CODE`, `SELLING_PRICE`, `QUANTITY`, `SALECOUNT`, `TOTALSALE`, `COST_PRICE`, `PROFIT`, `RETURN_ITEMS`) VALUES
('Apple MacBook Pro 15\" with Touch Bar 512GB (Space Grey)', 'Laptop', 'MLH42X/A', '4247', 58, '10', '42470', 3295, '9520', 11),
('Apple MacBook Pro 15\" with Touch Bar 256GB (Space Grey)', 'Laptop', 'MLH32X/A', '3597', 46, '17', '61149', 2848, '12733', 9),
('Apple iMac with Retina 5K display 27\" 3.3GHz', 'Laptop', 'MK482X/A', '3594', 35, '35', '125790', 2617, '34195', 1),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK472X/A', '3096', 21, '29', '89784', 2693, '11687', 11),
('Apple MacBook Pro 13\" with Touch Bar 512GB (Silver)', 'Laptop', 'MNQG2X/A', '2998', 50, '23', '68954', 2179, '18837', 9),
('Apple MacBook Pro 15\" 2.2GHz 256GB', 'Laptop', 'MJLQ2X/A', '2994', 72, '26', '77844', 2669, '8450', 11),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK462X/A', '2797', 51, '31', '86707', 2377, '13020', 4),
('Apple MacBook 12\" 256GB (Silver)', 'Laptop', 'MLHA2X/A', '1998', 70, '36', '71928', 1511, '17532', 3),
('Alienware 15 15.6\" Gaming Laptop (256GB SSD)', 'Laptop', 'A5115A3AU', '2798', 49, '40', '111920', 2133, '26600', 6),
('HP 15-AY150TU 15.6\" Touchscreen Notebook', 'Laptop', '1PL58PA#ABG', '1198', 73, '33', '39534', 960, '7854', 3),
('Samsung KU6000 70\" 4K UHD HDR Smart LED LCD TV', 'TV', 'UA70KU6000WXXY', '2996', 72, '22', '65912', 2121, '19250', 6),
('Hisense M7000UWG 55\" ULED HDR Smart LED LCD TV', 'TV', '55M7000UWG', '1098', 48, '14', '15372', 859, '3346', 5),
('Sony X7000D 49\" 4K UHD HDR Android Smart LCD LED TV', 'TV', 'KD49X7000D', '1298', 58, '17', '22066', 1082, '3672', 10),
('Samsung KS8500 55\" Curved 4K SUHD HDR Smart LED LCD TV', 'TV', 'UA55KS8500WXXY', '2496', 65, '23', '57408', 1878, '14214', 8),
('Hisense K3300UW 65\" 4K UHD Smart LED LCD TV', 'TV', '65K3300UW', '1496', 39, '35', '52360', 1237, '9065', 7),
('Sony X8500D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X8500D', '2796', 46, '40', '111840', 2327, '18760', 5),
('Samsung UA75JU6400W 75\" 4K UHD Smart LED LCD TV', 'TV', 'UA75JU6400WXXY', '3698', 36, '20', '73960', 2857, '16820', 3),
('Soniq S70UV16A 70\" UHD Smart LED LCD TV', 'TV', 'S70UV16A-AU', '1799', 45, '32', '57568', 1593, '6592', 11),
('Sony Bravia 85\" 4K HDR UHD LED LCD TV', 'TV', 'KD85X8500D', '9998', 35, '12', '119976', 7269, '32748', 4),
('Sony X9300D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X9300D', '3998', 22, '37', '147926', 3162, '30932', 1),
('Samsung Galaxy S8 64GB (Black)', 'Mobile phone', '1091003347', '1199', 55, '25', '29975', 914, '7125', 10),
('Sony Xperia XZ (Black)', 'Mobile phone', '1071000647', '899', 63, '37', '33263', 681, '8066', 1),
('Google Pixel 32GB (Quite Black)', 'Mobile phone', '118298', '1079', 57, '17', '18343', 794, '4845', 8),
('ZTE Axon 7 (Grey)', 'Mobile phone', '1081000466', '699', 30, '10', '6990', 540, '1590', 3),
('Apple iPhone 7 128GB (Black)', 'Mobile phone', '3801000006', '1229', 51, '10', '12290', 887, '3420', 6),
('LG G6 64GB Dual Sim Handset (Black)', 'Mobile phone', '3611246', '1149', 52, '29', '33321', 830, '9251', 4),
('Huawei Mate 9 Handset (Mocha)', 'Mobile phone', '1101000951', '998', 38, '12', '11976', 835, '1956', 2),
('HTC U Ultra 64GB Handset (Cosmetic Pink)', 'Mobile phone', '1011001103', '898', 72, '36', '32328', 682, '7776', 12),
('Oppo R9s Plus Handset (Gold)', 'Mobile phone', ' CPH1611GOLD', '698', 37, '19', '13262', 509, '3591', 10),
('Samsung Galaxy Note 5 32GB (Black)', 'Mobile phone', '1091002203', '947', 72, '13', '12311', 665, '3666', 3),
('Canon EOS 1300D Digital SLR Camera (with 18-55mm Lens)', 'Camera', '1300DKB', '499', 26, '39', '19461', 435, '2496', 6),
('Olympus OM-D E-M1 Mark II Digital SLR (Body Only)', 'Camera', 'V207060BA000', '2499', 71, '34', '84966', 1869, '21420', 9),
('Sony FDRAX53 4K Handycam w/ BOSS', 'Camera', 'FDRAX53', '1099', 32, '19', '20881', 867, '4408', 8),
('Nikon Coolpix P900 16MP Digital Camera', 'Camera', 'DC-GX850KGNS', '798', 49, '19', '15162', 685, '2147', 2),
('Canon Powershot G9 X Mark II 20.1MP Digital Camera (Silver)', 'Camera', 'VNA750AC', '749', 50, '31', '23219', 567, '5642', 6),
('Fujifilm Instax Mini 8 Instant Camera and Case (Grape)', 'Camera', 'G9XIIS', '548', 31, '38', '20824', 444, '3952', 12),
('Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit', 'Camera', '84933', '99', 32, '10', '990', 89, '100', 10),
('GoPro Hero5 Black 4K Action Video Camera', 'Camera', '791490', '549', 49, '19', '10431', 410, '2641', 11),
('Panasonic Lumix DC-FZ80GN-K 18.1MP Ultra Zoom Digital Camera', 'Camera', 'GPCHDHX-501', '548', 27, '18', '9864', 388, '2880', 8),
('Nikon Coolpix B700 20.3MP Ultra Zoom Digital Camera', 'Camera', 'DC-FZ80GN-K', '598', 29, '11', '6578', 525, '803', 1),
('Mackie CR4 4\" Powered Studio Monitors', 'Audio', 'M-CR4', '196', 74, '22', '4312', 142, '1188', 11),
('Jaybird Freedom Wireless In-Ear Headphones (Carbon)', 'Audio', 'F5-S-B-AP-ANZ', '249', 46, '12', '2988', 191, '696', 9),
('AERPRO Multicolour LED 5M Strip Lighting', 'Audio', 'SMD5MC', '28', 23, '36', '1008', 25, '108', 5),
('Marley Smile Jamaica In-Ear Headphones (Copper)', 'Audio', 'EMJE041CP', '24.95', 35, '23', '573.85', 21, '90.85', 6),
('MXL Tempo SK USB Microphone (Silver)', 'Audio', 'MXL-TEMPO SK', '98', 43, '16', '1568', 78, '320', 1),
('JBL E55BT Over-Ear Wireless Headphones (Black)', 'Audio', '3378033', '229', 54, '36', '8244', 184, '1620', 2),
('Novation Launchpad Mini Music Creator', 'Audio', 'NOV-LPMIN', '141', 70, '37', '5217', 102, '1443', 6),
('Beats Tour 2 Active In-Ear Headphones (Red)', 'Audio', 'MKPV2PA/A', '169', 49, '14', '2366', 148, '294', 3),
('Stadium USBMIC1 USB Studio Microphone', 'Audio', 'USBMIC1', '78', 45, '30', '2340', 67, '330', 4),
('Rode NTUSB Microphone', 'Audio', 'NTUSB', '168', 45, '12', '2016', 121, '564', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 03:26 AM
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
-- Table structure for table `cairns`
--

CREATE TABLE `cairns` (
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
-- Dumping data for table `cairns`
--

INSERT INTO `cairns` (`NAME`, `TYPE`, `CODE`, `SELLING_PRICE`, `QUANTITY`, `SALECOUNT`, `TOTALSALE`, `COST_PRICE`, `PROFIT`, `RETURN_ITEMS`) VALUES
('Apple MacBook Pro 15\" with Touch Bar 512GB (Space Grey)', 'Laptop', 'MLH42X/A', '4247', 48, '31', '131657', 3295, '29512', 0),
('Apple MacBook Pro 15\" with Touch Bar 256GB (Space Grey)', 'Laptop', 'MLH32X/A', '3597', 33, '30', '107910', 2848, '22470', 7),
('Apple iMac with Retina 5K display 27\" 3.3GHz', 'Laptop', 'MK482X/A', '3594', 44, '33', '118602', 2617, '32241', 2),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK472X/A', '3096', 28, '22', '68112', 2693, '8866', 7),
('Apple MacBook Pro 13\" with Touch Bar 512GB (Silver)', 'Laptop', 'MNQG2X/A', '2998', 25, '14', '41972', 2179, '11466', 5),
('Apple MacBook Pro 15\" 2.2GHz 256GB', 'Laptop', 'MJLQ2X/A', '2994', 26, '30', '89820', 2669, '9750', 6),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK462X/A', '2797', 47, '29', '81113', 2377, '12180', 5),
('Apple MacBook 12\" 256GB (Silver)', 'Laptop', 'MLHA2X/A', '1998', 21, '24', '47952', 1511, '11688', 3),
('Alienware 15 15.6\" Gaming Laptop (256GB SSD)', 'Laptop', 'A5115A3AU', '2798', 54, '19', '53162', 2133, '12635', 3),
('HP 15-AY150TU 15.6\" Touchscreen Notebook', 'Laptop', '1PL58PA#ABG', '1198', 32, '17', '20366', 960, '4046', 3),
('Samsung KU6000 70\" 4K UHD HDR Smart LED LCD TV', 'TV', 'UA70KU6000WXXY', '2996', 51, '20', '59920', 2121, '17500', 1),
('Hisense M7000UWG 55\" ULED HDR Smart LED LCD TV', 'TV', '55M7000UWG', '1098', 34, '31', '34038', 859, '7409', 7),
('Sony X7000D 49\" 4K UHD HDR Android Smart LCD LED TV', 'TV', 'KD49X7000D', '1298', 52, '24', '31152', 1082, '5184', 5),
('Samsung KS8500 55\" Curved 4K SUHD HDR Smart LED LCD TV', 'TV', 'UA55KS8500WXXY', '2496', 50, '32', '79872', 1878, '19776', 4),
('Hisense K3300UW 65\" 4K UHD Smart LED LCD TV', 'TV', '65K3300UW', '1496', 55, '12', '17952', 1237, '3108', 6),
('Sony X8500D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X8500D', '2796', 43, '27', '75492', 2327, '12663', 6),
('Samsung UA75JU6400W 75\" 4K UHD Smart LED LCD TV', 'TV', 'UA75JU6400WXXY', '3698', 35, '15', '55470', 2857, '12615', 1),
('Soniq S70UV16A 70\" UHD Smart LED LCD TV', 'TV', 'S70UV16A-AU', '1799', 36, '17', '30583', 1593, '3502', 8),
('Sony Bravia 85\" 4K HDR UHD LED LCD TV', 'TV', 'KD85X8500D', '9998', 44, '23', '229954', 7269, '62767', 4),
('Sony X9300D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X9300D', '3998', 42, '14', '55972', 3162, '11704', 7),
('Samsung Galaxy S8 64GB (Black)', 'Mobile phone', '1091003347', '1199', 25, '11', '13189', 914, '3135', 3),
('Sony Xperia XZ (Black)', 'Mobile phone', '1071000647', '899', 57, '20', '17980', 681, '4360', 6),
('Google Pixel 32GB (Quite Black)', 'Mobile phone', '118298', '1079', 57, '22', '23738', 794, '6270', 4),
('ZTE Axon 7 (Grey)', 'Mobile phone', '1081000466', '699', 56, '32', '22368', 540, '5088', 8),
('Apple iPhone 7 128GB (Black)', 'Mobile phone', '3801000006', '1229', 52, '35', '43015', 887, '11970', 3),
('LG G6 64GB Dual Sim Handset (Black)', 'Mobile phone', '3611246', '1149', 59, '25', '28725', 830, '7975', 4),
('Huawei Mate 9 Handset (Mocha)', 'Mobile phone', '1101000951', '998', 44, '27', '26946', 835, '4401', 1),
('HTC U Ultra 64GB Handset (Cosmetic Pink)', 'Mobile phone', '1011001103', '898', 55, '18', '16164', 682, '3888', 7),
('Oppo R9s Plus Handset (Gold)', 'Mobile phone', ' CPH1611GOLD', '698', 31, '18', '12564', 509, '3402', 0),
('Samsung Galaxy Note 5 32GB (Black)', 'Mobile phone', '1091002203', '947', 42, '10', '9470', 665, '2820', 7),
('Canon EOS 1300D Digital SLR Camera (with 18-55mm Lens)', 'Camera', '1300DKB', '499', 58, '34', '16966', 435, '2176', 8),
('Olympus OM-D E-M1 Mark II Digital SLR (Body Only)', 'Camera', 'V207060BA000', '2499', 28, '34', '84966', 1869, '21420', 0),
('Sony FDRAX53 4K Handycam w/ BOSS', 'Camera', 'FDRAX53', '1099', 34, '20', '21980', 867, '4640', 7),
('Nikon Coolpix P900 16MP Digital Camera', 'Camera', 'DC-GX850KGNS', '798', 30, '25', '19950', 685, '2825', 2),
('Canon Powershot G9 X Mark II 20.1MP Digital Camera (Silver)', 'Camera', 'VNA750AC', '749', 41, '31', '23219', 567, '5642', 6),
('Fujifilm Instax Mini 8 Instant Camera and Case (Grape)', 'Camera', 'G9XIIS', '548', 53, '16', '8768', 444, '1664', 8),
('Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit', 'Camera', '84933', '99', 60, '31', '3069', 89, '310', 5),
('GoPro Hero5 Black 4K Action Video Camera', 'Camera', '791490', '549', 56, '21', '11529', 410, '2919', 0),
('Panasonic Lumix DC-FZ80GN-K 18.1MP Ultra Zoom Digital Camera', 'Camera', 'GPCHDHX-501', '548', 20, '33', '18084', 388, '5280', 5),
('Nikon Coolpix B700 20.3MP Ultra Zoom Digital Camera', 'Camera', 'DC-FZ80GN-K', '598', 53, '25', '14950', 525, '1825', 7),
('Mackie CR4 4\" Powered Studio Monitors', 'Audio', 'M-CR4', '196', 30, '15', '2940', 142, '810', 4),
('Jaybird Freedom Wireless In-Ear Headphones (Carbon)', 'Audio', 'F5-S-B-AP-ANZ', '249', 26, '13', '3237', 191, '754', 1),
('AERPRO Multicolour LED 5M Strip Lighting', 'Audio', 'SMD5MC', '28', 24, '25', '700', 25, '75', 3),
('Marley Smile Jamaica In-Ear Headphones (Copper)', 'Audio', 'EMJE041CP', '24.95', 50, '34', '848.3', 21, '134.3', 0),
('MXL Tempo SK USB Microphone (Silver)', 'Audio', 'MXL-TEMPO SK', '98', 55, '32', '3136', 78, '640', 2),
('JBL E55BT Over-Ear Wireless Headphones (Black)', 'Audio', '3378033', '229', 45, '15', '3435', 184, '675', 3),
('Novation Launchpad Mini Music Creator', 'Audio', 'NOV-LPMIN', '141', 47, '33', '4653', 102, '1287', 8),
('Beats Tour 2 Active In-Ear Headphones (Red)', 'Audio', 'MKPV2PA/A', '169', 34, '17', '2873', 148, '357', 4),
('Stadium USBMIC1 USB Studio Microphone', 'Audio', 'USBMIC1', '78', 41, '30', '2340', 67, '330', 0),
('Rode NTUSB Microphone', 'Audio', 'NTUSB', '168', 23, '12', '2016', 121, '564', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `centralcoast`
--

CREATE TABLE `centralcoast` (
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
-- Dumping data for table `centralcoast`
--

INSERT INTO `centralcoast` (`NAME`, `TYPE`, `CODE`, `SELLING_PRICE`, `QUANTITY`, `SALECOUNT`, `TOTALSALE`, `COST_PRICE`, `PROFIT`, `RETURN_ITEMS`) VALUES
('Apple MacBook Pro 15\" with Touch Bar 512GB (Space Grey)', 'Laptop', 'MLH42X/A', '4247', 27, '8', '33976', 3295, '7616', 10),
('Apple MacBook Pro 15\" with Touch Bar 256GB (Space Grey)', 'Laptop', 'MLH32X/A', '3597', 24, '10', '35970', 2848, '7490', 9),
('Apple iMac with Retina 5K display 27\" 3.3GHz', 'Laptop', 'MK482X/A', '3594', 29, '21', '75474', 2617, '20517', 4),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK472X/A', '3096', 26, '26', '80496', 2693, '10478', 8),
('Apple MacBook Pro 13\" with Touch Bar 512GB (Silver)', 'Laptop', 'MNQG2X/A', '2998', 42, '22', '65956', 2179, '18018', 7),
('Apple MacBook Pro 15\" 2.2GHz 256GB', 'Laptop', 'MJLQ2X/A', '2994', 24, '5', '14970', 2669, '1625', 10),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK462X/A', '2797', 26, '10', '27970', 2377, '4200', 2),
('Apple MacBook 12\" 256GB (Silver)', 'Laptop', 'MLHA2X/A', '1998', 20, '26', '51948', 1511, '12662', 4),
('Alienware 15 15.6\" Gaming Laptop (256GB SSD)', 'Laptop', 'A5115A3AU', '2798', 24, '21', '58758', 2133, '13965', 5),
('HP 15-AY150TU 15.6\" Touchscreen Notebook', 'Laptop', '1PL58PA#ABG', '1198', 27, '26', '31148', 960, '6188', 9),
('Samsung KU6000 70\" 4K UHD HDR Smart LED LCD TV', 'TV', 'UA70KU6000WXXY', '2996', 36, '8', '23968', 2121, '7000', 10),
('Hisense M7000UWG 55\" ULED HDR Smart LED LCD TV', 'TV', '55M7000UWG', '1098', 42, '10', '10980', 859, '2390', 5),
('Sony X7000D 49\" 4K UHD HDR Android Smart LCD LED TV', 'TV', 'KD49X7000D', '1298', 26, '26', '33748', 1082, '5616', 3),
('Samsung KS8500 55\" Curved 4K SUHD HDR Smart LED LCD TV', 'TV', 'UA55KS8500WXXY', '2496', 20, '19', '47424', 1878, '11742', 8),
('Hisense K3300UW 65\" 4K UHD Smart LED LCD TV', 'TV', '65K3300UW', '1496', 39, '21', '31416', 1237, '5439', 9),
('Sony X8500D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X8500D', '2796', 17, '22', '61512', 2327, '10318', 2),
('Samsung UA75JU6400W 75\" 4K UHD Smart LED LCD TV', 'TV', 'UA75JU6400WXXY', '3698', 29, '17', '62866', 2857, '14297', 10),
('Soniq S70UV16A 70\" UHD Smart LED LCD TV', 'TV', 'S70UV16A-AU', '1799', 35, '26', '46774', 1593, '5356', 6),
('Sony Bravia 85\" 4K HDR UHD LED LCD TV', 'TV', 'KD85X8500D', '9998', 43, '28', '279944', 7269, '76412', 9),
('Sony X9300D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X9300D', '3998', 39, '25', '99950', 3162, '20900', 7),
('Samsung Galaxy S8 64GB (Black)', 'Mobile phone', '1091003347', '1199', 22, '21', '25179', 914, '5985', 4),
('Sony Xperia XZ (Black)', 'Mobile phone', '1071000647', '899', 44, '30', '26970', 681, '6540', 9),
('Google Pixel 32GB (Quite Black)', 'Mobile phone', '118298', '1079', 38, '18', '19422', 794, '5130', 7),
('ZTE Axon 7 (Grey)', 'Mobile phone', '1081000466', '699', 43, '11', '7689', 540, '1749', 8),
('Apple iPhone 7 128GB (Black)', 'Mobile phone', '3801000006', '1229', 26, '12', '14748', 887, '4104', 5),
('LG G6 64GB Dual Sim Handset (Black)', 'Mobile phone', '3611246', '1149', 28, '9', '10341', 830, '2871', 3),
('Huawei Mate 9 Handset (Mocha)', 'Mobile phone', '1101000951', '998', 23, '29', '28942', 835, '4727', 8),
('HTC U Ultra 64GB Handset (Cosmetic Pink)', 'Mobile phone', '1011001103', '898', 16, '18', '16164', 682, '3888', 5),
('Oppo R9s Plus Handset (Gold)', 'Mobile phone', ' CPH1611GOLD', '698', 43, '14', '9772', 509, '2646', 9),
('Samsung Galaxy Note 5 32GB (Black)', 'Mobile phone', '1091002203', '947', 41, '27', '25569', 665, '7614', 5),
('Canon EOS 1300D Digital SLR Camera (with 18-55mm Lens)', 'Camera', '1300DKB', '499', 31, '14', '6986', 435, '896', 8),
('Olympus OM-D E-M1 Mark II Digital SLR (Body Only)', 'Camera', 'V207060BA000', '2499', 43, '6', '14994', 1869, '3780', 2),
('Sony FDRAX53 4K Handycam w/ BOSS', 'Camera', 'FDRAX53', '1099', 42, '16', '17584', 867, '3712', 4),
('Nikon Coolpix P900 16MP Digital Camera', 'Camera', 'DC-GX850KGNS', '798', 25, '23', '18354', 685, '2599', 8),
('Canon Powershot G9 X Mark II 20.1MP Digital Camera (Silver)', 'Camera', 'VNA750AC', '749', 19, '27', '20223', 567, '4914', 3),
('Fujifilm Instax Mini 8 Instant Camera and Case (Grape)', 'Camera', 'G9XIIS', '548', 38, '16', '8768', 444, '1664', 9),
('Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit', 'Camera', '84933', '99', 27, '8', '792', 89, '80', 10),
('GoPro Hero5 Black 4K Action Video Camera', 'Camera', '791490', '549', 17, '17', '9333', 410, '2363', 9),
('Panasonic Lumix DC-FZ80GN-K 18.1MP Ultra Zoom Digital Camera', 'Camera', 'GPCHDHX-501', '548', 15, '25', '13700', 388, '4000', 5),
('Nikon Coolpix B700 20.3MP Ultra Zoom Digital Camera', 'Camera', 'DC-FZ80GN-K', '598', 19, '17', '10166', 525, '1241', 2),
('Mackie CR4 4\" Powered Studio Monitors', 'Audio', 'M-CR4', '196', 30, '17', '3332', 142, '918', 10),
('Jaybird Freedom Wireless In-Ear Headphones (Carbon)', 'Audio', 'F5-S-B-AP-ANZ', '249', 20, '22', '5478', 191, '1276', 5),
('AERPRO Multicolour LED 5M Strip Lighting', 'Audio', 'SMD5MC', '28', 29, '12', '336', 25, '36', 4),
('Marley Smile Jamaica In-Ear Headphones (Copper)', 'Audio', 'EMJE041CP', '24.95', 24, '11', '274.45', 21, '43.45', 3),
('MXL Tempo SK USB Microphone (Silver)', 'Audio', 'MXL-TEMPO SK', '98', 23, '22', '2156', 78, '440', 7),
('JBL E55BT Over-Ear Wireless Headphones (Black)', 'Audio', '3378033', '229', 29, '17', '3893', 184, '765', 2),
('Novation Launchpad Mini Music Creator', 'Audio', 'NOV-LPMIN', '141', 30, '5', '705', 102, '195', 2),
('Beats Tour 2 Active In-Ear Headphones (Red)', 'Audio', 'MKPV2PA/A', '169', 15, '10', '1690', 148, '210', 8),
('Stadium USBMIC1 USB Studio Microphone', 'Audio', 'USBMIC1', '78', 39, '20', '1560', 67, '220', 10),
('Rode NTUSB Microphone', 'Audio', 'NTUSB', '168', 31, '5', '840', 121, '235', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `melbourne`
--

CREATE TABLE `melbourne` (
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
-- Dumping data for table `melbourne`
--

INSERT INTO `melbourne` (`NAME`, `TYPE`, `CODE`, `SELLING_PRICE`, `QUANTITY`, `SALECOUNT`, `TOTALSALE`, `COST_PRICE`, `PROFIT`, `RETURN_ITEMS`) VALUES
('Apple MacBook Pro 15\" with Touch Bar 512GB (Space Grey)', 'Laptop', 'MLH42X/A', '4247', 74, '55', '233585', 3295, '52360', 15),
('Apple MacBook Pro 15\" with Touch Bar 256GB (Space Grey)', 'Laptop', 'MLH32X/A', '3597', 108, '52', '187044', 2848, '38948', 4),
('Apple iMac with Retina 5K display 27\" 3.3GHz', 'Laptop', 'MK482X/A', '3594', 55, '56', '201264', 2617, '54712', 7),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK472X/A', '3096', 89, '30', '92880', 2693, '12090', 10),
('Apple MacBook Pro 13\" with Touch Bar 512GB (Silver)', 'Laptop', 'MNQG2X/A', '2998', 108, '57', '170886', 2179, '46683', 6),
('Apple MacBook Pro 15\" 2.2GHz 256GB', 'Laptop', 'MJLQ2X/A', '2994', 75, '22', '65868', 2669, '7150', 7),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK462X/A', '2797', 88, '57', '159429', 2377, '23940', 11),
('Apple MacBook 12\" 256GB (Silver)', 'Laptop', 'MLHA2X/A', '1998', 63, '35', '69930', 1511, '17045', 13),
('Alienware 15 15.6\" Gaming Laptop (256GB SSD)', 'Laptop', 'A5115A3AU', '2798', 73, '47', '131506', 2133, '31255', 7),
('HP 15-AY150TU 15.6\" Touchscreen Notebook', 'Laptop', '1PL58PA#ABG', '1198', 88, '20', '23960', 960, '4760', 13),
('Samsung KU6000 70\" 4K UHD HDR Smart LED LCD TV', 'TV', 'UA70KU6000WXXY', '2996', 51, '53', '158788', 2121, '46375', 4),
('Hisense M7000UWG 55\" ULED HDR Smart LED LCD TV', 'TV', '55M7000UWG', '1098', 79, '21', '23058', 859, '5019', 14),
('Sony X7000D 49\" 4K UHD HDR Android Smart LCD LED TV', 'TV', 'KD49X7000D', '1298', 91, '38', '49324', 1082, '8208', 4),
('Samsung KS8500 55\" Curved 4K SUHD HDR Smart LED LCD TV', 'TV', 'UA55KS8500WXXY', '2496', 97, '40', '99840', 1878, '24720', 3),
('Hisense K3300UW 65\" 4K UHD Smart LED LCD TV', 'TV', '65K3300UW', '1496', 104, '35', '52360', 1237, '9065', 7),
('Sony X8500D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X8500D', '2796', 63, '48', '134208', 2327, '22512', 13),
('Samsung UA75JU6400W 75\" 4K UHD Smart LED LCD TV', 'TV', 'UA75JU6400WXXY', '3698', 93, '50', '184900', 2857, '42050', 14),
('Soniq S70UV16A 70\" UHD Smart LED LCD TV', 'TV', 'S70UV16A-AU', '1799', 78, '41', '73759', 1593, '8446', 12),
('Sony Bravia 85\" 4K HDR UHD LED LCD TV', 'TV', 'KD85X8500D', '9998', 95, '60', '599880', 7269, '163740', 12),
('Sony X9300D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X9300D', '3998', 70, '32', '127936', 3162, '26752', 3),
('Samsung Galaxy S8 64GB (Black)', 'Mobile phone', '1091003347', '1199', 79, '30', '35970', 914, '8550', 15),
('Sony Xperia XZ (Black)', 'Mobile phone', '1071000647', '899', 94, '29', '26071', 681, '6322', 10),
('Google Pixel 32GB (Quite Black)', 'Mobile phone', '118298', '1079', 50, '23', '24817', 794, '6555', 6),
('ZTE Axon 7 (Grey)', 'Mobile phone', '1081000466', '699', 109, '34', '23766', 540, '5406', 3),
('Apple iPhone 7 128GB (Black)', 'Mobile phone', '3801000006', '1229', 60, '59', '72511', 887, '20178', 7),
('LG G6 64GB Dual Sim Handset (Black)', 'Mobile phone', '3611246', '1149', 52, '27', '31023', 830, '8613', 8),
('Huawei Mate 9 Handset (Mocha)', 'Mobile phone', '1101000951', '998', 91, '45', '44910', 835, '7335', 4),
('HTC U Ultra 64GB Handset (Cosmetic Pink)', 'Mobile phone', '1011001103', '898', 92, '31', '27838', 682, '6696', 9),
('Oppo R9s Plus Handset (Gold)', 'Mobile phone', ' CPH1611GOLD', '698', 69, '41', '28618', 509, '7749', 8),
('Samsung Galaxy Note 5 32GB (Black)', 'Mobile phone', '1091002203', '947', 55, '50', '47350', 665, '14100', 4),
('Canon EOS 1300D Digital SLR Camera (with 18-55mm Lens)', 'Camera', '1300DKB', '499', 55, '35', '17465', 435, '2240', 7),
('Olympus OM-D E-M1 Mark II Digital SLR (Body Only)', 'Camera', 'V207060BA000', '2499', 59, '52', '129948', 1869, '32760', 14),
('Sony FDRAX53 4K Handycam w/ BOSS', 'Camera', 'FDRAX53', '1099', 106, '29', '31871', 867, '6728', 3),
('Nikon Coolpix P900 16MP Digital Camera', 'Camera', 'DC-GX850KGNS', '798', 94, '37', '29526', 685, '4181', 5),
('Canon Powershot G9 X Mark II 20.1MP Digital Camera (Silver)', 'Camera', 'VNA750AC', '749', 65, '41', '30709', 567, '7462', 10),
('Fujifilm Instax Mini 8 Instant Camera and Case (Grape)', 'Camera', 'G9XIIS', '548', 73, '31', '16988', 444, '3224', 12),
('Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit', 'Camera', '84933', '99', 54, '56', '5544', 89, '560', 5),
('GoPro Hero5 Black 4K Action Video Camera', 'Camera', '791490', '549', 99, '49', '26901', 410, '6811', 3),
('Panasonic Lumix DC-FZ80GN-K 18.1MP Ultra Zoom Digital Camera', 'Camera', 'GPCHDHX-501', '548', 95, '21', '11508', 388, '3360', 10),
('Nikon Coolpix B700 20.3MP Ultra Zoom Digital Camera', 'Camera', 'DC-FZ80GN-K', '598', 69, '49', '29302', 525, '3577', 7),
('Mackie CR4 4\" Powered Studio Monitors', 'Audio', 'M-CR4', '196', 100, '27', '5292', 142, '1458', 13),
('Jaybird Freedom Wireless In-Ear Headphones (Carbon)', 'Audio', 'F5-S-B-AP-ANZ', '249', 60, '55', '13695', 191, '3190', 7),
('AERPRO Multicolour LED 5M Strip Lighting', 'Audio', 'SMD5MC', '28', 102, '43', '1204', 25, '129', 14),
('Marley Smile Jamaica In-Ear Headphones (Copper)', 'Audio', 'EMJE041CP', '24.95', 87, '45', '1122.75', 21, '177.75', 3),
('MXL Tempo SK USB Microphone (Silver)', 'Audio', 'MXL-TEMPO SK', '98', 57, '34', '3332', 78, '680', 6),
('JBL E55BT Over-Ear Wireless Headphones (Black)', 'Audio', '3378033', '229', 58, '60', '13740', 184, '2700', 8),
('Novation Launchpad Mini Music Creator', 'Audio', 'NOV-LPMIN', '141', 61, '50', '7050', 102, '1950', 6),
('Beats Tour 2 Active In-Ear Headphones (Red)', 'Audio', 'MKPV2PA/A', '169', 71, '30', '5070', 148, '630', 5),
('Stadium USBMIC1 USB Studio Microphone', 'Audio', 'USBMIC1', '78', 110, '60', '4680', 67, '660', 6),
('Rode NTUSB Microphone', 'Audio', 'NTUSB', '168', 86, '29', '4872', 121, '1363', 13);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `newcastle`
--

CREATE TABLE `newcastle` (
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
-- Dumping data for table `newcastle`
--

INSERT INTO `newcastle` (`NAME`, `TYPE`, `CODE`, `SELLING_PRICE`, `QUANTITY`, `SALECOUNT`, `TOTALSALE`, `COST_PRICE`, `PROFIT`, `RETURN_ITEMS`) VALUES
('Apple MacBook Pro 15\" with Touch Bar 512GB (Space Grey)', 'Laptop', 'MLH42X/A', '4247', 68, '10', '42470', 3295, '9520', 5),
('Apple MacBook Pro 15\" with Touch Bar 256GB (Space Grey)', 'Laptop', 'MLH32X/A', '3597', 38, '12', '43164', 2848, '8988', 2),
('Apple iMac with Retina 5K display 27\" 3.3GHz', 'Laptop', 'MK482X/A', '3594', 22, '24', '86256', 2617, '23448', 5),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK472X/A', '3096', 53, '24', '74304', 2693, '9672', 3),
('Apple MacBook Pro 13\" with Touch Bar 512GB (Silver)', 'Laptop', 'MNQG2X/A', '2998', 29, '21', '62958', 2179, '17199', 5),
('Apple MacBook Pro 15\" 2.2GHz 256GB', 'Laptop', 'MJLQ2X/A', '2994', 35, '24', '71856', 2669, '7800', 3),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK462X/A', '2797', 64, '21', '58737', 2377, '8820', 3),
('Apple MacBook 12\" 256GB (Silver)', 'Laptop', 'MLHA2X/A', '1998', 48, '21', '41958', 1511, '10227', 4),
('Alienware 15 15.6\" Gaming Laptop (256GB SSD)', 'Laptop', 'A5115A3AU', '2798', 67, '16', '44768', 2133, '10640', 3),
('HP 15-AY150TU 15.6\" Touchscreen Notebook', 'Laptop', '1PL58PA#ABG', '1198', 53, '14', '16772', 960, '3332', 5),
('Samsung KU6000 70\" 4K UHD HDR Smart LED LCD TV', 'TV', 'UA70KU6000WXXY', '2996', 64, '16', '47936', 2121, '14000', 3),
('Hisense M7000UWG 55\" ULED HDR Smart LED LCD TV', 'TV', '55M7000UWG', '1098', 59, '15', '16470', 859, '3585', 2),
('Sony X7000D 49\" 4K UHD HDR Android Smart LCD LED TV', 'TV', 'KD49X7000D', '1298', 34, '16', '20768', 1082, '3456', 3),
('Samsung KS8500 55\" Curved 4K SUHD HDR Smart LED LCD TV', 'TV', 'UA55KS8500WXXY', '2496', 69, '16', '39936', 1878, '9888', 2),
('Hisense K3300UW 65\" 4K UHD Smart LED LCD TV', 'TV', '65K3300UW', '1496', 67, '12', '17952', 1237, '3108', 2),
('Sony X8500D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X8500D', '2796', 43, '13', '36348', 2327, '6097', 4),
('Samsung UA75JU6400W 75\" 4K UHD Smart LED LCD TV', 'TV', 'UA75JU6400WXXY', '3698', 70, '19', '70262', 2857, '15979', 5),
('Soniq S70UV16A 70\" UHD Smart LED LCD TV', 'TV', 'S70UV16A-AU', '1799', 54, '25', '44975', 1593, '5150', 5),
('Sony Bravia 85\" 4K HDR UHD LED LCD TV', 'TV', 'KD85X8500D', '9998', 40, '13', '129974', 7269, '35477', 3),
('Sony X9300D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X9300D', '3998', 44, '20', '79960', 3162, '16720', 5),
('Samsung Galaxy S8 64GB (Black)', 'Mobile phone', '1091003347', '1199', 60, '13', '15587', 914, '3705', 3),
('Sony Xperia XZ (Black)', 'Mobile phone', '1071000647', '899', 49, '11', '9889', 681, '2398', 4),
('Google Pixel 32GB (Quite Black)', 'Mobile phone', '118298', '1079', 52, '12', '12948', 794, '3420', 2),
('ZTE Axon 7 (Grey)', 'Mobile phone', '1081000466', '699', 36, '25', '17475', 540, '3975', 3),
('Apple iPhone 7 128GB (Black)', 'Mobile phone', '3801000006', '1229', 32, '16', '19664', 887, '5472', 5),
('LG G6 64GB Dual Sim Handset (Black)', 'Mobile phone', '3611246', '1149', 59, '17', '19533', 830, '5423', 2),
('Huawei Mate 9 Handset (Mocha)', 'Mobile phone', '1101000951', '998', 26, '16', '15968', 835, '2608', 4),
('HTC U Ultra 64GB Handset (Cosmetic Pink)', 'Mobile phone', '1011001103', '898', 29, '21', '18858', 682, '4536', 2),
('Oppo R9s Plus Handset (Gold)', 'Mobile phone', ' CPH1611GOLD', '698', 55, '22', '15356', 509, '4158', 5),
('Samsung Galaxy Note 5 32GB (Black)', 'Mobile phone', '1091002203', '947', 34, '11', '10417', 665, '3102', 4),
('Canon EOS 1300D Digital SLR Camera (with 18-55mm Lens)', 'Camera', '1300DKB', '499', 70, '23', '11477', 435, '1472', 5),
('Olympus OM-D E-M1 Mark II Digital SLR (Body Only)', 'Camera', 'V207060BA000', '2499', 20, '22', '54978', 1869, '13860', 5),
('Sony FDRAX53 4K Handycam w/ BOSS', 'Camera', 'FDRAX53', '1099', 36, '17', '18683', 867, '3944', 2),
('Nikon Coolpix P900 16MP Digital Camera', 'Camera', 'DC-GX850KGNS', '798', 53, '12', '9576', 685, '1356', 5),
('Canon Powershot G9 X Mark II 20.1MP Digital Camera (Silver)', 'Camera', 'VNA750AC', '749', 25, '21', '15729', 567, '3822', 4),
('Fujifilm Instax Mini 8 Instant Camera and Case (Grape)', 'Camera', 'G9XIIS', '548', 37, '24', '13152', 444, '2496', 4),
('Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit', 'Camera', '84933', '99', 24, '19', '1881', 89, '190', 2),
('GoPro Hero5 Black 4K Action Video Camera', 'Camera', '791490', '549', 51, '24', '13176', 410, '3336', 5),
('Panasonic Lumix DC-FZ80GN-K 18.1MP Ultra Zoom Digital Camera', 'Camera', 'GPCHDHX-501', '548', 40, '24', '13152', 388, '3840', 4),
('Nikon Coolpix B700 20.3MP Ultra Zoom Digital Camera', 'Camera', 'DC-FZ80GN-K', '598', 40, '12', '7176', 525, '876', 3),
('Mackie CR4 4\" Powered Studio Monitors', 'Audio', 'M-CR4', '196', 63, '12', '2352', 142, '648', 3),
('Jaybird Freedom Wireless In-Ear Headphones (Carbon)', 'Audio', 'F5-S-B-AP-ANZ', '249', 38, '16', '3984', 191, '928', 2),
('AERPRO Multicolour LED 5M Strip Lighting', 'Audio', 'SMD5MC', '28', 25, '18', '504', 25, '54', 4),
('Marley Smile Jamaica In-Ear Headphones (Copper)', 'Audio', 'EMJE041CP', '24.95', 70, '15', '374.25', 21, '59.25', 3),
('MXL Tempo SK USB Microphone (Silver)', 'Audio', 'MXL-TEMPO SK', '98', 59, '21', '2058', 78, '420', 2),
('JBL E55BT Over-Ear Wireless Headphones (Black)', 'Audio', '3378033', '229', 70, '20', '4580', 184, '900', 3),
('Novation Launchpad Mini Music Creator', 'Audio', 'NOV-LPMIN', '141', 33, '18', '2538', 102, '702', 3),
('Beats Tour 2 Active In-Ear Headphones (Red)', 'Audio', 'MKPV2PA/A', '169', 65, '18', '3042', 148, '378', 3),
('Stadium USBMIC1 USB Studio Microphone', 'Audio', 'USBMIC1', '78', 23, '25', '1950', 67, '275', 5),
('Rode NTUSB Microphone', 'Audio', 'NTUSB', '168', 50, '13', '2184', 121, '611', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `shellharbour`
--

CREATE TABLE `shellharbour` (
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
-- Dumping data for table `shellharbour`
--

INSERT INTO `shellharbour` (`NAME`, `TYPE`, `CODE`, `SELLING_PRICE`, `QUANTITY`, `SALECOUNT`, `TOTALSALE`, `COST_PRICE`, `PROFIT`, `RETURN_ITEMS`) VALUES
('Apple MacBook Pro 15\" with Touch Bar 512GB (Space Grey)', 'Laptop', 'MLH42X/A', '4247', 57, '10', '42470', 3295, '9520', 2),
('Apple MacBook Pro 15\" with Touch Bar 256GB (Space Grey)', 'Laptop', 'MLH32X/A', '3597', 54, '18', '64746', 2848, '13482', 4),
('Apple iMac with Retina 5K display 27\" 3.3GHz', 'Laptop', 'MK482X/A', '3594', 51, '16', '57504', 2617, '15632', 3),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK472X/A', '3096', 37, '17', '52632', 2693, '6851', 1),
('Apple MacBook Pro 13\" with Touch Bar 512GB (Silver)', 'Laptop', 'MNQG2X/A', '2998', 60, '19', '56962', 2179, '15561', 4),
('Apple MacBook Pro 15\" 2.2GHz 256GB', 'Laptop', 'MJLQ2X/A', '2994', 47, '19', '56886', 2669, '6175', 3),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK462X/A', '2797', 54, '10', '27970', 2377, '4200', 4),
('Apple MacBook 12\" 256GB (Silver)', 'Laptop', 'MLHA2X/A', '1998', 31, '10', '19980', 1511, '4870', 2),
('Alienware 15 15.6\" Gaming Laptop (256GB SSD)', 'Laptop', 'A5115A3AU', '2798', 39, '16', '44768', 2133, '10640', 1),
('HP 15-AY150TU 15.6\" Touchscreen Notebook', 'Laptop', '1PL58PA#ABG', '1198', 34, '18', '21564', 960, '4284', 2),
('Samsung KU6000 70\" 4K UHD HDR Smart LED LCD TV', 'TV', 'UA70KU6000WXXY', '2996', 58, '17', '50932', 2121, '14875', 5),
('Hisense M7000UWG 55\" ULED HDR Smart LED LCD TV', 'TV', '55M7000UWG', '1098', 57, '19', '20862', 859, '4541', 5),
('Sony X7000D 49\" 4K UHD HDR Android Smart LCD LED TV', 'TV', 'KD49X7000D', '1298', 45, '15', '19470', 1082, '3240', 5),
('Samsung KS8500 55\" Curved 4K SUHD HDR Smart LED LCD TV', 'TV', 'UA55KS8500WXXY', '2496', 48, '18', '44928', 1878, '11124', 2),
('Hisense K3300UW 65\" 4K UHD Smart LED LCD TV', 'TV', '65K3300UW', '1496', 53, '11', '16456', 1237, '2849', 5),
('Sony X8500D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X8500D', '2796', 55, '20', '55920', 2327, '9380', 4),
('Samsung UA75JU6400W 75\" 4K UHD Smart LED LCD TV', 'TV', 'UA75JU6400WXXY', '3698', 31, '18', '66564', 2857, '15138', 5),
('Soniq S70UV16A 70\" UHD Smart LED LCD TV', 'TV', 'S70UV16A-AU', '1799', 60, '12', '21588', 1593, '2472', 3),
('Sony Bravia 85\" 4K HDR UHD LED LCD TV', 'TV', 'KD85X8500D', '9998', 50, '16', '159968', 7269, '43664', 1),
('Sony X9300D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X9300D', '3998', 34, '15', '59970', 3162, '12540', 2),
('Samsung Galaxy S8 64GB (Black)', 'Mobile phone', '1091003347', '1199', 45, '18', '21582', 914, '5130', 4),
('Sony Xperia XZ (Black)', 'Mobile phone', '1071000647', '899', 50, '15', '13485', 681, '3270', 5),
('Google Pixel 32GB (Quite Black)', 'Mobile phone', '118298', '1079', 47, '15', '16185', 794, '4275', 1),
('ZTE Axon 7 (Grey)', 'Mobile phone', '1081000466', '699', 40, '11', '7689', 540, '1749', 1),
('Apple iPhone 7 128GB (Black)', 'Mobile phone', '3801000006', '1229', 40, '13', '15977', 887, '4446', 1),
('LG G6 64GB Dual Sim Handset (Black)', 'Mobile phone', '3611246', '1149', 60, '20', '22980', 830, '6380', 5),
('Huawei Mate 9 Handset (Mocha)', 'Mobile phone', '1101000951', '998', 31, '12', '11976', 835, '1956', 2),
('HTC U Ultra 64GB Handset (Cosmetic Pink)', 'Mobile phone', '1011001103', '898', 36, '10', '8980', 682, '2160', 2),
('Oppo R9s Plus Handset (Gold)', 'Mobile phone', ' CPH1611GOLD', '698', 31, '12', '8376', 509, '2268', 1),
('Samsung Galaxy Note 5 32GB (Black)', 'Mobile phone', '1091002203', '947', 38, '15', '14205', 665, '4230', 1),
('Canon EOS 1300D Digital SLR Camera (with 18-55mm Lens)', 'Camera', '1300DKB', '499', 34, '17', '8483', 435, '1088', 4),
('Olympus OM-D E-M1 Mark II Digital SLR (Body Only)', 'Camera', 'V207060BA000', '2499', 60, '11', '27489', 1869, '6930', 1),
('Sony FDRAX53 4K Handycam w/ BOSS', 'Camera', 'FDRAX53', '1099', 44, '17', '18683', 867, '3944', 4),
('Nikon Coolpix P900 16MP Digital Camera', 'Camera', 'DC-GX850KGNS', '798', 52, '18', '14364', 685, '2034', 1),
('Canon Powershot G9 X Mark II 20.1MP Digital Camera (Silver)', 'Camera', 'VNA750AC', '749', 42, '16', '11984', 567, '2912', 5),
('Fujifilm Instax Mini 8 Instant Camera and Case (Grape)', 'Camera', 'G9XIIS', '548', 49, '19', '10412', 444, '1976', 3),
('Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit', 'Camera', '84933', '99', 40, '14', '1386', 89, '140', 4),
('GoPro Hero5 Black 4K Action Video Camera', 'Camera', '791490', '549', 60, '14', '7686', 410, '1946', 2),
('Panasonic Lumix DC-FZ80GN-K 18.1MP Ultra Zoom Digital Camera', 'Camera', 'GPCHDHX-501', '548', 58, '11', '6028', 388, '1760', 5),
('Nikon Coolpix B700 20.3MP Ultra Zoom Digital Camera', 'Camera', 'DC-FZ80GN-K', '598', 60, '12', '7176', 525, '876', 6),
('Mackie CR4 4\" Powered Studio Monitors', 'Audio', 'M-CR4', '196', 37, '12', '2352', 142, '648', 5),
('Jaybird Freedom Wireless In-Ear Headphones (Carbon)', 'Audio', 'F5-S-B-AP-ANZ', '249', 45, '18', '4482', 191, '1044', 6),
('AERPRO Multicolour LED 5M Strip Lighting', 'Audio', 'SMD5MC', '28', 58, '18', '504', 25, '54', 1),
('Marley Smile Jamaica In-Ear Headphones (Copper)', 'Audio', 'EMJE041CP', '24.95', 59, '11', '274.45', 21, '43.45', 1),
('MXL Tempo SK USB Microphone (Silver)', 'Audio', 'MXL-TEMPO SK', '98', 38, '19', '1862', 78, '380', 2),
('JBL E55BT Over-Ear Wireless Headphones (Black)', 'Audio', '3378033', '229', 40, '17', '3893', 184, '765', 2),
('Novation Launchpad Mini Music Creator', 'Audio', 'NOV-LPMIN', '141', 45, '14', '1974', 102, '546', 3),
('Beats Tour 2 Active In-Ear Headphones (Red)', 'Audio', 'MKPV2PA/A', '169', 35, '19', '3211', 148, '399', 4),
('Stadium USBMIC1 USB Studio Microphone', 'Audio', 'USBMIC1', '78', 51, '19', '1482', 67, '209', 5),
('Rode NTUSB Microphone', 'Audio', 'NTUSB', '168', 56, '11', '1848', 121, '517', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 03:24 AM
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
-- Table structure for table `sydney`
--

CREATE TABLE `sydney` (
  `NAME` varchar(60) DEFAULT NULL,
  `TYPE` varchar(12) DEFAULT NULL,
  `CODE` varchar(14) DEFAULT NULL,
  `SELLING_PRICE` varchar(10) DEFAULT NULL,
  `QUANTITY` int(2) DEFAULT NULL,
  `SALECOUNT` varchar(10) DEFAULT NULL,
  `TOTALSALE` varchar(10) DEFAULT NULL,
  `COST_PRICE` int(4) DEFAULT NULL,
  `PROFIT` varchar(10) DEFAULT NULL,
  `RETURN_ITEMS` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sydney`
--

INSERT INTO `sydney` (`NAME`, `TYPE`, `CODE`, `SELLING_PRICE`, `QUANTITY`, `SALECOUNT`, `TOTALSALE`, `COST_PRICE`, `PROFIT`, `RETURN_ITEMS`) VALUES
('Apple MacBook Pro 15\" with Touch Bar 512GB (Space Grey)', 'Laptop', 'MLH42X/A', '4247', 81, '58', '246326', 3295, '55216', 12),
('Apple MacBook Pro 15\" with Touch Bar 256GB (Space Grey)', 'Laptop', 'MLH32X/A', '3597', 45, '56', '201432', 2848, '41944', 12),
('Apple iMac with Retina 5K display 27\" 3.3GHz', 'Laptop', 'MK482X/A', '3594', 76, '30', '107820', 2617, '29310', 14),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK472X/A', '3096', 40, '26', '80496', 2693, '10478', 8),
('Apple MacBook Pro 13\" with Touch Bar 512GB (Silver)', 'Laptop', 'MNQG2X/A', '2998', 74, '35', '104930', 2179, '28665', 11),
('Apple MacBook Pro 15\" 2.2GHz 256GB', 'Laptop', 'MJLQ2X/A', '2994', 52, '42', '125748', 2669, '13650', 6),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK462X/A', '2797', 61, '29', '81113', 2377, '12180', 7),
('Apple MacBook 12\" 256GB (Silver)', 'Laptop', 'MLHA2X/A', '1998', 76, '21', '41958', 1511, '10227', 6),
('Alienware 15 15.6\" Gaming Laptop (256GB SSD)', 'Laptop', 'A5115A3AU', '2798', 44, '59', '165082', 2133, '39235', 13),
('HP 15-AY150TU 15.6\" Touchscreen Notebook', 'Laptop', '1PL58PA#ABG', '1198', 69, '34', '40732', 960, '8092', 9),
('Samsung KU6000 70\" 4K UHD HDR Smart LED LCD TV', 'TV', 'UA70KU6000WXXY', '2996', 80, '30', '89880', 2121, '26250', 10),
('Hisense M7000UWG 55\" ULED HDR Smart LED LCD TV', 'TV', '55M7000UWG', '1098', 76, '42', '46116', 859, '10038', 7),
('Sony X7000D 49\" 4K UHD HDR Android Smart LCD LED TV', 'TV', 'KD49X7000D', '1298', 43, '54', '70092', 1082, '11664', 9),
('Samsung KS8500 55\" Curved 4K SUHD HDR Smart LED LCD TV', 'TV', 'UA55KS8500WXXY', '2496', 82, '45', '112320', 1878, '27810', 11),
('Hisense K3300UW 65\" 4K UHD Smart LED LCD TV', 'TV', '65K3300UW', '1496', 80, '46', '68816', 1237, '11914', 11),
('Sony X8500D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X8500D', '2796', 41, '36', '100656', 2327, '16884', 14),
('Samsung UA75JU6400W 75\" 4K UHD Smart LED LCD TV', 'TV', 'UA75JU6400WXXY', '3698', 61, '54', '199692', 2857, '45414', 10),
('Soniq S70UV16A 70\" UHD Smart LED LCD TV', 'TV', 'S70UV16A-AU', '1799', 53, '35', '62965', 1593, '7210', 10),
('Sony Bravia 85\" 4K HDR UHD LED LCD TV', 'TV', 'KD85X8500D', '9998', 55, '28', '279944', 2269, '76412', 5),
('Sony X9300D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X9300D', '3998', 62, '36', '143928', 3162, '30096', 11),
('Samsung Galaxy S8 64GB (Black)', 'Mobile phone', '1091003347', '1199', 48, '49', '58751', 914, '13965', 14),
('Sony Xperia XZ (Black)', 'Mobile phone', '1071000647', '899', 69, '51', '45849', 681, '11118', 7),
('Google Pixel 32GB (Quite Black)', 'Mobile phone', '118298', '1079', 47, '44', '47476', 794, '12540', 7),
('ZTE Axon 7 (Grey)', 'Mobile phone', '1081000466', '699', 65, '38', '26562', 540, '6042', 12),
('Apple iPhone 7 128GB (Black)', 'Mobile phone', '3801000006', '1229', 50, '57', '70053', 887, '19494', 15),
('LG G6 64GB Dual Sim Handset (Black)', 'Mobile phone', '3611246', '1149', 85, '39', '44811', 830, '12441', 5),
('Huawei Mate 9 Handset (Mocha)', 'Mobile phone', '1101000951', '998', 84, '51', '50898', 835, '8313', 10),
('HTC U Ultra 64GB Handset (Cosmetic Pink)', 'Mobile phone', '1011001103', '898', 49, '40', '35920', 682, '8640', 8),
('Oppo R9s Plus Handset (Gold)', 'Mobile phone', ' CPH1611GOLD', '698', 70, '36', '25128', 509, '6804', 9),
('Samsung Galaxy Note 5 32GB (Black)', 'Mobile phone', '1091002203', '947', 68, '30', '28410', 665, '8460', 15),
('Canon EOS 1300D Digital SLR Camera (with 18-55mm Lens)', 'Camera', '1300DKB', '499', 84, '47', '23453', 435, '3008', 12),
('Olympus OM-D E-M1 Mark II Digital SLR (Body Only)', 'Camera', 'V207060BA000', '2499', 68, '31', '77469', 1869, '19530', 7),
('Sony FDRAX53 4K Handycam w/ BOSS', 'Camera', 'FDRAX53', '1099', 57, '43', '47257', 867, '9976', 13),
('Nikon Coolpix P900 16MP Digital Camera', 'Camera', 'DC-GX850KGNS', '798', 67, '40', '31920', 685, '4520', 11),
('Canon Powershot G9 X Mark II 20.1MP Digital Camera (Silver)', 'Camera', 'VNA750AC', '749', 87, '40', '29960', 567, '7280', 5),
('Fujifilm Instax Mini 8 Instant Camera and Case (Grape)', 'Camera', 'G9XIIS', '548', 55, '32', '17536', 444, '3328', 9),
('Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit', 'Camera', '84933', '99', 78, '50', '4950', 89, '500', 6),
('GoPro Hero5 Black 4K Action Video Camera', 'Camera', '791490', '549', 77, '35', '19215', 410, '4865', 9),
('Panasonic Lumix DC-FZ80GN-K 18.1MP Ultra Zoom Digital Camera', 'Camera', 'GPCHDHX-501', '548', 40, '58', '31784', 388, '9280', 8),
('Nikon Coolpix B700 20.3MP Ultra Zoom Digital Camera', 'Camera', 'DC-FZ80GN-K', '598', 76, '54', '32292', 525, '3942', 9),
('Mackie CR4 4\" Powered Studio Monitors', 'Audio', 'M-CR4', '196', 84, '37', '7252', 142, '1998', 15),
('Jaybird Freedom Wireless In-Ear Headphones (Carbon)', 'Audio', 'F5-S-B-AP-ANZ', '249', 40, '29', '7221', 191, '1682', 15),
('AERPRO Multicolour LED 5M Strip Lighting', 'Audio', 'SMD5MC', '28', 69, '54', '1512', 25, '162', 8),
('Marley Smile Jamaica In-Ear Headphones (Copper)', 'Audio', 'EMJE041CP', '24.95', 86, '51', '1272.45', 21, '201.45', 14),
('MXL Tempo SK USB Microphone (Silver)', 'Audio', 'MXL-TEMPO SK', '98', 43, '47', '4606', 78, '940', 11),
('JBL E55BT Over-Ear Wireless Headphones (Black)', 'Audio', '3378033', '229', 70, '49', '11221', 184, '2205', 9),
('Novation Launchpad Mini Music Creator', 'Audio', 'NOV-LPMIN', '141', 86, '28', '3948', 102, '1092', 6),
('Beats Tour 2 Active In-Ear Headphones (Red)', 'Audio', 'MKPV2PA/A', '169', 54, '44', '7436', 148, '924', 8),
('Stadium USBMIC1 USB Studio Microphone', 'Audio', 'USBMIC1', '78', 87, '29', '2262', 67, '319', 6),
('Rode NTUSB Microphone', 'Audio', 'NTUSB', '168', 88, '56', '9408', 121, '2632', 14);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 03:18 AM
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
-- Table structure for table `wollongong`
--

CREATE TABLE `wollongong` (
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
-- Dumping data for table `wollongong`
--

INSERT INTO `wollongong` (`NAME`, `TYPE`, `CODE`, `SELLING_PRICE`, `QUANTITY`, `SALECOUNT`, `TOTALSALE`, `COST_PRICE`, `PROFIT`, `RETURN_ITEMS`) VALUES
('Apple MacBook Pro 15\" with Touch Bar 512GB (Space Grey)', 'Laptop', 'MLH42X/A', '4247', 45, '10', '42470', 3295, '9520', 1),
('Apple MacBook Pro 15\" with Touch Bar 256GB (Space Grey)', 'Laptop', 'MLH32X/A', '3597', 55, '10', '35970', 2848, '7490', 2),
('Apple iMac with Retina 5K display 27\" 3.3GHz', 'Laptop', 'MK482X/A', '3594', 67, '16', '57504', 2617, '15632', 1),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK472X/A', '3096', 15, '16', '49536', 2693, '6448', 5),
('Apple MacBook Pro 13\" with Touch Bar 512GB (Silver)', 'Laptop', 'MNQG2X/A', '2998', 27, '17', '50966', 2179, '13923', 2),
('Apple MacBook Pro 15\" 2.2GHz 256GB', 'Laptop', 'MJLQ2X/A', '2994', 72, '14', '41916', 2669, '4550', 3),
('Apple iMac with Retina 5K display 27\" 3.2GHz', 'Laptop', 'MK462X/A', '2797', 24, '28', '78316', 2377, '11760', 5),
('Apple MacBook 12\" 256GB (Silver)', 'Laptop', 'MLHA2X/A', '1998', 31, '15', '29970', 1511, '7305', 1),
('Alienware 15 15.6\" Gaming Laptop (256GB SSD)', 'Laptop', 'A5115A3AU', '2798', 20, '15', '41970', 2133, '9975', 5),
('HP 15-AY150TU 15.6\" Touchscreen Notebook', 'Laptop', '1PL58PA#ABG', '1198', 73, '29', '34742', 960, '6902', 1),
('Samsung KU6000 70\" 4K UHD HDR Smart LED LCD TV', 'TV', 'UA70KU6000WXXY', '2996', 79, '30', '89880', 2121, '26250', 1),
('Hisense M7000UWG 55\" ULED HDR Smart LED LCD TV', 'TV', '55M7000UWG', '1098', 46, '18', '19764', 859, '4302', 3),
('Sony X7000D 49\" 4K UHD HDR Android Smart LCD LED TV', 'TV', 'KD49X7000D', '1298', 29, '26', '33748', 1082, '5616', 5),
('Samsung KS8500 55\" Curved 4K SUHD HDR Smart LED LCD TV', 'TV', 'UA55KS8500WXXY', '2496', 62, '17', '42432', 1878, '10506', 3),
('Hisense K3300UW 65\" 4K UHD Smart LED LCD TV', 'TV', '65K3300UW', '1496', 84, '30', '44880', 1237, '7770', 3),
('Sony X8500D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X8500D', '2796', 64, '24', '67104', 2327, '11256', 1),
('Samsung UA75JU6400W 75\" 4K UHD Smart LED LCD TV', 'TV', 'UA75JU6400WXXY', '3698', 15, '11', '40678', 2857, '9251', 5),
('Soniq S70UV16A 70\" UHD Smart LED LCD TV', 'TV', 'S70UV16A-AU', '1799', 18, '10', '17990', 1593, '2060', 1),
('Sony Bravia 85\" 4K HDR UHD LED LCD TV', 'TV', 'KD85X8500D', '9998', 50, '30', '299940', 7269, '81870', 3),
('Sony X9300D 65\" 4K UHD HDR Android Smart LED LCD TV', 'TV', 'KD65X9300D', '3998', 38, '28', '111944', 3162, '23408', 5),
('Samsung Galaxy S8 64GB (Black)', 'Mobile phone', '1091003347', '1199', 84, '29', '34771', 914, '8265', 2),
('Sony Xperia XZ (Black)', 'Mobile phone', '1071000647', '899', 66, '23', '20677', 681, '5014', 4),
('Google Pixel 32GB (Quite Black)', 'Mobile phone', '118298', '1079', 38, '21', '22659', 794, '5985', 5),
('ZTE Axon 7 (Grey)', 'Mobile phone', '1081000466', '699', 71, '23', '16077', 540, '3657', 3),
('Apple iPhone 7 128GB (Black)', 'Mobile phone', '3801000006', '1229', 23, '27', '33183', 887, '9234', 4),
('LG G6 64GB Dual Sim Handset (Black)', 'Mobile phone', '3611246', '1149', 82, '23', '26427', 830, '7337', 1),
('Huawei Mate 9 Handset (Mocha)', 'Mobile phone', '1101000951', '998', 79, '29', '28942', 835, '4727', 3),
('HTC U Ultra 64GB Handset (Cosmetic Pink)', 'Mobile phone', '1011001103', '898', 68, '17', '15266', 682, '3672', 4),
('Oppo R9s Plus Handset (Gold)', 'Mobile phone', ' CPH1611GOLD', '698', 87, '24', '16752', 509, '4536', 2),
('Samsung Galaxy Note 5 32GB (Black)', 'Mobile phone', '1091002203', '947', 83, '27', '25569', 665, '7614', 4),
('Canon EOS 1300D Digital SLR Camera (with 18-55mm Lens)', 'Camera', '1300DKB', '499', 49, '28', '13972', 435, '1792', 5),
('Olympus OM-D E-M1 Mark II Digital SLR (Body Only)', 'Camera', 'V207060BA000', '2499', 38, '22', '54978', 1869, '13860', 4),
('Sony FDRAX53 4K Handycam w/ BOSS', 'Camera', 'FDRAX53', '1099', 34, '26', '28574', 867, '6032', 5),
('Nikon Coolpix P900 16MP Digital Camera', 'Camera', 'DC-GX850KGNS', '798', 34, '10', '7980', 685, '1130', 1),
('Canon Powershot G9 X Mark II 20.1MP Digital Camera (Silver)', 'Camera', 'VNA750AC', '749', 84, '21', '15729', 567, '3822', 2),
('Fujifilm Instax Mini 8 Instant Camera and Case (Grape)', 'Camera', 'G9XIIS', '548', 43, '27', '14796', 444, '2808', 2),
('Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit', 'Camera', '84933', '99', 66, '30', '2970', 89, '300', 4),
('GoPro Hero5 Black 4K Action Video Camera', 'Camera', '791490', '549', 64, '28', '15372', 410, '3892', 2),
('Panasonic Lumix DC-FZ80GN-K 18.1MP Ultra Zoom Digital Camera', 'Camera', 'GPCHDHX-501', '548', 40, '17', '9316', 388, '2720', 2),
('Nikon Coolpix B700 20.3MP Ultra Zoom Digital Camera', 'Camera', 'DC-FZ80GN-K', '598', 82, '28', '16744', 525, '2044', 1),
('Mackie CR4 4\" Powered Studio Monitors', 'Audio', 'M-CR4', '196', 74, '19', '3724', 142, '1026', 4),
('Jaybird Freedom Wireless In-Ear Headphones (Carbon)', 'Audio', 'F5-S-B-AP-ANZ', '249', 50, '25', '6225', 191, '1450', 5),
('AERPRO Multicolour LED 5M Strip Lighting', 'Audio', 'SMD5MC', '28', 89, '10', '280', 25, '30', 1),
('Marley Smile Jamaica In-Ear Headphones (Copper)', 'Audio', 'EMJE041CP', '24.95', 33, '25', '623.75', 21, '98.75', 5),
('MXL Tempo SK USB Microphone (Silver)', 'Audio', 'MXL-TEMPO SK', '98', 62, '18', '1764', 78, '360', 3),
('JBL E55BT Over-Ear Wireless Headphones (Black)', 'Audio', '3378033', '229', 86, '18', '4122', 184, '810', 2),
('Novation Launchpad Mini Music Creator', 'Audio', 'NOV-LPMIN', '141', 62, '26', '3666', 102, '1014', 5),
('Beats Tour 2 Active In-Ear Headphones (Red)', 'Audio', 'MKPV2PA/A', '169', 86, '10', '1690', 148, '210', 3),
('Stadium USBMIC1 USB Studio Microphone', 'Audio', 'USBMIC1', '78', 54, '19', '1482', 67, '209', 3),
('Rode NTUSB Microphone', 'Audio', 'NTUSB', '168', 55, '27', '4536', 121, '1269', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `store_data_adelaide`
--

CREATE TABLE `store_data_adelaide` (
  `DATE` int(2) DEFAULT NULL,
  `COST_OF_GOODS` int(5) DEFAULT NULL,
  `FREIGHT_COSTS` int(3) DEFAULT NULL,
  `WAGES` int(4) DEFAULT NULL,
  `OVERHEAD` int(4) DEFAULT NULL,
  `SALES` int(5) DEFAULT NULL,
  `RETURN` int(1) DEFAULT NULL,
  `PROFIT` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `store_data_adelaide`
--

INSERT INTO `store_data_adelaide` (`DATE`, `COST_OF_GOODS`, `FREIGHT_COSTS`, `WAGES`, `OVERHEAD`, `SALES`, `RETURN`, `PROFIT`) VALUES
(1, 37355, 661, 1893, 960, 32430, 2, 15751),
(2, 55057, 179, 1987, 618, 82889, 4, 13744),
(3, 51912, 669, 1987, 1556, 31850, 1, 14943),
(4, 49751, 376, 1537, 838, 83578, 5, 15708),
(5, 26170, 393, 1718, 617, 81875, 4, 17493),
(6, 49565, 979, 1987, 1721, 83795, 3, 12396),
(7, 26161, 298, 1537, 1556, 35005, 2, 16608),
(8, 58145, 424, 1852, 838, 46436, 5, 11167),
(9, 56486, 222, 1572, 617, 78848, 5, 18256),
(10, 62912, 393, 1658, 1721, 95617, 1, 16110),
(11, 73216, 979, 1987, 617, 57965, 4, 15302),
(12, 50935, 298, 1987, 617, 25346, 3, 17732),
(13, 72749, 424, 1537, 1721, 76641, 1, 19803),
(14, 73519, 298, 1718, 1556, 73367, 2, 12561),
(15, 28314, 393, 1987, 838, 99599, 0, 14205),
(16, 24641, 979, 1537, 1556, 65852, 0, 12256),
(17, 58040, 298, 1718, 838, 51362, 1, 15430),
(18, 32327, 376, 1853, 617, 63460, 4, 13554),
(19, 50135, 393, 1571, 838, 28637, 4, 10967),
(20, 58444, 979, 1852, 617, 77416, 1, 19777),
(21, 47992, 298, 1987, 1721, 76883, 2, 18509),
(22, 63772, 424, 1537, 1556, 40894, 4, 11308),
(23, 58120, 222, 1718, 838, 59821, 0, 11666),
(24, 32976, 979, 1571, 617, 76451, 3, 10688),
(25, 29042, 393, 1852, 617, 89055, 1, 18768),
(26, 25423, 979, 1572, 1721, 91928, 1, 19876),
(27, 43302, 298, 1658, 1556, 24336, 2, 12397),
(28, 52599, 424, 1872, 838, 64576, 5, 19514),
(29, 51294, 281, 1868, 617, 97220, 3, 18476);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `store_data_brisbane`
--

CREATE TABLE `store_data_brisbane` (
  `DATE` int(2) DEFAULT NULL,
  `COST_OF_GOODS` int(5) DEFAULT NULL,
  `FREIGHT_COSTS` int(3) DEFAULT NULL,
  `WAGES` int(4) DEFAULT NULL,
  `OVERHEAD` int(4) DEFAULT NULL,
  `SALES` int(5) DEFAULT NULL,
  `RETURN` int(1) DEFAULT NULL,
  `PROFIT` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_data_brisbane`
--

INSERT INTO `store_data_brisbane` (`DATE`, `COST_OF_GOODS`, `FREIGHT_COSTS`, `WAGES`, `OVERHEAD`, `SALES`, `RETURN`, `PROFIT`) VALUES
(1, 36219, 661, 1893, 960, 43540, 0, 22024),
(2, 79133, 179, 1571, 618, 91448, 5, 5982),
(3, 46598, 669, 1852, 1556, 52926, 4, 7226),
(4, 56930, 376, 1572, 838, 98733, 2, 9198),
(5, 40219, 393, 1658, 617, 41814, 0, 21481),
(6, 32631, 979, 1853, 1721, 49785, 6, 15473),
(7, 53804, 298, 1571, 1556, 46971, 2, 18724),
(8, 79550, 424, 1852, 838, 60815, 0, 16345),
(9, 36132, 222, 1572, 617, 38639, 1, 17598),
(10, 73605, 179, 1658, 1721, 28821, 2, 8591),
(11, 62228, 669, 1987, 617, 29821, 0, 20679),
(12, 68520, 393, 1537, 1556, 32658, 6, 14996),
(13, 33590, 979, 1718, 1556, 93126, 2, 19255),
(14, 74063, 298, 1624, 838, 79977, 5, 10180),
(15, 44993, 424, 1571, 1490, 61533, 7, 16747),
(16, 41540, 222, 1852, 987, 78931, 7, 23304),
(17, 49003, 298, 1572, 617, 92602, 3, 13782),
(18, 46647, 222, 1853, 1721, 73295, 3, 9339),
(19, 44483, 179, 1571, 1556, 80454, 4, 18046),
(20, 77098, 669, 1852, 838, 62197, 7, 13844),
(21, 45933, 393, 1572, 617, 29551, 7, 16819),
(22, 38877, 979, 1658, 1556, 34425, 0, 16520),
(23, 79718, 222, 1725, 1556, 65884, 7, 18126),
(24, 76644, 979, 1571, 838, 53737, 1, 22847),
(25, 45409, 298, 1852, 1490, 63505, 3, 7907),
(26, 58319, 298, 1572, 987, 61323, 3, 23837),
(27, 32705, 424, 1658, 1556, 43746, 0, 9606),
(28, 31230, 222, 1872, 838, 63211, 1, 22789),
(29, 79615, 281, 1868, 617, 58722, 4, 7577);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `store_data_cairns`
--

CREATE TABLE `store_data_cairns` (
  `DATE` int(2) DEFAULT NULL,
  `COST_OF_GOODS` int(5) DEFAULT NULL,
  `FREIGHT_COSTS` int(3) DEFAULT NULL,
  `WAGES` int(4) DEFAULT NULL,
  `OVERHEAD` int(4) DEFAULT NULL,
  `SALES` int(6) DEFAULT NULL,
  `RETURN` int(1) DEFAULT NULL,
  `PROFIT` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `store_data_cairns`
--

INSERT INTO `store_data_cairns` (`DATE`, `COST_OF_GOODS`, `FREIGHT_COSTS`, `WAGES`, `OVERHEAD`, `SALES`, `RETURN`, `PROFIT`) VALUES
(1, 45846, 661, 1893, 960, 83241, 3, 15739),
(2, 44638, 179, 1571, 618, 72564, 4, 10640),
(3, 29545, 669, 1852, 1556, 77380, 5, 6963),
(4, 55225, 376, 1572, 838, 75938, 5, 9155),
(5, 61373, 393, 1658, 617, 21558, 5, 20679),
(6, 72463, 979, 1853, 1721, 97140, 5, 6571),
(7, 54033, 298, 1571, 1556, 48357, 5, 18129),
(8, 56503, 424, 1852, 838, 31344, 1, 6835),
(9, 20099, 222, 1572, 617, 81791, 5, 6361),
(10, 45828, 179, 1658, 1721, 72812, 0, 12506),
(11, 58631, 669, 1987, 1556, 39700, 2, 19182),
(12, 61229, 393, 1537, 838, 47248, 2, 20343),
(13, 66859, 979, 1718, 1490, 86869, 5, 9815),
(14, 50687, 298, 1624, 987, 58893, 2, 6214),
(15, 35963, 424, 1571, 1973, 58533, 0, 5604),
(16, 52525, 222, 1852, 1556, 37243, 1, 19733),
(17, 64427, 298, 1572, 838, 25219, 3, 12115),
(18, 21989, 424, 1658, 617, 56391, 0, 18226),
(19, 36645, 393, 1571, 1721, 104278, 0, 16995),
(20, 58625, 979, 1852, 838, 51863, 4, 5151),
(21, 52406, 298, 1572, 617, 32630, 1, 18638),
(22, 79985, 424, 1658, 1556, 74357, 1, 24820),
(23, 48445, 222, 1725, 838, 52263, 3, 15265),
(24, 64679, 979, 1571, 617, 65582, 4, 5308),
(25, 41972, 298, 1852, 1721, 103693, 4, 22370),
(26, 28529, 298, 1572, 838, 87338, 1, 21341),
(27, 21188, 424, 1658, 617, 97711, 0, 20573),
(28, 57323, 222, 1872, 1721, 44236, 1, 15481),
(29, 70022, 281, 1868, 1556, 103081, 3, 12997);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `store_data_canberra`
--

CREATE TABLE `store_data_canberra` (
  `DATE` int(2) DEFAULT NULL,
  `COST_OF_GOODS` int(5) DEFAULT NULL,
  `FREIGHT_COSTS` int(3) DEFAULT NULL,
  `WAGES` int(4) DEFAULT NULL,
  `OVERHEAD` int(4) DEFAULT NULL,
  `SALES` int(5) DEFAULT NULL,
  `RETURN` int(1) DEFAULT NULL,
  `PROFIT` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `store_data_canberra`
--

INSERT INTO `store_data_canberra` (`DATE`, `COST_OF_GOODS`, `FREIGHT_COSTS`, `WAGES`, `OVERHEAD`, `SALES`, `RETURN`, `PROFIT`) VALUES
(1, 43007, 661, 1893, 960, 71360, 3, 6563),
(2, 37359, 179, 1730, 618, 67271, 3, 13733),
(3, 44437, 669, 1881, 1556, 24449, 1, 17780),
(4, 35108, 376, 1529, 838, 47151, 3, 11768),
(5, 33363, 393, 1898, 617, 53589, 4, 12058),
(6, 42150, 979, 1853, 1721, 63304, 4, 11316),
(7, 34985, 298, 1571, 1556, 33363, 0, 10754),
(8, 36342, 424, 1852, 838, 40721, 2, 16346),
(9, 33137, 222, 1572, 617, 23358, 0, 11345),
(10, 40791, 181, 1658, 1721, 19341, 2, 11598),
(11, 45111, 179, 1987, 1556, 29588, 2, 13823),
(12, 33849, 442, 1537, 838, 67920, 3, 7446),
(13, 45540, 376, 1718, 1490, 26880, 3, 14657),
(14, 38182, 393, 1624, 987, 50458, 2, 9361),
(15, 35073, 979, 1666, 1973, 42926, 2, 5331),
(16, 49691, 298, 1526, 617, 43491, 4, 19972),
(17, 40552, 298, 1501, 618, 42002, 1, 12604),
(18, 49831, 424, 1605, 1556, 32276, 4, 19396),
(19, 48914, 181, 1960, 1556, 45812, 3, 13351),
(20, 37690, 179, 1788, 838, 49674, 0, 5927),
(21, 35479, 442, 1517, 617, 79949, 2, 8815),
(22, 30160, 376, 1897, 1721, 21674, 1, 17038),
(23, 34584, 393, 1725, 1556, 82493, 4, 11147),
(24, 44840, 979, 1719, 838, 67740, 0, 18197),
(25, 39614, 298, 1585, 1556, 40666, 2, 12302),
(26, 44874, 298, 1956, 838, 52714, 0, 15982),
(27, 38730, 424, 1589, 617, 12549, 0, 12193),
(28, 37408, 222, 1872, 1721, 16498, 0, 16921),
(29, 38067, 281, 1868, 1556, 72810, 4, 6001);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `store_data_centralcoast`
--

CREATE TABLE `store_data_centralcoast` (
  `DATE` int(2) DEFAULT NULL,
  `COST_OF_GOODS` int(5) DEFAULT NULL,
  `FREIGHT_COSTS` int(3) DEFAULT NULL,
  `WAGES` int(4) DEFAULT NULL,
  `OVERHEAD` int(4) DEFAULT NULL,
  `SALES` int(5) DEFAULT NULL,
  `RETURN` int(1) DEFAULT NULL,
  `PROFIT` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `store_data_centralcoast`
--

INSERT INTO `store_data_centralcoast` (`DATE`, `COST_OF_GOODS`, `FREIGHT_COSTS`, `WAGES`, `OVERHEAD`, `SALES`, `RETURN`, `PROFIT`) VALUES
(1, 61847, 661, 1893, 960, 17777, 3, 10233),
(2, 10348, 179, 1730, 618, 73097, 3, 8040),
(3, 30667, 669, 1881, 987, 62216, 1, 16112),
(4, 18898, 376, 1529, 1973, 78891, 3, 9726),
(5, 37703, 393, 1898, 617, 71072, 4, 11707),
(6, 53791, 979, 1853, 1721, 10078, 4, 16122),
(7, 18049, 298, 1571, 1556, 15454, 0, 16584),
(8, 47247, 424, 1852, 838, 59042, 2, 16423),
(9, 62786, 222, 1572, 617, 33051, 0, 13538),
(10, 9925, 181, 1658, 1721, 14210, 2, 15038),
(11, 5063, 179, 1987, 1556, 89009, 2, 13842),
(12, 8996, 442, 1537, 838, 22234, 3, 17185),
(13, 24522, 181, 1718, 1490, 34354, 3, 17798),
(14, 12188, 179, 1624, 987, 74794, 2, 8437),
(15, 33876, 393, 1666, 1973, 87777, 2, 10723),
(16, 33412, 979, 1526, 617, 47699, 4, 8197),
(17, 66845, 298, 1501, 618, 87100, 1, 17624),
(18, 71908, 424, 1605, 1556, 48342, 4, 16836),
(19, 30766, 181, 1960, 987, 62374, 3, 14384),
(20, 76146, 179, 1788, 1973, 43277, 0, 8021),
(21, 74494, 442, 1517, 617, 50813, 2, 16818),
(22, 61674, 181, 1897, 1721, 14489, 1, 12815),
(23, 22554, 179, 1725, 1556, 17187, 4, 9795),
(24, 42248, 393, 1719, 838, 65376, 0, 8611),
(25, 19457, 979, 1585, 1973, 49754, 2, 8584),
(26, 21161, 298, 1956, 1733, 85584, 0, 17483),
(27, 20302, 424, 1589, 1205, 69369, 0, 15927),
(28, 35302, 222, 1872, 1533, 62589, 0, 11691),
(29, 38566, 281, 1868, 587, 83956, 4, 11848);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `store_data_melbourne`
--

CREATE TABLE `store_data_melbourne` (
  `DATE` int(2) DEFAULT NULL,
  `COST_OF_GOODS` int(6) DEFAULT NULL,
  `FREIGHT_COSTS` int(3) DEFAULT NULL,
  `WAGES` int(4) DEFAULT NULL,
  `OVERHEAD` int(4) DEFAULT NULL,
  `SALES` int(6) DEFAULT NULL,
  `RETURN` int(2) DEFAULT NULL,
  `PROFIT` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `store_data_melbourne`
--

INSERT INTO `store_data_melbourne` (`DATE`, `COST_OF_GOODS`, `FREIGHT_COSTS`, `WAGES`, `OVERHEAD`, `SALES`, `RETURN`, `PROFIT`) VALUES
(1, 116190, 661, 1893, 960, 180406, 7, 41566),
(2, 97440, 179, 1730, 618, 161898, 8, 31827),
(3, 79028, 669, 1881, 1478, 79162, 4, 39570),
(4, 114594, 376, 1529, 1556, 85051, 9, 25443),
(5, 60046, 393, 1898, 838, 54478, 7, 37459),
(6, 117577, 979, 1853, 1490, 72723, 8, 26215),
(7, 91284, 298, 1571, 987, 171499, 8, 19926),
(8, 75860, 424, 1852, 1973, 97296, 9, 35571),
(9, 62695, 222, 1572, 617, 193415, 4, 33314),
(10, 102476, 181, 1658, 1721, 160101, 6, 36603),
(11, 97088, 179, 1987, 1556, 140933, 6, 25332),
(12, 46686, 442, 1537, 838, 91125, 7, 20955),
(13, 114873, 181, 1718, 1490, 147359, 2, 38952),
(14, 95407, 179, 1624, 987, 59363, 9, 34786),
(15, 82332, 979, 1666, 1973, 101979, 3, 38119),
(16, 108040, 298, 1526, 617, 54938, 3, 33755),
(17, 102005, 424, 1501, 618, 176873, 5, 21551),
(18, 116040, 222, 1605, 1556, 99575, 2, 39387),
(19, 116337, 181, 1960, 838, 162321, 3, 33660),
(20, 89286, 179, 1788, 1490, 146092, 9, 29020),
(21, 59475, 442, 1517, 987, 150890, 2, 21604),
(22, 40994, 181, 1897, 1973, 142490, 3, 22546),
(23, 73832, 179, 1725, 617, 128818, 4, 40521),
(24, 110601, 442, 1719, 1982, 173465, 4, 41884),
(25, 43259, 181, 1585, 1973, 135425, 8, 15101),
(26, 68976, 179, 1956, 1733, 108507, 8, 41754),
(27, 40305, 669, 1589, 1205, 100837, 3, 16044),
(28, 105525, 222, 1872, 1533, 110559, 10, 30745),
(29, 88144, 281, 1868, 587, 66327, 9, 24568);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `store_data_newcastle`
--

CREATE TABLE `store_data_newcastle` (
  `DATE` int(2) DEFAULT NULL,
  `COST_OF_GOODS` int(5) DEFAULT NULL,
  `FREIGHT_COSTS` int(3) DEFAULT NULL,
  `WAGES` int(4) DEFAULT NULL,
  `OVERHEAD` int(4) DEFAULT NULL,
  `SALES` int(5) DEFAULT NULL,
  `RETURN` int(1) DEFAULT NULL,
  `PROFIT` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `store_data_newcastle`
--

INSERT INTO `store_data_newcastle` (`DATE`, `COST_OF_GOODS`, `FREIGHT_COSTS`, `WAGES`, `OVERHEAD`, `SALES`, `RETURN`, `PROFIT`) VALUES
(1, 35293, 661, 1893, 960, 50249, 0, 9561),
(2, 25236, 179, 1730, 618, 31464, 0, 11326),
(3, 34043, 669, 1881, 1478, 66886, 1, 14306),
(4, 31238, 376, 1529, 935, 54307, 0, 9239),
(5, 43074, 393, 1898, 1136, 62047, 3, 7780),
(6, 34766, 979, 1853, 679, 23693, 0, 13883),
(7, 41480, 298, 1571, 1278, 40531, 0, 7036),
(8, 36051, 424, 1852, 1208, 52508, 1, 10913),
(9, 47144, 222, 1572, 1354, 43820, 3, 7215),
(10, 31124, 181, 1658, 1721, 50665, 2, 9817),
(11, 28883, 179, 1987, 1556, 69659, 0, 10019),
(12, 20392, 442, 1537, 838, 34070, 3, 14064),
(13, 24422, 181, 1718, 1490, 51677, 2, 13634),
(14, 31754, 179, 1624, 987, 41495, 0, 11371),
(15, 34358, 669, 1666, 1973, 51955, 1, 13927),
(16, 47882, 376, 1526, 617, 71799, 2, 9750),
(17, 40538, 393, 1501, 618, 25117, 2, 11492),
(18, 48248, 972, 1605, 1478, 46351, 2, 8336),
(19, 54414, 661, 1960, 935, 25719, 3, 11372),
(20, 26205, 889, 1788, 1136, 70366, 0, 9066),
(21, 43502, 820, 1517, 679, 49308, 3, 9881),
(22, 40900, 426, 1897, 1278, 48116, 0, 14783),
(23, 31232, 242, 1725, 1788, 52791, 3, 13532),
(24, 42140, 389, 1719, 1982, 44132, 2, 9340),
(25, 45100, 979, 1585, 1973, 24703, 1, 13618),
(26, 45403, 298, 1956, 1733, 40929, 3, 10237),
(27, 30963, 424, 1589, 1205, 61414, 1, 13089),
(28, 52964, 222, 1872, 1533, 34874, 2, 10759),
(29, 28003, 281, 1868, 587, 73677, 3, 9056);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `store_data_shellharbour`
--

CREATE TABLE `store_data_shellharbour` (
  `DATE` int(2) DEFAULT NULL,
  `COST_OF_GOODS` int(5) DEFAULT NULL,
  `FREIGHT_COSTS` int(3) DEFAULT NULL,
  `WAGES` int(4) DEFAULT NULL,
  `OVERHEAD` int(4) DEFAULT NULL,
  `SALES` int(5) DEFAULT NULL,
  `RETURN` int(1) DEFAULT NULL,
  `PROFIT` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `store_data_shellharbour`
--

INSERT INTO `store_data_shellharbour` (`DATE`, `COST_OF_GOODS`, `FREIGHT_COSTS`, `WAGES`, `OVERHEAD`, `SALES`, `RETURN`, `PROFIT`) VALUES
(1, 30961, 661, 1893, 960, 38743, 1, 12986),
(2, 39787, 820, 1730, 618, 68480, 2, 11252),
(3, 22925, 426, 1881, 1478, 46775, 1, 11339),
(4, 33491, 242, 1529, 935, 37417, 1, 11109),
(5, 32653, 389, 1898, 1136, 47473, 0, 9254),
(6, 36599, 979, 1853, 679, 56955, 2, 5758),
(7, 30557, 298, 1571, 1278, 28146, 0, 7344),
(8, 22184, 424, 1852, 1208, 62236, 2, 5851),
(9, 25999, 222, 1572, 1354, 56511, 1, 6099),
(10, 36858, 181, 1658, 1721, 47217, 0, 6739),
(11, 25725, 179, 1987, 1556, 44718, 2, 10848),
(12, 24429, 442, 1537, 838, 26554, 2, 7930),
(13, 35881, 181, 1718, 1490, 49098, 1, 6418),
(14, 42813, 179, 1624, 987, 38732, 2, 7718),
(15, 26022, 669, 1666, 1973, 69402, 2, 9076),
(16, 39185, 376, 1526, 617, 59230, 1, 7302),
(17, 42159, 393, 1501, 786, 37708, 1, 10063),
(18, 30045, 972, 1605, 1383, 22593, 0, 12645),
(19, 22738, 661, 1960, 1897, 64291, 2, 7620),
(20, 24231, 889, 1788, 1528, 68447, 0, 12518),
(21, 22578, 979, 1517, 1367, 39742, 2, 10739),
(22, 30900, 298, 1897, 1178, 30694, 1, 11085),
(23, 27699, 424, 1725, 1788, 54799, 0, 7662),
(24, 41144, 442, 1719, 1982, 21606, 2, 5950),
(25, 24027, 181, 1585, 1973, 24594, 2, 10358),
(26, 27680, 179, 1956, 1733, 51636, 1, 12032),
(27, 35509, 669, 1589, 1205, 55852, 2, 5232),
(28, 44389, 776, 1872, 1533, 65831, 2, 6244),
(29, 21537, 281, 1868, 587, 59835, 1, 9497);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
-- Table structure for table `store_data_sydney`
--

CREATE TABLE `store_data_sydney` (
  `DATE` int(2) DEFAULT NULL,
  `COST_OF_GOODS` int(6) DEFAULT NULL,
  `FREIGHT_COSTS` int(3) DEFAULT NULL,
  `WAGES` int(4) DEFAULT NULL,
  `OVERHEAD` int(4) DEFAULT NULL,
  `SALES` int(5) DEFAULT NULL,
  `RETURN` int(1) DEFAULT NULL,
  `PROFIT` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `store_data_sydney`
--

INSERT INTO `store_data_sydney` (`DATE`, `COST_OF_GOODS`, `FREIGHT_COSTS`, `WAGES`, `OVERHEAD`, `SALES`, `RETURN`, `PROFIT`) VALUES
(1, 140263, 346, 2381, 1385, 26619, 0, 21804),
(2, 22423, 497, 1934, 2270, 28833, 1, 18049),
(3, 110839, 211, 1728, 2132, 28877, 3, 144258),
(4, 129348, 299, 2036, 2027, 27890, 3, 18156),
(5, 68551, 465, 2409, 2395, 29251, 0, 25078),
(6, 40056, 439, 1697, 943, 22748, 1, 13890),
(7, 31817, 223, 2025, 1972, 28472, 1, 26430),
(8, 124204, 467, 1720, 907, 21114, 2, 12344),
(9, 47975, 207, 2272, 1081, 15955, 0, 24456),
(10, 93010, 210, 2045, 1881, 24658, 1, 16234),
(11, 118511, 298, 2184, 1283, 29219, 2, 26823),
(12, 98922, 448, 2389, 2182, 17938, 1, 24883),
(13, 50449, 258, 2121, 1828, 25263, 3, 25756),
(14, 46845, 389, 2210, 1134, 27599, 2, 13015),
(15, 130731, 255, 1609, 2234, 16141, 3, 24562),
(16, 79851, 293, 1719, 1513, 22549, 2, 18284),
(17, 43513, 455, 1738, 2119, 29966, 2, 29704),
(18, 115157, 470, 2093, 1391, 16304, 3, 19535),
(19, 112304, 464, 2419, 1179, 27245, 3, 21458),
(20, 52195, 278, 2340, 1169, 17896, 0, 12500),
(21, 35059, 356, 1661, 1937, 29542, 1, 16061),
(22, 100735, 237, 1919, 1835, 19821, 0, 14047),
(23, 52207, 204, 2473, 1353, 17682, 3, 13481),
(24, 73853, 300, 2260, 1533, 17770, 1, 19219),
(25, 140167, 387, 1995, 1543, 25261, 1, 15305),
(26, 47098, 309, 1518, 2348, 22691, 1, 27398),
(27, 149277, 370, 1817, 1603, 15349, 3, 20768),
(28, 132824, 479, 2005, 1409, 20640, 0, 16805),
(29, 69009, 418, 1859, 770, 16972, 3, 11866);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 03:24 AM
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
-- Table structure for table `store_data_wollongong`
--

CREATE TABLE `store_data_wollongong` (
  `DATE` int(2) DEFAULT NULL,
  `COST_OF_GOODS` int(5) DEFAULT NULL,
  `FREIGHT_COSTS` int(3) DEFAULT NULL,
  `WAGES` int(4) DEFAULT NULL,
  `OVERHEAD` int(4) DEFAULT NULL,
  `SALES` int(5) DEFAULT NULL,
  `RETURN` int(1) DEFAULT NULL,
  `PROFIT` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `store_data_wollongong`
--

INSERT INTO `store_data_wollongong` (`DATE`, `COST_OF_GOODS`, `FREIGHT_COSTS`, `WAGES`, `OVERHEAD`, `SALES`, `RETURN`, `PROFIT`) VALUES
(1, 42843, 661, 1893, 960, 64804, 1, 10790),
(2, 65125, 820, 1730, 618, 88058, 2, 3259),
(3, 34669, 426, 1881, 1478, 32244, 1, 3857),
(4, 31585, 242, 1529, 935, 33703, 1, 7948),
(5, 69176, 889, 1898, 1136, 93089, 0, 13417),
(6, 28405, 979, 1853, 679, 84487, 2, 11686),
(7, 53615, 298, 1571, 1278, 78403, 0, 3554),
(8, 36402, 424, 1852, 1208, 81620, 2, 5972),
(9, 42360, 442, 1572, 1354, 43821, 1, 16266),
(10, 33620, 181, 1658, 1721, 55302, 0, 3743),
(11, 30105, 179, 1987, 1556, 18414, 2, 10995),
(12, 69280, 442, 1537, 838, 67373, 2, 7404),
(13, 60065, 181, 1718, 1490, 29083, 1, 18728),
(14, 45233, 179, 1624, 987, 72940, 2, 11113),
(15, 25208, 669, 1666, 1973, 98290, 2, 18663),
(16, 59243, 776, 1526, 617, 24223, 1, 5184),
(17, 22477, 393, 1501, 786, 84512, 1, 3214),
(18, 54906, 972, 1605, 1383, 74218, 0, 6743),
(19, 39029, 661, 1960, 1897, 84935, 2, 13715),
(20, 24991, 889, 1788, 1528, 54847, 2, 14046),
(21, 50012, 979, 1517, 1367, 84564, 0, 14682),
(22, 31240, 298, 1897, 1178, 91939, 1, 18305),
(23, 38528, 424, 1725, 1788, 74107, 1, 12480),
(24, 61885, 442, 1719, 1982, 36888, 2, 12788),
(25, 60248, 181, 1585, 1973, 75219, 1, 18710),
(26, 23263, 179, 1956, 1733, 39160, 0, 17847),
(27, 38787, 669, 1589, 1205, 18385, 2, 13626),
(28, 38285, 776, 1872, 1533, 71119, 1, 10647),
(29, 57782, 281, 1868, 587, 74386, 1, 13643);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
