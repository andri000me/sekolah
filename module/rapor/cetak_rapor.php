 <table class="heading" style="width:100%;">
        <tr>
        <td> <center><p style=" font-size: 24px; font-weight:bold;">LAPORAN</p></center></td>
        </tr>
        <tr>
         <td> <center><p style=" font-size: 24px; font-weight:bold;">HASIL PENILAIAN SISWA</p></center></td>
        </tr>
    </table><br><br><br><br><br><br><br>

<?php
    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE nama_sekolah='$_GET[nama_sekolah]'");
    $rsa=mysqli_fetch_array($sqla);
?>
<table class="img">
  <tr>
    <td><img src="files/<?php echo "$rsa[file]"; ?>" width="250px"> </td>
  </tr>
</table><br><br><br><br><br><br><br>
<table class="alamat">
  <tr>
    <td style=" font-size: 22px; font-weight:bold;">
      <?php echo"$rsa[nama_sekolah]  ";  ?>
    </td>
  </tr>
</table><br><br><br>
<table class="alamat">
  <tr>
    <td style=" font-size: 18px; font-weight:bold;">
      <?php echo"$rsa[alamat]  ";  ?>
    </td>
  </tr>
</table><br><br>


<?php
$sqlw=mysqli_query($koneksi,"SELECT * FROM rapor WHERE ids='$_GET[ids]'");
$rsw=mysqli_fetch_array($sqlw);
?>
<div id="invoice_0">
<table border="1">
<tr>
<td>NAMA : <?php echo"$rsw[nama]  ";  ?><br>
  NIS/NISN : <?php echo"$rsw[nis]  ";  ?>
</td>
</tr>
</table>
</div>

<?php
$sqlw=mysqli_query($koneksi,"SELECT * FROM rapor WHERE ids='$_GET[ids]'");
$rsw=mysqli_fetch_array($sqlw);
?>

<div style="page-break-before:always;"></div>
                       <div class="container">

                      <table class="heading" style="width:100%;">
        <tr>
        <td> <center><p style=" font-size: 16px; font-weight:bold;">RAPOR DAN PROFIL PESERTA DIDIK</p></center></td>
        </tr>
    </table></div>
    <div class="container">
                      <table><br>
                     <tr> 
                        <td class="font1">
                            Nama Peserta Didik
                        </td>
                        <td class="tanda">
                            :
                        </td>
                        <td class="isi">
                            <?php echo"$rsw[nama]  ";  ?>
                        </td>
                        <td class="font2">
                            Kelas
                        </td>
                         <td class="tanda">
                            :
                        </td>
                        <td class="font1">
                            <?php echo"$rsw[nama_kelas]  ";  ?>
                        </td>
                     </tr>
                     <tr>
                        <td class="font1">
                            NISN/NIS
                        </td>
                        <td class="tanda">
                            :
                        </td>
                        <td class="isi">
                            <?php echo"$rsw[nis]  ";  ?>
                        </td>
                        <td class="font2">
                            Tahun Ajaran
                        </td>
                         <td class="tanda">
                            :
                        </td>
                        <td class="isi">
                            <?php echo"$rsw[tahun_ajaran]  ";  ?>
                        </td>
                     </tr>
                     <tr>
                        <td class="font1">
                            Nama Sekolah
                        </td>
                        <td class="tanda">
                            :
                        </td>
                        <td class="isi1">
                            <?php echo"$rsw[nama_sekolah]  ";  ?>
                        </td>
                     </tr>
                     <tr>
                        <td class="font1">
                            Alamat Sekolah
                        </td>
                        <td class="tanda">
                            :
                        </td>
                        <td class="isi1">
                            <?php echo"$rsw[alamat]  ";  ?>
                        </td>
                    </div>

                     </tr>
                     </table>

                  <br>
                     
                     <div class="container">
                      <div id="invoice_body">
                        <span class="judul">A. NILAI MATA PELAJARAN</span>
                        <table border="1" >
                            <thead>
                                <tr>
                                    <th rowspan="2" class="tabel3" width="5%">NO.</th>
                                    <th rowspan="2" class="tabel3" width="15%">MATA PELAJARAN</th>
                                    <th rowspan="2" class="tabel3" >KKM</th>
                                    <th colspan="2" class="tabel3" width="15%">PENGETAHUAN</th>
                                    <th colspan="2" class="tabel3" width="15%">KETERAMPILAN</th>
                                    <th colspan="2" class="tabel3" >SIKAP SPIRITUAL & SOSIAL</th>
                                    </tr>
                                    <tr>
                                      <td >ANGKA</td>
                                      <td>PREDIKAT</td>
                                      <td>ANGKA</td>
                                      <td>PREDIKAT</td>
                                      <td>DALAM MAPEL</td>
                                      <td>ANTAR MAPEL</td>
                                      </tr>
                            </thead>     
                            <tbody>                                       
