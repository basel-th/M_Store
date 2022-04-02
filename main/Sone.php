<!-- STRAT  MAUN SONE PAGE  BY BASEL AHMED  -->

<?php include'../inc/header.php'; ?>

        <?php

         $sql='select * from items1 where category="sone" ';
         $ret=mysqli_query($con,$sql);
          while($res=mysqli_fetch_assoc($ret)){
              echo'
                <div class="col-lg-4 col-sm-12  m ">
                  <p>'.$res['Name'].'</p>
                  <div class="thumbanil">
                  <img src="../images/'.$res['img'].'">
                  <hr>
                  <p><button class="btn btn-outline-primary  ">Detalis of Device</button></p>
                  </div>
                </div>';
          }
        ?>


<?php include'../inc/footer.php';?>
