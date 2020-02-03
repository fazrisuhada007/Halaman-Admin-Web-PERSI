-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Feb 2020 pada 10.07
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(70) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `telp`, `email`, `alamat`, `status`, `photo`) VALUES
(1, 'Rahmat Rizki', 'Admin Persi', '21232f297a57a5a743894a0e4a801fc3', '0822-7222-2290', 'admin@gmail.com', 'Bukittinggi', 'Admin', 'face1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_rumah_sakit`
--

CREATE TABLE `anggota_rumah_sakit` (
  `id_rumah_sakit` int(11) NOT NULL,
  `nama_rumah_sakit` varchar(70) NOT NULL,
  `alamat_rumah_sakit` varchar(255) NOT NULL,
  `telp_rumah_sakit` varchar(20) NOT NULL,
  `photo_rumah_sakit` varchar(255) NOT NULL,
  `status_buka` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_rumah_sakit`
--

INSERT INTO `anggota_rumah_sakit` (`id_rumah_sakit`, `nama_rumah_sakit`, `alamat_rumah_sakit`, `telp_rumah_sakit`, `photo_rumah_sakit`, `status_buka`) VALUES
(5, 'Rumah Sakit Umum Griya Mahardhika ', 'Jl. Parangtritis, Km. 4,5, Gg. Wijaya Kusuma No.212, Druwo, Bangunharjo', '0877-9000', 'face1.jpg', '24 Jam'),
(29, 'Rumah Sakit Umum Veteran Patmasuri', 'Jl. Lapangan Krapyak, Panggungharjo, Sewon, Krapyak Kulon, Panggunghar', '0877-1234', 'face24.jpg', '24 Jam'),
(30, 'test', 'test', 'test', '8963047_2016080301352201914.jpg', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(70) NOT NULL,
  `isi` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `tanggal_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi`, `photo`, `tanggal_update`) VALUES
(22, 'Grab Rilis Layanan Kesehatan, Gandeng Good Doctor Technology ', '<p><strong>Jakarta</strong> - Setelah hadir dalam aplikasinya, Grab Indonesia mengumumkan secara resmi layanan kesehatan untuk masyarakat di Indonesia bernama <a href=\"https://www.detik.com/tag/grabhealth/\">GrabHealth</a>. Grab menggandeng Good Doctor Technology untuk menyediakan beberapa layanan kesehatan dalam aplikasinya.<br />\r\n<br />\r\nPresiden Direktur <a href=\"https://www.detik.com/tag/grab/\">Grab</a> Indonesia Ridzki Kramadibrata mengatakan, kehadiran GrabHealth ini seirama dengan budaya Grab yakni &#39;Grab For Good&#39;. Dengan kesamaan visi inilah maka keduanya berkolaborasi lewat teknologi, khususnya dalam hal akses kesehatan melalui platform digital.<br />\r\n<br />\r\n&quot;Secara tidak kebetulan, Grab memiliki misi yaitu Grab For Good, teknologi yang diluncurkan untuk hal baik yang positif kepada masyarakat. Itu adalah komitmen kita kepada masyarakat Indonesia bahkan kepada masyarakat di Asia Tenggara. Karena teknologi itu memang dibuat untuk memberikan hal yang baik, memberikan kemajuan kepada masyarakat. Hari ini kita buktikan bahwa sekali lagi Grab meluncurkan sesuatu yang membawa kebaikan untuk masyarakat,&quot; kata Ridzki dalam peluncuran GrabHealth di Museum Kebangkitan Nasional, Jakarta, Selasa (10/12/2019).</p>\r\n', 'grab.jpeg', '2019-12-27 08:34:09'),
(23, 'Konsumsi Gula Berlebih Kurangi Jumlah Bakteri Baik di Pencernaan', '<p><strong>JAKARTA</strong> - Di balik rasanya yang manis, konsumsi gula berlebih tidak hanya menyebabkan penyakit diabetes dan obesitas tapi juga dapat mengurangi jumlah bakteri baik dalam pencernaan. Sayangnya, hingga saat ini masih banyak masyarakat yang belum sadar akan pengaruh dari konsumsi gula berlebihan.<br />\r\n<br />\r\n&ldquo;Saat ini masih belum banyak orang yang sadar akan pengaruh gula yang berlebih kepada kesehatan pencernaan. Kita harus mengedukasi masyarakat terkait hal ini,&rdquo; ujar Dokter Spesialis Gizi Klinik, Marya Haryono melalui keterangan pers yang diterima SINDOnews.<br />\r\n<br />\r\nPenelitian dari Oregon State University di Amerika Serikat pada tahun 2013 menunjukkan, bakteri jahat di dalam usus akan berkembang biak dengan pesat apabila terus menerus diberi asupan gula. Kondisi ini akan mengancam bakteri baik di dalam usus sehingga menganggu kinerjanya menjaga kesehatan pencernaan.</p>\r\n', 'gambar2.jpg', '2019-12-13 10:35:21'),
(24, 'BPJS Kesehatan Telat Bayar Tagihan, RSUD di Jakarta Krisis Obat', '<p><strong>TEMPO.CO</strong>, <strong>Jakarta</strong> - Para direktur rumah sakit umum daerah (RUSD) di Jakarta mengeluhkan tagihan biaya pelayanan kesehatan yang tak kunjung dibayar oleh Badan Penyelenggara Jaminan Sosial atau <a href=\"https://bisnis.tempo.co/read/1123167/bpjs-kesehatan-tekan-defisit-keuangan-lewat-sistem-rujukan-online\">BPJS Kesehatan</a>. Dampaknya, seluruh rumah sakit umum terancam kehabisan stok obat untuk pasien.</p>\r\n\r\n<p>Pemerintah DKI Jakarta pun cemas. Menurut Sekretaris Daerah DKI Jakarta, Saefullah, sejak beberapa pekan terakhir sejumlah rumah sakit sudah tak bisa lagi belanja obat-obatan gara-gara BPJS Kesehatan kerap terlambat mencairkan klaim tagihan.</p>\r\n\r\n<p>&quot;Padahal DKI sangat lancar menyetor kewajiban ke BPJS,&quot; kata Saefullah seperti dikutip <em>Koran Tempo</em> terbitan Rabu 12 September 2018. &nbsp;&quot;Giliran rumah sakit <em>narik</em> ke BPJS, terjadi masalah.&quot;</p>\r\n\r\n<p>Setiap tahun DKI menggelontorkan Rp 1,5 triliun untuk membayar premi BPJS Kesehatan bagi pasien kelas III. Selain ingin masyarakat DKI terlayani akses kesehatan, laporan keuangan BPJS Kesehatan menunjukkan pendapatan Rp 74,25 triliun, tapi defisit Rp 9,75 triliun.</p>\r\n\r\n<p>Masalahnya, menurut Saefullah, BPJS Kesehatan justru kerap terlambat membayar klaim yang semestinya dibayarkan setiap tiga bulan.</p>\r\n\r\n<p>DKI akhirnya mengeluarkan dana talangan untuk dialirkan ke rumah-rumah sakit yang belum dibayar oleh BPJS Kesehatan. Dana itu merupakan hasil kredit dari Bank DKI, sehingga DKI harus menanggung bunga yang membengkak akibat keterlambatan pembayaran dari BPJS.</p>\r\n\r\n<p>Kepala Humas BPJS Kesehatan, M. Iqbal Anas Ma&#39;ruf, mengakui keterlambatan pembayaran klaim dari rumah sakit. &quot;Keterlambatan pembayaran memang ada,&rdquo; ucap dia, kemarin.</p>\r\n\r\n<p>Menurut dia, keterlambatan pembayaran tersebut akibat BPJS Kesehatan kekurangan dana. Uang premi yang dibayarkan masyarakat tak cukup untuk menutupi tagihan dari rumah sakit di seluruh Indonesia. BPJS Kesehatan pun meminta anggaran dari pemerintah pusat. Tapi pengajuan anggaran ke Kementerian Keuangan belum disetujui.</p>\r\n', 'gambar3.jpg', '2019-12-13 10:38:46'),
(25, 'RS Omni Dituduh Malpraktik ke Anaknya, Juliana Gugat Rp 20 Miliar', '<p>Berbekal bukti keterangan dari Rumah Sakit Australia, Juliana membuka babak baru kasus dugaan malpraktek dua anaknya setelah 10 tahun mandek.</p>\r\n\r\n<p>Juliana melayangkan gugatan secara perdata ke Pengadilan Negeri Tangerang dan saat ini sedang dalam proses persidangan. Dalam persidangan yang berlangsung hari ini, ketua majelis hakim Gatot Sarwadi menerima materi kesimpulan dari penggugat dan tergugat.</p>\r\n\r\n<p>&quot;Kesimpulan kami terima dan nanti akan kami putuskan dua pekan mendatang,&quot; kata Gatot sambil menutup sidang.</p>\r\n\r\n<p>Menanggapi gugatan ini, kuasa hukum RS Omni Alam Sutera Harry F.M Sitorus menilai tuntutan Juliana itu tidak relevan.</p>\r\n\r\n<p>&quot;Gak relevan, tuntutan atas dugaan malapraktek, sementara malprakteknya tidak bisa dibuktikan. Dasar permintaan kerugiannya apa karena dugaan itu tidak terbukti,&quot; kata Harry..</p>\r\n', 'gambar4.jpg', '2020-01-20 03:27:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `kode_fasilitas` varchar(70) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `kode_fasilitas`, `nama_fasilitas`) VALUES
(4, 'A01', 'Ambulance'),
(12, '', 'r'),
(13, '', 'v'),
(15, '', 'ddd'),
(16, '', 'deni@gmail.comdeni@gmail.comdeni@gmail.comdeni@gmail.comdeni@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `id_admin` varchar(255) NOT NULL,
  `id_kompartemen` int(11) NOT NULL,
  `judul_forum` varchar(255) NOT NULL,
  `photo_forum` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id_forum`, `id_admin`, `id_kompartemen`, `judul_forum`, `photo_forum`, `deskripsi`, `tanggal_update`) VALUES
(20, '1', 207, 'Pentingnya sistem informasi rumah sakit', 'big-hero-7-news-speculations-on-the-sequels-release2.jpg', '<p>Pentingnya sistem informasi rumah sakit</p>\r\n', '2020-01-27 03:53:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `id_rumah_sakit` int(11) NOT NULL,
  `id_kompartemen` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_forum`, `id_rumah_sakit`, `id_kompartemen`, `komentar`, `tanggal_update`) VALUES
(47, 20, 0, 207, 'bgaiamana langkah membangun sistem rumah sakit yang baik?', '2020-01-27 13:01:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompartemen`
--

CREATE TABLE `kompartemen` (
  `id_kompartemen` int(11) NOT NULL,
  `nama_kompartemen` text NOT NULL,
  `ketua` varchar(255) NOT NULL,
  `sekertaris` varchar(255) NOT NULL,
  `anggota` text NOT NULL,
  `id_forum` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kompartemen`
--

INSERT INTO `kompartemen` (`id_kompartemen`, `nama_kompartemen`, `ketua`, `sekertaris`, `anggota`, `id_forum`) VALUES
(207, 'Kompartemen mutu rumah sakit', '', '', '', ''),
(210, 'Kompartemen Pelayanan rumah sakit', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_medis`
--

CREATE TABLE `pelayanan_medis` (
  `id_pelayanan_medis` int(11) NOT NULL,
  `kode_pelayanan_medis` varchar(70) NOT NULL,
  `nama_pelayanan_medis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan_medis`
--

INSERT INTO `pelayanan_medis` (`id_pelayanan_medis`, `kode_pelayanan_medis`, `nama_pelayanan_medis`) VALUES
(1, 'M1', 'Klinik Bedah Plastik'),
(2, 'M2', 'Klinik Mata'),
(3, 'M3', 'Klinik THT'),
(4, 'M4', 'Klinik Kulit & Kelamin'),
(5, 'M5', 'Klinik Psikiatri'),
(6, 'M6', 'Klinik Syaraf'),
(7, 'M7', 'Klinik Paru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_penunjang`
--

CREATE TABLE `pelayanan_penunjang` (
  `id_pelayanan_penunjang` int(11) NOT NULL,
  `kode_pelayanan_penunjang` varchar(70) NOT NULL,
  `nama_pelayanan_penunjang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan_penunjang`
--

INSERT INTO `pelayanan_penunjang` (`id_pelayanan_penunjang`, `kode_pelayanan_penunjang`, `nama_pelayanan_penunjang`) VALUES
(2, 'P1', 'Radiologi'),
(3, 'P2', 'Radioterapi'),
(4, 'P3', 'Patologi Anatomi'),
(7, 'P4', 'Farmakologi'),
(8, 'P5', 'Rekam Medis'),
(9, 'P6', 'Farmasi'),
(10, 'P7', 'CSSD'),
(11, '', 'Gizi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatra Utara'),
(4, 'Sumatra Barat'),
(5, 'Riau'),
(6, 'Kepulauan Riau'),
(7, 'Jambi'),
(8, 'Bengkulu'),
(9, 'Sumatra Selatan'),
(10, 'Kepulauan Bangka Belitung'),
(11, 'Lampung'),
(12, 'Banten'),
(13, 'Jawa Barat'),
(14, 'DKI Jakarta'),
(15, 'Jawa Tengah'),
(16, 'DI Yogyakarta'),
(17, 'Jawa Timur'),
(18, 'Bali'),
(19, 'Nusa Tenggara Barat'),
(20, '	Nusa Tenggara Timur'),
(21, 'Kalimantan Utara'),
(22, 'Kalimantan Barat'),
(23, 'Kalimantan Tengah'),
(24, 'Kalimantan Selatan'),
(25, 'Kalimantan Timur'),
(26, 'Gorontalo'),
(27, 'Sulawesi Utara'),
(28, '	Sulawesi Barat'),
(29, '	Sulawesi Tengah'),
(30, 'Sulawesi Selatan'),
(31, 'Sulawesi Tenggara'),
(32, 'Maluku Utara'),
(33, 'Maluku'),
(34, 'Papua Barat'),
(35, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota_rs`
--

CREATE TABLE `tbl_anggota_rs` (
  `id_tbl` int(11) NOT NULL,
  `id_rumah_sakit` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `id_pelayanan_medis` int(11) NOT NULL,
  `id_pelayanan_penunjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_anggota_rs`
--

INSERT INTO `tbl_anggota_rs` (`id_tbl`, `id_rumah_sakit`, `id_fasilitas`, `id_pelayanan_medis`, `id_pelayanan_penunjang`) VALUES
(1, 1, 2, 1, 2),
(2, 1, 3, 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_rumah_sakit` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_lengkap` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `level` int(11) NOT NULL COMMENT '1:Admin, 2:User',
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_rumah_sakit`, `id_provinsi`, `nama_lengkap`, `email`, `password`, `telp`, `level`, `photo`) VALUES
(3, 5, 16, 'Ashabil', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0819-9345-9990', 1, 'face1.jpg'),
(38, 29, 16, 'Armanda Ary', 'armand@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0823-4782-2943', 2, 'face24.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota_rumah_sakit`
--
ALTER TABLE `anggota_rumah_sakit`
  ADD PRIMARY KEY (`id_rumah_sakit`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `kompartemen`
--
ALTER TABLE `kompartemen`
  ADD PRIMARY KEY (`id_kompartemen`);

--
-- Indexes for table `pelayanan_medis`
--
ALTER TABLE `pelayanan_medis`
  ADD PRIMARY KEY (`id_pelayanan_medis`);

--
-- Indexes for table `pelayanan_penunjang`
--
ALTER TABLE `pelayanan_penunjang`
  ADD PRIMARY KEY (`id_pelayanan_penunjang`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tbl_anggota_rs`
--
ALTER TABLE `tbl_anggota_rs`
  ADD PRIMARY KEY (`id_tbl`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `anggota_rumah_sakit`
--
ALTER TABLE `anggota_rumah_sakit`
  MODIFY `id_rumah_sakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `kompartemen`
--
ALTER TABLE `kompartemen`
  MODIFY `id_kompartemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
--
-- AUTO_INCREMENT for table `pelayanan_medis`
--
ALTER TABLE `pelayanan_medis`
  MODIFY `id_pelayanan_medis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pelayanan_penunjang`
--
ALTER TABLE `pelayanan_penunjang`
  MODIFY `id_pelayanan_penunjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_anggota_rs`
--
ALTER TABLE `tbl_anggota_rs`
  MODIFY `id_tbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
