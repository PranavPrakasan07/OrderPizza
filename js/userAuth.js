function checkUser() {

    var username = "user-";

    firebase.auth().onAuthStateChanged((user) => {
        if (user) {
            // User is signed in, see docs for a list of available properties
            // https://firebase.google.com/docs/reference/js/firebase.User

            const user = firebase.auth().currentUser;

            var uid = user.uid;
            username = user.email;

            location.href = "../pages/dashboard.php";

            // ...
        } else {
            // User is signed out
            // ...
            location.href = "../pages/login.php";

        }
    });
}

function fillUserData() {
    firebase.auth().onAuthStateChanged((user) => {
        if (user) {
            // User is signed in, see docs for a list of available properties
            // https://firebase.google.com/docs/reference/js/firebase.User

            document.getElementById('user_email').innerHTML = user.email;
            document.getElementById('user_rno').innerHTML = localStorage.getItem("rno");

        } else {

        }
    });
}

function validateDataLogin() {
    var username = document.getElementById('l_username').value;
    var password = document.getElementById('l_password').value;
    var regno = document.getElementById('l_rno').value;

    var isValid = validateData(username, password, regno, false);

    if (isValid) {

        firebase.auth().signInWithEmailAndPassword(username, password)
            .then((userCredential) => {
                // Signed in
                // var user = userCredential.user;
                const user = firebase.auth().currentUser;

                // ...
                alert("Hi, " + user.email);

                location.href = '../pages/dashboard.php';

            })
            .catch((error) => {
                var errorCode = error.code;
                var errorMessage = error.message;

                alert(errorMessage);
            });

    }
}

function validateDataSignin() {
    var username = document.getElementById('s_username').value;
    var password = document.getElementById('s_password').value;
    var regno = document.getElementById('s_rno').value;

    var isValid = validateData(username, password, regno, true);

    if (isValid) {

        firebase.auth().createUserWithEmailAndPassword(username, password)
            .then((userCredential) => {
                // Signed in 
                // var user = userCredential.user;
                const user = firebase.auth().currentUser;

                // ...                

                alert("Hi, " + user.email);

                location.href = '../pages/dashboard.php';


            })
            .catch((error) => {
                var errorCode = error.code;
                var errorMessage = error.message;
                // ..

                alert(errorMessage);

            });

    }
}

function validateData(username, password, regno, newAppl) {

    var isCorrect = false;

    var loginOrSignin = 'l'

    if (newAppl) {
        loginOrSignin = 's_'
    } else {
        loginOrSignin = 'l_'
    }

    if (username == "") {
        document.getElementById(loginOrSignin + 'username_error').innerHTML = "*Please enter your VIT email";
        isCorrect = false;
    }

    else if (!(username.includes("21@vitstudent.ac.in")
        || username.includes("21a@vitstudent.ac.in")
        || username.includes("21b@vitstudent.ac.in")
        || username.includes("@gmail.com"))) {
        document.getElementById(loginOrSignin + 'username_error').innerHTML = "*Please enter your VIT email";
        isCorrect = false;
    }

    else {
        document.getElementById(loginOrSignin + 'username_error').innerHTML = '&nbsp';
        isCorrect = true;
    }

    if (password == "") {
        document.getElementById(loginOrSignin + 'password_error').innerHTML = "*Please enter your password";
        isCorrect = false;
    }

    else if (password.length < 6) {
        document.getElementById(loginOrSignin + 'password_error').innerHTML = "*Password should be atleast 6 characters long";
        isCorrect = false;
    }

    else {
        document.getElementById(loginOrSignin + 'password_error').innerHTML = '&nbsp';
        isCorrect = true;
    }

    if (regno == "") {
        document.getElementById(loginOrSignin + 'rno_error').innerHTML = "*Please enter your registration number";
        isCorrect = false;
    }

    else if (regno.length != 9) {
        document.getElementById(loginOrSignin + 'rno_error').innerHTML = "*Fill in your correct registration number";
        isCorrect = false;
    }

    else {
        document.getElementById(loginOrSignin + 'rno_error').innerHTML = '&nbsp';
        localStorage.setItem("rno", regno);
        isCorrect = true;
    }

    return isCorrect;
}

function signOutUser() {
    firebase.auth().signOut().then(() => {
        // Sign-out successful.
        alert("Successfully signed out");
        location.href = '../login.php';
    }).catch((error) => {
        // An error happened.
        alert("Sign Out failed");
    });
}

