          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Kelas Per-Tahun Ajaran</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Kelas dan Tahun Ajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="././media.php?module=kelas" id="myformpilihkelas" onSubmit="return validasi_pilihkelas()">


                                <div class="col-lg-6">
<input type="hidden" name="module" value="kelas">

                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <select class="form-control" name="sekolah">

  <?php 
    $sql=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$_SESSION[id_sekolah]'");
    while($rs=mysqli_fetch_array($sql)){
if($_SESSION['level']=="admin_guru"){
if($rs['id_sekolah']==$_SESSION['id_sekolah']){
        
    echo "<option value='$rs[id_sekolah]'>$rs[nama_sekolah]</option>";  
}
}else{
        echo "<option value='$rs[id_sekolah]'>$rs[nama_sekolah]</option>";  

    }
}
?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Ajaran</label>
                                            <select class="form-control"  name="tahun_ajaran" id="tahun_ajaran">
                                            <option value="Pilih Tahun Ajaran">Pilih Tahun Ajaran</option>
<?php 
$ht=2010;
while($ht<=2050){
    $to=$ht+1;
if(date("m")>=7){
    $e=$ht;
}else{
    $e=$to; 
}
if(date("Y")==$e){
    echo "<option >Gasal $ht/$to</option>";
    echo "<option >Genap $ht/$to</option>";    
}else{
    echo "<option >Gasal $ht/$to</option>";    
    echo "<option >Genap $ht/$to</option>";
}
$ht++;
}?>
         
</select>
</div>
               


                                        <button type="submit" class="btn btn-success">Submit</button>

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