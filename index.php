
<!DOCTYPE html>
<html>
<head>
    <title>Audio Upload</title>
</head>
<body>
    <h2>Step 2: Upload an Audio File</h2>
    <form action="uploaded.php" method="POST" enctype="multipart/form-data">
        <label>Select Audio (MP3):</label>
        <input type="file" name="audio_file" accept=".mp3" required>
        <button type="submit" name="upload_audio">Upload Audio</button>
    </form>
</body>
</html>
