<?php                            
	$sql=mysqli_query($koneksi,"SELECT * FROM siswa WHERE ids='$_GET[ids]'");
	$rs=mysqli_fetch_array($sql);
?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Detail Siswa : <?php echo "$rs[nama]"; ?></strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">

                               
                                <div class="col-lg-6">
                                        <fieldset disabled>

                                        <div class="form-group">
                                            <label>Nomor Induk Siswa</label>
                                            <input class="form-control"  placeholder="Nomor Induk Siswa" name="nis" value="<?php echo "$rs[nis]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Siswa</label>
                                            <input class="form-control" placeholder="Nama Siswa" name="nama" value="<?php echo "$rs[nama]"; ?>">
                                        </div>
                                        
                                       
                                            <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" placeholder="Tempat Lahir" name="tempat" value="<?php echo "$rs[tempat]"; ?>">
                                        </div>
                                      <div>
                                        <label>Tanggal Lahir</label>
                        <div class="form-group">
                            <div class="input-group date" id="datepicker">
                         <input type="text" class="form-control" placeholder="Tanggal Lahir" name="tanggal" value="<?php echo "$rs[tanggal]"; ?>">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        </div>
         
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
                                       
<?php } ?>


                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"><?php echo "$rs[alamat]"; ?></textarea>
                                        </div>
                                       
               
                                        <div class="form-group">
                                         <label>No. Telepon</label>
                                         <input type="text" class="form-control" placeholder="No Telepon" name="tlp" value="<?php echo "$rs[tlp]"; ?>">
                                        </div>
</fieldset>
</div>

                                <div class="col-lg-6">
                              <fieldset disabled>
 <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas">
  <?php 
    $sqlc=mysqli_query($koneksi,"SELECT * FROM kelas");
    while($rsc=mysqli_fetch_array($sqlc)){
    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsc[id]'");
    $rsa=mysqli_fetch_array($sqla);
if($_SESSION['level']=="admin_guru"){
if($rsa['id']==$_SESSION['id']){

if($rs['idk']==$rsc['idk']){
    echo "<option value='$rsc[idk]' selected>$rsa[nama_sekolah] | $rsc[nama_kelas]</option>";   
}else{
    echo "<option value='$rsc[idk]'>$rsa[nama_sekolah] | $rsc[nama_kelas]</option>";    

}
}
}else{
if($rs['idk']==$rsc['idk']){
    echo "<option value='$rsc[idk]' selected>$rsa[nama_sekolah] | $rsc[nama_kelas]</option>";   
}else{
    echo "<option value='$rsc[idk]'>$rsa[nama_sekolah] | $rsc[nama_kelas]</option>";    

}
    
}
}?>

                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Ajaran</label>
                                            <input class="form-control" name="tahun_ajaran" value="<?php echo "$rs[tahun_ajaran]"; ?>">
                                            
</div>
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input class="form-control" placeholder="Nama" name="bapak" value="<?php echo "$rs[bapak]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input class="form-control" placeholder="Pekerjaan" name="k_bapak" value="<?php echo "$rs[k_bapak]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input class="form-control" placeholder="Nama" name="ibu" value="<?php echo "$rs[ibu]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input class="form-control" placeholder="Pekerjaan" name="k_ibu" value="<?php echo "$rs[k_ibu]"; ?>">
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
