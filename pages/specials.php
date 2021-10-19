<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/specials_carousal.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- Floating Action Button starts here -->

    <a id="floating_button" href="#"><img src="../images/icons/up_arrow.svg"></a>

    <!-- Floating Action Button ends here -->

    <!-- Navbar starts here -->

    <div class="navbar" id="navbar">
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
    </div>

    <!-- Navbar ends here -->


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

    <!-- Carousal ends here -->

    <script>
        (function() {
            // setup your carousels as you normally would using JS
            // or via data attributes according to the documentation
            // https://getbootstrap.com/javascript/#carousel
            $("#carousel123").carousel({
                interval: 2000
            });
            $("#carouselABC").carousel({
                interval: 3600
            });
        })();

        (function() {
            $(".carousel-showmanymoveone .item").each(function() {
                var itemToClone = $(this);

                for (var i = 1; i < 4; i++) {
                    itemToClone = itemToClone.next();

                    // wrap around if at end of item collection
                    if (!itemToClone.length) {
                        itemToClone = $(this).siblings(":first");
                    }

                    // grab item, clone, add marker class, add to collection
                    itemToClone
                        .children(":first-child")
                        .clone()
                        .addClass("cloneditem-" + i)
                        .appendTo($(this));
                }
            });
        })();
    </script>

    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function toggleNavbar() {
            var x = document.getElementById("navbar");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>

</body>

</html>