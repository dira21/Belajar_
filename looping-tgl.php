<!-- <?php
// Check if form was submitted
if (isset($_POST['tbl'])) {
    $day = $_POST['tanggal'] ?? '';
    $month = $_POST['bulan'] ?? '';
    $year = $_POST['tahun'] ?? '';
    
    // Validate input
    $errors = [];
    
    if (empty($day)) {
        // $errors[] = "Tanggal harus diisi";
    } elseif (!is_numeric($day) || $day < 1 || $day > 31) {
        $errors[] = "Tanggal harus antara 1-31";
    }
    
    if (empty($month)) {
        // $errors[] = "Bulan harus diisi";
    } elseif (!is_numeric($month) || $month < 1 || $month > 12) {
        $errors[] = "Bulan harus antara 1-12";
    }
    
    if (empty($year)) {
        // $errors[] = "Tahun harus diisi";
    } elseif (!is_numeric($year) || $year < 1900 || $year > 2030) {
        $errors[] = "Tahun harus antara 1900-2030";
    }
    
    // Check if date is valid
    if (empty($errors) && !checkdate($month, $day, $year)) {
        // $errors[] = "Tanggal tidak valid";
    }
    
    // Process valid date
    if (empty($errors)) {
        $timestamp = mktime(0, 0, 0, $month, $day, $year);
        $dayOfWeek = date('l', $timestamp);
        $dayName = '';
        
        // Translate day name to Indonesian
        switch($dayOfWeek) {
            case 'Monday': $dayName = 'Senin'; break;
            case 'Tuesday': $dayName = 'Selasa'; break;
            case 'Wednesday': $dayName = 'Rabu'; break;
            case 'Thursday': $dayName = 'Kamis'; break;
            case 'Friday': $dayName = 'Jumat'; break;
            case 'Saturday': $dayName = 'Sabtu'; break;
            case 'Sunday': $dayName = 'Minggu'; break;
        }
        
        $zodiac = getZodiacSign($month, $day);
        $season = getSeason($month);
    }
}

function getZodiacSign($month, $day) {
    if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
        return "Aries";
    } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        return "Taurus";
    } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
        return "Gemini";
    } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
        return "Cancer";
    } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        return "Leo";
    } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        return "Virgo";
    } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        return "Libra";
    } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        return "Scorpio";
    } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        return "Sagittarius";
    } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
        return "Capricorn";
    } elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        return "Aquarius";
    } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        return "Pisces";
    }
    return "Tidak diketahui";
}

function getSeason($month) {
    if (in_array($month, [12, 1, 2])) {
        return "Musim Hujan";
    } elseif (in_array($month, [3, 4, 5])) {
        return "Musim Semi";
    } elseif (in_array($month, [6, 7, 8])) {
        return "Musim Panas";
    } elseif (in_array($month, [9, 10, 11])) {
        return "Musim Gugur";
    }
    return "Tidak diketahui";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Tanggal</title>
</head>
<body>
    <h2>Pemilihan Tanggal</h2>
    
    <?php if (isset($_POST['tbl']) && !empty($errors)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <?php if (isset($_POST['tbl']) && empty($errors)): ?>
        <div style="color: green;">
            <h3>Hasil Pemilihan Tanggal:</h3>
            <p>Tanggal: <?php echo $day . "/" . $month . "/" . $year; ?></p>
            <p>Hari: <?php echo $dayName; ?></p>
            <p>Zodiak: <?php echo $zodiac; ?></p>
            <p>Musim: <?php echo $season; ?></p>
        </div>
        <br>
    <?php endif; ?>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td>Pilih Tanggal</td>
                <td>
                    <select name="tanggal" required>
                        <option value="">-- Pilih Tanggal --</option>
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                            <option value="<?php echo $i; ?>" <?php echo (isset($_POST['tanggal']) && $_POST['tanggal'] == $i) ? 'selected' : ''; ?>>
                                <?php echo $i; ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pilih Bulan</td>
                <td>
                    <select name="bulan" required>
                        <option value="">-- Pilih Bulan --</option>
                        <?php 
                        $months = [
                            1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
                            5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
                            9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
                        ];
                        foreach ($months as $num => $name): ?>
                            <option value="<?php echo $num; ?>" <?php echo (isset($_POST['bulan']) && $_POST['bulan'] == $num) ? 'selected' : ''; ?>>
                                <?php echo $name; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pilih Tahun</td>
                <td>
                    <select name="tahun" required>
                        <option value="">-- Pilih Tahun --</option>
                        <?php for ($i = 2030; $i >= 1900; $i--): ?>
                            <option value="<?php echo $i; ?>" <?php echo (isset($_POST['tahun']) && $_POST['tahun'] == $i) ? 'selected' : ''; ?>>
                                <?php echo $i; ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>
        </table>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Pilih Tanggal :
        <select >
            <?php
            for($i=1; $i <=31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            echo "<br>";
            ?>
        </select>

        Pilih Bulan :
        <select >
            <?php
            $bulan = [
                1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                "Juli", "Agustus", "September", "Oktober", "November", "Desember"
            ];
            foreach($bulan as $angka => $nama) {
                echo "<option value='$angka'>$nama</option>";
            }
            echo "<br>";
            
            ?>
            </select>

        Pilih Tahun :
        <select >
            <?php
            for($t=2025; $t >= 1970; $t--) {
                echo "<option value='$t'>$t</option>";
            }
            echo "<br>";

            ?>
            </select>
    </form>
</body>
</html>