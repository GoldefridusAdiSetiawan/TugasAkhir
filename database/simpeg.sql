-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Sep 2018 pada 17.00
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'amo', '3623e1fcdd2ab9f80f1aa1de5ec9ee62');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(50) NOT NULL,
  `no_peg` varchar(20) NOT NULL,
  `tgl_cuti` date NOT NULL,
  `lama_cuti` varchar(30) NOT NULL,
  `jns_cuti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `no_peg`, `tgl_cuti`, `lama_cuti`, `jns_cuti`) VALUES
(1, '195806101988031006', '2018-08-30', '2', 'Cuti Karena Alasan Penting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jab` int(20) NOT NULL,
  `jab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `jab`) VALUES
(5, 'Kepala Sekolah'),
(6, 'Wakasek Sarana Prasarana'),
(7, 'Wakasek Kurikulum'),
(8, 'Wakasek Humas'),
(9, 'Wakasek Kesiswaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mut` int(30) NOT NULL,
  `no_peg` varchar(20) NOT NULL,
  `tgl_mutasi` date NOT NULL,
  `tm_mutasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi`
--

INSERT INTO `mutasi` (`id_mut`, `no_peg`, `tgl_mutasi`, `tm_mutasi`) VALUES
(1, '196410221994121001', '2018-09-10', 'SMAN 5 Kupang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `no_peg` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `st_peg` varchar(50) NOT NULL,
  `gol` varchar(50) NOT NULL,
  `thn_gol` date NOT NULL,
  `j_pend` varchar(50) NOT NULL,
  `thn_lulus` varchar(10) NOT NULL,
  `tgs_1` varchar(100) NOT NULL,
  `id_jab` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`no_peg`, `nama`, `jk`, `tp_lahir`, `tgl_lahir`, `st_peg`, `gol`, `thn_gol`, `j_pend`, `thn_lulus`, `tgs_1`, `id_jab`) VALUES
('195806101988031006', 'Servatius Moa', 'Laki-laki', 'Sikka', '1958-06-10', 'PNS', 'IVA', '2015-06-10', 'S1', '1986', 'Bahasa Inggris', 6),
('196408181990031013', 'Agustinus Bire Logo', 'Laki-laki', 'Tanah Jawa', '1964-08-18', 'PNS', 'IVB', '2015-08-18', 'S2', '2007', 'BK', 5),
('196410221994121001', 'Refafi Kana', 'Laki-laki', 'Waingapu', '1964-10-21', 'PNS', 'IVA', '2015-10-21', 'S1', '1992', 'Bahasa Indonesia', 7),
('196708151992032011', 'Wasti Bolla', 'Perempuan', 'Keoen', '1967-08-15', 'PNS', 'IVA', '2015-08-15', 'S1', '1999', 'PAK', 8),
('196902271998011001', 'Zulkarnain', 'Laki-laki', 'Ngeru', '1969-02-27', 'PNS', 'IVA', '2015-02-27', 'S1', '1997', 'Bahasa Indonesia', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pensiun`
--

CREATE TABLE `pensiun` (
  `id_pen` int(30) NOT NULL,
  `no_peg` varchar(20) NOT NULL,
  `tgl_pensiun` date NOT NULL,
  `stl` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pensiun`
--

INSERT INTO `pensiun` (`id_pen`, `no_peg`, `tgl_pensiun`, `stl`) VALUES
(1, '195806101988031006', '2018-06-10', '20 Tahun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `waktu` date NOT NULL,
  `st_p` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `judul`, `isi`, `waktu`, `st_p`) VALUES
(2, 'Pensiun', 'Pegawai bernama Servatius Moa telah memasuki masa pensiun', '2018-09-30', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `no_peg` (`no_peg`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mut`),
  ADD UNIQUE KEY `no_peg` (`no_peg`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`no_peg`),
  ADD KEY `id_jab` (`id_jab`);

--
-- Indexes for table `pensiun`
--
ALTER TABLE `pensiun`
  ADD PRIMARY KEY (`id_pen`),
  ADD UNIQUE KEY `no_peg` (`no_peg`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jab` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mut` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pensiun`
--
ALTER TABLE `pensiun`
  MODIFY `id_pen` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`no_peg`) REFERENCES `pegawai` (`no_peg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  ADD CONSTRAINT `mutasi_ibfk_1` FOREIGN KEY (`no_peg`) REFERENCES `pegawai` (`no_peg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_jab`) REFERENCES `jabatan` (`id_jab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pensiun`
--
ALTER TABLE `pensiun`
  ADD CONSTRAINT `pensiun_ibfk_1` FOREIGN KEY (`no_peg`) REFERENCES `pegawai` (`no_peg`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
