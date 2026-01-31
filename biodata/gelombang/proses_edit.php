<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $nm_gelombang = $_POST['nm_gelombang'];
    $th_akademik = $_POST['th_akademik'];

        #3. Query Insert (proses edit data)
       $query = "UPDATE gelombang SET nm_gelombang='$nm_gelombang', th_akademik='$th_akademik' 
    WHERE id='$id'";

    $edit = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($edit){
        header("location:index.php");
    }else{
        echo "Data Gagal diedit";
    }
?>