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

<script src="../validatadmin/validationgrayscale.js"></script>
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



 <div id="heading">Gray Scale Image</div>

 </td>

</tr>

<tr><td align="center" style="padding:20px">


<table align="center">
<tr>
<td>

<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
In photography and computing, a grayscale or greyscale digital picture is a picture in which the estimation of every pixel is a solitary example, that is, it conveys just force data. Pictures of this sort, otherwise called high contrast, are made only out of shades of dim, fluctuating from dark at the weakest power to white at the most grounded. 
Grayscale pictures are distinct from one-piece bi-tonal highly contrasting pictures, which with regards to PC imaging are pictures with just the two hues, dark, and white (likewise called bi-level or paired pictures). Grayscale pictures have numerous shades of dim in the middle. 
</p>
<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">Grayscale pictures are regularly the  consequence of measuring the force of light at every pixel in a solitary band  of the electromagnetic range (e.g. infrared, visible light, ultraviolet, and so  forth.), and in such cases they are monochromatic appropriate when just a given  recurrence is caught. In any case, likewise they can be combined from a full  shading picture; see the area about changing over to grayscale.<strong></strong></p>
<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">&nbsp;</p>


<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">

<b>CONVERTING COLOR TO GRAYSCALE</b>
Transformation of a shading picture to grayscale is not one of a kind; distinctive weighting of the shading channels successfully speak to the impact of shooting high contrast film with different-colored photographic filter on the cameras. Colorimetric (luminance-preserving) conversion to grayscale A common strategy is to use the principles of photometry or, more broadly, colorimetry to match the luminance of the grayscale image to the luminance of the original color image. [2][3] This also ensures that both images will have the same absolute luminance, as can be measured in its SI units of candelas per square meter, in any given area of the image, given equal white points. In addition, matching luminance provides matching perceptual lightness measures, such as L* (as in the 1976 CIE Lab color space) which is determined by the luminance Y (as in the CIE 1931 XYZ color space).To convert a color from a colorspace based on an RGB color model to a grayscale representation of its luminance, weighted sums must be calculated in a linear RGB space, that is, after the gamma compression function has been removed first via gamma expansion.
For the sRGB color space, gamma expansion is defined as

</p>
<p align="center"><img src="grayscaleimg1.jpg" width="406" height="94"></p>
<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">

Where Csrgb represents any of the three gamma-compressed Srgb primaries (Rsrgb, Gsrgb, and Bsrgb, each in range [0, 1]) and Clinear is the corresponding linear-intensity value (R, G, and B, also in range [0, 1]). Then, luminance is calculated as a weighted sum of the three linear-intensity values. The sRGB color space is defined in terms of the CIE 1931 linear luminance Y, which is given by

</p>
<p align="center"><img src="grayscaleimg2.jpg" width="312" height="35"></p>

<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
The coefficients represent the measured intensity perception of typical trichromat humans, depending on the primaries being used; in particular, human vision is most sensitive to green and least sensitive to blue. To encode grayscale intensity in linear RGB, each of the three primaries can be set to equal the calculated linear luminance Y (replacing R, G, B by Y, Y,Y to get this linear grayscale). Linear luminance typically needs to be gamma compressed to get back to a conventional non-linear representation. For sRGB, each of its three primaries is then set to the same gamma-compressed Ysrgb given by the inverse of the gamma expansion above as
<p align="center"><img src="grayscaleimg3.jpg" width="416" height="76"></p>

</p>
<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
In practice, because the three Srgb components are then equal, it is only necessary to store these values once in Srgb-compatible image formats that support a single-channel representation. Web browsers and other software that recognizes Srgb images will typically produce the same rendering for a grayscale image as it would for an Srgb image having the same values in all three color channels.
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

