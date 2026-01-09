
<?php
    if(isset($_POST['tbl'])){
        //jika ada aktivitas dari tombol Log In
    $nama = $_POST['nm'];
    $nilai = $_POST['nl'];

    if($nilai > 85) {
       echo "Halo $nama, nilai $nilai, grade A";
    }elseif($nilai >= 70) {
        echo "Halo $nama, nilai $nilai, grade B";
    }elseif($nilai >= 60) {
        echo "Halo $nama, nilai $nilai, grade C";
    }elseif($nilai >= 50) {
        echo "Halo $nama, nilai $nilai, grade D";
    }else {
        echo "Halo $nama, nilai $nilai, grade E";
    }
    echo "<hr>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Login Sederhana</h1>
    <Form action="latihan-form-logika.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nm"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="number" name="nl" ></td>
            </tr>
           <tr>
                <td></td>
                <td><button type="submit" name="tbl">Proses</button></td>
            </tr>
</table>
</form>
</body>
</html>