<?php
session_start();
if(!empty($_SESSION['nama'])){
$uidi=$_SESSION['idu'];	
$usre=$_SESSION['nama'];
$level=$_SESSION['level'];
$klss=$_SESSION['idk'];
// $ortu=$_SESSION['ortu'];
$idd=$_SESSION['id_sekolah'];


include "config/koneksi.php";

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEM PELAPORAN ADMINISTRASI</title>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Core CSS - Include with every page -->
    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
<!-- datepicker-->
        <link rel="stylesheet" href="select2.min.css" />
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"> 
    </script>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="media.php?module=home">SISTEM PELAPORAN ADMINISTRASI SEKOLAH</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user fa-fw"></i>
<?php 

echo "  User : $usre"; 
?> 

                   </a>
                </li>
     

               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-calendar fa-fw"></i>
<?php echo "Tanggal : ".date("d-m-Y"); ?> 
                   </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-home fa-fw"></i>
<?php 
if($level=="admin_guru"){
    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$idd'");
    $rsa=mysqli_fetch_array($sqla);
echo "Sekolah : $rsa[nama_sekolah]" ;
}else{
    $sql=mysqli_query($koneksi,"SELECT * FROM kelas WHERE idk='$klss'");
    $rs=mysqli_fetch_array($sql);
    $ids=$rs['id'];
    $sqla=mysqli_query($koneksi,"SELECT * FROM sekolah WHERE id_sekolah='$rs[id]'");
    $rsa=mysqli_fetch_array($sqla);
    $sekolah = $rsa['nama_sekolah'];
    $kelas = $rs['nama_kelas'];
echo "Sekolah : $rsa[nama_sekolah] | $rs[nama_kelas]" ;
}
?> 
                   </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="" href="logout.php" onclick="return confirm('Apakah Yakin Keluar Dari Sistem ?');">
<?php echo "Logout"; ?> <i class="fa fa-sign-out fa-fw"></i>
                   </a>
                </li> 
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        
<?php if( $level=='admin' ){ ?>

 <li>
     
                        
                         <a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                            <!--<a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Siswa<span class="fa arrow"></span></a>-->

                            <ul class="nav nav-second-level">
                            <li>
                             <a href="#"><i class="fa fa-file fa-fw"></i> Data Sekolah<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.php?module=tampil_sekolah">View Data Sekolah</a>
                                </li>
                            </ul>
                                </li>
                                <li>
                       <a href="#"><i class="fa fa-file fa-fw"></i> Data Semua Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.php?module=all_admin">View Data Admin</a>
                                </li>
                            </ul>
                           
                        </li>
                        </ul>    
                         <!-- /.nav-second-level --> <!-- DEADLINE INI PANJI -->
                        
<?php } ?>
<!--
<?php if( $level=='admin'){ ?>

                          <li>
                       <a href="#"><i class="fa fa-file fa-fw"></i> Data Semua Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.php?module=all_admin">View Data Admin</a>
                                </li>
                            </ul>
                           
                        </li>
</li>
<?php } ?>-->
<?php if( $level=='admin_guru' ){ ?>

 <li>
     
                        
                         <a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                            <!--<a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Siswa<span class="fa arrow"></span></a>-->

                            <ul class="nav nav-second-level">
                            <li>
                             <a href="#"><i class="fa fa-file fa-fw"></i> Data Sekolah<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.php?module=sekolah">View Data Sekolah</a>
                                </li>
                            </ul>
                                </li>
                            
                            <!-- /.nav-second-level --> <!-- DEADLINE INI PANJI -->
                        
<?php } ?>

<?php if( $level=='admin_guru' ){ ?>

                        <li>
                         <a href="#"><i class="fa fa-file fa-fw"></i> Data Kelas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.php?module=input_kelas&act=input">Input Data Kelas</a>
                                </li>
                                <li>
                                    <a href="media.php?module=pilih_kelas">View Data Kelas</a>
                                </li>
                            </ul>
                           
                            <!-- /.nav-second-level -->
                        </li>

<?php } ?>

<?php if( $level=='admin_guru' ){ ?>

                        <li>
                             <a href="#"> <i class="fa fa-file fa-fw"></i>Data Siswa<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                           
                                <li>
                                    <a href="media.php?module=input_siswa&act=input">Input Data Siswa</a>
                                </li>
                                <li>
                                    <a href="media.php?module=tampil">View Data Siswa</a>
                                </li>
                                </ul>
                        </li>
                        
<?php } ?>
<?php if( $level=='admin_guru'){ ?>

                          <li>
                       <a href="#"><i class="fa fa-file fa-fw"></i> Data Mata Pelajaran<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="media.php?module=input_mapel&act=input">Input Data Mata Pelajaran</a>
                                </li>
                                <li>
                                    <a href="media.php?module=tampil_mapel">View Data Mata Pelajaran</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

<?php } ?>
<?php if( $level=='admin_guru'){ ?>

                          <li>
                       <a href="#"><i class="fa fa-file fa-fw"></i> Data Guru Mata Pelajaran<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="media.php?module=input_gurumapel&act=input">Input Data Guru Mata Pelajaran</a>
                                </li>
                                <li>
                                    <a href="media.php?module=tampil_gurumapel">View Data Guru Mata Pelajaran</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


<?php } ?>
<?php if( $level=='admin_guru'){ ?>

                          <li>
                       <a href="#"><i class="fa fa-file fa-fw"></i> Data Wali Kelas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="media.php?module=input_walikelas&act=input">Input Data Wali Kelas</a>
                                </li>
                                <li>
                                    <a href="media.php?module=tampil_walikelas">View Data Wali Kelas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


<?php } ?>


<?php if( $level=='admin_guru'){ ?>

                          <li>
                       <a href="#"><i class="fa fa-file fa-fw"></i> Data Ekstrakulikuler<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="media.php?module=input_ekstrakulikuler&act=input">Input Data Ekstrakulikuler</a>
                                </li>
                                <li>
                                    <a href="media.php?module=tampil_ekstrakulikuler">View Data Ekstrakulikuler</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
</ul>
</li>

<?php } ?>
<?php if($level=='admin_guru'){ ?>

 <li>
     
                        
                         <a href="#"><i class="fa fa-dashboard fa-fw"></i>Laporan Siswa<span class="fa arrow"></span></a>
                            <!--<a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Siswa<span class="fa arrow"></span></a>-->

                            <ul class="nav nav-second-level">
                            <li>
                             <a href="#"><i class="fa fa-file fa-fw"></i> Presensi Siswa<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                             
                                <li>
                                    <a href="media.php?module=pilih_laporantu">Laporan Presensi Siswa</a>
                                </li>
                            </ul>
                                </li>
                                

                                  <li>
                         <a href="#"><i class="fa fa-file fa-fw"></i> Rapor Siswa<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              
                                <li>
                                    <a href="media.php?module=pilih_raportu">Laporan Rapor Siswa</a>
                                </li>
                            </ul>
                           
                            <!-- /.nav-second-level -->
                        </li>
                          <!-- /.nav-second-level -->
                        </ul>
                    </li>
<?php } ?>
<?php if( $level=='admin_guru'){ ?>

                          <li>
                       <a href="media.php?module=lihat_admin"><i class="fa fa-file fa-fw"></i> Data Admin Sekolah</a>
                     
                            <!-- /.nav-second-level -->
                        </li>

<?php } ?>

<?php if($level=='gurumapel'  ){ ?>

                        <li>
                             <a href="#"> <i class="fa fa-file fa-fw"></i>Data Presensi Siswa<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                            </li>
                                <li>
                                    <a href="media.php?module=pilih">Input Data Presensi Siswa</a>
                                </li>
                                <li>
                                    <a href="media.php?module=pilih_view">View Data Presensi Siswa</a>
                                </li>
                                </ul>
                       
                        </li>
<?php } ?>

<?php if($level=='gurumapel'){ ?>
                        <li>
                            <a href="media.php?module=pilih_laporanguru"><i class="fa fa-file fa-fw"></i> Laporan Presensi Siswa</a>
                            
                        </li>
                     
<?php } ?>

<?php if($level=='gurumapel'){ ?>
                        <li>
                            <a href="media.php?module=gurumapel_det"><i class="fa fa-dashboard fa-fw"></i> Data Guru Mata Pelajaran</a>
                        </li>
                        
<?php } ?>

<?php if($level=='walikelas'  ){ ?>

                        <li>
                             <a href="#"> <i class="fa fa-file fa-fw"></i>Data Nilai Rapor Siswa<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                            </li>
                                <li>
                                    <a href="media.php?module=pilih_inputrapor">Input Data Nilai Rapor Siswa Manual</a>
                                </li>
                                <li>
                                    <a href="media.php?module=pilih_inputrapor_langsung">Input Data Nilai Rapor Siswa Langsung</a>
                                </li>
                                <li>
                                    <a href="media.php?module=tampil_raporsiswa">View Data Nilai Rapor Siswa</a>
                                </li>
                                </ul>
                       </li>
                        </li>
<?php } ?>
<?php if($level=='walikelas'  ){ ?>

                        <li>
                             <a href="#"> <i class="fa fa-file fa-fw"></i>Data Pelengkap Rapor Siswa<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                            </li>
                                <li>
                                    <a href="media.php?module=pilih_inputkondisi">Input Data Pelengkap Rapor Siswa</a>
                                </li>
                                <li>
                                    <a href="media.php?module=tampil_kondisisiswa">View Data Pelengkap Rapor Siswa</a>
                                </li>
                                </ul>
                       </li>
                        </li>
<?php } ?>
<?php if($level=='walikelas'  ){ ?>

                        <li>
                             <a href="#"> <i class="fa fa-file fa-fw"></i>Data Prestasi Siswa<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                            </li>
                                <li>
                                    <a href="media.php?module=pilih_inputprestasi">Input Data Prestasi Siswa</a>
                                </li>
                                <li>
                                    <a href="media.php?module=tampil_prestasi">View Data Prestasi Siswa</a>
                                </li>
                                </ul>
                       </li>
                        </li>
<?php } ?>
<?php if($level=='walikelas'){ ?>
                        <li>
                            <!-- <a href="media.php?module=pilih_rapor"><i class="fa fa-file fa-fw"></i> Laporan Rapor Siswa</a> -->
                            <a href="media.php?module=laporan_raporsiswa"><i class="fa fa-file fa-fw"></i> Laporan Rapor Siswa</a>
                            
                        </li>
<?php } ?>
<?php if($level=='walikelas'){ ?>
                        <li>
                            <a href="media.php?module=walikelas_det"><i class="fa fa-dashboard fa-fw"></i> Data Wali Kelas</a>
                        </li>
<?php } ?>

<?php if($level=='user'){ ?>

 <li>
     
                        
                         <a href="#"><i class="fa fa-dashboard fa-fw"></i>Laporan Siswa<span class="fa arrow"></span></a>
                            <!--<a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Siswa<span class="fa arrow"></span></a>-->

                            <ul class="nav nav-second-level">
                            <li>
                            <a href="media.php?module=pilih_laporan"><i class="fa fa-file fa-fw"></i> Laporan Presensi Siswa</a>
            
                                </li>
                                

                                  <li>
                         <a href="media.php?module=tampil_raporku"><i class="fa fa-file fa-fw"></i> Laporan Rapor Siswa</a>
                
                           
                            <!-- /.nav-second-level -->
                        </li>
                          <!-- /.nav-second-level -->
                        </ul>
                    </li>
                    
<?php } ?>


<?php if($level=='walisiswa'){ ?>

<li>
    
                       
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i>Rapor Siswa</span></a>
                           <!--<a href="#"><i class="fa fa-dashboard fa-fw"></i> Data Siswa<span class="fa arrow"></span></a>-->

                           <!-- <ul class="nav nav-second-level">
                           <li>
                           <a href="media.php?module=pilih_laporan"><i class="fa fa-file fa-fw"></i> Laporan Presensi Siswa</a>
           
                               </li>
                               

                                 <li>
                        <a href="media.php?module=tampil_raporku"><i class="fa fa-file fa-fw"></i> Laporan Rapor Siswa</a>
               
                          
                           <!-- /.nav-second-level -->
                       <!-- </li> -->
                         <!-- /.nav-second-level -->
                       <!-- </ul> -->
                   </li>
                   
<?php } ?>


<?php if($level=='user'){ ?>
                        <li>
                            <a href="media.php?module=siswa_det"><i class="fa fa-dashboard fa-fw"></i> Data Siswa</a>
                        </li>
<?php } ?>

                </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <br>
            
<?php 


include "content.php";  





?>

        </div>
        <!-- /#page-wrapper -->

</div>
    </div>
    <!-- /#wrapper -->
    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

       

        <script src="js/moment.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript">
        $('#datepicker').datetimepicker({
                    format: 'DD MMMM YYYY',
                });
                </script>
<script type="text/javascript">
// fungsi yang dipanggil ketika form di submit
// lihat baris 5 

function validasi_guru()
    {
//        menangkap variabel nip dari form, 
//        
//       
        var nip=document.forms["myformguru"]["nip"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        
//        validasi nip tidak boleh kosong (required)
        if (nip==null || nip=="")
          {
          alert("Nomor Induk Pegawai tidak boleh kosong !");
          return false;
          };
           if (!nip.match(numbers))
          {
          alert("Nomor Induk Pegawai harus angka !");
          return false;
          };
        if (nip.length!=18)
          {
          alert("Nomor Induk Pegawai harus 18 digit");
          return false;
          };
// validasi NIP
        var nama_guru=document.forms["myformguru"]["nama_guru"].value;
        var alphabet= /^[a-zA-Z ' . ,]+$/;
        if (nama_guru==null || nama_guru=="")
          {
          alert("Nama Guru tidak boleh kosong !");
          return false;
          };
          

        if (!nama_guru.match(alphabet))
          {
          alert("Nama Guru harus huruf !");
          return false;
          };
          

          var alamat=document.forms["myformguru"]["alamat"].value;
     
        if (alamat==null || alamat=="")
          {
          alert("Alamat Guru tidak boleh kosong !");
          return false;
          };
  var kelas=document.forms["myformguru"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          };

          var nama_mapel=document.forms["myformguru"]["nama_mapel"].value;
         if (nama_mapel=="")
          {
          alert("Silahkan Pilih Mata Pelajaran !");
          return false;
          };

          var tlp=document.forms["myformguru"]["tlp"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        

        if (tlp==null || tlp=="")
          {
          alert("Nomor telepon tidak boleh kosong !");
          return false;
          };
     
      if (!tlp.match(numbers))
          {
          alert("Nomor Telepon harus angka !");
          return false;
          };

          var nama_logo=document.forms["myformguru"]["nama_logo"].value;
           if (nama_logo==null || nama_logo=="")
          {
          alert("Nama Foto Wali Kelas tidak boleh kosong !");
          return false;
          };
          var logo=document.forms["myformguru"]["logo"].value;
     
        if (logo==null || logo=="")
          {
          alert("Foto Wali Kelas tidak boleh kosong !");
          return false;
          };
           var pw1=document.forms["myformguru"]["pw1"].value;
//        
        if (pw1==null || pw1=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
           var pw2=document.forms["myformguru"]["pw2"].value;
//        
        if (pw2==null || pw2=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
      }

function validasi_sekolah(){
        var kode_sekolah=document.forms["myformsekolah"]["kode_sekolah"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        var alphabet= /^[a-zA-Z0-9 ]*$/;
        var letter= /^[a-zA-Z ]*$/;

        if (kode_sekolah==null || kode_sekolah=="")
          {
          alert("Kode Sekolah tidak boleh kosong !");
          return false;
          };
          
//   
//       
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
             var kabupaten=document.forms["myformsekolah"]["kabupaten"].value;
     
        if (kabupaten==null || kabupaten=="")
          {
          alert("Nama Kabupaten atau Kota tidak boleh kosong !");
          return false;
          };
          if (!kabupaten.match(letter))
          {
          alert("Kabupaten atau Kota harus huruf !");
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
function validasi_kelas(){
    var alphabet= /^[a-zA-Z0-9 ()]*$/;
    
    var nama=document.forms["myformkelas"]["nama"].value;
       
        if (nama==null || nama=="")
          {
          alert("Nama kelas tidak boleh kosong !");
          return false;
          }; 
          if (!nama.match(alphabet))
          {
          alert("Nama Kelas harus benar !");
          return false;
          };

          var tahun_ajaran=document.forms["myformkelas"]["tahun_ajaran"].value;
         if (tahun_ajaran=="Pilih Tahun Ajaran")
          {
          alert("Silahkan Pilih Tahun Ajaran !");
          return false;
          }; 

}

function validasi_siswa(){
var nis=document.forms["myformsiswa"]["nis"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        
//        
        if (nis==null || nis=="")
          {
          alert("Nomor Induk Siswa tidak boleh kosong !");
          return false;
          };
          
        

        if (!nis.match(numbers))
          {
          alert("Nomor Induk Siswa harus angka !");
          return false;
          };
          if (nis.length!=10)
          {
          alert("Nomor Induk Siswa harus 10 digit");
          return false;
          };
   
        var nama_siswa=document.forms["myformsiswa"]["nama_siswa"].value;
        var alphabet= /^[a-zA-Z ']+$/;
        if (nama_siswa==null || nama_siswa=="")
          {
          alert("Nama Siswa tidak boleh kosong !");
          return false;
          };
        if (!nama_siswa.match(alphabet))
          {
          alert("Nama Siswa harus huruf !");
          return false;
          };

        var tempat=document.forms["myformsiswa"]["tempat"].value;
//        
        if (tempat==null || tempat=="")
          {
          alert("Tempat Lahir tidak boleh kosong !");
          return false;
          };
          
        var tanggal=document.forms["myformsiswa"]["tanggal"].value;
//        
        if (tanggal==null || tanggal=="")
          {
          alert("Tanggal Lahir tidak boleh kosong !");
          return false;
          };
 
          var alamat=document.forms["myformsiswa"]["alamat"].value;
     
        if (alamat==null || alamat=="")
          {
          alert("Alamat Siswa tidak boleh kosong !");
          return false;
          };

          var tlp=document.forms["myformsiswa"]["tlp"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        
//        
        if (tlp==null || tlp=="")
          {
          alert("Nomor Telepon tidak boleh kosong !");
          return false;
          };
          
//  
//        
        if (!tlp.match(numbers))
          {
          alert("Nomor Telepon harus angka !");
          return false;
          };
           var kelas=document.forms["myformsiswa"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          };
          
        var tahun_ajaran=document.forms["myformsiswa"]["tahun_ajaran"].value;
         if (tahun_ajaran=="Pilih Tahun Ajaran")
          {
          alert("Silahkan Pilih Tahun Ajaran !");
          return false;
          }; 
//   
        var bapak=document.forms["myformsiswa"]["bapak"].value;
        var alphabet= /^[a-zA-Z ]+$/;
        if (bapak==null || bapak=="")
          {
          alert("Nama Ayah tidak boleh kosong !");
          return false;
          };
          if (!bapak.match(alphabet))
          {
          alert("Nama Ayah harus huruf !");
          return false;
          };

          var k_bapak=document.forms["myformsiswa"]["k_bapak"].value;
//       
        if (k_bapak==null || k_bapak=="")
          {
          alert("Pekerjaan Ayah tidak boleh kosong !");
          return false;
          };

          var ibu=document.forms["myformsiswa"]["ibu"].value;
          var alphabet= /^[a-zA-Z ]+$/;
        if (ibu==null || ibu=="")
          {
          alert("Nama Ibu tidak boleh kosong !");
          return false;
          };
          if (!ibu.match(alphabet))
          {
          alert("Nama Ibu harus huruf !");
          return false;
          };
          var k_ibu=document.forms["myformsiswa"]["k_ibu"].value;
//        
        if (k_ibu==null || k_ibu=="")
          {
          alert("Pekerjaan Ibu tidak boleh kosong !");
          return false;
          };
        var nama_logo=document.forms["myformsiswa"]["nama_logo"].value;
           if (nama_logo==null || nama_logo=="")
          {
          alert("Nama Foto Wali Kelas tidak boleh kosong !");
          return false;
          };
          var logo=document.forms["myformsiswa"]["logo"].value;
     
        if (logo==null || logo=="")
          {
          alert("Foto Wali Kelas tidak boleh kosong !");
          return false;
          };
      
          var pw1=document.forms["myformsiswa"]["pw1"].value;
//        
        if (pw1==null || pw1=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };

   
}
function validasi_walikelas(){
 var nip=document.forms["myformwalikelas"]["nip"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        
//        validasi nip tidak boleh kosong (required)
        if (nip==null || nip=="")
          {
          alert("Nomor Induk Pegawai tidak boleh kosong !");
          return false;
          };
        if (!nip.match(numbers))
          {
          alert("Nomor Induk Pegawai harus angka !");
          return false;
          };
        if (nip.length!=18)
          {
          alert("Nomor Induk Pegawai harus 18 digit");
          return false;
          };

       


        var nama_walikelas=document.forms["myformwalikelas"]["nama_walikelas"].value;
        var alphabet= /^[a-zA-Z , . ']+$/;
        if (nama_walikelas==null || nama_walikelas=="")
          {
          alert("Nama Wali Kelas tidak boleh kosong !");
          return false;
          };
          

        if (!nama_walikelas.match(alphabet))
          {
          alert("Nama Wali Kelas harus huruf !");
          return false;
          };
          

          var alamat=document.forms["myformwalikelas"]["alamat"].value;
     
        if (alamat==null || alamat=="")
          {
          alert("Alamat Wali Kelas tidak boleh kosong !");
          return false;
          };
           var kelas=document.forms["myformwalikelas"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          };

          var tlp=document.forms["myformwalikelas"]["tlp"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        if (tlp==null || tlp=="")
          {
          alert("Nomor Telepon tidak boleh kosong !");
          return false;
          };
//        
      if (!tlp.match(numbers))
          {
          alert("Nomor Telepon harus angka !");
          return false;
          };
          var nama_logo=document.forms["myformwalikelas"]["nama_logo"].value;
           if (nama_logo==null || nama_logo=="")
          {
          alert("Nama Foto Wali Kelas tidak boleh kosong !");
          return false;
          };
          var logo=document.forms["myformwalikelas"]["logo"].value;
     
        if (logo==null || logo=="")
          {
          alert("Foto Wali Kelas tidak boleh kosong !");
          return false;
          };


        var pw1=document.forms["myformwalikelas"]["pw1"].value;
//        
        if (pw1==null || pw1=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
          var pw2=document.forms["myformwalikelas"]["pw2"].value;
//        
        if (pw2==null || pw2=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
      }
      function validasi_mapel(){
        var kode_mapel=document.forms["myformmapel"]["kode_mapel"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        
//        validasi nip tidak boleh kosong (required)
        if (kode_mapel==null || kode_mapel=="")
          {
          alert("Kode Mata Pelajaran tidak boleh kosong !");
          return false;
          };
        if (!kode_mapel.match(numbers))
          {
          alert("Kode Mata Pelajaran harus angka !");
          return false;
          };
        if (kode_mapel.length!=3)
          {
          alert("Kode mapel harus 3 digit");
          return false;
          };

     

        var nama_mapel=document.forms["myformmapel"]["nama_mapel"].value;
        var alphabet= /^[a-zA-Z ,']+$/;
        if (nama_mapel==null || nama_mapel=="")
          {
          alert("Nama Mata Pelajaran tidak boleh kosong !");
          return false;
          };
          

        if (!nama_mapel.match(alphabet))
          {
          alert("Nama Mata Pelajaran harus huruf !");
          return false;
          };
           var kkm=document.forms["myformmapel"]["kkm"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9 ,']+$/;
        if (kkm==null || kkm=="")
          {
          alert("Kriteria Kelulusan Minimal tidak boleh kosong !");
          return false;
          };   
        if (!kkm.match(numbers))
          {
          alert("Kriteria Kelulusan Minimal harus angka !");
          return false;
          };
          var kelas=document.forms["myformmapel"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          };
}
           function validasi_ekstrakulikuler(){
               var nama_ekstrakulikuler=document.forms["myformekstrakulikuler"]["nama_ekstrakulikuler"].value;
        var alphabet= /^[a-zA-Z ]+$/;
        if (nama_ekstrakulikuler==null || nama_ekstrakulikuler=="")
          {
          alert("Nama Ekstrakulikuler tidak boleh kosong !");
          return false;
          };   
          if (!nama_ekstrakulikuler.match(alphabet))
          {
          alert("Nama Ekstrakulikuler harus huruf !");
          return false;
          };     
           var kelas=document.forms["myformekstrakulikuler"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          };
           var tahun_ajaran=document.forms["myformekstrakulikuler"]["tahun_ajaran"].value;
         if (tahun_ajaran=="Pilih Tahun Ajaran")
          {
          alert("Silahkan Pilih Tahun Ajaran !");
          return false;
          }; 
      }
    function validasi_admin(){
// validasi NIP
        var nama_admin=document.forms["myformadmin"]["nama_admin"].value;
        var alphabet= /^[a-zA-Z . ']+$/;
        if (nama_admin==null || nama_admin=="")
          {
          alert("Nama Admin tidak boleh kosong !");
          return false;
          };
          

        if (!nama_admin.match(alphabet))
          {
          alert("Nama Admin harus huruf !");
          return false;
          };
          
          var username=document.forms["myformadmin"]["username"].value;
     
        if (username==null || username=="")
          {
          alert("Username tidak boleh kosong !");
          return false;
          };
     
           var pw1=document.forms["myformadmin"]["pw1"].value;
//        
        if (pw1==null || pw1=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };

           var pw2=document.forms["myformadmin"]["pw2"].value;
//        
        if (pw2==null || pw2=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
      }
      function validasi_rapor(){
        var nilai_pengetahuan=document.forms["myformrapor"]["nilai_pengetahuan"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;

        if (nilai_pengetahuan==null || nilai_pengetahuan=="")
          {
          alert("Nilai Angka Pengetahuan tidak boleh kosong !");
          return false;
          };
          
//   
//       
        if (!nilai_pengetahuan.match(numbers))
          {
          alert("Nilai Angka Pengetahuan harus angka !");
          return false;
          };
          var huruf_pengetahuan=document.forms["myformrapor"]["huruf_pengetahuan"].value;
         if (huruf_pengetahuan=="Pilih Nilai Huruf")
          {
          alert("Silahkan Pilih Nilai Huruf Pengetahuan !");
          return false;
          }; 
          
        var deskripsi_pengetahuan=document.forms["myformrapor"]["deskripsi_pengetahuan"].value;
        if (deskripsi_pengetahuan==null || deskripsi_pengetahuan=="")
          {
          alert("Deskripsi Penilaian Pengetahuan tidak boleh kosong !");
          return false;
          };
            var nilai_keterampilan=document.forms["myformrapor"]["nilai_keterampilan"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;

        if (nilai_keterampilan==null || nilai_keterampilan=="")
          {
          alert("Nilai Angka Keterampilan tidak boleh kosong !");
          return false;
          };
          
//       
        if (!nilai_keterampilan.match(numbers))
          {
          alert("Nilai Angka Keterampilan harus angka !");
          return false;
          };
          var huruf_keterampilan=document.forms["myformrapor"]["huruf_keterampilan"].value;
         if (huruf_keterampilan=="Pilih Nilai Huruf")
          {
          alert("Silahkan Pilih Nilai Huruf Keterampilan !");
          return false;
          }; 
            var deskripsi_keterampilan=document.forms["myformrapor"]["deskripsi_keterampilan"].value;
        if (deskripsi_keterampilan==null || deskripsi_keterampilan=="")
          {
          alert("Deskripsi Penilaian Keterampilan tidak boleh kosong !");
          return false;
          };
          var huruf_dalam=document.forms["myformrapor"]["huruf_dalam"].value;
         if (huruf_dalam=="Pilih Nilai Huruf")
          {
          alert("Silahkan Pilih Nilai Huruf Dalam Mapel !");
          return false;
          }; 
          var huruf_antar=document.forms["myformrapor"]["huruf_antar"].value;
         if (huruf_antar=="Pilih Nilai Huruf")
          {
          alert("Silahkan Pilih Nilai Huruf Antar Mapel !");
          return false;
          }; 
          var deskripsi_sikap=document.forms["myformrapor"]["deskripsi_sikap"].value;
        if (deskripsi_sikap==null || deskripsi_sikap=="")
          {
          alert("Deskripsi Penilaian Sikap dan Spiritual tidak boleh kosong !");
          return false;
          };
}
 function validasi_kondisi(){
        var alphabet= /^[a-zA-Z0-9 ()]*$/;
        var nama_ekstra1=document.forms["myformkondisi"]["nama_ekstra1"].value;
         if (nama_ekstra1=="Pilih Ekstrakulikuler")
          {
          alert("Silahkan Pilih  Ekstrakulikuler !");
          return false;
          }; 
          var nama_ekstra2=document.forms["myformkondisi"]["nama_ekstra2"].value;
         if (nama_ekstra2=="Pilih Ekstrakulikuler")
          {
          alert("Silahkan Pilih  Ekstrakulikuler !");
          return false;
          }; 
          var nilai_ekstra1=document.forms["myformkondisi"]["nilai_ekstra1"].value;
         if (nilai_ekstra1=="Pilih Nilai Huruf")
          {
          alert("Silahkan Pilih Nilai Huruf Ekstrakulikuler!");
          return false;
          }; 
          var nilai_ekstra2=document.forms["myformkondisi"]["nilai_ekstra2"].value;
         if (nilai_ekstra2=="Pilih Nilai Huruf")
          {
          alert("Silahkan Pilih Nilai Huruf Ekstrakulikuler!");
          return false;
          }; 
        var ket_sakit=document.forms["myformkondisi"]["ket_sakit"].value;
        if (ket_sakit==null || ket_sakit=="")
          {
          alert("Jumlah Sakit Siswa tidak boleh kosong !");
          return false;
          };
          if (!ket_sakit.match(alphabet))
          {
          alert("Jumlah Sakit Siswa harus benar !");
          return false;
          };
          var ket_izin=document.forms["myformkondisi"]["ket_izin"].value;
        if (ket_izin==null || ket_izin=="")
          {
          alert("Jumlah Izin Siswa tidak boleh kosong !");
          return false;
          };
        if (!ket_izin.match(alphabet))
          {
          alert("Jumlah Izin Siswa harus benar !");
          return false;
          };
          var ket_alpa=document.forms["myformkondisi"]["ket_alpa"].value;
        if (ket_alpa==null || ket_alpa=="")
          {
          alert("Jumlah Alpa Siswa tidak boleh kosong !");
          return false;
          };
        if (!ket_alpa.match(alphabet))
          {
          alert("Jumlah Alpa Siswa harus benar !");
          return false;
          };
          var kelakuan=document.forms["myformkondisi"]["kelakuan"].value;
        if (kelakuan==null || kelakuan=="")
          {
          alert("Keterangan Kelakuan Siswa tidak boleh kosong !");
          return false;
          };
          var kerajinan=document.forms["myformkondisi"]["kerajinan"].value;
        if (kerajinan==null || kerajinan=="")
          {
          alert("Keterangan Kerajinan Siswa tidak boleh kosong !");
          return false;
          };
          var kerapihan=document.forms["myformkondisi"]["kerapihan"].value;
        if (kerapihan==null || kerapihan=="")
          {
          alert("Keterangan Kerapihan Siswa tidak boleh kosong !");
          return false;
          };
          var kebersihan=document.forms["myformkondisi"]["kebersihan"].value;
        if (kebersihan==null || kebersihan=="")
          {
          alert("Keterangan Kebersihan Siswa tidak boleh kosong !");
          return false;
          };
      }
      function validasi_prestasi(){
        var tanggal_prestasi=document.forms["myformprestasi"]["tanggal_prestasi"].value;
        if (tanggal_prestasi==null || tanggal_prestasi=="")
          {
          alert("Tanggal Prestasi Siswa tidak boleh kosong !");
          return false;
          };
          var deskripsi_prestasi=document.forms["myformprestasi"]["deskripsi_prestasi"].value;
        if (deskripsi_prestasi==null || deskripsi_prestasi=="")
          {
          alert("Keterangan Prestasi Siswa tidak boleh kosong !");
          return false;
          };
          }
    function validasi_cetak()
    {

          var kelas=document.forms["myformcetak"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          };
          var nama_mapel=document.forms["myformcetak"]["nama_mapel"].value;
         if (nama_mapel=="")
          {
          alert("Silahkan Pilih Mata Pelajaran !");
          return false;
          };
}
    function validasi_pilihkelas(){

        var tahun_ajaran=document.forms["myformpilihkelas"]["tahun_ajaran"].value;
         if (tahun_ajaran=="Pilih Tahun Ajaran")
          {
          alert("Silahkan Pilih Tahun Ajaran !");
          return false;
          }; 


    }
    function validasi_pilihsiswa(){

        var kelas=document.forms["myformpilihsiswa"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          }; 

        var tahun_ajaran=document.forms["myformpilihsiswa"]["tahun_ajaran"].value;
         if (tahun_ajaran=="Pilih Tahun Ajaran")
          {
          alert("Silahkan Pilih Tahun Ajaran !");
          return false;
          }; 
    }
    function validasi_pilihmapel(){
        var kelas=document.forms["myformpilihmapel"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          }; 

    }
    function validasi_pilihguru(){
        var kelas=document.forms["myformpilihguru"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          }; 

    }
    function validasi_pilihwalikelas(){
        var kelas=document.forms["myformpilihwalikelas"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          }; 

    }
    function validasi_pilihekstrakulikuler(){
        var kelas=document.forms["myformpilihekstrakulikuler"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          }; 
          var tahun_ajaran=document.forms["myformpilihekstrakulikuler"]["tahun_ajaran"].value;
         if (tahun_ajaran=="Pilih Tahun Ajaran")
          {
          alert("Silahkan Pilih Tahun Ajaran !");
          return false;
          }; 
    }
    function validasi_cetakrapor()
    {

          var kelas=document.forms["myformcetakrapor"]["kelas"].value;
         if (kelas=="Pilih Kelas")
          {
          alert("Silahkan Pilih Kelas !");
          return false;
          };
          var tahun_ajaran=document.forms["myformcetakrapor"]["tahun_ajaran"].value;
         if (tahun_ajaran=="Pilih Tahun Ajaran")
          {
          alert("Silahkan Pilih Tahun Ajaran !");
          return false;
          }; 
}
    function validasi_inputrapor()
    {
          var tahun_ajaran=document.forms["myforminputrapor"]["tahun_ajaran"].value;
         if (tahun_ajaran=="Pilih Tahun Ajaran")
          {
          alert("Silahkan Pilih Tahun Ajaran !");
          return false;
          }; 
}
 function validasi_inputprestasi()
    {
          var tahun_ajaran=document.forms["myforminputprestasi"]["tahun_ajaran"].value;
         if (tahun_ajaran=="Pilih Tahun Ajaran")
          {
          alert("Silahkan Pilih Tahun Ajaran !");
          return false;
          }; 
}
function validasi_walikelasdet(){
 var nip=document.forms["myformwalikelasdet"]["nip"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        
//        validasi nip tidak boleh kosong (required)
        if (nip==null || nip=="")
          {
          alert("Nomor Induk Pegawai tidak boleh kosong !");
          return false;
          };
        if (!nip.match(numbers))
          {
          alert("Nomor Induk Pegawai harus angka !");
          return false;
          };
        if (nip.length!=18)
          {
          alert("Nomor Induk Pegawai harus 18 digit");
          return false;
          };

   


        var nama_walikelas=document.forms["myformwalikelasdet"]["nama_walikelas"].value;
        var alphabet= /^[a-zA-Z , . ']+$/;
        if (nama_walikelas==null || nama_walikelas=="")
          {
          alert("Nama Wali Kelas tidak boleh kosong !");
          return false;
          };
          

        if (!nama_walikelas.match(alphabet))
          {
          alert("Nama Wali Kelas harus huruf !");
          return false;
          };
          

          var alamat=document.forms["myformwalikelasdet"]["alamat"].value;
     
        if (alamat==null || alamat=="")
          {
          alert("Alamat Wali Kelas tidak boleh kosong !");
          return false;
          };

          var tlp=document.forms["myformwalikelasdet"]["tlp"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;

        if (tlp==null || tlp=="")
          {
          alert("Nomor Telepon tidak boleh kosong !");
          return false;
          };
//        
      if (!tlp.match(numbers))
          {
          alert("Nomor Telepon harus angka !");
          return false;
          };
          


        var pw1=document.forms["myformwalikelasdet"]["pw1"].value;
//        
        if (pw1==null || pw1=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
          var pw2=document.forms["myformwalikelasdet"]["pw2"].value;
//        
        if (pw2==null || pw2=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
      }
      function validasi_siswadet(){
var nis=document.forms["myformsiswadet"]["nis"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        
//        
        if (nis==null || nis=="")
          {
          alert("Nomor Induk Siswa tidak boleh kosong !");
          return false;
          };
        if (!nis.match(numbers))
          {
          alert("Nomor Induk Siswa harus angka !");
          return false;
          };
        if (nis.length!=10)
          {
          alert("Nomor Induk Siswa harus 10 digit");
          return false;
          };
   
        var nama_siswa=document.forms["myformsiswadet"]["nama_siswa"].value;
        var alphabet= /^[a-zA-Z ']+$/;
        if (nama_siswa==null || nama_siswa=="")
          {
          alert("Nama Siswa tidak boleh kosong !");
          return false;
          };
        if (!nama_siswa.match(alphabet))
          {
          alert("Nama Siswa harus huruf !");
          return false;
          };

        var tempat=document.forms["myformsiswadet"]["tempat"].value;
//        
        if (tempat==null || tempat=="")
          {
          alert("Tempat Lahir tidak boleh kosong !");
          return false;
          };
          
        var tanggal=document.forms["myformsiswadet"]["tanggal"].value;
//        
        if (tanggal==null || tanggal=="")
          {
          alert("Tanggal Lahir tidak boleh kosong !");
          return false;
          };
 
          var alamat=document.forms["myformsiswadet"]["alamat"].value;
     
        if (alamat==null || alamat=="")
          {
          alert("Alamat Siswa tidak boleh kosong !");
          return false;
          };
          var tahun_ajaran=document.forms["myformsiswadet"]["tahun_ajaran"].value;
         if (tahun_ajaran=="Pilih Tahun Ajaran")
          {
          alert("Silahkan Pilih Tahun Ajaran !");
          return false;
          }; 

          var tlp=document.forms["myformsiswadet"]["tlp"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        
//        
        if (tlp==null || tlp=="")
          {
          alert("Nomor Telepon tidak boleh kosong !");
          return false;
          };
          
//  
//        
        if (!tlp.match(numbers))
          {
          alert("Nomor Telepon harus angka !");
          return false;
          };
        var bapak=document.forms["myformsiswadet"]["bapak"].value;
        var alphabet= /^[a-zA-Z ]+$/;
        if (bapak==null || bapak=="")
          {
          alert("Nama Ayah tidak boleh kosong !");
          return false;
          };
          if (!bapak.match(alphabet))
          {
          alert("Nama Ayah harus huruf !");
          return false;
          };

          var k_bapak=document.forms["myformsiswadet"]["k_bapak"].value;
//       
        if (k_bapak==null || k_bapak=="")
          {
          alert("Pekerjaan Ayah tidak boleh kosong !");
          return false;
          };

          var ibu=document.forms["myformsiswadet"]["ibu"].value;
          var alphabet= /^[a-zA-Z ]+$/;
        if (ibu==null || ibu=="")
          {
          alert("Nama Ibu tidak boleh kosong !");
          return false;
          };
          if (!ibu.match(alphabet))
          {
          alert("Nama Ibu harus huruf !");
          return false;
          };
          var k_ibu=document.forms["myformsiswadet"]["k_ibu"].value;
//        
        if (k_ibu==null || k_ibu=="")
          {
          alert("Pekerjaan Ibu tidak boleh kosong !");
          return false;
          };
          var pw1=document.forms["myformsiswadet"]["pw1"].value;
//        
        if (pw1==null || pw1=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };

   
}
function validasi_gurudet()
    {
   
        var nip=document.forms["myformgurudet"]["nip"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        
//        validasi nip tidak boleh kosong (required)
        if (nip==null || nip=="")
          {
          alert("Nomor Induk Pegawai tidak boleh kosong !");
          return false;
          };
           if (!nip.match(numbers))
          {
          alert("Nomor Induk Pegawai harus angka !");
          return false;
          };
          
        if (nip.length!=18)
          {
          alert("Nomor Induk Pegawai harus 18 digit");
          return false;
          };

       

// validasi NIP
        var nama_guru=document.forms["myformgurudet"]["nama_guru"].value;
        var alphabet= /^[a-zA-Z ' . ,]+$/;
        if (nama_guru==null || nama_guru=="")
          {
          alert("Nama Guru tidak boleh kosong !");
          return false;
          };
          

        if (!nama_guru.match(alphabet))
          {
          alert("Nama Guru harus huruf !");
          return false;
          };
          

          var alamat=document.forms["myformgurudet"]["alamat"].value;
     
        if (alamat==null || alamat=="")
          {
          alert("Alamat Guru tidak boleh kosong !");
          return false;
          };


          var tlp=document.forms["myformgurudet"]["tlp"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9
        var numbers=/^[0-9]+$/;
        
//        validasi nip tidak boleh kosong (required)
        if (tlp==null || tlp=="")
          {
          alert("Nomor telepon tidak boleh kosong !");
          return false;
          };
     
      if (!tlp.match(numbers))
          {
          alert("Nomor Telepon harus angka !");
          return false;
          };


           var pw1=document.forms["myformgurudet"]["pw1"].value;
//        
        if (pw1==null || pw1=="")
          {
          alert("Password tidak boleh kosong !");
          return false;
          };
           var pw2=document.forms["myformgurudet"]["pw2"].value;
//        
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

 <script type="text/javascript">
 $("#pw2").password('toggle');
</script>

<script src="jquery.chained.min.js"></script>
        <script>
            $("#nama_mapel").chained("#kelas");
          
        </script>
<script src="select2.min.js"></script>
<script>
$("#provinsi").select2( {
  placeholder: "Pilih Provinsi",
  allowClear: true
  } );
</script>
<script>
$("#kota").select2( {
  placeholder: "Pilih Kota",
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
                    alert('Tidak ada data Kota');
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

<?php } ?>
