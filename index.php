<!DOCTYPE html>
<html>
<head>
    <title>Video Upload</title>
</head>
<body>
    <h2>Step 4: Upload a Video File</h2>
    <form action="uploaded.php" method="POST" enctype="multipart/form-data">
        <label>Select Video (MP4):</label>
        <input type="file" name="video_file" accept=".mp4" required>
        <button type="submit" name="upload_video">Upload Video</button>
    </form>
</body>
</html>

