
<?php
if($_GET['act']=="input"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Prestasi Siswa<?php
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
                                    <form method="post" role="form" action="././module/simpan.php?act=input_prestasi&ids=<?php echo $ids?>" 
                                        id="myformprestasi"  onSubmit="return validasi_prestasi()">

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
                            Input Prestasi 
                        </div>

<div class="col-lg-6">
    <br>
                                
                                        <div>
                                        <label>Tanggal Prestasi</label><span style="color: red; font-size: 14pt;"> *</span>
                        <div class="form-group">
                            <div class="input-group date" id="datepicker">
                                <input type="text" class="form-control" placeholder="Masukkan Tanggal Prestasi" name="tanggal" 
                                id="tanggal_prestasi">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        </div>
                      


                                       <div class="form-group">
                                            <label>Keterangan Prestasi</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <textarea class="form-control" placeholder="Masukkan Keterangan Prestasi" 
                                             name="keterangan_prestasi" rows="3" id="deskripsi_prestasi"></textarea>
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
                    <h3 class="page-header"><strong>Edit Prestasi Siswa</strong></h3>
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
                                $sql=mysqli_query($koneksi,"SELECT * FROM prestasi WHERE idp='$_GET[idp]'");
                                $rs=mysqli_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/simpan.php?act=edit_prestasi" id="myformprestasi"  onSubmit="return validasi_prestasi()">
<input type="hidden" name="idp" value="<?php echo $_GET['idp'] ?>" />
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
                            Edit Prestasi 
                        </div>

<div class="col-lg-6">
    <br>
                  
                        <div>
                                      <label>Tanggal Prestasi</label><span style="color: red; font-size: 14pt;"> *</span>
                                        <div class="form-group">
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" class="form-control" placeholder="Masukkan Tanggal Prestasi" id="tanggal" name="tanggal" value="<?php echo "$rs[tanggal]"; ?>">
                                             <span class="input-group-addon">
                                             <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                            </div>
                                        </div>
                                        </div>


                                       <div class="form-group">
                                            <label>Keterangan Prestasi</label><span style="color: red; font-size: 14pt;"> *</span>
                                             <textarea class="form-control" placeholder="Masukkan Keterangan Prestasi" name="keterangan_prestasi" rows="3" id="deskripsi_prestasi"><?php echo "$rs[keterangan_prestasi]"; ?></textarea>
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
                                <!-- /.col-lg-6 (nested) -->
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