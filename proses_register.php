<?php 


require_once("proses.php");



if(isset($_POST['register'])){

    global $koneksi;
    // Filter data yang diinputkan
    
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $telp = $_POST["telp"];

    
    // Menyiapkan Query 
    $sql = "INSERT INTO table_masyarakat (nik,nama,username,password,telp)
    VALUES ('$nik','$nama', '$username', '$password', '$telp')";
 
    $sql2 = "SELECT nik FROM table_masyarakat WHERE username = $username";
    $hasil = mysqli_query($koneksi,$sql2);

 
    $cek_username=mysqli_num_rows(mysqli_query($koneksi,"SELECT username FROM table_masyarakat WHERE username='$_POST[username]'"));
    // Kalau username sudah ada yang pakai
    if ($cek_username > 0){
      echo "<script>
      alert('Username sudah ada yang pakai!');
      document.location.href = 'register.php';
      </script>";
    } else if(mysqli_query($koneksi, $sql))
    echo "<script>
    alert('user baru berhasil ditambahkan!');
    document.location.href = 'index.php';
      </script>
      ";

   

    //     if (mysqli_query($koneksi, $sql)) {
    // echo "<script>
    // alert('user baru berhasil ditambahkan!');
    //    </script>
    //    ";
    // }else if(mysqli_num_rows($hasil) > 0){
    //     echo "<script>
    //     alert('username sudah ada');
    //        </script>
    //        ";
    //        return false;
    // } else {
    // echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
// }
}






// function register($data){

// 	global $koneksi;
    
//     $nik = $_POST["nik"];
//     $nama = $_POST["nama"];
//     $username  = strtolower(stripslashes($data["username"]));
// 	$password  = mysqli_real_escape_string($koneksi,$data["password"]);
//     $telp = $_POST["telp"];
	
	

// 	// cek username
// 	$result = mysqli_query($koneksi, "SELECT nik FROM table_masyarakat WHERE username = $username");
 
// 	if(mysqli_fetch_assoc($result)){

// 		echo "<script>alert('username Is taken!')</script>";

// 	return false;

// 	}

// 	// enkripsi
// 	$password = password_hash($password, PASSWORD_DEFAULT);

// 	// insert
// 	mysqli_query($koneksi,"INSERT INTO table_masyarakat (nik,nama,username,password,telp)
//     VALUES ('$nik','$nama', '$username', '$password', '$telp')");

// 	return mysqli_affected_rows($koneksi);

// }


?>