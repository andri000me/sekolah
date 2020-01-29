
<?php
if($_GET['act']=="input"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Nilai Siswa  <?php 
                            $sqlc=mysqli_query($koneksi,"SELECT * FROM mapel WHERE nama_mapel='$_GET[mapel]'");
                            $rsc=mysqli_fetch_array($sqlc);
                            echo "Mata Pelajaran : $rsc[nama_mapel]";
                            $mapel=$_GET['mapel'];

                            $sqlc=mysqli_query($koneksi,"SELECT * FROM siswa WHERE ids='$_GET[ids]' AND tahun_ajaran='$_GET[tahun_ajaran]'"); 
                            $rsc=mysqli_fetch_array($sqlc);
                            $ids=$_GET['ids'];

 ?></strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Input Identitas Rapor 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php
                                 $sql=mysqli_query($koneksi,"SELECT *FROM siswa WHERE ids='$_GET[ids]'");
                                 $rs=mysqli_fetch_array($sql);
                                 $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
                                 $rsw=mysqli_fetch_array($sqlw);
                                 $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
                                 $rsb=mysqli_fetch_array($sqlb);
                                 $sqlc=mysqli_query($koneksi,"SELECT * FROM mapel WHERE nama_mapel='$_GET[mapel]' AND idk='$rsw[idk]'");
                                 $rsc=mysqli_fetch_array($sqlc);
                                ?>
                                    <form method="post" role="form" action="././module/simpan.php?act=input_nilai&ids=<?php echo $ids?>&mapel=<?php echo $mapel?>" id="myformrapor"  onSubmit="return validasi_rapor()"> 

<div class="col-lg-6">
    <fieldset disabled>
                                        <div class="form-group">
                                            <label>Nama Siswa</label>
                                            <input class="form-control" placeholder="Masukkan Nama Siswa"  name="nama" 
                                            value="<?php echo "$rs[nama]"; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Induk Siswa</label>
                                            <input class="form-control" placeholder="Masukkan Nomor Induk Siswa"  name="nis"  
                                            value="<?php echo "$rs[nis]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input class="form-control" placeholder="Masukkan Nama Sekolah"  name="nama_sekolah"  
                                            value="<?php echo "$rsb[nama_sekolah]"; ?>">
                                        </div>
                                        
                                    
                                        </fieldset>                                          
                         </div>
                                                 
                                        
<div class="col-lg-6">
    <fieldset disabled>
        <div class="form-group">
                                            <label>Alamat Sekolah</label>
                                            <input class="form-control" placeholder="Masukkan Alamat Sekolah"  name="alamat"  
                                            value="<?php echo "$rsb[alamat]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" placeholder="Masukkan Nama Kelas"  name="nama_kelas"  
                                            value="<?php echo "$rsw[nama_kelas]"; ?>">
                                        </div>
                                    </fieldset>
                                       
       <fieldset disabled>                               
<div class="form-group">
                                            <label>Tahun Ajaran</label>
                                            <input class="form-control" placeholder="Tahun Ajaran"  name="tahun_ajaran"  
                                            value="<?php echo "$rs[tahun_ajaran]"; ?>">
                                        </div>
                                    </fieldset>
                                </div>

  <div class="row">       
       <div class="col-lg-12">
                    <div class="panel-primary">
                        <div class="panel-heading">
                            Kriteria Kelulusan Minimal
                        </div>
 <div class="col-lg-6">
    <br><fieldset disabled>
    <div class="form-group">
    
                                            <label>Kriteria Kelulusan Mininal</label>
                                             <input class="form-control" placeholder="Masukkan Kriteria Kelulusan Minimal" name="kkm" value="<?php echo "$rsc[kkm]"; ?>">
                                        </div>
                                    </fieldset>
                            </div>
                        </div>
</div>
</div>                                   

      <div class="row">       
       <div class="col-lg-12">
                    <div class="panel-primary">
                        <div class="panel-heading">
                            Input Penilaian Kompetensi Pengetahuan
                        </div>
 <div class="col-lg-6">
    <br>
                                        <div class="form-group">
                                            <label>Nilai Angka</label><span style="color: red; font-size: 14pt;"> *</span> 
                                             <input class="form-control" placeholder="Masukkan Nilai Angka Pengetahuan" name="nilai_pengetahuan" id="nilai_pengetahuan">
                                        </div>
                                         <div class="form-group">
                                            <label>Nilai Huruf</label><span style="color: red; font-size: 14pt;"> *</span> 
                                             <select class="form-control" name="predikat_pengetahuan" id="huruf_pengetahuan">
                                                <option value="Pilih Nilai Huruf">Pilih Nilai Huruf</option>
                                                <option value="A">A</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="B-">B-</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="C-">C-</option>
                                                <option value="D+">D+</option>
                                                <option value="D">D</option>
                                                <option value="D-">D-</option>
                                                <option value="E">E</option>
                                                </select>
                                        </div>
                                </div>      
<div class="col-lg-6">
    <br>
    
                                        <div class="form-group">
                                            <label>Deskripsi Penilaian Kompetensi Pengetahuan</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <textarea class="form-control" placeholder="Masukkan Deskripsi Pengetahuan" 
                                            name="deskripsi_pengetahuan" rows="3" id="deskripsi_pengetahuan"></textarea>
                                        </div>
</div>
</div>

      </div>  
  </div>

      <div class="row">       
       <div class="col-lg-12">
                    <div class="panel-primary">
                        <div class="panel-heading">
                            Input Penilaian Kompetensi Keterampilan
                        </div>
 <div class="col-lg-6">
    <br>
                                        <div class="form-group">
                                            <label>Nilai Angka</label><span style="color: red; font-size: 14pt;"> *</span> 
                                             <input class="form-control" placeholder="Masukkan Nilai Angka Keterampilan" 
                                             name="nilai_keterampilan" id="nilai_keterampilan">
                                        </div>
                                        <div class="form-group">
                                            <label>Nilai Huruf</label><span style="color: red; font-size: 14pt;"> *</span> 
                                             <select class="form-control" name="predikat_keterampilan" id="huruf_keterampilan">
                                                <option value="Pilih Nilai Huruf">Pilih Nilai Huruf</option>
                                                <option value="A">A</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="B-">B-</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="C-">C-</option>
                                                <option value="D+">D+</option>
                                                <option value="D">D</option>
                                                <option value="D-">D-</option>
                                                <option value="E">E</option>
                                                </select>
                                        </div>
                                </div>

                                <br>
<div class="col-lg-6">
    
                                        <div class="form-group">
                                            <label>Deskripsi Penilaian Kompetensi Keterampilan</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <textarea class="form-control" placeholder="Masukkan Deskripsi Keterampilan" 
                                            name="deskripsi_keterampilan" rows="3" id="deskripsi_keterampilan"></textarea>
                                        </div>
      </div>      
</div>
</div>
</div>
<div class="row">       
       <div class="col-lg-12">
                    <div class="panel-primary">
                        <div class="panel-heading">
                            Input Penilaian Sikap Dan Spiritual
                        </div>
 <div class="col-lg-6">
    <br>
                                         <div class="form-group">
                                            <label>Nilai Dalam Mapel</label><span style="color: red; font-size: 14pt;"> *</span> 
                                             <select class="form-control" name="dalam_mapel" id="huruf_dalam">
                                                <option value="Pilih Nilai Huruf">Pilih Nilai Huruf</option>
                                                <option value="Sangat Baik">Sangat Baik</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Sangat Cukup">Sangat Cukup</option>
                                                <option value="Cukup">Cukup</option>
                                                </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Nilai Antar Mapel</label><span style="color: red; font-size: 14pt;"> *</span> 
                                             <select class="form-control" name="antar_mapel" id="huruf_antar">
                                                <option value="Pilih Nilai Huruf">Pilih Nilai Huruf</option>
                                                <option value="Sangat Baik">Sangat Baik</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Sangat Cukup">Sangat Cukup</option>
                                                <option value="Cukup">Cukup</option>
                                                </select>
                                        </div>
                                </div>      
<div class="col-lg-6">
    <br>
    
                                        <div class="form-group">
                                            <label>Deskripsi Penilaian Sikap Dan Spiritual</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <textarea class="form-control" placeholder="Masukkan Deskripsi Sikap Dan Spiritual" 
                                            name="deskripsi_sikap" rows="3" id="deskripsi_sikap"></textarea>
                                        </div>
</div>
</div>

      </div>  
  </div>

<div class="col-lg-6">

                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-danger">Batal</button>
                                        </div>                                                                   
</form>




                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <?php } ?>
  <?php
