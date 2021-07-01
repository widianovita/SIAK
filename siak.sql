-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jul 2021 pada 07.57
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_dosen`
--

CREATE TABLE IF NOT EXISTS `m_dosen` (
  `kd_dosen` varchar(10) NOT NULL DEFAULT '',
  `nama` varchar(132) DEFAULT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL,
  `kd_jabatan_dosen` varchar(2) DEFAULT NULL,
  `status` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_dosen`
--

INSERT INTO `m_dosen` (`kd_dosen`, `nama`, `nidn`, `jk`, `kd_jabatan_dosen`, `status`) VALUES
('0001', 'Surtikanti', '009974467', 'P', '01', 'Aktif'),
('00010', 'Maulana Ardiansyah', '009231991', 'L', '02', 'Aktif'),
('00980', 'Sri Haryanti', '987506545', 'P', '03', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `m_mahasiswa` (
  `nim` varchar(10) NOT NULL DEFAULT '',
  `kd_prodi` varchar(7) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lhr` varchar(30) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `kd_status` varchar(2) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_mahasiswa`
--

INSERT INTO `m_mahasiswa` (`nim`, `kd_prodi`, `nama`, `tempat_lhr`, `agama`, `tgl_lhr`, `jk`, `tgl_masuk`, `kd_status`, `alamat`, `tlp`) VALUES
('130002', 'AK', 'Kim Seokjin', 'Gwacheon', 'Atheis', '1992-12-04', 'L', '2013-06-13', 'A', 'Hannam-dong, Seoul, Korea Selatan', '01000670002'),
('130005', 'IH', 'Park Jimin', 'Busan', 'Kristen', '1995-10-13', 'L', '2013-06-13', 'A', 'Hannam-dong, Seoul, South Korea', '0192303433434'),
('401109', 'SASING', 'Lalang Wijaya', 'Boyolali', 'Islam', '1998-07-11', 'L', '2018-09-02', 'A', 'Ciledug', '08766446790'),
('401520', 'IT', 'Widia Novita Sari', 'Tangerang', 'Islam', '1998-11-15', 'P', '2017-09-05', 'A', 'Jl. Lembang Baru II, Ciledug', '0899753289'),
('401608', 'TI', 'Adila Indriyani', 'Jakarta', 'Islam', '1999-10-30', 'P', '2017-09-01', 'A', 'Jl. h. Goden', '087503229545');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `m_mata_kuliah` (
  `kd_matakuliah` varchar(10) NOT NULL,
  `kd_prodi` varchar(20) DEFAULT NULL,
  `nm_matakuliah` varchar(132) DEFAULT NULL,
  `sks` varchar(2) DEFAULT NULL,
  `semester_matakuliah` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_mata_kuliah`
--

INSERT INTO `m_mata_kuliah` (`kd_matakuliah`, `kd_prodi`, `nm_matakuliah`, `sks`, `semester_matakuliah`) VALUES
('ETP021', 'IT', 'Praktikum Basis Data', '2', '05'),
('PLT031', 'IT', 'Jaringan Komputer', '2', '04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_prodi`
--

CREATE TABLE IF NOT EXISTS `m_prodi` (
  `kd_prodi` varchar(20) NOT NULL,
  `kd_jenis_prodi` varchar(5) DEFAULT NULL,
  `nm_prodi` varchar(100) DEFAULT NULL,
  `status_prodi` varchar(2) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_prodi`
--

INSERT INTO `m_prodi` (`kd_prodi`, `kd_jenis_prodi`, `nm_prodi`, `status_prodi`, `email`) VALUES
('AK', '1015', 'Akutansi', 'A', 'ak@gmail.com'),
('EKO', '1013', 'Pendidikan Ekonomi', 'A', 'peko@gmail.com'),
('IH', '1102', 'HUKUM', 'A', 'hk@gmail.com'),
('IT', '1010', 'Teknik Informatika', 'A', 'ti@gmail.com'),
('MAT', '1011', 'Matematika', 'B', 'mat@gmail.com'),
('SASING', '1005', 'Sastra Inggris', 'B', 'sasing@gmail.com'),
('TE', '0912', 'Teknik Elektro', 'B', 'te@gmail.com'),
('TI', '1012', 'Teknik Industri', 'C', 'tind@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_semester`
--

CREATE TABLE IF NOT EXISTS `m_semester` (
  `kd_semester` varchar(7) NOT NULL DEFAULT '',
  `ket_semester` varchar(20) DEFAULT NULL,
  `thn_semester` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_semester`
--

INSERT INTO `m_semester` (`kd_semester`, `ket_semester`, `thn_semester`) VALUES
('01', 'Semester 1', 'Ganjil'),
('02', 'Semester 2', 'Genap'),
('03', 'Semester 3', 'Ganjil'),
('04', 'Semester 4', 'Genap'),
('05', 'Semester 5', 'Ganjil'),
('06', 'Semester 6', 'Genap'),
('07', 'Semester 7', 'Ganjil'),
('08', 'Semester 8', 'Genap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_krs_dosen`
--

CREATE TABLE IF NOT EXISTS `t_krs_dosen` (
  `id_krs_dosen` varchar(20) NOT NULL DEFAULT '',
  `kd_mtk_dosen` varchar(20) DEFAULT NULL,
  `kd_dosen` varchar(20) DEFAULT NULL,
  `thn_semester` varchar(10) DEFAULT NULL,
  `hari_mengajar` varchar(30) DEFAULT NULL,
  `waktu_mengajar` time DEFAULT NULL,
  `kelas_mengajar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_krs_mhs`
--

CREATE TABLE IF NOT EXISTS `t_krs_mhs` (
  `id_krs_mhs` varchar(10) NOT NULL,
  `kd_matakuliah` varchar(10) DEFAULT NULL,
  `thn_semester` varchar(10) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `kd_prodi` varchar(20) DEFAULT NULL,
  `kd_kelas` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_nilai_khs`
--

CREATE TABLE IF NOT EXISTS `t_nilai_khs` (
  `thn_semester` varchar(10) DEFAULT NULL,
  `kd_dosen` varchar(20) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `kd_matakuliah` varchar(20) DEFAULT NULL,
  `absensi` decimal(10,0) DEFAULT NULL,
  `tugas` decimal(10,0) DEFAULT NULL,
  `uts` decimal(10,0) DEFAULT NULL,
  `uas` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(2, 'Widia ', 'widia', 'd5a143b5f879770ef7ce94a3d3871695'),
(3, 'admin', 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_dosen`
--
ALTER TABLE `m_dosen`
  ADD PRIMARY KEY (`kd_dosen`);

--
-- Indexes for table `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kd_prodi` (`kd_prodi`);

--
-- Indexes for table `m_mata_kuliah`
--
ALTER TABLE `m_mata_kuliah`
  ADD PRIMARY KEY (`kd_matakuliah`),
  ADD KEY `kd_prodi` (`kd_prodi`);

--
-- Indexes for table `m_prodi`
--
ALTER TABLE `m_prodi`
  ADD PRIMARY KEY (`kd_prodi`);

--
-- Indexes for table `m_semester`
--
ALTER TABLE `m_semester`
  ADD PRIMARY KEY (`kd_semester`);

--
-- Indexes for table `t_krs_dosen`
--
ALTER TABLE `t_krs_dosen`
  ADD PRIMARY KEY (`id_krs_dosen`),
  ADD KEY `kd_dosen` (`kd_dosen`);

--
-- Indexes for table `t_krs_mhs`
--
ALTER TABLE `t_krs_mhs`
  ADD PRIMARY KEY (`id_krs_mhs`),
  ADD KEY `kd_matakuliah` (`kd_matakuliah`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kd_prodi` (`kd_prodi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  ADD CONSTRAINT `m_mahasiswa_ibfk_1` FOREIGN KEY (`kd_prodi`) REFERENCES `m_prodi` (`kd_prodi`);

--
-- Ketidakleluasaan untuk tabel `m_mata_kuliah`
--
ALTER TABLE `m_mata_kuliah`
  ADD CONSTRAINT `m_mata_kuliah_ibfk_1` FOREIGN KEY (`kd_prodi`) REFERENCES `m_prodi` (`kd_prodi`);

--
-- Ketidakleluasaan untuk tabel `t_krs_dosen`
--
ALTER TABLE `t_krs_dosen`
  ADD CONSTRAINT `t_krs_dosen_ibfk_1` FOREIGN KEY (`kd_dosen`) REFERENCES `m_dosen` (`kd_dosen`);

--
-- Ketidakleluasaan untuk tabel `t_krs_mhs`
--
ALTER TABLE `t_krs_mhs`
  ADD CONSTRAINT `t_krs_mhs_ibfk_1` FOREIGN KEY (`kd_matakuliah`) REFERENCES `m_mata_kuliah` (`kd_matakuliah`),
  ADD CONSTRAINT `t_krs_mhs_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `m_mahasiswa` (`nim`),
  ADD CONSTRAINT `t_krs_mhs_ibfk_3` FOREIGN KEY (`kd_prodi`) REFERENCES `m_prodi` (`kd_prodi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
