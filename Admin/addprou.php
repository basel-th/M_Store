<?php include'inc/header.php';?>


<?php 
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

                $uploaddir="../images/";
                $uploadfile=$uploaddir.basename($_FILES['img']['name']);

                if(move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile)){
                  $sql="insert into items1(Name,price,descrip,img,category)values('$name','$price','$descip','$img','$cat')";
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
      
           ?>

                        
     <div class="col-sm-6 offset-sm-3 border border-dark p-3  mt-5 bg-white ">

        <h2 class=" text-center p-3 bg-dark text-white" > Dashbored For Admin</h2>  

          <div class="col-sm-6 offset-sm-3   ">
            <h3 class="alert alert-WHITE  text-center"><?php echo @$message;?></h3>

          </div>

          <form  method="POST" action="" enctype="multipart/form-data"   >

              <div class="mb-3 ">
                  <label class="lg" >Nmae Of Proudect:</label>
                  <input type="text" name="name" class="form-control  " placeholder="Write Name Of Product" >
              </div>

              <div class="mb-3 ">
                <label >Price Of Proudect:</label>
                <input type="text"  name="price" class="form-control" placeholder="Write Price Of Product">
              
              </div>

              <div class="mb-3 ">
                <label >Type Of Proudect:</label>
                <select name="cat">
                <option value="Sone">Sone<option>
                <option value="Samsung">Samsung<option>
                <option value="iphone">iphone<option>

                </select>
              </div>


              <div class="mb-3 ">
                <label >Description Of Proudect:</label>
                <textarea   name="describe" class="form-control" placeholder="Write Description Of Product" ></textarea>
              </div>

              <div class="mb-3 ">
                <label >Picture Of Proudect:</label>
                <input type="file"  name="img" class="form-control">
              </div>
            
            <input type="submit"  name="Add" class="btn btn-primary" value="Add"/>
          </form>

      </div>
                  
        
          <?php include'inc/footer.php'?>