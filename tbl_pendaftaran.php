<?php 
include_once('config/koneksi.php');
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
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <?php
        include_once('navbar.php');
      ?>
      <div class="container-fluid page-body-wrapper">
        <?php
        include_once('sidebar.php');
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
      
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title mb-0">Pendaftar Terbaru</p>
                    <?php
                      if (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses') {
                          echo "<p>Data berhasil disimpan!</p>";
                      }
                      ?>
                    <div class="table-responsive">
                        <div>
                      <a href="create_pendaftar.php" class="btn btn-sm btn-primary"  style="float: right;">Tambah Data</a><br>
                    </div>
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th width="100px">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        
                            //mengambil data dari tabel siswa
                            $query = mysqli_query($db, "SELECT * FROM tbl_pendaftaran order by id desc");
                            $data = mysqli_fetch_array($query);

                            // fungsi cek kolom data tabel
                            if(mysqli_num_rows($query) >0) {
                                $no = 1;

                                // loop semua data tabel user
                                do{

                        ?>

                         <tr>
                            <td><?=$no++;?></td>
                            <td><?=$data['nama_peserta_didik'];?></td>
                            <td><?=$data['tempat_lahir'];?></td>
                            <td><?=$data['tanggal_lahir'];?></td>
                            <td><?=$data['jenis_kelamin'];?></td>
                            <td><?=$data['agama'];?></td>
                            <td>
                              <div class="badge badge-warning btn btn-sm"><a href="edit_pendaftar.php?id=<?=$data['id'];?>">Edit</a></div>
                             
                                 <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" 
                                    action="action/delete.php" method="POST" style="display: inline;">
                                
                                <!-- Kirim ID data yang ingin dihapus -->
                                <input type="hidden" name="id" value="<?=$data['id'];?>"> 

                                <button type="submit" class="badge badge-danger btn btn-sm">
                                  Del
                                </button>

                              </form>
                              
                            </td>
                          </tr>
                        <?php 
                                }while($data = mysqli_fetch_assoc($query));
                            }else{

                                // jika false
                                echo "<tr><td colspan='7'><center>Belum ada data!</center></td></tr>";
                            }
                        ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 </a> Template from BootstrapDash. All rights reserved.</span>
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
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
    <script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="assets/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>