<?php
ob_start();
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
require_once("../dbconfig/connect.php");
 
 $userid=$_REQUEST['username'];
 $password=$_REQUEST['password'];
 $_SESSION['username']=$userid;
 
 $query1="SELECT * FROM users WHERE userid='$userid' AND password='$password'";
 $result1=mysql_query($query1);
 $row1=mysql_num_rows($result1);
 
 
  
  //echo $row1."____";
  //echo $row2."______";
   
if(!$row1)
   {
      header("Location:../index.php?error=invalid username or password");
   }
 else if($row1)
   {
     $_SESSION['admin']=$userid;
     header("Location:../admin/adminindex.php");
   }
  
  
 
 
 
?>

</body>
</html>
