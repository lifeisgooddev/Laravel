-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 07:02 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `machine_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `excavator`
--

CREATE TABLE `excavator` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(40) NOT NULL,
  `productgroup` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `year` varchar(40) NOT NULL,
  `hours` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `mascusid` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` varchar(40) NOT NULL,
  `updated_at` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `excavator`
--

INSERT INTO `excavator` (`id`, `title`, `description`, `price`, `productgroup`, `model`, `year`, `hours`, `country`, `mascusid`, `image`, `inventory_id`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CATERPILLAR 320D EXCAVATOR - SOUTH AFRIC', 'On Mascus South Africa you can discover Caterpillar 320D EXCAVATOR mini excavators < 7t. The cost of this Caterpillar 320D EXCAVATOR is - and it was manufactured in 2007. This machine can be found in - South Africa. On Mascus.co.za you can find Caterpillar 320D EXCAVATOR and many other models of mini excavators < 7t. Details - Usage hours: 9 640 h', 'POA', 'Mini excavators < 7t', 'Caterpillar 320D EXCAVATOR', '2007', '9 640 h', 'South Africa', '2BA83E0D', 'caterpillar-320d-excavator-1.jpg', 1, 1, 1, '', ''),
(2, 'CATERPILLAR 374FL - SOUTH AFRICA', 'Internal stock No.374F051Manufacturing numberMFL00239General condition grade (1-5)\r\n1\r\n2\r\n3\r\n4\r\n5\r\nAccessories\r\n- AIR CONDITIONER\r\n- ANTI-THEFT SYSTEM\r\n- PRODUCT LINK\r\n- CE PLATE\r\n- LIGHTING\r\n- FIRE EXTINGUISHER\r\n- BEACON\r\n- EPA LABEL\r\n- ENGINE ENCLOSURES\r\n- BOOM, 1 PIECE\r\n- MASS EXCAVATOR ARRANGEMENT\r\n- STICK, SHORT\r\n- UNDERCARRIAGE, LONG\r\n- BOOM CHECK VALVE\r\n- STICK CHECK VALVE\r\n- COUNTERWEIGHT REMOVAL SYSTEM\r\n- PILOT CONTROL\r\n- HAND AND FOOT CONTROL\r\nOn Mascus South Africa you can discover Caterpillar 374FL crawler excavators. The cost of this Caterpillar 374FL is - and it was manufactured in 2015. This machine can be found in Isando South Africa. On Mascus.co.za you can find Caterpillar 374FL and many other models of crawler excavators. Details - Internal stock No.: 374F051, Usage hours: 7 573 h, Manufacturing number: MFL00239, General condition grade (1-5): 3', 'POA', 'Crawler excavators', 'Caterpillar 374FL', '2015', '7 573 h', 'South Africa', '9AB3EBBE', 'caterpillar-374fl_1.jpg', 1, 1, 1, '123', '123'),
(3, 'CATERPILLAR 320C - SOUTH AFRICA', 'On Mascus South Africa you can discover Caterpillar 320C mini excavators < 7t. The cost of this Caterpillar 320C is - and it was manufactured in 2005. This machine can be found in - South Africa. On Mascus.co.za you can find Caterpillar 320C and many other models of mini excavators < 7t.', 'POA', 'Mini excavators < 7t', 'Caterpillar 320C', '2005', '', 'South Africa', 'B5E1C5D9', 'caterpillar-320c-1.jpg', 1, 1, 1, '', ''),
(4, 'VOLVO EC55B 5 TON EXCAVATOR - SOUTH AFRI', 'On Mascus South Africa you can discover Volvo EC55B 5 Ton Excavator mini excavators < 7t. The cost of this Volvo EC55B 5 Ton Excavator is - and it was manufactured in 2013. This machine can be found in - South Africa. On Mascus.co.za you can find Volvo EC55B 5 Ton Excavator and many other models of mini excavators < 7t. Details - Usage hours: 11 630 h', 'POA', 'Mini excavators < 7t', 'Volvo EC55B 5 Ton Excavator', '2013', '11 630 h', 'South Africa', 'D20D0D9A', 'volvo-ec55b-5-ton-excavator-1.jpg', 1, 1, 1, '', ''),
(5, 'JCB JS200 20 TON EXCAVATOR - SOUTH AFRIC', 'Other information / specs2011 JCB JS200 20 Ton Excavator 900 HRS', 'POA', 'Mini excavators < 7t', 'JCB JS200 20 Ton Excavator', '2011', '900 h', 'South Africa', '8D843937', 'jcb-js200-20-ton-excavator-1.jpg', 2, 1, 1, '', ''),
(6, 'DOOSAN 2003 DOOSAN 290LC-V 28T EXCAVATOR', 'Other information / specs2003 Doosan 290LC-V 28T Excavator', '495 000 ZAR', 'Mini excavators < 7t', 'Doosan 2003 Doosan 290LC-V 28T Excavator', '2003', '1 419 h', 'South Africa', 'DD078F90', 'doosan-2003-doosan-290lc-v-2-1.jpg', 2, 1, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `excavator_image`
--

CREATE TABLE `excavator_image` (
  `id` int(11) NOT NULL,
  `url` varchar(40) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `excavator_image`
--

INSERT INTO `excavator_image` (`id`, `url`, `product_id`) VALUES
(1, 'caterpillar-320d-excavator-1.jpg', 1),
(2, 'caterpillar-320d-excavator-2.jpg', 1),
(3, 'caterpillar-320d-excavator-3.jpg', 1),
(4, 'caterpillar-320d-excavator-4.jpg', 1),
(5, 'caterpillar-320d-excavator-5.jpg', 1),
(6, 'caterpillar-320d-excavator-6.jpg', 1),
(7, 'caterpillar-320d-excavator-7.jpg', 1),
(8, 'caterpillar-320d-excavator-8.jpg', 1),
(9, 'caterpillar-374fl_1.jpg', 2),
(10, 'caterpillar-374fl_2.jpg', 2),
(11, 'caterpillar-374fl_3.jpg', 2),
(12, 'caterpillar-374fl_4.jpg', 2),
(13, 'caterpillar-374fl_5.jpg', 2),
(14, 'caterpillar-374fl_6.jpg', 2),
(15, 'caterpillar-374fl_7.jpg', 2),
(16, 'caterpillar-374fl_8.jpg', 2),
(17, 'caterpillar-320c-1.jpg', 3),
(18, 'caterpillar-320c-2.jpg', 3),
(19, 'caterpillar-320c-3.jpg', 3),
(20, 'caterpillar-320c-4.jpg', 3),
(21, 'caterpillar-320c-5.jpg', 3),
(22, 'volvo-ec55b-5-ton-excavator-1.jpg', 4),
(23, 'volvo-ec55b-5-ton-excavator-2.jpg', 4),
(24, 'volvo-ec55b-5-ton-excavator-3.jpg', 4),
(25, 'volvo-ec55b-5-ton-excavator-4.jpg', 4),
(26, 'volvo-ec55b-5-ton-excavator-5.jpg', 4),
(27, 'volvo-ec55b-5-ton-excavator-6.jpg', 4),
(28, 'jcb-js200-20-ton-excavator-1.jpg', 5),
(29, 'jcb-js200-20-ton-excavator-2.jpg', 5),
(30, 'jcb-js200-20-ton-excavator-3.jpg', 5),
(31, 'jcb-js200-20-ton-excavator-4.jpg', 5),
(32, 'jcb-js200-20-ton-excavator-5.jpg', 5),
(33, 'jcb-js200-20-ton-excavator-6.jpg', 5),
(34, 'jcb-js200-20-ton-excavator-7.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `generators`
--

CREATE TABLE `generators` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `poweroutput` varchar(100) NOT NULL,
  `ratedvoltage` varchar(100) NOT NULL,
  `currentoutput` varchar(100) NOT NULL,
  `dcoutput` varchar(100) NOT NULL,
  `runningtime` varchar(100) NOT NULL,
  `fuelconsumption` varchar(100) NOT NULL,
  `tankcapacity` varchar(100) NOT NULL,
  `oilcapacity` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `dimensions` varchar(100) NOT NULL,
  `price` varchar(200) NOT NULL,
  `SKU` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `status` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generators`
--

INSERT INTO `generators` (`id`, `title`, `description`, `poweroutput`, `ratedvoltage`, `currentoutput`, `dcoutput`, `runningtime`, `fuelconsumption`, `tankcapacity`, `oilcapacity`, `weight`, `dimensions`, `price`, `SKU`, `image`, `created_at`, `updated_at`, `status`, `category_id`) VALUES
(1, 'MAC-AFRIC 34 kVA (27.5 KW) Prime Power 380V Silent Type Stand By Generator', 'Ideal for the camping outdoor enthusiast and small electric appliances. A petrol powered electricity generator. Smaller size makes it ideal for emergency use, can power a few lights or a LCD Television. All MAC-AFRIC? power generators carries a badge of surplus quality assurance. A machine that can be relied on, MAC-AFRIC? holds no equal. Sourced from the best generator supplier worldwide.  *PLEASE NOTE: Due to higher than normal demand some generators might be out of stock or have low stock levels. The stock checker below uses in-store stock values but cannot take in-store orders into consideration. Before ordering a generator with our click & collect service, please contact the store directly to make sure about stock to prevent any problems.', '1.25 kVA (1 KW)', '220V (SINGLE PHASE) @ 50 hz', '4.5 A', '12 V 8.3 A', '2 – 4 hours', '0.43 l /ph @ FULL LOAD', '12 l', '0.6 l', '31 kg', '570 X 450 x 470 mm', 'R 142,500.00', 'MGENER-046', 'MGENER-201-510x510.jpg', '0000-00-00', '0000-00-00', 1, 1),
(2, 'MAC-AFRIC 0.8 kVA (650 W) Standby 2-Stroke Petrol Generator', '*PLEASE NOTE: THIS UNIT DOES NOT INCLUDE A AVR  A petrol powered portable electricity generator. A suitcase sized little generator, ideal for camping or emergency lighting applications. All MAC-AFRIC? power generators carries a badge of surplus quality assurance. A machine that can be relied on, MAC-AFRIC? holds no equal. Sourced from the best generator supplier worldwide.  *PLEASE NOTE: Due to higher than normal demand some generators might be out of stock or have low stock levels. The stock checker below uses in-store stock values but cannot take in-store orders into consideration. Before ordering a generator with our click & collect service, please contact the store directly to make sure about stock to prevent any problems.', ' 650 w (0.8 kVA)', '220 V (single Phase) @ 50 hz', '3 A', 'N/A', '4 hours', '0.32 l / ph @ FULL LOAD', 'N/A', 'N/A', 'N/A', 'N/A', 'R 1,795.00', 'MGENER-090', 'MGENER-090-510x510.jpg', '0000-00-00', '0000-00-00', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `generator_image`
--

CREATE TABLE `generator_image` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `implement`
--

CREATE TABLE `implement` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `stocknumber` varchar(40) NOT NULL,
  `year` varchar(40) NOT NULL,
  `make` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `image` varchar(100) NOT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` varchar(40) NOT NULL,
  `updated_at` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `implement`
--

INSERT INTO `implement` (`id`, `title`, `description`, `price`, `location`, `stocknumber`, `year`, `make`, `model`, `image`, `inventory_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '2019 Armstrong Ag UBP 6', 'Armstrong Ag UBP 6\r\nFeatures:\r\n6 Foot Bucket\r\n5/8\" x 6\" Hardened Cutting Edge\r\n3/16\" Plate\r\nSkid Steer Quick Attach', '$785.00', 'Granbury, Texas', 'UBP6', '2019', 'Armstrong Ag', 'UBP 6', '2019 Armstrong Ag UBP 6-1.jpg', 1, 6, '', ''),
(2, '2019 Atlas 300 Series Adjustable Ball Be', 'The 300 series adjustable disc offers a more sophisticated look. The welded center frame and tubing stye gang arms with a center bolt screw adjustment gives you a disc to fit any type of farming. Available in 5 1/2\' and 6 1/2\' with ball bearings and 18\" notched disc blades. \r\n\r\n• 16x18 Atlas B.B. Disc 5 1/2\' (Model #1618ABB): $1,049\r\n• 16x18 Atlas B.B. Disc 6 1/2\' (Model #2018ABB): $1,149\r\n', 'POA', 'Granbury, Texas', 'N/A', '2019', 'Atlas', '300 Series Adjustable Ball Bearing Disc', '2019 Atlas 300 Series Adjustable Ball Bearing Disc-1.jpg', 2, 6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `implement_image`
--

CREATE TABLE `implement_image` (
  `id` int(11) NOT NULL,
  `url` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `implement_image`
--

INSERT INTO `implement_image` (`id`, `url`, `product_id`) VALUES
(1, '2019 Armstrong Ag UBP 6-1.jpg', 1),
(2, '2019 Armstrong Ag UBP 6-2.jpg', 1),
(3, '2019 Armstrong Ag UBP 6-3.jpg', 1),
(4, '2019 Armstrong Ag UBP 6-4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `status`) VALUES
(1, 'New', 1),
(2, 'Pre-Owned', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mower`
--

CREATE TABLE `mower` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `stocknumber` varchar(40) NOT NULL,
  `year` varchar(40) NOT NULL,
  `make` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `transmission` varchar(40) NOT NULL,
  `fueltype` varchar(40) NOT NULL,
  `width` varchar(40) NOT NULL,
  `height` varchar(40) NOT NULL,
  `displacement` varchar(40) NOT NULL,
  `weight` varchar(40) NOT NULL,
  `availability` varchar(40) NOT NULL,
  `image` varchar(100) NOT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` varchar(40) NOT NULL,
  `updated_at` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mower`
--

INSERT INTO `mower` (`id`, `title`, `description`, `price`, `location`, `stocknumber`, `year`, `make`, `model`, `transmission`, `fueltype`, `width`, `height`, `displacement`, `weight`, `availability`, `image`, `inventory_id`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New Bad Boy Compact Outlaw Kawasaki® 420', '2019 Bad Boy Compact Outlaw Kawasaki® 4200\r\nTHE NEW TOP DOG IS A BREED APART FROM THE ORDINARY\r\nThis popular zero-turn shares the same tough features as other Bad Boy Mowers, with a narrower side-to-side profile that lets it slip into areas that might otherwise be too tight to get to. This gate-entering mower can get in and out of most anywhere, leaving behind a great cut like only a Bad Boy Mower can.\r\n\r\nFrom front to back, it shares the same features such as our 2\" x 2\" all-steel rail frame, powerful engine options and great price with a side-to-side profile that lets it slip into areas that might otherwise be too tight to get to. There’s virtually no area this versatile mower can’t get in and out of quickly and efficiently.\r\n\r\nFeatures may include:\r\n\r\nSTRENGTH\r\nClassic Bad Boy 2\" x 2\" Heavy-Gauge All-Steel Rail backbone.\r\n1/2\" Front Forks stand up to the toughest environments.\r\nLower profile frame with curved front rail improves stability on inclines and uneven turf.\r\nPatented Dual Deck Support Isolators minimizes damage to your deck from side impacts.\r\nCOMFORT\r\nSmoother steering and tighter, more precise controls with our steering dampening system. Features our fully adjustable handles for exactly the right operator fit.\r\nPremium Comfort Seat is adjustable and cushioned with side and upper back support and also has cushioned arm rests.\r\nPERFORMANCE\r\nSlip in and out of tight places with the 42\" or 48\" deck.\r\nFoot-assist deck lift pedal for reliable manual deck operation. Lock in your preferred deck height of up to 4 1/2\" by simply pushing the pedal and twisting the easy to reach knob. Deck locks tight for a perfect height cut every time.\r\nSolid Steel deck features 7-gauge formed and welded steel with an additional 3/8\" reinforced edge. The improved baffling system gives greater lift to the grass, producing a cleaner cut and more even discharge.', '$6,499.00', 'Granbury, Texas', 'BBO42FX691', 'New', 'Bad Boy', 'Compact Outlaw Kawasaki® 4200', 'Industrial Grade Dual Integrated Hydrost', 'Requirement: Unleaded Gasoline (87 Octan', 'Tire to tire: 42\"', 'Cutting: 1.5\" – 4.5\" with Deck Height Co', '726 cc', '990 lbs', 'Available', 'New Bad Boy Compact Outlaw Kawasaki-1.jpg', 1, 5, 1, '', ''),
(2, 'New Bad Boy MZ Magnum Kohler® 5400', 'Bad Boy MZ Magnum Kohler® Pro 5400\r\nMost mowers at this price are made from flimsy stamped steel bolted together. So if you’re looking for the efficiencies of a zero-turn mower without compromising on disposable quality build construction and a lower quality of cut—turn to the MZ Magnum. You’ll immediately appreciate the rock-solid, all-steel welded construction, powerful engine and ‘too much fun to call it work’ ride, cut and performance.\r\n\r\nQuick Specs for MZ Magnum Kohler® Pro 7000 5400:\r\n725cc Kohler Pro Engine\r\nGasoline Powered\r\nZero-turn Radius\r\n54\" Fabricated Cutting Deck (3/16\" thick solid steel)\r\n2-Year Warranty on drive, spindle and clutch systems.\r\n\r\nBig Red\'s Equipment has proudly sold and serviced Bad Boy Mowers since 2006. We stock the entire lineup of Bad Boy Mowers at the best prices. Stop by today and take one for a test drive!\r\n\r\nThis unit is also available with a Kawasaki FR engine.Click here to see the Bad Boy MZ Magnum 54\" KW\r\nThis unit is also available with a smaller 48\" cutting deck.Click here to see the Bad Boy MZ Magnum 48\" KH\r\nThis unit is also available with a smaller 48\" cutting deck and Kawasaki FR engine.Click here to see the Bad Boy MZ Magnum 48\" KW', '$3,499.00', 'Granbury, Texas', 'BMZ54KT740', 'New', 'Bad Boy', 'MZ Magnum Kohler® 5400', 'Dual Integrated Hydrostatic Transaxle', 'Gas', 'Tire to tire: 46\"', 'Cutting: 1.5\" – 4.5\" with Deck Height Co', '725 cc', '686 lbs', 'Available', 'New Bad Boy MZ Magnum Kohler-1.jpg', 2, 5, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mower_image`
--

CREATE TABLE `mower_image` (
  `id` int(11) NOT NULL,
  `url` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tractor`
--

CREATE TABLE `tractor` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `stocknumber` varchar(40) NOT NULL,
  `year` varchar(40) NOT NULL,
  `make` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `vim` varchar(40) NOT NULL,
  `color` varchar(40) NOT NULL,
  `engine` varchar(40) NOT NULL,
  `horsepower` varchar(40) NOT NULL,
  `enginehours` varchar(40) NOT NULL,
  `fueltype` varchar(40) NOT NULL,
  `displacement` varchar(40) NOT NULL,
  `liftcapacity` varchar(40) NOT NULL,
  `transmissiontype` varchar(40) NOT NULL,
  `hvactype` varchar(40) NOT NULL,
  `availability` varchar(40) NOT NULL,
  `drive` varchar(40) NOT NULL,
  `image` varchar(60) NOT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` varchar(40) NOT NULL,
  `updated_at` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tractor`
--

INSERT INTO `tractor` (`id`, `title`, `description`, `price`, `location`, `stocknumber`, `year`, `make`, `model`, `vim`, `color`, `engine`, `horsepower`, `enginehours`, `fueltype`, `displacement`, `liftcapacity`, `transmissiontype`, `hvactype`, `availability`, `drive`, `image`, `inventory_id`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '00 Series 2400 PKB24BB Basic Tractor Pac', 'You won\'t find a better deal anywhere else! We are the largest dealer of Branson Tractors in the U.S. for a reason, with more than 200 new You won\'t find a better deal anywhere else! We are the largest dealer of Branson Tractors in the U.S. for a reason, with more than 200 new tractors in-stock TODAY!\r\n\r\nThe price shown includes\r\n• Branson 2400 Tractor with Loader\r\n• 4\' Brush Hog\r\n• 4\' Box Blade\r\n\r\nTractors come in many shapes and sizes, but not all tractors are created equal. With roots in industrial technology, Branson tractors are built from the highest quality components to give you a complete machine.\r\n\r\nAssembled in Rome, GA, these tractors are built to maximize your efficiency and give you the best working capacity. The fact is, when you buy a Branson tractor, you’re getting a true machine with industrial-like quality. With a solid steel frame and powerful engine, you will be able to do more with this tractor than any of our competitors. This tractor will out-pull, out-lift and out-last any other comparable tractor on the market.\r\n\r\nGive us a call or visit us online to see our full lineup of Branson Tractors!\r\n\r\n\r\n*NOTE: Price listed is for cash purchases or standard rate financing. Estimated payment is based on our standard rate financing for qualified buyers.\r\n\r\n\r\n#TL-13KBHB-0051', '$14,195.00', 'Granbury, Texas', 'PKB24BB', 'New', 'Branson Tractors', 'Basic Tractor Pac', 'NULL', 'NULL', 'Kukje', '24', 'NULL', 'Diesel', 'NULL', '1500 lbs', 'Gear Shift', 'NULL', '', '4WD', '2400h Garden Package Deal-1.jpg', 1, 2, 1, '', ''),
(2, 'New Branson Tractors 05 Series 1905H', 'Branson 1905HST - The Ultimate Choice for Ground Care\r\n\r\nWhether you are a hobby farmer or a weekend warrior, Branson builds the perfect tractor. With front-end loader and mid-mount mower options, you can make this sub-compact tractor more versatile for your projects. The Branson 1905HST has an easy to open hood and folding ROPS for easy maintenance and storage\r\n\r\nQuick Specs for the Branson 1905HST:\r\n19hp Yanmar Diesel Engine\r\nHST Transmission (2-range)\r\n4x4 with Turf Tires (R4 Industrial Tires optional)\r\nBranson BL90 Front-end Loader\r\nStandard 3-pt Hitch with Cat-I capabilities\r\nOne-touch PTO switch\r\nMid and Rear PTO\r\nHydrostatic Steering\r\nOpen Operator\'s Station\r\nMid-mount Mower available\r\n\r\nTake one for a test drive today at Big Red\'s Equipment!\r\n\r\nThis unit is also available with a 24hp engine.Click here to see the Branson 2400h. \r\nThis unit is also available with a 30hp engine.Click here to see the Branson 3015h.\r\nThis unit is also available with a heavy-duty 47hp engine and premium enclosed cab.Click here to see the Branson 4520C.', '$10,495.00', 'Granbury, Texas', '1905h', 'New', 'Branson Tractors', '05 Series 1905H', 'NULL', 'NULL', 'Yanmar 3TNV74F-SDKTF2', '19', 'NULL', 'Diesel', '993 cc', '1100 lbs', 'HST', 'N/A', 'Available', '4WD', 'New Branson Tractors 05 Series 1905H-1.jpg', 1, 2, 1, '', ''),
(3, 'New Branson Tractors 15 Series 4815h', 'A>\r\nBranson 4815H Utility Tractor\r\nYou won\'t find a better deal anywhere else! We are the largest dealer of Branson Tractors in the U.S. for a reason, with more than 200 new tractors in-stock TODAY!\r\nBranson is known for its heavy duty and high quality machines. The 3015 Series is no different. Loaded with features, you\'re getting a tractor that stands out from the pack at an unmatched price.\r\nQuick Specs for the Branson 4815H:\r\n48hp Kukje Diesel Engine\r\nSkid steer bucket optional\r\n4WD with R4 Industrial Tires\r\nHydrostatic steering\r\nHST transmission\r\nIndependent PTO\r\nModels similar to this tractor are:\r\nClick here to see the Branson 4015h, featuring a 35hp engine and an HST transmission.\r\nClick here to see the Branson 4015r, featuring a 40hp engine and a Shuttle Shift transmission.\r\nClick here to see the Branson 4815r, featuring a 48hp engine and a Shuttle Shift transmission.\r\n\r\nGive us a call or visit us online to see our full lineup of Branson Tractors!', '$23,097.00', 'Granbury, Texas', 'Branson4815H', 'New', 'Branson Tractors', '15 Series 4815h', '3014 lbs', 'NULL', '48hp Kukje 1.7L 3-cyl diesel', '48', 'with ROPS: 104.06 in', 'Diesel', '2286 cc', 'NULL', 'HST', 'NULL', 'Available', '4WD', 'New Branson Tractors 15 Series 4815h-1.jpg', 2, 2, 1, '', ''),
(4, 'New Branson Tractors 25 Series 4225C', 'Branson Tractors 4225C\r\nYou won\'t find a better deal anywhere else! We are the largest dealer of Branson Tractors in the U.S. for a reason, with more than 200 new tractors in-stock TODAY!\r\n\r\nThe Premium 25 Series from Branson Tractors are an upgrade from the popular 20 Series tractors. Premium models come with a 4-Cylinder Diesel engine that runs smoother, quieter, and more efficient than any engine on the market. You will not find a better combination of power and efficiency in the industry.  \r\n\r\nThese tractors takes your workability to the next level with a heavy duty solid steel frame. The main frame for this series is thicker and heavier than even the beefy 20 Series, so you can push, pull and lift all day without worrying if your machine can handle it. \r\n\r\nAll Premium 25 Series Tractors are ergonomically designed for optimal comfort, control and ease of use. Other premium features include platform operator\'s station with heavy duty rubber floor mats, deluxe suspension seat, dual crank adjustable drop links for easy attachment of any implement, and a new fuel filter assembly that drains water from the fuel system.\r\n\r\nThe Branson 4225C Premium is equipped with:\r\n• 42hp Kukje Diesel Engine (4-Cylinder)\r\n• Synchronized Shuttle Shift Transmission (12F, 12R)\r\n• 4x4 with R4 Industrial Tires\r\n• Hydrostatic Steering\r\n• Heavy Duty Front-end Loader\r\n• Deluxe Cab with Heat and A/C\r\n• Independant PTO (540/790 RPM)\r\n• Standard 3pt Hitch (Cat. I)\r\n• Extendable Lower Links with Telescopic Stabilizers\r\n• Open Center Hydraulics\r\n\r\nBranson Tractors are made by the South Korean company, Kukje Machinery, who currently supplies diesel engines for Cummins. Branson tractors are known for their industry leading lift capacity, heavy duty frame, and ergonomic operator\'s station. These tractors will out-work most of their big-name competitors on the market today, making their quality and performance undeniable.\r\n\r\nWe carry a full lineup of Branson tractors. Stop by today or give us a call', 'POA', 'Granbury, Texas', 'Branson4225c', 'New', 'Branson Tractors', '25 Series 4225C', 'NULL', 'NULL', 'A2000N2-UTC_ 4', '42', 'NULL', 'Diesel', 'NULL', '3306 lbs', 'Shuttle Shift', 'NULL', 'Available', '4WD', 'New Branson Tractors 25 Series 4225C-1.jpg', 2, 2, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tractor_image`
--

CREATE TABLE `tractor_image` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tractor_image`
--

INSERT INTO `tractor_image` (`id`, `url`, `product_id`) VALUES
(1, 'New Branson Tractors 05 Series 1905H-1.jpg', 2),
(2, 'New Branson Tractors 05 Series 1905H-2.jpg', 2),
(3, 'New Branson Tractors 05 Series 1905H-3.jpg', 2),
(4, 'New Branson Tractors 05 Series 1905H-4.jpg', 2),
(5, 'New Branson Tractors 15 Series 4815h-1.jpg', 3),
(6, 'New Branson Tractors 15 Series 4815h-2.jpg', 3),
(7, 'New Branson Tractors 15 Series 4815h-3.jpg', 3),
(8, 'New Branson Tractors 15 Series 4815h-4.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE `trailer` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `year` varchar(40) NOT NULL,
  `make` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `length` varchar(40) NOT NULL,
  `chassis` varchar(40) NOT NULL,
  `width` varchar(40) NOT NULL,
  `height` varchar(40) NOT NULL,
  `availability` varchar(40) NOT NULL,
  `axle` varchar(40) NOT NULL,
  `image` varchar(100) NOT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` varchar(40) NOT NULL,
  `updated_at` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trailer`
--

INSERT INTO `trailer` (`id`, `title`, `description`, `price`, `location`, `year`, `make`, `model`, `length`, `chassis`, `width`, `height`, `availability`, `axle`, `image`, `inventory_id`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New Big Tex Trailers 10PI 14', 'Big Tex Trailers 10PI-14\r\nPro Series Tandem Axle Pipe Top Utility\r\nThe 10PI Tandem Axle Pipe Utility Trailer from Big Tex Trailers is perfect for hauling light to medium duty equipment and small tractors. Slide in ramps allow for easy loading and unloading of equipment.\r\n\r\nFeatures may include:\r\n(4) Tie Down Pockets on Outside Frame\r\nForged 2-5/16” Coupler\r\nFold Back/Wrap Tongue (14’ & Longer)\r\nEZ Lube Hubs\r\nSet-Back, 7,000# Drop Leg Jack\r\nDexter Brand Axles\r\nNev-R-Adjust Electric Brakes on All Hubs\r\nCambered Axles\r\nTear Drop Style Fenders\r\n2-3/8” Pipe Top Rail\r\nGrommet Mount Sealed Lighting\r\n4’ Slide-In Ramps (Channel)\r\nComplete Break-A-Way System w/Charger\r\nL.E.D. Lighting Package\r\nProtected Wiring\r\nSpare Tire Mount (Side)\r\nRadial Tires', '$3,449.00', 'Granbury, Texas', 'New', 'Big Tex Trailers', '10PI 14', '14\' 0\"', 'Tongue: 5\" Channel Fold Back/Wrap | Top ', '83\"', '2,200 lbs', 'Available', 'Tandem', 'New Big Tex Trailers 10PI 14-1.jpg', 1, 4, 1, '', ''),
(2, 'New Big Tex Trailers 45SS 16', 'Big Tex Trailers 45SS-16\r\nEconomy Tandem Axle Pipe Top Utility\r\nThe 45SS Tandem Axle Utility Trailer from Big Tex Trailers is an economy style with a pipe top rail that is perfect for lawn and garden use. It’s also great for hauling 4-wheelers, side-by-sides, and small tractors.\r\n\r\nFeatures may include:\r\n(4) Tie Down Loops Inside Bed\r\nEZ Lube Hubs\r\nDexter Brand Axles\r\nNev-R-Adjust Electric Brakes\r\nCambered Axles\r\n2-3/8” Pipe Top Rail\r\nGrommet Mount Sealed Lighting\r\nProtected Wiring\r\nRemovable Sand Foot on Jack\r\nComplete Break-A-Way System w/Charger\r\nRadical Tires', '$2,099.00', 'Granbury, Texas', 'New', 'Big Tex Trailers', '45SS 16', '16\' 0\"', 'Tongue: 4\" Channel | Top Rail: 2-3/8\" Pi', '77\"', '1,370 lbs', 'Available', 'Tandem', 'New Big Tex Trailers 45SS 16-1.jpg', 1, 4, 1, '', ''),
(3, '2018 Echo Power Equipment CHT-58V2AH', 'Echo Power Equipment CHT-58V2AH features:\r\n58 volt\r\n2 amp hour lithium-ion battery\r\nIncludes battery and charger\r\n24\" dual action blades\r\nUp to 3/4\" cut capactiy', '$269.99', 'Granbury, Texas', '2018', 'Echo Power Equipment', 'CHT-58V2AH', 'N/A', 'N/A', 'N/A', 'N/A', 'Available', 'N/A', '2018 Echo Power Equipment CHT-58V2AH-1.jpg', 2, 4, 1, '', ''),
(4, '2018 Hustler Turf Equipment Raptor® SD 3', 'Hustler Raptor® SD 3600 with 22hp Kohler Engine\r\nThe Raptor® SD is a low profile, heavy-duty premium residential zero-turn with a deep fabricated steel deck, large front tires and exceptional control and handling.\r\n\r\nQuick specs for the Raptor® SD 3600:\r\n725cc Kohler 7000 HD engine w/ SmartChoke™ Technology\r\nExclusive SmoothTrak™ steering\r\nAdjustable premium seat with armrests\r\n36\" fabricated cutting deck (11ga. solid steel)\r\nHour meter and engine guard standard\r\n3 year/300 Hour Residential Limited Warranty\r\n\r\nBig Red\'s Equipment has proudly sold and serviced Hustler Turf Mowers for a number of years. We stock the entire lineup of Hustler Turf Mowers at the best prices. Stop by today and take one for a test drive!\r\n\r\nThis unit is also available with a 42\" deck.Click here to see the Hustler Turf Equipment Raptor® SD 4200\r\nThis unit is also available in a premium SDX model with a 54\" deck. Click here to see the Hustler Turf Equipment Raptor® SDX 5400  \r\nThis unit is also available with a 60\" deck. Click here to see the Hustler Turf Equipment Raptor® SD 6000', '$3,799.00', 'Granbury, Texas', '2018', 'Hustler Turf Equipment', 'Raptor® SD 36\" Kohler 7000 HD', 'N/A', 'N/A', 'N/A', 'N/A', 'Available', '36', '2018 Hustler Turf Equipment Raptor-1.jpg', 2, 4, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `trailer_image`
--

CREATE TABLE `trailer_image` (
  `id` int(11) NOT NULL,
  `url` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trailer_image`
--

INSERT INTO `trailer_image` (`id`, `url`, `product_id`) VALUES
(1, '2018 Hustler Turf Equipment Raptor-1.jpg', 4),
(2, '2018 Hustler Turf Equipment Raptor-2.jpg', 4),
(3, '2018 Hustler Turf Equipment Raptor-3.jpg', 4),
(4, '2018 Hustler Turf Equipment Raptor-4.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `utility`
--

CREATE TABLE `utility` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `year` varchar(40) NOT NULL,
  `make` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `engine` varchar(40) NOT NULL,
  `transmission` varchar(40) NOT NULL,
  `fueltype` varchar(40) NOT NULL,
  `dryweight` varchar(40) NOT NULL,
  `payloadcapacity` varchar(40) NOT NULL,
  `displacement` varchar(40) NOT NULL,
  `weight` varchar(40) NOT NULL,
  `availability` varchar(40) NOT NULL,
  `drive` varchar(40) NOT NULL,
  `towingcapacity` varchar(40) NOT NULL,
  `image` varchar(100) NOT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` varchar(40) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(40) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utility`
--

INSERT INTO `utility` (`id`, `title`, `description`, `price`, `location`, `year`, `make`, `model`, `engine`, `transmission`, `fueltype`, `dryweight`, `payloadcapacity`, `displacement`, `weight`, `availability`, `drive`, `towingcapacity`, `image`, `inventory_id`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'American LandMaster LS550 with 479cc Van', 'Introducing the LS550 Side-by-Side, from American LandMaster. Formerly American SportWorks, American LandMaster has rebranded itself to reflect their commitment to maintaining good quality utility vehicles. With upgraded comforts and ergonomics, the Land Star series is a unique blend of rugged performance and ease of operation.\r\n\r\nQuick Specs for LS550:\r\n479cc 4-Stroke Vanguard Engine\r\n2-Seater\r\n4WD\r\n500lbs Capacity, 9.25cu. ft. Dump Bed\r\n1,200lbs Towing Capacity\r\nCVT Automatic Transmission\r\n3-Year Engine Warranty\r\n\r\n*NOTE: unit displayed may have additional accessories that are not included in the price of the equipment. Accessories pricing does not include tax or installation.\r\n\r\nStop by Big Red\'s Equipment today and give one a test drive!\r\n\r\nThis unit is also available in a larger 4-seater model.Click here to see the LSC4\r\nThis unit is also available with a 390cc engine and 2 wheel drive.Click here to see the LS450', '$7,499.00', 'Granbury, Texas', 'New', 'American LandMaster®', 'Landstar 550', 'Vanguard', 'CVT Automatic', 'Gas', '1000 lbs.', '500 lbs', '479 cc', 'Shipping: 1185 lbs', 'Sold', '4WD', '1200 lbs', 'American LandMaster LS550 with 479cc Vanguard engine-1.jpg', 1, 3, 1, 'current_timestamp()', 'current_timestamp()'),
(2, 'New American LandMaster® Landstar 670', 'Introducing the LS 670 Side-by-Side, from American LandMaster. Formerly American SportWorks, American LandMaster has rebranded itself to reflect their commitment to maintaining good quality utility vehicles. With upgraded comforts and ergonomics, the Land Star series is a unique blend of rugged performance and ease of operation.\r\n\r\nQuick Specs for LS 670:\r\n674cc 4-Stroke Kohler Engine\r\n2-Seater\r\n500lbs Capacity, 9.25cu. ft. Dump Bed\r\n1,200lbs Towing Capacity\r\nCVT Automatic Transmission\r\n2-Year Engine Warranty\r\n*NOTE: unit displayed may have additional accessories that are not included in the price of the equipment. Accessories pricing does not include tax or installation.\r\n\r\nStop by Big Red\'s Equipment today and give one a test drive!\r\n\r\nThis unit is also available in a 4-seater model.Click here to see the LSC4\r\nThis unit is also available with a 390cc engine and 2 wheel drive.Click here to see the LS450', '$6,799.00', 'Granbury, Texas', 'New', 'American LandMaster®', 'Landstar 670', 'Kohler', 'CVT Automatic', 'Gas', '1000 lbs.', '500 lbs', '674 cc', 'Shipping: 1185 lbs', 'Sold', '4WD', '1200 lbs', 'Landstar 670-1.jpg', 1, 3, 1, 'current_timestamp()', 'current_timestamp()'),
(3, '2003 Honda® Foreman 4X4 ATV', '2006 Honda Foreman 4X4 ATV Four Wheeler\r\nQuick Specs:\r\n4 Wheel Drive\r\nTool Box Attached\r\n\r\n\r\nCall for more information!', '$2,695.00', 'Granbury, Texas', '2003', 'Honda®', 'Foreman 4X4 ATV', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '478TE220434418459', 'N/A', 'Available', '4WD', 'N/A', '2006 Honda Foreman 4X4 ATV Four Wheeler-1.jpg', 2, 3, 1, 'current_timestamp()', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `utility_image`
--

CREATE TABLE `utility_image` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utility_image`
--

INSERT INTO `utility_image` (`id`, `url`, `product_id`) VALUES
(1, 'American LandMaster LS550 with 479cc Vanguard engine-1.jpg', 1),
(2, 'American LandMaster LS550 with 479cc Vanguard engine-2.jpg', 1),
(3, 'American LandMaster LS550 with 479cc Vanguard engine-3.jpg', 1),
(4, 'American LandMaster LS550 with 479cc Vanguard engine-4.jpg', 1),
(5, 'Landstar 670-1.jpg', 2),
(6, 'Landstar 670-2.jpg', 2),
(7, 'Landstar 670-3.jpg', 2),
(8, 'Landstar 670-4.jpg', 2),
(9, '2006 Honda Foreman 4X4 ATV Four Wheeler-1.jpg', 3),
(10, '2006 Honda Foreman 4X4 ATV Four Wheeler-2.jpg', 3),
(11, '2006 Honda Foreman 4X4 ATV Four Wheeler-3.jpg', 3),
(12, '2006 Honda Foreman 4X4 ATV Four Wheeler-4.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excavator`
--
ALTER TABLE `excavator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excavator_image`
--
ALTER TABLE `excavator_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generators`
--
ALTER TABLE `generators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generator_image`
--
ALTER TABLE `generator_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `implement`
--
ALTER TABLE `implement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `implement_image`
--
ALTER TABLE `implement_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mower`
--
ALTER TABLE `mower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mower_image`
--
ALTER TABLE `mower_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tractor`
--
ALTER TABLE `tractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tractor_image`
--
ALTER TABLE `tractor_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trailer`
--
ALTER TABLE `trailer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trailer_image`
--
ALTER TABLE `trailer_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utility`
--
ALTER TABLE `utility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utility_image`
--
ALTER TABLE `utility_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `excavator`
--
ALTER TABLE `excavator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `excavator_image`
--
ALTER TABLE `excavator_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `generators`
--
ALTER TABLE `generators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generator_image`
--
ALTER TABLE `generator_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `implement`
--
ALTER TABLE `implement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `implement_image`
--
ALTER TABLE `implement_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mower`
--
ALTER TABLE `mower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mower_image`
--
ALTER TABLE `mower_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tractor`
--
ALTER TABLE `tractor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tractor_image`
--
ALTER TABLE `tractor_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trailer`
--
ALTER TABLE `trailer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trailer_image`
--
ALTER TABLE `trailer_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utility`
--
ALTER TABLE `utility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utility_image`
--
ALTER TABLE `utility_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
