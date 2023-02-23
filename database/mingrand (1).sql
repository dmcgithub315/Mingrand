-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 02:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mingrand`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `avatar`, `position`, `facebook`, `linkedin`, `instagram`, `twitter`) VALUES
(1, 'Cristiano Ronaldo', './assets/image/agent/agent1.jpg', 'Manchester United', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'https://www.twitter.com/'),
(2, 'Lionel Messi', './assets/image/agent/agent2.jpg', 'Paris Saint Germain', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'https://www.twitter.com/'),
(3, 'Kyllian Mbappe', './assets/image/agent/agent3.jpg', 'CEO', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'https://www.twitter.com/'),
(4, 'David Degea', './assets/image/agent/agent4.jpg', 'Goalkepper', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'https://www.twitter.com/'),
(5, 'Antony', './assets/image/agent/agent5.jpg', 'Right Wing', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'https://www.twitter.com/'),
(6, 'Jordan Sancho', './assets/image/agent/agent6.jpg', 'Left Wing', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'https://www.twitter.com/'),
(7, 'Daniel Michale', './assets/image/agent/agent7.jpg', 'Founder', 'https://www.facebook.com/cuongdm315', 'https://www.linked.com/', 'https://www.instagram.com/', 'https://www.twitter.com/'),
(8, 'Daniel TrungHieu', './assets/image/agent/agent8.jpg', 'Designer', 'https://www.facebook.com/', 'https://www.linked.com/', 'https://www.instagram.com/', 'https://www.twitter.com/');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `image` longtext NOT NULL,
  `album` longtext NOT NULL,
  `userid` int(10) NOT NULL,
  `time` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `content1` longtext NOT NULL,
  `content2` longtext NOT NULL,
  `quote` longtext DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `album`, `userid`, `time`, `title`, `content1`, `content2`, `quote`, `author`) VALUES
(1, 'https://vir.com.vn/stores/news_dataimages/2022/112022/23/16/transport-infrastructure-elevates-ixora-ho-tram-20221123160817.jpg?rt=20221123160821', '[\"https://vir.com.vn/stores/news_dataimages/2022/112022/23/16/transport-infrastructure-elevates-ixora-ho-tram-20221123160942.jpg?rt=20221123160945\",\"https://vir.com.vn/stores/news_dataimages/2022/112022/23/16/transport-infrastructure-elevates-ixora-ho-tram-20221123161035.jpg?rt=20221123161038\",\"\"]', 17, '2022-11-24', 'Transport infrastructure elevates Ixora Ho Tram', 'With synchronous transport infrastructure – from highways and seaports to coastal routes and Long Thanh International Airport – Ho Tram is considered one of the top beneficiaries of the government’s effort to promote regional connectivity. All create a new face for the new capital of the southern tourism market with high-end resort projects, including Ixora Ho Tram by Fusion.\r\nInfrastructure push\r\n\r\nAlongside the harmonious beauty of nature, Ho Tram lures tourists through its proximity to Ho Chi Minh City and the array of convenient traffic infrastructure.\r\n\r\nIn the current development plan for Ba Ria-Vung Tau province, Xuyen Moc (Ho Tram) is positioned to become a crucial coastal tourist area featuring countless high-end resort projects developed along the Vung Tau-Xuyen Moc coastal route, which will be expanded to 42- metre wide.', 'In addition, the widening of the Ho Chi Minh City-Long Thanh-Dau Giay Expressway to 10 lanes will help shorten the travel time from Ho Chi Minh City to Ho Tram even further.\r\n\r\nMoreover, the Bien Hoa-Vung Tau Expressway is one of three the government plans to build to meet the urgent transportation needs of the southern economic region.\r\n\r\nThis expressway will relieve pressure on National Highway 51, connecting Ho Tram with the southeastern provinces, and shorten the travel time from Ho Chi Minh City to Ho Tram.\r\n\r\nThis advantage explains why the market is eagerly hunting for quality projects like Ixora Ho Tram by Fusion, as the convenience and speed of travelling by private cars are pivotal.\r\n\r\nWith a population of 16 million people and impressive growth in per capita income in recent years, Ho Chi Minh City proves a strong market to elevate Ho Tram’s tourism. In the future, when a series of other major projects are completed – such as upgrading National Highway 55 that connects Ba Ria-Vung Tau, Binh Thuan, and Lam Dong, the Ben Luc-Long Thanh Expressway, and a possible sea-crossing bridge connecting Can Gio and Vung Tau – Ho Tram will hail a large number of visitors from the southeast, southwest, and Central Highlands provinces.', 'With an array of top-notch amenities at The Grand Ho Tram Strip, Ixora Ho Tram by Fusion is now leading the all-inclusive resort trend, offering countless experiences.', 'Vir'),
(2, 'https://image.cnbcfm.com/api/v1/image/107155383-1669085162971-Unknown-1_2.jpeg?v=1669210128&w=1260&h=630&ffmt=webp&vtcrop=y', '[\"https://image.cnbcfm.com/api/v1/image/107155417-1669091993241-modern_121_e21.png?v=1669210128&w=740&h=416&ffmt=webp&vtcrop=y\",\"https://image.cnbcfm.com/api/v1/image/107155676-1669132693415-20190626_Cool7_I2IBuiliding18262.jpeg?v=1669210128&w=740&h=416&ffmt=webp&vtcrop=y\",\"https://image.cnbcfm.com/api/v1/image/107155414-1669090255473-view_as_you_enter_.jpg?v=1669210128&w=740&h=416&ffmt=webp&vtcrop=y\",\"https://image.cnbcfm.com/api/v1/image/107155400-1669087285941-automated_garage_21st_street_4.jpeg?v=1669210128&w=740&h=416&ffmt=webp&vtcrop=y\",\"https://image.cnbcfm.com/api/v1/image/107155399-1669087172843-Untitled_2.jpg?v=1669210128&w=740&h=416&ffmt=webp&vtcrop=y\",\"https://image.cnbcfm.com/api/v1/image/107155388-1669085455325-Unknown_2.jpeg?v=1669210128&w=740&h=416&ffmt=webp&vtcrop=y\",\"https://image.cnbcfm.com/api/v1/image/107155425-1669093601729-2B258A00-C206-420B-B936-61B10C16E60B_1_105_c.jpeg?v=1669210128&w=740&h=416&ffmt=webp&vtcrop=y\",\"https://image.cnbcfm.com/api/v1/image/107155429-1669094318618-2022-05-11-ColinMiller-520W28-0012-8981-v2.jpg?v=1669210128&w=740&h=416&ffmt=webp&vtcrop=y\",\"\"]', 17, '2022-11-24', 'The future of parking is in New York — and it costs at least $300,000 per space', 'Hidden deep below some of New York City’s most luxurious apartment buildings is an exclusive world of futuristic parking spaces where high-end vehicles are parked and retrieved by robotic parking systems. \r\n\r\nThe high-tech spots are a rare amenity in the Big Apple, and if you want your car to occupy one of these VIP spaces you’ve got to be ready to fork over hundreds of thousands of dollars.\r\n\r\nThe spots are only accessible to residents of buildings where the apartments will set you back several million, and if you want your car to live there too you’ll need between $300,000 to $595,000 more to score some precious space in the private garage.\r\n\r\nCNBC found two buildings in Manhattan offering spots for sale inside a so-called robo-parking garage.\r\n\r\nThe first is located at 121 East 22nd Street near NYC’s Gramercy Park where a 140-unit condo building developed by Toll Brothers\r\n offers 24 automated parking spots.\r\nEarlier this month, Lori Alf, a full-time resident of Florida, picked up one of the rare parking spaces for $300,000 when she purchased the building’s priciest unit: a 5-bedroom duplex spanning almost 3,800 square feet.\r\n\r\nShe told CNBC the package deal, which totaled $9.45 million, was a gift to her children who are now spending more time in New York.', 'Now when Alf or her kids want to park the family’s Porsche Cayenne in the condo’s garage they pull up to a kiosk where the wave of a small radio frequency ID tag unlocks access to a subterranean car lair where no humans are allowed. \r\n\r\nPressing a button on the kiosk sends a jolt of life into an empty metal pallet one level below. It slides across a track onto a powerful lift that sends the empty pallet up toward ground-level to meet the Alfs who can then carefully position their car on top of it.\r\nBefore their wheels are whisked away, a set of cameras scan the system’s entryway to confirm the car’s trunk and doors are all closed — and that there are no objects or humans left behind that might obstruct the automation. \r\n\r\nWhen the scanners deliver the “all clear,” the pallet, with car on top, disappears into the floor, pausing briefly as it descends into the basement to spin the vehicle 180 degrees before slotting it into one of the empty spaces.\r\n\r\nThe system can lift and shuffle two dozen cars across four rows and two levels.', 'I never found evidence of their actual closings', 'CNBC'),
(3, 'https://image.cnbcfm.com/api/v1/image/107069715-1654095933470-red.jpg?v=1668784699&w=740&h=416&ffmt=webp&vtcrop=y', '[\"https://image.cnbcfm.com/api/v1/image/107069715-1654095933470-red.jpg?v=1668784699&w=740&h=416&ffmt=webp&vtcrop=y\"]', 17, '2022-11-24', 'Home sales fell for the ninth straight month in October, as higher mortgage rates scared off potential buyers', 'Home sales declined for the ninth straight month in October, as higher interest rates and surging inflation kept buyers on the sidelines.\r\n\r\nSales of previously owned homes dropped 5.9% from September to October, according to the National Association of Realtors. That is the slowest pace since December 2011, with the exception of a very brief drop at the beginning of the Covid-19 pandemic.\r\n\r\nThe October reading put sales at a seasonally adjusted, annualized pace of 4.43 million units. Sales were 28.4% lower year over year.\r\n\r\nEven as sales slow, supply is still stubbornly low. There were 1.22 million homes for sale at the end of October, an decrease of just under 1% both month to month and year over year. That’s a 3.3-month supply at the current sales pace. Historically, a balanced market is considered to be a six-month supply.\r\nThe median price of an existing home sold in October was $379,100, an increase of 6.6% from the year before. The price gains, however, are shrinking, as the seasonal drop in home prices this time of year appears to be much deeper than usual.\r\n\r\n“Inventory levels are still tight, which is why some homes for sale are still receiving multiple offers,” said Lawrence Yun, chief economist for the NAR. “In October, 24% of homes received over the asking price. Conversely, homes sitting on the market for more than 120 days saw prices reduced by an average of 15.8%.”', 'Overall, homes went under contract in 21 days in October, up from 19 days in September and 18 days in October 2021. More than half, 64%, of homes sold in October 2022 were on the market for less than a month, suggesting that there is still strong demand if the home is priced right.\r\n\r\nWhile sales are dropping now across all price points, they are weakening most in the $100,000 to $250,000 range and in the $1 million plus range. On the lower end, that is likely due to the severe shortage of available homes in that price range. Big losses in the stock market, as well as inflation and global economic uncertainty, may be weighing on high-end buyers.\r\n\r\nFirst-time buyers, who are likely most sensitive to the increase in mortgage rates, made up just 28% of sales, down from 29% the year before. This cohort usually makes up 40% of home purchases. Investors or second-home buyers pulled back, buying just 16% of the homes sold in October compared with 17% in October 2021.\r\n\r\nMortgage rates are now more than double the record lows seen just at the start of this year. But recent volatility in rates is also wreaking havoc on potential buyers. Rates shot up in June, settled back in July and August, and continued even higher in September and October. Then they dropped back again pretty sharply last week.', 'For many, the week-to-week volatility in mortgage rates alone, which in 2022 has been three times what was typical, may be a good reason to wait', 'Danielle Hale');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `album` longtext NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `locationdetail` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `bedrooms` int(10) NOT NULL,
  `bathrooms` int(10) NOT NULL,
  `kitchen` int(10) NOT NULL,
  `livingroom` int(10) NOT NULL,
  `garages` int(10) NOT NULL,
  `area` int(10) NOT NULL,
  `sold` bit(1) NOT NULL,
  `ownerId` int(10) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `descriptiondetail` varchar(1000) NOT NULL,
  `type` varchar(255) NOT NULL,
  `timepost` date NOT NULL,
  `yearbuild` int(10) NOT NULL,
  `amenities` longtext NOT NULL DEFAULT '',
  `equipment` varchar(255) NOT NULL,
  `orienten` varchar(255) NOT NULL,
  `length` int(10) NOT NULL,
  `width` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `floors` int(10) NOT NULL,
  `floor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `image`, `album`, `title`, `location`, `locationdetail`, `price`, `bedrooms`, `bathrooms`, `kitchen`, `livingroom`, `garages`, `area`, `sold`, `ownerId`, `purpose`, `description`, `descriptiondetail`, `type`, `timepost`, `yearbuild`, `amenities`, `equipment`, `orienten`, `length`, `width`, `height`, `floors`, `floor`) VALUES
