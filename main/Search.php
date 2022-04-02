<!-- STRAT MAIN SREACH PAGE BY BASEL AHMED -->

<?php include"../inc/header.php";  ?>

    <?php

          $searchArea =$_GET['searchArea'];
          $sql="select * from items1 where Name like  '%$searchArea%' ";
          $ret=mysqli_query($con,$sql);
              while($res=mysqli_fetch_assoc($ret))
              {

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


<?php include"../inc/footer.php"; ?>
