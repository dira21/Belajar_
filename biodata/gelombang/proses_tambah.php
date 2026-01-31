<?php
#1 Meng-koneksikan PHP ke MYSQL
include("../koneksi.php"); 

#2 Mengambil value dari form tambah
$nm_gelombang = $_POST['nm_gelombang'];
$th_akademik = $_POST['th_akademik']; 

#3 Query Insert(proses tambah data)
$query = "INSERT INTO gelombang (nm_gelombang,th_akademik) VALUES ('$nm_gelombang', '$th_akademik')";

$tambah = mysqli_query($koneksi, $query);

#4 Jika berhasil triggernya apa?
if($tambah){
    header("location:index.php");
}else{
    echo "Data gagal ditambah";
}
?> 