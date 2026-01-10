<?php
# koneksi
include_once("../koneksi.php");
# ID hapus
$idhapus = $_GET['id'];
# menulis query
$qry = "DELETE FROM biodata WHERE id = '$idhapus'";
# menjalankan query
$hapus = mysqli_query($koneksi,$qry);
unlink("../fotosiswa/".$_GET['foto']);

# mengalihkan halaman
header("location:index.php");
?>