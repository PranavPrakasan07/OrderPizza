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
        <a id="navbar-login" onclick="checkLogin()">Login</a>
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

            <lottie-player class="figma_lottie" src="https://assets2.lottiefiles.com/packages/lf20_qX4zwY.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></lottie-player>

        </div>

        <div class="flex-item-right">

            <div class="block">

                <p class="sub_title">Tips</p>
                <p class="content">Eat healthy!</p>

            </div>

        </div>
    </div>


    <div class="flex-container">

        <div class="flex-item-left">

            <lottie-player class="figma_lottie" src="https://assets8.lottiefiles.com/packages/lf20_YnsM0o.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>

        </div>

        <div class="flex-item-right">

            <div class="block">

                <p class="content">Base your meals on higher fibre starchy carbohydrates</p>
                <p class="small_text">Starchy carbohydrates should make up just over a third of the food you eat. They include potatoes, bread, rice, pasta and cereals.</p>

            </div>

        </div>
    </div>


    <div class="flex-container">

        <div class="flex-item-left">

            <lottie-player class="figma_lottie" src="https://assets10.lottiefiles.com/temp/lf20_cEITBI.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>

        </div>

        <div class="flex-item-right">

            <div class="block">
                <p class="content">Eat lots of fruit and veg</p>
                <p class="small_text">It's recommended that you eat at least 5 portions of a variety of fruit and veg every day. They can be fresh, frozen, canned, dried or juiced.</p>

            </div>

        </div>
    </div>

    <!-- Footer begins here -->

    <?php include('../templates/footer.php'); ?>

    <!-- Footer end here -->

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>

</html>