
<?php
include"config/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Pelaporan Administrasi Sekolah</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="select2.min.css" />
    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"> 
    </script>
</head>

<body>
    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">
             <center><img  width="300px" height="200px" src="images/tutwurihandayani.png" class="logo"></center>
             <center><h3>SISTEM PELAPORAN ADMINISTRASI SEKOLAH</h3></center><br><br><br>
             <div class="panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">DAFTAR</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="proses.php" id="myformuser" onSubmit="return validasi_user()">
                     <div class="col-lg-6"><br>
                                  <div class="form-group">
                                            <label>Nama Pengguna</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Nama Anda" name="nama" id="nama_user">
                                            </div>
                                <div class="form-group">
                                            <label>Username</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Username" name="username" id="username">
                                            </div>
                               <div class="form-group">
                                            <label>Sekolah</label>
                                            <select class="form-control" name="id_sekolah" id="id_sekolah">
                                                <option>Pilih Sekolahmu</option>
                                            <?php 
                                            $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah");
                                            while($rsa=mysqli_fetch_array($sqla)){
                                            echo "<option value='$rsa[id_sekolah]'>$rsa[nama_sekolah]</option>";    
                                            }
                                            ?>
                                            </select>
                                        </div>
                                          <p>Yuk Login<a href="index.php"> Klik disini</a></p>
                                 <p>Yuk Daftar Sekolahmu<a href="reg_sekolah.php"> Klik disini</a></p>
                                    </div>
                                    <div class="col-lg-6"><br>
                                <div class="form-group">
                                            <label>Password</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Password" name="pass" type="password" id="pw1">
                                        </div>
                                        <div class="form-group">
                                            <label>Konfirmasi Password</label><span style="color: red; font-size: 14pt;"> *</span> 
                                            <input class="form-control" placeholder="Masukkan Password Kembali" name="pass" type="password" id="pw2" data-toggle="password">
                                        </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                 <button type="submit" class="btn btn-success" id="submit">Daftar</button>
                                 <button type="reset" class="btn btn-danger">Batal</button>
                             </div>
                               
                     
                        </form>   
                    </div>
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
    <script type="text/javascript">
        function validasi_user()
    {

        var nama_user=document.forms["myformuser"]["nama_user"].value;
        var alphabet= /^[a-zA-Z ' . ,]+$/;
        if (nama_user==null || nama_user=="")
          {
          alert("Nama Pengguna tidak boleh kosong !");
          return false;
          };
          

       if (!nama_user.match(alphabet))
          {
          alert("Nama Pengguna harus huruf !");
          return false;
          };
          

          var username=document.forms["myformuser"]["username"].value;
     
        if (username==null || username=="")
          {
          alert("Username tidak boleh kosong !");
          return false;
          };
          var pw1=document.forms["myformuser"]["pw1"].value;
     
        if (pw1==null || pw1=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
            var pw2=document.forms["myformuser"]["pw2"].value;
     
        if (pw2==null || pw2=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
      }
    </script>
<script type="text/javascript">
  $(function () {
            $("#submit").click(function () {
                var password = $("#pw1").val();
                var confirmPassword = $("#pw2").val();
                if (password != confirmPassword) {
                    alert("Password tidak sama, coba lagi");
                    return false;
                }
                return true;
            });
        });
</script>
<script src="select2.min.js"></script>
<script>
$("#id_sekolah").select2( {
  placeholder: "Pilih Sekolahmu",
  allowClear: true
  } );
</script>
</body>

</html>
