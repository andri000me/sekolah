
<?php
if($_GET['act']=="input"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Data Mata Pelajaran</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Mata Pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/simpan.php?act=input_mapel" id="myformmapel" 
                                    onSubmit="return validasi_mapel()">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kode Mata Pelajaran</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Kode Mata Pelajaran" name="kode_mapel" id="kode_mapel">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mata Pelajaran</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Mata Pelajaran" name="nama_mapel">
                                        </div>
                                        <div class="form-group">
                                            <label>Kriteria Kelulusan Minimal</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Kriteria Kelulusan Minimal" name="kkm" id="kkm">
                                        </div>
                                
                                        <div class="form-group">
                                            <label>Kelas</label><span style="color: red; font-size: 14pt;"> *</span>
                                           <select class="form-control" name="kelas" id="kelas">
                                                <option value="Pilih Kelas">Pilih Kelas</option>
 <?php 
    $sql=mysqli_query($koneksi,"SELECT * FROM kelas");
    while($rs=mysqli_fetch_array($sql)){

    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rs[id]'");
    $rsa=mysqli_fetch_array($sqla);
if($_SESSION['level']=="admin_guru"){
if($rsa['id_sekolah']==$_SESSION['id_sekolah']){
    echo "<option value='$rs[idk]'>$rsa[nama_sekolah] | $rs[nama_kelas]</option>";  
}
}else{
    echo "<option value='$rs[idk]'>$rsa[nama_sekolah] | $rs[nama_kelas]</option>";      
    }
}
?>
                                            </select>
                                        </div>
                                      

                            
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-danger">Batal</button>
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
           
           
           
           <?php
if($_GET['act']=="edit"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Edit Data Mata Pelajaran</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Mata Pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                                $sql=mysqli_query($koneksi,"SELECT * FROM mapel WHERE idm='$_GET[idm]'");
                                $rs=mysqli_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/simpan.php?act=edit_mapel" id="myformmapel" 
                                    onSubmit="return validasi_mapel()">
<input type="hidden" name="id" value="<?php echo $_GET['idm'] ?>" />
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kode Mata Pelajaran</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Kode Mata Pelajaran" name="kode_mapel" id="kode_mapel" value="<?php echo "$rs[kode_mapel]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mata Pelajaran</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Mata Pelajaran" name="nama_mapel" id="nama_mapel" value="<?php echo "$rs[nama_mapel]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kriteria Kelulusan Minimal</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Kriteria Kelulusan Minimal" name="kkm" id="kkm" value="<?php echo "$rs[kkm]"; ?>">
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Mata Pelajaran Kelas</label><span style="color: red; font-size: 14pt;"> *</span>
                                           <select class="form-control" name="kelas" id="kelas">
                                                <option value="Pilih Kelas">Pilih Kelas</option>
<?php 
    $sql=mysqli_query($koneksi,"SELECT * FROM kelas");
    while($rs=mysqli_fetch_array($sql)){

    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rs[id]'");
    $rsa=mysqli_fetch_array($sqla);
if($_SESSION['level']=="admin_guru"){
if($rsa['id_sekolah']==$_SESSION['id_sekolah']){
    echo "<option value='$rs[idk]'>$rsa[nama_sekolah] | $rs[nama_kelas]</option>";  
}
}else{
    echo "<option value='$rs[idk]'>$rsa[nama_sekolah] | $rs[nama_kelas]</option>";      
    }
}
?>
                                          </select>
                                        </div>
                                              <button type="submit" class="btn btn-success">Submit</button>
                                              <button type="reset" class="btn btn-danger">Batal</button>
</div>

                                 
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