<?php
$no=1;

   
    $sql=mysqli_query($koneksi,"SELECT * FROM rapor WHERE ids='$_GET[ids]' AND tahun_ajaran='$_GET[tahun_ajaran]' "); 


    while($rs=mysqli_fetch_array($sql))
    {
        $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE nama_kelas='$rs[nama_kelas]'");
        $rsw=mysqli_fetch_array($sqlw);
        $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
        $rsb=mysqli_fetch_array($sqlb);
if($_SESSION['level']=="walikelas"){
?>                                        <tr class="odd gradeX">
                                            <td class="tabel2"><?php echo $no;?></td>
                                            <td class="tabel2"><?php echo"$rs[nama_mapel]";  ?></td>
                                            <td class="tabel2"><?php echo"$rs[kkm]";  ?></td>
                                            <td class="tabel2"><?php echo"$rs[nilai_pengetahuan]";  ?></td>
                                            <td class="tabel2"><?php echo"$rs[predikat_pengetahuan]";  ?></td>
                                            <td class="tabel2"><?php echo"$rs[nilai_keterampilan]";  ?></td>
                                            <td class="tabel2"><?php echo"$rs[predikat_keterampilan]";  ?></td>
                                            <td class="tabel2"><?php echo"$rs[dalam_mapel]";  ?></td>
                                            <td class="tabel2"><?php echo"$rs[antar_mapel]";  ?></td>
                                      </tr>
<?php
$no++;
}
}
?>
                                    </tbody>
                                </table>
</div>
</div><br>
  <div style="page-break-before:always;"></div>

                    <div class="container">
                      <div id="invoice_2">
                        <span class="judul">B. CATATAN TIAP MATA PELAJARAN</span>
                        <table border="1">
                            <thead>
                                <tr>
                                    <th class="tabel3" width="5%">NO.</th>
                                    <th class="tabel3" width="10%">MATA PELAJARAN</th>
                                    <th class="tabel3" width="20%">KOMPETENSI</th>
                                    <th class="tabel3" width="60%">CATATAN</th>
                                    
                                        
                                    
                                   
                                </tr>
                            </thead>     
                            <tbody>                                       
<?php
$no=1;

   
    $sql=mysqli_query($koneksi,"SELECT * FROM rapor WHERE ids='$_GET[ids]' AND tahun_ajaran='$_GET[tahun_ajaran]' "); 


    while($rs=mysqli_fetch_array($sql))
    {
        $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE nama_kelas='$rs[nama_kelas]'");
        $rsw=mysqli_fetch_array($sqlw);
        $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
        $rsb=mysqli_fetch_array($sqlb);
if($_SESSION['level']=="walikelas"){
?>                                        <tr class="odd gradeX">
                                          <td rowspan="4" style="text-align: center;"><?php echo $no;?></td>
                                          <td rowspan="4" class="text-center"><?php echo"$rs[nama_mapel]";?></td>
                                          <tr>
                                          <td>Pengetahuan</td>
                                         <td class="tabel4"><?php echo"$rs[deskripsi_pengetahuan]";?>
                                       </td></tr>
                                          <tr>
                                          <td>Keterampilan</td>
                                          <td class="tabel4"><?php echo"$rs[deskripsi_keterampilan]";?>
                                       </td>
                                        </tr>
                                          <tr>
                                          <td>Sikap Spiritual dan Sosial</td>
                                        <td class="tabel4"><?php echo"$rs[deskripsi_sikap]";?>
                                       </td></tr>
                                         
                                        </tr>
                                      </tr>
<?php
$no++;
}
}
?>
                                    </tbody>
                                </table>
                              </div>
