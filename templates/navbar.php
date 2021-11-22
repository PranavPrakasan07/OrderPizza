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