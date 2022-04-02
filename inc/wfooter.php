<?php include'inc/db.php'; ?>

     
        
</div>
      </div>

      <div class="footer">
        <div class="col-lg-6">
        <form action="" method="POST" class="  p-5 ">
          <div class="row">

              <div class="col-sm-6 offset-sm-6">
                                   
              </div>
              <div class="form-group text-white p-1">
                    <label><i class="fas fa-user text-info"> </i> <span class=" text-white  ">   User  Name </span></label>
                    <input type="name" name="name" class="form-control" placeholder="Write Your Name" value="<?php echo $fullname;?>">
              </div>
             
              <div class="form-group p-1 text-white">
                    <label>  <i class="fas fa-question-circle  text-info"> </i> <span class=" text-white  "> Ask </span></label>
                    <textarea  name="ask" class="form-control" placeholder="Write Your Eqution" rows="4" ></textarea>
                  </div>
              
              <div class="form-group  p-1">
                <input type="submit" name="singin" value="Sing In" class="btn btn-outline-primary mt-3">

                    <?php

                          if(isset($_POST['singin']))
                          {

                                $user=$_POST['name'];
                                $ask=$_POST['ask'];
                                if(empty($user)||empty($ask))
                                {
                                  echo"<p class='text-white'>  <i class='fas fa-exclamation-circle  text-danger'> </i> Please  Full All Fileds  </p> ";

                                } else
                                {

                                  $sql="insert into eqution(username,ask)values('$user','$ask')  ";
                                  $ret=mysqli_query($con,$sql);
                                    
                                  if($ret)
                                  {
                                      echo"<p class='text-white'>  <i class='fas fa-check-circle  text-success'> </i> Thank You Your Eqution Has Been Asked Wait For Answer </p> ";
                                      
                                  }

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

      <script src="js/bootstrap.min.js"></script>

</body>
</html>

