<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body style="background-color: #5c5756">
    <?php include_once ('navbar.php'); 
    
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <b>Form Biodata Siswa</b>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama siswa</label>
    <input type="text" class="form-control" id="NS" name="NS">
  </div>

  <div class="mb-3">
    <label for="nisn" class="form-label">NISN</label>
    <input type="text" class="form-control" id="NISN" name="NISN">
  </div>

  <div class="mb-3">
    <label for="tpl" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control" id="TPL" name="TPL">
  </div>

  <div class="mb-3">
    <label for="tgl" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="TGL" name="TGL">
  </div>

  <div class="mb-3">
    <label for="alm" class="form-label">Alamat</label>
    <textarea class="form-control" id="ALM" rows="3" name="ALM"></textarea>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

<div class="mb-3">
  <label class="form-label d-block">Jenis Kelamin</label>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="jk" id="radioLaki" value="Laki-laki">
    <label class="form-check-label" for="radioLaki">Laki-laki</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="jk" id="radioPerempuan" value="Perempuan">
    <label class="form-check-label" for="radioPerempuan">Perempuan</label>
  </div>
</div>

<div class="mb-3">
  <label for="jur" class="form-label">Jurusan</label>
  <select class="form-select" id="jur" name="jur">
    <option selected disabled>Pilih jurusan</option>
    <option value="1">IPA</option>
    <option value="2">IPS</option>
    <option value="3">Bahasa</option>
  </select>
</div>

  <div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
  </div>
    
  <a href="#" class="btn btn-primary">Kirim</a> 
</form>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
