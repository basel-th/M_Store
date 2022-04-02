
 <?php include'inc/header.php' ;?>

 <div class="container mt-5">

 <div class="row">

<div class="col-sm-6">
    <div class="card text-white bg-dark  mb-1 border-dark  " style=" max-width: 33rem; margin: 40px auto;   ">
            <div class=""  style=" text-align: center; color:#ffffff;"> 
                    <span style="font-size: 45px;font-weight: bold;padding:5px; " >Swammung </span>
            </div>
            <hr class="divider bg-white ">
            <div class="card-body">
                <?php
                  $result=mysqli_query($con,'select * from items1 where category="samsung" ');
                  $row = mysqli_num_rows($result);
                ?>
              <h1  class="" style="font-size:100px;text-align: center;color:#ffffff;">  <?php echo $row;?> </h1>
            </div>
    </div>
</div>
   
 
<div class="col-sm-6">
    <div class="card text-white bg-dark mb-1 offset-xl-1 border-dark " style="max-width: 33rem; margin: 40px auto;">

        <div class=""  style="text-align: center; color:#ffffff;">

        <span style="font-size: 45px;font-weight: bold;" > Iphone </span>
        </div>

        <hr class="divider bg-white ">
        <div class="card-body">
          <?php
            $result=mysqli_query($con,'select * from items1 where category="Iphone" ');
            $row = mysqli_num_rows($result);
          ?>

        <h1  class="" style="font-size: 100px; text-align: center;color:#ffffff;">
        
          <?php  echo $row;?>

        </h1>
      </div>
    </div>
</div>

<div class="col-sm-6">

    <div class="card text-white bg-dark  mb-1 border-dark " style="max-width: 33rem;margin: 40px auto;">

    <div class=""  style=" text-align: center;  color:#ffffff;">
      <span style="font-size: 45px;font-weight: bold;" > Sone </span>
      
    </div>

      <hr class="divider bg-white ">
      <div class="card-body">
      
      <?php
        $result=mysqli_query($con,'select * from items1 where category="Sone" ');
        $row = mysqli_num_rows($result);
      ?>
      <h1 class="" style=" font-size: 100px;text-align: center; color:#ffffff;">
      
      <?php echo $row;?></h1>

    </div>
    </div>
</div>

<div class="col-sm-6">

<div class="card text-white bg-dark  mb-1 offset-xl-1 border-dark" style="max-width: 33rem;margin: 40px auto;">
  <div class=""  style=" text-align: center; color:#ffffff;">
    
     <span style="font-size:45px;font-weight: bold;" >All Divices </span>

 </div>

  <hr class="divider bg-white ">
  <div class="card-body">
  <?php
    $result=mysqli_query($con,'select * from items1 ');
    $row = mysqli_num_rows($result);
  ?>
  <h1  class="" style=" font-size:100px;text-align: center;  color:#ffffff;">
  <?php echo $row;?></h1>
</div>
</div>
</div>


</div>



 
 </div>
 
<?php include'inc/footer.php' ;?>
