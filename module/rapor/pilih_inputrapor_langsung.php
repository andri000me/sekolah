<?php include "config/koneksi.php"; ?>            
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Upload Nilai Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Kelas Dan Upload Nilai Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                        
<!-- <br></br>
<form method="post" enctype="multipart/form-data" action="media.php?module=upload">
Pilih File Excel*:<input name="fileexcel" type="file"> <br> 
<input name="upload" type="submit" value="Import"></br>ss
</form> -->


            <!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi --> 
                 <div class="col-lg-12">    
                 <!-- <a href='Format.xlsx' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-download'></span>Download File Raport</a><br><br> -->
                 <?php
                    echo"
                        <form method='post' action='$baseurl/sekolah/multi_sheet/import/proses_import' enctype='multipart/form-data'>
                            <input type='hidden' name='sekolah' value='$sekolah'>
                            <input type='hidden' name='kelas' value='$kelas'>
                            <input type='hidden' name='idk' value='$klss'>
                            <input type='text' name='jml_siswa' placeholder='Jumlah Siswa'><br>
                            <input type='file' name='file' class='pull-left'>                
                            <input type='submit' value='Import'  class='btn btn-success btn-sm'>
                        </form>  
                    
                    ";
                 ?>
                 </div>
                 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->