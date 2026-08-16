<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
    <h2>Step 3: Upload an Image File</h2>
    <form action="uploaded.php" method="POST" enctype="multipart/form-data">
        <label>Select Image:</label>
        <!-- accept="image/*" allows any image file format -->
        <input type="file" name="image_file" accept="image/*" required>
        <button type="submit" name="upload_image">Upload Image</button>
    </form>
</body>
</html>
