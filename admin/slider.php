<?php include('./navbar_footer/navbar.php') ?>
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

        if (isset($_FILES['images'])) {
            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                $image_name = $_FILES['images']['name'][$key];
                $image_tmp = $_FILES['images']['tmp_name'][$key];
                $image_size = $_FILES['images']['size'][$key];

                // Specify the directory where images will be uploaded
                $upload_dir = '../assets/images/slider/';

                // Remove spaces from the image filename (replace spaces with underscores)
                $image_name = str_replace(' ', '_', $image_name);

                // Create the full image path
                $image_url = $upload_dir . basename($image_name);

                // Simple validation for image size and extension (optional)
                if ($image_size > 5000000) {
                    $image_errors[] = "File $image_name is too large.";
                } elseif (!in_array(strtolower(pathinfo($image_name, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif'])) {
                    $image_errors[] = "File $image_name is not a valid image.";
                } else {
                    // Move the image to the uploads directory
                    if (move_uploaded_file($image_tmp, $image_url)) {
                        // Add the successfully uploaded image's URL to the array
                        $image_urls[] = $image_url;

                        // Insert the image URL into the database, associating it with the slider
                        $insert_image_sql = "INSERT INTO slider_images (slider_id, image_url) VALUES (?, ?)";
                        $stmt = $conn->prepare($insert_image_sql);
                        $stmt->bind_param("is", $slider_id, $image_url);  // "i" for integer, "s" for string
                        if (!$stmt->execute()) {
                            $image_errors[] = "Failed to insert image $image_name into the database.";
                        }
                        $stmt->close();
                    } else {
                        $image_errors[] = "Failed to upload image $image_name.";
                    }
                }
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


$slider = "";
$content = "";
$title = "";


?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h3>Sliders Content</h3>
                    </div>
                </div>
            </div>


            <form class="row g-3 needs-validation" action="" method="POST" enctype="multipart/form-data">



                <div class="col-md-3 position-relative mb-5">
                    <label for="validationTooltip02" class="form-label">Title</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="slider_name" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-3 position-relative mb-5">
                    <label for="validationTooltip02" class="form-label">Slide</label>
                    <input class="form-control" type="file" name="images[]" id="images" multiple accept="image/*"
                        required>
                    <?php if (file_exists($slider)) { ?>
                        <img src="<?php echo $slider; ?>" style="width:50px">
                    <?php } ?>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <textarea id='makeMeSummernote' name='content' class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-12">
                    <button type="" class="btn btn-primary"
                        style="background-color:#0d7cbc;border-color: #8833ff;">Enregistrer</button>
                    <input class="form-control" type="hidden" name="enregistrer_mail">

                </div>
            </form>

            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h3>Sliders : </h3>
                    </div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Slider</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $req = "select * from slider";
                            $query = mysqli_query($conn, $req);
                            while ($enreg = mysqli_fetch_array($query)) {
                                $id = $enreg["id"];
                                $content = $enreg["content"];
                                $title = $enreg["title"];
                                // $req1 = "select * from slider_images where slider_id=".$id;
                                // $query1= mysqli_query($conn,$req1);
                                // while($enreg1= mysqli_fetch_array($query)){
                                //     $slider = $enreg["image_url"];

                                // }
                            ?>
                                <tr>
                                    <td><?php echo $title ?></td>
                                    <td><?php echo $content ?></td>
                                    <td>
                                        <?php $req1 = "select * from slider_images where slider_id=" . $id;
                                        $query1 = mysqli_query($conn, $req1);
                                        while ($enreg1 = mysqli_fetch_array($query1)) {
                                            $slider = $enreg1['image_url'];
                                            echo '<img src=' . $slider . ' style="width : 20%"/>';
                                        }
                                        ?>
                                    </td>

                                    <td><button type="button" onclick="Supprimer('<?php echo $id; ?>')"
                                            class="btn btn-danger btn-burger"><i
                                                class="material-icons">delete_outline</i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function Supprimer(id) {
        if (confirm('Confirmez-vous cette action?')) {

            document.location.href = "./pages_supp/delete_slider.php?ID=" + id;
        }
    }

    function myFunction() {
        alert("I am an alert box!");
    }
</script>



<script type="text/javascript">
    $('#makeMeSummernote').summernote({
        height: 200,
    });
</script>
<?php include('./navbar_footer/footer.php') ?>