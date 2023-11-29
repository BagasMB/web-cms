-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2023 pada 13.41
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
(2, 'Bahasa Indonesia', '20230930014903.jpg'),
(3, 'Agama', '20230930014909.jpg'),
(4, 'Bahasa Inggris', '20230930014916.jpg'),
(5, 'Bahasa Jawa', '20230930014925.jpg'),
(7, 'Matematika', '20231129033643.jpg');

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
(3, 'chi', '20230930133121.jpg', '2023-09-30'),
(4, 'rtyh', '20231025142236.jpg', '2023-10-25'),
(5, 'gyuh', '20231025142241.jpg', '2023-10-25'),
(6, 'tfg', '20231025142248.jpg', '2023-10-25'),
(7, '4ertfg', '20231025142254.jpg', '2023-10-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Agama'),
(4, 'Sejarah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(30) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `github` varchar(50) NOT NULL,
  `spotify` varchar(60) NOT NULL,
  `facebook` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `twitter`, `github`, `spotify`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'bgsmhrdka', 'Hello guys', 'https://www.instagram.com/bgsmhrdkabdhrto_/', '', 'https://github.com/BagasMB', 'https://open.spotify.com/user/314caoibdtbm24grsxxpyirz7xeu?s', '', 'bagasmahardikabudi2007@gmail.c', 'Padangan RT 01/RW 07, Jungke, Karanganyar', 'https://wa.me/6281235540603?te');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(1, 'Pegerakan Nasional', '<p>Periode pergerakan nasional di Indonesia dimulai sejak lahirnya Budi Utomo pada 1908 hingga keruntuhan pemerintahan kolonial Belanda. Dalam periode tersebut, perjalanan sejarah bangsa Indonesia diwarnai dengan upaya melepaskan diri dari belenggu penjajah untuk menjadi negara yang merdeka, berdaulat, adil, dan makmur.</p>', '20230918135340.jpg', 'Pegerakan-Nasional', '4', '2023-09-12', 'admin'),
