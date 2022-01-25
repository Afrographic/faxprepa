<h1>Ajouter une filiere</h1>
<div class="formContainer">
    <div class="form">
        <div class="formItem">
            <div class="label">Nom de la filiere</div>
            <input class="input" placeholder="Entrez le nom de la filiere" id="nomFiliere" />
            <div class="errorField" id="errorNomFiliere">
                <img src="images/project/warning.png" alt="">
                <span>Veuillez entrez le nom de la matiere!</span>
            </div>
        </div>
    </div>

    <div class="errorField" id="errorAddFiliere">
        <img src="images/project/warning.png" alt="">
        <span>Cette filiere existe deja!</span>
    </div>
    <div class="info" id="success_add_filiere">
        <img src="images/project/info.png" alt="">
        <span>Filiere ajouter avec succes!</span>
    </div>
    <div class="button CTAButton" onclick="addFiliere(this)" id="addFiliereButton">Ajouter la filiere</div>
</div>