<?php

  $con=mysqli_connect("localhost","root","","m_store");

  if(!$con)
  {

     echo"fialed connected";

  }
  
  @session_start();
  
?>



