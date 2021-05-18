Web Based Satellite Image Processing and Enhancement tool using OpenCV and GDAL.

This project aims to build web based virtual laboratory for geospatial data processing analysis. 
The online image processing capabilities in web applications are very limited due to various technical limitations such as application development environment, network bandwidth, client and server hardware etc. 
Online image processing system have immense scope for training and capacity building in distance learning mode for learners of remote sensing and geospatial technologies. 
The web based image processing system provides an opportunity to witness classroom-learned theoretical concepts at work; operate instruments used in the experimental set-up; measure different quantities and thereafter analyze the experimental data; and work collaboratively


Tools are developed to perform image processing tasks such as eedge detection algorithm, histogram generation equalisation, Contrast enhancement, Clip raster with the help of shape file, Grey scale level image generation, Sobel edge detection algorithm and Canny edge detection algorithm.

Technology Used
      The software used for this project work is as follows:
	Python 2.7 and 3.4 to compile python codes.
	Notepad ++ for editing codes.
	Xampp Apache tomcat server for local web hosting on own system.
	OpenCV  python module.
	GDAL.
	Eclipse IDE for C/C++ Developers, Version: Luna Service Release 2 (4.4.2) integrated with python 2.7 interpreter with the help of eclipse plugin PyDev.


///Configure Apache to run Python CGI///


The next step is to open the httpd.conf apache configuration file located in the apache install directory in the conf directory. Search the httpd.conf file for the line. [6]
Options Indexes FollowSymLinks.
Add ExecCGI to this line. The line should now look similar to the following (NOTE: there may be more options listed):
Options Indexes FollowSymLinksExecCGI
Next, search for the following:
#AddHandlercgi-script .cgi
Uncomment this line by removing the # in front of the line, and add a .py to the end of the line. The new line should look like this:
AddHandlercgi-script .cgi .py

/////Restart Apache///


Now, the apache web server needs to be restarted. You can do this either via the Apache service located in the services control panel or via the Start -> All Programs -> Apache . . . -> Control Apache Server menu option.

///////FUTURE GOAL///////
	working on the tiff image file format so that it can overlap on the mapserver for implementation of same algorithm and output will be shown on maps.  
	Mapserver require map file and index file both so we are giving so much attention over the map file generation so that same can be implemented on BHUVAN GEO-PORTAL for better analysis of the satellite imagery.
	And also one of the major future goal of this project is to provide this web based application with the capability of all the major geospatial data processing and handling tools so that dependability to the paid software can be minimized in future.
	And also the major goal of this project is to provide a real time analysis of coal mine site area.

password to login web portal for satellite image processing- 0123456789 


