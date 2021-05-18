<style>



#menu-v1, #menu-v1 ul

{   margin-top:0px;



    width: 197px; /* Main Menu Item widths */

   /* border-radius: 9px ; */

    /*border: 5px solid #Fc3  ; */

	   /* border-top:none; */

    position:static; font-size:0;

    margin-left:0; padding: 0px; display:block; 

	/* border:#000000 solid 1px; */

    z-index:1000;

	top:250px;

	color:#000000;

	

	

	

	/*border-bottom:#fc3 solid 1px;;

    border-top:#fc3 solid 1px;; */

}





#menu-v1 li

{

   /* background: #Fff url(bg.gif) repeat-x 0 2px; */

   /* list-style: none; */margin: 0px; padding: 0px;

    /*border-top:#fc3 solid 1px;

	border-bottom:#fc3 solid 1px;*/

   border:none;

   background-color:#414141;

   color:#FFFFFF;

   

	

	

}





#menu-v1 li a

{

    font:  15px Arial ;

    /* border-top: 1px solid #ccc; */

	font-weight:500;

    display: block;

    /*overflow: auto; force hasLayout in IE7 */

    /*color: #3A4698; */

	color:#FFFFFF;

    text-decoration: none;

    line-height:35px;

    /*padding-left:26px; */

	border:none;    

	text-align: center;

    display: block;

    margin: 0 auto;

	padding:3px;

	

}



#menu-v1 li a:hover

{

    font:  15px Arial ;

    /* border-top: 1px solid #ccc; */

	font-weight:500;

    display: block;

    /*overflow: auto; force hasLayout in IE7 */

    /*color: #3A4698; */

	color:#faaf00;

    text-decoration: none;

    line-height:35px;

    /*padding-left:26px; */

	border:none;    

	text-align: center;

    display: block;

    margin: 0 auto;

	padding:3px;

	/* background-color:#ffffff; */

	

}

#menu-v1 ul li a

{

    line-height:35px;

	padding:3px;

    background-color:#Faaf00; *//* background og pop up menu */

	color:#ffffff;

	opacity:0.93;  

	

}



#menu-v1 ul li a:hover

{

    line-height:35px;

	padding:3px;

	 /* background og pop up menu */

	color: #000000;

	 opacity:0.93;  

	

}



a:hover

{

 /* color:#ffbb00; */

}    



</style>









<table width="17%"   align="center" style="border:#faaf00 solid 2px;margin-top:50px;border-collapse:collapse;"  cellspacing="0" bgcolor="#414141">

  <tr>

 <!--  <td align="center" height="30px" bgcolor="#ffbb00"><font style="font-size:16px;  font-family:Helvetica;" color="#ffffff" ><a href='fieldofapp.php'  style="border:none;text-decoration:none; ">APPLICATION AREA</a></font> 

  </td>

  -->

  <td align="center" height="30px" bgcolor="#232323"><a href='fieldofapp.php' style="text-decoration:none;" ><font style="font-size:16px;  font-family:Helvetica;" color="#ffffff" >List Of Image Processing Experiments</font></a>

  </td>

  

  </tr>

  <tr>

  <td bgcolor="#414141">

  

  <ul id="menu-v1">

   

    <li><a href="sobelop.php"><span id="lifont">1) Sobel Operator
</span></a></li>

    

    <li><a href="cannyedge.php"><span id="lifont">2) Canny Edge Detection
</span></a><a href="grayscale.php"><span id="lifont">3) Gray Scale Level Generation
</span></a></li>

    

    <li><a href="histogram8.php"><span id="lifont">4) Histogram generation for 8 bit satellite imagery 
</span></a></li>

    

   <li><a href="histogram16.php"><span id="lifont">5) Histogram generation for 16 bit satellite imagery
</span></a></li>

    

    <li><a href="render.php"><span id="lifont">6) Renderers technique to display raster data
</span></a></li>

    

     <li><a href="gdalclip.php"><span id="lifont">7) Band fletch form satellite imagery</span></a><a href="gdalclip.php"><span id="lifont">7) Clipping raster data with the help of shape file
     </span></a></li>

    

    <li><a href="dooms.php"><span id="lifont">8) Histogram equalization for 8 bit satellite imagery
</span></a></li>

    

    <li><a href="insulations.php"><span id="lifont">9) Histogram equalization for 16 bit satellite imagery
</span></a></li>

    

</ul>

  </td>

 

  </tr>

  </table>