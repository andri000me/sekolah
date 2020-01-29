

          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Wali Kelas</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Wali Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                                $sql=mysqli_query($koneksi,"SELECT * FROM walikelas WHERE nama='$_SESSION[idu]'");
                                $rs=mysqli_fetch_array($sql);
?>
                                    <form method="post" role="form" action="././module/simpan.php?act=walikelas_det" id="myformwalikelasdet" 
                                    onSubmit="return validasi_walikelasdet()">
<input type="hidden" name="idw" value="<?php echo $rs['idw'] ?>" >
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nomor Induk Pegawai</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Nomor Induk Pegawai" name="nip" id="nip" value="<?php echo "$rs[nip]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Wali Kelas</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Nama Walikelas" name="nama" id="nama_walikelas" value="<?php echo "$rs[nama]"; ?>">
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
                                            <?php } ?>
                                        </div>
                                    

                        <div class="form-group">
                                            <label>Alamat</label><span style="color: red; font-size: 14pt;"> *</span> 
                        <textarea class="form-control" placeholder="Masukkan Alamat" id="alamat" name="alamat" rows="3"><?php echo "$rs[alamat]"; ?></textarea>
                                        </div>
                            </div>
                            <div class="col-lg-6">           


                              
                                 <div class="form-group">
                                            <label>Kelas Yang Diwakili</label><br>
 <?php 
  if($_SESSION['level']=="walikelas"){
    $sqlc=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$_SESSION[idk]'");
  }else{
    $sqlc=mysqli_query($koneksi,"SELECT * FROM kelas");    
  }
    while($rsc=mysqli_fetch_array($sqlc)){
    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsc[id]'");
    $rsa=mysqli_fetch_array($sqla);

    echo "<label>$rsa[nama_sekolah] | $rsc[nama_kelas] </label>";  
}
?>   
    </div>
                                            <div class="form-group">
                                           <label>No. Telepon</label><span style="color: red; font-size: 14pt;"> *</span> 
                                        <input type="text" class="form-control" placeholder="Masukkan  No Telepon" name="tlp" id="tlp" value="<?php echo "$rs[tlp]"; ?>">
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
