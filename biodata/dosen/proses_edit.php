<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $rumpun = $_POST['rumpun'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $nama_foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];

    if($nama_foto != ""){
        #hapus foto lama
        $qry = "SELECT * FROM dosen WHERE id = '$id'";
        $hapus_foto = mysqli_query($koneksi,$qry);
        $data = mysqli_fetch_array($hapus_foto);
        $nama_foto_hapus = $data['foto'];
        $lokasi_foto = "../fotodosen/".$nama_foto_hapus;

        if(file_exists($lokasi_foto)){
            unlink($lokasi_foto);
        }

        #3. Query Insert (proses edit data)
        $query = "UPDATE dosen SET nidn='$nidn', nama='$nama',rumpun='$rumpun', email='$email',no_hp='$no_hp', foto='$nama_foto' 
        WHERE id='$id'";

        #hapus foto
        // $lokasi_foto = "../fotosiswa/$nama_foto";
        // if(file_exists($lokasi_foto)){
        //     unlink($lokasi_foto);
        // }

        #tambahkan foto
        move_uploaded_file($tmp_foto,"../fotodosen/$nama_foto");
    }else{
        #3. Query Insert (proses edit data)
        $query = "UPDATE dosen SET nidn='$nidn', nama='$nama',rumpun='$rumpun', email='$email',no_hp='$no_hp', foto='$nama_foto' 
        WHERE id='$id'";
    }

    
    $edit = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($edit){
        header("location:index.php");
    }else{
        echo "Data Gagal diedit";
    }
?>