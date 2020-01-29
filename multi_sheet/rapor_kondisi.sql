-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2020 pada 01.14
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
-- Struktur dari tabel `rapor_kondisi`
--

CREATE TABLE `rapor_kondisi` (
  `idrk` int(10) NOT NULL,
  `ids` int(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ekstra1` varchar(20) NOT NULL,
  `nama_ekstra2` varchar(20) NOT NULL,
  `nilai_ekstra1` varchar(20) NOT NULL,
  `nilai_ekstra2` varchar(20) NOT NULL,
  `ket_sakit` varchar(10) NOT NULL,
  `ket_izin` varchar(10) NOT NULL,
  `ket_alpa` varchar(10) NOT NULL,
  `kelakuan` text NOT NULL,
  `kerajinan` text NOT NULL,
  `kerapihan` text NOT NULL,
  `kebersihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rapor_kondisi`
--

INSERT INTO `rapor_kondisi` (`idrk`, `ids`, `nis`, `nama`, `tahun_ajaran`, `nama_kelas`, `nama_sekolah`, `alamat`, `nama_ekstra1`, `nama_ekstra2`, `nilai_ekstra1`, `nilai_ekstra2`, `ket_sakit`, `ket_izin`, `ket_alpa`, `kelakuan`, `kerajinan`, `kerapihan`, `kebersihan`) VALUES
(1, 2, '0068789665', 'Bagas Baskoro', 'Gasal 2018/2019', 'III', 'SD Muhammadiyah Insan Kreatif Kembaran', 'l. Bibis Raya No.25, Gonjen, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', 'Tapak Suci', 'Pramuka', 'B', 'B', '1 hari', '0 hari', '1 hari', 'Baik, telah menunjukkan perilaku yang disiplin waktu.', 'Baik, telah menyelesaikan tugas yang diberikan.', 'Baik, telah berpakaian rapih dan sesuai.', 'Baik, dalam menjaga kebersihan kelas.'),
(4, 4, '0020713811', 'Alfa Rizzy', 'Gasal 2018/2019', 'X IPA 1', 'SMA Muhammadiyah 2 Yogyakarta', 'Jl. Kapas No.7, Semaki, Umbulharjo, Semaki, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 'Renang', 'Sepak Bola', 'A', 'A-', '1 hari', '0 hari', '0 hari', 'Baik, selalu menghormati guru maupun teman sekelas', 'Baik, selalu mengerjakan tugas tepat waktu dan tidak pernah terlambat masuk sekolah.', 'Baik, dalam berpaikaian sesuai dengan seragam sekolah.', 'Baik, dalam menjaga kebersihan meja belajar.'),
(5, 6, '0081136944', 'Okta Dwi Priambogo', 'Gasal 2018/2019', 'VI (Enam)', 'SD Islamiyah Warungboto', 'Jalan Prof. Dr. Soepomo Blok S.H. No.75-B, Warungboto, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'Pramuka', 'Tapak Suci', 'A', 'A', '1 hari', '0 hari', '0 hari', 'Baik, telah menunjukkan perilaku yang disiplin waktu.', 'Baik, telah menyelesaikan tugas yang diberikan. ', 'Baik, telah berpakaian rapih dan sesuai.', 'Baik, dalam menjaga kebersihan kelas.'),
(6, 7, '0015013753', 'Ahmad Choirudin', 'Gasal 2018/2019', 'IX A', 'Mts Aswaja', 'Jl. Muntilan-Dukun Km 6, Tegalsari, Dukun, Magelang, Kode Pos 56482 ', 'Pramuka', 'Qiroah', 'A', 'A', '0 hari', '0 hari', '0 hari', 'Baik, telah menunjukkan perilaku yang disiplin waktu.', 'Baik, telah menyelesaikan tugas yang diberikan.', 'Baik, telah berpakaian rapih dan sesuai.', 'Baik, dalam menjaga kebersihan kelas. '),
(7, 8, '0091946329', 'Nur Alfi Latifah', 'Gasal 2018/2019', 'VI (Enam)', 'SD Negeri Pandanretno', 'Pelas, Pandanretno, Srumbung, Magelang, Jawa Tengah 56483', 'Bela Diri', 'Mengaji', 'A', 'A', '1 hari', '0 hari', '0 hari', 'Baik, telah menunjukkan perilaku yang disiplin waktu.', 'Baik, telah menyelesaikan tugas yang diberikan. \r\n', 'Baik, telah berpakaian rapih dan sesuai.', 'Baik, dalam menjaga kebersihan kelas. '),
(8, 9, '0020687982', 'Rizki Satria Wijaya', 'Gasal 2018/2019', 'I', 'SD Negeri 1 Klaten', 'Jl. Pemuda No.210, Pondok, Klaten Tengah, Kabupaten Klaten, Jawa Tengah 57411', 'Renang', 'Memanah', 'A-', 'A-', '1 hari', '1 hari', '0 hari', 'a', 'a', 'a', 'a'),
(9, 11, '0068799665', 'Azka Ilyas Andika', 'Gasal 2018/2019', 'X IPA 1', 'SMA Negeri 7 Yogyakarta', 'Jl. MT. Haryono No.47, Suryodiningratan, Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55141', 'Pramuka', 'Sepak Bola', 'B', 'B', '1 hari', '0 hari', '0 hari', 'Baik', 'Baik', 'Baik', 'Baik'),
(10, 14, '0020687981', 'Panji Bintoro', 'Gasal 2018/2019', 'I (Satu)', 'SD Negeri Lempuyangan 1', 'Jl Lempuyangan yogyakarta', 'Sepak Bola', 'Sepak Bola', 'B+', 'B+', '0 hari', '0 hari', '0 hari', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik'),
(11, 17, '0020687985', 'Panggah Widiandana', 'Gasal 2018/2019', 'I (Satu)', 'SD Rejowinangun', 'Kotagede, Yogyakarta', 'Sepak Bola', 'Pramuka', 'A-', 'B', '1 hari', '0 hari', '0 hari', 'Baik', 'Baik', 'Baik', 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rapor_kondisi`
--
ALTER TABLE `rapor_kondisi`
  ADD PRIMARY KEY (`idrk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rapor_kondisi`
--
ALTER TABLE `rapor_kondisi`
  MODIFY `idrk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
