<?php include'inc/header.php';?>

<div class="container">

          <table class="table  table-hover text-center table table-bordered border-dark  bg-white mt-5">
              <tr class="table-dark" >
                  <td>#</td>
                  <td><i class="fas fa-user-circle  fa-2x"></i></td>
                  <td> <i class="fas fa-question-circle   fa-2x"></i></td>
                  <td><i class="fas fa-comment-dots fa-2x"> </i></td>
                 
              </tr>
                    <?php   
                            $x=1; 
                            $sql="select * from eqution";
                            $ret=mysqli_query($con,$sql);
                            while($res=mysqli_fetch_assoc($ret)){
                                echo'<tr>
                                        <td>'.$x.'</td>
                                        <td>'.$res['username'].'</td>
                                        <td>'.$res['ask'].'</td>
                                        ';?>
                                        <td> <a type="button" href="answer.php?id=<?php echo $res['id']?>"class="btn btn-success">Answer</a></td>
                                        <?php
                                        echo'</tr>';
                                        $x++;
                            }
                    ?>
          </table>  
          
  </div>      
      
    <?php include'inc/footer.php';?>