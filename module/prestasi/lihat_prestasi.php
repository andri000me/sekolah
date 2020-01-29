<span style="font-weight: bold;">A. PRESTASI DAN KEGIATAN</span>
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th class="text-center">NO.</th>
                                    <th class="text-center">NAMA PRESTASI</th>
                                    <th class="text-center">KETERANGAN</th> </th>  
                                </tr>
                            </thead>     
                            <tbody>                                       
<?php
$no=1;

  $sql=mysqli_query($koneksi,"SELECT * FROM rapor_pribadi WHERE nis='$_GET[nis]'"); 


    while($rs=mysqli_fetch_array($sql))
    {
        // $sqlw=mysqli_query($koneksi,"SELECT * FROM kelas WHERE nama_kelas='$rs[nama_kelas]'");
        // $rsw=mysqli_fetch_array($sqlw);
        // $sqlb=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rsw[id]'");
        // $rsb=mysqli_fetch_array($sqlb);
if($_SESSION['level']=="walikelas"){
echo"
    <tr>
        <td>1</td>
        <td>$rs[prestasi1_jenis]</td>
        <td>$rs[prestasi1_keterangan]</td>
    </tr>
    <tr>
        <td>2</td>
        <td>$rs[prestasi2_jenis]</td>
        <td>$rs[prestasi2_keterangan]</td>
    </tr>
    <tr>
        <td>3</td>
        <td>$rs[prestasi3_jenis]</td>
        <td>$rs[prestasi3_keterangan]</td>
    </tr>
";
$no++;
}
}
?>

                                    </tbody>
                                </table>