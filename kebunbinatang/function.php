<?php
session_start();

//Membuat Koneksi ke database
$conn = mysqli_connect("localhost","root","","zoo database");

//TAMBAH HEWAN
if(isset($_POST['tambahhewan'])){
    $id_hewan = $_POST['id_hewan'];
    $kategori_hewan = $_POST['kategori_hewan'];
    $nama_hewan = $_POST['nama_hewan'];
    $jumlah_hewan = $_POST['jumlah_hewan'];
    $lokasi_hewan = $_POST['lokasi_hewan'];

    $addtotable = mysqli_query($conn, "insert into hewan(id_hewan,kategori_hewan,nama_hewan,jumlah_hewan,lokasi_hewan) values ('$id_hewan', '$kategori_hewan', '$nama_hewan', '$jumlah_hewan', '$lokasi_hewan')");
    if($addtotable){
        header('location:index.php');
    } else{
        echo 'Gagal';
        header('location:index.php');
    }
}

//TAMBAH MAKANAN
if(isset($_POST['tambahmakanan'])){
    $id_makanan = $_POST['id_makanan'];
    $idhewannya = $_POST['idhewannya'];
    $nama_makanan = $_POST['nama_makanan'];
    $stok_makanan = $_POST['stok_makanan'];

    $addtotable = mysqli_query($conn, "insert into makanan(id_makanan, id_hewan,nama_makanan,stok_makanan) values ('$id_makanan','$idhewannya', '$nama_makanan', '$stok_makanan')");
    if($addtotable){
        header('location:makanan.php');
    } else{
        echo 'Gagal';
        header('location:makanan.php');
    }
}

//TAMBAH SARANA
if(isset($_POST['tambahsarana'])){
    $id_sarana = $_POST['id_sarana'];
    $nama_sarana = $_POST['nama_sarana'];

    $addtotable = mysqli_query($conn, "insert into sarana(id_sarana, nama_sarana) values ('$id_sarana','$nama_sarana')");
    if($addtotable){
        header('location:sarana.php');
    } else{
        echo 'Gagal';
        header('location:sarana.php');
    }
}

//TAMBAH SUPPLIER
if(isset($_POST['tambahsupplier'])){
    $id_supplier = $_POST['id_supplier'];
    $idmakanannya = $_POST['idmakanan'];
    $nama_supplier = $_POST['nama_supplier'];
    $no_supplier = $_POST['no_supplier'];
    $tgl_supplier = $_POST['tgl_supplier'];

    $addtotable = mysqli_query($conn, "insert into supplier(id_supplier,id_makanan,nama_supplier,no_supplier,tgl_supplier) values ('$id_supplier','$idmakanannya','$nama_supplier','$no_supplier','$tgl_supplier')");
    if($addtotable){
        header('location:supplier.php');
    } else{
        echo 'Gagal';
        header('location:supplier.php');
    }
}

