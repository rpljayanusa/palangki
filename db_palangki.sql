-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2021 pada 15.01
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_palangki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE `bahan` (
  `kode_bahan` int(11) NOT NULL,
  `nama_bahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`kode_bahan`, `nama_bahan`) VALUES
(1, 'cotton'),
(2, 'wol'),
(3, 'baru banget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kode_pembayaran` int(11) NOT NULL,
  `kode_pesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `status` enum('lunas','belum lunas') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`kode_pembayaran`, `kode_pesanan`, `nama_pemesan`, `status`, `tanggal`) VALUES
(8, 26, 'pelanggan', 'lunas', '2021-07-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pesanan` int(11) NOT NULL,
  `kode_produk` int(11) NOT NULL,
  `kode_bahan` int(11) NOT NULL,
  `jumlah_pesanan` int(10) NOT NULL,
  `ukuran` varchar(225) NOT NULL,
  `harga` int(10) NOT NULL,
  `total_harga` int(10) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pesanan`, `kode_produk`, `kode_bahan`, `jumlah_pesanan`, `ukuran`, `harga`, `total_harga`, `gambar`) VALUES
(26, 1, 1, 5, 's', 10000, 50000, '1.png'),
(27, 2, 1, 10, 'm', 20000, 200000, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `kode_pengguna` int(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `jenis_pengguna` enum('admin','pemilik','pelanggan','gudang') NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `password` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`kode_pengguna`, `nama_pengguna`, `jenis_pengguna`, `alamat`, `kode_pos`, `password`) VALUES
(1, 'admin', 'admin', 'padang', 0, '21232f297a57a5a743894a0e4a801fc3'),
(2, 'gudang', 'gudang', 'padang', 123, '202446dd1d6028084426867365b0c7a1'),
(3, 'pemilik', 'pemilik', 'padang', 123, '58399557dae3c60e23c78606771dfa3d'),
(4, 'wanda', 'pelanggan', 'padang panjang', 123, '5d0aecec3cbbf1da2ec93b114db636c2'),
(5, 'bebas', 'pelanggan', 'padang', 123, '55068633833f96992f430cb156bb08dd'),
(6, 'pelanggan', 'pelanggan', 'padang', 123, '7f78f06d2d1262a0a222ca9834b15d9d');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jenis_produk` varchar(255) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `jumlah_produk` int(11) UNSIGNED NOT NULL,
  `harga_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `jenis_produk`, `gambar_produk`, `jumlah_produk`, `harga_produk`) VALUES
(1, 'jaket adidas', 'jaket', 'jaket-adidas.jpg', 5, 10000),
(2, 'tidak diketahui', 'celana', '92c262353452aea97f15465808857530.jpg', 10, 20000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`kode_bahan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kode_pembayaran`),
  ADD KEY `kode_pesanan` (`kode_pesanan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `kode_bahan` (`kode_bahan`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`kode_pengguna`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan`
--
ALTER TABLE `bahan`
  MODIFY `kode_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `kode_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `kode_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `kode_pengguna` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `kode_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`kode_pesanan`) REFERENCES `pemesanan` (`kode_pesanan`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`kode_bahan`) REFERENCES `bahan` (`kode_bahan`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
