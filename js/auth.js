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

function signup() {

    var userEmail = document.getElementById('email').value;
    var userPassword = document.getElementById('password').value;

    firebase.auth().createUserWithEmailAndPassword(userEmail, userPassword)
        .then((userCredential) => {
            // Signed in 
            var user = userCredential.user;
            // ...
            window.alert("User : " + user);
            window.alert("UID : " + user.uid);

        })
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            // ..
            window.alert(errorCode + errorMessage);

        });
}

function signin() {

    var userEmail = document.getElementById('email').value;
    var userPassword = document.getElementById('password').value;

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

}