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

<script src="../validatadmin/validationgdalclip1.js"></script>
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



 <div id="heading">clip raster using shape files</div>

 </td>

</tr>

<tr><td align="center" style="padding:20px">


<table align="center">
<tr>
<td>

<p style="text-align: justify;text-justify: inter-word;color:#FFFFFF;">
In this section of task how to use several Python libraries to create a script which can take any polygon shape file and use it as a mask to clip a geospatial image.  Although I'm demonstrating a fairly basic process, this article and the accompanying sample script is densely-packed with lots of good information.  This tool will get you well on your way to doing whatever you want to do with Python and Remote Sensing.

Satellite and aerial images are usually collected in square tiles more or less the same way your digital camera frames and captures a picture.  Geospatial images are data capturing different wavelengths of light reflected from known points on the Earth or even other planets.  GIS professionals routinely clip these image tiles to a specific area of interest to provide context for vector layers within a GIS map.  This technique may also be used for remote sensing to narrow down image processing to specific areas to reduce the amount of time it takes to analyze the image.
To preserve area of interest on a particular satellite image we require georeferenced raster tiff file format image and we have to clip a newly generated as it is same georeferenced raster tiff image file from the previous one so that all the information regarding projection, coordinate, ellipsoids, datum’s, and everything else necessary to establish the exact spatial reference for the file must be preserved.
And to provide this clipping facility to everyone for free and to do so it require to be publish on the web pages and for publishing purpose html and php must work together with the python interpreter so that python codes which can able to clip that raster image according to the polygon shape file and that shape file must be passed to the python interpreter directly through the web pages and after generation of results it can be produced back to the  end user in the form of clipped georeferenced raster tiff file format without any loss of previous information. After finishing all the configuration process we should give more emphasis on the validation of the georeferenced image so that any unnecessary file will be filtered and cannot be uploaded to the web page to ensure algorithm will perform clipping operation correctly on the correct data set provided by the user. For validation purpose we should have to use scripting language php for as a validation technique to verify whether the file to be uploaded is of same file format or not and in the prescribed limit  so that server will not face any unresponsive breakage in the performance to handle the request send by the other user also.
The Process Clipping a raster is a series of simple button clicks in high-end geospatial software packages.  In terms of computing, geospatial images are actually very large, multi-dimensional arrays.  Remote Sensing at its simplest is performing mathematical operations on these arrays to extract information from the data. So for this reason I use the Python bindings for GDAL when dealing with geospatial raster data.  The other issue is the size of most geospatial raster data. .  Doing math on these images and the memory required to follow the six step process outlined above exceeds the capability of Python's native libraries in many instances.  For this reason I use the GDAL library which is dedicated to large satellite imagery.  I showed a pure-Python way to rasterize a shape file.  However I use subprocess python module to call it from the web browser to implement GDAL facility directly from the html pages because it provides convenient method to provide data for clipping.

</p>

<p align="center"><img src="gdalclipimg1.jpg" width="467" height="123"></p>
<p align="center">Aim to clip area of interest from satellite imagery using shape file. </p>

<p align="center"><img src="gdalimg2.jpg" width="612" height="443"></p>
<p align="center">GeoTIFF file uploaded as input for web processing. </p>

<p align="center"><img src="gdalimg3.jpg" width="526" height="250"></p>
<p align="center">Combined GeoTIFF image and shape file after overlapping on each other. </p>

<p align="center"><img src="gdalclip4.jpg" width="526" height="237"></p>

<p align="center">Output after implementation of clipping tool and will be available for download </p>



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

