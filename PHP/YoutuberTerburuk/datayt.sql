-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 03:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datayt`
--

CREATE TABLE `datayt` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `youtube` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `tiktok` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datayt`
--

INSERT INTO `datayt` (`id`, `nama`, `deskripsi`, `detail`, `youtube`, `instagram`, `tiktok`) VALUES
(1, 'Atta Halilintar', 'Atta Halilintar adalah seorang YouTuber dan influencer asal Indonesia. Namun, ia sering mendapat kritik dari banyak orang karena dianggap sombong dan merendahkan orang lain, baik sesama YouTuber maupun penggemarnya. Selain itu, ia juga dianggap melakukan kegiatan yang merugikan lingkungan, seperti membuang sampah sembarangan dan menggunakan bahan-bahan yang berbahaya untuk lingkungan dalam konten-kontennya.\r\n\r\n', 'Sombong dan merendahkan orang lain', 'https://www.youtube.com/@AttaHalilintar', 'https://www.instagram.com/attahalilintar/', 'https://www.tiktok.com/@attahalilintar'),
(2, 'Ria Ricis', 'Ria Ricis adalah seorang YouTuber dan selebriti media sosial asal Indonesia. Ia pernah mendapat kritik karena mempromosikan produk yang tidak sesuai dengan aturan BPOM (Badan Pengawas Obat dan Makanan), seperti produk kosmetik ilegal dan obat-obatan terlarang. Selain itu, ia juga pernah membuat konten yang dianggap merendahkan agama, seperti saat membuat vlog tentang', 'mempromosikan kosmetik ilegal dan konten menyesatkan', 'https://www.youtube.com/@RicisOfficial1795', 'https://www.instagram.com/riaricis1795/', 'https://www.tiktok.com/@riaricis'),
(3, 'Ferdian Paleka', 'Ferdian Paleka adalah seorang YouTuber gaming asal Indonesia yang pernah mendapat banyak kritik karena mempermalukan seorang anak jalanan dengan memberinya uang seribu rupiah dan merekam aksinya untuk diunggah ke YouTube. Aksinya tersebut dianggap tidak etis dan kejam oleh banyak orang, dan membuatnya menjadi bahan olok-olokan di media sosial', 'Membuat konten yang membuat marah netizen', 'https://www.youtube.com/@PalekaTV', 'https://www.instagram.com/ferdianpalekaa/', 'https://www.tiktok.com/@ferdianpaleka'),
(4, 'Arif muhammad', 'Arif Muhammad adalah seorang YouTuber yang terkenal dengan konten-konten berbau horor dan mistis. Namun, ia pernah mendapat kritik karena mempromosikan produk yang tidak sesuai dengan aturan BPOM dan membuat konten yang dianggap menyesatkan dan tidak bermanfaat, seperti membuat video mengenai obat-obatan yang tidak terbukti khasiatnya. Ia juga pernah membuat kontroversi karena meremehkan pandemi COVID-19 dan menolak untuk menjalankan protokol kesehatan yang telah ditetapkan oleh pemerintah', 'Mempromosikan hal sesat', 'https://www.youtube.com/@Arifmuhammadd', 'https://www.instagram.com/arifmuhammaddd_/', 'https://www.tiktok.com/@arifmuhammad'),
(7, 'Elly Tran Ha', 'Elly Tran Ha adalah seorang YouTuber asal Vietnam yang populer di Indonesia karena kecantikannya. Namun, ia mendapat banyak kritik karena mempromosikan produk yang tidak sesuai dengan aturan BPOM dan membuat konten yang dianggap tidak bermutu. Beberapa produk yang dipromosikannya bahkan dianggap berbahaya bagi kesehatan.\r\n\r\n', 'Mempromosikan barang illegal dan berbahaya', '', '', ''),
(8, 'Eno Bening', 'Eno Bening adalah seorang YouTuber Indonesia yang terkenal dengan konten prank. Namun, ia pernah membuat video yang dianggap merendahkan profesi seorang mantan anggota TNI (Tentara Nasional Indonesia) dengan membuat adegan percobaan pengeroyokan. Video tersebut mendapat banyak kritik dan dianggap tidak pantas untuk ditampilkan di media sosial. Selain itu, ia juga pernah terlibat dalam kontroversi karena memfitnah seorang pengusaha dengan membuat video palsu yang mengaku sebagai korban penipuan', 'Merendahkan profesi orang lain', 'https://www.youtube.com/@enobening', 'https://www.instagram.com/eno_bening/', 'https://www.tiktok.com/@eno_bening'),
(9, 'Deddy Corbuzier', 'Deddy Corbuzier adalah seorang mentalis dan YouTuber asal Indonesia. Namun, ia pernah mendapat kritik karena membuat video yang dianggap merendahkan salah satu agama, serta konten-konten yang dianggap tidak pantas untuk ditampilkan di media sosial. Ia juga terlibat dalam beberapa kontroversi lain, seperti kontroversi terkait penggunaan Nama dan foto korban tragedi kapal tenggelam di Danau Toba dalam kontennya.', 'konten yang mengkritik dan merendahkan ', 'https://www.youtube.com/@corbuzier', 'https://www.instagram.com/mastercorbuzier/', 'https://www.tiktok.com/@mastercorbuzier'),
(10, 'Agung Hapsah', 'Agung Hapsah adalah seorang YouTuber asal Indonesia yang pernah dituduh melakukan kekerasan terhadap pacarnya, serta melakukan pelecehan seksual terhadap sejumlah wanita. Akibatnya, ia kehilangan banyak penggemar dan banyak orang yang membenci dirinya.', 'kekerasan dan pelecahan', 'https://www.youtube.com/@AgungHapsah', 'https://www.instagram.com/agunghapsah/', ''),
(13, 'contoh', 'contoh', 'contoh', 'contoh', 'contoh', 'contoh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datayt`
--
ALTER TABLE `datayt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datayt`
--
ALTER TABLE `datayt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
