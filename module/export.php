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
<?php if($level=='gurumapel'){ 
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Data_Presensi.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
$sqlc=mysqli_query($koneksi,"SELECT *FROM mapel WHERE nama_mapel='$_GET[mapel]'");
$rsc=mysqli_fetch_array($sqlc);
$mapel=$_GET['mapel'];
$sqlj=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$_SESSION[idk]'");
$rsj=mysqli_fetch_array($sqlj);
$klas=$_GET['kls'];
if($_GET['tanggal']<10){ $rw="0$_GET[tanggal]";}else{ $rw="$_GET[tanggal]"; }
                            if($_GET['bulan']<10){ $rc="0$_GET[bulan]";}else{ $rc="$_GET[bulan]";}
                            $dt=$rw."-".$rc."-".$_GET['tahun']; 

?>

Mata Pelajaran : <?php echo"$rsc[nama_mapel]" ;  ?> 
<?php echo""?>
Kelas : <?php echo"$rsj[nama_kelas]";  ?>

Tanggal : <?php echo $dt;  ?>


<?php
fputcsv($output, array('Nis ','Nama','Keterangan'));
$rows=mysqli_query($koneksi,"SELECT nis,nama,ket FROM absen WHERE idk='$_SESSION[idk]' AND tgl='$dt' AND nama_mapel='$_GET[mapel]'");


// loop over the rows, outputting them
while ($row = mysqli_fetch_assoc($rows)) fputcsv($output, $row);
    

}

?>

<?php if($level=='user'){ 
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Data_Presensi.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
$sqlc=mysqli_query($koneksi,"SELECT * FROM mapel WHERE nama_mapel='$_GET[mapel]'");
$rsc=mysqli_fetch_array($sqlc);
$mapel=$_GET['mapel'];
$sqlj=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$_SESSION[idk]'");
$rsj=mysqli_fetch_array($sqlj);
$klas=$_GET['kls'];
if($_GET['tanggal']<10){ $rw="0$_GET[tanggal]";}else{ $rw="$_GET[tanggal]"; }
                            if($_GET['bulan']<10){ $rc="0$_GET[bulan]";}else{ $rc="$_GET[bulan]";}
                            $dt=$rw."-".$rc."-".$_GET['tahun']; 

?>
Mata Pelajaran : <?php echo"$rsc[nama_mapel]" ;  ?> 
<?php echo"";?>
Kelas : <?php echo"$rsj[nama_kelas]";  ?>

Tanggal : <?php echo $dt;  ?>


<?php
fputcsv($output, array('Nis','Nama','Keterangan'));
$rows=mysqli_query($koneksi,"SELECT nis,nama,ket FROM absen WHERE nis='$_SESSION[idu]' AND tgl='$dt' AND nama_mapel='$_GET[mapel]'");


// loop over the rows, outputting them
while ($row = mysqli_fetch_assoc($rows)) fputcsv($output, $row);
    
}

?>
<?php if($level=='admin_guru'){ 
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Data_Presensi.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
$sqlc=mysqli_query($koneksi,"SELECT *FROM mapel WHERE nama_mapel='$_GET[mapel]'");
                            $rsc=mysqli_fetch_array($sqlc);
                         
                            $mapel=$_GET['mapel'];
$sqlj=mysqli_query($koneksi,"SELECT *FROM kelas WHERE idk='$_GET[kls]'");
				$rsj=mysqli_fetch_array($sqlj);
											
				$klas=$_GET['kls'];
if($_GET['tanggal']<10){ $rw="0$_GET[tanggal]";}else{ $rw="$_GET[tanggal]"; }
if($_GET['bulan']<10){ $rc="0$_GET[bulan]";}else{ $rc="$_GET[bulan]";}
 $dt=$rw."-".$rc."-".$_GET['tahun']; 
?>
Mata Pelajaran : <?php echo"$rsc[nama_mapel]" ;  ?> 
<?php echo"";?>
Kelas : <?php echo"$rsj[nama_kelas]";  ?>

Tanggal : <?php echo $dt;  ?>


<?php
fputcsv($output, array('Nis','Nama','Keterangan'));
$rows=mysqli_query($koneksi,"SELECT nis,nama,ket FROM absen WHERE idk='$_GET[kls]'  AND tgl='$dt' AND nama_mapel='$_GET[mapel]'");


// loop over the rows, outputting them
while ($row = mysqli_fetch_assoc($rows)) fputcsv($output, $row);
    
}}

?>

Keterangan Presensi
Hadir = Mengikuti Pelajaran
Tidak Hadir = Tidak Mengikuti Pelajaran