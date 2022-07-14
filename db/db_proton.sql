-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 01:09 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_proton`
--

-- --------------------------------------------------------

--
-- Table structure for table `dtl_transaksi`
--

CREATE TABLE `dtl_transaksi` (
  `id_dtl_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtl_transaksi`
--

INSERT INTO `dtl_transaksi` (`id_dtl_transaksi`, `id_transaksi`, `id_barang`, `qty`) VALUES
(1, 1, 0, 1),
(2, 1, 5, 1),
(3, 1, 6, 3),
(4, 2, 2, 1),
(5, 2, 9, 6),
(6, 3, 4, 1),
(7, 3, 7, 4),
(8, 5, 1, 3),
(9, 6, 1, 1),
(10, 7, 2, 1),
(11, 7, 11, 1),
(12, 8, 5, 1),
(13, 8, 4, 1),
(14, 8, 6, 1),
(15, 14, 10, 1),
(16, 13, 7, 2),
(17, 12, 8, 1),
(18, 12, 2, 1),
(19, 11, 7, 1),
(20, 11, 2, 1),
(21, 11, 6, 1),
(22, 11, 9, 1),
(23, 15, 7, 1),
(24, 15, 5, 1),
(25, 15, 3, 1),
(26, 15, 11, 1),
(27, 15, 1, 1),
(28, 16, 5, 1),
(29, 16, 9, 1),
(30, 17, 4, 1),
(31, 18, 5, 1),
(32, 19, 2, 1),
(33, 20, 9, 1),
(34, 21, 5, 2),
(35, 21, 9, 2),
(36, 22, 7, 1),
(37, 22, 5, 1),
(38, 23, 1, 1),
(39, 24, 7, 1),
(40, 24, 11, 1),
(41, 24, 8, 1),
(42, 24, 3, 1),
(43, 25, 7, 1),
(44, 25, 6, 1),
(45, 25, 1, 1),
(46, 25, 9, 1),
(47, 25, 13, 1),
(48, 25, 3, 1),
(49, 25, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(11) NOT NULL,
  `tittle` varchar(128) NOT NULL,
  `info` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `tittle`, `info`) VALUES
(1, 'About1', 'CV. Proton Techindo didirikan pada tanggal 08 September 2005 sesuai dengan akte No.08 Notaris Rusnaldy SH. Pada tanggal 23 November 2015 mengalami perubahan anggaran dasar dengan Akte Notaris H. Ade Ardiansyah SH. M.Kn dengan akte No. 102. CV. Proton Techindo bergerak dibidang Pengadaan dan Jasa  pelayanan, perbaikan, perawatan Komputer, Printer, dan Mekanikal Elektrikal'),
(4, 'About2', 'Kami telah memiliki beberapa pelanggan tetap baik perusahaan maupun perorangan. Workshop kami telah menangani perbaikan dengan tingkat kerusakan serta kesulitan sangat beragam yang kami selesaikan dengan sungguh-sungguh dan tepat waktu. '),
(5, 'About3', 'Peralatan kerja atau tools, seperti Oscilloscope perlengkapan soldier dan desoldering serta ketersediaan suku cadang berupa original parts baik  fast moving parts dan slow moving parts telah kami stock dalam jumlah cukup memadai termasuk juga manual service book software tools yang dipergunakan di Workshop kami. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `spek` varchar(500) NOT NULL,
  `spesifikasi` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `kondisi` varchar(128) NOT NULL,
  `merek` varchar(125) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(125) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `spek`, `spesifikasi`, `harga`, `gambar`, `kondisi`, `merek`, `stok`, `kategori`, `star`) VALUES
(1, 'SDHC V-Gen 32GB', 'Spesifikasi SDHC ....', 'MicroSD\r\nKapasitas : 32 GB\r\nKelas Kecepatan : UHS 1 speed class 1\r\nKecepatan Baca : Up to 100 MB/detik\r\nKecepatan Tulis : Up to 48 MB/detik', 90000, 'vgen1.png', 'New', 'V-Gen', 19, 'Komputer', 4),
(2, 'RAM DDR4 V-GEN 8GB', 'Spesifikasi RAM ....', 'CL 16-18-18-36 & CL 16-19-19-37 (VARIAN PRODUK)\r\nUltra Low Voltage 1.35V\r\nXMP 2.0 supports\r\nCapable of operating above the rate XMP speed\r\nAlluminium Alloy Heat Spreader with 1mm thickness,low heat operation\r\nQC Pass for 72 Hours Burning Test\r\nLimited Lifetime Warranty\r\nWith Major Brand IC : Samsung / Hynix / Micron', 560000, 'ram131.png', 'New', 'V-Gen', 11, 'Komputer', 3),
(3, 'SSD V-Gen 512GB SATA III', 'Spesifikasi SSD ....', 'Kapasitas : 128GB , 256GB, 512GB, 1TB, 2TB, 4TB\r\n\r\nKecepatan :\r\n\r\nRead : up to 530 MBps\r\n\r\nWrite : up to 477 MBps\r\n\r\nType : Storage\r\n\r\nSize : 100 x 70 x 7 mm:\r\n\r\nStatus : Regular\r\n\r\nVolume : +/- 35 gr', 830000, 'ssd11.png', 'New', 'V-Gen', 22, 'Komputer', 5),
(4, 'ASUS TUF Gaming A15 FX506II', 'Spesifikasi ASUS ....', 'Prosesor – AMD Ryzen Mobile 7 4800H 8 Core 16 Thread,\r\nGPU – 6GB NVIDIA GeForce RTX 2060,\r\nRAM – 16 GB DDR4 3200 MHz Dual Channel,\r\nStorage SSD PCIe NVMe 512 GB,\r\nMonitor 15,6 inci Full HD 144Hz 3ms Adaptive Sync,\r\nOS Windows 10,\r\nBobot 2.3 Kg,\r\nDimensi 359,8 x 256 x 24,7 mm,\r\nAudio DTS-X Ultra,', 14500000, 'tuf.png', 'New', 'Asus', 21, 'Laptop', 5),
(5, 'ACER Nitro 5 AN515-44', 'Spesifikasi ACER ....', 'AMD Ryzen 7 4800H\r\n8 GB DDR4\r\n512 GB SSD\r\nWiFi, Bluetooth, Webcam\r\nNvidia GeForce GTX 1650 Ti 4 GB\r\n15.6-inch Full HD IPS 144 Hz\r\nWindows 10 Home\r\nOffice Home and Student 2019 Pre-installed\r\nWarna Black', 8100000, 'acer2.png', 'New', 'Acer', 21, 'Laptop', 5),
(6, 'Lenovo legion 5 15ARH', 'Spesifikasi Lenovo ....', 'Processor: AMD Ryzen 7 4800H\r\nRAM: 16GB (2x 8GB) DDR4\r\nSSD: 512GB\r\nVGA: NVIDIA GeForce GTX 1660 Ti 6GB GDDR6\r\nKonektivitas: Wifi + Bluetooth\r\nUkuran Layar: 15.6 Inch FHD\r\nSistem Operasi: Windows 10 Home\r\nLENOVO Legion 5 15ARH05H\r\nVarian : LENOVO Legion 5 15ARH05H [82B100A6ID] - Phantom Black, Free Product : LENOVO Gaming Mouse M200', 16899000, 'legion1.png', 'Second', 'Lenovo', 11, 'Laptop', 3),
(7, 'HP Pavilion Gaming 15-EC1076AX', 'Spesifikasi HP Pavilion . . .', 'AMD Ryzen 7 4800H\r\n16 GB DDR4\r\n512 GB SSD\r\nWiFi, Bluetooth, Webcam\r\nNvidia GeForce GTX 1660 Ti Max-Q 6 GB\r\n15.6-inch Full HD IPS Anti-Glare 60Hz\r\nWindows 10 Home\r\nOffice Home and Student Pre-Installed\r\nWarna Black', 14799000, 'pavilion.png', 'New', 'HP', 5, 'Laptop', 5),
(8, 'HP LaserJet Pro M15w', 'Spesifikasi LaserJet ...', 'Laser Mono, Only Print, WiFi,\r\nResolusi cetak up to 600 x 600 dpi,\r\nMax print area  21,6 x 29,7 cm,\r\nKecepatan cetak  19 ppm /8000 halaman,\r\nUSB 2.0, Wifi Direct,\r\nDimensi 34,6 x 34,8 x 28 cm,\r\nBerat 3,8 kg,', 1350000, 'ljpro.png', 'New', 'HP', 3, 'Printer', 5),
(9, 'Epson L3110', 'Spesifikasi EPSON ....', 'Epson L3110 All-in-One Ink Tank Printer adalah printer yang dapat mencetak hingga 10ppm untuk dokumen hitam & putih dan 5ppm berwarna. Resolusi mencetaknya mencapai 5760 x 1440dpi dan dilengkapi scanner dengan sensor Flatbed yang dapat memindai dengan cepat. Epson Printer Multifungsi ini bisa diandalkan untuk berbagai kebutuhan pribadi, sekolah, bisnis, dan kantor. Dapatkan harga Epson L3110 All-in-One Ink Tank Printer yang termurah se-Indonesia yakni IDR1782000 via iPrice', 1700000, 'epson.png', 'New', 'Epson', 2, 'Printer', 5),
(10, 'Fuji Xerox CM115W', 'Spesifikasi Fuji Xerox . . . ', 'Fitur Print, Scan, Copy\r\nMemory 256MB\r\nKoneksi USB...', 4899000, 'xerox.png', 'New', 'Fuji', 5, 'Printer', 5),
(11, 'Kingston SSD A400 240GB', 'Spesifikasi Kingston SSD ....', 'Kingston SSD A400 [240GB/ SATA/ 2.5 Inch], Kingston A400 solid-state drive secara dramatis meningkatkan responsivitas sistem yang ada dengan waktu boot, loading dan transfer yang luar biasa dibandingkan dengan hard drive mekanis. Didukung oleh pengontrol gen terbaru untuk kecepatan baca dan tulis hingga 500MB/ s dan 320MB/s. SSD ini 10x lebih cepat dari hard drive tradisional untuk kinerja yang lebih tinggi, multi-tasking yang sangat responsif dan sistem yang lebih cepat secara keseluruhan. Juga', 450000, 'kings.jpg', 'New', 'Kingston', 12, 'Komputer', 0),
(13, 'Infinix', 'Spesifikasi Inifinix ...', 'Prosesor: Core i5-1035G1\r\nRAM: 8 GB DDR4 Dual Channel\r\nMemori penyimpanan: SSD 256GB M.2 NVMe PCIe; Upgradable Storage\r\nGPU/Grafis: Intel UHD Graphics for 10th Gen Intel Processors.\r\nMaterial: Metal Anodized Premium Aluminum\r\nDimensi laptop: 32.3 x 21.9 x 1.63 cm\r\nBobot: 1,47 kg\r\nAdaptor: Charger 64W, USB Type C\r\nDisplay: IPS 14 inci, Full HD (1920 x 1080 px), refresh rate 60 Hz, Color Gamut 100% sRGB, 180 derajat angle-view\r\nWebcam: HD Camera 720p\r\nKeyboard: Backlit keyboard; 2 tingkat keceraha', 9100000, 'x11.png', 'New', 'Infinix', 5, 'Laptop', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `nama`, `email`, `pesan`) VALUES
(1, 'Firdaus', 'admin@gmail.com', 'adasdads'),
(4, 'Daus', 'admin@gmail.com', 'a,dna,mdan,sd'),
(5, 'nisa', 'nisa@yahoo.com', 'jadi gini'),
(6, 'Nisa', 'nisa1@yahoo.com', 'Tes123'),
(12, 'tes', 'tes@gmail.com', 'tesss'),
(13, 'sss', 'ss@gmail.com', 'user'),
(14, 'Ahmad', 'ahmad03@gmail.com', 'Tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `photo`) VALUES
(1, '2.png'),
(2, '5.png'),
(3, '4.png'),
(4, '31.png'),
(6, '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id_home` int(11) NOT NULL,
  `tittle` varchar(128) NOT NULL,
  `info` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id_home`, `tittle`, `info`) VALUES
(1, 'Proton Techindo', 'Proton Techindo adalah sebuah perusahaan elektronik menjual barang dan jasa, yang bergerak di bidang penjualan produk komputer, baik hardware maupun software.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id_info` int(11) NOT NULL,
  `tittle` varchar(128) NOT NULL,
  `tgl_info` date NOT NULL,
  `content_awal` varchar(1000) NOT NULL,
  `content_modal` mediumtext NOT NULL,
  `photo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id_info`, `tittle`, `tgl_info`, `content_awal`, `content_modal`, `photo`) VALUES
