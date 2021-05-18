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

<script src="../validatadmin/validation.js"></script>
</head>





<body >



<div  id="tdiv">

<table border="0" height="79%" width="100%" bordercolor="#0000FF" style="border-collapse:collapse;" cellspacing="0">

<tr>
  <td>

  <?php

    include "menu.php";

   ?>

  </td>

</tr>



<tr>

	<td height="855px" style="" valign="top" >
		<table width="100%"  border="0" style="border-collapse:collapse;" cellspacing="0">

			<tr>

				<td width="250" height="855px" style="border-right:#faaf00 solid 3px;margin-top:50px;"   align="center" valign="top" bgcolor="#414141">

 <?php

  include "rightmenu.php";

  ?>
  				</td>





				<td width="998"   height="600px" valign="top" bgcolor="#414141" style="padding:0px;">

					<table style="border-collapse:collapse;" cellspacing="0"><tr><td width="927" height="80px" colspan="2" align="center" valign="middle">

						 <div id="heading">Sobel Operator</div>
                    
 				</td>

</tr>

<tr><td align="center" style="padding:20px">


<table align="center">
<tr>
<td>

<!--   content... -->

<?php
$target_dir = "a";
$target_file = $target_dir. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);//die;
// Check if image file is a actual image or fake image

//if(isset($_POST["submit"])) {
  /*  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
*/
// Check file size


if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "<p align='center' style='color:#FFFFFF;'>"."Sorry, your file is too large."."</p>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "tif" && $imageFileType != "tiff"  ) {
    echo "<p align='center' style='color:#FFFFFF;'>"."Sorry, only tif & tiff files are allowed."."</p>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<p align='center' style='color:#FFFFFF;'>"."Sorry, your file was not uploaded."."</p>";
// if everything is ok, try to upload file
} else {
	
	
	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "a.tif")) {
        echo "<p align='center' style='color:#FFFFFF;'>"."The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded"."</p>";
    } else {
        echo "<p align='center' style='color:#FFFFFF;'>"."Sorry, there was an error uploading your file."."</p>";
    }
	
}
//}
?>


<a href="startpyfile5.php"><p align='center' style='color:#FFFFFF;'>click here visit a another page where image can be manipulated 1</p></a>


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



 include "footer.php";

?>

        



</td>

</tr>



</table>

</div>






   

</body>

</html>