(2, 'Budi Utomo', '<p style=\"text-align: justify;\">Didirikan pada 20 Mei 1908, Budi Utomo menjadi organisasi modem pertama yang memberikan inspirasi kepada kaum nasionalis lainnya untuk berjuang dengan basis organisasi modern. Oleh karena itu, tanggal kelahiran organisasi ini yaitu tanggal 20 Mei, digunakan untuk memperingati hari kebangkitan nasional.</p>\r\n<p style=\"text-align: justify;\">Organisasi ini dipelopori oleh Dr. Wahidin Soedirohoesodo (1857-1917), tamatan sekolah dokter pribumi School Tot Opleiding van Indische Artsen (STOVIA) di Jakarta. Saat mengunjungi almamaternya itu dan bertemu dengan pelajar pelajar STOVIA pada tahun 1907, ia melontarkan gagasan agar para mahasiswa segera mendirikan organisasi yang bertujuan memajukan derajat bangsa. Gagasannya mendapat tanggapan yang bersemangat dari para mahasiswa di tempat itu. Bersama dr. Sutomo dan para mahasiswa STOVIA seperti Goenawan Mangoenkoesoemo dan Soeraji, ia mendirikan Boedi Oetomo pada tanggal 20 Mei 1908.</p>\r\n<p style=\"text-align: justify;\"><img src=\"https://mmc.tirto.id/image/otf/1024x535/2020/05/19/header-boedi-oetomo-mozaik-nauval.jpg\" width=\"621\" height=\"324\"></p>\r\n<p style=\"text-align: justify;\">Tujuan BU adalah memajukan pengajaran dan kebudayaan dengan bidang: (1) pengajaran; (2) pertanian, peternakan, dan perdagangan; (3) teknik dan industri, dan (4) kebudayaan. Maka dilihat dari tujuannya, Organisasi ini bersifat nonpolitik dan kooperatif terhadap pemerintah kolonial Belanda.</p>\r\n<p style=\"text-align: justify;\">BU mengadakan kongres pertamanya di Yogyakarta pada tanggal 3-5 Oktober 1908. Selain mempertegas posisinya sebagai sebuah gerakan sosial-budaya dan bukan gerakan politik kongres juga memutuskan hal-hal lain sebagai berikut.</p>\r\n<p style=\"text-align: justify;\">(1) Ruang gerak terbatas pada daerah Jawa dan Madura</p>\r\n<p style=\"text-align: justify;\">(2) Memilih R.T. Tirtokusumo, mantan Bupati Karanganyar sebagai ketua.</p>\r\n<p style=\"text-align: justify;\">(3) Yogyakarta menjadi pusat organisasi</p>\r\n<p style=\"text-align: justify;\">Salah satu faktor yang ikut meredupkan pengaruh BU adalah berdirinya Sarekat Islam pada tahun 1912. Dalam anggaran dasarnya, St tidak berpolitik. Namun, dalam praktikya SI ikut bersuara lantang menentang praktik ketidakadilan serta penindasan yang dilakukan oleh pemerintah kolonial. Hal ini mengundang simpati yang luas dari masyarakat. Si semakin populer, dan pada saat yang sama BU mengalami kemunduran</p>', '20230918140044.jpg', 'Budi-Utomo', '4', '2023-09-13', 'admin'),
(8, 'Sarekat Islam', '<p style=\"line-height: 1.5; text-align: justify;\"><span style=\"font-size: 12pt;\">Sarekat Islam merupakan gerakan nasionalis, demokratis, dan ekonomis serta berasaskan Islam dengan haluan <strong>kooperatif</strong>.&nbsp;Organisasi didirikan oleh <strong>H. Samanhudi </strong>pada tahun 1911 dengan nama awal berdirinya <strong>Sarekat Dagang Islam</strong> Samanhudi adalah seorang pedagang batik dari Laweyan Solo.</span></p>\r\n<p style=\"line-height: 1.5; text-align: justify;\"><span style=\"font-size: 12pt;\">Organisasi SDI didasarkan pada dua hal, yakni (1) agama, yaitu agama Islam (2) ekonomi, yakni memperkuat kemampuan para pedagang Islam agar dapat bersaing dengan para pedagang asing seperti pedagang Tionghoa dan India.</span></p>\r\n<p style=\"line-height: 1.5; text-align: justify;\"><span style=\"font-size: 12pt;\">Atas usul HOS Cokroaminoto, pada tanggal 10 September 1912 kata <em>dagang </em>dalam SDI dihilangkan sehingga hanya menjadi <strong>Sarekat Islam </strong>saja. Hal ini dimaksudkan agar ruang gerak organisasi tidak terbatas hanya dalam bidang perdagangan saja, tetapi juga dalam bidang-bidang lainnya. Nama dan visi baru itu tercermin dalam Akte Notaris yang dibuat pada tanggal 10 September 1912. Dalam akta notaris tersebut disebutkan tujuan Si sebagai berikut.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li style=\"font-size: 12pt;\"><span style=\"font-size: 12pt;\">Memajukan perdagangan,</span></li>\r\n<li style=\"font-size: 12pt;\"><span style=\"font-size: 12pt;\">Membantu para anggotanya yang mengalami kesulitan dalam bidang usaha (permodalan),</span></li>\r\n<li style=\"font-size: 12pt;\"><span style=\"font-size: 12pt;\">Memajukan kepentingan rohani dan jasmani penduduk pribumi,</span></li>\r\n<li style=\"font-size: 12pt;\"><span style=\"font-size: 12pt;\">Memajukan kehidupan agama Islam</span></li>\r\n</ul>\r\n<p style=\"line-height: 1.5; text-align: justify;\"><span style=\"font-size: 12pt;\">Pada tahun 1913, organisasi ini melaksanakan kongres pertamanya di Surabaya. Dalam kongres tersebut diputuskan hal- hal sebagai berikut.</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li style=\"font-size: 12pt;\"><span style=\"font-size: 12pt;\">Si bukan merupakan partai politik.</span></li>\r\n<li style=\"font-size: 12pt;\"><span style=\"font-size: 12pt;\">SI tidak bermaksud melawan pemerintah Belanda.</span></li>\r\n<li style=\"font-size: 12pt;\"><span style=\"font-size: 12pt;\">HOS Cokroaminoto dipilih sebagai ketua Sl dan menetapkan Surabaya sebagai pusat organisasi.</span></li>\r\n</ol>\r\n<p style=\"line-height: 1.5; text-align: justify;\"><span style=\"font-size: 12pt;\">Keanggotaan SI terbuka untuk semua lapisan masyarakat yang beragama Islam. Di bawah <strong>H.O.S. Cokroaminoto,</strong> Si mengalami perkembangan pesat. Selain di Surabaya yang menjadi pusatnya, cabang-cabang lain juga didirikan di kota-kota lain seperti Sola Semarang, dan Cirebon. Arah perjuangannya pun diperjelas, yaitu memperkuat basis ekonomi rakyat agar kaum pribumi lebih mampu bersaing dan bebas dari ketergantungan ekonomi terhadap bangsa bangsa asing.</span></p>\r\n<p style=\"line-height: 1.5; text-align: justify;\"><span style=\"font-size: 12pt;\">Pada tahun 1915, <strong>Sentral Sarekat Islam</strong> (SSI) dibentuk dan berkedudukan di Surabaya. SSI adalah badan induk yang bertugas bengkoordinasikan serta memajukan organisasi Si daerah SS kedudukan seperti pengurus besar St Pemberitukan SSI tidak terlepas dari kenyataan bahwa organisasi Si daerah semakin banyak dan karena itu perlu ada sebuah badan induk.</span></p>\r\n<p style=\"line-height: 1.5; text-align: justify;\"><span style=\"font-size: 12pt;\">Pada tanggal 17-24 Juni 1916 diadakan <strong>kongres Si&nbsp;hasional </strong>pertama di Bandung, yang dihadiri oleh 80 Si lokal dengan anggota yang telah mencapai 360.000 orang anggota. Dalam kongres tersebut disepakati istilah \"nasional\". Artinya, Si menganggap perlunya semua suku bangsa di indonesia ini bersatu dan membentuk satu persatuan bangsa, yaitu bangsa Indonesia. Hasil kongres ini menunjukkan Si menjadi organisasi yang berhaluan politis kendati dalam anggaran dasarnya Si bukan partai politik. Karakteristik politisnya tampak dari sikapnya menentang secara terbuka praktik-praktik ketidakadilan akibat sistem kapitalisme serta penindasan terhadap rakyat kecil yang dilakukan oleh pemerintah kolonial. Hal inilah yang membuat jumlah anggota Si semakin banyak. Setelah pemerintah kolonial memperbolehkan berdirinya partai politik, SI berubah menjadi partai politik.</span></p>\r\n<p style=\"line-height: 1.5; text-align: justify;\"><span style=\"font-size: 12pt;\">Sikap kritis Sl terhadap praktik kapitalisme serta komitmennya memperjuangkan rakyat kecil menarik perhatian <em>Indische Social Democratische Vereeniging </em>(ISDV) yang berhaluan marxis-komunis. Organisasi pimpinan Sneevliet (Belanda) ini kemudian menyusup ke SI, di mana dua anggota Si yang militan dan berbakat berhasil direkrut, yaitu Semaun dan Darsono Kelak bergabung juga Tan Malaka dan Alimin, Awalnya, pimpinan Si tidak menaruh curiga karena menganggap garis dasar perjuangan Si dan ISDV sama.</span></p>\r\n<p style=\"line-height: 1.5; text-align: justify;\"><span style=\"font-size: 12pt;\">Dalam perkembangan selanjutnya, anggota ISDV di SI gencar melancarkan kritik terhadap Sl. Mereka mengkritik sikap SI yang kooperatif terhadap pemerintah kolonial Belanda serta keikutsertaan Si dalam kampanye <em>Indie weerbaar </em>(pertahanan Hindia). Maka, dengan hadirnya ISDV, muncul dua kubu dalam SI:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li style=\"text-align: justify; line-height: 1.5; font-size: 12pt;\"><span style=\"font-size: 12pt;\">Kubu nasionalis religius atau<strong> SI Putih</strong>, dengan asas perjuangan Islam di bawah pimpinan Cokroaminoto.</span></li>\r\n<li style=\"text-align: justify; line-height: 1.5; font-size: 12pt;\"><span style=\"font-size: 12pt;\">Kubu ekonomi-dogmatis yang dikenal dengan nama<strong> SI Merah</strong>, dengan haluan sosialis kiri (komunisme) di bawah pimpinan Semaun dan Darsono.</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Demi menegakkan disiplin organisasi, Semaun dan semua pengurus yang berhaluan kiri kemudian dikeluarkan dari keanggotaan SI. Mereka mendirikan Perserikatan Komunis Indonesia (PKI) pada tahun 1920, yang kemudian dan diubah lagi namanya menjadi Partai Komunis Indonesia pada tahun 1924.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Dalam Sarekat kongres Sl pada bulan Februari 1923 di Madiun, Islam mengganti namanya menjadi <strong>Partai Sarekat Islam </strong>(PSI). Pergantian nama dilakukan karena adanya anggapan bahwa ikatan dalam Si lemah. Perpecahan dalam PGKB (Persatuan Pergerakan Kaum Buruh) yang didirikan pada tahun 1919 dianggap mencerminkan hal tersebut. Selanjutnya, dalam kongresnya pada tahun 1926, PSI menerapkan politik <em>hijrah </em>atau bersikap <strong>nonkooperatif </strong>terhadap pemerintah kolonial, dengan alasan pemerintah kolonial mengabaikan hak-hak pribumi. Karena perubahan garis politik ini, Cokroaminoto menyatakan menolak ketika diangkat menjadi anggota <em>Volksraad </em>pada tahun 1927. PSI berganti nama lagi menjadi <strong>Partai Sarekat Islam Indonesia </strong>(PSII) pada&nbsp;tahun 1929.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Pada tahun 1930, PSII mengalami kemerosotan karena terpecah menjadi tiga partai: PSII Kartosuwiryo, PSII Abikusno, dan PSII. Aktivitas partai ini terhenti sejak pendudukan Jepang.</span></p>', '20230921151140.jpg', 'Sarekat-Islam', '4', '2023-09-22', 'admin'),
(9, 'Akidah', '<p style=\"text-align: justify;\">Aspek akidah bisa disebut sebagai keimanan atau kepercayaan. Akidah harus bersumber dari Al-Quran yang merupakan kalam Allah, baru kemudian hadits Rasulullah. Dalam keimanan tak boleh bercampur dengan ragu atau prasangka, untuk itu akidah hanya bertempat dan diakui oleh hati. Iman menempati posisi utama dalam ajaran Islam, lantaran merupakan perkara yang mendasari kehidupan umat Islam. Terdapat enam asas yang melandasinya, dan dikenal sebagai rukun iman. Keenamnya ini disebutkan dalam Surah Al-Baqarah ayat 177:</p>\r\n<p style=\"text-align: right;\">&nbsp;لَيْسَ الْبِرَّاَنْ تُوَلُّوْا وُجُوْهَكُمْ قِبَلَ الْمَشْرِقِ وَالْمَغْرِبِ وَلٰكِنَّ الْبِرَّ مَنْ اٰمَنَ بِاللّٰهِ وَالْيَوْمِ الْاٰخِرِ وَالْمَلٰۤىِٕكَةِ وَالْكِتٰبِ وَالنَّبِيّٖنَ ۚ وَاٰتَى الْمَالَ عَلٰى حُبِّهٖ ذَوِى الْقُرْبٰى وَالْيَتٰمٰى وَالْمَسٰكِيْنَ وَابْنَ السَّبِيْلِۙ وَالسَّاۤىِٕلِيْنَ وَفىِ الرِّقَابِۚ وَاَقَامَ الصَّلٰوةَ وَاٰتَى الزَّكٰوةَ ۚ وَالْمُوْفُوْنَ بِعَهْدِهِمْ اِذَا عَاهَدُوْا ۚ وَالصّٰبِرِيْنَ فِى الْبَأْسَاۤءِ وَالضَّرَّاۤءِ وَحِيْنَ الْبَأْسِۗ اُولٰۤىِٕكَ الَّذِيْنَ صَدَقُوْا ۗوَاُولٰۤىِٕكَ هُمُ الْمُتَّقُوْنَ</p>\r\n<p>&nbsp;</p>\r\n<p><em>&ldquo;Laisal-birra an tuwallū wujūhakum qibalal-masyriqi wal-maghribi wa lākinnal-birra man āmana billāhi wal-yaumil-ākhiri wal-malā&rsquo;ikati wal-kitābi wan-nabiyyīn. Wa ātal-māla &lsquo;alā ḫubbihī dzawil-qurbā wal-yatāmā wal-masākīna wabnas-sabīli was-sā&rsquo;ilīna wa fir-riqāb. Wa aqāmash-shalāta wa ātaz-zakāh. Wal-mūfūna bi&lsquo;ahdihim idzā &lsquo;āhadū, wash-shābirīna fil-ba&rsquo;sā&rsquo;i wadh-dharrā&rsquo;i wa ḫīnal-ba&rsquo;s. Ulā&rsquo;ikalladzīna shadaqū, wa ulā&rsquo;ika humul-muttaqūn.&rdquo;</em></p>\r\n<p style=\"text-align: justify;\">Artinya: \"Kebajikan itu bukanlah menghadapkan wajahmu ke arah timur dan barat, melainkan kebajikan itu ialah (kebajikan) orang yang beriman kepada Allah, hari Akhir, malaikat-malaikat, kitab suci, dan nabi-nabi; memberikan harta yang dicintainya kepada kerabat, anak yatim, orang miskin, musafir, peminta-minta, dan (memerdekakan) hamba sahaya; melaksanakan salat; menunaikan zakat; menepati janji apabila berjanji; sabar dalam kemelaratan, penderitaan, dan pada masa peperangan. Mereka itulah orang-orang yang benar dan mereka itulah orang-orang yang bertakwa.\"</p>\r\n<p style=\"text-align: justify;\">Yakni berupa keyakinan dan pengetahuan mengenai Allah SWT disertai sejumlah nama dan sifat yang menunjukkan Dzat ketuhanannya. Selanjutnya kepercayaan akan adanya sejumlah malaikat yang selalu tunduk atas tugas dan perintah tuhannya yaitu Allah dalam mengurusi kehidupan ciptaan-Nya.</p>', '20230921161210.jpg', 'Akidah', '1', '2023-09-21', 'admin'),
(11, 'Muhammadiyah', '<p>Muhammadiyah didirikan oleh K.H. Ahmad Dahlan di Yogyakarta pada tanggal 18 November 1912. Asas perjuangannya lalah Islam dan kebangsaan Indonesia, sifatnya nonpolitik dan kooperatif</p>\r\n<p>Muhammadiyah bergerak di bidang keagamaan, pendidikan dan sosial, menuju kepada tercapainya kebahagiaan lahir-batin Tujuan Muhammadiyah adalah sebagai berikut</p>\r\n<ol>\r\n<li>Memajukan pendidikan dan pengajaran berdasarkan agama Islam.</li>\r\n<li>Mengembangkan pengetahuan ilmu agama dan cara cara hidup menurut agama Islam</li>\r\n</ol>\r\n<p>Dalam rangka mencapai tujuan tersebut, usaha yang dilakukan oleh Muhammadiyah adalah sebagai berikut</p>\r\n<ol>\r\n<li>Mendirikan sekolah-sekolah yang berdasarkan agama Islam, dari TK sampai dengan Perguruan Tinggi</li>\r\n<li>Mendirikan poliklinik poliklinik, rumah sakit, rumah yatim, masjid, dan sebagainya.</li>\r\n<li>Menyelenggarakan kegiatan-kegiatan keagamaan.</li>\r\n</ol>\r\n<p>Pada masa kepemimpinan Ahmad Dahlan (1912-1923) pengaruh Muhammadiyah terbatas di karesidenan-karesidenan seperti Yogyakarta, Surakarta, Pekalongan, dan Pekajangan, daerah Pekalongan sekarang. Selain Yogya, cabang-cabang</p>\r\n<p>Muhammadiyah berdiri di kota-kota tersebut pada tahun 1922. Pada tahun 1925, Abdul Karim Amrullah (HAMKA) membawa</p>\r\n<p>Muhammadiyah ke Sumatera Barat dengan membuka cabang di Sungai Batang, Agam. Dalam waktu relatif singkat, arus gelombang Muhammadiyah menyebar ke seluruh Tanah Minang itu. Dari daerah ini, Muhammadiyah kemudian bergerak bergerak keseluruh Sumatera, Sulawesi, dan Kalimantan. Pada tahun 1938, Muhammadiyah telah tersebar ke seluruh wilayah Indonesia.</p>\r\n<p>Organisasi ini bersifat nonpolitik dan kooperatif. Sementara itu, dalam gerakan sosialnya, organisasi ini sangat mendukung perjuangan meraih kemerdekaan. Selain itu, perannya dalam menumbuhkan kesadaran bangsa tentang pentingnya kemajuan dalam pendidikan dan kemerdekaan juga sangat besar.</p>', '20231126051528.jpg', 'Muhammadiyah', '4', '2023-11-26', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `recent_login`
--

CREATE TABLE `recent_login` (
  `id_recent` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `waktu` time NOT NULL DEFAULT current_timestamp(),
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `recent_login`
--

INSERT INTO `recent_login` (`id_recent`, `username`, `waktu`, `tanggal`, `status`) VALUES
(1, 'admin', '07:18:00', '2023-11-21', 'Logout'),
(2, 'admin', '07:18:05', '2023-11-21', 'Login'),
(3, 'admin', '01:45:07', '2023-11-21', 'Logout'),
(4, 'admin', '04:23:37', '2023-11-22', 'Login'),
(5, 'admin', '05:27:34', '2023-11-22', 'Logout'),
(6, 'user', '01:27:45', '2023-11-22', 'Login'),
(7, 'admin', '11:25:49', '2023-11-22', 'Login'),
(8, 'admin', '03:44:57', '2023-11-25', 'Login'),
(9, 'admin', '12:18:39', '2023-11-25', 'Login'),
(10, 'admin', '03:43:00', '2023-11-26', 'Login'),
(11, 'admin', '06:18:21', '2023-11-26', 'Login'),
(12, 'admin', '06:18:33', '2023-11-26', 'Logout'),
(13, 'admin', '06:18:42', '2023-11-26', 'Login'),
(14, 'admin', '02:34:07', '2023-11-26', 'Login'),
(15, 'admin', '11:20:44', '2023-11-26', 'Login'),
(16, 'admin', '01:52:06', '2023-11-28', 'Login'),
(17, 'admin', '01:52:12', '2023-11-28', 'Logout'),
(18, 'user', '01:52:19', '2023-11-28', 'Login'),
(19, 'admin', '03:25:35', '2023-11-29', 'Login'),
(20, 'admin', '01:33:16', '2023-11-29', 'Login'),
(21, 'admin', '01:33:36', '2023-11-29', 'Logout');

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
(7, 'ygyg', '2023-11-15', 'budd', 'bgsmhrdika@gmail.com'),
(8, 'Keren. Tapi saya mau report bagian fav songs: semua lagu dapat diputar bersamaan, apakah itu bug? Kalau iya, tolong diperbaiki', '2023-11-26', 'azz', 'azz@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `level` enum('Admin','Kontributor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `email`, `image`, `level`) VALUES
(1, 'admin', 'Bagas', '1234', 'storybagas10@gmail.com', 'default.png', 'Admin'),
(5, 'user', 'Chirsty', 'ya', 'ffbagasuwoe@gmail.com', 'toy.jpeg', 'Kontributor'),
(6, 'aa', 'bagas', '123', 'bagasmahardikabudi2007@gmail.com', 'default.png', 'Kontributor');

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
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `recent_login`
--
ALTER TABLE `recent_login`
  MODIFY `id_recent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
