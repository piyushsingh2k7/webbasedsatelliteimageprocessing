#! C:\python27\python
import cv2
import numpy as np
import matplotlib.pyplot as plt, mpld3
from osgeo import gdal
import subprocess
import os
import glob
files = glob.glob('C:/xampp/htdocs/isroproject/admin/gdalclip/outputtiff/output2.tif')
for f in files:
      os.remove(f)

subprocess.call(["gdalwarp","-srcnodata","-dstnodata","-crop_to_cutline","-cutline","C:\\xampp\\htdocs\\isroproject\\admin\\gdalclip\\uploads\\b.shp","C:\\xampp\\htdocs\\isroproject\\admin\\gdalclip\\a.tif","C:\\xampp\\htdocs\\isroproject\\admin\\gdalclip\\outputtiff\\output2.tif"])


bgr_img = cv2.imread('C:/xampp/htdocs/isroproject/admin/gdalclip/outputtiff/output2.tif')




plt.imshow(bgr_img)
 plt.xticks([]), plt.yticks([])   # to hide tick values on X and Y axis
#plt.show()

plt.savefig("C:/xampp/htdocs/isroproject/admin/gdalclip/output.png")
mpld3.show()
while True:
    k = cv2.waitKey(0) & 0xFF    # 0xFF? To get the lowest byte.
    if k == 27: break            # Code for the ESC key

cv2.destroyAllWindows()