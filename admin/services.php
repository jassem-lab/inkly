<?php include('./navbar_footer/navbar.php') ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inkly";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('connection failed :' . mysqli_connect_error());
}


if (isset($_POST['enregistrer_mail'])) {


    $titre = $_POST["titre"];
    $description = $_POST["description"];

    $sql = "INSERT INTO `services`(`titre`,`description`) VALUES ('$titre','$description')";

    if (mysqli_query($conn, $sql)) {

        echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="services.php?ID=' . $id . '&suc=1" </SCRIPT>';
    } else {
        echo ' <div class="alert alert-custom alert-indicator-bottom indicator-danger" role="alert">
        <div class="alert-content">
            <span class="alert-title">Failed!</span>
        </div>
    </div>' . mysqli_error($conn);
    }
}

$titre = "";
$strategy = "";
$description = "";


?>

<div class="app-content">
    <?php if (isset($_GET['suc'])) { ?>
        <?php if ($_GET['suc'] == '1') { ?>
            <br />
            <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                <div class="alert-content">
                    <span class="alert-title">Success!</span>
                    <span class="alert-text">Service est mis à jour...</span>
                </div>
            </div>
    <?php }
    } ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h3>Services</h3>
                    </div>
                </div>
            </div>
            <form class="row g-3 needs-validation" action="" method="POST" enctype="multipart/form-data">
                <div class="col-md-3 position-relative mb-5">
                    <label for="validationTooltip02" class="form-label">Title</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="titre" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationTooltip02" class="form-label">Description</label>
                        <div class="card">
                            <div class="card-body">
                                <textarea id='makeMeSummernote' name='description' class="form-control"></textarea>
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
                        <h3>Projects : </h3>
                    </div>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">description</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $req = "select * from services";
                            $query = mysqli_query($conn, $req);
                            while ($enreg = mysqli_fetch_array($query)) {
                                $id = $enreg["id"];
                                $titre = $enreg["titre"];
                                $description = $enreg["description"];

                                $date = $enreg["date"];
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $titre ?>
                                    </td>
                                    <td>
                                        <?php echo $description ?>
                                    </td>
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

            document.location.href = "./pages_supp/delete_project.php?ID=" + id;
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