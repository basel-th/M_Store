<?php



include'inc/header.php';
$id=$_GET['id'];
$sql="select * from eqution where id='$id'";
$ret=mysqli_query($con,$sql);
while($res=mysqli_fetch_assoc($ret)){
    
    $number=$res['id'];
    $user=$res['username'];
    $eqution=$res['ask'];
    

?>



<?php 
             if(isset($_POST['answer']))
             
             {
              $name=$_POST['name'];
              $ask=$_POST['ask'];
              $answer=$_POST['anwser'];
             

              if(empty($answer))
              {


                  echo"<p>Please Full All Filed</p>";
              
              }
              else{
             
                  $sql="UPDATE `eqution` SET `answer`='$answer' WHERE id='$id'";
                  $ret=mysqli_query($con,$sql);
                  if($ret){
                
                    echo"<p class='text-white'>  <i class='fas fa-check-circle  text-success'> </i>  Eqution Has Been answered </p> ";
                    echo"<script>window.location.href='eqation.php?id=".$id."'</script>";
                     
                  }

                }
            }}
            
           ?>

          <br><br><br><br>
                        
          <div class="col-sm-6 offset-sm-3 border p-3 bg-white  mt-5">
          <h3 class=" text-center p-3 bg-primary text-white" > Answer The Eqution </h3>  
            <div class="col-sm-6 offset-sm-3   ">

            </div>

          <form  method="POST" action=""    >

            <div class="mb-3 ">
              <label > </label>
              <textarea   name="anwser" class="form-control"  ></textarea>
            </div>
            
            <input type="submit"  name="answer" class="btn btn-success" value="Send"/>
          </form>
          
          </div>
                  
        
          <?php include'inc/footer.php'?>