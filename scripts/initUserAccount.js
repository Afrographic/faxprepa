//Getting the data
let userData = {};
let filieres = [];
if (JSON.parse(localStorage.getItem('schoolData')) != null) {
    userData = localStorage.getItem('schoolData');
    userData = JSON.parse(userData);

    greetUser(userData.pseudo);

    updateUiStateOnLogedIn();
} else {
    console.log("Loged out!");

}