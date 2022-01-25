function addFiliere(addFIliereButton) {
    let nameFiliere = $("#nomFiliere").value;
    if (nameFiliere.length > 0) {
        enableButtonLoadingState(addFIliereButton);
        resetError();

        let idSchool = parseInt(userData.idSchool);
        // mapping the data
        let data = new FormData();
        data.append("label", nameFiliere)
        data.append("idSchool", idSchool)
            // making the request
        var req = new XMLHttpRequest();
        req.open('POST', `app/controllers/filiereRoutes.php`);
        req.onload = function() {

            let res = JSON.parse(this.responseText);
            setTimeout(function() {
                $("#nomFiliere").value = "";
                handleRes(res);
                endButtonLoadingState(addFIliereButton, "Ajouter la filiere");
            }, 1000)

        }
        req.send(data);
    } else {
        $("#errorNomFiliere").classList.add("error-active");
    }
}

function handleRes(res) {
    console.log(res);
    if (res) {
        $("#success_add_filiere").classList.add("info-active");
    } else {
        $("#errorAddFiliere").classList.add("error-active");
    }
}

function resetError() {
    $("#success_add_filiere").classList.remove("info-active");
    $("#errorAddFiliere").classList.remove("error-active");
    $("#errorNomFiliere").classList.remove("error-active");
}