-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2019 pada 03.52
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asprak`
--

CREATE TABLE `asprak` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `kodematkul` varchar(20) NOT NULL,
  `kodeslot` varchar(20) NOT NULL,
  `jumlahpertemuan` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `asprak`
--

INSERT INTO `asprak` (`id`, `nim`, `kodematkul`, `kodeslot`, `jumlahpertemuan`, `status`) VALUES
(1, '1600018245', 'MK001', 'SL-SN1', 6, 1),
(2, '1600018245', 'MK002', 'SL-SN2', 7, 1),
(3, '1600018245', 'MK003', 'SL-SL1', 6, 1),
(4, '1600018255', 'MK001', 'SL-SN1', 6, 1),
(5, '1600018245', 'MK001', 'SL-SN2', 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `kodematkul` varchar(20) NOT NULL,
  `namamatkul` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`kodematkul`, `namamatkul`, `semester`) VALUES
('MK001', 'MULMED', '6'),
('MK002', 'RWEB', '6'),
('MK003', 'APPL', '6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `kodeslot` varchar(20) NOT NULL,
  `kodematkul` varchar(20) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `idminggu` varchar(20) NOT NULL,
  `pretest` int(11) NOT NULL,
  `postest` int(11) NOT NULL,
  `responsi` int(11) NOT NULL,
  `semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertemuan`
--

CREATE TABLE `pertemuan` (
  `id` int(11) NOT NULL,
  `mingguke` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertemuan`
--

INSERT INTO `pertemuan` (`id`, `mingguke`) VALUES
(1, 'Minggu1'),
(2, 'Minggu2'),
(3, 'Minggu3'),
(4, 'Minggu4'),
(5, 'Minggu5'),
(6, 'Minggu6'),
(7, 'Minggu7'),
(8, 'Minggu8'),
(9, 'Minggu9'),
(10, 'Minggu10'),
(11, 'Minggu11'),
(12, 'Minggu12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slot`
--

CREATE TABLE `slot` (
  `id` int(11) NOT NULL,
  `kodeslot` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slot`
--

INSERT INTO `slot` (`id`, `kodeslot`, `hari`, `jam`) VALUES
(1, 'SL-SN1', 'senin', '07.30-09.00'),
(2, 'SL-SN2', 'senin', '09.00-11.30'),
(3, 'SL-SL1', 'selasa', '07:30-09:00'),
(4, 'SL-SL2', 'selasa', '09:00-11:30'),
(5, 'SL-RB1', 'rabu', '07.30-09.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `name` varchar(129) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nim`, `name`, `email`, `image`, `password`, `jeniskelamin`, `role_id`, `is_active`, `date_created`, `status`) VALUES
(1, 1600018244, 'nikhol', 'khol@gmail.com', 'mihawk.png', '$2y$10$C99D.4udprmpUcQk.DauD./6WpNXEYrlBQWuPTquFeR03FnFYwola', '', 1, 1, 1557942967, 1),
(2, 1600018255, 'tamps', 'tamps@gmail.com', 'male_default.jpg', '$2y$10$LdpV1Gg2uLEzBq3GUZ6vRe.23UIGuZH46YDEMTJjlgIlddnYh7Tmq', 'laki-laki', 2, 1, 1560955017, 1),
(3, 1600018245, 'ASPRAK', 'asprak@gmail.com', 'male_default.jpg', '$2y$10$jeXEMnvNb2XoGGPEIQO2tuNJR5fC22X7kJ.ah/j3DWxcXXnyvpJIe', 'laki-laki', 2, 1, 1560955057, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Asprak'),
(3, 'Praktikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Asisten'),
(3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Aktivasi user', 'admin/aktivasi', 'verified_user', 1),
(2, 1, 'User management', 'admin/userManagement', 'people', 1),
(3, 2, 'Input nilai', 'asprak/inputNilai', 'mode_edit', 1),
(4, 2, 'Buat inhal', 'asprak/buatInhal', 'event_note', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asprak`
--
ALTER TABLE `asprak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kodematkul`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `asprak`
--
ALTER TABLE `asprak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
