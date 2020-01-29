<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<?php

// echo base_url('welcome/import');
echo"
<form action='Welcome/import' method='POST' enctype='multipart/form-data'>
<input type='file' name='file'><br></br>
<input type='submit' value='import'>
</form>
"

?>
</body>
</html>