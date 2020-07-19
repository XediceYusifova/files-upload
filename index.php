<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Multiple File Upload</title>
</head>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple="multiple" />
    <button>Download</button>
</form>

</body>
</html>