<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Input Data Guru Mata Pelajaran</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Guru Mata Pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/simpan.php?act=input_gurumapel" id="myformguru" 
                                    onSubmit="return validasi_guru()" enctype="multipart/form-data">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nomor Induk Pegawai</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Nomor Induk Pegawai" name="nip" id="nip">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Guru Mata Pelajaran</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Nama Guru Mata Pelajaran" name="nama" id="nama_guru">
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
                                            <label>Mata Pelajaran Yang Diampu</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <select class="form-control" name="nama_mapel" id="nama_mapel">
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
                                     
</div>

                                <div class="col-lg-6">
                                     
                                        <div class="form-group"> 
                                           <label>No. Telepon</label> <span style="color: red; font-size: 14pt;"> *</span>                                                                   
                                        <input type="text" class="form-control" placeholder="Masukkan No Telepon" name="tlp" id="tlp"> 
                                        </div>
                                           <div class="form-group">
                                            <label>Nama Foto Guru Mata Pelajaran</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Foto Guru Mata Pelajaran"  name="nama_file" id="nama_logo">
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Guru Mata Pelajaran</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input  type="file" name="file" id="logo" >
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
					<h3 class="page-header"><strong>Edit Data Guru Mata Pelajaran</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Guru Mata Pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysqli_query($koneksi,"SELECT * FROM gurumapel WHERE idg='$_GET[idg]'");
								$rs=mysqli_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/simpan.php?act=edit_gurumapel" id="myformguru" 
                                    onSubmit="return validasi_guru()" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $_GET['idg'] ?>" />
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nomor Induk Pegawai</label><span style="color: red; font-size: 14pt;"> *</span> 
                                 <input class="form-control" placeholder="Masukkan Nomor Induk Pegawai" id="nip" name="nip" value="<?php echo "$rs[nip]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Guru Mata Pelajaran</label><span style="color: red; font-size: 14pt;"> *</span> 
                                        <input class="form-control" placeholder="Masukkan Nama Guru Mata Pelajaran" id="nama_guru" name="nama" value="<?php echo "$rs[nama]"; ?>">
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
                                            <label>Kelas</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <select class="form-control" name="kelas" id="kelas">
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
                                            <label>Mata Pelajaran Yang Diampu</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <select class="form-control" name="nama_mapel" id="nama_mapel">
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
        
                                          
</div>
                              <div class="col-lg-6">
                                      
                                        <div class="form-group">
                                            <label>No. Telepon</label><span style="color: red; font-size: 14pt;"> *</span>
                                        <input type="text" class="form-control" placeholder="Masukkan No Telepon" id="tlp" name="tlp" value="<?php echo "$rs[tlp]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Foto Guru Mata Pelajaran</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Nama Foto Guru Mata Pelajaran"  name="nama_file" id="nama_logo" value="<?php echo "$rs[nama_file]"; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Foto Guru Mata Pelajaran</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input  type="file" name="file" id="logo">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Password" name="pass" value="" type="password" id="pw1">
                                        </div>
                                          <div class="form-group">
                                            <label>Konfirmasi Password</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Password Kembali" name="pass" type="password" id="pw2" data-toggle="password">
                                        </div>
                                    <button type="submit" class="btn btn-success" id="submit">Submit</button>
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