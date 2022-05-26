<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="assets/css/login.css">

    <link rel="stylesheet" href="assets/css/table.css">
    <!--from the complet website one-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">

</head>
<body class="gallery_body">
<!--    Navigation section starts here-->
<section>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="index.html">Karatina school</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!--Navigation end-->

<h1 class="gallery_head">IMAGES</h1>
<section>
    <img src="assets/images/alona-gross-ARe_Kh9bOMU-unsplash.jpg" alt="">
    <img src="assets/images/alona-gross-jITimOSnMPU-unsplash.jpg" alt="">
    <img src="assets/images/andre-pierre-NYs5WM8sIT4-unsplash.jpg" alt="">
    <img src="assets/images/andrew-kliatskyi-0-3m1dw2SNI-unsplash.jpg" alt="">
    <img src="assets/images/andrew-kliatskyi-D5qS458bLrQ-unsplash.jpg" alt="">
    <img src="assets/images/dynamic-wang-uMo1PTIGIR8-unsplash.jpg" alt="">
    <img src="assets/images/eugene-evans-HS2FyJy1gIk-unsplash.jpg" alt="">
    <img src="assets/images/fatane-rahimi-MTgST9HDwkQ-unsplash.jpg" alt="">
    <img src="assets/images/andrew-kliatskyi-eeoDlzb43rs-unsplash.jpg" alt="">
    <img src="assets/images/dynamic-wang-nZn55944XjU-unsplash.jpg" alt="">
    <img src="assets/images/brecht-corbeel-E5IJvMaB9j8-unsplash.jpg" alt="">
    <img src="assets/images/brecht-corbeel-qpeKTqV0isk-unsplash.jpg" alt="">
    <img src="assets/images/bruno-adam-4L4v4vNeZFE-unsplash.jpg" alt="">
    <img src="assets/images/andrew-kliatskyi-PC01nb6VhM4-unsplash.jpg" alt="">
    <img src="assets/images/cash-WaqUiN17rf0-unsplash.jpg" alt="">
    <img src="assets/images/andrew-kliatskyi-FLnzBer2zQU-unsplash.jpg" alt="">
    <img src="assets/images/blade-lustre-0QLeCPMtCRE-unsplash.jpg" alt="">
    <img src="assets/images/brecht-corbeel-6WDI0ziG5HQ-unsplash.jpg" alt="">
    <img src="assets/images/andrew-kliatskyi-tjCuL3sBDGw-unsplash.jpg" alt="">
    <img src="assets/images/benyafez-studio-v-JCRrKFMzU-unsplash.jpg" alt="">




    <!--    additional images-->

</section>


</body>
</html>

    <?php
}else{
    header("Location: index.php");
    exit();
}
?>