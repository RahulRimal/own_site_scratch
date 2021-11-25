-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 04:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `own_site_scratch`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Men'),
(3, 'Women');

-- --------------------------------------------------------

--
-- Table structure for table `color_variation`
--

CREATE TABLE `color_variation` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_selected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `color_variation`
--

INSERT INTO `color_variation` (`id`, `product_id`, `name`, `is_selected`) VALUES
(1, 1, 'red', 1),
(2, 1, 'orange', 0),
(3, 1, 'blue', 0);

-- --------------------------------------------------------

--
-- Table structure for table `frontpage_carousel`
--

CREATE TABLE `frontpage_carousel` (
  `id` int(11) NOT NULL,
  `image` varchar(155) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `has_expired` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `frontpage_carousel`
--

INSERT INTO `frontpage_carousel` (`id`, `image`, `created_date`, `has_expired`) VALUES
(1, 'images.jpg', '2020-11-27 05:33:08', '0000-00-00 00:00:00'),
(2, 'Alternative_web_sliders20202.jpg', '2020-11-27 05:33:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `regular_price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `average_rating` float NOT NULL,
  `wishlisted` tinyint(1) NOT NULL,
  `stock_count` int(11) NOT NULL,
  `on_sale` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `sub_category_id`, `name`, `image`, `short_description`, `description`, `regular_price`, `sale_price`, `average_rating`, `wishlisted`, `stock_count`, `on_sale`, `created_date`) VALUES
(1, 1, 1, 'Jacket Flushed', 'usher-265x331.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere assumenda dolor doloribus. Corporis doloremque expedita autem ratione dolore temporibus.', 'Aenean lectus elit, fermentum non, convallis id, sagittis at, neque. Nullam mauris orci, aliquet et, iaculis et, viverra vitae, ligula. Nulla ut felis in purus aliquam imperdiet. Maecenas aliquet mollis lectus. Vivamus consectetuer risus et tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Made of 95% Polyester and 5% Elastane Elastic shoulder straps Measured from Small V-neckline with lace portion at back Hand wash cold Form-fitting design with stretch Delivery 5-10 working days', 2500, 2000, 5, 0, 5, 1, '2020-11-27 04:02:22'),
(2, 1, 0, 'Rectangular Ceramic pot for plants', 'usher-265x331.png', 'Rectangular Ceramic pot for small plants with beautiful decoration.\r\n\r\nDelivery time: 1-2 days\r\n\r\nFree home delivery inside Kathmandu and Lalitpur.', 'Dimensions: 5.0 x 4.5 inch\r\n\r\nRectangular Ceramic pot for small plants with beautiful decoration.\r\n\r\nDelivery time: 1-2 days\r\n\r\nFree home delivery inside Kathmandu and Lalitpur.', 1400, 0, 2, 1, 5, 0, '2020-11-27 04:51:39'),
(3, 1, 0, 'Cylindrical plastic pot with Jade plant', 'usher-265x331.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque eveniet dolores beatae ratione amet, dolore quam molestiae obcaecati magni ex!', 2000, 0, 3, 0, 0, 0, '2020-11-27 04:58:59'),
(4, 3, 0, 'Nice Dress', 'usher2.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, accusamus!', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolorem rem quia nam voluptatibus labore doloremque ullam cumque iure vitae nesciunt sequi corrupti, praesentium maiores unde impedit tenetur nemo aut.', 2500, 2000, 3, 1, 9, 1, '2020-12-03 07:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_variation`
--

CREATE TABLE `product_variation` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variation_type` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `product_variation`
--

INSERT INTO `product_variation` (`id`, `product_id`, `variation_type`, `created_date`) VALUES
(1, 1, 'color', '2020-12-03 07:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `rating` float NOT NULL,
  `review_body` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `category_id`, `rating`, `review_body`, `created_date`) VALUES
(1, 1, 1, 1, 4, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere nostrum provident nemo, voluptas magnam eaque dolores illum quidem praesentium placeat.', '2020-12-01 07:10:34'),
(2, 1, 1, 1, 2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere nostrum provident nemo, voluptas magnam eaque dolores illum quidem praesentium placeat.', '2020-12-01 07:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `size_variation`
--

CREATE TABLE `size_variation` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `size_variation`
--

INSERT INTO `size_variation` (`id`, `product_id`, `size_number`) VALUES
(1, 1, 52),
(2, 1, 53);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `parent_category_id`, `created_date`) VALUES
(1, 'Jacket', 1, '2020-12-02 10:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `password`, `image`, `created_date`) VALUES
(1, 'Rahul', 'Rimal', 'RahulR', '12345678', 'download.jpg', '2020-12-01 07:09:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_variation`
--
ALTER TABLE `color_variation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontpage_carousel`
--
ALTER TABLE `frontpage_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variation`
--
ALTER TABLE `product_variation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size_variation`
--
ALTER TABLE `size_variation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `color_variation`
--
ALTER TABLE `color_variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `frontpage_carousel`
--
ALTER TABLE `frontpage_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `size_variation`
--
ALTER TABLE `size_variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