(1, 'Sistem Informasi adalah Kombinasi Teknologi dan Aktivitas Manusia, Kenali Tujuannya', '2021-10-14', '<p><strong>Liputan6.com</strong>, Jakarta Sistem informasi adalah suatu istilah yang berkaitan dengan sistem manajerial atau pengelolaan. Sistem informasi ini merupakan kombinasi dari prosedur kerja, informasi, individu, dan teknologi informasi yang terorganisir. Sistem informasi berkembang dengan begitu pesat karena pengaruh internet. Pasalnya, internet dapat menyediakan, menyimpan, serta memberikan akses informasi yang memudahkan masyarakat. Sistem informasi adalah kombinasi dari teknologi informasi dan aktivitas orang yang menggunakannya untuk mendukung operasi dan manajemen. Komponen dari sistem informasi ini terdiri dari hardware, software, telekomunikasi, database dan data warehouses, serta sumber daya manusia dan</p>\r\n', '<p>Seperti yang telah disebutkan sebelumnya, sistem informasi adalah kombinasi dari teknologi informasi dan aktivitas orang yang menggunakannya untuk mendukung operasi dan manajemen. Sistem informasi adalah istilah yang juga merujuk pada interaksi antara orang, proses algoritmik, data, dan teknologi. Hal ini memperlihatkan bahwa sistem informasi tidak hanya merujuk ada penggunaan organisasi Teknologi Informasi dan Komunikasi (TIK), namun juga untuk cara di mana orang berinteraksi dengan teknologi ini dalam mendukung proses bisnis. Tidak heran banyak orang memahami sistem informasi adalah seperangkat komponen teknologi yang saling terhubung untuk mengumpulkan, menyimpan, memproses data, serta menyediakan informasi, pengetahuan, dan produk digital. Sistem informasi adalah suatu istilah yang tidak lepas dari manajemen. Sistem informasi memang digunakan oleh hampir semua sektor kehidupan sekarang ini.<br>\r\nMulai dari kegiatan bisnis untuk menghimpun data produk dan mengelola sumber daya. Bahkan, istilah sistem informasi manajemen juga sering kali terdengar, yang mana artinya adalah sistem yang memproses data dana menyiapkan informasi yang diperlukan. Selain itu sistem informasi juga digunakan pada kegiatan pengelolaan keuangan perbankan, kegiatan pemerintah untuk menyediakan akses layanan masyarakat, hingga kegiatan pendidikan. Hal ini dengan menyediakan berbagai informasi dan pengetahuan dalam berbagai format. Sistem informasi biasanya mengandalkan koneksi internet. Melalui sistem informasi ini, berbagai produk digital seperti buku elektronik, produk video, permainan online, hingga media sosial dapat diakses dengan mudah. Internet mempunyai peranan penting untuk ketersediaan dan kemudahan akses informasi dari sistem informasi di masyarakat saat ini. Meskipun begitu, internet juga didukung oleh komponen-komponen lain yang membentuk sistem informasi. Sistem informasi adalah suatu sistem yang dapat memberikan kemudahan aktivitas sehari-hari bagi masyarakat. Jadi, bisa disimpulkan bahwa sistem informasi adalah suatu sistem yang mengombinasikan antara aktivitas manusia dan penggunaan teknologi untuk mendukung manajemen dan kegiatan operasional.<br>\r\nMeskipun begitu, internet juga didukung oleh komponen-komponen lain yang membentuk sistem informasi. Sistem informasi adalah suatu sistem yang dapat memberikan kemudahan aktivitas sehari-hari bagi masyarakat. Jadi, bisa disimpulkan bahwa sistem informasi adalah suatu sistem yang mengombinasikan antara aktivitas manusia dan penggunaan teknologi untuk mendukung manajemen dan kegiatan operasional.</p>\r\n', '11.jpg'),
(2, 'Sentra Mitra Informatika Targetkan Penjualan Rp135 Miliar Hingga Akhir Tahun', '2021-09-03', 'Suara.com - PT Sentra Mitra Informatika Tbk (LUCK) Perusahaan yang bergerak di percetakan dan dokumen serta penjualan produk teknologi informasi menargetkan penjualan di tahun 2021 senilai Rp135 miliar. Untuk mencapai target tersebut, perseroan masih tetap menjadikan sektor e-commerce sebagai fokus perseroan hingga akhir tahun 2021. \"Pandemi membuat semua rencana bisnis tahun 2020 berubah dari ekspansi menjadi bertahan dan menjaga likuiditas. Resiko bisnis yang besar membuat perseroan cenderung selektif memilih peluang yang ada dengan hanya berinvestasi jika resiko kecil atau rendah dan menunda investasi high gain high risk,\" kata Direktur Utama LUCK Budi Wijaya dalam paparan publik secara virtual Jumat (27/8/2021).\n', 'Suara.com - PT Sentra Mitra Informatika Tbk (LUCK) Perusahaan yang bergerak di percetakan dan dokumen serta penjualan produk teknologi informasi menargetkan penjualan di tahun 2021 senilai Rp135 miliar. Untuk mencapai target tersebut, perseroan masih tetap menjadikan sektor e-commerce sebagai fokus perseroan hingga akhir tahun 2021. \"Pandemi membuat semua rencana bisnis tahun 2020 berubah dari ekspansi menjadi bertahan dan menjaga likuiditas. Resiko bisnis yang besar membuat perseroan cenderung selektif memilih peluang yang ada dengan hanya berinvestasi jika resiko kecil atau rendah dan menunda investasi high gain high risk,\" kata Direktur Utama LUCK Budi Wijaya dalam paparan publik secara virtual Jumat (27/8/2021). Dari sisi bisnis, anak perseroan yaitu PT Sentral Kreasi Inovasi telah lolos sebagai penyedia LKPP, e-Katalog pada kuartal III 2021 yang akan fokus untuk pengembangan bisnis yang baru untuk B2G. Fokus pengembangan market 3D Printer dan 3D Scanner sebagai salah satu dari empat pilar Industri 4.0. Empat Pilar Industri 4.0 yaitu Artificial Intelligence, IOT, Cloud dan 3D printer. Pengembangan bisnis Software Solution untuk B2B & IT Management System. Terus beradaptasi untuk pengembangan Managed Print Service yang menunjang Budaya Work from Home. Fokus untuk penjualan Cloud Server bekerjasama dengan Alibaba Cloud,\" ujar Budi. Lebih lanjut Budi menambahkan, selama masa pandemic Perseroan melakukan konsolidasi bisnis dan mempersiapkan planning akan perubahan bisnis ke arah digitalisasi, mempersiapkan industry 4.0. Tantangan pandemi yang membuat kegiatan dunia usaha untuk bekerja di kantor berkurang, mempengaruhi secara langsung pendapatan usaha perseroan.', 'ik111.jpg'),
(3, 'Aktivis Inklusi: Anak-Anak Disabilitas Perlu Dikenalkan dengan Dunia Teknologi', '2021-07-15', 'Aktivis inklusi Gorontalo sekaligus ayah dari anak disabilitas Tuli Arifandy Pelealu menyampaikan bahwa anak-anak penyandang disabilitas perlu dikenalkan dengan dunia teknologi dan informasi (IT).\r\n\r\nPria yang akrab disapa Fandy melihat bahwa anak penyandang disabilitas dapat berkembang dengan baik bahkan lebih dari anak pada umumnya jika diberi dukungan yang tepat.', 'Aktivis inklusi Gorontalo sekaligus ayah dari anak disabilitas Tuli Arifandy Pelealu menyampaikan bahwa anak-anak penyandang disabilitas perlu dikenalkan dengan dunia teknologi dan informasi (IT).\r\n\r\nPria yang akrab disapa Fandy melihat bahwa anak penyandang disabilitas dapat berkembang dengan baik bahkan lebih dari anak pada umumnya jika diberi dukungan yang tepat.\r\n\r\nHal ini berkaitan erat dengan putrinya, Annisa Keyzla Maharani Putri yang memiliki ketertarikan di bidang IT.\r\n\r\nMenurutnya, dengan dukungan dari keluarga, perlahan tapi pasti Annisa dapat meningkatkan kompetensinya di bidang tersebut. Selain itu, dari sisi pribadi sebagai seorang individu Annisa pun memiliki kepercayaan diri yang baik.\r\n\r\nSalah satu bentuk dukungan yang diberikan pada sang anak dan penyandang disabilitas lainnya di Gorontalo adalah dengan membuka sanggar untuk berlatih IT.\r\n\r\n“Kami di Provinsi Gorontalo membuat sanggar untuk melatih kecakapan penyandang disabilitas dalam dunia IT. Dengan revolusi industri sekarang, anak-anak harus dikenalkan dengan IT,” kata Fandy dalam diskusi daring Koneksi Indonesia Inklusif (Konekin) ditulis Kamis (18/11/2021).\r\n\r\nSalah satu dorongan positif yang bisa dilakukan adalah mendukung anak-anak disabilitas untuk berwirausaha dengan bantuan teknologi. Mereka bisa menjual produk wirausahanya melalui internet agar pasarnya lebih luas.', '1.jpg'),
(5, 'Cara Toyota Indonesia Hadapi Tantangan Digital Industri Otomotif', '2021-09-09', 'Mendukung perkembangan ke arah digitalisasi dan juga industri 4.0, PT Toyota Astra Motor (TAM) menggelar kompetisi teknologi informasi (IT) Toyota Fun/Code. Perhelatan yang baru pertama kali dilakukan ini, menarik ratusan jumlah peserta, yang awalnya hanya ditargetkan 200 orang membludak hingga 775 orang yang terbagi dalam 593 tim.\r\n\r\nMelalui seleksi dewan juri, dari 593 tim yang mengajukan ide proposal, sebagian besar memilih subtema ownership experience dengan komposisi 32 persen dari total ide, diikuti education dengan 22 persen, value chain & trade in dengan 19 persen, eco driving dengan 18 persen, dan disability dengan 9 persen. Melalui penilaian tim juri, 70 tim terbaik berhasil lolos ke babak final.', 'Mendukung perkembangan ke arah digitalisasi dan juga industri 4.0, PT Toyota Astra Motor (TAM) menggelar kompetisi teknologi informasi (IT) Toyota Fun/Code. Perhelatan yang baru pertama kali dilakukan ini, menarik ratusan jumlah peserta, yang awalnya hanya ditargetkan 200 orang membludak hingga 775 orang yang terbagi dalam 593 tim.\r\n\r\nMelalui seleksi dewan juri, dari 593 tim yang mengajukan ide proposal, sebagian besar memilih subtema ownership experience dengan komposisi 32 persen dari total ide, diikuti education dengan 22 persen, value chain & trade in dengan 19 persen, eco driving dengan 18 persen, dan disability dengan 9 persen. Melalui penilaian tim juri, 70 tim terbaik berhasil lolos ke babak final.\r\n\r\n\"Kami berharap, kompetisi ini menjadi salah satu ajang yang akan melahirkan professional handal di bidang IT yang sangat dibutuhkan untuk menghadapi berbagai tantangan pembangunan Indonesia ke depan,\" ujar Marketing Director PT TAM, Anton Jimmi Suwandy, di Ancol, Jakarta Utara, Minggu (4/11).\r\n\r\nDalam babak final, 70 tim ini diberi kesempatan untuk melakukan proses coding pada tahap HackDay yang berlangsung nonstop selama 24 jam, pada 2-3 November 2019.\r\n\r\nProses coding ini menguji kemampuan fisik dan mental serta kecerdasan para peserta dalam menghasilkan aplikasi yang telah direncanakan.\r\n\r\nMelalui proses coding atau pengembangan aplikasi (application development), dewan juri menyaring 70 tim menjadi delapan tim yang mendapat kesempatan untuk melakukan presentasi dan demo aplikasi.\r\n\r\nPenilaian dilakukan berdasarkan kesiapan aplikasi dengan bobot 20 persen, fitur dan kegunaan aplikasi dengan bobot 20 persen, masalah yang bisa diselesaikan dengan bobot 20 persen, potensi pengembangan dengan bobot 15 persen, kemudahan tampilan dan kegunaan dengan bobot 15 persen, dan kesesuaian dengan tema dengan bobot 10 persen.', '2.jpg'),
(7, 'Kecerdasan Buatan Jadi Solusi Potensial Tenaga IT', '2021-11-06', 'F5 Networks merilis sebuah laporan komprehensif mengenai perkembangan peran CISO (Chief Information Security Officer) dan pendekatan keamanan IT yang saat ini dilakukan oleh seluruh organisasi di seluruh dunia di tengah lanskap ancaman yang terus berubah. Laporan tersebut menemukan keamanan IT semakin menjadi prioritas dan pengaruh CISO dalam perusahaan berkembang. Namun, strategi keamanan di banyak organisasi masih sebagian besar reaktif dan belum selaras dengan fungsi bisnis.', 'F5 Networks merilis sebuah laporan komprehensif mengenai perkembangan peran CISO (Chief Information Security Officer) dan pendekatan keamanan IT yang saat ini dilakukan oleh seluruh organisasi di seluruh dunia di tengah lanskap ancaman yang terus berubah. Laporan tersebut menemukan keamanan IT semakin menjadi prioritas dan pengaruh CISO dalam perusahaan berkembang. Namun, strategi keamanan di banyak organisasi masih sebagian besar reaktif dan belum selaras dengan fungsi bisnis. Penelitian yang dilakukan Ponemon Institute ini berdasarkan pada wawancara dengan profesional senior bidang keamanan IT di 184 perusahaan di tujuh negara. Antara lain Amerika Serikat, Inggris, Jerman, Brasil, Meksiko, India, dan Tiongko.Salah satu temuan yang menarik adalah kecerdasan buatan (Artificial Intelligence/AI) menjadi solusi potensial untuk kebutuhan kepegawaian. Kekurangan tenaga kerja dalam bidang keamanan IT terus menjadi masalah besar bagi CISO. \"Penelitian ini memberikan pandangan unik tentang cara CISO beroperasi di lingkungan yang menantang saat ini,\" kata Mike Convertino, Chief Information Security Officer F5 melalui keterangannya, Jumat (3/11/2017) di Jakarta. \"Yang pasti CISO terus mengembangkan cara mereka mendorong fungsi keamanan dan peran kepemimpinan yang mereka jalankan dalam perusahaan. Tapi di banyak organisasi, keamanan IT belum memainkan peran strategis dan proaktif yang diperlukan sepenuhnya untuk melindungi aset dan mempertahankan diri dari serangan yang kian canggih dan sering,\" sambungnya.', '31.jpg'),
(8, 'Tangkal Radikalisme di Media Sosial, Banser Dalami Ilmu IT', '2019-06-12', 'Maraknya aksi radikalisme di media sosial, membuat GP Ansor dan Banser mendalami ilmu Teknologi Informasi (IT). Banser merasa perlu memperkuat sistem IT untuk menangkal persebaran paham radikalisme lewat internet.\r\n\r\nHal tersebut disampaikan oleh Wakil Ketua GP Ansor Pusat, Lukman Hakim saat menjadi Pembina Apel Kesetiaan NKRI yang diikuti ribuan GP Ansor dan Banser di Lapangan Bola Desa Kemiri Barat, Kabupaten Batang, Jawa Tengah, Minggu, 17 September 2017.', 'Maraknya aksi radikalisme di media sosial, membuat GP Ansor dan Banser mendalami ilmu Teknologi Informasi (IT). Banser merasa perlu memperkuat sistem IT untuk menangkal persebaran paham radikalisme lewat internet.\r\n\r\nHal tersebut disampaikan oleh Wakil Ketua GP Ansor Pusat, Lukman Hakim saat menjadi Pembina Apel Kesetiaan NKRI yang diikuti ribuan GP Ansor dan Banser di Lapangan Bola Desa Kemiri Barat, Kabupaten Batang, Jawa Tengah, Minggu, 17 September 2017.\r\n\"GP Ansor dan Banser memiliki tugas untuk menjaga keutuhan NKRI, dan bagi siapa saja yang nyata-nyata mengganggu keutuhan NKRI, GP Ansor dan Banser siap melawan di garda terdepan,\" tegas Lukman Hakim yang disambut kata siap oleh ribuan Banser.\r\n\r\nGP Ansor Pusat sudah berupaya melakukan penguatan di IT melalui tim cyber crime, yang setiap saat mendeteksi potensi radikalime di media sosial.\r\n\r\n\"Ke depan kita upayakan GP Ansor dan Banser agar memiliki kesadaran dalam menggunakan media sosial dan menjadi bagian lain untuk menghalau radikalisme, karena sekarang perangnya tidak lagi di darat tapi juga di dunia maya,\" jelasnya.\r\n\r\nLukman juga berharap, GP Ansor dan Banser tidak terprovokasi berita yang berkembang di media sosial.\r\n\r\nSementara itu, Wakil Bupati Batang, Suyono mengatakan, harus ada renovasi di tubuh GP Ansor dan Banser agar lebih peka terhadap dinamika modernisasi. Selain menangkal radikalisme, GP Ansor dan Banser diminta untuk tanggap terhadap penyalahgunaan narkoba.\r\n\r\n\"Banser harus tanggap terhadap perubahan geologi seperti bencana alam. Banser juga harus memiliki kepekaan terhadap lingkungan sebagai barisan kedua di antara Polisi dan TNI,\" kata Suyono saat menghadiri apel.', '4.jpg'),
(9, 'iCIO: Indonesia Kekurangan Ahli di Bidang Teknologi', '2021-11-03', 'Perkembangan bisnis digital di Indonesia ternyata masih menemui sejumlah kendala. Menurut Chairman Chief Information Officer Indonesia (iCIO Community), Agus Wicaksono, ada lima masalah yang harus dihadapi bisnis digital Tanah Air, antara lain kesenjangan infrastruktur teknologi, kekurangan tenaga ahli, keamanan data, standar pertukaran informasi, serta kepemilikan data. Untuk membahas salah satu kendala tersebut, iCIO Community pun menyelenggarakan diskusi terbuka bertajuk \"Closing The Digital Gap\". Adapun pembicaranya adalah CEO Line Indonesia Ongki Kurniawan, CEO Hired Today Frans Dirgantara, Wakil Rektor Universitas Bina Nusantara Idris Gautama, Kepala Departemen Teknik Elektro Fakultas Teknik Universitas Indonesia Gunawan Wibisono, dan Dirjen Aplikasi Informatika Kementerian Komunikasi dan Informatika Semuel Pangerapan.', 'Perkembangan bisnis digital di Indonesia ternyata masih menemui sejumlah kendala. Menurut Chairman Chief Information Officer Indonesia (iCIO Community), Agus Wicaksono, ada lima masalah yang harus dihadapi bisnis digital Tanah Air, antara lain kesenjangan infrastruktur teknologi, kekurangan tenaga ahli, keamanan data, standar pertukaran informasi, serta kepemilikan data. Untuk membahas salah satu kendala tersebut, iCIO Community pun menyelenggarakan diskusi terbuka bertajuk \"Closing The Digital Gap\". Adapun pembicaranya adalah CEO Line Indonesia Ongki Kurniawan, CEO Hired Today Frans Dirgantara, Wakil Rektor Universitas Bina Nusantara Idris Gautama, Kepala Departemen Teknik Elektro Fakultas Teknik Universitas Indonesia Gunawan Wibisono, dan Dirjen Aplikasi Informatika Kementerian Komunikasi dan Informatika Semuel Pangerapan.\nSesuai tajuk, diskusi ini membahas mengenai kurangnya tenaga ahli bidang teknologi informasi di Indonesia. Menurut Ongki, sumber daya manusia (SDM) merupakan aset penting yang dimiliki perusahaan. Namun di Indonesia, sumber daya berkualitas masih terbilang minim. \"Tak hanya kemampuan, masalah lain yang juga perlu menjadi perhatian adalah mencari di mana talenta itu berada. Sebab, sampai saat ini kami belum mempunyai data wilayah mana saja yang memiliki talenta baik,\" tuturnya ditemui Tekno Liputan6.com saat diskusi di Jakarta, Selasa (9/5/2017). Namun menurut Ongki, sebuah perusahaan digital tak hanya sekadar menjadi magnet bagi pencari kerja, tapi bisa menjadi institusi pendidikan bagi pegawainya. Dengan demikian, pekerja dapat tetap mengolah dan meningkatkan kemampuannya. Dirjen Aplikasi Informatika Kementerian Komunikasi dan Informatika Semuel Pangerapan pun tak menampik memang ada kesenjangan jumlah tenaga ahli bidang teknologi informatika (TI) di Indonesia. Ia menilai pemerintah sebenarnya dapat mengeluarkan kebijakan untuk mendorong pertumbuhan tenaga ahli. \"Kebijakan bisa diambil, tapi harus dibekali dengan data dari ekosistem pula. Seperti apa kekurangannya, berapa jumlah yang dibutuhkan, baru setelah itu kita bisa merumuskan kebijaka yang sesuai,\" ujarnya. Ia juga mengatakan bahwa permasalahan ini harus dibahas lintas Kementerian dan pemangku kepentingan untuk mendapatkan gambaran yang lebih lengkap.', '51.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `no_transaksi` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `bukti_transfer` varchar(128) NOT NULL,
  `pembayaran` varchar(128) NOT NULL,
  `pengiriman` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `tgl_pemesanan` datetime DEFAULT NULL,
  `tgl_dikirim` datetime DEFAULT NULL,
  `tgl_diterima` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `no_transaksi`, `id`, `total_harga`, `bukti_transfer`, `pembayaran`, `pengiriman`, `status`, `tgl_pemesanan`, `tgl_dikirim`, `tgl_diterima`) VALUES
