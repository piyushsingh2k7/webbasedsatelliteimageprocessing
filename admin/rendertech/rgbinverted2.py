#! C:\python27\python
import cv2
import numpy as np
import matplotlib.pyplot as plt, mpld3
import cgi,cgitb
form = cgi.FieldStorage()

formvalue=form.getvalue('bandname')
bgr_img = cv2.imread('C:/xampp/htdocs/isroproject/admin/rendertech/a.tif')

b,g,r = cv2.split(bgr_img)       # get b,g,r
if formvalue == 'R1':
      rgb_img = cv2.merge([r,b,g])     # switch it to rbg
elif formvalue == 'R2':	  
      rgb_img = cv2.merge([r,g,b])     # switch it to rgb
elif formvalue == 'B1':
      rgb_img = cv2.merge([b,r,g])     # switch it to brg
elif formvalue == 'B2':
      rgb_img = cv2.merge([b,g,r])     # switch it to bgr
elif formvalue == 'G1':
     rgb_img = cv2.merge([g,r,b])     # switch it to grb
elif formvalue == 'G2':
     rgb_img = cv2.merge([g,b,r])     # switch it to gbr



plt.imshow(rgb_img)
plt.xticks([]), plt.yticks([])   # to hide tick values on X and Y axis
#plt.show()

plt.savefig("C:/xampp/htdocs/isroproject/admin/rendertech/output.png")
mpld3.show()
while True:
    k = cv2.waitKey(0) & 0xFF    # 0xFF? To get the lowest byte.
    if k == 27: break            # Code for the ESC key

cv2.destroyAllWindows()