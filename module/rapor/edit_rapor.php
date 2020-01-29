<!-- LINK halaman = http://localhost/sekolah/module/rapor/ekspor.php?nama_sekolah=SDN%202%20Glagah%20Temon%20Kulon%20Progo&nama_kelas=III&nis=1099&tahun_ajaran=Gasal%202018/2019&wali=kamsih -->
<?php
$sekolah = $_SESSION['sekolah'];
$kelas = $_SESSION['kelas'];
$nis = $_SESSION['nis'];
$thn_ajaran = $_SESSION['thn_ajaran'];
$walikelas = $_SESSION['walikelas'];

//SQL data pribadi
$sqlw=mysqli_query($koneksi,"SELECT * FROM rapor_pribadi WHERE nis='$nis'");
$rsw=mysqli_fetch_array($sqlw);
?>
        <div class="row">
            <div class="col-lg-12">
                <center><p style=" font-size: 16px; font-weight:bold;">RAPOR DAN PROFIL PESERTA DIDIK</p></center>
            </div>
            <div class="col-lg-12">
                <table class="table table-condensed">
                    <tr> 
                        <td class="font1">Nama Peserta Didik</td>
                        <td class="tanda">:</td>
                        <td class="isi"><?php echo"$rsw[nama]  ";  ?></td>
                        
                        <td class="font2">Kelas</td>
                        <td class="tanda">:</td>
                        <td class="font1"><?php echo"$rsw[kelas]  ";?></td>
                    </tr>
                    <tr>
                        <td class="font1">NISN/NIS</td>
                        <td class="tanda">:</td>
                        <td class="isi"><?php echo"$rsw[nis]  ";  ?></td>
                        
                        <td class="font2">Tahun Ajaran</td>
                        <td class="tanda">:</td>
                        <td class="isi"><?php echo"$rsw[tahun_pelajaran]  ";  ?></td>
                    </tr>
                    <tr>
                        <td class="font1">Nama Sekolah</td>
                        <td class="tanda">:</td>
                        <td class="isi1"><?php echo"$rsw[sekolah]  ";  ?></td>
                    </tr>
                    <tr>
                        <td class="font1">Alamat Sekolah</td>
                        <td class="tanda">:</td>
                        <td class="isi1"><?php echo"$rsw[alamat]  ";  ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class='row'>
        <?php
            echo"
                <div class='col-md-12'>
                    <h4>A. Kompetensi Sikap</h4>
                    <table class='table table-bordered table-condensed'>
                        <tr>
                            <td>No</td>
                            <td colspan='2' align='center'>Deskripsi</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td width='15%'>Sikap Spiritual</td>
                            <td>$rsw[sikap_spiritual]</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sikap Sosial</td>
                            <td>$rsw[sikap_sosial]</td>
                        </tr>
                    </table>
                </div>";
            
            //SQL data mapel
            $sqlmp=mysqli_query($koneksi,"SELECT * FROM rapor_pengetahuan INNER JOIN rapor_keterampilan WHERE rapor_pengetahuan.nis=rapor_keterampilan.nis AND rapor_pengetahuan.nis='$nis'");
            $hslmp=mysqli_fetch_array($sqlmp);

                echo"
                <div class='col-md-12'>
                    <h4>B. Kompetensi Pengetahuan dan Ketrampilan<br>
                    KKM Satuan Pendidikan : $hslmp[kkm]</h4>
                    <table class='table table-bordered table-condensed'>
                        <tr>
                            <td rowspan='2'>No</td>
                            <td rowspan='2' align='center'>Muatan Pelajaran</td>
                            <td colspan='3' align='center'>Pengetahuan</td>
                            <td colspan='3' align='center'>Ketrampilan</td>
                        </tr>
                        <tr>
                            <td>Nilai</td>
                            <td>Predikat</td>
                            <td>Deskripsi</td>
                            <td>Nilai</td>
                            <td>Predikat</td>
                            <td>Deskripsi</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pendidikan Agama dan Budi Pekerti</td>
                            <td>$hslmp[pai_nilai]</td>
                            <td>$hslmp[pai_predikat]</td>
                            <td>$hslmp[pai_deskripsi]</td>
                            <td>$hslmp[pai_keterampilan_nilai]</td>
                            <td>$hslmp[pai_keterampilan_predikat]</td>
                            <td>$hslmp[pai_keterampilan_deskripsi]</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                            <td>$hslmp[pkn_nilai]</td>
                            <td>$hslmp[pkn_predikat]</td>
                            <td>$hslmp[pkn_deskripsi]</td>
                            <td>$hslmp[pkn_keterampilan_nilai]</td>
                            <td>$hslmp[pkn_keterampilan_predikat]</td>
                            <td>$hslmp[pkn_keterampilan_deskripsi]</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bahasa Indonesia</td>
                            <td>$hslmp[bhs_indonesia_nilai]</td>
                            <td>$hslmp[bhs_indonesia_predikat]</td>
                            <td>$hslmp[bhs_indonesia_deskripsi]</td>
                            <td>$hslmp[bhs_indonesia_keterampilan_nilai]</td>
                            <td>$hslmp[bhs_indonesia_keterampilan_predikat]</td>
                            <td>$hslmp[bhs_indonesia_keterampilan_deskripsi]</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Matematika</td>
                            <td>$hslmp[matematika_nilai]</td>
                            <td>$hslmp[matematika_predikat]</td>
                            <td>$hslmp[matematika_deskripsi]</td>
                            <td>$hslmp[matematika_keterampilan_nilai]</td>
                            <td>$hslmp[matematika_keterampilan_predikat]</td>
                            <td>$hslmp[matematika_keterampilan_deskripsi]</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ilmu Pengetahuan Alam</td>
                            <td>$hslmp[ipa_nilai]</td>
                            <td>$hslmp[ipa_predikat]</td>
                            <td>$hslmp[ipa_deskripsi]</td>
                            <td>$hslmp[ipa_keterampilan_nilai]</td>
                            <td>$hslmp[ipa_keterampilan_predikat]</td>
                            <td>$hslmp[ipa_keterampilan_deskripsi]</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td>$hslmp[ips_nilai]</td>
                            <td>$hslmp[ips_predikat]</td>
                            <td>$hslmp[ips_deskripsi]</td>
                            <td>$hslmp[ips_keterampilan_nilai]</td>
                            <td>$hslmp[ips_keterampilan_predikat]</td>
                            <td>$hslmp[ips_keterampilan_deskripsi]</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Seni Budaya dan Prakarya</td>
                            <td>$hslmp[sdbp_nilai]</td>
                            <td>$hslmp[sdbp_predikat]</td>
                            <td>$hslmp[sdbp_deskripsi]</td>
                            <td>$hslmp[sdbp_keterampilan_nilai]</td>
                            <td>$hslmp[sdbp_keterampilan_predikat]</td>
                            <td>$hslmp[sdbp_keterampilan_deskripsi]</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Pendidikan Pendidikan Jasmani Olahraga dan Kesehatan</td>
                            <td>$hslmp[olahraga_nilai]</td>
                            <td>$hslmp[olahraga_predikat]</td>
                            <td>$hslmp[olahraga_deskripsi]</td>
                            <td>$hslmp[olahraga_keterampilan_nilai]</td>
                            <td>$hslmp[olahraga_keterampilan_predikat]</td>
                            <td>$hslmp[olahraga_keterampilan_deskripsi]</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan='7'><b>Muatan Lokal</b></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Bahasa Jawa</td>
                            <td>$hslmp[bhs_jawa_nilai]</td>
                            <td>$hslmp[bhs_jawa_predikat]</td>
                            <td>$hslmp[bhs_jawa_deskripsi]</td>
                            <td>$hslmp[bhs_jawa_keterampilan_nilai]</td>
                            <td>$hslmp[bhs_jawa_keterampilan_predikat]</td>
                            <td>$hslmp[bhs_jawa_keterampilan_deskripsi]</td>
                        </tr>
                    </table>
                </div>
            ";

            echo"
                <div class='col-md-12'>
                    <h4>C. Ekstra Kurikuler</h4>
                    <table class='table table-bordered table-condensed'>
                        <tr>
                            <td>No</td>
                            <td>Kegiatan Ekstra Kurikuler</td>
                            <td>Predikat</td>
                            <td>Keterangan</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>$rsw[exs1_nama]</td>
                            <td>$rsw[exs1_nilai]</td>
                            <td>$rsw[exs1_predikat]</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>$rsw[exs2_nama]</td>
                            <td>$rsw[exs2_nilai]</td>
                            <td>$rsw[exs2_predikat]</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>$rsw[exs3_nama]</td>
                            <td>$rsw[exs3_nilai]</td>
                            <td>$rsw[exs3_predikat]</td>
                        </tr>
                    </table>
                </div>";
                
                echo"
                <div class='col-md-12'>
                    <h4>D. Saran - saran</h4>
                    <table class='table table-bordered table-condensed'>
                        <tr>
                            <td style='text-align:center;height:75px;vertical-align:middle;'>$rsw[saran]</td>
                        </tr>
                    </table>
                </div>";
                
                echo"
                <div class='col-md-12'>
                    <h4>E. Tinggi dan Berat Badan</h4>
                    <table class='table table-bordered table-condensed'>
                        <tr>
                            <td rowspan='2'>No</td>
                            <td rowspan='2'>Aspek yang dinilai</td>
                            <td colspan='2' align='center'>Semester</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tinggi Badan</td>
                            <td>$rsw[tinggi_badan1]</td>
                            <td>$rsw[tinggi_badan2]</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Berat Badan</td>
                            <td>$rsw[berat_badan1]</td>
                            <td>$rsw[berat_badan2]</td>
                        </tr>
                    </table>
                </div>";
                
                echo"
                <div class='col-md-12'>
                    <h4>F. Kondisi Kesehatan</h4>
                    <table class='table table-bordered table-condensed'>
                        <tr>
                            <td>No</td>
                            <td>Aspek fisik</td>
                            <td>Semester</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pendengaran</td>
                            <td>$rsw[pendengaran]</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Penglihatan</td>
                            <td>$rsw[penglihatan]</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Gigi</td>
                            <td>$rsw[gigi]</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lainnya</td>
                            <td></td>
                        </tr>
                    </table>
                </div>";
                
                echo"
                <div class='col-md-12'>
                    <h4>G. Prestasi</h4>
                    <table class='table table-bordered table-condensed'>
                        <tr>
                            <td>No</td>
                            <td>Jenis</td>
                            <td>Keterangan</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>$rsw[prestasi1_jenis]</td>
                            <td>$rsw[prestasi1_keterangan]</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>$rsw[prestasi1_jenis]</td>
                            <td>$rsw[prestasi1_keterangan]</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>$rsw[prestasi1_jenis]</td>
                            <td>$rsw[prestasi1_keterangan]</td>
                        </tr>
                    </table>";
                ?>
            <?php
            $cekwali = mysqli_query($koneksi,"SELECT wali_status FROM siswa WHERE nis='$nis'");
            $haswali = mysqli_fetch_array($cekwali);
            if($haswali['wali_status']=='0'){
                ?>
                    <button onClick="alert('Silahkan meminta ijin akses kepada wali kelas untuk mencetak rapor')" class='btn btn-md btn-primary pull-right'>Cetak Rapor</button>
                    </div>
                <?php
            }else{
                echo"
                    <a href='module/rapor/ekspor.php?nama_sekolah=$sekolah&nis=$rsw[nis]&wali=$walikelas' class='btn btn-md btn-primary pull-right' target='_blank'>Cetak Rapor</a>
                ";
            }?>