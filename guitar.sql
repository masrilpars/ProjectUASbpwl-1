-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 14 Des 2015 pada 10.02
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `guitar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `Kode_Sepatu` varchar(30) NOT NULL,
  `Nama_Sepatu` varchar(30) NOT NULL,
  `Merk_Sepatu` varchar(30) NOT NULL,
  `Ukuran_Sepatu` varchar(30) NOT NULL,
  `Harga` int(30) NOT NULL,
  `Stok` int(30) NOT NULL,
  `Gambar_Sepatu` text NOT NULL,
  PRIMARY KEY (`Kode_Sepatu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`Kode_Sepatu`, `Nama_Sepatu`, `Merk_Sepatu`, `Ukuran_Sepatu`, `Harga`, `Stok`, `Gambar_Sepatu`) VALUES
('V01', 'Nike Lebron 11', 'Nike', '44 - 48', 800000, 50, 'Nie Lebron 11 (1).jpg'),
('V02', 'Nike Air Zoom Huarache', 'Nike', '44 - 48', 750000, 50, 'Nike Air Zoom Huarache.jpg'),
('V03', 'Nike Lebron 11 Elite', 'Nike', '44 - 48', 750000, 50, 'Nike Lebron 11 Elite1.jpeg'),
('V04', 'Nike Air Max Flyknit Multicolo', 'Nike', '39 - 42', 350000, 50, 'Nike AirMax Flyknit Multicolor.jpg'),
('V05', 'Nike Air Max Flyknit Vivid Blu', 'Nike', '39 - 42', 350000, 50, 'Nike AirMax Flyknit Vivid Blue.jpg'),
('V06', 'Nike Running Presto', 'Nike', '40 - 44', 500000, 50, 'Nike Running Presto (1).jpg'),
('V07', 'New Balance Frapbois', 'New Balance', '39 - 44', 450000, 50, 'New Balance Frapbois.jpg'),
('V08', 'Black Sabbath Shot1', 'Converse', '35 -40', 200000, 50, 'Black Sabbath Shot1.jpg'),
('V09', 'Black Sabbath Shot2', 'Converse', '35 - 40', 200000, 50, 'Black Sabbath Shot2.jpg'),
('V10', 'Converse Batman', 'Converse', '35 - 40', 200000, 50, 'Converse Batman.jpg'),
('V11', 'Converse Chuck Taylor Volt', 'Converse', '35 - 40', 150000, 50, 'Converse Chuck Taylor Volt.jpg'),
('V12', 'Reebok Classic Nylon', 'Reebok', '39 - 42', 450000, 50, 'Sepatu_Reebok_Classic_Nylon.jpg'),
('V13', 'Reebok Classic', 'Reebok', '39 - 42', 400000, 50, 'reebok classic.jpg'),
('V14', 'Reebok GLN 6000', 'Reebok', '39 - 42', 350000, 50, 'reebok gln 6000.jpg'),
('V15', '574 Stadium Jacket Pack', 'New Balance', '35 - 40', 250000, 50, '574 Stadium Jacket Pack.jpg'),
('V16', '574 Encap Women Soft Color', 'New Balance', '35 -  40', 250000, 50, '574 Encap Women Soft Color.jpg'),
('V17', 'Adidas Original', 'Adidas', '35 - 42', 475000, 50, 'adidas-originals-c-10-00.jpg'),
('V18', 'Puma Rider', 'Puma', '35 - 40', 275000, 50, 'p3.jpg'),
('V19', 'Nike Zoom Kobe VII', 'NIke', '40 - 44', 675000, 50, 'Nike Zoom Kobe VII.jpg'),
('V20', 'Vans Era', 'Vans', '40 - 44', 150000, 50, 'Vans_ERA_40-44_150rb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `ID_Pelanggan` int(30) NOT NULL AUTO_INCREMENT,
  `Nama_Pelanggan` varchar(30) NOT NULL,
  `NO_HP` int(20) NOT NULL,
  `Kode_Pos` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_Pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123457 ;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`ID_Pelanggan`, `Nama_Pelanggan`, `NO_HP`, `Kode_Pos`, `Alamat`, `Password`, `Status`) VALUES
(1, 'Vira', 2147483647, '123', 'BTL', '123', 'Atasan'),
(2, 'Novira', 2147483647, '132435', 'BTL', '123', 'Admin'),
(3, 'Irwanita', 2147483647, '12345', 'BTL', '123', 'Pelanggan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `Kode_Pemesan` int(30) NOT NULL AUTO_INCREMENT,
  `Nama_Pemesan` varchar(30) NOT NULL,
  `Kode_Sepatu` varchar(30) NOT NULL,
  `Merk_Sepatu` varchar(30) NOT NULL,
  `Ukuran_Sepatu` varchar(30) NOT NULL,
  `Harga` int(30) NOT NULL,
  `Banyak_Pesanan` varchar(30) NOT NULL,
  PRIMARY KEY (`Kode_Pemesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Trigger `pemesanan`
--
DROP TRIGGER IF EXISTS `tb_pesan`;
DELIMITER //
CREATE TRIGGER `tb_pesan` AFTER INSERT ON `pemesanan`
 FOR EACH ROW begin
update barang
set Stok = Stok - NEW.Banyak_Pesanan
where
Kode_Sepatu = NEW.Kode_Sepatu;
end
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
