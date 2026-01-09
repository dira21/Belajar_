<?php
    if(isset($_POST['tbl'])){
        //jika ada aktivitas dari tombol Log In
    $hari =$_POST['hari'];
    // $hari = 10;
    switch($hari) {
        case 1:
            echo "Hari Senin";
            break;
        case 2:
            echo "Hari Selasa";
            break;
        case 3:
            echo "Hari Rabu";
            break;
        case 4:
            echo "Hari Kamis";
            break;
        case 5:
            echo "Hari Jumat";
            break;
        case 6:
            echo "Hari Sabtu";
            break;
        case 7:
            echo "Hari Minggu";
            break;
        default:
            echo "Hari tidak diketahui";
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
    <Form action="form-switch.php" method="POST">
        <table>
            <tr>
                <td>Hari</td>
                <td><input type="number" name="hari"></td>
            </tr>
           <tr>
                <td></td>
                <td><button type="submit" name="tbl">Proses</button></td>
            </tr>
</table>
</form>
</body>
</html>