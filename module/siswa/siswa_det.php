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
                                $sqlj=mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$_SESSION[idu]'");
                                $rsj=mysqli_fetch_array($sqlj);
?>
<form method="post" role="form" action="././module/simpan.php?act=siswa_det" id="myformsiswadet" onSubmit="return validasi_siswadet()">
<input type="hidden" name="id" value="<?php echo $rsj['ids'] ?>" >

                         <div class="col-lg-6">
                                      <div class="form-group">
                                            <label>Nomor Induk Siswa</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Nomor Induk Siswa" name="nis" id="nis" value="<?php echo "$rsj[nis]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Siswa</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Siswa" id="nama_siswa" name="nama" value="<?php echo "$rsj[nama]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Tempat Lahir" id="tempat" name="tempat" value="<?php echo "$rsj[tempat]"; ?>">
                                        </div>
                                      <div>
                                      <label>Tanggal Lahir</label><span style="color: red; font-size: 14pt;"> *</span>
                                        <div class="form-group">
                                        <div class="input-group date" id="datepicker">
                                <input type="text" class="form-control" placeholder="Masukkan Tanggal Lahir" id="tanggal" name="tanggal" value="<?php echo "$rsj[tanggal]"; ?>">
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
                                            <textarea class="form-control" placeholder="Masukkan Alamat" name="alamat" id="alamat"  rows="3"><?php echo "$rsj[alamat]"; ?></textarea>
                                        </div>
                                           <div class="form-group">
                                        <label>No. Telepon</label><span style="color: red; font-size: 14pt;"> *</span>                                   
                                            <input type="text" class="form-control" placeholder="Masukkan No Telepon" name="tlp" id="tlp"  value="<?php echo "$rsj[tlp]"; ?>">
                                        </div>
                                             
                                      
                                     
</div>
  <div class="col-lg-6">
     <div class="form-group">
                                            <label>Kelas</label><br>
                                        
<?php 
  if($_SESSION['level']=="user"){
    $sql=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$_SESSION[idk]'");
  }else{
    $sql=mysqli_query($koneksi,"SELECT * FROM kelas");    
  }
    while($rs=mysqli_fetch_array($sql)){
    $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rs[id]'");
    $rsb=mysqli_fetch_array($sqlb);

    echo "<label>$rsb[nama_sekolah] | $rs[nama_kelas] </label>";  
}
?>   
                                  
           
                                   
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
                                        <div class="form-group">
                                            <label>Nama Ayah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Ayah" name="bapak" id="bapak" value="<?php echo "$rsj[bapak]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Ayah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Pekerjaan Ayah" name="k_bapak" id="k_bapak" value="<?php echo "$rsj[k_bapak]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ibu</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Ibu" name="ibu" id="ibu" value="<?php echo "$rsj[ibu]"; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Pekerjaan Ibu</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Pekerjaan Ibu" name="k_ibu" id="k_ibu" value="<?php echo "$rsj[k_ibu]"; ?>">
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

                         