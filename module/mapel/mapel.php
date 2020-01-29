
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Mata Pelajaran</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Mata Pelajaran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Kode Mata Pelajaran</th>
                                            <th class="text-center" width="40%">Nama Mata Pelajaran</th>
                                            <th class="text-center">Kriteria Kelulusan Minimal</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;

    $sql=mysqli_query($koneksi,"SELECT * FROM mapel WHERE idk='$_GET[kls]'"); 
    while($rs=mysqli_fetch_array($sql))
    {
        $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
        $rsw=mysqli_fetch_array($sqlw);
    $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
        $rsb=mysqli_fetch_array($sqlb);
if($_SESSION['level']=="admin_guru"){

if($rsb['id_sekolah']==$_SESSION['id_sekolah']){
?>                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td class="text-center"><?php echo"$rs[kode_mapel]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[nama_mapel]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[kkm]";  ?></td>


                                        <td class="text-center">
                                        <a href="./././media.php?module=detail_mapel&act=details&idm=<?php echo $rs['idm'] ?>">
                                        <button type="button" class="btn btn-info">Details</button> </a>
                                        <a href="./././media.php?module=input_mapel&act=edit&idm=<?php echo $rs['idm'] ?>">
                                        <button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin mengedit data ini ?');">Edit
                                        </button> <a href="././module/simpan.php?act=hapus_mapel&idm=<?php echo $rs['idm'] ?>">
                                        <button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini ?');">Hapus</button></a></td>

                                        </tr>
<?php
$no++;
}
}else{
?>  
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td class="text-center"><?php echo"$rs[kode_mapel]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[nama_mapel]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[kkm]";  ?></td>

                                        
                                        <td class="text-center">
                                        
                                        <a href="./././media.php?module=detail_mapel&act=details&idm=<?php echo $rs['idm'] ?>">
                                        <button type="button" class="btn btn-info">Details</button> </a>
                                        
                                        <a href="./././media.php?module=input_mapel&act=edit&idm=<?php echo $rs['idm'] ?>">
                                        <button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin mengedit data ini ?');">Edit</button> </a>
                                        
                                        
                                        <a href="././module/simpan.php?act=hapus_mapel&idm=<?php echo $rs['idm'] ?>">
                                        <button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini ?');">Hapus</button></a>
                                        
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
