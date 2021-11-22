<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Benefits</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/carousal.css">
    <link rel="stylesheet" href="../css/navbar.css">

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
            <a href="#Contact">Contact</a>
        </div>
    </center>


    <div class="flex-container" id="Benefits">

        <div class="flex-item-left">

            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player class="figma_lottie" src="https://assets2.lottiefiles.com/packages/lf20_qX4zwY.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></lottie-player>

        </div>

        <div class="flex-item-right">

            <div class="block_1">

                <p class="sub_title">Tips</p>
                <p class="content">Eat healthy!</p>

            </div>

        </div>
    </div>


    <div class="flex-container">

        <div class="flex-item-left">

            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player class="figma_lottie" src="https://assets8.lottiefiles.com/packages/lf20_YnsM0o.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>

        </div>

        <div class="flex-item-right">

            <div class="block_1">

                <p class="content">Base your meals on higher fibre starchy carbohydrates</p>
                <p class="small_text">Starchy carbohydrates should make up just over a third of the food you eat. They include potatoes, bread, rice, pasta and cereals.</p>

            </div>

        </div>
    </div>


    <div class="flex-container">

        <div class="flex-item-left">

            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player class="figma_lottie" src="https://assets10.lottiefiles.com/temp/lf20_cEITBI.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>

        </div>

        <div class="flex-item-right">

            <div class="block_1">
                <p class="content">Eat lots of fruit and veg</p>
                <p class="small_text">It's recommended that you eat at least 5 portions of a variety of fruit and veg every day. They can be fresh, frozen, canned, dried or juiced.</p>

            </div>

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