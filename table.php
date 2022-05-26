<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>table</title>
    <link rel="stylesheet" href="assets/css/table.css">
    <!--from the complet website one-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
</head>
<body>
<!--    Navigation section starts here-->
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
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!--Navigation end-->

    <h1>COUNTRY HARDWARE</h1>
    <table class="table_natives">

        <tr>
            <th>NO.</th>
            <th>ITEMS</th>
            <th>DESCRIPTION</th>
            <th>IN STOCK</th>
            <th>PRICE(sh)</th>
        </tr>
        <tr>
            <td>(a)</td>
            <td><h3 class="metals_hthree, paints">Metals</h3></td>
            <td><h3 class="metals_hthree">(Deformed)</h3></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>D-8</td>
            <td>gg</td>
            <td>&#10006;</td>
            <td>500</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>D-10</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>D-12</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>D-16</td>
            <td>3/4*3/4</td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>5</td>
            <td>D-20</td>
            <td><sup>5</sup>&frasl;<sub>9</sub></td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>D-25</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>(b)</td>
            <td></td>
            <td class="metals_hthree"><h3>(Round Bars)</h3></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>R-6</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>R-8</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>R-10</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>R-12</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>R-16</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>(c)</td>
            <th class="paints">Paints</th>
            <td><h3 class="metals_hthree">(United) (Gloss & Undercoats)</h3></td>
        </tr>
        <tr>
            <td></td>
            <td>4 litre</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>900/=</td>
        </tr>
        <tr>
            <td></td>
            <td>1 litre</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>350</td>
        </tr>
        <tr>
            <td></td>
            <td><sup>1</sup>&frasl;<sub>2</sub> litre</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>500</td>
        </tr>
        <tr>
            <td>(c)</td>
            <td><h3 class="metals_hthree">Emmussion/Undercoat</h3></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>4 litre</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>550</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>1 litre</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>250</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>20 litre</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>1500</td>
        </tr>
        <tr>
            <td>4.</td>
            <td><sup>1</sup>&frasl;<sub>2</sub></td>
            <td>gg</td>
            <td>&#10004</td>
            <td>150</td>
        </tr>
        <tr>
            <td>(e)</td>
            <td><h3 class="metals_hthree">Floor Red</h3></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>4 litre</td>
            <td>gg</td>
            <td>&#10004</td>
            <td>1000/=</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>1 litre</td>
            <td></td>
            <td>&#10004</td>
            <td>400/=</td>
        </tr>
        <tr>
            <td>(f)</td>
            <td><h3 class="metals_hthree">Metal Grey</h3></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>4 Litre</td>
            <td></td>
            <td>&#10004</td>
            <td>900/=</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>1 Litre</td>
            <td></td>
            <td>&#10004</td>
            <td>350/=</td>
        </tr>
        <tr>
            <td>3.</td>
            <td><sup>1</sup><sub>2</sub></td>
            <td></td>
            <td>&#10004</td>
            <td>200/=</td>
        </tr>
        <tr>
            <td>4.</td>
            <td><sup>1</sup><sub>4</sub></td>
            <td></td>
            <td>&#10004</td>
            <td>150/=</td>
        </tr>
        <tr>
            <td>(g)</td>
            <td><h3 class="metals_hthree">Unicolor (Gloss)</h3></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>4 litre</td>
            <td></td>
            <td>&#10004</td>
            <td>2700/=</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>1 Litre</td>
            <td></td>
            <td>&#10004</td>
            <td>1750/=</td>
        </tr>
        <tr>
            <td>3.</td>
            <td><sup>1</sup><sub>2</sub></td>
            <td></td>
            <td>&#10004</td>
            <td></td>
        </tr>
        <tr>
            <td>(h)</td>
            <td><h3 class="metals_hthree">Covermatt (Unicolour)</h3></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>20 Litre</td>
            <td></td>
            <td>&#10004</td>
            <td>4800/=</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>4 Litre</td>
            <td></td>
            <td>&#10004</td>
            <td>1300/=</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>1 Litre</td>
            <td></td>
            <td>&#10004</td>
            <td>500/=</td>
        </tr>
        <tr>
            <td>4.</td>
            <td><sup>1</sup><sub>2</sub></td>
            <td></td>
            <td>&#10004</td>
            <td>$</td>
        </tr>
        <tr>
            <td>(i)</td>
            <td><h3 class="metals_hthree">(Iron sheets)</h3></td>
            <td> <h3 class="metals_hthree">(Nyumba Mabati)</h3></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>2mtrs</td>
            <td></td>
            <td>&#10004</td>
            <td>660/=</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>3mtrs</td>
            <td></td>
            <td>&#10004</td>
            <td>1000/=</td>
        </tr>
        <tr>
            <td>(j)</td>
            <td><h3 class="metals_hthree">(TRANS LUCENT)</h3></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>2mtrs</td>
            <td></td>
            <td>&#10004</td>
            <td>$</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>3mtrs</td>
            <td></td>
            <td>&#10004</td>
            <td>1600/=</td>
        </tr>
        <tr>
            <td>()</td>
            <td><h3 class="metals_hthree">(PLAIN SHEET)</h3></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>1 Roll plain sheet 32g</td>
            <td></td>
            <td>&#10004</td>
            <td>350/=</td>
        </tr>
        <tr>
            <td>()</td>
            <td></td>
        </tr>
    </table>

</body>
</html>

    <?php
}else{
    header("Location: index.php");
    exit();
}
?>