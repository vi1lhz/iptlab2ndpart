<?php
if (isset($_POST['upload_audio'])) {
    $target_dir = "sample-files/";
    
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["audio_file"]["name"]);
    
    if (move_uploaded_file($_FILES["audio_file"]["tmp_name"], $target_file)) {
        echo "<h3>Audio Uploaded Successfully!</h3>";
        // This embeds the HTML5 audio controller player directly on the webpage
        echo '<audio controls><source src="' . $target_file . '" type="audio/mpeg">Your browser does not support the audio element.</audio>';
    } else {
        echo "Error uploading your file.";
    }
}
?>
