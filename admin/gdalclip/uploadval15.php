<?php
     ob_start();
     session_start();
?>
<?php
  if(!isset($_SESSION['admin']))
    {
	  header("Location:../index.php"  );
	} 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Application Area</title>

<style type="text/css">

<!--

/*body {

	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;

	background: #Ffffff;

	margin: 0;

	padding: 0;

	color: #000;

	width:100%;

	

}

*/

/* a:hover,a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */

	

	/*color:#C00;

	 text-decoration:underline; */

/*	border-bottom-color: green;

}

*/



/* ~~ this fixed width container surrounds all other elements ~~ */











-->

</style>



<link href="menuvertical.css" rel="stylesheet" type="text/css" />

<link href="csshome.css" rel="stylesheet" type="text/css" />

<link href="cssheading.css" rel="stylesheet" type="text/css" />

<script src="menu-vertical.js" type="text/javascript"></script>

<script src="../validatadmin/validationgdalclip2.js"></script>
</head>





<body >



<div  id="tdiv">

<table border="0" height="79%" width="100%" bordercolor="#0000FF" style="border-collapse:collapse;" cellspacing="0">

<tr>
  <td>

  <?php

    include "../menu.php";

   ?>

  </td>

</tr>



<tr>

	<td height="855px" style="" valign="top" >
		<table width="100%"  border="0" style="border-collapse:collapse;" cellspacing="0">

			<tr>

				<td width="250" height="855px" style="border-right:#faaf00 solid 3px;margin-top:50px;"   align="center" valign="top" bgcolor="#414141">

 <?php

  include "../rightmenu.php";

  ?>
  				</td>





				<td width="998"   height="600px" valign="top" bgcolor="#414141" style="padding:0px;">

					<table style="border-collapse:collapse;" cellspacing="0"><tr><td width="927" height="80px" colspan="2" align="center" valign="middle">

						 <div id="heading">Clip raster using shape file</div>
                    
 				</td>

</tr>

<tr><td align="center" style="padding:20px">


<table align="center">
<tr>
<td>

<!--   content... -->
<?php
$valid_formats = array("shp", "dbf", "prj", "sbn", "sbx","shx");
$max_file_size = 1024*100; //100 kb
$path = "uploads/"; // Upload directory
$count = 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
	// Loop $_FILES to exeicute all files
	foreach ($_FILES['files']['name'] as $f => $name1) { 
          $var[] = explode('.',$name1);
		  $name='b.'.$var[$count][1];
		
	    if ($_FILES['files']['error'][$f] == 4) 
		{
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) 
		{	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) 
			{
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) )
			{
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else
			{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
	            $count++; // Number of successfully uploaded file
	        }
	    }
	}

}
?>








<a href="../gdalclip/startpyfile14.php"><p align='center' style='color:#FFFFFF;'>click here visit a another page where image can be manipulated 1</p></a>


</td>
</tr>


</table>
</td>

</tr>

</table>  

  

</td>

  

  

</tr>

</table>



 

  

  <!-- right panel for content -->

   

  





</td>



</tr>

<tr>

<td height="3px"><div  style="width:100%; height:3px;background-color:#faaa00; margin-top:0px;">

</div>

</td>

</tr>

<tr >

<td align="center" bgcolor="#FFFFFF">

<?php



 include "../footer.php";

?>

        



</td>

</tr>



</table>

</div>






   

</body>

</html>

