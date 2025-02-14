-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2025 at 03:52 AM
-- Server version: 8.0.40
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
-- Table structure for table `boolean_cpl`
--

CREATE TABLE `boolean_cpl` (
  `id` int NOT NULL,
  `tanggal` text NOT NULL,
  `bay` char(15) NOT NULL,
  `sf6blok` char(10) NOT NULL,
  `sf6alarm` char(10) NOT NULL,
  `springuncharge` char(10) NOT NULL,
  `mtrmcbtrip` char(10) NOT NULL,
  `q1mtrtrip` char(10) NOT NULL,
  `q1ctrltrip` char(10) NOT NULL,
  `q2mtrtrip` char(10) NOT NULL,
  `q2ctrltrip` char(10) NOT NULL,
  `mcbactrip` char(10) NOT NULL,
  `f51fail` char(10) NOT NULL,
  `f51alarm` char(10) NOT NULL,
  `tcs1` char(10) NOT NULL,
  `tcs2` char(10) NOT NULL,
  `protsuppfail` char(10) NOT NULL,
  `ctrl1suppfail` char(10) NOT NULL,
  `ctrl2suppfail` char(10) NOT NULL,
  `k861` char(10) NOT NULL,
  `k862` char(10) NOT NULL,
  `k863` char(10) NOT NULL,
  `statQ21` char(10) NOT NULL,
  `statQ22` char(10) NOT NULL,
  `statQ50` char(10) NOT NULL,
  `ocrop` char(10) NOT NULL,
  `gfrop` char(10) NOT NULL,
  `bcufail` char(10) NOT NULL,
  `etherfail` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `boolean_cpl`
--

INSERT INTO `boolean_cpl` (`id`, `tanggal`, `bay`, `sf6blok`, `sf6alarm`, `springuncharge`, `mtrmcbtrip`, `q1mtrtrip`, `q1ctrltrip`, `q2mtrtrip`, `q2ctrltrip`, `mcbactrip`, `f51fail`, `f51alarm`, `tcs1`, `tcs2`, `protsuppfail`, `ctrl1suppfail`, `ctrl2suppfail`, `k861`, `k862`, `k863`, `statQ21`, `statQ22`, `statQ50`, `ocrop`, `gfrop`, `bcufail`, `etherfail`) VALUES
(1, '13-02-2025 09:25:53', 'kopel', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', '1', '1', '1', 'false', 'false', 'false', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `boolean_line`
--

CREATE TABLE `boolean_line` (
  `id` int NOT NULL,
  `tanggal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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
  `t_diff` char(10) NOT NULL,
  `olsop` char(10) NOT NULL,
  `bcufail` char(10) NOT NULL,
  `etherfail` char(10) NOT NULL,
  `buscouplerclose` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `boolean_line`
--

INSERT INTO `boolean_line` (`id`, `tanggal`, `bay`, `f87lfail`, `f87lalarm`, `f50fail`, `f50alarm`, `mcbac`, `auxdcsupply`, `q21q22close`, `cbsringchargefail`, `cbmotormcbtrip`, `springfailR`, `springfailS`, `springfailT`, `sf6block`, `tcs2block`, `sf6alarm`, `cbalarmac`, `poledis`, `q21motor`, `q21control`, `q22motor`, `q22control`, `q28motor`, `q28control`, `tcs1r`, `tcs1s`, `tcs1t`, `tcs2r`, `tcs2s`, `tcs2t`, `motormcb`, `vtmcb`, `protsupply`, `ctrlsupply`, `k861op`, `k862op`, `k863op`, `statQ21`, `statQ22`, `statQ50`, `statQ28`, `statQ38`, `ocrop`, `gfrop1`, `gfrop2`, `gfrop3`, `gfrop4`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `arlockout`, `cbunhealthy`, `aidedsend`, `defsend`, `aidedreceive`, `defreceive`, `diffop`, `z1op`, `z2op`, `z3op`, `sotfop`, `autoreclose`, `aidedop`, `defop`, `psb`, `fof87lalarm`, `r_diff`, `s_diff`, `t_diff`, `olsop`, `bcufail`, `etherfail`, `buscouplerclose`) VALUES
(1, '14-02-2025 10:06:17', 'pemalang1', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', '1', '2', '1', '1', '2', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'true', 'true'),
(2, '14-02-2025 10:06:15', 'pemalang2', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', '2', '1', '1', '1', '2', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'true', 'true'),
(3, '13-02-2025 09:38:28', 'pekalongan1', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', '1', '2', '1', '1', '2', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'true', 'true'),
(4, '13-02-2025 09:38:29', 'pekalongan2', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', '2', '1', '1', '1', '2', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'true', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `boolean_trf`
--

CREATE TABLE `boolean_trf` (
  `id` int NOT NULL,
  `tanggal` text NOT NULL,
  `bay` char(15) NOT NULL,
  `d40etherfail` char(10) NOT NULL,
  `f87tfail` char(10) NOT NULL,
  `f501fail` char(10) NOT NULL,
  `f502fail` char(10) NOT NULL,
  `sf6block` char(10) NOT NULL,
  `sf6alarm` char(10) NOT NULL,
  `springuncharge` char(10) NOT NULL,
  `cbmtrmcb` char(10) NOT NULL,
  `q21mtrmcb` char(10) NOT NULL,
  `q21ctrlmcb` char(10) NOT NULL,
  `q2mtrmcb` char(10) NOT NULL,
  `q2ctrlmcb` char(10) NOT NULL,
  `mcbac` char(10) NOT NULL,
  `mainoilalm` char(10) NOT NULL,
  `oltcoilalm` char(10) NOT NULL,
  `bucholzalm` char(10) NOT NULL,
  `oilalm` char(10) NOT NULL,
  `mainbreahtalm` char(10) NOT NULL,
  `oltcbreathalm` char(10) NOT NULL,
  `lvwindalm` char(10) NOT NULL,
  `hvwindalm` char(10) NOT NULL,
  `fanfail` char(10) NOT NULL,
  `oltcmotoralm` char(10) NOT NULL,
  `tcs1` char(10) NOT NULL,
  `tcs2` char(10) NOT NULL,
  `k861op` char(10) NOT NULL,
  `k862op` char(10) NOT NULL,
  `k863op` char(10) NOT NULL,
  `mcbheater` char(10) NOT NULL,
  `bucholztrip` char(10) NOT NULL,
  `oiltrip` char(10) NOT NULL,
  `hvwindtrip` char(10) NOT NULL,
  `protpowerfail` char(10) NOT NULL,
  `ctrlporwerfail` char(10) NOT NULL,
  `macauxddcfail` char(10) NOT NULL,
  `lvwindtrip` char(10) NOT NULL,
  `presstrip` char(10) NOT NULL,
  `oltcpresstrip` char(10) NOT NULL,
  `jansentrip` char(10) NOT NULL,
  `mainoillow` char(10) NOT NULL,
  `oltcoillow` char(10) NOT NULL,
  `mtrmcbtrip` char(10) NOT NULL,
  `Q0` char(5) NOT NULL,
  `Q21` char(5) NOT NULL,
  `Q22` char(5) NOT NULL,
  `Q51` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Q38` char(5) NOT NULL,
  `ocrlvop` char(10) NOT NULL,
  `ocrlvhs1` char(10) NOT NULL,
  `ocrlvhs2` char(10) NOT NULL,
  `gfrop` char(10) NOT NULL,
  `gfrhs1` char(10) NOT NULL,
  `gfrhs2` char(10) NOT NULL,
  `d39R` char(10) NOT NULL,
  `d39S` char(10) NOT NULL,
  `d39T` char(10) NOT NULL,
  `inctest` char(10) NOT NULL,
  `incservice` char(10) NOT NULL,
  `mtrsupply` char(10) NOT NULL,
  `ctrlsupply` char(10) NOT NULL,
  `inclocal` char(10) NOT NULL,
  `incremote` char(10) NOT NULL,
  `tripsupply` char(10) NOT NULL,
  `vtmcbtrip` char(10) NOT NULL,
  `ocrhvop` char(10) NOT NULL,
  `ocrhvhs1` char(10) NOT NULL,
  `gfrop1` char(10) NOT NULL,
  `f501load` char(10) NOT NULL,
  `d38R` char(10) NOT NULL,
  `d38S` char(10) NOT NULL,
  `d38T` char(10) NOT NULL,
  `diffop` char(10) NOT NULL,
  `diffinstop` char(10) NOT NULL,
  `refhvop` char(10) NOT NULL,
  `reflvop` char(10) NOT NULL,
  `87Tinrush` char(10) NOT NULL,
  `d37R_1` char(10) NOT NULL,
  `d37R_2` char(10) NOT NULL,
  `d37R_3` char(10) NOT NULL,
  `d37R_4` char(10) NOT NULL,
  `d37R_5` char(10) NOT NULL,
  `d37S_1` char(10) NOT NULL,
  `d37S_2` char(10) NOT NULL,
  `d37S_3` char(10) NOT NULL,
  `d37S_4` char(10) NOT NULL,
  `d37S_5` char(10) NOT NULL,
  `d37T_1` char(10) NOT NULL,
  `d37T_2` char(10) NOT NULL,
  `d37T_3` char(10) NOT NULL,
  `d37T_4` char(10) NOT NULL,
  `d37T_5` char(10) NOT NULL,
  `olsop` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bcufail` char(10) NOT NULL,
  `d34etherfail` char(10) NOT NULL,
  `tap` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `boolean_trf`
--

INSERT INTO `boolean_trf` (`id`, `tanggal`, `bay`, `d40etherfail`, `f87tfail`, `f501fail`, `f502fail`, `sf6block`, `sf6alarm`, `springuncharge`, `cbmtrmcb`, `q21mtrmcb`, `q21ctrlmcb`, `q2mtrmcb`, `q2ctrlmcb`, `mcbac`, `mainoilalm`, `oltcoilalm`, `bucholzalm`, `oilalm`, `mainbreahtalm`, `oltcbreathalm`, `lvwindalm`, `hvwindalm`, `fanfail`, `oltcmotoralm`, `tcs1`, `tcs2`, `k861op`, `k862op`, `k863op`, `mcbheater`, `bucholztrip`, `oiltrip`, `hvwindtrip`, `protpowerfail`, `ctrlporwerfail`, `macauxddcfail`, `lvwindtrip`, `presstrip`, `oltcpresstrip`, `jansentrip`, `mainoillow`, `oltcoillow`, `mtrmcbtrip`, `Q0`, `Q21`, `Q22`, `Q51`, `Q38`, `ocrlvop`, `ocrlvhs1`, `ocrlvhs2`, `gfrop`, `gfrhs1`, `gfrhs2`, `d39R`, `d39S`, `d39T`, `inctest`, `incservice`, `mtrsupply`, `ctrlsupply`, `inclocal`, `incremote`, `tripsupply`, `vtmcbtrip`, `ocrhvop`, `ocrhvhs1`, `gfrop1`, `f501load`, `d38R`, `d38S`, `d38T`, `diffop`, `diffinstop`, `refhvop`, `reflvop`, `87Tinrush`, `d37R_1`, `d37R_2`, `d37R_3`, `d37R_4`, `d37R_5`, `d37S_1`, `d37S_2`, `d37S_3`, `d37S_4`, `d37S_5`, `d37T_1`, `d37T_2`, `d37T_3`, `d37T_4`, `d37T_5`, `olsop`, `bcufail`, `d34etherfail`, `tap`) VALUES
(1, '13-02-2025 10:25:22', 'trafo1', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', '1', '1', '2', '1', '2', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'true', '8');

-- --------------------------------------------------------

--
-- Table structure for table `mx`
--

CREATE TABLE `mx` (
  `id` int NOT NULL,
  `tanggal` text NOT NULL,
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
  `mvar` float NOT NULL,
  `vr2` float NOT NULL,
  `vs2` float NOT NULL,
  `vt2` float NOT NULL,
  `vrs2` float NOT NULL,
  `vst2` float NOT NULL,
  `vtr2` float NOT NULL,
  `current_r2` float NOT NULL,
  `current_s2` float NOT NULL,
  `current_t2` float NOT NULL,
  `mw2` float NOT NULL,
  `mvar2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mx`
--

INSERT INTO `mx` (`id`, `tanggal`, `bay`, `current_r`, `current_s`, `current_t`, `vr`, `vs`, `vt`, `vrs`, `vst`, `vtr`, `mw`, `mvar`, `vr2`, `vs2`, `vt2`, `vrs2`, `vst2`, `vtr2`, `current_r2`, `current_s2`, `current_t2`, `mw2`, `mvar2`) VALUES
(1, '14-02-2025 10:06:17', 'pemalang1', 92.89, 95.4, 87.87, 86.8, 86.84, 86.76, 150.59, 150.26, 150.16, 22.49, 7.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '14-02-2025 10:06:15', 'pemalang2', 95.4, 95.4, 92.89, 86.92, 86.8, 86.74, 150.87, 150.08, 150.21, 22.73, 8.43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '13-02-2025 09:38:28', 'pekalongan1', 158.16, 158.16, 158.16, 86.91, 86.91, 86.61, 150.68, 150.11, 150.28, -38.07, -16.48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '13-02-2025 09:38:29', 'pekalongan2', 160.67, 160.67, 155.65, 86.37, 86.56, 86.32, 149.86, 149.52, 149.72, -37.95, -16.28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '13-02-2025 09:25:53', 'kopel', 66.39, 63.04, 63.04, 86.61, 86.55, 86.5, 150.15, 149.78, 149.91, -15.18, -6.54, 86.53, 86.55, 86.42, 150.02, 149.68, 149.78, 0, 0, 0, 0, 0),
(6, '13-02-2025 10:25:22', 'trafo1', 140.54, 136.03, 135.94, 86.31, 86.29, 86.09, 149.61, 149.16, 149.31, 31.22, 16.85, 12.09, 12.09, 12.08, 20.95, 20.92, 20.95, 978.8, 935.01, 932.22, 31.31, 14.16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boolean_cpl`
--
ALTER TABLE `boolean_cpl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boolean_line`
--
ALTER TABLE `boolean_line`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boolean_trf`
--
ALTER TABLE `boolean_trf`
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
