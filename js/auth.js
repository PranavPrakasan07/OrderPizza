/*

firebase.auth().onAuthStateChanged((user) => {
    if (user) {
        // User is signed in, see docs for a list of available properties
        // https://firebase.google.com/docs/reference/js/firebase.User
        var uid = user.uid;
        // ...
    } else {
        // User is signed out
        // ...
    }
});

*/

function validateCredentials(userEmail, userPassword) {

    var hasUpper = userPassword.match(/[A-Z]/)

    console.log('hasUpper' + hasUpper)

    var hasLower = userPassword.match(/[a-z]/g)

    console.log('hasLower' + hasLower)

    var hasNumber = userPassword.match(/[0-9]/g)

    console.log('hasNumber' + hasNumber)


    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var isValidEmail = re.test(userEmail);
    var isValidPassword = hasLower && hasUpper && hasNumber;

    console.log('isValidEmail' + isValidEmail)
    console.log('isValidPassword' + isValidPassword)


    if (isValidEmail && isValidPassword) {
        return true;
    } else {
        return false;
    }

}

function signup() {
    var userEmail = document.getElementById('email_s').value;
    var userPassword = document.getElementById('password_s').value;

    if (validateCredentials(userEmail, userPassword) === true) {

        firebase.auth().createUserWithEmailAndPassword(userEmail, userPassword)
            .then((userCredential) => {
                // Signed in 
                var user = userCredential.user;
                // ...
                // console.log('Correct' + isValidPassword)

                window.alert("User : " + user);
                window.alert("UID : " + user.uid);

            })
            .catch((error) => {
                var errorCode = error.code;
                var errorMessage = error.message;
                // ..
                window.alert(errorCode + errorMessage);

            });

    } else {
        window.alert("Incorrect email/password");
    }

}

function signin() {
    var userEmail = document.getElementById('email_l').value;
    var userPassword = document.getElementById('password_l').value;

    if (validateCredentials() == true) {

        firebase.auth().signInWithEmailAndPassword(userEmail, userPassword)
            .then((userCredential) => {
                // Signed in
                var user = userCredential.user;
                window.alert(user.uid);
            })
            .catch((error) => {
                var errorCode = error.code;
                var errorMessage = error.message;
                window.alert(errorCode + errorMessage);

            });
    } else {
        window.alert("Incorrect email/password");
    }

}