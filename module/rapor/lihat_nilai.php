                        <!-- /.panel-heading -->
                        
                            <span style="font-weight: bold;">A. NILAI MATA PELAJARAN</span><br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                    <th rowspan="2" class="text-center" >NO.</th>
                                    <th rowspan="2" class="text-center" >MATA PELAJARAN</th>
                                    <th rowspan="2" class="text-center" >KKM</th>
                                    <th colspan="2" class="text-center" >PENGETAHUAN</th>
                                    <th colspan="2" class="text-center" >KETERAMPILAN</th>
                                    </tr>
                                    <tr>
                                      <td class="text-center">ANGKA</td>
                                      <td class="text-center">PREDIKAT</td>
                                      <td class="text-center">ANGKA</td>
                                      <td class="text-center">PREDIKAT</td>
                                      </tr>
                                   
                                </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;

   
    $sql=mysqli_query($koneksi,"SELECT * FROM rapor_pengetahuan INNER JOIN rapor_keterampilan WHERE rapor_pengetahuan.nis=rapor_keterampilan.nis AND rapor_pengetahuan.nis='$_GET[nis]'"); 


    while($rs=mysqli_fetch_array($sql))
    {
        // $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE nama_kelas='$rs[nama_kelas]'");
        // $rsw=mysqli_fetch_array($sqlw);
        // $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
        // $rsb=mysqli_fetch_array($sqlb);
if($_SESSION['level']=="walikelas"){
    echo "
    <tr>
        <td class='text-center'>1</td>
        <td>Pendidikan Agama dan Budi Pekerti</td>
        <td class='text-center'>$rs[kkm]</td>
        <td>$rs[pai_nilai]</td>
        <td>$rs[pai_predikat]</td>
        <td>$rs[pai_keterampilan_nilai]</td>
        <td>$rs[pai_keterampilan_predikat]</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Pendidikan Pancasila dan Kewarganegaraan</td>
        <td class='text-center'>$rs[kkm]</td>
        <td>$rs[pkn_nilai]</td>
        <td>$rs[pkn_predikat]</td>
        <td>$rs[pkn_keterampilan_nilai]</td>
        <td>$rs[pkn_keterampilan_predikat]</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Bahasa Indonesia</td>
        <td class='text-center'>$rs[kkm]</td>
        <td>$rs[bhs_indonesia_nilai]</td>
        <td>$rs[bhs_indonesia_predikat]</td>
        <td>$rs[bhs_indonesia_keterampilan_nilai]</td>
        <td>$rs[bhs_indonesia_keterampilan_predikat]</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Matematika</td>
        <td class='text-center'>$rs[kkm]</td>
        <td>$rs[matematika_nilai]</td>
        <td>$rs[matematika_predikat]</td>
        <td>$rs[matematika_keterampilan_nilai]</td>
        <td>$rs[matematika_keterampilan_predikat]</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Ilmu Pengetahuan Alam</td>
        <td class='text-center'>$rs[kkm]</td>
        <td>$rs[ipa_nilai]</td>
        <td>$rs[ipa_predikat]</td>
        <td>$rs[ipa_keterampilan_nilai]</td>
        <td>$rs[ipa_keterampilan_predikat]</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Ilmu Pengetahuan Sosial</td>
        <td class='text-center'>$rs[kkm]</td>
        <td>$rs[ips_nilai]</td>
        <td>$rs[ips_predikat]</td>
        <td>$rs[ips_keterampilan_nilai]</td>
        <td>$rs[ips_keterampilan_predikat]</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Seni Budaya dan Prakarya</td>
        <td class='text-center'>$rs[kkm]</td>
        <td>$rs[sdbp_nilai]</td>
        <td>$rs[sdbp_predikat]</td>
        <td>$rs[sdbp_keterampilan_nilai]</td>
        <td>$rs[sdbp_keterampilan_predikat]</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Pendidikan Pendidikan Jasmani Olahraga dan Kesehatan</td>
        <td class='text-center'>$rs[kkm]</td>
        <td>$rs[olahraga_nilai]</td>
        <td>$rs[olahraga_predikat]</td>
        <td>$rs[olahraga_keterampilan_nilai]</td>
        <td>$rs[olahraga_keterampilan_predikat]</td>
    </tr>
    <tr>
        <td></td>
        <td colspan='7'><b>Muatan Lokal</b></td>
    </tr>
    <tr>
        <td>9</td>
        <td>Bahasa Jawa</td>
        <td>$rs[bhs_jawa_nilai]</td>
        <td>$rs[bhs_jawa_predikat]</td>
        <td>$rs[bhs_jawa_keterampilan_nilai]</td>
        <td>$rs[bhs_jawa_keterampilan_predikat]</td>
    </tr>
    ";
$no++;
}
}
?>
           
                                    </tbody>
                                </table>
                                 
                            </div>
                            <!-- /.table-responsive -->
                            <span style="font-weight: bold;">B. CATATAN DESKRIPSI MATA PELAJARAN</span><br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" width="5%">NO.</th>
                                    <th class="text-center" width="10%">MATA PELAJARAN</th>
                                    <th class="text-center" width="20%">KOMPETENSI</th>
                                    <th class="text-center" width="60%">CATATAN</th>
                                </tr>
                            </thead>     
                            <tbody>                                       
