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

<script src="../validatadmin/validationhistogram16.js"></script>
</head>





<body >



<div  id="tdiv">

<table border="0" height="79%" width="100%" bordercolor="#0000FF" style="border-collapse:collapse;" cellspacing="0">







<tr>

<td >

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

  ?></td>





<td width="998"   height="600px" valign="top" bgcolor="#414141" style="padding:0px;">

<table style="border-collapse:collapse;" cellspacing="0"><tr><td width="927" height="80px" colspan="2" align="center" valign="middle">



 <div id="heading">Histogram  generation (16 bit)</div>

 </td>

</tr>

<tr><td align="center" style="padding:20px">


<table align="center">
<tr>
<td>

<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
An image histogram is a type of histogram that acts as a graphical representation of the tonal distribution in a digital image. It plots the number of pixels for each tonal value. By looking at the histogram for a specific image a viewer will be able to judge the entire tonal distribution at a glance.
Image histograms are present on many modern digital cameras. Photographers can use them as an aid to show the distribution of tones captured, and whether image detail has been lost to blown-out highlights or blacked-out shadows. This is less useful when using a raw image format, as the dynamic range of the displayed image may only be an approximation to that in the raw file.
The horizontal axis of the graph represents the tonal variations, while the vertical axis represents the number of pixels in that particular tone. The left side of the horizontal axis represents the black and dark areas, the middle represents medium grey and the right hand side represents light and pure white areas. The vertical axis represents the size of the area that is captured in each one of these zones. Thus, the histogram for a very dark image will have the majority of its data points on the left side and center of the graph. Conversely, the histogram for a very bright image with few dark areas and/or shadows will have most of its data points on the right side and center of the graph

</p>


<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">

<b>Image manipulation and histogram:</b>
Image editors typically have provisions to create a histogram of the image being edited. The histogram plots the number of pixels in the image (vertical axis) with a particular brightness value (horizontal axis). Algorithms in the digital editor allow the user to visually adjust the brightness value of each pixel and to dynamically display the results as adjustments are made. Improvements in picture brightness and contrast can thus be obtained.
In the field of computer vision, image histograms can be useful tools for thresholding. Because the information contained in the graph is a representation of pixel distribution as a function of tonal variation, image histograms can be analyzed for peaks and/or valleys. This threshold value can then be used for edge detection, image segmentation, and co-occurrence matrices.

</p>



</td>
</tr>

<tr>
<td>
<form name="addlogoimageform"  enctype="multipart/form-data" method="POST">
<table align="center" bgcolor="#DCE3E7" bordercolor="#95B0F2" border="1">
         
         
         
          <tr>
            <td height="34" colspan="2" align="center"><b>Upload  Tiff Image</b></td>
          </tr>
          
          <?php 
		     
			 if(isset($_REQUEST['error']))
			 {
		  ?>
          <tr><td colspan="2" align="center">
            <font color="#FF0000">
             <?php echo $_REQUEST['error']; ?>
             </font>
          </td>
          </tr>
          <?php
		   }
		   ?>
          <tr><td width="47%"  align="center" valign="middle" ><b>upload image</b></td>
	      <td width="53%"  align="left" valign="middle"><input name="fileToUpload" id="fileToUpload" type="file" /></td>
          </tr>
          <tr><td height="41" colspan="2" align="center"><input id="b" type="submit"  value="Upload"  onclick="return validateuploadlogo(addlogoimageform)"/></td>
          </tr>
          </table>
          </form>
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

