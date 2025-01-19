<?php
    session_start();
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('location: index.php ');
    }
?>

<style>
  body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-image: url('img/back.svg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopMeUp</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/style.css">
    <?php include "layout/header.html" ?>
    <hr>
    <br>
    <h3 align="center">Selamat Datang! <?= $_SESSION["username"] ?></h3>
    <hr>

    
  <h3 class="card-header" align="center">About our APP</h3>  
  </div>
  <ul >
    <h1>What is TopMeUp?</h1>
    <h5>kami hadir utuk mempermudah kehidupan masyarakat di era digital ini. Dengan layanan top up kami yang cepat dan aman, kami memberi solusi praktis untuk kebutuhan transaksi kamu kapan saja dan dimana saja loh!</h5>
  </ul>
  <div class="card-body">
    
  

  </div>
  <div class="card-footer text-muted">
  </div>
</div>
<div>
  <hr>
  <br>
  <div>
    <h4 class="card-title">Visi Kami</h4>
    <h5 class="card-subtitle mb-2 text-muted">Menjadi platform yang terpercaya yang menyediakan topup pulsa maupun e-wallet dengan proses yang cepat, aman , dan mudah. Memfasilitasi gaya hidup digital pada zaman sekarang agar lebih efisien</h5>
    <hr>
    <h4 class="card-title">Misi Kami</h4>
    <h5 class="card-subtitle mb-2 text-muted">Kami berkomitmen untuk menyediakan layanan topup yang tidak hanya mengutamakan kecepatan, tetapi juga keamanaan transaksi,  dan memberikan pengalaman yang menyenangkan bagi setiap pengguna kami</h5>
    
  </div>
</div>




<hr>

<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" fdprocessedid="7wkfj">
  TOP UP here
</button>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">topup</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      silahkan klik untuk pengisian e-wallet ataupun pulsa anda!
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        click here!
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="topup.php">TopUp E-wallet</a></li>
        <li><a class="dropdown-item" href="pulsa.php">TopUp pulsa</a></li>
      </ul>
    </div>
  </div>
</div>

<hr>
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout" align="right"><a class="btn btn-secondary mx-2"  >LOG OUT</a></button>
        
    </form>



    

    <?php include "layout/footer.html" ?>
</body>
</html>