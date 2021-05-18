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

<script src="../validatadmin/validationrender.js"></script>
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



 <div id="heading">render technique</div>

 </td>

</tr>

<tr><td align="center" style="padding:20px">


<table align="center">
<tr>
<td>

<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
The Canny edge detector is an edge detection operator that uses a multi-stage algorithm to detect a wide range of edges in images. It was developed by John F. Canny in 1986. Canny also produced a computational theory of edge detection explaining why the technique works.
</p>


<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">

<b>PROCESS OF CANNY EDGE DETECTION ALGORITHM:</b>
The Process of Canny edge recognition calculation can be separated to 5 distinctive steps: 
1. Apply Gaussian channel to smooth the picture so as to expel the commotion 
2. Find the power slopes of the picture 
3. Apply non-most extreme concealment to dispose of spurious reaction to edge identification 
4. Apply twofold limit to decide potential edges 
5. Track edge by hysteresis: Finalize the recognition of edges by stifling the various edges that are powerless and not associated with solid edges.
</p>

<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">

<b>Gaussian filter:</b>
The image after a 5×5 Gaussian mask has been passed across each pixel.
Since all edge identification results are effectively influenced by picture commotion, it is crucial to sift through the clamor to avert false recognition brought on by commotion. To smooth the picture, a Gaussian channel is connected to convolve with the picture. This stride will somewhat smooth the picture to diminish the impacts of evident commotion on the edge detector. The equation for a Gaussian filter kernel of size (2k+1) × (2k+1) is given by:

</p>
<p align="center"><img src="cannytheory1.jpg" width="600" height="36"></p>
<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
Here is an example of a 5×5 Gaussian filter, used to create the image to the right, with \sigma = 1.4. (The asterisk denotes a convolution operation.)

</p>
<p align="center"><img src="cannytheory2.jpg" width="253" height="67"></p>

<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
Understand that the determination of the extent of the Gaussian kernel will influence the execution of the detector. The bigger the size is, the lower the identifier's affectability to commotion. Also, the confinement mistake to distinguish the edge will marginally increment with the expansion of the Gaussian channel bit size. A 5×5 is a decent size for most cases; however this will likewise differ contingent upon particular circumstances.
</p>
<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">

<b>Finding the intensity gradient of the image:</b>
An edge in a picture may point in an assortment of bearings, so the Canny calculation utilizes four channels to identify level, vertical and askew edges in the obscured picture. The edge detection operator (Roberts, Prewitt, Sobel for instance) gives back a quality for the main subsidiary in the level course (Gx) and the vertical heading (Gy). From this the edge inclination and heading can be resolved:

</p>
<p align="center"><img src="cannytheory3.jpg" width="191" height="46">
</p>
<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
Where G can be computed using the hypot function and atan2 is the arctangent function with two arguments. The edge direction angle is rounded to one of four angles representing vertical, horizontal and the two diagonals (0°, 45°, 90° and 135° for example). An edge direction falling in each color region will be set to a specific angle values, for example alpha lying in yellow region (0° to 22.5° and 157.5° to 180°) will be set to 0°.
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

