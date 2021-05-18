#! C:\python27\python
import cv2
import numpy as np
import matplotlib.pyplot as plt, mpld3

img = cv2.imread('C:/xampp/htdocs/isroproject/admin/cannyedge/a.tif')
edges = cv2.Canny(img,200,0)

plt.subplot(121),plt.imshow(img,cmap = 'gray')
plt.title('Original Image'), plt.xticks([]), plt.yticks([])
plt.subplot(122),plt.imshow(edges,cmap = 'gray')
plt.title('Edge Image'), plt.xticks([]), plt.yticks([])

plt.savefig("C:/xampp/htdocs/isroproject/admin/cannyedge/output.png")
mpld3.show()