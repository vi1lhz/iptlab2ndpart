<!DOCTYPE html>
<html>
<head>
    <title>PDF Upload</title>
</head>
<body>
    <h2>Step 1: Upload a PDF File</h2>
    <form action="uploaded.php" method="POST" enctype="multipart/form-data">
        <label>Select PDF:</label>
        <input type="file" name="pdf_file" accept=".pdf" required>
        <button type="submit" name="upload_pdf">Upload PDF</button>
    </form>
</body>
</html>

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
