
<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Data Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/simpan.php?act=input_siswa" 
                                    id="myformsiswa" onSubmit="return validasi_siswa()" enctype="multipart/form-data">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nomor Induk Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nomor Induk Siswa"  name="nis" id="nis">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Siswa" name="nama" id="nama_siswa">
                                        </div>
                                  <div class="form-group">
                                            <label>Tempat Lahir</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat" id="nama">
                                        </div>
                                      <div>
                                        <label>Tanggal Lahir</label><span style="color: red; font-size: 14pt;"> *</span>
                        <div class="form-group">
                            <div class="input-group date" id="datepicker">
                                <input type="text" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal" id="tanggal">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        </div>
                      
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
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
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <textarea class="form-control" placeholder="Masukkan Alamat" name="alamat" rows="3" id="alamat"></textarea>
                                        </div>
                                      <div class="form-group"> 
                                        <label>No Telepon</label><span style="color: red; font-size: 14pt;"> *</span>                                                                                
                                            <input type="text" class="form-control" placeholder="Masukkan No Telepon" name="tlp" id="tlp">
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
</div>

                                <div class="col-lg-6">
                                     
       
                                        <div class="form-group">
                                            <label>Nama Ayah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Ayah" name="bapak" id="bapak">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Ayah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Pekerjaan Ayah" name="k_bapak" id="k_bapak">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ibu</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Ibu" name="ibu" id="ibu">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Ibu</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Pekerjaan Ibu" name="k_ibu" id="k_ibu">
                                        </div>
                                          <div class="form-group">
                                            <label>Nama Foto Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Foto Siswa"  name="nama_file" id="nama_logo">
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input  type="file" name="file" id="logo">
                                        </div>
                                         <div class="form-group">
                                            <label>Nama Barcode</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Barcode"  name="nama_barcode" >
                                        </div>
                                        <div class="form-group">
                                            <label>Barcode</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input  type="file" name="barcode" >
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Password" name="pass" type="password" id="pw1">
                                        </div>
                                         <div class="form-group">
                                            <label>Konfirmasi Password</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Password Kembali" name="pass" type="password" id="pw2" data-toggle="password">


                                        </div>
                                        <button type="submit" class="btn btn-success" id="submit">Submit</button>
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
					<h3 class="page-header"><strong>Edit Data Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                                $sql=mysqli_query($koneksi,"SELECT * FROM siswa WHERE ids='$_GET[ids]'");
                                $rs=mysqli_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/simpan.php?act=edit_siswa" id="myformsiswa" 
                                    onSubmit="return validasi_siswa()" enctype="multipart/form-data">
<input type="hidden" name="ids" value="<?php echo $_GET['ids'] ?>" />
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nomor Induk Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nomor Induk Siswa" name="nis" id="nis" value="<?php echo "$rs[nis]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Siswa" id="nama_siswa" name="nama" value="<?php echo "$rs[nama]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Tempat Lahir" id="tempat" name="tempat" value="<?php echo "$rs[tempat]"; ?>">
                                        </div>
                                      <div>
                                      <label>Tanggal Lahir</label><span style="color: red; font-size: 14pt;"> *</span>
                                        <div class="form-group">
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" class="form-control" placeholder="Masukkan Tanggal Lahir" id="tanggal" name="tanggal" value="<?php echo "$rs[tanggal]"; ?>">
                                             <span class="input-group-addon">
                                             <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                            </div>
                                        </div>
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
                                            <label>Alamat</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <textarea class="form-control" placeholder="Masukkan Alamat" id="alamat" name="alamat" rows="3"><?php echo "$rs[alamat]"; ?></textarea>
                                        </div>
                                           <div class="form-group">
                                        <label>No. Telepon</label><span style="color: red; font-size: 14pt;"> *</span>                                   
                                            <input type="text" class="form-control" placeholder="Masukkan No Telepon" id="tlp" name="tlp" value="<?php echo "$rs[tlp]"; ?>">
                                        </div>
                            <div class="form-group">
                                            <label>Kelas</label><span style="color: red; font-size: 14pt;"> *</span>
                                           <select class="form-control" name="kelas" id="kelas">
                                                <option value="Pilih Kelas">Pilih Kelas</option>
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
                                      
                                     
</div>
  <div class="col-lg-6">
    
                                        <div class="form-group">
                                            <label>Nama Ayah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Ayah" name="bapak" id="bapak" value="<?php echo "$rs[bapak]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Ayah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Pekerjaan Ayah" name="k_bapak" id="k_bapak" value="<?php echo "$rs[k_bapak]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ibu</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Ibu" name="ibu" id="ibu" value="<?php echo "$rs[ibu]"; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Pekerjaan Ibu</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Pekerjaan Ibu" name="k_ibu" id="k_ibu" value="<?php echo "$rs[k_ibu]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Foto Wali Kelas</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Nama Foto Wali Kelas"  name="nama_file" id="nama_logo" value="<?php echo "$rs[nama_file]"; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Foto Wali Kelas</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input  type="file" name="file" id="logo">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Password" name="pass" id="pw1"  type="password">
                                        </div>
                                          <div class="form-group">
                                            <label>Konfirmasi Password</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Password Kembali" name="pass" type="password" id="pw2" data-toggle="password">
                                        </div>
                                   <button type="submit" class="btn btn-success" id="submit">Submit</button>
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