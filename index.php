<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link rel="stylesheet" type="text/css" href="cssadmin/styles.css" /> 
 
 
 <script src="validatadmin/validation.js"></script>
</head>

<body id="bodylogin">
          

<div id="topdivlogin">

<center>
  <p><font color="#432EA7" size="+5" face="Verdana, Arial, Helvetica, sans-serif" ><B> e-virtual lab for satellite image processing</B></font></p>
</center>
<center>
<form id="loginform" name="adminform"  method="post">
    <center><h1><b>Admin Login</b></h1></center>
   
    
<!--    <input type="hidden" name="redirect" value="http://www.itwhizkid.com/index.htm"> -->
    
    <?php
		   if(isset($_REQUEST['error']))
		     {
			   echo "<center><font color='red'><b>".$_REQUEST['error']."</b></font></center>";
			  }
	        ?>	
    
    <label> <span>Username <font color="#FF0000">&nbsp;&nbsp;*</font></span>
      <input id="name" type="text" name="username" />
    </label>
    <label> <span>Password<font color="#FF0000">&nbsp;&nbsp;*</font></span>
      <input id="pswd" type="password" name="password" />
    </label>
    
    
    
    
    <center>
      <label><span></span>
       
      <input id="b" type="submit" value="submit" style="margin-top:25px" onclick="return validateAdmin(adminform)"/>
      </label>
   </center>
  
  </form>
</center>
</div>


</body>
</html>
