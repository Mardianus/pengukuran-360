/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_skripsi

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-08-28 13:00:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `data_jawaban`
-- ----------------------------
DROP TABLE IF EXISTS `data_jawaban`;
CREATE TABLE `data_jawaban` (
  `id` int(11) NOT NULL,
  `tgl_jawaban` date DEFAULT NULL,
  `nik` int(12) DEFAULT NULL,
  `kode_jabatan` varchar(5) DEFAULT NULL,
  `kode_matrik_jabatan` varchar(5) DEFAULT NULL,
  `id_soal` int(11) DEFAULT NULL,
  `menilai` int(1) DEFAULT NULL,
  `nip_menilai` int(1) DEFAULT NULL,
  `kode_jawaban` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of data_jawaban
-- ----------------------------

-- ----------------------------
-- Table structure for `jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `kode_jabatan` varchar(10) NOT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  `unit_kerja` varchar(100) DEFAULT NULL,
  `kode_matrik` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES ('jp1', 'junior programer', 'IT', 'IT', 'IT1');
INSERT INTO `jabatan` VALUES ('sp1', 'senior programer', 'IT', 'IT', 'IT2');
INSERT INTO `jabatan` VALUES ('dr1', 'Direktur IT', 'IT', 'IT', 'IT1');

-- ----------------------------
-- Table structure for `kamus_kompetensi`
-- ----------------------------
DROP TABLE IF EXISTS `kamus_kompetensi`;
CREATE TABLE `kamus_kompetensi` (
  `kode_kompetensi` varchar(5) NOT NULL,
  `nama_kompetensi` varchar(100) DEFAULT NULL,
  `defenisi` text,
  `jenis` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kode_kompetensi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kamus_kompetensi
-- ----------------------------
INSERT INTO `kamus_kompetensi` VALUES ('M.01', 'Integritas', 'Konsisten berperilaku selaras dengan nilai, norma\r\ndan/atau etika organisasi, dan jujur dalam\r\nhubungan dengan manajemen', 'Manejerial');
INSERT INTO `kamus_kompetensi` VALUES ('M.02', 'Kerjasama', 'Kemampuan menjalin, membina, mempertahankan hubungan kerja yang efektif, memiliki komitmen saling membantu dalam\r\npenyelesaian tugas', 'Manejerial');
INSERT INTO `kamus_kompetensi` VALUES ('M.03', 'Komunikasi', 'Kemampuan untuk menerangkan pandangan dan\r\ngagasan secara jelas, sistematis disertai\r\nargumentasi yang logis dengan cara-cara yang\r\nsesuai baik secara lisan maupun tertulis;\r\nmemastikan pemahaman', 'Manejerial');
INSERT INTO `kamus_kompetensi` VALUES ('M.04', 'Orientasi pada Hasil', 'Kemampuan mempertahankan komitmen pribadi\r\nyang tinggi untuk menyelesaikan tugas, dapat\r\ndiandalkan, bertanggung jawab, mampu secara\r\nsistimatis mengidentifikasi risiko dan peluang\r\ndengan memperhatikan keterhubungan antara\r\nperencanaan dan hasil', 'Manejerial');
INSERT INTO `kamus_kompetensi` VALUES ('M.05', 'Pelayanan Publik', 'Kemampuan dalam melaksanakan tugas-tugas\r\npemerintahan, pembangunan dan kegiatan\r\npemenuhan kebutuhan pelayanan publik secara\r\nprofesional, transparan, mengikuti standar\r\npelayanan yang objektif, netral, tidak memihak, tidak diskriminatif', 'Manejerial');
INSERT INTO `kamus_kompetensi` VALUES ('M.06', 'Pengembangan diri dan Orang Lain', 'Kemampuan untuk meningkatkan pengetahuan\r\ndan menyempurnakan keterampilan diri;\r\nmenginspirasi orang lain untuk mengembangkan\r\ndan menyempurnakan pengetahuan dan\r\nketerampilan yang relevan dengan pekerjaan dan\r\npengembangan karir jangka panjang', 'Manejerial');

-- ----------------------------
-- Table structure for `kelompok_jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `kelompok_jabatan`;
CREATE TABLE `kelompok_jabatan` (
  `id` int(1) NOT NULL,
  `kelompok` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kelompok_jabatan
-- ----------------------------
INSERT INTO `kelompok_jabatan` VALUES ('1', 'IT');

-- ----------------------------
-- Table structure for `level_jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `level_jabatan`;
CREATE TABLE `level_jabatan` (
  `id` int(1) NOT NULL,
  `level` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of level_jabatan
-- ----------------------------
INSERT INTO `level_jabatan` VALUES ('1', '1');
INSERT INTO `level_jabatan` VALUES ('2', '2');
INSERT INTO `level_jabatan` VALUES ('3', '3');

-- ----------------------------
-- Table structure for `level_kompetensi`
-- ----------------------------
DROP TABLE IF EXISTS `level_kompetensi`;
CREATE TABLE `level_kompetensi` (
  `id` int(11) NOT NULL,
  `kode_kompetensi` varchar(5) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of level_kompetensi
-- ----------------------------
INSERT INTO `level_kompetensi` VALUES ('0', null, null, null);
INSERT INTO `level_kompetensi` VALUES ('1', 'M.01', '1', 'Mampu bertindak');
INSERT INTO `level_kompetensi` VALUES ('2', 'M.01', '2', 'Mampu mengingatkan, mengajak rekan kerja untuk bertindak sesuai nilai, norma, dan etika organisasi');
INSERT INTO `level_kompetensi` VALUES ('3', 'M.01', '3', 'Mampu memastikan, menanamkan keyakinan bersama agar anggota yang dipimpin bertindak sesuai nilai, norma, dan etika organisasi, dalam lingkup formal');
INSERT INTO `level_kompetensi` VALUES ('4', 'M.01', '4', 'Mampu menciptakan situasi kerja yang mendorong kepatuhan pada nilai, norma, dan etika organisasi');
INSERT INTO `level_kompetensi` VALUES ('5', 'M.02', '1', 'Berpartisipasi dalam kelompok kerja');
INSERT INTO `level_kompetensi` VALUES ('6', 'M.02', '2', 'Menumbuhkan tim kerja yang partisipatif dan efektif');
INSERT INTO `level_kompetensi` VALUES ('7', 'M.02', '3', 'Efektif membangun tim kerja untuk peningkatan kinerja organisasi');
INSERT INTO `level_kompetensi` VALUES ('8', 'M.02', '4', 'Membangun komitmen tim, sinergi');
INSERT INTO `level_kompetensi` VALUES ('9', 'M.03', '1', 'Menyampaikan informasi dengan jelas, lengkap, pemahaman yang sama');
INSERT INTO `level_kompetensi` VALUES ('10', 'M.03', '2', 'Aktif menjalankan komunikasi secara formal dan informal; Bersedia mendengarkan orang lain, menginterpretasikan pesan dengan respon yang sesuai, mampu menyusun materi presentasi, pidato, naskah, laporan, dll');
INSERT INTO `level_kompetensi` VALUES ('11', 'M.03', '3', 'Berkomunikasi secara asertif, terampil berkomunikasi lisan atau tertulis untuk menyampaikan informasi yang sensitif atau rumit atau kompleks');
INSERT INTO `level_kompetensi` VALUES ('12', 'M.03', '4', 'Mampu mengemukakan pemikiran multidimensi secara lisan dan tertulis untuk mendorong kesepakatan dengan tujuan meningkatkan kinerja secara keseluruhan');
INSERT INTO `level_kompetensi` VALUES ('14', 'M.04', '2', 'Berupaya meningkatkan hasil kerja pribadi yang lebih tinggi dari standar yang ditetapkan, mencari, mencoba metode alternatif untuk peningkatan kinerja');
INSERT INTO `level_kompetensi` VALUES ('15', 'M.04', '3', 'Menetapkan target kerja yang menantang bagi unit kerja, memberi apresiasi dan teguran untuk mendorong kinerja');
INSERT INTO `level_kompetensi` VALUES ('16', 'M.04', '4', 'Mendorong unit kerja mencapai target yang ditetapkan atau melebihi hasil kerja sebelumnya');
INSERT INTO `level_kompetensi` VALUES ('17', 'M.05', '1', 'Menjalankan tugas mengikuti standar pelayanan.');
INSERT INTO `level_kompetensi` VALUES ('18', 'M.05', '2', 'Mampu mensupervisi atau mengawasi atau menyelia dan menjelaskan proses pelaksanaan tugas tugas pemerintahan atau pelayanan publik secara transparan');
INSERT INTO `level_kompetensi` VALUES ('19', 'M.05', '3', 'Mampu memanfaatkan kekuatan kelompok serta memperbaiki standar pelayanan publik di lingkup unit kerja');
INSERT INTO `level_kompetensi` VALUES ('20', 'M.05', '4', 'Mampu memonitor, mengevaluasi, memperhitungkan dan mengantisipasi dampak dari isu-isu jangka panjang, kesempatan, atau kekuatan politik dalam hal pelayanan kebutuhan pemangku kepentingan yang transparan, objektif, dan profesional');
INSERT INTO `level_kompetensi` VALUES ('21', 'M.06', '1', 'Pengembangan diri');
INSERT INTO `level_kompetensi` VALUES ('22', 'M.06', '2', 'Meningkatkan kemampuan bawahan dengan memberikan contoh dan penjelasan cara melaksanakan suatu pekerjaan');
INSERT INTO `level_kompetensi` VALUES ('23', 'M.06', '3', 'Memberikan umpan balik, membimbing');
INSERT INTO `level_kompetensi` VALUES ('24', 'M.06', '4', 'Menyusun program pengembangan jangka panjang dalam rangka mendorong manajemen pembelajaran');

-- ----------------------------
-- Table structure for `matrik_jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `matrik_jabatan`;
CREATE TABLE `matrik_jabatan` (
  `kode_matrik` varchar(5) NOT NULL,
  `id_level` int(1) DEFAULT NULL,
  `id_kelompok` int(1) DEFAULT NULL,
  PRIMARY KEY (`kode_matrik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of matrik_jabatan
-- ----------------------------
INSERT INTO `matrik_jabatan` VALUES ('IT1', '1', null);
INSERT INTO `matrik_jabatan` VALUES ('IT2', '2', null);

-- ----------------------------
-- Table structure for `pegawai`
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kode_jabatan` varchar(10) DEFAULT NULL,
  `nik_atasan` varchar(10) DEFAULT NULL,
  `status_active` int(11) DEFAULT NULL,
  `syscreateuser` int(11) DEFAULT NULL,
  `syscreatedate` date DEFAULT NULL,
  `sysupdateuser` int(11) DEFAULT NULL,
  `sysupdatedate` date DEFAULT NULL,
  `sysdeleteuser` int(11) DEFAULT NULL COMMENT 'diambil dari session id user login',
  `sysdeletedate` datetime DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES ('1000200930', 'Mardianus Efendy', 'dr1', null, null, null, null, null, null, null, null);
INSERT INTO `pegawai` VALUES ('1000200931', 'Ageng Muhammad', 'jp1', null, null, null, null, null, null, null, null);
INSERT INTO `pegawai` VALUES ('1000200933', 'Horat Tampubolon', 'sp1', null, null, null, null, null, null, null, null);
INSERT INTO `pegawai` VALUES ('1000200935', 'Priambodo Sinambela', 'sp1', null, null, null, null, null, null, null, null);
INSERT INTO `pegawai` VALUES ('1000200938', 'Firman Sahabat', 'jp1', null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `standar_kompetensi`
-- ----------------------------
DROP TABLE IF EXISTS `standar_kompetensi`;
CREATE TABLE `standar_kompetensi` (
  `id` int(11) NOT NULL,
  `kode_jabatan` varchar(5) DEFAULT NULL,
  `kode_kompetensi` varchar(5) DEFAULT NULL,
  `level` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of standar_kompetensi
-- ----------------------------
INSERT INTO `standar_kompetensi` VALUES ('1', 'jp1', 'M.01', '3');

-- ----------------------------
-- Table structure for `tab_jawaban`
-- ----------------------------
DROP TABLE IF EXISTS `tab_jawaban`;
CREATE TABLE `tab_jawaban` (
  `id` int(11) NOT NULL,
  `id_soal` int(11) DEFAULT NULL,
  `kd_jawaban` varchar(5) DEFAULT NULL,
  `jawaban_ds` text,
  `jawaban_bds` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_jawaban
-- ----------------------------
INSERT INTO `tab_jawaban` VALUES ('0', null, 'a', null, null);
INSERT INTO `tab_jawaban` VALUES ('2', null, 'b', null, null);
INSERT INTO `tab_jawaban` VALUES ('3', null, 'c', null, null);
INSERT INTO `tab_jawaban` VALUES ('4', null, 'd', null, null);

-- ----------------------------
-- Table structure for `tab_level_user`
-- ----------------------------
DROP TABLE IF EXISTS `tab_level_user`;
CREATE TABLE `tab_level_user` (
  `id` int(11) NOT NULL,
  `level` varchar(10) DEFAULT NULL,
  `authority` varchar(20) DEFAULT NULL,
  `user_insert` varchar(10) DEFAULT NULL,
  `tgl_insert` datetime DEFAULT NULL,
  `user_update` varchar(10) DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_level_user
-- ----------------------------

-- ----------------------------
-- Table structure for `tab_soal`
-- ----------------------------
DROP TABLE IF EXISTS `tab_soal`;
CREATE TABLE `tab_soal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kompetensi` varchar(5) DEFAULT NULL,
  `kode_matrik_jabatan` varchar(5) DEFAULT NULL,
  `soal_ds` text,
  `soal_bds` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_soal
-- ----------------------------
INSERT INTO `tab_soal` VALUES ('1', 'M.01', null, 'menurut anda apakah anda sudah intregitas', 'menurut anda apakah pegawai tersebut sudah intregitas');
INSERT INTO `tab_soal` VALUES ('2', 'M.02', null, 'menurut anda apakah anda sudah bisa berkerja sama dengan pegawai lain ', 'menurut anda apakah pegawai tersebut sudah bisa berkerja sama dengan pegawai lain ');
INSERT INTO `tab_soal` VALUES ('3', 'M.03', null, 'menurut anda apakah anda sudah dengan baik berkomunikasi dengan pegawai lain', 'menurut anda apakah pegawai tersebut sudah dengan baik berkomunikasi dengan pegawai lain');
INSERT INTO `tab_soal` VALUES ('4', 'M.04', null, 'menurut anda apakah mempertahankan komitmen pribadi yang tinggi untuk menyelesaikan tugas', 'menurut anda apakah pegawai tersebut sudah mempertahankan komitmen pribadi yang tinggi untuk menyelesaikan tugas');
INSERT INTO `tab_soal` VALUES ('5', 'M.05', null, 'menurut anda apakah anda sudah melakukan pelayanan publik dengan baik dan sesuai aturan', 'menurut anda apakah pegawai tersebut sudah melakukan pelayanan publik dengan baik dan sesuai aturan');

-- ----------------------------
-- Table structure for `tab_user`
-- ----------------------------
DROP TABLE IF EXISTS `tab_user`;
CREATE TABLE `tab_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emp` varchar(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `isadmin` int(1) DEFAULT NULL COMMENT '1. admin\r\n2. pegawai\r\n3. penilai',
  `last_login` datetime DEFAULT NULL,
  `user_insert` varchar(10) DEFAULT NULL,
  `tgl_insert` datetime DEFAULT NULL,
  `user_update` varchar(10) DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_user
-- ----------------------------
INSERT INTO `tab_user` VALUES ('1', 'bodo', '0032a598e52fc6f3eb3dd7b886490570', '1', '2019-08-27 11:32:59', null, null, null, null);
INSERT INTO `tab_user` VALUES ('2', 'begeng', '0032a598e52fc6f3eb3dd7b886490570', '2', null, null, null, null, null);
INSERT INTO `tab_user` VALUES ('3', 'malih', '0032a598e52fc6f3eb3dd7b886490570', '3', null, null, null, null, null);
