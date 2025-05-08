-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2025 at 08:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr-azad_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_testimonial`
--

CREATE TABLE `add_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_testimonial`
--

INSERT INTO `add_testimonial` (`id`, `name`, `image_path`, `review`, `designation`, `url`, `created_at`) VALUES
(2, 'Ayaz Khan', 'testimonial_uploads/external-user-networking-tanah-basah-glyph-tanah-basah.png', 'I was struggling with confidence due to my problem, but after                           treatment, my life has completely changed. Thank you for bringing happiness back into my life!', 'Patient', NULL, '2025-01-28'),
(3, 'Sandeep Yadav', 'testimonial_uploads/external-user-networking-tanah-basah-glyph-tanah-basah.png', 'The Ayurvedic approach worked wonders for me! No side                           effects, just natural healing and great results. Truly life-changing!', 'Patient', NULL, '2025-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `register` varchar(255) DEFAULT NULL,
  `suggestion` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL,
  `task_wallet` int(100) DEFAULT 0,
  `game_wallet` int(100) DEFAULT 0,
  `BANK_NAME` varchar(100) NOT NULL,
  `IFSC_CODE` varchar(100) NOT NULL,
  `ACC_HOLDER_NM` varchar(100) NOT NULL,
  `ACC_NUMBERS` int(100) NOT NULL,
  `ACC_TYPE` varchar(100) NOT NULL,
  `LAST_LOGIN` varchar(100) NOT NULL,
  `ACC_STATUS` varchar(100) NOT NULL DEFAULT 'active',
  `TYPE` varchar(50) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`s_no`, `user_id`, `firstname`, `lastname`, `username`, `email`, `register`, `suggestion`, `mobile_no`, `password`, `confirm_password`, `resettoken`, `resettokenexpire`, `task_wallet`, `game_wallet`, `BANK_NAME`, `IFSC_CODE`, `ACC_HOLDER_NM`, `ACC_NUMBERS`, `ACC_TYPE`, `LAST_LOGIN`, `ACC_STATUS`, `TYPE`) VALUES
(1, '1', 'Admin', ' ', 'zaid_rizvi', 'admin@sexproblemtreatment.com', 'test', '', '9335438189', 'Auctech@321', 'Auctech@321', NULL, NULL, 0, 999, '', '', '', 0, '', '', 'active', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_url` varchar(255) NOT NULL,
  `blog_heading` varchar(255) NOT NULL,
  `blog_desc_first` longtext DEFAULT NULL,
  `blog_desc_second` text DEFAULT NULL,
  `blog_point_one` longtext DEFAULT NULL,
  `blog_point_two` longtext DEFAULT NULL,
  `blog_desc_two` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_url`, `blog_heading`, `blog_desc_first`, `blog_desc_second`, `blog_point_one`, `blog_point_two`, `blog_desc_two`, `created_at`) VALUES
(2, 'Premature-Ejaculation-Causes-and-Treatment', 'Premature Ejaculation: Causes and Treatment', 'Premature Ejaculation: Causes, Symptoms, and Effective Treatments | Dr. Azad Clinic', 'Discover the causes and treatments of premature ejaculation. Learn about natural remedies, lifestyle changes, and expert solutions from Dr. Azad Clinic for a healthier sexual life.', 'Premature Ejaculation | Causes of Premature Ejaculation |Treatment for Premature Ejaculation | Sexual Health | Men\'s Health  | Dr. Azad Clinic, Natural Remedies | Sexual Dysfunction Treatment', 'IMAGES-1', '<p data-pm-slice=\"1 1 []\">Premature ejaculation (PE) is one of the most common sexual concerns faced by men. It occurs when a man ejaculates sooner than he or his partner would like during sexual activity. While occasional instances are normal, frequent premature ejaculation can lead to stress, dissatisfaction, and relationship problems.</p><h5>Causes of Premature Ejaculation</h5><p>Premature ejaculation can be caused by a combination of physical, psychological, and emotional factors. Understanding these causes is the first step toward effective treatment. Some common causes include:</p><p><br></p><table class=\"table table-bordered\"><tbody><tr><td><p data-pm-slice=\"1 1 [&quot;ordered_list&quot;,{&quot;spread&quot;:true,&quot;startingNumber&quot;:1,&quot;start&quot;:1157,&quot;end&quot;:1571},&quot;regular_list_item&quot;,{&quot;start&quot;:1157,&quot;end&quot;:1299}]\"><strong>1. Psychological Factors:</strong></p></td><td><p data-pm-slice=\"1 1 [&quot;ordered_list&quot;,{&quot;spread&quot;:true,&quot;startingNumber&quot;:1,&quot;start&quot;:1157,&quot;end&quot;:1571},&quot;regular_list_item&quot;,{&quot;start&quot;:1301,&quot;end&quot;:1441}]\"><strong>2. Biological Factors:</strong></p></td><td><p data-pm-slice=\"1 1 [&quot;ordered_list&quot;,{&quot;spread&quot;:true,&quot;startingNumber&quot;:1,&quot;start&quot;:1157,&quot;end&quot;:1571},&quot;regular_list_item&quot;,{&quot;start&quot;:1443,&quot;end&quot;:1571}]\"><strong>3. Lifestyle Factors:</strong></p></td></tr><tr><td><div><ul><li>Anxiety or performance pressure.</li></ul></div></td><td><ul><li>Hormonal imbalances</li></ul></td><td><ul><li>Lack of physical activity</li></ul></td></tr><tr><td><ul><li>Stress and mental health issues.</li></ul></td><td><ul><li>Abnormal levels of neurotransmitters</li></ul></td><td><ul><li>Poor dietary habits</li></ul></td></tr><tr><td><ul><li>Unresolved relationship conflicts.</li></ul></td><td><ul><li>Inflammation or infection of the prostate</li></ul></td><td><ul><li>Smoking and excessive alcohol consumption</li></ul></td></tr></tbody></table>', '2025-03-28 05:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_images`
--