if($_GET['act']=="edit"){
    ?>
           <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Edit Nilai Siswa  <?php 
                            $sqlc=mysqli_query($koneksi,"SELECT * FROM rapor WHERE nama_mapel='$_GET[mapel]' ");
                            $rsc=mysqli_fetch_array($sqlc);
                            echo "Mata Pelajaran : $rsc[nama_mapel]";
                            $mapel=$_GET['mapel'];
                       

 ?></strong></h3>   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Edit Identitas Rapor 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php
                                 $sqlj=mysqli_query($koneksi,"SELECT * FROM rapor WHERE idr='$_GET[idr]' ");
                                 $rsj=mysqli_fetch_array($sqlj);
                                 $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE nama_kelas='$rsj[nama_kelas]'");
                                 $rsw=mysqli_fetch_array($sqlw);
                                 $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
                                 $rsb=mysqli_fetch_array($sqlb);
                                 $sqlk=mysqli_query($koneksi,"SELECT * FROM mapel WHERE nama_mapel='$_GET[mapel]' AND idk='$rsw[idk]'");
                                 $rsk=mysqli_fetch_array($sqlk);
                                ?>
                                    <form method="post" role="form" action="././module/simpan.php?act=edit_nilai" id="myformrapor"  onSubmit="return validasi_rapor()">
<input type="hidden" name="idr" value="<?php echo $_GET['idr'] ?>" />
<div class="col-lg-6">
    <fieldset disabled>
                                        <div class="form-group">
                                            <label>Nama Siswa</label>
                                            <input class="form-control" placeholder="Masukkan Nama Siswa"  name="nama" 
                                            value="<?php echo "$rsj[nama]"; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Induk Siswa</label>
                                            <input class="form-control" placeholder="Masukkan Nomor Induk Siswa"  name="nis"  
                                            value="<?php echo "$rsj[nis]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input class="form-control" placeholder="Masukkan Nama Sekolah"  name="nama_sekolah"  
                                            value="<?php echo "$rsj[nama_sekolah]"; ?>">
                                        </div>
                                        
                                    
                                        </fieldset>                                          
                         </div>
                                                 
                                        
<div class="col-lg-6">
    <fieldset disabled>
        <div class="form-group">
                                            <label>Alamat Sekolah</label>
                                            <input class="form-control" placeholder="Masukkan Alamat Sekolah"  name="alamat"  
                                            value="<?php echo "$rsj[alamat]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" placeholder="Masukkan Nama Kelas"  name="kelas"  
                                            value="<?php echo "$rsj[nama_kelas]"; ?>">
                                        </div>
                                    </fieldset>
                                       
       <fieldset disabled>                               
<div class="form-group">
                                            <label>Tahun Ajaran</label>
                                            <input class="form-control" placeholder="Masukkan Tahun Ajaran"  name="tahun_ajaran"  
                                            value="<?php echo "$rsj[tahun_ajaran]"; ?>">
                                        </div>
                                    </fieldset>
                                </div>
 <div class="row">       
       <div class="col-lg-12">
                    <div class="panel-primary">
                        <div class="panel-heading">
                            Kriteria Kelulusan Minimal
                        </div>
 <div class="col-lg-6">
    <br><fieldset disabled>
    <div class="form-group">
    
                                            <label>Kriteria Kelulusan Mininal</label>
                                             <input class="form-control" placeholder="Masukkan Kriteria Kelulusan Minimal" name="kkm" value="<?php echo "$rsj[kkm]"; ?>">
                                        </div>
                                    </fieldset>
                            </div>
                        </div>
</div>
</div>                                   

      <div class="row">       
       <div class="col-lg-12">
                    <div class="panel-primary">
                        <div class="panel-heading">
                            Edit Penilaian Kompetensi Pengetahuan
                        </div>
 <div class="col-lg-6">
    <br>
                                        <div class="form-group">
                                            <label>Nilai Angka</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <input class="form-control" placeholder="Masukkan Nilai Angka Pengetahuan" 
                                             name="nilai_pengetahuan" id="nilai_pengetahuan" value="<?php echo "$rsj[nilai_pengetahuan]"; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Nilai Huruf</label>
                                             <select class="form-control" name="predikat_pengetahuan" id="huruf_pengetahuan">
                                                <option value="Pilih Nilai Huruf">Pilih Nilai Huruf</option>
                                                <option value="A">A</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="B-">B-</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="C-">C-</option>
                                                <option value="D+">D+</option>
                                                <option value="D">D</option>
                                                <option value="D-">D-</option>
                                                <option value="E">E</option>
                                                </select>
                                        </div>
                                </div>      
<div class="col-lg-6">
    <br>
    
                                        <div class="form-group">
                                            <label>Deskripsi Penilaian Kompetensi Pengetahuan</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <textarea class="form-control" placeholder="Masukkan Deskripsi Pengetahuan" 
                                            name="deskripsi_pengetahuan" rows="3" id="deskripsi_pengetahuan"><?php echo "$rsj[deskripsi_pengetahuan]"; ?></textarea>
                                        </div>
</div>
</div>

      </div>  
  </div>

      <div class="row">       
       <div class="col-lg-12">
                    <div class="panel-primary">
                        <div class="panel-heading">
                            Edit Penilaian Kompetensi Keterampilan
                        </div>
 <div class="col-lg-6">
    <br>
                                        <div class="form-group">
                                            <label>Nilai Angka</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <input class="form-control" placeholder="Masukkan Nilai Angka Keterampilan" 
                                             name="nilai_keterampilan" id="nilai_keterampilan" 
                                             value="<?php echo "$rsj[nilai_keterampilan]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nilai Huruf</label>
                                             <select class="form-control" name="predikat_keterampilan" id="huruf_keterampilan">
                                                <option value="Pilih Nilai Huruf">Pilih Nilai Huruf</option>
                                                <option value="A">A</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="B-">B-</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="C-">C-</option>
                                                <option value="D+">D+</option>
                                                <option value="D">D</option>
                                                <option value="D-">D-</option>
                                                <option value="E">E</option>
                                                </select>
                                        </div>
                                </div>

                                <br>
<div class="col-lg-6">
    
                                        <div class="form-group">
                                            <label>Deskripsi Penilaian Kompetensi Keterampilan</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <textarea class="form-control" placeholder="Masukkan Deskripsi Keterampilan" 
                                            name="deskripsi_keterampilan" rows="3" id="deskripsi_keterampilan"><?php echo "$rsj[deskripsi_keterampilan]"; ?></textarea>
                                        </div>
      </div>      
</div>
</div>
</div>
<div class="row">       
       <div class="col-lg-12">
                    <div class="panel-primary">
                        <div class="panel-heading">
                            Edit Penilaian Sikap Dan Spiritual
                        </div>
 <div class="col-lg-6">
    <br>
                                         <div class="form-group">
                                            <label>Nilai Dalam Mapel</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <select class="form-control" name="dalam_mapel" id="huruf_dalam">
                                                <option value="Pilih Nilai Huruf">Pilih Nilai Huruf</option>
                                                <option value="Sangat Baik">Sangat Baik</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Sangat Cukup">Sangat Baik</option>
                                                <option value="Cukup">Cukup</option>
                                                </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Nilai Antar Mapel</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <select class="form-control" name="antar_mapel" id="huruf_antar">
                                                <option value="Pilih Nilai Huruf">Pilih Nilai Huruf</option>
                                                <option value="Sangat Baik">Sangat Baik</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Sangat Cukup">Sangat Baik</option>
                                                <option value="Cukup">Cukup</option>
                                                </select>
                                        </div>
                                </div>      
<div class="col-lg-6">
    <br>
    
                                        <div class="form-group">
                                            <label>Deskripsi Penilaian Sikap Dan Spiritual</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <textarea class="form-control" placeholder="Masukkan Deskripsi Sikap Dan Spiritual" 
                                            name="deskripsi_sikap" rows="3" id="deskripsi_sikap"><?php echo "$rsj[deskripsi_sikap]"; ?>
                                            </textarea>
                                        </div>
</div>
</div>

      </div>  
  </div>
                                    

     

<div class="col-lg-6">

                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-danger">Batal</button>
                                        </div>                                                                   
</form>




                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <?php } ?>