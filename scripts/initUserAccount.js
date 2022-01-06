//Getting the data
let userData = {};
if (localStorage.getItem('userData') != null) {
    userData = localStorage.getItem('userData');
    userData = JSON.parse(userData);
    console.log(userData);
} else {
    // userData = {
    //     idShool: 1
    // }

    // userData = JSON.stringify(userData);
    // localStorage.setItem('userData', userData);
    // userData = JSON.parse(userData);
}