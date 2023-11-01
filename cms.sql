-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2023 pada 03.26
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(1, 'Sejarah', '20230930014851.jpg'),
(2, 'Indo', '20230930014903.jpg'),
(3, 'aa', '20230930014909.jpg'),
(4, 'aaaa', '20230930014916.jpg'),
(5, 'nbmna', '20230930014925.jpg'),
(6, 'nyaa', '20230930014933.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `foto`, `tanggal`) VALUES
(1, 'bgass', '20230930122903.jpg', '2023-09-30'),
(3, 'chi', '20230930133121.jpg', '2023-09-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Agama'),
(4, 'Sejarah'),
(5, 'Tokoh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `twitter`, `github`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'bgsmhrdka', 'Hello guys', 'https://www.instagram.com/bgsmhrdkabdhrto_/', 'https://twitter.com/Bgsmhrdka', 'https://github.com/BagasMB', '', 'bagasmahardikabudi2007@gmail.com', 'Padangan RT 01/RW 07, Jungke, Karanganyar', 'https://wa.me/6281235540603?text=Halo,%20salam%20kenal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(1, 'Pegerakan Nasional', 'Periode pergerakan nasional di Indonesia dimulai sejak lahirnya Budi Utomo pada 1908 hingga keruntuhan pemerintahan kolonial Belanda. Dalam periode tersebut, perjalanan sejarah bangsa Indonesia diwarnai dengan upaya melepaskan diri dari belenggu penjajah untuk menjadi negara yang merdeka, berdaulat, adil, dan makmur. ', '20230918135340.jpg', 'Pegerakan-Nasional', '4', '2023-09-18', 'admin'),
(2, 'Budi Utomo', 'Budi Utomo didirikan oleh dr. Sutomo pada 20 Mei 1908. Organisasi ini merupakan yang pertama dan kelahirannya diperingati sebagai Hari Kebangkitan Nasional.\r\n<br><br>\r\nBerdirinya organisasi Budi Utomo tidak bisa lepas dari peranan dr. Wahidin Soedirohusodo. Ide-ide dr. Wahidin tentang organisasi pergerakan nasional menginspirasi dr. Sutomo dan kawan-kawan untuk kemudian mendirikan Budi Utomo.\r\n<br><br>\r\ndr. Wahidin merupakan alumni STOVIA yang sering berkeliling di kota-kota besar di Pulau Jawa. Ia berkeliling menyebarkan gagasannya mengenai bantuan dana bagi pelajar-pelajar pribumi berprestasi yang tidak mampu melanjutkan sekolah.\r\n<br><br>\r\nIde itu kemudian diterima oleh dr. Sutomo dan kawan-kawan dengan mendirikan Budi Utomo. Organisasi ini bersifat sosial, ekonomi, kebudayaan, serta tidak bersifat politik.', '20230918140044.jpg', 'Budi-Utomo', '4', '2023-03-13', 'admin'),
(3, 'Siapa Bagas', 'Hello, nama saya Bagas Mahardika Budiharto biasa dipanggil Bagas, saya bersekolah di SMK Negeri 2 Karanganyar sekarang berada dikelas 11.', '20230919135645.jpg', 'Siapa-Bagas', '5', '2023-09-19', 'admin'),
(4, 'Christy', 'Angelina Christy, dikenal dengan nama Christy JKT48, adalah seorang penyanyi asal Indonesia yang tergabung sebagai anggota grup idola JKT48. Ia merupakan anggota generasi ketujuh JKT48 yang diperkenalkan pada 29 September 2018.', '20230919135835.jpg', 'Christy', '5', '2023-09-13', 'admin'),
(8, 'Sarekat Dagang Islam atau Sarekat Islam', 'Sarekat Dagang Islam Islam (SDI) didirikan oleh Haji Samanhudi di Surakarta pada tahun 1905. SDI didirikan dengan tujuan memperkuat persatuan para pedagang pribumi agar mampu bersaing dengan para pedagang asing.\r\n\r\nPada tahun 1912, SDI berubah nama menjadi Sarekat Islam (SI). SI berkembang pesat menjadi sebuah gerakan nasionalis yang memperjuangkan kemerdekaan Indonesia.\r\n<br><br>\r\n\r\nDi bawah kepemimpinan HOS Tjokroaminoto, organisasi ini pun semakin berkembang dan membuat Belanda khawatir karena dianggap membahayakan kedudukan pemerintah belanda. \r\n<br><br>\r\nPada masa itu, SI menjadi organisasi terbesar di Indonesia dengan anggota mencapai dua juta orang.', '20230921151140.jpg', 'Sarekat-Dagang-Islam-atau-Sarekat-Islam', '4', '2023-09-22', 'admin'),
(9, 'Akidah', 'Aspek akidah bisa disebut sebagai keimanan atau kepercayaan. Akidah harus bersumber dari Al-Quran yang merupakan kalam Allah, baru kemudian hadits Rasulullah. Dalam keimanan tak boleh bercampur dengan ragu atau prasangka, untuk itu akidah hanya bertempat dan diakui oleh hati.<br><br>\r\nIman menempati posisi utama dalam ajaran Islam, lantaran merupakan perkara yang mendasari kehidupan umat Islam. Terdapat enam asas yang melandasinya, dan dikenal sebagai rukun iman. Keenamnya ini disebutkan dalam Surah Al-Baqarah ayat 177:\r\n<br>\r\n<br>\r\nلَيْسَ الْبِرَّاَنْ تُوَلُّوْا وُجُوْهَكُمْ قِبَلَ الْمَشْرِقِ وَالْمَغْرِبِ وَلٰكِنَّ الْبِرَّ مَنْ اٰمَنَ بِاللّٰهِ وَالْيَوْمِ الْاٰخِرِ وَالْمَلٰۤىِٕكَةِ وَالْكِتٰبِ وَالنَّبِيّٖنَ ۚ وَاٰتَى الْمَالَ عَلٰى حُبِّهٖ ذَوِى الْقُرْبٰى وَالْيَتٰمٰى وَالْمَسٰكِيْنَ وَابْنَ السَّبِيْلِۙ وَالسَّاۤىِٕلِيْنَ وَفىِ الرِّقَابِۚ وَاَقَامَ الصَّلٰوةَ وَاٰتَى الزَّكٰوةَ ۚ وَالْمُوْفُوْنَ بِعَهْدِهِمْ اِذَا عَاهَدُوْا ۚ وَالصّٰبِرِيْنَ فِى الْبَأْسَاۤءِ وَالضَّرَّاۤءِ وَحِيْنَ الْبَأْسِۗ اُولٰۤىِٕكَ الَّذِيْنَ صَدَقُوْا ۗوَاُولٰۤىِٕكَ هُمُ الْمُتَّقُوْنَ\r\n<br>\r\n<br>\r\nArtinya: \"Kebajikan itu bukanlah menghadapkan wajahmu ke arah timur dan barat, melainkan kebajikan itu ialah (kebajikan) orang yang beriman kepada Allah, hari Akhir, malaikat-malaikat, kitab suci, dan nabi-nabi; memberikan harta yang dicintainya kepada kerabat, anak yatim, orang miskin, musafir, peminta-minta, dan (memerdekakan) hamba sahaya; melaksanakan salat; menunaikan zakat; menepati janji apabila berjanji; sabar dalam kemelaratan, penderitaan, dan pada masa peperangan. Mereka itulah orang-orang yang benar dan mereka itulah orang-orang yang bertakwa.\"\r\n<br>\r\n<br>\r\nYakni berupa keyakinan dan pengetahuan mengenai Allah SWT disertai sejumlah nama dan sifat yang menunjukkan Dzat ketuhanannya. Selanjutnya kepercayaan akan adanya sejumlah malaikat yang selalu tunduk atas tugas dan perintah tuhannya yaitu Allah dalam mengurusi kehidupan ciptaan-Nya.', '20230921161210.jpg', 'Akidah', '1', '2023-09-21', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `recent_login`
--

CREATE TABLE `recent_login` (
  `id_recent` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `waktu` time NOT NULL DEFAULT current_timestamp(),
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `recent_login`
--

INSERT INTO `recent_login` (`id_recent`, `username`, `waktu`, `tanggal`, `status`) VALUES
(1, 'admin', '19:03:33', '2023-09-26', 'Login'),
(2, 'admin', '19:09:20', '2023-09-26', 'Logout'),
(3, 'user', '19:09:27', '2023-09-26', 'Login'),
(4, 'user', '19:09:38', '2023-09-26', 'Logout'),
(5, 'admin', '19:09:42', '2023-09-26', 'Login'),
(6, 'admin', '20:01:55', '2023-09-26', 'Logout'),
(7, 'admin', '10:44:10', '2023-09-29', 'Login'),
(8, 'user', '13:11:05', '2023-09-29', 'Login'),
(9, 'user', '13:11:08', '2023-09-29', 'Logout'),
(10, 'admin', '13:37:39', '2023-09-29', 'Login'),
(11, 'admin', '13:53:26', '2023-09-29', 'Logout'),
(12, 'admin', '06:15:58', '2023-09-30', 'Login'),
(13, 'admin', '17:28:48', '2023-09-30', 'Login'),
(14, 'user', '13:29:52', '2023-10-01', 'Login'),
(15, 'admin', '13:34:55', '2023-10-03', 'Login'),
(16, 'admin', '14:22:44', '2023-10-03', 'Logout'),
(17, 'admin', '07:51:38', '2023-10-04', 'Login'),
(18, 'admin', '08:01:06', '2023-10-04', 'Logout'),
(19, 'user', '08:01:10', '2023-10-04', 'Login');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `isi_saran` text NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `isi_saran`, `tanggal`, `nama`, `email`) VALUES
(6, 'rdtdccgfc', '2023-10-04', 'deco', 'dec@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `recent_login` date NOT NULL,
  `level` enum('Admin','Kontributor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `image`, `recent_login`, `level`) VALUES
(1, 'admin', 'Bagas', 'ya', 'default.png', '2023-09-24', 'Admin'),
(5, 'user', 'Chirss', 'ya', 'default.png', '2023-09-24', 'Kontributor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `recent_login`
--
ALTER TABLE `recent_login`
  ADD PRIMARY KEY (`id_recent`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `recent_login`
--
ALTER TABLE `recent_login`
  MODIFY `id_recent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
