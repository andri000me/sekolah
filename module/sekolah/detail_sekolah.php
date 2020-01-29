<?php                            
    $sql=mysql_query("SELECT * FROM sekolah WHERE id_sekolah='$_GET[id_sekolah]'");
    $rs=mysql_fetch_array($sql);
?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Detail Sekolah : <?php echo "$rs[nama_sekolah]"; ?></strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Sekolah
                        </div>
                        <div class="panel-body">
                            <div class="row">

                               
                                <div class="col-lg-6">
                                        <fieldset disabled>

                                        <div class="form-group">
                                            <label>Kode Sekolah</label>
                                            <input class="form-control"  placeholder="Nomor Induk Pegawai" name="nip" value="<?php echo "$rs[kode_sekolah]"; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input class="form-control" placeholder="Nama Guru Mata Pelajaran" name="nama" value="<?php echo "$rs[nama_sekolah]"; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"><?php echo "$rs[alamat]"; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten atau Kota</label>
                                            <input class="form-control"  placeholder="Kabupaten atau Kota" name="kabupaten" value="<?php echo "$rs[kabupaten]"; ?>" >
                                        </div>
                                     
                                        
                                        
</div>

                                <!-- /.col-lg-6 (nested) -->
                                    

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
