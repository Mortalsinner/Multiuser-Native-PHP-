<?php 

// require 'cek_login.php';

session_start();

if(isset($_SESSION["login"])){
  header("location:dashboard_user/dashboard_user.php");
  exit;
}

?>



<html data-theme="dark">
    <head>
        <title>Form Login</title>
        
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.25.4/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
  <link href="src/output.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        

  

    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class = 'alert'> Username atau Password tidak sesuai!</div>";
        }
    }
    ?>



    <form action="cek_login.php" method="POST">

   

    <br><br>
    <div class="p-7 card bg-base-200 max-w-sm mx-auto rounded-xl shadow-lg flex items-center space-x-4 ">
    <div class="shrink-0">
    </div>



    <div>
        <div class="text-5xl font-medium text-white 
        flex items-center text-"><b>LOGIN</b></div>
    </div>
    </div><br><br>



    <div class="hero min-h-screen">
  <div class="flex-col justify-center hero-content lg:flex-row">
    <div class="text-center lg:text-left">
      <h1 class="mb-5 text-5xl font-bold">
            Halo <br> Masyarakat <br> Internet
          </h1> 
      <p class="mb-5">
            Selamat datang dalam website <b>LaporID</b>
          </p>
    </div> 



    <div class="mockup-window bg-base-300 p-6 max-w-sm mx-auto shadow-lg r space-x-4">
        
    <div class="form-control p-10 card bg-base-200 flex items-center">
        <div class="row">       


    <div class="mb-3">
        <label for="exampleInputEmail1" class="label-text">Username :</label><br>
        <input type="text"  class="input flex items-center"  name="username" placeholder="Masukan Username" required autocomplete="off">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="label-text">Password :</label><br>
        <input type="password"  class="input flex items-center"  name="password" placeholder="Password" required>
    </div>


   
    
    <button type="submit" class="btn btn-outline btn-accent" value="login" name="login">Login</button>

    <button
    class="btn btn-outline btn-primary"
    ><a href="register.php" 
    style="text-decoration:none; color:white;"
    >REGISTER</a></button>
    
    
    
    

            
            </form>
    
        </div>
    </div><br>


</div>
</div>
</div>


</div>


	



<!-- Footer Section -->
<footer class="p-10 footer bg-primary text-primary-content footer-center">
<div>
<svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="inline-block fill-current">
  <path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
</svg> 
<p class="font-bold">LaporID. 
  <br>Providing reliable social support
</p> 
<p>Copyright © LaporID 2022 - All right reserved</p>
</div> 
</footer>






    </body>
</html>