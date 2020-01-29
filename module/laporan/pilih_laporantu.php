          
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Laporan Presensi</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Kelas dan Mata Pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="././module/export.php" id="myformcetak" 
                                    onSubmit="return validasi_cetak()">



                                <div class="col-lg-6">
<input type="hidden" name="module" value="export.php">
                                        <div class="form-group">
                                            <label>Kelas</label>
                                      <select class="form-control" name="kls" id="kelas">
                                                <option value="Pilih Kelas">Pilih Kelas</option>
  <?php 
    $sql=mysqli_query($koneksi,"SELECT * FROM kelas");
    while($rsb=mysqli_fetch_array($sql)){

    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsb[id]'");
    $rsa=mysqli_fetch_array($sqla);
if($_SESSION['level']=="admin_guru"){
if($rsa['id_sekolah']==$_SESSION['id_sekolah']){
    echo "<option value='$rsb[idk]'>$rsa[nama_sekolah] | $rsb[nama_kelas]</option>";  
}
}else{
    echo "<option value='$rsb[idk]'>$rsa[nama_sekolah] | $rsb[nama_kelas]</option>";      
    }
}
?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Mata Pelajaran</label>
                                            <select class="form-control" name="mapel" id="nama_mapel">
                                                <option value="">Pilih Mata Pelajaran</option>
<?php 
$query = mysqli_query($koneksi,"SELECT *FROM mapel INNER JOIN kelas ON mapel.idk = kelas.idk 
ORDER BY nama_mapel");
              while ($row = mysqli_fetch_array($query)) {
                ?>

                    <option id="nama_mapel" class="<?php echo $row['idk']; ?>" 
value="<?php echo $row['nama_mapel']; ?>">
                        <?php echo $row['nama_mapel']; ?>
                    </option>
                <?php
                }
?>                                           </select>
                                        </div>
                                <div class="col-lg-4">

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <select class="form-control" name="tanggal">
<?php 
$tt=1;
while($tt<=31){
if(date("d")==$tt){
    echo "<option selected>$tt</option>";   
}else{
    echo "<option>$tt</option>";    

}
$tt++;
}?>
                                         </select>
                                        </div>
</div>         
                                <div class="col-lg-4">

                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <select class="form-control" name="bulan">
<?php 
$bt=1;
while($bt<=12){
if(date("m")==$bt){
    echo "<option selected>$bt</option>";   
}else{
    echo "<option>$bt</option>";    

}
$bt++;
}?>
                                            </select>
                                        </div>
</div>         
                                <div class="col-lg-4">

                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun">
<?php 
$ht=2000;
while($ht<=2050){
if(date("Y")==$ht){
    echo "<option selected>$ht</option>";   
}else{
    echo "<option>$ht</option>";    
    
}
$ht++;
}?>
                                            </select>
                                        </div>
</div>         
<a href="././module/export.php">
                                        <button type="submit" class="btn btn-primary">Cetak</button></a>
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
            
                    
