





<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'proses.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM table_petugas WHERE username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
// Login Petugas Admin / petugas
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
  
    
	// cek jika user login sebagai admin
	    if($data['level_petugas']=="admin"){
		$_SESSION["login"] = true;
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level_petugas'] = "admin";
		// alihkan ke halaman dashboard pegawai
		header("location:dashboard_admin/dashboard_admin.php");

 
	// cek jika user login sebagai petugas
	}else if($data['level_petugas']=="petugas"){
		$_SESSION["login"] = true;
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level_petugas'] = "petugas";
		// alihkan ke halaman dashboard pengurus
		header("location:dashboard_petugas/dashboard_petugas.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		echo"
		<script>
		alert('Username atau Password salah!');
		document.location.href ='index.php';
		</script>
		";

	}
}














// LOGIN USER
$result = mysqli_query($koneksi, "SELECT * FROM table_masyarakat WHERE username = '$username' and password='$password'");

// cek username
if (mysqli_num_rows($result) === 1 ) {
    $row = mysqli_fetch_assoc($result);
    
	// Set Session 
	$_SESSION["login"] = true;
	header("Location:dashboard_user/dashboard_user.php");
	exit;
      }else{
 
		// alihkan ke halaman login kembali
		echo"
		<script>
		alert('Username atau Password salah!');
		document.location.href ='index.php';
		</script>
		";

	}













	  
// Login Petugas Instansi

$result2 = mysqli_query($koneksi, "SELECT * FROM table_petugaslapangan WHERE usernameLP = '$username' and passwordLP ='$password'");

$cek2 = mysqli_num_rows($result2);

if($cek2 > 0){
 
	$rows = mysqli_fetch_assoc($result2);

// cek jika user login sebagai admin
if($rows['divisi']=="kenyamanan"){
	// buat session login dan username
	$_SESSION['usernameLP'] = $username;
	$_SESSION['divisi'] = "kenyamanan";
	// alihkan ke halaman dashboard pegawai
	header("location:dashboard_kenyamanan/dashboard_petugasKenyamanan.php");

// cek jika user login sebagai petugas
}else if($rows['divisi']=="keamanan"){
	// buat session login dan username
	$_SESSION['usernameLP'] = $username;
	$_SESSION['divisi'] = "keamanan";
	// alihkan ke halaman dashboard pengurus
	header("location:dashboard_keamanan/dashboard_petugasKeamanan.php");

}else if($rows['divisi']=="kesehatan"){
		// buat session login dan username
		$_SESSION['usernameLP'] = $username;
		$_SESSION['divisi'] = "kesehatan";
		// alihkan ke halaman dashboard pengurus
		header("location:dashboard_kesehatan/dashboard_petugasKesehatan.php");
}else{
 
	// alihkan ke halaman login kembali
	echo"
	<script>
	alert('Username atau Password salah!');
	document.location.href ='index.php';
	</script>
	";

}
}
?>