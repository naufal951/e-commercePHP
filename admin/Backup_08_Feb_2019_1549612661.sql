DROP TABLE about;

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO about VALUES("1","ELMA HIJAB adalah sebuah bisnis fashion muslimah yang mengedepankan kualitas terbaik dengan harga terjangkau. Berdiri pada juni tahun 2018, ELMA HIJAB di bangun oleh Desi Zuli Andriyani sebagai Founder dan M.Gilang Feriyanto Putra sebagai CEO. Desi Zuli Andriyani yang memiliki paham bahwa tiap wanita muslimah dapat bergaya dan tetap menjaga nilai-nilai agama.\nMaka dari itu kami mendirikan ELMA HIJAB ini untuk mempermudah para wanita muslimah  untuk mendapatkan hijab yang sesuai syariat islam\nnamun masih tetap bisa tampil modis dan bergaya sesuai fashion masa kini\n\n");



DROP TABLE admin;

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pass` varchar(12) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("138","admin","admin");
INSERT INTO admin VALUES("139","gilang","gilang");



DROP TABLE kontak;

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `alamat_kontak` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO kontak VALUES("1","Desa Santren, Kel. Banaran 62271, Kec Babat , Kab. Lamongan","085733924380","gilangferiyanto92@gmail.com");



DROP TABLE mail;

CREATE TABLE `mail` (
  `id_mail` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subjek` varchar(300) NOT NULL,
  `isi_pesan` text NOT NULL,
  PRIMARY KEY (`id_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE pembelian;

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `tgl_pembeli` date NOT NULL,
  `id_prdk` int(11) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pembelian`),
  UNIQUE KEY `id_prdk` (`id_prdk`),
  CONSTRAINT `fk` FOREIGN KEY (`id_prdk`) REFERENCES `produk` (`id_prdk`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO pembelian VALUES("27","Okta","Gresik","2147483647","2019-02-08","5","1","Belum Terkirim");



DROP TABLE produk;

CREATE TABLE `produk` (
  `id_prdk` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(12) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  PRIMARY KEY (`id_prdk`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO produk VALUES("3","Hijab Beria 1","130000","beria 3.jpg","Size : XL, L, S","0","Hijab Beria");
INSERT INTO produk VALUES("4","Hijab Beria 2","130000","beria.jpg","Size : XL, L, S","0","Hijab Beria");
INSERT INTO produk VALUES("5","Hijab Beria 3","130000","beria 4.jpg","Size : XL, L, S","-1","Hijab Beria");
INSERT INTO produk VALUES("6","Hijab Beria 4","130000","beria 5.jpg","Size : XL, L, S","0","Hijab Beria");
INSERT INTO produk VALUES("7","Hijab Beria 5","130000","beria 2.jpg","Size : XXL, XL, L, S","0","Hijab Beria");
INSERT INTO produk VALUES("8","Hijab Amira 1","130000","amira 1.jpg","Size : XL, L, S","0","Hijab Amira");
INSERT INTO produk VALUES("9","Hijab Amira 2","130000","amira 2.jpg","Size : XL, L, S","0","Hijab Amira");
INSERT INTO produk VALUES("10","Hijab Amira 3","130000","amira 3.jpg","Size : XL, L, S","0","Hijab Amira");
INSERT INTO produk VALUES("11","Hijab Amira 4","130000","amira 4.jpg","Size : XL, L, S","0","Hijab Amira");
INSERT INTO produk VALUES("12","Hijab Amira 5","130000","amira 5.jpg","Size : XL, L, S","0","Hijab Amira");
INSERT INTO produk VALUES("13","Hijab Siera 1","130000","seria 1.jpg","Size : XL, L, S","0","Hijab Siera");
INSERT INTO produk VALUES("14","Hijab Siera 2","130000","seria 2.jpg","Size : XL, L, S","0","Hijab Siera");
INSERT INTO produk VALUES("15","Hijab Siera 3","130000","seria 3.jpg","Size : XL, L, S","0","Hijab Siera");
INSERT INTO produk VALUES("16","Hijab Siera 4","130000","seria 4.jpg","Size : XL, L, S","0","Hijab Siera");
INSERT INTO produk VALUES("17","Hijab Siera 5","130000","seria 5.jpg","Size : XL, L, S","0","Hijab Siera");
INSERT INTO produk VALUES("18","Beria 6","130000","beria 3.jpg","Hijab Bagus","25","Hijab Beria");
INSERT INTO produk VALUES("21","hijab new","1982000","beria 3.jpg","hijab","93","Hijab Beria");
INSERT INTO produk VALUES("22","Hijab 211","130000","siera.jpg","Size : XL, L, S","20","Hijab Siera");



