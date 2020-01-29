            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Wali Kelas</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Wali Kelas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">Nomor Induk Pegawai</th>
                                            <th class="text-center" >Nama Wali Kelas</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center" >Alamat</th>
                                            <th class="text-center">No Telepon</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php
$no=1;
    $sql=mysqli_query($koneksi,"SELECT * FROM walikelas WHERE idk='$_GET[kls]'"); 
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
                                            <td class="text-center"><?php echo"$rs[nip]";  ?></td>
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
                                            <td class="text-center"><?php echo"$rs[alamat]";  ?></td>
                                            <td class="text-center"><?php echo"$rs[tlp]";  ?></td>
                                            
                                        <td class="text-center">
                                             <a href="./././media.php?module=detail_walikelas&act=details&idw=<?php echo $rs['idw'] ?>">
                                        <button type="button" class="btn btn-info">Details</button> </a>
                                        <a href="./././media.php?module=input_walikelas&act=edit&idw=<?php echo $rs['idw'] ?>">
                                        <button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin mengedit data ini ?');">Edit
                                        </button> <a href="././module/simpan.php?act=hapus_walikelas&idw=<?php echo $rs['idw'] ?>">
                                        <button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini ?');">Hapus</button></a></td>

                                        </tr>
<?php
$no++;
}
}else{
?>  
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $no;?></td>
                                            <td class="text-center"><?php echo"$rs[nip]";  ?></td>
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
                                         <td class="text-center"><?php echo"$rs[alamat]";  ?></td>
                                        <td class="text-center"><?php echo"$rs[tlp]";  ?></td>
                                        
                                        <td class="text-center">
                                        
                                        <a href="./././media.php?module=detail_walikelas&act=details&idw=<?php echo $rs['idw'] ?>">
                                        <button type="button" class="btn btn-info">Details</button> </a>
                                        
                                        <a href="./././media.php?module=input_walikelas&act=edit&idw=<?php echo $rs['idw'] ?>">
                                        <button type="button" class="btn btn-warning" onclick="return confirm('Apakah anda yakin mengedit data ini ?');">Edit</button> </a>
                                        
                                        
                                        <a href="././module/simpan.php?act=hapus_walikelas&idw=<?php echo $rs['idw'] ?>">
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
