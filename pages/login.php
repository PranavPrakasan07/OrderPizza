<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>

</head>

<body>

    <center>
        <p class="title_header">Holla User!</p>

        <div class="tab_buttons">
            <div class="tablink" onclick="openPage('Login', this)">Login</div>
            <div class="tablink" onclick="openPage('Signup', this)" id="defaultOpen">Signup</div>
        </div>

        <div id="Login" class="tabcontent">
            <label for="email_l">Email</label><br>
            <input class="form_input" type="email" name="email" id="email_l" placeholder="user@gmail.com"><br><br>

            <label for="password_l">Password</label><br>
            <input class="form_input" type="password" name="password" id="password_l" placeholder="Password"><br><br>

            <div class="black_button" onclick="signin()">Login</div>

        </div>

        <div id="Signup" class="tabcontent">
            <label for="email_s">Email</label><br>
            <input class="form_input" type="email" name="email" id="email_s" placeholder="user@gmail.com"><br><br>

            <label for="password_s">Password</label><br>
            <input class="form_input" type="password" name="password" id="password_s" placeholder="Password"><br><br>

            <div class="black_button" onclick="signup()">Signup</div>

        </div>


    </center>

    <script>
        function openPage(pageName, elmnt, color = "orange") {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <script type="module">
        // Import the functions you need from the SDKs you need

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

        firebase.initializeApp(firebaseConfig);
    </script>

    <script src="../js/auth.js"></script>

</body>

</html>