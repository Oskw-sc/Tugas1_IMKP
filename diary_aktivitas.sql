-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 12:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labimk`
--

-- --------------------------------------------------------

--
-- Table structure for table `diary_aktivitas`
--

CREATE TABLE `diary_aktivitas` (
  `id` int(11) NOT NULL,
  `author` varchar(30) NOT NULL,
  `date_add` date NOT NULL,
  `date_update` date DEFAULT NULL,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diary_aktivitas`
--

INSERT INTO `diary_aktivitas` (`id`, `author`, `date_add`, `date_update`, `title`, `content`) VALUES
(2, 'Willioms Sanjaya', '2020-11-23', NULL, 'Pengalaman Naik Pesawat', 'Annyeong hasseyo, halo semua! Ini adalah tulisan pertamaku di blog. Udah lama pengen bikin blog, tapi baru kesampaian awal 2016 ini. Hehe... Kali ini aku mau menceritakan pengalaman pertamaku naik pesawat terbang. Berhubung ini tulisan pertamaku, mohon maaf ya kalo tulisannya masih amburadul. Heheh...\r\n\r\nLangsung aja ceritanya nggak pake lama. Naik pesawat? Hmmm... Sebagian orang pasti punya impian suatu saat pengen naik pesawat, nggak terkecuali aku sih (siapa yang nanya?). Haha... Naik pesawat sekarang bukanlah sesuatu yang mustahil lagi; harga tiket pesawat yang cukup murah saat ini membuat siapa saja bisa terbang dengan pesawat. Apalagi sekarang banyak bermunculan maskapai berbiaya murah atau low cost carrier, seperti Air Asia, Lion Air, dan Citilink. Udah lama aku memimpikan pengen naik pesawat, dan Puji Tuhan, impian naik pesawat akhirnya terwujud di penghujung tahun 2015. \r\n'),
(7, 'Hendry Winata', '2020-11-23', NULL, 'Pengalaman Belanja Online', 'Belanja online! Rasanya di zaman serba digital sekarang ini konsep belanja secara online sudah tidak asing lagi di telinga kita. Konsepnya yang mudah dan dapat diakses dari mana saja, membuat belanja online muncul sebagai gaya hidup belanja masyarakat modern, terutama masyarakat perkotaan yang nyaris tidak memiliki waktu luang untuk melakukan hal-hal tersebut.  Secara angka, peningkatan jumlah pengguna internet nyaris selalu naik dari tahun ke tahun, kemudahan mengakses internet lewat handphone atau smartphone juga menyumbang perilaku belanja dengan konsep online semakin menunjukkan peningkatan. Sebagai bagian dari hirup pikuk dunia digital, saya pun telah beberapa kali belanja dengan konsep online ini untuk beberapa kebutuhan.'),
(8, 'Jefry Lianto', '2020-11-23', NULL, 'Pengalaman Belajar Dirumah', 'Bosan?betek, karena harus belajar di rumah karena tidak bisa bercanda dengan teman - teman yang selalu membuatku bahagia dengan tanda tawa mereka yang sangat lucu .\r\n\r\nBelajar di rumah membuatku bete dan kecewa karena harus diam di rumah saja dan tidak boleh berpergian jauh karena virus covid-19 sekarang sangat merajalela.\r\n\r\nBelajar di rumah membuatku bosan karena tugas - tugas yang sangat banyak dan tugas itu pun tidak pernah habis setiap hari pasti ada tugas. Apakah libur ini masih panjang untukku masuk ke madrasah MTsN 8 Kediri, dan aku rindu dengan teman - teman.'),
(9, 'Dolok Malau', '2020-11-23', NULL, 'Pengalaman Sewa Apartment Hari', 'Pertama kali saya menginap di apartemen harian adalah saat Gayatri, anak saya, berusia 6 bulan. Pas banget baru-barunya dia MPASI, hihihi. Jadi concern saya selain kenyamanan, harga dan lokasi, ketersediaan kitchenette di apartemen juga jadi keunggulan.\r\n\r\nMemang kamarnya tidak mewah, tapi ada dapuuur mini yang tersedia kompor dan juga panci. Dekat dengan Giant dan Superindo juga, jadi kalau anak saya ngadat makan MPASI berfortifikasi dalam kemasan, saya gampang ngacirnya buat bikin MPASI homemade.\r\n\r\nFoto di atas adalah foto kami makan siang di tepi kolam renang apartemen. Kebetulan di sana ada kantin yang menu Gado-Gado Surabayanya enaaaaak banget.\r\n\r\nOiya fasilitas kolam renang dan juga gym bisa dipakai bebas. Dan yang pasti ini muraaaaaaah, tapi memenuhi kebutuhan dasar kami. Kurang lebih dulu biayanya sekitar Rp 200 ribuan per malam.'),
(15, 'SUWARDI WEANIND', '2020-11-23', NULL, 'Cerita Tentang Diary Pertama', 'Coretan pertama tertanggal 7 April 1989 (Jumat) – 1 Ramadhan 1409 H, tentang perjalanan pertamanya 25 Maret 1989 ke Jakarta dengan naik kereta api, tetapi kembalinya dengan pesawat terbang. Inilah yang mengawali diary itu dan ini pula pertama kali pengalaman naik pesawat terbang.\r\n\r\nSebenarnya sebelumnya juga punya diary, tetapi entah dimana dicari belum ketemu, termasuk album kenangan yang berisi alamat teman-teman semasa sekolah di MTs Negeri Boyolali dan semasa sekolah di SMA Swasta Ibu Kartini Semarang.\r\n\r\nYa sudah yang tidak ketemu biarlah bukunya…. beberapa kisah tetap masih teringat, karena sering pindah tempat tinggal memang resikonya seperti itu.\r\n\r\nsource : suwardiwea.blog'),
(16, 'Ryan Shindu', '2020-11-23', NULL, 'Pengalaman Unik di SD', 'Nama saya Ryan Shindu Pradana, biasanya teman – teman saya memanggil dengan nama Ryan atau Shindu, tapi lebih banyak yang memanggil dengan nama Ryan, nama Shindu biasanya dipakai ketika ada teman saya yang memiliki nama yang sama, jadi untuk membedakan yang mana orangnya saya selalu mengalah dengan menggunakan nama Shindu, dan itu terjadi ketika saya di sekolah Menengah Atas (SMA).  Saya memiliki sebuah pengalaman yang cukup unik yang dialami ketika saya menjalani proses pendidikan di Sekolah Dasar. Sebelumnya, saya akan menceritakan mengenai pekerjaan orang tua saya karena ini sangat berhubungan dengan apa yang akan saya ceritakan. Ayah saya bekerja di sebuah perusahaan perkebunan BUMN, dan ibu saya hanya senagai ibu rumah tangga. Karena pekerjaan Ayah saya tersebut, sehingga dia selau bekerja tidak menetap di satu tempat dan selalu berpindah dari satu tempat ke tampat lainnya. Dan itu berdampak kepada anak-anaknya, sebagai anak yang berbakti kepada orang tua maka saya harus mengikuti kepada ayah saya ditempatkan untuk bekerja.  \r\n'),
(17, 'Ryan Shindu', '2020-11-23', NULL, 'Pengalaman Unik di SD Part 2', 'Waktu saya di sekolah dasar, nama saya tercatat di empat sekolah dasar yang berbeda, itu karena Ayah saya selalu berpindah tempat bekerja dan saya selalu mengukutinya. Waktu saya duduk di kelas 1 di sebuah sekolah dasar di daerah Ciemas Jawa Barat, saya hanya bertahan satau tahun di daerah tersebut, selanjutnya Ayah saya berpindah tempat bekerja lagi di daerah Pasir Badak, Pelabuhan Ratu jawa barat. Mau tidak mau, suka tidak suka saya juga harus mengikuti kemanapun Ayah saya pergi, padalah untuk saya beradaptasi dengan lingkungan dan juga untuk mendapatkan teman tidak mudah. Saya mencoba untuk beradapatasi kembali dengan lingkungan baru dan mulai berhasil menyesuaikan diri dan berhasil juga memiliki banyak teman, dan waktu itu saya ditunjuk menjadi perwakilan dari sekolah untuk mengikuti suatu perlombaan tingkat kabupaten, tapi sayangnya itu semua gagal karena lagi – lagi ayah saya dipindah tugaskan dan saya juga harus merelakan kesempatan dan rencana yang sudah dibentuk tidak bisa dilaksanakan.'),
(18, 'Khaira Hertanto', '2020-11-23', NULL, 'Perjalananku Masuk Kedinasan', 'Mungkin sudah banyak pembaca yang tahu apa itu PKN STAN.\r\n\r\nPoliteknik Keuangan Negara STAN disingkat PKN STAN dahulunya bernama Sekolah Tinggi Akuntansi Negara (STAN) adalah salah satu Perguruan Tinggi Vokasi di bawah naungan Kementerian Keuangan RI yang kurikulumnya disusun untuk mencetak para ahli keuangan negara. Apakah PKN STAN masih ikatan dinas? Jawabannya, Ya, masih. Masa kuliah gratis tidak ikatan dinas? Negara rugi, dong.\r\n\r\nPada tulisan ini, saya ingin sedikit bercerita tentang pengalaman saya sebagai alumnus PKN STAN. Saya adalah lulusan PKN STAN Prodip D-III PBB/Penilai tahun 2016. Saya masuk PKN STAN pada tahun 2013, tahun yang sama ketika saya lulus dari SMA. PKN STAN tidak hanya menerima lulusan SMA/MA/SMK lho gan. Lulusan STM, Paket C, dan lain-lain yang sederajat juga bisa daftar. Yang penting memenuhi syarat minimum nilai  ijazah yang ditentukan. Saat tahun saya masuk, nilai minimal ijazah adalah 7.50.\r\n\r\n'),
(19, 'Dodi Sutomo', '2020-11-23', NULL, 'Pengalaman Tes Politekim', 'Pada kesempatan ini saya masih diberi kesempatan untuk berbagi cerita tentang pengalaman saya mendaftar POLTEKIM. saya  berharap tulisan ini dapat bermanfaat bagi teman-teman sekalian.\r\n\r\nNah untuk kali ini saya akan berbagi pengalaman saya yang tidak akan pernah terlupakan karena ini merupakan langkah menuju jalan hidup saya yaitu proses seleksi salah satu sekolah kedinasan yaitu POLITEKNIK IMIGRASI. Seperti yang kita ketahui, ada beberapa sekolah ikatan dinas dibawah naungan kementrian RI. Pada tahun 2018 ini poltekim menempati urutan pertama sekolah ikatan dinas yang paling sulit persaingannya, berat seleksinya dan persaingannya yang ketat. Perbandingannya 1:32. So , udah pasti harus usaha keras dong biar bisa keterima.  jadi, apa saja tahapan seleksi POLTEKIM ? saya ulas satu persatu.'),
(20, 'Oscar', '2020-11-23', NULL, 'Pengalaman Tes Masuk Kedinasan', 'Sama saja seperti tes SPMB pada saat itu, hanya saja materi yang diujikan berbeda dengan SPMB. Suasanya juga sama saja. Justru saya lebih khawatir jika tidak lulus di Universitas. Tetapi mungkin kerena saya tidak tahu secara detail tentang sekolah kedinasan tersebut, kemana arahnya nanti dan bagaimana setelah lulus nanti jadi mungkin kekhawatiran jadi lebih sedikit jika tidak lulus. Yang memotivasi saya saat itu Orangtua dan saya tidak bayar uang kuliah, dan dipekerjakan setelah lulus.'),
(21, 'Sonick Mursoni', '2020-11-23', NULL, 'Pertama Kali Pegang Komputer', 'Saya mengenal dan mengetahui komputer saat saya berusia 10 tahun yaitu saat saya memasuki kelas 5 SD, saat itu yang ada di pikiran saya komputer hanya sebatas perangkat yang sama fungsinya seperti mesin ketik dan hanya ditambahkan layar didepannya, namun pikiran saya berubah saat saya di ajak oleh saudara saya mengunjungi rental komputer dan mencoba menggunakan komputer langsung, saat itu saya mencoba komputer yang menggunakan sistem operasi windows XP, saat mencobanya ternyata komputer itu tidak seperti mesin ketik yang fungsinya hanya sebatas untuk mengetik, komputer juga bisa digunakan untuk mencari sesuatu lewat internet, membuat gambar dan bermain game.'),
(22, 'Arko Munte', '2020-11-23', NULL, 'Pengalaman Pakai HP', 'Aku tegaskan dari awal bahwa Coretan kali ini bukan bermaksud pamer dan sombong lho ya karena ini hanya sekedar sharing aja. Jadi tanpa basa basi ngalor ngidul gak karuan, kali ini aku mau share tentang gadget hp yang pernah aku pakai.\r\n\r\nNtah mulai tahun berapa aku pertama kali pegang hp tapi yang jelas belum lama lah. Namun walau masih seumur jagung aku tau hp, ternyata eh ternyata aku sudah pernah menggunakan beberapa jenis hp dari lowend hingga smartphone.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diary_aktivitas`
--
ALTER TABLE `diary_aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diary_aktivitas`
--
ALTER TABLE `diary_aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
