            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Semua Admin Sekolah</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Semua Admin Sekolah
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nama Admin</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Nama Sekolah</th>
                                            <th class="text-center">Kabupaten atau Kota</th>
                                            <th class="text-center">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;

    $sql=mysql_query("SELECT * FROM user");
    while($rs=mysql_fetch_array($sql))
    {
    $sqla=mysql_query("SELECT * FROM sekolah WHERE id_sekolah='$rs[id_sekolah]'");
    $rsa=mysql_fetch_array($sqla);
if($_SESSION['level']=="admin"){

?>                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td><?php echo"$rs[nama]";  ?></td>
                                            <td><?php echo"$rs[username]";  ?></td>
                                            <td class="text-center"><?php echo"$rsa[nama_sekolah]";  ?></td>
                                            <td class="text-center"><?php echo"$rsa[kabupaten]";  ?></td>

                                        <td class="text-center">
                                            <a href="./././media.php?module=detail_admin&act=details&idu=<?php echo $rs['idu'] ?>">
                                        <button type="button" class="btn btn-info">Details</button> </a>
                                        <a href="./././media.php?module=edit_admin&act=edit&idu=<?php echo $rs['idu'] ?>">
                                        <button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin mengedit data ini ?');">Edit</button> </a>
</td>
                                        </tr>
<?php
$no++;
}

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
