<?php
if (isset($_POST['upload_video'])) {
    $target_dir = "sample-files/";
    
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["video_file"]["name"]);
    
    if (move_uploaded_file($_FILES["video_file"]["tmp_name"], $target_file)) {
        echo "<h3>Video Uploaded Successfully!</h3>";
        // This embeds the HTML5 video controller player directly on the webpage
        echo '<video width="640" height="360" controls><source src="' . $target_file . '" type="video/mp4">Your browser does not support the video tag.</video>';
    } else {
        echo "Error uploading your file.";
    }
}
?>
