-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2023 pada 14.10
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layanan_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_counts`
--

CREATE TABLE `nilai_counts` (
  `id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_counts`
--

INSERT INTO `nilai_counts` (`id`, `nilai`, `jumlah`) VALUES
(46, 1, 0),
(47, 2, 2),
(48, 3, 2),
(49, 4, 303),
(50, 5, 301);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skor`
--

CREATE TABLE `skor` (
  `id_skor` int(11) NOT NULL,
  `nama_penilai` varchar(128) NOT NULL,
  `pendidikan` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `saran` varchar(256) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skor`
--

INSERT INTO `skor` (`id_skor`, `nama_penilai`, `pendidikan`, `jenis_kelamin`, `tgl_penilaian`, `saran`, `nilai`) VALUES
(112, 'Dinas Perpustakaan Provinsi Sumatera Selatan', 'S1', 'Laki-laki', '2023-01-16', 'fitur menarik dan bagus', 37),
(113, 'Dinas Perpustakaan Provinsi Sulawesi Tenggara', 'S1', 'Laki-laki', '2023-01-16', 'dengan adanya sistem ini lebih mudah mendonasikan buku', 36),
(114, 'Dinas Perpustakaan Provinsi Sulawesi Tenggara', 'S1', 'Laki-laki', '2023-01-16', 'masih ada yang kurang dari fitur ini', 36),
(115, 'Hibah Masyarakat', 'S1', 'Perempuan', '2023-01-17', 'website ini sangat membantu', 36),
(116, 'Mekhtil ', 'S1', 'Perempuan', '2022-02-10', 'cukup membantu dalam mengusulkan buku', 36),
(117, 'Zulva chairunnisa', 'S1', 'Perempuan', '2022-03-14', 'website ini sangat mudah dan sangat membantu', 36),
(118, 'Budii ismail', 'S1', 'Laki-laki', '2023-06-10', 'harus ada yang diperbaiki lagi ', 36),
(119, 'Corry puspitaning tyas', 'S1', 'Perempuan', '2022-02-10', 'terimaksih telah menyediakan website ini', 36),
(120, 'Aisyah Al chumairoh', 'S1', 'Perempuan', '2022-02-16', 'fitur yang disediakan sangat baik', 36),
(122, 'Nadia Husnaning Tyas', 'S2', 'Perempuan', '2022-06-16', 'saya sangat setuju dengan adanya sistem ini', 36),
(123, 'Laurensius Inderawan ', 'SMA/SMK', 'Perempuan', '2022-09-10', 'masih ada fitur yang kurang bagus', 36),
(124, 'Beri', 'SMA/SMK', 'Laki-laki', '2022-09-13', 'aplikasinya lumayan bagus', 36),
(125, 'Onis Sm.', 'S2', 'Laki-laki', '2022-09-29', 'aplikasi mendukung', 36),
(126, 'Lutfiyah Arifin ', 'S2', 'Laki-laki', '2022-07-02', 'sangat mendukung sekali', 36),
(127, 'Nes', 'S1', 'Perempuan', '2022-07-25', 'sangat bermanfaat', 36),
(128, 'Cynthia', 'SMA/SMK', 'Perempuan', '2022-07-19', 'dengan aplikas ini saya bisa mengusulkan buku dengan mudah', 36),
(129, 'Sonia Zuraida', 'S1', 'Perempuan', '2022-12-16', 'saya sangat menyukai web ini', 36),
(130, 'Sonia Zuraida', 'S1', 'Perempuan', '2023-01-05', 'website yang menarik', 36),
(131, 'Arga Zain Aksani', 'S1', 'Laki-laki', '2023-01-10', 'mungkin lebih dikembangkan lagi agar lebih menarik', 36),
(132, 'Ractinanesi', 'S1', 'Perempuan', '2023-02-10', 'dengan aplikasi ini saya terbantu', 36),
(133, 'Ractinanesi', 'S1', 'Perempuan', '2023-02-10', 'dengan aplikasi ini saya terbantu', 36),
(134, 'Nisrina shafa tamita', 'S1', 'Perempuan', '2023-02-20', 'semoga aplikasi ini menjadi yang utama', 36),
(135, 'Alifa Azka Shafanisa', 'SMA/SMK', 'Perempuan', '2023-02-24', 'saya suka dengan aplikasi ini', 36),
(136, 'Lucky Bagus Ananda', 'SMA/SMK', 'Laki-laki', '2023-03-24', 'saya lebih mudah mengusulkan buku', 36),
(137, 'Devi Nabilla', 'S1', 'Perempuan', '2023-03-02', 'terimakasih karena tekah menghadirkanweb ini', 36),
(138, 'M. Iqbal Aenun Najib', 'S1', 'Laki-laki', '2023-03-16', 'aplikasi lumayan bagus', 36),
(139, 'Rizky Nur Madani', 'S1', 'Laki-laki', '2023-03-20', 'dengan adanya web ini saya terbantu', 36),
(140, 'Erviana Vilka Natania', 'S1', 'Perempuan', '2023-11-16', 'sangatt membantu', 36),
(141, 'Tri Budi Setyawan', 'SMA/SMK', 'Laki-laki', '2022-11-20', 'aplikasi mudah digunakan', 36),
(142, 'Muhammad Alam Nafis', 'S1', 'Laki-laki', '2022-11-03', 'aplikasi ini sangat bagus tapi masih agak membingungkan', 36),
(143, 'Ratih Mila Risdiyanti', 'S1', 'Perempuan', '2023-04-01', 'aplikasi bagus', 36),
(144, 'Brigitta kirana widya hirmawan', 'S1', 'Laki-laki', '2023-04-10', 'aplikasi menarik', 36),
(145, 'Rosita Nailil Farih', 'SMA/SMK', 'Perempuan', '2023-04-05', 'website yang bagus sekali', 36),
(146, 'Khoirun Nisa', 'S1', 'Perempuan', '2023-05-02', 'aplikasi cukup bagus', 36),
(147, 'Ristiana Damayanti', 'S1', 'Perempuan', '2023-05-10', 'mohon untuk dikembangkan lagi', 36),
(148, 'Lilis Sugiati', 'S1', 'Perempuan', '2023-05-20', 'website ini bisa membantu dalam mengusulkan buku', 36),
(149, 'Rahma', 'SMA/SMK', 'Perempuan', '2023-06-06', 'terimakasih ttelah menghadirkan web ini', 36),
(150, 'Tari', 'SMA/SMK', 'Perempuan', '2023-01-12', '-', 36),
(151, 'Safira', 'SMA/SMK', 'Perempuan', '2023-02-25', 'dengan adanya aplikasi ini, dapat mengusulkan buku dengan mudah', 36),
(152, 'Arga', 'SMA/SMK', 'Laki-laki', '2023-07-10', 'saya sangat setuju dengan website ini', 36),
(153, 'Refan', 'SMA/SMK', 'Laki-laki', '2023-07-27', '-', 36),
(154, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-01-17', 'dengan adanya aplikasi ini, saya lebih mudah mendonasikan buku', 36),
(155, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-01-17', 'aplikasinya bagusdan menarik', 36),
(156, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-01-17', 'website cukup bagus', 36),
(157, 'Hibah Masyarakat', 'S1', 'Perempuan', '2023-01-17', 'aplikasi sudah bagus, namun coba kembangkan lagi', 36),
(158, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-01-17', 'website lumayan bagus dan menarik', 36),
(159, 'Hibah Perpusnas RI', 'S1', 'Laki-laki', '2023-03-23', 'mendonasikan buku lebih mudah', 36),
(160, 'Hibah Perpusnas RI', 'S1', 'Laki-laki', '2023-03-23', 'donasi buk jadi lebih mudah\r\n', 36),
(161, 'Hibah Perpusnas RI', 'S1', 'Perempuan', '2023-03-23', '-', 36),
(162, 'Hibah Perpusnas RI', 'S1', 'Laki-laki', '2023-03-23', '-', 36),
(163, 'Hibah Perpusnas RI', 'S1', 'Laki-laki', '2023-03-23', '-', 36),
(164, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-05-15', 'aplikasi ini sangat membantu', 36),
(165, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-05-15', 'website ini sangat dibutuhkan ', 36),
(166, 'Perpusnas RI 1999/2000', 'S1', 'Laki-laki', '2023-05-15', '-', 36),
(167, 'Hibah Masyarakat', 'S1', 'Perempuan', '2023-05-15', '-', 36),
(168, 'Hibah Masyarakat', 'S1', 'Perempuan', '2023-05-15', '-', 36),
(169, 'Hibah Masyarakat', 'S1', 'Perempuan', '2023-06-12', 'website ini sangat membantu saya', 36),
(170, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-06-12', '-', 36),
(171, 'Hibah Masyarakat', 'S1', 'Perempuan', '2023-06-12', 'tampilan website menarik', 36),
(172, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-06-12', '-', 36),
(173, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-06-12', '-', 36),
(174, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-06-12', '-', 36),
(175, 'Hibah Masyarakat', 'S1', 'Perempuan', '2023-06-12', 'saya sangat setuju dengan dihadirkannya website ini', 36),
(176, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-06-12', '-', 36),
(177, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-06-12', '-', 36),
(178, 'Hibah Masyarakat', 'S1', 'Perempuan', '2023-07-24', 'dengan adanya aplikasi ini saya dapat mendonasikan buku dengan mudah', 36),
(179, 'Hibah Masyarakat', 'S1', 'Perempuan', '2023-07-24', 'aplikasi sudah cukup bagus', 36),
(180, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-07-24', '-', 36),
(181, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-07-24', '-', 36),
(182, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-07-24', '-', 36),
(183, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-07-24', '-', 36),
(184, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-07-24', '-', 36),
(185, 'Hibah Masyarakat', 'S1', 'Perempuan', '2023-07-24', 'ap;likasi ini sudah bagus, tetapi masih kurang menarik', 36),
(186, 'Hibah Masyarakat', 'S1', 'Laki-laki', '2023-07-24', 'dengan adanya website ini dapat membantu masyarakat dalam mendonasikan dan mengusulkan buka lebih mudah', 36),
(187, 'Peri Triatmojo', 'S1', 'Laki-laki', '2023-08-18', 'sayasangat setuju dnegan adanya website ini', 35),
(188, 'Peri Triatmojo', 'S3', 'Laki-laki', '2023-08-18', '-', 28);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `id` int(11) NOT NULL,
  `pertanyaan_id` int(11) NOT NULL,
  `jawaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jawaban`
--

INSERT INTO `tbl_jawaban` (`id`, `pertanyaan_id`, `jawaban`) VALUES
(89, 12, 5),
(90, 13, 4),
(91, 14, 5),
(92, 15, 4),
(93, 16, 5),
(94, 17, 4),
(95, 18, 4),
(96, 20, 4),
(97, 12, 4),
(98, 13, 5),
(99, 14, 4),
(100, 15, 5),
(101, 16, 4),
(102, 17, 5),
(103, 18, 5),
(104, 20, 5),
(105, 12, 5),
(106, 13, 4),
(107, 14, 5),
(108, 15, 4),
(109, 16, 5),
(110, 17, 4),
(111, 18, 5),
(112, 20, 4),
(113, 12, 4),
(114, 13, 5),
(115, 14, 4),
(116, 15, 5),
(117, 16, 4),
(118, 17, 5),
(119, 18, 4),
(120, 20, 5),
(121, 12, 5),
(122, 13, 4),
(123, 14, 5),
(124, 15, 4),
(125, 16, 5),
(126, 17, 4),
(127, 18, 5),
(128, 20, 4),
(129, 12, 4),
(130, 13, 5),
(131, 14, 4),
(132, 15, 5),
(133, 16, 4),
(134, 17, 5),
(135, 18, 4),
(136, 20, 5),
(137, 12, 5),
(138, 13, 4),
(139, 14, 5),
(140, 15, 4),
(141, 16, 5),
(142, 17, 4),
(143, 18, 5),
(144, 20, 4),
(145, 12, 4),
(146, 13, 5),
(147, 14, 4),
(148, 15, 5),
(149, 16, 4),
(150, 17, 5),
(151, 18, 4),
(152, 20, 5),
(153, 12, 5),
(154, 13, 4),
(155, 14, 5),
(156, 15, 4),
(157, 16, 5),
(158, 17, 4),
(159, 18, 5),
(160, 20, 4),
(161, 12, 4),
(162, 13, 5),
(163, 14, 4),
(164, 15, 5),
(165, 16, 4),
(166, 17, 5),
(167, 18, 4),
(168, 20, 5),
(177, 12, 5),
(178, 13, 4),
(179, 14, 5),
(180, 15, 4),
(181, 16, 5),
(182, 17, 4),
(183, 18, 5),
(184, 20, 4),
(185, 12, 4),
(186, 13, 5),
(187, 14, 4),
(188, 15, 5),
(189, 16, 4),
(190, 17, 5),
(191, 18, 4),
(192, 20, 5),
(193, 12, 5),
(194, 13, 4),
(195, 14, 5),
(196, 15, 4),
(197, 16, 5),
(198, 17, 4),
(199, 18, 5),
(200, 20, 4),
(201, 12, 4),
(202, 13, 5),
(203, 14, 4),
(204, 15, 5),
(205, 16, 4),
(206, 17, 5),
(207, 18, 4),
(208, 20, 5),
(209, 12, 5),
(210, 13, 4),
(211, 14, 5),
(212, 15, 4),
(213, 16, 5),
(214, 17, 4),
(215, 18, 5),
(216, 20, 4),
(217, 12, 4),
(218, 13, 5),
(219, 14, 4),
(220, 15, 5),
(221, 16, 4),
(222, 17, 5),
(223, 18, 4),
(224, 20, 5),
(225, 12, 5),
(226, 13, 4),
(227, 14, 5),
(228, 15, 4),
(229, 16, 5),
(230, 17, 4),
(231, 18, 5),
(232, 20, 4),
(233, 12, 4),
(234, 13, 5),
(235, 14, 4),
(236, 15, 5),
(237, 16, 4),
(238, 17, 5),
(239, 18, 4),
(240, 20, 5),
(241, 12, 5),
(242, 13, 4),
(243, 14, 5),
(244, 15, 4),
(245, 16, 5),
(246, 17, 4),
(247, 18, 5),
(248, 20, 4),
(249, 12, 4),
(250, 13, 5),
(251, 14, 4),
(252, 15, 5),
(253, 16, 4),
(254, 17, 5),
(255, 18, 4),
(256, 20, 5),
(257, 12, 5),
(258, 13, 4),
(259, 14, 5),
(260, 15, 4),
(261, 16, 5),
(262, 17, 4),
(263, 18, 5),
(264, 20, 4),
(265, 12, 5),
(266, 13, 4),
(267, 14, 5),
(268, 15, 4),
(269, 16, 5),
(270, 17, 4),
(271, 18, 5),
(272, 20, 4),
(273, 12, 5),
(274, 13, 4),
(275, 14, 5),
(276, 15, 4),
(277, 16, 5),
(278, 17, 4),
(279, 18, 5),
(280, 20, 4),
(281, 12, 4),
(282, 13, 5),
(283, 14, 4),
(284, 15, 5),
(285, 16, 4),
(286, 17, 5),
(287, 18, 4),
(288, 20, 5),
(289, 12, 5),
(290, 13, 4),
(291, 14, 5),
(292, 15, 4),
(293, 16, 5),
(294, 17, 4),
(295, 18, 5),
(296, 20, 4),
(297, 12, 4),
(298, 13, 5),
(299, 14, 4),
(300, 15, 5),
(301, 16, 4),
(302, 17, 5),
(303, 18, 4),
(304, 20, 5),
(305, 12, 5),
(306, 13, 4),
(307, 14, 5),
(308, 15, 4),
(309, 16, 5),
(310, 17, 4),
(311, 18, 5),
(312, 20, 4),
(313, 12, 4),
(314, 13, 5),
(315, 14, 4),
(316, 15, 5),
(317, 16, 4),
(318, 17, 5),
(319, 18, 4),
(320, 20, 5),
(321, 12, 5),
(322, 13, 4),
(323, 14, 5),
(324, 15, 4),
(325, 16, 5),
(326, 17, 4),
(327, 18, 5),
(328, 20, 4),
(329, 12, 4),
(330, 13, 5),
(331, 14, 4),
(332, 15, 5),
(333, 16, 4),
(334, 17, 5),
(335, 18, 4),
(336, 20, 5),
(337, 12, 5),
(338, 13, 4),
(339, 14, 5),
(340, 15, 4),
(341, 16, 5),
(342, 17, 4),
(343, 18, 5),
(344, 20, 4),
(345, 12, 4),
(346, 13, 5),
(347, 14, 4),
(348, 15, 5),
(349, 16, 4),
(350, 17, 5),
(351, 18, 4),
(352, 20, 5),
(353, 12, 4),
(354, 13, 5),
(355, 14, 4),
(356, 15, 5),
(357, 16, 4),
(358, 17, 5),
(359, 18, 4),
(360, 20, 5),
(361, 12, 5),
(362, 13, 4),
(363, 14, 5),
(364, 15, 4),
(365, 16, 5),
(366, 17, 4),
(367, 18, 5),
(368, 20, 4),
(369, 12, 4),
(370, 13, 5),
(371, 14, 4),
(372, 15, 5),
(373, 16, 4),
(374, 17, 5),
(375, 18, 4),
(376, 20, 5),
(377, 12, 5),
(378, 13, 4),
(379, 14, 5),
(380, 15, 4),
(381, 16, 5),
(382, 17, 4),
(383, 18, 5),
(384, 20, 4),
(385, 12, 4),
(386, 13, 5),
(387, 14, 4),
(388, 15, 5),
(389, 16, 4),
(390, 17, 5),
(391, 18, 4),
(392, 20, 5),
(393, 12, 4),
(394, 13, 5),
(395, 14, 4),
(396, 15, 5),
(397, 16, 4),
(398, 17, 5),
(399, 18, 4),
(400, 20, 5),
(401, 12, 5),
(402, 13, 4),
(403, 14, 5),
(404, 15, 4),
(405, 16, 5),
(406, 17, 4),
(407, 18, 5),
(408, 20, 4),
(409, 12, 4),
(410, 13, 5),
(411, 14, 4),
(412, 15, 5),
(413, 16, 4),
(414, 17, 5),
(415, 18, 4),
(416, 20, 5),
(417, 12, 5),
(418, 13, 4),
(419, 14, 5),
(420, 15, 4),
(421, 16, 5),
(422, 17, 4),
(423, 18, 5),
(424, 20, 4),
(425, 12, 4),
(426, 13, 5),
(427, 14, 4),
(428, 15, 5),
(429, 16, 4),
(430, 17, 5),
(431, 18, 4),
(432, 20, 5),
(433, 12, 5),
(434, 13, 4),
(435, 14, 5),
(436, 15, 4),
(437, 16, 5),
(438, 17, 4),
(439, 18, 5),
(440, 20, 4),
(441, 12, 4),
(442, 13, 5),
(443, 14, 4),
(444, 15, 5),
(445, 16, 4),
(446, 17, 5),
(447, 18, 4),
(448, 20, 5),
(449, 12, 5),
(450, 13, 4),
(451, 14, 5),
(452, 15, 4),
(453, 16, 5),
(454, 17, 4),
(455, 18, 5),
(456, 20, 4),
(457, 12, 4),
(458, 13, 5),
(459, 14, 4),
(460, 15, 5),
(461, 16, 4),
(462, 17, 5),
(463, 18, 4),
(464, 20, 5),
(465, 12, 5),
(466, 13, 4),
(467, 14, 5),
(468, 15, 4),
(469, 16, 5),
(470, 17, 4),
(471, 18, 5),
(472, 20, 4),
(473, 12, 4),
(474, 13, 5),
(475, 14, 4),
(476, 15, 5),
(477, 16, 4),
(478, 17, 5),
(479, 18, 4),
(480, 20, 5),
(481, 12, 5),
(482, 13, 4),
(483, 14, 5),
(484, 15, 4),
(485, 16, 5),
(486, 17, 4),
(487, 18, 5),
(488, 20, 4),
(489, 12, 4),
(490, 13, 5),
(491, 14, 4),
(492, 15, 5),
(493, 16, 4),
(494, 17, 5),
(495, 18, 4),
(496, 20, 5),
(497, 12, 5),
(498, 13, 4),
(499, 14, 5),
(500, 15, 4),
(501, 16, 5),
(502, 17, 4),
(503, 18, 5),
(504, 20, 4),
(505, 12, 4),
(506, 13, 5),
(507, 14, 4),
(508, 15, 5),
(509, 16, 4),
(510, 17, 5),
(511, 18, 4),
(512, 20, 5),
(513, 12, 4),
(514, 13, 5),
(515, 14, 4),
(516, 15, 5),
(517, 16, 4),
(518, 17, 5),
(519, 18, 4),
(520, 20, 5),
(521, 12, 5),
(522, 13, 4),
(523, 14, 5),
(524, 15, 4),
(525, 16, 5),
(526, 17, 4),
(527, 18, 5),
(528, 20, 4),
(529, 12, 4),
(530, 13, 5),
(531, 14, 4),
(532, 15, 5),
(533, 16, 4),
(534, 17, 5),
(535, 18, 4),
(536, 20, 5),
(537, 12, 5),
(538, 13, 4),
(539, 14, 5),
(540, 15, 4),
(541, 16, 5),
(542, 17, 4),
(543, 18, 5),
(544, 20, 4),
(545, 12, 4),
(546, 13, 5),
(547, 14, 4),
(548, 15, 5),
(549, 16, 4),
(550, 17, 5),
(551, 18, 4),
(552, 20, 5),
(553, 12, 5),
(554, 13, 4),
(555, 14, 5),
(556, 15, 4),
(557, 16, 5),
(558, 17, 4),
(559, 18, 5),
(560, 20, 4),
(561, 12, 4),
(562, 13, 5),
(563, 14, 4),
(564, 15, 5),
(565, 16, 4),
(566, 17, 5),
(567, 18, 4),
(568, 20, 5),
(569, 12, 5),
(570, 13, 4),
(571, 14, 5),
(572, 15, 4),
(573, 16, 5),
(574, 17, 4),
(575, 18, 5),
(576, 20, 4),
(577, 12, 4),
(578, 13, 5),
(579, 14, 4),
(580, 15, 5),
(581, 16, 4),
(582, 17, 5),
(583, 18, 4),
(584, 20, 5),
(585, 12, 4),
(586, 13, 5),
(587, 14, 4),
(588, 15, 5),
(589, 16, 4),
(590, 17, 5),
(591, 18, 4),
(592, 20, 5),
(593, 12, 5),
(594, 13, 4),
(595, 14, 5),
(596, 15, 4),
(597, 16, 5),
(598, 17, 4),
(599, 18, 5),
(600, 20, 4),
(601, 12, 4),
(602, 13, 5),
(603, 14, 4),
(604, 15, 5),
(605, 16, 4),
(606, 17, 5),
(607, 18, 4),
(608, 20, 5),
(609, 12, 5),
(610, 13, 4),
(611, 14, 5),
(612, 15, 4),
(613, 16, 5),
(614, 17, 4),
(615, 18, 5),
(616, 20, 4),
(617, 12, 4),
(618, 13, 5),
(619, 14, 4),
(620, 15, 5),
(621, 16, 4),
(622, 17, 5),
(623, 18, 4),
(624, 20, 5),
(625, 12, 5),
(626, 13, 4),
(627, 14, 5),
(628, 15, 4),
(629, 16, 5),
(630, 17, 4),
(631, 18, 5),
(632, 20, 4),
(633, 12, 4),
(634, 13, 5),
(635, 14, 4),
(636, 15, 5),
(637, 16, 4),
(638, 17, 5),
(639, 18, 4),
(640, 20, 5),
(641, 12, 5),
(642, 13, 4),
(643, 14, 5),
(644, 15, 4),
(645, 16, 5),
(646, 17, 4),
(647, 18, 5),
(648, 20, 4),
(649, 12, 4),
(650, 13, 5),
(651, 14, 4),
(652, 15, 5),
(653, 16, 4),
(654, 17, 5),
(655, 18, 4),
(656, 20, 5),
(657, 12, 5),
(658, 13, 4),
(659, 14, 5),
(660, 15, 4),
(661, 16, 5),
(662, 17, 4),
(663, 18, 5),
(664, 20, 4),
(665, 12, 4),
(666, 13, 5),
(667, 14, 4),
(668, 15, 5),
(669, 16, 4),
(670, 17, 5),
(671, 18, 4),
(672, 20, 5),
(673, 12, 5),
(674, 13, 4),
(675, 14, 5),
(676, 15, 4),
(677, 16, 5),
(678, 17, 4),
(679, 18, 5),
(680, 20, 4),
(681, 12, 4),
(682, 13, 5),
(683, 14, 4),
(684, 15, 5),
(685, 16, 4),
(686, 17, 5),
(687, 18, 4),
(688, 20, 5),
(689, 12, 5),
(690, 13, 4),
(691, 14, 5),
(692, 15, 4),
(693, 16, 5),
(694, 17, 4),
(695, 18, 5),
(696, 20, 4),
(697, 12, 5),
(698, 13, 4),
(699, 14, 5),
(700, 15, 4),
(701, 16, 5),
(702, 17, 4),
(703, 18, 5),
(704, 20, 3),
(705, 12, 4),
(706, 13, 4),
(707, 14, 4),
(708, 15, 3),
(709, 16, 5),
(710, 17, 4),
(711, 18, 2),
(712, 20, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`) VALUES
(6, 'Tangibles (bukti terukur)'),
(7, 'Reliability (keandalan)'),
(8, 'Responsiveness (daya tanggap)'),
(9, 'Assurance (Jaminan)'),
(10, 'Empathy (empati)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id_per` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pertanyaan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id_per`, `id_kategori`, `pertanyaan`) VALUES
(12, 6, 'Apakah fitur - fitur pada website tertata dengan rapi'),
(13, 6, 'Tampilan website yang menarik'),
(14, 7, 'Tingkat kecepatan dan ketepatan fitur pada webstie ini'),
(15, 7, 'Kesiapan petugas dalam meproses data'),
(16, 8, 'Responsive pada webstie'),
(17, 8, 'Kenyamanan dalam menggunakan website (pencahayaan, warna, dll)'),
(18, 9, 'Memberi tahukan informasi lengkap mengenai perpustakaan'),
(20, 10, 'aplikasi ini semakin memudahkan Anda dalam mengirim donasi buku dan usulan buku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdonasi`
--

CREATE TABLE `tdonasi` (
  `id` int(11) NOT NULL,
  `tnama` varchar(20) CHARACTER SET latin1 NOT NULL,
  `judul_buku` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tpengarang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tahun_terbit` varchar(50) CHARACTER SET latin1 NOT NULL,
  `talamat` varchar(20) CHARACTER SET latin1 NOT NULL,
  `temail` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nomor_hp` varchar(128) CHARACTER SET latin1 NOT NULL,
  `jumlah_donasi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tketerangan` date NOT NULL,
  `tdeskrip` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tdonasi`
--

INSERT INTO `tdonasi` (`id`, `tnama`, `judul_buku`, `tpengarang`, `tahun_terbit`, `talamat`, `temail`, `nomor_hp`, `jumlah_donasi`, `tketerangan`, `tdeskrip`) VALUES
(51, 'Dinas Perpustakaan P', 'Katalog Induk Daerah 2022', 'Dinas Perpustakaan Provinsi Sumatera Selatan', 'Dinas Perpustakaan Provinsi Sumatera Selatan, 2022', '-', '-', '-', '2', '2023-01-16', 'saya ingin memberikan buku ini kepada pihak perpus'),
(52, 'Dinas Perpustakaan P', 'Bibliografi Daerah Sumatera Selatan, Volume 2 Nomo', 'Dinas Perpustakaan Provinsi Sumatera Selatan', 'Dinas Perpustakaan Provinsi Sumatera Selatan, 2022', '-', '-', '-', '1', '2023-01-16', 'mendonasikan buku'),
(53, 'Dinas Perpustakaan P', 'Katalog Induk Daerah Sulawesi Tenggara Nomor 14 Ta', 'Dinas Perpustakaan dan Kearsipan Provinsi Sulawesi', 'Dinas Perpustakaan Provinsi Sulawesi Tenggara, 202', '-', '-', '-', '1', '2023-01-16', 'saya mendonasikan buku ini'),
(54, 'Dinas Perpustakaan P', 'Bibliografi Daerah Sulawesi Tenggara Nomor 14 Tahu', 'Dinas Perpustakaan Provinsi Sulawesi Tenggara', 'Dinas Perpustakaan dan Kearsipan Provinsi Sulawesi', '-', '-', '-', '1', '2023-01-16', 'saya ingin memberikan buku ini kepada pihak perpus'),
(55, 'Hibah Masyarakat', 'Laris Manis Bakulan @Dinniroti 45 Resep Kue Kering', 'Wahdini Miftahul Husna', 'Gramedia Pustaka utama, 2022', '-', '-', '-', '1', '2023-01-17', 'buku ini bermanfaat untuk mencari resep kue'),
(57, 'Hibah Masyarakat', 'Pedoman Praktis Pidato Kultum', 'Khoirur Rohim', 'Pustaka Agung Harapan', '-', '-', '-', '1', '2023-01-17', 'semoga buku ini bermanfaat'),
(58, 'Hibah Masyarakat', 'Buku Jago Bulu Tangkis', 'Muhammad Rinaldi', 'Cemerlang, 2020', '-', '-', '-', '1', '2023-01-17', 'saya ingin memberikan buku ini kepada pihak perpus'),
(59, 'Hibah Masyarakat', 'Anak Sersan Jadi Panglima', 'Eddy Suprapto', 'Gramedia Pustaka utama, 2017', '-', '-', '-', '1', '2023-01-17', 'saya mendonasikan buku ini'),
(60, 'Hibah Masyarakat', 'Love Yourself', 'Jiemi Ardian', 'Yrama Widya, 2021', '-', '-', '-', '1', '2023-01-17', 'saya ingin memberikan buku ini kepada pihak perpus'),
(61, 'Hibah Masyarakat', 'Hidup Sesudah Mati', 'Haidar Musyafa', 'Cheklist, 2018', '-', '-', '-', '1', '2023-01-17', 'saya ingin memberikan buku ini kepada pihak perpus'),
(62, 'Hibah Perpusnas RI', 'Babad Sepehi', 'Yudhi Irawan', 'Perpusnas RI, 2018', '-', '-', '-', '1', '2023-03-23', 'saya ingin memberikan buku ini kepada pihak perpus'),
(63, 'Hibah Perpusnas RI', 'Serat panji kuda narawangsa', 'Radjiman', 'Perpusnas RI, 2022', '-', '-', '-', '1', '2023-03-23', 'saya ingin memberikan buku ini kepada pihak perpus'),
(64, 'Hibah Perpusnas RI', 'Serat Babad Tanah Jawi jilid I', 'Hartini', 'Perpusnas RI, 2022', '-', '-', '-', '1', '2023-03-23', 'semoga buku ini bermanfaat'),
(65, 'Hibah Perpusnas RI', 'Serat panji balitar', 'Radjiman', 'Perpusnas RI, 2022', '-', '-', '-', '1', '2023-03-23', 'semoga buku ini bermanfaat'),
(66, 'Hibah Perpusnas RI', 'Kidung Sulapan (KBG 107)', 'Singgih Wiryono, Siti Amanah', 'Perpusnas RI, 2022', '-', '-', '-', '1', '2023-03-23', 'saya mendonasikan buku ini'),
(67, 'Hibah Masyarakat', 'Pancasila ', 'Muchammad Helmi Umam', 'Rajawali Buana Pusaka,2020', '-', '-', '-', '1', '2023-05-15', 'saya ingin memberikan buku ini kepada pihak perpus'),
(68, 'Hibah Masyarakat', 'Hukum Pidana Islam', 'Syamsuri', 'Rajawali Buana Pusaka, 2020', '-', '-', '-', '1', '2023-05-15', 'saya ingin memberikan buku ini kepada pihak perpus'),
(69, 'Perpusnas RI 1999/20', 'Bukan Cinta Sesaat', 'Mira W', 'Gramedia Pustaka Utama, 1995', '-', '-', '-', '1', '2023-05-15', 'saya ingin memberikan buku ini kepada pihak perpus'),
(70, 'Hibah Masyarakat', 'Studi Al-Qur&#039;an', 'Muflikhatul Khoiroh', 'Rajawali Buana Pusaka, 2020', '-', '-', '-', '1', '2023-05-15', 'semoga buku ini bermanfaat'),
(71, 'Hibah Masyarakat', 'Aku', 'Devi Raissa', 'Lubang Kelinci Indonesia, 2020', '-', '-', '-', '1', '2023-05-15', 'semoga buku ini bermanfaat'),
(72, 'Hibah Masyarakat', 'Buat apa suasah? Segarkan hidupmu dengan percaya', 'W. Hardle.L.Siamar', 'Springer, 2017', '-', '-', '-', '1', '2023-06-12', 'semoga buku ini bermanfaat'),
(73, 'Hibah Masyarakat', 'Beyond Positivism: Economic Methodology in The Twe', 'Bruce J.Caldwell', 'Routledge, 1994', '-', '-', '-', '1', '2023-06-12', 'saya ingin memberikan buku ini kepada pihak perpus'),
(74, 'Hibah Masyarakat', 'Marketing Management', 'Philip Kotler, Kevin Lane Keller', 'Pearson, 2013', '-', '-', '-', '1', '2023-06-12', 'saya mendonasikan buku ini'),
(75, 'Hibah Masyarakat', 'Operations Management: Processes and Value Chains', 'Lee J. Krajewski, Larry P. Ritzman, Manoj K. Malho', 'Pearson, 2013', '-', '-', '-', '1', '2023-06-12', 'semoga buku ini bermanfaat'),
(76, 'Hibah Masyarakat', 'Investments: Analysis and Management', 'Charles P. Jones', 'Wiley, 2004', '-', '-', '-', '1', '2023-06-12', 'saya ingin memberikan buku ini kepada pihak perpus'),
(77, 'Hibah Masyarakat', 'Management Accounting', 'Don R. Hansen, Maryanne M.Mowen', 'South-Western, 2005', '-', '-', '-', '1', '2023-06-12', 'saya mendonasikan buku ini'),
(78, 'Hibah Masyarakat', '50 Years of Dedicatio for Indonesia', '-', 'Citi', '-', '-', '-', '1', '2023-06-12', 'saya mendonasikan buku ini'),
(79, 'Hibah Masyarakat', 'Business Research Methods', 'Donald R. Cooper, Pamela S. Schinder', 'Mc Graw Hill, 2008', '-', '-', '-', '1', '2023-06-12', 'saya mendonasikan buku ini'),
(80, 'Hibah Masyarakat', 'Ilmu Kebidanan', 'Prof. dr. Hanifa Wiknjosastro', 'Yayasan Bina Pustaka, 1994', '-', '-', '-', '1', '2023-06-12', 'semoga buku ini bermanfaat'),
(81, 'Hibah Masyarakat', 'Damai Dalam Rintihan (Peace In Pain)', 'Astar Siregar', 'Meugah Printindo, 2022', '-', '-', '-', '1', '2023-07-24', 'saya ingin memberikan buku ini kepada pihak perpus'),
(82, 'Hibah Masyarakat', 'Marmut Merah Jambu', 'Raditya Dika', 'Bukune, 2010', '-', '-', '-', '1', '2023-07-24', 'saya mendonasikan buku ini'),
(83, 'Hibah Masyarakat', 'Indonesia Baru', 'Haryanto dkk', 'Iam Publishing, 2021', '-', '-', '-', '1', '2023-07-24', 'semoga buku ini dapat bermanfaat untuk pembaca'),
(84, 'Hibah Masyarakat', 'Menata kota melalui Rencaca Detail Tata Ruang (RDT', 'Azzandi Pratama', 'Andi, 2015', '-', '-', '-', '1', '2023-07-24', 'semoga buku ini bermanfaat'),
(85, 'Hibah Masyarakat', 'Hadis ', 'Jumarim, Adi Fadli, Moch Tamimi', 'Rajawali Press, 2020', '-', '-', '-', '1', '2023-07-24', 'saya ingin memberikan buku ini kepada pihak perpus'),
(86, 'Hibah Masyarakat', 'Kartini : Sebuah Biografi', 'Sitisoemandari Soeroto', 'Djambatan, 2001', '-', '-', '-', '1', '2023-07-24', 'semoga buku ini bermanfaat'),
(87, 'Hibah Masyarakat', 'Model pengelolaan pendidikan agama pada kuttab', 'Aji zSofanuddin dkk', 'Balitbang Agama, 2021', '-', '-', '-', '1', '2023-07-24', 'saya mendonasikan buku ini'),
(88, 'Hibah Masyarakat', '100 tokoh yang mengubah Indonesia', 'Tim Narasi', 'Narasi, 2009', '-', '-', '-', '1', '2023-07-24', 'semoga buku ini bermanfaat'),
(89, 'Hibah Masyarakat', 'Buku pintar sehat seumur hidup melalu kobinasi tig', 'AR Mahmud D', 'yayasan Media kesehatan alternatif, 2008', '-', '-', '-', '1', '2023-07-24', 'saya ingin memberikan buku ini kepada pihak perpus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(10, 'Admin', 'admin@gmail.com', 'LOGO_USM.png', '$2y$10$C/bG/vcpVScR9HB6BWHMAOw2prT/.6zgDFOlPAdZvY831AIYsOdJm', 1, 1, 1669354123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(11, 1, 19),
(13, 1, 22),
(16, 1, 16),
(21, 1, 31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(16, 'Kelola Data '),
(22, 'Kelola Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(7, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(23, 16, 'Data Donasi Buku', 'petugas', 'fas fa-fw fa-book', 1),
(24, 16, 'Data Usulan Buku', 'petugas/data_usulan', 'fas fa-fw fa-book-open', 1),
(25, 16, 'Data Kuis', 'kuis/data_kuis', 'fas fa-fw fa-question', 1),
(27, 22, 'Menu Management', 'admin/menu_management', 'fas fa-fw fa-folder', 1),
(28, 16, 'Data Skor', 'kuis/data_skor', 'fas fa-fw fa-file', 1),
(29, 22, 'Sub Menu Management', 'admin/sub_menu', 'fas fa-fw fa-folder-open', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan`
--

CREATE TABLE `usulan` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `pengarang` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `tahun_terbit` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `nama_pengusul` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `tgl_usul` date NOT NULL,
  `nomor_kta` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `alamat` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `nomor_hp` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `usulan`
--

INSERT INTO `usulan` (`id`, `judul`, `pengarang`, `tahun_terbit`, `nama_pengusul`, `tgl_usul`, `nomor_kta`, `alamat`, `nomor_hp`, `email`) VALUES
(44, 'tentang piskologi pribadi, pengembangan diri, dan ', '-', '2019', 'Mekhtil ', '2022-02-10', '-', '-', '082137393334', '-'),
(45, 'laut bercerita', '-', '2020', 'Zulva chairunnisa', '2022-03-14', '16092300064', '-', '0895416100820', '-'),
(46, 'buku pelajaran sd,smp,sma menurut kulikulum baru', '-', '2022', 'Budii ismail', '2022-06-10', '00000297890', '-', '085641036680', '-'),
(47, 'buku motivasi hidup', '-', '2020', 'Corry puspitaning tyas', '2022-02-10', '22110100001', '-', '081393617630', '-'),
(48, 'Desain penelitian kuantitatif &amp; kualitatif', '-', '2020', 'Aisyah Al chumairoh', '2022-02-16', '19010400025', '-', '8517222532', '-'),
(49, 'metode penelitian kuantitatif dan RD, Research Met', '-', '2020', 'Nadia Husnaning Tyas', '2022-06-16', '-', '-', '085641504494', '-'),
(50, 'Buku mengenai bisnis, buku mengenai digital market', '-', '2020', 'Laurensius Inderawan', '2022-09-10', '-', '-', '081226688708', '-'),
(51, 'buku engineen, teknik sipil bidang &#039;&#039;sum', '-', '2020', 'Beri', '2022-09-13', '-', '-', '081343831617', '-'),
(52, 'muatan morai', '-', '2020', 'Onis Sm.', '2022-09-29', '-', '-', '085225443389', '-'),
(53, 'international accountiry, auditiny, self developme', '-', '2022', 'Lutfiyah Arifin ', '2022-07-02', '-', '-', '085880657559', '-'),
(54, 'buku sastra, buku refrensi bahasa inggris, philoso', '-', '2020', 'Nes', '2022-07-25', '-', '-', '0812356644660', '-'),
(55, 'buku motivasi kehidupan', '-', '2020', 'Cynthia', '2022-07-19', '-', '-', '081298403689', '-'),
(56, 'buku semiotika carles sandres pierce', '-', '2020', 'Sonia Zuraida', '2022-12-16', '-', '-', '0852360723591', '-'),
(57, 'sejarah pengembangan pariwisata di kota-kota Indon', '-', '2020', 'Arravi Rizal Firmansyah', '2023-01-05', '-', '-', '089647739079', '-'),
(58, 'buku pemograman komputer, buku komputer, buku desa', '-', '2020', 'Arga Zain Aksani', '2023-01-10', '-', '-', '-', '-'),
(59, 'Accokikdating the pedestrian, kemiskinan di perkan', '-', '2020', 'Ractinanesi', '2023-02-10', '160715 00007', '-', '081563293841', '-'),
(60, 'pulang pergi, bumi, tentang kamu', '-', '2020', 'Nisrina shafa tamita', '2023-02-20', '-', '-', '083824388506', '-'),
(61, 'Pengelolaan  lingkungan berkelanjutan', '-', '2020', 'Alifa Azka Shafanisa', '2023-02-24', '22082600009', '-', '082144083377', '-'),
(62, 'Sapiens, Yuval Noah Harari', '-', '2020', 'Lucky Bagus Ananda', '2023-03-10', '-', '-', '81325184206', '-'),
(63, 'Ya Allah tolong aku', '-', '2020', 'Devi Nabilla', '2023-03-02', '22111100001', '-', '0895332690425', '-'),
(64, 'Ekonometrika', '-', '2020', 'M. Iqbal Aenun Najib', '2023-03-16', '-', '-', '87764855509', '-'),
(65, 'Makanan yummy &amp; Healthy untuk bekal sekolah an', '-', '2020', 'Rizky Nur Madani', '2023-03-20', '-', '-', '08985691072', '-'),
(66, 'Akuntansi keuangan menengah, Intermediate accounti', '-', '2021', 'Erviana Vilka Natania', '2022-11-16', '-', '-', '081327099189', '-'),
(67, 'doa dan cara ibadah sholat lengkap, kultum dan car', '-', '2021', 'Tri Budi Setyawan', '2022-11-20', '23020100006', '-', '85226356158', '-'),
(68, 'ART of war', '-', '2021', 'Muhammad Alam Nafis', '2023-11-03', '23021400001', '-', '081215093678', '-'),
(69, 'Novel Harry Potter,Sapiens', '-', '2021', 'Ratih Mila Risdiyanti', '2023-04-01', '18031800007', '-', '087785812443', '-'),
(70, 'Perbanyak buku mengenai tindakan pidana narkotika ', '-', '2021', 'Brigitta kirana widya hirmawan', '2023-04-10', '19110200060', '-', '082225945337', '-'),
(71, 'Buku anak seri twin explorer, Buku parenting ,Kunc', '-', '2021', 'Rosita Nailil Farih', '2023-04-05', '-', '-', '85727653368', '-'),
(72, 'Psicology of money, tanah para bandit', '-', '2021', 'Khoirun Nisa', '2023-05-02', '22081100006', '-', '85173032200', '-'),
(73, 'Teori kajian sastra kritis , lintang ', '-', '2021', 'Ristiana Damayanti', '2023-05-10', '19111400009', '-', '81450269703', '-'),
(74, 'Diksi dan gaya bahasa', '-', '2021', 'Lilis Sugiati', '2023-05-20', '22110200013', '-', '089531344040', '-'),
(75, 'Tata kota semua tentang planogi, sistem sustanable', '-', '2020', 'Rahma', '2023-06-01', '16071500007', '-', '081563293841', '-'),
(76, 'Antropologi', '-', '2021', 'Tari', '2023-01-12', '-', '-', '081330394354', '-'),
(77, 'Kamus fashion , teknik menggambar proporsi tubuh, ', '-', '2020', 'safira', '2023-02-25', '-', '-', '081231901929', '-'),
(78, 'Teknologi rekayasa proses pangan, teknologi pangan', '-', '021', 'Arga', '2023-07-10', '-', '-', '085702807014', '-'),
(79, 'Update tahun, MSDM', '-', '2020', 'Refan', '2023-04-27', '-', '-', '081373744386', '-'),
(80, 'Teknik Informatika', 'Peri Triatmojo', '2020', 'Lugas', '2023-08-18', '08009', 'karangawen', '0858354647', 'peritriatmojo76@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nilai_counts`
--
ALTER TABLE `nilai_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skor`
--
ALTER TABLE `skor`
  ADD PRIMARY KEY (`id_skor`);

--
-- Indeks untuk tabel `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id_per`);

--
-- Indeks untuk tabel `tdonasi`
--
ALTER TABLE `tdonasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nilai_counts`
--
ALTER TABLE `nilai_counts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `skor`
--
ALTER TABLE `skor`
  MODIFY `id_skor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT untuk tabel `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=713;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tdonasi`
--
ALTER TABLE `tdonasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `usulan`
--
ALTER TABLE `usulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
