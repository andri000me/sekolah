            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Kelas</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Kelas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Kode Sekolah</th>
                                            <th class="text-center">Nama Sekolah</th>
                                            <th class="text-center">Kelas</th>
                                            <th class="text-center">Tahun Ajaran</th>
                                            <th class="text-center">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;

    $sql=mysqli_query($koneksi,"SELECT * FROM kelas WHERE tahun_ajaran='$_GET[tahun_ajaran]'");
    while($rs=mysqli_fetch_array($sql))
    {
    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rs[id]'");
    $rsa=mysqli_fetch_array($sqla);
if($_SESSION['level']=="admin_guru"){
if($rsa['id_sekolah']==$_SESSION['id_sekolah']){

?>                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td><?php echo"$rsa[kode_sekolah]";  ?></td>
                                            <td><?php echo"$rsa[nama_sekolah]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[nama_kelas]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[tahun_ajaran]";?></td>

                                        <td class="text-center">
                                            <a href="./././media.php?module=input_kelas&act=edit_kelas&idk=<?php echo $rs['idk'] ?>"><button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin mengedit data ini ?');">Edit</button> </a>
                                        <a href="././module/simpan.php?act=hapus_kelas&idk=<?php echo $rs['idk'] ?>">
                                        <button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini ?');">Hapus</button></a></td>

                                        </tr>
<?php
$no++;
}
}else{
?>  
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td><?php echo"$rsa[kode_sekolah]";  ?></td>
                                            <td><?php echo"$rsa[nama_sekolah]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[nama_kelas]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[tahun_ajaran]";?></td>
                                        <td class="text-center"><a href="./././media.php?module=input_kelas&act=edit_kelas&idk=<?php echo $rs['idk'] ?>"><button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin mengedit data ini ?');">Edit</button> 
                                        <a href="././module/simpan.php?act=hapus_kelas&idk=<?php echo $rs['idk'] ?>">
                                        <button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini ?');">Hapus</button></a></td>

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
