<?php                            
    $sql=mysqli_query($koneksi,"SELECT * FROM walikelas WHERE idw='$_GET[idw]'");
    $rs=mysqli_fetch_array($sql);
?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Detail Wali Kelas : <?php echo "$rs[nama]"; ?></strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Wali Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">

                               
                                <div class="col-lg-6">
                                        <fieldset disabled>

                                        <div class="form-group">
                                            <label>Nomor Induk Pegawai</label>
                                            <input class="form-control"  placeholder="Nomor Induk Pegawai" name="nip" value="<?php echo "$rs[nip]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Wali Kelas</label>
                                            <input class="form-control" placeholder="Nama" name="nama" value="<?php echo "$rs[nama]"; ?>">
                                        </div>
                                        
                                 
                                        <div class="form-group">
                                           <label>Jenis Kelamin</label>
        <?php if($rs['jk']=="L"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" 
                                                    checked>Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P">
                                                    Perempuan
                                                </label>
                                            </div>
                                        
<?php } ?>
        <?php if($rs['jk']=="P"){ ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="L" 
                                                    >Laki - Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="P" checked>
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
<?php } ?>


                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"><?php echo "$rs[alamat]"; ?></textarea>
                                        </div>
                    
</fieldset>
</div>

                                <div class="col-lg-6">
                              <fieldset disabled>
                    <div class="form-group">
                                            <label>Kelas Yang Diwakili</label>
                                            <select class="form-control" name="kelas">
<?php 
    $sqlc=mysqli_query($koneksi,"SELECT * FROM kelas");
    while($rsc=mysqli_fetch_array($sqlc)){

    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsc[id]'");
    $rsa=mysqli_fetch_array($sqla);
if($_SESSION['level']=="admin_guru"){
if($rsa['id_sekolah']==$_SESSION['id_sekolah']){
    echo "<option value='$rsc[idk]'>$rsa[nama_sekolah] | $rsc[nama_kelas]</option>";  
}
}else{
    echo "<option value='$rsc[idk]'>$rsa[nama_sekolah] | $rsc[nama_kelas]</option>";      
    }
}
?>
                                          </select>
                                      
</div>
                                         <div class="form-group">
                                            <label>No. Telepon</label>
                                            <input type="text" class="form-control" placeholder="No Telepon" name="tlp" value="<?php echo "$rs[tlp]"; ?>">
                                        </div>
                                        
</fieldset>                                        
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
