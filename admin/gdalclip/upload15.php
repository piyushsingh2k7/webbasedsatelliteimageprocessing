<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Multiple File Ppload with PHP to upload shape file </title>
</head>
<body>
<h1>please provide shape file and its supporting files to upload for cliping </h1>
  <form action="uploadval15.php" method="post" enctype="multipart/form-data">
    <input type="file" id="file" name="files[]" multiple="multiple" accept="all file/*" />
  <input type="submit" value="Upload!" />
</form>
</body>
</html>