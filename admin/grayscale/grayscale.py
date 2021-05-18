#! C:\python27\python
import numpy as np
import cv2
import matplotlib.pyplot as plt, mpld3
import mpld3
img= cv2.imread('C:/xampp/htdocs/isroproject/admin/grayscale/a.tif',0)
plt.imshow(img, cmap = 'gray', interpolation = 'bicubic')
plt.xticks([]),plt.yticks([]) 
#plt.show()
plt.savefig("C:/xampp/htdocs/isroproject/admin/grayscale/output.png")
mpld3.show()
