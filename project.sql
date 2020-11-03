/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : project

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2018-08-23 21:56:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `artikel`
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `images` varchar(255) NOT NULL,
  `pengujung` varchar(255) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES ('11', '2', 'Memberi makan anak kucing dengan benar', 'Admin', '<p><strong>Diet yang tepat</strong></p>\r\n<p>Karena pertumbuhan anak kucing sangat cepat, ia harus diberi makan diet khusus yang memenuhi semua persyaratan penting dalam rangka untuk memperkuat pertahanan kekebalan tubuhnya, mempromosikan perkembangan syaraf dan sensornya dan memfasilitasi pertumbuhan tulangnya.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Anak kucing sebelum umur 4 bulan</strong></p>\r\n<p>Sejak lahir, ketika anak kucing yang baru lahir diberi makan susu kolostrum ibunya, sampai sekitar umur 5 minggu, anak kucing hanya mengkonsumsi susu induknya (diet lacteal). Penyapihan harus dilakukan&nbsp; bertahap mulai minggu ke-7, berpindah ke diet yang solid, yang memenuhi semua kebutuhannya. Pada tahap ini system pertahanan tubuh anak kucing mulai berkembang.&nbsp;</p>\r\n<p>Makanan anak kucing harus mengandung nutrisi berenergi tinggi, lengkap dan seimbang, mengandung protein, lemak, karbohidrat, mineral, vitamin dan mineral mikro dan juga sesuai kebutuhan anak kucing.</p>\r\n<p>&nbsp;</p>\r\n<p>Meskipun kucing adalah karnivora sejati, makanannya mungkin mengandung nutrisi&nbsp; biji-bijian (grain) berkualitas tinggi, sehingga mudah dicerna dan tidak menyebabkan diare. Seperti itu, kemampuan untuk mencerna pati gandum berkembang secara progresif di anak kucing itu. Grain mengandung banyak asam amino esensial untuk pertumbuhan, yang kemudian akan ditambahkan taurin yang berasal dari hewan. Taurin mutlak&nbsp; diperlukan oleh spesies kucing.</p>\r\n<p>&nbsp;</p>\r\n<p>Makanan juga harus mengandung semua mineral dan vitamin yang dibutuhkan untuk perkembangan tulang. Isinya dapat diperkaya dengan sejumlah nutrisi yang mendukung pertahanan alami dan dengan EPA dan DHA untuk perkembangan terbaik dari sistem saraf pusat. Jika anda tidak ingin anak kucing makan satu jenis makanan, anda bisa memberikan makanna basah dan kering. Yang penting adalah memilih makanan Kesehatan yang cocok dengan kebutuhan gizi anak kucing dan secara bertahap melakukan transisi dari makanan cair ke makanan padat.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Anak kucing setelah umur 4 bulan</strong></p>\r\n<p>Selama pertumbuhan tahap 2 ini, diet anak kucing harus terus mendukung sistem kekebalan tubuh&nbsp; alaminya. Struktur tulang secara bertahap menjadi lebih kuat dan massa otot nya berkembang. Kebutuhan energinya meningkat dan harus tetap diperhatikan sampai umur ke-4 - 5 di mana mereka mencapai puncak pertumbuhan. Setelah itu laju pertumbuhan menurun secara bertahap. Makanannya pun harus selalu sesuai dengan perubahan kebutuhan pertumbuhan.</p>\r\n<p>&nbsp;</p>\r\n<p>Anak kucing bisa makan nutrisi kesehatan Royal Canin untuk pertumbuhan tahap 2, mulai umur 4 bulan hingga akhir masa pertumbuhan, sekitar umur 1 tahun.&nbsp; Sebaiknya tetap melakukan transisi bertahap perubahan makanan,&nbsp; selama beberapa hari,&nbsp; dari tahap 1 ke tahap 2.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Untuk mencegah kelebihan berat badan, setelah bulan keenam, perlu juga mengendalikan jumlah makanan yang disediakan untuk anak kucing, karena mungkin saja anak makan terlalu banyak. Menimbang berat makanan harian ternyata menjadi solusi yang paling tepat, rekomendasi jumlah makanan tertera pada kemasan. Air segar, di ganti dua kali sehari, harus selalu tersedia bagi anak kucing.</p>', '2018-05-08', '03:32:49', '03_29_59_2018_05_08_Memberi_makan_anak_kucing_dengan_benar.jpg', '2');
INSERT INTO `artikel` VALUES ('12', '3', 'tes', 'tes', '<p>tes posting</p>', '2018-05-13', '01:40:04', '05_53_24_2018_05_08_tes.jpg', '2');

