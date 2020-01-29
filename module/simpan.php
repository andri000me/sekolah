<?php
session_start();
if(!empty($_SESSION['nama'])){
$uidi=$_SESSION['idu']; 
$usre=$_SESSION['nama'];
$level=$_SESSION['level'];
$klss=$_SESSION['idk'];
$ortu=$_SESSION['ortu'];
$idd=$_SESSION['id_sekolah'];
include "../config/koneksi.php";


?>
<?php
if($_GET['act']=="edit_admin"){
$lr=md5($_POST["pass"]);
mysqli_query($koneksi,"UPDATE user SET
        nama='$_POST[nama]',
        username='$_POST[username]',
        pass='$lr'
        where idu='$_POST[idu]'");
echo "<script>window.alert('Data Admin Sekolah Tersimpan');
        window.location=('../media.php?module=lihat_admin')</script>";

}

if($_GET['act']=="input_siswa")
{
      $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT *FROM siswa WHERE nis='$_POST[nis]'"));
    if ($cek > 0){
        echo "<script>window.alert('Data Siswa yang anda masukkan sudah ada, Silahkan masukkan kembali');
        window.location=('../media.php?module=input_siswa&act=input')</script>";
    }else{
                $allowed_ext    = array('jpg','png','jpeg','PNG');
                $file_name        = $_FILES['file']['name'];        
                $exploded         = explode('.',$_FILES['file']['name']);
                $file_ext         =strtolower(end($exploded));
                $file_size        = $_FILES['file']['size'];
                $file_tmp         = $_FILES['file']['tmp_name'];
                $nama             = $_POST['nama_file'];

                $tipe_file    = array('jpg','png','jpeg','PNG');
                $nama_file       = $_FILES['barcode']['name'];        
                $exploded         = explode('.',$_FILES['barcode']['name']);
                $ekstensi_file         =strtolower(end($exploded));
                $ukuran_file        = $_FILES['barcode']['size'];
                $tmp_file         = $_FILES['barcode']['tmp_name'];
                $nama_barcode     = $_POST['nama_barcode'];
                if(in_array($file_ext, $allowed_ext) === true){
                    
                       
                        $lokasi = '../files/'.$nama.'.'.$file_ext;
                        move_uploaded_file($file_tmp, $lokasi);

                        $lokasii = '../qrcode/'.$nama_barcode.'.'.$ekstensi_file;
                        move_uploaded_file($tmp_file, $lokasii);

$mr=md5($_POST["pass"]);
$in=mysqli_query($koneksi,"INSERT INTO siswa(nis,nama,jk,alamat,idk,tlp,bapak,k_bapak,ibu,k_ibu,tempat,tanggal,tahun_ajaran,nama_file,tipe_file,ukuran_file,file,nama_barcode,tipe_barcode,ukuran_barcode,barcode,pass) 
VALUES(
'$_POST[nis]',
'$_POST[nama]',
'$_POST[jk]',
'$_POST[alamat]',
'$_POST[kelas]',
'$_POST[tlp]',
'$_POST[bapak]',
'$_POST[k_bapak]',
'$_POST[ibu]',
'$_POST[k_ibu]',
'$_POST[tempat]',
'$_POST[tanggal]',
'$_POST[tahun_ajaran]',
'$nama', '$file_ext', '$file_size', '$lokasi',
'$nama_barcode', '$ekstensi_file', '$ukuran_file','$lokasii',
'$mr')");
if($in){
                            
                
            echo "<script>window.alert('Data Siswa Tersimpan');
                                    window.location=('../media.php?module=tampil')</script>";

                        }else{
                      echo "<script>window.alert('Gagal Menyimpan Data Siswa');
                                    window.location=('../media.php?module=tampil')</script>";
                        
                    }
                }else{
                    echo "<script>window.alert('Format Foto Tidak Diizinkan, Format Foto Harus JPG atau PNG');
                                    window.location=('../media.php?module=tampil')</script>";
                }
            }
}

if($_GET['act']=="edit_siswa"){
 $allowed_ext      = array('jpg','png','jpeg');
                $file_name        = $_FILES['file']['name'];
                $exploded         = explode('.',$_FILES['file']['name']);
                $file_ext         =strtolower(end($exploded));
                $file_size        = $_FILES['file']['size'];
                $file_tmp         = $_FILES['file']['tmp_name'];
                $nama             = $_POST['nama_file'];

               
              if(in_array($file_ext, $allowed_ext) === true){
                    

                        $lokasi = '../files/'.$nama.'.'.$file_ext;
                        move_uploaded_file($file_tmp, $lokasi);
$mr=md5($_POST["pass"]);
$in=mysqli_query($koneksi,"UPDATE siswa SET 
nis='$_POST[nis]',
nama='$_POST[nama]',
jk='$_POST[jk]',
alamat='$_POST[alamat]',
idk='$_POST[kelas]',
tlp='$_POST[tlp]',
bapak='$_POST[bapak]',
k_bapak='$_POST[k_bapak]',
ibu='$_POST[ibu]',
k_ibu='$_POST[k_ibu]',
tempat='$_POST[tempat]',
tanggal='$_POST[tanggal]',
tahun_ajaran='$_POST[tahun_ajaran]',
nama_file='$nama',
tipe_file='$file_ext',
ukuran_file='$file_size',
file='$lokasi',
pass='$mr'
where ids='$_POST[ids]'");
if($in){
                            
                
            echo "<script>window.alert('Data Siswa Tersimpan');
                                    window.location=('../media.php?module=tampil')</script>";

                        }else{
                      echo "<script>window.alert('Gagal Menyimpan Data Siswa');
                                    window.location=('../media.php?module=tampil')</script>";
                        
                    }
                }else{
                    echo "<script>window.alert('Format Foto Tidak Diizinkan, Format Foto Harus JPG atau PNG');
                                    window.location=('../media.php?module=tampil')</script>";
                }
            }


if($_GET['act']=="siswa_det"){
    $pr=md5($_POST['pass']);

mysqli_query($koneksi,"UPDATE siswa SET 
nis='$_POST[nis]',
nama='$_POST[nama]',
jk='$_POST[jk]',
alamat='$_POST[alamat]',
tlp='$_POST[tlp]',
bapak='$_POST[bapak]',
k_bapak='$_POST[k_bapak]',
ibu='$_POST[ibu]',
k_ibu='$_POST[k_ibu]',
tempat='$_POST[tempat]',
tanggal='$_POST[tanggal]',
pass='$pr'  WHERE ids='$_POST[id]'");
echo "<script>window.alert('Data Siswa Tersimpan');
        window.location=('../media.php?module=siswa_det')</script>";
}

if($_GET['act']=="hapus"){
mysqli_query($koneksi,"DELETE FROM siswa WHERE ids='$_GET[ids]'");
echo "<script>window.alert('Data Siswa Sudah Terhapus');
        window.location=('../media.php?module=tampil')</script>";

}

if($_GET['act']=="edit_sekolah"){
                $allowed_ext      = array('jpg','png','jpeg');
                $file_name        = $_FILES['file']['name'];
                $exploded         = explode('.',$_FILES['file']['name']);
                $file_ext         =strtolower(end($exploded));
                $file_size        = $_FILES['file']['size'];
                $file_tmp         = $_FILES['file']['tmp_name'];
                $nama             = $_POST['nama_file'];

               
              if(in_array($file_ext, $allowed_ext) === true){
                    

                        $lokasi = '../files/'.$nama.'.'.$file_ext;
                        move_uploaded_file($file_tmp, $lokasi);
                        $in = mysqli_query($koneksi,"UPDATE sekolah SET 
kode_sekolah='$_POST[kode_sekolah]',
nama_sekolah='$_POST[nama_sekolah]',
alamat      ='$_POST[alamat]',
kabupaten   ='$_POST[kabupaten]',
nama_file='$nama',
tipe_file='$file_ext',
ukuran_file='$file_size',
file='$lokasi',
status='$_POST[status]'
WHERE id_sekolah='$_POST[id_sekolah]'");
if($in){
                            
                           echo "<script>window.alert('Selamat Sekolah Anda Sudah Terdaftar');
                                    window.location=('../media.php?module=sekolah')</script>";

                        }else{
                      echo "<script>window.alert('Gagal Upload File');
                                    window.location=('../media.php?module=sekolah')</script>";
                        
                    }
                }else{
                    echo "<script>window.alert('Format Logo Tidak Diizinkan, Format Logo Harus JPG atau PNG');
                                    window.location=('../media.php?module=sekolah')</script>";
                }
            }
            





if($_GET['act']=="input_kelas"){
mysqli_query($koneksi,"INSERT INTO kelas(id,nama_kelas,tahun_ajaran) VALUES(
        '$_POST[id]',
        '$_POST[nama_kelas]',
        '$_POST[tahun_ajaran]'
        )");
echo "<script>window.alert('Data Kelas Tersimpan');
        window.location=('../media.php?module=pilih_kelas')</script>";
}

if($_GET['act']=="edit_kelas"){
mysqli_query($koneksi,"UPDATE kelas SET
        idk='$_POST[idk]',
        nama_kelas='$_POST[nama_kelas]',
        tahun_ajaran='$_POST[tahun_ajaran]' 
        WHERE idk='$_POST[idk]'");
echo "<script>window.alert('Data Kelas Tersimpan');
        window.location=('../media.php?module=pilih_kelas')</script>";

}
if($_GET['act']=="hapus_kelas"){
mysqli_query($koneksi,"DELETE FROM kelas  WHERE idk='$_GET[idk]'");
echo "<script>window.alert('Data Kelas Sudah Terhapus');
        window.location=('../media.php?module=pilih_kelas')</script>";

}

if($_GET['act']=="input_ekstrakulikuler"){
mysqli_query($koneksi,"INSERT INTO ekstrakulikuler(nama_ekstra,idk,tahun_ajaran) 
VALUES(
'$_POST[nama_ekstra]',
'$_POST[kelas]',
'$_POST[tahun_ajaran]' )");
echo "<script>window.alert('Data Ekstrakulikuler Tersimpan');
        window.location=('../media.php?module=tampil_ekstrakulikuler')</script>";

}
if($_GET['act']=="edit_ekstrakulikuler"){
mysqli_query($koneksi,"UPDATE ekstrakulikuler SET
nama_ekstra  ='$_POST[nama_ekstra]',
idk   ='$_POST[kelas]',
tahun_ajaran ='$_POST[tahun_ajaran]'
WHERE idek='$_POST[idek]'");
echo "<script>window.alert('Data Ekstrakulikuler Tersimpan');
        window.location=('../media.php?module=tampil_ekstrakulikuler')</script>";

}
if($_GET['act']=="hapus_ekstrakulikuler"){
mysqli_query($koneksi,"DELETE FROM ekstrakulikuler WHERE idek='$_GET[idek]'");
echo "<script>window.alert('Data Ekstrakulikuler Sudah Terhapus');
        window.location=('../media.php?module=tampil_ekstrakulikuler')</script>";

}

if($_GET['act']=="input_gurumapel"){
          $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT *FROM gurumapel WHERE nip='$_POST[nip]'"));
    if ($cek > 0){
        echo "<script>window.alert('Data Guru Mata Pelajaran yang anda masukkan sudah ada, Silahkan masukkan kembali');
        window.location=('../media.php?module=input_gurumapel&act=input')</script>";
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
$mrg=md5($_POST['pass']);
$in=mysqli_query($koneksi,"INSERT INTO gurumapel(nip,nama,jk,alamat,tlp,idk,nama_mapel,nama_file,tipe_file,ukuran_file,file,pass) 
VALUES(
'$_POST[nip]',
'$_POST[nama]',
'$_POST[jk]',
'$_POST[alamat]',
'$_POST[tlp]',
'$_POST[kelas]',
'$_POST[nama_mapel]','$nama', '$file_ext', '$file_size', '$lokasi',
'$mrg')");
if($in){
                            
                
            echo "<script>window.alert('Data Guru Mata Pelajaran Tersimpan');
                                    window.location=('../media.php?module=tampil_gurumapel')</script>";

                        }else{
                      echo "<script>window.alert('Gagal Menyimpan Data Guru Mata Pelajaran');
                                    window.location=('../media.php?module=tampil_gurumapel')</script>";
                        
                    }
                }else{
                    echo "<script>window.alert('Format Foto Tidak Diizinkan, Format Foto Harus JPG atau PNG');
                                    window.location=('../media.php?module=tampil_gurumapel')</script>";
                }
            }
}

if($_GET['act']=="edit_gurumapel"){
    $allowed_ext      = array('jpg','png','jpeg');
                $file_name        = $_FILES['file']['name'];
                $exploded         = explode('.',$_FILES['file']['name']);
                $file_ext         =strtolower(end($exploded));
                $file_size        = $_FILES['file']['size'];
                $file_tmp         = $_FILES['file']['tmp_name'];
                $nama             = $_POST['nama_file'];

               
              if(in_array($file_ext, $allowed_ext) === true){
                    

                        $lokasi = '../files/'.$nama.'.'.$file_ext;
                        move_uploaded_file($file_tmp, $lokasi);
$mr=md5($_POST["pass"]);
$in=mysqli_query($koneksi,"UPDATE gurumapel SET nip='$_POST[nip]',
nama='$_POST[nama]',
jk='$_POST[jk]',
alamat='$_POST[alamat]',
tlp='$_POST[tlp]',
idk='$_POST[kelas]',
nama_mapel='$_POST[nama_mapel]',
nama_file='$nama',
tipe_file='$file_ext',
ukuran_file='$file_size',
file='$lokasi',
pass='$mr'  where idg='$_POST[id]'");
if($in){
                            
                
            echo "<script>window.alert('Data Guru Mata Pelajaran Tersimpan');
                                    window.location=('../media.php?module=tampil_gurumapel')</script>";

                        }else{
                      echo "<script>window.alert('Gagal Menyimpan Data Guru Mata Pelajaran');
                                    window.location=('../media.php?module=tampil_gurumapel')</script>";
                        
                    }
                }else{
                    echo "<script>window.alert('Format Foto Tidak Diizinkan, Format Foto Harus JPG atau PNG');
                                    window.location=('../media.php?module=tampil_gurumapel')</script>";
                }
            }


if($_GET['act']=="hapus_gurumapel"){
mysqli_query($koneksi,"DELETE FROM gurumapel  where idg='$_GET[idg]'");
echo "<script>window.alert('Data Guru Mata Pelajaran Sudah Terhapus');
		window.location=('../media.php?module=tampil_gurumapel')</script>";

}
if($_GET['act']=="gurumapel_det"){
if(!empty($_POST['pass'])){
$pw=md5($_POST['pass']);
mysqli_query($koneksi,"UPDATE gurumapel SET 
nip='$_POST[nip]',
nama='$_POST[nama]',
jk='$_POST[jk]',
tlp='$_POST[tlp]',
alamat='$_POST[alamat]',pass='$pw' where idg='$_POST[id]'");

echo "<script>window.alert('Data Guru Mata Pelajaran Tersimpan');
        window.location=('../media.php?module=gurumapel_det')</script>";
}
}
if($_GET['act']=="input_mapel")
{

mysqli_query($koneksi,"INSERT INTO mapel(kode_mapel,nama_mapel,idk,kkm) 
VALUES(
'$_POST[kode_mapel]',
'$_POST[nama_mapel]',
'$_POST[kelas]',
'$_POST[kkm]')");
echo "<script>window.alert('Data Mata Pelajaran Tersimpan');
        window.location=('../media.php?module=tampil_mapel')</script>";

}

if($_GET['act']=="edit_mapel"){
mysqli_query($koneksi,"UPDATE mapel SET 
   
        kode_mapel='$_POST[kode_mapel]',
        nama_mapel='$_POST[nama_mapel]',
        idk='$_POST[kelas]',
        kkm='$_POST[kkm]'
        WHERE idm='$_POST[id]'");
echo "<script>window.alert('Data Mata Pelajaran Tersimpan');
        window.location=('../media.php?module=tampil_mapel')</script>";

}

if($_GET['act']=="hapus_mapel"){
mysqli_query($koneksi,"DELETE FROM mapel WHERE idm='$_GET[idm]'");
echo "<script>window.alert('Data Mata Pelajaran Sudah Terhapus');
        window.location=('../media.php?module=tampil_mapel')</script>";

}
if($_GET['act']=="input_walikelas"){
     $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT *FROM walikelas WHERE nip='$_POST[nip]'"));
    if ($cek > 0){
        echo "<script>window.alert('Data Wali Kelas yang anda masukkan sudah ada, Silahkan masukkan kembali');
        window.location=('../media.php?module=input_walikelas&act=input')</script>";
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

$mrg=md5($_POST['pass']);
$in=mysqli_query($koneksi,"INSERT INTO walikelas(nip,nama,jk,alamat,tlp,idk,nama_file,tipe_file,ukuran_file,file,pass) 
VALUES(
'$_POST[nip]',
'$_POST[nama]',
'$_POST[jk]',
'$_POST[alamat]',
'$_POST[tlp]',
'$_POST[kelas]','$nama', '$file_ext', '$file_size', '$lokasi',
'$mrg')");
if($in){
                            
                
            echo "<script>window.alert('Data Wali Kelas Tersimpan');
                                    window.location=('../media.php?module=tampil_walikelas')</script>";

                        }else{
                      echo "<script>window.alert('Gagal Menyimpan Data Wali Kelas');
                                    window.location=('../media.php?module=tampil_walikelas')</script>";
                        
                    }
                }else{
                    echo "<script>window.alert('Format Foto Tidak Diizinkan, Format Foto Harus JPG atau PNG');
                                    window.location=('../media.php?module=tampil_walikelas')</script>";
                }
            }
}

if($_GET['act']=="edit_walikelas"){
                    $allowed_ext      = array('jpg','png','jpeg');
                $file_name        = $_FILES['file']['name'];
                $exploded         = explode('.',$_FILES['file']['name']);
                $file_ext         =strtolower(end($exploded));
                $file_size        = $_FILES['file']['size'];
                $file_tmp         = $_FILES['file']['tmp_name'];
                $nama             = $_POST['nama_file'];

               
              if(in_array($file_ext, $allowed_ext) === true){
                    

                        $lokasi = '../files/'.$nama.'.'.$file_ext;
                        move_uploaded_file($file_tmp, $lokasi);
$mr=md5($_POST["pass"]);
$in=mysqli_query($koneksi,"UPDATE walikelas SET nip='$_POST[nip]',
nama='$_POST[nama]',
jk='$_POST[jk]',
alamat='$_POST[alamat]',
tlp='$_POST[tlp]',
idk='$_POST[kelas]',
nama_file='$nama',
tipe_file='$file_ext',
ukuran_file='$file_size',
file='$lokasi',
pass='$mr'  where idw='$_POST[id]'");
if($in){
                            
                           echo "<script>window.alert('Data Wali Kelas Tersimpan');
                                    window.location=('../media.php?module=tampil_walikelas')</script>";

                        }else{
                      echo "<script>window.alert('Gagal Menyimpan Data Wali Kelas');
                                    window.location=('../media.php?module=tampil_walikelas')</script>";
                        
                    }
                }else{
                    echo "<script>window.alert('Format Foto Tidak Diizinkan, Format Foto Harus JPG atau PNG');
                                    window.location=('../media.php?module=tampil_walikelas')</script>";
                }
            }

            
if($_GET['act']=="hapus_walikelas"){
mysqli_query($koneksi,"DELETE FROM walikelas  WHERE idw='$_GET[idw]'");
echo "<script>window.alert('Data Wali Kelas Sudah Terhapus');
                window.location=('../media.php?module=tampil_walikelas')</script>";

}
if($_GET['act']=="walikelas_det"){
if(!empty($_POST['pass'])){
$pw=md5($_POST['pass']);
mysqli_query($koneksi,"UPDATE walikelas SET 
nip='$_POST[nip]',
nama='$_POST[nama]',
jk='$_POST[jk]',
alamat='$_POST[alamat]',
tlp='$_POST[tlp]',
pass='$pw' where idw='$_POST[idw]'");
echo "<script>window.alert('Data Wali Kelas Tersimpan');
        window.location=('../media.php?module=walikelas_det')</script>";

}
}

if($_GET['act']=="input_presensi"){

$tg=date("d-m-Y");

        $sql=mysqli_query($koneksi,"SELECT * FROM siswa WHERE idk='$_GET[klas]' ");
        while($rs=mysqli_fetch_array($sql)){
        $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
        $rsw=mysqli_fetch_array($sqlw);
        $sqlc=mysqli_query($koneksi,"SELECT * FROM mapel WHERE nama_mapel='$_GET[mapel]'");
        $rsc=mysqli_fetch_array($sqlc);
$ra=$rs['ids'];
echo $_POST[$ra];
        $sqla=mysqli_query($koneksi,"SELECT * FROM absen WHERE ids='$rs[ids]' AND tgl='$tg' AND nama_mapel='$_GET[mapel]' ");
        $rsa=mysqli_fetch_array($sqla);
        $conk=mysqli_num_rows($sqla);
if($conk==0){      


mysqli_query($koneksi,"INSERT INTO absen(ids,tgl,idk,nama_kelas,nis,nama,nama_mapel,ket) 
VALUES(
'$rs[ids]',
'$tg',
'$rs[idk]',
'$rsw[nama_kelas]',
'$rs[nis]',
'$rs[nama]',
'$rsc[nama_mapel]',
'$_POST[$ra]')");

}else{


mysqli_query($koneksi,"UPDATE absen SET ket='$_POST[$ra]' WHERE ids='$rs[ids]' and tgl='$tg' ");     
}
}
echo "<script>window.alert('Data Presensi Tersimpan');
        window.location=('../media.php?module=pilih')</script>";
}


if($_GET['act']=="input_nilai"){
$sql=mysqli_query($koneksi,"SELECT *FROM siswa WHERE ids='$_GET[ids]'");
$rs=mysqli_fetch_array($sql);
$sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
$rsw=mysqli_fetch_array($sqlw);
$sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
$rsb=mysqli_fetch_array($sqlb);
$sqlc=mysqli_query($koneksi,"SELECT * FROM mapel WHERE nama_mapel='$_GET[mapel]' AND idk='$rsw[idk]'");
$rsc=mysqli_fetch_array($sqlc);
mysqli_query($koneksi,"INSERT INTO rapor(ids,nama,nis,nama_sekolah,alamat,nama_kelas,tahun_ajaran,nama_mapel,kkm,nilai_pengetahuan,predikat_pengetahuan,deskripsi_pengetahuan,nilai_keterampilan,predikat_keterampilan,deskripsi_keterampilan,dalam_mapel,antar_mapel,deskripsi_sikap) 
VALUES(
'$rs[ids]',
'$rs[nama]',
'$rs[nis]',
'$rsb[nama_sekolah]',
'$rsb[alamat]',
'$rsw[nama_kelas]',
'$rs[tahun_ajaran]',
'$rsc[nama_mapel]',
'$rsc[kkm]',
'$_POST[nilai_pengetahuan]',
'$_POST[predikat_pengetahuan]',
'$_POST[deskripsi_pengetahuan]',
'$_POST[nilai_keterampilan]',
'$_POST[predikat_keterampilan]',
'$_POST[deskripsi_keterampilan]',
'$_POST[dalam_mapel]',
'$_POST[antar_mapel]',
'$_POST[deskripsi_sikap]'
)");
echo "<script>window.alert('Data Nilai Rapor Siswa Tersimpan');
        window.location=('../media.php?module=pilih_inputrapor')</script>";

}
if($_GET['act']=="edit_nilai"){
mysqli_query($koneksi,"UPDATE rapor SET
nilai_pengetahuan='$_POST[nilai_pengetahuan]',
predikat_pengetahuan='$_POST[predikat_pengetahuan]',
deskripsi_pengetahuan='$_POST[deskripsi_pengetahuan]',
nilai_keterampilan='$_POST[nilai_keterampilan]',
predikat_keterampilan='$_POST[predikat_keterampilan]',
deskripsi_keterampilan='$_POST[deskripsi_keterampilan]',
dalam_mapel='$_POST[dalam_mapel]',
antar_mapel='$_POST[antar_mapel]',
deskripsi_sikap='$_POST[deskripsi_sikap]'
WHERE idr='$_POST[idr]'");
echo "<script>window.alert('Data Nilai Rapor Siswa Tersimpan');
        window.location=('../media.php?module=pilih_inputrapor')</script>";

}
if($_GET['act']=="input_kondisi"){
$sql=mysqli_query($koneksi,"SELECT *FROM siswa WHERE ids='$_GET[ids]'");
$rs=mysqli_fetch_array($sql);
$sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
$rsw=mysqli_fetch_array($sqlw);
$sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
$rsb=mysqli_fetch_array($sqlb);
mysqli_query($koneksi,"INSERT INTO rapor_kondisi(ids,nis,nama,tahun_ajaran,nama_kelas,nama_sekolah,alamat,nama_ekstra1,nama_ekstra2,nilai_ekstra1,nilai_ekstra2,ket_sakit,ket_izin,ket_alpa,kelakuan,kerajinan,kerapihan,kebersihan) 
VALUES(
'$rs[ids]',
'$rs[nis]',
'$rs[nama]',
'$rs[tahun_ajaran]',
'$rsw[nama_kelas]',
'$rsb[nama_sekolah]',
'$rsb[alamat]',
'$_POST[nama_ekstra1]',
'$_POST[nama_ekstra2]',
'$_POST[nilai_ekstra1]',
'$_POST[nilai_ekstra2]',
'$_POST[ket_sakit]',
'$_POST[ket_izin]',
'$_POST[ket_alpa]',
'$_POST[kelakuan]',
'$_POST[kerajinan]',
'$_POST[kerapihan]',
'$_POST[kebersihan]'
)");
echo "<script>window.alert('Data Pelengkap Rapor Siswa Tersimpan');
        window.location=('../media.php?module=pilih_inputkondisi')</script>";
    }
if($_GET['act']=="edit_kondisi"){
mysqli_query($koneksi,"UPDATE rapor_kondisi SET
nama_ekstra1='$_POST[nama_ekstra1]',
nama_ekstra2='$_POST[nama_ekstra2]',
nilai_ekstra1='$_POST[nilai_ekstra1]',
nilai_ekstra2='$_POST[nilai_ekstra2]',
ket_sakit='$_POST[ket_sakit]',
ket_izin='$_POST[ket_izin]',
ket_alpa='$_POST[ket_alpa]',
kelakuan='$_POST[kelakuan]',
kerajinan='$_POST[kerajinan]',
kerapihan='$_POST[kerapihan]',
kebersihan='$_POST[kebersihan]'
WHERE idrk='$_POST[idrk]'");
echo "<script>window.alert('Data Pelengkap Rapor Siswa Tersimpan');
        window.location=('../media.php?module=pilih_inputkondisi')</script>";

}
if($_GET['act']=="input_prestasi"){
$sql=mysqli_query($koneksi,"SELECT *FROM siswa WHERE ids='$_GET[ids]'");
$rs=mysqli_fetch_array($sql);
$sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
$rsw=mysqli_fetch_array($sqlw);
$sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
$rsb=mysqli_fetch_array($sqlb);
mysqli_query($koneksi,"INSERT INTO prestasi(ids,nis,nama,nama_sekolah,alamat,nama_kelas,tahun_ajaran,tanggal,keterangan_prestasi) 
VALUES(
'$rs[ids]',
'$rs[nis]',
'$rs[nama]',
'$rsb[nama_sekolah]',
'$rsb[alamat]',
'$rsw[nama_kelas]',
'$rs[tahun_ajaran]',
'$_POST[tanggal]',
'$_POST[keterangan_prestasi]'
)");
echo "<script>window.alert('Data Prestasi Siswa Tersimpan');
        window.location=('../media.php?module=pilih_inputprestasi')</script>";
    }
if($_GET['act']=="edit_prestasi"){
mysqli_query($koneksi,"UPDATE prestasi SET
tanggal='$_POST[tanggal]',
keterangan_prestasi='$_POST[keterangan_prestasi]'
WHERE idp='$_POST[idp]'");
echo "<script>window.alert('Data Prestasi Siswa Tersimpan');
        window.location=('../media.php?module=pilih_inputprestasi')</script>";

}
if($_GET['act']=="hapus_prestasi"){
mysqli_query($koneksi,"DELETE FROM prestasi  WHERE idp='$_GET[idp]'");
echo "<script>window.alert('Data Prestasi Sudah Terhapus');
                window.location=('../media.php?module=tampil_prestasi')</script>";

}

if($_GET['act']=="edit_adminku"){
$mr=md5($_POST["pass"]);
mysql_query("UPDATE user SET
        nama='$_POST[nama]',
        username='$_POST[username]',
        email='$_POST[email]',
        pass='$mr'
        WHERE idn='$_POST[idn]'");
echo "<script>window.alert('Data Admin Tersimpan');
        window.location=('../media.php?module=lihat_adminku')</script>";

}





}?>