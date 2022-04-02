<?php include'../inc/db.php'; ?>

     
</div>
      </div>

      <div class="footer">
        <div class="col-lg-6">


        <form action="" method="POST" class="  p-5 ">
          <div class="row">
              <div class="col-sm-6 offset-sm-6">
              </div>
              <div class="form-group text-white p-1">
                    <label><i class="fas fa-user text-info"></i> User Name  </label>
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

                      if(isset($_POST['singin'])){

                        $user=$_POST['name'];
                        $pass=$_POST['password'];
                        $sql="SELECT * FROM users where username='$user' And  password='$pass' ";
                        $ret=mysqli_query($con,$sql);
                        
                            while($res=mysqli_fetch_assoc($ret))
                            {
                                    print_r($res);
                                // echo"<meta  http-equiv='refresh'  content=' 3; url='addprou.php''/>";
                                
                                $_SESSION['user']=$user;
                                echo"<script>window.location.href='../wlcome.php'</script>";
                              
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
                      <i class="fas fa-code fa-1x text-info">  </i><span class=" text-white  ">  CopyRight &copy;   2021   BASEL   AL-QRUPEAY </span>
                    
        </div>
        </div>
        
      </div>  

      <script src="../js/bootstrap.min.js"></script>

</body>
</html>

