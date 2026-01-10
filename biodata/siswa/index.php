<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/all.css">
</head>

<body style="background-color:#d1e6d4">
    <?php
    include_once("../navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-10 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>BIODATA SISWA</b>
                        <a href="form_tambah.php" class="float-end btn btn-primary btn-sm"><i class="fa-solid fa-user-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
  <thead>
    <tr>
      <th scope="row">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NISN</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Action</th>
    </tr>

    </thead>
  <tbody> -->

    <!-- <?php
    # koneksi
    include("../koneksi.php");
    # menuliskan query menampilkan data
    $qry = "SELECT * FROM biodata";
    # menjalankan query
    $tampil = mysqli_query($koneksi,$qry);
    # looping hasil query
    $nomor = 1;
    foreach($tampil as $data) {

    ?> -->
    <!-- <tr>
        <th scope="row"><?=$nomor++?></th>
        <td><?=$data['nama']?></td>
        <td><?=$data['nisn']?></td>
        <td><?=$data['tg_lahir']?></td>
        <td>
        
<button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$data['id']?>">
    <i class="fa-solid fa-magnifying-glass"></i>
</button>

<button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit<?=$data['id']?>">
    <i class="fa-solid fa-pen-to-square"></i>
</button>

<button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete<?=$data['id']?>">
    <i class="fa-solid fa-trash"></i>
</button> -->


<!-- MODAL DETAIL -->
<!-- <div class="modal fade" id="exampleModal<?=$data['id']?>" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title">Detail Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <table class="table">
  <tbody>
    <tr>
      <td>Nama</td>
      <th scope="row"><?=$data['nama']?></th>
    </tr>
    <tr>
      <td>NISN</td>
      <th scope="row"><?=$data['nisn']?></th>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <th scope="row"><?=$data['tp_lahir']?></th>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <th scope="row"><?=$data['tg_lahir']?></th>
    </tr>
    <tr>
      <td>alamat</td>
      <th scope="row"><?=$data['alamat']?></th>
    </tr>
    <tr>
      <td>email</td>
      <th scope="row"><?=$data['email']?></th>
    </tr>
    <tr>
      <td>Jenis Kelammin</td>
      <th scope="row"><?=$data['jk']?></th>
    </tr>
    <tr>
      <td>Jurusan</td>
      <th scope="row"><?=$data['jur']?></th>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->


<!-- MODAL EDIT -->
<!-- <div class="modal fade" id="modalEdit" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content">

      <div class="modal-header bg-info">
        <h5 class="modal-title">Edit Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" id="editNama">
        </div>

        <div class="mb-3">
          <label class="form-label">NISN</label>
          <input type="text" class="form-control" id="editNisn">
        </div>

        <div class="mb-3">
          <label class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" id="editTpl">
        </div>

        <div class="mb-3">
          <label class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="editTgl">
        </div>

        <div class="mb-3">
          <label class="form-label">Alamat</label>
          <textarea class="form-control" id="editAlamat"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="editEmail">
        </div> -->

        <!-- === JENIS KELAMIN === -->
        <!-- <div class="mb-3">
          <label class="form-label">Jenis Kelamin</label><br>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="editJk" id="jkL" value="Laki-laki">
            <label class="form-check-label" for="jkL">Laki-Laki</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="editJk" id="jkP" value="Perempuan">
            <label class="form-check-label" for="jkP">Perempuan</label>
          </div>
        </div> -->

        <!-- === JURUSAN === -->
        <!-- <div class="mb-3">
          <label class="form-label">Jurusan</label>
          <select class="form-control" id="editJur">
            <option value="">-Pilih Jurusan-</option>
            <option value="IPA">IPA</option>
            <option value="IPS">IPS</option>
            <option value="Bahasa">Bahasa</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-info">Save Changes</button>
      </div>

    </form>
  </div>
</div> -->


<!-- MODAL DELETE -->
<!-- <div class="modal fade" id="modalDelete <?=$data['id']?>" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p>Apakah kamu yakin ingin menghapus Data atas Nama <?=$data['nama']?> ini?</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="proseshapus.php?id=<?=$data['id']?>" class="btn btn-danger">Hapus</a>
    </div>
    </div>
  </div>
</div>

        </td>
    </tr>
    
    <?php
    }
    ?>
  
    
  </tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

        <script src="../js/all.js"></script>
</body>

</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/all.css">
</head>

<body style="background-color:#d1e6d4">
    <?php
    include_once("../navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-10 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>BIODATA SISWA</b>
                        <a href="form_tambah.php" class="float-end btn btn-primary btn-sm"><i class="fa-solid fa-user-plus"></i> Tambah data</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                #1. koneksi
                                include("../koneksi.php");

                                #2. menulikan query menampilkan data
                                $qry = "SELECT * FROM biodata";

                                #3. menjalankan query
                                $tampil = mysqli_query($koneksi,$qry);

                                #4. looping hasil query
                                $nomor = 1;
                                foreach($tampil as $data){

                                ?>
                                <tr>
                                    <th scope="row"><?=$nomor++?></th>
                                    <td><?=$data['nama']?></td>
                                    <td><?=$data['nisn']?></td>
                                    <td><?=$data['tg_lahir']?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$data['id']?>"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        <a href="formedit.php?id=<?=$data['id']?>" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalhapus<?=$data['id']?>"><i class="fa-solid fa-trash"></i></button>

                                        <!-- Modal Detail-->
                                        <div class="modal fade" id="exampleModal<?=$data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header bg-warning">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Data Detail <?=$data['nama']?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                <tbody>
                                                  <tr>
                                                    <td colspan="2"><img src="../fotosiswa/<?= $data['foto'] ?>" alt="" width="100px"></td>
                                                  </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <th scope="row"><?=$data['nama']?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>NISN</td>
                                                        <th scope="row"><?=$data['nisn']?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Lahir</td>
                                                        <th scope="row"><?=$data['tp_lahir']?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir</td>
                                                        <th scope="row"><?=$data['tg_lahir']?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <th scope="row"><?=$data['alamat']?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <th scope="row"><?=$data['email']?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <th scope="row"><?=$data['jk']?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jurusan</td>
                                                        <th scope="row"><?=$data['jur']?></th>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                        <!-- Modal Hapus-->
                                        <div class="modal fade" id="modalhapus<?=$data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Yakin Data Dengan Nama <?=$data['nama']?> Ingin Dihapus?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href="proseshapus.php?id=<?=$data['id']?>" class="btn btn-danger">Hapus</a>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../js/all.js"></script>
</body>

</html>