<?php
if($_GET['act']=="input"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Data Kelas</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form  method="post" role="form" action="././module/simpan.php?act=input_kelas" id="myformkelas" onSubmit="return validasi_kelas()">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Sekolah</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <select class="form-control" name="id">
  <?php 
    $sql=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$_SESSION[id_sekolah]'");
    while($rs=mysqli_fetch_array($sql)){
if($_SESSION['level']=="admin_guru"){
if($rs['id']==$_SESSION['id']){
        
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
                                            <label>Nama Kelas</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Kelas" id="nama" name="nama_kelas">
                                        </div>
<div class="form-group">
                                            <label>Tahun Ajaran</label><span style="color: red; font-size: 14pt;"> *</span>
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
                                        
                                        <button type="submit" class="btn btn-success">Submit </button>
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
if($_GET['act']=="edit_kelas"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Edit Data Kelas</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                                $sql=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$_GET[idk]'");
                                $rs=mysqli_fetch_array($sql);

?>
                                    <form method="post" role="form" action="././module/simpan.php?act=edit_kelas" id="myformkelas" onSubmit="return validasi_kelas()">
                                    <input type="hidden" name="idk" value="<?php echo $_GET['idk'] ?>" />

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Sekolah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <select class="form-control" name="nama_sekolah">
  <?php 
    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah");
    while($rsa=mysqli_fetch_array($sqla)){
if($_SESSION['level']=="admin_guru"){
if($rsa['id_sekolah']==$_SESSION['id_sekolah']){

if($rs['id_sekolah']==$rsa['id_sekolah']){

    echo "<option value='$rsa[id_sekolah]' selected='selected'>$rsa[nama_sekolah]</option>";    
}else{
    echo "<option value='$rsa[id_sekolah]'>$rsa[nama_sekolah]</option>";        
}

}
}else{
if($rs['id_sekolah']==$rsa['id_sekolah']){

    echo "<option value='$rsa[id_sekolah]' selected='selected'>$rsa[nama_sekolah]</option>";    
}else{
    echo "<option value='$rsa[id_sekolah]'>$rsa[nama_sekolah]</option>";        
}

}
}
?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kelas</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Kelas" id="nama" name="nama_kelas" value="<?php echo $rs['nama_kelas'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Ajaran</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <select class="form-control" name="tahun_ajaran" value="<?php echo $rs['tahun_ajaran'] ?>">
                                                 <option>Pilih Tahun Ajaran</option>
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
             