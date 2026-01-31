<?php
#1 Meng-koneksikan PHP ke MYSQL
include("../koneksi.php"); 

#2 Mengambil value dari form tambah
$kode_jurusan = $_POST['kode_jurusan'];
$nama_jurusan = $_POST['nama_jurusan']; 

#3 Query Insert(proses tambah data)
$query = "INSERT INTO jurusan (kode_jurusan,nama_jurusan) VALUES ('$kode_jurusan', '$nama_jurusan')";

$tambah = mysqli_query($koneksi, $query);

#4 Jika berhasil triggernya apa?
if($tambah){
    header("location:index.php");
}else{
    echo "Data gagal ditambah";
}
?> 