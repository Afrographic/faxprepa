function loginProxy(loginButton) {
    $("#login-error").classList.remove("error-active");
    let fieldsClean = true;
    let name = $('#nameLogin').value;
    let mdp = $('#mdpLogin').value;
    fieldsClean = toggleErrorField(name, 'name');
    fieldsClean = toggleErrorField(mdp, 'mdp');

    if (fieldsClean) {
        loginButton.innerHTML = '';
        loginButton.classList.add("loading");

        loginSchool(loginButton, name, mdp)
    } else {
        // console.log("fuck!");
    }
}

function loginSchool(loginButton, name, mdp) {
    console.log("Make the request");
    console.log("fuck!");
    let data = new FormData();
    data.append('name', name)
    data.append('mdp', mdp)
    let req = new XMLHttpRequest();
    req.open("POST", "app/controllers/login.php");
    req.onload = function() {
        let res = JSON.parse(this.responseText);
        setTimeout(function() {
            loginButton.classList.remove("loading");
            loginButton.innerHTML = 'Se connecter';
            handleLoginResponse(res);

            console.log(res);
        }, 1000);
    }
    req.send(data);
}

function handleLoginResponse(res) {
    if (res.status == 404) {
        $("#login-error").classList.add("error-active");

    } else {
        $("#successLogin").classList.add("info-active");
        let schoolData = JSON.stringify(res.schoolData);
        localStorage.setItem('schoolData', schoolData);
        closeLoginScreen();
    }
}

function closeLoginScreen() {
    scrollToBottomOfHtmlElement($('#registerForm'));
    setTimeout(function() {
        closerouterScreen();
        updateUiStateOnLogedIn();
    }, 1000);
}

function toggleErrorField(inputField, parentNode) {
    if (inputField.trim().length == 0) {
        $(`#${parentNode} .errorField`).classList.add("error-active");
        return false;
    } else {
        $(`#${parentNode} .errorField`).classList.remove("error-active");
        return true;
    }
}

function updateUiStateOnLogedIn() {
    $("#publishSubjectUserLogedIn").classList.remove("button-invisible");
    $("#connectUser").classList.add("button-invisible")
    $("#registerButtonFromIndex").classList.add("button-invisible")
}