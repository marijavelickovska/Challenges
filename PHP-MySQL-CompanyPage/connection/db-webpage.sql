-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 10:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(5) UNSIGNED NOT NULL,
  `cover_img_url` varchar(200) NOT NULL,
  `main_title` varchar(200) NOT NULL,
  `subtitle` varchar(200) NOT NULL,
  `about_us` varchar(1000) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `services_or_products` enum('Services','Products') DEFAULT 'Services',
  `img_url1` varchar(200) NOT NULL,
  `description1` varchar(1000) NOT NULL,
  `img_url2` varchar(200) NOT NULL,
  `description2` varchar(1000) NOT NULL,
  `img_url3` varchar(200) NOT NULL,
  `description3` varchar(1000) NOT NULL,
  `description_company` varchar(1000) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `google_plus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `cover_img_url`, `main_title`, `subtitle`, `about_us`, `phone`, `location`, `services_or_products`, `img_url1`, `description1`, `img_url2`, `description2`, `img_url3`, `description3`, `description_company`, `linkedin`, `facebook`, `twitter`, `google_plus`) VALUES
(1, 'https://www.teahub.io/photos/full/120-1209689_computer-background-image-hd.jpg', 'Edeka Centrum', 'Subtitle, your second sentance on your web page, has only one job - to force the reader to read the third sentance', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque iure, tenetur necessitatibus incidunt reiciendis quidem porro suscipit? Hic exercitationem earum temporibus a. ipsum dolor sit amet consectetur, adipisicing elit. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt reiciendis quidem porro suscipit.', '38975455899', 'Skopje, Macedonia', 'Services', 'https://image.shutterstock.com/shutterstock/photos/1712082700/display_1500/stock-photo-attractive-african-young-confident-businesswoman-sitting-at-the-office-table-with-group-of-1712082700.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt reiciendis quidem porro suscipit? Hic exercitationem. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt reiciendis quidem porro suscipit. ', 'https://cdn.stocksnap.io/img-thumbs/960w/computer-keyboard_BTG0UZK1NX.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt reiciendis quidem porro suscipit? Hic exercitationem. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure.', 'https://cdn.stocksnap.io/img-thumbs/960w/laptop-working_HB4IJY3TPI.jpg', 'Lorem ipsum dolor sit amet consectetur, Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt reiciendis quidem. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore dignissimos numquam minima sapiente vel modi necessitatibus et iste, commodi, placeat esse natus illum doloremque vero. Provident ratione laborum harum fuga.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore dignissimos numquam minima sapiente vel modi necessitatibus et iste, commodi, placeat esse natus illum doloremque vero. Provident ratione laborum harum fuga.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore dignissimos numquam minima sapiente vel modi necessitatibus et iste, commodi, placeat esse natus illum doloremque vero. ', 'https://www.linkedin.com/', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.google.com/'),
(2, 'https://res.cloudinary.com/fleetnation/image/private/c_fit,w_1120/g_south,l_text:style_gothic2:%C2%A9%20Roman%20Barisev,o_20,y_10/g_center,l_watermark4,o_25,y_50/v1571285174/wmv4g8iwiv1yh5qazra3.jpg', 'Organic World', 'Subtitle, your second sentance on your web page, has only one job - to force the reader to read the third sentance', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque iure, tenetur necessitatibus incidunt reiciendis quidem porro suscipit? Hic exercitationem earum temporibus a. ipsum dolor sit amet consectetur, adipisicing elit. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt reiciendis quidem porro suscipit.', '38978700525', 'Ohrid, Macedonia', 'Products', 'https://image.freepik.com/free-photo/fresh-avocado-sliced-vintage-wooden-background-close-up-ripe-green-avocado-fruit-wood-board_308079-2389.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt reiciendis quidem porro suscipit? Hic exercitationem. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt reiciendis quidem porro suscipit. ', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7suOV-B2dW2lz0X7q6piL_FuW2F2vPThMgg&usqp=CAU', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt reiciendis quidem porro suscipit? Hic exercitationem. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure.', 'https://static1.bigstockphoto.com/7/9/2/large1500/297213580.jpg', 'Lorem ipsum dolor sit amet consectetur, Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt reiciendis quidem. Atque nobis eos, magni aperiam quibusdam qui commodi iste iure, tenetur necessitatibus incidunt.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore dignissimos numquam minima sapiente vel modi necessitatibus et iste, commodi, placeat esse natus illum doloremque vero. Provident ratione laborum harum fuga.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore dignissimos numquam minima sapiente vel modi necessitatibus et iste, commodi, placeat esse natus illum doloremque vero. Provident ratione laborum harum fuga.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore dignissimos numquam minima sapiente vel modi necessitatibus et iste, commodi, placeat esse natus illum doloremque vero. ', 'https://www.linkedin.com/', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.google.com/'),
(3, 'https://cdn.stocksnap.io/img-thumbs/960w/island-ocean_GAVRE8VSLS.jpg', 'See The World', 'Subtitle, your second sentance on your web page, has only one job - to force the reader to read the third sentance', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet optio obcaecati, commodi repudiandae perspiciatis excepturi enim a nam, vitae reiciendis alias magnam cum ratione adipisci quasi, consequuntur ea modi sapiente.', '38978-555-328', 'Skopje, Macedonia', 'Services', 'https://cdn.stocksnap.io/img-thumbs/960w/palm%20trees-palm%20leaves_V8G3PEWVYL.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet optio obcaecati, commodi repudiandae perspiciatis excepturi enim a nam, vitae reiciendis alias magnam cum ratione adipisci quasi, consequuntur ea modi sapiente.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet optio obcaecati, commodi repudiandae perspiciatis excepturi enim a nam, vitae reiciendis alias magnam cum ratione adipisci quasi.', 'https://cdn.stocksnap.io/img-thumbs/960w/ocean-beach_AIU2B7KINU.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet optio obcaecati, commodi repudiandae perspiciatis excepturi enim a nam, vitae reiciendis alias magnam cum ratione adipisci quasi, consequuntur ea modi sapiente.', 'https://cdn.stocksnap.io/img-thumbs/960w/mill-mountain_ARAGQYVAYC.jpg', 'Lorem ipsum dolor sit, amet consecte. Eveniet optio obcaecati, perspiciatis excepturi enim a nam, vitae reiciendis alias magnam cum ratione adipisci quasi, consequuntur ea modi sapiente.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet optio obcaecati, commodi repudiandae perspiciatis excepturi enim a nam, vitae reiciendis alias magnam cum ratione adipisci quasi, consequuntur.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet optio obcaecati, commodi repudiandae perspiciatis excepturi enim a nam, vitae reiciendis alias magnam cum ratione adipisci quasi, consequuntur ea modi sapiente.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet optio obcaecati, commodi repudiandae perspiciatis excepturi enim a nam, vitae reiciendis alias magnam cum ratione adipisci quasi, consequuntur ea modi sapiente.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet optio obcaecati, commodi repudiandae perspiciatis excepturi enim a nam, vitae reiciendis alias magnam.', 'https://www.linkedin.com/', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.google.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
