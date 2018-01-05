-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 01:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kebudayaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kesenianmusik`
--

CREATE TABLE `kesenianmusik` (
  `id` int(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesenianmusik`
--

INSERT INTO `kesenianmusik` (`id`, `user`, `judul`, `gambar`, `isi`) VALUES
(1, 'nuki', 'Arumba', 'arumba.jpg', 'Arumba adalah alat musik tradisionil Jawa Barat yang terbuat dari bambu, nama Arumba sendiri sesungguhnya yaitu singkatan dari alunan rumpun bambu. Sejak awal mulanya alat musik tradisional Jawa Barat satu ini memakai pentatonis jadi tangga suara yang dihasilkan. Tetapi saat ini Arumba memakai suara diatonis.'),
(2, 'nuki', 'Angklung', 'angklung.jpg', 'Aku percaya alat musik yang satu ini tidak asing sekali lagi ditelinga kita. Iya, angklung yaitu alat musik tradisionil Jawa Barat yang terbuat dari bambu, sama dengan Arumba. Angklung yaitu type alat musik yang dimainkan lewat cara digoyang karna bunyi yang dibuat datang dari bentrokan pada bambu itu. Begitu bangga bukanlah, jadi warga negara Indonesia.'),
(3, 'nuki', 'Calung', 'calung.jpg', 'Nyaris sama juga dengan Angklung, calung ini termasuk juga alat musik tradisionil Jawa Barat yang terbuat dari bambu juga. Tetapi umumnya bambu yang dipakai untuk buat alat musik yang satu ini yaitu bambu hitam serta ada pula yang terbuat dari bambu putih. Ketidaksamaanya alat musik type ini dengan Angklung yaitu alat musik Calung ini dimainkan lewat cara dipukul sisi ruas batang bambunya.');

-- --------------------------------------------------------

--
-- Table structure for table `keseniantari`
--

