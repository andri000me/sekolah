<?php
include "../../config/koneksi.php";
$nis = $_GET['nis'];
$status = $_GET['status'];

if($status == 1){
    $sql = mysqli_query($koneksi,"UPDATE siswa SET wali_status = '1' WHERE nis = '$nis';");
}else{
    $sql = mysqli_query($koneksi,"UPDATE siswa SET wali_status = '0' WHERE nis = '$nis';");
}

header('location:http://localhost/sekolah/media.php?module=laporan_raporsiswa');
?>