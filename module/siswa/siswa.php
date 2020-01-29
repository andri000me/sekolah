            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Siswa</strong></h3>
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
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">Nomor Induk Siswa</th>
                                            <th class="text-center">Nama Siswa</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">No Telepon</th>
                                            <th class="text-center">Kelas</th>
                                            <th class="text-center">Tahun Ajaran</th>
                                            <th class="text-center">Barcode</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;

	$sql=mysqli_query($koneksi,"SELECT * FROM siswa WHERE idk='$_GET[kls]' AND tahun_ajaran='$_GET[tahun_ajaran]'");
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
                                            <td class="text-center"><img src="files/<?php echo "$rs[file]"; ?>" width="100px"> </td>
                                            <td class="text-center"><?php echo"$rs[nis]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[nama]";  ?></td>
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
                                            
                                            <td class="text-center"><?php echo"$rs[tlp]";  ?></td>
                                            <td class="text-center"><?php echo"$rsw[nama_kelas]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[tahun_ajaran]";  ?></td>
                                            <td class="text-center"><img src="qrcode/<?php echo "$rs[barcode]"; ?>" width="100px"> </td>
                                        <td class="text-center">
                                            <a href="./././media.php?module=detail_siswa&act=details&ids=<?php echo $rs['ids'] ?>">
                                        <button type="button" class="btn btn-info">Details</button> </a>
										<a href="./././media.php?module=input_siswa&act=edit&ids=<?php echo $rs['ids'] ?>">
										<button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin mengedit data ini ?');">Edit
										</button> <a href="././module/simpan.php?act=hapus&ids=<?php echo $rs['ids'] ?>">
										<button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini ?');">Hapus</button></a></td>

                                        </tr>
<?php
$no++;
}
}else{
?>	
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td class="text-center"><img src="files/<?php echo "$rs[file]"; ?>" width="100px"> </td>
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

                                        <td><?php echo"$rs[tlp]";  ?></td>
                                        <td><?php echo"$rsw[nama_kelas]";  ?></td>
                                        <td class="text-center"><?php echo"$rs[tahun_ajaran]";  ?></td>
                                        <td class="text-center"><img src="qrcode/<?php echo "$rs[barcode]"; ?>" width="100px"> </td>
										<td class="text-center">
										
										<a href="./././media.php?module=detail_siswa&act=details&ids=<?php echo $rs['ids'] ?>">
										<button type="button" class="btn btn-info">Details</button> </a>
										
										<a href="./././media.php?module=input_siswa&act=edit&ids=<?php echo $rs['ids'] ?>">
										<button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin mengedit data ini ?');">Edit</button> </a>
										
										
										<a href="././module/simpan.php?act=hapus&ids=<?php echo $rs['ids'] ?>">
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
