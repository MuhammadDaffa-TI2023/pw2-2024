<?php
$nim = $_POST ["nim"];
$nama = $_POST ["nama"];
$jenis_kelamin = $_POST ["jenis_kelamin"];
$prodi = $_POST ["prodi"];
$keahlian = $_POST ["keahlian"];
$domisili = $_POST ["domisili"];
$email = $_POST ["email"];
?>
<h1>Terima kasih telah mendaftar Di IT CLUB DATA SCIENCE</h1>
<h4>Nama Lengkap: <?php echo $nim ?></h4>
<h4>NIM: <?php echo $nama ?></h4>
<h4>Jenis Kelamin:<?php echo $jenis_kelamin ?></h4>
<h4>Program Studi: <?php echo $prodi ?></h4>
<h4>Keahlian: <?php echo $keahlian ?></h4>
<h4>Domisili: <?php echo $domisili ?></h4>
<h4>Email: <?php echo $email     ?></h4>