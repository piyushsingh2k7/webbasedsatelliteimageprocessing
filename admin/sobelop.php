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



 <div id="heading">Sobel Operator</div>

 </td>

</tr>

<tr><td align="center" style="padding:20px">


<table align="center">
<tr>
<td>

<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
The Sobel operator, sometimes called the Sobel–Feldman operator or Sobel filter, is used in image processing and computer vision, particularly within edge detection algorithms where it creates an image emphasizing edges. It is named after Irwin Sobel and Gary Feldman, colleagues at the Stanford Artificial Intelligence Laboratory (SAIL). It was co-developed with Gary Feldman at SAIL. Sobel and Feldman presented the idea of an "Isotropic 3x3 Image Gradient Operator" at a talk at SAIL in 1968. [1] Technically, it is a discrete differentiation operator, computing an approximation of the gradient of the image intensity function. At each point in the image, the result of the Sobel–Feldman operator is either the corresponding gradient vector or the norm of this vector. The Sobel–Feldman operator is based on convolving the image with a small, separable, and integer-valued filter in the horizontal and vertical directions and is therefore relatively inexpensive in terms of computations. On the other hand, the gradient approximation that it produces is relatively crude, in particular for high-frequency variations in the image. 
</p>


<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">

<b>FORMULATION:</b>
The operator uses two 3×3 kernels which are convolved with the original image to calculate approximations of the derivatives - one for horizontal changes, and one for vertical. If we define A as the source image, and Gx and Gy are two images which at each point contain the horizontal and vertical derivative approximations respectively, the computations are as follows:

</p>

<p align="center">

<img src="untitled.jpg" width="539" height="68">

</p>
<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
Where * here denotes the 2-dimensional signal processing convolution operation.

Since the Sobel kernels can be decomposed as the products of an averaging and a differentiation kernel, they compute the gradient with smoothing. For example, mathbf{G_x} can be written as


</p>
<p align="center"><img src="sobeltheory2.jpg" width="310" height="54">
</p>

<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
The x-coordinate is defined here as increasing in the "right"-direction, and the y-coordinate is defined as increasing in the "down"-direction. At each point in the image, the resulting gradient approximations can be combined to give the gradient magnitude, using:
</p>

<p align="center"><img src="sobeltheory3.jpg" width="175" height="47">
</p>
<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
Using this information, we can also calculate the gradient's direction:
</p>
<p align="center"><img src="sobeltheory4.jpg" width="199" height="37">
</p>
<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
Where, for example, Θ is 0 for a vertical edge which is lighter on the right side.
</p>


</td>
</tr>

<tr>
<td>
<form name="addlogoimageform"  enctype="multipart/form-data" method="POST">
<table align="center" bgcolor="#DCE3E7" bordercolor="#95B0F2" border="1">
         
         
         
          <tr><td height="34" colspan="2" align="center"><b>Add Logo Image</b></td>
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

