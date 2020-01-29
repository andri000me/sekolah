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
                                            <th class="text-center">No.</th>
                                            <th class="text-center" width="20%">Kode Sekolah</th>
                                            <th class="text-center" width="20%">Nama Sekolah</th>
                                            <th class="text-center" >Status Sekolah</th>
                                            <th class="text-center" width="40%">Alamat Sekolah</th>
                                            <th class="text-center">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
	$sql=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$_SESSION[id_sekolah]' ");
	while($rs=mysqli_fetch_array($sql)){

?>                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td class="text-center"><?php echo"$rs[kode_sekolah]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[nama_sekolah]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[status]";  ?></td>
                                            <td ><?php echo"$rs[alamat]";  ?></td>
                                           <td class="text-center">
                                        <a href="./././media.php?module=input_sekolah&act=edit_sekolah&id=<?php echo $rs['id_sekolah'] ?>">
                                        <button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin mengedit data ini ?');">Edit</button> 
                                        </tr>
<?php
$no++;
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
