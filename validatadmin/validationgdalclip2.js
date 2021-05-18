var digits = "0123456789";
// non-digit characters which are allowed in phone numbers
var phoneNumberDelimiters = "()- ";
// characters which are allowed in international phone numbers
// (a leading + is OK)
var validWorldPhoneChars = phoneNumberDelimiters + "+";
// Minimum no of digits in an international phone no.
var minDigitsInIPhoneNumber = 10;


function validateAdmin(adminform)
{   
   

 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


  if(adminform.username.value=="")
    {    
		alert("Please Enter Your UserName");
		adminform.username.style.background = 'Yellow';
		adminform.username.focus();
		adminform.username.select();
		return false;
		
	}
 else if(adminform.password.value=="") 
    {   
		alert("Please Enter Your Password");
		adminform.password.style.background = 'Yellow';
		adminform.password.focus();
		adminform.password.select();
		
		return false;
		
	}
  else {
	  
	  document.adminform.action="validateauthorization/validateuser.php";	
  }
}


function deletelogoimage(viewformlogo)
{    
    var returnvalue = false;         
  
  for (var counter=0; counter < viewformlogo.logoimage.length; counter++)
     {
	  if (viewformlogo.logoimage[counter].checked == true){ 
	        returnvalue = true;
	    }
	 
	} 
	if(viewformlogo.logoimage.checked==true)
	 {
		 returnvalue=true;
	 }
	if (returnvalue == false){ 
	alert("Please select a record");
	return(false);    
	}
	
	var yesno=confirm("Are You Sure To delete Image")
		if(yesno)
		{
		document.viewformlogo.action="deletelogosimage.php";
		
		}
		else
		{
		   return false; 	
		}
}


function validateuploadlogo(addlogoimageform)
{

  if(addlogoimageform.fileToUpload.value=="")
    {
		alert("Please Select shp image");
		addlogoimageform.fileToUpload.focus();
		addlogoimageform.fileToUpload.select();
		return false;
		
	}
  else
    {
	  document.addlogoimageform.action="../admin/gdalclip/uploadval15.php";	
	}
 
}


//viewformbanner
function deletebannerimage(viewformbanner)
{    
    var returnvalue = false;         
  
  for (var counter=0; counter < viewformbanner.bannerimage.length; counter++)
     {
	  if (viewformbanner.bannerimage[counter].checked == true){ 
	        returnvalue = true;
	    }
	 
	} 
	if(viewformbanner.bannerimage.checked==true)
	 {
		 returnvalue=true;
	 }
	if (returnvalue == false){ 
	alert("Please select a record");
	return(false);    
	}
	
	var yesno=confirm("Are You Sure To delete Image")
		if(yesno)
		{
		document.viewformbanner.action="deletebannerimage.php";
		
		}
		else
		{
		   return false; 	
		}
}


function validateuploadbanner(addlbannerimageform)
{

  if(addbannerimageform.bannerimage.value=="")
    {
		alert("Please Select image");
		addbannerimageform.bannerimage.focus();
		addbannerimageform.bannerimage.select();
		return false;
		
	}
  else
    {
	  document.addbannerimageform.action="addbannerimage.php";	
	}
 
}



