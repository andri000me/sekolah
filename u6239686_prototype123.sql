-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2020 at 10:24 AM
-- Server version: 10.2.30-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u6239686_prototype123`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `ida` int(10) NOT NULL,
  `ids` int(10) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `ket` varchar(20) NOT NULL,
  `idk` int(10) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idn` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idn`, `nama`, `username`, `email`, `password`, `level`) VALUES
(1, 'Superadmin', 'Superadmin', 'panjibintoro09@gmail.com', 'eed8cdc400dfd4ec85dff70a170066b7', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `idek` int(10) NOT NULL,
  `nama_ekstra` varchar(20) NOT NULL,
  `idk` int(10) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`idek`, `nama_ekstra`, `idk`, `tahun_ajaran`) VALUES
(1, 'Tapak Suci', 3, 'Gasal 2018/2019'),
(2, 'Pramuka', 3, 'Gasal 2018/2019'),
(6, 'Renang', 8, 'Gasal 2018/2019'),
(7, 'Sepak Bola', 8, 'Gasal 2018/2019'),
(8, 'Pramuka', 60, 'Gasal 2018/2019'),
(9, 'Tapak Suci', 60, 'Gasal 2018/2019'),
(10, 'Pramuka', 65, 'Gasal 2018/2019'),
(11, 'Rebana', 65, 'Gasal 2018/2019'),
(12, 'Qiroah', 65, 'Gasal 2018/2019'),
(13, 'Bela Diri', 72, 'Gasal 2018/2019'),
(14, 'Mengaji', 72, 'Gasal 2018/2019'),
(15, 'Memanah', 73, 'Gasal 2018/2019'),
(16, 'Renang', 73, 'Gasal 2018/2019'),
(17, 'Pramuka', 74, 'Gasal 2018/2019'),
(18, 'Sepak Bola', 74, 'Gasal 2018/2019'),
(19, 'Sepak Bola', 76, 'Gasal 2018/2019'),
(20, 'Qoriah', 76, 'Gasal 2018/2019'),
(22, 'Sepak Bola', 85, 'Gasal 2018/2019'),
(23, 'Pramuka', 85, 'Gasal 2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `gurumapel`
--

CREATE TABLE `gurumapel` (
  `idg` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `idk` int(10) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(100) NOT NULL,
  `ukuran_file` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gurumapel`
--

