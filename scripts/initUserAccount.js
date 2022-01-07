//Getting the data
let userData = {};
if (localStorage.getItem('schoolData') != null) {
    userData = localStorage.getItem('schoolData');
    userData = JSON.parse(userData);
    console.log(userData);

    updateUiStateOnLogedIn();
} else {
    // userData = {
    //     idShool: 1
    // }

    // userData = JSON.stringify(userData);
    // localStorage.setItem('userData', userData);
    // userData = JSON.parse(userData);
}