(1, './assets/image/house-img/house1.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail1.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail2.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail3.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail4.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail5.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail6.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail7.jpg\"]', 'Villa in Sam Road', 'New York', 'New York 261, Sam Road, Right Side real estate', 80650, 2, 3, 1, 1, 1, 1026, b'0', 1, 'For Sale', 'Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.', 'Villa', '2022-02-14', 2020, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\",\"Park\",\"FloorConvering\",\"Wardrobes\"]', 'Full', 'West', 80, 80, 100, 3, 0),
(10, './assets/image/house-img/house10.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail17.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail11.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail12.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail13.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail16.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail14.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail15.jpg\"]', 'Apartment in Rivergate', 'Florida', '1444 Rivergate Dr, Jacksonville, FL 32223', 200, 1, 1, 0, 0, 0, 600, b'0', 1, 'For Rent', 'There is only one bedroom but it still have living room, kitchen. You should rent it because it is very cheap in Florida', 'There is only one bedroom but it still have living room, kitchen. You should rent it because it is very cheap in FloridaThere is only one bedroom but it still have living room, kitchen. You should rent it because it is very cheap in FloridaThere is only one bedroom but it still have living room, kitchen. You should rent it because it is very cheap in Florida', 'Apartment', '2021-12-01', 2019, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\",\"Park\"]', 'Nothing', 'East', 80, 60, 100, 1, 12),
(11, './assets/image/house-img/house11.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail19.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail20.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail21.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail10.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail9.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail8.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail7.jpg\"]', 'Villa in Kalanianaole', 'Hawaii', '1911 Kalanianaole St Apt 405, Hilo, HI 96720', 1000, 5, 3, 0, 1, 0, 1025, b'0', 1, 'For Rent', 'You going to travel to Hawaii. You have to rent our villa. It is best view in here. Morever, it\'s the cheapest villa.', 'You going to travel to Hawaii. You have to rent our villa. It is best view in here. Morever, it\'s the cheapest villa.You going to travel to Hawaii. You have to rent our villa. It is best view in here. Morever, it\'s the cheapest villa.You going to travel to Hawaii. You have to rent our villa. It is best view in here. Morever, it\'s the cheapest villa.', 'Villa', '2022-10-13', 2020, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\",\"Park\",\"Dishwasher\"]', 'Full', 'North', 80, 100, 80, 3, 0),
(12, './assets/image/house-img/house12.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail16.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail21.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail13.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail15.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail14.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail16.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail17.jpg\"]', 'Apartment in Pham Van Bach', 'Ha Noi', '10 Phạm Văn Bạch, Cầu Giấy, Hà Nội', 850, 3, 2, 1, 1, 1, 1200, b'0', 2, 'For Rent', 'We have apartment in the center of the capital of VietNam. You can not find any apartment as cheap as our one', 'We have apartment in the center of the capital of VietNam. You can not find any apartment as cheap as our oneWe have apartment in the center of the capital of VietNam. You can not find any apartment as cheap as our oneWe have apartment in the center of the capital of VietNam. You can not find any apartment as cheap as our one', 'Apartment', '2022-10-12', 2020, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\",\"Park\",\"Dishwasher\",\"FloorConvering\"]', 'Base', 'West', 100, 120, 100, 1, 11),
(2, './assets/image/house-img/house2.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail5.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail6.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail7.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail15.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail13.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail12.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail19.jpg\"]', 'Villa in Hus Road', 'London', 'LonDon 339, Hus Road, Left Side real estate', 60650, 3, 2, 1, 0, 0, 526, b'0', 2, 'For Sale', 'Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.', 'Villa', '2021-01-22', 2021, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\",\"Park\",\"Dishwasher\",\"Floor Convering\",\"Wardrobes\"]', 'Full', 'South', 100, 50, 50, 2, 0),
(3, './assets/image/house-img/house3.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail21.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail22.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail23.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail24.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail25.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail26.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail17.jpg\"]', 'Villa in William Street', 'Melbourne', '522/199 William Street, Melbourne', 100755, 3, 3, 1, 1, 2, 1230, b'0', 3, 'For Sale', 'Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.Lorem ipsum dolor amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod elit Lorem ipsum dolor sit amet.', 'Villa', '2022-09-09', 2022, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\",\"Park\",\"Dishwasher\",\"FloorConvering\",\"Wardrobes\"]', 'Full', 'South', 120, 120, 100, 3, 0),
(4, './assets/image/house-img/house4.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail15.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail21.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail23.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail14.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail16.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail26.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail17.jpg\"]', 'Apartment in Jamica', 'New York', '93-03 213th St, Jamaica, NewYork', 31500, 2, 2, 1, 1, 1, 801, b'0', 2, 'For Sale', 'I created a simple page with no other items just basic tags and no separate CSS file and got an image', 'I created a simple page with no other items just basic tags and no separate CSS file and got an imageI created a simple page with no other items just basic tags and no separate CSS file and got an imageI created a simple page with no other items just basic tags and no separate CSS file and got an image', 'Apartment', '2022-02-01', 2019, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\",\"Park\",\"Dishwasher\"]', 'Base', 'West', 100, 80, 50, 1, 8),
(5, './assets/image/house-img/house5.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail17.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail25.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail3.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail4.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail5.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail6.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail7.jpg\"]', 'Apartment in Bryony Road', 'London', 'Bryony Road, London W12', 81500, 4, 3, 1, 1, 1, 1200, b'0', 3, 'For Sale', 'We offer a scalable, efficient, established model for empowering local leaders & construction teams to build', 'We offer a scalable, efficient, established model for empowering local leaders & construction teams to buildWe offer a scalable, efficient, established model for empowering local leaders & construction teams to buildWe offer a scalable, efficient, established model for empowering local leaders & construction teams to build', 'Apartment', '2021-03-05', 2021, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\",\"Park\",\"Dishwasher\",\"FloorConvering\",\"Wardrobes\"]', 'Base', 'North', 100, 120, 80, 2, 9),
(6, './assets/image/house-img/house6.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail6.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail22.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail13.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail24.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail15.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail26.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail17.jpg\"]', 'Apartment in Flimders Street', 'Melbourne', '1104/108 Flinders Street, Melbourne', 61500, 3, 3, 1, 1, 1, 1080, b'0', 1, 'For Sale', 'We offer a scalable, efficient, established model for empowering local leaders & construction teams to build', 'We offer a scalable, efficient, established model for empowering local leaders & construction teams to buildWe offer a scalable, efficient, established model for empowering local leaders & construction teams to buildWe offer a scalable, efficient, established model for empowering local leaders & construction teams to build', 'Apartment', '2022-05-03', 2020, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\",\"Park\",\"Dishwasher\",\"Wardrobes\"]', 'Base', 'East', 100, 100, 80, 1, 23),
(7, './assets/image/house-img/house7.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail22.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail21.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail13.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail4.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail5.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail16.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail23.jpg\"]', 'Apartment in Commercial', 'London', 'Commercial Road, London E14', 1500, 3, 3, 0, 1, 1, 1020, b'0', 2, 'For Rent', 'We want help student, employee who finding a good apartment for living, for work, for learn with the cheapest house.', 'We want help student, employee who finding a good apartment for living, for work, for learn with the cheapest house.We want help student, employee who finding a good apartment for living, for work, for learn with the cheapest house.We want help student, employee who finding a good apartment for living, for work, for learn with the cheapest house.', 'Apartment', '2020-01-02', 2020, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\"]', 'Full', 'North', 120, 100, 80, 1, 30),
(8, './assets/image/house-img/house8.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail15.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail22.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail13.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail24.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail15.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail26.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail4.jpg\"]', 'Apartment in Dawson Ave', 'California', '441 Dawson Ave, Long Beach, CA 90814', 1800, 4, 3, 1, 1, 1, 400, b'0', 1, 'For Rent', 'We find the rich student, employee who not own anyhouse want to live in California', 'We find the rich student, employee who not own anyhouse want to live in CaliforniaWe find the rich student, employee who not own anyhouse want to live in CaliforniaWe find the rich student, employee who not own anyhouse want to live in California', 'Apartment', '2022-10-10', 2021, '[\"Air Conditioner\",\"Fencing\",\"Internet\"]', 'Full', 'West', 40, 100, 40, 1, 5),
(9, './assets/image/house-img/house9.jpg', '[\".\\/assets\\/image\\/apartment-detail\\/apartment-detail3.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail12.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail13.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail24.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail18.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail19.jpg\",\".\\/assets\\/image\\/apartment-detail\\/apartment-detail20.jpg\"]', 'Apartment in Timber Trail Dr', 'Texas', '10282 Timber Trail Dr, Dallas, TX 75229', 500, 2, 1, 0, 0, 0, 705, b'0', 3, 'For Rent', 'There are 2 bedrooms, 4 people can live here. It is near market, station, cinema', 'There are 2 bedrooms, 4 people can live here. It is near market, station, cinemaThere are 2 bedrooms, 4 people can live here. It is near market, station, cinemaThere are 2 bedrooms, 4 people can live here. It is near market, station, cinema', 'Apartment', '2022-02-04', 2020, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"Hospital\",\"School\",\"Park\",\"Dishwasher\",\"Floor Convering\",\"Wardrobes\"]', 'Base', 'South', 50, 130, 60, 1, 16),
(13, 'https://cdn.tuoitre.vn/thumb_w/586/2022/10/24/logo-z38252649785819afc33d0a6b71478158c4be25acebae4-1666603281384934649407.jpg', '[\"https://cdn.tuoitre.vn/thumb_w/586/2022/10/24/logo-z38252649785819afc33d0a6b71478158c4be25acebae4-1666603281384934649407.jpg\",\"https://cdn.tuoitre.vn/thumb_w/586/2022/10/24/logo-z38252649785819afc33d0a6b71478158c4be25acebae4-1666603281384934649407.jpg\",\"https://cdn.tuoitre.vn/thumb_w/586/2022/10/24/logo-z38252649785819afc33d0a6b71478158c4be25acebae4-1666603281384934649407.jpg\"]', 'Cuối tháng 10, Phú Quốc sẽ cưỡng chế tháo dỡ bungalow xây trái phép', 'Ha Noi', 'khu tai dinh cu Tu Hoang, Phuong Canh, Nam Tu Liem', 500, 1, 1, 1, 1, 1, 109, b'1', 17, 'For Rent', 'It is a very hot apartment in Ha Noi, it is a good choice for youth', 'It is a very hot apartment in Ha Noi, it is a good choice for youth', 'Villa', '2022-12-06', 2022, '[\"Air Conditioner\",\"School\",\"Wardrobes\"]', '\"Full\"', 'West', 10, 8, 5, 1, 15),
(14, 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/03/osaka-villa-hoi-an-vntrip-e1522138345306.jpg', '[\"https://phuquoc.newworldhotels.com/wp-content/uploads/sites/285/2021/05/PRe-03.png\",\"https://www.engelvoelkers.com/images/07e43544-9e5f-4571-ae73-7170dc2d6809/modern-villa-project-with-innovative-concept\",\"http://thuevilla.com/wp-content/uploads/2021/05/z2487951412453_8e556714c9864ce438c9f4216419762b.jpg\"]', 'Ha Noi Villa', 'Ha Noi', 'khu tai dinh cu Tu Hoang, Phuong Canh, Nam Tu Liem', 500000, 1, 1, 1, 1, 1, 889, b'1', 24, 'For Sale', 'It is a very hot apartment in Ha Noi, it is a good choice for youth', 'It is a very hot apartment in Ha Noi, it is a good choice for youth', 'Villa', '2023-02-21', 2022, '[\"Air Conditioner\",\"Fencing\",\"Internet\",\"School\",\"Park\",\"Dishwasher\"]', '\"Full\"', 'West', 10, 8, 5, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `housefeedback`
--

CREATE TABLE `housefeedback` (
  `id` int(10) NOT NULL,
  `houseid` int(10) NOT NULL,
  `agentid` int(10) NOT NULL,
  `datepost` date NOT NULL,
  `content` varchar(255) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `housefeedback`
--

INSERT INTO `housefeedback` (`id`, `houseid`, `agentid`, `datepost`, `content`, `rating`) VALUES
(1, 1, 2, '2022-09-04', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 4),
(2, 1, 1, '2022-09-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(3, 1, 3, '2022-09-06', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 3),
(4, 2, 1, '2022-09-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(5, 2, 2, '2022-09-09', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(6, 2, 5, '2022-10-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(7, 3, 6, '2022-09-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(8, 3, 5, '2022-10-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 3),
(9, 3, 4, '2022-09-23', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(10, 4, 4, '2022-09-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(11, 4, 6, '2022-09-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 4),
(12, 4, 1, '2022-09-09', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(13, 5, 2, '2022-09-15', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(14, 5, 6, '2022-06-06', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(15, 5, 3, '2022-09-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 4),
(16, 6, 2, '2022-10-10', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(17, 6, 3, '2022-09-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(18, 6, 6, '2022-09-26', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(19, 7, 4, '2022-09-25', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(20, 7, 5, '2022-09-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(21, 7, 6, '2022-09-15', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(22, 8, 1, '2022-09-25', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(23, 8, 3, '2022-10-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(24, 8, 6, '2022-10-15', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(25, 9, 1, '2022-10-25', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(26, 9, 6, '2022-10-06', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(27, 9, 4, '2022-09-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(28, 10, 2, '2022-10-29', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(29, 10, 1, '2022-09-26', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(30, 10, 6, '2022-09-15', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(31, 11, 2, '2022-09-05', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(32, 11, 3, '2022-09-29', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(33, 11, 1, '2022-08-08', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(34, 12, 1, '2022-05-31', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(35, 12, 6, '2021-11-06', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5),
(36, 12, 4, '2022-03-22', 'Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .', 5);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `image`, `name`, `description`, `location`, `mail`, `phone`) VALUES
(1, './assets/image/office/office1.jpg', 'NewYork Office', 'Lorem ipsum dolor amet consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.minim', '420 Love Sreet 133/2 Mirpur Nevis, Caribbean Dhaka', '+(066) 19 5017 800 628', 'info.contact@gmail.com'),
(2, './assets/image/office/office2.jpg', 'Booston Office', 'Lorem ipsum dolor amet consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.minim', '120 Mirror Sreet 125/3 Angel Nevis, California Dhaka', '+(066) 19 9815 670 923', 'info.contact@gmail.com'),
(3, './assets/image/office/office3.jpg', 'India Office', 'Lorem ipsum dolor amet consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.minim', '420 Ho Tung Mau, Mai Dich, Nam Tu Liem', '+(066) 19 3218 123 534', 'info.contact@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `avatar`, `location`) VALUES
(1, 'John Doe', './assets/image/owner/owner1.png', 'New York real estate'),
(2, 'Mary Moe', './assets/image/owner/owner2.png', 'London city'),
(3, 'Julie Dooley', './assets/image/owner/owner3.png', 'Melbourne');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `rating` int(5) NOT NULL,
  `position` varchar(255) NOT NULL,
  `permision` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `feedback`, `rating`, `position`, `permision`) VALUES
(6, 'David Degea', 'daviddegeagk@mu.com', 'degeamu', 'fhenderson', './assets/image/avatar/user-avt-6.jpg', 'I created a simple page with no other items just basic tags and no separate CSS file and got an image', 2, 'Goalkeeper', 0),
(23, 'Cuong DM', 'dmccrypto315@gmail.com', 'dmc1122', '313f8098d87e823f632a616b1a7a4fc5', '', '', 0, 'User', 0),
(17, 'Mạnh Cường', 'dmcggstore@gmail.com', 'dmcmingrand315', '313f8098d87e823f632a616b1a7a4fc5', '', '', 0, '', 1),
(24, 'DMHung', 'dmhung1122@gmail.com', 'dmhung1122', '313f8098d87e823f632a616b1a7a4fc5', '', '', 0, 'User', 0),
(2, 'John Biden', 'johnbiden123@outlook.com', 'johnbiden123', '1102', './assets/image/avatar/user-avt-2.jpg', 'The apostrophes do not make any difference here. Some other issue is at play something is good here', 3, 'Manager', 0),
(1, 'John Smith', 'johnsmith123@gmail.com', 'jsm123321', '12345', './assets/image/avatar/user-avt-1.jpg', 'Lorem ipsum dolor  amet, consectetur elit Lorem ipsum dolor sit amet sed do eiusmod tempor incididunt', 5, 'Admin', 1),
(3, 'Nick Michale', 'nickmichale123@gmail.com', 'nickhandsome352', '1122', './assets/image/avatar/user-avt-3.jpg', 'this solved the issue for me as well...when i defined the style inline. It works fine with some problem', 4, 'User', 0),
(4, 'Sarif Jaya Miprut', 'sarifjaya123@fpt.edu.vn', 'jaya317', 'sarifjaya', './assets/image/avatar/user-avt-4.jpg', 'I would love to know why this works. I tested my site with Chrome, Chromium, Safari, Firefox, IE, and it only required ', 5, 'User', 0),
(5, 'Sanji Barber', 'tutoc321@barber.com', 'sanjibarber55ngoquyen', 'tutoc321', './assets/image/avatar/user-avt-5.jpg', 'It looks like that hosting service is using some funky dynamic system that is preventing these browsers from fetching it. Could you just  ', 1, 'User', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD UNIQUE KEY `avatar` (`avatar`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD KEY `id` (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD UNIQUE KEY `image` (`image`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `housefeedback`
--
ALTER TABLE `housefeedback`
  ADD KEY `id` (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD UNIQUE KEY `image` (`image`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `avatar` (`avatar`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `housefeedback`
--
ALTER TABLE `housefeedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