function isInteger(s)
{   var i;
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function validatemajorcourse(addcourseform)
{   
 var s=addcourseform.cid.value;
   
 if((addcourseform.cid.value==null)||(addcourseform.cid.value=="") || (!isInteger(addcourseform.cid.value)))
			    {      
				       addcourseform.cid.style.background = 'Yellow';
		               alert("Please Enter a Valid Code");
   		               addcourseform.cid.focus();
		               return false;
	            }
   else  if(addcourseform.coursename.value=="")
    {    
		alert("Please Enter The Course name");
		addcourseform.coursename.style.background = 'Yellow';
		addcourseform.coursename.focus();
		addcourseform.coursename.select();
		return false;
	}
 else {
	  
	  document.addcourseform.action="addcourses.php";	
  }
}


function validatemajorcourse1(updatecourseform)
{   
 //var s=updatecourseform.cid.value;
   
 /*if((addcourseform.cid.value==null)||(addcourseform.cid.value=="") || (!isInteger(addcourseform.cid.value)))
			    {      
				       addcourseform.cid.style.background = 'Yellow';
		               alert("Please Enter a Valid Code");
   		               addcourseform.cid.focus();
		               return false;
	            }
   else 
   */
   if(updatecourseform.coursename.value=="")
    {    
		alert("Please Enter The Course name");
		updatecourseform.coursename.style.background = 'Yellow';
		updatecourseform.coursename.focus();
		updatecourseform.coursename.select();
		return false;
	}
 else {
	  
	  document.updatecourseform.action="updatemajorcourses1.php";	
  }
}
/// validation for major courses

function deletemajorcourse(viewmajorform)
{    
    var returnvalue = false;         
  
  for (var counter=0; counter < viewmajorform.cid.length; counter++)
     {
	  if (viewmajorform.cid[counter].checked == true){ 
	        returnvalue = true;
	    }
	 
	} 
	if(viewmajorform.cid.checked==true)
	 {
		 returnvalue=true;
	 }
	if (returnvalue == false){ 
	alert("Please select a record");
	return(false);    
	}
	
	var yesno=confirm("Are You Sure To delete Image")
		if(yesno)
		{
		document.viewmajorform.action="deletemajorcourses.php";
		
		}
		else
		{
		   return false; 	
		}
}

function updatemajorcourse(viewmajorform)
{    
    var returnvalue = false;         
  
  for (var counter=0; counter < viewmajorform.cid.length; counter++)
     {
	  if (viewmajorform.cid[counter].checked == true){ 
	        returnvalue = true;
	    }
	 
	} 
	if(viewmajorform.cid.checked==true)
	 {
		 returnvalue=true;
	 }
	if (returnvalue == false){ 
	alert("Please select a record");
	return(false);    
	}
	
	var yesno=confirm("Are You Sure To Update The Course")
		if(yesno)
		{
		document.viewmajorform.action="updatemajorcourses.php";
		
		}
		else
		{
		   return false; 	
		}
}

function validatelist(listform)
{
  if(listform.course.value=="-1")
          {
			  listform.course.style.background = 'Yellow';
		      alert("Please Select Course");
		      listform.course.value="-1";
		      listform.course.focus();
		      return false;
			  
		  }
	else
	{
		document.listform.action="managecoursedetails1.php";
	}
		  
}

function validatecoursedetails(addcoursedetailsform)
{
	if(addcoursedetailsform.cname.value=="")
	{
		
		alert("Please Select Course");
		addcoursedetailsform.cname.style.background = 'Yellow';
		addcoursedetailsform.cname.focus();
		      return false;
	}
	else
	{
		document.addcoursedetailsform.action="doaddcoursedeatils.php";
		
	}
}


function viewcoursedetails(viewcoursedetailsform)
{
	
	var returnvalue = false;         
  
  for (var counter=0; counter < viewcoursedetailsform.cname.length; counter++)
     {
	  if (viewcoursedetailsform.cname[counter].checked == true){ 
	        returnvalue = true;
	    }
	 
	} 
	if(viewcoursedetailsform.cname.checked==true)
	 {
		 returnvalue=true;
	 }
	if (returnvalue == false){ 
	alert("Please select a record");
	return(false);    
	}
	
	//var yesno=confirm("Are You Sure To Update The Course")
		//if(yesno)
	else{
		document.viewcoursedetailsform.action="viewcoursedetails1.php";
		
		}
		//else
		//{
		  // return false; 	
		//}
}

function deletecoursedetails(viewcoursedetailsform)
{
	
	var returnvalue = false;         
  
  for (var counter=0; counter < viewcoursedetailsform.cname.length; counter++)
     {
	  if (viewcoursedetailsform.cname[counter].checked == true){ 
	        returnvalue = true;
	    }
	 
	} 
	if(viewcoursedetailsform.cname.checked==true)
	 {
		 returnvalue=true;
	 }
	if (returnvalue == false){ 
	alert("Please select a record");
	return(false);    
	}
	
	var yesno=confirm("Are You Sure To Delete The Course")
  if(yesno)
	{
		document.viewcoursedetailsform.action="deletecoursedetails.php";

		
	}
	else
	{
		  // return false; 	
	}
}

function deletenews(viewnewsform){
	var returnvalue = false;         
  
  for (var counter=0; counter < viewnewsform.newsid.length; counter++)
     {
	  if (viewnewsform.newsid[counter].checked == true){ 
	        returnvalue = true;
	    }
	 
	} 
	if(viewnewsform.newsid.checked==true)
	 {
		 returnvalue=true;
	 }
	if (returnvalue == false){ 
	alert("Please select a record");
	return(false);    
	}
	
	var yesno=confirm("Are You Sure To Delete The Course")
  if(yesno)
	{
		document.viewnewsform.action="deletenews.php";
		
	}
	else
	{
		  return false; 	
	}
	
}

function updatenews(viewnewsform)
{
	var returnvalue = false;         
  
  for (var counter=0; counter < viewnewsform.newsid.length; counter++)
     {
	  if (viewnewsform.newsid[counter].checked == true){ 
	        returnvalue = true;
	    }
	 
	} 
	if(viewnewsform.newsid.checked==true)
	 {
		 returnvalue=true;
	 }
	if (returnvalue == false){ 
	alert("Please select a record");
	return(false);    
	}
	
	var yesno=confirm("Are You Sure To Update The Course")
  if(yesno)
	{
		document.viewnewsform.action="updatenews.php";
		
	}
	else
	{
		  return false; 	
	}
	
	
}


function addnewsevent(addnewseventform)
{
	if(addnewseventform.newsid.value=="")
	{
		
		alert("Please Enter News Id");
		addnewseventform.newsid.style.background = 'Yellow';
		addnewseventform.newsid.focus();
		 return false;
	}
	else if(addnewseventform.newsevent.value=="")
	{
		alert("Please Enter News / Event");
		addnewseventform.newsevent.style.background = 'Yellow';
		addnewseventform.newsevent.focus();
		 return false;
	}
	else
	{
		document.addnewseventform.action="addevent.php";
		
	}
}
	

function useraccountvalidate(useraccountform)
{
	if(useraccountform.password.value=="")
	{
		
		alert("Please Enter Your Password");
		useraccountform.password.style.background = 'Yellow';
		useraccountform.password.focus();
		 return false;
	}
	else
	{
		document.useraccountform.action="useraccount.php";
		
	}
}
	
function doupdatenews(viewnewsform1)	
{
	if(viewnewsform1.newsevent.value=="")
	{
		alert("Please Enter The news / event");
		viewnewsform1.newsevent.style.background = 'Yellow';
		viewnewsform1.newsevent.focus();
		 return false;
	}
	else
	{
		document.viewnewsform1.action="updatenews1.php";
	}
}
	
	