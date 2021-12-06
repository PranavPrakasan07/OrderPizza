<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Specials</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/specials_carousal.css">

</head>

<?php

include('../config/db-connect.php');

session_start();

$loggedin = "";

if (isset($_SESSION['loggedin'])) {
    $username = $_SESSION['username'];
    $loggedin = "Hi " . substr($username, 0, strpos($username, "@")) . "!";
} else {
    $loggedin = "Login";
}

?>

<body>

    <!-- Floating Action Button starts here -->

    <a id="floating_button" href="#"><img src="../images/icons/up_arrow.svg"></a>

    <!-- Floating Action Button ends here -->

<!-- NavBar Close Button -->

<div class="hamburger" onclick="toggleNavBar(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
</div>


<!-- Navbar -->
<center>
    <div class="topnav" id="topnav">
        <a href="../index.php">Home</a>
        <a href="#Contact">Contact</a>
        <!-- <a id="navbar-login" onclick="checkLogin()">Login</a> -->
    </div>
</center>


<!-- Navbar toggle script -->
<script>
    function checkLogin() {

        var text = "";

        if (document.getElementById("navbar-login").textContent == "Login") {
            text = "Login";
            location.href = "../pages/login.php";            
        } else {
            location.href = "../pages/dashboard.php";
        }
        document.getElementById("navbar-login").textContent = text;

    }

    function toggleNavBar(t) {

        toggle(t)

        var x = document.getElementById("topnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    function toggle(x) {
        x.classList.toggle("change");
    }
</script>

    <div class="flex-container" id="Benefits">

        <div class="flex-item-left">

            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player class="figma_lottie" src="https://assets1.lottiefiles.com/packages/lf20_2i1jrx6r.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>

        </div>

        <div class="flex-item-right">

            <div class="block">

                <p class="sub_title">Specials</p>
                <p class="content">Find your best choice!</p>

            </div>

        </div>
    </div>

    <p class="content">Recommended</p>

    <!-- Carousal starts here -->

    <div class="carousal-container">

        <?php
        // for ($x = 0; $x <= 10; $x++) {

        $sql = "";
        // Check connection
        if (!$conn) {
            echo "Connection failed: " . mysqli_connect_error();
        } else {

            $sql = 'SELECT `item_name`, `price`, `discount`, `ingredients` FROM items';

            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

        ?>
                    <div class="carousal-item">

                        <p id="itemname" class="item_text"><?php echo $row["item_name"] ?></p><br>
                        <p id="price" class="item_text"><?php echo "₹" . $row["price"] ?></p>
                        <p id="ingredients" class="item_text"><?php echo $row["ingredients"] ?></p>

                    </div>

        <?php
                }
            } else {
                echo "Unable to load results";
            }
        }

        ?>

    </div>


    <!-- Carousal ends here -->

    <!-- Carousal Script begins here -->

    <!-- Carousal Script ends here -->

    <!-- Footer begins here -->

    <?php include('../templates/footer.php'); ?>

    <!-- Footer end here -->

    <!-- Navbar toggle script -->

</body>

</html>