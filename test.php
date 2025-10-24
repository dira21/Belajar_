<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Input Tanggal Manual</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f6f8fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .box {
      background: white;
      padding: 20px 30px;
      border-radius: 12px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.15);
      text-align: center;
    }
    select, button {
      padding: 8px;
      margin: 6px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
    }
    button {
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>Pilih Tanggal</h2>

    <form method="POST">
      <!-- Pilihan Hari -->
      <label for="hari">Hari:</label>
      <select name="hari" id="hari" required>
        <option value="">-- Hari --</option>
        <?php
          for ($i = 1; $i <= 31; $i++) {
            echo "<option value='$i'>$i</option>";
          }
        ?>
      </select>

      <!-- Pilihan Bulan -->
      <label for="bulan">Bulan:</label>
      <select name="bulan" id="bulan" required>
        <option value="">-- Bulan --</option>
        <?php
          $bulanList = [
            1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
          ];
          foreach ($bulanList as $angka => $nama) {
            echo "<option value='$angka'>$nama</option>";
          }
        ?>
      </select>

      <!-- Pilihan Tahun -->
      <label for="tahun">Tahun:</label>
      <select name="tahun" id="tahun" required>
        <option value="">-- Tahun --</option>
        <?php
          for ($t = 2025; $t >= 1970; $t--) {
            echo "<option value='$t'>$t</option>";
          }
        ?>
      </select>
      <br><br>

      <button type="submit" name="submit">Kirim</button>
    </form>

    <br>

    <?php
    if (isset($_POST['submit'])) {
      $hari = $_POST['hari'];
      $bulan = $_POST['bulan'];
      $tahun = $_POST['tahun'];

      // Daftar nama bulan
      $bulanList = [
        1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
      ];

      // Ambil nama bulan berdasarkan angka
      $namaBulan = $bulanList[$bulan];

      echo "<h3>Hasil:</h3>";
      echo "<p><b>Tanggal yang kamu pilih:</b><br> $hari $namaBulan $tahun</p>";
    //   echo "<p><i>Format database (YYYY-MM-DD):</i> $tahun-" . str_pad($bulan, 2, '0', STR_PAD_LEFT) . "-" . str_pad($hari, 2, '0', STR_PAD_LEFT) . "</p>";
    }
    ?>
  </div>
</body>
</html>