<?php ob_start();

  session_start();
  session_destroy();
  unset($_REQUEST['username']);
   header("location:../index.php");
?>