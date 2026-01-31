<?php
#1 Meng-koneksikan PHP ke MYSQL
include("../koneksi.php"); 

#2 Mengambil value dari form tambah
$kode_jur = $_POST['kode_jur'];
$nama_jur = $_POST['nama_jur']; 

#3 Query Insert(proses tambah data)
$query = "INSERT INTO jurusan (kode_jur,nama_jur) VALUES ('$kode_jur', '$nama_jur')";

$tambah = mysqli_query($koneksi, $query);

#4 Jika berhasil triggernya apa?
if($tambah){
    header("location:index.php");
}else{
    echo "Data gagal ditambah";
}
?> 