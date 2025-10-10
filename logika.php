<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* struktur logika
    if, elseif, else
    switch

    operator perbandingan (== != > < >= <=)
    operator logika (and or) (&& ||) */

    // $username = "admin";
    // $password = "admin123";

    // if($username == "admin" && $password == "admin123") {
    //     echo "Username dan password benar";
    // }elseif($username == "admin" && $password != "admin123") {
    //     echo "password salah";
    // }elseif($username != "admin" && $password == "admin123") {
    //     echo "username salah ";
    // }else {
    //     echo "username dan password salah";

    // }

    $nama = "dira";
    $nilai = 60;

    if($nilai > 85) {
       echo "Halo $nama, nilai $nilai, grade A";
    }elseif($nilai > 70-84) {
        echo "Halo $nama, nilai $nilai, grade B";
    }elseif($nilai > 60-69) {
        echo "Halo $nama, nilai $nilai, grade C";
    }elseif($nilai > 50-59) {
        echo "Halo $nama, nilai $nilai, grade D";
    }else {
        echo "Halo $nama, nilai $nilai, grade E";
    }

    /* if($nilai > 50) {
    echo "Kamu lulus";
    }else {
    echo "Kamu tidak lulus";
    } */
    ?>
</body>
</html>