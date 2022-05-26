<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="">
<!--from the complet website one-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
</head>
<body>
<section>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php">Karatina school</a>

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
                    <a class="nav-link" href="table.php">Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!--Navigation end-->

<!--company description section starts here-->
<section>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Emobilis at a glance</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                A, ab aliquam aspernatur corporis expedita id impedit incidunt laboriosam mollitia
                nisi numquam similique. Cupiditate earum eligendi nulla quibusdam sed unde voluptate.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Expedita, explicabo incidunt placeat provident sapiente vitae voluptatum! Commodi, fuga, voluptates.
                Architecto dignissimos dolor doloribus id nam nulla sapiente ut, voluptatem voluptatum.
            </p>
        </div>
    </div>
</section>


<!--company description end-->
<!--teem section starts here-->
<section class="teem_section">
    <h3>This is our teem</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width:100%">
                <img style="height: 30vh" class="card-img-top" src="assets/images/ben-parker-OhKElOkQ3RE-unsplash%20(1).jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width:100%">
                <img style="height: 30vh" class="card-img-top" src="assets/images/michael-dam-mEZ3PoFGs_k-unsplash.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Drip</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width:100%">
                <img style="height: 30vh" class="card-img-top" src="assets/images/toa-heftiba-O3ymvT7Wf9U-unsplash.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">james Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of teem section-->

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>