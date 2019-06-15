-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 24 Sep 2018 pada 18.54
-- Versi Server: 5.6.12-log
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `simpeg`
--
CREATE DATABASE IF NOT EXISTS `simpeg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `simpeg`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `cuti` (
  `id_cuti` int(50) NOT NULL AUTO_INCREMENT,
  `no_peg` varchar(20) NOT NULL,
  `tgl_cuti` date NOT NULL,
  `lama_cuti` varchar(30) NOT NULL,
  `jns_cuti` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cuti`),
  UNIQUE KEY `no_peg` (`no_peg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jab` int(20) NOT NULL AUTO_INCREMENT,
  `jab` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE IF NOT EXISTS `mutasi` (
  `id_mut` int(30) NOT NULL AUTO_INCREMENT,
  `no_peg` varchar(20) NOT NULL,
  `tgl_mutasi` date NOT NULL,
  `tm_mutasi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mut`),
  UNIQUE KEY `no_peg` (`no_peg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `no_peg` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `st_peg` varchar(50) NOT NULL,
  `gol` varchar(50) NOT NULL,
  `j_pend` varchar(50) NOT NULL,
  `thn_lulus` varchar(10) NOT NULL,
  `tgs_1` varchar(100) NOT NULL,
  `id_jab` int(100) NOT NULL,
  PRIMARY KEY (`no_peg`),
  UNIQUE KEY `id_jab` (`id_jab`),
  UNIQUE KEY `id_jab_2` (`id_jab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pensiun`
--

CREATE TABLE IF NOT EXISTS `pensiun` (
  `id_pen` int(30) NOT NULL AUTO_INCREMENT,
  `no_peg` varchar(20) NOT NULL,
  `jab_akhir` varchar(50) NOT NULL,
  `tgl_pensiun` date NOT NULL,
  `stl` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pen`),
  UNIQUE KEY `no_peg` (`no_peg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
