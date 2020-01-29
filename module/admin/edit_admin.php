   
           <?php
if($_GET['act']=="edit"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Edit Data Admin Sekolah</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Admin Sekolah
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php                            
                                $sql=mysql_query("SELECT * FROM user WHERE idu='$_GET[idu]'");
                                $rs=mysql_fetch_array($sql);
?>
<form method="post" role="form" action="././module/simpan.php?act=edit_admin" id="myformadmin" onSubmit="return validasi_admin()">
<input type="hidden" name="idu" value="<?php echo $rs['idu'] ?>" >

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Admin</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Admin" name="nama" id="nama_admin" value="<?php echo "$rs[nama]"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Username" name="username" id="username" value="<?php echo "$rs[username]"; ?>">
                                        </div>
                                       <div class="form-group">
                                            <label>Password</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Password" name="pass" type="password" 
                                            id="pw1">
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
            <?php }?>