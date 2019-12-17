-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Des 2019 pada 06.36
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
-- Struktur dari tabel `anggota_rumah_sakit`
--

CREATE TABLE `anggota_rumah_sakit` (
  `id_rumah_sakit` int(11) NOT NULL,
  `kode_user` varchar(70) NOT NULL,
  `nama_rumah_sakit` varchar(70) NOT NULL,
  `alamat_rumah_sakit` varchar(70) NOT NULL,
  `telp_rumah_sakit` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status_buka` varchar(20) NOT NULL,
  `id_provinsi` varchar(70) NOT NULL,
  `id_fasilitas` varchar(70) NOT NULL,
  `id_pelayanan_medis` varchar(70) NOT NULL,
  `id_pelayanan_penunjang` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_rumah_sakit`
--

INSERT INTO `anggota_rumah_sakit` (`id_rumah_sakit`, `kode_user`, `nama_rumah_sakit`, `alamat_rumah_sakit`, `telp_rumah_sakit`, `photo`, `status_buka`, `id_provinsi`, `id_fasilitas`, `id_pelayanan_medis`, `id_pelayanan_penunjang`) VALUES
(1, 'U1', 'Permata Bunda', 'Jl.kebangsaan Timur, Jakarta', '087777', '', '24 Jam', '1', '2', '1', '2'),
(2, 'U2', 'Ahmad Yani', 'Bandung', '089999', '', '24 Jam', '2', '3', '2', '2'),
(3, 'U1', 'Yarsi', 'Simpang Empat', '0819203040', '', '24 Jam', '2', '4', '1', '2'),
(4, 'U2', 'Bintaro', 'Simpang Tiga', '0823456781', '', '24 Jam', '1', '2', '2', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `kode_berita` varchar(70) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `tanggal_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `kode_berita`, `judul_berita`, `isi`, `photo`, `tanggal_update`) VALUES
(2, 'B01', 'Tunggakan Pembayaran BPJS Kesehatan Kota Kendari Capai 46,7 Miliar', 'Jakarta - Kendari - Tunggakan pembayaran iuran BPJS Kesehatan untuk Kota Kendari mencapai Rp 46,7 miliar. Hal tersebut diungkapkan Humas BPJS Kesehatan Kota Kendari, Novriawan.\r\n\r\n\"Tunggakannya hingga saat ini mencapai 46,7 miliar dari jumlah peserta 73.415 jiwa,\" jelasnya, Selasa (12/11/2019).\r\n\r\nLebih lanjut dikatakannya bahwa tunggakan tersebut terjadi sejak Oktober 2019 lalu hingga saat ini. Meskipun demikian, pihak BPJS terus memberikan pelayanan bagi seluruh pengguna BPJS Kesehatan. Pihaknya juga tetap mengimbau kepada seluruh warga agar segera melunasi tunggakan pembayarannya.', '', '2019-11-19 17:13:01'),
(8, 'B02', 'Pelayanan Rumah Sakit', 'rizki@gmail.com', 'Jakarta - Kendari - Tunggakan pembayaran iuran BPJS Kesehatan untuk Kota Kendari mencapai Rp 46,7 miliar. Hal tersebut diungkapkan Humas BPJS Kesehatan Kota Kendari, Novriawan.\\r\\n\\r\\n\\\"Tunggakannya hingga saat ini mencapai 46,7 miliar dari jumlah peserta', '2019-11-25 11:13:01'),
(13, 'B03', '4 Komplikasi yang BIsa Terjadi Akibat Hipertensi ', 'Hipertensi kerap dikataan sebagai \"silent killer\". Hal ini terjadi karena biasanya penyakit ini jarang menunjukkan gejala pada penderitanya. Terlambat mengetahui masalah hipertensi pada tubuh Anda bisa berakibat fatal untuk keselamatan Anda. Berikut beberapa komplikasi yang timbul akibat penyakit hipertensi.', '1574864671.jpg', '2019-12-03 10:10:49'),
(14, 'forum1', '4 Komplikasi yang BIsa Terjadi Akibat Hipertensi ', 'Stroke akibat hipertensi\nTekanan darah yang tinggi dapat mengakibatkan pecahnya pembuluh darah di otak yang dapat menyebabkan serangan stroke. Biasanya kasus ini terjadi secara mendadak dan menyebabkan kerusakan otak dalam beberapa menit.', '15748646711.jpg', '2019-12-03 10:53:58'),
(15, 'B03', '4 Komplikasi yang BIsa Terjadi Akibat Hipertensi ', 'Hipertensi kerap dikataan sebagai \"silent killer\". Hal ini terjadi karena biasanya penyakit ini jarang menunjukkan gejala pada penderitanya. Terlambat mengetahui masalah hipertensi pada tubuh Anda bisa berakibat fatal untuk keselamatan Anda. Berikut beberapa komplikasi yang timbul akibat penyakit hipertensi.', '15748646714.jpg', '2019-12-03 11:00:59'),
(16, 'B03', '4 Komplikasi yang BIsa Terjadi Akibat Hipertensi ', 'Hipertensi kerap dikataan sebagai \"silent killer\". Hal ini terjadi karena biasanya penyakit ini jarang menunjukkan gejala pada penderitanya. Terlambat mengetahui masalah hipertensi pada tubuh Anda bisa berakibat fatal untuk keselamatan Anda. Berikut beberapa komplikasi yang timbul akibat penyakit hipertensi.', '157486467110.jpg', '2019-12-03 11:07:43');

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
(2, 'A02', 'Unit Gawat Darurat'),
(3, 'A03', 'IGD'),
(4, 'A01', 'IGD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `kompartemen` text NOT NULL,
  `judul_kompartemen` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id_forum`, `kompartemen`, `judul_kompartemen`, `photo`, `deskripsi`, `tanggal_update`) VALUES
(7, 'Kompartemen HTA(Healthy Technology Assessment)', 'Sistem Informasi Kesehatan Rumah Sakit', '157486467111.jpg', 'Pentingnya peran teknologi dalam rumah sakit', '2019-12-03 11:16:09'),
(8, 'coba1', 'coba1', 'coba1', 'coba1', '2019-12-05 15:55:18'),
(9, 'coba2', 'coba2', 'coba2', 'coba2', '2019-12-05 15:56:03'),
(10, 'coba3', 'coba3', 'coba3', 'coba3', '2019-12-05 15:56:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `kompartemen` text NOT NULL,
  `nama_rumah_sakit` text NOT NULL,
  `komentar` text NOT NULL,
  `tanggal_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_forum`, `kompartemen`, `nama_rumah_sakit`, `komentar`, `tanggal_update`) VALUES
(1, 7, 'Kompartemen Manajemen Mutu', 'Rumah Sakit Ibu dan Anak Aceh', 'bagaimana cara meningkatkan mutu pelayanan terhadap pasien?', '2019-12-04 11:22:21'),
(2, 7, 'Kompartemen Manajemen Mutu', 'Rumah Sakit Yarsi', 'Terapkan SOP sesuai Prosedur', '2019-12-04 06:47:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompartemen`
--

CREATE TABLE `kompartemen` (
  `id_kompartemen` int(11) NOT NULL,
  `kode_kompartemen` varchar(70) NOT NULL,
  `nama_kompartemen` varchar(255) NOT NULL,
  `ketua` varchar(255) NOT NULL,
  `sekertaris` varchar(255) NOT NULL,
  `anggota` text NOT NULL,
  `kode_forum` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kompartemen`
--

INSERT INTO `kompartemen` (`id_kompartemen`, `kode_kompartemen`, `nama_kompartemen`, `ketua`, `sekertaris`, `anggota`, `kode_forum`) VALUES
(1, 'K01', 'Pelayanan', 'Rahmat Rizki', 'Okta Fitri Ningsih', '1.Sisi Mailani\r\n2.Syafnita Aprilia\r\n3.Dela Azhar', 'forum1'),
(3, 'K02', 'BPJS', 'Ashabil', 'Feni', '1.Kasmaida\r\n2.Eti \r\n3.Dina', '');

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
(10, 'P7', 'CSSD');

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
(35, 'Papua'),
(36, 'q');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `kode_user` varchar(70) NOT NULL,
  `nama_lengkap` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kode_provinsi` varchar(70) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1:Admin, 2:Anggota',
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `kode_user`, `nama_lengkap`, `email`, `password`, `kode_provinsi`, `telp`, `level`, `photo`) VALUES
(1, 'U1', 'Deni', 'deni@gmail.com', 'deni', 'JKT', '0822-7222-2290', 2, ''),
(2, 'U2', 'Rahmat Rizki', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'JKT', '0823-47822-943', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_authentication`
--

CREATE TABLE `user_authentication` (
  `id_user` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expired_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota_rumah_sakit`
--
ALTER TABLE `anggota_rumah_sakit`
  MODIFY `id_rumah_sakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kompartemen`
--
ALTER TABLE `kompartemen`
  MODIFY `id_kompartemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelayanan_medis`
--
ALTER TABLE `pelayanan_medis`
  MODIFY `id_pelayanan_medis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pelayanan_penunjang`
--
ALTER TABLE `pelayanan_penunjang`
  MODIFY `id_pelayanan_penunjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
