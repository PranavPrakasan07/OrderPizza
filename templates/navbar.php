<!-- NavBar Close Button -->

<div class="hamburger" onclick="toggleNavBar(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
</div>

<!-- Navbar -->
<center>
    <div class="topnav" id="topnav">
        <a href="#Home">Home</a>
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