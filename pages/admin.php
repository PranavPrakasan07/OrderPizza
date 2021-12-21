<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/specials_carousal.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <style>
        table {
            border: 0;
            border-collapse: collapse;
            text-align: center;
        }

        .confirm_button{
            color: #D6EEEE;
        }

        /* tr:nth-child(even) {
            background-color: rgba(150, 212, 212, 0.4);
        } */
        tr:hover {background-color: #D6EEEE;}

        /* th:nth-child(even),
        td:nth-child(even) {
            background-color: rgba(150, 212, 212, 0.4);
        } */
    </style>

</head>


<?php

function addItem($conn, $username)
{

    $item_name = $_COOKIE['order'];

    // Check connection
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
    } else {
        $sql = "INSERT INTO orders(username, itemname, dispatch, delivered)  VALUES ('$username', '$item_name', 1, 0)";

        if (mysqli_query($conn, $sql)) {
            echo "Success";
            exit;
        } else {
            echo "Query error : " . mysqli_error($conn);
        }
    }
}

?>

<?php
include('../config/db-connect.php');
?>

<?php

// delete record
if (isset($_POST['update'])) {

    $oid = $_POST['id'];
    // $query = $link->prepare( "UPDATE orders SET delivered=1 WHERE order_id=?" );
    // $query->bind_param( "s", $oid );
    // $query->execute();

    $query = "UPDATE orders SET delivered=1 WHERE order_id=$oid";
    $result = mysqli_query($conn, $query);
}

?>

<body>

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

    <p class="content" align=center>Orders</p>

    <br>

    <table border="1" align=center>

        <tr>
            <th>Order ID</th>
            <th>Username</th>
            <th>Itemname</th>
            <th>Deliver</th>
        </tr>

        <?php

        $query = "SELECT * FROM orders WHERE delivered = 0;";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td>" . $row["order_id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["itemname"] . "</td>";

                echo "<td><form action=admin.php method='POST'>
                <input type=hidden name=id value=" . $row["order_id"] . " >
                <input type=submit value=Confirm name=update >
                </form>
                </td>";
                echo "</tr>";
            }
        } else {
            die("0 results");
        }
        ?>

    </table>

    <br><br>

    <!-- Footer begins here -->

    <?php include('../templates/footer.php'); ?>

    <!-- Footer end here -->

</body>

</html>