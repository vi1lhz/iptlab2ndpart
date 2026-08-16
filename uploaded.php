<?php
if (isset($_POST['upload_image'])) {
    $target_dir = "sample-files/";
    
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
    
    if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
        echo "<h3>Image Uploaded Successfully!</h3>";
        // This displays the uploaded picture on the webpage
        echo '<img src="' . $target_file . '" alt="Uploaded Image" style="max-width:100%; height:auto;">';
    } else {
        echo "Error uploading your file.";
    }
}
?>
