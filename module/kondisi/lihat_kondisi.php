
                        <span style="font-weight: bold;">A. Ekstrakulikuler</span>
                        <table class="table table-striped table-bordered " border="1">
                            <thead>
                                <tr>
                                    <th class="text-center">NO.</th>
                                    <th class="text-center">JENIS KEGIATAN</th>
                                    <th class="text-center">KETERANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sqlw=mysqli_query($koneksi,"SELECT * FROM rapor_pribadi WHERE nis='$_GET[nis]'");
                                $rsw=mysqli_fetch_array($sqlw);
                              if($_SESSION['level']=="walikelas"){
?>                                        <tr class="odd gradeX">
                                            <td class="text-center">1.</td>
                                            <td class="text-center"><?php echo"$rsw[exs1_nama]";  ?></td>
                                            <td class="text-center"><?php echo"$rsw[exs1_nilai]";  ?></td>
                                      </tr>
                                       <tr class="odd gradeX">
                                            <td class="text-center">2.</td>
                                            <td class="text-center"><?php echo"$rsw[exs2_nama]";  ?></td>
                                            <td class="text-center"><?php echo"$rsw[exs2_nilai]";  ?></td>
                                      </tr>
                                      <tr class="odd gradeX">
                                            <td class="text-center">3.</td>
                                            <td class="text-center"><?php echo"$rsw[exs3_nama]";  ?></td>
                                            <td class="text-center"><?php echo"$rsw[exs3_nilai]";  ?></td>
                                      </tr>   
<?php
}?>
                            </tbody>
                        </table>

                    <?php 
$sqlw=mysqli_query($koneksi,"SELECT * FROM rapor_pribadi WHERE nis='$_GET[nis]'");
                                $rsw=mysqli_fetch_array($sqlw); ?>
                  
                        <span style="font-weight: bold;">B. Ketidakhadiran</span>
                        <table class="table table-striped table-bordered " border="1">
                            <thead>
                                <tr>
                              
                                    <th class="text-center"> NO </th>
                                    <th class="text-center">KETERANGAN </th>
                                    <th class="text-center">JUMLAH</th>
                             
                               
                              
                     
                                </tr>
                            </thead>  
        <tbody>
                                <?php
                                $sqlw=mysqli_query($koneksi,"SELECT * FROM rapor_pribadi WHERE nis='$_GET[nis]'");
                                $rsw=mysqli_fetch_array($sqlw);
                              if($_SESSION['level']=="walikelas"){
?>                                        <tr class="odd gradeX">                     
                                            <td class="text-center">1.</td>
                                            <td class="text-center">Sakit</td>
                                            <td class="text-center"><?php echo"$rsw[sakit]";  ?> </td>
</tr>
 <tr class="odd gradeX">
                                            <td class="text-center">2.</td>
                                            <td class="text-center">Izin</td>
                                            <td class="text-center"><?php echo"$rsw[izin]";  ?></td>  
</tr> 
<tr class="odd gradeX">
                                            <td class="text-center">3.</td>
                                            <td class="text-center">Tanpa Keterangan</td>
                                            <td class="text-center"><?php echo"$rsw[alpa]";  ?></td>  
 </tr>    
<?php
}?>
</tbody>
                                 

                           </table>


                           <?php 
$sqlw=mysqli_query($koneksi,"SELECT * FROM rapor_pribadi WHERE nis='$_GET[nis]'");
                                $rsw=mysqli_fetch_array($sqlw); ?>
                  
                        <span style="font-weight: bold;">C. Kondisi Kesehatan</span>
                        <table class="table table-striped table-bordered " border="1">
                            <thead>
                                <tr>
                              
                                    <th class="text-center"> NO </th>
                                    <th class="text-center">JENIS</th>
                                    <th class="text-center">KETERANGAN </th>
                             
                               
                              
                     
                                </tr>
                            </thead>  
        <tbody>
                                <?php
                                $sqlw=mysqli_query($koneksi,"SELECT * FROM rapor_pribadi WHERE nis='$_GET[nis]'");
                                $rsw=mysqli_fetch_array($sqlw);
                              if($_SESSION['level']=="walikelas"){
?>                                        <tr class="odd gradeX">                     
                                            <td class="text-center">1.</td>
                                            <td class="text-center">Pendengaran</td>
                                            <td class="text-center"><?php echo"$rsw[pendengaran]";  ?> </td>
</tr>
 <tr class="odd gradeX">
                                            <td class="text-center">2.</td>
                                            <td class="text-center">Pengelihatan</td>
                                            <td class="text-center"><?php echo"$rsw[penglihatan]";  ?></td>  
</tr> 
<tr class="odd gradeX">
                                            <td class="text-center">3.</td>
                                            <td class="text-center">Gigi</td>
                                            <td class="text-center"><?php echo"$rsw[gigi]";  ?></td>  
 </tr>    
<?php
}?>
</tbody>
                                 

                           </table>