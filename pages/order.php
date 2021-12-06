<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Orders</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/specials_carousal.css">
    <link rel="stylesheet" href="../css/navbar.css">

</head>

<?php

include('../config/db-connect.php');

session_start();

$username = $_SESSION['username'];

$name = substr($username, 0, strpos($username, "@"));

?>

<?php

$username = $_SESSION['username'];

$name = substr($username, 0, strpos($username, "@"));

?>

<body>

    <?php echo $_SESSION['username']; ?>

    <!-- Up Button -->
    <a id="floating_button" href="#"><img src="../images/icons/up_arrow.svg"></a>

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

            $sql = "SELECT `itemname` FROM orders WHERE username = '$username';";

            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                // output data of each row
                $id = 0;
                while ($row = $result->fetch_assoc()) {
                    $id = $id + 1;
        ?>
                    <div class="carousal-item" id="<?php echo $id ?>" onclick="clickCard(this)">

                        <p id="itemname<?php echo $id ?>" class="item_text"><?php echo $row["itemname"] ?></p><br>

                    </div>

        <?php
                }
            } else {
                echo "Unable to load results";
            }
        }

        ?>

    </div>


    <div class="flex-container">

    </div>


    <!-- Footer begins here -->

    <?php include('../templates/footer.php'); ?>

    <!-- Footer end here -->

    <script>
        function clickCard(div) {
            var itemname = document.getElementById('itemname' + div.id).innerHTML;
            alert("Item - " + document.getElementById('itemname' + div.id).innerHTML);
        }
    </script>
</body>

</html>