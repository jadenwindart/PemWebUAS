-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2019 at 01:32 PM
-- Server version: 5.7.19
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'Laptop'),
(2, 'Keyboard and Mouse'),
(3, 'Headphone'),
(4, 'External Memory');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `qty`, `price`, `category`) VALUES
(1, 'GIGABYTE AERO 15 Classic-YA-U96ASP 15\" Thin Bezel UHD Auo IPS Adobe RGB 100%, i9-9980HK, NVIDIA GeForce RTX 2080, Samsung 64GB RAM, M.2 PCIe 2TB Intel 760P SSD, Win10 Pro, 94W Ultra Slim Gaming Laptop ', '-15.6\" 0.11 inch ultra-thin bezel | AUO UHD Adobe RGB 100% 3840x2160 IPS Anti-Glare display LCD | X-Rite Pantone Certified for color calibration\r\n-Intel Core i9-9980hk (2.4Ghz-5.0GHz) | NVIDIA GeForce RTX 2080 GDDR6 8GB \r\n-Supports NVIDIA Optimus technology\r\n-64GB DDR4 2666MHz Samsung DRAM module | M.2 NVMe PCIe 2TB Intel 760P SSD | \r\n-Windows 10 Pro High end\r\n-Microsoft Azure AI | all Intel inside | Intel Thunderbolt 3 | Intel Wi-Fi AC adapter\r\n-94.24Wh 9hrs Long battery life | per-key RGB backlit programmable keyboard | UHS-II SD card reader\r\n-Killerdoubleshot Pro | Nahimic 3D Audio | Bluetooth V5.0 + LE | HDMI2.0 | mini-DP 1.4 | 230W adapter\r\n-14 x 9.8 x 0.74 inch | 4.49 Ibis | 1 Year Global warranty ', 2, 20500000, 1),
(2, 'Western Digital 4TB Black My Passport Portable External Hard Drive - USB 3.0 - WDBYFT0040BBK-WESN', '-Auto backup with included WD Backup software\r\n-Password protection with hardware encryption\r\n-Trusted drive built with WD reliability\r\n-USB 3.0 port; USB 2.0 compatible. SYSTEM COMPATIBILITY: Windows 10, Windows 8.1, Windows 7. Requires reformatting for Mac OS X operating system\r\n-3-year manufacturer\'s limited warranty ', 4, 1590000, 4),
(3, 'SteelSeries Siberia v2 Full-Size Gaming Headset (White) ', '-Closed ear headphones\r\n-Pull-out microphone\r\n-Crystal clear high, low and mid-tones\r\n-50mm driver units\r\n-Lightweight suspension construction\r\n-Integrated volume control located on the cord', 5, 780000, 3),
(4, 'ASUS ROG Zephyrus M Ultra Slim Gaming Laptop, 15.6” Full HD 144Hz IPS-Type G-SYNC, GeForce GTX 1070, Intel Core i7-8750H Processor, 16GB DDR4, 256GB PCIe SSD + 1TB FireCuda, Windows 10 - GM501GS-XS74 ', '-Ultra Slim 0.78\" gaming laptop with a full-powered NVIDIA GeForce GTX 1070 8GB GDDR5. 8th-Generation 6-Core Intel Core i7-8750H (up to 3.9GHz)\r\n-144Hz refresh rate 15.6\" Full-HD IPS-Type AHVA gaming panel with NVIDIA G-SYNC and 3ms response time\r\n-20% reduced temperature compared to conventional cooling design due to ROG-exclusive Active Aerodynamic System and 12V fans. Increased longevity with anti-dust technology. *Cooling performance varies depending on system and environmental conditions\r\n-GPU Switch Mode: switch between integrated and discrete graphics for increased battery life or powerful gaming performance\r\n-RGB Gaming Keyboard with AURA SYNC: 20-million keypress durability, 1.7mm key travel distance, 4-zone -RGB lighting control, N-Key rollover\r\n-256GB PCIe NVMe M.2 SSD + 1TB FireCuda Hybrid Drive\r\n-Gigabit Wave 2 WiFi at up to 1.73Gbps with 2x2 802.11ac. USB 3.1 Gen2 Type-C Thunderbolt port ', 6, 25750000, 1),
(5, 'CORSAIR K68 RGB Mechanical Gaming Keyboard, Backlit RGB LED, Dust and Spill Resistant - Linear & Quiet - Cherry MX Red', '-Vivid RGB backlighting offers virtually unlimited lighting customization, or use a variety of on-board pre-installed effects for instant-illumination\r\n-Dust and spill resistant design rated up to IP32 protection, helps defend against accidents so your gameplay never has to stop\r\n-100% gold-contact CHERRY MX mechanical gaming key switches deliver the ultimate performance and competitive advantage\r\n-CORSAIR Utility Engine (CUE) software controls sophisticated macro programming and stunning dynamic lighting effects\r\n-100% Anti-ghosting with full key rollover ensures your commands and simultaneous keystrokes always register the way you intended ', 10, 2500000, 2),
(6, '\r\n\r\nRoll over image to zoom in\r\nLogitech G602 Lag-Free Wireless Gaming Mouse – 11 Programmable Buttons, Up to 2500 DPI ', '-Up to 250 hours of battery life (Best with Polaroid AA Batteries)\r\nPower-saving, high-accuracy Delta Zero sensor technology. Try tracking on a different surface\r\n-Lag-free gaming-grade wireless, Performance and Endurance modes maximize battery life\r\n-Long-life buttons rated to 20 million clicks, 11 programmable buttons\r\n-For Windows 10, Windows 8, Windows 7, Windows Vista, and Mac OS X 10.6.8 or higher. For more details go through the \"System Requirements\" mentioned below ', 20, 400000, 2),
(7, '2019 Dell G7 15.6\" FHD IPS Gaming Laptop | Intel Six-Core i7-8750H | 4GB/8GB/16GB/32GB DDR4 RAM | Up to 1TB SSD Boot + 2TB HDD | NVIDIA GeForce GTX 1060 with Max-Q 6GB | Backlit Keyboard | Windows 10 ', '-Choose From A)4GB /8GB/12GB/16GB/32GB DDR4 Memory; And B) 1st HDD (Boot) 128GB/256GB/512GB/1TB SSD For Better Performance; And C) Optional 2nd Optical Drive: 1TB/2TB Hard Drive For Extra Storage Space; A Solid State Drive (SSD) Will Boost The Overall Performance For The Computer\r\n-8th Generation Intel Core i7-8750H Processor (6-Core, 9MB Cache, 2.2GHz Up To 4.1GHz w/ Turbo Boost), 15.6-inch FHD (1920 x 1080) IPS Anti-Glare LED-Backlit Display, NVIDIA GeForce GTX 1060 with Max-Q 6GB GDDR5 SDRAM\r\n10/100/1000 Gigabit Ethernet, 802.11ac, Bluetooth5.0, 2-in-1 SD (UHS50) / MMC, MaxxAudio (Windows), Stereo Speakers, Webcam\r\n-1 X HDMI 2.0, 4 X USB 3.1 (3 x USB 3.1 Gen 1, 1 x Thunderbolt 3 via USB Type-C), 1 x Combo Headphone / Microphone Jack, RJ-45 Ethernet\r\n-Windows 10 Home, 4-Cell 56 Whr Battery, 5.82 lbs, Backlit Keyboard, Black, Optional Office 365 Personal (1-year) Subscription Key Card/Office Home and Student 2019 ', 3, 12000000, 1),
(8, 'AKG Pro Audio Professional Headphones Black 1/4\" to 1/8\" K702 ', '-Over-ear design maximum wearing comfort for long work sessions\r\n-Sophisticated open technology for Spacious and airy sound without compromise\r\n-Patented Varimotion two-layer diaphragm for improved high-frequency range and better performance at low frequencies\r\n-Unique flat-wire voice coil for higher sensitivity, better Impulse and Treble response\r\n-Specially shaped 3d-foam ear pads for optimum fit and ease of use\r\n-Connectivity Technology: Wired ', 5, 4500000, 3),
(9, 'Lenovo Legion Y7000 Gaming Laptop, 15.6\" FHD IPS Anti-Glare Laptop (Intel Core i7-8750H Processor, Nvidia GTX 1060, 16 GB DDR4, 1 TB HDD + 128 GB PCIe SSD, Windows 10 Home) 81LF0001US, Black ', '-POWERFUL GAMING LAPTOP: The Lenovo Legion Y7000 gaming laptop comes with an Intel Core i7-8750H Processor, NVIDIA GeForce GTX 1060 Discrete Graphics, 16 GB DDR4 RAM, 1 TB HDD + 128GB PCIe SSD and more.\r\nPRACTICAL PORTABILITY: At 1.1 inch thin and only 5.2 pounds, the Legion\r\n-Y7000 gaming laptop was redesigned to deliver the ideal balance between epic gaming performance and practical portability\r\n-FHD DISPLAY: Featuring bezels that are only 0.3 inches thin, the Y7000 Laptop rocks a 15.6\" FHD display, 300 nits of brightness, and brings your games to life\r\n-BACKLIT KEYBOARD: Legion Y7000 is equipped with a full-sized, white backlit and high-response keyboard and number pad to your hands with 1.7 mm of key travel for the most ergonomic and comfortable gaming experience\r\n-60 FPS AND BEYOND: Lenovo gaming laptop comes specced with the latest generation Intel processors, NVIDIA discrete graphics, DDR4 memory and more, all optimally cooled via a reengineered dual-channel cooling system ', 1, 12500000, 1),
(10, 'ADATA HD710 Pro 2TB USB 3.1 IP68 Waterproof/Shockproof/Dustproof Ruggedized External Hard Drive, Black (AHD710P-2TU31-CBK) ', '-USB 3.1 Interface that works with PC, Mac, Linux\r\n-IP68 Waterproof, tested for 60 minutes in 2 meter of water\r\n-IP68 Military-Grade Shockproof MIL-STD-810G 516.6\r\n-IP6X Dustproof\r\n-3 Year Warranty ', 10, 950000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
