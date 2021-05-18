#! C:\python27\python
import cv2
import numpy as np
import matplotlib.pyplot as plt, mpld3

img=cv2.imread('C:/xampp/htdocs/isroproject/admin/histogram8/a.tif')
color=('b','g','r')
for i,col in enumerate(color):
    histr=cv2.calcHist([img],[i],None,[256],[0,256])
    plt.plot(histr,color = col)
    plt.xlim([0,256])
mpld3.show()    
 