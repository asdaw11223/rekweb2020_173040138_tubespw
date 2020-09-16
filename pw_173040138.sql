-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Apr 2018 pada 01.57
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_173040138`
--
CREATE DATABASE IF NOT EXISTS `pw_173040138` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pw_173040138`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `florafauna`
--

CREATE TABLE IF NOT EXISTS `florafauna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `latin` varchar(255) NOT NULL,
  `jenis` varchar(55) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `florafauna`
--

INSERT INTO `florafauna` (`id`, `nama`, `gambar`, `latin`, `jenis`, `tentang`) VALUES
(1, 'Komodo', 'komodo.jpg', 'Varanus Komodensi', 'Fauna', 'Spesies kadal terbesar di dunia dan hanya ada di Pulau Komodo, Rinca, Gili Montang, Flores dan Nusa Tenggara (Gili Dasami). Ditemukan pada tahun 1910 oleh seorang peneliti dari barat. Panjang rata-rata 2 sampai 3 meter. Dan memiliki gigitan beracun.'),
(2, 'Harimau Sumatera', 'harimau.jpg', 'Panthera Tigris Sumatrae', 'Fauna', 'Spesies asli dari sumatra yang termasuk subspesies harimau yang masih bertahan hidup hingga saat ini. Ciri dari harimau ini adalah ukuran tubuhnya terkecil dibandingkan jenis harimau lainnya dengan warna paling gelap di antara semua spesiesnya.'),
(4, 'Pesut Mahakam', 'pesut.jpg', 'Orcaella brevirostris', 'Fauna', 'Mamalia yang sering disebut lumba-lumba air tawar yang hampir punah karena berdasarkan data tahun 2007, populasi hewan tinggal 50 ekor saja dan menempati urutan tertinggi satwa Indonesia yang terancam punah.'),
(5, 'Anggrek', 'anggrek.jpg', 'Orchidaceae', 'Flora', 'Banyak tersebar didaerah tropika, namun ada juga didaerah sirkumpolar sampai kewilayah tropika basah. Merupakan tumbuhan yang hidup menempel atau menumpang pada pohon lain, namun anggrek bukan bunga parasit.'),
(6, 'Bunga Bangkai', 'bangkai.jpg', 'Amorphophallus titanum Becc', 'Flora', 'Tumbuhan jenis tals-talasan endemik dari sumatra, yang dikenal dengan bunga majemuk terbesar. Bunga ini mengeluarkan aroma bau busuk, aroma busuk tersebut sebenarkan digunakan untuk menarik serangga kumbang atau lalat untuk menyerbuki bunganya.'),
(7, 'Rafflesia Arnoldii', 'rafflesia.jpg', 'Rafflesia', 'Flora', 'Tumbuhan parasit yang terkenal karena ukuran bunga yang besar, bahkan merupakan bunga terbesar di dunia. bunga ini tumbuh dijaringan merambat dan tidak memiliki daun sehingga tumbuhan ini tidak mampu berfotosintetis.'),
(8, 'Kantong Semar', 'semar.jpg', 'Nepenthes', 'Flora', 'Spesies terbanyak beradah di puau Borneo dan Sumatera. Ada umumnya Nepenthes memiliki tiga macam bentuk kantong, yaitu kantong atas, kantong bawah dan kantong roset. Memiliki cairan enzim di dalamnya.'),
(9, 'Damar', 'damar.jpg', 'Agathis Dammara', 'Flora', 'Menyebar di Maluku, Sulawesi, Sumatera hingga ke Filipina. Tinggi hingga 65m, dengan batang silindris diameter sekitar 1,5m. Damar tumbuh secara alami di hutan hujan daratan rendah samapi ketinggian 1.200 mdpl.'),
(10, 'Daun Payung', 'payung.jpg', 'Johannesteijsmannia Altifrons', 'Flora', 'Sejenis palem-paleman yang mempunyai daun besar dan lebar. Merupakan Tanaman di Indonesia tepatnya di Sumatera Utara. Mempunyai ukuran daun panjang sekitar 3 sampai 6 meter denagn lebar 1m. Tanaman ini tidak tahan terhadap paparan sinar matahari langsung.'),
(17, 'Badak Jawa', 'badak.jpg', 'Rhinoceros Sondaicus', 'Fauna', 'Badak ini memiliki genus yang sama dengan badak india dan memiliki kulit bermosaik yang menyerupai baju baja. Badak jawa memiliki panjang sekitar 3 sampai 3,2 m dan tinggi sekitat 1,4 sampai 1,7m.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
