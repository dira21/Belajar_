<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $kode_jur = $_POST['kode_jur'];
    $nama_jur = $_POST['nama_jur'];

        #3. Query Insert (proses edit data)
       $query = "UPDATE jurusan SET kode_jur='$kode_jur', nama_jur='$nama_jur' 
    WHERE id='$id'";

    $edit = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($edit){
        header("location:index.php");
    }else{
        echo "Data Gagal diedit";
    }
?>