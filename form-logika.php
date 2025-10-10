<?php
    if(isset($_POST['tbl'])){
        //jika ada aktivitas dari tombol Log In
    $username = $_POST['un'];
    $password = $_POST['pw'];

    if($username == "admin" && $password == "admin123") {
        header("Location: logika.php");
        die();
    }elseif($username == "admin" && $password != "admin123") {
        echo "password salah";
    }elseif($username != "admin" && $password == "admin123") {
        echo "username salah ";
    }else {
        echo "Login Gagal";
    }
    echo "<hr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Sederhana</title>
</head>
<body>
    <h1>Form Login Sederhana</h1>
    <Form action="form-logika.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="un"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pw" ></td>
            </tr>
           <tr>
                <td></td>
                <td><button type="submit" name="tbl">Log In</button></td>
            </tr>
</table>
</form>
</body>
</html>