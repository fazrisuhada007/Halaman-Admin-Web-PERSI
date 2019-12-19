-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Des 2019 pada 10.12
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
-- Database: `persi_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_rumah_sakit`
--

CREATE TABLE `anggota_rumah_sakit` (
  `id_rumah_sakit` int(11) NOT NULL,
  `nama_rumah_sakit` varchar(70) NOT NULL,
  `alamat_rumah_sakit` varchar(70) NOT NULL,
  `telp_rumah_sakit` varchar(20) NOT NULL,
  `photo_rumah_sakit` varchar(255) NOT NULL,
  `status_buka` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_rumah_sakit`
--

INSERT INTO `anggota_rumah_sakit` (`id_rumah_sakit`, `nama_rumah_sakit`, `alamat_rumah_sakit`, `telp_rumah_sakit`, `photo_rumah_sakit`, `status_buka`) VALUES
(1, 'Rumah sakit Permata', 'Jln.Dipenegoro, no.22', '0877-1234', 'face21.jpg', '24 Jam'),
(5, 'Rumah Sakit Umum Daerah Siti Fatimah', 'Jln.Soedirman, no.25', '0877-9000', 'face1.jpg', '24 Jam'),
(29, 'Rumah Sakit Ibnu sina', 'Jln.Ahmad Yani, no.10', '0877-1234', 'face24.jpg', '24 Jam'),
(43, 'coba1', 'coba1', 'coba1', '8963047_201608030135220191.jpg', 'coba1'),
(44, 'coba1', 'coba1', 'coba1', 'big-hero-7-news-speculations-on-the-sequels-release.jpg', 'coba1'),
(45, 'coba1', 'coba12', 'coba1', '8963047_2016080301352201912.jpg', 'coba1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `tanggal_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi`, `photo`, `tanggal_update`) VALUES
(22, 'Grab Rilis Layanan Kesehatan, Gandeng Good Doctor Technology', '<p><strong>Jakarta</strong> - Setelah hadir dalam aplikasinya, Grab Indonesia mengumumkan secara resmi layanan kesehatan untuk masyarakat di Indonesia bernama <a href=\"https://www.detik.com/tag/grabhealth/\">GrabHealth</a>. Grab menggandeng Good Doctor Technology untuk menyediakan beberapa layanan kesehatan dalam aplikasinya.<br />\r\n<br />\r\nPresiden Direktur <a href=\"https://www.detik.com/tag/grab/\">Grab</a> Indonesia Ridzki Kramadibrata mengatakan, kehadiran GrabHealth ini seirama dengan budaya Grab yakni &#39;Grab For Good&#39;. Dengan kesamaan visi inilah maka keduanya berkolaborasi lewat teknologi, khususnya dalam hal akses kesehatan melalui platform digital.<br />\r\n<br />\r\n&quot;Secara tidak kebetulan, Grab memiliki misi yaitu Grab For Good, teknologi yang diluncurkan untuk hal baik yang positif kepada masyarakat. Itu adalah komitmen kita kepada masyarakat Indonesia bahkan kepada masyarakat di Asia Tenggara. Karena teknologi itu memang dibuat untuk memberikan hal yang baik, memberikan kemajuan kepada masyarakat. Hari ini kita buktikan bahwa sekali lagi Grab meluncurkan sesuatu yang membawa kebaikan untuk masyarakat,&quot; kata Ridzki dalam peluncuran GrabHealth di Museum Kebangkitan Nasional, Jakarta, Selasa (10/12/2019).</p>\r\n', 'grab.jpeg', '2019-12-13 10:33:36'),
(23, 'Konsumsi Gula Berlebih Kurangi Jumlah Bakteri Baik di Pencernaan', '<p><strong>JAKARTA</strong> - Di balik rasanya yang manis, konsumsi gula berlebih tidak hanya menyebabkan penyakit diabetes dan obesitas tapi juga dapat mengurangi jumlah bakteri baik dalam pencernaan. Sayangnya, hingga saat ini masih banyak masyarakat yang belum sadar akan pengaruh dari konsumsi gula berlebihan.<br />\r\n<br />\r\n&ldquo;Saat ini masih belum banyak orang yang sadar akan pengaruh gula yang berlebih kepada kesehatan pencernaan. Kita harus mengedukasi masyarakat terkait hal ini,&rdquo; ujar Dokter Spesialis Gizi Klinik, Marya Haryono melalui keterangan pers yang diterima SINDOnews.<br />\r\n<br />\r\nPenelitian dari Oregon State University di Amerika Serikat pada tahun 2013 menunjukkan, bakteri jahat di dalam usus akan berkembang biak dengan pesat apabila terus menerus diberi asupan gula. Kondisi ini akan mengancam bakteri baik di dalam usus sehingga menganggu kinerjanya menjaga kesehatan pencernaan.</p>\r\n', 'gambar2.jpg', '2019-12-13 10:35:21'),
(24, 'BPJS Kesehatan Telat Bayar Tagihan, RSUD di Jakarta Krisis Obat', '<p><strong>TEMPO.CO</strong>, <strong>Jakarta</strong> - Para direktur rumah sakit umum daerah (RUSD) di Jakarta mengeluhkan tagihan biaya pelayanan kesehatan yang tak kunjung dibayar oleh Badan Penyelenggara Jaminan Sosial atau <a href=\"https://bisnis.tempo.co/read/1123167/bpjs-kesehatan-tekan-defisit-keuangan-lewat-sistem-rujukan-online\">BPJS Kesehatan</a>. Dampaknya, seluruh rumah sakit umum terancam kehabisan stok obat untuk pasien.</p>\r\n\r\n<p>Pemerintah DKI Jakarta pun cemas. Menurut Sekretaris Daerah DKI Jakarta, Saefullah, sejak beberapa pekan terakhir sejumlah rumah sakit sudah tak bisa lagi belanja obat-obatan gara-gara BPJS Kesehatan kerap terlambat mencairkan klaim tagihan.</p>\r\n\r\n<p>&quot;Padahal DKI sangat lancar menyetor kewajiban ke BPJS,&quot; kata Saefullah seperti dikutip <em>Koran Tempo</em> terbitan Rabu 12 September 2018. &nbsp;&quot;Giliran rumah sakit <em>narik</em> ke BPJS, terjadi masalah.&quot;</p>\r\n\r\n<p>Setiap tahun DKI menggelontorkan Rp 1,5 triliun untuk membayar premi BPJS Kesehatan bagi pasien kelas III. Selain ingin masyarakat DKI terlayani akses kesehatan, laporan keuangan BPJS Kesehatan menunjukkan pendapatan Rp 74,25 triliun, tapi defisit Rp 9,75 triliun.</p>\r\n\r\n<p>Masalahnya, menurut Saefullah, BPJS Kesehatan justru kerap terlambat membayar klaim yang semestinya dibayarkan setiap tiga bulan.</p>\r\n\r\n<p>DKI akhirnya mengeluarkan dana talangan untuk dialirkan ke rumah-rumah sakit yang belum dibayar oleh BPJS Kesehatan. Dana itu merupakan hasil kredit dari Bank DKI, sehingga DKI harus menanggung bunga yang membengkak akibat keterlambatan pembayaran dari BPJS.</p>\r\n\r\n<p>Kepala Humas BPJS Kesehatan, M. Iqbal Anas Ma&#39;ruf, mengakui keterlambatan pembayaran klaim dari rumah sakit. &quot;Keterlambatan pembayaran memang ada,&rdquo; ucap dia, kemarin.</p>\r\n\r\n<p>Menurut dia, keterlambatan pembayaran tersebut akibat BPJS Kesehatan kekurangan dana. Uang premi yang dibayarkan masyarakat tak cukup untuk menutupi tagihan dari rumah sakit di seluruh Indonesia. BPJS Kesehatan pun meminta anggaran dari pemerintah pusat. Tapi pengajuan anggaran ke Kementerian Keuangan belum disetujui.</p>\r\n', 'gambar3.jpg', '2019-12-13 10:38:46'),
(25, 'RS Omni Dituduh Malpraktik ke Anaknya, Juliana Gugat Rp 20 Miliar', '<p>Berbekal bukti keterangan dari Rumah Sakit Australia, Juliana membuka babak baru kasus dugaan malpraktek dua anaknya setelah 10 tahun mandek.</p>\r\n\r\n<p>Juliana melayangkan gugatan secara perdata ke Pengadilan Negeri Tangerang dan saat ini sedang dalam proses persidangan. Dalam persidangan yang berlangsung hari ini, ketua majelis hakim Gatot Sarwadi menerima materi kesimpulan dari penggugat dan tergugat.</p>\r\n\r\n<p>&quot;Kesimpulan kami terima dan nanti akan kami putuskan dua pekan mendatang,&quot; kata Gatot sambil menutup sidang.</p>\r\n\r\n<p>Menanggapi gugatan ini, kuasa hukum RS Omni Alam Sutera Harry F.M Sitorus menilai tuntutan Juliana itu tidak relevan.</p>\r\n\r\n<p>&quot;Gak relevan, tuntutan atas dugaan malapraktek, sementara malprakteknya tidak bisa dibuktikan. Dasar permintaan kerugiannya apa karena dugaan itu tidak terbukti,&quot; kata Harry.</p>\r\n', 'gambar4.jpg', '2019-12-13 10:41:54'),
(26, 'Raih Penghargaan Dunia, Ini Pelayanan Unggulan RSUD dr Iskak Tulungagung', '<p><strong>Tulungagung</strong> - Rumah Sakit Umum Daerah (RSUD) dr Iskak Tulungagung berhasil menorehkan prestasi di tingkat internasional sebagai rumah sakit terbaik versi International Hospital Federation (IHF), lantas seperti apa layanan unggulannya ?<br />\r\n<br />\r\nRumah sakit tipe B ini memiliki berbagai layanan unggulan, sebagian diantaranya berbasis teknologi informasi, diantaranya Si Poetri (sistem pendaftaran online tanpa antre), Si Tole (sistem pendaftaran tutol dewe), serta TEMS (Tulungagung Emergency Medial Service).<br />\r\n<br />\r\nProgram Si Poetri berbasis Android, sehingga para pasien bisa melakukan registrasi di rumah tanpa harus antre langsung di rumah sakit. Dengan program itu, pasien juga mendapat kepastian estimasi jam layanan yang akan diperoleh.</p>\r\n', 'gambar5.jpeg', '2019-12-13 10:43:10'),
(27, 'RSUD dr Iskak Tulungagung Jadi RS Terbaik di Dunia Versi IHF, Khofifah: Selamat ', '<p><strong>Tulungagung</strong> - RSUD dr Iskak, Tulungagung, dinobatkan sebagai rumah sakit terbaik di dunia versi International Hospital Federation (IHF). Penobatan ini dalam bidang penyelenggaraan layanan publik atau <em>corporate social responsibility</em>.<br />\r\n<br />\r\nPenghargaan Gold Award ini diumumkan dalam forum International Hospital Federation Congress and Award ke-43. Forum ini diselenggarakan di Muscat, Oman.<br />\r\n<br />\r\nGubernur Khofifah Indar Parawansa pun menyampaikan ucapan selamat. Khofifah mengaku bersyukur dan bangga karena salah satu rumah sakit di Jatim bisa mewakili Indonesia hingga meraih prestasi di level internasional.<br />\r\n&nbsp;</p>\r\n', 'gambar6.jpeg', '2019-12-13 10:44:03'),
(28, 'Rumah Sakit Daerah yang Mendapatkan Penghargaan Internasional ', '<p>Sampai tadi pagi menyaksikan langsung di Metro TV, perwakilan dari salah satu Rumah Sakit Umum Daerah (RSUD) naik ke Podium untuk menerima penghargaan. Mata saya yang masih dalam keadaan terkantuk-kantuk jadi mendadak terbuka lebar. What? RSUD menerima penghargaan Internasional.</p>\r\n\r\n<p>Stigma yang ada dikepala saya ketika bicara mengenai RSUD adalah pelayanan yang tidak maksimal, suster yang tidak bersahabat apalagi kalau kalian datang dengan status pasien BPJS. Bahkan sempat mengalami sendiri bagaimana kelas untuk pasien BPJS habis, tidak tersedia. Padahal secara kasat mata yang terlihat masih ada tempat-tempat tidur kosong yang tidak pernah dijelaskan peruntukannya dan mengaoa dibiarkan kosong.</p>\r\n', 'gambar7.jpg', '2019-12-13 10:45:34'),
(29, 'Thanksigiving Kate Middleton Belajar Tentang Anak di Rumah Sakit', '<p><strong>TEMPO.CO, Jakarta -&nbsp;</strong>Thanksgiving adalah hari libur Amerika, semua tentang bersyukur dan memberikan kembali kepada komunitas Anda. Tahun ini, satu figur mendunia membawa semangat Thanksgiving. Dia adalah <strong><a href=\"https://www.tempo.co/tag/kate-middleton\">Kate Middleton</a></strong> yang diam-diam bekerja di unit bersalin selama Thanksgiving. Anggota kerajaan Inggris ini membantu para i bidan, dokter, dan profesional medis lainnya di rumah sakit besar London selama dua hari untuk belajar tentang perkembangan anak usia dini.</p>\r\n\r\n<p>Court Circular, daftar kegiatan harian keluarga kerajaan, melaporkan pada hari Kamis, 28 November 2019 bahwa Duchess of Cambridge, Joint Patron, yayasan Kerajaan Duke dan Duchess of Cambridge, hari ini menyelesaikan misi dua hari dengan unit bersalin di Rumah Sakit, Kingston di London, Inggris.</p>\r\n\r\n<p>Melansir laman<em> Elite Daily</em>, ini bukan pertama kalinya ibu tiga anak ini berfokus pada kesehatan anak usia dini. Tahun lalu, ia membentuk kelompok pengarah untuk menasihatinya tentang kesejahteraan anak-anak dan kebutuhan pengasuh mereka.</p>\r\n', 'gambar8.jpg', '2019-12-13 10:48:26'),
(30, 'Pemerintah Kucurkan Rp 9,13 T ke BPJS Kesehatan Jumat Pekan Ini ', '<p><strong>TEMPO.CO</strong>, <strong>Jakarta</strong> - Direktur Utama&nbsp;Badan Penyelenggara Jaminan Sosial atau <a href=\"https://bisnis.tempo.co/read/1273353/peserta-turun-kelas-karena-iuran-bpjs-kesehatan-itu-hak-mereka\">BPJS Kesehatan</a> Fachmi&nbsp;Idris&nbsp;menyatakan pemerintah akan&nbsp;mengucurkan dana Rp 9,13 triliun ke lembaga penyelenggara Jaminan&nbsp;Kesehatan&nbsp;Nasional (JKN) tersebut&nbsp;Jumat pekan ini.</p>\r\n\r\n<p>Fachmi&nbsp;menyatakan dana tersebut&nbsp;merupakan selisih kenaikan iuran peserta BPJS Kesehatan yang ditanggung oleh pemerintah. Hal ini sesuai&nbsp;dengan&nbsp;Peraturan Presiden (Perpres) Nomor 75 Tahun 2019 tentang Perubahan atas Perpres Nomor 82 Tahun 2018 tentang Jaminan Kesehatan.</p>\r\n\r\n<p>Pembayaran selisih kenaikan iuran itu, kata Fachmi, akan dilakukan secara bertahap yakni pada pekan ini dan pekan depan. Total dana yang akan dibayarkan pemerintah tersebut menurutnya berkisar Rp 13&ndash;14 triliun.</p>\r\n\r\n<p>Dia menjelaskan bahwa BPJS Kesehatan akan menggunakan dana tersebut untuk membayar klaim jatuh tempo. Berdasarkan data BPJS Kesehatan, klaim jatuh tempo per 31 Oktober 2019 tercatat senilai Rp 21,16 triliun.</p>\r\n', 'gambar9.jpg', '2019-12-13 10:50:07'),
(31, 'Iuran BPJS Naik, Pemda DIY: RS Jangan Tolak Pasien Lagi', '<p>&quot;Kenaikan iuran BPJS Kesehatan semestinya dirasionalisasikan dalam bentuk jaminan perbaikan fasilitas yang selama ini menjadi persoalan di masyarakat,&rdquo;&nbsp;ujar Wakil Gubernur DIY&nbsp;Paku Alam X saat menerima kunjungan kerja Komisi XI DPR RI ke Pemda DIY pada Jumat 15 November 2019.</p>\r\n\r\n<p>Paku Alam menambahkan,&nbsp;adanya kenaikan premi BPJS Kesehatan, dinilai juga akan memberatkan beban pada APBD.&nbsp;Beban tambahan ini khsuusnya&nbsp;untuk pembayaran peserta pekerja penerima upah, mulai dari ASN, TNI, Polri, pegawai BUMN, dan karyawan swasta, sebesar lima persen dari upah perbulan.</p>\r\n\r\n<p>&ldquo;Namun kebijakan kenaikan premi BPJS Kesehatan ini diperlukan untuk menutup defisit anggaran. Besaran iuran saat ini tidak mampu untuk menutupi biaya layanan kesehatan para peserta BPJS,&nbsp;sehingga dapat berisiko defisit dana jaminan sosial yang semakin membesar,&rdquo; ujarnya.</p>\r\n\r\n<p>Paku Alam menambahkan, kondisi dana jaminan sosial yang semakin defisit dikhawatirkan dapat memberikan dampak terganggunya layanan kesehatan pemerintah terhadap masyarakat.&nbsp;</p>\r\n\r\n<p>Sementara itu, aturan kenaikan premi BPJS ini sudah tertuang pada Peraturan Presiden Nomor 75 Tahun 2019 tentang perubahan atas Peraturan Presiden Nomor 82 Tahun 2018 tentang Jaminan Kesehatan,&nbsp;dan akan diberlakukan pada 1 Januari 2020.</p>\r\n\r\n<p>Selain mendesak kenaikan iuran BPJS Kesehatan dirasionalisasikan dalam bentuk jaminan perbaikan fasilitas, Paku Alam meminta dengan kenaikan iuran itu, BPJS harus bisa memastikan tidak ada lagi penolakan pasien yang dilakukan oleh rumah sakit dengan alasan kamar penuh.&nbsp;&quot;Masyarakat juga perlu mendapatkan jaminan bahwa tidak akan lagi menjumpai ketiadaan obat ketika berobat ke rumah sakit dengan menggunakan fasilitas BPJS Kesehatan,&quot; ujarnya.</p>\r\n\r\n<p>Adapun Ketua Rombongan Kunjungan Kerja Spesifik Komisi IX DPR RI,&nbsp;Emanuel Melkiades Laka Lena&nbsp;mengatakan, tujuan utama kunjungan kerja spesifik Komisi IX DPR RI ini untuk mengetahui secara langsung dampak dari kenaikan iuran BPJS Kesehatan di DIY.</p>\r\n', 'gambar10.jpg', '2019-12-13 10:54:02'),
(32, 'BPJS: Tagihan Klaim Rumah Sakit yang Belum Terbayar Rp 19 T ', '<p>&quot;Masih ada sekitar Rp 19 triliun tagihan klaim rumah sakit yang sudah jatuh tempo dan belum bisa dibayarkan karena masih menunggu kebijakan Kementerian Keuangan,&quot; ujar Direktur Perencanaan, Pengembangan dan Manajemen Risiko BPJS Kesehatan, Mundiharno,&nbsp;Kamis 24 Oktober 2019.</p>\r\n\r\n<p>Hal tersebut disampaikan Mundhiarno di sela-sela Bedah Buku&nbsp;Putih Komisi IX DPR RI Rekomendasi Penyesuaian Iuran Sebagai Perbaikan Sistemik Program JKN-KIS di Universitas Gadjah Mada Yogyakarta.&nbsp;&nbsp;</p>\r\n\r\n<p>Mudiharno menuturkan Kementerian Keuangan rencananya akan memberikan tambahan dana untuk menyelesaikan pembayaran klaim rumah sakit yang sudah jatuh tempo itu. Dengan catatan sudah ada kebijakan penyesuaian pembayaran iuran.&nbsp;&quot;Penyesuaian pembayaran iuran hanya berlaku dulu untuk peserta PBI (Penerima Bantuan Iuran),&quot; ujarnya.</p>\r\n', 'gambar11.jpg', '2019-12-13 10:56:31');

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
(3, 'A03', 'Instansi Gawat Darurat'),
(4, 'A01', 'Ambulance'),
(6, 'f', 'Medical Check Up');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `id_rumah_sakit` int(11) NOT NULL,
  `id_kompartemen` int(11) NOT NULL,
  `judul_forum` varchar(255) NOT NULL,
  `photo_forum` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id_forum`, `id_rumah_sakit`, `id_kompartemen`, `judul_forum`, `photo_forum`, `deskripsi`, `tanggal_update`) VALUES
