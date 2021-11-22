<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/carousal.css">
    <link rel="stylesheet" href="./css/navbar.css">

</head>

<?php

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

    <a id="floating_button" href="#"><img src="images/icons/up_arrow.svg"></a>

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
            <a href="#">Home</a>
            <a href="#Order">Order</a>
            <a href="#Specials">Specials</a>
            <a href="#Benefits">Benefits</a>
            <a href="#Contact">Contact</a>
            <a href="./pages/login.php"><?php echo $loggedin ?></a>
        </div>
    </center>


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

    <!-- Navbar starts here -->

    <!-- <div class="navbar" id="navbar">
        <div id="hoverable">
            <a href="#Home"> </a>
            <a href="#Order">Order</a>
            <a href="#Specials">Specials</a>
            <a href="#Benefits">Benefits</a>
            <a href="#Contact">Contact</a>
            <a href="./pages/login.php">Login</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">
            <i class="fa fa-bars"></i>
        </a>
    </div> -->

    <!-- Navbar ends here -->

    <div class="flex-container" id="Home">
        <div class="flex-item-left">

            <div id="block">

                <p class="title_header">Pizza Maker</p>
                <p class="tagline">Hungry? Order Now!</p>

            </div>
        </div>
        <div class="flex-item-right">
            <lottie-player class="figma_lottie" src="https://assets6.lottiefiles.com/packages/lf20_rvfycj0u.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
        </div>
    </div>

    <div class="flex-container" id="Order">
        <div class="flex-item-left">

            <div class="block">

                <p class="sub_title">Orders?</p>
                <p class="content">Get your order at your doorstep!</p>
                <div class="black_button"><a href="./pages/order.php">Order Now</a></div>

            </div>
        </div>
        <div class="flex-item-right">
            <lottie-player class="figma_lottie" src="https://assets1.lottiefiles.com/packages/lf20_ngfmgkrn.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
        </div>
    </div>


    <!-- Carousal begins here -->

    <div class="flex-container">

        <div class="flex-item-left" id="Specials">

            <div class="block">

                <p class="sub_title">Our Specials</p>
                <p class="content">Try one today!</p>
                <div class="black_button"><a href="./pages/specials.php">Find More</a></div>

            </div>
        </div>

        <div class="flex-item-right">

            <div class='wrapper'>
                <div class='carousel'>
                    <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            <img class="specials_carousal_image" src="images/pizza_images/pizza_3.png" width="150%">
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Tomato Zest</p>
                            <p class="spice">Spicy > 🌶️🌶️🌶️</p>
                        </div>
                    </div>
                    <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            <img class="specials_carousal_image" src="images/pizza_images/pizza_1.png" width="150%">
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Triple Fiesta</p>
                            <p class="spice">Spicy > 🌶️🌶️</p>
                        </div>
                    </div>
                    <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            <img class="specials_carousal_image" src="images/pizza_images/pizza_2.png" width="150%">
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Zinger Delight</p>
                            <p class="spice">Spicy > 🌶️</p>
                        </div>
                    </div>
                    <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            <img class="specials_carousal_image" src="images/pizza_images/pizza_2.png" width="150%">

                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Mushroom Marshal</p>
                            <p class="spice">Spicy > 🌶️🌶️</p>
                        </div>
                    </div>

                    <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            <img class="specials_carousal_image" src="images/pizza_images/pizza_3.png" width="150%">
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Chicken Fest</p>
                            <p class="spice">Spicy > 🌶️🌶️</p>
                        </div>
                    </div>
                    <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            <img class="specials_carousal_image" src="images/pizza_images/pizza_1.png" width="150%">
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Veg Vega</p>
                            <p class="spice">Spicy > 🌶️🌶️🌶️</p>
                        </div>
                    </div>
                    <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            <img class="specials_carousal_image" src="images/pizza_images/pizza_1.png" width="150%">
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>PizzaMaker's Spl</p>
                            <p class="spice">Spicy > 🌶️🌶️</p>
                        </div>
                    </div>
                    <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            <img class="specials_carousal_image" src="images/pizza_images/pizza_1.png" width="150%">
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Corn Fiesta</p>
                            <p class="spice">Spicy > 🌶️🌶️</p>
                        </div>
                    </div>
                    <div class='carousel__item'>
                        <div class='carousel__item-head'>
                            <img class="specials_carousal_image" src="images/pizza_images/pizza_1.png" width="150%">
                        </div>
                        <div class='carousel__item-body'>
                            <p class='title'>Binga Pizza</p>
                            <p class="spice">Spicy > 🌶️🌶️</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carousal ends here -->

    <div class="flex-container" id="Benefits">
        <div class="flex-item-left">
            <div class="block">
                <p class="sub_title">Health? ❤️</p>
                <p class="content">Enjoy home-made tasty food</p>
                <div class="black_button"><a href="./pages/benefits.php">Give me Tips</a></div>
            </div>
        </div>

        <div class="flex-item-right">
            <lottie-player class="figma_lottie" src="https://assets10.lottiefiles.com/packages/lf20_IYNhoR.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        </div>
    </div>

    <!-- Footer begins here -->

    <div class="footer" id="Contact">
        <div class="flex-container">

            <div class="flex-item-left">
                <div class="block_1">

                    <br>
                    <p class="content">Contact Us</p>

                    <div class="icons_block">

                        <a class="icons" href="#"><img src="images/icons/facebook.svg" width="32px" height="32px"></a>
                        <a class="icons" href="#"><img src="images/icons/github.svg" width="32px" height="32px"></a>
                        <a class="icons" href="#"><img src="images/icons/instagram.svg" width="32px" height="32px"></a>

                    </div>

                    <div class="icons_block">

                        <a class="icons" href="#"><img src="images/icons/google.svg" width="32px" height="32px"></a>
                        <a class="icons" href="#"><img src="images/icons/linkedin.svg" width="32px" height="32px"></a>
                        <a class="icons" href="#"><img src="images/icons/youtube.svg" width="32px" height="32px"></a>

                    </div>


                    <p class="content">Subscribe</p>

                    <div class="subscribe">
                        <input class="footer_input" type="email" name="email" placeholder="me@gmail.com">
                    </div>

                </div>

            </div>

            <div class="flex-item-right">
                <div class="block_1">

                    <p class="sub_title">Hungry?</p>
                    <p class="content">We got you covered!</p>

                    <br>
                    <hr>
                    <br>

                    <center>
                        <p class="small_text"><a href="./pages/credits.php">Credits</a></p>
                    </center>

                </div>

            </div>
        </div>
    </div>
    <!-- Footer end here -->


    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- <script>
        // Import the functions you need from the SDKs you need
        // import { initializeApp } from "firebase/app";
        // import { getAnalytics } from "firebase/analytics";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyB9E3uFoTlipw5i6Kx0P8dQLYyMhVtgUPs",
            authDomain: "orderpizza-a21be.firebaseapp.com",
            projectId: "orderpizza-a21be",
            storageBucket: "orderpizza-a21be.appspot.com",
            messagingSenderId: "950362202077",
            appId: "1:950362202077:web:4118e6014f4f579fa2a034",
            measurementId: "G-RQM88V4N7F"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
    </script> -->

</body>

</html>