<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:../login.php');
}

include('db.php');

$mail = "";
$url = "";
$Signature = "";
$nom = "";
$logo = "";
$tel1 = "";
$tel2 = "";
$tel3 = "";
$mail1 = "";
$mail2 = "";
$mail3 = "";
$adresse = "";
$adresse2 = "";
$linkedin = "";
$facebook = "";
$instagram = "";
$tiktok = "";
$twitter = "";
$behance = "";

$req = "select * from parametres where id = 1";
$query = mysqli_query($conn, $req);
while ($enreg = mysqli_fetch_array($query)) {
    $mail = $enreg["mail"];
    $url = $enreg["url"];
    $signature = $enreg["signature"];
    $nom = $enreg["nom"];
    $logo = $enreg["logo"];
    $tel1 = $enreg["tel1"];
    $tel2 = $enreg["tel2"];
    $adresse = $enreg["adresse"];
    $twitter = $enreg["twitter"];
    $facebook = $enreg["facebook"];
    $instagram = $enreg["instagram"];
    $behance = $enreg["behance"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Admin Dashboard ">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Inkly - Admin Dashboard </title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="./assets/plugins/pace/pace.css" rel="stylesheet">
    <!-- include summernote css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- include summernote js-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Theme Styles -->
    <link href="./assets/css/main.min.css" rel="stylesheet">
    <link href="./assets/css/custom.css" rel="stylesheet">
    <link href="./assets/plugins/dropzone/min/dropzone.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/<?php echo $logo ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/<?php echo $logo ?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="#"><span class="logo-text"><img src="../assets/images/<?php echo $logo ?>" style="width : 100px ; " /></span></a>
                <div class="sidebar-user-switcher user-activity-online">

                    <!-- <span class="user-info-text">Mohamed Majdoub<br></span> -->


                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="">
                        <a href="index.php" class="active"><i
                                class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">view_agenda</i>Table de base<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="parametrage.php">Paramétrage</a>
                            </li>
                            <li>
                                <a href="presentation.php">Présentation</a>
                            </li>
                            <li>
                                <a href="slider.php">Slider</a>
                            </li>
                            <li>
                                <a href="services.php">Services</a>
                            </li>
                            <li>
                                <a href="projectType.php">Project type</a>
                            </li>
                            <li>
                                <a href="realisations.php">Réalisations</a>
                            </li>
                            <li>
                                <a href="devis.php">Gestion des devis</a>
                            </li>
                            <li>
                                <a href="HowItWorks.php">About US Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">home</i>Interface<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="parametrage.php">Menu</a>
                            </li>
                            <li>
                                <a href="presentation.php">Presentation</a>
                            </li>
                            <li>
                                <a href="slider.php">Slider</a>
                            </li>
                            <li>
                                <a href="services.php">Interface</a>
                            </li>
                            <li>
                                <a href="projectType.php">Colors</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=""><i class="material-icons-two-tone">star</i>Pages<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://localhost/inkly/"><i class="material-icons-two-tone">done</i>Visit Website</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                            class="material-icons">first_page</i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <a href="logout.php" class="btn btn-danger">log out</a>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>