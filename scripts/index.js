function logOut() {
    localStorage.setItem('schoolData', null);
    reload();
}

function reload() {
    let a = document.createElement('a');
    document.body.appendChild(a);
    a.href = "index.php";
    a.click();
}

function activateMenuMobile() {

    $("#menuPhone").classList.add("actions_active")
    $(".overflow").classList.add("overflow_active")
    $("#schoolContainer").classList.add("disposeForMenu");

}

function hideMenuMobile() {
    if (window.innerWidth <= 1000) {
        $("#menuPhone").classList.remove("actions_active")
        $(".overflow").classList.remove("overflow_active")
        $("#schoolContainer").classList.remove("disposeForMenu");
    }
}

function greetUser(pseudo) {
    console.log("Run thgis shit");
    $("#greetConnectedUser").classList.remove("connectedUser_in_active");
    $("#greetConnectedUser").innerHTML = "Hi " + pseudo + " !";
}

function reloadUi() {
    setTimeout(function() {
        reload();
    }, 1000);
}

function showAddTestView() {
    console.log(idSchoolP);
    let idSchool = parseInt(idSchoolP);
    var req = new XMLHttpRequest();
    req.open('GET', 'app/controllers/getTest.php?idSchool=' + idSchool);
    req.onload = function() {
        let tests = JSON.parse(this.responseText);
        console.log(tests);
        renderUserTest(tests);
    }
    req.send();
}