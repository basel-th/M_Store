<?php

  // SRTAT SESSION FOR LOGOUT BY BASEL   

    session_start();

      $_SESSION['user']='';

    session_destroy();

      header("Location:index.php");

   
?>
