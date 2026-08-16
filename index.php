<!DOCTYPE html>
<html>
<head>
    <title>Lab 3b: Multi-File Upload Application</title>
</head>
<body>
    <h1>Multi-File Upload Portal</h1>
    <hr>

    <!-- FORM 1: PDF UPLOAD -->
    <h2>1. Upload a PDF File</h2>
    <form action="uploaded.php" method="POST" enctype="multipart/form-data">
        <label>Select PDF:</label>
        <input type="file" name="pdf_file" accept=".pdf" required>
        <button type="submit" name="upload_pdf">Upload PDF</button>
    </form>
    <hr>

    <!-- FORM 2: AUDIO UPLOAD -->
    <h2>2. Upload an Audio File</h2>
    <form action="uploaded.php" method="POST" enctype="multipart/form-data">
        <label>Select Audio (MP3):</label>
        <input type="file" name="audio_file" accept=".mp3" required>
        <button type="submit" name="upload_audio">Upload Audio</button>
    </form>
    <hr>

    <!-- FORM 3: IMAGE UPLOAD -->
    <h2>3. Upload an Image File</h2>
    <form action="uploaded.php" method="POST" enctype="multipart/form-data">
        <label>Select Image:</label>
        <input type="file" name="image_file" accept="image/*" required>
        <button type="submit" name="upload_image">Upload Image</button>
    </form>
    <hr>

    <!-- FORM 4: VIDEO UPLOAD -->
    <h2>4. Upload a Video File</h2>
    <form action="uploaded.php" method="POST" enctype="multipart/form-data">
        <label>Select Video (MP4):</label>
        <input type="file" name="video_file" accept=".mp4" required>
        <button type="submit" name="upload_video">Upload Video</button>
    </form>
</body>
</html>