(18, 5, 5, 'Peningkatan pelayanan terhadap mutu rumah sakit', 'Hello_Kitty13.jpg', '<p>Pada zaman sekarang ini penting bagi setiap rumah sakit untuk meningkatkan mutu dari setiap pelayanannya.</p>\r\n', '2019-12-19 04:10:06');

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
  `nama_kompartemen` varchar(255) NOT NULL,
  `ketua` varchar(255) NOT NULL,
  `sekertaris` varchar(255) NOT NULL,
  `anggota` text NOT NULL,
  `id_forum` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kompartemen`
--

INSERT INTO `kompartemen` (`id_kompartemen`, `nama_kompartemen`, `ketua`, `sekertaris`, `anggota`, `id_forum`) VALUES
(4, 'Kompartemen Manajemen Keperawatan', '', '', '', ''),
(5, 'Kompartemen  Manajemen Mutu', '', '', '', ''),
(6, 'Kompartemen Hukum,Advokasi, dan Mediasi', '', '', '', ''),
(7, 'Kompartemen Humas dan Pemasaran', '', '', '', ''),
(8, 'Kompartemen Manajemen Farmasi', '', '', '', '');

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
-- Struktur dari tabel `tbl_anggota_rs`
--

CREATE TABLE `tbl_anggota_rs` (
  `id_tbl` int(11) NOT NULL,
  `id_anggota_rumah_sakit` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `id_pelayanan_medis` int(11) NOT NULL,
  `id_pelayanan_penunjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_anggota_rs`
--

INSERT INTO `tbl_anggota_rs` (`id_tbl`, `id_anggota_rumah_sakit`, `id_fasilitas`, `id_pelayanan_medis`, `id_pelayanan_penunjang`) VALUES
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
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_rumah_sakit`, `id_provinsi`, `nama_lengkap`, `email`, `password`, `telp`, `level`, `photo`) VALUES
(1, 1, 1, 'Deni', 'deni@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0822-7222-9900', 2, 'face21.jpg'),
(3, 5, 5, 'Rahmat Rizki', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0819-9345-9990', 1, 'face1.jpg'),
(38, 29, 4, 'Armanda Ary Pramana', 'armand@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0823-4782-2943', 2, 'face24.jpg'),
(49, 42, 14, 'coba1', 'coba1@gmail.com', 'bf0c95ff56e3b2598456cd455a8684c1', 'coba1', 2, '8963047_2016080301352201913.jpg'),
(50, 43, 12, 'coba1', 'coba1@gmail.com', 'bf0c95ff56e3b2598456cd455a8684c1', 'coba1', 2, '8963047_201608030135220191.jpg'),
(51, 44, 14, 'coba1', 'coba1@gmail.com', 'bf0c95ff56e3b2598456cd455a8684c1', 'coba1', 2, 'big-hero-7-news-speculations-on-the-sequels-release.jpg'),
(52, 45, 12, 'coba1', 'coba1@gmail.com', 'bf0c95ff56e3b2598456cd455a8684c1', 'coba1', 2, '8963047_2016080301352201912.jpg');

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
-- AUTO_INCREMENT for table `anggota_rumah_sakit`
--
ALTER TABLE `anggota_rumah_sakit`
  MODIFY `id_rumah_sakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kompartemen`
--
ALTER TABLE `kompartemen`
  MODIFY `id_kompartemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pelayanan_medis`
--
ALTER TABLE `pelayanan_medis`
  MODIFY `id_pelayanan_medis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pelayanan_penunjang`
--
ALTER TABLE `pelayanan_penunjang`
  MODIFY `id_pelayanan_penunjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_anggota_rs`
--
ALTER TABLE `tbl_anggota_rs`
  MODIFY `id_tbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
