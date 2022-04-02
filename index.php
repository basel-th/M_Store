<!-- START MAIN PAGE BY BASEL AHMED -->
  
<?php  include'inc/db.php'; ?>


<!-- STARAT HTML PAGE BY BASEL AHMED -->
<!DOCTYPE html>

  <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>M_Store </title>
              <link rel="stylesheet" href="fontawesome-free-6.0.0-beta3-web/css/all.css">
              <link rel="stylesheet" href="fontawesome-free-6.0.0-beta3-web/css/v4-shims.css">
              <link rel='stylesheet' href='css/bootstrap.min.css'>
              <link rel='stylesheet' href='css/style3.css'>
          </head>

          <body>

          <!-- STRAT NAV BY BASEL AHMED -->
          
              <nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark">

                    <div class="container-fluid">

                      <a class="navbar-brand" href="#"> <i class="fas fa-store-alt fa-2x text-info"></i> <span> MyStore </span> </a>

                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">   <i class="fas fa-home fa-2x text-white"></i> <span> Home </span> </a>
                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Devices
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item " href="main/Sone.php">Sone</a></li>
                              <li><a class="dropdown-item" href="main/Samsung.php">Samsung</a></li>
                              <li><a class="dropdown-item" href="main/iphone.php">iphone</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="index.php">All Devices</a></li>
                            </ul>

                          </li>

                          <li class="nav-item d-flexd ">
                            <a class="nav-link active " aria-current="page" href="regist.php"> <span>Sing in</span> </a>
                          </li>
                          
                        </ul>

                          <form class="d-flex" action="main/search.php" method="get" >
                          <input class="form-control me-2"  name="searchArea" type="search" placeholder="Write Name Of Device..." aria-label="Search">
                          <button class="btn btn-outline-primary"  name="search" type="submit"> <i class="fas fa-search "></i></button>
                        
                        </form>
                      </div>
                    </div>
                  </nav>
                  
          <!-- END NAV BY BASEL AHMED -->

          <!-- START CONTAINER BY BASEL AHMED -->

              <div class="container -lg mt-5">
                <div class="row">
                
                      <?php

                           // STATRT QUEARY FOR DISOLAY DATA FROM DATABASE BY BASEL AHMED

                              $sql='select * from items1 ';
                              $ret=mysqli_query($con,$sql);
                                  while($res=mysqli_fetch_assoc($ret))
                                  {
                                      echo'
                                      <div class="col-lg-4 col-sm-12  m ">
                                        <p>'.$res['Name'].'</p>
                                        <div class="thumbanil">
                                        <img src="images/'.$res['img'].'">
                                        <hr>';?>
                                        <p> <a  class="btn btn-light" href="showmore.php?id=<?php echo $res['id']?>"><button class="btn btn-outline-primary" > Detalis of Device</button></a></p>
                                        <?php echo'</div>
                                      </div>';
                                  }

                            // END QUREAY FOR DISPALY DATA FROM DATABASE BY BASEL AHMED  
                      ?>
                
                       
                </div>
              </div>

          <!-- END CONTAINER BY BASEL AHMED --> 

          <!-- STRAT FOOTER BY BASEL AHMED -->

              <div class="footer">
                <div class="col-lg-6">

                <form action="" method="POST" class="  p-5 ">
                  <div class="row">

                      <div class="col-sm-6 offset-sm-6">
                                          
                      </div>
                      <div class="form-group text-white p-1">
                            <label><i class="fas fa-user text-info"></i> <span> User Name  </span> </label>
                            <input type="name" name="name" class="form-control" placeholder="Write Your Name">
                      </div>

                      <div class="form-group text-white p-1 ">
                            <label> <i class="fas fa-envelope text-info"></i> Email </label>
                            <input type="email" name="email" class="form-control" placeholder="Write Your Eamil">
                      </div>

                      <div class="form-group p-1 text-white">
                            <label>  <i class="fas fa-lock text-info"></i> Pssword </label>
                            <input type="password" name="password" class="form-control" placeholder="Write Your Password">
                      </div>

                      <div class="form-group  p-1">
                        <input type="submit" name="singin" value="Sing In" class="btn btn-outline-primary mt-3">

                        <?php

                            if(isset($_POST['singin']))
                              {
                                  $user=$_POST['name'];
                                  $pass=$_POST['password'];
                                  $sql="SELECT * FROM users where username='$user' And  password='$pass' ";
                                  $ret=mysqli_query($con,$sql);
                                    while($res=mysqli_fetch_assoc($ret))
                                    {
                                      $_SESSION['user']=$user;
                                      echo"<script>window.location.href='wlcome.php'</script>";
                                     // header("Location:user/wlcome.php");
                                    }
                              }
                              ?>
                      </div>
                  </div>
                </form>
              
                    <div class="text-white foot">
                      <p>
                           <i class="fas fa-envelope  fa-1x text-info"> </i>   <span class=" text-white  "> Baselahmed856@gmial.com  </span><br>
                           <i class="fas fa-mobile-alt fa-1x text-info"> </i> <span class=" text-white  ">   +967773216193 </span> <br>
                           <i class="fas fa-map-marker-alt  fa-1x text-info"> </i>  <span class=" text-white  "> Aden - Yemen </span> <br>
                      </p>
                      <i class="fas fa-code fa-1x text-info">  </i>  <span class=" text-white  ">  Copyright &copy;   2021   BASEL   AL-QRUPEAY </span>
                    </div>
                    
                </div>

               
                
              </div>  

          <!-- END FOOTER BY BASEL AHMED -->    

      <script src="js/bootstrap.min.js"></script>

</body>
</html>

<!-- END HTML PAGE BY BASEL AHMED -->

