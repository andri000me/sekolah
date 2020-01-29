
<?php
if($_GET['act']=="input"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Pelengkap Rapor Siswa<?php
                    $sqlc=mysqli_query($koneksi,"SELECT * FROM siswa WHERE ids='$_GET[ids]' AND tahun_ajaran='$_GET[tahun_ajaran]'"); 
                            $rsc=mysqli_fetch_array($sqlc);
                            $ids=$_GET['ids'];?></strong></h3>
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

                                ?>
                                    <form method="post" role="form" action="././module/simpan.php?act=input_kondisi&ids=<?php echo $ids?>" 
                                        id="myformkondisi"  onSubmit="return validasi_kondisi()">

<div class="col-lg-6">
    <fieldset disabled>
                                        <div class="form-group">
                                            <label>Nama Siswa</label>
                                            <input class="form-control" placeholder="Nama Siswa"  name="nama" 
                                            value="<?php echo "$rs[nama]"; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Induk Siswa</label>
                                            <input class="form-control" placeholder="Nomor Induk Siswa"  name="nis"  
                                            value="<?php echo "$rs[nis]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input class="form-control" placeholder="Nama Sekolah"  name="nama_sekolah"  
                                            value="<?php echo "$rsb[nama_sekolah]"; ?>">
                                        </div>
                                        
                                    
                                        </fieldset>                                          
                         </div>
                                                 
                                        
<div class="col-lg-6">
    <fieldset disabled>
        <div class="form-group">
                                            <label>Alamat Sekolah</label>
                                            <input class="form-control" placeholder="Alamat Sekolah"  name="alamat"  
                                            value="<?php echo "$rsb[alamat]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" placeholder="nama_kelas"  name="kelas"  
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
                    <div class="panel-primary ">
                        <div class="panel-heading">
                            Input Esktrakulikuler 
                        </div>

<div class="col-lg-6">
    <br>
                                        <div class="form-group">
                                            <label>Nama Esktrakulikuler</label><span style="color: red; font-size: 14pt;"> *</span>
                                              <select class="form-control" name="nama_ekstra1" id="nama_ekstra1">
                                                <option value="Pilih Ekstrakulikuler">Pilih Ekstrakulikuler</option>
                                      
                                          <?php 

  if($_SESSION['level']=="walikelas"){
    $sql=mysqli_query($koneksi,"SELECT * FROM ekstrakulikuler WHERE idk='$_SESSION[idk]'");
  }else{
    $sql=mysqli_query($koneksi,"SELECT * FROM ekstrakulikuler");    
  }
    while($rs=mysqli_fetch_array($sql)){
    $sqla=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
    $rsa=mysqli_fetch_array($sqla);

    echo "<option value='$rs[nama_ekstra]'> $rs[nama_ekstra]</option>";    
}
?> 
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Esktrakulikuler</label><span style="color: red; font-size: 14pt;"> *</span>
                                              <select class="form-control" name="nama_ekstra2" id="nama_ekstra2">
                                                <option value="Pilih Ekstrakulikuler">Pilih Ekstrakulikuler</option>
                                      
                                          <?php 

  if($_SESSION['level']=="walikelas"){
    $sql=mysqli_query($koneksi,"SELECT * FROM ekstrakulikuler WHERE idk='$_SESSION[idk]'");
  }else{
    $sql=mysqli_query($koneksi,"SELECT * FROM ekstrakulikuler");    
  }
    while($rs=mysqli_fetch_array($sql)){
    $sqla=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
    $rsa=mysqli_fetch_array($sqla);

    echo "<option value='$rs[nama_ekstra]'> $rs[nama_ekstra]</option>";    
}
?> 
                                                </select>
                                        </div>
                                    </div>
<div class="col-lg-6">
    <br>
                                        <div class="form-group">
                                            <label>Nilai Huruf</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <select class="form-control" name="nilai_ekstra1" id="nilai_ekstra1">
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
                                         <div class="form-group">
                                            <label>Nilai Huruf</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <select class="form-control" name="nilai_ekstra2" id="nilai_ekstra2">
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
      </div>
      </div>
      </div>

                                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel-primary ">
                        <div class="panel-heading">
                            Input Ketidakhadiran
                        </div>

 <div class="col-lg-6">
    <br>
    <div class="form-group">
                                            <label>Jumlah Sakit Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <input class="form-control" placeholder="Masukkan Jumlah Sakit Siswa" name="ket_sakit" 
                                             id="ket_sakit">
                                        </div>
                                          <div class="form-group">
                                            <label>Jumlah Izin Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <input class="form-control" placeholder="Masukkan Jumlah Izin Siswa" name="ket_izin" 
                                             id="ket_izin">
                                        </div>
                                    </div>
                                <br>
<div class="col-lg-6">
  <div class="form-group">
                                            <label>Jumlah Alpa Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <input class="form-control" placeholder="Masukkan Jumlah Alpa Siswa" name="ket_alpa" 
                                             id="ket_alpa">
                                        </div>
                                </div>      
</div>
</div>
</div>
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel-primary ">
                        <div class="panel-heading">
                            Input Kepribadian
                        </div>

 <div class="col-lg-6">
    <br>
    <div class="form-group">
                                            <label>Keterangan Kelakukan</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <textarea class="form-control" placeholder="Masukkan Keterangan Kelakuan" name="kelakuan"
                                             id="kelakuan"></textarea>
                                        </div>
                                          <div class="form-group">
                                            <label>Keterangan Kerajinan</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <textarea class="form-control" placeholder="Masukkan Keterangan Kerajinan" name="kerajinan"
                                             id="kerajinan"></textarea>
                                        </div>
                                    </div>
                                <br>
<div class="col-lg-6">
  <div class="form-group">
                                            <label>Keterangan Kerapihan</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <textarea class="form-control" placeholder="Masukkan Keterangan Kerapihan" name="kerapihan"
                                             id="kerapihan"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan Kebersihan</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <textarea class="form-control" placeholder="Masukkan Keterangan Kebersihan" name="kebersihan"
                                             id="kebersihan"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-danger">Batal</button>
                                </div>      
</div>
</div>
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
                    <h3 class="page-header"><strong>Edit Pelengkap Rapor Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Edit Pelengkap Rapor Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                                $sql=mysqli_query($koneksi,"SELECT * FROM rapor_kondisi WHERE idrk='$_GET[idrk]'");
                                $rs=mysqli_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/simpan.php?act=edit_kondisi" id="myformkondisi"  onSubmit="return validasi_kondisi()">
<input type="hidden" name="idrk" value="<?php echo $_GET['idrk'] ?>" />
<div class="col-lg-6">
    <fieldset disabled>
                                        <div class="form-group">
                                            <label>Nama Siswa</label>
                                            <input class="form-control" placeholder="Nama Siswa"  name="nama" 
                                            value="<?php echo "$rs[nama]"; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Induk Siswa</label>
                                            <input class="form-control" placeholder="Nomor Induk Siswa"  name="nis"  
                                            value="<?php echo "$rs[nis]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input class="form-control" placeholder="Nama Sekolah"  name="nama_sekolah"  
                                            value="<?php echo "$rs[nama_sekolah]"; ?>">
                                        </div>
                                        
                                    
                                        </fieldset>                                          
                         </div>
                                                 
                                        
<div class="col-lg-6">
    <fieldset disabled>
        <div class="form-group">
                                            <label>Alamat Sekolah</label>
                                            <input class="form-control" placeholder="Alamat Sekolah"  name="alamat"  
                                            value="<?php echo "$rs[alamat]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" placeholder="nama_kelas"  name="kelas"  
                                            value="<?php echo "$rs[nama_kelas]"; ?>">
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
                    <div class="panel-primary ">
                        <div class="panel-heading">
                            Edit Esktrakulikuler 
                        </div>

<div class="col-lg-6">
    <br>
                                        <div class="form-group">
                                            <label>Nama Esktrakulikuler</label><span style="color: red; font-size: 14pt;"> *</span>
                                              <select class="form-control" name="nama_ekstra1" id="nama_ekstra1">
                                                <option value="Pilih Ekstrakulikuler">Pilih Ekstrakulikuler</option>
                                      
                                          <?php 

  if($_SESSION['level']=="walikelas"){
    $sqlw=mysqli_query($koneksi,"SELECT * FROM ekstrakulikuler WHERE idk='$_SESSION[idk]'");
  }else{
    $sqlw=mysqli_query($koneksi,"SELECT * FROM ekstrakulikuler");    
  }
    while($rsw=mysqli_fetch_array($sqlw)){
    $sqla=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
    $rsa=mysqli_fetch_array($sqla);

    echo "<option value='$rsw[nama_ekstra]'> $rsw[nama_ekstra]</option>";    
}
?> 
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Esktrakulikuler</label><span style="color: red; font-size: 14pt;"> *</span>
                                              <select class="form-control" name="nama_ekstra2" id="nama_ekstra2">
                                                <option value="Pilih Ekstrakulikuler">Pilih Ekstrakulikuler</option>
                                      
                                          <?php 

  if($_SESSION['level']=="walikelas"){
    $sqlc=mysqli_query($koneksi,"SELECT * FROM ekstrakulikuler WHERE idk='$_SESSION[idk]'");
  }else{
    $sqlc=mysqli_query($koneksi,"SELECT * FROM ekstrakulikuler");    
  }
    while($rsc=mysqli_fetch_array($sqlc)){
    $sqlb=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
    $rsb=mysqli_fetch_array($sqlb);

    echo "<option value='$rsc[nama_ekstra]'> $rsc[nama_ekstra]</option>";    
}
?> 
                                                </select>
                                        </div>
                                    </div>
<div class="col-lg-6">
    <br>
                                        <div class="form-group">
                                            <label>Nilai Huruf</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <select class="form-control" name="nilai_ekstra1" id="nilai_ekstra1">
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
                                         <div class="form-group">
                                            <label>Nilai Huruf</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <select class="form-control" name="nilai_ekstra2" id="nilai_ekstra2">
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
      </div>
      </div>
      </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel-primary ">
                        <div class="panel-heading">
                            Edit Ketidakhadiran
                        </div>

 <div class="col-lg-6">
    <br>
    <div class="form-group">
                                            <label>Jumlah Sakit Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <input class="form-control" placeholder="Masukkan Jumlah Sakit Siswa" name="ket_sakit" 
                                             id="ket_sakit" value="<?php echo "$rs[ket_sakit]"; ?>">
                                        </div>
                                          <div class="form-group">
                                            <label>Jumlah Izin Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <input class="form-control" placeholder="Masukkan Jumlah Izin Siswa" name="ket_izin" 
                                             id="ket_izin" value="<?php echo "$rs[ket_izin]"; ?>">
                                        </div>
                                    </div>
                                <br>
<div class="col-lg-6">
  <div class="form-group">
                                            <label>Jumlah Alpa Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <input class="form-control" placeholder="Masukkan Jumlah Alpa Siswa" name="ket_alpa" 
                                             id="ket_alpa" value="<?php echo "$rs[ket_alpa]"; ?>">
                                        </div>
                                </div>      
</div>
</div>
</div>
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel-primary ">
                        <div class="panel-heading">
                            Edit Kepribadian
                        </div>

 <div class="col-lg-6">
    <br>
    <div class="form-group">
                                            <label>Keterangan Kelakukan</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <textarea class="form-control" placeholder="Masukkan Keterangan Kelakuan" name="kelakuan" id="kelakuan"><?php echo "$rs[kelakuan]"; ?></textarea>
                                        </div>
                                          <div class="form-group">
                                            <label>Keterangan Kerajinan</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <textarea class="form-control" placeholder="Masukkan Keterangan Kerajinan" name="kerajinan" id="kerajinan"><?php echo "$rs[kerajinan]"; ?></textarea>
                                        </div>
                                    </div>
                                <br>
<div class="col-lg-6">
  <div class="form-group">
                                            <label>Keterangan Kerapihan</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <textarea class="form-control" placeholder="Masukkan Keterangan Kerapihan" name="kerapihan" id="kerapihan"><?php echo "$rs[kerapihan]"; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan Kebersihan</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <textarea class="form-control" placeholder="Masukkan Keterangan Kebersihan" name="kebersihan" id="kebersihan"><?php echo "$rs[kebersihan]"; ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-danger">Batal</button>
                                </div>      
</div>
</div>
</div>


                                        
                                         
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php } ?>