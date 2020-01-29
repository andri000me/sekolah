-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2020 pada 01.21
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `ids` int(10) NOT NULL AUTO_INCREMENT,
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
  `wali_status` int(2) NOT NULL,
  PRIMARY KEY (`ids`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`ids`, `nis`, `nisn`, `nama`, `jk`, `alamat`, `idk`, `tlp`, `bapak`, `k_bapak`, `ibu`, `k_ibu`, `tempat`, `tanggal`, `tahun_ajaran`, `nama_file`, `tipe_file`, `ukuran_file`, `file`, `nama_barcode`, `tipe_barcode`, `ukuran_barcode`, `barcode`, `pass`, `waliname`, `walipass`, `wali_status`) VALUES
(79, '1099', '0106763338', 'Arka Ra\'if Hamdani', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Tukirmidi', 'Tani', 'Bandiyah', 'Tani', 'Kulon Progo', ' 6 Agustus 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'a0160709701140704575d499c997b6ca', 'Bandiyah', '987cb39fe43a903c22d0534f87ea015e', 0),
(80, '1100', '0104109897', 'Athaya Alifia Maulida Azahra', 'L', 'Bebekan, Glagah, Temon, Kulon Progo', 86, '', 'Dargo Wardoyo', 'Wiraswasta', 'Irawati', 'IRT', 'Kulon Progo', ' 9 Agustus 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '1e6e0a04d20f50967c64dac2d639a577', 'Irawati', '1e3a577d20467394c2461f77900850d8', 0),
(81, '1101', '0108162846', 'Danar Neva Patrias', 'L', 'Sangkretan, Glagah, Temon, Kulon Progo', 86, '', 'Sujiyatna', 'Karyawan Swasta', 'Nur Sriwi Hidayati', 'IRT', 'Kulon Progo', ' 21 November 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'c6bff625bdb0393992c9d4db0c6bbe45', 'Nur Sriwi Hidayati', '16d7c0c34036c1d8ab3b24635231f59a', 0),
(82, '1102', '0103378169', 'Davila Rebiyansa Putra', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Riyan Prihatin', 'Tani', 'Apriliyawati', 'IRT', 'Kulon Progo', ' 29 September 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'c667d53acd899a97a85de0c201ba99be', 'Apriliyawati', 'eddd0956ceaef8e13a7796e9bf626b50', 0),
(83, '1103', '0102017684', 'Dyaz Eka Winata', 'L', 'Logede, Glagah, Temon, Kulon Progo', 86, '', 'Arif Winata', 'Tani', 'Emi  Susanuari', 'IRT', 'Kulon Progo', ' 26 Juli 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'aace49c7d80767cffec0e513ae886df0', 'Emi  Susanuari', '28f0c16647e22cf7e62fe4829f344fca', 0),
(84, '1104', '0108908108', 'Dzaky Athaya Muhammad Salim', 'L', 'Keboan, Karangwuni, Wates, Kulon Progo', 86, '', 'Ahmad Fadzil Salim, ST', 'Karyawan Swasta', 'Meilia Rahayu, ST', 'IRT', 'Kulon Progo', ' 6 Juni 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '4da04049a062f5adfe81b67dd755cecc', 'Meilia Rahayu, ST', 'ce3485e2064e6ce1d07b96a56bef0647', 0),
(85, '1105', '0107816828', 'Haya Hafizhah', 'P', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Ruci Laksono', 'Tani', 'Lina Yulianti', 'IRT', 'Kulon Progo', ' 11 Oktober 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'af21d0c97db2e27e13572cbf59eb343d', 'Lina Yulianti', 'da1b912db1651cd52423e95101d897d9', 0),
(86, '1106', '0105502572', 'Kevin Aldi Prasetya', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Saryono', 'Tani', 'Sumarsih', 'Wiraswasta', 'Kulon Progo', ' 5 Agustus 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'c9f95a0a5af052bffce5c89917335f67', 'Sumarsih', '448aac0c20153aa106dcff4ec97f81df', 0),
(87, '1107', '0109050258', 'Miswa Putri Ramadhani', 'P', 'Sangkretan, Glagah, Temon, Kulon Progo', 86, '', 'Anggar Trisilo', 'Tani', 'Susanti', 'Tani', 'Kulon Progo', '19 Agustus 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'e58cc5ca94270acaceed13bc82dfedf7', 'Susanti', '94d43b02c3d03bede89818f5e2b1c4cc', 0),
(88, '1108', '0104211199', 'Muhammad Rafi Aldiansyah', 'L', 'Bebekan, Glagah, Temon, Kulon Progo', 86, '', 'Novid Heri Rahmawanto', 'Karyawan Swasta', 'Sri Asih', 'IRT', 'Kulon Progo', '28 Desember 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'b9d487a30398d42ecff55c228ed5652b', 'Sri Asih', 'e50dff5b396241aa44eb2392e448a9ae', 0),
(89, '1109', '0118163899', 'Nabila Ayu Saskia Ningrum', 'P', 'Bebekan, Glagah, Temon, Kulon Progo', 86, '', 'Widodo', 'Wiraswasta', 'Lusi Purnami', 'Wiraswasta', 'Bekasi', ' 10 Februari 2011', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '8f1d43620bc6bb580df6e80b0dc05c48', 'Lusi Purnami', 'd16f6b58956ab9b731e6c517aa0f749d', 0),
(90, '1110', '0104261278', 'Nabila Septianing Tyas', 'P', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Koma Roib', 'Tani', 'Amalia Melandari', 'Tani', 'Kulon Progo', ' 23 September 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '2cbca44843a864533ec05b321ae1f9d1', 'Amalia Melandari', 'a1b8c50c1aff30415c4e11b3838a2a9f', 0),
(91, '1111', '0103759311', 'Rakha Boma Nandana', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Sapto Purwono', 'Karyawan Swasta', 'Sulami Lestari', 'Tani', 'Kulon Progo', ' 15 Mei 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'b59c67bf196a4758191e42f76670ceba', 'Sulami Lestari', '3c408729ef4cd23b4781ddd2fbfcc0d3', 0),
(92, '1112', '0105063076', 'Rayyan Khairul Azam', 'L', 'Sangkretan, Glagah, Temon, Kulon Progo', 86, '', 'Rakhmad Nurhidayat', 'Wiraswasta', 'Yani Farida', 'Wiraswasta', 'Bekasi', ' 14 Juni 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '20d135f0f28185b84a4cf7aa51f29500', 'Yani Farida', 'a90f9533395b8a8888f8dad92cf55e9d', 0),
(93, '1113', '0102413067', 'Regina Astitra Rahmadonna', 'P', 'Sangkretan, Glagah, Temon, Kulon Progo', 86, '', 'Beri Putra', 'Tani', 'Dwi Puji Astuti', 'Wiraswasta', 'Kulon Progo', ' 26 Agustus 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '9c3b1830513cc3b8fc4b76635d32e692', 'Dwi Puji Astuti', '73002dec916437fe5b7da89cb8a76db0', 0),
(94, '1114', '0108597626', 'Safiq Satriawan', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Suprat', 'Tani', 'Fitri Nurhidayati', 'Wiraswasta', 'Wonosobo', ' 30 November 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'd6ef5f7fa914c19931a55bb262ec879c', 'Fitri Nurhidayati', 'f39b0d3b42e5983a884546a6acf13a1e', 0),
(95, '1099', '0106763338', 'Arka Ra\'if Hamdani', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 89, '', 'Tukirmidi', 'Tani', 'Bandiyah', 'Tani', 'Kulon Progo', ' 6 Agustus 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'a0160709701140704575d499c997b6ca', 'Bandiyah', '987cb39fe43a903c22d0534f87ea015e', 0),
(96, '1100', '0104109897', 'Athaya Alifia Maulida Azahra', 'L', 'Bebekan, Glagah, Temon, Kulon Progo', 89, '', 'Dargo Wardoyo', 'Wiraswasta', 'Irawati', 'IRT', 'Kulon Progo', ' 9 Agustus 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '1e6e0a04d20f50967c64dac2d639a577', 'Irawati', '1e3a577d20467394c2461f77900850d8', 0),
(97, '1101', '0108162846', 'Danar Neva Patrias', 'L', 'Sangkretan, Glagah, Temon, Kulon Progo', 89, '', 'Sujiyatna', 'Karyawan Swasta', 'Nur Sriwi Hidayati', 'IRT', 'Kulon Progo', ' 21 November 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'c6bff625bdb0393992c9d4db0c6bbe45', 'Nur Sriwi Hidayati', '16d7c0c34036c1d8ab3b24635231f59a', 0),
(98, '1102', '0103378169', 'Davila Rebiyansa Putra', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 89, '', 'Riyan Prihatin', 'Tani', 'Apriliyawati', 'IRT', 'Kulon Progo', ' 29 September 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'c667d53acd899a97a85de0c201ba99be', 'Apriliyawati', 'eddd0956ceaef8e13a7796e9bf626b50', 0),
(99, '1103', '0102017684', 'Dyaz Eka Winata', 'L', 'Logede, Glagah, Temon, Kulon Progo', 89, '', 'Arif Winata', 'Tani', 'Emi  Susanuari', 'IRT', 'Kulon Progo', ' 26 Juli 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'aace49c7d80767cffec0e513ae886df0', 'Emi  Susanuari', '28f0c16647e22cf7e62fe4829f344fca', 0),
(100, '1104', '0108908108', 'Dzaky Athaya Muhammad Salim', 'L', 'Keboan, Karangwuni, Wates, Kulon Progo', 89, '', 'Ahmad Fadzil Salim, ST', 'Karyawan Swasta', 'Meilia Rahayu, ST', 'IRT', 'Kulon Progo', ' 6 Juni 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '4da04049a062f5adfe81b67dd755cecc', 'Meilia Rahayu, ST', 'ce3485e2064e6ce1d07b96a56bef0647', 0),
(101, '1105', '0107816828', 'Haya Hafizhah', 'P', 'Glagah, Glagah, Temon, Kulon Progo', 89, '', 'Ruci Laksono', 'Tani', 'Lina Yulianti', 'IRT', 'Kulon Progo', ' 11 Oktober 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'af21d0c97db2e27e13572cbf59eb343d', 'Lina Yulianti', 'da1b912db1651cd52423e95101d897d9', 0),
(102, '1106', '0105502572', 'Kevin Aldi Prasetya', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 89, '', 'Saryono', 'Tani', 'Sumarsih', 'Wiraswasta', 'Kulon Progo', ' 5 Agustus 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'c9f95a0a5af052bffce5c89917335f67', 'Sumarsih', '448aac0c20153aa106dcff4ec97f81df', 0),
(103, '1107', '0109050258', 'Miswa Putri Ramadhani', 'P', 'Sangkretan, Glagah, Temon, Kulon Progo', 89, '', 'Anggar Trisilo', 'Tani', 'Susanti', 'Tani', 'Kulon Progo', '19 Agustus 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'e58cc5ca94270acaceed13bc82dfedf7', 'Susanti', '94d43b02c3d03bede89818f5e2b1c4cc', 0),
(104, '1108', '0104211199', 'Muhammad Rafi Aldiansyah', 'L', 'Bebekan, Glagah, Temon, Kulon Progo', 89, '', 'Novid Heri Rahmawanto', 'Karyawan Swasta', 'Sri Asih', 'IRT', 'Kulon Progo', '28 Desember 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'b9d487a30398d42ecff55c228ed5652b', 'Sri Asih', 'e50dff5b396241aa44eb2392e448a9ae', 0),
(105, '1109', '0118163899', 'Nabila Ayu Saskia Ningrum', 'P', 'Bebekan, Glagah, Temon, Kulon Progo', 89, '', 'Widodo', 'Wiraswasta', 'Lusi Purnami', 'Wiraswasta', 'Bekasi', ' 10 Februari 2011', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '8f1d43620bc6bb580df6e80b0dc05c48', 'Lusi Purnami', 'd16f6b58956ab9b731e6c517aa0f749d', 0),
(106, '1110', '0104261278', 'Nabila Septianing Tyas', 'P', 'Glagah, Glagah, Temon, Kulon Progo', 89, '', 'Koma Roib', 'Tani', 'Amalia Melandari', 'Tani', 'Kulon Progo', ' 23 September 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '2cbca44843a864533ec05b321ae1f9d1', 'Amalia Melandari', 'a1b8c50c1aff30415c4e11b3838a2a9f', 0),
(107, '1111', '0103759311', 'Rakha Boma Nandana', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 89, '', 'Sapto Purwono', 'Karyawan Swasta', 'Sulami Lestari', 'Tani', 'Kulon Progo', ' 15 Mei 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'b59c67bf196a4758191e42f76670ceba', 'Sulami Lestari', '3c408729ef4cd23b4781ddd2fbfcc0d3', 0),
(108, '1112', '0105063076', 'Rayyan Khairul Azam', 'L', 'Sangkretan, Glagah, Temon, Kulon Progo', 89, '', 'Rakhmad Nurhidayat', 'Wiraswasta', 'Yani Farida', 'Wiraswasta', 'Bekasi', ' 14 Juni 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '20d135f0f28185b84a4cf7aa51f29500', 'Yani Farida', 'a90f9533395b8a8888f8dad92cf55e9d', 0),
(109, '1113', '0102413067', 'Regina Astitra Rahmadonna', 'P', 'Sangkretan, Glagah, Temon, Kulon Progo', 89, '', 'Beri Putra', 'Tani', 'Dwi Puji Astuti', 'Wiraswasta', 'Kulon Progo', ' 26 Agustus 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', '9c3b1830513cc3b8fc4b76635d32e692', 'Dwi Puji Astuti', '73002dec916437fe5b7da89cb8a76db0', 0),
(110, '1114', '0108597626', 'Safiq Satriawan', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 89, '', 'Suprat', 'Tani', 'Fitri Nurhidayati', 'Wiraswasta', 'Wonosobo', ' 30 November 2010', 'Gasal 2017/2018', '', '', '', '', '', '', '', '', 'd6ef5f7fa914c19931a55bb262ec879c', 'Fitri Nurhidayati', 'f39b0d3b42e5983a884546a6acf13a1e', 0),
(111, '1099', '0106763338', 'Arka Ra\'if Hamdani', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Tukirmidi', 'Tani', 'Bandiyah', 'Tani', 'Kulon Progo', ' 6 Agustus 2010', '', '', '', '', '', '', '', '', '', 'a0160709701140704575d499c997b6ca', 'Bandiyah', '987cb39fe43a903c22d0534f87ea015e', 0),
(112, '1100', '0104109897', 'Athaya Alifia Maulida Azahra', 'L', 'Bebekan, Glagah, Temon, Kulon Progo', 86, '', 'Dargo Wardoyo', 'Wiraswasta', 'Irawati', 'IRT', 'Kulon Progo', ' 9 Agustus 2010', '', '', '', '', '', '', '', '', '', '1e6e0a04d20f50967c64dac2d639a577', 'Irawati', '1e3a577d20467394c2461f77900850d8', 0),
(113, '1101', '0108162846', 'Danar Neva Patrias', 'L', 'Sangkretan, Glagah, Temon, Kulon Progo', 86, '', 'Sujiyatna', 'Karyawan Swasta', 'Nur Sriwi Hidayati', 'IRT', 'Kulon Progo', ' 21 November 2010', '', '', '', '', '', '', '', '', '', 'c6bff625bdb0393992c9d4db0c6bbe45', 'Nur Sriwi Hidayati', '16d7c0c34036c1d8ab3b24635231f59a', 0),
(114, '1102', '0103378169', 'Davila Rebiyansa Putra', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Riyan Prihatin', 'Tani', 'Apriliyawati', 'IRT', 'Kulon Progo', ' 29 September 2010', '', '', '', '', '', '', '', '', '', 'c667d53acd899a97a85de0c201ba99be', 'Apriliyawati', 'eddd0956ceaef8e13a7796e9bf626b50', 0),
(115, '1103', '0102017684', 'Dyaz Eka Winata', 'L', 'Logede, Glagah, Temon, Kulon Progo', 86, '', 'Arif Winata', 'Tani', 'Emi  Susanuari', 'IRT', 'Kulon Progo', ' 26 Juli 2010', '', '', '', '', '', '', '', '', '', 'aace49c7d80767cffec0e513ae886df0', 'Emi  Susanuari', '28f0c16647e22cf7e62fe4829f344fca', 0),
(116, '1104', '0108908108', 'Dzaky Athaya Muhammad Salim', 'L', 'Keboan, Karangwuni, Wates, Kulon Progo', 86, '', 'Ahmad Fadzil Salim, ST', 'Karyawan Swasta', 'Meilia Rahayu, ST', 'IRT', 'Kulon Progo', ' 6 Juni 2010', '', '', '', '', '', '', '', '', '', '4da04049a062f5adfe81b67dd755cecc', 'Meilia Rahayu, ST', 'ce3485e2064e6ce1d07b96a56bef0647', 0),
(117, '1105', '0107816828', 'Haya Hafizhah', 'P', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Ruci Laksono', 'Tani', 'Lina Yulianti', 'IRT', 'Kulon Progo', ' 11 Oktober 2010', '', '', '', '', '', '', '', '', '', 'af21d0c97db2e27e13572cbf59eb343d', 'Lina Yulianti', 'da1b912db1651cd52423e95101d897d9', 0),
(118, '1106', '0105502572', 'Kevin Aldi Prasetya', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Saryono', 'Tani', 'Sumarsih', 'Wiraswasta', 'Kulon Progo', ' 5 Agustus 2010', '', '', '', '', '', '', '', '', '', 'c9f95a0a5af052bffce5c89917335f67', 'Sumarsih', '448aac0c20153aa106dcff4ec97f81df', 0),
(119, '1107', '0109050258', 'Miswa Putri Ramadhani', 'P', 'Sangkretan, Glagah, Temon, Kulon Progo', 86, '', 'Anggar Trisilo', 'Tani', 'Susanti', 'Tani', 'Kulon Progo', '19 Agustus 2010', '', '', '', '', '', '', '', '', '', 'e58cc5ca94270acaceed13bc82dfedf7', 'Susanti', '94d43b02c3d03bede89818f5e2b1c4cc', 0),
(120, '1108', '0104211199', 'Muhammad Rafi Aldiansyah', 'L', 'Bebekan, Glagah, Temon, Kulon Progo', 86, '', 'Novid Heri Rahmawanto', 'Karyawan Swasta', 'Sri Asih', 'IRT', 'Kulon Progo', '28 Desember 2010', '', '', '', '', '', '', '', '', '', 'b9d487a30398d42ecff55c228ed5652b', 'Sri Asih', 'e50dff5b396241aa44eb2392e448a9ae', 0),
(121, '1109', '0118163899', 'Nabila Ayu Saskia Ningrum', 'P', 'Bebekan, Glagah, Temon, Kulon Progo', 86, '', 'Widodo', 'Wiraswasta', 'Lusi Purnami', 'Wiraswasta', 'Bekasi', ' 10 Februari 2011', '', '', '', '', '', '', '', '', '', '8f1d43620bc6bb580df6e80b0dc05c48', 'Lusi Purnami', 'd16f6b58956ab9b731e6c517aa0f749d', 0),
(122, '1110', '0104261278', 'Nabila Septianing Tyas', 'P', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Koma Roib', 'Tani', 'Amalia Melandari', 'Tani', 'Kulon Progo', ' 23 September 2010', '', '', '', '', '', '', '', '', '', '2cbca44843a864533ec05b321ae1f9d1', 'Amalia Melandari', 'a1b8c50c1aff30415c4e11b3838a2a9f', 0),
(123, '1111', '0103759311', 'Rakha Boma Nandana', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Sapto Purwono', 'Karyawan Swasta', 'Sulami Lestari', 'Tani', 'Kulon Progo', ' 15 Mei 2010', '', '', '', '', '', '', '', '', '', 'b59c67bf196a4758191e42f76670ceba', 'Sulami Lestari', '3c408729ef4cd23b4781ddd2fbfcc0d3', 0),
(124, '1112', '0105063076', 'Rayyan Khairul Azam', 'L', 'Sangkretan, Glagah, Temon, Kulon Progo', 86, '', 'Rakhmad Nurhidayat', 'Wiraswasta', 'Yani Farida', 'Wiraswasta', 'Bekasi', ' 14 Juni 2010', '', '', '', '', '', '', '', '', '', '20d135f0f28185b84a4cf7aa51f29500', 'Yani Farida', 'a90f9533395b8a8888f8dad92cf55e9d', 0),
(125, '1113', '0102413067', 'Regina Astitra Rahmadonna', 'P', 'Sangkretan, Glagah, Temon, Kulon Progo', 86, '', 'Beri Putra', 'Tani', 'Dwi Puji Astuti', 'Wiraswasta', 'Kulon Progo', ' 26 Agustus 2010', '', '', '', '', '', '', '', '', '', '9c3b1830513cc3b8fc4b76635d32e692', 'Dwi Puji Astuti', '73002dec916437fe5b7da89cb8a76db0', 0),
(126, '1114', '0108597626', 'Safiq Satriawan', 'L', 'Glagah, Glagah, Temon, Kulon Progo', 86, '', 'Suprat', 'Tani', 'Fitri Nurhidayati', 'Wiraswasta', 'Wonosobo', ' 30 November 2010', '', '', '', '', '', '', '', '', '', 'd6ef5f7fa914c19931a55bb262ec879c', 'Fitri Nurhidayati', 'f39b0d3b42e5983a884546a6acf13a1e', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
