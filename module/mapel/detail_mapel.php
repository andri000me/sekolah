<?php                            
	$sql=mysqli_query($koneksi,"SELECT * FROM mapel WHERE idm='$_GET[idm]'");
	$rs=mysqli_fetch_array($sql);
?>
          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Detail Mata Pelajaran : <?php echo "$rs[nama_mapel]"; ?></strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Mata Pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">

                               
                                <div class="col-lg-6">
                                        <fieldset disabled>

                                        <div class="form-group">
                                            <label>Kode Mata Pelajaran</label>
                                            <input class="form-control"  placeholder="Kode Mata Pelajaran" name="kode_mapel" value="<?php echo "$rs[kode_mapel]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mata Pelajaran</label>
                                            <input class="form-control" placeholder="Nama Mata Pelajaran" name="nama_mapel" value="<?php echo "$rs[nama_mapel]"; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>KKMn</label>
                                            <input class="form-control" placeholder="Kriteria Kelulusan Minimal" name="nama_mapel" value="<?php echo "$rs[kkm]"; ?>">
                                        </div>
                                        
                                     
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
