<?php
if($_GET['act']=="edit_sekolah"){
	?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Edit Data Sekolah</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Sekolah
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                            	$sql=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$_GET[id]'");
								$rs=mysqli_fetch_array($sql);

?>
<form method="post" role="form" action="././module/simpan.php?act=edit_sekolah" id="myformsekolah" onSubmit="return validasi_sekolah()" enctype="multipart/form-data">
<input type="hidden" name="id_sekolah" value="<?php echo $_GET['id'] ?>" />

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kode Sekolah</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Kode Sekolah" id="kode" name="kode_sekolah" value="<?php echo "$rs[kode_sekolah]"; ?>">
                                        </div>
                                        <div class="form-group">

                                            <label>Nama Sekolah</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Nama Sekolah" id="nama" name="nama_sekolah" 
                                            value="<?php echo "$rs[nama_sekolah]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Sekolah</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <textarea class="form-control" placeholder="Masukkan Alamat Sekolah" id="alamat" name="alamat" 
                                            rows="3"><?php echo "$rs[alamat]"; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Sekolah</label>
                                            <select class="form-control" name="status">
                                                <option value="Pilih Status">Pilih Status</option>
                                                <option value="Negeri">Negeri</option>
                                                <option value="Swasta">Swasta</option>
                                              </select>
                                            </div>
                                        
                                        </div>
                                         <div class="col-lg-6">
                                         
                                                       
                            <div class="form-group">
                                            <label>Provinsi</label>
                                            <select  id="provinsi" class="form-control" name="provinsi">
                                         <option value="">Pilih Provinsi</option>
                                             <?php
                                              $sql=mysqli_query($koneksi,"SELECT * FROM provinsi ");
                                              while($data_prov=mysqli_fetch_array($sql)){

                                                 ?>
                                                  <option value="<?php echo $data_prov["id_prov"] ?>"><?php echo $data_prov["nm_prov"] ?></option>
                                              <?php
                                              }
                                              ?>
                                          </select>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Kabupaten atau Kota</label>
                                            <select name="kabupaten" id="kota" class="form-control">
                                              <?php
                                               $result=mysqli_query($koneksi,"SELECT * FROM kota WHERE id_prov='".$_POST["prov"]."'");
                                              while($data_prov=mysqli_fetch_array($result)){

                                            
                                               ?>
                                               <option value="<?php echo $data_prov["id_kota"] ?>"><?php echo $data_prov["nm_kota"] ?></option><br>
                                                <?php
                                                }
                                                ?>
                                          </select>
                                        </div>
                                 <div class="form-group">
                                            <label>Nama Logo Sekolah</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Nama Logo Sekolah" id="nama_logo" name="nama_file" value="<?php echo "$rs[nama_file]"; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Logo Sekolah</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input  type="file" name="file" id="logo">
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
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
             