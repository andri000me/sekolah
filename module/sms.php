<?php
include "../config/koneksi.php";
	$sql=mysql_query("select * from siswa where ids='$_GET[ids]' ");
	$rs=mysql_fetch_array($sql);
	$sqla=mysql_query("select * from absen where ids='$rs[ids]'");
	$rsa=mysql_fetch_array($sqla);

$noTujuan = "+62$rs[tlp]";
$message = "Kami Memberitahukan bahwa pada tanggal $rsa[tgl]. Nama : $rs[nama]. Alamat : $rs[alamat]. Keterangan : $rsa[ket]";
 
exec('c:\xampp\htdocs\smsku\bin\gammu-smsd-inject.exe -c c:\xampp\htdocs\smsku\bin\smsdrc EMS '.$noTujuan.' -text "'.$message.'"');
echo "<script>window.alert('Pesan Sedang Diproses');
window.history.go(-1);</script>";

?>
