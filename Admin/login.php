<?php include'../inc/db.php'; ?>

 <?php
                 if(isset($_POST['singin'])){

                  $user=$_POST['name'];
                  $pass=$_POST['password'];

                  if(empty($user)||empty($user))
                  {
                      $message ="Please Full All Filed";
                  
                  }else
                  
                  { 
                    $sql="SELECT * FROM admin where username='$user' And  password ='$pass' ";
                    $ret=mysqli_query($con,$sql);
                    
                    while($res=mysqli_fetch_assoc($ret))
                    {
                        
                          $_SESSION['user']=$user;
                          echo"<script>window.location.href='index.php'</script>";
                     
                   
                    }


                  }
                
                 } else
                 {


                  $message="Your data is Incorrt";
                 
                
                }

                      ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>M_Store </title>
        <link rel='stylesheet' href='../css/style.css'>
        <link rel='stylesheet' href='../css/bootstrap.min.css'>

    </head>
    <body class="bg-dark " >


      <div class="container -lg  ">
        <div class="row">

        <div class="col-sm-6 offset-sm-3 bg-white border border-primary p-2 ">
        <div class="    ">
            <h3 class=" text-center p-3 bg-dark text-white" > Deshbored For Admin</h3>  
            
            <div class="col-sm-6 offset-sm-3   ">
             <h3 class="alert alert-WHITE   text-center"><?php echo @$message;?></h3>
            
            </div>
                <form action="" method="POST" class="  p-5 ">
                  <div class="row">

                      <div class="col-sm-6 offset-sm-6 ">
                                  
                      </div>
                      <div class="form-group  p-3">
                            <label> User Name: </label>
                            <input type="name" name="name" class="form-control" placeholder="Write Your Name">
                      </div>
                      
                      <div class="form-group p-3 ">
                            <label> Pssword </label>
                            <input type="password" name="password" class="form-control" placeholder="Write Your Password">
                      </div>

                      <div class="form-group  p-3">
                        <input type="submit" name="singin" value="Sing In" class="btn btn-outline-primary mt-3">
                      </div>
                  </div>
                </form>
                
                </div>
         </div>
      </div>

     

     

      

      <script src="js/bootstrap.min.js"></script>

</body>
</html>