(24, 'TR001', 11, 17441000, 'nca.jpg', 'BCA', 'Hemat', 'Diterima', '2022-05-16 18:04:24', '2022-05-16 18:06:14', '2022-05-16 18:06:37'),
(25, 'TR002', 10, 52368000, 'Screenshot_(11).png', 'Mandiri', 'Express', 'Diterima', '2022-05-16 18:05:44', '2022-05-16 18:06:19', '2022-05-16 18:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visi`
--

CREATE TABLE `tbl_visi` (
  `id_visi` int(11) NOT NULL,
  `tittle` varchar(128) NOT NULL,
  `visi` varchar(500) NOT NULL,
  `misi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visi`
--

INSERT INTO `tbl_visi` (`id_visi`, `tittle`, `visi`, `misi`) VALUES
(1, 'Visi Misi', 'Visi kami adalah menjadikan pelayanan yang lebih baik dan terbaik untuk kepuasan pelanggan. Kami juga bertekad untuk menjaga kepercayaan pelanggan kepada kami dan memberikan solusi yang terbaik.', 'Misi kami adalah menjadikan pelanggan kami mitra yang baik dan terpecaya dalam bidang service dan maintenance di Indonesia.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(25) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `no_telp` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `image`, `password`, `role`, `is_active`, `date_created`, `alamat`, `no_telp`) VALUES
(9, 'Admin', 'admin@gmail.com', 'default.jpg', 'admin', 'Admin', 1, 1650246837, 'asd', 'asd'),
(10, 'User', 'user@gmail.com', 'default.png', 'user', 'Pelanggan', 1, 1637138714, 'DKI Jakarta`Jakarta Timur`Jatinegara`Cipinang Muara`Jl tuh', '088888111299'),
(11, 'Daus', 'daus@gmail.com', 'office1.png', 'user', 'Pelanggan', 1, 1637917285, 'DKI Jakarta`Jakarta Timur`Jatinegara`Cipinang Muara`Jl Ini', '088212678904'),
(12, 'ini', 'ini@gmail.com', 'default.png', 'admin', '1', 1, 1644542846, '', ''),
(14, 'Joko', 'ya@gmail.com', 'default.png', 'user', '2', 1, 1648606691, 'sdf', '0881290013'),
(15, 'Jojo', 'jojo@gmail.com', 'default.png', 'jojo', '2', 1, 1648962244, 'DKI Jakarta`Jakarta Timur`Jatinegara`Cipinang Muara`sad', '434'),
(16, 'Ahmad', 'ahmad03firdaus@gmail.com', '4.jpg', 'oktober', 'Pelanggan', 1, 1648976752, 'DKI Jakarta`Jakarta Timur`Jatinegara`Cipinang Muara`Jl Situ', '088129349391'),
(19, 'asd', 'asd@yahoo.com', 'default.jpg', 'sd', '1', 1, 1650246904, 'asd', 'asda'),
(21, 'Robert', 'pattinson0303@gmail.com', '4.jpg', 'user', 'Pelanggan', 1, 1648976752, 'DKI Jakarta`Jakarta Timur`Jatinegara`Cipinang Muara`Jl Situ', '088129349391'),
(22, 'tes', 'tes@gmail.com', 'default.png', '123', 'Pelanggan', 1, 1650334157, NULL, NULL),
(23, 'asd', 'asd@gmail.com', 'default.png', 'asd', 'Pelanggan', 1, 1650353969, NULL, NULL),
(24, 'asd', 'a2sd@gmail.com', 'default.png', 'asd', 'Pelanggan', 1, 1650354050, NULL, NULL),
(25, 'Daus', 'aus@gmail.com', 'default.png', '1234', 'Pelanggan', 1, 1650495571, 'DKI Jakarta`Jakarta Timur`Duren Sawit`Malaka Jaya`Jl Bojong Indah', '08012308123'),
(26, 'Ahmad', 'ahm@gmail.com', 'default.png', 'user', 'Pelanggan', 1, 1650508181, 'DKI Jakarta`Jakarta Timur`Duren Sawit`Malaka Jaya`Jl Bojong Indah', '088823128318');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id_token`, `email`, `token`, `date_created`) VALUES
(32, 'ahmad03firdaus@gmail.com', '06XUEtArFKJ64JpGgmHi9yWeNvDB9PXEQAyESMDKg1I=', 1650286096),
(33, 'ahmad03firdaus@gmail.com', '1SHxNrn9el5l3Oyo5QbsOqmVE9OCMJWyFFCc7cuJnGU=', 1650286489),
(34, 'ahmad03firdaus@gmail.com', '/ZCz6ApVwjwweeAqawVsBhj3DmdXXh+0MmEkfvbX+qE=', 1650286588),
(35, 'ahmad03firdaus@gmail.com', '4302BAGKVsbs8M1vigwW+kmdNO/PWD/DuI6NAkOxcpQ=', 1650286668),
(36, 'ahmad03firdaus@gmail.com', '8caDOzHcOIojbtCzou5LeyObqJHuSp6CqDEPXa+B9Zo=', 1650286725),
(37, 'ahmad03firdaus@gmail.com', 'MNcNDz8GMVzd4w2cuYhd3LKUsT+UW3Kdz5dPeUzCiFE=', 1650286801),
(38, 'ahmad03firdaus@gmail.com', '+VrqGHkL0AumIex03Kk/r5GSdZ1GNMG6ODpEr9pen3I=', 1650286856),
(39, 'pattinson0303@gmail.com', 'PiNnX0/zPQqir5cQDbSECXkSuDDS/voZqzfXEcgD8CY=', 1650286928),
(40, 'pattinson0303@gmail.com', 'F8BXoBrV/EG8x5rd37BUfd7VhL3jJfW8nwo8noghb6I=', 1650286932),
(41, 'ahmad03firdaus@gmail.com', 'r9e747SV8/NbEMDZ98aHy05+L3cHgg9V0AIYelqIQXo=', 1650286946),
(42, 'pattinson0303@gmail.com', 'hLJ1KhRxfCgWkh9axXpYrzM+zw78L7yftZUgKEtzwzY=', 1650450058),
(43, 'pattinson0303@gmail.com', 'DknEnpw7xkURZc6Sl6VMUomXE0Z5mgFiYqQgu9ToG3U=', 1650495616);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dtl_transaksi`
--
ALTER TABLE `dtl_transaksi`
  ADD PRIMARY KEY (`id_dtl_transaksi`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_visi`
--
ALTER TABLE `tbl_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dtl_transaksi`
--
ALTER TABLE `dtl_transaksi`
  MODIFY `id_dtl_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_visi`
--
ALTER TABLE `tbl_visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
