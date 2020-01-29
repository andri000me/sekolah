<?php
include"config/koneksi.php";

?>
<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Pelaporan Administrasi Sekolah</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="select2.min.css" />
</head>

<body>
    <div class="container">

        <div class="row">

             <div class="col-md-8 col-md-offset-2">
             <center><img  width="300px" height="200px" src="images/tutwurihandayani.png" class="logo"></center>
             <center><h3>SISTEM PELAPORAN ADMINISTRASI SEKOLAH</h3></center><br>
             <div class="panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">DAFTAR SEKOLAH</h3></center>
                    </div>
                 
                        <form role="form" method="post" action="module/proses_sekolah.php" enctype="multipart/form-data" id="myformsekolah" onSubmit="return validasi_sekolah()">
                            <fieldset>
                            <div class="col-lg-6"><br>
                                        <div class="form-group">
                                            <label>Kode Sekolah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Kode Sekolah" id="kode_sekolah" name="kode_sekolah">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama sekolah" id="nama" name="nama_sekolah">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Alamat Sekolah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <textarea class="form-control" placeholder="Masukkan Alamat Sekolah" id="alamat" name="alamat" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success" >Submit</button>
                                        <button type="reset" class="btn btn-danger">Batal</button>
                                        <br><br>
                                            <p>Yuk Login<a href="index.php"> Klik disini</a></p>
                                            <p>Yuk Daftar Untuk Menjadi Admin Sekolah<a href="daftar.php"> Klik disini</a></p>
                                    </div>
                          <div class="col-lg-6"><br>
                            <div class="form-group">
                                            <label>Status Sekolah</label>
                                            <select class="form-control" name="status">
                                              <option value="Pilih Status">Pilih Status</option>
                                                <option value="Negeri">Negeri</option>
                                                <option value="Swasta">Swasta</option>
                                              </select>
                                            </div>
                            <div class="form-group">
                                            <label>Provinsi</label>
                                            <select class="form-control" name="provinsi" id="provinsi"   >
                                         <option value="">Pilih Provinsi</option>
                                              <?php
                                              $sql=mysqli_query($koneksi,"SELECT * FROM provinsi ");
                                              while($data_prov=mysqli_fetch_array($sql)){

                                                 ?>
                                                  <option value="<?php echo $data_prov["id_prov"] ?>"><?php echo $data_prov["nm_prov"] ?></option>
                                              <?php
                                              }
                                              ?>
                                          </select>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Kabupaten atau Kota</label>
                                            <select name="kabupaten" id="kota" class="form-control" >

                                              <?php
                                               $result=mysqli_query($koneksi,"SELECT * FROM kota WHERE id_prov='".$_POST["prov"]."'");
                                              while($data_prov=mysqli_fetch_array($result)){

                                            
                                               ?>
                                               <option value="<?php echo $data_prov["id_kota"] ?>"><?php echo $data_prov["nm_kota"] ?></option><br>
                                                <?php
                                                }
                                                ?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Logo Sekolah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input class="form-control" placeholder="Masukkan Nama Logo Sekolah" id="nama_logo" name="nama_file">
                                        </div>
                                         <div class="form-group">
                                            <label>Logo Sekolah</label><span style="color: red; font-size: 14pt;"> *</span>
                                            <input  type="file" name="file" id="logo">
                                        </div>
                                        
                                    
                                        
                                        

                         </div>
                            </fieldset>
                        </form>   
                   
                </div>
   </div>
        </div>

    </div>

    <!-- Core Scripts - Include with every page -->
    
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
    <script src="select2.min.js"></script>
<script type="text/javascript">
    function validasi_sekolah(){
        var kode_sekolah=document.forms["myformsekolah"]["kode_sekolah"].value;
        var numbers=/^[0-9]+$/;
        var alphabet= /^[a-zA-Z0-9 ]*$/;
        var letter= /^[a-zA-Z ]*$/;
//        validasi nip tidak boleh kosong (required)
        if (kode_sekolah==null || kode_sekolah=="")
          {
          alert("Kode Sekolah tidak boleh kosong !");
          return false;
          };   
        if (!kode_sekolah.match(numbers))
          {
          alert("Kode Sekolah harus angka !");
          return false;
          };
           if (kode_sekolah.length!=8)
          {
          alert("Kode Sekolah harus 8 digit");
          return false;
          };
          var nama=document.forms["myformsekolah"]["nama"].value;
        if (nama==null || nama=="")
          {
          alert("Nama Sekolah tidak boleh kosong !");
          return false;
          };
          if (!nama.match(alphabet))
          {
          alert("Nama Sekolah harus benar !");
          return false;
          };
           var alamat=document.forms["myformsekolah"]["alamat"].value;
     
        if (alamat==null || alamat=="")
          {
          alert("Alamat Sekolah tidak boleh kosong !");
          return false;
          };
          var status=document.forms["myformsekolah"]["status"].value;
         if (status=="Pilih Status")
          {
          alert("Silahkan Pilih Status!");
          return false;
          }; 
       
           var nama_logo=document.forms["myformsekolah"]["nama_logo"].value;
        if (nama_logo==null || nama_logo=="")
          {
          alert("Nama Logo Sekolah tidak boleh kosong !");
          return false;
          };
          var logo=document.forms["myformsekolah"]["logo"].value;
     
        if (logo==null || logo=="")
          {
          alert("Logo Sekolah tidak boleh kosong !");
          return false;
          };
     }
</script>
<script>
$("#provinsi").select2( {
  placeholder: "Pilih Provinsi",
  allowClear: true
  } );
</script>
<script>
$("#kota").select2( {
  placeholder: "Pilih Kabupaten atau Kota",
  allowClear: true
  } );
</script>
<script>
   
    $("#provinsi").change(function(){
   
        // variabel dari nilai combo box provinsi
        var id_provinsi = $("#provinsi").val();
       
        // tampilkan image load
        $("#imgLoad").show("");
       
        // mengirim dan mengambil data
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "aku.php",
            data: "prov="+id_provinsi,
            success: function(msg){
               
                // jika tidak ada data
                if(msg == ''){
                    alert('Tidak ada data Kabupaten atau Kota');
                }
               
                // jika dapat mengambil data,, tampilkan di combo box kota
                else{
                    $("#kota").html(msg);                                                     
                }
               
                // hilangkan image load
                $("#imgLoad").hide();
            }
        });    
    });
</script>
</body>

</html>
