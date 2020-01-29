
            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Presensi Tanggal : </strong><?php 
                            if($_GET['tanggal']<10){ $rw="0$_GET[tanggal]";}else{ $rw="$_GET[tanggal]"; }
                            if($_GET['bulan']<10){ $rc="0$_GET[bulan]";}else{ $rc="$_GET[bulan]";}
                            $dt=$rw."-".$rc."-".$_GET['tahun']; 
                            echo $dt;
                            ?> 
                            </h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Presensi Semua Kelas<?php 
  										
$klas=$_GET['kls'];
 ?>

							 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">


                       
                     
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NIS</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">No Telepon</th>
                                            <th class="text-center">Nama Sekolah</th>
                                            <th class="text-center">Kelas</th>
                                            <th class="text-center">Keterangan</th>
                           

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
$tg=date("d-m-Y");

if($klas=="semua"){
	$sql=mysql_query("select * from siswa");
}else{
	$sql=mysql_query("select * from siswa where idk='$_GET[kls]'");	
}
	while($rs=mysql_fetch_array($sql)){
	$sqla=mysql_query("select * from absen where ids='$rs[ids]' and tgl='$dt' ");
	$rsa=mysql_fetch_array($sqla);
	$conk=mysql_num_rows($sqla);
	
	$sqlw=mysql_query("select * from kelas where idk='$rs[idk]'");
	$rsw=mysql_fetch_array($sqlw);
	$sqlb=mysql_query("select * from sekolah where id_sekolah='$rsw[id]'");
	$rsb=mysql_fetch_array($sqlb);

?>                                        <tr class="odd gradeX">
                                            <td><?php echo"$rs[nis]";  ?></td>
                                            <td><?php echo"$rs[nama]";  ?></td>
<?php
if($rs['jk']=="L"){
?>
                                            <td class="text-center">Laki - Laki</td>
<?php
}else{
?>
                                            <td class="text-center">Perempuan</td>
<?php
}
?>

                                            <td><?php echo"$rs[alamat]";  ?></td>
                                            <td><?php echo"$rs[tlp]";  ?></td>
                                            <td><?php echo"$rsb[nama_sekolah]";  ?></td>
                                            <td class="text-center"><?php echo"$rsw[nama_kelas]";  ?></td>
                                            
                                                                                    

<?php  
if($conk==0){
?>                                            
                                            <td class="text-center"></td>


<?php }else{ ?>
<td class="text-center"><?php echo"$rsa[ket]";  ?></td>
<?php } ?>

<?php  
if($rsa['ket']=="Tidak Hadir"){
?>                                            

                                 


<?php }else{ ?>

<?php } ?>


                                        </tr>
<?php
}
?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Keterangan Presensi</h4>
                                <p>Hadir = Mengikuti Pelajaran</p>
                                <p>Tidak Hadir = Tidak Mengikuti Pelajaran</p>
                            </div>
                            <div>
                            <a href="export.php">
                                        <button type="button" class="btn btn-primary">Cetak 
                                        </button>
                                    </a>
                                </div>
 </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
