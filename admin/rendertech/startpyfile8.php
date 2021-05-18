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

						 <div id="heading">Render technique</div>
                    
 				</td>

</tr>

<tr><td align="center" style="padding:20px">


<table align="center">
<tr>
<td>

<!--   content... -->

<h3 style="color:#FFFFFF">please click on submit button to perform render technique</h3>

<table align="center"><tr><td>
<form action="../rendertech/rgbinverted2.py" method ="post">
<input type="radio" name="bandname" value="R1"> red blue green <br>
<input type="radio" name="bandname" value="R2"> red green blue  <br>
<input type="radio" name="bandname" value="B1"> blue red green  <br>
<input type="radio" name="bandname" value="B2"> blue green red <br>
<input type="radio" name="bandname" value="G1"> green red blue <br>
<input type="radio" name="bandname" value="G2"> green blue red <br>


<input type="submit" value="Run the program!!!">
</form></td></tr>
</table>
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

