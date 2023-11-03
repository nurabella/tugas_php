<?php

    include "../connection.php";

    $query = mysqli_query($connection, "SELECT * FROM anggota;")
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>
     <!--navbar-->
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9cdbd6;">
        <div class="container">
          <a class="navbar-brand" href="#">My Library</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href='anggota/anggota.php'>Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buku/buku.php">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaksi/transaksi.php">Transaksi</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>

    <!--akhir navbar-->

   <!--about-->
        <div class="container" style="height: 700px;" >
          <div class="row align-items-start text-start">
            <div class="col-md-6" style="padding-top: 120px;">
             <h1 class="fw-bold mt-5 fs-1 ">Welcome to My Library</h1>
              <p class= mt-5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button type="button" class="btn btn-primary ">Sign In</button>
                <button type="button" class="btn btn-secondary ">Sign Up</button>
            </div>                  
            <div class="col-md-6 mt-5 text-end py-3" >
               <img src="img/img.png" class="img-fluid" alt="img5">
            </div> 
          </div>

        </div>
    <!--akhir about-->

    <!--footer-->

    <footer class="text-center pb-2 pt-4" style="background-color: #9cdbd6; ">
      <p>Created by <a href="https//instagram.com" class="fw-bold" >Nura Bela</a></p>
    </footer>

    <!--akhir footer -->
   
</body>
</html>