//TAMBAH PEGAWAI
if(isset($_POST['tambahpegawai'])){
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $ttl_pegawai = $_POST['ttl_pegawai'];
    $no_pegawai = $_POST['no_pegawai'];
    $gender_pegawai = $_POST['gender_pegawai'];
    $gaji_pegawai = $_POST['gaji_pegawai'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $addtotable = mysqli_query($conn, "insert into pegawai(id_pegawai,nama_pegawai, ttl_pegawai, no_pegawai, gender_pegawai, gaji_pegawai, username,password) values ('$id_pegawai','$nama_pegawai','$ttl_pegawai','$no_pegawai','$gender_pegawai','$gaji_pegawai','$username','$password')");
    if($addtotable){
        header('location:pegawai.php');
    } else{
        echo 'Gagal';
        header('location:pegawai.php');
    }
}

//TAMBAH JADWAL CHECKUP
if(isset($_POST['tambahjadwalcheckup'])){
    $id_checkup = $_POST['id_checkup'];
    $idhewannya = $_POST['idhewan'];
    $idpegawainya = $_POST['idpegawai'];
    $tanggal_checkup = $_POST['tanggal_checkup'];

    $addtotable = mysqli_query($conn, "insert into jadwal_checkup(id_checkup,id_hewan,id_pegawai,tanggal_checkup) values ('$id_checkup','$idhewannya','$idpegawainya','$tanggal_checkup')");
    if($addtotable){
        header('location:jadwalcheckup.php');
    } else{
        echo 'Gagal';
        header('location:jadwalcheckup.php');
    }
}

//TAMBAH JADWAL SHIFT HEWAN
if(isset($_POST['tambahjadwalshifthewan'])){
    $id_jadwal_hewan = $_POST['id_jadwal_hewan'];
    $idhewannya = $_POST['idhewan'];
    $idpegawainya = $_POST['idpegawai'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_akhir = $_POST['jam_akhir'];


    $addtotable = mysqli_query($conn, "insert into jadwal_shift_hewan(id_jadwal_hewan,id_hewan,id_pegawai,jam_mulai,jam_akhir) values ('$id_jadwal_hewan','$idhewannya','$idpegawainya','$jam_mulai','$jam_akhir')");
    if($addtotable){
        header('location:jadwalshifthewan.php');
    } else{
        echo 'Gagal';
        header('location:jadwalshifthewan.php');
    }
}

//TAMBAH JADWAL SHIFT SARANA
if(isset($_POST['tambahjadwalshiftsarana'])){
    $id_jadwal_sarana = $_POST['id_jadwal_sarana'];
    $idsarananya = $_POST['idsarana'];
    $idpegawainya = $_POST['idpegawai'];
    $tgl_check_sarana = $_POST['tgl_check_sarana'];
    $keadaan_sarana = $_POST['keadaan_sarana'];


    $addtotable = mysqli_query($conn, "insert into jadwal_shift_sarana(id_jadwal_sarana,id_sarana,id_pegawai,tgl_check_sarana,keadaan_sarana) values ('$id_jadwal_sarana','$idsarananya','$idpegawainya','$tgl_check_sarana','$keadaan_sarana')");
    if($addtotable){
        header('location:jadwalshiftsarana.php');
    } else{
        echo 'Gagal';
        header('location:jadwalshiftsarana.php');
    }
}

//UPDATE HEWAN
if(isset($_POST['updatehewan'])){
    $id_hewan = $_POST['id_hewan'];
    $kategori_hewan = $_POST['kategori_hewan'];
    $nama_hewan = $_POST['nama_hewan'];
    $jumlah_hewan = $_POST['jumlah_hewan'];
    $lokasi_hewan = $_POST['lokasi_hewan'];

    $update = mysqli_query($conn, "update hewan set id_hewan='$id_hewan',kategori_hewan='$kategori_hewan',nama_hewan='$nama_hewan',jumlah_hewan='$jumlah_hewan',lokasi_hewan='$lokasi_hewan' where id_hewan='$id_hewan'");
    if($update){
        header('location:index.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "index.php";
        </script>
        ';
    }
}

//UPDATE MAKANAN
if(isset($_POST['updatemakanan'])){
    $id_makanan = $_POST['id_makanan'];
    $idhewannya = $_POST['idhewannya'];
    $nama_makanan = $_POST['nama_makanan'];
    $stok_makanan = $_POST['stok_makanan'];

    $update = mysqli_query($conn, "update makanan set id_makanan='$id_makanan',id_hewan='$idhewannya',nama_makanan='$nama_makanan',stok_makanan='$stok_makanan' where id_makanan='$id_makanan'");
    if($update){
        header('location:makanan.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "makanan.php";
        </script>
        ';
    }
}

//UPDATE PEGAWAI
if(isset($_POST['updatepegawai'])){
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $ttl_pegawai = $_POST['ttl_pegawai'];
    $no_pegawai = $_POST['no_pegawai'];
    $gender_pegawai = $_POST['gender_pegawai'];
    $gaji_pegawai = $_POST['gaji_pegawai'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $update = mysqli_query($conn, "update pegawai set id_pegawai='$id_pegawai',nama_pegawai='$nama_pegawai',ttl_pegawai='$ttl_pegawai',no_pegawai='$no_pegawai', gender_pegawai='$gender_pegawai',gaji_pegawai='$gaji_pegawai',username='$username',password='$password' where id_pegawai='$id_pegawai'");
    if($update){
        header('location:pegawai.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "pegawai.php";
        </script>
        ';
    }
}

//UPDATE SARANA
if(isset($_POST['updatesarana'])){
    $id_sarana = $_POST['id_sarana'];
    $nama_sarana = $_POST['nama_sarana'];

    $update = mysqli_query($conn, "update sarana set id_sarana='$id_sarana',nama_sarana='$nama_sarana' where id_sarana='$id_sarana'");
    if($update){
        header('location:sarana.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "sarana.php";
        </script>
        ';
    }
}

//UPDATE SUPPLIER
if(isset($_POST['updatesupplier'])){
    $id_supplier = $_POST['id_supplier'];
    $idmakanannya = $_POST['idmakanan'];
    $nama_supplier = $_POST['nama_supplier'];
    $no_supplier = $_POST['no_supplier'];
    $tgl_supplier = $_POST['tgl_supplier'];

    $update = mysqli_query($conn, "update supplier set id_supplier='$id_supplier',id_makanan='$idmakanannya',nama_supplier='$nama_supplier',no_supplier='$no_supplier',tgl_supplier='$tgl_supplier' where id_supplier='$id_supplier'");
    if($update){
        header('location:supplier.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "supplier.php";
        </script>
        ';
    }
}

//UPDATE JADWAL CHECK UP
if(isset($_POST['updatejadwalcheckup'])){
    $id_checkup = $_POST['id_checkup'];
    $idhewannya = $_POST['idhewan'];
    $idpegawainya = $_POST['idpegawai'];
    $tanggal_checkup = $_POST['tanggal_checkup'];

    $update = mysqli_query($conn, "update jadwal_checkup set id_checkup='$id_checkup',id_hewan='$idhewannya',id_pegawai='$idpegawainya',tanggal_checkup='$tanggal_checkup' where id_checkup='$id_checkup'");
    if($update){
        header('location:jadwalcheckup.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "jadwalcheckup.php";
        </script>
        ';
    }
}

//UPDATE JADWAL SHIFT HEWAN
if(isset($_POST['updatejadwalshifthewan'])){
    $id_jadwal_hewan = $_POST['id_jadwal_hewan'];
    $idhewannya = $_POST['idhewan'];
    $idpegawainya = $_POST['idpegawai'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_akhir = $_POST['jam_akhir'];

    $update = mysqli_query($conn, "update jadwal_shift_hewan set id_jadwal_hewan='$id_jadwal_hewan',id_hewan='$idhewannya',id_pegawai='$idpegawainya',jam_mulai='$jam_mulai',jam_akhir='$jam_akhir' where id_jadwal_hewan='$id_jadwal_hewan'");
    if($update){
        header('location:jadwalshifthewan.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "jadwalshifthewan.php";
        </script>
        ';
    }
}

//UPDATE JADWAL SHIFT SARANA
if(isset($_POST['updatejadwalshiftsarana'])){
    $id_jadwal_sarana = $_POST['id_jadwal_sarana'];
    $idsarananya = $_POST['idsarana'];
    $idpegawainya = $_POST['idpegawai'];
    $tgl_check_sarana = $_POST['tgl_check_sarana'];
    $keadaan_sarana = $_POST['keadaan_sarana'];

    $update = mysqli_query($conn, "update jadwal_shift_sarana set id_jadwal_sarana='$id_jadwal_sarana',id_sarana='$idsarananya',id_pegawai='$idpegawainya',tgl_check_sarana='$tgl_check_sarana',keadaan_sarana='$keadaan_sarana' where id_jadwal_sarana='$id_jadwal_sarana'");
    if($update){
        header('location:jadwalshiftsarana.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "jadwalshiftsarana.php";
        </script>
        ';
    }
}

//DELETE HEWAN
if(isset($_POST['deletehewan'])){
    $id_hewan = $_POST['id_hewan'];

    $delete = mysqli_query($conn, "delete from hewan where id_hewan = '$id_hewan'");
    if($delete){
        header('location:index.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "index.php";
        </script>
        ';
    }
} 

//DELETE MAKANAN
if(isset($_POST['deletemakanan'])){
    $id_makanan = $_POST['id_makanan'];

    $delete = mysqli_query($conn, "delete from makanan where id_makanan = '$id_makanan'");
    if($delete){
        header('location:makanan.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "makanan.php";
        </script>
        ';
    }
} 

//DELETE PEGAWAI
if(isset($_POST['deletepegawai'])){
    $id_pegawai = $_POST['id_pegawai'];

    $delete = mysqli_query($conn, "delete from pegawai where id_pegawai = '$id_pegawai'");
    if($delete){
        header('location:pegawai.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "pegawai.php";
        </script>
        ';
    }
} 

//DELETE SARANA
if(isset($_POST['deletesarana'])){
    $id_sarana = $_POST['id_sarana'];

    $delete = mysqli_query($conn, "delete from sarana where id_sarana = '$id_sarana'");
    if($delete){
        header('location:sarana.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "sarana.php";
        </script>
        ';
    }
} 

//DELETE SUPPLIER
if(isset($_POST['deletesupplier'])){
    $id_supplier = $_POST['id_supplier'];

    $delete = mysqli_query($conn, "delete from supplier where id_supplier = '$id_supplier'");
    if($delete){
        header('location:supplier.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "supplier.php";
        </script>
        ';
    }
} 

//DELETE JADWAL CHECK UP
if(isset($_POST['deletecheckup'])){
    $id_checkup = $_POST['id_checkup'];

    $delete = mysqli_query($conn, "delete from jadwal_checkup where id_checkup = '$id_checkup'");
    if($delete){
        header('location:jadwalcheckup.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "jadwalcheckup.php";
        </script>
        ';
    }
} 

//DELETE JADWAL SHIFT HEWAN
if(isset($_POST['deletejadwalshifthewan'])){
    $id_jadwal_hewan = $_POST['id_jadwal_hewan'];

    $delete = mysqli_query($conn, "delete from jadwal_shift_hewan where id_jadwal_hewan = '$id_jadwal_hewan'");
    if($delete){
        header('location:jadwalshifthewan.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "jadwalshifthewan.php";
        </script>
        ';
    }
} 

//DELETE JADWAL SHIFT SARANA
if(isset($_POST['deletejadwalsarana'])){
    $id_jadwal_sarana = $_POST['id_jadwal_sarana'];

    $delete = mysqli_query($conn, "delete from jadwal_shift_sarana where id_jadwal_sarana = '$id_jadwal_sarana'");
    if($delete){
        header('location:jadwalshiftsarana.php');
    } else{
        echo '
        <script>
            alert("Data terhubung dengan data lain");
            window.location.href = "jadwalshiftsarana.php";
        </script>
        ';
    }
} 

?>