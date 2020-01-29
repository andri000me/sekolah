<?php                            
      $sql=mysql_query("SELECT * FROM user WHERE idu='$_GET[idu]'");
    while($rs=mysql_fetch_array($sql))
    {
    $sqla=mysql_query("SELECT * FROM sekolah WHERE id_sekolah='$rs[id_sekolah]'");
    $rsa=mysql_fetch_array($sqla);

?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Detail Admin Sekolah : <?php echo "$rsa[nama_sekolah]"; ?></strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Admin Sekolah
                        </div>
                        <div class="panel-body">
                            <div class="row">

                               
                                <div class="col-lg-6">
                                        <fieldset disabled>

                                        <div class="form-group">
                                            <label>Nama Admin</label>
                                            <input class="form-control"  placeholder="Nama Admin" name="nama" value="<?php echo "$rs[nama]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" placeholder="Username" name="username" value="<?php echo "$rs[username]"; ?>">
                                        </div>
                                         <div class="form-group">  
                                            <label>Nama Sekolah</label>                                                               
                                           <input type="text" class="form-control" placeholder="Nama Sekolah" name="nama_sekolah" value="<?php echo "$rsa[nama_sekolah]"; ?>">
                                        </div>
                                        </div>
</fieldset>                                        
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