CREATE TABLE `keseniantari` (
  `id` int(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keseniantari`
--

INSERT INTO `keseniantari` (`id`, `user`, `judul`, `gambar`, `isi`) VALUES
(1, 'nuki', 'Tari Wayang Topeng', 'Tari-Wayang-Topeng.jpg', 'Jika di Jawa Barat ada tari topeng, di Jawa Timur pun sama. Kota Malang adalah asal muasalnya lahir Tari Wayang Topeng, tidak diherankan lagi mengapa disebut tari wayang topeng, hal ini karena penari menggunakan pakaian seperti wayang kulit.\r\n\r\nDulunya tari wayang topeng diadakan hanya sebagai pertunjukan ritual saja.\r\n\r\nTopeng disini dilambangkan sebagai rasa apresiasi pada wajah nenek moyang. Dimana saat itu topeng memiliki arti menghargai roh leluhur. Tidak heran, bila tarian ini sedikit bernuasana mistik.\r\n\r\nSejarah singkatnya tari wayang topeng digunakan saat agama Islam memasuki wilayah Jawa, dan tarian ini dijadikan salah satu trik untuk merebut hati orang Jawa yang saat itu agama Hindu masih kental.\r\n\r\nTernyata beda dengan Tari Topeng asal Jawa Barat yang menggunakan background sejarah wayang golek. Tari topeng Jawa Timur ini mengisahkan cerita Ramayana dan Panji.\r\n\r\nMusik pengiring yang digunakan adalah bonang, gong, gamelan dan kendang.'),
(2, 'nuki', 'Tari Glipang', 'Tari-Glipang-300x169.jpg', 'Pertama saya lihat tarian tradisional ini, yang dilihat adalah pakaian. Karena pakaian yang digunakan seperti pakaian untuk laki-laki, dan alat musik yang ditabuh seperti yang digunakan di negara Arab.\r\n\r\nTarian ini biasanya ditarikan oleh laki-laki. Sedangkan tarian yang saya lihat ditarikan oleh perempuan. Ternyata tarian ini menceritakan tentang prilaku para penjajah saat itu.\r\n\r\nNama Glipang itu sendiri berawal dari kata Gholiban diambil dari bahasa Arab yang artinya kebiasaan.\r\n\r\nSejarah singkatnya, tarian ini dibuat oleh Seno Truno, saat ia bekerja sebagai mandor penebang tebu di perusahaan milik Belanda. Karena sikap Belanda yang sewenang-webang membuat ia berhenti bekerja. Ia pun berinisiatif membuat tarian yang menggambarkan sejarah kehidupannya.\r\n\r\nKalau dilihat dari gerakannya, ia seperti berada dalam posisi kuda-kuda seakan mau menyerang, gerakan yang seolah gagah perkasa mencirikan koloneal Belanda yang ingin dipandang tinggi. Kesan kakunya menandakan emosional. Adapun beberapa gerakan, dimana tangan memegang pinggang, bila diartikan dalam kehidupan sehari-hari, gerakan tersebut sangat tidak sopan.\r\n\r\nNamun seiring dengan zaman, tarian tersebut sedikit dipoles untuk menandakan keadaan masyarakat, yang saat itu mayoritas prajurit yang melawan para penjajah.'),
(3, 'nuki', 'Tari Merak', 'tari-merak-300x200.jpg', 'Tari merak berasal tanah Pasundan, tarian ini dibuat oleh Raden Tjetje Somantri yang terinspirasi dari burung merak, karena sejak zaman dulu Merak menandakan sebuah mahkota.\r\n\r\nTidak banyak sejarah dari tari merak, penari hanya menari dan melenggak lenggok sembari mengibaskan sayapnya bak seekor burung merak. Walau begitu tarian ini mengutamakan keindahan dan kecantikan. Tidak heran bila semua orang yang melihat terkagum-kagum dengan tarian ini.\r\n\r\nUntuk membedakan tarian ini sangat gampang, ciri khasnya seorang penari  menggunakan mahkota, dan berpakaian seperti kamben namun coraknya seperti burung merak. Di zaman yang sudah canggih ini, kamu bisa gampang memesan atau langsung membeli 1 set pakaian tari merak dengan harga 2-4 juta.\r\n\r\nJumlah penari biasanya 3 orang, namun terkadang hanya beranggotakan 2 orang saja, bisa ditarikan dengan berpasangan. Musik pengiringnya adalah gamelan.\r\n\r\nBagusnya, tarian ini termasuk tarian yang sangat terkenal di luar negeri, kita patut membudidayakan kesenian tanah air kita salah satunya tarian tradisional masing-masing daerah.'),
(4, 'nuki', 'Tari Jaipong', 'Tari-Jaipong-300x166.jpg', 'Siapa yang tidak kenal dengan tari Jaipong? Semua orang sudah tau Jaipong berasal dari Sunda, diciptakan oleh Gugum Gumbira. Tarian ini sangat dilestarikan oleh orang-orang yang mencintai budayanya, sampai-sampai dibuka komunitas penari Jaipong.\r\n\r\nTidak heran, tarian ini menjadi salah satu tarian khas Jawa Barat dan dipentaskan bila ada acara-acara pemerintahan, dan ketika acara pernikahan.\r\n\r\nDulu gerakan tarian ini membuat kontroversi karena mengedepankan gerakan erotis dan keindahan dalam berlenggak lenggok. Terlebih saat tahun 1980, tari Jaipong sempat disiarkan disalah satu chanel TV dan membuat tarian tersebut dikenal masyarakat luas.\r\n\r\nBagusnya, Tari Jaipong telah diakui oleh berbagai negara, negara  Indonesia pun pasti bangga. Saya berharap para seniman generasi penerus dapat mempertahankan kesenian tradisional dan menggali seni lebih dalam lagi. Kalau difikir-fikir, bila saja tarian ini dikombinasikan dengan gerakan modern, maka akan lebih bagus hasilnya. Tetap ada unsur tradisional, namun mengikuti perkembangan zaman. Bisa kita ambil contoh penari tradisional modern Sandrina.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nama` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nama`, `user`, `pass`) VALUES
('admin', 'admin', 'admin'),
('tesdaftar', 'asdadadadas', '1'),
('dsa', 'asdasdadadadas', '1'),
('nukiasdf', 'asdfasdf', 'asdf'),
('dfjbjkb', 'bfkjbslkfb', 'kjsbfkls'),
('dsadas', 'dsadsadsadsa', '11'),
('ghifari', 'ghifari', 'ghifari'),
('Nuki', 'nuki', 'nuki'),
('dsadas', 'sdadasdsdsa', 'dsadsada'),
('sdasddasda', 'sdadsadasdadadadas', '1'),
('sdasdadsajd', 'sdansdsan', 'daskjdksa'),
('test', 'tesdaf', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kesenianmusik`
--
ALTER TABLE `kesenianmusik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keseniantari`
--
ALTER TABLE `keseniantari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kesenianmusik`
--
ALTER TABLE `kesenianmusik`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keseniantari`
--
ALTER TABLE `keseniantari`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
