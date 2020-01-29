<?php
// include '../../config/koneksi.php';
 
$id = $_GET['idrapor'];
$query = "DELETE FROM rapor_langsung WHERE id_raporlangsung = $id"; // query hapus data

$koneksi = mysqli_connect("localhost","root","","sekolah");
if(mysqli_query($koneksi, $query)){
    // header("media.php?module=hasil_upload"); // redirect ke index.php
	echo "<script>alert('data berhasil dihapus');window.location = '../../media.php?module=hasil_upload';</script>";
}else{
    echo "<br><br><br><br>Hapus data gagal = $id";
}
?>
