<?php

include'inc/header.php';
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
             if(isset($_POST['edit']))
             
             {
              $name=$_POST['name'];
              $price=$_POST['price'];
              $cat=$_POST['cat'];
              $descip=$_POST['describe'];
              $img=$_FILES['img']['name']; 
              $img_t=$_FILES['img']['tmp_name'];

              if(empty($name)||empty($price)||empty($descip))
              {


                  $message ="Please Full All Filed";
              
              }
              else{
              $uploaddir="../images/";
              $uploadfile=$uploaddir.basename($_FILES['img']['name']);
              if(move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile)){
                if($uploadfile==""){
                  echo"NOooooooo image";

                }else{
                  $sql="UPDATE `items1` SET `Name`='$name',`price`='$price',`descrip`='$descip',`img`='$img',`category`='$cat' WHERE id='$id'";
                  $ret=mysqli_query($con,$sql);
                  if($ret){
                
                    
                    echo"<script>window.location.href='editp.php?id=".$id."'</script>";
                      $message="Eidt success";
                  }

                }
               
              }
              else{

                $message="There is Rorro in Upload";
              }

              }
            }
         
              /*
              {
                          // HERE THERE IS PROBLEM CAN'T UPLOADE IMAGE
                $uploaddir="images/";
                $uploadfile=$uploaddir.basename($_FILES['img']['name']);
                if(move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile))
                {
                  
                    $sql="UPDATE `items` SET `name`='$name',`price`='$price',`descrip`='$descip',`img`='$uploadfile',`category`='$cat' WHERE id='$id'";
 
                    $ret=mysqli_query($con,$sql);
                    if($ret)
                    {
                  
                          $message="Eidt success";
                          echo"<script>window.location.href='editp.php?id=".$id."'</script>";
                    
                    }
                 
                }
                else
                   {
  
                    $message="There is Rorro in Upload";
                   }
  
                  }
              }
           */
           ?>



<?php /*
             if(isset($_POST['Add'])){
               
              $name=$_POST['name'];
              $price=$_POST['price'];
              $cat=$_POST['cat'];
              $descip=$_POST['describe'];
              $img=$_FILES['img']['name']; 
              $img_t=$_FILES['img']['tmp_name'];

              if(empty($name)||empty($price)||empty($descip)||empty($img))
              {


                  $message ="Please Full All Filed";
              
              }else{

              
                if(move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile)){
                  
                  $sql="insert into items(name,price,descrip,img,category)values('$name','$price','$descip','$img','$cat')";
                  $ret=mysqli_query($con,$sql);
                  if($ret){
                
                        $message="Add success";
                  }
                }
                else{
  
                  $message="There is Rorro in Upload";
                }
  
                }
              }
           */
           ?>

<div class="container mt-5 pt-5">

                        
          <div class="col-sm-6 offset-sm-3 border border-primary p-3 bg-white  ">
            <h3 class=" text-center p-3 bg-primary text-white" > Dashbored For Admin</h3>  

            <div class="col-sm-6 offset-sm-3   ">
             <h3 class="alert alert-WHITE  text-center"><?php echo @$message;?></h3>

            </div>

          <form  method="POST" action="" enctype="multipart/form-data"   >

          <div class="mb-3 ">
              <label class="lg" >Nmae Of Proudect:</label>
              <input type="text" name="name" class="form-control  " value="<?php echo $name; ?>" >
          </div>

            <div class="mb-3 ">
              <label >Price Of Proudect:</label>
              <input type="text"  name="price" class="form-control" value="<?php echo $price ;?>">
            
            </div>

            <div class="mb-3 ">
              <label >Type Of Proudect:</label>
              <select name="cat">
              <option value="<?php echo $cat; ?>"><?php echo $cat;?><option>
               <option value="Sone">Sone<option>
               <option value="Samsung">Samsung<option>
               <option value="iphone">iphone<option>

              </select>
            </div>


            <div class="mb-3 ">
              <label >Description Of Proudect:</label>
              <textarea   name="describe" class="form-control"  ><?php echo $descip ?></textarea>
            </div>

            <div class="mb-3 ">
              <label > Current Picture Of Proudect:</label><br>
            <img src="../images/<?php echo $pic ?>" style="padding: 23px 36%;  height: 250px;"/>
            </div>

            <div class="mb-3 ">
              <label >Picture Of Proudect:</label>
              <input type="file"  name="img" class="form-control">
            </div>
            
            <input type="submit"  name="edit" class="btn btn-success" value="Edit"/>
          </form>
          

          </div>
          </div>     
        
          <?php include'inc/footer.php'?>