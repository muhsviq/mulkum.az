-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Tem 2016, 11:07:36
-- Sunucu sürümü: 10.1.10-MariaDB
-- PHP Sürümü: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mulkum`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `con` int(4) NOT NULL,
  `ist_adi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `l_adi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ppp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`con`, `ist_adi`, `l_adi`, `ppp`, `ip`) VALUES
(1, 'WebCity Studio', 'admin', '3ec55e3c049224d3780b6a42b70fd11011215!@#$%7865****!@!%$$###', ''),
(3, 'news', 'news', '6f53690328ad845de23568599480fe6b11215!@#$%7865****!@!%$$###', ''),
(4, 'kamal Quliyev', 'kamal', 'c6c9f40900ef6c0e12a71070e62a7a2e11215!@#$%7865****!@!%$$###', ''),
(5, 'vefa', 'vefa', 'e76e24e1629f4ea722e07810fe84243f11215!@#$%7865****!@!%$$###', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(5) NOT NULL,
  `m_id` int(2) NOT NULL,
  `a_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `m_id`, `a_id`) VALUES
(94, 16, 1),
(93, 14, 1),
(40, 10, 3),
(50, 10, 4),
(92, 13, 1),
(91, 12, 1),
(90, 7, 1),
(89, 6, 1),
(88, 5, 1),
(87, 3, 1),
(78, 4, 5),
(95, 17, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `a_menu`
--

CREATE TABLE `a_menu` (
  `id` int(5) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `url_tag` varchar(30) CHARACTER SET utf8 NOT NULL,
  `link` varchar(40) CHARACTER SET utf8 NOT NULL,
  `sub_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `a_menu`
--

INSERT INTO `a_menu` (`id`, `name`, `url_tag`, `link`, `sub_id`) VALUES
(3, 'Adminlər', 'admin', '?menu=admin', 0),
(5, 'Səhifələr', 'pages', '?menu=pages', 0),
(6, 'Yuxarı', 'yuxari', '?menu=pages&tip=yuxari', 5),
(7, 'Aşağı', 'sol', '?menu=pages&tip=sol', 5),
(16, 'Yuxarı slider', 'topslider', '?menu=topslider&tip=1&p_id=1', 0),
(12, 'Məhsullar', 'product', '?menu=product', 0),
(13, 'Məhsullar', 'product', '?menu=product', 12),
(14, 'Kateqoriyalar', 'category', '?menu=category', 12),
(17, 'product_photo', 'product_photo', '?menu=product_photo', 12);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `id` int(4) NOT NULL,
  `l_id` tinyint(4) NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `date` datetime NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`id`, `l_id`, `text`, `status`, `tip`, `ordering`, `date`, `u_id`) VALUES
(1, 1, '<p><img src="../uploads/left_blok/left_blok1.jpg" alt="" width="188" height="131" /></p>', 1, 1, 1, '2013-02-05 16:31:44', 1),
(2, 2, '<p><img src="../uploads/left_blok/left_blok1.jpg" alt="" width="188" height="131" /></p>', 1, 1, 1, '2013-02-05 16:31:44', 1),
(3, 3, '<p><img src="../uploads/left_blok/left_blok1.jpg" alt="" width="188" height="131" /></p>', 1, 1, 1, '2013-02-05 16:31:44', 1),
(4, 1, '<p><img src="../uploads/left_blok/left_blok2.jpg" alt="" width="188" height="131" /></p>', 0, 1, 1, '2013-02-05 16:32:36', 2),
(5, 2, '<p><img src="../uploads/left_blok/left_blok2.jpg" alt="" width="188" height="131" /></p>', 0, 1, 2, '2013-02-05 16:32:36', 2),
(6, 3, '<p><img src="../uploads/left_blok/left_blok2.jpg" alt="" width="188" height="131" /></p>', 0, 1, 2, '2013-02-05 16:32:36', 2),
(7, 1, '<p><img src="../uploads/left_blok/left_blok3.jpg" alt="" width="188" height="131" /></p>', 0, 1, 2, '2013-02-05 16:32:58', 3),
(8, 2, '<p><img src="../uploads/left_blok/left_blok3.jpg" alt="" width="188" height="131" /></p>', 0, 1, 2, '2013-02-05 16:32:58', 3),
(9, 3, '<p><img src="../uploads/left_blok/left_blok3.jpg" alt="" width="188" height="131" /></p>', 0, 1, 3, '2013-02-05 16:32:58', 3),
(10, 1, '<p><img src="../uploads/right_blok/right_blok1.jpg" alt="" width="192" height="171" /></p>', 0, 2, 3, '2013-02-05 16:35:35', 4),
(11, 2, '<p><img src="../uploads/right_blok/right_blok1.jpg" alt="" width="192" height="171" /></p>', 0, 2, 3, '2013-02-05 16:35:35', 4),
(12, 3, '<p><img src="../uploads/right_blok/right_blok1.jpg" alt="" width="192" height="171" /></p>', 0, 2, 3, '2013-02-05 16:35:35', 4),
(13, 1, '<p><img src="../uploads/right_blok/right_blok2.jpg" alt="" width="192" height="171" /></p>', 0, 2, 4, '2013-02-05 16:38:01', 5),
(14, 2, '<p><img src="../uploads/right_blok/right_blok2.jpg" alt="" width="192" height="171" /></p>', 0, 2, 4, '2013-02-05 16:38:01', 5),
(15, 3, '<p><img src="../uploads/right_blok/right_blok2.jpg" alt="" width="192" height="171" /></p>', 0, 2, 4, '2013-02-05 16:38:01', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilet`
--

CREATE TABLE `bilet` (
  `id` int(4) NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(4) NOT NULL,
  `url_tag` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `qiymet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `istiqamet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aviakompaniya` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `klass` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `bilet`
--

INSERT INTO `bilet` (`id`, `text`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`, `url_tag`, `title`, `keyword`, `description`, `qiymet`, `istiqamet`, `aviakompaniya`, `klass`) VALUES
(1273, '', 3, 0, 0, 2, '2015-07-16', 1, '', '', '', '', '', '', '', ''),
(1274, '<p>ftiyguhknjm huijoklnredhfuijkgnrfdhfitjg trfdhgjiovkml54r fdgvh4iurejklmfd gtrgyfduhixjkcfm rgfhduivxcjk&nbsp;ftiyguhknjm huijoklnredhfuijkgnrfdhfitjg trfdhgjiovkml54r fdgvh4iurejklmfd gtrgyfduhixjkcfm rgfhduivxcjk&nbsp;ftiyguhknjm huijoklnredhfuijkgnrfdhfitjg trfdhgjiovkml54r fdgvh4iurejklmfd gtrgyfduhixjkcfm rgfhduivxcjk&nbsp;ftiyguhknjm huijoklnredhfuijkgnrfdhfitjg trfdhgjiovkml54r fdgvh4iurejklmfd gtrgyfduhixjkcfm rgfhduivxcjk&nbsp;ftiyguhknjm huijoklnredhfuijkgnrfdhfitjg trfdhgjiovkml54r fdgvh4iurejklmfd gtrgyfduhixjkcfm rgfhduivxcjk&nbsp;</p>', 1, 0, 0, 1, '2015-07-16', 2, 'tyvuykjhbk', 'vuybhjnk', 'uyghjkn', 'ytfukgbjkn', '800', 'Azərbaycan-Türkiyə', 'khgcfnmnb ', 'hugyibhkj'),
(1272, '', 2, 0, 0, 2, '2015-07-16', 1, '', '', '', '', '', '', '', ''),
(1271, '<p>hyuhruivohrsoguvrhgvgr uvhbruv bvobf vbduv b vbfubvhfbv bovbxhfvbxjhbvhj vbfvxhbvhjxkvb bvfshvbfxhvbsoibv bvohvbiudflzbvhx vfifhaeui hbjfklgb lhgvfkljhkjgalzdhgsf ghaeuirogehiaueh haiphga guhjkfnbcjxbv hfdzjlkbvjkszf hfdzlkghjbvezdliuhj hgvbueildfzkjhv hfdllzjkcxn hdfzjkncmhfdj hsfgdjkvncmh fhdvjnckm hdfjvkncm hufgdjvkncxm hfdvjkncxm hfudvjkncxm hufidjvxkncm</p>', 1, 0, 0, 2, '2015-07-16', 1, 'gitrotbm', 'gortn', 'bngjbnd', 'iogbngjf', '600', 'Azərbaycan-Türkiyə', 'vxcjhvjbnm', 'fytguigiukjb'),
(1275, '', 2, 0, 0, 1, '2015-07-16', 2, '', '', '', '', '', '', '', ''),
(1276, '', 3, 0, 0, 1, '2015-07-16', 2, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_cat`
--

CREATE TABLE `blog_cat` (
  `id` int(11) NOT NULL,
  `sub_id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(11) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(11) NOT NULL,
  `url_tag` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `blog_cat`
--

INSERT INTO `blog_cat` (`id`, `sub_id`, `name`, `text`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`, `url_tag`, `title`, `keyword`, `description`, `photo`) VALUES
(24, 0, '', '', 3, 0, 0, 10, '2015-07-31', 1, '', '', '', '', ''),
(23, 0, '', '', 2, 0, 0, 10, '2015-07-31', 1, '', '', '', '', ''),
(22, 0, 'bbbbb', '', 1, 0, 0, 10, '2015-07-31', 1, 'bbbbb', 'bbbbb', 'bbbbb', 'bbbbb', ''),
(25, 0, 'aaaaa', '', 1, 0, 0, 20, '2015-07-31', 2, 'aaaaa', '', '', '', ''),
(26, 0, '', '', 2, 0, 0, 20, '2015-07-31', 2, '', '', '', '', ''),
(27, 0, '', '', 3, 0, 0, 20, '2015-07-31', 2, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blok`
--

CREATE TABLE `blok` (
  `id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(4) NOT NULL,
  `url_tag` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `text2` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkbox` int(2) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `blok`
--

INSERT INTO `blok` (`id`, `name`, `text`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`, `url_tag`, `title`, `keyword`, `description`, `text2`, `photo`, `checkbox`, `cat_id`) VALUES
(1, 'udgcvehcvbe', '<p>tfycutyfvuyugdbhed gfewyudsj, aweygsudjxkcv dfcfgdfujkbcvnfvydfjcvn &nbsp;fetysvdujcfwe gdsbjcfegsuydcj fetysdhjxbc sfygdujhb&nbsp;tfycutyfvuyugdbhed gfewyudsj, aweygsudjxkcv dfcfgdfujkbcvnfvydfjcvn &nbsp;fetysvdujcfwe gdsbjcfegsuydcj fetysdhjxbc sfygdujhb&nbsp;tfycutyfvuyugdbhed gfewyudsj, aweygsudjxkcv dfcfgdfujkbcvnfvydfjcvn &nbsp;fetysvdujcfwe gdsbjcfegsuydcj fetysdhjxbc sfygdujhb &nbsp;tfycutyfvuyugdbhed gfewyudsj, aweygsudjxkcv dfcfgdfujkbcvnfvydfjcvn &nbsp;fetysvdujcfwe gdsbjcfegsuydcj fetysdhjxbc sfygdujhbtfycutyfvuyugdbhed gfewyudsj, aweygsudjxkcv dfcfgdfujkbcvnfvydfjcvn &nbsp;fetysvdujcfwe gdsbjcfegsuydcj fetysdhjxbc sfygdujhb&nbsp;tfycutyfvuyugdbhed gfewyudsj, aweygsudjxkcv dfcfgdfujkbcvnfvydfjcvn &nbsp;fetysvdujcfwe gdsbjcfegsuydcj fetysdhjxbc sfygdujhb&nbsp;tfycutyfvuyugdbhed gfewyudsj, aweygsudjxkcv dfcfgdfujkbcvnfvydfjcvn &nbsp;fetysvdujcfwe gdsbjcfegsuydcj fetysdhjxbc sfygdujhb&nbsp;</p>', 1, 0, 0, 10, '2015-07-31', 1, ' fxuyhbjn', 'tyvubink', 'dtfuyguhi', 'drtufygubhjkn', '<p>tfycutyfvuyugdbhed gfewyudsj, aweygsudjxkcv dfcfgdfujkbcvnfvydfjcvn &nbsp;fetysvdujcfwe gdsbjcfegsuydcj fetysdhjxbc sfygdujhb</p>', 'products/816148455bb66e549f69.jpg', 0, 1),
(2, '', '', 2, 0, 0, 10, '2015-07-31', 1, '', '', '', '', '', 'products/816148455bb66e549f69.jpg', 0, 1),
(3, '', '', 3, 0, 0, 10, '2015-07-31', 1, '', '', '', '', '', 'products/816148455bb66e549f69.jpg', 0, 1),
(4, 'mkdhhfgerv uyfgreuyfg', '<p>fgeyfucgeycge cgefcyuuegcuydz gcyducgduzcgv cg uydach cvdzk hdulszich bdzkcgdzilch dzcvduzihcb caauygcha casgdcuxc hbszhdz h&nbsp;fgeyfucgeycge cgefcyuuegcuydz gcyducgduzcgv cg uydach cvdzk hdulszich bdzkcgdzilch dzcvduzihcb caauygcha casgdcuxc hbszhdz h&nbsp;fgeyfucgeycge cgefcyuuegcuydz gcyducgduzcgv cg uydach cvdzk hdulszich bdzkcgdzilch dzcvduzihcb caauygcha casgdcuxc hbszhdz h&nbsp;fgeyfucgeycge cgefcyuuegcuydz gcyducgduzcgv cg uydach cvdzk hdulszich bdzkcgdzilch dzcvduzihcb caauygcha casgdcuxc hbszhdz h&nbsp;fgeyfucgeycge cgefcyuuegcuydz gcyducgduzcgv cg uydach cvdzk hdulszich bdzkcgdzilch dzcvduzihcb caauygcha casgdcuxc hbszhdz h&nbsp;fgeyfucgeycge cgefcyuuegcuydz gcyducgduzcgv cg uydach cvdzk hdulszich bdzkcgdzilch dzcvduzihcb caauygcha casgdcuxc hbszhdz h</p>', 1, 0, 0, 20, '2015-07-31', 2, 'bcsdjh', 'bchdsjk', 'byugdc', 'cbdsukcsj', '<p>fgeyfucgeycge cgefcyuuegcuydz gcyducgduzcgv cg uydach cvdzk hdulszich bdzkcgdzilch dzcvduzihcb caauygcha casgdcuxc hbszhdz hyuedgyd 3dgwyduiedf ewyfcewica&nbsp;</p>', 'products/918668555bb669f24d4f.jpg', 0, 1),
(5, '', '', 2, 0, 0, 20, '2015-07-31', 2, '', '', '', '', '', 'products/918668555bb669f24d4f.jpg', 0, 1),
(6, '', '', 3, 0, 0, 20, '2015-07-31', 2, '', '', '', '', '', 'products/918668555bb669f24d4f.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `coment`
--

CREATE TABLE `coment` (
  `id` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `page_id` int(2) NOT NULL,
  `mehsul_id` int(4) NOT NULL,
  `sub_id` int(4) NOT NULL,
  `s_id` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `coment`
--

INSERT INTO `coment` (`id`, `name`, `email`, `text`, `date`, `page_id`, `mehsul_id`, `sub_id`, `s_id`) VALUES
(6, 'aygun', 'vusaleehmedli42@gmail.com', 'Qiymeti diyinde zehmet olmasa', '2016-01-05', 2, 35, 0, 1),
(7, 'azad', 'muji73@mail.ru', 'salam. zehmet olmasa deyin candela pro aleksandrit lazer aparati neceyedir?', '2016-01-05', 2, 36, 0, 1),
(5, 'Arzu Aliyeva', '', 'Arendaya aparat verirsiniz? Ve ayl?g neceye? Baha oldugu ucun ala bilmirem i?leyib ayl?g ödeni? ederem tel. 0504309956', '2015-11-27', 2, 36, 0, 1),
(8, 'emin', 'kengerli.emin@mail.ru', 'salam meni maraqlqndiran mesele budur ki siz aparar ve avadanliqlarinizi muqavile ile gozellik salonlarina verirsiniz', '2016-01-05', 2, 36, 0, 1),
(9, 'Vuqar', 'vugar82@gmail.com', 'Salam.bu aparatin qiymeti neceyedir?ve hansi shertlerle verirsiz?ish prinsipini ve servisini deyerdiz mene.', '2016-01-08', 2, 37, 0, 1),
(10, 'Melek', '1984_m@bk.ru', 'Salam qiymeti necedi bu aletin?', '2016-01-09', 2, 148, 0, 1),
(11, 'babak', 'gasanlib@mail.ru', 'salam,narahat etdiyime gore pardon  bunun son qiymetini zehmet olmasa qeyd ederdiz,240 idi son defe soruwanda,son qiymeti nece olacaq ve edednen satilirmi ve qiymeti zehmet olmasa. Babek h.', '2016-01-28', 2, 113, 0, 1),
(12, 'Amil', 'dramilaliyev28@gmail.com', 'Qiym?ti?', '2016-04-15', 2, 1, 0, 1),
(13, 'farida', 'fat.73@mail.ru', 'qiymeti', '2016-05-01', 2, 56, 0, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `elan`
--

CREATE TABLE `elan` (
  `id` int(50) NOT NULL,
  `s_id` int(50) NOT NULL,
  `v_tarix` datetime NOT NULL,
  `a_tarix` date NOT NULL,
  `baxis_say` int(50) NOT NULL,
  `r_id` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `u_id` int(50) NOT NULL,
  `erazi_id` varchar(50) NOT NULL,
  `nov_id` int(50) NOT NULL,
  `mertebe` int(3) NOT NULL,
  `mertebe_say` int(3) NOT NULL,
  `sahe` int(50) NOT NULL,
  `otaq_say` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `kiraye_dovru` int(11) NOT NULL,
  `emlak_sened` int(11) NOT NULL,
  `elan_nov` int(11) NOT NULL,
  `valyuta` int(1) NOT NULL,
  `qiymet` float NOT NULL,
  `kredit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `elan`
--

INSERT INTO `elan` (`id`, `s_id`, `v_tarix`, `a_tarix`, `baxis_say`, `r_id`, `email`, `u_id`, `erazi_id`, `nov_id`, `mertebe`, `mertebe_say`, `sahe`, `otaq_say`, `text`, `kiraye_dovru`, `emlak_sened`, `elan_nov`, `valyuta`, `qiymet`, `kredit`) VALUES
(15, 1, '2016-07-13 12:09:51', '0000-00-00', 0, 1, 'mushviq.manafli@gmail.com', 20, '0', 2, 2, 3, 80, 3, 'Esyalari var, lorem ipsum dor sit amet,consectotur adipisicing', 2, 0, 0, 1, 350, 0),
(43, 1, '2016-07-13 17:06:17', '0000-00-00', 0, 1, 'mirt@mirtoglu.insaat', 48, '1', 1, 2, 3, 90, 2, 'ev cox bomba evdi. kondisionerinden tutmus hamamina qeder var :D', 0, 1, 0, 2, 100000, 0),
(50, 1, '2016-07-13 17:34:37', '0000-00-00', 0, 0, '', 56, '0', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(51, 1, '2016-07-13 17:35:45', '0000-00-00', 0, 2, 'hesterxan@burdayam.kelem', 57, '1', 2, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(52, 1, '2016-07-13 19:22:53', '0000-00-00', 0, 1, 'hesterxan@burdayam.kele', 58, '1', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(53, 1, '2016-07-13 19:38:39', '0000-00-00', 0, 1, 'hesterxan@burdayam.kel', 59, '1', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(54, 1, '2016-07-13 19:41:37', '0000-00-00', 0, 1, 'hesterxan@burdayam.kel', 53, '1', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(55, 1, '2016-07-13 19:44:20', '0000-00-00', 0, 0, '', 56, '0', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(56, 1, '2016-07-13 19:44:24', '0000-00-00', 0, 1, 'hesterxan@burdayam.kel', 59, '1', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(57, 1, '2016-07-13 19:44:45', '0000-00-00', 0, 1, 'hesterxan@burdayam.kel', 59, '1', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(58, 1, '2016-07-13 20:06:16', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '1', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(59, 1, '2016-07-13 20:07:47', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '1', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(60, 1, '2016-07-13 20:08:29', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '1', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(61, 1, '2016-07-13 20:09:17', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '1', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(62, 1, '2016-07-13 20:10:42', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '4', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(63, 1, '2016-07-13 20:11:28', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '2', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(64, 1, '2016-07-13 20:16:21', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '2', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(65, 1, '2016-07-13 20:17:37', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '2', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(66, 1, '2016-07-13 20:18:22', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '2', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(67, 1, '2016-07-13 20:24:11', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '2', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(68, 1, '2016-07-13 20:25:07', '0000-00-00', 0, 2, 'hesterxan@burdayam.test', 60, '2,1,1', 1, 1, 3, 90, 3, 'lorem impsum sit amet', 2, 0, 0, 1, 600, 0),
(69, 1, '2016-07-19 16:31:33', '0000-00-00', 0, 0, 'c@Q.d', 61, '4', 0, 0, 0, 0, 0, 'XSC', 0, 0, 0, 0, 0, 0),
(70, 1, '2016-07-19 16:32:59', '0000-00-00', 0, 0, 'c@Q.d', 61, '0,0,0', 0, 0, 0, 0, 0, 'XSC', 0, 0, 0, 0, 0, 0),
(71, 1, '2016-07-19 16:33:27', '0000-00-00', 0, 0, 'c@Q.d', 61, '0,0,0', 0, 0, 0, 0, 0, 'XSC', 0, 0, 0, 0, 0, 0),
(72, 1, '2016-07-19 16:36:10', '0000-00-00', 0, 0, 'c@Q.d', 61, '0,0,0', 0, 0, 0, 0, 0, 'XSC', 0, 0, 0, 0, 0, 0),
(73, 1, '2016-07-19 16:36:25', '0000-00-00', 0, 0, 'c@Q.d', 61, '0,0,0', 0, 0, 0, 0, 0, 'XSC', 0, 0, 0, 0, 0, 0),
(74, 1, '2016-07-19 16:37:09', '0000-00-00', 0, 0, 'c@Q.d', 61, '0,0,0', 0, 0, 0, 0, 0, 'XSC', 0, 0, 0, 0, 0, 0),
(75, 1, '2016-07-19 16:37:43', '0000-00-00', 0, 0, 'c@Q.d', 61, '0,0,0', 0, 0, 0, 0, 0, 'XSC', 0, 0, 0, 0, 0, 0),
(76, 1, '2016-07-19 17:18:46', '0000-00-00', 0, 0, 'c@Q.d', 61, '0,0,0', 0, 0, 0, 0, 0, 'XSC', 0, 0, 0, 0, 0, 0),
(77, 1, '2016-07-19 17:31:27', '0000-00-00', 0, 0, 'c@Q.d', 61, '0,0,0', 0, 0, 0, 0, 0, 'XSC', 0, 0, 0, 0, 0, 0),
(78, 1, '2016-07-19 17:32:15', '0000-00-00', 0, 0, 'c@Q.d', 61, '0,0,0', 0, 0, 0, 0, 0, 'XSC', 0, 0, 0, 0, 0, 0),
(79, 1, '2016-07-19 18:28:05', '0000-00-00', 0, 0, 'ds@d.r', 62, '4', 0, 0, 0, 0, 0, 'dscsd', 0, 0, 0, 0, 0, 0),
(82, 1, '2016-07-22 19:02:15', '0000-00-00', 0, 1, 'xosqedem@kinder.ri', 64, '4', 2, 2, 3, 100, 3, 'Lorem ipsum sit amet', 2, 0, 0, 1, 400, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `elan_photo`
--

CREATE TABLE `elan_photo` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `elan_photo`
--

INSERT INTO `elan_photo` (`id`, `photo`, `e_id`) VALUES
(2, 'Screenshot_2.png', 0),
(3, 'Screenshot_2.png', 0),
(4, 'images/Screenshot_2.png', 0),
(5, 'images/Screenshot_2.png', 0),
(6, 'images2/Screenshot_2.png', 0),
(7, 'images3/Screenshot_2.png', 0),
(8, 'images/Portugal-beat-France-to-win-Euro-2016.jpg', 0),
(9, 'images2/Portugal-beat-France-to-win-Euro-2016.jpg', 0),
(10, 'images3/Portugal-beat-France-to-win-Euro-2016.jpg', 0),
(11, 'images/Portugal-beat-France-to-win-Euro-2016.jpg', 0),
(12, 'images2/Portugal-beat-France-to-win-Euro-2016.jpg', 0),
(13, 'images3/Portugal-beat-France-to-win-Euro-2016.jpg', 0),
(14, 'images/Portugal-beat-France-to-win-Euro-2016.jpg', 78),
(15, 'images2/Portugal-beat-France-to-win-Euro-2016.jpg', 78),
(16, 'images3/Portugal-beat-France-to-win-Euro-2016.jpg', 78),
(17, 'images/Screenshot_2.png', 79),
(18, 'images2/Screenshot_2.png', 79),
(19, 'images3/Screenshot_2.png', 79),
(20, 'images/Cristiano-Ronaldo-wallpaper-by-Jafarjeef.jp', 82),
(21, 'images2/Cristiano-Ronaldo-wallpaper-by-Jafarjeef.j', 82),
(22, 'images3/Cristiano-Ronaldo-wallpaper-by-Jafarjeef.j', 82);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `elan_status`
--

CREATE TABLE `elan_status` (
  `id` int(50) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `email`
--

CREATE TABLE `email` (
  `id` int(4) NOT NULL,
  `s_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `n` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `email`
--

INSERT INTO `email` (`id`, `s_id`, `email`, `tel`, `n`) VALUES
(665, 0, 'ooooo@gmail.com', '', 0),
(666, 0, 'qqqqqq@gmail.com', '', 0),
(667, 0, 'orxan.sedili@mail.ru', '', 0),
(692, 0, 'ooooo@gmail.com', '', 0),
(693, 0, 'a_ehedov@mail.ru', '', 0),
(694, 0, 'ooooo@gmail.com', '', 0),
(695, 0, 'ooooo@gmail.com', '', 0),
(696, 0, 'ooooo@gmail.com', '0558989989', 1),
(697, 0, 'qqqqqq@gmail.com', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `emlak_nov`
--

CREATE TABLE `emlak_nov` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `s_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `emlak_nov`
--

INSERT INTO `emlak_nov` (`id`, `name`, `s_id`) VALUES
(1, 'Yeni tikili', 0),
(2, 'Kohne tikili', 0),
(3, 'Gundelik ev', 0),
(4, 'Ofis', 0),
(5, 'Heyet evi/Villa', 0),
(6, 'Obyekt', 0),
(7, 'Bag', 0),
(8, 'Qaraj', 0),
(9, 'Torpaq', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `erazi`
--

CREATE TABLE `erazi` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub_id` int(50) NOT NULL,
  `tip` int(50) NOT NULL,
  `s_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `erazi`
--

INSERT INTO `erazi` (`id`, `name`, `sub_id`, `tip`, `s_id`) VALUES
(1, 'Azerbaycan', 0, 1, 0),
(2, 'Turkiye', 0, 1, 0),
(3, 'Baki', 1, 2, 0),
(4, 'Aghdash', 1, 2, 0),
(5, 'Nerimanov', 3, 3, 0),
(6, 'Ankara', 2, 2, 0),
(7, 'Istanbul', 2, 2, 0),
(8, 'Xetai', 3, 3, 0),
(9, 'Genclik', 5, 4, 0),
(10, 'N.Nerimanov', 5, 4, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery`
--

CREATE TABLE `gallery` (
  `id` int(4) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `s_id` int(4) NOT NULL,
  `ordering` int(5) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `link` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `checkbox` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery_photo`
--

CREATE TABLE `gallery_photo` (
  `id` int(111) NOT NULL,
  `gal_id` int(111) NOT NULL,
  `img_src` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gal_cat`
--

CREATE TABLE `gal_cat` (
  `id` int(11) NOT NULL,
  `sub_id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(11) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(11) NOT NULL,
  `url_tag` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `gal_cat`
--

INSERT INTO `gal_cat` (`id`, `sub_id`, `name`, `text`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`, `url_tag`, `title`, `keyword`, `description`, `photo`) VALUES
(12, 0, '', '', 3, 0, 0, 20, '2015-07-06', 2, '', '', '', '', ''),
(11, 0, '', '', 2, 0, 0, 20, '2015-07-06', 2, '', '', '', '', ''),
(10, 0, 'sdsdsssssssdsds', '', 1, 0, 0, 20, '2015-07-06', 2, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ip_error`
--

CREATE TABLE `ip_error` (
  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datime` datetime NOT NULL,
  `say` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `ip_error`
--

INSERT INTO `ip_error` (`ip`, `datime`, `say`) VALUES
('::1', '2016-05-11 12:37:20', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int(4) NOT NULL,
  `u_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ordering` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `nomre` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `langs`
--

CREATE TABLE `langs` (
  `id` int(4) NOT NULL,
  `lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `langs`
--

INSERT INTO `langs` (`id`, `lang`, `tip`, `status`) VALUES
(1, 'az', 0, 0),
(2, 'ru', 1, 0),
(3, 'en', 0, 0),
(4, 'tr', 0, 1),
(6, 's', 0, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `linkler`
--

CREATE TABLE `linkler` (
  `id` int(4) NOT NULL,
  `u_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ordering` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(4) NOT NULL,
  `sub_id` int(4) NOT NULL,
  `l_id` tinyint(4) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `date` datetime NOT NULL,
  `u_id` int(11) NOT NULL,
  `url_tag` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `olke`
--

CREATE TABLE `olke` (
  `id` int(11) NOT NULL,
  `sub_id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `ordering` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_no` int(5) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `s_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tarix` date NOT NULL,
  `odenilecek_mebleq` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `name`, `s_name`, `address`, `phone`, `email`, `user_id`, `tarix`, `odenilecek_mebleq`) VALUES
(12546, 86933, 'eeeee', 'eeeeeeeeeee', 'eeeeeeeeeeeee', '66666666666', 'eeeee@gmail.com', 5, '2015-08-30', 0),
(12547, 69527, 'ooooo', 'oooooo', 'oooooo', '111111111111', 'oooo@gmail.com', 6, '2015-08-30', 0),
(12548, 66681, 'ooo', 'ooo', 'ooo', '454545', 'oooo@gmail.com', 5, '2015-08-30', 0),
(12549, 55844, 'ooo', 'ooo', 'ooo', '454545', 'oooo@gmail.com', 0, '2015-08-30', 0),
(12550, 38082, 'ooo', 'ooo', 'ooo', '454545', 'oooo@gmail.com', 0, '2015-08-30', 0),
(12551, 99035, 'pppppppppp', 'ppppppppp', 'pppppppppp', '515645612', 'orxan.sedili@gmail.com', 5, '2015-08-30', 0),
(12552, 31641, 'oooooo', 'oooooooooo', 'ppppppppppppp', '5623095623', 'orxan.sedili@gmail.com', 5, '2015-08-30', 0),
(12553, 34669, 'oooooo', 'oooooooooo', 'ppppppppppppp', '5623095623', 'orxan.sedili@gmail.com', 0, '2015-08-30', 0),
(12554, 51116, 'oooooo', 'oooooooooo', 'ppppppppppppp', '5623095623', 'orxan.sedili@gmail.com', 0, '2015-08-30', 0),
(12555, 99380, 'oooooo', 'oooooooooo', 'ppppppppppppp', '5623095623', 'orxan.sedili@gmail.com', 0, '2015-08-30', 0),
(12556, 92874, 'oooooo', 'oooooooooo', 'ppppppppppppp', '5623095623', 'orxan.sedili@gmail.com', 0, '2015-08-30', 0),
(12557, 11664, 'oooooo', 'oooooooooo', 'ppppppppppppp', '5623095623', 'orxan.sedili@gmail.com', 0, '2015-08-30', 0),
(12558, 35436, 'oooooo', 'oooooooooo', 'ppppppppppppp', '5623095623', 'orxan.sedili@gmail.com', 0, '2015-08-30', 0),
(12559, 31004, 'oooooo', 'oooooooooo', 'ppppppppppppp', '5623095623', 'orxan.sedili@gmail.com', 0, '2015-08-30', 0),
(12560, 78953, 'oooooo', 'oooooooooo', 'ppppppppppppp', '5623095623', 'orxan.sedili@gmail.com', 0, '2015-08-30', 0),
(12561, 27194, 'oooooo', 'oooooooooo', 'ppppppppppppp', '5623095623', 'orxan.sedili@gmail.com', 0, '2015-08-30', 0),
(12562, 87274, 'orxan', 'sedili', 'refnjdkmcx', '4548941653', 'orxan.sedili@gmail.com', 5, '2015-08-30', 0),
(12563, 51923, 'orxan', 'sedili', 'refnjdkmcx', '4548941653', 'orxan.sedili@gmail.com', 0, '2015-08-30', 0),
(12564, 82419, 'orxan', 'sedili', 'refnjdkmcx', '4548941653', 'orxan.sedili@gmail.com', 0, '2015-08-30', 2526),
(12565, 37976, 'orxan', 'sedili', 'oooooo', '0558888888', 'orxan.sedili@gmail.com', 6, '2015-08-30', 4760),
(12566, 19721, 'orxan', 'sedili', 'oooooo', '0558888888', 'orxan.sedili@gmail.com', 5, '2015-08-30', 4760),
(12567, 89098, 'oooo', 'oooooo', 'oooooo', '79845210', 'oooo@gmail.com', 0, '2015-08-30', 0),
(12568, 99856, 'orxan', 'sedili', 'uuuuu', '13131313', 'orxan.sedili@mail.ru', 6, '2015-08-30', 4760),
(12569, 54778, 'orxan', 'sedili', 'kokokkokok', '87878777', 'orxan.sedili@gmail.com', 14, '2015-09-09', 1739),
(12570, 86393, 'orxan', 'sedili', 'lplpl', '9898898', 'orxan.sedili@gmail.com', 14, '2015-09-09', 0),
(12571, 49056, 'htbm,l', 'ugivrnejkdf', 'njkdfml', '545456454', 'oooo@gmail.com', 14, '2015-09-09', 0),
(12572, 14681, 'ooooo', 'oooooo', 'ooooooo', '77777777', 'ooooo@gmail.com', 14, '2015-09-09', 8420),
(12573, 85126, 'ruslan', 'axundov', 'akdbahdjadhnjk', '3414646456', 'admin@arash-holding.az', 15, '2015-09-10', 0),
(12574, 26628, 'uhhuhh', 'ijiji', 'hbhjbk', '7878787', 'oooo@gmail.com', 14, '2015-09-10', 1684),
(12575, 88564, 'sfsdfs', 'sdfsfsdf', 'sfsdfsdf', '1315613456358', 'admin@arash-holding.az', 15, '2015-09-11', 0),
(12576, 80820, 'orxan', 'sedili', 'oooooo', '888888', 'orxan.sedili@gmail.com', 5, '2015-09-15', 0),
(12577, 34175, 'orxan', 'sedili', 'uuuuuuuu', '1111111111', 'oooo@gmail.com', 5, '2015-09-15', 1007),
(12578, 57501, 'orxan', 'sedili', 'oooooo', '78787787', 'orxan.sedili@gmail.com', 5, '2015-09-15', 22),
(12579, 52111, 'orxan', 'oooooo', 'oooooo', '878778', 'orxan.sedili@mail.ru', 5, '2015-09-15', 787),
(12580, 67438, 'ALishan', 'Mirze', 'asdasd', '2541222', 'alishan_m@yahoo.com', 8, '2015-09-17', 44);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order_product`
--

CREATE TABLE `order_product` (
  `id` int(7) NOT NULL,
  `o_id` int(11) NOT NULL,
  `p_id` int(4) NOT NULL,
  `say` tinyint(3) NOT NULL,
  `qiymet` float NOT NULL,
  `s_id` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `order_product`
--

INSERT INTO `order_product` (`id`, `o_id`, `p_id`, `say`, `qiymet`, `s_id`) VALUES
(13506, 0, 1, 2, 0, 1),
(13507, 0, 2, 2, 0, 1),
(13508, 0, 1, 4, 55, 1),
(13509, 0, 2, 2, 787, 1),
(13510, 0, 1, 1, 55, 1),
(13511, 0, 1, 1, 55, 1),
(13512, 0, 1, 1, 55, 1),
(13513, 0, 1, 1, 55, 1),
(13514, 0, 1, 1, 55, 1),
(13515, 0, 1, 1, 55, 1),
(13516, 0, 1, 1, 55, 1),
(13517, 0, 1, 1, 55, 1),
(13518, 0, 1, 1, 55, 1),
(13519, 0, 1, 1, 55, 1),
(13520, 0, 1, 1, 55, 1),
(13521, 0, 1, 1, 55, 1),
(13522, 0, 1, 1, 55, 1),
(13523, 12561, 1, 1, 55, 1),
(13524, 12562, 1, 3, 55, 1),
(13525, 12562, 2, 3, 787, 1),
(13526, 12563, 1, 3, 55, 1),
(13527, 12563, 2, 3, 787, 1),
(13528, 12564, 1, 3, 55, 1),
(13529, 12564, 2, 3, 787, 1),
(13530, 12565, 1, 15, 55, 1),
(13531, 12565, 2, 5, 787, 1),
(13532, 12566, 1, 15, 55, 1),
(13533, 12566, 2, 5, 787, 1),
(13534, 12568, 1, 15, 55, 1),
(13535, 12568, 2, 5, 787, 1),
(13536, 12569, 1, 3, 55, 1),
(13537, 12569, 2, 2, 787, 1),
(13538, 12570, 1, 2, 0, 1),
(13539, 12570, 2, 1, 0, 1),
(13540, 12571, 1, 10, 0, 1),
(13541, 12571, 2, 10, 0, 1),
(13542, 12572, 1, 10, 55, 1),
(13543, 12572, 2, 10, 787, 1),
(13544, 12573, 2, 1, 0, 1),
(13545, 12574, 1, 2, 55, 1),
(13546, 12574, 2, 2, 787, 1),
(13547, 12575, 12, 1, 0, 1),
(13548, 12576, 56, 5, 0, 1),
(13549, 12576, 1, 4, 0, 1),
(13550, 12577, 1, 10, 22, 1),
(13551, 12577, 2, 1, 787, 1),
(13552, 12578, 1, 1, 22, 1),
(13553, 12579, 2, 1, 787, 1),
(13554, 12580, 1, 2, 22, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otel`
--

CREATE TABLE `otel` (
  `id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL,
  `url_tag` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `text2` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkbox` int(2) NOT NULL,
  `ulduz` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qidalanma` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `otaq_tipi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `otaq_kv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qiymet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `olke` int(6) NOT NULL,
  `seher` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `otel`
--

INSERT INTO `otel` (`id`, `name`, `text`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`, `cat_id`, `url_tag`, `title`, `keyword`, `description`, `text2`, `photo`, `checkbox`, `ulduz`, `qidalanma`, `otaq_tipi`, `otaq_kv`, `qiymet`, `olke`, `seher`) VALUES
(1, 'njdfnjk', '<p>bgjbnjkegnrjgc jrghjkhj hgfjdsh hgbjdgsbsfjhbhvf bdhjsbfvhsfb bgbhtrkgbsh gtbhgtksrbghkjrsbg gbrtshjgvbhgbvgjhskrb gbrshjkgbsrhgj bghjkbsjbg hrjesbghserjfbhjrkf bshjkbdk&nbsp;bgjbnjkegnrjgc jrghjkhj hgfjdsh hgbjdgsbsfjhbhvf bdhjsbfvhsfb bgbhtrkgbsh gtbhgtksrbghkjrsbg gbrtshjgvbhgbvgjhskrb gbrshjkgbsrhgj bghjkbsjbg hrjesbghserjfbhjrkf bshjkbdk&nbsp;bgjbnjkegnrjgc jrghjkhj hgfjdsh hgbjdgsbsfjhbhvf bdhjsbfvhsfb bgbhtrkgbsh gtbhgtksrbghkjrsbg gbrtshjgvbhgbvgjhskrb gbrshjkgbsrhgj bghjkbsjbg hrjesbghserjfbhjrkf bshjkbdk</p>', 1, 0, 0, 1, '2015-07-31', 1, 1, 'lkldfkg', 'mgkmbdgg', 'gkldmkl', 'gnfjnbkgjsnjks', '<p>bgjbnjkegnrjgc jrghjkhj hgfjdsh hgbjdgsbsfjhbhvf bdhjsbfvhsfb bgbhtrkgbsh gtbhgtksrbghkjrsbg gbrtshjgvbhgbvgjhskrb&nbsp;</p>', '', 1, '4', '5', 'mtkrgmtrklm', '55', '222', 1, 1),
(2, '', '', 2, 0, 0, 1, '2015-07-31', 1, 1, '', '', '', '', '', '', 1, '', '', '', '', '', 1, 1),
(3, '', '', 3, 0, 0, 1, '2015-07-31', 1, 1, '', '', '', '', '', '', 1, '', '', '', '', '', 1, 1),
(4, 'jeroighrguvh', '<p>nbfhbvjdkbdjkvbbvd dfvjkdnvjkdv vdndkvndjkljdb vkbvjhfdbvdjl dfjkvnkjlnvjkdflbv vndfjxkvb lbfdxchbdfsjzx &nbsp;nbfhbvjdkbdjkvbbvd dfvjkdnvjkdv vdndkvndjkljdb vkbvjhfdbvdjl dfjkvnkjlnvjkdflbv vndfjxkvb lbfdxchbdfsjzx &nbsp;nbfhbvjdkbdjkvbbvd dfvjkdnvjkdv vdndkvndjkljdb vkbvjhfdbvdjl dfjkvnkjlnvjkdflbv vndfjxkvb lbfdxchbdfsjzx &nbsp;nbfhbvjdkbdjkvbbvd dfvjkdnvjkdv vdndkvndjkljdb vkbvjhfdbvdjl dfjkvnkjlnvjkdflbv vndfjxkvb lbfdxchbdfsjzx &nbsp;nbfhbvjdkbdjkvbbvd dfvjkdnvjkdv vdndkvndjkljdb vkbvjhfdbvdjl dfjkvnkjlnvjkdflbv vndfjxkvb lbfdxchbdfsjzx &nbsp;nbfhbvjdkbdjkvbbvd dfvjkdnvjkdv vdndkvndjkljdb vkbvjhfdbvdjl dfjkvnkjlnvjkdflbv vndfjxkvb lbfdxchbdfsjzx &nbsp;nbfhbvjdkbdjkvbbvd dfvjkdnvjkdv vdndkvndjkljdb vkbvjhfdbvdjl dfjkvnkjlnvjkdflbv vndfjxkvb lbfdxchbdfsjzx&nbsp;</p>', 1, 0, 0, 2, '2015-07-31', 2, 1, 'mlmbr;', 'burghrui', 'nvjnvrjkn', 'njkgfnfjkn', '<p>nbfhbvjdkbdjkvbbvd dfvjkdnvjkdv vdndkvndjkljdb vkbvjhfdbvdjl dfjkvnkjlnvjkdflbv vndfjxkvb lbfdxchbdfsjzx eifgdicbdkcnbchjksdc bskj</p>', '', 1, '2', 'fvjf vk', 'lmlr;mv ', '555', '4545', 1, 1),
(5, '', '', 2, 0, 0, 2, '2015-07-31', 2, 1, '', '', '', '', '', '', 1, '', '', '', '', '', 1, 1),
(6, '', '', 3, 0, 0, 2, '2015-07-31', 2, 1, '', '', '', '', '', '', 1, '', '', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otel_cat`
--

CREATE TABLE `otel_cat` (
  `id` int(11) NOT NULL,
  `sub_id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(11) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(11) NOT NULL,
  `url_tag` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `otel_cat`
--

INSERT INTO `otel_cat` (`id`, `sub_id`, `name`, `text`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`, `url_tag`, `title`, `keyword`, `description`, `photo`) VALUES
(17, 0, '', '', 2, 0, 0, 10, '2015-07-30', 1, '', '', '', '', 'products/344875255b9bf158a2d7.jpg'),
(16, 0, 'aaaaa', '', 1, 0, 0, 10, '2015-07-30', 1, 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'products/344875255b9bf158a2d7.jpg'),
(18, 0, '', '', 3, 0, 0, 10, '2015-07-30', 1, '', '', '', '', 'products/344875255b9bf158a2d7.jpg'),
(19, 0, 'bbbbb', '', 1, 0, 0, 20, '2015-07-31', 2, 'bbbbb', 'bbbbb', 'bbbbb', 'bbbbb', ''),
(20, 0, '', '', 2, 0, 0, 20, '2015-07-31', 2, '', '', '', '', ''),
(21, 0, '', '', 3, 0, 0, 20, '2015-07-31', 2, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otel_photo`
--

CREATE TABLE `otel_photo` (
  `id` int(4) NOT NULL,
  `u_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `ordering` int(4) NOT NULL,
  `url_tag` varchar(255) NOT NULL,
  `p_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `otel_photo`
--

INSERT INTO `otel_photo` (`id`, `u_id`, `l_id`, `s_id`, `photo`, `text`, `ordering`, `url_tag`, `p_id`) VALUES
(595, 1, 0, 0, '378841 (21).jpg', '', 1, '', 1),
(596, 2, 0, 0, '852961 (26).jpg', '', 2, '', 2),
(597, 3, 0, 0, '414581 (18).jpg', '', 3, '', 2),
(598, 4, 0, 0, '484851 (6).jpg', '', 4, '', 2),
(599, 5, 0, 0, '712871 (20).jpg', '', 5, '', 2),
(600, 6, 0, 0, '693621 (29).jpg', '', 6, '', 2),
(601, 7, 0, 0, '464531 (19).jpg', '', 7, '', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `id` int(4) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `text` longtext CHARACTER SET utf8 NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL,
  `url_tag` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `text2` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkbox` int(2) NOT NULL,
  `qiymet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qiymet2` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_cat`
--

CREATE TABLE `product_cat` (
  `id` int(11) NOT NULL,
  `sub_id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(11) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(11) NOT NULL,
  `url_tag` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `checkbox` int(2) NOT NULL,
  `url_tag2` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_cat_video`
--

CREATE TABLE `product_cat_video` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `video_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `product_cat_video`
--

INSERT INTO `product_cat_video` (`id`, `cat_id`, `video_code`) VALUES
(1, 1, 'JLAW1swjjcc'),
(3, 33, 'oozsfgBhz2Q');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_photo`
--

CREATE TABLE `product_photo` (
  `id` int(4) NOT NULL,
  `u_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `ordering` int(4) NOT NULL,
  `url_tag` varchar(255) NOT NULL,
  `p_id` int(4) NOT NULL,
  `tip` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_video`
--

CREATE TABLE `product_video` (
  `id` int(11) NOT NULL,
  `video_code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `home` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `qeydiyyat`
--

CREATE TABLE `qeydiyyat` (
  `id` int(6) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `parol` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cins` int(2) NOT NULL,
  `vip` int(2) NOT NULL,
  `md5` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `qeydiyyat`
--

INSERT INTO `qeydiyyat` (`id`, `name`, `surname`, `email`, `parol`, `cins`, `vip`, `md5`) VALUES
(6, 'Ruslan', 'Axundov', 'admin@arash-holding.az', 'ruslan@@', 1, 1, ''),
(7, 'Məftun', 'Allahyarov', 'meftun.allahyarov@mail.ru', 'meftun2013', 1, 0, ''),
(8, 'ferid', 'xanbudaqov', 'Lmf202@mail.ru', '3100616', 1, 0, 'c9f0f895fb98ab9159f51fd0297e236d'),
(9, 'ruslan', 'axundov', 'raxundov@gmail.com', '123456', 1, 2, '45c48cce2e2d7fbdea1afc51c7c6ad26'),
(10, 'Efsane', 'Salahova', 'salahova.84@bk.ru', '4379725a', 2, 0, 'd3d9446802a44259755d38e6d163e820'),
(11, 'Inam', 'Qurbanov', 'vonabrug@gmail.com', 'mani1vonabrug', 1, 2, '6512bd43d9caa6e02c990b0a82652dca'),
(12, 'Faiq', 'Quliyev', 'faiq2087686@mail.ru', 'faiq992', 1, 0, 'c20ad4d76fe97759aa27a0c99bff6710'),
(13, 'Kamran', 'abdullayev', 'kamrancik55@mail.com', 'Kamran117', 1, 0, 'c51ce410c124a10e0db5e4b97fc2af39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklam`
--

CREATE TABLE `reklam` (
  `id` int(4) NOT NULL,
  `u_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `ordering` int(4) NOT NULL,
  `url_tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seher`
--

CREATE TABLE `seher` (
  `id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `u_id` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `seher`
--

INSERT INTO `seher` (`id`, `name`, `l_id`, `status`, `ordering`, `u_id`, `cat_id`) VALUES
(1275, '', 2, 0, 2, 2, 1),
(1274, 'vvvvvvvvvvvvv', 1, 0, 2, 2, 1),
(1273, '', 3, 0, 1, 1, 1),
(1272, '', 2, 0, 1, 1, 1),
(1271, 'ccccccccccccc', 1, 0, 1, 1, 1),
(1276, '', 3, 0, 2, 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(4) NOT NULL,
  `u_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `ordering` int(4) NOT NULL,
  `url_tag` varchar(255) NOT NULL,
  `tip` int(2) NOT NULL,
  `p_id` int(4) NOT NULL,
  `pos` int(2) NOT NULL,
  `text1` varchar(100) NOT NULL,
  `text2` varchar(100) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `shifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `telephone`, `shifre`) VALUES
(20, 'Mushviq', 'mushviq.manafli@gmail.com', '', '550329'),
(48, 'Mirt', 'mirt@mirtoglu.insaat', '', '754318'),
(49, 'Mirt', 'mirt@mirtoglu.insaat', '', '981103'),
(50, 'CD,MD', 'CSM@CD.D', '', '629760'),
(51, 'CD,MD', 'CSM@CD.D', '', '921832'),
(52, 'CD,MD', 'CSM@CD.D', '', '299017'),
(53, 'CD,MD', 'CSM@CD.D', '', '110079'),
(54, 'dscsd', 'c@c.r', '', '786315'),
(55, 'hesterxan', 'hesterxan@burdayam.kelem', '', '410446'),
(56, '', '', '', '124224'),
(57, 'hesterxan', 'hesterxan@burdayam.kelem', '01234466', '801449'),
(58, 'testemail', 'hesterxan@burdayam.kele', '01234466', '639785'),
(59, 'testemail', 'hesterxan@burdayam.kel', '01234466', '870526'),
(60, 'testemail', 'hesterxan@burdayam.test', '01234466', '370043'),
(61, 'dcv', 'c@Q.d', '11', '133673'),
(62, 'cd', 'ds@d.r', 'cs', '442059'),
(63, 'mcds', '!d@c.dd', 'cs', '513168'),
(64, 'Xosqedem', 'xosqedem@kinder.ri', '0515151515', '985745');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `front_image` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `src` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tip` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `video`
--

INSERT INTO `video` (`id`, `name`, `text`, `front_image`, `src`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`) VALUES
(1, 'video1', '<p>lorem ipsum dolor</p>', 'video_image/3695337572f6ac830b03.jpg', '//www.youtube.com/embed/wlbM5Sq7IZo?modestbranding=1', 1, 0, 0, 23, '2016-05-10', 1),
(2, '', '', 'video_image/3695337572f6ac830b03.jpg', '', 2, 0, 0, 23, '2016-05-10', 1),
(3, '', '', 'video_image/3695337572f6ac830b03.jpg', '', 3, 0, 0, 23, '2016-05-10', 1),
(4, 'video2', '<p>lorem ipsum dolor sit amet</p>', 'video_image/8999781572f7171806aa.jpg', '//www.youtube.com/embed/RRA50DL86WE', 1, 0, 0, 21, '2016-05-10', 2),
(5, '', '', 'video_image/8999781572f7171806aa.jpg', '', 2, 0, 0, 21, '2016-05-10', 2),
(6, '', '', 'video_image/8999781572f7171806aa.jpg', '', 3, 0, 0, 21, '2016-05-10', 2),
(7, 'video6', '<p>lorem lorem lorem</p>', 'video_image/784919957307d2419576.jpg', '//www.youtube.com/embed/wlbM5Sq7IZo', 1, 0, 0, 27, '2016-05-11', 4),
(8, '', '', 'video_image/784919957307d2419576.jpg', '', 2, 0, 0, 27, '2016-05-11', 4),
(9, '', '', 'video_image/784919957307d2419576.jpg', '', 3, 0, 0, 27, '2016-05-11', 4),
(10, 'video4', '<p>j ewijeeifj ieefeofi efiuy</p>', 'video_image/62532015731c0dba6238.jpg', '//www.youtube.com/embed/RRA50DL86WE', 1, 0, 0, 20, '2016-05-10', 5),
(11, '', '', 'video_image/62532015731c0dba6238.jpg', '', 2, 0, 0, 20, '2016-05-10', 5),
(12, '', '', 'video_image/62532015731c0dba6238.jpg', '', 3, 0, 0, 20, '2016-05-10', 5),
(13, 'video5', '<p>ejf i fewfo ioef</p>', 'video_image/98893935731c23125354.jpg', '//www.youtube.com/embed/wlbM5Sq7IZo', 1, 0, 0, 22, '2016-05-10', 6),
(14, '', '', 'video_image/98893935731c23125354.jpg', '', 2, 0, 0, 22, '2016-05-10', 6),
(15, '', '', 'video_image/98893935731c23125354.jpg', '', 3, 0, 0, 22, '2016-05-10', 6),
(16, 'video3', '<p>lorem ipsum</p>', 'video_image/16642895732fb4c7de99.jpg', '//www.youtube.com/embed/RRA50DL86WE', 1, 0, 0, 26, '2016-05-11', 7),
(17, '', '', 'video_image/16642895732fb4c7de99.jpg', '', 2, 0, 0, 26, '2016-05-11', 7),
(18, '', '', 'video_image/16642895732fb4c7de99.jpg', '', 3, 0, 0, 26, '2016-05-11', 7),
(19, 'video7', '<p>nfkfkf</p>', 'video_image/24148815732fbc3b3f2c.jpg', '//www.youtube.com/embed/wlbM5Sq7IZo', 1, 0, 0, 28, '2016-05-11', 8),
(20, '', '', 'video_image/24148815732fbc3b3f2c.jpg', '', 2, 0, 0, 28, '2016-05-11', 8),
(21, '', '', 'video_image/24148815732fbc3b3f2c.jpg', '', 3, 0, 0, 28, '2016-05-11', 8),
(25, 'video9', '<p>eewfekfewfj</p>', 'video_image/50995715732fbfbd2cf1.jpg', '//www.youtube.com/embed/RRA50DL86WE', 1, 0, 0, 30, '2016-05-11', 10),
(26, '', '', 'video_image/50995715732fbfbd2cf1.jpg', '', 2, 0, 0, 30, '2016-05-11', 10),
(27, '', '', 'video_image/50995715732fbfbd2cf1.jpg', '', 3, 0, 0, 30, '2016-05-11', 10),
(28, 'video8', '<p>kfiejf fefe</p>', 'video_image/91174615732fcd53fb82.jpg', '//www.youtube.com/embed/RRA50DL86WE', 1, 0, 0, 31, '2016-05-11', 11),
(29, '', '', 'video_image/91174615732fcd53fb82.jpg', '', 2, 0, 0, 31, '2016-05-11', 11),
(30, '', '', 'video_image/91174615732fcd53fb82.jpg', '', 3, 0, 0, 31, '2016-05-11', 11),
(31, 'video10', '<p>jenff euhfe kjh</p>', 'video_image/14024157332919d6818.jpg', '//www.youtube.com/embed/wlbM5Sq7IZo', 1, 0, 0, 32, '2016-05-11', 12),
(32, '', '', 'video_image/14024157332919d6818.jpg', '', 2, 0, 0, 32, '2016-05-11', 12),
(33, '', '', 'video_image/14024157332919d6818.jpg', '', 3, 0, 0, 32, '2016-05-11', 12);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video_cat`
--

CREATE TABLE `video_cat` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `video_cat`
--

INSERT INTO `video_cat` (`id`, `u_id`, `cat_id`) VALUES
(1, 7, 3),
(2, 7, 4),
(3, 4, 3),
(4, 4, 5),
(5, 8, 4),
(6, 9, 4),
(7, 10, 3),
(8, 11, 3),
(9, 12, 4),
(10, 2, 4),
(11, 3, 4),
(12, 4, 4),
(13, 5, 4),
(14, 1, 3),
(15, 2, 4),
(16, 3, 4),
(17, 4, 5),
(18, 5, 3),
(19, 5, 4),
(20, 6, 5),
(21, 7, 4),
(22, 8, 3),
(23, 9, 3),
(24, 10, 3),
(25, 10, 4),
(26, 11, 4),
(27, 11, 5),
(28, 12, 4),
(29, 13, 3),
(30, 17, 3),
(31, 17, 3),
(32, 18, 4),
(33, 18, 3),
(34, 18, 3),
(35, 19, 4),
(36, 20, 3),
(37, 21, 3),
(38, 22, 3),
(39, 23, 3),
(40, 24, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `viza`
--

CREATE TABLE `viza` (
  `id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(4) NOT NULL,
  `url_tag` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `olke` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `viza`
--

INSERT INTO `viza` (`id`, `name`, `text`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`, `url_tag`, `title`, `keyword`, `description`, `photo`, `olke`) VALUES
(1277, '', '<p>pppppppppp1111 ppppppppp ppppppp</p>', 1, 0, 0, 2, '2015-07-16', 1, 'pppppppp1111', '', '', '', '', 'ppppppp1111'),
(1280, '', '<p>dftgyhujiko</p>', 1, 0, 0, 1, '2015-07-16', 2, 'wesdrftgyhuj', '', '', '', '', 'asdfghjk'),
(1278, '', '', 2, 0, 0, 2, '2015-07-16', 1, '', '', '', '', '', ''),
(1279, '', '', 3, 0, 0, 2, '2015-07-16', 1, '', '', '', '', '', ''),
(1281, '', '', 2, 0, 0, 1, '2015-07-16', 2, '', '', '', '', '', ''),
(1282, '', '', 3, 0, 0, 1, '2015-07-16', 2, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `xeberler`
--

CREATE TABLE `xeberler` (
  `id` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `l_id` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `tip` tinyint(2) NOT NULL,
  `ordering` int(4) NOT NULL,
  `date` date NOT NULL,
  `u_id` int(4) NOT NULL,
  `url_tag` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `bolme1` int(100) NOT NULL,
  `bolme2` int(100) NOT NULL,
  `bolme3` int(100) NOT NULL,
  `bolme4` int(100) NOT NULL,
  `bolme5` int(100) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkbox` int(2) NOT NULL,
  `cat_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `xeberler`
--

INSERT INTO `xeberler` (`id`, `name`, `text`, `l_id`, `status`, `tip`, `ordering`, `date`, `u_id`, `url_tag`, `title`, `bolme1`, `bolme2`, `bolme3`, `bolme4`, `bolme5`, `photo`, `checkbox`, `cat_id`) VALUES
(1, 'lorem', '<p>lorem ipsum lorem ipsum</p>', 1, 0, 0, 1, '2016-05-20', 1, '', '', 1, 0, 0, 0, 0, 'images/3902344573edae92423b.jpg', 0, 0),
(2, '', '', 2, 0, 0, 1, '2016-05-20', 1, '', '', 1, 0, 0, 0, 0, 'images/3902344573edae92423b.jpg', 0, 0),
(3, '', '', 3, 0, 0, 1, '2016-05-20', 1, '', '', 1, 0, 0, 0, 0, 'images/3902344573edae92423b.jpg', 0, 0),
(4, 'lorem ipsum', '<p>lorem ipsum lorem lorem</p>', 1, 0, 0, 2, '2016-05-20', 2, '', '', 1, 0, 0, 0, 0, 'images/497854573edb6355595.jpg', 0, 0),
(5, '', '', 2, 0, 0, 2, '2016-05-20', 2, '', '', 1, 0, 0, 0, 0, 'images/497854573edb6355595.jpg', 0, 0),
(6, '', '', 3, 0, 0, 2, '2016-05-20', 2, '', '', 1, 0, 0, 0, 0, 'images/497854573edb6355595.jpg', 0, 0),
(7, 'lorem', '<p>lorem lorem lorem lorem</p>', 1, 0, 0, 3, '2016-05-20', 3, '', '', 0, 1, 0, 0, 0, 'images/9539097573edb818d86d.jpg', 0, 0),
(8, '', '', 2, 0, 0, 3, '2016-05-20', 3, '', '', 0, 1, 0, 0, 0, 'images/9539097573edb818d86d.jpg', 0, 0),
(9, '', '', 3, 0, 0, 3, '2016-05-20', 3, '', '', 0, 1, 0, 0, 0, 'images/9539097573edb818d86d.jpg', 0, 0),
(10, 'lorem', '<p>lorem lorem ipsum lorem</p>', 1, 0, 0, 4, '2016-05-20', 4, '', '', 1, 0, 0, 0, 0, 'images/111278573edba92e4c9.jpg', 0, 0),
(11, '', '', 2, 0, 0, 4, '2016-05-20', 4, '', '', 1, 0, 0, 0, 0, 'images/111278573edba92e4c9.jpg', 0, 0),
(12, '', '', 3, 0, 0, 4, '2016-05-20', 4, '', '', 1, 0, 0, 0, 0, 'images/111278573edba92e4c9.jpg', 0, 0),
(13, 'lorem ipsum', '<p>lorem ipsum dolor sit amet</p>', 1, 0, 0, 5, '2016-05-20', 5, '', '', 1, 0, 0, 0, 0, 'images/454258573edbc99d746.jpg', 0, 0),
(14, '', '', 2, 0, 0, 5, '2016-05-20', 5, '', '', 1, 0, 0, 0, 0, 'images/454258573edbc99d746.jpg', 0, 0),
(15, '', '', 3, 0, 0, 5, '2016-05-20', 5, '', '', 1, 0, 0, 0, 0, 'images/454258573edbc99d746.jpg', 0, 0),
(16, 'lorem ipsum', '<p>lorem ipsum dolor sit amet</p>', 1, 0, 0, 6, '2016-05-20', 6, '', '', 1, 0, 0, 0, 0, 'images/1911539573edbeeb3de3.jpg', 0, 0),
(17, '', '', 2, 0, 0, 6, '2016-05-20', 6, '', '', 1, 0, 0, 0, 0, 'images/1911539573edbeeb3de3.jpg', 0, 0),
(18, '', '', 3, 0, 0, 6, '2016-05-20', 6, '', '', 1, 0, 0, 0, 0, 'images/1911539573edbeeb3de3.jpg', 0, 0),
(19, 'lorem ipsum', '<p>lorem ipsum dolor sit amet</p>', 1, 0, 0, 7, '2016-05-20', 7, '', '', 1, 0, 0, 0, 0, 'images/8884235573edc25456c1.jpg', 0, 0),
(20, '', '', 2, 0, 0, 7, '2016-05-20', 7, '', '', 1, 0, 0, 0, 0, 'images/8884235573edc25456c1.jpg', 0, 0),
(21, '', '', 3, 0, 0, 7, '2016-05-20', 7, '', '', 1, 0, 0, 0, 0, 'images/8884235573edc25456c1.jpg', 0, 0),
(22, 'testing', '<p>testing</p>', 1, 0, 0, 8, '2016-05-20', 8, '', '', 0, 1, 0, 0, 0, 'images/6420880573ee1a86fc9d.jpg', 0, 0),
(23, '', '', 2, 0, 0, 8, '2016-05-20', 8, '', '', 0, 1, 0, 0, 0, 'images/6420880573ee1a86fc9d.jpg', 0, 0),
(24, '', '', 3, 0, 0, 8, '2016-05-20', 8, '', '', 0, 1, 0, 0, 0, 'images/6420880573ee1a86fc9d.jpg', 0, 0),
(25, 'lorem ipsum', '<p>lorem ipsum</p>', 1, 0, 0, 9, '2016-05-20', 9, '', '', 1, 0, 0, 0, 0, 'images/146034573ee1d6125be.jpg', 0, 0),
(26, '', '', 2, 0, 0, 9, '2016-05-20', 9, '', '', 1, 0, 0, 0, 0, 'images/146034573ee1d6125be.jpg', 0, 0),
(27, '', '', 3, 0, 0, 9, '2016-05-20', 9, '', '', 1, 0, 0, 0, 0, 'images/146034573ee1d6125be.jpg', 0, 0),
(28, 'testing', '<p>testing&nbsp;testing&nbsp;testing</p>', 1, 0, 0, 10, '2016-05-20', 10, '', '', 0, 1, 0, 0, 0, 'images/9172338573ee4117d618.jpg', 0, 0),
(29, '', '', 2, 0, 0, 10, '2016-05-20', 10, '', '', 0, 1, 0, 0, 0, 'images/9172338573ee4117d618.jpg', 0, 0),
(30, '', '', 3, 0, 0, 10, '2016-05-20', 10, '', '', 0, 1, 0, 0, 0, 'images/9172338573ee4117d618.jpg', 0, 0),
(31, 'testing testing', '<p>testing&nbsp;testing&nbsp;testing</p>', 1, 0, 0, 11, '2016-05-20', 11, '', '', 0, 1, 0, 0, 0, 'images/8598571573ee4333c32e.jpg', 0, 0),
(32, '', '', 2, 0, 0, 11, '2016-05-20', 11, '', '', 0, 1, 0, 0, 0, 'images/8598571573ee4333c32e.jpg', 0, 0),
(33, '', '', 3, 0, 0, 11, '2016-05-20', 11, '', '', 0, 1, 0, 0, 0, 'images/8598571573ee4333c32e.jpg', 0, 0),
(34, 'testing', '<p>testing&nbsp;testing testing testing</p>', 1, 0, 0, 13, '2016-05-22', 12, '', '', 0, 0, 1, 0, 0, 'images/34505265741626c30e83.jpg', 0, 0),
(35, '', '', 2, 0, 0, 13, '2016-05-22', 12, '', '', 0, 0, 1, 0, 0, 'images/34505265741626c30e83.jpg', 0, 0),
(36, '', '', 3, 0, 0, 13, '2016-05-22', 12, '', '', 0, 0, 1, 0, 0, 'images/34505265741626c30e83.jpg', 0, 0),
(37, 'lorem ipsum', '<p>lorem ipsum dolor sit amet</p>', 1, 0, 0, 14, '2016-05-22', 13, '', '', 0, 0, 1, 0, 0, 'images/6243141574162f2dc5f0.jpg', 0, 0),
(38, '', '', 2, 0, 0, 14, '2016-05-22', 13, '', '', 0, 0, 1, 0, 0, 'images/6243141574162f2dc5f0.jpg', 0, 0),
(39, '', '', 3, 0, 0, 14, '2016-05-22', 13, '', '', 0, 0, 1, 0, 0, 'images/6243141574162f2dc5f0.jpg', 0, 0),
(40, 'lorem ipsum', '<p>lorem ipsum&nbsp;lorem ipsum&nbsp;lorem</p>', 1, 0, 0, 15, '2016-05-22', 14, '', '', 0, 0, 1, 0, 0, 'images/8448575574163191a125.jpg', 0, 0),
(41, '', '', 2, 0, 0, 15, '2016-05-22', 14, '', '', 0, 0, 1, 0, 0, 'images/8448575574163191a125.jpg', 0, 0),
(42, '', '', 3, 0, 0, 15, '2016-05-22', 14, '', '', 0, 0, 1, 0, 0, 'images/8448575574163191a125.jpg', 0, 0),
(43, 'lorem ipsum', '<p>lorem ipsum&nbsp;lorem ipsum</p>', 1, 0, 0, 16, '2016-05-22', 15, '', '', 0, 0, 1, 0, 0, 'images/237951657416331890b8.jpg', 0, 0),
(44, '', '', 2, 0, 0, 16, '2016-05-22', 15, '', '', 0, 0, 1, 0, 0, 'images/237951657416331890b8.jpg', 0, 0),
(45, '', '', 3, 0, 0, 16, '2016-05-22', 15, '', '', 0, 0, 1, 0, 0, 'images/237951657416331890b8.jpg', 0, 0),
(46, 'lorem', '<p>testing&nbsp;testing&nbsp;testing&nbsp;testing</p>', 1, 0, 0, 17, '2016-05-22', 16, '', '', 0, 0, 1, 0, 0, 'images/684221157416361c3823.jpg', 0, 0),
(47, '', '', 2, 0, 0, 17, '2016-05-22', 16, '', '', 0, 0, 1, 0, 0, 'images/684221157416361c3823.jpg', 0, 0),
(48, '', '', 3, 0, 0, 17, '2016-05-22', 16, '', '', 0, 0, 1, 0, 0, 'images/684221157416361c3823.jpg', 0, 0),
(49, 'jnfjrfj', '<p>kfewnfe fefef ef efee</p>', 1, 0, 0, 18, '2016-05-22', 17, '', '', 0, 0, 1, 0, 0, 'images/557821857416cf81cae3.jpg', 0, 0),
(50, '', '', 2, 0, 0, 18, '2016-05-22', 17, '', '', 0, 0, 1, 0, 0, 'images/557821857416cf81cae3.jpg', 0, 0),
(51, '', '', 3, 0, 0, 18, '2016-05-22', 17, '', '', 0, 0, 1, 0, 0, 'images/557821857416cf81cae3.jpg', 0, 0),
(52, 'lorem test', '<p>lorem test</p>', 1, 0, 0, 19, '2016-06-02', 18, '', '', 0, 0, 0, 1, 0, 'images/8786676575055f384238.jpg', 0, 0),
(53, '', '', 2, 0, 0, 19, '2016-06-02', 18, '', '', 0, 0, 0, 1, 0, 'images/8786676575055f384238.jpg', 0, 0),
(54, '', '', 3, 0, 0, 19, '2016-06-02', 18, '', '', 0, 0, 0, 1, 0, 'images/8786676575055f384238.jpg', 0, 0),
(55, 'lorem2', '<p>lorem2</p>', 1, 0, 0, 20, '2016-06-02', 19, '', '', 0, 0, 0, 1, 0, 'images/5466330575057afc140c.jpg', 0, 0),
(56, '', '', 2, 0, 0, 20, '2016-06-02', 19, '', '', 0, 0, 0, 1, 0, 'images/5466330575057afc140c.jpg', 0, 0),
(57, '', '', 3, 0, 0, 20, '2016-06-02', 19, '', '', 0, 0, 0, 1, 0, 'images/5466330575057afc140c.jpg', 0, 0),
(58, 'lorem3', '<p>lorem3</p>', 1, 0, 0, 21, '2016-06-02', 20, '', '', 0, 0, 0, 1, 0, 'images/6441002575057c2095a9.jpg', 0, 0),
(59, '', '', 2, 0, 0, 21, '2016-06-02', 20, '', '', 0, 0, 0, 1, 0, 'images/6441002575057c2095a9.jpg', 0, 0),
(60, '', '', 3, 0, 0, 21, '2016-06-02', 20, '', '', 0, 0, 0, 1, 0, 'images/6441002575057c2095a9.jpg', 0, 0),
(61, 'ejfejfeiow', '<p>mgkgo</p>', 1, 0, 0, 22, '2016-06-02', 21, '', '', 0, 0, 0, 0, 1, 'images/9186362575059428b81e.jpg', 0, 0),
(62, '', '', 2, 0, 0, 22, '2016-06-02', 21, '', '', 0, 0, 0, 0, 1, 'images/9186362575059428b81e.jpg', 0, 0),
(63, '', '', 3, 0, 0, 22, '2016-06-02', 21, '', '', 0, 0, 0, 0, 1, 'images/9186362575059428b81e.jpg', 0, 0),
(64, 'mefeef', '<p>ggrrk</p>', 1, 0, 0, 23, '2016-06-02', 22, '', '', 0, 0, 0, 0, 1, 'images/4420635750595370d3e.jpg', 0, 0),
(65, '', '', 2, 0, 0, 23, '2016-06-02', 22, '', '', 0, 0, 0, 0, 1, 'images/4420635750595370d3e.jpg', 0, 0),
(66, '', '', 3, 0, 0, 23, '2016-06-02', 22, '', '', 0, 0, 0, 0, 1, 'images/4420635750595370d3e.jpg', 0, 0),
(67, 'fefjeif', '<p>kmfejfief</p>', 1, 0, 0, 24, '2016-06-02', 23, '', '', 0, 0, 0, 0, 1, 'images/792999057505967805a0.jpg', 0, 0),
(68, '', '', 2, 0, 0, 24, '2016-06-02', 23, '', '', 0, 0, 0, 0, 1, 'images/792999057505967805a0.jpg', 0, 0),
(69, '', '', 3, 0, 0, 24, '2016-06-02', 23, '', '', 0, 0, 0, 0, 1, 'images/792999057505967805a0.jpg', 0, 0),
(70, 'mfefei', '<p>miefeef</p>', 1, 0, 0, 25, '2016-06-02', 24, '', '', 0, 0, 0, 0, 1, 'images/18316635750597aae386.jpg', 0, 0),
(71, '', '', 2, 0, 0, 25, '2016-06-02', 24, '', '', 0, 0, 0, 0, 1, 'images/18316635750597aae386.jpg', 0, 0),
(72, '', '', 3, 0, 0, 25, '2016-06-02', 24, '', '', 0, 0, 0, 0, 1, 'images/18316635750597aae386.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `xeberler_photo`
--

CREATE TABLE `xeberler_photo` (
  `id` int(4) NOT NULL,
  `u_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `ordering` int(4) NOT NULL,
  `url_tag` varchar(255) NOT NULL,
  `p_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `xeberler_photo`
--

INSERT INTO `xeberler_photo` (`id`, `u_id`, `l_id`, `s_id`, `photo`, `text`, `ordering`, `url_tag`, `p_id`) VALUES
(614, 1, 0, 0, '582501 (2).jpg', '', 1, '', 1),
(615, 2, 0, 0, '438681 (23).jpg', '', 2, '', 2),
(616, 3, 0, 0, '576161 (12).jpg', '', 3, '', 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`con`);

--
-- Tablo için indeksler `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `a_menu`
--
ALTER TABLE `a_menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bilet`
--
ALTER TABLE `bilet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blog_cat`
--
ALTER TABLE `blog_cat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blok`
--
ALTER TABLE `blok`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `elan`
--
ALTER TABLE `elan`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `elan_photo`
--
ALTER TABLE `elan_photo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `elan_status`
--
ALTER TABLE `elan_status`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `emlak_nov`
--
ALTER TABLE `emlak_nov`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `erazi`
--
ALTER TABLE `erazi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gallery_photo`
--
ALTER TABLE `gallery_photo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gal_cat`
--
ALTER TABLE `gal_cat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `linkler`
--
ALTER TABLE `linkler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `olke`
--
ALTER TABLE `olke`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Tablo için indeksler `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `otel`
--
ALTER TABLE `otel`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `otel_cat`
--
ALTER TABLE `otel_cat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `otel_photo`
--
ALTER TABLE `otel_photo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_cat_video`
--
ALTER TABLE `product_cat_video`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_photo`
--
ALTER TABLE `product_photo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_video`
--
ALTER TABLE `product_video`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `qeydiyyat`
--
ALTER TABLE `qeydiyyat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `reklam`
--
ALTER TABLE `reklam`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `seher`
--
ALTER TABLE `seher`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `video_cat`
--
ALTER TABLE `video_cat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `viza`
--
ALTER TABLE `viza`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `xeberler`
--
ALTER TABLE `xeberler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `xeberler_photo`
--
ALTER TABLE `xeberler_photo`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `con` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- Tablo için AUTO_INCREMENT değeri `a_menu`
--
ALTER TABLE `a_menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `bilet`
--
ALTER TABLE `bilet`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1277;
--
-- Tablo için AUTO_INCREMENT değeri `blog_cat`
--
ALTER TABLE `blog_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Tablo için AUTO_INCREMENT değeri `blok`
--
ALTER TABLE `blok`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Tablo için AUTO_INCREMENT değeri `elan`
--
ALTER TABLE `elan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- Tablo için AUTO_INCREMENT değeri `elan_photo`
--
ALTER TABLE `elan_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Tablo için AUTO_INCREMENT değeri `elan_status`
--
ALTER TABLE `elan_status`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `email`
--
ALTER TABLE `email`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=698;
--
-- Tablo için AUTO_INCREMENT değeri `emlak_nov`
--
ALTER TABLE `emlak_nov`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `erazi`
--
ALTER TABLE `erazi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `gallery_photo`
--
ALTER TABLE `gallery_photo`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `gal_cat`
--
ALTER TABLE `gal_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `linkler`
--
ALTER TABLE `linkler`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=871;
--
-- Tablo için AUTO_INCREMENT değeri `olke`
--
ALTER TABLE `olke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12581;
--
-- Tablo için AUTO_INCREMENT değeri `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13555;
--
-- Tablo için AUTO_INCREMENT değeri `otel`
--
ALTER TABLE `otel`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `otel_cat`
--
ALTER TABLE `otel_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Tablo için AUTO_INCREMENT değeri `otel_photo`
--
ALTER TABLE `otel_photo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=602;
--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3257;
--
-- Tablo için AUTO_INCREMENT değeri `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- Tablo için AUTO_INCREMENT değeri `product_cat_video`
--
ALTER TABLE `product_cat_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `product_photo`
--
ALTER TABLE `product_photo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `product_video`
--
ALTER TABLE `product_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `qeydiyyat`
--
ALTER TABLE `qeydiyyat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Tablo için AUTO_INCREMENT değeri `reklam`
--
ALTER TABLE `reklam`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `seher`
--
ALTER TABLE `seher`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1277;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- Tablo için AUTO_INCREMENT değeri `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Tablo için AUTO_INCREMENT değeri `video_cat`
--
ALTER TABLE `video_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Tablo için AUTO_INCREMENT değeri `viza`
--
ALTER TABLE `viza`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1283;
--
-- Tablo için AUTO_INCREMENT değeri `xeberler`
--
ALTER TABLE `xeberler`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- Tablo için AUTO_INCREMENT değeri `xeberler_photo`
--
ALTER TABLE `xeberler_photo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=617;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
