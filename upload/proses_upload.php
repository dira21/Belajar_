<?php
$ket = $_POST['ket'];

// nama filenya
$nama_foto = $_FILES['upload']['name'];
echo "Nama file: " . $nama_foto . "<br>";

// tipe filenya
$tipe_foto = $_FILES['upload']['type'];
echo "Tipe file: " . $tipe_foto . "<br>";

// ukuran filenya
$ukuran_foto = $_FILES['upload']['size'];
echo "Ukuran file: " . $ukuran_foto . " bytes <br>";

// temporary name filenya (lokasi file sementara di server)
$tmp_foto = $_FILES['upload']['tmp_name'];
echo "Temporary Name: " . $tmp_foto . "<br>";

// jenis error yang terjadi saat proses upload
$error_foto = $_FILES['upload']['error'];
echo "Error: " . $error_foto . "<br>";

echo $ket;

// upload file
move_uploaded_file($tmp_foto, "foto/" . $nama_foto)
?>

<hr>
<img src="foto/<?= $nama_foto ?>" alt="">

<br><br>
<a href="index.php">Kembali</a>
