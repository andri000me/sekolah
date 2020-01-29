            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Sekolah</strong></h3>
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
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Kode Sekolah</th>
                                            <th class="text-center">Nama Sekolah</th>
                                            <th class="text-center">Alamat Sekolah</th>
                                            <th class="text-center">Status Sekolah</th>
                                            <th class="text-center">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
	$sql=mysql_query("SELECT * FROM sekolah WHERE status='$_GET[status]'");
	while($rs=mysql_fetch_array($sql)){

?>                                        <tr class="odd gradeX">
                                            <td><?php echo"$rs[kode_sekolah]";  ?></td>
                                            <td ><?php echo"$rs[nama_sekolah]";  ?></td>
                                            <td ><?php echo"$rs[alamat]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[status]";  ?></td>
                                 <td class="text-center">
                                            <a href="./././media.php?module=detail_sekolah&act=details&id_sekolah=<?php echo $rs['id_sekolah'] ?>">
                                        <button type="button" class="btn btn-info">Details</button> </a>
</td>

                                        </tr>
<?php
}
?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