</div><br>  <div style="page-break-before:always;"></div>
                         <div class="container">
                          <div id="invoice_3">
                        <span class="judul">C. Ekstrakulikuler</span>
                        <table border="1">
                            <thead>
                                <tr>
                                    <th class="tabel3">NO.</th>
                                    <th class="tabel3">JENIS KEGIATAN</th>
                                    <th class="tabel3">KETERANGAN</th>
                                </tr>
                            </thead>     
                                 <tbody>
                             <?php
                             
                                $sqlw=mysqli_query($koneksi,"SELECT * FROM rapor_kondisi WHERE ids='$_GET[ids]' AND tahun_ajaran='$_GET[tahun_ajaran]'");
                                $rsw=mysqli_fetch_array($sqlw);
                              if($_SESSION['level']=="walikelas"){
?>

<tr class="odd gradeX">
                                            <td class="tabel2">1.</td>
                                            <td class="tabel2"><?php echo"$rsw[nama_ekstra1]";  ?></td>
                                            <td class="tabel2"><?php echo"$rsw[nilai_ekstra1]";  ?></td>
                                      </tr>
<tr class="odd gradeX">   
                                            <td class="tabel2">2.</td>
                                            <td class="tabel2"><?php echo"$rsw[nama_ekstra2]";  ?> </td>
                                            <td class="tabel2"><?php echo"$rsw[nilai_ekstra2]";  ?>  </td>  
                                      </tr>                                                                     
<?php

}?>
                            </tbody>
                         </table>
                     </div>
                       </div><br>
                      <div class="container">
                        <div id="invoice_body">
                        <span class="judul">D. Ketidakhadiran</span>
                        <table border="1">
                            <thead>
                                <tr>
                                    <th class="tabel3"> NO </th>
                                    <th class="tabel3">KETERANGAN </th>
                                    <th class="tabel3">JUMLAH</th>
                                    </tr>   
                                </tr>
                            </thead>     
                                 <tbody>
                                <?php
                                $sqlw=mysqli_query($koneksi,"SELECT * FROM rapor_kondisi WHERE ids='$_GET[ids]' AND tahun_ajaran='$_GET[tahun_ajaran]'");
                                $rsw=mysqli_fetch_array($sqlw);
                              if($_SESSION['level']=="walikelas"){
?>
<tr class="odd gradeX">                     <td class="tabel2">1.</td>
                                            <td class="tabel2">Sakit</td>
                                            <td class="tabel2"><?php echo"$rsw[ket_sakit]";  ?> </td>
</tr>
 <tr class="odd gradeX">
                                            <td class="tabel2">2.</td>
                                            <td class="tabel2">Izin</td>
                                            <td class="tabel2"><?php echo"$rsw[ket_izin]";  ?></td>  
</tr> 
<tr class="odd gradeX">
                                            <td class="tabel2">3.</td>
                                            <td class="tabel2">Tanpa Keterangan</td>
                                            <td class="tabel2"><?php echo"$rsw[ket_alpa]";  ?></td>  
 </tr>                                                                      
<?php
}?>
                            </tbody>
                         </table>
                       </div>
                     </div><br>
                          <div class="container">
                            <div id="invoice_body">
                        <span class="judul">E. KEPRIBADIAN</span>
                        <table border="1">
                            <thead>
                                <tr>
                                    <th class="tabel3">NO </th>
                                    <th class="tabel3">ASPEK </th>
                                    <th class="tabel3">KETERANGAN</th>
                                    </tr>   
                                </tr>
                            </thead>     
                                 <tbody>
                                 <?php
                                $sqlw=mysqli_query($koneksi,"SELECT * FROM rapor_kondisi WHERE ids='$_GET[ids]' AND tahun_ajaran='$_GET[tahun_ajaran]'");
                                $rsw=mysqli_fetch_array($sqlw);
                              if($_SESSION['level']=="walikelas"){
?>
<tr class="odd gradeX">
                                            <td class="tabel2">1.</td>
                                            <td class="tabel2">Kelakuan</td>
                                            <td class="tabel4"><?php echo"$rsw[kelakuan]  ";  ?> </td>
</tr>
<tr class="odd gradeX">
                                            <td class="tabel2">2.</td>
                                            <td class="tabel2">Kerajinan</td>
                                            <td class="tabel4"><?php echo"$rsw[kerajinan]  ";  ?></td>  
</tr> 
<tr class="odd gradeX">
                                            <td class="tabel2">3.</td>
                                            <td class="tabel2">Kerapihan</td>
                                            <td class="tabel4"><?php echo"$rsw[kerapihan]  ";  ?></td>  
</tr>   
<tr class="odd gradeX">
                                            <td class="tabel2">4.</td>
                                            <td class="tabel2">Kebersihan</td>
                                            <td class="tabel4"><?php echo"$rsw[kebersihan]  ";  ?></td> </tr>                                                                   
<?php
}?>
                            </tbody>
                         </table>
                       </div>
                     </div><br>

                        <div class="container">
                          <div id="invoice_3">
                        <span class="judul">F. PRESTASI DAN KEGIATAN</span>
                        <table border="1">
                            <thead>
                                <tr>
                                    <th class="tabel3">NO.</th>
                                    <th class="tabel3">TANGGAL</th>
                                    <th class="tabel3">KETERANGAN</th>   
                                </tr>
                            </thead>     
                            <tbody>                                       
<?php
$no=1;
 $sql=mysqli_query($koneksi,"SELECT * FROM prestasi WHERE ids='$_GET[ids]' AND tahun_ajaran='$_GET[tahun_ajaran]' "); 


    while($rs=mysqli_fetch_array($sql))
    {
        $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE nama_kelas='$rs[nama_kelas]'");
        $rsw=mysqli_fetch_array($sqlw);
        $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
        $rsb=mysqli_fetch_array($sqlb);
if($_SESSION['level']=="walikelas"){
?>                                        <tr class="odd gradeX">
                                            <td class="tabel4"><?php echo $no;?></td>
                                            <td class="tabel4"><?php echo"$rs[tanggal]";  ?></td>
                                            <td class="tabel4"><?php echo"$rs[keterangan_prestasi]";  ?></td>
                                      </tr>
<?php
$no++;
}
}
?>

                                    </tbody>
                                </table>
</div>
</div>

         