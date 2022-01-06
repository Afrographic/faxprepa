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
        login(loginButton, name, mdp)
    }
}

function login(loginButton, name, mdp) {
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
        }, 1000);
    }
    req.send(data);
}

function handleLoginResponse(res) {
    if (!res) {
        $("#login-error").classList.add("error-active");
        return false;
    }
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