            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Input Data Presensi Tanggal : <?php 
							if($_GET['tanggal']<10){ $rw="0$_GET[tanggal]";}else{ $rw="$_GET[tanggal]"; }
							if($_GET['bulan']<10){ $rc="0$_GET[bulan]";}else{ $rc="$_GET[bulan]";}
							$dt=$rw."-".$rc."-".$_GET['tahun']; 
							echo $dt;
							?> </strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa <?php 
							$sqlj=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$_SESSION[idk]'");
							$rsj=mysqli_fetch_array($sqlj);
							echo "Kelas $rsj[nama_kelas]";
							$klas=$_GET['kls'];
?> |
<?php 
                            $sqlc=mysqli_query($koneksi,"SELECT * FROM mapel WHERE nama_mapel='$_GET[mapel]'");
                            $rsc=mysqli_fetch_array($sqlc);
                            echo "Mata Pelajaran : $rsc[nama_mapel]";
                            $mapel=$_GET['mapel'];



 ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                           <form method="post" role="form" action="././module/simpan.php?act=input_presensi&klas=<?php echo $klas ?>&mapel=<?php echo $mapel ?>">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nomor Induk Siswa</th>
                                            <th class="text-center">Nama Siswa</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">No Telepon</th>
                                            <th class="text-center">Kelas</th>
                                            <th class="text-center">Keterangan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
$tg=date("d-m-Y");
	$sql=mysqli_query($koneksi,"SELECT * FROM siswa WHERE idk='$_GET[kls]'");
	while($rs=mysqli_fetch_array($sql)){
	$sqla=mysqli_query($koneksi,"SELECT * FROM absen WHERE ids='$rs[ids]' AND tgl='$dt'AND nama_mapel='$_GET[mapel]' ");
	$rsa=mysqli_fetch_array($sqla);
	$conk=mysqli_num_rows($sqla);
	$sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$rs[idk]'");
	$rsw=mysqli_fetch_array($sqlw);
	$sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
	$rsb=mysqli_fetch_array($sqlb);

?>                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td class="text-center"><?php echo"$rs[nis]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[nama]";  ?></td>
<?php
if($rs['jk']=="L"){
?>
                                            <td class="text-center">Laki - Laki</td>
<?php
}else{
?>
                                            <td class="text-center" >Perempuan</td>
<?php
}
?>

                                     
                                            <td class="text-center"><?php echo"$rs[tlp]";  ?></td>
                                            <td class="text-center"><?php echo"$rsw[nama_kelas]";  ?></td>
                                            <td class="text-center">
                                                                                    <div class="form-group">

<?php  
if($conk==0){
?>                                  
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="Hadir" checked>Hadir
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="Tidak Hadir">Tidak Hadir
                                            </label>


<?php } ?>
<?php
if($rsa['ket']=="Hadir"){
?>                                        
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="Hadir" checked>Hadir
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="Tidak Hadir" >Tidak Hadir
                                            </label>


<?php } ?>
<?php  
if($rsa['ket']=="Tidak Hadir"){
?>                                            
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="Hadir" checked >Hadir
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="<?php echo $rs['ids'] ?>" value="Tidak Hadir">Tidak Hadir
                                            </label>
                                          


<?php } ?>





                                        </div>

                                            </td>

                                        </tr>
<?php
$no++;
}
?>
                                    </tbody>
                                </table>
                                        <button type="submit" class="btn btn-success">Simpan Data</button>

</form>
                            </div>
                            <!-- /.table-responsive -->
<br>
                            <div class="well">
                                <h4>Keterangan Presensi</h4>
                                <p>Hadir = Mengikuti Pelajaran</p>
                                <p>Tidak Hadir = Tidak Mengikuti Pelajaran</p>
                             

                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->