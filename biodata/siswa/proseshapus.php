<?php
# koneksi
include_once("../koneksi.php");
# ID hapus
$idhapus = $_GET['id'];

$qry = "SELECT * FROM biodata WHERE id = '$idhapus'";
$hapus_foto = mysqli_query($koneksi,$qry);
$data = mysqli_fetch_array($hapus_foto);
$nama_foto = $data['foto'];
$lokasi_foto = "../fotosiswa/".$nama_foto;

if(file_exists($lokasi_foto)){
    unlink($lokasi_foto);
}

# menulis query
$qry = "DELETE FROM biodata WHERE id = '$idhapus'";
# menjalankan query
$hapus = mysqli_query($koneksi,$qry);

# mengalihkan halaman
header("location:index.php");
?>