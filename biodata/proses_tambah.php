<?php
#1 Meng-koneksikan PHP ke MYSQL
include("koneksi.php"); 

#2 Mengambil value dari form tambah
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$tp_lahir = $_POST['tp_lahir'];
$tg_lahir = $_POST['tg_lahir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$jur = $_POST['jur'];

#3 Query Insert(proses tambah data)
$query = "INSERT INTO biodata (nama,nisn,tp_lahir,tg_lahir,alamat,email,jk,jur) VALUES ('$nama', '$nisn', '$tp_lahir', '$tg_lahir', '$alamat', '$email', '$jk', '$jur')";

$tambah = mysqli_query($koneksi, $query);

#4 Jika berhasil triggernya apa?
if($tambah){
    header("location:index.php");
}else{
    echo "Data gagal ditambah";
}
?> 