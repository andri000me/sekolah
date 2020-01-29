<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Pelaporan Administrasi Sekolah</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>
    <div class="container">

        <div class="row">

            <div class="col-md-4 col-md-offset-4">
             <center><img  width="300px" height="200px" src="images/tutwurihandayani.png" class="logo"></center>
             <center><h3>SISTEM PELAPORAN ADMINISTRASI SEKOLAH</h3></center>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">LOGIN</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="ceklogin.php" id="myformlogin" onSubmit="return validasi_login()">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" id="username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" id="password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->

                                <button class="btn btn-lg btn-success btn-block">LOGIN</button><br>
                             <p>Yuk Daftar Sekolahmu<a href="reg_sekolah.php"> Klik disini</a></p>
                             <p>Yuk Daftar Untuk Menjadi Admin Sekolah<a href="daftar.php"> Klik disini</a></p>
                            </fieldset>
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
         function validasi_login()
    {
          
          var username=document.forms["myformlogin"]["username"].value;
     
        if (username==null || username=="")
          {
          alert("Username tidak boleh kosong !");
          return false;
          };
          var password=document.forms["myformlogin"]["password"].value;
     
        if (password==null || password=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
      }
    </script>

</body>

</html>
