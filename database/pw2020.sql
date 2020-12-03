-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 01:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'pw123'),
(2, 'admin2', '123');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(9) NOT NULL,
  `artikel_penulis` varchar(100) NOT NULL,
  `artikel_judul` varchar(100) NOT NULL,
  `artikel_isi` text NOT NULL,
  `artikel_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `path_gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `artikel_penulis`, `artikel_judul`, `artikel_isi`, `artikel_waktu`, `path_gambar`) VALUES
(1, 'sehatq.com', 'Gejala Corona', 'Virus corona bisa menimbulkan beragam gejala pada pengidapnya. Gejala yang muncul ini bergantung pada jenis virus corona yang menyerang, dan seberapa serius infeksi yang terjadi. Berikut beberapa gejala virus corona yang terbilang ringan:<br><ul><li>Hidung beringus.</li><li>Sakit kepala.</li><li>Batuk.</li><li>Sakit tenggorokan.</li><li>Demam.</li><li>Merasa tidak enak badan.</li></ul>', '2020-04-15 08:43:50', 'img\\orangBatuk.jpg'),
(2, 'alodokter.com', 'Apa itu Virus Corona (COVID 19)', 'Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, seperti flu. Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia), Middle-East Respiratory Syndrome (MERS), dan Severe Acute Respiratory Syndrome (SARS).\n\nInfeksi virus ini disebut COVID-19 dan pertama kali ditemukan di kota Wuhan, Cina, pada akhir Desember 2019. Virus ini menular dengan cepat dan telah menyebar ke wilayah lain di Cina dan ke beberapa negara, termasuk Indonesia. Hal ini membuat beberapa negara di luar negeri menerapkan kebijakan untuk memberlakukan lockdown dalam rangka mencegah penyebaran virus Corona.', '2020-04-15 07:42:28', 'img\\gambarCorona.jpg'),
(3, 'halodoc.com', 'Pengobatan Virus Corona', 'Tidak ada perawatan khusus untuk mengatasi infeksi virus corona. Umumnya pengidap akan pulih dengan sendirinya. Namun, ada beberapa upaya yang bisa dilakukan untuk meredakan gejala infeksi virus corona. Contohnya:<br><br><ul><li>Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun.</li><li>Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk.</li><li>Perbanyak istirahat.</li><li>Perbanyak asupan cairan tubuh.</li><li>Jika merasa khawatir dengan gejala yang dialami, segeralah hubungi penyedia layanan kesehatan terdekat.</li></ul>', '2020-04-15 11:21:37', 'img\\rumahSakit.jpg'),
(4, 'lifestyle.kompas.com', 'Cara Menjaga Kesehatan Tubuh', 'Berbagai upaya menjaga kesehatan tubuh sebaiknya dilakukan setiap harinya. Hal ini dapat membuat kondisi kita senantiasa prima dalam melakukan aktivitas sehari-hari dan terhindar dari berbagai penyakit yang menghantui.<br><strong>Minum Cukup Air</strong><br>Minum air putih yang cukup dapat memberi banyak manfaat, yakni meningkatkan metabolisme dan mencegah dehidrasi.<br><strong>Olahraga secara rutin</strong><br>Berolahraga secara rutin dapat membantu mencegah berbagai penyakit, seperti penyakit jantung, stroke, diabetes, dan kanker. Selain itu, olahraga juga dapat mengendalikan berat badan dan membuat pelakunya merasa lebih bugar.<br><strong>Mengonsumsi sayur dan buah</strong><br>Sayur dan buah mengandung serat prebiotik, vitamin, mineral, serta berbagai antioksidan yang dibutuhkan oleh tubuh. Studi menunjukkan jika orang yang mengonsumsi lebih banyak sayur dan buah bisa hidup lebih lama, serta memiliki risiko yang lebih rendah terkena penyakit jantung, diabetes tipe-2, obesitas, dan penyakit lainnya.<br><strong>Tidur yang cukup</strong><br>Begadang menjadi kebiasaan banyak orang. Alih-alih tidur, malam hari seringkali dihabiskan dengan bermain gadget atau menonton TV. Padahal kurang tidur dapat meningkatkan kemungkinan terkena penyakit jantung, diabetes, stroke, obesitas, dan masalah kesehatan lainnya. Selain itu, kurang tidur juga dapat mengganggu konsentrasi, kewaspadaan, dan kinerja. Oleh sebab itu, biasakan untuk tidur dengan cukup dan berkualitas. Tidur yang cukup dapat membantu menjaga kesehatan secara keseluruhan.', '2020-04-15 08:54:50', 'img\\orangJoging.jpg'),
(8, 'bukan siapa siapa', 'ini post baru', 'siapa bilang ini artikel', '2020-05-13 17:37:39', 'img\\ini.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE `donator` (
  `name` varchar(64) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donator`
--

INSERT INTO `donator` (`name`, `amount`) VALUES
('joe', '10000'),
('bintang', '20000'),
('daniel', '30000'),
('bintang', '15000'),
('bebas', '400000'),
('Lionel', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `idArtikel` int(11) NOT NULL,
  `idKomentar` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idArtikel`, `idKomentar`, `nama`, `isi`) VALUES
(2, 11, 'Anonymous', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`idKomentar`),
  ADD KEY `FOREIGN` (`idArtikel`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idKomentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_idArtikel` FOREIGN KEY (`idArtikel`) REFERENCES `artikel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
