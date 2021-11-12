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
            <a href="#Order">Order</a>
            <a href="#Contact">Contact</a>
            <a href="login.php">Login</a>

        </div>
    </center>

    <div class="flex-container" id="Benefits">

        <div class="flex-item-left">

            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player class="figma_lottie" src="https://assets1.lottiefiles.com/packages/lf20_2i1jrx6r.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>

        </div>

        <div class="flex-item-right">

            <div class="block_1">

                <p class="sub_title">Specials</p>
                <p class="content">Find your best choice!</p>

            </div>

        </div>
    </div>

    <!-- Carousal starts here -->

    <div class="carousal-container">
        <div class="carousal-item">
            THIS
        </div>
        <div class="carousal-item">
            THIS
        </div>
        <div class="carousal-item">
            THIS
        </div>
        <div class="carousal-item">
            THIS
        </div>
        <div class="carousal-item">
            THIS
        </div>
    </div>


    <!-- Carousal ends here -->

    <!-- Carousal Script begins here -->

    <!-- Carousal Script ends here -->

    <!-- Navbar toggle script -->

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


</body>

</html>