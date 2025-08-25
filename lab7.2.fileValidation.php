<?php
if (isset($_POST['submit'])) {
    // Check if file is uploaded
    if (isset($_FILES['File']) && $_FILES['File']['error'] == 0) {
        
        $fileName = $_FILES['File']['name'];
        $fileTmp  = $_FILES['File']['tmp_name'];
        $fileSize = $_FILES['File']['size'];
        $fileType = mime_content_type($fileTmp);

        // Allowed file types
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];

        // Max file size (2MB)
        $maxSize = 2 * 1024 * 1024;

        // Validate file type
        if (!in_array($fileType, $allowedTypes)) {
            echo "<p style='color:red;'>Invalid file type. Only JPG, PNG, GIF, and PDF are allowed.</p>";
            exit;
        }

        // Validate file size
        if ($fileSize > $maxSize) {
            echo "<p style='color:red;'>File is too large. Max 2MB allowed.</p>";
            exit;
        }
        
        echo "<p style='color:green;'>File upload Successfully</p>";

    }
}
?>
