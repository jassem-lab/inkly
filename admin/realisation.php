<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "inkly");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the slider name from the form
    $slider_name = $conn->real_escape_string($_POST['slider_name']);
    $content = $conn->real_escape_string($_POST['content']);
    
    // Insert the slider into the sliders table
    $insert_slider_sql = "INSERT INTO slider (title,content) VALUES ('$slider_name','$content')";
    
    if ($conn->query($insert_slider_sql) === TRUE) {
        // Get the ID of the newly inserted slider
        $slider_id = $conn->insert_id; 
        
        // Handle the uploaded images
        $image_errors = [];
        $image_urls = [];
        
        // Check if images are uploaded
        if (isset($_FILES['images'])) {
            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                $image_name = $_FILES['images']['name'][$key];
                $image_tmp = $_FILES['images']['tmp_name'][$key];
                $image_size = $_FILES['images']['size'][$key];
                
                // Specify the directory where images will be uploaded
                $upload_dir = '../assets/images/slider/';
                $image_url = $upload_dir . basename($image_name);
                
                // Simple validation for image size and extension (optional)
                if ($image_size > 5000000) {
                    $image_errors[] = "File $image_name is too large.";
                } elseif (!in_array(strtolower(pathinfo($image_name, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif'])) {
                    $image_errors[] = "File $image_name is not a valid image.";
                } else {
                    // Move the image to the uploads directory
                    if (move_uploaded_file($image_tmp, $image_url)) {
                        $image_urls[] = $image_url;
                    } else {
                        $image_errors[] = "Failed to upload image $image_name.";
                    }
                }
            }
        }

        // If there are no errors, insert images into the slider_images table
        if (empty($image_errors)) {
            $conn->begin_transaction();

            try {
                foreach ($image_urls as $image_url) {
                    $insert_image_sql = "INSERT INTO slider_images (slider_id, image_url) VALUES ($slider_id, '$image_url')";
                    $conn->query($insert_image_sql);
                }
                
                // Commit transaction
                $conn->commit();
                echo "Slider and images added successfully!";
            } catch (Exception $e) {
                // Rollback if there is any error
                $conn->rollback();
                echo "Error adding images: " . $e->getMessage();
            }
        } else {
            // Show any image errors
            foreach ($image_errors as $error) {
                echo "<p>$error</p>";
            }
        }
    } else {
        echo "Error adding slider: " . $conn->error;
    }
}
?>


<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="slider_name"> <!-- Replace with dynamic realization ID -->
    <input type="hidden" name="content"> <!-- Replace with dynamic realization ID -->
    <label for="images">Upload Images:</label>
    <input type="file" name="images[]" id="images" multiple accept="image/*">
    <button type="submit">Upload Images</button>
</form>