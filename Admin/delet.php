<?php include'inc/header.php'; ?>

<div class="contanier">
     
          <table class="table  table-hover text-center table table-bordered border-dark bg-white mt-5">
              <tr class="table-dark" >
                  <td>#</td>
                  <td><i class="fas fa-mobile-alt fa-2x "></i></td>
                  <td><i class="fas fa-comment-dollar fa-2x "></i></td>
                  <td><i class="fas fa-comment-dots fa-2x"> </i></td>
                  <td><i class="fas fa-trash-alt fa-2x"></i></td>
              </tr>

              <?php
              $x=1;
              $sql="select * from items1";
              $ret=mysqli_query($con,$sql);
                    while($res=mysqli_fetch_assoc($ret)){
                        echo'<tr>
                                <td>'.$x.'</td>
                                <td>'.$res['Name'].'</td>
                                <td>'.$res['price'].'</td>
                                <td>'.$res['descrip'].'</td>';
                                ?>
                                <td> <a type="button" href="deletep.php?id=<?php echo $res['id']?>"class="btn btn-danger">Delete</a></td>
                                <?php
                                echo'</tr>';
                                $x++;
                    }
              ?>
            
          </table>  
          
 </div>
      
    <?php include'inc/footer.php';?>