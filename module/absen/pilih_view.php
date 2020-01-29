          <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>View Data Presensi Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="././media.php?module=presensi">



                                <div class="col-lg-6">
<input type="hidden" name="module" value="presensi">
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kls">

<?php 
  if($_SESSION['level']=="gurumapel"){
    $sql=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$_SESSION[idk]'");
  }else{
    $sql=mysqli_query($koneksi,"SELECT * FROM kelas");    
  }
    while($rs=mysqli_fetch_array($sql)){
    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rs[id]'");
    $rsa=mysqli_fetch_array($sqla);

    echo "<option value='$rs[idk]'>$rsa[nama_sekolah] | $rs[nama_kelas]</option>";  
}
?>                                      </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Mata Pelajaran</label>
                                            <select class="form-control" name="mapel">

 <?php 
  if($_SESSION['level']=="gurumapel"){
    $sql=mysqli_query($koneksi,"SELECT * FROM gurumapel WHERE idk='$_SESSION[idk]'");
  }
    while($rs=mysqli_fetch_array($sql)){


    echo "<option value='$rs[nama_mapel]'> $rs[nama_mapel]</option>";  
}
?> 

                                            </select>
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

                                        <button type="submit" class="btn btn-success">Submit </button>
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
            
                  