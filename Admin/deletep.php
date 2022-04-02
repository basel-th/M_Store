<?php

include'../inc/db.php';
$id=$_GET['id'];
$sql="delete from items1 where id='$id'";
$ret=mysqli_query($con,$sql);
    if($ret){
    header('location:delet.php');    
    }

?>
