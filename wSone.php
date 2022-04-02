<!-- STRAT SONE PAGE BY BASEL AHMED -->
  
<?php include'inc/wheader.php'; ?>

<?php

         $sql='select * from items1  where category="sone" ';
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
 ?>


<?php include'inc/wfooter.php'; ?>
