-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 07:52 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cka`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(50) NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `pim_cabang` varchar(100) NOT NULL,
  `alamat_cabang` text NOT NULL,
  `telepon_cabang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `cabang`, `pim_cabang`, `alamat_cabang`, `telepon_cabang`) VALUES
(1, 'Surabaya', 'Sutrisno', 'Jalan Margorejo Nomor 75 Surabaya', '(031)8438995'),
(2, 'Malang', 'Agus Mulyono', 'Jalan Teluk Etna IX Kav. 170 Arjosari Malang', '(0341)7038551'),
(3, 'Kediri', 'Abdullah', 'Jalan Raya Dusun Rembangkepuh RT 12 RW 01 Desa Rembangkepuh Kecamatan Ngadiluwih Kabupaten Kediri', '082143705020 - (0354)478327'),
(4, 'Mojokerto', 'H. Ismail Masduqi', 'Jalan Kamas Setyoadi Desa Kedung Maling Kecamatan Sooko Mojokerto', '(0321)5153775 - (0321)4149538'),
(5, 'Lamongan', 'Siswanto', 'Jalan Raya Jombang Nomor 88 Babat Lamongan', '085733888039'),
(6, 'Madiun', 'Sholichun Hamzah', 'Jalan Panorama Raya Nomor 2B Madiun', '(0351)468583'),
(7, 'Lumajang', 'Agus Mulyono', 'Jalan Apel Nomor 2 Perumahan Sukodono Permai Lumajang', '(0334)884126'),
(8, 'Banyuwangi', 'Mujiburrohman', 'Jalan Brawijaya 62A Banyuwangi', '(0333)410634 - 085331369790'),
(9, 'Pamekasan', 'Sukarji', 'Jalan Basar Nomor 93A RT 01 RW 04 Bugih Pamekasan', '085234306119'),
(10, 'Cilacap', 'H. Arif S.', 'Jalan Yos Sudarso 8 Kroya Cilacap', '(0282)5507793'),
(11, 'Yogyakarta', '', 'DK. Jaban RT 05 RW 34 Tridadi Sleman Yogyakarta', '(0274)7490904 - 087836652395'),
(12, 'Pemalang', 'Chotibul Umam', 'Jalan Raya Rowosari Nomor 04 RT 01 RW 01 Desa Rowosari Kecamatan Ululjami Pemalang', '(0285)7904475'),
(13, 'Surakarta', 'Sukardi', 'Jalan Keden 26 Gembongan Solo', '(0271)781979'),
(14, 'Ungaran', '', 'Jalan Wisnu Wardhana 1 Bergas Semarang', '081390387011 - 082136818911 - 0877311100111'),
(15, 'Kudus', 'Mujib Ridwan', 'Jalan Kampus UMK Nomor 355 RT 03 RW 04 Desa Dersalam Kecamatan Bae Kudus', '08883957799'),
(16, 'Blora', 'Bambang E.P.S', 'Jalan Gunung Lawu Nomor 100 Blora', '085712380257'),
(17, 'Cirebon', 'Slamet Urip R.', 'Jalan Syech Marzuki Blok Bandongan Desa Kaliwadas Kecamatan Sumber Cirebon', '(0231)321985'),
(18, 'Tasikmalaya', 'Solekhan', 'Jalan Cikanyere Nomor 19 Desa Sukamanah Kecamatan Cipedes Tasikmalaya', '(0265)2354074'),
(19, 'Purwakarta', 'Muzani', 'Jalan Taman Pahlawan Nomor 130 RT 16 RW 07 Desa Purwamekar Purwakarta', '(0264)201123'),
(20, 'Bandung', 'Sunaryo', 'Jalan Cihanjuang 190 Cibabat Cimahi Bandung', '(022)6654085'),
(21, 'Banten', 'Taufik Hidayat', 'KP. Dandeur RT 01 RW 06 Kelurahan Penancangan Kecamatan Cipocok Jaya Serang', '087774400801'),
(22, 'Bogor', 'Eko Wahyudi', 'Bogor', '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(50) NOT NULL,
  `kode_karyawan` varchar(100) NOT NULL,
  `id_cabang` int(50) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `tim_karyawan` varchar(100) NOT NULL,
  `sub_tim` varchar(50) NOT NULL,
  `alamat_karyawan` varchar(200) NOT NULL,
  `telepon_karyawan` varchar(100) DEFAULT NULL,
  `divisi` varchar(100) NOT NULL,
  `input_admin_username` varchar(100) NOT NULL,
  `input_admin_cabang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(50) NOT NULL,
  `id_karyawan` int(50) NOT NULL,
  `id_cabang` int(50) NOT NULL,
  `id_produk` int(50) NOT NULL,
  `demo` int(100) NOT NULL,
  `tunai_unit` int(100) NOT NULL,
  `angsuran_unit` int(100) NOT NULL,
  `tunai_rupiah` bigint(20) NOT NULL,
  `angsuran_rupiah` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `date_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(50) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(50) NOT NULL,
  `id_karyawan` int(50) NOT NULL,
  `id_cabang` int(50) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total_kuitansi_bawa` int(100) NOT NULL,
  `tanggal_setor` date NOT NULL,
  `kuitansi_jadi_uang` int(100) NOT NULL,
  `nominal_tagihan_rupiah` bigint(20) NOT NULL,
  `bbm` bigint(20) NOT NULL,
  `date_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'asepta', '$2y$08$eZkWbPJTMbYizb2Lehe5quZb7kZ7847bXVD/3azgVV7WK2RWJKTNm', NULL, 'aseptadaya@null.net', NULL, NULL, NULL, NULL, 1485851968, 1485851987, 1, NULL, NULL, 'Surabaya', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(8, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`),
  ADD UNIQUE KEY `cabang` (`cabang`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
