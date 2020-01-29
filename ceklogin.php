<?php
include"config/koneksi.php";

$pass=md5($_POST['password']);
$passw=$_POST['password'];

$user=$_POST['username'];

	$result=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' AND pass='$pass'");
	$count=mysqli_num_rows($result);
	$rs=mysqli_fetch_array($result);
		if($count>0){
			session_start();
				$_SESSION['idu']=$rs['idu'];
				$_SESSION['nama']=$rs['nama'];
				$_SESSION['level']="admin_guru";
				$_SESSION['idk']="";
				$_SESSION['ortu']="";
				$_SESSION['id_sekolah']=$rs['id_sekolah'];
			header('location:media.php?module=home');

}else{

$mr=md5($_POST['password']);
	$sqla=mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$user' AND pass='$mr'");
	$counta=mysqli_num_rows($sqla);
	$rsa=mysqli_fetch_array($sqla);
if($counta>0){
			session_start();
				$_SESSION['idu']=$rsa['nis'];
				$_SESSION['nama']=$rsa['nama'];
				$_SESSION['idk']=$rsa['idk'];
				$_SESSION['level']="user";
				$_SESSION['ortu']="";
				$_SESSION['id_sekolah']=$rsa['id_sekolah'];
				header('location:media.php?module=home');

}else{

$gr=md5($_POST['password']);
	$sqlz=mysqli_query($koneksi,"SELECT * FROM gurumapel WHERE nip='$user' AND pass='$gr'");
	$countz=mysqli_num_rows($sqlz);
	$rsz=mysqli_fetch_array($sqlz);
if($countz>0){
			session_start();
				$_SESSION['idu']=$rsz['nip'];
				$_SESSION['nama']=$rsz['nama'];
				$_SESSION['idk']=$rsz['idk'];
				$_SESSION['level']="gurumapel";
				$_SESSION['ortu']="";
				$_SESSION['id_sekolah']=$rsz['id_sekolah'];

			header('location:media.php?module=home');

	
}else{

	$kr=md5($_POST['password']);
	$sqlm=mysqli_query($koneksi,"SELECT * FROM walikelas w INNER JOIN kelas k on w.idk = k.idk INNER JOIN sekolah s on k.id = s.id_sekolah WHERE w.nama='$user' AND w.pass='$kr'");
	$countm=mysqli_num_rows($sqlm);
	$rsm=mysqli_fetch_array($sqlm);
if($countm>0){
			session_start();
				$_SESSION['idu']=$rsm['nama'];
				$_SESSION['nama']=$rsm['nama'];
				$_SESSION['idk']=$rsm['idk'];
				$_SESSION['level']="walikelas";
				$_SESSION['ortu']="";
				$_SESSION['id_sekolah']=$rsm['id_sekolah'];

			header('location:media.php?module=home');
	}else{
	$er=md5($_POST['password']);
	$sqlp=mysqli_query($koneksi,"SELECT siswa.ids AS ids, rapor_pengetahuan.sekolah AS sekolah, siswa.idk AS kelas, siswa.nama AS nama,
					siswa.nis AS nis, rapor_pengetahuan.tahun_pelajaran AS thn, walikelas.nama AS walikelas 
					FROM siswa INNER JOIN walikelas ON siswa.idk=walikelas.idk and siswa.waliname='$user' and siswa.walipass='$er'
					INNER JOIN rapor_pengetahuan ON siswa.nama = rapor_pengetahuan.nama");
	$countp=mysqli_num_rows($sqlp);
	$rsp=mysqli_fetch_array($sqlp);
if($countp>0){
			session_start();
				$_SESSION['idu']=$rsp['ids'];
				$_SESSION['nis']=$rsp['nis'];
				$_SESSION['nama']=$rsp['nama'];
				$_SESSION['idk']=$rsp['kelas'];
				$_SESSION['level']="walisiswa";
				// $_SESSION['ortu']="";
				// $_SESSION['id_sekolah']="";
				$_SESSION['sekolah'] = $rsp['sekolah'];
				$_SESSION['kelas'] = $rsp['kelas'];
				$_SESSION['nis'] = $rsp['nis'];
				$_SESSION['thn_ajaran'] = $rsp['thn'];
				$_SESSION['walikelas'] = $rsp['walikelas'];

			header('location:media.php?module=edit_rapor');
	}else{		

		$er=md5($_POST['password']);
		$sqlp=mysqli_query($koneksi,"SELECT * FROM admin WHERE email='$user' AND password='$er'");
		$countp=mysqli_num_rows($sqlp);
		$rsp=mysqli_fetch_array($sqlp);
	if($countp>0){
				session_start();
					$_SESSION['idu']=$rsp['idn'];
					$_SESSION['nama']=$rsp['nama'];
					$_SESSION['idk']="";
					$_SESSION['level']="admin";
					$_SESSION['ortu']="";
					$_SESSION['id_sekolah']="";
	
				header('location:media.php?module=home');
		}else{		
				echo"<center><h2>username atau password anda salah.</h2><br>
					<a href=index.php><b>Ulangi Lagi</b></a></center>";	
	}
}
}
}
}
}
?>
