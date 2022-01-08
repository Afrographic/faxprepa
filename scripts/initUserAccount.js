//Getting the data
let userData = {};
if (JSON.parse(localStorage.getItem('schoolData')) != null) {
    userData = localStorage.getItem('schoolData');
    userData = JSON.parse(userData);
    console.log(userData);

    updateUiStateOnLogedIn();
} else {
    console.log("Loged out!");

}