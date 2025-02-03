-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2025 at 07:14 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gicomal`
--

-- --------------------------------------------------------

--
-- Table structure for table `boolean`
--

CREATE TABLE `boolean` (
  `id` int NOT NULL,
  `tanggal` timestamp NOT NULL,
  `bay` char(15) NOT NULL,
  `f87lfail` char(10) NOT NULL,
  `f87lalarm` char(10) NOT NULL,
  `f50fail` char(10) NOT NULL,
  `f50alarm` char(10) NOT NULL,
  `mcbac` char(10) NOT NULL,
  `auxdcsupply` char(10) NOT NULL,
  `q21q22close` char(10) NOT NULL,
  `cbsringchargefail` char(10) NOT NULL,
  `cbmotormcbtrip` char(10) NOT NULL,
  `springfailR` char(10) NOT NULL,
  `springfailS` char(10) NOT NULL,
  `springfailT` char(10) NOT NULL,
  `sf6block` char(10) NOT NULL,
  `tcs2block` char(10) NOT NULL,
  `sf6alarm` char(10) NOT NULL,
  `cbalarmac` char(10) NOT NULL,
  `poledis` char(10) NOT NULL,
  `q21motor` char(10) NOT NULL,
  `q21control` char(10) NOT NULL,
  `q22motor` char(10) NOT NULL,
  `q22control` char(10) NOT NULL,
  `q28motor` char(10) NOT NULL,
  `q28control` char(10) NOT NULL,
  `tcs1r` char(10) NOT NULL,
  `tcs1s` char(10) NOT NULL,
  `tcs1t` char(10) NOT NULL,
  `tcs2r` char(10) NOT NULL,
  `tcs2s` char(10) NOT NULL,
  `tcs2t` char(10) NOT NULL,
  `motormcb` char(10) NOT NULL,
  `vtmcb` char(10) NOT NULL,
  `protsupply` char(10) NOT NULL,
  `ctrlsupply` char(10) NOT NULL,
  `k861op` char(10) NOT NULL,
  `k862op` char(10) NOT NULL,
  `k863op` char(10) NOT NULL,
  `statQ21` char(10) NOT NULL,
  `statQ22` char(10) NOT NULL,
  `statQ50` char(10) NOT NULL,
  `statQ28` char(10) NOT NULL,
  `statQ38` char(10) NOT NULL,
  `ocrop` char(10) NOT NULL,
  `gfrop1` char(10) NOT NULL,
  `gfrop2` char(10) NOT NULL,
  `gfrop3` char(10) NOT NULL,
  `gfrop4` char(10) NOT NULL,
  `r1` char(10) NOT NULL,
  `r2` char(10) NOT NULL,
  `r3` char(10) NOT NULL,
  `r4` char(10) NOT NULL,
  `r5` char(10) NOT NULL,
  `r6` char(10) NOT NULL,
  `s1` char(10) NOT NULL,
  `s2` char(10) NOT NULL,
  `s3` char(10) NOT NULL,
  `s4` char(10) NOT NULL,
  `s5` char(10) NOT NULL,
  `s6` char(10) NOT NULL,
  `t1` char(10) NOT NULL,
  `t2` char(10) NOT NULL,
  `t3` char(10) NOT NULL,
  `t4` char(10) NOT NULL,
  `t5` char(10) NOT NULL,
  `t6` char(10) NOT NULL,
  `arlockout` char(10) NOT NULL,
  `cbunhealthy` char(10) NOT NULL,
  `aidedsend` char(10) NOT NULL,
  `defsend` char(10) NOT NULL,
  `aidedreceive` char(10) NOT NULL,
  `defreceive` char(10) NOT NULL,
  `diffop` char(10) NOT NULL,
  `z1op` char(10) NOT NULL,
  `z2op` char(10) NOT NULL,
  `z3op` char(10) NOT NULL,
  `sotfop` char(10) NOT NULL,
  `autoreclose` char(10) NOT NULL,
  `aidedop` char(10) NOT NULL,
  `defop` char(10) NOT NULL,
  `psb` char(10) NOT NULL,
  `fof87lalarm` char(10) NOT NULL,
  `r_diff` char(10) NOT NULL,
  `s_diff` char(10) NOT NULL,
  `t_diff` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `boolean`
--

INSERT INTO `boolean` (`id`, `tanggal`, `bay`, `f87lfail`, `f87lalarm`, `f50fail`, `f50alarm`, `mcbac`, `auxdcsupply`, `q21q22close`, `cbsringchargefail`, `cbmotormcbtrip`, `springfailR`, `springfailS`, `springfailT`, `sf6block`, `tcs2block`, `sf6alarm`, `cbalarmac`, `poledis`, `q21motor`, `q21control`, `q22motor`, `q22control`, `q28motor`, `q28control`, `tcs1r`, `tcs1s`, `tcs1t`, `tcs2r`, `tcs2s`, `tcs2t`, `motormcb`, `vtmcb`, `protsupply`, `ctrlsupply`, `k861op`, `k862op`, `k863op`, `statQ21`, `statQ22`, `statQ50`, `statQ28`, `statQ38`, `ocrop`, `gfrop1`, `gfrop2`, `gfrop3`, `gfrop4`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `arlockout`, `cbunhealthy`, `aidedsend`, `defsend`, `aidedreceive`, `defreceive`, `diffop`, `z1op`, `z2op`, `z3op`, `sotfop`, `autoreclose`, `aidedop`, `defop`, `psb`, `fof87lalarm`, `r_diff`, `s_diff`, `t_diff`) VALUES
(1, '2025-02-01 07:13:32', 'pemalang1', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', '1', '2', '1', '1', '2', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `mx`
--

CREATE TABLE `mx` (
  `id` int NOT NULL,
  `tanggal` timestamp NOT NULL,
  `bay` char(15) NOT NULL,
  `current_r` float NOT NULL,
  `current_s` float NOT NULL,
  `current_t` float NOT NULL,
  `vr` float NOT NULL,
  `vs` float NOT NULL,
  `vt` float NOT NULL,
  `vrs` float NOT NULL,
  `vst` float NOT NULL,
  `vtr` float NOT NULL,
  `mw` float NOT NULL,
  `mvar` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mx`
--

INSERT INTO `mx` (`id`, `tanggal`, `bay`, `current_r`, `current_s`, `current_t`, `vr`, `vs`, `vt`, `vrs`, `vst`, `vtr`, `mw`, `mvar`) VALUES
(1, '2025-01-21 05:20:43', 'pemalang1', 66.11, 67.78, 67.78, 87.02, 86.94, 86.94, 150.84, 150.41, 150.65, 16.95, 4.44),
(2, '2025-01-21 05:20:43', 'pemalang2', -0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '2025-01-21 05:21:22', 'pekalongan1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '2025-01-21 05:21:22', 'pekalongan2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '2025-01-21 05:21:43', 'trafo1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '2025-01-21 05:21:43', 'kopel', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boolean`
--
ALTER TABLE `boolean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mx`
--
ALTER TABLE `mx`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
