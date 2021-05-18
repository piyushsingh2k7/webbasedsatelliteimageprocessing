<?php 
if($_SERVER['SERVER_NAME']=='localhost')
   { $server="localhost";
     $user="root";
     $password="";
     $database="isroproject";
   }
else
   {
    //$server="67.15.54.14";
	$server="66.36.243.221";
	//$server=$_SERVER['SERVER_NAME'];
     $user="root";
     $password="";
     $database="isroproject";
	}
$con=mysql_connect($server,$user,$password) or die("Mysql Database Not connected");
		
mysql_select_db($database,$con) or die ("Database Not selected");



/*
$query="select * from  courses";

$result=mysql_query($query);

while($row=mysql_fetch_array($result))
{
  echo $row[0]+"   "+$row[1];
}


/*
     $server="localhost";
     $user="itwhizki_admin";
     $password="it1whiz@123";
     $database="itwhizki_sdcc";
     echo $server."  checking1";
*/
?>