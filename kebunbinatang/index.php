<?php
require 'function.php';
require 'cek.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kebun Binatang - Hewan</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">KEBUN BINATANG</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Hewan
                            </a>
                            <a class="nav-link" href="sarana.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Sarana
                            </a>
                            <a class="nav-link" href="makanan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                makanan
                            </a>
                            <a class="nav-link" href="supplier.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                supplier
                            </a>
                            <a class="nav-link" href="jadwalcheckup.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                jadwal check up
                            </a>
                            <a class="nav-link" href="jadwalshifthewan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                jadwal shift hewan
                            </a>
                            <a class="nav-link" href="jadwalshiftsarana.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                jadwal shift sarana
                            </a>
                            <a class="nav-link" href="pegawai.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                pegawai
                            </a>
                            <a class="nav-link" href="logout.php">
                                logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Hewan</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                  <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Tambah data hewan
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>id_hewan</th>
                                                <th>kategori_hewan</th>
                                                <th>nama_hewan</th>
                                                <th>jumlah_hewan</th>
                                                <th>lokasi_hewan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                                $ambilsemuadatahewan = mysqli_query($conn, "Select * from hewan");
                                                while($data = mysqli_fetch_array($ambilsemuadatahewan)){
                                                    $id_hewan = $data['id_hewan'];
                                                    $kategori_hewan = $data['kategori_hewan'];
                                                    $nama_hewan = $data['nama_hewan'];
                                                    $jumlah_hewan = $data['jumlah_hewan'];
                                                    $lokasi_hewan = $data['lokasi_hewan'];
                                                    
                                            ?>
                                            <tr>
                                                <td><?=$id_hewan;?></td>
                                                <td><?=$kategori_hewan;?></td>
                                                <td><?=$nama_hewan;?></td>
                                                <td><?=$jumlah_hewan;?></td>
                                                <td><?=$lokasi_hewan;?></td>
                                                <td> 
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$id_hewan;?>">
                                                            Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$id_hewan;?>">
                                                            Delete
                                                    </button>
                                                </td>
                                                
                                            </tr>

                                                <!-- Update Modal -->
                                                <div class="modal" id="edit<?=$id_hewan;?>">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                        <h4 class="modal-title">Update Data Hewan</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <form method ='post'>
                                                        <div class="modal-body">
                                                        <input type = "text" name ="id_hewan" value = "<?=$id_hewan;?>" placeholder ="id hewan" class="form-control" required>
                                                        <br>
                                                        <input type = "text" name ="kategori_hewan" value = "<?=$kategori_hewan;?>"  placeholder ="kategori hewan" class="form-control" required>
                                                        <br>
                                                        <input type = "text" name ="nama_hewan" value = "<?=$nama_hewan;?>" placeholder ="nama hewan" class="form-control" required>
                                                        <br>
                                                        <input type = "number" name ="jumlah_hewan" value = "<?=$jumlah_hewan;?>" placeholder ="jumlah hewan" class="form-control" required>
                                                        <br>
                                                        <input type = "text" name ="lokasi_hewan" value = "<?=$lokasi_hewan;?>" placeholder ="lokasi hewan" class="form-control" required>
                                                        <br>
                                                        <button type="submit" class ="btn btn-warning"  name ="updatehewan"> Update </button>

                                                        </div>
                                                        </form> 
                                                        
                                                        
                                                    </div>
                                                    </div>
                                                </div>

                                                 <!-- The Modal -->
                                                <div class="modal" id="delete<?=$id_hewan;?>">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                        <h4 class="modal-title">Hapus data Hewan</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <form method ='post'>
                                                        <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus <?=$nama_hewan;?> ini?
                                                        <br>
                                                        <br>
                                                        <button type="submit" class ="btn btn-danger" name ="deletehewan"> Delete </button>
                                                        <input type="hidden" name="id_hewan" value="<?=$id_hewan; ?>">
                                                        </div>
                                                        </form> 
                                                        
                                                        
                                                    </div>
                                                    </div>
                                                </div>

                                            <?php
                                                }
                                            ?>
                                     
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>

        <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Tambah data Hewan</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <form method ='post'>
            <div class="modal-body">
            <input type = "text" name ="id_hewan" placeholder ="id hewan" class="form-control" required>
            <br>
            <input type = "text" name ="kategori_hewan" placeholder ="kategori hewan" class="form-control" required>
            <br>
            <input type = "text" name ="nama_hewan" placeholder ="nama hewan" class="form-control" required>
            <br>
            <input type = "number" name ="jumlah_hewan" placeholder ="jumlah hewan" class="form-control" required>
            <br>
            <input type = "text" name ="lokasi_hewan" placeholder ="lokasi hewan" class="form-control" required>
            <br>
            <button type="submit" class ="btn btn-primary" name ="tambahhewan"> Submit </button>

            </div>
            </form> 
            
            
        </div>
        </div>
    </div>

</html>
