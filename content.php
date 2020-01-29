<?php
if($_GET['module']=="input_sekolah"){
include "module/sekolah/input_sekolah.php";
}
if($_GET['module']=="sekolah"){
include "module/sekolah/sekolah.php";
}
if($_GET['module']=="sekolahku"){
include "module/sekolah/sekolahku.php";
}
//SEKOLAH
if($_GET['module']=="input_kelas"){
include "module/kelas/input_kelas.php";
}
if($_GET['module']=="kelas"){
include "module/kelas/kelas.php";
}
if($_GET['module']=="pilih_kelas"){
include "module/kelas/pilih_kelas.php";
}
//KELAS
if($_GET['module']=="siswa"){
include "module/siswa/siswa.php";
}
if($_GET['module']=="tampil"){
include "module/siswa/tampil.php";
}
if($_GET['module']=="input_siswa"){
include "module/siswa/input_siswa.php";
}
if($_GET['module']=="siswa_det"){
include "module/siswa/siswa_det.php";
}
if($_GET['module']=="detail_siswa"){
include "module/siswa/detail_siswa.php";
}
//SISWA
if($_GET['module']=="gurumapel"){
include "module/gurumapel/gurumapel.php";
}
if($_GET['module']=="tampil_gurumapel"){
include "module/gurumapel/tampil_gurumapel.php";
}
if($_GET['module']=="input_gurumapel"){
include "module/gurumapel/input_gurumapel.php";
}
if($_GET['module']=="gurumapel_det"){
include "module/gurumapel/gurumapel_det.php";
}
if($_GET['module']=="detail_gurumapel"){
include "module/gurumapel/detail_gurumapel.php";
}
if($_GET['module']=="cetak_presensi"){
include "module/laporan/cetak_presensi.php";
}
//GURU MAPEL
if($_GET['module']=="input_mapel"){
include "module/mapel/input_mapel.php";
}
if($_GET['module']=="mapel"){
include "module/mapel/mapel.php";
}
if($_GET['module']=="tampil_mapel"){
include "module/mapel/tampil_mapel.php";
}
if($_GET['module']=="detail_mapel"){
include "module/mapel/detail_mapel.php";
}
//MAPEL
if($_GET['module']=="walikelas"){
include "module/walikelas/walikelas.php";
}
if($_GET['module']=="tampil_walikelas"){
include "module/walikelas/tampil_walikelas.php";
}
if($_GET['module']=="input_walikelas"){
include "module/walikelas/input_walikelas.php";
}
if($_GET['module']=="walikelas_det"){
include "module/walikelas/walikelas_det.php";
}
if($_GET['module']=="detail_walikelas"){
include "module/walikelas/detail_walikelas.php";
}
//RAPOR
if($_GET['module']=="raporsiswa"){
include "module/rapor/raporsiswa.php";
}
if($_GET['module']=="tampil_raporsiswa"){
include "module/rapor/tampil_raporsiswa.php";
}
if($_GET['module']=="hasil_upload"){
include "module/rapor/hasil_upload.php";
}
if($_GET['module']=="data_raporsiswa"){
include "module/rapor/data_raporsiswa.php";
}
if($_GET['module']=="pilih_inputrapor"){
include "module/rapor/pilih_inputrapor.php";
}
if ($_GET['module']=="pilih_inputrapor_langsung"){
	include"module/rapor/pilih_inputrapor_langsung.php";
}
if ($_GET['module']=="import"){
	include"module/rapor/import.php";
}
if ($_GET['module']=="delete()"){
	include"module/rapor/delete.php";
}
if ($_GET['module']=="upload"){
	include"module/rapor/upload.php";
}
if($_GET['module']=="input_nilai"){
include "module/rapor/input_nilai.php";
}
if($_GET['module']=="lihat_nilai"){
include "module/rapor/lihat_nilai.php";
}
if($_GET['module']=="pilih_rapor"){
include "module/rapor/pilih_rapor.php";
}
if($_GET['module']=="laporan_raporsiswa"){
include "module/rapor/laporan_raporsiswa.php";
}
if($_GET['module']=="cetak_rapor"){
include "module/rapor/cetak_rapor.php";
}
if($_GET['module']=="cetak_rapor"){
include "module/rapor/cetak_rapor2.php";
}
if($_GET['module']=="pilih_raportu"){
include "module/rapor/pilih_raportu.php";
}
if($_GET['module']=="raporsiswatu"){
include "module/rapor/raporsiswatu.php";
}
if($_GET['module']=="cetak_raportu"){
include "module/rapor/cetak_raportu.php";
}
if($_GET['module']=="tampil_raporku"){
include "module/rapor/tampil_raporku.php";
}
if($_GET['module']=="raporsiswaku"){
include "module/rapor/raporsiswaku.php";
}
if($_GET['module']=="cetak_raporsiswa"){
include "module/rapor/cetak_raporsiswa.php";
}
//ABSEN
if($_GET['module']=="presensi"){
include "module/absen/presensi.php";
}
if($_GET['module']=="input_presensi"){
include "module/absen/input_presensi.php";
}
if($_GET['module']=="pilih"){
include "module/absen/pilih.php";
}
if($_GET['module']=="pilih_view"){
include "module/absen/pilih_view.php";
}
if($_GET['module']=="pilih_laporan"){
include "module/laporan/pilih_laporan.php";
}
if($_GET['module']=="laporan"){
include "module/laporan/laporan.php";
}
if($_GET['module']=="laporan_siswa"){
include "module/laporan/laporan_siswa.php";
}
if($_GET['module']=="pilih_laporanguru"){
include "module/laporan/pilih_laporanguru.php";
}
if($_GET['module']=="pilih_laporantu"){
include "module/laporan/pilih_laporantu.php";
}
if($_GET['module']=="laporantu"){
include "module/laporan/laporantu.php";
}
//KONDISI
if($_GET['module']=="pilih_inputkondisi"){
include "module/kondisi/pilih_inputkondisi.php";
}
if($_GET['module']=="tampil_kondisisiswa"){
include "module/kondisi/tampil_kondisisiswa.php";
}
if($_GET['module']=="data_siswakondisi"){
include "module/kondisi/data_siswakondisi.php";
}
if($_GET['module']=="input_kondisi"){
include "module/kondisi/input_kondisi.php";
}
if($_GET['module']=="data_kondisisiswa"){
include "module/kondisi/data_kondisisiswa.php";
}
if($_GET['module']=="lihat_kondisi"){
include "module/kondisi/lihat_kondisi.php";
}
//EKSTRAKULIKULER
if($_GET['module']=="input_ekstrakulikuler"){
include "module/ekstrakulikuler/input_ekstrakulikuler.php";
}
if($_GET['module']=="tampil_ekstrakulikuler"){
include "module/ekstrakulikuler/tampil_ekstrakulikuler.php";
}
if($_GET['module']=="ekstrakulikuler"){
include "module/ekstrakulikuler/ekstrakulikuler.php";
}
//PRESTASI
if($_GET['module']=="pilih_inputprestasi"){
include "module/prestasi/pilih_inputprestasi.php";
}
if($_GET['module']=="tampil_prestasi"){
include "module/prestasi/tampil_prestasi.php";
}
if($_GET['module']=="data_siswaprestasi"){
include "module/prestasi/data_siswaprestasi.php";
}
if($_GET['module']=="input_prestasi"){
include "module/prestasi/input_prestasi.php";
}
if($_GET['module']=="data_prestasisiswa"){
include "module/prestasi/data_prestasisiswa.php";
}
if($_GET['module']=="lihat_prestasi"){
include "module/prestasi/lihat_prestasi.php";
}
//ADMIN

if($_GET['module']=="lihat_admin"){
include "module/admin/lihat_admin.php";
}
if($_GET['module']=="lihat_adminku"){
include "module/admin/lihat_adminku.php";
}
if($_GET['module']=="all_admin"){
include "module/admin/all_admin.php";
}
if($_GET['module']=="detail_admin"){
include "module/admin/detail_admin.php";
}
if($_GET['module']=="detail_sekolah"){
include "module/sekolah/detail_sekolah.php";
}
if($_GET['module']=="edit_admin"){
include "module/admin/edit_admin.php";
}
if($_GET['module']=="tampil_sekolah"){
include "module/sekolah/tampil_sekolah.php";
}
if($_GET['module']=="edit_rapor"){
include "module/rapor/edit_rapor.php";
}
?>
