<?php
include"config/koneksi.php";
$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT *FROM user WHERE id_sekolah='$_POST[id_sekolah]'"));
    if ($cek > 0){
        echo "<script>window.alert('Maaf Admin Sekolah Anda Sudah Terdaftar');
        window.location=('daftar.php')</script>";
    }else{
$pw=md5($_POST['pass']);
mysqli_query($koneksi,"INSERT INTO user(nama,username,pass,id_sekolah,level) 
VALUES(
'$_POST[nama]',
'$_POST[username]',
'$pw',
'$_POST[id_sekolah]',
'admin_guru')");
echo "<script>window.alert('Selamat Anda Sudah Terdaftar');
        window.location=('daftar.php')</script>";
    }
        ?>