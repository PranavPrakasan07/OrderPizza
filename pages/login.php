<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/form.css">

    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>

    <script src="../js/userAuth.js"></script>

</head>

<?php
$servername = "localhost";
$username = "pranav";
$password = "abc.1234";
$dbname = "order_pizza";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
} else {
    echo "Connected successfully with DB";
}

?>


<?php


session_start();

if (isset($_SESSION['loggedin'])) {
    header("Location: ../pages/dashboard.php");
}

$l_username = $l_password = $l_mno = $s_username = $s_password = $s_mno = "";
$l_error_username = $l_error_password = $l_error_mno = "&nbsp;";
$s_error_username = $s_error_password = $s_error_mno = "&nbsp;";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $l_username = test_input($_POST["l_username"]);
    $l_password =  test_input($_POST["l_password"]);
    $l_mno =  test_input($_POST["l_rno"]);
    $s_username =  test_input($_POST["s_username"]);
    $s_password =  test_input($_POST["s_password"]);
    $s_mno =  test_input($_POST["s_rno"]);

    $salt = 'UsernameSalt012';

    $l_error_username = validateData($l_username);
    $l_error_password = validateData($l_password);
    $l_error_mno = validateData($l_mno);
    $s_error_username = validateData($s_username);
    $s_error_password = validateData($s_password);
    $s_error_mno = validateData($s_mno);

    if (($l_username != "" && $l_password != "" && $l_mno != "")) {
        echo "Login";

        $_SESSION['username'] = $l_username;
        $_SESSION['password'] = sha1($l_password . $salt);
        $_SESSION['mobile'] = $l_mno;
        $_SESSION['loggedin'] = true;

        $sql = "";
        // Check connection
        if (!$conn) {
            echo "Connection failed: " . mysqli_connect_error();
        } else {
            echo "Connected successfully done!" . "<br>";

            $sql = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password';";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Success" . "<br>";
                }
                header("Location: ../pages/dashboard.php");
                exit;
            } else {
                echo "0 results";
            }

            mysqli_free_result($result);

            mysqli_close($conn);

        }
    } else if (($s_username != "" && $s_password != "" && $s_mno != "")) {
        echo "Signup";

        $_SESSION['username'] = $s_username;
        $_SESSION['password'] = sha1($s_password . $salt);
        $_SESSION['mobile'] = $s_mno;
        $_SESSION['loggedin'] = true;

        // Check connection
        if (!$conn) {
            echo "Connection failed: " . mysqli_connect_error();
        } else {
            echo "Connected successfully done";

            $sql = "INSERT INTO users(Username, Password, Contact)  VALUES ('$s_username', '$s_password', '$s_mno')";

            if (mysqli_query($conn, $sql)) {
                echo "Success";
                header("Location: ../pages/dashboard.php");
                exit;
            } else {
                echo "Query error : " . mysqli_error($conn);
            }
        }
    } else {
        echo "Error";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateData($data)
{

    $error = "";

    if (empty($data)) {
        $error = "Please fill this field";
    } else {
        $error = "";
    }

    return $error;
}

?>

<body>

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

        </div>
    </center>

    <div class="flex-container">
        <div class="flex-item-left">

            <!-- Login/Signin Card -->

            <div class="card">

                <div class="form-container">

                    <!-- Login Toggle -->
                    <div class="flex-form-left">
                        <div id="login_header" class="tagline_active" style="padding-left: 0px; margin-left: 0;" onclick="enableLogin(this)">Login</div>
                    </div>

                    <!-- Signin Toggle -->
                    <div class="flex-form-right">
                        <div id="signin_header" class="tagline_inactive" style="padding-left: 0px; margin-left: 0;" onclick="enableSignin(this)">Signin</div>
                    </div>

                </div>

                <br>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <!-- Login Form -->
                    <table id="login_table">
                        <tr>
                            <td><label for="l_username">Username</label></td>
                            <td> <input id="l_username" name="l_username" type="email" placeholder="me@gmail.com"><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p id="l_username_error" name="l_username_error" class="error_message"><?php echo $l_error_username; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="l_password">Password</label></td>
                            <td> <input id="l_password" name="l_password" type="password" placeholder="Password"><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p id="l_password_error" name="l_password_error" class="error_message"><?php echo $l_error_password; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="l_rno">Mobile Number</label></td>
                            <td> <input id="l_rno" name="l_rno" type="text" placeholder="+91 9191919191"><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p id="l_rno_error" name="l_rno_error" class="error_message"><?php echo $l_error_mno; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"> <input id="login_button" name="login_button" class="button_style" class="button_style" type="submit" value="Login" style="background-color: white;"><br></td>
                        </tr>
                    </table>

                    <!-- Signin Form -->
                    <table id="signin_table" style="display: none;">
                        <tr>
                            <td><label for="s_username">Username</label></td>
                            <td> <input id="s_username" name="s_username" type="email" placeholder="me@gmail.com"><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p id="s_username_error" name="s_username_error" class="error_message"><?php echo $s_error_username; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="s_password">Password</label></td>
                            <td> <input id="s_password" name="s_password" type="password" placeholder="Password"><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p id="s_password_error" name="s_password_error" class="error_message"><?php echo $s_error_password; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="s_rno">Mobile Number</label></td>
                            <td> <input id="s_rno" name="s_rno" type="text" placeholder="+91 9191919191"><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p id="s_rno_error" name="s_rno_error" class="error_message"><?php echo $s_error_mno; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"> <input id="signin_button" class="button_style" class="button_style" type="submit" value="Sign in" style="background-color: white;"><br></td>
                        </tr>
                    </table>

                </form>
            </div>

        </div>

        <!-- Lottie -->
        <div class="flex-item-right">
            <lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_ifegals2.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
        </div>

    </div>

    <br>
    <br>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

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

    <!-- Toggle Login/Signin Script starts here -->
    <script>
        function enableSignin(x) {
            document.getElementById('login_table').style.display = 'none';
            document.getElementById('signin_table').style.display = 'block';

            document.getElementById('signin_header').className = 'tagline_active'
            document.getElementById('login_header').className = 'tagline_inactive'

        }

        function enableLogin(x) {
            document.getElementById('signin_table').style.display = 'none';
            document.getElementById('login_table').style.display = 'block';

            document.getElementById('login_header').className = 'tagline_active'
            document.getElementById('signin_header').className = 'tagline_inactive'
        }
    </script>
    <!-- Toggle Login/Signin Script ends here -->

</body>

</html>