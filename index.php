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

