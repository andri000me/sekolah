<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['raport_siswa']['name']) ;
move_uploaded_file($_FILES['raport_siswa']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['raport_siswa']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['raport_siswa']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nama     = $data->val($i, 1);
	$alamat   = $data->val($i, 2);
	$telepon  = $data->val($i, 3);

	if($nama != "" && $alamat != "" && $telepon != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into data_pegawai values('','$nama','$alamat','$telepon')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>