CREATE TABLE `blogs_images` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `logos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs_images`
--

INSERT INTO `blogs_images` (`id`, `blog_id`, `image`, `logos`) VALUES
(68, 2, 'about_img_2.jpg', '07-12-2021_3009premature-ejaculation.jpeg'),
(69, 2, 'about_img_2.jpg', 'about_img_2.jpg'),
(70, 2, 'about_img_2.jpg', 'Anxiety-&-Stress.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_appointement`
--

CREATE TABLE `book_appointement` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `problem` varchar(100) DEFAULT NULL,
  `city_name` varchar(100) DEFAULT NULL,
  `disease` varchar(100) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci DEFAULT NULL,
  `fees` varchar(100) DEFAULT NULL,
  `added_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `book_appointement`
--

INSERT INTO `book_appointement` (`id`, `name`, `phone`, `problem`, `city_name`, `disease`, `appointment_date`, `appointment_time`, `fees`, `added_date`) VALUES
(28, 'Rohit Sharma', '7380873691', 'dibities', 'Lucknow', 'Erectile Dysfunction', '2025-05-10', '04:00 PM-05:00 PM', '99', '2025-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `added_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `type`, `message`, `city`, `added_date`) VALUES
(10, 'NrmandAnowl', 'your77@gmail.com', '86469992754', 'delayed_ejaculation', 'It is astonishing.\r\n\r\nThe most devastating genocide in the world is being carried out by the follwoing:\r\n\r\n1- AIPAC, brows ( https://www.youtube.com/watch?v=COx-t-Mk6UA ). \r\n2- Miriam Adelson brows https://www.youtube.com/watch?v=Nr0LkA7VW7Q.\r\n3- Elon Musk. \r\n3- Timothy mellonand brows https://www.youtube.com/shorts/1XJ893-kAh0  \r\n4-The Evangelical Church, \r\n\r\nWhich kill innocent women and children in Gaza.\r\n\r\nAIPAC ( https://www.youtube.com/watch?v=COx-t-Mk6UA ) and the Evangelical Church are implicated in one of the most devastating genocides in history, targeting innocent women and children in Gaza.\r\n\r\nThese organizations have provided Israel with explosives to enable their genocidal actions.\r\n\r\nGaza has been declared a disaster zone, severely lacking in vital resources necessary for survival.\r\n\r\nAIPAC, The Evangelical Church, Miriam Adelson, Elon Musk, and timothy mellon and   America tax payer,, and Israel have ravaged 90% of Gaza, leading to the destruction of 437,600 homes and the loss of one million lives, including 50,000 individuals currently trapped under rubble, with 80% of the casualties being women and children.\r\n\r\nThey have also destroyed 330,000 meters of water pipelines, leaving the population without access to potable water.\r\n\r\nFurthermore, over 655,000 meters of underground sewage systems have been devastated, depriving residents of essential sanitation facilities.\r\n\r\nThe destruction encompasses 2,800,000 meters of roadways, making transportation impossible for the affected population.\r\n\r\nAdditionally, 3,680 kilometers of the electrical grid have been dismantled, resulting in widespread power outages.\r\n\r\nThe assault has led to the demolition of 48 hospitals, eliminating crucial healthcare facilities for those in need.\r\n\r\nMoreover, the actions of AIPAC, The Evangelical Church, Miriam Adelson, Elon Musk, and timothy mellon and   America tax payer,, and Israel have disrupted the education of over 785,000 students, with 494 schools and universities being completely destroyed, many as a result of aerial bombardments.\r\n\r\nThey have also targeted 981 mosques, effectively suppressing the prayers of the homeless who seek divine assistance.\r\n\r\nConsequently, over 39,000 young children have been left orphaned, lacking parents or guardians to provide care.\r\n\r\nIt is important to highlight that the historical context of warfare has never seen a situation where 80% of a nation has been devastated, 100% of its population has been displaced, and 50% of the casualties are children.\r\n\r\nRecognizing the seriousness of this situation is imperative.\r\n\r\nOrganizations such as AIPAC and the Evangelical Church in America are contributing to what can only be characterized as genocide.\r\n\r\nhttps://www.youtube.com/shorts/IrX9v6DKH1g\r\n\r\nThe implications of American taxpayer funding in relation to Israel\'s actions against innocent children are concerning.\r\n\r\n1. A thorough examination of Israel\'s precarious circumstances is necessary.\r\nhttps://www.youtube.com/watch?v=kAfIYtpcBxo\r\n\r\n2. The impact of financial influence, often linked to specific groups, significantly affects these dynamics. Additional information can be accessed through the provided link.\r\n\r\nhttps://mega.nz/file/FqhzGKbB#bsX4PD-O59HEA0-rynD29xkk47dmddycY5CjZfoDLYg\r\n\r\n3. Insights into the views of U.S. leadership regarding AIPAC and the Evangelical Church can be investigated through the following resource.\r\n\r\nhttps://www.tiktok.com/@thefearlessqueenmel/video/7307640994579680542?lang=en&q=why%20dont%20Americans%20knowl%20what%20you%20have%20seen%20&t=1701880206555\r\n\r\nThe heartbreaking reality of innocent children suffering at the hands of powerful Israeli forces using American weaponry is evident in numerous media reports.\r\n\r\nhttps://www.youtube.com/watch?v=COx-t-Mk6UA\r\n\r\nIt is essential to remain informed by consulting trustworthy news sources.\r\n\r\nhttps://www.youtube.com/watch?v=bNyUyrR0PHo\r\n\r\nIt is imperative to take action by expressing your concerns to your government regarding the ongoing conflict and humanitarian crisis in Gaza. If you are unable to do so, please consider sharing this message along with the provided links with at least four friends, encouraging them to do the same. This will help raise awareness about the situation. It is a tragic irony that those who suffered during the Holocaust are now perceived as contributing to the suffering of the Palestinian people in Gaza. \r\n\r\nFailure to engage in this advocacy may suggest a lack of compassion.', 'Sembawang', '2025-04-27 13:49:31.000000'),
(11, 'Louvenia Fosbery', 'fosbery.louvenia@gmail.com', '3747682016', 'penis_enlargement', 'Hey,  \r\n\r\nThis is Mike Fosbery from Monkey Digital,  \r\nI am getting in touch to discuss a mutual opportunity.  \r\n\r\nHow would you like to feature our promotions on your platform and link back via your custom referral link towards popular SEO solutions from our platform?  \r\n\r\nThis way, you make a recurring 35% commission, month after month from any purchases that come in from your audience.  \r\n\r\nThink about it, all businesses require SEO, so this is a massive opportunity.  \r\n\r\nWe already have over 12,000 affiliates and our payouts are processed every month.  \r\nLast month, we distributed $27280 in payouts to our affiliates.  \r\n\r\nIf this sounds good, kindly contact us here:  \r\nhttps://monkeydigital.co/affiliates-whatsapp/  \r\n\r\nOr sign up today:  \r\nhttps://www.monkeydigital.co/join-our-affiliate-program/  \r\n\r\nCheers,  \r\nMike Fosbery  \r\nMonkey Digital\r\nPhone/whatsapp: +1 (775) 314-7914', 'Varano Borghi', '2025-05-01 10:22:48.000000'),
(12, 'RaymondZinue', 'raymondDren@gmail.com', '87733288746', 'low_libido', 'Hi! sexproblemtreatment.com \r\n \r\nNow you have the opportunity to send corporate offers safely and in accordance with legal standards, without worrying about spam filters. \r\nThis guarantees a secure and lawful approach, allowing for reliable and direct communication. \r\nAs Contact Forms prioritize real messages, submissions made through them are handled differently than bulk emails. \r\nTry it now for free and see the benefits for yourself. \r\nWe provide you with the opportunity to deliver up to 50,000 messages to your audience. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis offer is automatically generated. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nWhatsApp - +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\nWe only use chat for communication.', 'Garhoud', '2025-05-01 19:21:28.000000');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(50) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_path`) VALUES
(1, 'gallery_uploads/img_67f2aae622a00.png'),
(2, 'gallery_uploads/img_67f2aae6231e6.png'),
(3, 'gallery_uploads/img_67f2aae62385f.png'),
(4, 'gallery_uploads/img_67f2aae623e32.png'),
(5, 'gallery_uploads/img_67f2aae6244bb.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_testimonial`
--
ALTER TABLE `add_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_images`
--
ALTER TABLE `blogs_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `book_appointement`
--
ALTER TABLE `book_appointement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_testimonial`
--
ALTER TABLE `add_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs_images`
--
ALTER TABLE `blogs_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `book_appointement`
--
ALTER TABLE `book_appointement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
