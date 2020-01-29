          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Guru Mata Pelajaran Per-Kelas</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="././media.php?module=gurumapel" id="myformpilihguru" onSubmit="return validasi_pilihguru()">


                                <div class="col-lg-6">
<input type="hidden" name="module" value="gurumapel">

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kls" id="kelas">
                                                <option>Pilih Kelas</option>
<?php 
    $sql=mysqli_query($koneksi,"SELECT * FROM kelas");
    while($rs=mysqli_fetch_array($sql)){

    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rs[id]'");
    $rsa=mysqli_fetch_array($sqla);
if($_SESSION['level']=="admin_guru"){
if($rsa['id_sekolah']==$_SESSION['id_sekolah']){
    echo "<option value='$rs[idk]'>$rsa[nama_sekolah] | $rs[nama_kelas]</option>";  
}
}else{
    echo "<option value='$rs[idk]'>$rsa[nama_sekolah] | $rs[nama_kelas]</option>";      
    }
}
?>
                                            </select>
                                        </div>
                                        
               


                                        <button type="submit" class="btn btn-success">Submit</button>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                    </form>

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