-- ----------------------------
-- Table structure for `det_nilai`
-- ----------------------------
DROP TABLE IF EXISTS `det_nilai`;
CREATE TABLE `det_nilai` (
  `id_detnilai` int(11) NOT NULL AUTO_INCREMENT,
  `nilai` varchar(100) NOT NULL,
  PRIMARY KEY (`id_detnilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of det_nilai
-- ----------------------------

-- ----------------------------
-- Table structure for `kategori`
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'Informasi');
INSERT INTO `kategori` VALUES ('2', 'Promo');
INSERT INTO `kategori` VALUES ('3', 'Kegiatan');

-- ----------------------------
-- Table structure for `kontak`
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `isi` longtext NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kontak
-- ----------------------------
INSERT INTO `kontak` VALUES ('2', 'Rendy Permana', 'rendypermana153@mail.com', 'http://oligardan.blogspot.co.id', 'wah websitenya bagus');
INSERT INTO `kontak` VALUES ('4', 'Ustadz Rojikin', 'rojikin666metalhead@gmail.com', 'http://metalheadbang.com', 'luar biasa metal');
INSERT INTO `kontak` VALUES ('7', 'Muhammad', 'muhammad@gmail.com', 'http://muhammad.com', 'assalamualaikum');
INSERT INTO `kontak` VALUES ('10', 'tes', 'tes@gmail.com', 'http://tes.com', 'tes');

-- ----------------------------
-- Table structure for `kuesioner`
-- ----------------------------
DROP TABLE IF EXISTS `kuesioner`;
CREATE TABLE `kuesioner` (
  `id_kuesioner` int(15) NOT NULL AUTO_INCREMENT,
  `id_pertanyaan` int(15) DEFAULT NULL,
  `nilai` int(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kuesioner`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kuesioner
-- ----------------------------
INSERT INTO `kuesioner` VALUES ('1', '1', '5', null, null);
INSERT INTO `kuesioner` VALUES ('2', '2', '5', null, null);
INSERT INTO `kuesioner` VALUES ('3', '3', '4', null, null);
INSERT INTO `kuesioner` VALUES ('4', '1', '5', null, null);
INSERT INTO `kuesioner` VALUES ('5', '2', '5', null, null);
INSERT INTO `kuesioner` VALUES ('6', '3', '4', null, null);
INSERT INTO `kuesioner` VALUES ('7', '1', '5', null, null);
INSERT INTO `kuesioner` VALUES ('8', '2', '5', null, null);
INSERT INTO `kuesioner` VALUES ('9', '3', '4', null, null);
INSERT INTO `kuesioner` VALUES ('10', '1', '1', null, null);
INSERT INTO `kuesioner` VALUES ('11', '2', '1', null, null);
INSERT INTO `kuesioner` VALUES ('12', '3', '1', null, null);
INSERT INTO `kuesioner` VALUES ('13', '1', '2', null, null);
INSERT INTO `kuesioner` VALUES ('14', '2', '2', null, null);
INSERT INTO `kuesioner` VALUES ('15', '3', '2', null, null);
INSERT INTO `kuesioner` VALUES ('16', '1', '3', '2018-08-23', 'adhityariezki@gmail.com');
INSERT INTO `kuesioner` VALUES ('17', '2', '3', '2018-08-23', 'adhityariezki@gmail.com');
INSERT INTO `kuesioner` VALUES ('18', '3', '3', '2018-08-23', 'adhityariezki@gmail.com');
INSERT INTO `kuesioner` VALUES ('19', '1', '5', '2018-08-13', 'adhityariezky@gmail.com');
INSERT INTO `kuesioner` VALUES ('20', '2', '3', '2018-08-13', 'adhityariezky@gmail.com');
INSERT INTO `kuesioner` VALUES ('21', '3', '5', '2018-08-13', 'adhityariezky@gmail.com');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `men_menu_id` int(11) DEFAULT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_link` varchar(100) NOT NULL,
  `menu_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`menu_id`),
  KEY `fk_parent_id` (`men_menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', null, 'Dashboard', '', '1');
INSERT INTO `menu` VALUES ('2', null, 'Kategori Informasi', 'kategori', '1');
INSERT INTO `menu` VALUES ('4', null, 'Informasi', 'artikel', '1');
INSERT INTO `menu` VALUES ('5', null, 'Kelola User', 'user', '1');
INSERT INTO `menu` VALUES ('6', null, 'Kelola Pelanggan', 'pelanggan', '1');
INSERT INTO `menu` VALUES ('7', null, 'Kelola Pertanyaan', 'pertanyaan', '1');
INSERT INTO `menu` VALUES ('8', null, 'SMS Gateway', 'sms', '1');
INSERT INTO `menu` VALUES ('9', null, 'Grafik Pengunjung', 'grafik', '1');
INSERT INTO `menu` VALUES ('10', null, 'Menu', 'menu', '1');
INSERT INTO `menu` VALUES ('11', null, 'Role', 'role', '1');
INSERT INTO `menu` VALUES ('12', null, 'Grafik Kuesioner', 'grafikkuesioner', '1');

-- ----------------------------
-- Table structure for `menu_role`
-- ----------------------------
DROP TABLE IF EXISTS `menu_role`;
CREATE TABLE `menu_role` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `CREATED_ON` datetime DEFAULT NULL,
  `id_user` int(15) DEFAULT NULL,
  `CREATED_BY` int(11) DEFAULT NULL,
  `UPDATED_ON` datetime DEFAULT NULL,
  `IS_DELETED` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`role_id`,`menu_id`),
  KEY `fk_menu_role2` (`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu_role
-- ----------------------------
INSERT INTO `menu_role` VALUES ('1', '12', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('1', '11', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('10', '1', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('10', '2', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('1', '10', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('1', '9', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('1', '8', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('1', '7', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('1', '6', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('1', '5', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('1', '4', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('1', '2', null, null, null, null, null);
INSERT INTO `menu_role` VALUES ('1', '1', null, null, null, null, null);

-- ----------------------------
-- Table structure for `nilai`
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_detnilai` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nilai
-- ----------------------------

-- ----------------------------
-- Table structure for `pelanggan`
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nama_pet` varchar(255) NOT NULL,
  `jenis_pet` varchar(50) NOT NULL,
  `umur_pet` varchar(10) NOT NULL,
  `jk_pet` varchar(25) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('6', 'dfgdfg', 'dfdsf@mail.com', '09876543', 'lkjhhgfff', 'kjh', 'Anjing', '6', 'Jantan', 'gfh', '2018-07-04');
INSERT INTO `pelanggan` VALUES ('7', 'pelanggan', 'asd@mail.com', '123456789', 'asadf', 'dsa', 'Anjing', '5', 'Jantan', 'flu', '2018-07-26');
INSERT INTO `pelanggan` VALUES ('8', 'asdf', 'asd@mail.com', '098765422', 'hgkhgddd', 'tghfh', 'Anjing', '7', 'Jantan', 'obesitas', '2018-07-19');
INSERT INTO `pelanggan` VALUES ('9', 'asdf', 'asd@mail.com', '123123', 'hgkhgddd', 'asu', 'Anjing', '8', 'Jantan', '', '2018-08-01');
INSERT INTO `pelanggan` VALUES ('10', 'adhitya', 'adhityariezky@gmail.com', '083820376631', 'asdf', 'asdf', 'Anjing', '2', 'Jantan', 'rabies', '2018-08-01');

-- ----------------------------
-- Table structure for `penilaian`
-- ----------------------------
DROP TABLE IF EXISTS `penilaian`;
CREATE TABLE `penilaian` (
  `id_penilaian` int(15) NOT NULL DEFAULT '0',
  `nilai` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_penilaian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penilaian
-- ----------------------------
INSERT INTO `penilaian` VALUES ('1', 'Tidak Puas');
INSERT INTO `penilaian` VALUES ('2', 'Kurang Puas');
INSERT INTO `penilaian` VALUES ('3', 'Biasa Saja');
INSERT INTO `penilaian` VALUES ('4', 'Puas');
INSERT INTO `penilaian` VALUES ('5', 'Sangat Puas');

-- ----------------------------
-- Table structure for `pertanyaan`
-- ----------------------------
DROP TABLE IF EXISTS `pertanyaan`;
CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` text NOT NULL,
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pertanyaan
-- ----------------------------
INSERT INTO `pertanyaan` VALUES ('1', '<p>tes posting pertanyaan</p>');
INSERT INTO `pertanyaan` VALUES ('2', '<p>pertanyaan</p>');
INSERT INTO `pertanyaan` VALUES ('3', '<p>fgfgfgfgfg</p>');

-- ----------------------------
-- Table structure for `role`
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(100) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', 'admin');
INSERT INTO `role` VALUES ('2', 'petugas');
INSERT INTO `role` VALUES ('3', 'pimpinan');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', '1', 'admin', 'ekkalk@ymail.com', '65787', 'bandung\r\n', 'admin', '21232f297a57a5a743894a0e4a801fc3', '07_40_20_2018_05_30_eka.jpg');
INSERT INTO `user` VALUES ('3', '0', 'rangga', 'ggh@ymail.com', '83273762377651', 'ahjhdabdba', 'petugas', '202cb962ac59075b964b07152d234b70', '04_14_56_2018_05_29_rangga.jpg');
INSERT INTO `user` VALUES ('4', '2', 'aadc', 'rivaldi.palermo11@gmail.com', '83273762377651', 'jsjknks', 'petugas', '202cb962ac59075b964b07152d234b70', '04_18_49_2018_05_29_aadc.jpg');
INSERT INTO `user` VALUES ('5', '3', 'taryana', 'kangsendy@ymail.com', '83273762377651', 'ejwjdjkn', 'pimpinan', '250cf8b51c773f3f8dc8b4be867a9a02', '04_20_16_2018_05_29_taryana.jpg');
INSERT INTO `user` VALUES ('6', '3', 'pimpinan', 'asd@mail.com', '1234567890', 'asadsada', 'pimpinan', '202cb962ac59075b964b07152d234b70', '04_21_10_2018_06_02_pimpinan.jpg');
INSERT INTO `user` VALUES ('7', '1', 'admin3', 'admin3@mail.com', '1234567890', 'asdsffg', 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', '02_00_21_2018_06_06_admin3.jpg');