<?php
$no=1;

   
    $sql=mysqli_query($koneksi,"SELECT * FROM rapor_pengetahuan INNER JOIN rapor_keterampilan WHERE rapor_pengetahuan.nis=rapor_keterampilan.nis AND rapor_pengetahuan.nis='$_GET[nis]'"); 


    while($rs=mysqli_fetch_array($sql))
    {
        // $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE nama_kelas='$rs[nama_kelas]'");
        // $rsw=mysqli_fetch_array($sqlw);
        // $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
        // $rsb=mysqli_fetch_array($sqlb);
if($_SESSION['level']=="walikelas"){
    echo"
    <tr>
        <td class='text-center' rowspan='2'>1</td>
        <td rowspan='2'>Pendidikan Agama dan Budi Pekerti</td>
        <td>Pengetahuan</td>
        <td>$rs[pai_deskripsi]</td>
    </tr>
    <tr>
        <td>Keterampilan</td>
        <td>$rs[pai_keterampilan_deskripsi]</td>
    </tr>
    
    <tr>
        <td rowspan='2'>2</td>
        <td rowspan='2'>Pendidikan Pancasila dan Kewarganegaraan</td>
        <td>Pengetahuan</td>
        <td>$rs[pkn_deskripsi]</td>
    </tr>
    <tr>
        <td>Keterampilan</td>
        <td>$rs[pkn_keterampilan_deskripsi]</td>
    </tr>
    <tr>
        <td  rowspan='2'>3</td>
        <td rowspan='2'>Bahasa Indonesia</td>
        <td>Pengetahuan</td>
        <td>$rs[bhs_indonesia_deskripsi]</td>
    </tr>
    <tr>
        <td>Keterampilan</td>
        <td>$rs[bhs_indonesia_keterampilan_deskripsi]</td>
    </tr>
    <tr>
        <td rowspan='2'>4</td>
        <td rowspan='2'>Matematika</td>
        <td>Pengetahuan</td>
        <td>$rs[matematika_deskripsi]</td>
    </tr>
    <tr>
        <td>Keterampilan</td>
        <td>$rs[matematika_keterampilan_deskripsi]</td>
    </tr>
    <tr>
        <td rowspan='2'>5</td>
        <td rowspan='2'>Ilmu Pengetahuan Alam</td>
        <td>Pengetahuan</td>
        <td>$rs[ipa_deskripsi]</td>
    </tr>
    <tr>
        <td>Keterampilan</td>
        <td>$rs[ipa_keterampilan_deskripsi]</td>
    </tr>
    <tr>
        <td rowspan='2'>6</td>
        <td rowspan='2'>Ilmu Pengetahuan Sosial</td>
        <td>Pengetahuan</td>
        <td>$rs[ips_deskripsi]</td>
    </tr>
    <tr>
        <td>Keterampilan</td>
        <td>$rs[ips_keterampilan_deskripsi]</td>
    </tr>
    <tr>
        <td rowspan='2'>7</td>
        <td rowspan='2'>Seni Budaya dan Prakarya</td>
        <td>Pengetahuan</td>
        <td>$rs[sdbp_deskripsi]</td>
    </tr>
    <tr>
        <td>Keterampilan</td>
        <td>$rs[sdbp_keterampilan_deskripsi]</td>
    </tr>
    <tr>
        <td rowspan='2'>8</td>
        <td rowspan='2'>Pendidikan Pendidikan Jasmani Olahraga dan Kesehatan</td>
        <td>Pengetahuan</td>
        <td>$rs[olahraga_deskripsi]</td>
    </tr>
    <tr>
        <td>Keterampilan</td>
        <td>$rs[olahraga_keterampilan_deskripsi]</td>
    </tr>
    <tr>
        <td></td>
        <td colspan='7'><b>Muatan Lokal</b></td>
    </tr>
    <tr>
        <td rowspan='2'>9</td>
        <td rowspan='2'>Bahasa Jawa</td>
        <td>Pengetahuan</td>
        <td>$rs[bhs_jawa_deskripsi]</td>
    </tr>
    <tr>
        <td>Keterampilan</td>
        <td>$rs[bhs_jawa_keterampilan_deskripsi]</td>
    </tr>
    ";
}
}
?>
                                    </tbody>
                                </table>
                                 
                            </div>
                            <!-- /.table-responsive -->
                   
                   