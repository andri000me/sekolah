<?php
session_start();
if(!empty($_SESSION['nama'])){
$uidi=$_SESSION['idu'];	
$usre=$_SESSION['nama'];
$level=$_SESSION['level'];
$klss=$_SESSION['idk'];
$ortu=$_SESSION['ortu'];
$idd=$_SESSION['id_sekolah'];


include "config/koneksi.php";

?>
<?php
 //Define relative path from this script to mPDF
 $nama_file='Rapor Siswa'; //Beri nama file PDF hasil.
require_once __DIR__ . '/vendor/autoload.php';
//include(_MPDF_PATH . "graph.php");

//include(_MPDF_PATH . "graph_cache/src/");

$mpdf = new \Mpdf\Mpdf(); 

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
$mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 

$mpdf->useGraphs = true;

?>
<!DOCTYPE html>
<html>

<head>
	<style type="text/css">
     #invoice_0
        {
            height: auto;
        }
         
        #invoice_0 , #invoice_0
        {   
            width:100%;
        }
        #invoice_0 table , #invoice_0 table
        {
            width:50%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
            border-spacing:0;
            border-collapse: collapse; 
            margin:50px auto;

        }
         
        #invoice_0 table td , #invoice_0 table td
        {
            text-align:left;
            font-size:14pt;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            padding:2mm 0;
        }
         
        .img
        {
             display: block;
             margin-left: auto;
             margin-right: auto;    
        }
        .tabel
        {
            border-style: 1px solid;
            font-family: calibri; 
            border-spacing:0;
            border-collapse: collapse; 
             
        }
        .alamat
        {
             display: block;
             margin-left: auto;
             margin-right: auto; 
             text-align: center;
        }
         
        .tabletd 
        {
            border-right: 1px solid #fff;
            border-bottom: 1px solid #fff;
            padding: 2mm;
            
        }
         
        .tabelheading
        {
            height:50mm;
        }
        #wrapper
        {
            width:200mm;
            margin:0 5mm;
        }
         
        .page
        {
            height:297mm;
            width:210mm;
            page-break-after:always;
        }
 
        .tabel1 {
            border: 1px solid #C6C6C6;
            width: 500px;
            font-size: 18px;
        }
        .tabel2 {
           font-size: 9pt;
           text-align: center;
        }

        .font1 {
            width: 1000px;
            text-align: justify;
            font-size: 80px;
            font-weight: bold;
        }
        .font2 {
            width: 1000px;
            text-align: left;
            font-size: 80px;
            font-weight: bold;
        }
        .isi {
            font-size: 80px;
             width: 1000px;
         font-weight: bold;
        }
        .isi1 {
            width: 1500px;
            font-size: 80px;
            font-weight: bold;
        }
        .tanda{
            font-size: 80px;
            font-weight: bold;
        }
        .judul{
            font-size: 14px;
            font-weight: bold;
        }
        .judul1{
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        .tabel3 {
           font-size: 12px;
           text-align: center;
        }
        .isitabel {
            text-align: justify;
        }
        .tabel4 {
           font-size: 12px;
           text-align: left;
        }
           <style>
        *
        {
            margin:0;
            padding:0;
            font-family: calibri;
            font-size:10pt;
            color:#000;
        }
        body
        {
            width:100%;
            font-family: calibri;
            font-size:8pt;
            margin:0;
            padding:0;
        }
         
        p
        {
            margin:0;
            padding:0;
            margin-left: 200px;
        }
         
        #wrapper
        {
            width:200mm;
            margin:0 5mm;
        }
         
        .page
        {
            height:297mm;
            width:210mm;
            page-break-after:always;
        }
 
        table
        {
            border-left: 1px solid #fff;
            border-top: 1px solid #fff;
            font-family: calibri; 
            border-spacing:0;
            border-collapse: collapse; 
             
        }
         
        table td 
        {
            border-right: 1px solid #fff;
            border-bottom: 1px solid #fff;
            padding: 2mm;
            
        }
         
        table.heading
        {
            height:50mm;
        }
         
        h1.heading
        {
            font-size:10pt;
            color:#000;
            font-weight:normal;
            font-style: italic;
        }
         
        h2.heading
        {
            font-size:10pt;
            color:#000;
            font-weight:normal;
        }
         
        hr
        {
            color:#ccc;
            background:#ccc;
        }
         
        #invoice_body
        {
            height: auto;
        }
         
        #invoice_body , #invoice_total
        {   
            width:100%;
        }
        #invoice_body table , #invoice_total table
        {
            width:100%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
     
            border-spacing:0;
            border-collapse: collapse; 
             
            margin-top:5mm;
        }
         
        #invoice_body table td , #invoice_total table td
        {
            text-align:center;
            font-size:8pt;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            padding:2mm 0;
        }
         
        #invoice_body table td.mono  , #invoice_total table td.mono
        {
            text-align:center;
            padding-right:3mm;
            font-size:8pt;
        }
         
        #footer
        {   
            width:200mm;
            margin:0 5mm;
            padding-bottom:3mm;
        }
        #footer table
        {
            width:100%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
             
            background:#eee;
             
            border-spacing:0;
            border-collapse: collapse; 
        }
        #footer table td
        {
            width:25%;
            text-align:center;
            font-size:9pt;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }#invoice_3 table td , #invoice_total table td
        {
            text-align:center;
            font-size:9pt;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            padding:2mm 0;
        }#invoice_3 table td.mono  , #invoice_total table td.mono
        {
            text-align:center;
            padding-right:3mm;
            font-size:8pt;
        }#invoice_3 , #invoice_total
        {   
            width:100%;
        }#invoice_3
        {
            height: auto;
        } #invoice_3 table , #invoice_total table
        {
            width:100%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
     
            border-spacing:0;
            border-collapse: collapse; 
             
            margin-top:5mm;
        }#invoice_2
        {
            height: auto;
        }
         
        #invoice_2 , #invoice_total
        {   
            width:100%;
        }
        #invoice_2 table , #invoice_total table
        {
            width:100%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
     
            border-spacing:0;
            border-collapse: collapse; 
             
            margin-top:5mm;
        }
         
        #invoice_2 table td , #invoice_total table td
        {
            text-align:left;
            font-size:8pt;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            padding:2mm 0;
        }
         
        #invoice_2 table td.mono  , #invoice_total table td.mono
        {
            text-align:center;
            padding-right:3mm;
            font-size:8pt;
        }
         

    </style>

    </style>
	<title>SISTEM ADMINISTRASI SEKOLAH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
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

        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
</head>
<body>
<?php

include 'content.php';
?>
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
</script>
<?php

$html = ob_get_contents(); //Proses untuk mengambil data
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);  // The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html,1);

$mpdf->Output($nama_file."-".$data['no_sj'].".pdf" ,'I');

 


exit; 
?>     
</body>
</html>

<?php }?>