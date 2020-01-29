<?php

// Load file koneksi.php$host = "localhost";
  //$username = "root";
  // $password = "";
  // $database = "sekolah";

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
// $konksi = mysqli_connect("localhost","root","","sekolah");
// if ($koneksi->connect_errno) {
//     print_r("Connect failed: %s\n", $mysqli->connect_error);
// }

// /* check if server is alive */
// if ($koneksi->ping()) {
//     printf("Our connection is ok!\n");
// } else {
//     printf("Error: %s\n", $koneksi->error);
// }
// mysql_select_db("sekolah");
 


if(isset($_POST['import'])){ 
  $nama_file_baru = 'data.xlsx';

  // Load librari PHPExcel nya
  require_once 'PHPExcel/PHPExcel.php';
  $excelreader = new PHPExcel_Reader_Excel2007();
  $loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
  $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

  $numrow = 1;
  $kosong = 0;
  foreach($sheet as $row){
    // Ambil data pada excel sesuai Kolom
    $no = $row['A'];
    $nis = $row['C']; // Ambil data NIS            
    $nama = $row['B']; // Ambil data nama            
    $kelas = $row['D']; // Ambil data jenis kelamin   
    $alamat= $row['E']; // Ambil data telepon         
    $kkm = $row['F']; // Ambil data alamat                                
    $pai_nilai = $row['G'];
    $pai_predikat = $row['H'];
    $pai_deskripsi = $row['I'];                                 
    $matematika_nilai = $row['J'];
    $matematika_predikat = $row['K'];
    $matematika_deskripsi = $row['L'];                        
    $bhs_indonesia_nilai = $row['M'];
    $bhs_indonesia_predikat = $row['N'];
    $bhs_indonesia_deskripsi = $row['O'];
    $ipa_nilai = $row['P'];
    $ipa_predikat = $row['Q'];
    $ipa_deskripsi = $row['R'];                        
    $ips_nilai = $row['S'];
    $ips_predikat = $row['T'];
    $ips_deskripsi = $row['U'];                        
    $olahraga_nilai = $row['V'];
    $olahraga_predikat = $row['W'];
    $olahraga_deskripsi = $row['X'];                        
    $pkn_nilai = $row['Y'];
    $pkn_predikat = $row['Z'];
    $pkn_deskripsi = $row['AA'];                                
    $bhs_jawa_nilai = $row['AB'];
    $bhs_jawa_predikat = $row['AC'];
    $bhs_jawa_deskripsi = $row['AD'];                        
    $sdbp_nilai = $row['AE'];
    $sdbp_predikat = $row['AF'];
    $sdbp_deskripsi =$row['AG'];
    $pai_keterampilan_nilai = $row['AH'];
    $pai_keterampilan_predikat = $row['AI'];
    $pai_keterampilan_deskripsi = $row['AJ'];                                
    $matematika_keterampilan_nilai = $row['AK'];
    $matematika_keterampilan_predikat = $row['AL'];
    $matematika_keterampilan_deskripsi = $row['AM'];
    $bhs_indonesia_keterampilan_nilai = $row['AN'];
    $bhs_indonesia_keterampilan_predikat = $row['AO'];
    $bhs_indonesia_keterampilan_deskripsi = $row['AP'];
    $ipa_keterampilan_nilai = $row['AQ'];
    $ipa_keterampilan_predikat = $row['AR'];
    $ipa_keterampilan_deskripsi = $row['AS'];                        
    $ips_keterampilan_nilai = $row['AT'];
    $ips_keterampilan_predikat = $row['AU'];
    $ips_keterampilan_deskripsi = $row['AV'];                        
    $olahraga_keterampilan_nilai = $row['AW'];
    $olahraga_keterampilan_predikat = $row['AX'];
    $olahraga_keterampilan_deskripsi = $row['AY'];                     
    $pkn_keterampilan_nilai = $row['AZ'];
    $pkn_keterampilan_predikat = $row['BA'];
    $pkn_keterampilan_deskripsi = $row['BB'];                                
    $bhs_jawa_keterampilan_nilai = $row['BC'];
    $bhs_jawa_keterampilan_predikat = $row['BD'];
    $bhs_jawa_keterampilan_deskripsi = $row['BE'];                        
    $sdbp_keterampilan_nilai = $row['BF'];
    $sdbp_keterampilan_predikat = $row['BG'];
    $sdbp_keterampilan_deskrepsi =$row['BH'];
    $sikap_spiritual = $row['BI'];
    $sikap_sosial = $row['BJ'];
    $exs1_nama = $row ['BK'];
    $exs1_nilai = $row ['BL'];
    $exs1_predikat = $row ['BM'];
    $exs2_nama = $row ['BN'];
    $exs2_nilai = $row ['BO'];
    $exs2_predikat = $row ['BP'];
    $exs3_nilai = $row ['BQ'];
    $exs3_nama = $row ['BR'];
    $exs3_predikat = $row ['BS'];
    $exs4_nama = $row ['BT'];
    $exs4_nilai = $row ['BU'];
    $exs4_predikat = $row ['BV'];
    $tinggi_badan1 = $row ['BW'];
    $tinggi_badan2 = $row ['BX'];
    $berat_badan1 = $row ['BY'];
    $berat_badan2 = $row ['BZ'];
    $pendengaran = $row ['CA'];
    $penglihatan = $row ['CB'];
    $gigi = $row ['CC'];
    $prestasi1_jenis = $row ['CD'];
    $prestasi1_keterangan = $row ['CE'];
    $prestasi2_jenis = $row ['CF'];
    $prestasi2_keterangan = $row ['CG'];
    $prestasi3_jenis = $row ['CH'];
    $prestasi3_keterangan = $row ['CI'];
    $sakit = $row ['CJ'];
    $izin = $row ['CK'];
    $alpa = $row ['CL'];
    $saran = $row ['CM'];


// Cek jika semua data tidak diisi
    if(empty($nis) && empty($nama) && empty($kelas) && empty($alamat) && empty($kkm) && empty($pai_nilai) && empty($pai_predikat) && empty($pai_deskripsi) && empty($matematika_nilai) && empty($matematika_predikat) && empty($matematika_predikat) && empty($matematika_deskripsi) && empty($bhs_indonesia_nilai) && empty($bhs_indonesia_predikat) && empty($bhs_indonesia_deskripsi) && empty($ipa_nilai) && empty($ipa_predikat) && empty($ipa_deskripsi) && empty($ips_nilai) && empty($ips_predikat) && empty($ips_deskripsi) && empty($olahraga_nilai) && empty($olahraga_predikat) && empty($olahraga_deskripsi) && empty($pkn_nilai) && empty($pkn_predikat)&& empty($pkn_deskripsi)&& empty($bhs_jawa_nilai)&& empty($bhs_jawa_predikat)&& empty($bhs_jawa_deskripsi)&& empty($sdbp_nilai)&& empty($sdbp_predikat)&& empty($sdbp_deskripsi)&& empty($pkn_keterampilan_nilai)&& empty($pai_keteramilan_predikat)&& empty($pai_keterampilan_deskripsi)&& empty($matematika_keterampilan_nilai) && empty($matematika_keterampilan_predikat)&& empty($matematika_keterampilan_deskripsi)&& empty($bhs_indonesia_keterampilan_nilai)&& empty($bhs_indonesia_keterampilan_predikat)&& empty($bhs_indonesia_ketereampilan_deskripsi)&& empty($ipa_keterampilan_nilai)&& empty($ipa_keterampilan_predikat)&& empty($ipa_keterampilan_deskripsi)&& empty($ips_keterampilan_nilai)&& empty($ips_keterampilan_predikat)&& empty($ips_keterampilan_deskripsi)&& empty($olahraga_keterampilan_nilai)&& empty($olahraga_keterampilan_predikat)&& empty($olahraga_keterampilan_deskripsi)&& empty($pkn_keterampilan_nilai)&& empty($pkn_keterampilan_predikat)&& empty($pkn_keterampilan_deskripsi)&& empty($bhs_jawa_keterampilan_nilai)&& empty($bhs_jawa_keterampilan_predikat)&& empty($bhs_jawa_keterampilan_deskripsi)&& empty($sdbp_keterampilan_nilai)&& empty($sdbp_keterampilan_predikat)&& empty($sdbp_keterampilan_deskrepsi)&& empty($sikap_spiritual)&& empty($sikap_sosial)&& empty($exs1_nama)&& empty($exs1_nilai)&& empty($exs1_predikat) && empty($exs2_nama)&& empty($exs2_nilai)&& empty($exs2_predikat)&& empty($exs3_nama)&& empty($exs3_nilai)&& empty($exs3_predikat)&& empty($exs4_nama)&& empty($exs4_nilai)&& empty($exs4_predikat)&& empty($tinggi_badan1)&& empty($tinggi_badan2)&& empty($berat_badan1)&& empty($berat_badan2)&& empty($pendengaran)&& empty($penglihatan)&& empty($gigi)&& empty($prestasi1_jenis)&& empty($prestasi1_keterangan)&& empty($prestasi2_jenis)&& empty($prestasi2_keterangan)&& empty($prestasi3_jenis)&& empty($prestasi3_keterangan)&& empty($sakit)&& empty($izin)&& empty($alpa)&& empty($saran) )
      continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

    // Cek $numrow apakah lebih dari 1
    // Artinya karena baris pertama adalah nama-nama kolom
    // Jadi dilewat saja, tidak usah diimport
    if($numrow > 1){
      // Proses simpan ke Database

      // echo "<br>";
      // echo "<br>";
      // var_dump($nama);
      mysqli_query($koneksi,"INSERT INTO rapor_langsung(nis, nama, kelas, alamat, kkm, pai_nilai, pai_predikat, pai_deskripsi, matematika_nilai, matematika_predikat, matematika_deskripsi, bhs_indonesia_nilai, bhs_indonesia_predikat, bhs_indonesia_deskripsi, ipa_nilai, ipa_predikat, ipa_deskripsi, ips_nilai, ips_predikat, ips_deskripsi, olahraga_nilai, olahraga_predikat, olahraga_deskripsi, pkn_nilai, pkn_predikat, pkn_deskripsi, bhs_jawa_nilai, bhs_jawa_predikat, bhs_jawa_deskripsi, sdbp_nilai, sdbp_predikat, sdbp_deskripsi, pai_keterampilan_nilai, pai_keteramilan_predikat, pai_keterampilan_deskripsi, matematika_keterampilan_nilai, matematika_keterampilan_predikat, matematika_keterampilan_dekripsi, bhs_indonesia_keterampilan_nilai, bhs_indonesia_keterampilan_predikat, bhs_indonesia_ketereampilan_deskripsi, ipa_keterampilan_nilai, ipa_keterampilan_predikat, ipa_keterampilan_deskripsi, ips_keterampilan_nilai, ips_keterampilan_predikat, ips_keterampilan_deskripsi, olahraga_keterampilan_nilai, olahraga_keterampilan_predikat, olahraga_keterampilan_deskripsi, pkn_keterampilan_nilai, pkn_keterampilan_predikat, pkn_keterampilan_deskripsi, bhs_jawa_keterampilan_nilai, bhs_jawa_keterampilan_predikat, bhs_jawa_keterampilan_deskripsi, sdbp_keterampilan_nilai, sdbp_keterampilan_predikat, sdbp_keterampilan_deskripsi, sikap_spiritual, sikap_sosial, exs1_nama, exs1_nilai, exs1_predikat, exs2_nama, exs2_nilai, exs2_predikat, exs3_nama, exs3_nilai, exs3_predikat, exs4_nama, exs4_nilai, exs4_predikat, tinggi_badan1, tinggi_badan2, berat_badan1, berat_badan2, pendengaran, penglihatan, gigi, prestasi1_jenis, prestasi1_keterangan, prestasi2_jenis, prestasi2_keterangan, prestasi3_jenis, prestasi3_keterangan, sakit, izin, alpa, saran) VALUES ('".$nis."','".$nama."','".$kelas."','".$alamat."','".$kkm."','".$pai_nilai."','".$pai_predikat."','".$pai_deskripsi."','".$matematika_nilai."','".$matematika_predikat."','".$matematika_deskripsi."','".$bhs_indonesia_nilai."','".$bhs_indonesia_predikat."','".$bhs_indonesia_deskripsi."','".$ipa_nilai."','".$ipa_predikat."','".$ipa_deskripsi."','".$ips_nilai."','".$ips_predikat."','".$ips_deskripsi."','".$olahraga_nilai."','".$olahraga_predikat."','".$olahraga_deskripsi."','".$pkn_nilai."','".$pkn_predikat."','".$pkn_deskripsi."','".$bhs_jawa_nilai."','".$bhs_jawa_predikat."','".$bhs_jawa_deskripsi."','".$sdbp_nilai."','".$sdbp_predikat."','".$sdbp_deskripsi."','".$pai_keterampilan_nilai."','".$pai_keterampilan_predikat."','".$pai_keterampilan_deskripsi."','".$matematika_keterampilan_nilai."','".$matematika_keterampilan_predikat."','".$matematika_keterampilan_deskripsi."','".$bhs_indonesia_keterampilan_nilai."','".$bhs_indonesia_keterampilan_predikat."','".$bhs_indonesia_keterampilan_deskripsi."','".$ipa_keterampilan_nilai."','".$ipa_keterampilan_predikat."','".$ipa_keterampilan_deskripsi."','".$ips_keterampilan_nilai."','".$ips_keterampilan_predikat."','".$ips_keterampilan_deskripsi."','".$olahraga_keterampilan_nilai."','".$olahraga_keterampilan_predikat."','".$olahraga_keterampilan_deskripsi."','".$pkn_keterampilan_nilai."','".$pkn_keterampilan_predikat."','".$pkn_keterampilan_deskripsi."','".$bhs_jawa_keterampilan_nilai."','".$bhs_jawa_keterampilan_predikat."','".$bhs_jawa_keterampilan_deskripsi."','".$sdbp_keterampilan_nilai."','".$sdbp_keterampilan_predikat."','".$sdbp_keterampilan_deskrepsi."','".$sikap_spiritual."','".$sikap_sosial."','".$exs1_nama."','".$exs1_nilai."','".$exs1_predikat."','".$exs2_nama."','".$exs2_nilai."','".$exs2_predikat."','".$exs3_nama."','".$exs3_nilai."','".$exs3_predikat."','".$exs4_nama."','".$exs4_nilai."','".$exs4_predikat."','".$tinggi_badan1."','".$tinggi_badan2."','".$berat_badan1."','".$berat_badan2."','".$pendengaran."','".$penglihatan."','".$gigi."','".$prestasi1_jenis."','".$prestasi1_keterangan."','".$prestasi2_jenis."','".$prestasi2_keterangan."','".$prestasi3_jenis."','".$prestasi3_keterangan."','".$sakit."','".$izin."','".$alpa."','".$saran."')");
    }
      echo "<br>";
      echo "<br>";
    $numrow++; // Tambah 1 setiap kali looping
}
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// echo var_dump($koneksi);
// header('location: index.php'); // Redirect ke halaman awal
// echo "<script>window.alert('Data Guru Mata Pelajaran Tersimpan');</script>";
echo "<script>alert('data berhasil diimport');window.location = 'media.php?module=hasil_upload';</script>";
?>