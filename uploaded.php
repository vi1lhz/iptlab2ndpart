<?php
if (isset($_POST['upload_pdf'])) {
    $target_dir = "sample-files/";
    
    // Create folder automatically if it doesn't exist
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["pdf_file"]["name"]);
    
    if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file)) {
        echo "<h3>PDF Uploaded Successfully!</h3>";
        // This embeds the PDF directly inline on the webpage
        echo '<object data="' . $target_file . '" type="application/pdf" width="100%" height="600px"></object>';
    } else {
        echo "Error uploading your file.";
    }
}
?>
