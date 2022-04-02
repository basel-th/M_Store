
<!-- STRAT CONNECT WITH DATABASE BY BASEL  AHMED --> 

<?php  include'inc/db.php'; ?>

<?php
      // STRAT QUREAY FOR FETCH DATA FROM DATABASE 

          if($_SESSION['user'] =='')
              {
                header("Location:index.php");
              };

          $id=$_GET['id'];
          $sql="select * from items1 where id='$id'";
          $ret=mysqli_query($con,$sql);
              while($res=mysqli_fetch_assoc($ret)){

                  $name=$res['Name'];
                  $price=$res['price'];
                  $descip=$res['descrip'];
                  $pic =$res['img'];
                  $cat =$res['category'];
              } 

?>

<?php 

 // STRAT QUREAY FOR NAME OF USER DATA FROM DATABASE 

        if($_SESSION['user']!=''){

        $user=$_SESSION['user'];
        $sql="select fullname from users where username='$user'";
        $ret=mysqli_query($con,$sql);

            while($res=mysqli_fetch_assoc($ret)){

                $fullname=$res['fullname'];
            }
            }
            else{
              header("Location:index.php");
            }

?>
 
  <?php include"inc/wheader.php" ?>

<!-- START SHOW PAGE FOR DISPLAYY DETAILE ABOUT ITEMS -->

      <img src="images/<?php echo $pic ?>" style="padding: 23px 36%;  height: 550px; "/>
      <h1> <?php echo $name ?></h1>
      <h2>Model: <?php echo $cat ?></h2>
      <h3> Price: <?php echo $price ?>$</h3>
      <h4> About Item: <?php echo $descip ?></h4>

<!-- END SHOW PAGE FOR DISPLAYY DETAILE ABOUT ITEMS -->

  <?php include"inc/wfooter.php" ?>
      
    