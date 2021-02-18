-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2021 at 09:04 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_tel` varchar(50) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_tel`, `customer_email`, `customer_address`) VALUES
(1, 'Mahmud Al Hakim', '07907625378', 'mahmud@alhakim.com', 'Stockholm'),
(2, 'Yasmin Al Hakim', '07006536598', 'yasmin@alhakim.com', 'Uppsala'),
(3, 'Ladan Grönkvist', '07906757434', 'ladan@gronkvist.com', 'Skåne'),
(4, 'Rida Warsi', '0790667788', 'rida@warsi.com', 'Malmö');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `product_id`, `order_date`) VALUES
(1, 1, 5, '2021-02-15 17:45:14'),
(2, 1, 3, '2021-02-15 17:45:14'),
(3, 2, 7, '2021-02-15 17:45:14'),
(4, 3, 10, '2021-02-15 17:45:14'),
(5, 3, 5, '2021-02-15 17:45:14'),
(6, 3, 4, '2021-02-15 17:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`) VALUES
(1, 'Träningshoodie', 799, 'Huvtröja i stretchkvalitet ned skimrande pricktryck upptill fram och på huvan. Dragkedja fram och fickor i sidorna.', 'https://www.pexels.com/photo/woman-wearing-black-hoodie-2787351/'),
(2, '	\r\nRibbed Mock Neck Form-Fitting Sweater', 139, 'Type: Basic Tops, Style: Basics, Color: Dusty Pink, Pattern Type: Plain, Neckline: Stand collar', 'https://images.unsplash.com/photo-1589697547048-962940abc062'),
(3, 'Puff Top', 299, 'Topp i glansig trikå med strukturmönster. Långa ärmar med lagda veck på axlarna.', 'https://www.pexels.com/photo/woman-in-black-long-sleeved-shirt-wearing-black-hat-4450356/'),
(4, 'klänning Janni', 599, 'Klänning Janni med figurnära överdel i elastisk smock med sprund och knapp i nacken.', 'https://www.pexels.com/photo/woman-in-blue-dress-leaning-on-wooden-fence-4387524/'),
(5, 'Color Block Rib-knit Cami Top', 200, 'Style: Casual, Color: Multicolor, Pattern Type: Colorblock, Neckline: Spaghetti Strap, Length: Regular, Details: Rib-Knit, Sleeve Length: Sleeveless, Season: Spring, Composition: 100% Acrylic.', 'https://images.unsplash.com/photo-1561538515-a63dfbf97ef1'),
(6, 'Tiger of sweden jeans', 1399, 'Jeans Rex från Tiger of Sweden i stretchdenim av ekologisk bomull.', 'https://www.pexels.com/photo/person-in-blue-denim-jeans-and-white-converse-all-stars-52574/'),
(7, 'Only Kappa', 479, 'Kappa onlSedona Light Coat från Only i vävd kvalitet med draperad huva. Dold stängning med dragkedja och tryckknappar. Två fickor i sidorna. Längd ca 81 cm i stl S.', 'https://www.pexels.com/photo/selective-focus-photography-woman-wearing-gray-coat-standing-near-building-1381553/'),
(8, 'Sneaker Air soft', 279, 'Sneakers Air Soft i slip on-modell med ovandel i strukturmönstrad textil med ribbad kant med stretch runt öppningen. Dragtamp i präglad skinnimitation både fram och bak.', 'https://www.pexels.com/sv-se/foto/mode-skor-oskarpa-logotyp-1478442/'),
(9, 'Kappa Melina', 489, 'Kappa Melina i klassisk, rak modell i ullmix med knappar fram och två fickor med ficklock.', 'https://www.pexels.com/photo/woman-in-red-and-black-coat-and-black-hat-3584505/'),
(10, 'Boots Olivia', 1300, 'Boots Olivia från Vagabond i stilren modell med spetsig tå och klädd, snyggt formad klack. Dragkedja på skaftets insida. Ovansida i mocka.', 'https://www.pexels.com/photo/women-s-yellow-long-sleeved-dress-1055691/'),
(11, 'Träninglinne', 174, 'Produkten består av viskos av bambu som är odlad utan bekämpningsmedel. Bambu är ett förnyelsebart material med hög absorberingsförmåga.', 'https://www.pexels.com/photo/happy-young-sportswoman-doing-exercise-with-dumbbell-4498292/'),
(12, 'Byxor Lorelai', 209, 'Byxor Lorelai i snygg modell med hög midja och vida, raka ben. Bred, invändig resår upptill. Följsam stretchtrikå.', 'https://www.pexels.com/sv-se/foto/landskap-mode-person-hander-3522692/'),
(13, 'Plus Abstract Figure Print Tee', 150, 'Style: Casual, Color: Black, Pattern Type: Figure, Neckline: Round Neck, Length: Regular, Sleeve Length: Short Sleeve, Sleeve Type: Regular Sleeve, Season: Summer, Fit Type: Regular Fit.', 'https://images.unsplash.com/photo-1522706604291-210a56c3b376'),
(14, 'Plus Letter Graphic Drop Shoulder Tee', 260, 'Style: Casual, Color: Navy Blue, Pattern Type: Letter, Neckline: Round Neck, Length: Regular.', 'https://images.unsplash.com/photo-1520926559917-836c81ebfa3d'),
(15, 'MOTF Premium Voluminous Chunky-Knit Sweater', 379, 'Style: Elegant, Color: Beige, Pattern Type: Plain, Neckline: Stand Collar, Length: Knee Length, Type:shirt.', 'https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
