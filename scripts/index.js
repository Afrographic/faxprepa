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

function showAddTestViewProxy() {
    let idSchool = parseInt(userData.idSchool);
    var req = new XMLHttpRequest();
    req.open('GET', `app/controllers/filiereRoutes.php?idSchool=${idSchool}`);
    req.onload = function() {
        let res = JSON.parse(this.responseText);
        // saving the filieres
        filieres = res;
        console.log(filieres);
        handleResSQTVP(res);
    }
    req.send();
}

function loadFiliere() {
    let filiereTemplate = '';
    filieres.forEach(function(filiereItem) {
        filiereTemplate += `
          <option value=${filiereItem.idFiliere}>${filiereItem.label}</option>
        `
    });
    $("#filieres").innerHTML = filiereTemplate;
}

function handleResSQTVP(res) {
    if (res.length > 0) {
        loadFiliere();
        showrouterScreen("addSubject");
    } else {
        showrouterScreen("ajouterFiliere");
    }
}