-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 02:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skype_id` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `subject` varchar(255) NOT NULL,
  `conversation` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `authId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` enum('Political News','Medicine','Economic','Effect','Prevention','Education','Quarantine','Health','Travel') DEFAULT NULL,
  `date` date NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `authId`, `title`, `category`, `date`, `content`) VALUES
(1, 1, 'How to treat COVID-19 coronavirus at home?', 'Quarantine', '2020-05-31', 'Medical experts around the world are working around the clock to develop a vaccine for COVID-19 as it continues to spread around the globe. But how are vaccines made and when are we likely to have one for coronavirus? We all know that vaccines exist for o'),
(2, 1, 'When will we have a vaccine for COVID-19 Coronavirus?', 'Medicine', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(3, 1, 'What can I do under the new rules?', 'Quarantine', '2020-05-31', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n'),
(4, 1, 'What you need to know about COVID-19 and pregnancy', 'Prevention', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(6, 1, 'What is an underlying health condition?', 'Health', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(7, 1, 'How to stay healthy while working at home', 'Education', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(8, 1, 'What is shielding, who needs it?', 'Medicine', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(9, 1, 'What to do if you need to see a GP or get medication?', 'Medicine', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(10, 1, 'Do you need to disinfect your home?', 'Quarantine', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(11, 1, 'When will we have a vaccine for COVID-19 Coronavirus?', 'Medicine', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(12, 1, 'What can I do under the new rules?', 'Quarantine', '2020-05-31', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n'),
(13, 1, 'What you need to know about COVID-19 and pregnancy', 'Prevention', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(14, 1, 'Are you washing your hands properly?', 'Health', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(15, 1, 'What is an underlying health condition?', 'Health', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(16, 1, 'How to stay healthy while working at home', 'Education', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(17, 1, 'What is shielding, who needs it?', 'Medicine', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(18, 1, 'What to do if you need to see a GP or get medication?', 'Medicine', '2020-05-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(20, 1, 'computer vision tidak menampilkan response', 'Political News', '2020-06-08', '<p><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/-FyjEnoIgTM\" width=\"560\"></iframe></p>\r\n'),
(21, 1, 'How to treat COVID-19 coronavirus at home?', 'Quarantine', '2020-06-08', '<div class=\"single_first_text\">\r\n<h6>Medical experts around the world are working around the clock to develop a vaccine for COVID-19 as it continues to spread around the globe. But how are vaccines made and when are we likely to have one for coronavirus? We all know that vaccines exist for other viruses, like flu, but COVID-19 is a new illness that experts haven&#39;t seen before.</h6>\r\n\r\n<div class=\"media\">\r\n<div class=\"d-flex\">D</div>\r\n\r\n<div class=\"media-body\">\r\n<p>r Diana Gall of Doctor 4 U, and Mr Parvinder Sagoo, pharmacist and clinical advisor at Vaxxy, explain how vaccines are made, how coronavirus is being mapped and when we will see a vaccine for Coronavirus COVID-19.</p>\r\n</div>\r\n</div>\r\n\r\n<p>A huge amount of misinformation about vaccines is often shared on social media, causing unnecessary concern around their safety. Myths about vaccines causing autism or containing heavy metals that can poison the body are scientifically unfounded. Vaccines are safe and the best way we can protect the population from disease. That&#39;s why the creation of a coronavirus vaccine is so important to control the pandemic.</p>\r\n</div>\r\n\r\n<div class=\"secand_part\">\r\n<h4>How are vaccines made?</h4>\r\n\r\n<p>The most common way to make a vaccine involves using the virus antigen itself, Dr Gall explains. &quot;In any vaccine, the strain of virus that needs an immunisation must be identified before anything can be done. However, once the strain is identified, the antigen is isolated and either weakened or made inactive through a chemical process,&quot; she</p>\r\n\r\n<h5>Virus proteins that are used to create vaccines are sometimes grown in cells that come from chicken embryos, or alternatively, they can be grown in a bioreactor like a Petri dish.</h5>\r\n\r\n<p>When a virus is weakened or inactive, it can&#39;t reproduce in order to cause illness, but the body&#39;s immune system can still create antibodies to fight it off. That way, if you do come into contact with an active form of the virus, your body should be equipped to fight it before it makes you ill.</p>\r\n</div>\r\n\r\n<div class=\"secand_part\">\r\n<h4>Vaccines in an outbreak</h4>\r\n\r\n<p>During unprecedented times, like the current coronavirus outbreak, vaccines must still go through the same process, but because the demand is higher a fast-tracked process is usually possible.</p>\r\n\r\n<p>&quot;Right now, health professionals around the globe are racing against the clock to get a vaccine for this virus. However, the issue is that creating a vaccine takes time. However, the fact that all efforts from health professionals around the globe will be focused on getting a vaccine could quicken the process,&quot; Mr Sagoo says.</p>\r\n\r\n<p>But in order to do this, scientists need to identify the exact strain of the virus causing the pandemic.</p>\r\n\r\n<p>&quot;Before any vaccine can be produced, the exact strain causing the epidemic or pandemic must be identified and isolated, as with any other vaccine production,&quot; Dr Gall explains.</p>\r\n<img alt=\"\" class=\"img-fluid\" src=\"assets/images/blog/single-blog-1.jpg\" />\r\n<p>Source: The Guardian</p>\r\n\r\n<p>&quot;Unfortunately, even in cases where an immunisation is desperately needed, it can take a long time to create one, and certain processes can only be accelerated so much before safety is compromised.</p>\r\n\r\n<p>&quot;Any vaccine, including those made for a mass outbreak, are produced in the same ways. However, Moderna, the company behind one of the current vaccines being trialled for COVID-19, uses mRNA technology - a faster method than traditional vaccines.&quot;</p>\r\n\r\n<p>Messenger RNA (mRNA) is a molecule found in cells which carries DNA codes from the nucleus to the cytoplasm, where a process called protein synthesis is carried out.</p>\r\n\r\n<p>&quot;The DNA sequence of the virus is transcribed into mRNA, meaning that the actual antigen of the virus itself isn&#39;t included in the vaccine,. Despite that, it still contains everything that the body needs to create specific antibodies to fight off the virus.&quot;</p>\r\n</div>\r\n\r\n<div class=\"single_blog_bottom\">\r\n<div class=\"justify-content-between m-0 row\">\r\n<div class=\"left\">\r\n<ul>\r\n	<li><a href=\"#\">vaccine</a></li>\r\n	<li><a href=\"#\">medicine</a></li>\r\n	<li><a href=\"#\">coronavirus</a></li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"right\">\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"post_navigation row\">\r\n<div class=\"col-6\"><a href=\"#\">Previous post</a>\r\n\r\n<h4>What can I do under the new rules?</h4>\r\n</div>\r\n\r\n<div class=\"col-6 text-right\"><a href=\"#\">Next post </a>\r\n\r\n<h4>Are you washing your hands properly?</h4>\r\n</div>\r\n</div>\r\n\r\n<div class=\"post_author\">\r\n<div class=\"media\">\r\n<div class=\"d-flex\"><img alt=\"\" class=\"rounded-circle\" src=\"assets/images/author.png\" /></div>\r\n\r\n<div class=\"media-body\">\r\n<h4>Sheryl Smith</h4>\r\n\r\n<h6>Pharmaceutical expert</h6>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ullam corporis suscipit laboriosam, nisi ut aliquid exam.</p>\r\n<a class=\"post\" href=\"#\">Articles</a>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"s_comment_list\">\r\n<h3>5 Comments</h3>\r\n\r\n<div class=\"s_comment_list_inner\">\r\n<div class=\"media\">\r\n<div class=\"d-flex\"><img alt=\"\" class=\"rounded-circle\" src=\"assets/images/comment/comment-1.png\" /></div>\r\n\r\n<div class=\"media-body\">\r\n<h4><a href=\"#\">Rebecca Sterling</a></h4>\r\n\r\n<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>\r\n\r\n<h6>3 hours ago</h6>\r\n<a class=\"text_btn\" href=\"#\">Reply </a>\r\n\r\n<div class=\"media\">\r\n<div class=\"d-flex\"><img alt=\"\" class=\"rounded-circle\" src=\"assets/images/comment/comment-2.png\" /></div>\r\n\r\n<div class=\"media-body\">\r\n<h4><a href=\"#\">Robert Kane</a></h4>\r\n\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>\r\n\r\n<h6>22 mins ago</h6>\r\n<a class=\"text_btn\" href=\"#\">Reply </a>\r\n\r\n<div class=\"media\">\r\n<div class=\"d-flex\"><img alt=\"\" class=\"rounded-circle\" src=\"assets/images/comment/comment-3.png\" /></div>\r\n\r\n<div class=\"media-body\">\r\n<h4><a href=\"#\">Liu Jackson</a></h4>\r\n\r\n<p>Similique sunt in culpa qui officia deserunt mollitia animi...</p>\r\n\r\n<h6>8 mins ago</h6>\r\n<a class=\"text_btn\" href=\"#\">Reply </a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"media\">\r\n<div class=\"d-flex\"><img alt=\"\" class=\"rounded-circle\" src=\"assets/images/comment/comment-4.png\" /></div>\r\n\r\n<div class=\"media-body\">\r\n<h4><a href=\"#\">Ian Gorkovszkij</a></h4>\r\n\r\n<p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</p>\r\n\r\n<h6>1 day ago</h6>\r\n<a class=\"text_btn\" href=\"#\">Reply </a>\r\n\r\n<div class=\"media\">\r\n<div class=\"d-flex\"><img alt=\"\" class=\"rounded-circle\" src=\"assets/images/comment/comment-5.png\" /></div>\r\n\r\n<div class=\"media-body\">\r\n<h4><a href=\"#\">Naomi Hill</a></h4>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio...</p>\r\n\r\n<h6>3 hours ago</h6>\r\n<a class=\"text_btn\" href=\"#\">Reply </a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"comment_box\">\r\n<h3>Leave your reply</h3>\r\n\r\n<form action=\"http://paul-themes.com/html/covid-19/contact_process.php\" id=\"contactForm\">\r\n<div class=\"col-md-6\">\r\n<div class=\"form-group\"><input name=\"name\" type=\"text\" /> Your Name</div>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<div class=\"form-group\"><input name=\"email\" type=\"text\" /> Your Email Address</div>\r\n</div>\r\n\r\n<div class=\"col-lg-12\">\r\n<div class=\"form-group\"><input name=\"subject\" type=\"text\" /> Subject</div>\r\n</div>\r\n\r\n<div class=\"col-lg-12\">\r\n<div class=\"form-group\"><textarea cols=\"30\" name=\"message\" rows=\"10\"></textarea>Your Message</div>\r\n</div>\r\n\r\n<div class=\"col-lg-12\">\r\n<div class=\"checkbox_field form-group\">\r\n<div class=\"checkbox\"><input name=\"check\" type=\"checkbox\" value=\"None\" /> Save my name, email, and website in this browser for the next time I comment.</div>\r\nPost Comment</div>\r\n</div>\r\n</form>\r\n</div>\r\n'),
(22, 1, 'What can I do under the new rules?', 'Prevention', '2020-06-08', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n'),
(23, 1, 'What you need to know about COVID-19 and pregnancy', 'Medicine', '2020-06-08', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n'),
(24, 1, 'How to treat COVID-19 coronavirus at home?', 'Medicine', '2020-06-08', '<p>Medical experts around the world are working around the clock to develop a vaccine for COVID-19 as it continues to spread around the globe. But how are vaccines made and when are we likely to have one for coronavirus? We all know that vaccines exist for o</p>\r\n'),
(25, 1, 'How to treat COVID-19 coronavirus at home?', 'Medicine', '2020-06-08', '<p>Medical experts around the world are working around the clock to develop a vaccine for COVID-19 as it continues to spread around the globe. But how are vaccines made and when are we likely to have one for coronavirus? We all know that vaccines exist for o</p>\r\n'),
(26, 1, 'How to treat COVID-19 coronavirus at home?', 'Medicine', '2020-06-08', '<p>Medical experts around the world are working around the clock to develop a vaccine for COVID-19 as it continues to spread around the globe. But how are vaccines made and when are we likely to have one for coronavirus? We all know that vaccines exist for o</p>\r\n'),
(27, 13, 'permission denied', 'Political News', '2020-06-09', '<p>edadawdawda</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phone_number`, `message`) VALUES
(1, 'Iqbal Al Mahdi', 'kucingmaboek.iam@gmail.com', '6289625770325', 'dadadwadwd'),
(8, 'Iqbal Al Mahdi', 'kucingmaboek.iam@gmail.com', '6289625770325', 'dawda'),
(9, 'Iqbal Al Mahdi', 'bambangsupraa@gmail.com', '6289625770325', 'eqadawda'),
(10, 'Iqbal Al Mahdi', 'kucingmaboek.iam@gmail.com', '89625770325', 'edasd'),
(11, 'KotaSaya', 'bambangsupraa@gmail.com', '6289625770325', 'cawcaw'),
(12, 'KotaSaya', 'bambangsupraa@gmail.com', '6289625770325', 'cawcaw'),
(13, 'amin', 'bambangsupraa@gmail.com', '6289625770325', 'dadawdaw'),
(14, 'Iqbal Al Mahdi', 'kucingmaboek.iam@gmail.com', '6289625770325', 'dawdad'),
(15, 'KotaSaya', 'kucingmaboek.iam@gmail.com', '89625770325', 'adwa'),
(16, 'KotaSaya', 'kucingmaboek.iam@gmail.com', '89625770325', 'adwa'),
(17, 'KotaSaya', 'kucingmaboek.iam@gmail.com', '89625770325', 'adwa'),
(18, 'KotaSaya', 'kucingmaboek.iam@gmail.com', '89625770325', 'adwa'),
(19, 'amin', 'bambangsupraa@gmail.com', '6289625770325', 'adawdaada'),
(20, 'amin', 'bambangsupraa@gmail.com', '6289625770325', 'adawdaada'),
(21, 'Iqbal Al Mahdi', 'bambangsupraa@gmail.com', '89625770325', 'awdad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Administrator','Doctor/Content Writer') NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `full_name`, `birth_date`, `address`, `email`, `phone_number`) VALUES
(1, 'admin', '$2y$10$p3l02D2qYK10ebDvm5v/m.PHOB2b5uHXHyKwXme703l3nrkXeOuiS', 'Administrator', 'admin', '2020-05-31', 'unknown', 'admin@gmail.com', '6289625770325'),
(13, 'kucingmaboek', '$2y$10$JOC.QjjqX.LvJ7zqUg1o6eCJDk010Ve/cRYUSU9Hmkk7cKndtM01S', 'Doctor/Content Writer', 'Iqbal Al-Mahdi', '2000-06-09', 'Jl.WR.Supratman 2 No 72', 'kucingmaboek.iam@gmail.com', '6289625770325');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authId` (`authId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`authId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
