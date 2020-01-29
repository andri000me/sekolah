<?php

$idk = $_SESSION['idk'];

?>            
            <!-- http://localhost/sekolah/module/rapor/ekspor.php?nama_sekolah=SDN%202%20Glagah%20Temon%20Kulon%20Progo&nama_kelas=III&nis=1099&tahun_ajaran=Gasal%202018/2019&wali=kamsih -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Laporan Rapor Siswa </strong></h3>
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
    $sql=mysqli_query($koneksi,"SELECT * FROM siswa INNER JOIN kelas WHERE siswa.idk=kelas.idk AND siswa.idk='$idk'"); 
while($rs=mysqli_fetch_array($sql)){
?>                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td class="text-center"><?php echo"$rs[nis]  ";  ?></td>
                                            <td class="text-center"><?php echo"$rs[nama]  ";  ?></td>
                                            <td class="text-center"><?php echo"$rs[nama_kelas]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[tahun_ajaran]";  ?></td>
                                            
                                       <td class="text-center">
                                        <a href="<?php echo "module/rapor/ekspor.php?nama_sekolah=$sekolah&nis=$rs[nis]&wali=$usre";?>"  class="btn btn-primary" target="_blank">Cetak Rapor</a>
                                        <?php 
                                            if($rs['wali_status']==1){
                                                echo"<a href='module/rapor/update_wali.php?nis=$rs[nis]&status=0'  class='btn btn-success'>Akses Wali</a>";
                                            }else{
                                                echo"<a href='module/rapor/update_wali.php?nis=$rs[nis]&status=1'  class='btn btn-danger'>Akses Wali</a>";
                                            }
                                        ;?>
</a></td>

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
