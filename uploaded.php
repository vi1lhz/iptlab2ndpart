<?php
$target_dir = "sample-files/";

// Create target folder automatically if it doesn't exist yet
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// 1. HANDLE PDF UPLOAD
if (isset($_POST['upload_pdf'])) {
    $target_file = $target_dir . basename($_FILES["pdf_file"]["name"]);
    if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file)) {
        echo "<h3>PDF Uploaded Successfully!</h3>";
        echo '<object data="' . $target_file . '" type="application/pdf" width="100%" height="600px"></object>';
    } else {
        echo "Error uploading your PDF file.";
    }
}

// 2. HANDLE AUDIO UPLOAD
if (isset($_POST['upload_audio'])) {
    $target_file = $target_dir . basename($_FILES["audio_file"]["name"]);
    if (move_uploaded_file($_FILES["audio_file"]["tmp_name"], $target_file)) {
        echo "<h3>Audio Uploaded Successfully!</h3>";
        echo '<audio controls><source src="' . $target_file . '" type="audio/mpeg">Your browser does not support the audio element.</audio>';
    } else {
        echo "Error uploading your audio file.";
    }
}

// 3. HANDLE IMAGE UPLOAD
if (isset($_POST['upload_image'])) {
    $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
    if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
        echo "<h3>Image Uploaded Successfully!</h3>";
        echo '<img src="' . $target_file . '" alt="Uploaded Image" style="max-width:100%; height:auto;">';
    } else {
        echo "Error uploading your image file.";
    }
}

// 4. HANDLE VIDEO UPLOAD
if (isset($_POST['upload_video'])) {
    $target_file = $target_dir . basename($_FILES["video_file"]["name"]);
    if (move_uploaded_file($_FILES["video_file"]["tmp_name"], $target_file)) {
        echo "<h3>Video Uploaded Successfully!</h3>";
        echo '<video width="640" height="360" controls><source src="' . $target_file . '" type="video/mp4">Your browser does not support the video tag.</video>';
    } else {
        echo "Error uploading your video file.";
    }
}

echo '<br><br><a href="index.php"><button>Go Back to Upload Portal</button></a>';
?>
