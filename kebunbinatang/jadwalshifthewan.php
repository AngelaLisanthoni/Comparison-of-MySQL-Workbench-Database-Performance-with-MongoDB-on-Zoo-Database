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
        <title>Kebun Binatang - Jadwal Shift Hewan</title>
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
                        <h1 class="mt-4">Jadwal Shift Hewan</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Tambah data jadwal shift hewan
                                </button> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>id_jadwal_hewan</th>
                                                <th>id_hewan</th>
                                                <th>id_pegawai</th>
                                                <th>jam_mulai</th>
                                                <th>jam_akhir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                $ambilsemuadatajadwalshifthewan = mysqli_query($conn, "Select * from jadwal_shift_hewan");
                                                while($data = mysqli_fetch_array($ambilsemuadatajadwalshifthewan)){
                                                    $id_jadwal_hewan = $data['id_jadwal_hewan'];
                                                    $id_hewan = $data['id_hewan'];
                                                    $id_pegawai = $data['id_pegawai'];
                                                    $jam_mulai = $data['jam_mulai'];
                                                    $jam_akhir = $data['jam_akhir'];
                                                    
                                            ?>
                                            <tr>
                                                <td><?=$id_jadwal_hewan;?></td>
                                                <td><?=$id_hewan;?></td>
                                                <td><?=$id_pegawai;?></td>
                                                <td><?=$jam_mulai;?></td>
                                                <td><?=$jam_akhir;?></td>
                                                <td> 
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$id_jadwal_hewan;?>">
                                                            Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$id_jadwal_hewan;?>">
                                                            Delete
                                                    </button>
                                                </td>
                                                
                        
                                            </tr>
                                             <!-- The Modal -->
                                                <div class="modal" id="edit<?=$id_jadwal_hewan;?>">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                        <h4 class="modal-title">Update data jadwal shift hewan</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <form method ='post'>
                                                        <div class="modal-body">
                                                        <input type = "text" name ="id_jadwal_hewan" value = "<?=$id_jadwal_hewan;?>" placeholder ="id jadwal hewan" class="form-control" required>
                                                        <br>
                                                        <select name = "idhewan" value = "<?=$id_hewan;?>" class ="form-control">
                                                            <?php
                                                                $ambilsemuadatanya = mysqli_query($conn, "select * from hewan");
                                                                while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                                                                    $idhewannya = $fetcharray['id_hewan'];
                                                                    $namahewannya = $fetcharray['nama_hewan'];
                                                                
                                                            ?>

                                                            <option value = "<?=$idhewannya;?>"><?=$namahewannya;?></option>
                                                            
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                        <br>
                                                        <select name = "idpegawai" value = "<?=$id_pegawai;?>" class ="form-control">
                                                            <?php
                                                                $ambilsemuadatanya = mysqli_query($conn, "select * from pegawai");
                                                                while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                                                                    $idpegawainya = $fetcharray['id_pegawai'];
                                                                    $namapegawainya = $fetcharray['nama_pegawai'];
                                                                
                                                            ?>

                                                            <option value = "<?=$idpegawainya;?>"><?=$namapegawainya;?></option>
                                                            
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                        <br>
                                                        <input type = "number" name ="jam_mulai" value = "<?=$jam_mulai;?>" placeholder ="jam mulai" class="form-control" required>
                                                        <br>
                                                        <input type = "number" name ="jam_akhir" value = "<?=$jam_akhir;?>" placeholder ="jam akhir" class="form-control" required>
                                                        <br>
                                                        <button type="submit" class ="btn btn-warning" name ="updatejadwalshifthewan"> Update </button>

                                                        </div>
                                                        </form> 
                                                        
                                                        
                                                    </div>
                                                    </div>
                                                </div>


                                                <!-- Delete Modal -->
                                                <div class="modal" id="delete<?=$id_jadwal_hewan;?>">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                        <h4 class="modal-title">Delete data Jadwal Shift Hewan</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <form method ='post'>
                                                        <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus <?=$id_jadwal_hewan;?> ini?                                                      
                                                        <br>
                                                        <br>
                                                        <button type="submit" class ="btn btn-danger" name ="deletejadwalshifthewan"> Delete </button>
                                                        <input type="hidden" name="id_jadwal_hewan" value="<?=$id_jadwal_hewan;?>">
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
            <h4 class="modal-title">Tambah data jadwal shift hewan</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <form method ='post'>
            <div class="modal-body">
            <input type = "text" name ="id_jadwal_hewan" placeholder ="id jadwal hewan" class="form-control" required>
            <br>
            <select name = "idhewan" class ="form-control">
                <?php
                    $ambilsemuadatanya = mysqli_query($conn, "select * from hewan");
                    while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                        $idhewannya = $fetcharray['id_hewan'];
                        $namahewannya = $fetcharray['nama_hewan'];
                    
                ?>

                <option value = "<?=$idhewannya;?>"><?=$namahewannya;?></option>
                
                <?php
                    }
                ?>
            </select>
            <br>
            <select name = "idpegawai" class ="form-control">
                <?php
                    $ambilsemuadatanya = mysqli_query($conn, "select * from pegawai");
                    while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                        $idpegawainya = $fetcharray['id_pegawai'];
                        $namapegawainya = $fetcharray['nama_pegawai'];
                    
                ?>

                <option value = "<?=$idpegawainya;?>"><?=$namapegawainya;?></option>
                
                <?php
                    }
                ?>
            </select>
            <br>
            <input type = "number" name ="jam_mulai" placeholder ="jam mulai" class="form-control" required>
            <br>
            <input type = "number" name ="jam_akhir" placeholder ="jam akhir" class="form-control" required>
            <br>
            <button type="submit" class ="btn btn-primary" name ="tambahjadwalshifthewan"> Submit </button>

            </div>
            </form> 
            
            
        </div>
        </div>
    </div>
</html>
