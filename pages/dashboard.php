<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/carousal.css">
    <link rel="stylesheet" href="../css/navbar.css">

</head>

<?php session_start();

$username = $_SESSION['username'];

$name = substr($username, 0, strpos($username, "@"));

?>

<body>

    <?php echo $_SESSION['username']; ?>

    <!-- Up Button -->
    <a id="floating_button" href="#"><img src="../images/icons/up_arrow.svg"></a>

    <!-- NavBar Toggle Button -->
    <div class="hamburger" onclick="toggleNavBar(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <!-- Navbar -->
    <center>
        <div class="topnav" id="topnav">

            <a href="../index.php">Home</a>
            <a href="#contact">Contact</a>
            <a href="#"><?php echo "Hi " . $name . "!" ?></a>

        </div>
    </center>


    <div class="flex-container">

        <div>

        </div>

    </div>


    <!-- Footer begins here -->
    <div class="footer">
        <div class="flex-container" id="contact">

            <div class="flex-item-left">
                <div class="block"><br>
                    <p class="content">Contact Us</p>

                    <div class="icons_block">

                        <a class="icons" href="#"><img src="../images/icons/facebook.svg" width="32px" height="32px"></a>
                        <a class="icons" href="#"><img src="../images/icons/github.svg" width="32px" height="32px"></a>
                        <a class="icons" href="#"><img src="../images/icons/instagram.svg" width="32px" height="32px"></a>

                    </div>

                    <div class="icons_block">

                        <a class="icons" href="#"><img src="../images/icons/google.svg" width="32px" height="32px"></a>
                        <a class="icons" href="#"><img src="../images/icons/linkedin.svg" width="32px" height="32px"></a>
                        <a class="icons" href="#"><img src="../images/icons/youtube.svg" width="32px" height="32px"></a>

                    </div>


                    <p class="content">Subscribe</p>
                    <br>

                    <div class="subscribe">
                        <input type="email" name="email" placeholder="me@gmail.com">
                    </div>

                </div>

            </div>

            <div class="flex-item-right">
                <div class="block_1">

                    <p class="sub_title">Need Help?</p>
                    <p class="content">Mail us your thoughts!</p>

                    <br>
                    <hr>
                    <br>

                    <center>
                        <p class="small_text"><a href="../pages/credits.html">Credits</a></p>
                    </center>

                </div>

            </div>
        </div>
    </div>
    <!-- Footer end here -->

    <!-- Toggle Navbar Script starts here -->
    <script>
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
    <!-- Toggle Navbar Script ends here -->


</body>

</html>