<?php
include 'config/koneksi.php';

// Ambil ID dari URL
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}

$id = $_GET['id'];

// Ambil data dari database
$query = mysqli_query($db, "SELECT * FROM tbl_pendaftaran WHERE id = $id LIMIT 1");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan.");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PSB Admin | Selamat Datang</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php
       include_once('navbar.php'); 
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php 
        include_once('sidebar.php');
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
 
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Data Pendaftar</h4>
                    <p class="card-description"> Peserta didik baru </p>
                    <form class="forms-sample" action="action/update.php" method="POST">
                     <input type="hidden" name="id" value="<?=$data['id'];?>"> 
                      <div class="form-group">
                        <label for="exampleInputName1">Nama Peserta Didik</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nama" value="<?=$data['nama_peserta_didik'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Tempat Lahir</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Tempat Lahir" name="tempat_lahir" value="<?=$data['tempat_lahir'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Lahir" name="tanggal_lahir" value="<?=$data['tanggal_lahir'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Jenis Kelamin</label>
                    <select class="form-select" id="exampleSelectGender" name="jenis_kelamin">
                      <option value="Laki-Laki" <?php if ($data['jenis_kelamin'] == 'Laki-Laki') echo 'selected'; ?>>Laki-Laki</option>
                      <option value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                    </select>
                      </div>
                         <div class="form-group">
                        <label for="exampleSelectGender">Agama</label>
                    <select class="form-select" id="exampleSelectGender" name="agama">
                      <option value="Islam" <?= ($data['agama'] == 'Islam') ? 'selected' : '' ?>>Islam</option>
                      <option value="Kristen" <?= ($data['agama'] == 'Kristen') ? 'selected' : '' ?>>Kristen</option>
                      <option value="Katolik" <?= ($data['agama'] == 'Katolik') ? 'selected' : '' ?>>Katolik</option>
                      <option value="Hindu" <?= ($data['agama'] == 'Hindu') ? 'selected' : '' ?>>Hindu</option>
                      <option value="Budha" <?= ($data['agama'] == 'Budha') ? 'selected' : '' ?>>Budha</option>
                    </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1">Alamat</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="alamat"><?= $data['alamat_tinggal'];?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Nomor Telepon</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Nomor Telepon" name="nomor_telepon" value="<?= $data['nomor_telepon'];?>">
                      </div>

                      <button type="submit" class="btn btn-primary me-2">Simpan</button>
                      <button class="btn btn-light">Batal</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
  </div>
</footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="assets/vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>