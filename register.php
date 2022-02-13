<?php 
// Pemanggilan
require_once("proses_register.php");
?>







<html lang="en">
<head>
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.25.4/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
  <link href="../src/output.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">


<br><br>
    <div class="p-7 card bg-base-200 max-w-sm mx-auto rounded-xl shadow-lg flex items-center space-x-4 ">
    <div class="shrink-0">
    </div>



    <div>
        <div class="text-5xl font-medium text-white 
        flex items-center text-">REGISTER</div>
    </div>
    </div><br>

    <div class="mockup-window bg-base-300 p-6 max-w-sm mx-auto shadow-lg r space-x-4">
        
        

    <div class="form-control p-10 card bg-base-200 flex items-center">
        <div class="row">


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nik :</label>
        <input type="text"  class="input flex items-center"  name="nik" placeholder="Masukan nik" value="<?php echo isset($_POST["nik"]) ? $_POST["nik"] : '' ; ?>" required pattern="^\+?([ -]?\d+)+|\(\d+\)([ -]\d+)$" autocomplete="off" title="Nik hanya boleh diisi dengan Angka">

    </div>



<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama :</label>
    <input type="text"  class="input flex items-center"  name="nama" placeholder="Masukan nama" value="<?php echo isset($_POST["nama"]) ? $_POST["nama"] : '' ; ?>" required pattern="^[a-zA-Z\s'-]{1,100}$" autocomplete="off"  title="Nama hanya boleh diisi dengan huruf">

</div>


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username :</label>
    <input type="text"  class="input flex items-center"  name="username" placeholder="Masukan username" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : '' ; ?>" required pattern="^[a-z0-9_-]{3,15}$" autocomplete="off">
   
</div>



<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password :</label>
    <input type="password"  class="input flex items-center"  name="password" placeholder="Masukan password" required autocomplete="off">
</div>




<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No. Telphone :</label>
    <input type="text"  class="input flex items-center"  name="telp" placeholder="Masukan telp" value="<?php echo isset($_POST["telp"]) ? $_POST["telp"] : '' ; ?>" required pattern="^\+?([ -]?\d+)+|\(\d+\)([ -]\d+)$" autocomplete="off" autocomplete="off" title="No Telephone hanya boleh diisi dengan Angka">
  
</div>




<input type="submit" class="btn btn-outline btn-accent" name="register" value="Register"/>

</form>

        </div>
      </div>
    </div>
<br><br>

</body>
</html>