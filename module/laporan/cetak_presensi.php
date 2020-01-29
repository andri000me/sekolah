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
                            Data Siswa <?php 
                            $sqlj=mysql_query("select * from kelas where idk='$_SESSION[idk]'");
                            $rsj=mysql_fetch_array($sqlj);
                            echo "Kelas $rsj[nama_kelas]";                  
                            $klas=$_GET['kls'];
?> |
<?php 
                            $sqlc=mysql_query("select * from mapel where nama_mapel='$_GET[mapel]'");
                            $rsc=mysql_fetch_array($sqlc);
                            echo "Mata Pelajaran : $rsc[nama_mapel]";
                            $mapel=$_GET['mapel'];



 ?>
