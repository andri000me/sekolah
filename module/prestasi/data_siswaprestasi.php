            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Rapor Siswa </strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nomor Induk Siswa</th>
                                            <th class="text-center" width="20%">Nama Siswa</th>
                                            <th class="text-center" width="20%">Kelas</th>
                                            <th class="text-center">Tahun Ajaran</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
    $sql=mysqli_query($koneksi,"SELECT * FROM siswa WHERE idk='$_GET[kls]' AND tahun_ajaran='$_GET[tahun_ajaran]'"); 
while($rs=mysqli_fetch_array($sql)){
        $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
        $rsw=mysqli_fetch_array($sqlw);
        $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
        $rsb=mysqli_fetch_array($sqlb);
        $sqlc=mysqli_query($koneksi,"SELECT * FROM prestasi WHERE ids='$rs[ids]'");
        $rsc=mysqli_fetch_array($sqlc);

?>                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td class="text-center"><?php echo"$rs[nis]  ";  ?></td>
                                            <td class="text-center"><?php echo"$rs[nama]  ";  ?></td>
                                            <td class="text-center"><?php echo"$rsw[nama_kelas]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[tahun_ajaran]";  ?></td>

                                        <td class="text-center">
                                        <a href="./././media.php?module=input_prestasi&act=input&nama_sekolah=<?php echo $rsb['nama_sekolah'] ?>&nama_kelas=<?php echo $rsw['nama_kelas'] ?>&ids=<?php echo $rs['ids'] ?>&tahun_ajaran=<?php echo $rs['tahun_ajaran'] ?>">
                                        <button type="button" class="btn btn-primary">Input Prestasi
                                        </button> </a>
                                   

                                    </td>
                                        </tr>

<?php 
$no++;
} ?>
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
