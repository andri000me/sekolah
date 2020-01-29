<?php
include"../config/koneksi.php";
$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT *FROM sekolah WHERE kode_sekolah='$_POST[kode_sekolah]'"));
    if ($cek > 0){
        echo "<script>window.alert('Maaf Sekolah Anda Sudah Terdaftar !');
        window.location=('../reg_sekolah.php')</script>";
    }else{
    $allowed_ext    = array('jpg','png','jpeg');
                $file_name        = $_FILES['file']['name'];        
                $exploded = explode('.',$_FILES['file']['name']);
                $file_ext=strtolower(end($exploded));
                $file_size        = $_FILES['file']['size'];
                $file_tmp        = $_FILES['file']['tmp_name'];
                $nama            = $_POST['nama_file'];
                if(in_array($file_ext, $allowed_ext) === true){
                    
                       
                        $lokasi = '../files/'.$nama.'.'.$file_ext;
                        move_uploaded_file($file_tmp, $lokasi);

$in=mysqli_query($koneksi,"INSERT INTO sekolah(kode_sekolah,nama_sekolah,alamat,kabupaten,nama_file,tipe_file,ukuran_file,file,status,provinsi) 
VALUES(
'$_POST[kode_sekolah]',
'$_POST[nama_sekolah]',
'$_POST[alamat]',
'$_POST[kabupaten]',
'$nama', '$file_ext', '$file_size', '$lokasi','$_POST[status]','$_POST[provinsi]')");
if($in){
                            
                
            echo "<script>window.alert('Selamat Sekolah Anda Sudah Terdaftar');
                                    window.location=('../reg_sekolah.php')</script>";

                        }else{
                      echo "<script>window.alert('Gagal Upload File');
                                    window.location=('../reg_sekolah.php')</script>";
                        
                    }
                }else{
                    echo "<script>window.alert('Format Logo Tidak Diizinkan, Format Logo Harus JPG atau PNG');
                                    window.location=('../reg_sekolah.php')</script>";
                }
            }
?>