INSERT INTO `gurumapel` (`idg`, `nip`, `nama`, `jk`, `alamat`, `tlp`, `idk`, `nama_mapel`, `nama_file`, `tipe_file`, `ukuran_file`, `file`, `pass`) VALUES
(1, '196103041982022004', 'Sidiq Wahyu Oktaviano.S.Pd.I', 'L', ' Yogyakarta', '082166359578', 3, 'Pendidikan Agama dan Budi Pekerti', '', '', '', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(3, '197203022000121011', 'Arif Hakim Dwiyanta,S.Ag', 'L', 'Wirobrajan, Yogyakarta', '082166359578', 8, 'Biologi', '', '', '', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(5, '197411072000121001', 'Agus Ramadiansyah, S.Pd', 'L', 'Tamansiswa, Yogyakarta', '082365987455', 36, 'Sosiologi', '', '', '', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(6, '197203056000121001', 'Rujiman, S.Sos.I', 'L', 'Warungboto, Yogyakarta', '082324693424', 60, 'Pendidikan Agama dan Budi Pekerti', '', '', '', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(7, '196103041458823200', 'Sulastri Puji Astuti', 'P', 'Dukun, Magelang', '085869766597', 65, 'Bahasa Indonesia', '', '', '', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(8, '198003041982022004', 'Nanang Ari Nugroho', 'L', 'Pelas, Srumbung Magelang', '082264985633', 72, 'Pendidikan Agama Islam', '', '', '', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(9, '197925101982022222', 'Panji', 'L', 'jogja', '082166359578', 73, 'Pendidikan Pancasila dan Kewarganegaraan', '', '', '', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(10, '196103041982023333', 'Lilik Lina Heni, S.Pd.', 'P', 'jogja', '085869745562', 74, 'Pendidikan Pancasila dan Kewarganegaraan', '', '', '', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(11, '196103041982022006', 'M. Ernawati M., S.Pd.', 'P', 'jogja', '085869745562', 74, 'Matematika', '', '', '', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(13, '196103041982022096', 'Dona Lesmana, S.Pd', 'L', '   Yogyakarta', '082166359578', 76, 'Pendidikan Pancasila dan Kewarganegaraan', '', '', '', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(16, '196103041982022007', 'M. Rizki Fauzi, S.Ag', 'L', 'a', '085869745562', 36, 'Sejarah Indonesia', 'rizki', 'jpg', '962780', '../files/rizki.jpg', 'd6a9a933c8aafc51e55ac0662b6e4d4a');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idk` int(10) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idk`, `nama_kelas`, `tahun_ajaran`, `id`) VALUES
(1, 'I', 'Gasal 2018/2019', 1),
(2, 'II', 'Gasal 2018/2019', 1),
(3, 'III', 'Gasal 2018/2019', 1),
(4, 'IV', 'Gasal 2018/2019', 1),
(5, 'V', 'Gasal 2018/2019', 1),
(6, 'VI', 'Gasal 2018/2019', 1),
(8, 'X IPA 1', 'Gasal 2018/2019', 3),
(33, 'X IPA 2', 'Gasal 2018/2019', 3),
(34, 'X IPA 3', 'Gasal 2018/2019', 3),
(36, 'X IPS 1', 'Gasal 2018/2019', 3),
(37, 'X IPS 2', 'Gasal 2018/2019', 3),
(38, 'X IPS 3', 'Gasal 2018/2019', 3),
(39, 'XI IPA 1', 'Gasal 2018/2019', 3),
(40, 'XI IPA 2', 'Gasal 2018/2019', 3),
(41, 'XI IPA 3', 'Gasal 2018/2019', 3),
(42, 'XI IPS 1', 'Gasal 2018/2019', 3),
(43, 'XI IPS 2', 'Gasal 2018/2019', 3),
(44, 'XI IPS 3', 'Gasal 2018/2019', 3),
(45, 'XII IPA 1', 'Gasal 2018/2019', 3),
(46, 'XII IPA 2', 'Gasal 2018/2019', 3),
(49, 'XII IPA 3', 'Gasal 2018/2019', 3),
(50, 'XII IPS 1', 'Gasal 2018/2019', 3),
(53, 'XII IPS 2', 'Gasal 2018/2019', 3),
(54, 'XII IPS 3', 'Gasal 2018/2019', 3),
(55, 'I (Satu)', 'Gasal 2018/2019', 5),
(56, 'II (Dua)', 'Gasal 2018/2019', 5),
(57, 'III (Tiga)', 'Gasal 2018/2019', 5),
(58, 'IV (Empat)', 'Gasal 2018/2019', 5),
(59, 'V (Lima)', 'Gasal 2018/2019', 5),
(60, 'VI (Enam)', 'Gasal 2018/2019', 5),
(61, 'VII A', 'Gasal 2018/2019', 7),
(62, 'VII B', 'Gasal 2018/2019', 7),
(63, 'VIII A', 'Gasal 2018/2019', 7),
(64, 'VIII B', 'Gasal 2018/2019', 7),
(65, 'IX A', 'Gasal 2018/2019', 7),
(66, 'IX B', 'Gasal 2018/2019', 7),
(67, 'I (Satu)', 'Gasal 2018/2019', 6),
(68, 'II (Dua)', 'Gasal 2018/2019', 6),
(69, 'III (Tiga)', 'Gasal 2018/2019', 6),
(70, 'IV (Empat)', 'Gasal 2018/2019', 6),
(71, 'V (Lima)', 'Gasal 2018/2019', 6),
(72, 'VI (Enam)', 'Gasal 2018/2019', 6),
(73, 'I', 'Gasal 2018/2019', 14),
(74, 'X IPA 1', 'Gasal 2018/2019', 16),
(76, 'I (Satu)', 'Gasal 2018/2019', 15),
(77, 'II (Dua)', 'Gasal 2018/2019', 15),
(78, 'I (Satu)', 'Gasal 2018/2019', 17),
(79, 'II (Dua)', 'Gasal 2018/2019', 17),
(80, 'III (Tiga)', 'Gasal 2018/2019', 17),
(81, 'IV (Empat)', 'Gasal 2018/2019', 17),
(82, 'V (Lima)', 'Gasal 2018/2019', 17),
(83, 'VI (Enam)', 'Gasal 2018/2019', 17),
(85, 'I (Satu)', 'Gasal 2018/2019', 18),
(86, 'kelas 1', 'Gasal 2017/2018', 20),
(88, 'kelas 2', 'Gasal 2018/2019', 20),
(89, 'kelas 3', 'Gasal 2017/2018', 20),
(90, 'kelas 1', 'Gasal 2017/2018', 21);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(10) NOT NULL,
  `id_prov` int(10) NOT NULL,
  `nm_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_prov`, `nm_kota`) VALUES
(1, 1, 'Aceh Barat'),
(2, 1, 'Aceh Barat Daya'),
(3, 1, 'Aceh Besar'),
(4, 1, 'Aceh Jaya'),
(5, 1, 'Aceh Selatan'),
(6, 1, 'Aceh Singkil'),
(7, 1, 'Aceh Tamiang'),
(8, 1, 'Aceh Tengah'),
(9, 1, 'Aceh Tenggara'),
(10, 1, 'Aceh Timur'),
(11, 1, 'Aceh Utara'),
(12, 1, 'Bener Meriah'),
(13, 1, 'Bireuen'),
(14, 1, 'Gayo Lues'),
(15, 1, 'Nagan Raya'),
(16, 1, 'Pidie'),
(17, 1, 'Pidie Jaya'),
(18, 1, 'Simeulue'),
(19, 1, 'Banda Aceh'),
(20, 1, 'Langsa'),
(21, 1, 'Lhokseumawe'),
(22, 1, 'Sabang'),
(23, 1, 'Subulussalam'),
(24, 2, 'Asahan'),
(25, 2, 'Batubara'),
(26, 2, 'Dairi'),
(27, 2, 'Deli Serdang'),
(28, 2, 'Humbang Hasundutan'),
(29, 2, 'Karo'),
(30, 2, 'Labuhanbatu'),
(31, 2, 'Labuhanbatu Selatan'),
(32, 2, 'Labuhanbatu Utara'),
(33, 2, 'Langkat'),
(34, 2, 'Mandailing Natal'),
(35, 2, 'Nias'),
(36, 2, 'Nias Barat'),
(37, 2, 'Nias Selatan'),
(38, 2, 'Nias Utara'),
(39, 2, 'Padang Lawas'),
(40, 2, 'Padang Lawas Utara'),
(41, 2, 'Pakpak Bharat'),
(42, 2, 'Samosir'),
(43, 2, 'Serdang Bedagai'),
(44, 2, 'Simalungun'),
(45, 2, 'Tapanuli Selatan'),
(46, 2, 'Tapanuli Tengah'),
(47, 2, 'Tapanuli Utara'),
(48, 2, 'Toba Samosir'),
(49, 2, 'Binjai'),
(50, 2, 'Gunungsitoli'),
(51, 2, 'Medan'),
(52, 2, 'Padangsidempuan'),
(53, 2, 'Pematangsiantar'),
(54, 2, 'Sibolga'),
(55, 2, 'Tanjungbalai'),
(56, 2, 'Tebing Tinggi'),
(57, 3, 'Agam'),
(58, 3, 'Dharmasraya'),
(59, 3, 'Kepulauan Mentawai'),
(60, 3, 'Lima Puluh Kota'),
(61, 3, 'Padang Pariaman'),
(62, 3, 'Pasaman'),
(63, 3, 'Pasaman Barat'),
(64, 3, 'Pesisir Selatan'),
(65, 3, 'Sijunjung'),
(66, 3, 'Solok'),
(67, 3, 'Solok Selatan'),
(68, 3, 'Tanah Datar'),
(69, 3, 'Bukittinggi'),
(70, 3, 'Padang'),
(71, 3, 'Padangpanjang'),
(72, 3, 'Payakumbuh'),
(73, 3, 'Sawahlunto'),
(74, 3, 'Solok'),
(75, 4, 'Bengkalis'),
(76, 4, 'Indragiri Hilir'),
(77, 4, 'Indragiri Hulu'),
(78, 4, 'Kampar'),
(79, 4, 'Kepulauan Meranti'),
(80, 4, 'Kuantan Singingi'),
(81, 4, 'Pelalawan'),
(82, 4, 'Rokan Hilir'),
(83, 4, 'Rokan Hulu'),
(84, 4, 'Siak'),
(85, 4, 'Dumai'),
(86, 4, 'Pekanbaru'),
(87, 5, 'Bintan'),
(88, 5, 'Karimun'),
(89, 5, 'Kepulauan Anambas'),
(90, 5, 'Lingga'),
(91, 5, 'Natuna'),
(92, 5, 'Batam'),
(93, 5, 'Tanjung Pinang'),
(94, 6, 'Batanghari'),
(95, 6, 'Bungo'),
(96, 6, 'Kerinci'),
(97, 6, 'Merangin'),
(98, 6, 'Muaro Jambi'),
(99, 6, 'Sarolangun'),
(100, 6, 'Tanjung Jabung Barat'),
(101, 6, 'Tanjung Jabung Timur'),
(102, 6, 'Tebo'),
(103, 6, 'Jambi'),
(104, 6, 'Sungai Penuh'),
(105, 7, 'Bengkulu Selatan'),
(106, 7, 'Bengkulu Tengah'),
(107, 7, 'Bengkulu Utara'),
(108, 7, 'Kaur'),
(109, 7, 'Kepahiang'),
(110, 7, 'Lebong'),
(111, 7, 'Mukomuko'),
(112, 7, 'Rejang Lebong'),
(113, 7, 'Seluma'),
(114, 7, 'Bengkulu'),
(115, 8, 'Banyuasin'),
(116, 8, 'Empat Lawang'),
(117, 8, 'Lahat'),
(118, 8, 'Muara Enim'),
(119, 8, 'Musi Banyuasin'),
(120, 8, 'Musi Rawas'),
(121, 8, 'Musi Rawas Utara'),
(122, 8, 'Ogan Ilir'),
(123, 8, 'Ogan Komering Ilir'),
(124, 8, 'Ogan Komering Ulu'),
(125, 8, 'Ogan Komering Ulu Selatan'),
(126, 8, 'Ogan Komering Ulu Timur'),
(127, 8, 'Penukal Abab Lematang Ilir'),
(128, 8, 'Lubuklinggau'),
(129, 8, 'Pagar Alam'),
(130, 8, 'Palembang'),
(131, 8, 'Prabumulih'),
(132, 9, 'Bangka'),
(133, 9, 'Bangka Barat'),
(134, 9, 'Bangka Selatan'),
(135, 9, 'Bangka Tengah'),
(136, 9, 'Belitung'),
(137, 9, 'Belitung Timur'),
(138, 9, 'Pangkal Pinang'),
(139, 10, 'Lampung Tengah'),
(140, 10, 'Lampung Utara'),
(141, 10, 'Lampung Selatan'),
(142, 10, 'Lampung Barat'),
(143, 10, 'Lampung Timur'),
(144, 10, 'Mesuji'),
(145, 10, 'Pesawaran'),
(146, 10, 'Pesisir Barat'),
(147, 10, 'Pringsewu'),
(148, 10, 'Tulang Bawang'),
(149, 10, 'Tulang Bawang Barat'),
(150, 10, 'Tanggamus'),
(151, 10, 'Way Kanan'),
(152, 10, 'Bandar Lampung'),
(153, 10, 'Metro'),
(154, 11, 'Lebak'),
(155, 11, 'Pandeglang'),
(156, 11, 'Serang'),
(157, 11, 'Tangerang'),
(158, 11, 'Cilegon'),
(159, 11, 'Serang'),
(160, 11, 'Tangerang'),
(161, 11, 'Tangerang Selatan'),
(162, 12, 'Bandung'),
(163, 12, 'Bandung Barat'),
(164, 12, 'Bekasi'),
(165, 12, 'Bogor'),
(166, 12, 'Ciamis'),
(167, 12, 'Cianjur'),
(168, 12, 'Cirebon'),
(169, 12, 'Garut'),
(170, 12, 'Indramayu'),
(171, 12, 'Karawang'),
(172, 12, 'Kuningan'),
(173, 12, 'Majalengka'),
(174, 12, 'Pangandaran'),
(175, 12, 'Purwakarta'),
(176, 12, 'Subang'),
(177, 12, 'Sukabumi'),
(178, 12, 'Sumedang'),
(179, 12, 'Tasikmalaya'),
(180, 12, 'Depok'),
(181, 13, 'Kepulauan Seribu'),
(183, 13, 'Jakarta Barat'),
(184, 13, 'Jakarta Pusat'),
(185, 13, 'Jakarta Selatan'),
(186, 13, 'Jakarta Timur'),
(187, 13, 'Jakarta Utara'),
(188, 14, 'Banjarnegara'),
(189, 14, 'Banyumas'),
(190, 14, 'Batang'),
(191, 14, 'Blora'),
(192, 14, 'Boyolali'),
(193, 14, 'Brebes'),
(194, 14, 'Cilacap'),
(195, 14, 'Demak'),
(196, 14, 'Grobogan'),
(197, 14, 'Jepara'),
(198, 14, 'Karanganyar'),
(199, 14, 'Kebumen'),
(200, 14, 'Kendal'),
(201, 14, 'Klaten'),
(202, 14, 'Kudus'),
(203, 14, 'Magelang'),
(204, 14, 'Pati'),
(205, 14, 'Pekalongan'),
(206, 14, 'Pemalang'),
(207, 14, 'Purbalingga'),
(208, 14, 'Purworejo'),
(209, 14, 'Rembang'),
(210, 14, 'Semarang'),
(211, 14, 'Sragen'),
(212, 14, 'Sukoharjo'),
(213, 14, 'Tegal'),
(214, 14, 'Temanggung'),
(215, 14, 'Wonogiri'),
(216, 14, 'Salatiga'),
(217, 14, 'Surakarta'),
(218, 15, 'Yogyakarta'),
(219, 15, 'Bantul'),
(220, 15, 'Gunungkidul'),
(221, 15, 'Kulon Progo'),
(222, 15, 'Sleman'),
(223, 16, 'Bangkalan'),
(224, 16, 'Banyuwangi'),
(225, 16, 'Blitar'),
(226, 16, 'Bojonegoro'),
(227, 16, 'Bondowoso'),
(228, 16, 'Gresik'),
(229, 16, 'Jember'),
(230, 16, 'Jombang'),
(231, 16, 'Kediri'),
(232, 16, 'Lamongan'),
(233, 16, 'Lumajang'),
(234, 16, 'Madiun'),
(235, 16, 'Magetan'),
(236, 16, 'Malang'),
(237, 16, 'Mojokerto'),
(238, 16, 'Nganjuk'),
(239, 16, 'Ngawi'),
(240, 16, 'Pacitan'),
(241, 16, 'Pamekasan'),
(242, 16, 'Pasuruan'),
(243, 16, 'Ponorogo'),
(244, 16, 'Probolinggo'),
(245, 16, 'Sampang'),
(246, 16, 'Sidoarjo'),
(247, 16, 'Situbondo'),
(248, 16, 'Sumenep'),
(249, 16, 'Trenggalek'),
(250, 16, 'Tuban'),
(251, 16, 'Tulungagung'),
(252, 16, 'Batu'),
(253, 16, 'Surabaya'),
(254, 17, 'Badung'),
(255, 17, 'Bangli'),
(256, 17, 'Buleleng'),
(257, 17, 'Gianyar'),
(258, 17, 'Jembrana'),
(259, 17, 'Karangasem'),
(260, 17, 'Klungkung'),
(261, 17, 'Tabanan'),
(262, 17, 'Denpasar'),
(263, 18, 'Bima'),
(264, 18, 'Dompu'),
(265, 18, 'Lombok Barat'),
(266, 18, 'Lombok Tengah'),
(267, 18, 'Lombok Timur'),
(268, 18, 'Lombok Utara'),
(269, 18, 'Sumbawa'),
(270, 18, 'Sumbawa Barat'),
(271, 18, 'Mataram'),
(272, 19, 'Alor'),
(273, 19, 'Belu'),
(274, 19, 'Ende'),
(275, 19, 'Flores Timur'),
(276, 19, 'Kupang'),
(277, 19, 'Lembata'),
(278, 19, 'Malaka'),
(279, 19, 'Manggarai'),
(280, 19, 'Manggarai Barat'),
(281, 19, 'Manggarai Timur'),
(282, 19, 'Ngada'),
(283, 19, 'Nagekeo'),
(284, 19, 'Rote Ndao'),
(285, 19, 'Sabu Raijua'),
(286, 19, 'Sikka'),
(287, 19, 'Sumba Barat'),
(288, 19, 'Sumba Barat Daya'),
(289, 19, 'Sumba Tengah'),
(290, 19, 'Sumba Timur'),
(291, 19, 'Timor Tengah Selatan'),
(292, 19, 'Timor Tengah Utara'),
(293, 20, 'Bengkayang'),
(294, 20, 'Kapuas Hulu'),
(295, 20, 'Kayong Utara'),
(296, 20, 'Ketapang'),
(297, 20, 'Kubu Raya'),
(298, 20, 'Landak'),
(299, 20, 'Melawi'),
(300, 20, 'Mempawah'),
(301, 20, 'Sambas'),
(302, 20, 'Sanggau'),
(303, 20, 'Sekadau'),
(304, 20, 'Sintang'),
(305, 20, 'Pontianak'),
(306, 20, 'Singkawang'),
(307, 21, 'Balangan'),
(308, 21, 'Banjar'),
(309, 21, 'Barito Kuala'),
(310, 21, 'Hulu Sungai Selatan'),
(311, 21, 'Hulu Sungai Tengah'),
(312, 21, 'Hulu Sungai Utara'),
(313, 21, 'Kotabaru'),
(314, 21, 'Tabalong'),
(315, 21, 'Tanah Bumbu'),
(316, 21, 'Tanah Laut'),
(317, 21, 'Tapin'),
(318, 21, 'Banjarbaru'),
(319, 21, 'Banjarmasin'),
(320, 22, 'Barito Selatan'),
(321, 22, 'Barito Timur'),
(332, 22, 'Barito Utara'),
(333, 22, 'Gunung Mas'),
(334, 22, 'Kapuas'),
(335, 22, 'Katingan'),
(336, 22, 'Kotawaringin Barat'),
(337, 22, 'Kotawaringin Timur'),
(338, 22, 'Lamandau'),
(339, 22, 'Murung Raya'),
(340, 22, 'Pulang Pisau'),
(341, 22, 'Sukamara'),
(342, 22, 'Seruyan'),
(343, 22, 'Palangka Raya'),
(344, 23, 'Berau'),
(345, 23, 'Kutai Barat'),
(346, 23, 'Kutai Kartanegara'),
(347, 23, 'Kutai Timur'),
(348, 23, 'Mahakam Ulu'),
(349, 23, 'Paser'),
(350, 23, 'Penajam Paser Utara'),
(351, 23, 'Balikpapan'),
(352, 23, 'Bontang'),
(353, 23, 'Samarinda'),
(354, 24, 'Bulungan'),
(355, 24, 'Malinau'),
(356, 24, 'Nunukan'),
(357, 24, 'Tana Tidung'),
(358, 24, 'Tarakan'),
(359, 25, 'Boalemo'),
(360, 25, 'Bone Bolango'),
(361, 25, 'Gorontalo'),
(362, 25, 'Gorontalo Utara'),
(363, 25, 'Pohuwato'),
(364, 25, 'Gorontalo'),
(365, 26, 'Bantaeng'),
(366, 26, 'Barru'),
(367, 26, 'Bone'),
(368, 26, 'Bulukumba'),
(369, 26, 'Enrekang'),
(370, 26, 'Gowa'),
(371, 26, 'Jeneponto'),
(372, 26, 'Kepulauan Selayar'),
(373, 26, 'Luwu'),
(374, 26, 'Luwu Timur'),
(375, 26, 'Luwu Utara'),
(376, 26, 'Maros'),
(377, 26, 'Pangkajene dan Kepulauan'),
(378, 26, 'Pinrang'),
(379, 26, 'Sidenreng Rappang'),
(380, 26, 'Sinjai'),
(381, 26, 'Soppeng'),
(382, 26, 'Takalar'),
(383, 26, 'Tana Toraja'),
(384, 26, 'Toraja Utara'),
(385, 26, 'Wajo'),
(386, 26, 'Makassar'),
(387, 26, 'Palopo'),
(389, 26, 'Parepare'),
(390, 27, 'Bombana'),
(391, 27, 'Buton'),
(392, 27, 'Buton Selatan'),
(393, 27, 'Buton Tengah'),
(394, 27, 'Buton Utara'),
(395, 27, 'Kolaka'),
(396, 27, 'Kolaka Timur'),
(397, 27, 'Kolaka Utara'),
(398, 27, 'Konawe'),
(399, 27, 'Konawe Kepulauan'),
(400, 27, ' Konawe Selatan'),
(401, 27, 'Konawe Utara'),
(402, 27, 'Muna'),
(403, 27, 'Muna Barat'),
(404, 27, 'Wakatobi'),
(405, 27, 'Bau-Bau'),
(406, 27, 'Kendari'),
(407, 28, 'Banggai'),
(408, 28, 'Banggai Kepulauan'),
(409, 28, 'Banggai Laut'),
(410, 28, 'Buol'),
(411, 28, 'Donggala'),
(412, 28, 'Morowali'),
(413, 28, 'Morowali Utara'),
(414, 28, 'Parigi Moutong'),
(415, 28, 'Poso'),
(416, 28, 'Sigi'),
(417, 28, 'Tojo Una-Una'),
(418, 28, 'Toli-Toli'),
(419, 28, 'Palu'),
(420, 29, 'Bolaang Mongondow'),
(421, 29, 'Bolaang Mongondow Selatan'),
(423, 29, 'Bolaang Mongondow Timur'),
(424, 29, 'Bolaang Mongondow Utara'),
(425, 29, 'Kepulauan Sangihe'),
(426, 29, 'Kepulauan Siau Tagulandang Biaro'),
(427, 29, 'Kepulauan Talaud'),
(428, 29, 'Minahasa'),
(429, 29, 'Minahasa Selatan'),
(430, 29, 'Minahasa Tenggara'),
(431, 29, 'Minahasa Utara'),
(432, 29, 'Bitung'),
(433, 29, 'Kotamobagu'),
(434, 29, 'Manado'),
(435, 29, 'Tomohon'),
(436, 30, 'Majene'),
(437, 30, 'Mamasa'),
(438, 30, 'Mamuju'),
(439, 30, 'Mamuju Tengah'),
(440, 30, 'Mamuju Utara'),
(441, 30, 'Polewali Mandar'),
(442, 30, 'Mamuju'),
(443, 31, 'Buru'),
(444, 31, 'Buru Selatan'),
(445, 31, 'Kepulauan Aru'),
(446, 31, 'Maluku Barat Daya'),
(447, 31, 'Maluku Tengah'),
(448, 31, 'Maluku Tenggara'),
(449, 31, 'Maluku Tenggara Barat'),
(450, 31, 'Seram Bagian Barat'),
(451, 31, 'Seram Bagian Timur'),
(452, 31, 'Ambon'),
(453, 31, 'Tual'),
(454, 32, 'Halmahera Barat'),
(455, 32, 'Halmahera Tengah'),
(456, 32, 'Halmahera Utara'),
(457, 32, 'Halmahera Selatan'),
(458, 32, 'Kepulauan Sula'),
(459, 32, 'Halmahera Timur'),
(460, 32, 'Pulau Morotai'),
(461, 32, 'Pulau Taliabu'),
(462, 32, 'Ternate'),
(463, 32, 'Tidore Kepulauan'),
(464, 33, 'Asmat'),
(465, 33, 'Biak Numfor'),
(466, 33, 'Boven Digoel'),
(467, 33, 'Deiyai'),
(468, 33, 'Dogiyai'),
(469, 33, 'Intan Jaya'),
(470, 33, 'Jayawijaya'),
(471, 33, 'Keerom'),
(472, 33, 'Kepulauan Yapen'),
(473, 33, 'Lanny Jaya'),
(474, 33, 'Mamberamo Raya'),
(475, 33, 'Mamberamo Tengah'),
(476, 33, 'Mappi'),
(477, 33, 'Merauke'),
(478, 33, 'Mimika'),
(479, 33, 'Nabire'),
(480, 33, 'Nduga'),
(490, 33, 'Paniai'),
(491, 33, 'Pegunungan Bintang'),
(492, 33, 'Puncak'),
(493, 33, 'Puncak Jaya'),
(494, 33, 'Sarmi'),
(495, 33, 'Supiori'),
(496, 33, 'Tolikara'),
(497, 33, 'Waropen'),
(499, 33, 'Yahukimo'),
(500, 33, 'Yalimo'),
(501, 33, 'Jayapura'),
(502, 34, 'Fakfak'),
(503, 34, 'Kaimana'),
(504, 34, 'Manokwari'),
(505, 34, 'Manokwari Selatan'),
(506, 34, 'Maybrat'),
(507, 34, 'Pegunungan Arfak'),
(508, 34, 'Raja Ampat'),
(509, 34, 'Sorong'),
(510, 34, 'Sorong Selatan'),
(511, 34, 'Tambrauw'),
(512, 34, 'Teluk Bintuni'),
(513, 34, 'Teluk Wondama');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `idm` int(10) NOT NULL,
  `kode_mapel` varchar(15) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `idk` int(10) NOT NULL,
  `kkm` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`idm`, `kode_mapel`, `nama_mapel`, `idk`, `kkm`) VALUES
(1, '027', 'Pendidikan Agama dan Budi Pekerti', 3, '75'),
(2, '027', 'Pendidikan Pancasila dan Kewarganegaraan', 3, '75'),
(3, '027', 'Bahasa Indonesia', 3, '75'),
(4, '027', 'Matematika', 3, '78'),
(5, '027', 'Ilmu Pengetahuan Alam', 3, '78'),
(6, '027', 'Ilmu Pengetahuan Sosial', 3, '78'),
(7, '220', 'Seni Budaya dan Prakarya', 3, '75'),
(8, '220', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 3, '75'),
(9, '027', 'Pendidikan Agama dan Budi Pekerti', 8, '79'),
(10, '154', 'Pendidikan Pancasila dan Kewarganegaraan', 8, '79'),
(11, '180', 'Bahasa Indonesia', 8, '79'),
(12, '204', 'Sejarah Indonesia', 8, '79'),
(13, '217', 'Seni Budaya', 8, '78'),
(14, '220', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 8, '78'),
(15, '227', 'Prakarya dan Kewirausahaan', 8, '78'),
(16, '180', 'Matematika', 8, '79'),
(17, '184', 'Fisika', 8, '78'),
(18, '187', 'Kimia', 8, '78'),
(19, '190', 'Biologi', 8, '78'),
(21, '157', 'Bahasa Inggris', 8, '78'),
(22, '027', 'Pendidikan Agama dan Budi Pekerti', 36, '79'),
(23, '154', 'Pendidikan Pancasila dan Kewarganegaraan', 36, '79'),
(24, '180', 'Bahasa Indonesia', 36, '79'),
(25, '204', 'Sejarah Indonesia', 36, '78'),
(26, '220', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 36, '78'),
(27, '227', 'Prakarya dan Kewirausahaan', 36, '78'),
(28, '180', 'Matematika', 36, '79'),
(29, '157', 'Bahasa Inggris', 36, '78'),
(30, '217', 'Seni Budaya', 36, '78'),
(31, '204', 'Sejarah', 36, '78'),
(32, '207', 'Geografi', 36, '78'),
(33, '210', 'Ekonomi', 36, '210'),
(34, '214', 'Sosiologi', 36, '78'),
(35, '027', 'Pendidikan Agama dan Budi Pekerti', 60, '78'),
(36, '027', 'Pendidikan Pancasila dan Kewarganegaraan', 60, '78'),
(37, '027', 'Bahasa Indonesia', 60, '78'),
(38, '027', 'Matematika', 60, '78'),
(39, '027', 'Ilmu Pengetahuan Alam', 60, '78'),
(40, '027', 'Ilmu Pengetahuan Sosial', 60, '78'),
(41, '220', 'Seni Budaya dan Prakarya', 60, '78'),
(42, '220', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 60, '78'),
(43, '154', 'Pendidikan Agama dan Budi Pekerti', 65, '78'),
(44, '154', 'Pendidikan Pancasila dan Kewarganegaraan', 65, '78'),
(45, '156', 'Bahasa Indonesia', 65, '78'),
(46, '180', 'Matematika', 65, '79'),
(47, '097', 'Ilmu Pengetahuan Alam', 65, '79'),
(48, '100', 'Ilmu Pengetahuan Sosial', 65, '79'),
(49, '157', 'Bahasa Inggris', 65, '78'),
(50, '217', 'Seni Budaya', 65, '77'),
(51, '220', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 65, '78'),
(52, '227', 'Prakarya ', 65, '77'),
(53, '810', 'Bimbingan dan Konseling', 65, '78'),
(54, '224', 'Teknologi Informasi dan Komunikasi', 65, '78'),
(55, '027', 'Pendidikan Agama Islam', 72, '78'),
(56, '027', 'Pendidikan Pancasila dan Kewarganegaraan', 72, '78'),
(57, '027', 'Bahasa Indonesia', 72, '78'),
(58, '027', 'Matematika', 72, '78'),
(59, '027', 'Ilmu Pengetahuan Alam', 72, '78'),
(60, '027', 'Ilmu Pengetahuan Sosial', 72, '78'),
(61, '027', 'Seni Budaya dan Prakarya', 72, '78'),
(62, '220', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 72, '78'),
(63, '224', 'Teknologi Informasi dan Komunikasi', 8, '77'),
(64, '027', 'Pendidikan Pancasila dan Kewarganegaraan', 73, '90'),
(65, '027', 'Pendidikan Pancasila dan Kewarganegaraan', 74, '78'),
(66, '027', 'Matematika', 74, '80'),
(68, '027', 'Pendidikan Pancasila dan Kewarganegaraan', 76, '80'),
(69, '027', 'Pendidikan Agama dan Budi Pekerti', 76, '100'),
(70, '027', 'Pendidikan Agama dan Budi Pekerti', 83, '79'),
(71, '027', 'Pendidikan Pancasila dan Kewarganegaraan', 83, '78'),
(73, '111', 'Pendidikan Pancasila dan Kewarganegaraan', 85, '80');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `idp` int(10) NOT NULL,
  `ids` int(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `tanggal` text NOT NULL,
  `keterangan_prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`idp`, `ids`, `nis`, `nama`, `nama_sekolah`, `alamat`, `nama_kelas`, `tahun_ajaran`, `tanggal`, `keterangan_prestasi`) VALUES
(1, 2, '0068789665', 'Bagas Baskoro', 'SD Muhammadiyah Insan Kreatif Kembaran', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'III', 'Gasal 2018/2019', '02 Juli 2018', 'Juara 2 lomba membaca puisi tingkat kecamatan.'),
(3, 4, '0020713811', 'Alfa Rizzy', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', '08 Agustus 2018', 'Peserta jambore seluruh sekolah dasar kabupaten kebumen, jawa tengah'),
(4, 6, '0081136944', 'Okta Dwi Priambogo', 'SD Islamiyah Warungboto', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'VI (Enam)', 'Gasal 2018/2019', '04 Januari 2018', 'Juara II Lomba Cerdas cermat antar sekolah dasar di provinsi yogyakarta'),
(5, 7, '0015013753', 'Ahmad Choirudin', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', '27 Agustus 2018', 'Juara 1 Lomba membaca alquran se Kabupaten Magelang.'),
(6, 8, '0091946329', 'Nur Alfi Latifah', 'SD Negeri Pandanretno', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'VI (Enam)', 'Gasal 2018/2019', '11 Juli 2018', 'Juara 3 dalam lomba bulu tangkis di kecamatan srumbung magelang'),
(7, 9, '0020687982', 'Rizki Satria Wijaya', 'SD Negeri 1 Klaten', 'Jl. Pemuda No.210, Pondok, Klaten Tengah, Kabupaten Klaten, Jawa Tengah 57411', 'I', 'Gasal 2018/2019', '16 Juli 2018', 'a'),
(8, 11, '0068799665', 'Azka Ilyas Andika', 'SMA Negeri 7 Yogyakarta', 'Jl. MT. Haryono No.47, Suryodiningratan, Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55141', 'X IPA 1', 'Gasal 2018/2019', '11 September 2018', 'juara 1'),
(10, 14, '0020687981', 'Panji Bintoro', 'SD Negeri Lempuyangan 1', 'Jl Lempuyangan yogyakarta', 'I (Satu)', 'Gasal 2018/2019', '12 Oktober 2018', 'Juara 1 Lomba qoriah'),
(12, 17, '0020687985', 'Panggah Widiandana', 'SD Rejowinangun', 'Kotagede, Yogyakarta', 'I (Satu)', 'Gasal 2018/2019', '03 Oktober 2018', 'Juara 1 lomba membaca puisi');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(11) NOT NULL,
  `nm_prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nm_prov`) VALUES
(1, 'Nanggro Aceh Darussalam'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Jambi'),
(7, 'Bengkulu'),
(8, 'Sumatera Selatan'),
(9, 'Bangka Belitung'),
(10, 'Lampung'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'DKI Jakarta'),
(14, 'Jawa Tengah'),
(15, 'Daerah Istimewa Yogyakarta '),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Selatan'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Gorontalo'),
(26, 'Sulawesi Selatan'),
(27, 'Sulawesi Tenggara'),
(28, 'Sulawesi Tengah'),
(29, 'Sulawesi Utara'),
(30, 'Sulawesi Barat'),
(31, 'Maluku'),
(32, 'Maluku Utara'),
(33, 'Papua '),
(34, 'Papua Barat');

-- --------------------------------------------------------

--
-- Table structure for table `rapor`
--

CREATE TABLE `rapor` (
  `idr` int(10) NOT NULL,
  `ids` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kkm` varchar(10) NOT NULL,
  `nilai_pengetahuan` varchar(20) NOT NULL,
  `predikat_pengetahuan` varchar(20) NOT NULL,
  `deskripsi_pengetahuan` text NOT NULL,
  `nilai_keterampilan` varchar(20) NOT NULL,
  `predikat_keterampilan` varchar(20) NOT NULL,
  `deskripsi_keterampilan` text NOT NULL,
  `dalam_mapel` varchar(20) NOT NULL,
  `antar_mapel` varchar(20) NOT NULL,
  `deskripsi_sikap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapor`
--

INSERT INTO `rapor` (`idr`, `ids`, `nama`, `nis`, `nama_sekolah`, `alamat`, `nama_kelas`, `tahun_ajaran`, `nama_mapel`, `kkm`, `nilai_pengetahuan`, `predikat_pengetahuan`, `deskripsi_pengetahuan`, `nilai_keterampilan`, `predikat_keterampilan`, `deskripsi_keterampilan`, `dalam_mapel`, `antar_mapel`, `deskripsi_sikap`) VALUES
(1, 2, 'Bagas Baskoro', '0068789665', 'SD Muhammadiyah Insan Kreatif Kembaran', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'III', 'Gasal 2018/2019', 'Pendidikan Agama dan Budi Pekerti', '75', '75', 'B', 'Ananda Bagas baik dalam memahami Q.S. al- Falaq dan Q.S. al- Fil dengan baik dan benar.', '75', 'B', 'Ananda Bagas baik dalam membaca Q.S. al- Falaq dan Q.S. al- Fil dengan tartil.', 'Baik', 'Baik', 'Ananda Bagas, baik dalam ketaatan berdoa sebelum dan sesudah melakukan kegiatan.'),
(2, 2, 'Bagas Baskoro', '0068789665', 'SD Muhammadiyah Insan Kreatif Kembaran', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'III', 'Gasal 2018/2019', 'Pendidikan Pancasila dan Kewarganegaraan', '75', '64', 'C', 'Ananda Bagas baik dalam mengidentifikasi pelaksanaan kewajiban dan hak sebagai warga masyarakat. Masih perlu bimbingan dalam memahami makna hubungan simbol dengan sila-sila Pancasila.', '64', 'C', 'Ananda Bagas baik dalam menyajikan hasil identifikasi pelaksanaan kewajiban dan hak warga masyarakat. Masih perlu bimbingan dalam menjelaskan makna hubungan simbol dengan makna sila-sila Pancasila sebagai satu kesatuan.', 'Baik', 'Baik', 'Ananda Bagas baik dalam memahami arti Pancasila sebagai dasar negara Indonesia.'),
(3, 2, 'Bagas Baskoro', '0068789665', 'SD Muhammadiyah Insan Kreatif Kembaran', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'III', 'Gasal 2018/2019', 'Bahasa Indonesia', '75', '60', 'C', 'Ananda Bagas cukup baik dalam mencermati keterhubungan antar gagasan yang didapat dari teks lisan, tulis, atau visual. Masih perlu bimbingan dalam menggali pengetahuan baru yang terdapat dari teks nonfiksi.', '60', 'C', 'Ananda Bagas cukup baik dalam menyajikan hasil pengamatan tentang keterhubungan antar gagasan ke dalam tulisan. Masih perlu bimbingan dalam menyampaikan pengetahuan baru dari teks nofiksi ke dalam tulisan dengan bahasa sendiri.', 'Baik', 'Baik', 'Ananda baik dalam bersikap dan berbicara.'),
(4, 2, 'Bagas Baskoro', '0068789665', 'SD Muhammadiyah Insan Kreatif Kembaran', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'III', 'Gasal 2018/2019', 'Matematika', '78', '63', 'C', 'Ananda Bagas baik dalam menjelaskan pecahan-pecahan senilai dengan gambar atau model kongkrit. Masih perlu bimbingan dalam menjelaskan berbagai bentuk pecahan dan hubungan diantaranya', '64', 'C', 'Ananda Bagas baik dalam mengidentifikasi pecahan-pecahan senilai dengan gambar atau model kongkrit. Masih perlu bimbingan dalam mengidentifikasi berbagai bentuk pecahan (biasa campuran, desimal, dan persen)', 'Baik', 'Baik', 'Ananda Bagas baik dalam mengerjakan tugas yang diberikan.'),
(5, 2, 'Bagas Baskoro', '0068789665', 'SD Muhammadiyah Insan Kreatif Kembaran', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'III', 'Gasal 2018/2019', 'Ilmu Pengetahuan Alam', '78', '59', 'C', 'Ananda Bagas cukup baik menganalisis hubungan antara bentuk dan fungsi bagian tubuh hewan dan tumbuhan. Masih perlu bimbingan dalam menerapkan sifat-sifat bunyi dan keterkaitannta dengan indera pendengaran.', '56', 'C', 'Ananda Bagas cukup baik dalam menyajikan laporan hasil pengamatan tentang berbagai bentuk energi. Masih perlu bimbingan dalam menyajikan laporan hasil pengamatan tentang bentuk dan fungsi bagian tubuh hewan dan tumbuhan', 'Baik', 'Baik', 'Ananda Bagas dalam disiplin waktu dan terbuka.'),
(6, 2, 'Bagas Baskoro', '0068789665', 'SD Muhammadiyah Insan Kreatif Kembaran', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'III', 'Gasal 2018/2019', 'Ilmu Pengetahuan Sosial', '78', '49', 'D', 'Ananda Bagas cukup baik mengidentifikasi karakteristik ruang pemanfaatan sumber daya alam. Masih perlu bimbingan dalam mengidentifikasi kegiatan ekonomi dan hubungannya dengan berbagai bidang pekerjaan.', '41', 'D', 'Ananda Bagas cukup baik dalam menyajikan hasil identifikasi karakteristik ruang dan pemanfaatan sumber daya alam. Masih perlu bimbingan menyajikan hasil identifikasi kegiatan ekonomi dalam meningkatkan kehidupan masyarakat.', 'Baik', 'Baik', 'Ananda Bagas dalam menghargai waktu dan selalu berdoa ketika memulai suatu kegiatan.'),
(7, 2, 'Bagas Baskoro', '0068789665', 'SD Muhammadiyah Insan Kreatif Kembaran', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'III', 'Gasal 2018/2019', 'Seni Budaya dan Prakarya', '75', '69', 'C', 'Ananda Bagas baik dalam memahami nada tempo dan tinggi rendah nada. Cukup baik dalam memahami karya seni rupa teknik tempel.', '69', 'C', 'Ananda Bagas baik dalam menampilkan tempo lambat, sedang dan cepat melalui lagu. Cukup baik dalam membuat karya kolase, montase, aplikasi dan mozaik.', 'Baik', 'Baik', 'Ananda Bagas baik memiliki sifat terbuka.'),
(8, 2, 'Bagas Baskoro', '0068789665', 'SD Muhammadiyah Insan Kreatif Kembaran', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'III', 'Gasal 2018/2019', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '75', '78', 'B', 'Ananda Bagas baik dalam menerapkan gerak dasar untuk membentuk gerak dasar seni bela diri. Baik dalam memahami variasi pola gerak dasar jalan, lari, lompat, dan lempar.', '78', 'B', 'Ananda Bagas baik dalam mempraktikkan gerak dasar untuk membentuk gerak dasar untuk membentuk gerak-gerak dasar seni bela diri. Baik dalam mempraktikkan variasi pola gerak dasar jalan, lari, lompat, dan lempar.', 'Baik', 'Baik', 'Ananda Bagas baik dalam bersikap dan tidak mudah menyerah.'),
(12, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Pendidikan Pancasila dan Kewarganegaraan', '75', '85', 'B+', 'Baik, sudah menguasai seluruh kompetensi terutama sangat baik dalam norma bermasyarakat dan bernegara namun kurang menguasai sejarah UUD 1945. Perlu meningkatkan pemahaman tentang sejarah UUD 1945', '86', 'B+', 'Sudah terampil dalam sebagian kompetensi, sangat baik dalam menyajikan tulisan sejarah UUD 1945, namn kurang menguasai tulisan sejarah pancasila. Perlu lebih tekun dalam memahami menyajikan tulisan sejarah pancasila.', 'Sangat Baik', 'Sangat Baik', 'Sikapnya belum konsisten karena hanya menunjukkan berperilaku beriman dan bertaqwa serta berahklaq mulia, semangat berbangsa, komitmen berbangsa , dan toleransi.'),
(13, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Bahasa Indonesia', '75', '90', 'A-', 'Baik, sudah memiliki sleuruh kompetensi, terutama sangat baik dalam menyusun teks cerita moral/fabel, urusan, diskusi, cerita prosedur, dan biografi namun kurang menguasai memahami teks cerita moral/fabel, ulasan, diskusi, cerita prosedur, dan biografi.', '90', 'A-', 'Sudah terampil dalam seluruh kompetensi, terutama sangat baik, dalam menyusun teks cerita moral/fabel, ulasan, diskusi, cerita prosedur dan biografi namun kurang menguasai memaknai teks cerita moral/fabel, lasan, diskusi, cerita prosedur, dan biografi.', 'Baik', 'Baik', 'Sudah konsisten menghargai dan bersyukur atas keberadaan bahasa indonesia. sudah menunjukkan semangat kebangsaan.'),
(14, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Sejarah Indonesia', '79', '80', 'B+', 'Baik sudah memiliki seluruh kompetensi, terutama sangat baik dalam perkembangan hindu budha dan islam namun kurang menguasai karakteristik kehidupan masyarakat, pemerintahan dan kebudayaan. Perlu meningkatkan pemahan tentang karakteristik kehidupan masyarakat pemerintah dan kebudayaan.', '80', 'B+', 'Baik, sudah terampil dalam kompetensi, sangat baik dalam menyajikan nilai-nilai unsur budaya hindu budha dan islam. Menyajikam nilai-nilai unsur budaya islam kurang menguasai mengolah informasi perkembangan kerajaan hindu budha, Pelu lebih tekun memahami dan mengolah informasi', 'Sangat Baik', 'Sangat Baik', 'Sudah konsisten mensyukuri anugrah tuhan akan keberadaan sejarah indoensia. sudah menunjukkan responsif'),
(15, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Seni Budaya', '78', '78', 'B', 'Baik, sudah memiliki seluruh kompetensi, terutama sangat baik dalam musik asambel namun kurang menguasai lagu daerah. Perlu meningkatkan pemahaman tentang lagu daerah.', '78', 'B', 'Sudah terampil dalam seluruh kompetensi, terutama sangat baik dalam membuat karya kriya kayu namun kurang menguasai menggambarkan ragam hias. Perlu lebih tekun dalam memahami menggambar ragam hias.', 'Sangat Baik', 'Baik', 'Sudah konsisten mengamalkan ajaran agama dengan baik sudah menunjukkan sikap apresiatif'),
(16, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', '78', '78', 'B', 'Sangat baik, sudah memiliki seluruh kompetensi, terutama sangat baik dalam olahraga bela diri namun kurang menguasai permainan bola kecil.', '78', 'B', 'Sudah terampil dalam dalam sebagian kompetensi, terutama sangat baik dalam melakukan teknik dasar permainan bola besar, melakukan teknik dasar permainan bola kecil, melakukan teknik dasar atletik namun kurang menguasai melakkan teknik dasar olahraga beladiri.', 'Sangat Baik', 'Sangat Baik', 'Sudah konsisten mengamalkan ajaran agamanya. Sudah menunjukkan sportif.'),
(17, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Prakarya dan Kewirausahaan', '78', '78', 'B', 'Baik, sudah memiliki seluruh kompetensi, terutama sangat baik dalam mengenal bahan kerajinan etnik namun kurang menguasai mengidentifikasi bahan kerajinan etnik.', '78', 'B', 'Sudah terampil memiliki seluruh kompetensi, sangat baik dalam membuat karya kerajinan etnik, memodifikasi karya kerajinan namun kurang menguasai. Perlu lebih tekun dalam memahami karya kerajinan etnik.', 'Sangat Baik', 'Sangat Baik', 'Sudah konsisten anugrah tuhan. menunjukkan perilaku jujur.'),
(18, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Matematika', '78', '78', 'B', 'Baik, sudah memiliki seluruh kompetensi, terutama sangat baik operasi hitung bilangan, himpuman namun kurang menguasai perbandingan bilangan', '79', 'B+', 'Sudah terampil dalam seluruh kompetensi, terutama sangat baik dalam menafsir bilangan dengan grafik namun kurang menguasi membuat tabel dan grafik.', 'Sangat Baik', 'Sangat Baik', 'Sikapnya baik. sudah konsisten mengamalkan ajaran agama. Sudah menunjukkan sikap jujur. tetapi perlu peningkatan dalam konsisten belajar.'),
(19, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Fisika', '78', '79', 'B+', 'Sudah baik dalam menghafalkan rumus gaya dan menghitungnya. Masih perlu bimbingan dalam menghitung pengukuran benda dengan menggunakan alat-alat.', '82', 'B+', 'Sudah baik dalam menerapkan rumus yang sudah diberikan. Maish perlu bimbingan dalam menyajikan pengukuran benda dengan menggunakan alat-alat.', 'Baik', 'Baik', 'Baik dalam memikirikan sebelum bertindak, namun masih perlu bimbingan untuk jangka panjang'),
(20, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Kimia', '78', '85', 'B+', 'Sangat baik dalam menjelaskan struktur atom berdasarkan teori atom bohr, sifat - sifat unsur, massa atom relatif, dan sifat-sifat periodik unsur dalam tabel periodik.', '84', 'B+', 'Baik dalam mendeskripsikan tata nama senyawa anorganik dan organik sederhana serta persamaan reaksinya', 'Baik', 'Baik', 'Sangat baik dalam berkomunikasi dengan sesama dan sangat toleransi.'),
(21, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Biologi', '78', '80', 'B+', 'Mengagumi keteraturan dan kompleksitas ciptaan tuhan tentang keanekaragaman hayati, ekosistem, dan lingkungan hidup', '81', 'B+', 'Sangat peka dan perduli terhadap permasalahan lingkungan hidup, menjaga dan menyayangi lingkungan sebagai manisfestasi pengalaman ajaran agama yang dianutnya.', 'Sangat Baik', 'Sangat Baik', 'Sangat baik dalam menjaga lingkungan sekitar dan cinta damai.'),
(22, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Bahasa Inggris', '78', '90', 'A-', 'Sangat baik dalam merespon makna secara akurat, lancar dan menerima dalm teks lisan fungsional teks pendek.', '89', 'A-', 'Sangat baik dalam menerima teks monolog sederhana yang menggunakan ragam bahasa lisan secara akurat dan lancar.', 'Baik', 'Baik', 'Sangat baik dalam menerima semua masukan dari teman maupun masyarakat sekitar'),
(23, 6, 'Okta Dwi Priambogo', '0081136944', 'SD Islamiyah Warungboto', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'VI (Enam)', 'Gasal 2018/2019', 'Pendidikan Agama dan Budi Pekerti', '75', '78', 'B', 'Ananda Okta baik dalam memahami Q.S. al- Falaq dan Q.S. al- Fil dengan baik dan benar. \r\n', '78', 'B', 'Ananda Okta baik dalam membaca Q.S. al- Falaq dan Q.S. al- Fil dengan tartil. \r\n', 'Baik', 'Baik', 'Ananda Okta, baik dalam ketaatan berdoa sebelum dan sesudah melakukan kegiatan. \r\n                                                                                        '),
(24, 6, 'Okta Dwi Priambogo', '0081136944', 'SD Islamiyah Warungboto', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'VI (Enam)', 'Gasal 2018/2019', 'Pendidikan Agama dan Budi Pekerti', '75', '80', 'B+', 'Ananda Okta baik dalam mengidentifikasi pelaksanaan kewajiban dan hak sebagai warga masyarakat. Masih perlu bimbingan dalam memahami makna hubungan simbol dengan sila-sila Pancasila. \r\n', '80', 'B+', 'Ananda Okta baik dalam menyajikan hasil identifikasi pelaksanaan kewajiban dan hak warga masyarakat. Masih perlu bimbingan dalam menjelaskan makna hubungan simbol dengan makna sila-sila Pancasila sebagai satu kesatuan. \r\n', 'Baik', 'Baik', 'Ananda Okta baik dalam memahami arti Pancasila sebagai dasar negara Indonesia. \r\n'),
(25, 6, 'Okta Dwi Priambogo', '0081136944', 'SD Islamiyah Warungboto', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'VI (Enam)', 'Gasal 2018/2019', 'Bahasa Indonesia', '75', '80', 'B+', 'Ananda Okta cukup baik dalam mencermati keterhubungan antar gagasan yang didapat dari teks lisan, tulis, atau visual. Masih perlu bimbingan dalam menggali pengetahuan baru yang terdapat dari teks nonfiksi. \r\n', '80', 'B+', 'Ananda Okta cukup baik dalam menyajikan hasil pengamatan tentang keterhubungan antar gagasan ke dalam tulisan. Masih perlu bimbingan dalam menyampaikan pengetahuan baru dari teks nofiksi ke dalam tulisan dengan bahasa sendiri. \r\n', 'Baik', 'Baik', 'Ananda Okta baik dalam bersikap dan berbicara. \r\n'),
(26, 6, 'Okta Dwi Priambogo', '0081136944', 'SD Islamiyah Warungboto', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'VI (Enam)', 'Gasal 2018/2019', 'Matematika', '78', '80', 'B', 'Ananda Okta baik dalam menjelaskan pecahan-pecahan senilai dengan gambar atau model kongkrit. Masih perlu bimbingan dalam menjelaskan berbagai bentuk pecahan dan hubungan diantaranya \r\n', '80', 'B', 'Ananda Okta baik dalam mengidentifikasi pecahan-pecahan senilai dengan gambar atau model kongkrit. Masih perlu bimbingan dalam mengidentifikasi berbagai bentuk pecahan (biasa campuran, desimal, dan persen) \r\n', 'Baik', 'Baik', 'Ananda Okta baik dalam mengerjakan tugas yang diberikan. \r\n'),
(27, 6, 'Okta Dwi Priambogo', '0081136944', 'SD Islamiyah Warungboto', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'VI (Enam)', 'Gasal 2018/2019', 'Ilmu Pengetahuan Alam', '78', '81', 'B+', 'Ananda Okta cukup baik menganalisis hubungan antara bentuk dan fungsi bagian tubuh hewan dan tumbuhan. Masih perlu bimbingan dalam menerapkan sifat-sifat bunyi dan keterkaitannta dengan indera pendengaran. ', '82', 'B+', 'Ananda Okta  cukup baik dalam menyajikan laporan hasil pengamatan tentang berbagai bentuk energi. Masih perlu bimbingan dalam menyajikan laporan hasil pengamatan tentang bentuk dan fungsi bagian tubuh hewan dan tumbuhan ', 'Baik', 'Baik', 'Ananda Okta  dalam disiplin waktu dan terbuka.                                            '),
(28, 6, 'Okta Dwi Priambogo', '0081136944', 'SD Islamiyah Warungboto', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'VI (Enam)', 'Gasal 2018/2019', 'Ilmu Pengetahuan Sosial', '78', '80', 'B+', 'Ananda Okta cukup baik mengidentifikasi karakteristik ruang pemanfaatan sumber daya alam. Masih perlu bimbingan dalam mengidentifikasi kegiatan ekonomi dan hubungannya dengan berbagai bidang pekerjaan. \r\n', '80', 'B+', 'Ananda Okta  cukup baik dalam menyajikan hasil identifikasi karakteristik ruang dan pemanfaatan sumber daya alam. Masih perlu bimbingan menyajikan hasil identifikasi kegiatan ekonomi dalam meningkatkan kehidupan masyarakat. ', 'Baik', 'Baik', 'Ananda Okta dalam menghargai waktu dan selalu berdoa ketika memulai suatu kegiatan. \r\n                                            '),
(29, 6, 'Okta Dwi Priambogo', '0081136944', 'SD Islamiyah Warungboto', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'VI (Enam)', 'Gasal 2018/2019', 'Seni Budaya dan Prakarya', '75', '81', 'B+', 'Ananda Okta baik dalam memahami nada tempo dan tinggi rendah nada. Cukup baik dalam memahami karya seni rupa teknik tempel. \r\n', '82', 'B+', 'Ananda Okta  baik dalam menampilkan tempo lambat, sedang dan cepat melalui lagu. Cukup baik dalam membuat karya kolase, montase, aplikasi dan mozaik. \r\n', 'Baik', 'Baik', 'Ananda Okta  baik memiliki sifat terbuka. \r\n                                            '),
(30, 6, 'Okta Dwi Priambogo', '0081136944', 'SD Islamiyah Warungboto', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'VI (Enam)', 'Gasal 2018/2019', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', '78', '80', 'B+', 'Ananda Okta baik dalam menerapkan gerak dasar untuk membentuk gerak dasar seni bela diri. Baik dalam memahami variasi pola gerak dasar jalan, lari, lompat, dan lempar. \r\n', '80', 'B+', 'Ananda okta baik dalam mempraktikkan gerak dasar untuk membentuk gerak dasar untuk membentuk gerak-gerak dasar seni bela diri. Baik dalam mempraktikkan variasi pola gerak dasar jalan, lari, lompat, dan lempar. \r\n', 'Baik', 'Baik', 'Ananda Okta baik dalam bersikap dan tidak mudah menyerah. '),
(31, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Pendidikan Agama dan Budi Pekerti', '78', '80', 'B+', 'Baik dan terbiasa membaca al-Quran dengan meyakini bahwa Allah Swt. akan meninggikan derajat orang yang beriman dan berilmu.\r\n', '80', 'B+', 'Baik sudah menunjukkan perilaku semangat menuntut ilmu sebagai implementasi Q.S. al-Mujadilah/58:11, Q.S. ar-Rahman /55: 33 dan Hadis terkait.\r\n', 'Baik', 'Baik', 'Baik sudah menghargai dan menghayati ajaran agama yang dianutnya dan menunjukkan perilaku jujur,disiplin, tanggung jawab, peduli(toleran, gotong royong), santun,percaya diri dalam berinteraksisecara efektif dengan lingkungansosial dan alam dalam jangkauanpergaulan dan keberadaannya.'),
(32, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Bahasa Indonesia', '78', '80', 'B+', 'Baik sudah memahami pengetahuan (faktual,konseptual, dan prosedural)berdasarkan rasa ingin tahunya\r\ntentang ilmu pengetahuan,teknologi, seni, budaya terkaitfenomena dan kejadian tampak mata', '80', 'B+', 'Baik sudah mencoba, mengolah, dan menyajikan dalam ranah konkret (menggunakan, mengurai,merangkai, memodifikasi, dan membuat) dan ranah abstrak(menulis, membaca, menghitung,menggambar, dan mengarang)\r\nsesuai dengan yang dipelajari disekolah dan sumber lain yang sama dalam sudut pandang/teori', 'Baik', 'Baik', 'Baik telah Menghargai dan menghayati ajaran agama yang dianutnya dan Menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli (toleransi,gotong royong), santun, dan percaya diri dalam berinteraksi secara efektif\r\ndengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya.'),
(33, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Pendidikan Pancasila dan Kewarganegaraan', '78', '81', 'B+', 'Baik Menghormati keberagaman norma-norma, suku, agama, ras dan antargolongan dalam bingkai Bhinneka Tunggal Ika sebagai sesama ciptaan Tuhan', '81', 'B+', 'Baik mendukung bentuk-bentuk kerja sama dalam berbagai bidang kehidupan di masyarakat', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik menghargai dan menghayati ajaran agama yang dianutnya dan Menunjukkan perilaku jujur,\r\ndisiplin, tanggung jawab, peduli (toleran, gotong royong), santun,dan percaya diri dalam berinteraksi\r\nsecara efektif dengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya'),
(34, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Matematika', '78', '80', 'B+', 'Baik sudah Mengaitkan rumus keliling dan luas untuk berbagai jenis segiempat (persegi, persegipanjang,\r\nbelahketupat, jajargenjang,trapesium, dan layang-layang) dan segitiga', '81', 'B+', 'Baik sudahenyelesaikan masalah yang berkaitan dengan urutan beberapa bilangan bulat dan pecahan (biasa,\r\ncampuran, desimal, persen)', 'Sangat Baik', 'Baik', 'Memahami pengetahuan (faktual,konseptual, dan prosedural)berdasarkan rasa ingin tahunya tentang ilmu pengetahuan, teknologi, seni, budaya terkait fenomena dan kejadian tampak mata'),
(35, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Ilmu Pengetahuan Alam', '78', '81', 'B+', 'Baik sudah dapat mengklasifikasikan makhluk hidupdan benda berdasarkan karakteristik yang diamati.', '82', 'B+', 'Baik sudah Menyajikan hasil pengklasifikasian makhluk hidup dan benda di lingkungan sekitar berdasarkan karakteristik yang diamati.', 'Sangat Baik', 'Sangat Baik', 'Baik sudah menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli (toleransi, gotong royong), santun, dan percaya diri, dalam berinteraksi secara efektif dengan lingkungan social dan alam dalam jangkauan pergaulan dan\r\nkeberadaannya.'),
(36, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Ilmu Pengetahuan Sosial', '78', '79', 'B+', 'Baik sudah memahami konsep ruang (lokasi,distribusi, potensi, iklim, bentuk muka bumi, geologis, flora, dan fauna)dan interaksi antarruang di Indonesia serta pengaruhnya terhadap kehidupan manusia dalam aspek\r\nekonomi, sosial, budaya, dan pendidikan.', '79', 'B+', 'Baik sudah menjelaskan konsep ruang (lokasi,distribusi, potensi, iklim, bentuk muka bumi, geologis, flora dan fauna)dan interaksi antarruang di Indonesia serta pengaruhnya terhadap kehidupan manusia Indonesia dalam\r\naspek ekonomi, sosial, budaya, dan pendidikan.', 'Baik', 'Baik', 'Baik sudah menghargai dan menghayati ajaran agama yang dianutnya.'),
(37, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Bahasa Inggris', '78', '81', 'B+', 'Baik sudah dapat mengidentifikasi fungsi sosial,struktur teks, dan unsur kebahasaan teks interaksi transaksional lisan dan tulis yang melibatkan tindakan memberi dan meminta informasi terkait jati diri, pendek dan sederhana, sesuai dengan konteks penggunaannya.Perhatikan unsur kebahasaan dan kosa kata terkait hubungan\r\nkeluarga; pronoun (subjective,objective, possessive)', '82', 'B+', 'Baik sudah menyusun teks interaksi transaksional lisan dan tulis sangat pendek dan sederhana yang\r\nmelibatkan tindakan memberi dan meminta informasi terkait jati diri, pendek dan sederhana, dengan\r\nmemperhatikan fungsi sosial, struktur teks, dan unsur kebahasaan yang benar dan sesuai konteks', 'Baik', 'Baik', 'Menghargai dan menghayati ajaran agama yang dianutnya'),
(38, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Seni Budaya', '78', '77', 'B', 'Baik sudah memahami prinsip dan prosedur menggambar gubahan flora, fauna, dan bentuk geometrik menjadi\r\nragam hias', '77', 'B', 'Baik sudah menggambar gubahan flora, fauna, dan bentuk geometrik menjadi ragam hias', 'Baik', 'Baik', 'Menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli(toleransi, gotong royong), santun, percaya diri, dalam berinteraksi secara efektif dengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya.'),
(39, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', '78', '79', 'B+', 'Baik sudah memahami konsep latihan peningkatan derajat kebugaran jasmani yang terkait dengan kesehatan (daya tahan, kekuatan, komposisi tubuh, dan kelenturan) dan pengukuran hasilnya.', '79', 'B+', 'Baik sudah mempraktikkan latihan peningkatan derajat kebugaran jasmani yang terkait dengan kesehatan (daya\r\ntahan, kekuatan, komposisi tubuh, dan kelenturan) dan pengukuran hasilnya', 'Sangat Baik', 'Sangat Baik', 'Menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli (toleransi,gotong royong), santun, dan percaya diri dalam berinteraksi secara efektif dengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannyaâ€.'),
(40, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Prakarya ', '77', '78', 'B+', 'Baik sudah memahami pengetahuan tentang prinsip perancangan, pembuatan,dan penyajian produk kerajinan dari\r\nbahan serat dan tekstil yang kreatifdan inovatif', '78', 'B+', 'Baik sudah merancang, membuat, dan menyajikan produk kerajinan dari bahan serat/tekstil yang kreatif dan\r\ninovatif, sesuai dengan potensi daerah setempat (misalnya rumput/ilalang, kapas, bulu domba, kulit kayu, kain, tali plastik dan lain-lain)', 'Baik', 'Baik', 'Menunjukan perilaku jujur, disiplin, tanggung jawab, peduli (toleransi,gotong royong), santun, dan percaya diri dalam berinteraksi secara efektif dengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya.'),
(41, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Bimbingan dan Konseling', '78', '78', 'B', 'Baik sudah mempelajari cara -cara pengambilan keputusan dan pemecahan masalah secara objektif', '78', 'B', 'Baik sudah menyadari akan keragaman alternatif keputusan dan konsekuensi yang dihadapinya.', 'Baik', 'Baik', 'Baik dalam berinteraksi dengan orang lain atas dasar kesamaan'),
(42, 7, 'Ahmad Choirudin', '0015013753', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'IX A', 'Gasal 2018/2019', 'Teknologi Informasi dan Komunikasi', '78', '81', 'B+', 'Baik sudah menggunakan Web Browser untuk memperoleh, menyimpan dan mencetak informasi', '82', 'B+', 'Baik sudah mengolah dokumen pengolah angka dengan variasi teks, tabel, grafik, gambar dan diagram untuk menghasilkan informasi', 'Baik', 'Baik', 'Baik sudah menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli (toleransi,gotong royong), santun, dan percaya diri, dalam berinteraksi secara efektif dengan lingkungan social dan alam dalam jangkauan pergaulan dan\r\nkeberadaannya.'),
(43, 8, 'Nur Alfi Latifah', '0091946329', 'SD Negeri Pandanretno', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'VI (Enam)', 'Gasal 2018/2019', 'Pendidikan Agama Islam', '78', '78', 'B', 'Baik sudah menerima keesaan Allah Swt. berdasarkan pengamatan terhadap dirinya dan makhluk ciptaan-Nya yang dijumpai di sekitar rumah dan sekolah.', '78', 'B', 'Baik sudah menunjukkan perilaku percaya diri sebagai implementasi pemahaman keesaan Allah Swt.', 'Baik', 'Baik', 'Baik sudah menunjukkan perilaku jujur, disiplin, tanggung jawab, santun, peduli, dan percaya diri dalam berinteraksi dengan keluarga, teman, dan guru'),
(44, 8, 'Nur Alfi Latifah', '0091946329', 'SD Negeri Pandanretno', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'VI (Enam)', 'Gasal 2018/2019', 'Pendidikan Pancasila dan Kewarganegaraan', '75', '80', 'B', 'Baik sudah memahami peran Indonesia dalam lingkungan negara-negara di Asia Tenggara.\r\n', '80', 'B', 'Baik sudah Menjelaskan pengertian kerjasama negara-negara Asia Tenggara.\r\n\r\n', 'Baik', 'Baik', 'Menunjukan perilaku jujur, disiplin, tanggung jawab, peduli (toleransi,gotong royong), santun, dan percaya diri dalam berinteraksi secara efektif dengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya.'),
(45, 8, 'Nur Alfi Latifah', '0091946329', 'SD Negeri Pandanretno', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'VI (Enam)', 'Gasal 2018/2019', 'Bahasa Indonesia', '75', '80', 'B+', 'Baik sudah menyampaikan informasi dari media, mengkritik/memuji, menceritakan hasil pengamatan/kunjungan, dan memerankan tokoh cerita', '80', 'B+', 'Baik sudah memerankan tokoh-tokoh berdasarkan cerita yang dibaca atau didengar dengan ekspresi yang sesuai', 'Baik', 'Baik', 'Baik sudah menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli (toleransi,gotong royong), santun, dan percaya diri, dalam berinteraksi secara efektif dengan lingkungan social dan alam dalam jangkauan pergaulan dan\r\nkeberadaannya'),
(46, 8, 'Nur Alfi Latifah', '0091946329', 'SD Negeri Pandanretno', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'VI (Enam)', 'Gasal 2018/2019', 'Matematika', '78', '80', 'B+', 'Baik sudah menjelaskan dan melakukan operasi penjumlahan, pengurangan, perkalian, dan pembagian yang melibatkan\r\nbilangan bulat negatif', '80', 'B+', 'Baik sudah menyelesaikan masalah yang berkaitan dengan operasi penjumlahan, pengurangan,perkalian, dan pembagian yangmelibatkan bilangan bulat negatif dalam kehidupan sehari-hari', 'Baik', 'Baik', 'Baik sudah menunjukkan perilaku jujur, disiplin, tanggung jawab,santun, peduli, dan percaya diri dalam berinteraksi dengan keluarga, teman,guru, dan tetangganya serta cinta tanah airâ€.'),
(47, 8, 'Nur Alfi Latifah', '0091946329', 'SD Negeri Pandanretno', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'VI (Enam)', 'Gasal 2018/2019', 'Ilmu Pengetahuan Alam', '78', '84', 'B+', 'Sangat baik menganalisis cara makhluk hidup menyesuaikan diri dengan lingkungan.', '85', 'B+', 'Sangat baik menyajikan karya tentang cara makhluk hidup menyesuaikan diri dengan lingkungannya, sebagai hasil\r\npenelusuran berbagai sumber', 'Sangat Baik', 'Sangat Baik', 'Sangat baik menunjukkan perilaku jujur, disiplin, tanggung jawab, santun, peduli,dan percaya diri dalam berinteraksi dengan keluarga, teman, guru, dan tetangganya serta cinta tanah air.'),
(48, 8, 'Nur Alfi Latifah', '0091946329', 'SD Negeri Pandanretno', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'VI (Enam)', 'Gasal 2018/2019', 'Ilmu Pengetahuan Sosial', '78', '80', 'B+', 'Baik sudah menganalisis perubahan sosial budaya dalam rangka modernisasi bangsa Indonesia.', '79', 'B+', 'Baik sudah menyajikan hasil analisis mengenai perubahan sosial budaya dalam rangka modernisasi bangsa Indonesia.', 'Baik', 'Baik', 'Baik sudah menunjukkan perilaku jujur, disiplin, tanggung jawab,santun, peduli, dan percaya diri dalam berinteraksi dengan keluarga, teman,guru, dan tetangganya serta cinta tanah air.'),
(49, 8, 'Nur Alfi Latifah', '0091946329', 'SD Negeri Pandanretno', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'VI (Enam)', 'Gasal 2018/2019', 'Seni Budaya dan Prakarya', '75', '80', 'B+', 'Baik sudah menyajikan tari bertema sesuai dengan rias dan busana gaya tari daerah dengan iringan', '84', 'B+', 'Baik sudah menggambar perspektif sederhana dengan menerapkan proporsi dan komposisi berdasarkan hasil pengamatan', 'Baik', 'Baik', 'Baik sudah menunjukkan perilaku jujur, disiplin, tanggung jawab, santun, peduli, dan percaya diri dalam berinteraksi dengan keluarga, teman, guru, dan tetangganya serta cinta tanah air.'),
(50, 8, 'Nur Alfi Latifah', '0091946329', 'SD Negeri Pandanretno', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'VI (Enam)', 'Gasal 2018/2019', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', '78', '78', 'B', 'Baik sudah memahami penggunaan variasi dan kombinasi gerak dasar rangkaian langkah dan ayunan lengan\r\nmengikuti irama (ketukan) tanpa/dengan musik dalam aktivitas gerak berirama.', '79', 'B+', 'Baik sudah mempraktikkan penggunaan variasi dan kombinasi gerak dasar rangkaian langkah dan ayunan\r\nlengan mengikuti irama (ketukan) tanpa/dengan musik dalam aktivitas gerak berirama.', 'Baik', 'Baik', 'Baik sudah menunjukkan perilaku jujur, disiplin, tanggung jawab,santun, peduli, dan percaya diri dalam berinteraksi dengan keluarga, teman,guru, dan tetangga serta cinta tanah air.'),
(51, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Teknologi Informasi dan Komunikasi', '78', '79', 'B+', 'Baik sudah mendeskripsikan fungsi, proses kerja komputer, dan telekomunikasi, serta berbagai peralatan teknologi informasi dan komunikasi', '79', 'B+', 'Baik sudah menerapkan prinsip-prinsip Kesehatan dan Keselamatan Kerja (K3) dalam menggunakan perangkat keras dan perangkat lunak teknologi Informasi dan komunikasi.', 'Baik', 'Baik', 'Baik sudah menunjukkan perilaku jujur, disiplin, tanggung jawab,santun, peduli, dan percaya diri dalam berinteraksi dengan keluarga, teman,guru, dan tetangga serta cinta tanah air.'),
(52, 9, 'Rizki Satria Wijaya', '0020687982', 'SD Negeri 1 Klaten', 'Jl. Pemuda No.210, Pondok, Klaten Tengah, Kabupaten Klaten, Jawa Tengah 57411', 'I', 'Gasal 2018/2019', 'Pendidikan Pancasila dan Kewarganegaraan', '75', '81', 'A-', 'a', '90', 'A', 'a', 'Sangat Baik', 'Baik', 'a'),
(53, 11, 'Azka Ilyas Andika', '0068799665', 'SMA Negeri 7 Yogyakarta', 'Jl. MT. Haryono No.47, Suryodiningratan, Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55141', 'X IPA 1', 'Gasal 2018/2019', 'Pendidikan Pancasila dan Kewarganegaraan', '75', '89', 'A', 'baik dalam belajar', '89', 'A', 'baik dalam berkomunikasi', 'Sangat Baik', 'Sangat Baik', 'Baik dalam gotong royong'),
(57, 14, 'Panji Bintoro', '0020687981', 'SD Negeri Lempuyangan 1', 'Jl Lempuyangan yogyakarta', 'I (Satu)', 'Gasal 2018/2019', 'Pendidikan Pancasila dan Kewarganegaraan', '80', '86', 'A', 'Baik sudah menghargai dan menghayati ajaran agama yang dianutnya dan menunjukkan perilaku jujur,disiplin, tanggung jawab, peduli(toleran, gotong royong), santun,percaya diri dalam berinteraksisecara efektif dengan lingkungansosial dan alam dalam jangkauanpergaulan dan keberadaannya.', '86', 'A', 'Baik sudah menghargai dan menghayati ajaran agama yang dianutnya dan menunjukkan perilaku jujur,disiplin, tanggung jawab, peduli(toleran, gotong royong), santun,percaya diri dalam berinteraksisecara efektif dengan lingkungansosial dan alam dalam jangkauanpergaulan dan keberadaannya.', 'Sangat Baik', 'Sangat Baik', 'Baik sudah menghargai dan menghayati ajaran agama yang dianutnya dan menunjukkan perilaku jujur,disiplin, tanggung jawab, peduli(toleran, gotong royong), santun,percaya diri dalam berinteraksisecara efektif dengan lingkungansosial dan alam dalam jangkauanpergaulan dan keberadaannya.                                                            '),
(58, 4, 'Alfa Rizzy', '0020713811', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'X IPA 1', 'Gasal 2018/2019', 'Pendidikan Agama dan Budi Pekerti', '79', '79', 'A', 'Baik dan terbiasa membaca al-Quran dengan meyakini bahwa Allah Swt. akan meninggikan derajat orang yang beriman dan berilmu.\r\n', '80', 'A', 'Baik sudah menunjukkan perilaku semangat menuntut ilmu sebagai implementasi Q.S. al-Mujadilah/58:11, Q.S. ar-Rahman /55: 33 dan Hadis terkait.\r\n', 'Sangat Baik', 'Sangat Baik', 'Baik sudah menghargai dan menghayati ajaran agama yang dianutnya dan menunjukkan perilaku jujur,disiplin, tanggung jawab, peduli(toleran, gotong royong), santun,percaya diri dalam berinteraksisecara efektif dengan lingkungansosial dan alam dalam jangkauanpergaulan dan keberadaannya.'),
(59, 14, 'Panji Bintoro', '0020687981', 'SD Negeri Lempuyangan 1', 'Jl Lempuyangan yogyakarta', 'I (Satu)', 'Gasal 2018/2019', 'Pendidikan Agama dan Budi Pekerti', '100', '100', 'A', 'Baik sudah menghargai dan menghayati ajaran agama yang dianutnya dan menunjukkan perilaku jujur,disiplin, tanggung jawab, peduli(toleran, gotong royong), santun,percaya diri dalam berinteraksisecara efektif dengan lingkungansosial dan alam dalam jangkauanpergaulan dan keberadaannya.', '100', 'A', 'Baik sudah menghargai dan menghayati ajaran agama yang dianutnya dan menunjukkan perilaku jujur,disiplin, tanggung jawab, peduli(toleran, gotong royong), santun,percaya diri dalam berinteraksisecara efektif dengan lingkungansosial dan alam dalam jangkauanpergaulan dan keberadaannya.', 'Sangat Baik', 'Sangat Baik', 'Baik sudah menghargai dan menghayati ajaran agama yang dianutnya dan menunjukkan perilaku jujur,disiplin, tanggung jawab, peduli(toleran, gotong royong), santun,percaya diri dalam berinteraksisecara efektif dengan lingkungansosial dan alam dalam jangkauanpergaulan dan keberadaannya.'),
(60, 17, 'Panggah Widiandana', '0020687985', 'SD Rejowinangun', 'Kotagede, Yogyakarta', 'I (Satu)', 'Gasal 2018/2019', 'Pendidikan Pancasila dan Kewarganegaraan', '80', '88', 'A-', 'Baik sekali', '90', 'A-', 'Baik sekali', 'Baik', 'Baik', 'Baik sekali                             ');

-- --------------------------------------------------------

--
-- Table structure for table `rapor_keterampilan`
--

CREATE TABLE `rapor_keterampilan` (
  `id_rapor` int(5) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(15) DEFAULT NULL,
  `sekolah` varchar(100) DEFAULT NULL,
  `tahun_pelajaran` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `pai_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `pai_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `pai_keterampilan_deskripsi` text DEFAULT NULL,
  `matematika_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `matematika_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `matematika_keterampilan_deskripsi` text DEFAULT NULL,
  `bhs_indonesia_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `bhs_indonesia_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `bhs_indonesia_keterampilan_deskripsi` text DEFAULT NULL,
  `ipa_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `ipa_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `ipa_keterampilan_deskripsi` text DEFAULT NULL,
  `ips_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `ips_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `ips_keterampilan_deskripsi` text DEFAULT NULL,
  `olahraga_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `olahraga_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `olahraga_keterampilan_deskripsi` text DEFAULT NULL,
  `pkn_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `pkn_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `pkn_keterampilan_deskripsi` text DEFAULT NULL,
  `bhs_jawa_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `bhs_jawa_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `bhs_jawa_keterampilan_deskripsi` text DEFAULT NULL,
  `sdbp_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `sdbp_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `sdbp_keterampilan_deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rapor_kondisi`
--

CREATE TABLE `rapor_kondisi` (
  `idrk` int(10) NOT NULL,
  `ids` int(10) DEFAULT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tahun_ajaran` varchar(20) DEFAULT NULL,
  `nama_kelas` varchar(10) DEFAULT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nama_ekstra1` varchar(20) DEFAULT NULL,
  `nama_ekstra2` varchar(20) DEFAULT NULL,
  `nilai_ekstra1` varchar(20) DEFAULT NULL,
  `nilai_ekstra2` varchar(20) DEFAULT NULL,
  `ket_sakit` varchar(10) DEFAULT NULL,
  `ket_izin` varchar(10) DEFAULT NULL,
  `ket_alpa` varchar(10) DEFAULT NULL,
  `kelakuan` text DEFAULT NULL,
  `kerajinan` text DEFAULT NULL,
  `kerapihan` text DEFAULT NULL,
  `kebersihan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rapor_langsung`
--

CREATE TABLE `rapor_langsung` (
  `id_raporlangsung` int(5) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kkm` varchar(100) DEFAULT NULL,
  `pai_nilai` varchar(100) DEFAULT NULL,
  `pai_predikat` varchar(15) DEFAULT NULL,
  `pai_deskripsi` text DEFAULT NULL,
  `matematika_nilai` varchar(100) DEFAULT NULL,
  `matematika_predikat` varchar(15) DEFAULT NULL,
  `matematika_deskripsi` text DEFAULT NULL,
  `bhs_indonesia_nilai` varchar(100) DEFAULT NULL,
  `bhs_indonesia_predikat` varchar(15) DEFAULT NULL,
  `bhs_indonesia_deskripsi` text DEFAULT NULL,
  `ipa_nilai` varchar(100) DEFAULT NULL,
  `ipa_predikat` varchar(15) DEFAULT NULL,
  `ipa_deskripsi` text DEFAULT NULL,
  `ips_nilai` varchar(100) DEFAULT NULL,
  `ips_predikat` varchar(15) DEFAULT NULL,
  `ips_deskripsi` text DEFAULT NULL,
  `olahraga_nilai` varchar(100) DEFAULT NULL,
  `olahraga_predikat` varchar(15) DEFAULT NULL,
  `olahraga_deskripsi` text DEFAULT NULL,
  `pkn_nilai` varchar(100) DEFAULT NULL,
  `pkn_predikat` varchar(15) DEFAULT NULL,
  `pkn_deskripsi` text DEFAULT NULL,
  `bhs_jawa_nilai` varchar(100) DEFAULT NULL,
  `bhs_jawa_predikat` varchar(15) DEFAULT NULL,
  `bhs_jawa_deskripsi` text DEFAULT NULL,
  `sdbp_nilai` varchar(100) DEFAULT NULL,
  `sdbp_predikat` varchar(15) DEFAULT NULL,
  `sdbp_deskripsi` text DEFAULT NULL,
  `pai_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `pai_keteramilan_predikat` varchar(15) DEFAULT NULL,
  `pai_keterampilan_deskripsi` text DEFAULT NULL,
  `matematika_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `matematika_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `matematika_keterampilan_dekripsi` text DEFAULT NULL,
  `bhs_indonesia_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `bhs_indonesia_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `bhs_indonesia_ketereampilan_deskripsi` text DEFAULT NULL,
  `ipa_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `ipa_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `ipa_keterampilan_deskripsi` text DEFAULT NULL,
  `ips_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `ips_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `ips_keterampilan_deskripsi` text DEFAULT NULL,
  `olahraga_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `olahraga_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `olahraga_keterampilan_deskripsi` text DEFAULT NULL,
  `pkn_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `pkn_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `pkn_keterampilan_deskripsi` text DEFAULT NULL,
  `bhs_jawa_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `bhs_jawa_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `bhs_jawa_keterampilan_deskripsi` text DEFAULT NULL,
  `sdbp_keterampilan_nilai` varchar(100) DEFAULT NULL,
  `sdbp_keterampilan_predikat` varchar(15) DEFAULT NULL,
  `sdbp_keterampilan_deskripsi` text DEFAULT NULL,
  `sikap_spiritual` text DEFAULT NULL,
  `sikap_sosial` text DEFAULT NULL,
  `exs1_nama` varchar(30) DEFAULT NULL,
  `exs1_nilai` varchar(100) DEFAULT NULL,
  `exs1_predikat` text DEFAULT NULL,
  `exs2_nama` varchar(30) DEFAULT NULL,
  `exs2_nilai` varchar(100) DEFAULT NULL,
  `exs2_predikat` text DEFAULT NULL,
  `exs3_nama` varchar(30) DEFAULT NULL,
  `exs3_nilai` varchar(100) DEFAULT NULL,
  `exs3_predikat` text DEFAULT NULL,
  `exs4_nama` varchar(30) DEFAULT NULL,
  `exs4_nilai` varchar(100) DEFAULT NULL,
  `exs4_predikat` text DEFAULT NULL,
  `tinggi_badan1` varchar(100) DEFAULT NULL,
  `tinggi_badan2` varchar(100) DEFAULT NULL,
  `berat_badan1` varchar(100) DEFAULT NULL,
  `berat_badan2` varchar(100) DEFAULT NULL,
  `pendengaran` varchar(10) DEFAULT NULL,
  `penglihatan` varchar(10) DEFAULT NULL,
  `gigi` varchar(10) DEFAULT NULL,
  `prestasi1_jenis` varchar(50) DEFAULT NULL,
  `prestasi1_keterangan` varchar(50) DEFAULT NULL,
  `prestasi2_jenis` varchar(50) DEFAULT NULL,
  `prestasi2_keterangan` varchar(50) DEFAULT NULL,
  `prestasi3_jenis` varchar(50) DEFAULT NULL,
  `prestasi3_keterangan` varchar(50) DEFAULT NULL,
  `sakit` varchar(50) DEFAULT NULL,
  `izin` varchar(50) DEFAULT NULL,
  `alpa` varchar(50) DEFAULT NULL,
  `saran` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rapor_pengetahuan`
--

CREATE TABLE `rapor_pengetahuan` (
  `id_rapor` int(5) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(15) DEFAULT NULL,
  `sekolah` varchar(100) DEFAULT NULL,
  `tahun_pelajaran` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kkm` varchar(100) DEFAULT NULL,
  `pai_nilai` varchar(100) DEFAULT NULL,
  `pai_predikat` varchar(15) DEFAULT NULL,
  `pai_deskripsi` text DEFAULT NULL,
  `matematika_nilai` varchar(100) DEFAULT NULL,
  `matematika_predikat` varchar(15) DEFAULT NULL,
  `matematika_deskripsi` text DEFAULT NULL,
  `bhs_indonesia_nilai` varchar(100) DEFAULT NULL,
  `bhs_indonesia_predikat` varchar(15) DEFAULT NULL,
  `bhs_indonesia_deskripsi` text DEFAULT NULL,
  `ipa_nilai` varchar(100) DEFAULT NULL,
  `ipa_predikat` varchar(15) DEFAULT NULL,
  `ipa_deskripsi` text DEFAULT NULL,
  `ips_nilai` varchar(100) DEFAULT NULL,
  `ips_predikat` varchar(15) DEFAULT NULL,
  `ips_deskripsi` text DEFAULT NULL,
  `olahraga_nilai` varchar(100) DEFAULT NULL,
  `olahraga_predikat` varchar(15) DEFAULT NULL,
  `olahraga_deskripsi` text DEFAULT NULL,
  `pkn_nilai` varchar(100) DEFAULT NULL,
  `pkn_predikat` varchar(15) DEFAULT NULL,
  `pkn_deskripsi` text DEFAULT NULL,
  `bhs_jawa_nilai` varchar(100) DEFAULT NULL,
  `bhs_jawa_predikat` varchar(15) DEFAULT NULL,
  `bhs_jawa_deskripsi` text DEFAULT NULL,
  `sdbp_nilai` varchar(100) DEFAULT NULL,
  `sdbp_predikat` varchar(15) DEFAULT NULL,
  `sdbp_deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rapor_pribadi`
--

CREATE TABLE `rapor_pribadi` (
  `id_rapor` int(5) NOT NULL,
  `nis` varchar(20) DEFAULT '',
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(15) DEFAULT NULL,
  `sekolah` varchar(100) DEFAULT NULL,
  `tahun_pelajaran` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `sikap_spiritual` text DEFAULT NULL,
  `sikap_sosial` text DEFAULT NULL,
  `exs1_nama` varchar(30) DEFAULT NULL,
  `exs1_nilai` varchar(100) DEFAULT NULL,
  `exs1_predikat` text DEFAULT NULL,
  `exs2_nama` varchar(30) DEFAULT '',
  `exs2_nilai` varchar(100) DEFAULT '',
  `exs2_predikat` text DEFAULT NULL,
  `exs3_nama` varchar(30) DEFAULT '',
  `exs3_nilai` varchar(100) DEFAULT NULL,
  `exs3_predikat` text DEFAULT NULL,
  `exs4_nama` varchar(30) DEFAULT NULL,
  `exs4_nilai` varchar(100) DEFAULT NULL,
  `exs4_predikat` text DEFAULT NULL,
  `tinggi_badan1` varchar(100) DEFAULT NULL,
  `tinggi_badan2` varchar(100) DEFAULT NULL,
  `berat_badan1` varchar(100) DEFAULT NULL,
  `berat_badan2` varchar(100) DEFAULT NULL,
  `pendengaran` varchar(10) DEFAULT NULL,
  `penglihatan` varchar(10) DEFAULT NULL,
  `gigi` varchar(10) DEFAULT '',
  `prestasi1_jenis` varchar(50) DEFAULT NULL,
  `prestasi1_keterangan` varchar(50) DEFAULT NULL,
  `prestasi2_jenis` varchar(50) DEFAULT NULL,
  `prestasi2_keterangan` varchar(50) DEFAULT NULL,
  `prestasi3_jenis` varchar(50) DEFAULT NULL,
  `prestasi3_keterangan` varchar(50) DEFAULT NULL,
  `prestasi1_tgl` text DEFAULT NULL,
  `prestasi2_tgl` text DEFAULT NULL,
  `prestasi3_tgl` text DEFAULT NULL,
  `sakit` varchar(50) DEFAULT NULL,
  `izin` varchar(50) DEFAULT NULL,
  `alpa` varchar(50) DEFAULT NULL,
  `saran` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(10) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `kode_sekolah` varchar(10) NOT NULL,
  `nama_kepala` varchar(100) NOT NULL,
  `nip_kepala` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(15) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `provinsi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `kode_sekolah`, `nama_kepala`, `nip_kepala`, `alamat`, `kabupaten`, `nama_file`, `tipe_file`, `ukuran_file`, `file`, `status`, `provinsi`) VALUES
(1, 'SD Muhammadiyah Insan Kreatif Kembaran', '20409856', '', '0', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'Bantul', 'SD Muhika', 'jpg', '297166', '../files/SD Muhika.jpg', 'Swasta', 15),
(3, 'SMA Muhammadiyah 2 Yogyakarta', '20403158', '', '0', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'Yogyakarta', 'SMA Muh02', 'jpg', '36681', '../files/SMA Muh02.jpg', 'Swasta', 15),
(5, 'SD Islamiyah Warungboto', '20403409', '', '0', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'Yogyakarta', 'SD Islamiyah', 'png', '47337', '../files/SD Islamiyah.png', 'Swasta', 15),
(6, 'SD Negeri Pandanretno', '20308020', '', '0', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'Magelang', 'SD Pandaretno', 'png', '321644', '../files/SD Pandaretno.png', 'Negeri', 14),
(7, 'Mts Aswaja', '12308014', '', '0', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'Magelang', 'mts aswaja', 'jpg', '104723', '../files/mts aswaja.jpg', 'Swasta', 14),
(14, 'SD Negeri 1 Klaten', '20309831', '', '0', 'Jl. Pemuda No.210, Pondok, Klaten Tengah, Kabupaten Klaten, Jawa Tengah 57411', 'Aceh Barat Daya', 'SD Klatenn', 'jpg', '301783', '../files/SD Klatenn.jpg', 'Negeri', 14),
(15, 'SD Negeri Lempuyangan 1', '20403420', '', '0', 'Jl Lempuyangan yogyakarta', 'Yogyakarta', 'SD lempuyangan', 'png', '321644', '../files/SD lempuyangan.png', 'Negeri', 15),
(16, 'SMA Negeri 7 Yogyakarta', '20403170', '', '0', 'Jl. MT. Haryono No.47, Suryodiningratan, Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55141', 'Yogyakarta', 'SMAN 4yog', 'jpg', '73642', '../files/SMAN 4yog.jpg', 'Negeri', 15),
(17, 'SD Warungboto', '20403480', '', '0', 'Jl Prof Soepomo', 'Yogyakarta', 'Sd warungboto', 'png', '47337', '../files/Sd warungboto.png', 'Negeri', 15),
(18, 'SD Rejowinangun', '20403447', '', '0', 'Kotagede, Yogyakarta', 'Yogyakarta', 'SD Rejowinangun', 'png', '321644', '../files/SD Rejowinangun.png', 'Swasta', 15),
(19, 'SDN 2 Glagah Temon Kulon Progo', '11223344', 'SARDAL, S.Pd.', '196404211985061001', 'jl. daedeles glagah', 'Kulon Progo', 'SDN 2 Glagah Temon Kulon Progo', 'png', '64702', '../files/SDN 2 Glagah Temon Kulon Progo.png', 'Negeri', 15),
(20, 'SD Negeri 2 Glagah', '12412489', 'SARDAL, S.Pd.', '196404211985061001', 'Jl. Daendels', 'Kulon Progo', 'SD Negeri 2 Glagah', 'jpg', '10795', '../files/SD Negeri 2 Glagah.jpg', 'Negeri', 15),
(21, 'SDIT lukman hakim', '98763876', '', '', 'yogyakarta', 'Yogyakarta', 'sdit LH', 'jpg', '5206972', '../files/sdit LH.jpg', 'Swasta', 15);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ids` int(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `idk` int(10) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `bapak` varchar(50) NOT NULL,
  `k_bapak` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `k_ibu` varchar(50) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` text NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(100) NOT NULL,
  `ukuran_file` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `nama_barcode` varchar(100) NOT NULL,
  `tipe_barcode` varchar(100) NOT NULL,
  `ukuran_barcode` varchar(100) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `pass` text NOT NULL,
  `waliname` varchar(100) NOT NULL,
  `walipass` text NOT NULL,
  `wali_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idu` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` text NOT NULL,
  `id_sekolah` int(10) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idu`, `nama`, `username`, `pass`, `id_sekolah`, `level`) VALUES
(1, 'lukman', 'lukman', 'b5bbc8cf472072baffe920e4e28ee29c', 21, 'admin_guru');

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `idw` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `idk` int(10) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(100) NOT NULL,
  `ukuran_file` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`idw`, `nip`, `nama`, `nama_lengkap`, `jk`, `alamat`, `idk`, `tlp`, `nama_file`, `tipe_file`, `ukuran_file`, `file`, `pass`) VALUES
(1, '197925101982022004', 'Shofya Nur Kartika', '', 'P', 'Kasihan, Bantul, Yogyakarta', 3, '085869745562', '', '', '0', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(3, '197611072000121001', 'Dwi Jayanti,S.Pd', '', 'P', 'Semaki, Yogyakarta', 8, '082324693424', 'a', 'jpg', '932610', '../files/a.jpg', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(4, '197611072000121876', 'Agus Winoto, S.Pd', '', 'L', 'Lempuyangan, Yogyakarta', 8, '085864396655', 'coba', 'jpg', '2278269', '../files/coba.jpg', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(5, '198911072000121001', 'Rodliyah Rahmadhani,S.Tp', '', 'P', 'Warungboto, Yogyakarta', 60, '082280278566', '', '', '0', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(6, '123456789098799076', 'Syaefuddin, S.Pd', '', 'L', 'Selosari, Dukun Magelang', 65, '082263985665', '', '', '0', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(7, '196903041988664102', 'Sarju,S.Pd', '', 'L', 'Pelas. Srumbung Magelang', 72, '085236645978', '', '', '0', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(8, '197925101982022222', 'Arif Hakim Dwiyanta,S.Pd', '', 'L', 'solo', 73, '082280278566', '', '', '0', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(9, '196103041982022006', 'M. Ernawati M., S.Pd.', '', 'P', 'jogja', 74, '082280278566', '', '', '0', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(11, '196103041982022066', 'Gunawan Subianto, S.Ag', '', 'L', 'Yogyakarta', 76, '082166359578', '', '', '0', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(13, '197203022000121008', 'Aan Gutawa, S.Pd', '', 'L', 'Yogyakarta', 85, '085869745562', '', '', '0', '', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(14, '196307021983032007', 'kamsih', 'KAMSIH, S.Pd.SD', 'P', 'jl. daendeles glagah', 86, '08123456789', 'kamsih', 'jpg', '3654', '../files/kamsih.jpg', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(15, '564654645465468765', 'fulan', '', 'L', 'kulonprogo', 87, '809889678', 'fulan', 'jpg', '30102', '../files/fulan.jpg', '59ee8bd9e54c300ed35f1ead57cfdcf0'),
(17, '123456789075421456', 'udin', '', 'L', 'bantul', 88, '12345232', 'udin', 'jpg', '5206972', '../files/udin.jpg', '6bec9c852847242e384a4d5ac0962ba0'),
(18, '897645312678956487', 'rahmann', '', 'L', 'jogjakarta', 88, '8987987987', 'rahmann', 'jpg', '122018', '../files/rahmann.jpg', 'cb9e11114127cd2da27b64ed3db9fe9e'),
(19, '178372947821647328', 'walikelas', '', 'L', 'jogja', 89, '7892173981', 'wali3', 'jpg', '122018', '../files/wali3.jpg', '497e2027d0d901be26f6b3c90770a051'),
(20, '123456789075421489', 'hakim', '', 'L', 'yogyakarta', 90, '78987979', 'lukmanhakim', 'jpg', '59555', '../files/lukmanhakim.jpg', '454126ed7b2d002179ae23fd2d2b459e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`ida`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idn`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`idek`);

--
-- Indexes for table `gurumapel`
--
ALTER TABLE `gurumapel`
  ADD PRIMARY KEY (`idg`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idk`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`idm`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `rapor`
--
ALTER TABLE `rapor`
  ADD PRIMARY KEY (`idr`);

--
-- Indexes for table `rapor_keterampilan`
--
ALTER TABLE `rapor_keterampilan`
  ADD PRIMARY KEY (`id_rapor`);

--
-- Indexes for table `rapor_kondisi`
--
ALTER TABLE `rapor_kondisi`
  ADD PRIMARY KEY (`idrk`);

--
-- Indexes for table `rapor_langsung`
--
ALTER TABLE `rapor_langsung`
  ADD PRIMARY KEY (`id_raporlangsung`);

--
-- Indexes for table `rapor_pengetahuan`
--
ALTER TABLE `rapor_pengetahuan`
  ADD PRIMARY KEY (`id_rapor`);

--
-- Indexes for table `rapor_pribadi`
--
ALTER TABLE `rapor_pribadi`
  ADD PRIMARY KEY (`id_rapor`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idu`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`idw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `ida` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `idek` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gurumapel`
--
ALTER TABLE `gurumapel`
  MODIFY `idg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `idm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `idp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rapor`
--
ALTER TABLE `rapor`
  MODIFY `idr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `rapor_keterampilan`
--
ALTER TABLE `rapor_keterampilan`
  MODIFY `id_rapor` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rapor_kondisi`
--
ALTER TABLE `rapor_kondisi`
  MODIFY `idrk` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rapor_langsung`
--
ALTER TABLE `rapor_langsung`
  MODIFY `id_raporlangsung` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rapor_pengetahuan`
--
ALTER TABLE `rapor_pengetahuan`
  MODIFY `id_rapor` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rapor_pribadi`
--
ALTER TABLE `rapor_pribadi`
  MODIFY `id_rapor` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `ids` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `idw` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
