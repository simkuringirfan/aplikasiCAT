-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 03:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cat`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-02-04-105246', 'App\\Database\\Migrations\\TblPeserta', 'default', 'App', 1612436820, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `id_peserta` int(5) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id_peserta`, `nama`, `alamat`, `jurusan`, `create_date`, `update_date`) VALUES
(1, 'Pangestu Habibi', 'Jr. Babadak No. 539, Solok 33433, DIY', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(2, 'Dadi Lazuardi', 'Ds. Suharso No. 583, Sibolga 55296, NTB', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(3, 'Diah Puspita', 'Jln. Pahlawan No. 156, Madiun 22481, Bali', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(4, 'Elma Wahyuni', 'Ki. Barasak No. 149, Balikpapan 62443, SumBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(5, 'Tugiman Firmansyah', 'Psr. Kyai Gede No. 817, Makassar 54923, Bali', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(6, 'Murti Jagaraga Natsir S.Pt', 'Jln. Pahlawan No. 532, Banjarbaru 13289, JaBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(7, 'Latika Fujiati S.Sos', 'Psr. Kyai Gede No. 133, Magelang 43010, Papua', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(8, 'Wardaya Jailani', 'Psr. Suniaraja No. 139, Lubuklinggau 74411, KalBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(9, 'Himawan Saefullah', 'Gg. Tambak No. 847, Cirebon 40992, MalUt', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(10, 'Eva Astuti S.T.', 'Psr. Gremet No. 974, Pematangsiantar 32005, BaBel', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(11, 'Dono Haryanto S.E.', 'Ki. Dipenogoro No. 181, Metro 79016, Riau', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(12, 'Slamet Karman Santoso M.TI.', 'Ki. Ciumbuleuit No. 552, Kediri 31056, KalTeng', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(13, 'Saka Narpati', 'Kpg. Panjaitan No. 377, Dumai 10134, SulBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(14, 'Oman Imam Sirait S.Pd', 'Jln. Rumah Sakit No. 496, Bandar Lampung 20764, JaTim', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(15, 'Paulin Utami', 'Kpg. Bawal No. 481, Kendari 30547, KalBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(16, 'Daryani Dabukke', 'Ds. Hang No. 89, Lubuklinggau 42223, Bali', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(17, 'Prabawa Pangestu', 'Jln. Abdul. Muis No. 612, Bandar Lampung 68755, SulBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(18, 'Ikhsan Irawan', 'Jln. Bakit  No. 173, Banjar 19206, SulUt', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(19, 'Laswi Kuswoyo S.Farm', 'Kpg. Bagas Pati No. 442, Pangkal Pinang 60722, Maluku', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(20, 'Baktianto Pangestu M.Ak', 'Jln. Banal No. 724, Langsa 86500, KalBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(21, 'Eka Agustina', 'Gg. Baja Raya No. 501, Tanjung Pinang 26060, KalUt', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(22, 'Cinta Mulyani', 'Dk. Babah No. 720, Administrasi Jakarta Utara 75584, NTB', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(23, 'Jasmani Sihombing S.H.', 'Jr. Baranang No. 244, Pariaman 48279, SumUt', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(24, 'Ida Hassanah', 'Jln. Dago No. 557, Pagar Alam 32236, Gorontalo', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(25, 'Oskar Uwais', 'Dk. Badak No. 882, Mojokerto 56381, NTT', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(26, 'Cagak Balijan Sinaga', 'Jln. Bak Mandi No. 785, Batam 93965, Jambi', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(27, 'Bahuwarna Situmorang M.TI.', 'Kpg. Gotong Royong No. 698, Tebing Tinggi 72964, NTT', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(28, 'Eja Iswahyudi', 'Psr. Rajawali No. 182, Tanjung Pinang 15487, SumUt', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(29, 'Melinda Mulyani', 'Gg. PHH. Mustofa No. 595, Palembang 37216, KalUt', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(30, 'Nyoman Suwarno', 'Ds. Salak No. 610, Administrasi Jakarta Utara 99826, KalTeng', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(31, 'Ulya Halimah', 'Kpg. Diponegoro No. 450, Binjai 99150, Banten', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(32, 'Iriana Ella Laksmiwati', 'Jln. Sutami No. 835, Lubuklinggau 79690, KepR', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(33, 'Prabawa Sihotang', 'Psr. Bakau Griya Utama No. 838, Probolinggo 77102, Bengkulu', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(34, 'Danang Tarihoran', 'Ki. Bawal No. 41, Gunungsitoli 75882, DKI', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(35, 'Dadi Saragih', 'Gg. Karel S. Tubun No. 699, Makassar 15717, Bali', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(36, 'Carla Wulan Pratiwi', 'Jr. Bakau Griya Utama No. 830, Banjarmasin 96166, Riau', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(37, 'Bancar Tarihoran', 'Kpg. Sukajadi No. 700, Pematangsiantar 15519, SulBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(38, 'Luis Oman Sirait S.Pt', 'Kpg. Ir. H. Juanda No. 226, Pontianak 53592, Gorontalo', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(39, 'Hasta Rendy Haryanto', 'Gg. Padang No. 669, Lhokseumawe 93200, KalTeng', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(40, 'Siti Fitriani Lestari M.Pd', 'Psr. Badak No. 56, Mojokerto 91824, KalUt', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(41, 'Intan Zulaikha Halimah', 'Ki. Bambu No. 772, Palembang 62723, SumUt', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(42, 'Warsa Wakiman Wibisono S.Pt', 'Dk. Untung Suropati No. 963, Cilegon 91078, SulBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(43, 'Bajragin Wahyudin', 'Kpg. Baha No. 651, Blitar 69152, BaBel', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(44, 'Cemeti Prabowo M.Ak', 'Jr. Pattimura No. 353, Banjarbaru 48480, DKI', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(45, 'Maimunah Kuswandari', 'Ds. Raden Saleh No. 12, Salatiga 81049, KalBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(46, 'Rangga Carub Tarihoran M.Ak', 'Gg. Ikan No. 399, Magelang 97283, Banten', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(47, 'Kayla Wahyuni M.Pd', 'Ds. Sudirman No. 685, Samarinda 21310, NTT', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(48, 'Jayeng Manullang M.Ak', 'Psr. Cikutra Barat No. 657, Batam 41933, Gorontalo', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(49, 'Nova Haryanti', 'Jr. Salak No. 990, Pariaman 71518, KalSel', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(50, 'Harjo Hardiansyah', 'Kpg. Batako No. 104, Mataram 45641, KepR', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(51, 'Emong Wasita M.Farm', 'Gg. Kali No. 931, Jayapura 68957, KalTeng', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(52, 'Liman Kurniawan', 'Ds. Abdullah No. 317, Tangerang 36082, SumSel', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(53, 'Harjo Ardianto S.E.', 'Gg. Nakula No. 504, Pekalongan 32564, NTT', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(54, 'Yance Winarsih', 'Ki. Baja Raya No. 874, Samarinda 57545, Papua', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(55, 'Vanesa Rahayu', 'Dk. Madiun No. 562, Padangpanjang 93681, SulBar', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(56, 'Balangga Najam Zulkarnain S.H.', 'Kpg. Peta No. 445, Kendari 69987, SumSel', 'IT', '2021-02-07 17:24:16', '2021-02-07 17:24:16'),
(57, 'Sarah Andriani', 'Ds. Suharso No. 329, Batam 48024, KalTeng', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(58, 'Queen Suartini', 'Psr. Merdeka No. 660, Batam 60647, Jambi', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(59, 'Kenzie Natsir M.Kom.', 'Kpg. Lada No. 401, Depok 12018, JaTeng', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(60, 'Hasan Prayogo Narpati', 'Ki. Sutarjo No. 82, Bekasi 74766, SulTeng', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(61, 'Lintang Melinda Lestari', 'Dk. Perintis Kemerdekaan No. 569, Banda Aceh 59129, NTT', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(62, 'Zulfa Sudiati', 'Jr. Gajah Mada No. 256, Balikpapan 87784, KepR', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(63, 'Nabila Zulaika', 'Psr. Barat No. 528, Madiun 90425, Jambi', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(64, 'Damar Nugroho', 'Ds. Rajawali No. 517, Metro 11624, JaTim', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(65, 'Jessica Laksmiwati S.Psi', 'Ds. Rajawali No. 86, Kediri 82532, Lampung', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(66, 'Zaenab Lailasari S.Gz', 'Jln. Sudirman No. 620, Tarakan 97743, KalSel', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(67, 'Asman Utama', 'Psr. Panjaitan No. 534, Kendari 59453, SulTeng', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(68, 'Tira Maryati S.Gz', 'Jr. Pahlawan No. 902, Ambon 96328, Bengkulu', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(69, 'Yahya Hutasoit M.TI.', 'Dk. Industri No. 73, Kotamobagu 17036, Aceh', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(70, 'Kasim Sihotang S.T.', 'Jln. Baja Raya No. 210, Cirebon 80855, KalTeng', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(71, 'Cahya Permadi', 'Ki. Bambon No. 911, Tebing Tinggi 11417, KepR', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(72, 'Praba Tampubolon M.Ak', 'Dk. Abdullah No. 391, Kediri 86394, SulTeng', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(73, 'Cornelia Rahimah', 'Jr. Ekonomi No. 865, Padangpanjang 47156, DKI', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(74, 'Hardana Artawan Putra S.H.', 'Ki. Wora Wari No. 799, Salatiga 73781, Riau', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(75, 'Ilsa Safitri', 'Gg. Peta No. 41, Tomohon 95869, KalTeng', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(76, 'Lanjar Sitorus', 'Jln. Bagis Utama No. 930, Cilegon 71514, SulTra', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(77, 'Septi Rahmi Yulianti', 'Psr. Bah Jaya No. 97, Blitar 22510, KalTim', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(78, 'Suci Unjani Palastri', 'Kpg. Baladewa No. 667, Batu 99180, KalTim', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(79, 'Kiandra Widiastuti', 'Jln. Bawal No. 921, Padang 33922, Papua', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(80, 'Dalima Padmasari', 'Kpg. Jaksa No. 565, Administrasi Jakarta Pusat 13418, Bengkulu', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(81, 'Cakrabirawa Edi Nashiruddin S.Gz', 'Ds. Krakatau No. 573, Bima 97453, Aceh', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(82, 'Lala Puspita', 'Kpg. Ters. Kiaracondong No. 631, Sawahlunto 65380, DIY', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(83, 'Panji Marbun S.T.', 'Gg. Mahakam No. 679, Payakumbuh 90038, Bali', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(84, 'Harjo Jayadi Nainggolan', 'Ds. Dago No. 450, Parepare 58622, SumBar', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(85, 'Cakrawala Situmorang', 'Jr. Bass No. 536, Medan 36402, KalSel', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(86, 'Vera Padmasari', 'Ds. R.E. Martadinata No. 278, Bitung 26540, Jambi', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(87, 'Violet Usamah', 'Jr. Siliwangi No. 377, Dumai 17345, Jambi', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(88, 'Hasta Teguh Thamrin S.E.', 'Kpg. Tambak No. 770, Jambi 95083, JaBar', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(89, 'Nadia Wulandari', 'Gg. Nanas No. 688, Pekanbaru 30291, Papua', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(90, 'Martaka Santoso', 'Dk. Baan No. 240, Banjarbaru 17787, Bali', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(91, 'Najwa Tina Anggraini M.M.', 'Ki. Yos No. 570, Singkawang 96444, PapBar', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(92, 'Olivia Laksita', 'Ki. Katamso No. 101, Bau-Bau 50367, BaBel', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(93, 'Mustika Hari Pangestu', 'Dk. B.Agam 1 No. 83, Surabaya 33692, KalSel', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(94, 'Pranata Sitompul S.E.I', 'Jln. B.Agam 1 No. 6, Gunungsitoli 63133, KalSel', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(95, 'Bagas Waluyo', 'Jr. BKR No. 946, Palopo 89361, Gorontalo', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(96, 'Wardaya Baktianto Megantara', 'Jr. Halim No. 864, Pontianak 57216, SulBar', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(97, 'Jamal Gunawan', 'Jln. Tambun No. 631, Surakarta 23073, KalUt', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(98, 'Digdaya Irawan S.Sos', 'Ds. Tubagus Ismail No. 78, Batam 84945, SumSel', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(99, 'Karimah Anita Suartini', 'Ds. Bagis Utama No. 214, Bau-Bau 99050, SulBar', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(100, 'Eva Wastuti', 'Kpg. Dipatiukur No. 768, Pekalongan 15711, Maluku', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17'),
(101, 'Ganjaran Jailani', 'Ki. Bambu No. 389, Medan 19736, Bengkulu', 'IT', '2021-02-07 17:24:17', '2021-02-07 17:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_user` char(5) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `alamat_user` varchar(200) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_user`, `nama_user`, `alamat_user`, `image`, `create_date`, `update_date`) VALUES
(13, 'U0001', 'Irfan Maualana', 'Pagerageung Wetan, Pagerageung, Tasikmalaya', 'default.jpg', '2021-01-31 01:02:30', '2021-02-03 09:04:45'),
(22, 'U0002', 'Idu Durahman', 'Pagerageung Kidul, Pagerageung, Tasikmalaya', '1612367261_a420a11a056b762525dc.jpg', '2021-01-31 01:45:20', '2021-02-03 09:47:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_idx` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id_peserta` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
