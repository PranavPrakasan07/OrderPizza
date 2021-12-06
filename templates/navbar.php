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
        <a href="../pages/order.php">Order</a>
        <a href="../pages/specials.php">Specials</a>
        <a href="../pages/benefits.php">Benefits</a>
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