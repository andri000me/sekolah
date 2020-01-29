<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Welcome to CodeIgniter</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
<?php
	foreach($idk as $row){
		$kelas = $row->nama_kelas;
	}
	
	foreach($ids as $row){
		$sekolah = $row->nama_sekolah;
	}
// echo base_url('welcome/import');
echo"
<form method='post' action='http://prototype123.site/multi_sheet/import/proses_import' enctype='multipart/form-data'>       
                    <a href='Format.xlsx' class='btn btn-primary btn-sm'>          
						<span class='glyphicon glyphicon-download'></span>Download File Raport</a><br><br>
						<input type='hidden' name='sekolah' value='$sekolah'>
						<input type='hidden' name='kelas' value='$kelas'>
                        <input type='file' name='file' class='pull-left'>                
						<input type='submit' value='Import'  class='btn btn-success btn-sm'>
                     </form>  
"

?>
</body>
</html>