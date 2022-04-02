<?php include'../inc/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>M_Store </title>
        <link rel="stylesheet" href="../fontawesome-free-6.0.0-beta3-web/css/all.css">
        <link rel="stylesheet" href="../fontawesome-free-6.0.0-beta3-web/css/v4-shims.css">
        <link rel='stylesheet' href='../css/bootstrap.min.css'>
        <link rel='stylesheet' href='../css/style3.css'>

    </head>
    <body>

      <nav class="navbar navbar-expand-lg   navbar-dark bg-dark">

              <div class="container-fluid">
                
                <a class="navbar-brand" href="#"> <i class="fas fa-store-alt fa-2x text-info"></i> <span>MyStore</span> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="../index.php">   <i class="fas fa-home fa-2x text-white"></i> <span> Home </span> </a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Devices
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item " href="../main/Sone.php">Sone</a></li>
                        <li><a class="dropdown-item" href="../main/Samsung.php">Samsung</a></li>
                        <li><a class="dropdown-item" href="../main/iphone.php">iphone</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../index.php">All Devices</a></li>
                      </ul>
                    </li>

                    <li class="nav-item d-flexd ">
                      <a class="nav-link active " aria-current="page" href="../regist.php">  <span> Sing in </span></a>
                    </li>

                  </ul>
                  
                    <form class="d-flex" action="search.php" method="get" >
                    <input class="form-control me-2"  name="searchArea" type="search" placeholder="Write Name Of Device..." aria-label="Search">
                    <button class="btn btn-outline-primary"  name="search" type="submit"> <i class="fas fa-search "></i></button>

                  </form>
                </div>
              </div>
       </nav>

            <div class="container -lg mb-5">
              <div class="row">
