<?php 

  include'../inc/db.php';

  if(!isset($_SESSION['user']))
      {
            header("location:".'login.php');
      } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deshbored </title>
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-beta3-web/css/all.css">
     <link rel="stylesheet" href="../fontawesome-free-6.0.0-beta3-web/css/v4-shims.css">
    
    <link rel='stylesheet' href='../css/bootstrap.min.css'>
    <link rel='stylesheet' href='../css/style3.css'>
    

</head>
<body  class="bg-light">

<nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
        <div class="container-fluid">
       <a class="navbar-brand" href="#">  Admin Page </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
              </li>

             
             
             
            
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logout.php">Log out</a>
              </li>
              
            </ul>
          
          </div>
        </div>
      </nav>


      <nav class="navbar navbar-dark bg-dark fixed-top ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"> <i class="fas fa-user-cog    fa-3x">  </i>  <span> Admin </span>  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header ">
        <h2 class="offcanvas-title  " id="offcanvasNavbarLabel">  <i class="fas fa-user-cog fa-2x"></i> Admin</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-dark">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"> <i class="fas fa-chart-line   fa-2x text-danger">  </i> <span class="text-white"> Dashbored </span> </a>
          </li>

          <li>
                    <hr class="divider ">
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="addprou.php"> <i class="fas fa-plus-square fa-2x  ">   </i><span class="text-white"> Add  New</span> </a>
          </li>

          <li>
                <hr class="divider ">
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="items.php"> <i class="fas fa-list fa-2x text-info"> </i> <span class="text-white"> Items</span> </a>
          </li>

          <li>
                <hr class="divider ">
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php"> <i class="fas fa-eye fa-2x ">  </i> <span class="text-white"> Veiw Website</span></a>
          </li>



          <li>
              <hr class="divider ">
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="eqation.php"> <i class="fas fa-question-circle  fa-2x text-success"> </i> <span class="text-white"> Eqution</span>  </a>
          </li>

          <li>
                <hr class="divider ">
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="edit.php"> <i class="fas fa-edit fa-2x text-info"> </i>  <span class="text-white"> Edit</span> </a>
          </li>

          <li>
                <hr class="divider ">
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="delet.php"> <i class="fas fa-trash-alt fa-2x text-danger">  </i> <span class="text-white"> Delete</span></a>
          </li>

          <li>
            <hr class="divider ">
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout.php"> <i class="fas fa-sign-out-alt fa-2x "> </i> <span> Log out </span> </a>
          </li>
               </div>
    </div>
  </div>
</nav>

      
<div class="container ">
        <div class="row">