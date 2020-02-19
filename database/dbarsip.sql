-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jan 2020 pada 03.05
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbarsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmemoklr`
--

CREATE TABLE `tblmemoklr` (
  `nomemoklr` varchar(50) NOT NULL DEFAULT '',
  `tglmemoklr` varchar(100) NOT NULL DEFAULT '',
  `hal3` varchar(150) NOT NULL DEFAULT '',
  `tujuan2` varchar(75) NOT NULL DEFAULT '',
  `penerima3` varchar(30) NOT NULL DEFAULT '',
  `tglkirim2` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblmemoklr`
--

INSERT INTO `tblmemoklr` (`nomemoklr`, `tglmemoklr`, `hal3`, `tujuan2`, `penerima3`, `tglkirim2`) VALUES
('342', '5534', 'ghdfgafs', 'fgsdfa', 'sfgsdf', 'afasd'),
('1', '1212', '1klhjgfds', '1', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmemomsk`
--

CREATE TABLE `tblmemomsk` (
  `nomemomsk` varchar(50) NOT NULL DEFAULT '',
  `tglmemomsk` varchar(100) NOT NULL DEFAULT '',
  `hal2` varchar(150) NOT NULL DEFAULT '',
  `pgrm2` varchar(75) NOT NULL DEFAULT '',
  `penerima2` varchar(30) NOT NULL DEFAULT '',
  `tglterima2` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblmemomsk`
--

INSERT INTO `tblmemomsk` (`nomemomsk`, `tglmemomsk`, `hal2`, `pgrm2`, `penerima2`, `tglterima2`) VALUES
('31/BCB/2/B/2019', '07okt2019', 'Rapat LBBU', 'BCB', 'SAPa', '07okt2019'),
('51/SKH/2/B/2019', '05okt2019', 'Rapat Umum', 'SKH', 'SAP', '05okt2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblsrtklr`
--

CREATE TABLE `tblsrtklr` (
  `nosuratklr` varchar(50) NOT NULL DEFAULT '',
  `tglsuratklr` varchar(100) NOT NULL DEFAULT '',
  `hal2` varchar(150) NOT NULL DEFAULT '',
  `tujuan` varchar(75) NOT NULL DEFAULT '',
  `penerima2` varchar(70) NOT NULL DEFAULT '',
  `tglkirim` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblsrtklr`
--

INSERT INTO `tblsrtklr` (`nosuratklr`, `tglsuratklr`, `hal2`, `tujuan`, `penerima2`, `tglkirim`) VALUES
('28/SAP/2/M/2019', '11Sep2019', 'Penggantian Biaya Air Minum (SAP)', 'UMMm', 'Agus', '12Sep2019'),
('49/SAP/2/B/2018', '06des2018', 'Tutup Buku Tahun 2018', 'BCB', 'Ria', '06des2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblsrtmsk`
--

CREATE TABLE `tblsrtmsk` (
  `nosuratmsk` varchar(50) NOT NULL DEFAULT '',
  `tglsuratmsk` varchar(100) NOT NULL DEFAULT '',
  `hal` varchar(150) NOT NULL DEFAULT '',
  `pgrm` varchar(75) NOT NULL DEFAULT '',
  `penerima` varchar(300) NOT NULL DEFAULT '',
  `tglterima` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblsrtmsk`
--

INSERT INTO `tblsrtmsk` (`nosuratmsk`, `tglsuratmsk`, `hal`, `pgrm`, `penerima`, `tglterima`) VALUES
('2', '2', '2', '2', '2', '2'),
('003/TSI/2.2/CR/2019', '01Okt2019', 'Laporan LBU bulan September', 'SAP', 'Mira', '01Okt2019'),
('65342', '5636', '345', '345', '345', '345'),
('12321312', '13123', 'qwe', 'qwe', 'qwe', 'qwe'),
('123', '123123', 'qweqwe', 'qeqwe', 'qwewqe', '12323'),
('qww', 'qw', 'qw', 'qweqwe', 'Endar', '123q'),
('34', '34', '34', '34', '34', '34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblmemoklr`
--
ALTER TABLE `tblmemoklr`
  ADD PRIMARY KEY (`nomemoklr`);

--
-- Indexes for table `tblmemomsk`
--
ALTER TABLE `tblmemomsk`
  ADD PRIMARY KEY (`nomemomsk`);

--
-- Indexes for table `tblsrtklr`
--
ALTER TABLE `tblsrtklr`
  ADD PRIMARY KEY (`nosuratklr`);

--
-- Indexes for table `tblsrtmsk`
--
ALTER TABLE `tblsrtmsk`
  ADD PRIMARY KEY (`nosuratmsk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
